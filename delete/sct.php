<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from sct";
$result = $conn->query($sql);//执行sql
$n = 0;

if ($result->num_rows > 0) {
    // 输出数据
    echo "<form name=\"cheak\" method=\"post\" action=\"deleteSct.php.php\">";
    while($row = $result->fetch_assoc()) {
        echo "学号： " . $row["sno"]. "&nbsp&nbsp课程号： " . $row["cno"];
        echo "&nbsp&nbsp教工号： " . $row["tno"]. "&nbsp&nbsp成绩： " . $row["grade"];
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
