<?php

session_start();

include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/session.inc.php');

?>

<?php if (!empty($user)): ?>s
    <br>Welkom <?= $user['firstname'] ?>!
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
        <table>
            <tr>
                <th></th>
                <th>Basis</th>
                <th>HD</th>
                <th>Pro</th>
            </tr>
            <tr>
                <td>Prijs per maand in euro's</td>
                <td>3,99</td>
                <td>8,99</td>
                <td>14,99</td>
            </tr>
            <tr>
                <td>Mogelijkheid om in HD te kijken.</td>
                <td>Nee</td>
                <td>Ja</td>
                <td>Ja</td>
            </tr>
            <tr>
                <td>Mogelijkheid om in UHD te kijken.</td>
                <td>Nee</td>
                <td>Nee</td>
                <td>Ja</td>
            </tr>
            <tr>
                <td>Mogelijkheid om films en series tijdens de uitzending al te zien.</td>
                <td>Nee</td>
                <td>Nee</td>
                <td>Ja</td>
            </tr>
            <tr>
                <td>Abonnement kan altijd opgezegd worden.</td>
                <td>Ja</td>
                <td>Ja</td>
                <td>Ja</td>
            </tr>
        </table>
        </p>

        <!-- Insert data above this line  images/movies/ted/Ted.jpg -->
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/include/footer.inc.php'); ?>