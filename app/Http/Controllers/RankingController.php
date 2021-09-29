<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rank;

use Illuminate\Support\Facades\DB;

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
        return redirect('/rank_list');
    }

    public function rank_rsort()
    {
        $challengers = DB::select("SELECT name,count FROM ranks ORDER BY count DESC limit 3");

        $si = 1;

        return view("rank_list",["challengers" => $challengers , "si" => $si]);
 
    }

}

