<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>審核貼文列表｜珍愛地球系統</title>
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
            margin:0px auto;
            height:400px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div id="sitebody">
        <div id="content">
            <form action="">
                <h1>未審核貼文列表</h1>
                <table align="center" border="1" width="400">
                    <tr>
                        <th>選取審核</th>
                        <th>使用者</th>
                        <th>物品</th>
                        <th>數量</th>
                        <th>所在地</th>
                        <th>想換的物品</th>
                    </tr>
                    <tr>    
                        <td><input type="radio" name="pass" id="pass1"></td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="pass" id="pass2"></td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="pass" id="pass3"></td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>  
                    <tr>
                        <td><input type="radio" name="pass" id="pass4"></td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                  </table><br>
                <input type="button" value="審核" onclick="location.href='ad_vertify1.php'">&emsp;&emsp;
                <input type="button" value="返回設定" onclick="location.href='ad_setting.php'"><br>
            </form>
        </div>
    </div>
</body>
</html>