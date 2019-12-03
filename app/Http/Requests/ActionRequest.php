<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'year'       => 'bail|required|digits:4',
            'month'      => 'bail|required|digits:2',
            'year-month' => 'bail|required|date',
            //
        ];
    }

    protected function validationData(){
        return array_merge( $this->request->all(),[
            'year'       => $this->year,
            'month'      => $this->month,
            'year-month' => $this->year . '-' . $this->month . '-01',
        ]);
    }

    public function messages(){
        return [
            'year.required'   => 'CSV出力対象となる年が指定されていません',
            'year.digits'     => 'CSV出力対象となる年の指定が不正です',
            'month.required'  => 'CSV出力対象となる月が指定されていません',
            'month.digits'    => 'CSV出力対象となる月の指定が不正です',
            'year-month.date' => '存在しない年または月が入力されました',
        ];
    }
}
