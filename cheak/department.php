<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from department";
$result = $conn->query($sql);//执行sql

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "系编号： " . $row["dno"]. "&nbsp&nbsp系名： " . $row["dname"]. "&nbsp&nbsp系主任： " . $row["dmanager"]. "<br>";
    }
} else {
    echo "0 结果";
}
