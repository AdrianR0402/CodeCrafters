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
                    <div class="container-fluid mx-5 p-5">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <h2 class="page-section-heading mb-4">General</h2>
                                <div class="container">
                                    <ul class="list-group">
                                        <li class="list-group-item"><a href="#" class="linksMenu">Información de Suscripción</a></li>
                                        <li class="list-group-item"><a href="#" class="linksMenu">Preferencias</a></li>
                                        <li class="list-group-item"><a href="#" class="linksMenu">Notificaciones por correo</a></li>
                                        <li class="list-group-item"><a href="#" class="linksMenu">Cambiar correo</a></li>
                                        <li class="list-group-item"><a href="#" class="linksMenu">Cambiar contraseña</a></li>
                                        <li class="list-group-item"><a href="#" class="linksMenu">Aplicaciones conectadas</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9 px-5">
                                <div class="datosUsuario">
                                    <div class="container-fluid p-5 text-center">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="datosUsuario-header">Cambiar contraseña</h2>
                                                <p class="datosUsuario-text">Escoge una contraseña única para mantener segura tu cuenta</p>
                                            </div>
                                            <div class="col-md-6 text-center mx-auto">
                                                <form action="">
                                                <div class="mb-3 mt-3 form-floating">
                                                    <input type="password" class="form-control" id="passAct" placeholder="Contraseña actual" name="passAct">
                                                    <label for="passAct">Contraseña actual</label>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control" id="passNueva" placeholder="Nueva contraseña" name="passNueva">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control" id="passRep" placeholder="Repetir contraseña" name="passRep">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Cambiar contraseña</button>
                                                </form>
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