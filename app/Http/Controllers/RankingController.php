<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rank;

class RankingController extends Controller
{
    

    public function getcount(Request $request)
    {
        $count = $request -> input("count");

        return view("ranking") -> with(["count" => $count]);
    }




    public function store(Request $request)
    {
        $rank = new Rank();

        $rank -> name = $request->input("name");
        $rank -> count = $request->input("count");

        $rank -> save();

        return redirect('/home');


    }
}

