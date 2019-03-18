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
    public function monthlyTotal(Request $request){

        $validator = Validator::make(
            $this::getInputsFromRootParamater($request), // Validate対象パラメータ
            $this::getMonthlyTotalJsonDFVProfile(),      // Validate用Profile
            $this::getMonthlyTotalJsonDFVErrorMsg()      // Validateエラーカスタムメッセージ（optional）
        );

        if($validator->fails()){
            $errorMsg = null;
            foreach($validator->errors()->all() as $msg){
                $errorMsg[] = $msg;
            }
            return ['result', implode(',',$errorMsg)];
        }

        return ['date' => $request->route('year') . '-' . $request->route('month')];
   
    }
    /* カスタムリクエストでのバリデーション用仮関数      */
    /* -> ValidateError 時はリクエスト画面へリダイレクト */
    public function monthlyTotalCsv(ActionRequest $request){
    }

   
    /* 月別アクション総数Json出力用パラメータ取得関数 */
    private function getInputsFromRootParamater(Request $request){
        return [
          'year'       => $request->year,
          'month'      => $request->month,
          'year-month' => $request->year . '-' . $request->month . '-01'
        ];
    }

    /* 月別アクション総数Json出力用パラメータValidateProfile取得関数 */
    private function getMonthlyTotalJsonDFVProfile(){
        return [
            'year'       => 'bail|required|digits:4',
            'month'      => 'bail|required|digits:2',
            'year-month' => 'required|date',
        ];
    }

    /* 月別アクション総数Json出力用パラメータValidateエラーメッセージ取得関数 */
    private function getMonthlyTotalJsonDFVErrorMsg(){
        return [
            'required'   => 'The :attribute field is required.',
            'digits'     => 'The :attribute field must be :digits digits.',
            'date'       => 'The :attribute field is invalid date.',
        ];
    }
}
