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

Route::get('/pomodoro',function(){
    return view("pomodoro");
});


//カウントダウンテスト用のルート
Route::get('/count',function(){
    return view("count_timer");
});


