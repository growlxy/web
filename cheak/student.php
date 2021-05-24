<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from student";
$result = $conn->query($sql);//执行sql

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "学号： " . $row["sno"]. "&nbsp&nbsp姓名： " . $row["sname"]. "&nbsp&nbsp性别： " . $row["ssex"];
        echo "&nbsp&nbsp年龄： " . $row["sage"]. "&nbsp&nbsp系别：" . $row["sdept"]. "<br>";
    }
} else {
    echo "0 结果";
}
