<?php

class LoginContr extends Login {

    private $user;
    private $pass;

    public function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }

    public function loginUser() {

        if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinputs");

            session_start();
            $_SESSION["errormsg"] = 'All fields are required';

            exit();
        }

        $this->getUser($this->user, $this->pass);
    }

    private function emptyInput() {
        $result;

        if (empty($this->user) || empty($this->pass)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}