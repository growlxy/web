<title>check</title>
<?php
header("Content-Type: text/html; charset=utf8");
if(isset($_POST["submit"])){
    exit("错误执行");
}
include 'mysql.php';//链接数据库
$name = $_POST['Username'];//post获得用户名表单值
$password = $_POST['password'];//post获得用户密码单值
$repassword = $_POST['repassword'];

$sql = "select * from user";
$result = $conn->query($sql);
$id = $result->num_rows + 1;

if ($name && $password && $repassword){//如果用户名和密码都不为空
    if ($password != $repassword) {
        echo "两次密码不一致,3秒后返回。<br>";
        echo "
        <script>
        setTimeout(function(){window.location.href='register.html';},3000);
        </script>";
        echo '若无响应<br>';

        echo '<a href="javascript:;" onclick="window.location.href=\'register.html\';">点此处</a>';
    }
    $sql = "insert into user values ('$id', '$name', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("注册成功！")</script>';
        header("refresh:0;url=index.html");
        exit;
//        echo "
//        <script>
//        setTimeout(function(){window.location.href='sct.html';},3000);
//        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
