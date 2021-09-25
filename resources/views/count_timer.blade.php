<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UYF-8" />
        <title>One Minute Timer</title>
        <script type="text/javascript">
            var timer_ID;                               //【タイマーID】
            var time = 5;                              // timeの初期化
            function minusTime() {
                time--;                                 // timeの更新
                dispTime();                             // timeの表示	
                if (time==0) {
                    clearInterval(timer_ID);
                    var sampleArea = document.getElementById("sampleArea");
                    sampleArea.innerHTML = "お疲れ様❗️下の【休憩ボタン】を押してコーヒーでも飲んできてね❤️";          //【タイマーの消去】
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

        <p>ポモドーロ{{$count}}回目❗️</p>
        <p>残り<output></output>秒</p>
        <div id="sampleArea"></div>
        
    
    
    </body>
</html>