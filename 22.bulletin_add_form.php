<?php    //php程式語言
    error_reporting(0);    //不要顯示錯誤在畫面上
    session_start();   //啟動session，讓php追蹤使用者的瀏覽狀態
    if (!$_SESSION["id"]) {    //當id不等於$_SESSION["id"]時，印出please login first，過三秒後跳到2.login.html
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   //否則
        echo "
        <html>
            <head><title>新增佈告</title></head>   //在瀏覽器標籤上顯示「新增佈告」
            <body>
                <form method=post action=23.bulletin_add.php>   用post的方式傳送資料去23.bulletin_add.php
                    標    題：<input type=text name=title><br>  //標題:單行文字輸入欄位,欄位名稱是title，然後換行
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>   //內容:建立一個多行輸入框，欄位名稱是content，20行高，20字寬，然後換行
                    佈告類型：<input type=radio name=type value=1>系上公告   //佈告類型:單選按鈕,欄位名稱是type,選項的值是 1，送出表單時，type=1
                            <input type=radio name=type value=2>獲獎資訊    //佈告類型:單選按鈕,欄位名稱是type,選項的值是 2，送出表單時，type=2
                            <input type=radio name=type value=3>徵才資訊<br>//佈告類型:單選按鈕,欄位名稱是type,選項的值是 3，送出表單時，type=3
                    發布時間：<input type=date name=time><p></p>            //發布時間：欄位類型是日期,欄位名稱是name
                    <input type=submit value=新增佈告> <input type=reset value=清除>  // 顯示「新增佈告」按鈕和「清除」按鈕

                </form>
            </body>
        </html>
        ";
    }
?>
