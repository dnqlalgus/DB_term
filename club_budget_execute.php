<?php
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$budget=$_POST['c_budget'];

$query=mysql_query("SELECT * from clubs where c_id='$c_id'",$conn);
$budget_query=mysql_query("UPDATE clubs set c_budget='$c_budget' where c_id='$c_id' and c_name='$c_name'",$conn);

if(!$query || !$budget_query)
{
    msg('Query Error : '.mysql_error($conn));
}
else
{
    s_msg ('예산 배정되었습니다!');
    echo "<meta http-equiv='refresh' content='0;url=school_main.php'>";

}
?>