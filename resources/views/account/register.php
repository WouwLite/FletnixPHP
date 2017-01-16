<?php

/*
 * /resources/views/account/register.php
 */

// Include database info
require '../../../config/database.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
}

// Default status messages
$status = false;
$message = '';
$success = 'Uw account is aangemaakt!';
$fail = 'Sorry, er is iets fout gegaan! Controleer uw gegevens.';

// Check if both email and password are not empty
if (!empty($_POST['email']) && !empty($_POST['password'])):

    // Add new user to database via POST
    //:email and :password are to prevent SQL injections
    $sql = "INSERT INTO users (email, password, firstname, lastname, birthday) VALUES (:email, :password, :firstname, :lastname, :birthday)";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':email', $_POST['email']);
    $statement->bindParam(':firstname', $_POST['firstname']);
    $statement->bindParam(':lastname', $_POST['lastname']);
    $statement->bindParam(':birthday', $_POST['birthday']);
//    $statement->bindParam(':country', $_POST['country']);
    $statement->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

    // Once both email and password are entered, execute command
    // If statement is executed, return message Successful
    // Else, return message Fail (this would normally not happen, it's just an extra precaution
    if ($statement->execute()):
        $message = $success;
        $status = true;
        header( "Refresh:1; url=login.php", true, 303);
    else:
        $message = $fail;
        $status = false;
        echo "Couldn't enter data: ".$connection->error;
    endif;

endif;

// Add country array
// Source: https://gist.github.com/DHS/1340150
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Fletnix</title>
    <meta name="description" content="Fletnix Video-on-Demand">
    <meta name="author" content="Jordy & Joel BV">

    <link type="text/css" rel="stylesheet" href="/resources/assets/css/account-style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
</head>
<body>

    <div class="header">
        <a href="home.php">Fletnix Members-Only</a>
    </div>

        <?php if ($status = true && (!empty($message))): ?>
        <p class="message-success"><?= $message ?></p>
        <?php endif; ?>
        <?php if ($status = false && (!empty($message))): ?>
        <p class="message-fail"><?= $message ?></p>
        <?php endif; ?>

    <h1>Registreren</h1>
    <span>of <a href="login.php">meld u aan</a></span>
    <br>

    <form action="register.php" method="POST">
        <h1>Nieuw account</h1>
            <input type="text" pattern="[A-Za-zÀ-ž\-\s]{2,32}" placeholder="Voer uw voornaam in" name="firstname" value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname'];}?>" title="Voer uw naam in zonder special tekens, bijv: John, Jan-Pieter" required autofocus>
            <input type="text" pattern="[A-Za-zÀ-ž\-\s]{2,150}" placeholder="Voer uw achternaam in" name="lastname" value="<?php if(isset($_POST['lastname'])){ echo $_POST['lastname'];}?>" required>
            <input type="email" placeholder="Voer uw email in" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>" title="Voer een legitiem emailadres in, bijv: john@doe.com" required>
            <input type="date" placeholder="Wat is uw geboortedatum" name="birthday" value="<?php if(isset($_POST['birthday'])){ echo $_POST['birthday'];}?>" required>
            <select name="country">
                <option value="Netherlands">Netherlands</option>
                <?php
                    for($i=0; $i < count($countries); $i++) {
                        echo '<option value="'.$countries[$i].'">'.$countries[$i].'</option>';
                    }
                ?>
            </select>
            <input type="password" placeholder="Voer uw wachtwoord in" name="password" title="Maak een sterk wachtwoord! " required>
            <input type="password" placeholder="Bevestig uw wachtwoord" name="confirm_password" required>

        <h1>SEPA machtiging</h1>
            <input class="uppercase" pattern="^NL\d{2}[A-Z]{4}\d{10}$" type="text" placeholder="Voer uw IBAN nummer in" name="iban" title="Voorbeeld: NL01KNAB123456789" value="<?php if(isset($_POST['iban'])){ echo $_POST['iban'];}?>">
            <input class="uppercase" type="text" placeholder="Voer uw BIC code in" name="bic" value="<?php if(isset($_POST['bic'])){ echo $_POST['bic'];}?>">
            <p>Gaat u akkoord met automatische incasso middels <a href="#">SEPA</a>?</p>
            <input type="radio" value="Ja" name="sepa-approved" checked>Ja
            <input type="radio" value="Nee" name="sepa-approved">Nee<br><br>
            <input type="submit" value="Account aanmaken">
    </form>

</body>
</html>

