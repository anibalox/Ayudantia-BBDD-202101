<?php

require $_SERVER['DOCUMENT_ROOT'].'/database/connection.php';

$errorRead = true;
if (!isset($error)) {
    $sql = "SELECT names, lastnames FROM users";
    $count = 0;
    $users = array();
    foreach ($conn->query($sql) as $row) {
        $errorRead = false;
        $users[$count] = $row;
        $count++;
    }
    if ($count == 0) 
        $message = "No hay usuarios registrados.";
}
else 
    $message = "Error de servidor!";

$conn = null;

