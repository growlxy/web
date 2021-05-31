<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from teacher";
$result = $conn->query($sql);
?>
<style type="text/css">
    #content {
        margin-top: 50px;
    }
    table.gridtable {
        font-family: verdana,arial,sans-serif;
        font-size:15px;
        color:#333333;
        border-width: 1px;
        border-color: #666666;
        border-collapse: collapse;
    }
    table.gridtable th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #dedede;
    }
    table.gridtable td {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #ffffff;
    }
</style>
<style media="print">.printer {display:none;}</style>
<div id="content">
    <table align="center" class="gridtable">
        <tr>
            <th>教工号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
            <th>学历</th>
            <th>职称</th>
            <th>主讲课程一</th>
            <th>主讲课程二</th>
            <th>主讲课程三</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // 输出数据
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["tno"]. "</td><td>" . $row["tname"]. "</td><td>" . $row["tsex"];
                echo "</td><td>" . $row["tage"]. "</td><td>" . $row["teb"];
                echo "</td><td>" . $row["tpt"]. "</td><td>" . $row["cno1"];
                echo "</td><td>" . $row["cno2"]. "</td><td>" . $row["cno3"]. "</td></tr>";
            }
        }
        ?>
    </table>
</div>
<div align="center" style="margin: 15px;">
    <button type="button" onclick="window.print()" class="printer">打印</button>
</div>