<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>設定｜珍愛地球系統</title>
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
            <h1>設定</h1><br>
            <form action="">
                <input type="button" value="審核貼文" onclick="location.href='ad_vertify.php'">&emsp;&emsp;&emsp;&emsp;
                <input type="button" value="匯出交易紀錄" onclick="location.href='ad_Record.php'"><br><br><br><br>
                使用者姓名：&emsp;<input type="search" name="q" id="site-search">&emsp;
                <button>搜尋</button><br><br>
                物品&emsp;&emsp;&emsp;：&emsp;<input type="search" name="q" id="site-search">&emsp;
                <button>搜尋</button><br><br><br>
                <input type="button" value="返回" onclick="location.href='index.php'">
            </form>
        </div>
    </div>
</body>
</html>