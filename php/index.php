<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
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
if($_GET['item_search'] != "") {
    @$n = $_GET['item_search'];
    /*從record資料表，撈取所有欄位(用*米字號)，當所傳來的值是字首、中、尾有符合(LIKE)資料UID_1欄位的名字，
      就會呼叫出來，並且透過id欄位來設定為升序(ASC是升序(小跑到大)、DESC是降序(大跑到小))*/
    $sql = "SELECT item.item_name,item.GID,post.quantity,post.PID,post.item_address, post.description, post.poster FROM post, item Where item.GID = post.GID AND item.item_name = '$n'";
    $record_result = mysqli_query($les_conn,$sql);
    if (!$record_result) {
        printf("Error: %s\n", mysqli_error($les_conn));
        exit();
    }
}
// else{
//     echo"沒抓到";
// }
echo "<table>
   <tr>
   <th>物品編號</th>
   <th>物品名稱</th>
   <th>貼文編號</th>
   <th>數量</th>
   <th>物品地址</th>
   <th>物品描述</th>
   <th>發布者</th>
   </tr>";

while($row = mysqli_fetch_array($record_result))
{
  echo "<tr>";
  echo "<td>" . $row['GID'] . "</td>";
  echo "<td>" . $row['item_name'] . "</td>";
  echo "<td>" . $row['PID'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "<td>" . $row['item_address'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "<td>" . $row['poster'] . "</td>";
  echo "</tr>";
}
echo "</table>";

//關閉資料庫
mysqli_close($les_conn);
?>
