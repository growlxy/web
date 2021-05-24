<?php
header("Content-Type: text/html; charset=utf8");
if(isset($_POST["submit"])){
    exit("错误执行");
}
include 'mysql.php';//链接数据库
$name = $_POST['Username'];//post获得用户名表单值
$password = $_POST['password'];//post获得用户密码单值

if ($name && $password){//如果用户名和密码都不为空
    $sql = "select * from user where username ='$name' and password ='$password'";
    $result = $conn->query($sql);//执行sql
    $rows= $result->num_rows;//返回一个数值
    $result->close();
    if($rows){//0 false 1 true
        header("refresh:0;url=welcome.html");
        exit;
    }else{
        echo "用户名或密码错误,3秒后返回。<br>";
        echo "
        <script>
        setTimeout(function(){window.location.href='index.html';},3000);
        </script>";
        echo '若无响应<br>';

        echo '<a href="javascript:;" onclick="window.location.href=\'index.html\';">点此处</a>';//如果错误使用js 1秒后跳转到登录页面重试;
    }
}
