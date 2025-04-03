<?php
    error_reporting(0);   //不顯示錯誤在畫面上
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
    $result=mysqli_query($conn, "select * from bulletin");  //在資料庫中從 bulletin 表裡選取所有欄位的所有資料
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";  //創造表格，裡面有佈告編號,佈告類別,標題,佈告內容,發佈時間
    while ($row=mysqli_fetch_array($result)){   //當$row=mysqli_fetch_array($result)時，則印出表格，裡面有佈告編號,佈告類別,標題,佈告內容,發佈時間的內容
        echo "<tr><td>";
        echo $row["bid"];
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
    echo "</table>"
?>
