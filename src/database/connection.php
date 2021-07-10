<?php

$dsn = 'mysql:dbname=Example;host=localhost:3306';
$user = 'root';
$password = '20121999';

try {
    $conn = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    $error = $e;
}
