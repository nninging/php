<html> //html程式語言
    <head><title>新增使用者</title></head>  //在瀏覽器標籤上顯示「新增使用者」
    <body> 
<?php        //php程式語言
    error_reporting(0); //不要顯示錯誤在畫面上
    session_start();  //啟動session，讓php追蹤使用者的瀏覽狀態
    if (!$_SESSION["id"]) {  //當id不等於$_SESSION["id"]時，印出請先登入帳號，過三秒後跳到2.login.html
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    //否則印出
        echo "
            <form action=15.user_add.php method=post>  //以POST的方式連結到15.user_add.php
                帳號：<input type=text name=id><br>    //帳號的輸入以文字輸入框的方式，名字是id
                密碼：<input type=text name=pwd><p></p>//密碼的輸入以文字輸入框的方式，名字是pwd
                <input type=submit value=新增> <input type=reset value=清除>//建立新增與清除的按鈕，按下後，表單內容會新增與清除所有輸入內容
            </form>
        ";
    }
?>
    </body>
</html>
