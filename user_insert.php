<?php
include 'config.php';    //데이터베이스 연결 설정파일
include 'util.php';      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$id= $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$check = mysql_query("select * from members where id='$id'", $conn);
if(mysql_num_rows($check)>0){
	s_msg ('로그인 해주십시오');
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}
else{

	$ret = mysql_query("insert into members (id, username, email, password) values ('$id', '$username', '$email', '$password')",$conn);
	if(!$ret)
	{
	    msg('Query Error : '.mysql_error($conn));
	}
	else
	{
	    echo "<meta http-equiv='refresh' content='0;url=club_join_form.php?id=$id'>";
	}
}
?>