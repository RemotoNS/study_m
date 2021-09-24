<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_counter_Controller extends Controller
{
    public function getIndex()
{
    // セッション値「count」の存在確認
    if(session()->has('count')){
        // あり
        $count = session('count');
    }else{
        // なし
        $count = 0;
    }

    // カウントを１つまわす
    $count++;
    // 値を保存
    session(['count' => "$count"]);

    return view("home",compact('count'));
}
}
