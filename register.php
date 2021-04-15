<?php 
   require_once("function.php");
   if(isset($_POST['submit'])){
       register($_POST);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body style="text-align: center;">
    <h1>Welcome to Registration Page</h1>
    <form action="" method="POST">
       <lable>Username</label> </br>
       <input type="text" name="username" placeholder="Enter Username"> </br>
       <lable>Password</label></br>
       <input type="password" name="password" placeholder="Enter password"></br>
       <lable>Date of Birth</label></br>
       <input type="date" name="dob" placeholder="Enter date of birth"></br>
       <button type="submit" name="submit">Register</button>

    </form>

</body>
</html>