<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))   //如果id等於john且pwd等於john1234,印出登入成功，否則登入失敗
        echo "登入成功";
    else
        echo "登入失敗";
?>
