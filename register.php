<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
	<body>
		<div class="container">
     	<form class="form-signin" method="POST" action="user_insert.php">

     		<fieldset class="form-group">
            <label for="id">학번</label>
           <input type="text" id="id" name="id" class="form-control" placeholder="id" required>
          </fieldset>

          <fieldset class="form-group">
            <label for="username">이름</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
          </fieldset>

           <fieldset class="form-group">
            <label for="email">이메일</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
          </fieldset>

          <fieldset class="form-group">
            <label for="password">비밀번호</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
          </fieldset>

         
        <input type="submit" value="submit"><input type=reset value="rewrite">
     	 </form>
	</div>
</body>
</html>