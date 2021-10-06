@extends("layouts.max_app")

@section("title","muscle_study-main")

@section("content")

<div class="d-flex align-items-center justify-content-center" style="height:150px;">
    <h1>マッスルスタディ〜鉄の掟〜</h1>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <p>効率的な学習を実践するためには、己の心身を整える必要がある！
        <br>そのメソッドを、下記の【食事】【運動】【睡眠】に分けて、キミの伝承しよう！
    </p>
</div>


    

<h2>一；食事の掟</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>タイトル</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($articles_meal as $article_meal)
            <tr>
                <td>第　{{ $a++ }}　条</td> 
                <td><a href="/show/{{$article_meal -> id }}">{{ $article_meal -> title }}</a></td>
            </tr>   
        @endforeach
        </tbody>
    </table>

<h2>二；運動の掟</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>タイトル</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($articles_exercise as $article_exercise)
            <tr>
                <td>第　{{ $b++ }}　条</td> 
                <td><a href="/show/{{$article_exercise -> id }}">{{ $article_exercise -> title }}</a></td>
            </tr>   
        @endforeach
        </tbody>
    </table>

 <h2>三；睡眠の掟</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>タイトル</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($articles_sleep as $article_sleep)
            <tr>
                <td>第　{{ $c++ }}　条</td> 
                <td><a href="/show/{{$article_sleep -> id }}">{{ $article_sleep -> title }}</a></td>
            </tr>   
        @endforeach
        </tbody>
    </table>
    <div class="d-flex align-items-center justify-content-center" style="height:100px;">
        <p>キミが実践している【鉄の掟】はあるか？
            <br>もしあるのであれば、我々にぜひ教えて欲しい！
        </p>
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height:50px;">
        <p><a href="/new" class="btn btn-primary btn-sm">投稿する</a></p>
    </div>

@endsection
