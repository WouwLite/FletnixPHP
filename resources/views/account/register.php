<?php

/*
 * /resources/views/account/register.php
 */

if (!empty($_POST['email']) && !empty($_POST['password'])):

    

endif;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Fletnix</title>
    <meta name="description" content="Fletnix Video-on-Demand">
    <meta name="author" content="Jordy & Joel BV">

    <link type="text/css" rel="stylesheet" href="/resources/assets/css/account-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
</head>
<body>

    <div class="header">
        <a href="home.php">Fletnix Members-Only</a>
    </div>

    <h1>Registreren</h1>
    <span>of <a href="login.php">meld u aan</a></span>

    <form action="register.php" method="POST">
        <input type="text" placeholder="Voer uw email in" name="email">
        <input type="password" placeholder="Voer uw wachtwoord in" name="password">
        <input type="password" placeholder="Bevestig uw wachtwoord" name="confirm_password">
        <input type="submit">
    </form>

</body>
</html>

