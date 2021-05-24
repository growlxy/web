<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from course";
$result = $conn->query($sql);//执行sql

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "课程号： " . $row["cno"]. "&nbsp&nbsp课程名： " . $row["cname"]. "&nbsp&nbsp先行课编号： " . $row["cpno"];
        echo "&nbsp&nbsp学分： " . $row["ccredit"]. "<br>";
    }
} else {
    echo "0 结果";
}
