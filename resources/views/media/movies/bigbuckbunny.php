<?php

session_start();

include ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/session.inc.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/main.inc.php');

$movietitleflat = 'bigbuckbunny';
$movietitle = 'Big Fuck Bunny';
$movieyear = '2008';
$movietime = '12';
$moviedescription = 'Big Buck Bunny is een animatiefilm gemaakt door het Blender Institute met behulp van opensourcesoftware, net zoals het voorgaande project Elephants Dream.';

if (!empty($user)) {
    if ($user['active'] != 0) {
        echo "<div class=\"main>\"";
            echo "<div class=\"margin15\">";
                echo "<h1>$movietitle</h1><br>";
                echo "<div class=\"align-center\">";
                    echo "<video width=\"100%\" height=\"100%\" controls>";
                        echo "<source src=\"//$rootpath/storage/media/movies/fullhd/$movietitleflat/$movietitleflat.mp4\" type=\"video/mp4\">";
                    echo "</video>";
                echo "</div>";
                echo "<h1>Film details</h1>";
                echo "<h3>Jaar:</h3>";
                    echo "<p>$movieyear</p>";
                echo "<h2>Filmduur:</h2>";
                    echo "<p>$movietime minuten</p>";
                echo "<h2>Omschrijving:</h2>";
                    echo "<p>$moviedescription</p>";
                echo "<br>";
            echo "</div>";
        echo "</div>";
    } else {
        include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/subscription-message.inc.php');
    }
} else {
    include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/login-message.inc.php');
}

include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/footer.inc.php');