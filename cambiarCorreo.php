<?php require_once 'UsuariosController.php'; ?>
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
                                    <li class="list-group-item"><a href="infoSuscripcion.php"
                                            class="linksMenu">Información de
                                            Suscripción</a></li>
                                    <li class="list-group-item"><a href="preferencias.php"
                                            class="linksMenu">Preferencias</a></li>
                                    <li class="list-group-item"><a href="notifications.php"
                                            class="linksMenu">Notificaciones por
                                            correo</a></li>
                                    <li class="list-group-item active"><a href="cambiarCorreo.php"
                                            class="linksMenu">Cambiar correo</a>
                                    </li>
                                    <li class="list-group-item"><a href="password.php" class="linksMenu">Cambiar
                                            contraseña</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contenido especifico de cambiar correo -->
                        <div class="col-sm-12 col-md-9 px-3 px-md-5">
                            <div class="datosUsuario container-border">
                                <div class="container-fluid p-2 text-center">
                                    <div class="row">
                                        <!-- Boton para mandar un enlace con instrucciones al correo actual -->
                                        <div class="col-md-12">
                                            <h2 class="datosUsuario-header">Cambiar correo</h2>
                                            <p class="datosUsuario-text">Cambia la dirección de correo que utilizas para
                                                acceder y recibir información de Lucecine</p>
                                        </div>
                                        <div class="col-md-6 text-center mx-auto">
                                            <p class="datosUsuario-header">Correo actual</p>
                                            <p class="datosUsuario-text">correoejemplo@gmail.com</p>
                                            <button type="submit" class="btn btn-primary my-3">ENVIAR ENLACE PARA
                                                CAMBIAR DE CORREO</button>
                                            <p class="datosUsuario-text">¿Tienes problemas? Ponte en contacto con
                                                nosotros en<a href="ayuda.php" class="linksContenido">Soporte al
                                                    cliente</a>.</p>

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