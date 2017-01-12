<?php

    session_start();

    // Include database info
    require '../../../config/database.php';


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

echo "//resources/views/members/films.php";