<?php

require_once '../database.class.php';
require_once '../student/student.inc.php';
require_once '../student/studentAction.inc.php';

$studentAction = new studentAction();

if(isset($_POST['submit'])) {
    if(!empty($_POST['inputUsername'])) {
        if(!empty($_POST['inputPassword'])) {
            $studentAction->LoginUser($_POST['inputUsername'], $_POST['inputPassword']);
        } else {
            echo "Password field is empty!";
        }
    } else {
        echo "Username field is empty!";
    }
} else {
    echo 'WRONG HTTP REQUEST';
}


?>