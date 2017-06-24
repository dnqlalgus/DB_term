<?php
   include("config.php");
   include("util.php");
   
   $conn = dbconnect($host, $dbid, $dbpass, $dbname);
   session_start();

   if(isset($_POST['id']) and isset($_POST['password'])) {
      $id = $_POST['id'];
      $password = $_POST['password'];
      $belong= $_POST['belong'];

      $query="SELECT * FROM members WHERE id='$id' and password='$password' and belong='$belong'";

      $result=mysql_query($query,$conn) or die(mysql_error($conn));
      $count=mysql_num_rows($result);

      if($count==1) {
         $_SESSION['id']=$id;
         if($belong=='1')
            header("location: user_main.php");
         else if($belong=='2')
            header("location: admin_main.php");
         else if($belong=='3')
            header("location: school_main.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
   
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
            
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>ID  :</label><input type = "text" name = "id" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <label>Belong  :</label><input type = "text" name = "belong" class = "box"/><br /><br />
                  <p>일반 : 1 / 관리자 : 2 / 학생회 : 3</p>
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
               
            </div>
            
         </div>
         
      </div>

   </body>
</html>