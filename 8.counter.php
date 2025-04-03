<?php
    session_start();   //啟動 session，讓 PHP 追蹤使用者的瀏覽狀態
    if (!isset($_SESSION["counter"]))  //如果 counter 的 session 變數不存在時，則設定初始值為一，否則加一
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];  // 印出目前counter的變數數字
    echo "<br><a href=9.reset_counter.php>重置counter</a>";  換行，當點擊具有連結的「重置」時，則連結php檔案
?>
