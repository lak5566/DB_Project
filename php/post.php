<?php
$host = "localhost";
$username = "root";
$passwd = "";
$database = "love_earth_system";

$les_conn = new mysqli($host, $username, $passwd, $database);
if ($les_conn -> connect_error){
    echo "連結mysql資料庫失敗";
}
else{
  $les_conn -> query("SET NAMES 'utf8'");
}


//接收從前端傳來的內容，撈取資料後透過ajax丟回前端
if($_GET['myform'] != "") {
    @$n = $_GET['myform'];
    /*從record資料表，撈取所有欄位(用*米字號)，當所傳來的值是字首、中、尾有符合(LIKE)資料UID_1欄位的名字，
      就會呼叫出來，並且透過id欄位來設定為升序(ASC是升序(小跑到大)、DESC是降序(大跑到小))*/
      $sql = "INSERT INTO post()";
    $record_result = mysqli_query($les_conn,$sql);
    if (!$record_result) {
        printf("Error: %s\n", mysqli_error($les_conn));
        exit();
    }
}


//關閉資料庫
mysqli_close($les_conn);
?>
