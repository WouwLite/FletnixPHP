<?php

// Include database info
//require '/config/database.php';
require_once ($_SERVER['DOCUMENT_ROOT'] . '/config/database.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/resources/include/main.inc.php');

//include '../include/main.inc.php';

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