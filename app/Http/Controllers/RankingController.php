<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    

    public function getcount(Request $request)
    {
        $count = $request -> input("count");

        return view("ranking") -> with(["count" => $count]);
    }



}
