<?php

require_once '../../inc/showerrors.php';


require_once '../database.class.php';
require_once '../assignment/assignment.inc.php';
require_once '../assignment/assignmentAction.inc.php';
require_once '../../inc/functions.php';

$assignmentAction = new assignmentAction();

if(isset($_GET['id'])) {
    $id = numhash($_GET['id']);
    if($assignmentAction->RemoveAssignment($id)) {
        header("Location: ../../../beroeps/index.php");
    } else {
        echo "<script>alert('Er is iets foutgegaan! " . $assignmentAction->RemoveAssignment($id) . "');</script>";
        header("Refresh: 0;url= ../../../beroeps/index.php");
    }
} else {

}