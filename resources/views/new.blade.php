@extends("layouts.sub_app")

@section("title","ranking")

@section("content")

<p>投稿ページ</p>
<form action="/getRuleArticle" method="POST">
@csrf
    <label>ジャンルセレクト
        <select name="category_id">
            <option value="1">食事</option>
            <option value="2">運動</option>
            <option value="3">睡眠</option>
        </select>
    </label>

    <p>タイトル；<input type="name" name="title"></p>
    <p>内容；<input type="text" name="content"></p>

    <input type="submit" value="投稿する">
</form>
<a href="/index">戻る</a>

@endsection