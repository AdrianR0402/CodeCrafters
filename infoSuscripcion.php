<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
    <?php include("includes/navigation.php"); ?>
    <main>
        <!-- Banner personalizable del perfil -->
        <section class="page-section">
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
                                    <li class="list-group-item active"><a href="infoSuscripcion.php" class="linksMenu">Información de
                                            Suscripción</a></li>
                                    <li class="list-group-item"><a href="preferencias.php" class="linksMenu">Preferencias</a></li>
                                    <li class="list-group-item"><a href="notifications.php" class="linksMenu">Notificaciones por
                                            correo</a></li>
                                    <li class="list-group-item"><a href="cambiarCorreo.php" class="linksMenu">Cambiar correo</a>
                                    </li>
                                    <li class="list-group-item"><a href="password.php" class="linksMenu">Cambiar contraseña</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contenido especifico de la información de suscripcion -->
                        <div class="col-sm-12 col-md-9 px-3 px-md-5">
                            <div class="datosUsuario container-border">
                                <div class="container-fluid p-2 text-center">
                                    <div class="row">
                                        <!-- Mostrar informacion de la suscripcion -->
                                        <div class="col-md-12">
                                            <h1 class="datosUsuario-header">Información de suscripción</h1>
                                            <p class="datosUsuario-text">Gestiona tu plan de suscripción y tu historial de pedidos</p>
                                        </div>
                                        <div class="col-md-6 text-center mx-auto">
                                            <p class="datosUsuario-header">Miembro Mega Fan</p>
                                            <p class="datosUsuario-text">64,99 € / anual + VAT aplicable</p>
                                            <p class="datosUsuario-text">Tu suscripción se renovará el 6 de febrero de 2024</p>
                                            <!-- links -->
                                            <a href="#" class="linksContenido">Cancelar suscripción</a>
                                            <a href="#" class="linksContenido">Gestionar método de pago</a>
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