<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SalesComment extends Controller
{
    //
    public function getSalesComment()
    {
    	$sub=DB::table('user_browse_histories')->orderBy('created_at', 'desc')->limit('10')->toSql();
    	$user=DB::table(DB::raw("({$sub}) as A"))->select('property_no')->orderBy('stay_time', 'desc')->limit('1')->toSql();
    	// $saleTalk=DB::table('sentences')->select('sentence_content')->where('sentence_id', '6962807667')->where('property_no', DB::raw("({$user})"))->orderByRaw("RAND()")->limit(1)->toSql();
    	// $saleTalk=DB::table('sentences')->select('sentence_content')->where('sentence_id', 'v2_s12')->where('property_no', 6962807667)->orderByRaw("RAND()")->limit(1)->pluck('sentence_content');
    	$saleTalk=DB::table('informations')
    					->leftJoin('sentences', 'sentences.property_no', '=', 'informations.property_id')
    					->select('informations.train_subway_station_1', 'informations.price_1', 'informations.floor_plan', 'informations.property_category', 'sentences.sentence_content')
    					->where('informations.property_id', 157923)->where('sentences.factor_code', '>=', 16)->whereIn('sentences.sentence_id', array("v2_s12", "v2_s22", "v2_s32"))
    					->orderByRaw("RAND()")->limit(1)->get();
        $year='1994';
        return view('index-pc',['saleTalk' => $saleTalk]);
    }
}

// SELECT informations.train_subway_station_1, informations.price_1 /10000, informations.floor_plan, informations.property_category, sentences.sentence_content  FROM `gfl-testgfl`.informations left join
// `gfl-testgfl`.sentences on sentences.property_no = informations.property_id
// where informations.property_id = 232671 and sentences.sentence_id = 'v2_s12' order by RAND() limit 1;



// SELECT informations.train_subway_station_1, informations.price_1 /10000, informations.floor_plan, informations.property_category, sentences.sentence_content  FROM `gfl-testgfl`.informations left join
// `gfl-testgfl`.sentences on sentences.property_no = informations.property_id
// where informations.property_id = 232671 and sentences.factor_code > 32 and sentences.sentence_id in  ('v2_s12', 'v2_s22', 'v2_s32') order by RAND() limit 1;