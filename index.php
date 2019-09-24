<?php
session_start();

// If user is already logged in
if(isset($_SESSION['id'])) {
    header("beroeps/index.php");
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

    <section id="login_box">
        <form action="assets/db/proc/loginProcess.php" method="POST">
            <div class="container" style="width: 40%">
                <div class="row">
                    <div class="col-25">
                        <label for="username">Gebruikersnaam: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="username" name="inputUsername">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="password">Wachtwoord: </label>
                    </div>
                    <div class="col-75">
                        <input type="password" id="password" name="inputPassword">
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </div>
        </form>
    </section>
    </body>
</html>