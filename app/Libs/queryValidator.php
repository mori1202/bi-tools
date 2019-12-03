<?php

namespace App\Libs;

use Illuminate\Support\Facades\Validator;
Class queryValidator
{
    private $profile
                = array(
                      'YearMonth' => [
                           'year'       => 'bail|required|digits:4',
                           'month'      => 'bail|required|digits:2',
                           'day'        => 'bail|required|digits:2',
                           'validateDate' => 'required_with:year,month|date',
                       ],
                      'YearMonthDay' => [
                           'year'       => 'bail|required|digits:4',
                           'month'      => 'bail|required|digits:2',
                           'day'        => 'bail|required|digits:2',
                           'validateDate' => 'required_with:year,month,day|date',
                       ],
                  );

    private $errorMsg
                = array(
                      'common' => [
                          'required'   => 'データの取得に失敗しました',
                          'digits'     => 'データの取得に失敗しました',
                          'date'       => 'データの取得に失敗しました',
                            
                       ],
                  );

    function __construct($request, $validateType)
    {
        $this->useProfile = isset($this->profile[$validateType]) ? $this->profile[$validateType] : false;
        $this->useInputs  = $this->_getInputs($request, $validateType);
    }

    public function validate()
    {
        # url validate
        $validator = Validator::make(
            $this->useInputs,
            $this->useProfile,
            $this->_getErrorMessage('common')
        );

        # invalid url paramater
        return $validator->fails() ? $validator->errors()->all() : null;
        
    }

    public function _getErrorMessage($action)
    {
        return isset($this->errorMsg[$action]) ? $this->errorMsg[$action] : false;
    }
    public function _getInputs($request, $validateType)
    {
        if($validateType === 'YearMonth') {
            return [
              'year'       => $request->year,
              'month'      => $request->month,
              'day'        => '01',
              'validateDate' => $request->year . '-' . $request->month . '-01'
            ];
        } else if($validateType === 'YearMonthDay') {
            return [
              'year'       => $request->year,
              'month'      => $request->month,
              'day'        => $request->day,
              'validateDate' => $request->year . '-' . $request->month . '-' . $request->day
            ];
        }
    }
}
