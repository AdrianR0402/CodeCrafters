<?php require_once 'UsuariosController.php'; ?>
<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <?php include("includes/navigation.php"); ?>
    <main>
        <section class="page-section">
            <!-- Banner personalizable del perfil -->
            <div class="container-fluid mt-4 mx-0 px-0">
                <div class="container-fluid m-0 p-0">
                    <img class="img-fluid bannerDatos" src="/assets/img/bannerPlaceholder1.png" alt="Banner usuario">
                </div>
                <div class="container-fluid mt-5 px-5">
                    <div class="row">
                        <!-- List group conteniendo los distintos apartados para navegar en los datos de usuario -->
                        <section class="col-md-3 text-center">
                            <h1 class="page-section-heading mb-4">Datos de usuario</h1>
                            <div class="container">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="infoSuscripcion.php"
                                            class="linksMenu">Información de
                                            Suscripción</a></li>
                                    <li class="list-group-item"><a href="preferencias.php"
                                            class="linksMenu">Preferencias</a></li>
                                    <li class="list-group-item"><a href="notifications.php"
                                            class="linksMenu">Notificaciones por
                                            correo</a></li>
                                    <li class="list-group-item"><a href="cambiarCorreo.php" class="linksMenu">Cambiar
                                            correo</a>
                                    </li>
                                    <li class="list-group-item active"><a href="password.php" class="linksMenu">Cambiar
                                            contraseña</a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!-- Contenido especifico de cambiar contraseña -->
                        <section class="col-sm-12 col-md-9 px-3 px-md-5">
                            <div class="datosUsuario container-border">
                                <div class="container-fluid p-2 text-center">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <h2 class="datosUsuario-header">Cambiar contraseña</h2>
                                            <p class="datosUsuario-text">Escoge una contraseña única para mantener
                                                segura tu cuenta</p>
                                        </div>
                                        <div class="col-md-6 text-center mx-auto">
                                            <!-- formulario de cambiar contraseña -->
                                            <form action="procesarCambioContrasena.php" method="POST">
                                                <!-- Cambiado el action para que apunte al script PHP que procesará el cambio de contraseña -->
                                                <div class="mb-3 mt-3">
                                                    <label class="datosUsuario-text mb-1" for="passAct">Contraseña actual</label>
                                                    <input type="password" class="form-control" id="passAct"
                                                        placeholder="Contraseña actual" name="passAct" required>
                                                    <!-- Nombre del campo para la contraseña actual -->
                                                </div>
                                                <div class="mb-3">
                                                    <label class="datosUsuario-text mb-1" for="passNueva">Contraseña nueva</label>
                                                    <input type="password" class="form-control" id="passNueva"
                                                        placeholder="Nueva contraseña" name="passNueva" required>
                                                    <!-- Nombre del campo para la nueva contraseña -->
                                                </div>
                                                <div class="mb-3">
                                                    <label class="datosUsuario-text mb-1" for="passRep">Confirmar contraseña</label>
                                                    <input type="password" class="form-control" id="passRep"
                                                        placeholder="Repetir contraseña" name="passRep" required>
                                                    <!-- Nombre del campo para confirmar la nueva contraseña -->
                                                </div>
                                                <button type="submit" class="btn btn-primary" alt="Confirmar cambiar contraseña">Cambiar
                                                    contraseña</button>
                                            </form>
                                            <div class="datosUsuario-text mb-1">
                                                <?php
                                                if (isset($_SESSION['errorMsg'])) {
                                                    echo $_SESSION['errorMsg'];
                                                    unset($_SESSION['errorMsg']); // Eliminar el mensaje de error de la sesión
                                                }
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>