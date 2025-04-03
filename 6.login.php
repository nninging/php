<?php
   #mysqli_connect()  //建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
   #mysqli_query()  //從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");   //在資料庫中從 user 表裡選取所有欄位的所有資料
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;  //預設是false
   while ($row=mysqli_fetch_array($result)) {   //當$row=mysqli_fetch_array($result)時，則印出id,pwd
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {  //如果id與pwd都符合，則$login=TRUE
       $login=TRUE;
     }
   } 
   if ($login==TRUE)  //當$login==TRUE時，印出登入成功，否則帳號/密碼 錯誤
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>
