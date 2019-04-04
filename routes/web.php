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
Route::get('/', 'IndexController@index');

# 月別アクション総数（データjson）
Route::get('action/monthly', 'ActionController@monthly');
Route::get('action/monthly/{year}-{month}.json', 'ActionController@monthlyTotal');
Route::get('action/monthly/{year}-{month}.csv', 'ActionController@monthlyTotalCsv');

// 日別アクション総数(jsonデータ取得
Route::get('action/daily/{year}-{month}-{day}.json', 'ActionController@dailyTotal');
// アクション種別割合(jsonデータ取得
Route::get('action/type/{year}-{month}.json', 'ActionController@type');
// コンテンツ別電話クリック割合(jsonデータ取得
Route::get('action/type_contents/{year}-{month}.json', 'ActionController@typeContents');

// 更新ボタン押下回数(jsonデータ取得
Route::get('reload/monthly/{year}-{month}.json', 'ContentUtilizeController@getReloadPushCount');
