<?php
$typeUser = "Administrador";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require $_SERVER['DOCUMENT_ROOT'].'/controller/login.php' ;   
}
require $_SERVER['DOCUMENT_ROOT'].'/includes/init-session.php';
