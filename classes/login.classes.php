<?php

class Login extends Dbh {

    protected function getUser($user, $pass) {
        $stmt = $this->connect()->prepare('SELECT users_pass FROM users WHERE users_user = ? OR users_email = ?');

        if (!$stmt->execute(array($user, $pass))) {
            $stmt = null;

            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");

            session_start();
            $_SESSION["errormsg"] = 'Username does not exist';

            exit();
        }
        
        $passHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPass = password_verify($pass, $passHashed[0]["users_pass"]);

        if ($checkPass == false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");

            session_start();
            $_SESSION["errormsg"] = 'Incorrect Password';
            exit();
        } else if ($checkPass == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_user = ? OR users_email = ? AND users_pass = ?;');

            if (!$stmt->execute(array($user, $user, $pass))) {
                $stmt = null;
    
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            // if ($stmt->rowCount() == 0) {
            //     $stmt = null;
            //     header("location: ../index.php?error=usernotfoundasd");

            //     exit();
            // }

            $userSession = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $userSession[0]["users_id"];
            $_SESSION["useruid"] = $userSession[0]["users_user"];

        }

        $stmt = null;
    }

}