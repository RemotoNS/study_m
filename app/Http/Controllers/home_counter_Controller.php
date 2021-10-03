<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home_counter_Controller extends Controller
{

    /*
    public function getIndex()
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

    $member = $count;

    return view("top",compact('member'));
}
*/

    public function set_count( $file_name = "counter.txt"){
        if( file_exists($file_name) ){

            // ファイルを読み込む
            // カウンターの数字を増やす
            $count = (int)file_get_contents($file_name) +1;
            
            // ファイルに書き込む
            file_put_contents($file_name, $count);		

        }else{
            // ファイルが存在しなかった場合の処理
            // ファイルを作成する
            $handle = fopen($file_name , 'w+');
            $count = 1;
            
            fwrite($handle, $count);
            fclose($handle);
	}
	
	// ここを追加
    return view("top",compact('count'));
    }

}