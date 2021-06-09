<?php
    $DB_NAME = "love_earth_system"; // 資料庫名稱
    $DB_USER = "root"; // 資料庫管理帳號
    $DB_PASS = "like5566"; // 資料庫管理密碼
    $DB_HOST = "localhost"; // 資料庫位址

    
    $con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS,$DB_NAME,80);
    if (empty($con)) {
        
        die("資料庫連接失敗！");
        exit;
    }

    if (!mysqli_select_db($con, $DB_NAME)) {
        die("選取資料庫失敗！");
    } 
    mysqli_query($con,"set names utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊｜珍愛地球系統</title>
    <style type="text/css">
        #sitebody{
            width:100%;
            margin:0 auto;
            font-size:13px;
        }
        #header{
            width:100%;
            height:80px;
            text-align:center;
        }
        #sidebar_left{
            width:20%;
            height:400px;
            text-align:center;
            float:left;
        }
        #sidebar_right{
            width:20%;
            height:400px;
            text-align:center;
            float:right;
        }
        #content{
            margin-left:120px;
            margin-right:120px;
            height:400px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div id="sitebody">
        <div id="content">
            <h1>會員註冊</h1>
            <form action="">
                姓氏 &emsp;&emsp;&emsp;&emsp;<input type="text" placeholder="請輸入姓氏"><br><br>
                名字 &emsp;&emsp;&emsp;&emsp;<input type="text" placeholder="請輸入名字"><br><br>
                身分證字號 &emsp;<input type="text" placeholder="請輸入身分證字號"><br><br>
                地址 &emsp;&emsp;&emsp;&emsp;<input type="text" placeholder="請輸入地址"><br><br>
                電子郵件 &emsp;&emsp;<input type="text" placeholder="請輸入電子郵件"><br><br>
                密碼 &emsp;&emsp;&emsp;&emsp;<input type="text" placeholder="請輸入密碼"><br><br>
                確認密碼 &emsp;&emsp;<input type="text" placeholder="請重新輸入密碼"><br><br><br>
                <input type="checkbox" name="" id="">同意使用條款<a href="article.php"></a><br><br>
                <input type="button" value="送出" onclick="location.href='pre_index.php'">&emsp;&emsp;
                <input type="button" value="返回" onclick="location.href='pre_index.php'"><br>
            </form>
        </div>
    </div>
</body>
</html>