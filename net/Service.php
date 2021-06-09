<html xmlns="https://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>聯絡我｜珍愛地球系統</title>
        <style>
        .mail .container{
        width:600px; 
        }
        .mail{
        font-family:微軟正黑體;
        font-size:22px;
        }
        </style>
    </head>

    <body>
        <div class="mail">
            <div class="container">
                <div class="header" style="text-align:center; font-size:24px; padding:30px 0">
                聯絡我
                </div>
                <form id="msg" name="msg" method="post" action="" >
                    <div class="form-group">
                        <label for="nickname">暱稱</label>
                        <input type="text" class="form-control" id="nickname" name="nickname" placeholder="輸入您的暱稱" required >
                    </div>
                    <div class="form-group">
                        <label for="email">電子郵件信箱</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="輸入E-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">信件主旨</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="輸入主旨" required>
                    </div>
                    <div class="form-group">
                        <label for="content">信件內容</label>
                        <textarea class="form-control" id="content" name="content" rows="5"placeholder="輸入訊息" required></textarea>
                    </div>
                    <div align="right">
                        <button type="submit" class="btn btn-default" button onclick="submitHandler()">寄出</button>
                    </div>
                    
                </form>
                <?php 
                    if(@$_POST['nickname']!='')
                    {
                        $nickname=$_POST['nickname'];
                        $email=$_POST['email'];
                        $sub=$_POST['subject'];
                        $content=$_POST['content'];

                        mb_internal_encoding("utf-8");
                        $to="40743254@gmail.com";//填入自己的電子信箱
                        $subject=mb_encode_mimeheader("$sub","utf-8");
                        $message="$content";
                        $headers="MIME-Version: 1.0\r\n";
                        $headers.="Content-type: text/html; charset=utf-8\r\n";
                        $headers.="From:".mb_encode_mimeheader("$nickname","utf-8")."<$email>\r\n";
                        mail($to,$subject,$message,$headers);
                    }
                ?>
            </div>
        </div>
    </body>
</html>
