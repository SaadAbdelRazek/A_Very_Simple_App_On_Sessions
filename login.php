<?php
session_start();
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
$email = stripslashes($email);
$email = addslashes($email);
if($email==$_SESSION['email']&&$password==$_SESSION['password']){
header('location:index.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Form</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" placeholder="E-mail" name="email"><br>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="submit" value="Log in" name="login"><br>
        <a href="signup.php">Sign Up</a>
    </form>
</body>
</html>