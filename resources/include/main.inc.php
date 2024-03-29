<!-- /resources/include/main.inc.php -->
<?php

    session_start();

    include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/session.inc.php');

    $rootpath = $_SERVER['SERVER_NAME'];
    $css = "/resources/assets/css";
    $views = "/resources/views";
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Fletnix</title>
    <meta name="description" content="Fletnix Video-on-Demand">
    <meta name="author" content="Jordy & Joel BV">

    <!-- /resources/include/styles.inc.php -->
    <!-- Local Stylesheets -->
    <link type="text/css" rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/assets/css/main.css">
    <link type="text/css" rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/assets/css/nav.css">
    <link type="text/css" rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/assets/css/search.css">
    <link type="text/css" rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/assets/css/footer.css">

    <!-- External Stylesheets -->


    <!-- External Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito|Nunito+Sans|Comfortaa" rel="stylesheet">

</head>

<body>
<nav>
    <!-- Change the deep-links for each nested page-block -->
    <ul>
        <li class="logo"><h1>Fletnix</h1></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>"><strong>Home</strong></a></li>
        <?php if (!empty($user)): ?>
            <li><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/account/home.php">Account</a></li>
        <?php endif; ?>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/account/paywall.php">Abonnementen</a></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/?page=films">Films</a></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/?page=series">Series</a></li>
        <li>
            <form>
                <input type="search" id="search" name="Search" placeholder="Zoeken naar..."/>
            </form>
        </li>
    </ul>
</nav>

<!-- The vertical nav contains search bar, popular films, latest releases, etc.  -->
<div class="container">
    <div class="nav vertnav">
        <ul>
            <?php if (!empty($user)): ?>
                <li class="account-logout"><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/account/logout.php">Afmelden</a></li>
                <li class="active"><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>">Overzicht</a></li>
                <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/?page=just-released">Net uitgebracht</a></li>
                <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/?page=favorites">Favorieten</a></li>
                <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/?page=top10">Top 10</a></li>
            <?php else: ?>
                <li class="account-login"><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/account/login.php">Aanmelden</a></li>
                <li class="active"><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>">Overzicht</a></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="main margin15">