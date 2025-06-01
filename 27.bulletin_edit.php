<?php    //php程式語言

    error_reporting(0);   //不要顯示錯誤在畫面上
    session_start();      //啟動session，讓php追蹤使用者的瀏覽狀態
    if (!$_SESSION["id"]) {   //當id不等於$_SESSION["id"]時，印出請登入帳號，過三秒後跳到2.login.html
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{     //否則
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");     //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){   //更新資料庫中指定的佈告欄， title 欄位為新的標題，content 欄位為新的內容，time欄位為新的時間，type欄位為新的佈告類型
            echo "修改錯誤"; //如果錯誤就印出修改錯誤
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";  //過三秒後跳到11.bulletin.php
        }else{  //否則
            echo "修改成功，三秒鐘後回到佈告欄列表"; //印出修改成功，三秒鐘後回到佈告欄列表
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";   //過三秒後跳到11.bulletin.php
        }
    }

?>
