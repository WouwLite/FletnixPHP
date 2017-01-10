<?php

/*
 * /resources/views/account/register.php
 */

// Include database info
require '../../../config/database.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
}

// Default status messages
$status = false;
$message = '';
$success = 'Uw account is aangemaakt!';
$fail = 'Something went terribly wrong!';

// Check if both email and password are not empty
if (!empty($_POST['email']) && !empty($_POST['password'])):

    // Add new user to database via POST
    //:email and :password are to prevent SQL injections
    $sql = "INSERT INTO users (email, password, firstname) VALUES (:email, :password, :firstname)";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':email', $_POST['email']);
    $statement->bindParam(':firstname', $_POST['firstname']);
    $statement->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

    // Once both email and password are entered, execute command
    // If statement is executed, return message Successful
    // Else, return message Fail (this would normally not happen, it's just an extra precaution
    if ($statement->execute()):
        $message = $success;
        $status = true;
        header( "Refresh:1; url=login.php", true, 303);
    else:
        $message = $fail;
        $status = false;
    endif;

endif;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Fletnix</title>
    <meta name="description" content="Fletnix Video-on-Demand">
    <meta name="author" content="Jordy & Joel BV">

    <link type="text/css" rel="stylesheet" href="//cdn.wouwlite.eu/fletnix.nl/resources/assets/css/account-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
</head>
<body>

    <div class="header">
        <a href="home.php">Fletnix Members-Only</a>
    </div>

        <?php if ($status = true && (!empty($message))): ?>
        <p class="message-success"><?= $message ?></p>
        <?php endif; ?>
        <?php if ($status = false && (!empty($message))): ?>
        <p class="message-fail"><?= $message ?></p>
        <?php endif; ?>

    <h1>Registreren</h1>
    <span>of <a href="login.php">meld u aan</a></span>
    <br>

    <form action="register.php" method="POST">
        <h1>Nieuw account</h1>
<!--            Firstname pattern: Capital Letters, Small Letters, Use of dashes, Use of spaces, minimal 2 - max 32 chars-->
            <input type="text" pattern="[A-Za-zÀ-ž\-\s]{2,32}" placeholder="Voer uw voornaam in" name="firstname" value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname'];}?>" title="Voer uw naam in zonder special tekens, bijv: John, Jan-Pieter" required autofocus>
            <input type="text" pattern="[A-Za-zÀ-ž\-\s]{2,150}" placeholder="Voer uw achternaam in" name="lastname" value="<?php if(isset($_POST['lastname'])){ echo $_POST['lastname'];}?>" required>
            <input type="email" placeholder="Voer uw email in" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>" title="Voer een legitiem emailadres in, bijv: john@doe.com" required>
            <input type="date" placeholder="Wat is uw geboortedatum" name="birthday" value="<?php if(isset($_POST['birthday'])){ echo $_POST['birthday'];}?>" required>
            <input type="password" placeholder="Voer uw wachtwoord in" name="password" title="Maak een sterk wachtwoord! " required>
            <input type="password" placeholder="Bevestig uw wachtwoord" name="confirm_password" required>

        <h1>SEPA machtiging</h1>
            <input class="uppercase" pattern="^NL\d{2}[A-Z]{4}\d{10}$" type="text" placeholder="Voer uw IBAN nummer in" name="iban" title="Voorbeeld: NL01KNAB123456789" value="<?php if(isset($_POST['iban'])){ echo $_POST['iban'];}?>">
            <input class="uppercase" type="text" placeholder="Voer uw BIC code in" name="bic" value="<?php if(isset($_POST['bic'])){ echo $_POST['bic'];}?>">
            <p>Gaat u akkoord met automatische incasso middels <a href="#">SEPA</a>?</p>
            <input type="radio" value="Ja" name="sepa-approved" checked>Ja
            <input type="radio" value="Nee" name="sepa-approved">Nee<br><br>
            <input type="submit" value="Account aanmaken">
    </form>

</body>
</html>

