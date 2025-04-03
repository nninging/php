<?php
    #mysqli_connect() //建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
    #mysqli_query()   //從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");  //在資料庫中從 user 表裡選取所有欄位的所有資料
    #mysqli_fetch_array()  // 從查詢出來的資料一筆一筆抓出來它的id,pwd,然後空一行
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>
