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
            <div class="container-fluid mt-5 px-5">

                <div class="container-fluid mx-5 p-5">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h2 class="page-section-heading">General</h2>
                            <div class="list-group">
                                <a href="#" class="list-group-item">Información de Suscripción</a>
                                <a href="#" class="list-group-item">Preferencias</a>
                                <a href="#" class="list-group-item">Notificaciones por correo</a>
                                <a href="#" class="list-group-item">Cambiar correo</a>
                                <a href="#" class="list-group-item">Cambiar contraseña</a>
                                <a href="#" class="list-group-item">Aplicaciones conectadas</a>
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
                                        <div class="col-md-12">
                                            <form action="">
                                            <div class="mb-3 mt-3">
                                                <label for="email" class="form-label">Email:</label>
                                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pwd" class="form-label">Password:</label>
                                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                            </div>
                                            <div class="form-check mb-3">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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