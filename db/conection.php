<?php

require_once "config.php";

$dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . "; dbname=" . DB_NAME;

$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

try {
    $pdo = new PDO($dsn, USER, PASSWORD,$options);
} catch (PDOException $th) {
    echo "Error: " . $th->getMessage();
}
