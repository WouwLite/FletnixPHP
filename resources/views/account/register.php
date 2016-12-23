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
$fail = 'Oh jee! Er is een fout opgetreden! Controleer uw info en probeer het overnieuw.';

// Check if both email and password are not empty
if (!empty($_POST['email']) && !empty($_POST['password'])):

    // Add new user to database via POST
    //:email and :password are to prevent SQL injections
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':email', $_POST['email']);
    $statement->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

    // Once both email and password are entered, execute command
    // If statement is executed, return message Successful
    // Else, return message Fail (this would normally not happen, it's just an extra precaution
    if ($statement->execute()):
        $message = $success;
        $status = true;
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

    <link type="text/css" rel="stylesheet" href="/resources/assets/css/account-style.css">
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

    <form action="register.php" method="POST">
        <input type="email" placeholder="Voer uw email in" name="email" required autofocus>
        <input type="password" placeholder="Voer uw wachtwoord in" name="password" required>
        <input type="password" placeholder="Bevestig uw wachtwoord" name="confirm_password" required>
        <input type="submit">
    </form>

</body>
</html>

