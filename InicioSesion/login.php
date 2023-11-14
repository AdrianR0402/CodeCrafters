<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
    <link rel="stylesheet" href="tu_estilo_personalizado.css"> <!-- Agrega tu hoja de estilo personalizada aquí -->
    <style>
        /* Agrega tu estilo personalizado aquí */
    </style>
</head>

<body>

    <?php include("../includes/navigation.php"); ?>
    <main>

        <section class="page-section" id="inicioSesion">
            <div class="container-fluid my-5">
                <div class="col-md-6 mx-auto">
                    <div class="container">
                        <div class="row">
                            <div class="text-center inicioSesion-header">
                                <h1 class="display-4">INICIAR SESIÓN</h1>
                            </div>
                            <div class="inicioSesion">
                                <div class="col-md-8 offset-md-2">
                                    <form class="mt-4 mb-4">
                                        <!-- Usuario -->
                                        <div class="form-group row mb-3">
                                            <label for="usuario"
                                                class="col-sm-3 col-form-label text-right font-weight-bold">Usuario:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="usuario">
                                            </div>
                                        </div>

                                        <!-- Contraseña -->
                                        <div class="form-group row mb-4">
                                            <label for="contrasena"
                                                class="col-sm-3 col-form-label text-right font-weight-bold">Contraseña:</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="contrasena">
                                            </div>
                                        </div>

                                        <!-- ¿OLVIDASTE TU CONTRASEÑA? -->
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <b class="olvidaste-tu-contrasea font-weight-bold">¿OLVIDASTE TU
                                                    CONTRASEÑA?</b>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Botón ACCEDER fuera del contenedor -->
                            <div class="row mt-4">
                                <div class="col-md-8 offset-md-2">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary btn-acceder">ACCEDER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("../includes/footer.php"); ?>

</body>

</html>