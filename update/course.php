<?php

header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from course";
$result = $conn->query($sql);//执行sql
$n = 0;

if ($result->num_rows > 0) {
    // 输出数据
    echo "<form name=\"cheak\" method=\"post\" action=\"updateCourse.php\">";
    while ($row = $result->fetch_assoc()) {
        echo "课程号： " . $row["cno"]. "&nbsp&nbsp课程名： " . $row["cname"]. "&nbsp&nbsp先行课编号： " . $row["cpno"];
        echo "&nbsp&nbsp学分： " . $row["ccredit"];
        echo "
                  选择
                  <label>
                      <input name=\"update\" type=\"radio\" value=\"$n\" />
                  </label><br>";
        $n += 1;
    }
    echo "
              <label>
                  <input type=\"submit\" value=\"确定\">
              </label>";
    echo "</form>";
} else {
    echo "0 结果";
}
