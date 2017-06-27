<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$c_room = $_POST['c_room'];
$c_number = $_POST['c_number'];
$detail = $_POST['detail'];


$get = mysql_query("SELECT * from clubs where c_id='$c_id'", $conn);
$ret = mysql_query("UPDATE clubs set c_name = '$c_name', c_room = '$c_room', c_number = '$c_number', detail='$detail' where c_id = '$c_id'", $conn);

if(!$ret || !$get)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
   s_msg ('성공적으로 수정 되었습니다');

    echo "<meta http-equiv='refresh' content='0;url=admin_main.php'>";
}

?>