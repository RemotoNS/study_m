@extends("layouts.max_app")

@section("title","muscle_study-main")

@section("content")

<div class="d-flex align-items-center justify-content-center" style="height:150px;">
    <h1><font size = "100" color = "red">Let's スタディ❗️</font></h1>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:50px;">
<p>下記のスタートボタンを押すと、
    <a href="https://ja.wikipedia.org/wiki/%E3%83%9D%E3%83%A2%E3%83%89%E3%83%BC%E3%83%AD%E3%83%BB%E3%83%86%E3%82%AF%E3%83%8B%E3%83%83%E3%82%AF#:~:text=%E3%83%9D%E3%83%A2%E3%83%89%E3%83%BC%E3%83%AD%E3%83%BB%E3%83%86%E3%82%AF%E3%83%8B%E3%83%83%E3%82%AF%EF%BC%88%E8%8B%B1%3A%20Pomodoro,%E3%82%92%E3%80%8C%E3%83%9D%E3%83%A2%E3%83%89%E3%83%BC%E3%83%AD%E3%80%8D%E3%81%A8%E5%91%BC%E3%81%B6%E3%80%82">
        ポモドーロテクニック
    </a>
    が開始されます。
    <br>回数に応じてランキングしておりますので、１位を目指して頑張ってください❤️
</p>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:200px;">
    <p><a href="/count" class="btn btn-primary btn-sm">スタート</a></p>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <p>キミは、更なる脳筋ビルダーの高みへ行きたくはないか？
        <br>そんなキミたちのために、最高の脳筋メソッドを用意した！
    </p>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <p><a href="/index" class="btn btn-primary btn-sm">鉄の掟</a></p>
</div>

@endsection
