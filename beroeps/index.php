<?php
session_start();

//If user is not logged in or if he is not a student
if(!isset($_SESSION['id'])) {
    header("Location: ../index.php");
}

require_once '../assets/db/database.class.php';
require_once '../assets/db/assignment/assignment.inc.php';
require_once '../assets/db/assignment/assignmentAction.inc.php';
require_once '../assets/db/student/student.inc.php';
require_once '../assets/db/student/studentAction.inc.php';
require_once '../assets/inc/functions.php';

$assignmentAction = new assignmentAction();
$studentAction = new studentAction();

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

        <?php if($studentAction->isMentor()) : ?>
            <div class="container mentorButton">
                <a href="#"><button class="new_assignment" id="myBtn" onclick="openModal();">Nieuwe Opdracht</button></a>
            </div>
         <?php endif; ?>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="assets/db/proc/loginProcess.php" method="POST">
                    <div class="container" style="width: 40%">
                        <h2>Nieuwe Opdracht</h2>
                        <div class="row">
                            <div class="col-25">
                                <label for="assignmentName">Opdrachtnaam: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="assignmentName">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="assignmentGenre">Soort Opdracht: </label>
                            </div>
                            <div class="col-75">
                                <select name="assignmentGenre">
                                    <option value="">Web</option>
                                    <option value="">Game</option>
                                    <option value="">Mobile</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="assignmentLevel">Niveau: </label>
                            </div>
                            <div class="col-75">
                                <select name="assignmentGenre">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                    <option value="">D</option>
                                    <option value="">E</option>
                                    <option value="">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="assignmentContent">Content: </label>
                            </div>
                            <div class="col-75">
                                <textarea name="assignmentContent" id="assignment_content"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25"></div>
                            <div class="col-75">
                                <input type="submit" value="Submit" name="submit" class="assignment_submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php if(!$studentAction->isMentor()) : ?>
            <section id="banner">
                <div class="container">
                    <h1>Lorem Ipsum is simply dummy text of the printing</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing</p>
                </div>
            </section>
        <?php endif; ?>

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
        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
</html>