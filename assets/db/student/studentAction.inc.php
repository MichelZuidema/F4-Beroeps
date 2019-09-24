<?php
session_start();

/**
 * User
 *
 * @subpackage User
 * @author     Michel Zuidema <michelgzuidema@gmail.com>
 */
class studentAction extends Student
{
    public function LoginUser($studentnr, $password) {
        $studentData = $this->LoginUserDetails($studentnr);

        if(password_verify($password, $studentData[0]['wachtwoord'])) {
            $_SESSION['id'] = $studentData[0]['id'];
            $_SESSION['studentnummer'] = $studentData[0]['studentnummer'];
            $_SESSION['klas'] = $studentData[0]['klas'];
            $_SESSION['naam'] = $studentData[0]['naam'];

            header("../../../beroeps/index.php");
        } else {
            $_SESSION['errormsg'] = "Your password doesn't match!";
            header("../../../index.php");
        }
    }
}

?>