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

$sql = "select * from teacher";
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
        <form name="insert" action="successTea.php" method="post">
            <input class="text" type="hidden" name="temp" value="'.$row['tno'].'">
            <input class="text" type="text" name="no" placeholder="教工号" required="" value="'.$row['tno'].'">
            <input class="text" type="text" name="name" placeholder="姓名" required="" value="'.$row['tname'].'">
            <div style="padding: 20px; color: #FFFFFFFF">
                性别：
                <input class="text" type="radio" name="sex" value="1" checked="checked"/>男
                <input class="text" type="radio" name="sex" value="0"/>女
            </div>
            <input class="text" type="text" name="age" placeholder="年龄" required="" value="'.$row['tage'].'">
            <div style="padding: 20px; color: #FFFFFFFF">
                学历：
                <input class="text" type="radio" name="teb" value="2" checked="checked"/>学士
                <input class="text" type="radio" name="teb" value="1"/>硕士
                <input class="text" type="radio" name="teb" value="0"/>博士
            </div>
            <div style="padding: 20px; color: #FFFFFFFF">
                职称：
                <input class="text" type="radio" name="tpt" value="3" checked="checked"/>助教
                <input class="text" type="radio" name="tpt" value="2"/>讲师
                <input class="text" type="radio" name="tpt" value="1"/>副教授
                <input class="text" type="radio" name="tpt" value="0"/>教授
            </div>
            <input class="text" type="text" name="cno1" placeholder="主讲课程一" required="" value="'.$row['cno1'].'">
            <input class="text" type="text" name="cno2" placeholder="主讲课程二" required="" value="'.$row['cno2'].'">
            <input class="text" type="text" name="cno3" placeholder="主讲课程三" required="" value="'.$row['cno3'].'">
            <input type="submit" value="确定">
        </form>
    </div>
</div>
</body>
</html>
';