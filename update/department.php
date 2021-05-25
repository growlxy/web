<?php

header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from department";
$result = $conn->query($sql);//执行sql
$n = 0;

if ($result->num_rows > 0) {
    // 输出数据
    echo "<form name=\"cheak\" method=\"post\" action=\"updateDepartment.php\">";
    while ($row = $result->fetch_assoc()) {
        echo "系编号： " . $row["dno"]. "&nbsp&nbsp系名： " . $row["dname"]. "&nbsp&nbsp系主任： " . $row["dmanager"];
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
