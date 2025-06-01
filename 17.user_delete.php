<?php    //php程式語言
    error_reporting(0);   //不要顯示錯誤在畫面上 
    session_start();   //啟動session，讓php追蹤使用者的瀏覽狀態
    if (!$_SESSION["id"]) {   //當id不等於$_SESSION["id"]時，印出請登入帳號，過三秒後跳到url=2.login.html
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   //否則
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
        $sql="delete from user where id='{$_GET["id"]}'";  //建立一個 SQL 指令，從資料表使用者中刪除符合指定 id 的資料。
        #echo $sql;  //印出 $sql
        if (!mysqli_query($conn,$sql)){   //如果mysqli_query($conn, $sql) 執行失敗
            echo "使用者刪除錯誤";  //列印使用者刪除錯誤
        }else{                     //否則使用者刪除成功
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";  //過三秒後跳到18.user.php
    }
?>
