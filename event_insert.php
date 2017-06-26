<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수
include "header.php";

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$c_name = $_POST['c_name'];
$e_name = $_POST['e_name'];
$e_place = $_POST['e_place'];
$e_detail = $_POST['e_detail'];


$ret = mysql_query("INSERT into events (c_name, e_name, e_place ,e_detail) values ('$c_name', '$e_name', '$e_place', '$e_detail')",$conn);
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