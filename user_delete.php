<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$ret = mysql_query("DELETE from members where id = '$id' and username='$username' and password='$password'", $conn);

if(!$ret)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
    s_msg ('성공적으로 고동아리에서 탈퇴되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=main.php'>";
}

?>


