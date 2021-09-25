<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pomo_counter_Controller extends Controller
{
        public function get_count()
    {

        if (isset($_COOKIE["count"])){
            $count = $_COOKIE["count"] + 1;
        }else{
            $count = 1;
        }
    
        $flag = setcookie("count", $count, time() + 30);

        return view("count_timer",compact('count'));
    }
}

