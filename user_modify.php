<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);
session_start();

$id=$_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$get = mysql_query("SELECT * from members where id='$id'", $conn);
$ret = mysql_query("UPDATE members set email = '$email', password = '$password' where id = '$id'", $conn);

if(!$ret || !$get)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
	$row = mysql_fetch_assoc($get);

    s_msg ('성공적으로 수정 되었습니다');

    if($row['belong']=='1')
    	echo "<meta http-equiv='refresh' content='0; url=user_main.php'>";
    else if($row['belong']=='2')
    	echo "<meta http-equiv='refresh' content='0; url=admin_main.php'>";
    else if($row['belong']=='3')
    	echo "<meta http-equiv='refresh' content='0; url=school_main.php'>";
}
?>