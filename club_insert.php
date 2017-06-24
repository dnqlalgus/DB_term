<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수
include "header.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$c_name = $_POST['c_name'];
$c_year = $_POST['c_year'];
$c_room = $_POST['c_room'];
$c_number = $_POST['c_number'];
$c_field = $_POST['c_field'];
$detail = $_POST['detail'];


$ret = mysql_query("INSERT into clubs (c_name, c_year, c_room, c_number, c_field, detail) values ('$c_name', '$c_year', '$c_room', '$c_number', '$c_field', '$detail')",$conn);
if(!$ret)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
    s_msg ('성공적으로 등록 되었습니다');
    echo "<meta http-equiv='refresh' content='0; url=admin_main.php'>";
}

?>





