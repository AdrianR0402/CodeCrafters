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
            <!-- CF2: ¿Por qué en algunas páginas usáis container-fluid y en otras container?-->
            <div class="container-fluid mt-4 mx-0 px-0">
                <div class="container-fluid m-0 p-0">
                    <img class="img-fluid bannerDatos" src="/assets/img/bannerPlaceholder1.png" alt="banner usuario">
                </div>
                <!-- CF2: Ya has puesto el container!-->
                <div class="container-fluid mt-5 px-5">
                    <div class="row">
                        <!-- List group conteniendo los distintos apartados para navegar en los datos de usuario -->
                        <div class="col-md-3 text-center">
                            <!-- CF2: ¿Dónde está el h1?-->
                            <h1 class="page-section-heading mb-4">Datos de usuario</h1>
                            <!-- CF2:Lo siguiente debe ser un elemento <nav>-->
                            <div class="container">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="infoSuscripcion.php"
                                            class="linksMenu">Información de
                                            Suscripción</a></li>
                                    <li class="list-group-item active"><a href="preferencias.php"
                                            class="linksMenu">Preferencias</a></li>
                                    <li class="list-group-item"><a href="notifications.php"
                                            class="linksMenu">Notificaciones por
                                            correo</a></li>
                                    <li class="list-group-item"><a href="cambiarCorreo.php" class="linksMenu">Cambiar
                                            correo</a>
                                    </li>
                                    <li class="list-group-item"><a href="password.php" class="linksMenu">Cambiar
                                            contraseña</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contenido especifico de preferencias de usuario -->
                        <!-- CF2: No tiene sentido usar dos breakpoints si en la guía de estilos sólo habéis definido dos layouts-->
                        <div class="col-sm-12 col-md-9 px-3 px-md-5">
                            <div class="datosUsuario container-border">
                                <div class="container-fluid p-2 text-center">
                                    <div class="row">
                                        <!-- CF2: Las columnas deben sumar 12, aquí suman 18!-->
                                        <div class="col-md-12">
                                            <h1 class="datosUsuario-header">Preferencias</h1>
                                            <p class="datosUsuario-text">Configura tus preferencias de idioma y video
                                            </p>
                                        </div>
                                        <!-- formulario de configuracion de preferencias -->
                                        <div class="col-md-6 text-center mx-auto">
                                            <h1 class="datosUsuario-header">Idioma</h1>
                                            <form>
                                                <div class="form-group">
                                                    <label for="language"
                                                        class="mb-2 datosUsuario-text">Selecciona tu idioma</label>
                                                    <select class="form-control" id="language">
                                                        <option value="es">Español</option>
                                                        <option value="en">Inglés</option>
                                                        <option value="fr">Francés</option>
                                                    </select>
                                                </div>
                                            </form>
                                            <h1 class="datosUsuario-header mt-4">Video</h1>
                                            <form>
                                                <div class="form-group">
                                                    <label for="languageSonido"
                                                        class="mb-2 datosUsuario-text">Selecciona tu idioma del
                                                        audio:</label>
                                                    <select class="form-control" id="languageSonido">
                                                        <option value="es">Español</option>
                                                        <option value="en">Inglés</option>
                                                        <option value="fr">Francés</option>
                                                    </select>
                                                    <label for="languageCaptions"
                                                        class="mt-2 mb-2 datosUsuario-text">Selecciona tu idioma de los
                                                        subtitulos:</label>
                                                    <select class="form-control" id="languageCaptions">
                                                        <option value="es">Español</option>
                                                        <option value="en">Inglés</option>
                                                        <option value="fr">Francés</option>
                                                    </select>
                                                </div>
                                            </form>
                                            <div class="form-check form-switch mt-5 ">
                                                <input class="form-check-input" type="checkbox" id="contenidoAdulto"
                                                    name="darkmode" value="yes" checked>
                                                <label class="form-check-label datosUsuario-text"
                                                    for="contenidoAdulto">Contenido para adultos</label>
                                            </div>
                                            <div class="container mt-4">
                                                <p class="datosUsuario-text"><a href="" class="linksContenido">Cambiar
                                                        foto de perfil</a></p>
                                                <p class="datosUsuario-text"><a href="" class="linksContenido">Cambiar
                                                        banner de perfil</a></p>
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