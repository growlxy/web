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

$sql = "select * from sct";
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
        <form name="insert" action="successSct.php" method="post">
            <input class="text" type="hidden" name="temp" value="'.$row['sno'].'">
            <input class="text" type="text" name="sno" placeholder="学号" required="" value="'.$row['sno'].'">
            <input class="text" type="text" name="cno" placeholder="课程号" required="" value="'.$row['cno'].'">
            <input class="text" type="text" name="tno" placeholder="教工号" required="" value="'.$row['tno'].'">
            <input class="text" type="text" name="grade" placeholder="成绩" required="" value="'.$row['grade'].'">
            <input type="submit" value="确定">
        </form>
    </div>
</div>
</body>
</html>
';