<?php
   #mysqli_connect()   //建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");      //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
   #mysqli_query()   //從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");   //在資料庫中從 user 表裡選取所有欄位的所有資料
   #mysqli_fetch_array()     從查詢出來的資料一筆一筆抓出來
   $login=FALSE;  //預設是false
   while ($row=mysqli_fetch_array($result)) {          //當$row=mysqli_fetch_array($result)時，則印出id,pwd
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {        //如果id與pwd都符合，則$login=TRUE
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {        //當$login==TRUE時,啟動 session，讓 PHP 追蹤使用者的瀏覽狀態，並儲存 $_SESSION["id"]，這樣後續要登入時就能取得該值，印出登入成功，3秒後跳到11.bulletin.php的頁面
    session_start();       
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{    //否則印出帳號/密碼 錯誤，3秒後跳到2.login.html的頁面
    echo "帳號/密碼 錯誤";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
