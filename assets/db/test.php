<?php

require_once 'database.class.php';
require_once 'student/student.inc.php';
require_once 'student/studentAction.inc.php';

$studentAction = new studentAction();

$studentnr = '83239';
$wachtwoord = 'geheim';

if($studentAction->LoginUser($studentnr, $wachtwoord)) {
    echo "GOed";
} else {
    echo 'Yeet';
}

