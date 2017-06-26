<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수
include "header.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);
session_start();

?>


<html>
<head>
	<title> 회원 정보 수정</title>
</head>
<body>
	<div class="container">
    <div class="page-header">
	<p style="text-align: center;">환영합니다. <?=$_SESSION['username']?>님</p>
	<form class="form-modify" method="POST" action="user_modify.php">

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
         
        <input type="submit" value="submit"><input type=reset value="rewrite">
       </form>
   </div>
</div>
</body>
</html>