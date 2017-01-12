<?php

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

    <!-- Use CDN own for CSS Stylesheets -->
    <link type="text/css" rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/assets/css/main.css">
<!--    <link type="text/css" rel="stylesheet" href="//cdn.wouwlite.eu/fletnix-nl/resources/assets/css/main.css">-->
    <link type="text/css" rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/assets/css/nav.css">
    <link type="text/css" rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/assets/css/search.css">
    <link type="text/css" rel="stylesheet" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/assets/css/footer.css">

    <!-- External Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

</head>

<body>
<nav>
    <!-- Change the deep-links for each nested page-block -->
    <ul>
        <li class="logo"><h1>Fletnix</h1></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>"><strong>Home</strong></a></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/account/paywall.php">Abonnementen</a></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/members/films.php">Films</a></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/members/series.php">Series</a></li>
        <li>
            <form>
                <input type="search" id="search" name="Search" placeholder="Zoeken naar..."/>
                <!--                <input type="submit" value="Zoeken"/>-->
            </form>
        </li>
    </ul>
</nav>

<!-- The vertical nav contains search bar, populair films, latest releases, etc.  -->
<div class="container">
    <div class="nav vertnav">
        <ul>
            <?php if (!empty($user)): ?>
                <li class="account"><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/account/logout.php">Afmelden</a></li>
            <?php else: ?>
                <li class="account"><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/account/login.php">Aanmelden</a></li>
            <?php endif; ?>
            <li class="active"><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>">Populair</a></li>
            <li><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/members/just-released.php">Net uitgebracht</a></li>
            <li><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/members/favorites.php">Favorieten</a></li>
            <li><a href="//<?php echo $_SERVER['SERVER_NAME'].$views ?>/members/staff-picks.php">Staff Picks</a></li>
        </ul>
    </div>
    <div class="main margin15">