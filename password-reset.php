<?php 

session_start();

require_once("function.php");

if(!isset($_SESSION['user'])) {

    header("Location:reset-password.php");

}



if(isset($_POST['submit'])) {

    passReset($_POST, $_SESSION['user']);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body style="text-align:center;">
<form method="post">
    <h1>Password Reset</h1>
    <lable>Enter New Password</label> </br>
    <input type="text" name="password" placeholder="Enter Password"> </br>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>