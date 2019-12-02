<?php

// Database
require_once 'database.class.php';

// Students
//require_once 'student/student.inc.php';
//require_once 'student/studentAction.inc.php';
//$studentAction = new studentAction();

// Assignments
//require_once 'assignment/assignment.inc.php';
//require_once 'assignment/assignmentAction.inc.php';
//$assignmentAction = new assignmentAction();

echo password_hash("geheim", PASSWORD_DEFAULT);