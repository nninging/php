<?php
    session_start();         //啟動 session，讓 PHP 追蹤使用者的瀏覽狀態
    unset($_SESSION["id"]);   //移除id
    echo "登出成功....";     //印出登出成功....
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";   //三秒後連結到2.login.html

?>
