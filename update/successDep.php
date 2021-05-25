<?php
header("Content-Type: text/html; charset=utf8");
if(isset($_POST["submit"])){
    exit("错误执行");
}
include '../mysql.php';//链接数据库
$temp = $_POST['temp'];
$no = $_POST['no'];
$name = $_POST['name'];
$manager = $_POST['manager'];

if ($no && $name && $manager){
    $sql = "update department set dno = '$no', dname = '$name', dmanager = '$manager' where dno = '$temp'";
    if ($conn->query($sql) === TRUE) {
        echo "修改成功<br>";
        echo "
        <script>
        setTimeout(function(){window.location.href='department.php';},3000);
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
