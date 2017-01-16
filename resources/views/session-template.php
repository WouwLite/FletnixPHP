<?php

session_start();

include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/session.inc.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/main.inc.php');

if (!empty($user)) {
    $rootpath = $_SERVER['SERVER_NAME'];
    $mediapath = "/resources/views/media/movies/";
    $mediaMovies = array("ted", "bigbuckbunny", "nichtrijder", "hobbit", "thematrix", "hobbit2", "independanceday", "the-lord-of-the-rings");
    $mediaSeries = array("game-of-thrones", "24", "familyguy", "southpark", "person-of-interest", "ica", "the-grand-tour", "arrow");

    echo "<h1>Het is nét niks!</h1>";
    echo "<ul class=\"media\">";
        shuffle($mediaMovies);
        foreach ($mediaMovies as $movie) {
            echo "<li><a href=\"".$mediapath."/bigbuckbunny.php\"><img src=\"/storage/media/movies/fullhd/".$movie."/".$movie.".jpg\" class=\"overlay placeholder\"></a></li>";
        }
    echo "</ul>";
    echo "<ul class=\"media\">";
        shuffle($mediaSeries);
        foreach ($mediaSeries as $serie) {
            echo "<li><a href=\"".$mediapath.$serie.".php\"><img src=\"/storage/media/series/".$serie."/".$serie.".jpg\" class=\"overlay placeholder\"></a></li>";
        }
    echo "</ul>";
} else {
    include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/login-message.inc.php');
}

include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/footer.inc.php');
