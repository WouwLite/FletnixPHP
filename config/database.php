<?php

/*
 * config/database.php
 */

$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'fletnix_db';

try{
    $connection = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e) {
    die ( "Connection failed!" . $e->getMessage());
}