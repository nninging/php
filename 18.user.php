<html>             //html程式語言
    <head><title>使用者管理</title></head>  //在瀏覽器標籤上顯示「使用者管理」
    <body> 
    <body>
    <?php         //php程式語言
        error_reporting(0); //不要顯示錯誤在畫面上
        session_start();//啟動session，讓php追蹤使用者的瀏覽狀態
        if (!$_SESSION["id"]) {      //當id不等於$_SESSION["id"]時，印出請登入帳號，過三秒後跳到2.login.html
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   //否則
            echo "<h1>使用者管理</h1>  //印出使用者管理
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>  //印出「新增使用者」的超連結和「回佈告欄列表」的超連結
                <table border=1>  //建立一個表格，邊框為 1
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";  //印出帳號、密碼
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
            $result=mysqli_query($conn, "select * from user");  //從使用者資料表中，選取全部欄位的所有id資料
            while ($row=mysqli_fetch_array($result)){  //從資料庫查詢結果中一筆一筆抓出使用者資料，並用表格的方式列出來，每一筆資料還附上「修改」和「刪除」的連結
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
