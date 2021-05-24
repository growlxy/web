<?php
header("Content-Type: text/html; charset=utf8");
if(isset($_POST["submit"])){
    exit("错误执行");
}
include '../mysql.php';//链接数据库
$no = $_POST['no'];
$name = $_POST['name'];
$manager = $_POST['manager'];

if ($no && $name && $manager){
    $sql = "insert into department values ('$no', '$name', '$manager')";
    if ($conn->query($sql) === TRUE) {
        echo "插入成功<br>";
        echo "
        <script>
        setTimeout(function(){window.location.href='department.html';},3000);
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
