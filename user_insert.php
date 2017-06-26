<?php
include 'config.php';    //데이터베이스 연결 설정파일
include 'util.php';      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$id= $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$belong=$_POST['belong'];

$check = mysql_query("select * from members where id='$id'",$conn);
if(mysql_num_rows($check)>0){
	s_msg ('이미 가입되어있습니다. 로그인해주세요!');
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}
else{

	$ret = mysql_query("insert into members (id, username, email, password,belong) values ('$id', '$username', '$email', '$password','$belong')",$conn);
	if(!$ret)
	{
	    msg('Query Error : '.mysql_error($conn));
	}
	else
	{
		s_msg ('회원가입 완료! 다시 로그인해주세요!');
	    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	}
}
?>