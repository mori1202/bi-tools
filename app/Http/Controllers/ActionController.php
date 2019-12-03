<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActionRequest;
use App\Libs\queryValidator;

class ActionController extends Controller
{
    # url:root/action/monthly
    public function monthly(){
        return view('action');
    }

    // url:root/action/monthly/YYYY-MM.json
    public function monthlyTotal(Request $request){
        $validator = new queryValidator($request,  'YearMonth');
        $errorMsg  = $validator->validate();

        if(!is_null($errorMsg)){ return ['errorMsg' => $errorMsg ]; }

        #TODO ex: TDWrapper->ActionMonthlyLabel($baseYearMonth);
        $data['label'] = ['Jan', 'Feb', 'Mar', 'Apr', 'Mar', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        #TODO ex: $sql  = TDWrapper->getActionMonthlySql($request);
        #TODO ex: $data = TDWrapper->getResultWithPresto($sql);
        $tels = [];
        $webs = [];
        for($i=0;$i<12;$i++){
            $tels[] = rand(200,3000);
            $webs[] = rand(500,8000);
        }
        $data['tel']   = $tels;
        $data['web']   = $webs;

        return $data;
    }
    // url:root/action/daily/YYYY-MM-DD.json
    public function dailyTotal(Request $request){
        $validator = new queryValidator($request,  'YearMonthDay');
        $errorMsg  = $validator->validate();

        if(!is_null($errorMsg)){ return ['errorMsg' => $errorMsg ]; }

        #TODO ex: TDWrapper->ActionDailylyLabel($baseYearMonthDay);
        $data['label'] = ['2019-02-07','2019-02-08','2019-02-09','2019-02-10','2019-02-11','2019-02-12','2019-02-13','2019-02-14','2019-02-15','2019-02-16','2019-02-17','2019-02-18','2019-02-19','2019-02-20','2019-02-21','2019-02-22','2019-02-23','2019-02-24','2019-02-25','2019-02-26','2019-02-27','2019-02-28','2019-03-01','2019-03-02','2019-03-03','2019-03-04','2019-03-05','2019-03-06','2019-03-07','2019-03-08',];

        $tels = [];
        $webs = [];
        for($i=0;$i<30;$i++){
            $tels[] = rand(20,300);
            $webs[] = rand(50,800);
        }
        $data['tel']   = $tels;
        $data['web']   = $webs;

        return $data;
    }
    // url:root/action/type/YYYY-MM-DD.json
    public function type(Request $request){
        $validator = new queryValidator($request,  'YearMonth');
        $errorMsg  = $validator->validate();
        if(!is_null($errorMsg)){ return ['errorMsg' => $errorMsg ]; }

        #TODO TDから取得する
        $data['tel']   = [rand(3000, 50000)];
        $data['web']   = [rand(300,10000)];

        return $data;
    }
    // url:root/action/type_contents/YYYY-MM-DD.json
    public function typeContents(Request $request){
        $validator = new queryValidator($request,  'YearMonth');
        $errorMsg  = $validator->validate();

        if(!is_null($errorMsg)){ return ['errorMsg' => $errorMsg ]; }

        #TODO TDから取得する
        $data = [];
        for($i=0;$i<17;$i++){
            $data[] = rand(20,300);
        }

        return $data;
    }

    /* カスタムリクエストでのバリデーション用仮関数      */
    /* -> ValidateError 時はリクエスト画面へリダイレクト */
    public function monthlyTotalCsv(ActionRequest $request){
    }
}
