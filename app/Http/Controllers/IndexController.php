<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
        return view('index');
    }
}
