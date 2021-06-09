<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發布貼文｜珍愛地球系統</title>
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
            <h1>新增貼文</h1>
            <form action="/somewhere/to/upload" enctype="multipart/form-data">
                物品 &emsp;&emsp;&emsp;&emsp;<input type="text"><br><br>
                數量 &emsp;&emsp;&emsp;&emsp;<input type="text"><br><br>
                所在地 &emsp;&emsp;&emsp;<input type="text"><br><br>
                想要的東西 &emsp;<input type="text"><br><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;圖片 &emsp;&emsp;&emsp;&emsp;
                <input type="file" onchange="readURL(this)" targetID="preview_progressbarTW_img" accept="image/gif, image/jpeg, image/png" ><br><br>
                <img id="preview_progressbarTW_img" src="#"><br><br>
                <input type="button" value="發布貼文" onclick="location.href='MyItem.php'"><br>
            </form><br><br>
            <script>
                function readURL(input)
                {
                  if(input.files && input.files[0])
                  {
                    var imageTagID = input.getAttribute("targetID");
                    var reader = new FileReader();
                    reader.onload = function (e)
                    {
                       var img = document.getElementById(imageTagID); 
                       img.setAttribute("src", e.target.result)
                    }
                    reader.readAsDataURL(input.files[0]);
                  }    
                }               
            </script>
            <input type="button" value="返回" onclick="location.href='index.php'">
        </div>
    </div>
</body>
</html>

