<?php
session_start();
  if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $name = stripslashes($name);
    $name = addslashes($name);
    $name = ucwords(strtolower($name));
    $email = stripslashes($email);
    $email = addslashes($email);
    
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['password']=$password; // not secure but it is for test only
    header('location:login.php');
}
?>
<!-- -------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="Name" name="name"><br>
        <input type="email" placeholder="E-mail" name="email"><br>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="submit" value="Sign Up" name="signup"><br>
    </form>
</body>
</html>