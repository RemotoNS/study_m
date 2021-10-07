@extends("layouts.sub_app")

@section("title","ranking")

@section("content")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('投稿ページ') }}</div>

                <div class="card-body">
                    <form action="/getRuleArticle" method="POST">
                        @csrf
                        <div class="col-md-7 col-form-label text-md-right">
                            <label>ジャンルセレクト
                                <select name="category_id">
                                    <option value="1">食事</option>
                                    <option value="2">運動</option>
                                    <option value="3">睡眠</option>
                                    <option value="4">テスト</option>
                                </select>
                            </label>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('タイトル') }}</label>

                            <div class="col-md-6">
                            <input type="text" class="form-control @error('taxt') is-invalid @enderror" name="title" required autocomplete="taxt" autofocus>
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
                                <textarea cols="50" rows="10" placeholder="50文字以内でお願いします。" type="text" class="form-control @error('content') is-invalid @enderror" name="content" required autocomplete="taxt" autofocus></textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center" style="height:100px;">
                　          <input type="submit" value="投稿する">
                        </div>
                    </form>
                    <div class="d-flex align-items-center justify-content-center" style="height:50px;">
                        <p><a href="/index" class="btn btn-primary btn-sm">戻る</a></p>
                    </div>

@endsection