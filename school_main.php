<?php
session_start();
include "header.php";
?>

<html>
<head>
	<title> 학생회 회원 메인 </title>
</head>
<body>
	<div class="container">
    <div class="page-header">
	<p style="text-align: center;">환영합니다. <?=$_SESSION['username']?>님</p>
	<a href="club_budget.php"><h3>동아리 예산 배정</h3></a>
	</br>
	<a href="event_view.php"><h3>이벤트 목록 보기</h3></a>
	</br>
	<a href="user_modify.php"><h3>정보 수정</h3></a>
	</br>
	<a href="user_delete.php"><h3>회원 탈퇴</h3></a>
	</br>
	<a href="logout.php"><h3>로그아웃</h3></a>
	</br>
</div>
</div>
</body>