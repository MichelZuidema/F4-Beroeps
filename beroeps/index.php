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
            <h1>Lorem Ipsum is simply dummy text of the printing</h1>
            <p>Lorem Ipsum is simply dummy text of the printing</p>
        </div>
    </section>

    <main>
        <div class="container">
            <section id="grid-assignments">
                <?php
                foreach ($assignmentAction->ShowAllAssignments() as $assignment) {
                        echo '<section class="assignment">';
                        echo '<div class="container assignment-bottom">';
                        echo '<h2>' . $assignment['naam'] . '</h2>';
                        echo '<p>' . $assignment['content'] . '</p>';
                        echo '<a href="assignment.php?id=' . numhash($assignment['id']) . '">MEER -></a>';
                        echo '</div>';
                        echo '</section>';
                    }
                ?>
            </section>
        </div>
    </main>
    </body>
</html>