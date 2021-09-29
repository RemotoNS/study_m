@extends("layouts.app")

@section("title","ranking")

@section("content")

<p>投稿ページ</p>
<form action="#" method="POST">
@csrf
    <option>
        <select name="" id=""></select>
    <input type="text">
    <input type="text">
    <a href="#">投稿する</a>
</form>
<a href="#">戻る</a>

@endsection