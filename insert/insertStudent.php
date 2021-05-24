<?php
header("Content-Type: text/html; charset=utf8");
if(isset($_POST["submit"])){
    exit("错误执行");
}
include '../mysql.php';//链接数据库
$no = $_POST['no'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$dept = $_POST['dept'];

if ($no && $name && $sex && $age && $dept){
    if ($sex == 1) $sex = '男';
    else $sex = '女';
    $sql = "insert into student values ('$no', '$name', '$sex', '$age', '$dept')";
    if ($conn->query($sql) === TRUE) {
        echo "插入成功<br>";
        echo "
        <script>
        setTimeout(function(){window.location.href='student.html';},3000);
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
