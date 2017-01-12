<?php
    include 'resources/include/main.inc.php';

    $rootpath = $_SERVER['SERVER_NAME'];
    $mediapath = "/resources/views/media/movies/";
    $mediaMovies = array("ted", "bigbuckbunny", "nichtrijder", "hobbit", "thematrix", "hobbit2", "independanceday", "the-lord-of-the-rings");
    $mediaSeries = array("game-of-thrones", "24", "familyguy", "southpark", "person-of-interest", "ica", "the-grand-tour", "arrow");
?>

<h1>Ons meest populaire aanbod</h1><br>

<ul class="media">
    <?php
        shuffle($mediaMovies);
        foreach ($mediaMovies as $movie) {
            echo "<li><a href=\"".$mediapath."/bigbuckbunny.php\"><img src=\"/storage/media/movies/fullhd/".$movie."/".$movie.".jpg\" class=\"overlay placeholder\"></a></li>";
        }
    ?>
</ul>
<ul class="media">
    <?php
        shuffle($mediaSeries);
        foreach ($mediaSeries as $serie) {
            echo "<li><a href=\"".$mediapath.$serie.".php\"><img src=\"/storage/media/series/".$serie."/".$serie.".jpg\" class=\"overlay placeholder\"></a></li>";
        }
    ?>
</ul>

<?php include 'resources/include/footer.inc.php'; ?>