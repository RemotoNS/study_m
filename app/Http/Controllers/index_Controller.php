<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;


class index_Controller extends Controller
{

    public function getRuleArticle(Request $request)
    {
        $article = new Article();

        $article -> category_id = $request->input("category_id");
        $article -> title = $request->input("title");
        $article -> content = $request->input("content");
        //ユーザーID（テスト用）
        $article -> user_id = $request->input("user_id");
        $article -> save();
        return redirect('/rank_list');
    }

/*
public function rank_rsort()
{
    $challengers = DB::select("SELECT name,count FROM ranks ORDER BY count DESC limit 3");

    $si = 1;

    return view("rank_list",["challengers" => $challengers , "si" => $si]);

}

*/

}