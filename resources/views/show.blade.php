@extends("layouts.max_app")

@section("title","muscle_study-main")

@section("content")

<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <h1>タイトル；{{ $article -> title }}</h1>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <p>内容；{{ $article -> content }}</p>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <h2>投稿者名；{{ $article -> user -> name }}</h2>
</div>

@auth
    @if( ( $article->user_id ) === ( Auth::user()->id ) )
    <div class="d-flex align-items-center justify-content-center" style="height:50px;">
        <p><a href="/edit/{{$article -> id }}" class="btn btn-primary btn-sm">編集</a></p>
    </div>
    <div class="d-flex align-items-center justify-content-center" style="height:50px;">
        <p><a href="/destroy/{{$article -> id }}" class="btn btn-primary btn-sm">削除</a></p>
    </div>
    @endif
@endauth

<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <p><a href="/index" class="btn btn-primary btn-sm">一覧に戻る</a></p>
</div>

@endsection
