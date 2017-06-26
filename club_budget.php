<?php
include "header.php";
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host, $dbid, $dbpass, $dbname);
$query = "select * from clubs";

$res = mysql_query($query, $conn);
    if (!$res) {
        die('Query Error : ' . mysql_error());
    }
?>

<html>
<head>
    <title>동아리 목록</title>
</head>
<body>
<div class="container">
    <div class="page-header">
      <h1>동아리 목록</h1>
    </div>
    <br>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>동아리명</th>
            <th>동아리방</th>
            <th>대표 연락처</th>
            <th>예산</th>
            <th>설명</th>
            <th>기능</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $row_index = 1;
        while ($row = mysql_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>".$row_index."</td>";
            echo "<td>".$row['c_name']."</td>";
            echo "<td>".$row['c_room']."</td>";
            echo "<td>".$row['c_number']."</td>";
            echo "<td>".$row['c_budget']."</td>";
            echo "<td>".$row['detail']."</td>";
            echo "<td width='17%'>
                <a href='club_budget_form.php?c_id={$row['c_id']}'><button class='btn btn-primary btn-sm'>예산</button></a>
                 <a href='club_member_only.php?c_id={$row['c_id']}'><button class='btn btn-primary btn-sm'>회원</button></a>
                </td>";
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
