<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <p>
        Hello Mr: <strong><?php echo $_SESSION['name'] ?></strong>
    </p>
</body>
</html>