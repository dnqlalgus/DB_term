<?php
include "header.php";
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host, $dbid, $dbpass, $dbname);
$e_id=$_GET['e_id'];

?>

<html>
<body>
 <div class="container">
    <div class="page-header">
      <h1>이벤트 수정</h1>
    </div>
        <form name="e_form" action="event_modify.php" method="post" class="fullwidth">
            <input type="hidden" name="e_id" value="<?=$e_id?>" >

          <fieldset class="form-group">
            <label for="e_name">이벤트 이름</label>
            <input type="text" class="form-control" id="e_name" name="e_name" >
          </fieldset>

          <fieldset class="form-group">
            <label for="e_place">이벤트 장소 및 날짜</label>
            <input type="text" class="form-control" id="e_place" name="e_place" >
          </fieldset>

          <fieldset class="form-group">
            <label for="e_detail">이벤트 설명</label>
            <textarea class="form-control" id="e_detail" name="e_detail" rows="3"></textarea>
          </fieldset>

          <p align="center"><button id="submit_btn" class="btn btn-primary" type="submit" value="submit">수정</button></p>

         </form>
    </div>
</body>
</html>