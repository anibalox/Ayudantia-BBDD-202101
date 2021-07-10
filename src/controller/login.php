<?php

if ($typeUser == "Administrador") {
    require $_SERVER['DOCUMENT_ROOT'].'/database/connection.php';

    $errorLogin = true;
    if (!isset($error)) {
        $sql = "SELECT password FROM admins WHERE username='".$_POST['username']."'";
        foreach ($conn->query($sql) as $row) {
            if (password_verify($_POST['password'],$row['password']))
                $errorLogin = false;
            else 
                $message = "Nombre y/o Contraseña incorrecta.";
        }
    }
    else 
        $message = "Error de servidor.";

    $conn = null;
    if ($errorLogin) 
        header('Location: http://localhost:8000/init-admin.php?error=1');
    else 
        header('Location: http://localhost:8000/admin.php');
}
else if ($_GET['type'] == "user") {
    if ($_POST['username'] == "user" && $_POST['password'] == "1234") {
        $_SESSION['user'] == $_POST['username'];
        header('Location: http://localhost:8000/user.php');
    }
    else 
        header('Location: http://localhost:8000/init-user.php?error=1');
}
else
    header('Location: http://localhost:8000/index.php');
