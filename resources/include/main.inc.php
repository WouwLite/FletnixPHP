<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Fletnix</title>
    <meta name="description" content="Fletnix Video-on-Demand">
    <meta name="author" content="Jordy & Joel BV">

    <!-- Use CDN own for CSS Stylesheets -->
    <link type="text/css" rel="stylesheet" href="//cdn.wouwlite.eu/fletnix.nl/resources/assets/css/main.css">
    <link type="text/css" rel="stylesheet" href="/resources/assets/css/nav.css">
<!--    <link type="text/css" rel="stylesheet" href="//cdn.wouwlite.eu/fletnix.nl/resources/assets/css/nav.css">-->
    <link type="text/css" rel="stylesheet" href="//cdn.wouwlite.eu/fletnix.nl/resources/assets/css/footer.css">

    <!-- External Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

</head>

<body>
<nav>
    <!-- Change the deep-links for each nested page-block -->
    <ul>
        <li class="logo"><h1>Fletnix</h1></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>"><strong>Home</strong></a></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/paywall.php">Abonnementen</a></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/members/films.php">Films</a></li>
        <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/members/series.php">Series</a></li>
    </ul>
</nav>

<!-- The vertical nav contains search bar, populair films, latest releases, etc.  -->
<div class="container">
    <div class="nav vertnav">
        <div class="search">
            <form>
                <input type="text" id="search" name="Search" placeholder="Zoeken naar..."/>
                <input type="submit" value="Zoeken"/>
            </form>
        </div>
        <ul>
            <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/login.php">Aanmelden</a></li>
            <li class="active"><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/members/">Populair</a></li>
            <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/members/just-released.php">Net uitgebracht</a></li>
            <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/members/favorites.php">Favorieten</a></li>
            <li><a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/members/staff-picks.php">Staff Picks</a></li>
        </ul>
    </div>
    <div class="main margin15">