<?php
include "header.php";
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host, $dbid, $dbpass, $dbname);
$query = "select * from events";

$res = mysql_query($query, $conn);
    if (!$res) {
        die('Query Error : ' . mysql_error());
    }
?>

<html>
<head>
    <title>이벤트 목록</title>
</head>
<body>
<div class="container">
    <div class="page-header">
      <h1>이벤트 목록</h1>
    </div>
    <br>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>동아리명</th>
            <th>이벤트명</th>
            <th>이벤트장소 및 날짜</th>
            <th>설명</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $row_index = 1;
        while ($row = mysql_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>".$row_index."</td>";
            echo "<td>".$row['c_name']."</td>";
            echo "<td>".$row['e_name']."</td>";
            echo "<td>".$row['e_place']."</td>";
            echo "<td>".$row['e_detail']."</td>";
            echo "</tr>";
            $row_index++;
        }
        ?>
        </tbody>
    </table>
  </div>
</div>
</div>
</body>
</html>
