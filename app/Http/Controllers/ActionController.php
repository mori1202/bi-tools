<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActionRequest;

class ActionController extends Controller
{
    #TODO
    public function monthly(){
        return view('action');
    }
    //
    public function monthlyTotal(Request $request){

        # 入力値の取得
        $inputs = [
          'year'       => $request->route('year'),
          'month'      => $request->route('month'),
          'year-month' => $request->route('year') . '-' . $request->route('month') . '-01'
        ];

        $validator = Validator::make($inputs, [
            'year'       => 'bail|required|digits:4',
            'month'      => 'bail|required|digits:2',
            'year-month' => 'required|date',
        ],[
            'required'   => 'The :attribute field is required.',
            'date'       => 'The :attribute field is invalid date.',
        ]);

        if($validator->fails()){
            $errorMsg = '';
            foreach($validator->errors()->all() as $msg){
                $errorMsg .= $msg;
            }
            return ['result', $errorMsg];
        }

        return ['date' => $request->route('year') . '-' . $request->route('month')];
   
    }
    /* カスタムリクエストでのバリデーション用仮関数*/
    public function monthlyTotalCsv(ActionRequest $request){
    }
}
