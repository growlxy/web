<?php

include 'mysql.php';//链接数据库

$sql = "select * from user";
$result = $conn->query($sql);//执行sql
$rownum = $result->num_rows + 1;

$result->data_seek($rownum-1);

$row = $result->fetch_assoc();
echo $row['id'];
echo $rownum;