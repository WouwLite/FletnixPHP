<?php

session_start();

// Include database info
require '../../../../config/database.php';

include '../../../include/main.inc.php';

if (isset($_SESSION['user_id'])) {
    $records = $connection->prepare('SELECT * FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = NULL;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>

<?php if (!empty($user)): ?>
<br>Welkom <?= $user['firstname'] ?>!
<br><br>U bent aangemeld.
<br><br>Uw accountstatus is:
<?php if ($user['active'] != 0): ?>

    <div class="main">
        <!-- Specific HTML pages -->
        <!-- Insert data below this line -->
        <div class="margin15">
            <h1>Ted</h1>
            <h3>Jaar:</h3>
            <p>2012</p>
            <h2>Filmduur:</h2>
            <p>106 minuten</p>
            <h2>Omschrijving:</h2>
            <p>John Bennett, a man whose childhood wish of bringing his teddy bear to life came true, now must decide between keeping the relationship with the bear or his girlfriend, Lori.</p>
            <br><br>
            <a href="https://www.youtube.com/watch?v=9fbo_pQvU7M" target="_blank"><img src="../../../images/elements/play.png" alt="Play Movie" width="120" height="120"></a>
            <br><br>
            <img src="../../../images/movies/ted/TedBackground.jpg" class="movie-wallpaper" alt="Movie Wallpaper">
        </div>

        <!-- Insert data above this line  images/movies/ted/Ted.jpg -->
    </div>
</div>

    <?php else: ?>
        Geblokkeerd
    <?php endif; ?>
    <a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/logout.php">Afmelden</a>
<?php else: ?>
    <h1>Meld u aan of registreer een nieuw account</h1>
    <a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/login.php">Aanmelden</a> of
    <a href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/register.php">Registreren</a>
<?php endif; ?>


<?php include '../../../include/footer.inc.php'; ?>