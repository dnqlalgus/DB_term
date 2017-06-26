<?php

include "config.php";    //데이터베이스 연결 설정파일
include "util.php";
include "header.php";

$conn = dbconnect($host, $dbid, $dbpass, $dbname);


?>
<!DOCTYPE html>
<html>
<head>
  <title>회원 탈퇴</title>
</head>
  <body>
    <div class="container">
      <form class="form-signin" method="POST" action="user_delete.php">

        <fieldset class="form-group">
            <label for="id">학번</label>
           <input type="text" id="id" name="id" class="form-control" placeholder="id" required autofocus>
          </fieldset>

          <fieldset class="form-group">
            <label for="username">이름</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
          </fieldset>

          <fieldset class="form-group">
            <label for="password">비밀번호</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
          </fieldset>

        <p align="center"><button id="submit_btn" class="btn btn-primary" type="submit" value="submit">회원 탈퇴</button></p>
       </form>
  </div>
</body>
</html>