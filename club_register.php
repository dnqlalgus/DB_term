<?php
include "header.php";
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host, $dbid, $dbpass, $dbname);

?>
<html>
 <div class="container">
    <div class="page-header">
      <h1>동아리 등록</h1>
    </div>
        <form name="c_form" action="club_insert.php" method="post" class="fullwidth">
            <input type="hidden" name="c_id" value="<?=$c['c_id']?>"/>

            <fieldset class="form-group">
            <label for="c_name">동아리 이름</label>
            <input type="text" class="form-control" id="c_name" name="c_name" >
          </fieldset>

          <fieldset class="form-group">
            <label for="c_year">동아리 설립년도</label>
            <input type="text" class="form-control" id="c_year" name="c_year" >
          </fieldset>

          <fieldset class="form-group">
            <label for="c_room">동아리방</label>
            <input type="text" class="form-control" id="c_room" name="c_room" >
          </fieldset>

          <fieldset class="form-group">
            <label for="c_number">동아리 대표 연락처</label>
            <input type="text" class="form-control" id="c_number" name="c_number" >
          </fieldset>

          <fieldset class="form-group">
            <label for="c_field">동아리 소속</label>
            <input type="text" class="form-control" id="c_field" name="c_field" >
            <label>중앙동아리 : 1 / 애기능동아리 : 2</label>
          </fieldset>
         
          <fieldset class="form-group">
            <label for="detail">동아리 설명</label>
            <textarea class="form-control" id="detail" name="detail" rows="3"><?=$c['detail']?></textarea>
          </fieldset>

            <p align="center"><button id="submit_btn" class="btn btn-primary" type="submit" value="submit">등록</button></p>

         </form>
    </div>
</div>
</html>