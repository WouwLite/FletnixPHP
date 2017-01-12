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
        <?php

            echo "Hello world!";

        ?>
    <a class="button" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/logout.php">Afmelden</a>
<?php else: ?>
    <center>
    <h1>Meld u aan of registreer een nieuw account</h1>
    <a class="button" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/login.php">Aanmelden</a> of
    <a class="button" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/register.php">Registreren</a>
    </center>
<?php endif; ?>


<?php include '../../../include/footer.inc.php'; ?>