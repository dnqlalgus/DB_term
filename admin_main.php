<?php
include "header.php";
session_start();
?>

<html>
<head>
	<title> 관리자 회원 메인 </title>
</head>
<body>
	<p style="text-align: center;">환영합니다. <?=$_SESSION['id']?>님</p>
	<a href="club_register.php"><h3>동아리 등록하기</h3></a>
	</br>
	<a href="event_register.php"><h3>이벤트 등록하기</h3></a>
	</br>
	<a href="club_list.php"><h3>동아리 목록보기</h3></a>
	</br>
	<a href="user_modify.php"><h3>정보 수정</h3></a>
	</br>
	<a href="user_delete.php"><h3>회원 탈퇴</h3></a>
	</br>
	<a href="logout.php"><h3>로그아웃</h3></a>
	</br>
</body>