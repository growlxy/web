<?php
header("Content-Type: text/html; charset=utf8");
if(isset($_POST["submit"])){
    exit("错误执行");
}
include '../mysql.php';//链接数据库
$sno = $_POST['sno'];
$cno = $_POST['cno'];
$tno = $_POST['tno'];
$grade = $_POST['grade'];

if ($sno && $cno && $tno && $grade){
    $sql = "insert into sct values ('$sno', '$cno', '$tno', '$grade')";
    if ($conn->query($sql) === TRUE) {
        echo "插入成功<br>";
        echo "
        <script>
        setTimeout(function(){window.location.href='sct.html';},3000);
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
