<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from teacher";
$result = $conn->query($sql);//执行sql
$n = 0;

if ($result->num_rows > 0) {
    // 输出数据
    echo "<form name=\"cheak\" method=\"post\" action=\"deleteTeacher.php.php\">";
    while($row = $result->fetch_assoc()) {
        echo "教工号： " . $row["tno"]. "&nbsp&nbsp姓名： " . $row["tname"]. "&nbsp&nbsp性别： " . $row["tsex"];
        echo "&nbsp&nbsp年龄： " . $row["tage"]. "&nbsp&nbsp学历：" . $row["teb"];
        echo "&nbsp&nbsp职称： " . $row["tpt"]. "&nbsp&nbsp主讲课程一：" . $row["cno1"];
        echo "&nbsp&nbsp主讲课程二： " . $row["cno2"]. "&nbsp&nbsp主讲课程三：" . $row["cno3"];
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
