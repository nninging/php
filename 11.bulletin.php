<?php
    error_reporting(0);   //不顯示錯誤在畫面上
    session_start();      //啟動 session，讓 PHP 追蹤使用者的瀏覽狀態
    if (!$_SESSION["id"]) {   //當id不等於$_SESSION["id"]時，印出請先登入，過三秒後跳到2.login.html
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   //否則印出歡迎$_SESSION["id"](登入的id名稱)，印出「登出」的連結 12.logout.php，讓該頁面執行登出的動作，印出「管理使用者」的連結18.user.php，讓該頁面執行管理使用者的動作，印出「新增佈告」的連結22.bulletin_add_form.php，讓該頁面執行新增佈告的動作
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");     //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
        $result=mysqli_query($conn, "select * from bulletin");  //在資料庫中從 bulletin 表裡選取所有欄位的所有資料
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";    ////創造表格，裡面有佈告編號,佈告類別,標題,佈告內容,發佈時間
        while ($row=mysqli_fetch_array($result)){             //當$row=mysqli_fetch_array($result)時
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a>    //印出「修改」的連結 26.bulletin_edit_form.php，讓該頁面執行修改的動作
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";     //印出「刪除」的連結 28.bulletin_delete.php，讓該頁面執行刪除的動作
            echo $row["bid"];                //  和印出表格，裡面有佈告編號,佈告類別,標題,佈告內容,發佈時間的內容
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
