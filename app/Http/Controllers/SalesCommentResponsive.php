<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SalesCommentResponsive extends Controller
{
    //
    public function getSalesComment()
    {
    	$sub=DB::table('user_browse_histories')->orderBy('created_at', 'desc')->limit('10')->toSql();
    	$user=DB::table(DB::raw("({$sub}) as A"))->select('property_no')->orderBy('stay_time', 'desc')->limit('1')->toSql();
    	$saleTalk=DB::table('informations')
    					->leftJoin('sentences', 'sentences.property_no', '=', 'informations.property_id')
    					->select('informations.train_subway_station_1', 'informations.price_1', 'informations.floor_plan', 'informations.property_category', 'sentences.sentence_content')
    					->where('informations.property_id', DB::raw("({$user})"))->where('sentences.factor_code', '>=', 16)->whereIn('sentences.sentence_id', array("v2_s12", "v2_s22", "v2_s32"))
    					->orderByRaw("RAND()")->limit(1)->get();
        $year='1994';
        return view('index',['saleTalk' => $saleTalk]);
    }
}


// SELECT informations.train_subway_station_1, informations.price_1 /10000, informations.floor_plan, informations.property_category, sentences.sentence_content  
// FROM `gfl-testgfl`.informations left join
// `gfl-testgfl`.sentences on sentences.property_no = informations.property_id
// WHERE 
//     informations.property_id = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) 
//     and sentences.factor_code > 16 
//     and sentences.sentence_id in  ('v2_s12', 'v2_s22', 'v2_s32') order by RAND() limit 1;