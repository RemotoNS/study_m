@extends("layouts.app")

@section("title","ranking")

@section("content")

<p>今回のポモドーロテクニック</p>
<p><font size = "100" color = "red">{{ $count -1 }}回達成！</font></p>

<form method="POST" action="/store">
@csrf
    <input type="hidden" name="count" value="{{ $count -1 }}">
    <p>ニックネーム；<input type="name" name="name">氏</p>
    <input type="submit" value="登録">
</form>

@endsection