<?php
	include "config.php";
	require('connect.php');
	
	if (isset($_POST['username']) && isset($_POST['password'])){
		$id=$_POST['id'];
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `members` (id, username, email, password) VALUES ('$id', $username', '$email', $password')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
	<body>
		<div class="container">
     	<form class="form-signin" method="POST">

     		<fieldset class="form-group">
            <label for="id">학번</label>
           <input type="text" name="id" class="form-control" placeholder="id" required>
          </fieldset>

          <fieldset class="form-group">
            <label for="name">이름</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
          </fieldset>

           <fieldset class="form-group">
            <label for="email">이메일</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          </fieldset>

          <fieldset class="form-group">
            <label for="password"> 비밀번호</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          </fieldset>

         

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
     	 </form>
	</div>
</body>
</html>