<?php
    session_start();     //啟動 session，讓 PHP 追蹤使用者的瀏覽狀態
    unset($_SESSION["counter"]);  //刪除  $_SESSION["counter"]
    echo "counter重置成功....";   //印出counter重置成功....
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";  //兩秒後跳到8.counter.php的頁面

?>
