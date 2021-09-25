<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pomo_counter_Controller extends Controller
{
        public function get_count()
    {

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

        return view("count_timer",compact('count'));
    }
}

