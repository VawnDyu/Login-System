<?php

class SignupContr extends Signup {

    private $user;
    private $pass;
    private $passRepeat;
    private $email;

    public function __construct($user, $pass, $passRepeat, $email) {
        $this->user = $user;
        $this->pass = $pass;
        $this->passRepeat = $passRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false) {
            header("location: ../index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false) {
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false) {
            header("location: ../index.php?error=userforemailtaken");
            exit();
        }

        $this->setUser($this->user, $this->pass, $this->email);
    }

    private function emptyInput() {
        $result;

        if (empty($this->user) || empty($this->pass) || empty($this->passRepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->user)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;

        if ($this->pass !== $this->passRepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result;

        if (!$this->checkUser($this->user, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}