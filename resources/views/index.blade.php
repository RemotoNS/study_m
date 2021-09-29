@extends("layouts.max_app")

@section("title","muscle_study-main")

@section("content")

<h1>マッスルスタディ〜鉄の掟〜</h1>
<p>効率的な学習を実践するためには、己の心身を整える必要がある！</p>
<p>そのメソッドを、下記の【食事】【運動】【睡眠】に分けて、キミの伝承しよう！</p>

<h2>食事の掟</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>記事</th>
            <th>投稿者名</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($articles as $article)
        <tr>
            <td><a href="show{$id}.blead.php">{{ $article -> title }}</a></td>
            <td>{{ $article -> user_id -> name }}</td> 
        </tr>   
        @endforeach
    </tbody>
</table>

<h2>運動の掟</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>記事</th>
            <th>投稿者名</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($articles as $article)
        <tr>
            <td><a href="show{$id}.blead.php">{{ $article -> title }}</a></td>
            <td>{{ $article -> user_id -> name }}</td> 
        </tr>   
        @endforeach
    </tbody>
</table>

<h2>睡眠の掟</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>記事</th>
            <th>投稿者名</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($articles as $article)
        <tr>
            <td><a href="show{$id}.blead.php">{{ $article -> title }}</a></td>
            <td>{{ $article -> user_id -> name }}</td> 
        </tr>   
        @endforeach
    </tbody>
</table>

@endsection
