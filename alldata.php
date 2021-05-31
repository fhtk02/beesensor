<?php
$conn = mysqli_connect(
  'localhost', // 주소
  'root',
  'root',
  'webpage');

 echo '<h1>Database</h1>';

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
    echo $row['stNUM'].' '.$row['name'].' '.$row['temperature'].'<br>';
    echo $row['created'].'<br>'.'<br>';
}