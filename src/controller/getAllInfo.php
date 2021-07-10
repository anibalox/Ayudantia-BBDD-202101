<?php

require $_SERVER['DOCUMENT_ROOT'].'/database/connection.php';

$errorRead = true;
if (!isset($error)) {
    $sql = "SELECT names, lastnames, age, username FROM users WHERE names='".$_GET['name']."' AND lastnames='".$_GET['lastname']."'";
    $count = 0;
    $user = array();
    foreach ($conn->query($sql) as $row) {
        $errorRead = false;
        $user = $row;
        $count++;
    }
    if ($count == 0) 
        $message = "Usuario inexistente.";
}
else 
    $message = "Error de servidor!";

$conn = null;

