<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\TDWrapper;

class ContentUtilizeController extends Controller
{
    // 更新ボタン押下回数 
    public function getReloadPushCount(Request $request){
#        $tdWrraper = new TDWrapper();
#        $sql = $tdWrraper->getReloadPushCountSql($request);
#        $result = $tdWrraper->getResultWithPresto($sql);
        $result = array(
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
        return view('push', compact('result'));
    }
}
