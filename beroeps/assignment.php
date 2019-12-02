<?php
session_start();

//If user is not logged in or if he is not a student
if(!isset($_SESSION['id'])) {
    if(!isset($_SESSION['studentnummer'])) {
        header("../index.php");
    }
}

require_once '../assets/db/database.class.php';
require_once '../assets/db/assignment/assignment.inc.php';
require_once '../assets/db/assignment/assignmentAction.inc.php';
require_once '../assets/inc/functions.php';

$assignmentAction = new assignmentAction();
$assignment = $assignmentAction->ShowAssignmentDetails(numhash($_GET['id']));

?>
<html>
    <head>
        <title>BEROEPS</title>

        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta name="description" content="Beroeps website Grafisch Lyceum Rotterdam">
        <meta name="author" content="Michel Zuidema">
        <meta name="viewport" content="width=device-width">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="../assets/css/main.css">
    </head>
    <body>
        <?php require_once '../assets/inc/header.php'; ?>

        <section id="banner">
            <div class="container">
                <h1><?php echo $assignment['naam']; ?></h1>
            </div>
        </section>

        <main>
            <div class="container">
                <section class="assignmentpage">
                    <h2><?php echo $assignment['naam']; ?></h2>
                    <ul>
                        <li>Niveau: <?php echo $assignment['niveau']; ?></li>
                        <li>Soort: <?php echo $assignment['soort']; ?></li>
                    </ul>
                    <p><?php echo $assignment['content']; ?></p>
                </section>
            </div>
        </main>
    </body>
</html>