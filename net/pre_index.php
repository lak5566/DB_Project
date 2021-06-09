
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>珍愛地球系統</title>
    <style type="text/css">
        #sitebody{
            width:100%;
            margin:0 auto;
            font-size:14px;
        }
        #header{
            background-color:#FFD4D4;
            width:100%;
            height:80px;
            text-align:center;
        }
        #sidebar_left{
            background-color:#FFECC9;
            width:20%;
            height:400px;
            text-align:center;
            float:left;
        }
        #sidebar_right{
            background-color:#FFECC9;
            width:20%;
            height:400px;
            text-align:center;
            float:right;
        }
        #content{
            margin-left:120px;
            margin-right:120px;
            height:400px;
            background-color:#F2FFF2;
            text-align:center;
        }
        #bottom{
            margin-top:95%;
            background-color: rgb(0, 255, 200);
            text-align:center;
        }
    </style>
</head>
<body>
    <div id="sitebody">
        <div id="header">
            <h1>珍愛地球系統</h1>
            <p  align="right">尚未登入</p>
        </div>
        <div id="sidebar_left">
            <h4>全站分類</h4>
        </div>
        <div id="sidebar_right">
            <h4>會員登入/註冊</h4>
            <form action="">
                帳號<input type="text" placeholder="請輸入帳號"><br>
                密碼<input type="text" placeholder="請輸入密碼"><br>
                <a href="">忘記密碼</a><br><br>
                <!--<img src="" alt=""><input type="text"><br>-->
                <input type="button" value="註冊" onclick="location.href='sign.php'">
                <input type="button" value="登入" onclick="location.href='index.php'">
                
            </form>
        </div>
        <div id="content"><br>
            <label for="site-search"></label>
            <input type="search" name="q" id="site-search">
            <button>搜尋</button>
        </div>
        <div id="bottom">
            <a href="Organization.php">社福機構</a>&emsp;
            <a href="Service.php">客服協助</a>&emsp;
            <a href="Copyright.php">版權宣告</a>&emsp;
            <a href="Information.php">聯絡資訊</a>&emsp;
            <a href="AboutUs.php">關於我們</a>
        </div>
    </div>
</body>
</html>