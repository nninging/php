<?php    //php程式語言

    error_reporting(0);   //不要顯示錯誤在畫面上
    session_start();      //啟動session，讓php追蹤使用者的瀏覽狀態
    if (!$_SESSION["id"]) {   //當id不等於$_SESSION["id"]時，印出請登入帳號，過三秒後跳到2.login.html
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   //否則
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){    //更新資料庫中指定使用者的密碼， pwd 欄位為新的密碼，如果錯誤就印出修改錯誤
            echo "修改錯誤";                                                                       

            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";   //過三秒後跳到18.user.php
        }else{     //否則
            echo "修改成功，三秒鐘後回到網頁"; //印出修改成功，三秒鐘後回到網頁
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";    //過三秒後跳到18.user.php
        }
    }

?>
