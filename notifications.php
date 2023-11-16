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
            <div class="container-fluid mt-4 mx-0 px-0">
                <div class="container-fluid m-0 p-0">
                    <img class="img-fluid bannerDatos" src="/assets/img/bannerPlaceholder1.png" alt="">
                </div>
                <div class="container-fluid mt-5 px-5">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h2 class="page-section-heading mb-4">Datos de usuario</h2>
                            <div class="container">
                                <ul class="list-group">
                                <li class="list-group-item"><a href="infoSuscripcion.php" class="linksMenu">Información de
                                            Suscripción</a></li>
                                    <li class="list-group-item"><a href="preferencias.php" class="linksMenu">Preferencias</a></li>
                                    <li class="list-group-item active"><a href="notifications.php" class="linksMenu">Notificaciones por
                                            correo</a></li>
                                    <li class="list-group-item"><a href="cambiarCorreo.php" class="linksMenu">Cambiar correo</a>
                                    </li>
                                    <li class="list-group-item"><a href="password.php" class="linksMenu">Cambiar contraseña</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 px-3 px-md-5">
                            <div class="datosUsuario container-border">
                                <div class="container-fluid p-2 text-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="datosUsuario-header">Notificaciones por correo</h2>
                                            <p class="datosUsuario-text">Configura qué notificaciones quieres recibir en tu correo</p>
                                        </div>
                                        <div class="col-md-6 text-center mx-auto">
                                            <div class="form-check form-switch mt-2">
                                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                <label class="form-check-label datosUsuario-text" for="mySwitch">Todas las notificaciones</label>
                                            </div>
                                            <div class="form-check form-switch mt-2">
                                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                <label class="form-check-label datosUsuario-text" for="mySwitch">Notificaciones sobre ofertas</label>
                                            </div>
                                            <div class="form-check form-switch mt-2">
                                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                <label class="form-check-label datosUsuario-text" for="mySwitch">Notificaciones sobre noticias</label>
                                            </div>
                                            <div class="form-check form-switch mt-2">
                                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                <label class="form-check-label datosUsuario-text" for="mySwitch">Notificaciones sobre actualizaciones</label>
                                            </div>
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