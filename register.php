<?php

include "config.php";    //데이터베이스 연결 설정파일
include "util.php";
include "header.php";

$conn = dbconnect($host, $dbid, $dbpass, $dbname);


?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
</head>
  <body>
    <div class="container">
      <form class="form-signin" method="POST" action="user_insert.php">

        <fieldset class="form-group">
            <label for="id">학번</label>
           <input type="text" id="id" name="id" class="form-control" placeholder="id" required autofocus>
          </fieldset>

          <fieldset class="form-group">
            <label for="username">이름</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
          </fieldset>

           <fieldset class="form-group">
            <label for="email">이메일</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required>
          </fieldset>

          <fieldset class="form-group">
            <label for="password">비밀번호</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
          </fieldset>

           <fieldset class="form-group">
            <label for="belong">소속</label>
            <input type="text" id="belong" name="belong" class="form-control" placeholder="Belong" required>
            <label font-size : 9pt;>일반 : 1 / 관리자 : 2 / 학생회 : 3</label>
          </fieldset>

         
        <input type="submit" value="submit"><input type=reset value="rewrite">
       </form>
  </div>
</body>
</html>