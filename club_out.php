<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);
session_start();

$id=$_SESSION['id'];
$c_id = $_GET['c_id'];

$ret = mysql_query("DELETE from member_of where c_id = '$c_id' and id='$id'", $conn);
#$ret2 = mysql_query("delete from members where id not in (select c_id from member_of)", $conn);

if(!$ret)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
    s_msg ('성공적으로 탈퇴 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=main.php'>";
}

?>


