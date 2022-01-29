<?php

if (isset($_POST["submit"])) {

    //Grabbing the data
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    //Instantiate SignupConr class

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    $login = new LoginContr($user, $pass);

    //Running error handlers and user signup
    $login->loginUser();

    //Going to back to front page
    header("location: ../dashboard.php");
    unset($_SESSION["errormsg"]);
}