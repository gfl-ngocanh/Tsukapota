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
    	$saleTalk=DB::table('informations')
    					->leftJoin('sentences', 'sentences.property_no', '=', 'informations.property_id')
    					->select('sentences.property_no', 'informations.train_subway_station_1', 'informations.price_1', 'informations.floor_plan', 'informations.property_category', 'sentences.sentence_content')
    					->where('informations.property_id', DB::raw("({$user})"))->where('sentences.factor_code', '>=', 16)->whereIn('sentences.sentence_id', array("v2_s12", "v2_s22", "v2_s32"))
    					->orderByRaw("RAND()")->limit(1)->get();

        // $salesComment1=DB::table('salestalk_reports')
        //                     ->select('salestalk')
        //                     ->where('common_property_no', DB::raw("({$user})"))
        //                     ->where('case_conditions', 'LIKE', DB::raw("CONCAT(`%`, DB::raw('({$subsql})'), `%`)"))

        $salesComment1=DB::select("SELECT salestalk FROM `salestalk_reports` WHERE common_property_no=(SELECT `common_property_no` from informations WHERE property_id =  (SELECT `property_no` FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1)) and case_conditions LIKE CONCAT('%', (select
  max(case when rank=1 then name end) as `highest value`
from
(
  select  common_property_no, @rownum := @rownum + 1 AS rank, name, amt from (
    select common_property_no, age as amt, 'age' as name from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, closeness, 'closeness' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, size, 'size' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, convenient, 'convenient' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, security, 'security' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, comfortable, 'comfortable' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1)
  ) amounts, (SELECT @rownum := 0) r
  order by amt desc
  limit 2
) top2
group by common_property_no), '%') limit 5");
        
        $salesComment2=DB::select("SELECT salestalk FROM `salestalk_reports` WHERE common_property_no=(SELECT `common_property_no` from informations WHERE property_id =  (SELECT `property_no` FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1)) and case_conditions LIKE CONCAT('%', (select
  max(case when rank=2 then name end) as `highest value`
from
(
  select  common_property_no, @rownum := @rownum + 1 AS rank, name, amt from (
    select common_property_no, age as amt, 'age' as name from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, closeness, 'closeness' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, size, 'size' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, convenient, 'convenient' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, security, 'security' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) union
    select common_property_no, comfortable, 'comfortable' from charts where property_no = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1)
  ) amounts, (SELECT @rownum := 0) r
  order by amt desc
  limit 2
) top2
group by common_property_no), '%') limit 1");

        // $selectAge=DB::table('charts')->select('common_property_no', "'age' as amt", "'age' as name")
        //                 ->where('property_no', DB::raw("({$user})"));
        // $selectCloseness=DB::table('charts')->select('common_property_no', "'closeness' as amt", "'closeness' as name")
        //                 ->where('property_no', DB::raw("({$user})"));
        // $selectSize=DB::table('charts')->select('common_property_no', "'size' as amt", "'size' as name")
        //                 ->where('property_no', DB::raw("({$user})"));
        // $selectConvenient=DB::table('charts')->select('common_property_no', "'convenient' as amt", "'convenient' as name")
        //                 ->where('property_no', DB::raw("({$user})"))->toSql();
        // $selectSecurity=DB::table('charts')->select('common_property_no', "'security' as amt", "'security' as name")
        //                 ->where('property_no', DB::raw("({$user})"));
        // $selectComfortable=DB::table('charts')->select('common_property_no', "'comfortable' as amt", "'comfortable' as name")
        //                 ->where('property_no', DB::raw("({$user})"));
        // $selectTop6=DB::table($selectAge)->union($selectCloseness)
        //                 ->union($selectSize)->union($selectConvenient)
        //                 ->union($selectSecurity)->union($selectComfortable)
        //                 ->select('common_property_no', "'@rownum := @rownum + 1' as rank", 'name', 'amt')->toSql();


        $year='1994';
        return view('index-pc',['saleTalk' => $saleTalk, 'salesComment1' => $salesComment1, 'salesComment2' => $salesComment2]);
    }
}


// SELECT informations.train_subway_station_1, informations.price_1 /10000, informations.floor_plan, informations.property_category, sentences.sentence_content  
// FROM `gfl-testgfl`.informations left join
// `gfl-testgfl`.sentences on sentences.property_no = informations.property_id
// WHERE 
//     informations.property_id = (SELECT property_no FROM (SELECT * FROM `gfl-testgfl`.user_browse_histories ORDER BY user_browse_histories.created_at desc limit 10) as A ORDER BY stay_time desc limit 1) 
//     and sentences.factor_code > 16 
//     and sentences.sentence_id in  ('v2_s12', 'v2_s22', 'v2_s32') order by RAND() limit 1;