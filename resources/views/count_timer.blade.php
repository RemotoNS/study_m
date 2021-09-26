<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/sticky-footer.css" rel="stylesheet" media="screen">
        <title>pomodoro_tecnic</title>
            <script type="text/javascript">
                var timer_ID;                               //【タイマーID】
                var time = 5;                              // timeの初期化
                function minusTime() {
                    time--;                                 // timeの更新
                    dispTime();                             // timeの表示	
                    if (time==0) {
                        clearInterval(timer_ID);
                        var sampleArea = document.getElementById("sampleArea");
                        sampleArea.innerHTML = "お疲れ様❗️下の【BREAKボタン】を押して５分間休憩してね❤️";          //【タイマーの消去】
                    }
                }
                function dispTime() {
                    document.getElementsByTagName("output")[0].innerHTML = time;
                }
                window.onload = function() {
                    dispTime();                                      // timeの表示
                    timer_ID = setInterval("minusTime()", 1000);    //【タイマーの設定】
                }
            </script>
    </head>
    <body>
        <div class="container">
            <p>ポモドーロ{{$count}}回目❗️</p>

            <form action="ranking" method="post">
                <input type="name" name="count" value="<?= $count ?>">
                <input type="hidden" name="count" value="<?= $count ?>">
            </form>

            <p>残り<output></output>秒</p>
            <div id="sampleArea"></div>
            <p><a href="/pomo_break" class="btn btn-primary btn-sm">BREAK</a></p>
            <p><a href="/ranking" class="btn btn-primary btn-sm">終了</a></p>
   


        </div>    
        
    
    </body>
</html>