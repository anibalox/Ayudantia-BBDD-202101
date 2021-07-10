<?php

require $_SERVER['DOCUMENT_ROOT'].'/database/connection.php';

if (!isset($error)) {
    $names     = $_GET['name'];
    $lastnames = $_GET['lastname'];
    $sql       = "DELETE FROM users WHERE names='".$names."' AND lastnames='".$lastnames."'";
    if ($conn->exec($sql) > 0) {
        $errorDelete = false;
        $message = "Usuario eliminado correctamente!";
    }
    else {
        $errorDelete = true;
        $message = "Usuario no eliminado";
    }
}
else {
    $errorDelete = true;
    $message = "Error de servidor!";
}

$conn = null;
