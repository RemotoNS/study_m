@extends("layouts.sub_app")

@section("title","rank_list")

@section("content")

<table class="table table-striped">
    <thead>
        <tr>
            <th>ランキング</th>
            <th>ニックネーム</th>
            <th>ポモドーロカウント</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($challengers as $challenger)
        <tr>
            <td>第　{{ $si++ }}　位</td>
            <td>{{ $challenger -> name }}　氏</td>
            <td>{{ $challenger -> count }}　回</td> 
        </tr>   
        @endforeach
    </tbody>
</table>
<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <p><a href="/main" class="btn btn-primary btn-sm">メイン画面へ戻る</a></p>
</div>



@endsection