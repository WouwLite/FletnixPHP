<?php

session_start();

include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/session.inc.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/main.inc.php');

?>

<?php if (!empty($user)): ?>
    <br>Welkom <?= $user['firstname'] ?>!<br>
    <p>Uw huidige abonnement is:</p>
<?php else: ?>
    <center>
        <h1>Meld u aan of registreer een nieuw account</h1>
        <a class="button" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/login.php">Aanmelden</a> of
        <a class="button" href="//<?php echo $_SERVER['SERVER_NAME'] ?>/resources/views/account/register.php">Registreren</a>
    </center>
<?php endif; ?>

    <div class="main margin15">

        <!-- Specific HTML pages -->
        <!-- Insert data below this line -->

        <h1>Abonnementen</h1>

        <p>
        <table class="align-center">
            <tr>
                <th></th>
                <th><h2>Basis</h2></th>
                <th><h2>HD</h2></th>
                <th><h2>Pro</h2></th>
            </tr>
            <tr>
                <td>Prijs per maand in euro's</td>
                <td>3,99</td>
                <td>8,99</td>
                <td>14,99</td>
            </tr>
            <tr>
                <td>HD films en series kijken</td>
                <td><img src="/storage/images/elements/cross-circle.svg" height="24" alt="Uncheck"/></td>
                <td><img src="/storage/images/elements/checkmark-circle.svg" height="24" alt="Check"/></td>
                <td><img src="/storage/images/elements/checkmark-circle.svg" height="24" alt="Check"/></td>
            </tr>
            <tr>
                <td>Ultra HD films en series kijken</td>
                <td><img src="/storage/images/elements/cross-circle.svg" height="24" alt="Uncheck"/></td>
                <td><img src="/storage/images/elements/cross-circle.svg" height="24" alt="Uncheck"/></td>
                <td><img src="/storage/images/elements/checkmark-circle.svg" height="24" alt="Check"/></td>
            </tr>
            <tr>
                <td>Live (Ultra) HD streamen</td>
                <td><img src="/storage/images/elements/cross-circle.svg" height="24" alt="Uncheck"/></td>
                <td><img src="/storage/images/elements/cross-circle.svg" height="24" alt="Uncheck"/></td>
                <td><img src="/storage/images/elements/checkmark-circle.svg" height="24" alt="Check"/></td>
            </tr>
            <tr>
                <td>Abonnement kan altijd opgezegd worden.</td>
                <td><img src="/storage/images/elements/checkmark-circle.svg" height="24" alt="Check"/></td>
                <td><img src="/storage/images/elements/checkmark-circle.svg" height="24" alt="Check"/></td>
                <td><img src="/storage/images/elements/checkmark-circle.svg" height="24" alt="Check"/></td>
            </tr>
            <tr>
                <th></th>
                <th><a class="button" href="//<?php echo $rootpath ?>/resources/views/account/register.php">Bestellen</a></th>
                <th><a class="button" href="//<?php echo $rootpath ?>/resources/views/account/register.php">Bestellen</a></th>
                <th><a class="button" href="//<?php echo $rootpath ?>/resources/views/account/register.php">Bestellen</a></th>
            </tr>
        </table>
        </p>

        <!-- Insert data above this line  images/movies/ted/Ted.jpg -->
<?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/footer.inc.php'); ?>