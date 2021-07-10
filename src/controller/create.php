<?php

require $_SERVER['DOCUMENT_ROOT'].'/database/connection.php';

if (!isset($error)) {
    $names     = $_POST['name'];
    $lastnames = $_POST['lastname'];
    $age       = $_POST['age'];
    $user      = $_POST['user'];
    $password  = password_hash($_POST['pwd'],PASSWORD_DEFAULT);
    $sql       = "INSERT INTO users 
                  (names, lastnames, age, username, password) 
                  VALUES 
                  ('".$names."', '".$lastnames."', '".$age."', '".$user."', '".$password."')";
    if ($conn->exec($sql) > 0) {
        $errorInsert = false;
        $message = "Usuario creado correctamente!";
    }
    else {
        $errorInsert = true;
        $message = "Usuario no creado";
    }
}
else {
    $errorInsert = true;
    $message = "Error de servidor!";
}

$conn = null;
