<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$e_id = $_GET['e_id'];

$ret = mysql_query("DELETE from events where e_id = '$e_id'", $conn);


if(!$ret)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
    s_msg ('성공적으로 삭제 되었습니다');
    echo "<meta http-equiv='refresh' content='0;url=admin_main.php'>";
}

?>