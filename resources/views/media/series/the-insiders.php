<?php

session_start();

include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/session.inc.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/main.inc.php');

// Movietitle
$movietitle = 'the-insiders';
// Mediatype: 'movies/fullhd/' or 'series/'
$mediatype = 'series/';

?>

<?php if (!empty($user)): ?>
    <?php if ($user['active'] != 0): ?>

        <div class="main">
            <!-- Specific HTML pages -->
            <!-- Insert data below this line -->
            <div class="margin15">
                <h1>The Insiders</h1>
                <br>
                <div class="align-center">
                    <video width="100%" height="100%" controls>
                        <source src="//<?php echo $rootpath . "/storage/media/".$mediatype.$movietitle."/".$movietitle.".mp4" ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <h1>Film details</h1>
                <h3>Jaar:</h3>
                <p>2010</p>
                <h2>Filmduur:</h2>
                <p>12 minuten</p>
                <h2>Omschrijving:</h2>
                <p>A short film about indoor climbing featuring Paul Robinson, Sasha DiGiulian, Vasya Vorotnikov, and Ashima Shiraishi. Presented by Central Rock Gym in Worcester, MA, Rockwerx, prAna, Teknik, and e-grips. "There's an infinite number of movements that can be done in the climbing gym..."</p>
                <br>
            </div>
        </div>

    <?php else: ?>
        <?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/subscription-message.inc.php'); ?>
    <?php endif; ?>
<?php else: ?>
    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/login-message.inc.php'); ?>
<?php endif; ?>

<?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/footer.inc.php'); ?>