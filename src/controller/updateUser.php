<?php

require $_SERVER['DOCUMENT_ROOT'].'/database/connection.php';

if (!isset($error)) {
    $names     = $_POST['name'];
    $lastnames = $_POST['lastname'];
    $age       = $_POST['age'];
    $user      = $_POST['user'];
    $password  = password_hash($_POST['pwd'],PASSWORD_DEFAULT);
    $sql       = "UPDATE users 
                  SET names='".$names."',
                      lastnames='".$lastnames."',
                      age='".$age."',
                      username='".$user."',
                      password='".$password."'
                  WHERE names='".$_POST['oldNames']."'
                  AND lastnames='".$_POST['oldLastnames']."'
                  ";
    if ($conn->query($sql) == true) {
        $errorInsert = false;
        $message = "Usuario actualizado correctamente!";
    }
    else {
        $errorInsert = true;
        $message = "Usuario no actualizado";
    }
}
else {
    $errorInsert = true;
    $message = "Error de servidor!";
}

$conn = null;
