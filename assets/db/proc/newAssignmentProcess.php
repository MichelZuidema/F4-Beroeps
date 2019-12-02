<?php

require_once '../../inc/showerrors.php';


require_once '../database.class.php';
require_once '../assignment/assignment.inc.php';
require_once '../assignment/assignmentAction.inc.php';

$assignmentAction = new assignmentAction();

if(isset($_POST['submit'])) {
    if($assignmentAction->ProcessNewAssignment($_POST) == "OK") {
        header("Location: ../../../beroeps/index.php");
    } else {
        echo "<script>alert('" . $assignmentAction->ProcessNewAssignment($_POST) . "');</script>";
        header("refresh: 0;url=../../../beroeps/index.php");
    }
} else {
    echo "Wrong POST Method";
}

?>