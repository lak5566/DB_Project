<?php
$host = "localhost"; //本機端
$username = "root"; //mysql帳號
$passwd = "like5566";   //mysql密碼
$database = "love_earth_system"; //mysql資料庫

//建立資料庫物件
$les_conn = new mysqli($host, $username, $passwd, $database);
if ($les_conn -> connect_error){
    echo "連結mysql資料庫失敗";
}
else{
  $les_conn -> query("SET NAMES 'utf8'");
  //echo "連結mysql資料庫成功，語系設為utf8";
}

//接收從前端傳來的內容，撈取資料後透過ajax丟回前端
if($_GET['name'] != "") {
  @$n = $_GET['name'];
  /*從record資料表，撈取所有欄位(用*米字號)，當所傳來的值是字首、中、尾有符合(LIKE)資料UID_1欄位的名字，
    就會呼叫出來，並且透過id欄位來設定為升序(ASC是升序(小跑到大)、DESC是降序(大跑到小))*/
  $sql = "SELECT * FROM record WHERE UID_1 LIKE '%$n%' ORDER BY RID ASC";
  $record_result = mysqli_query($les_conn,$sql);
}
echo "<table>
     <tr>
     <th>交易編號</th>
     <th>發佈者</th>
     <th>我的物品</th>
     <th>對方的物品</th>
     <th>交易時間</th>
     <th>交易是否成功</th>
     </tr>";

while($row = mysqli_fetch_array($record_result))
{
    echo "<tr>";
    echo "<td>" . $row['RID'] . "</td>";
    echo "<td>" . $row['UID_2'] . "</td>";
    echo "<td>" . $row['GID_1'] . "</td>";
    echo "<td>" . $row['GID_2'] . "</td>";
    echo "<td>" . $row['record_time'] . "</td>";
    echo "<td>" . $row['success'] . "</td>";
    echo "</tr>";
}
echo "</table>";

//關閉資料庫
mysqli_close($les_conn);
?>