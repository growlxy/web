<?php
header("Content-Type: text/html; charset=utf8");
if(isset($_POST["submit"])){
    exit("错误执行");
}
include '../mysql.php';//链接数据库
$no = $_POST['no'];
$name = $_POST['name'];
$pno = $_POST['pno'];
$credit = $_POST['credit'];

if ($no && $name && $pno && $credit){
    $sql = "insert into course values ('$no', '$name', '$pno', '$credit')";
    if ($conn->query($sql) === TRUE) {
        echo "插入成功<br>";
        echo "
        <script>
        setTimeout(function(){window.location.href='course.html';},3000);
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
