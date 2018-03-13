<?php
    $dsn = 'mysql:host=localhost;dbname=NWO';
    $username = 'root';
    $password = 'q';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>