<?php
session_start();

//If user is not logged in or if he is not a student
if(!isset($_SESSION['id'])) {
    if(!isset($_SESSION['studentnummer'])) {
        header("../index.php");
    }
}

require_once '../assets/db/database.class.php';
require_once '../assets/db/student/student.inc.php';
require_once '../assets/db/student/studentAction.inc.php';
require_once '../assets/db/assignment/assignment.inc.php';
require_once '../assets/db/assignment/assignmentAction.inc.php';
require_once '../assets/inc/functions.php';

$assignmentAction = new assignmentAction();
$studentAction = new studentAction();

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
                <?php if($studentAction->isMentor()) : ?>
                    <a href="#"><button class="btnDeleteAssignment" id="myBtn" onclick="openModal();"><b>Verwijder Opdracht</b></button></a>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h3>Weet u zeker dat u de opdracht '<span><?= $assignment['naam']; ?></span>' wilt verwijderen?</h3>
                            <div>
                                <a href="../assets/db/proc/deleteAssignment.php?id=<?= numhash($assignment['id']); ?>"><button id="modalYes">Ja</button></a>
                                <button id="modalNo">Nee</button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
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

        <script src="../assets/js/modal.js"></script>
    </body>
</html>