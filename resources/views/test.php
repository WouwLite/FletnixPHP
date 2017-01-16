<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . '/config/database.php');

// Execute all data from database
$shizzle = $connection->query('SELECT title,description,url FROM movie');
$test = $shizzle->fetchAll(PDO::FETCH_ASSOC);

foreach($test as $row) {
    echo $row['title'].' '.$row['description'].' '.$row['url'].'<br><br>';
}

// Execute single ID from database
$shizzle2 = $connection->query('SELECT title,description,url FROM movie WHERE movie_id=1');
$test2 = $shizzle2->fetchAll(PDO::FETCH_ASSOC);

foreach($test2 as $row2) {
    echo $row2['title'].' '.$row2['description'].' '.$row2['url'].'<br><br>';
}
