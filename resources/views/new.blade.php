@extends("layouts.app")

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
    <p>ユーザーID（削除予定）；<input type="name" name="user_id"></p>
    <input type="submit" value="投稿する">
</form>
<a href="#">戻る</a>

@endsection