<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from teacher";
$result = $conn->query($sql);

if ($_POST) {
    $delete = $_POST['delete'];
    $n = $m = 0;
    while($row = $result->fetch_assoc()) {
        $del = $row['tno'];
        if ($n == $delete[$m]) {
            $sql = "delete from teacher where tno = $del";
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
        setTimeout(function(){window.location.href='teacher.php';},3000);
        </script>";
    echo '删除成功！';
}else{
    echo "您还没进行选择！";
    echo "
        <script>
        setTimeout(function(){window.location.href='teacher.php';},1000);
        </script>";
}
