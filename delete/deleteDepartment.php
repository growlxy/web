<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from department";
$result = $conn->query($sql);

if ($_POST) {
    $delete = $_POST['delete'];
    $n = $m = 0;
    while($row = $result->fetch_assoc()) {
        $del = $row['dno'];
        if ($n == $delete[$m]) {
            $sql = "delete from student where dno = $del";
            $conn->query($sql);
            if (count($delete) == ($m+1)) {
                break;
            }
            $m += 1;
        }
        $n += 1;
    }
    echo "
        <script>
        setTimeout(function(){window.location.href='department.php';},3000);
        </script>";
    echo '删除成功！';
}else{
    echo "您还没进行选择！";
    echo "
        <script>
        setTimeout(function(){window.location.href='department.php';},1000);
        </script>";
}
