<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$id=$_GET['id'];
$c_id = $_GET['c_id'];

$ret = mysql_query("DELETE from member_of where c_id = '$c_id' and id='$id'", $conn);

if(!$ret)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
    s_msg ('성공적으로 강퇴시켰습니다');
    echo "<meta http-equiv='refresh' content='0;url=admin_main.php'>";
}

?>