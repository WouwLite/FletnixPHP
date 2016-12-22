// Dashboard page

<?php
require '../../../config/app.php';
include '../../../resources/include/main.inc.php';
?>

<h1>Let's find out what keeps failing...</h1>
<?php
    echo $relpath;
    echo ' VS ';
    echo $abspath;
    echo ' VS ';
    echo $_SERVER["DOCUMENT_ROOT"];
?>

<?php include '../../../resources/include/footer.inc.php'; ?>
