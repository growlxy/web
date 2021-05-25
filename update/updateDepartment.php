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

$sql = "select * from department";
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
        <form name="insert" action="successDep.php" method="post">
            <input class="text" type="hidden" name="temp" value="'.$row['dno'].'">
            <input class="text" type="text" name="no" placeholder="系编号" required="" value="'.$row['dno'].'">
            <input class="text" type="text" name="name" placeholder="系名" required="" value="'.$row['dname'].'">
            <input class="text" type="text" name="manager" placeholder="系主任" required="" value="'.$row['dmanager'].'">
            <input type="submit" value="确定">
        </form>
    </div>
</div>
</body>
</html>
';