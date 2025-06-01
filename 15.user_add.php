<?php  //php程式語言

error_reporting(0); //不要顯示錯誤在畫面上
session_start();  //啟動session，讓php追蹤使用者的瀏覽狀態
if (!$_SESSION["id"]) {  //當id不等於$_SESSION["id"]時，印出請登入帳號，過三秒後跳到2.login.html
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{     //否則

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");    //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql; //印出資料SQL命令
   if (!mysqli_query($conn, $sql)) {  //如果mysqli_query($conn, $sql) 執行失敗
     echo "新增命令錯誤";      //印出新增命令錯誤
   }
   else{   //否則
     echo "新增使用者成功，三秒鐘後回到網頁";  //印出新增使用者成功，三秒鐘後回到網頁
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";  //過三秒後跳到18.user.php
   }
}
?>
