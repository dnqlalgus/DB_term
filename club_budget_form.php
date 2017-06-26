<?php
include "header.php";
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host, $dbid, $dbpass, $dbname);
$c_id=$_GET['c_id'];

#$query="SELECT * from clubs where c_id='$c_id'"
#$res=mysql_query($query,$conn) or die(mysql_error($conn));
#$row=mysql_fetch_assoc($res);

?>

<html>
<body>
 <div class="container">
    <div class="page-header">
      <h1>동아리 예산 배정</h1>
    </div>
        <form name="e_form" action="club_budget_execute.php" method="post" class="fullwidth">
            <input type="hidden" name="c_id" value="<?=$c_id?>" >

            <fieldset class="form-group">
            <label for="c_name">동아리 이름</label>
            <input type="text" class="form-control" id="c_name" name="c_name" >
          </fieldset>
      
          <fieldset class="form-group">
            <label for="budget">동아리 예산</label>
            <input type="text" class="form-control" id="c_budget" name="c_budget" >
          </fieldset>

          <p align="center"><button id="submit_btn" class="btn btn-primary" type="submit" value="submit">예산 배정</button></p>

         </form>
    </div>
</body>
</html>