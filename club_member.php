<?php
include "header.php";
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host, $dbid, $dbpass, $dbname);

if (array_key_exists("c_id", $_GET)) {
    $c_id = $_GET["c_id"];

    $query = "select * from clubs where c_id = $c_id";
    $res = mysql_query($query, $conn);
    $c = mysql_fetch_assoc($res);

    $query = "select * from member_of natural join members where c_id = $c_id";
    $res = mysql_query($query, $conn);

    if (!$c) {
        msg("동아리가 존재하지 않습니다.");
    }
}
?>
<div class="container">
    <div class="page-header">
      <h1>동아리 회원 목록</h1>
    </div>
            <input type="hidden" name="c_id" value="<?=$c['c_id']?>"/>

            <fieldset class="form-group">
            <label for="c_name">동아리 이름</label>
            <input readonly type="text" class="form-control" id="c_name" value="<?=$c['c_name']?>">
          </fieldset>

          <fieldset class="form-group">
            <label for="detail">동아리 설명</label>
            <textarea readonly class="form-control" id="detail" rows="5"><?=$c['detail']?></textarea>
          </fieldset>

          <fieldset class="form-group">
            <label for="detail">동아리 회원</label>
                <table class="table table-striped table-bordered">
                  <thead>
                  <tr>
                      <th>이름</th>
                      <th>이메일</th>
                      <th>가입일</th>
                      <th>기능</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $row_index = 1;
                  while ($row = mysql_fetch_array($res)) {
                      echo "<tr>";
                      echo "<td>{$row['username']}</td>";
                      echo "<td>{$row['email']}</td>";
                      echo "<td>{$row['joined_at']}</td>";
                      echo "<td width='17%'>
                          <button onclick='javascript:deleteConfirm({$row['id']},{$c['c_id']})' class='btn btn-danger btn-sm'>강퇴</button>
                          </td>"; 
                      echo "</tr>";
                      $row_index++;
                  }
                  ?>
                  </tbody>
              </table>
          </fieldset>
          <a style="float:right" href="circle_list.php"><button type="button" class="btn btn-default">목록으로</button></a>
    </div>
    
</div>
<script>
        function deleteConfirm(id,c_id) {
            if (confirm("정말 강퇴시키겠습니까?") == true){    //확인
                window.location = "club_forced_out.php?id=" + id + "&c_id=" + c_id;
            }else{   //취소
                return;
            }
        }
    </script>
<? include("footer.php") ?>
