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


Route::get('/', 'home_counter_Controller@set_count');

Route::get('/main',function(){
    return view("main");
});

//カウントダウンテスト用のルート
Route::get('/count', 'pomo_counter_Controller@get_count');

Route::get('/pomo_break',function(){
    return view("pomo_break");
});

Route::post('/ranking', 'RankingController@getcount');

Route::post('/store', 'RankingController@store');

Route::get('/rank_list', 'RankingController@rank_rsort');

Route::get('/new', 'index_Controller@new');

Route::post('/getRuleArticle', 'index_Controller@getRuleArticle');

Route::get('/index', 'index_Controller@articleList');

Route::get("/show/{id}", 'index_Controller@show');

Route::get("/edit/{id}", 'index_Controller@edit_pre');

Route::post("/edit_post", 'index_Controller@edit_post');

Route::get("/destroy/{id}", 'index_Controller@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
