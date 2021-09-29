@extends("layouts.app")

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
            <td>{{ $si++ }}</td>
            <td>{{ $challenger -> name }}</td>
            <td>{{ $challenger -> count }}</td> 
        </tr>   
        @endforeach
    </tbody>
</table>

<p><a href="/main" class="btn btn-primary btn-sm">スタート</a></p>



@endsection