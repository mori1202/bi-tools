<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use TreasureData_Autoloader;
use TreasureData_APIFactory;

class IndexController extends Controller
{
    public function index(){
#        $dateStr = sprintf('%04d-%02d-01', '2019', '03');
#        $date = new Carbon($dateStr);
#        $days = $date->daysInMonth;
#
#        // 当月1日を含む週の日曜日を取得する
#        $date->subDay($date->dayOfWeek);
#
#        $count = $date->dayOfWeek + $days;
#
#        // 当月の最終日
#        $endDate = $date->endOfMonth();
#        $endDate->dayOfWeek;
#
#        // 当月最終日を含む週の土曜日を取得する
#        $delta = 6 - $endDate->dayOfWeek;
#        $count += $delta;
#
#        $count = ceil($count / 7) * 7;
#        $dates = [];
#
#        for ($i = 0; $i < $count; $i++, $date->addDay()) {
#            $dates[] = $date->copy();
#        }
# 
#        return view('index', compact('hoge' ,'dates'));
        $hoge = array(
['2019-02-01', 1],
['2019-02-02', 2],
['2019-02-03', 1],
['2019-02-04', 2],
['2019-02-05', 2],
['2019-02-06', 1],
['2019-02-07', 2],
['2019-02-08', 1],
['2019-02-09', 1],
['2019-02-10', 2],
['2019-02-11', 1],
['2019-02-12', 1],
['2019-02-13', 1],
['2019-02-14', 3],
['2019-02-15', 1],
['2019-02-16', 1],
['2019-02-17', 1],
['2019-02-18', 1],
['2019-02-19', 2],
['2019-02-20', 2],
['2019-02-21', 1],
['2019-02-22', 2],
['2019-02-23', 2],
['2019-02-24', 2],
['2019-02-25', 2],
['2019-02-26', 3],
['2019-02-27', 1],
['2019-02-28', 2]
        );
        return view('index', compact('hoge'));
    }

}
