<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require $_SERVER['DOCUMENT_ROOT'].'/controller/updateUser.php';
}
?>

<!DOCTYPE html>

<html lang="es-CL">
    <?php require 'includes/head.php'; ?>
    <body>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>
        <main class="container">
            <h2>Editar Usuario</h2>            
            <?php if (isset($message)): ?>
            <p class="message <?php echo $errorInsert ? "error" : "success"; ?>"><?php echo $message; ?></p>
            <?php endif; ?>
            <form class="create-form" method="POST" action="edit-user.php">
                <label class="session-form__label" for="name">Nombres</label>
                <input class="session-form__input" type="text" name="name" id="name" required>
                <label class="session-form__label" for="lastname">Apellidos</label>
                <input class="session-form__input" type="text" name="lastname" id="lastname" required>
                <label class="session-form__label" for="age">Edad</label>
                <input class="session-form__input" type="number" name="age" id="age" required>
                <label class="session-form__label" for="user">Nombre de usuario</label>
                <input class="session-form__input" type="text" name="user" id="user" required>
                <label class="session-form__label" for="pwd">Contraseña</label>
                <input class="session-form__input" type="password" name="pwd" id="pwd" required>
                <input class="session-form__submit success" type="submit" value="Actualizar">
                <input type="hidden" name="oldNames" value="<?php echo $_GET['name']; ?>">
                <input type="hidden" name="oldLastnames" value="<?php echo $_GET['lastname']; ?>">
            </form>
            <a class="back-button" href="admin.php">Volver</a>
        </main>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
    </body>
</html>
