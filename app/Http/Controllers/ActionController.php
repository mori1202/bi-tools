<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    #TODO
    public function monthly(){
        return view('action');
    }
    //
    public function monthlyTotal($year, $month){
        #TODO '$year-$month-01'が実在の日付かどうかvalidateし、実在しない場合エラーを返す
        
        return ['date' => "$year-$month"];
   
    }
}
