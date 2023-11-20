<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
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
                    <img class="img-fluid bannerDatos" src="/assets/img/bannerPlaceholder1.png" alt="">
                </div>
                <div class="container-fluid mt-5 px-5">
                    <div class="row">
                        <!-- List group conteniendo los distintos apartados para navegar en los datos de usuario -->
                        <div class="col-md-3 text-center">
                            <h2 class="page-section-heading mb-4">Datos de usuario</h2>
                            <div class="container">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="infoSuscripcion.php" class="linksMenu">Información de
                                            Suscripción</a></li>
                                    <li class="list-group-item"><a href="preferencias.php" class="linksMenu">Preferencias</a></li>
                                    <li class="list-group-item"><a href="notifications.php" class="linksMenu">Notificaciones por
                                            correo</a></li>
                                    <li class="list-group-item"><a href="cambiarCorreo.php" class="linksMenu">Cambiar correo</a>
                                    </li>
                                    <li class="list-group-item active"><a href="password.php" class="linksMenu">Cambiar contraseña</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contenido especifico de cambiar contraseña -->
                        <div class="col-sm-12 col-md-9 px-3 px-md-5">
                            <div class="datosUsuario container-border">
                                <div class="container-fluid p-2 text-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="datosUsuario-header">Cambiar contraseña</h2>
                                            <p class="datosUsuario-text">Escoge una contraseña única para mantener segura tu cuenta</p>
                                        </div>
                                        <div class="col-md-6 text-center mx-auto">
                                            <!-- formulario de cambiar contraseña -->
                                            <form action="">
                                                <div class="mb-3 mt-3">
                                                    <label class="datosUsuario-text mb-1">Contraseña actual</label><input type="password" class="form-control" id="passAct"
                                                        placeholder="Contraseña actual" name="passAct">
                                                </div>
                                                <div class="mb-3">
                                                <label class="datosUsuario-text mb-1">Contraseña nueva</label>
                                                    <input type="password" class="form-control" id="passNueva"
                                                        placeholder="Nueva contraseña" name="passNueva">
                                                </div>
                                                <div class="mb-3">
                                                <label class="datosUsuario-text mb-1">Confirmar contraseña</label>
                                                    <input type="password" class="form-control" id="passRep"
                                                        placeholder="Repetir contraseña" name="passRep">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Cambiar
                                                    contraseña</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
</body>
</html>