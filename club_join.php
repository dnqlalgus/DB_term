<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);
session_start();

$c_id = $_GET['c_id'];
$id=$_SESSION['id'];

$check1 = mysql_query("SELECT * from members where id='$id'",$conn);
$check2 = mysql_query("SELECT * from clubs where c_id='$c_id'",$conn);
$check3 = mysql_query("SELECT * from member_of where id='$id' and c_id='$c_id'",$conn);

if(mysql_num_rows($check3)>0){
	s_msg ('이미 가입되어 있습니다.');
	echo "<meta http-equiv='refresh' content='0;url=main.php'>";
}
else{
	if(mysql_num_rows($check1)>0 && mysql_num_rows($check2)>0){
			$ret = mysql_query("INSERT into member_of (id, c_id, joined_at, active) values ('$id', '$c_id', NOW(), '1')",$conn);
			if(!$ret)
			{
			    msg('Query Error : '.mysql_error($conn));
			}
			else
			{
			    s_msg ('성공적으로 가입되었습니다.');
	        	echo "<meta http-equiv='refresh' content='0;url=main.php'>";
			}
			
	}
	else{
	        s_msg ('잘못된 접근입니다.');
	        echo "<meta http-equiv='refresh' content='0;url=main.php'>";
	}
}
?>
