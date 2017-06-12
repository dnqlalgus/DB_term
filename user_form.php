<?
include "header.php";
include "config.php";    //데이터베이스 연결 설정파일

$conn = dbconnect($host, $dbid, $dbpass, $dbname);
$mode = "등록";
$action = "user_insert.php";


  require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['m_id'];
        $name = $_POST['m_name'];
        $email = $_POST['email'];
 
        $query = "INSERT INTO `user` (ID, Name, Major, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
?>

 <div class="container">
    <div class="page-header">
      <h1>일반 회원 <?=$mode?></h1>
    </div>
        <form name="c_form" action="<?=$action?>" method="post" class="fullwidth">

          <fieldset class="form-group" id="m_id_cont">
            <label for="m_id">학번</label>
            <input type="text" onkeyPress="if ((event.keyCode<48) || (event.keyCode>57)) event.returnValue=false;" class="form-control" id="m_id" name="m_id" value="<?=$m['m_id']?>">
          </fieldset>

          <fieldset class="form-group">
            <label for="m_name">이름</label>
            <input type="text" class="form-control" id="m_name" name="m_name" value="<?=$m['m_name']?>">
          </fieldset>

          <fieldset class="form-group">
            <label for="major"> 전공</label>
            <input type="text" class="form-control" id="major" name="major" value="<?=$m['major']?>">
          </fieldset>

          <fieldset class="form-group">
            <label for="email">이메일</label>
            <input type="text" class="form-control" id="email" name="email" value="<?=$m['email']?>">
          </fieldset>
         
          


            <p align="center"><button id="submit_btn" class="btn btn-primary" type="submit" value="submit" onclick="javascript:return validate();"><?=$mode?></button></p>

            <script>
                function validate() {
                    var regExp = /[0-9a-zA-Z][_0-9a-zA-Z-]*@[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+){1,2}$/;

                    if(document.getElementById("m_id").value == "") {
                        alert ("학번을 입력해 주세요"); return false;
                    }
                    else if(document.getElementById("m_name").value == "") {
                        alert ("이름을 입력해 주세요"); return false;
                    }
                    else if(document.getElementById("major").value == "") {
                        alert ("전공을 입력해 주세요"); return false;
                    }
                    else if(document.getElementById("email").value == "") {
                        alert ("이메일을 입력해 주세요"); return false;
                    }
                    return true;
                }
                // jQuery plugin to prevent double submission of forms
                jQuery.fn.preventDoubleSubmission = function() {
                  $(this).on('submit',function(e){
                    var $form = $(this);

                    if ($form.data('submitted') === true) {
                      // Previously submitted - don't submit again
                      e.preventDefault();
                    } else {
                      // Mark it so that the next submit can be ignored
                      $form.data('submitted', true);
                    }
                  });

                  // Keep chainability
                  return this;
                };
                <?php 
                  if ($mode == '수정') {
                  echo "document.getElementById('m_id_cont').style.display = 'none';";
                }
              ?>
            </script>

        </form>
    </div>
</div>
<? include("footer.php") ?>
