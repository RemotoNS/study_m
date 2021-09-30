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
                <th>記事数</th>
                <th>タイトル</th>
                <th>投稿者名</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($articles_meal as $article_meal)
            <tr>
                <td>{{ $a++ }}</td> 
                <td><a href="show{$id}.blead.php">{{ $article_meal -> title }}</a></td>
                <td>{{ $article_meal -> user_id }}</td> 
            </tr>   
        @endforeach
        </tbody>
    </table>

<h2>運動の掟</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>記事数</th>
                <th>タイトル</th>
                <th>投稿者名</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($articles_exercise as $article_exercise)
            <tr>
                <td>{{ $b++ }}</td> 
                <td><a href="show{$id}.blead.php">{{ $article_exercise -> title }}</a></td>
                <td>{{ $article_exercise -> user_id }}</td> 
            </tr>   
        @endforeach
        </tbody>
    </table>

 <h2>睡眠の掟</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>記事数</th>
                <th>タイトル</th>
                <th>投稿者名</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($articles_sleep as $articles_sleep)
            <tr>
                <td>{{ $c++ }}</td> 
                <td><a href="show{$id}.blead.php">{{ $articles_sleep -> title }}</a></td>
                <td>{{ $articles_sleep -> user_id }}</td> 
            </tr>   
        @endforeach
        </tbody>
    </table>

<p>キミが実践している【鉄の掟】はあるか？</p>
<p>もしあるのであれば、我々にぜひ教えて欲しい！</p>
<p><a href="/new" class="btn btn-primary btn-sm">投稿する</a></p>

@endsection
