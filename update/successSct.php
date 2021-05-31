<?php
header("Content-Type: text/html; charset=utf8");
if(isset($_POST["submit"])){
    exit("错误执行");
}
include '../mysql.php';//链接数据库
$temp = $_POST['temp'];
$sno = $_POST['sno'];
$cno = $_POST['cno'];
$tno = $_POST['tno'];
$grade = $_POST['grade'];

if ($sno && $cno && $tno && $grade){
    $sql = "update sct set sno = '$sno', cno = '$cno', tno = '$tno', grade = '$grade'
 where sno = '$temp'";
    if ($conn->query($sql) === TRUE) {
        echo "修改成功<br>";
        echo "
        <script>
        setTimeout(function(){window.location.href='sct.php';},3000);
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
