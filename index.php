<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sass/main.css">
    <link rel="icon" href="css/img/icon.png" type="image/png">
    <!-- <script src="script.js" defer></script> -->
    <title>Login</title>
</head>
<body>
    <div class="main-container">
        <form action="includes/login.inc.php" method="post">
            <div class="img-container">
                <img src="css/img/logo.jpg" alt="logo">
            </div>

            <?php 
                include "includes/error-msg.inc.php";
            ?>

            <div class="container">
                <label>Username</label>
                <input type="text" name="user" placeholder="Enter Username">

                <label>Password</label>
                <input type="password" name="pass" placeholder="Enter Password">

                <input type="submit" name="submit" value="Login">
                <div>
                    <div>or</div>
                </div>
                <input type="button" value="Login in QR">
            </div>
        </form>
    </div>
</body>
</html>