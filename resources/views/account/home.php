<?php

    session_start();

    // Include database info
    require '../../../config/database.php';


    if (isset($_SESSION['user_id'])) {
        $records = $connection->prepare('SELECT * FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = NULL;

        if (count($results) > 0) {
            $user = $results;
        }
    }
?>

<!DOCTYPE html>

<html lang="en">
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

    <?php if (!empty($user)): ?>
        <br>Welkom <?= $user['firstname'] ?>!
        <br><br>U bent aangemeld.
        <br><br>Uw accountstatus is:
        <?php if ($user['active'] != 0): ?>
            <p>Actief</p>
            <form>
                <input type="text" value="Premium abonnement - €14,99 p/m" readonly>
            </form>
        <?php else: ?>
            Geblokkeerd
        <?php endif; ?>
        <a href="logout.php">Afmelden</a>
    <?php else: ?>
        <h1>Meld u aan of registreer een nieuw account</h1>
        <a href="login.php">Aanmelden</a> of
        <a href="register.php">Registreren</a>
    <?php endif; ?>

</body>
</html>