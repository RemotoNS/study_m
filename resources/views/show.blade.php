@extends("layouts.max_app")

@section("title","muscle_study-main")

@section("content")

<p>タイトル；{{ $article -> title }}</p>
<p>内容；{{ $article -> content }}</p>
<p>投稿者名；{{ $article -> user -> name }}</p>

@auth
    @if( ( $article->user_id ) === ( Auth::user()->id ) )
    <p><a href="/edit/{{$article -> id }}" class="btn btn-primary btn-sm">編集</a></p>
    <p><a href="/destroy/{{$article -> id }}" class="btn btn-primary btn-sm">削除</a></p>
    @endif
@endauth

<p><a href="/index" class="btn btn-primary btn-sm">一覧に戻る</a></p>

@endsection
