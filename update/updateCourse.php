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

$sql = "select * from course";
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
        <form name="insert" action="successCou.php" method="post">
            <input class="text" type="hidden" name="temp" value="'.$row['cno'].'">
            <input class="text" type="text" name="no" placeholder="课程号" required="" value="'.$row['cno'].'">
            <input class="text" type="text" name="name" placeholder="课程名" required="" value="'.$row['cname'].'">
            <input class="text" type="text" name="pno" placeholder="先行课编号" required="" value="'.$row['cpno'].'">
            <input class="text" type="text" name="credit" placeholder="学分" required="" value="'.$row['ccredit'].'">
            <input type="submit" value="确定">
        </form>
    </div>
</div>
</body>
</html>
';