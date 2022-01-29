<?php

if (isset($_POST["submit"])) {

    //Grabbing the data
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $passRepeat = $_POST["passRepeat"];
    $email = $_POST["email"];

    //Instantiate SignupConr class

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($user, $pass, $passRepeat, $email);


    //Running error handlers and user signup
    $signup->signupUser();

    //Going to back to front page
    header("location: ../index.php?error=none");
}