@extends("layouts.sub_app")

@section("title","muscle_study-home")

@section("content")

<div class="d-flex align-items-center justify-content-center" style="height:200px;">
    <h1><font size = "100" color = "red">マッスル★スタディ</font></h1>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:200px;">
<p>ようこそ、マッスル★スタディへ❗️
    <br>ここは究極の学習効率メソッドを手に入れられるかもしれない、脳筋ビルダーにとっての桃源郷だ❗️
    <br>さぁキミも、我々と共に、脳のダブルバイセップス❗️❗️
</p>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <p><span class="h1 text-danger">キミは{{$count}}人目のチャレンジャーだ！</span></p>
</div>
<div class="d-flex align-items-center justify-content-center" style="height:100px;">
    <p><a href="/main" class="btn btn-primary btn-sm">入門</a></p>
</div>

@endsection