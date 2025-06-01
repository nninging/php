<html>  //html程式語言
    <head><title>明新科技大學資訊管理系</title>   //標題
    <meta charset="utf-8">                      //指定網頁編碼
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">  //引入 FlexSlider 的 CSS 樣式連結
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>  //引入 jQuery 函式庫連結
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        //引入 FlexSlider 的 JavaScript的連結
    <script>   //等圖片載入完成後再啟動輪播,讓輪播從右滑到左
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                rtl: true
            });
        });
    </script>
    <style>     //CSS 樣式設計
        *{   //把所有元素的預設 margin 清掉，文字顏色設成灰色，並全部置中
            margin:0;
            color:gray;
            text-align:center;
        }
        /* top */
        .top{
             background-color: white;  //背景:白色
        }
        .top .container{  
            display: flex;   //模式:flex
            align-items: center;//置中
            justify-content: space-between;//靠左右兩邊
            padding:10px; //內邊距10px
        }
        .top .logo{
            /*border:1px solid red;*/ //紅色邊框
            font-size: 35px;  //字體:35px
            font-weight: bold; //粗體
        }
        .top .logo img{
            width: 100px;   //寬度:100px
            vertical-align: middle; //置中對齊
        }
        .top .top-nav{
            /*border:1px solid red;*/  //紅框
            font-size: 25px;  //字體:25px
            font-weight: bold; //粗體
        }
        .top .top-nav a{  //取消超連結預設的底線
            text-decoration: none;
        }
        /* nav */
        .nav { 
            background-color:#333;  //背景設為深灰色
            display: flex;  //橫向排列
            justify-content: center;  //水平置中
        }
        .nav ul {
            list-style-type: none;  //取消列表預設的項目符號
            margin: 0; //移出外邊距
            padding: 0;   //移出內邊距
            overflow: hidden;   //隱藏超出容器的內容
            background-color: #333; //背景色為深灰色
        }
        .nav li {
            float: left; //靠左
        }
        .nav li a {    
            display: block;    //整個區塊都能點擊
            color: white;  //顏色白色
            text-align: center;  //文字置中
            padding: 14px 16px;  //上下內距14px、左右16px
            text-decoration: none;  //取消預設底線
        }
        .nav li a:hover {
            background-color: #111;  //背景顏色:深灰色
        }
        /*下拉式選單*/
        .dropdown:hover .dropdown-content {
            display: block;   /*使用block呈現上下排列*/
        }
        li.dropdown:hover{
            background-color: #333;  /*設定背景顏色*/ //深灰色
        }
        .dropdown-content {  /*設定下拉選單內容格式*/
            display: none;  //預設隱藏，只有滑鼠移入時才顯示
            position: absolute;  //固定位置
            background-color: #333;   //背景顏色:深灰色
            min-width: 160px;  //最小寬度 160px
            z-index: 1;  //讓下拉選單出現在其他內容之上 
        }
        .dropdown-content a {/*設定下拉選單連結內容格式*/
            color: black; //顏色為黑色
            padding: 12px 16px;//上下12px，左右16px
            text-decoration: none;移除文字底線
            display: block;  //將連結變成區塊元素
            text-align: left;  //靠左
        }

        /* slider */
        .slider{
            background-color: black;  //背景顏色:黑色
        }
        /* banner*/
        .banner{  //背景從淺藍到深藍，內距:30px
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;
        }
        .banner h1{
            padding: 20px; //內距:20px
        }        
        /*faculty*/
        .faculty {
            display: block;  //區塊元素
            justify-content: center;  //置中
            background-color:white;//背景:白色
            padding:40px; //內距:40px
        }
        .faculty h2 {
            font-size: 25px;  //字體25px
            color: rgb(50,51,52); //顏色:黑色
            padding-bottom:40px;  //下面間隔40px
        }
        .faculty .container {
            /*border:1px solid red;*/ //紅色邊框
            display: flex;//橫向排列
            justify-content: space-around; //左右平均分配
            align-items: center;//置中
        }
        .faculty .teacher{
            /*border:1px solid blue;*/  //藍色邊框
            display:block;   //區塊元素
            text-decoration: none;  //移除連結的底線
        }
        .faculty .teacher img{
            height: 200px;  //高:200px
            width: 200px;   //寬:200px
        }
        .faculty .teacher h3{
            color: White; 字體顏色:白色
            background-color: rgba(39,40,34,.500); //背景顏色:灰色
            text-align: center; //置中          
        }
        /*contact*/
        .contact {
            display: block; //區塊元素
            justify-content: center;//置中
            margin-top: 30px;  //與上方區塊留 30px 間距
            margin-bottom: 30px;  //與下方區塊留 30px 間距
        }
        .contact h2{
            color: rgb(54, 82, 110); //顏色:灰色
            font-size: 25px; //字體:25px
        }
        .contact .infos{
            display:flex; //橫向排列
            margin-top: 30px;  //與上方區塊留 30px 間距
            justify-content: center;  //置中
        }
        .contact .infos .left{
            display:block;  //區塊元素
            text-align: left;  //靠左
            margin-right: 30px;  //與右方區塊留 30px 間距
        }
        .contact .infos .left b{
            display:block; //區塊元素
            text-align: left; //靠左
            margin-top: 10px; // 與上方元素留 10px 間距
            text-decoration: bold; //粗體
            color: Gray;  //顏色:灰色
            font-size: 18px; //字體:18px
            line-height: 18px;  //行高:18px
        }
        .contact .infos .left span{
            display:block;//區塊元素
            text-align: left;//靠左
            margin-top: 10px;// 與上方元素留 10px 間距
            color: rgba(39,40,34,0.5);//顏色:灰色
            font-size: 16px;//字體:16px
            padding-left: 27px;  //內距左邊:27px
        }
        .contact .infos .right{
            height: 200px;      //高:200px        
        }
        .contact .infos .right iframe{
            width: 100%;  //寬度填滿100%
            height: 100%; //高度填滿100%
            border: 1px solid rgba(39,40,34,0.50);//灰色的細邊框
        }
        /*footer*/
        .footer{
            display: flex;//橫向排列
            justify-content: center;//置中
            background-color: rgb(25,26,30);  //背景顏色:黑色
            padding: 30px 0;  //上下內距 30px，左右無內距
        }
        /*登入畫面css*/
        .modal {
            display: none; /* Hidden by default */ //預設隱藏
            position: fixed; /* Stay in place */ //固定定位，不會隨頁面捲動
            z-index: 1; /* Sit on top */ // 堆疊順序，確保在其他元素之上
            right: 50;  //高:50px
            top: 50; //頂部:50px
            width: 20%; /* Full width */  //寬度填滿20%
            height: 20%; /* Full height */  //高度填滿20%
            overflow: auto; /* Enable scroll if needed */ //若內容超出，會出現滾動條
            background-color: rgba(255,255,255,0.9); /* Black w/ opacity */ //背景顏色:白色
            padding-top: 50px;  //上方內距 50px
        }  /*登入畫面css*/
        /*佈告欄*/
        .bulletin{
            display: block; //區塊元素
            justify-content: center;//置中
            background-color: rgb(255,204,153);  //背景顏色:粉色
            padding: 30px 0;//上下內距 30px，左右無內距

        }
        .bulletin h1{
            padding:10px;;//上下內距 30px，左右無內距
        }
        .bulletin table{
            border-collapse:collapse;//合併表格邊框
            font-family: 微軟正黑體;//字形:微軟正黑體
            font-size:16px; //字體:16px
            border:1px solid #000;//黑色的實線邊框
        }
        .bulletin table th{
            background-color: #abdcff;//背景顏色:淺藍
            color: #ffffff;//顏色:白色
        }
        .bulletin table td{
            background-color: #ffffff;//背景顏色:白色
            color: #0396ff;//顏色:淺藍
        }
    </style>
    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">  //連結明新科技大學資訊管理系的圖片
                  明新科技大學資訊管理系   //文字: 明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                  <a href=>明新科大</a>  //連結明新科大
                  <a href=>明新管理學院</a>//連結明新管理學院
                  <!---跳出登入畫面-->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>   //點擊「登入」時，會顯示出一個隱藏的登入畫面
                  <div id="login" class="modal">  // ID為login,class為modal 
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>  // 點擊管理系統登入文字時，會把登入視窗隱藏起來。
                    <form method=post action="10.login.php">  //用post的方式，將資料傳到10.login.php
                        帳號：<input type=text name="id"><br /> //帳號的輸入以文字輸入框的方式，名字是id
                        密碼：<input type=password name="pwd"><p></p>  //密碼的輸入以文字輸入框的方式，名字是pwd
                        <input type=submit value="登入"> <input type=reset value="清除">  //建立登入與清除的按鈕，按下後，表單內容會登入與清除所有輸入內容
            </form>
                    </form>
                  </div>  
                  <!---登入畫面-->
                </div>
              </div>
        </div>
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li> //連接首頁
                <li><a href="#introduction">系所簡介</a></li>  //連接系所簡介
                <li  class="dropdown"><a href="#faculty">成員簡介</a>   //連接成員簡介
                    <div class="dropdown-content">  //下拉式選單
                        <a href="#faculty">黃老師</a>   //連接黃老師
                        <a href="#faculty">李老師</a>   //連接李老師
                        <a href="#faculty">應老師</a>   //連接應老師
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li>  //連接相關資訊
            </ul>
        </div>
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">  //用輪播列的方式播放三個照片
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!---佈告欄--->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  //在db4free.net中，登入帳號:immust，密碼:immustimmust，資料庫名稱:immust
                $result=mysqli_query($conn, "select * from bulletin");//在資料庫中從 bulletin 表裡選取所有欄位的所有資料
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";//創造表格，裡面有佈告編號,佈告類別,標題,佈告內容,發佈時間
                while ($row=mysqli_fetch_array($result)){ //當$row=mysqli_fetch_array($result)時
                    echo "<tr><td>";
                    echo $row["bid"]; //印出佈告編號
                    echo "</td><td>";
                    if ($row["type"]==1) echo "系上公告"; //如果type=1時,印出系上公告
                    if ($row["type"]==2) echo "獲獎資訊"; //如果type=2時,印出獲獎資訊
                    if ($row["type"]==3) echo "徵才資訊"; //如果type=3時,印出徵才資訊
                    echo "</td><td>"; 
                    echo $row["title"]; //標題
                    echo "</td><td>";
                    echo $row["content"];   //佈告內容
                    echo "</td><td>";
                    echo $row["time"];  //發佈時間
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <!---佈告欄--->
        <div class="banner" id="introduction"> //印出系所簡介、歷年教育部評鑑皆榮獲一等、明新科技大學資訊管理系、全國私立科大第一資管系
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <div class="faculty" id="faculty">
            <h2>師資介紹</h2> //印出師資介紹
            <div class="container">
                <a class="teacher" href="">  //黃老師的照片
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">//李老師的照片
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">//應老師的照片
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div>
        <div class="contact" id="about">
                <h2>相關資訊</h2>  //印出相關資訊:明新科技大學管理學院大樓二樓、304新竹縣新豐鄉新興路1號、電話:03-5593142、分機:3431、3432、3433、傳真:03-5593142、分機:3440
                <div class="infos">
                    <div class="left">
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">//加入明新的Google 地圖
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
        <div class="footer"> //印出 &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
     </body>
</html>
