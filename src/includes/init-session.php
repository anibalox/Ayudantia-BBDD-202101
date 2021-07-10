<!DOCTYPE html>

<html lang="es-CL">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/includes/head.php'; ?>
    <body>
        <?php require  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>
        <main class="container">
            <div class="session-form">
                <?php if ($_GET['error'] == 1): ?>
                    <div class="message error">
                        <?php echo "Usuario y/o Contraseña incorrectos"; ?>
                    </div>
                <?php endif; ?>
                <h3>Inicio de Sesion</h3>
                <form method="POST" action="">
                    <label class="session-form__label" for="username">Nombre de <?php echo $typeUser; ?></label>
                    <input class="session-form__input" type="text" name="username" id="username">
                    <label class="session-form__label" for="password">Contraseña</label>
                    <input class="session-form__input" type="password" name="password" id="password">
                    <input class="session-form__submit success" type="submit" value="Iniciar Sesion">
                </form>
            </div>
        </main>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
    </body>
</html>
