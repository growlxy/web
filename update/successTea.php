<?php
header("Content-Type: text/html; charset=utf8");
if(isset($_POST["submit"])){
    exit("错误执行");
}
include '../mysql.php';//链接数据库
$temp = $_POST['temp'];
$no = $_POST['no'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$teb = $_POST['teb'];
$tpt = $_POST['tpt'];
$cno1 = $_POST['cno1'];
$cno2 = $_POST['cno2'];
$cno3 = $_POST['cno3'];

if ($no && $name && $sex && $age && $teb && $tpt){
    if ($sex == 1) $sex = '男';
    else $sex = '女';
    if ($teb == 2) $teb = '学士';
    elseif ($teb == 1) $teb = '硕士';
    else $teb = '博士';
    if ($tpt == 3) $teb = '助教';
    elseif ($tpt == 2) $teb = '讲师';
    elseif ($tpt == 1) $teb = '副教授';
    else $tpt = '教授';
    $sql = "update teacher set tno = '$no', tname = '$name', tsex = '$sex', tage = '$age', teb = '$teb',
tpt = '$tpt', cno1 = '$cno1', cno2 = '$cno2', cno3 = '$cno3' where tno = '$temp'";
    if ($conn->query($sql) === TRUE) {
        echo "修改成功<br>";
        echo "
        <script>
        setTimeout(function(){window.location.href='teacher.php';},3000);
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
