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
            <!-- CF2: ¿Por qué en algunas páginas usáis container-fluid y en otras container?-->
            <div class="container-fluid mt-4 mx-0 px-0">
                <div class="container-fluid m-0 p-0">
                    <img class="img-fluid bannerDatos" src="/assets/img/bannerPlaceholder1.png" alt="">
                </div>
                <!-- CF2: Ya has puesto el container!-->
                <div class="container-fluid mt-5 px-5">
                    <div class="row">
                        <!-- List group conteniendo los distintos apartados para navegar en los datos de usuario -->
                        <div class="col-md-3 text-center">
                            <!-- CF2: ¿Dónde está el h1?-->
                            <h2 class="page-section-heading mb-4">Datos de usuario</h2>
                            <!-- CF2:Lo siguiente debe ser un elemento <nav>-->
                            <div class="container">
                                <ul class="list-group">
                                <li class="list-group-item"><a href="infoSuscripcion.php" class="linksMenu">Información de
                                            Suscripción</a></li>
                                    <li class="list-group-item active"><a href="preferencias.php" class="linksMenu">Preferencias</a></li>
                                    <li class="list-group-item"><a href="notifications.php" class="linksMenu">Notificaciones por
                                            correo</a></li>
                                    <li class="list-group-item"><a href="cambiarCorreo.php" class="linksMenu">Cambiar correo</a>
                                    </li>
                                    <li class="list-group-item"><a href="password.php" class="linksMenu">Cambiar contraseña</a>
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
                                            <h2 class="datosUsuario-header">Preferencias</h2>
                                            <p class="datosUsuario-text">Configura tus preferencias de idioma y video</p>
                                        </div>
                                        <!-- formulario de configuracion de preferencias -->
                                        <div class="col-md-6 text-center mx-auto">
                                            <p class="datosUsuario-header">Idioma</p>
                                            <form>
                                                <div class="form-group">
                                                    <label for="languageSelect" class="mb-2 datosUsuario-text">Selecciona tu idioma</label>
                                                    <select class="form-control" id="languageSelectText">
                                                        <option value="es">Español</option>
                                                        <option value="en">Inglés</option>
                                                        <option value="fr">Francés</option>
                                                    </select>
                                                </div>
                                            </form>
                                            <p class="datosUsuario-header mt-4">Video</p>
                                            <form>
                                                <div class="form-group">
                                                    <label for="languageSelect" class="mb-2 datosUsuario-text">Selecciona tu idioma del audio:</label>
                                                    <select class="form-control" id="languageSelectSound">
                                                        <option value="es">Español</option>
                                                        <option value="en">Inglés</option>
                                                        <option value="fr">Francés</option>
                                                    </select>
                                                    <label for="languageSelect" class="mt-2 mb-2 datosUsuario-text">Selecciona tu idioma de los subtitulos:</label>
                                                    <select class="form-control" id="languageSelectCaptions">
                                                        <option value="es">Español</option>
                                                        <option value="en">Inglés</option>
                                                        <option value="fr">Francés</option>
                                                    </select>
                                                </div>
                                            </form>
                                            <div class="form-check form-switch mt-5 ">
                                                <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                                                <label class="form-check-label datosUsuario-text" for="mySwitch">Contenido para adultos</label>
                                            </div>
                                            <div class="container mt-4">
                                                <p class="datosUsuario-text"><a href="" class="linksContenido">Cambiar foto de perfil</a></p>
                                                <p class="datosUsuario-text"><a href="" class="linksContenido">Cambiar banner de perfil</a></p>
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