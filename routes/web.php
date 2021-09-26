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


Route::get('/home', 'home_counter_Controller@getIndex');

Route::get('/main',function(){
    return view("main");
});

//カウントダウンテスト用のルート
Route::get('/count', 'pomo_counter_Controller@get_count');

Route::get('/pomo_break',function(){
    return view("pomo_break");
});

Route::post('/ranking', 'RankingController@getcount');
