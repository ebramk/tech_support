<?php

$dsn = 'mysql:host=sql2.njit.edu;dbname=er86';
$username = 'er86';
$password = 'MMA6gsP3';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}

function display_db_error($error_message) {
    include '../errors/db_error.php';
    exit;
}

?>