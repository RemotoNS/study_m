@extends("layouts.sub_app")

@section("title","ranking")

@section("content")


<p>投稿ページ</p>

<div class="card-body">
<form action="/edit_post" method="POST">
    @csrf
    <div class="form-group row">
        <label>ジャンルセレクト
            <select name="category_id">
                <option value="1">食事</option>
                <option value="2">運動</option>
                <option value="3">睡眠</option>
            </select>
        </label>
    </div>

    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('タイトル') }}</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('taxt') is-invalid @enderror" name="title" value="{{ $article -> title }}" required autocomplete="taxt" autofocus >
                @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('内容') }}</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ $article -> content }}" required autocomplete="taxt" autofocus>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
    </div>
    <input type="hidden" name="id" value="{{ $article -> id }}">
    <input type="submit" value="投稿する">
</form>
<a href="/index">戻る</a>

@endsection