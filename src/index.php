<!DOCTYPE html>

<html lang="es-CL">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/includes/head.php'; ?>
    <body>
        <?php 
            require 'includes/header.php'; 
            if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php")
                require $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php';
        ?>
        <main class="container">
            <h2>Aplicacion Web de Ejemplo</h2>
            <p class="text-center">
                Esta aplicacion web sirve a modo de ejemplo tanto visual de lo que se puede llegar a lograr
                su principal objetivo es contar como una plantilla de para que las y los estudiantes de la
                asignatura Bases de Datos del año 2021 en el primer semestre puedan tener una base para
                comenzar su tarea numero 2 en PHP.
            </p>
        </main>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
    </body>
</html>
