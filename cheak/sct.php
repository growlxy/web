<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from sct";
$result = $conn->query($sql);//执行sql

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "学号： " . $row["sno"]. "&nbsp&nbsp课程号： " . $row["cno"];
        echo "&nbsp&nbsp教工号： " . $row["tno"]. "&nbsp&nbsp成绩： " . $row["grade"]. "<br>";
    }
} else {
    echo "0 结果";
}
