<?php
require_once "pdo.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/libstyle.css">
    <title>TB | Login</title>
</head>
<body>
    <h1>The Bookstore|Admin Portal</h1>

    <form method="post">
        <p>Email:
        <input type="text" name="email"></p>
        <p>Password:
        <input type="password" name="password"></p>
        <p><input type="submit" value="Sign In"/>
        <a href="index.php">Cancel</a></p>
    </form>
</body>
</html>