<?php
include "header.php";
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수


$conn = dbconnect($host, $dbid, $dbpass, $dbname);
session_start();
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
            echo "<td>".$row['detail']."</td>";
            echo "<td width='17%'>
                <button onclick='javascript:joinConfirm({$row['c_id']})' class='btn btn-primary btn-sm'>가입</button></a>
                 <button onclick='javascript:deleteConfirm({$row['c_id']})' class='btn btn-danger btn-sm'>탈퇴</button>
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
<script>
        function deleteConfirm(c_id) {
            if (confirm("정말 탈퇴하시겠습니까?") == true){    //확인
                window.location = "club_out.php?c_id=" + c_id;
            }else{   //취소
                return;
            }
        }
        function joinConfirm(c_id) {
            if (confirm("이 동아리에 가입하시겠습니까?") == true){    //확인
                window.location = "club_join.php?c_id=" + c_id;
            }else{   //취소
                return;
            }
        }
    </script>
</body>
</html>
