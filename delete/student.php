<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from student";
$result = $conn->query($sql);//执行sql
$n = 0;

if ($result->num_rows > 0) {
    // 输出数据
    echo "<form name=\"cheak\" method=\"post\" action=\"deleteStudent.php\">";
    while($row = $result->fetch_assoc()) {
        echo "学号： " . $row["sno"]. "&nbsp&nbsp姓名： " . $row["sname"]. "&nbsp&nbsp性别： " . $row["ssex"];
        echo "&nbsp&nbsp年龄： " . $row["sage"]. "&nbsp&nbsp系别：" . $row["sdept"];
        echo "
                  删除？
                  <label>
                      <input name=\"delete[]\" type=\"checkbox\" value=\"$n\" />
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
