<?php
session_start();

// If user is not logged in or if he is not a student
if(!isset($_SESSION['id'])) {
    if(!isset($_SESSION['studentnummer'])) {
        header("../index.php");
    }
}

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
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
    <?php require_once 'assets/inc/header.php'; ?>

    <section id="banner">
        <div class="container">
            <h1>Lorem Ipsum is simply dummy text of the printing</h1>
            <p>Lorem Ipsum is simply dummy text of the printing</p>
        </div>
    </section>
    </body>
</html>