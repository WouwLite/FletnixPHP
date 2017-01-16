<?php
    include 'resources/include/main.inc.php';

    $rootpath = $_SERVER['SERVER_NAME'];
    $moviepath = "/resources/views/media/movies";
    $seriepath = "/resources/views/media/series";
    $mediaMovies = array("ted", "bigbuckbunny", "nichtrijder", "hobbit", "thematrix", "hobbit2", "independanceday", "the-lord-of-the-rings");
    $mediaSeries = array("game-of-thrones", "24", "familyguy", "southpark", "person-of-interest", "ica", "the-grand-tour", "the-insiders");

    // Add URL to index.php (index.php?page=)
    $page = 'resources/views/members/'.$_GET['page'].'.php';
    if (file_exists($page)) {
        include($page);
    }
    else {
        echo 'Het opgevraagde bestand bestaat niet.';
    }
?>

<h1>Ons meest populaire aanbod</h1><br>

<ul class="media">
    <?php
        shuffle($mediaMovies);
        foreach ($mediaMovies as $movie) {
            echo "<li><a href=\"".$moviepath."/bigbuckbunny.php\"><img src=\"/storage/media/movies/fullhd/".$movie."/".$movie.".jpg\" class=\"overlay placeholder\"></a></li>";
        }
    ?>
</ul>
<ul class="media">
    <?php
        shuffle($mediaSeries);
        foreach ($mediaSeries as $serie) {
            echo "<li><a href=\"".$seriepath."/".$serie.".php\"><img src=\"/storage/media/series/".$serie."/".$serie.".jpg\" class=\"overlay placeholder\"></a></li>";
        }
    ?>
</ul>

<?php include 'resources/include/footer.inc.php'; ?>