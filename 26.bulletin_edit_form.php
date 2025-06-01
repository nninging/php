<?php    //php程式語言
    error_reporting(0);   //不要顯示錯誤在畫面上
    session_start();      //啟動session，讓php追蹤使用者的瀏覽狀態
    if (!$_SESSION["id"]) {    //當id不等於$_SESSION["id"]時，印出please login first，過三秒後跳到2.login.html
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{         //否則
        
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");    //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");   //從佈告欄資料表中，用get選取全部欄位的所有bid資料
        $row=mysqli_fetch_array($result);   //從資料庫查詢結果中抓出一筆資料
        $checked1="";  //設定變數初始化為空字串
        $checked2="";  //設定變數初始化為空字串
        $checked3="";  //設定變數初始化為空字串
        if ($row['type']==1) //如果type為1時，checked1="checked"
            $checked1="checked";
        if ($row['type']==2)    //如果type為2時，checked2="checked"
            $checked2="checked";
        if ($row['type']==3)   //如果type為3時，checked3="checked"
            $checked3="checked";
        echo "
        <html>
            <head><title>新增佈告</title></head>     //在瀏覽器標籤上顯示「新增佈告」
            <body>
                <form method=post action=27.bulletin_edit.php>     //用post的方式傳送資料到27.bulletin_edit.php，想修改某一筆公告時，會自動顯示原本的內容進行編輯。
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>   // 顯示「修改佈告」按鈕和「清除」按鈕

                </form>
            </body>
        </html>
        ";
    }
?>
