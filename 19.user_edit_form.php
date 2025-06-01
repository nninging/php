<html>     //html程式語言
    <head><title>修改使用者</title></head>    //在瀏覽器標籤上顯示「修改使用者」
    <body>
    <?php    //php程式語言
    error_reporting(0); //不要顯示錯誤在畫面上
    session_start();   //啟動session，讓php追蹤使用者的瀏覽狀態
    if (!$_SESSION["id"]) {      //當id不等於$_SESSION["id"]時，印出請登入帳號，過三秒後跳到2.login.html
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    //否則
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");   //從使用者資料表中，用get選取全部欄位的所有id資料
        $row=mysqli_fetch_array($result);  //從資料庫查詢結果中抓出一筆使用者資料
        echo "    //印出
        <form method=post action=20.user_edit.php>   用post的方式傳送資料去20.user_edit.php
            <input type=hidden name=id value={$row['id']}> //用隱藏欄位的方式把使用者帳號傳出去但不顯示在畫面上
            帳號：{$row['id']}<br>   //顯示帳號，但不能改
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>   //修改密碼，預設值是該使用者目前的密碼
            <input type=submit value=修改>   //顯示「修改」按鈕
        </form>
        ";
    }
    ?>
    </body>
</html>
