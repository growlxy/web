<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/my.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<?php
include '../mysql.php';//链接数据库

$sql = "select * from student";
$result = $conn->query($sql);

if ($_POST) {
    $update = $_POST['update'];
    $n = 0;
    while($row = $result->fetch_assoc()) {
        if ($n == $update) {
            break;
        }
        $n += 1;
    }
}

echo '
<div class="main-agileinfo">
    <div class="agileits-top">
        <form name="insert" action="successStu.php" method="post">
            <input class="text" type="hidden" name="temp" value="'.$row['sno'].'">
            <input class="text" type="text" name="no" placeholder="学号" required="" value="'.$row['sno'].'">
            <input class="text" type="text" name="name" placeholder="姓名" required="" value="'.$row['sname'].'">
            <div style="padding: 20px; color: #FFFFFFFF">
                性别：
                <input class="text" type="radio" name="sex" value="1" checked="checked"/>男
                <input class="text" type="radio" name="sex" value="0"/>女
            </div>
            <input class="text" type="text" name="age" placeholder="年龄" required="" value="'.$row['sage'].'">
            <input class="text" type="text" name="dept" placeholder="系别" required="" value="'.$row['sdept'].'">
            <input type="submit" value="确定">
        </form>
    </div>
</div>
</body>
</html>
';