<?php

session_start();

include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/session.inc.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/main.inc.php');

?>

<?php if (!empty($user)): ?>
    <?php if ($user['active'] != 0): ?>

        <div class="main">
            <!-- Specific HTML pages -->
            <!-- Insert data below this line -->
            <div class="margin15">
                <br><br>
                <div class="align-center">
                    <video width="100%" height="100%" controls>
                        <source src="//<?php echo $rootpath ?>/storage/media/movies/fullhd/bigbuckbunny/bbb_sunflower_1080p_60fps_normal.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <h1>Ted</h1>
                <h3>Jaar:</h3>
                <p>2012</p>
                <h2>Filmduur:</h2>
                <p>106 minuten</p>
                <h2>Omschrijving:</h2>
                <p>John Bennett, a man whose childhood wish of bringing his teddy bear to life came true, now must decide between keeping the relationship with the bear or his girlfriend, Lori.</p>
                <br><br>
<!--                <img src="//--><?php //echo $rootpath ?><!--/storage/media/movies/fullhd/ted/TedBackground.jpg" class="movie-wallpaper" alt="Movie Wallpaper">-->
            </div>
        </div>

    <?php else: ?>
        <?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/subscription-message.inc.php'); ?>
    <?php endif; ?>
<?php else: ?>
    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/login-message.inc.php'); ?>
<?php endif; ?>

<?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/footer.inc.php'); ?>