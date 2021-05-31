<?php
header("Content-Type: text/html; charset=utf8");
include '../mysql.php';//链接数据库

$sql = "select * from sct";
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
            <th>学号</th>
            <th>课程号</th>
            <th>教工号</th>
            <th>成绩</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // 输出数据
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["sno"]. "</td><td>" . $row["cno"]. "</td><td>" . $row["tno"];
                echo "</td><td>" . $row["grade"]. "</td></tr>";
            }
        }
        ?>
    </table>
</div>
<div align="center" style="margin: 15px;">
    <button type="button" onclick="window.print()" class="printer">打印</button>
</div>