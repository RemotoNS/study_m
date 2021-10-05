<!DOCTYPE html>
<html lang="ja">
 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>break_time</title>

            <script type="text/javascript">
                var timer_ID;                               //【タイマーID】
                var time = 5;                              // timeの初期化
                function minusTime() {
                    time--;                                 // timeの更新
                    dispTime();                             // timeの表示	
                    if (time==0) {
                        clearInterval(timer_ID);
                        var sampleArea = document.getElementById("sampleArea");
                        sampleArea.innerHTML = "勉強の時間だ❗️責務を全うせよ🔥";          //【タイマーの消去】
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
            <div class="d-flex align-items-center justify-content-center" style="height:300px;">
                <p><font size = "100" color = "red">休憩タイム</font></p>
            </div>
            <div class="d-flex align-items-center justify-content-center" style="height:50px;">
                <p>残り<output></output>秒</p>
            </div>
            <div class="d-flex align-items-center justify-content-center" style="height:50px;">
                <p id="sampleArea"></p>
            </div>
            <div class="d-flex align-items-center justify-content-center" style="height:100px;">
                <p><a href="/count" class="btn btn-primary btn-sm">勉強再開</a></p>
            </div>
        </div>
    </body>
</html>