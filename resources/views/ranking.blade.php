@extends("layouts.sub_app")

@section("title","ranking")

@section("content")

<body>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center" style="height:200px;">
            <p><font size = "100" color = "red">今回のポモドーロテクニック</font></p>
        </div>
        <div class="d-flex align-items-center justify-content-center" style="height:100px;">
            <p><font size = "100" color = "red">{{ $count -1 }}回達成！</font></p>
        </div>
        <div class="d-flex align-items-center justify-content-center" style="height:200px;">
            <form method="POST" action="/store">
            @csrf
                <input type="hidden" name="count" value="{{ $count -1 }}">
                <p>ニックネーム；<input type="name" name="name">氏</p>
                <div class="d-flex align-items-center justify-content-center" style="height:100px;">
                　<input type="submit" value="登録">
                </div>
            </form>
        </div>
    </div>
</body>

@endsection