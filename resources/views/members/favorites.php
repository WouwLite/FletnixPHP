<?php

session_start();

include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/session.inc.php');

?>

<!-- Check if user is logged in, if true > show page, if false > show login or register options -->
<?php if (!empty($user)): ?>
    <?php

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

<?php else: ?>
    <h1>Meld u aan of registreer een nieuw account</h1>
    <a class="button" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/login.php">Aanmelden</a> of
    <a class="button" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/register.php">Registreren</a>
<?php endif; ?>


<?php include '../include/footer.inc.php'; ?>