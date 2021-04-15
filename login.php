<?php 

  session_start();
  require_once("function.php");
  if(isset($_POST['submit'])){
      login($_POST);
  }
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body style="text-align:center;">
<form method="post">
    <h1>Login Page</h1>
    <lable>Username</label> </br>
       <input type="text" name="username" placeholder="Enter Username"> </br>
       <lable>Password</label></br>
       <input type="password" name="password" placeholder="Enter password"></br>
       <button type="submit" name="submit">Login</button>
</form>
</body>
</html>