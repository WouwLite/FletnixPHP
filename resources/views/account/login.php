<?php

/*
 * /resources/views/account/login.php
 */

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
}

// Include database info
require '../../../config/database.php';

// Default status messages
$status = '';
$message = '';
$fail = 'Oops! Er is een fout opgetreden. Probeer opnieuw.';

// Course
if (!empty($_POST['email']) && !empty($_POST['password'])):

    $records = $connection->prepare('SELECT id,email,password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
//        header("Location: home.php");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $message = $fail;
        $status = false;
    }

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
        <p class="message-fail"><?= $message ?></p>
    <?php endif; ?>

    <h1>Aanmelden</h1>
    <span>of <a href="register.php">registreer</a> een nieuw account</span>

    <form action="login.php" method="POST">
        <input type="email" placeholder="Voer uw email in" name="email" required autofocus>
        <input type="password" placeholder="Voer uw wachtwoord in" name="password" required>
        <input type="submit">
    </form>

</body>
</html>
