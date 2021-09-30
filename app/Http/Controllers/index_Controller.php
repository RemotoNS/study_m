<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use Illuminate\Support\Facades\DB;

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
        return redirect('/index');
    }

    public function articleList()
    {
        $articles_meal = DB::select("SELECT title,user_id FROM articles WHERE category_id = 1");
        $articles_exercise = DB::select("SELECT title,user_id FROM articles WHERE category_id = 2");
        $articles_sleep = DB::select("SELECT title,user_id FROM articles WHERE category_id = 3");

        $a = 1;
        $b = 1;
        $c = 1;

        return view("index",[
            "articles_meal" => $articles_meal ,
            "articles_exercise" => $articles_exercise ,
            "articles_sleep" => $articles_sleep ,
             "a" => $a,
             "b" => $b,
             "c" => $c
            ]);
    }

    public function show()
    {
        $article = Article::find(2);
        return view("show",["article" => $article]);
    }

}