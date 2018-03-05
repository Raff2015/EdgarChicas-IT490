<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=erc7';
    $username = 'erc7';
    $password = '4g5cdCF9';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>