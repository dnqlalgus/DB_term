<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$e_id=$_POST['e_id'];
$c_name=$_POST['c_name'];
$e_name = $_POST['e_name'];
$e_place = $_POST['e_place'];
$e_detail = $_POST['e_detail'];


$get = mysql_query("SELECT * from events where e_id='$e_id'", $conn);
$ret = mysql_query("UPDATE events set c_name = '$c_name', e_name = '$e_name', e_place = '$e_place', e_detail='$e_detail' where e_id = '$e_id'", $conn);

if(!$ret || !$get)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
	$row = mysql_fetch_assoc($get);

    s_msg ('성공적으로 수정 되었습니다');

    echo "<meta http-equiv='refresh' content='0;url=admin_main.php'>";
}

?>