<?php     //php程式語言
    error_reporting(0); //不要顯示錯誤在畫面上
    session_start();     //啟動session，讓php追蹤使用者的瀏覽狀態
    if (!$_SESSION["id"]) {     //當id不等於$_SESSION["id"]時，印出please login first，過三秒後跳到2.login.html
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{  //否則
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");    //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
        $sql="insert into bulletin(title, content, type, time)   // 把標題、內容、類型、時間插入到佈告欄中
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";   //用post的方式將表單輸入的資料，新增一筆公告到佈告欄中
        if (!mysqli_query($conn, $sql)){   //如果mysqli_query($conn, $sql) 執行失敗
            echo "新增命令錯誤";            //印出新增命令錯誤
        }
        else{   //否則
            echo "新增佈告成功，三秒鐘後回到網頁";   //印出新增佈告成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";   //過三秒後跳到11.bulletin.php
        }
    }
?>
