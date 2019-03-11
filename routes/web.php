<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'IndexController@index');

# 月別アクション総数（データjson）
Route::get('action/monthly', 'ActionController@monthly');
Route::get('action/monthly/{year}-{month}.json', 'ActionController@monthlyTotal');
