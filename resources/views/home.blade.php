@extends("layouts.app")

@section("title","muscle_study_home")

@section("content")
    <h1>マッスル★スタディ</h1>
    <p>ようこそ、マッスル★スタディへ❗️<br>ここは究極の学習効率を手に入れられる（かもしれない）脳筋ビルダーにとって、まさに桃源郷だ❗️</p>
    <p>さぁキミも、我々と共に、脳のダブルバイセップス❗️❗️</p>
    <p><span class="h1 text-danger">キミは{{$count}}人目のチャレンジャーだ！</span></p>
    <p><a href="/main" class="btn btn-primary btn-sm">スタート</a></p>
@endsection
