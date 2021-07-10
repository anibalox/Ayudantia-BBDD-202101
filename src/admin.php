<?php
if (isset($_GET['delete']) && $_GET['delete'] == 'yes')
    require $_SERVER['DOCUMENT_ROOT'].'/controller/delete.php';
require $_SERVER['DOCUMENT_ROOT'].'/controller/getNameAndLastname.php';
?>

<!DOCTYPE html>

<html lang="es-CL">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/includes/head.php'; ?>
    <body>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'; ?>
        <main class="container">
            <h2>Listado de Usuarios</h2>
            <div class="admin-menu">
                <a class="create success" href="create-user.php">Crear Usuario</a>
                <?php if ($errorRead): ?>
                    <div class="message error">
                        <?php echo $message; ?>
                    </div>
                <?php else: ?>
                    <?php if (isset($errorDelete)): ?>
                        <?php if ($errorDelete): ?>
                            <div class="message error">
                                <?php echo $message; ?>
                            </div>
                        <?php else: ?>
                            <div class="message success">
                                <?php echo $message; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="list-users">
                        <div class="user-title">
                            Usuarios
                        </div>
                        <?php foreach($users as $user): ?>
                            <div class="user">
                                <p>
                                    <?php echo $user['names'].' '.$user['lastnames']; ?>
                                </p>
                                <div>
                                    <a href="view-user.php?name=<?php echo $user['names']; ?>&lastname=<?php echo $user['lastnames']; ?>" class="buttons">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye view" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <circle cx="12" cy="12" r="2" />
                                          <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                        </svg>
                                    </a>
                                    <a href="edit-user.php?name=<?php echo $user['names']; ?>&lastname=<?php echo $user['lastnames']; ?>" class="buttons">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil edit" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                        </svg>
                                    </a>
                                    <a onclick="if (confirm('¿Seguro que deseas eliminar este usuario?')) location.href='admin.php?delete=yes&name=<?php echo $user['names']; ?>&lastname=<?php echo $user['lastnames']; ?>';" class="buttons">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x delete" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <line x1="18" y1="6" x2="6" y2="18" />
                                          <line x1="6" y1="6" x2="18" y2="18" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <a class="create error" href="index.php">Cerrar Sesion</a>
            </div>
        </main>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'; ?>
    </body>
</html>
