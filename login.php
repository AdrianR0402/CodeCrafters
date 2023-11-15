<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
    <style>
        .form-control {
            background-color: #fff;
            /* Cambia el color de fondo del campo de entrada */
            box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.1);
            /* Agrega sombra al campo de entrada */
        }


        .no-tienes-cuenta-container {
            font-size: 1.5em;
            color: #fff;
            /* Color blanco */
            font-weight: bold;
            /* Texto en negrita */
        }

        .font-weight-bold {
            font-weight: bold;
            /* Texto en negrita */
        }

        .btn-acceder {
            font-weight: bold;
            /* Texto en negrita */
        }

        .container-border {
            border: 2px solid #17a2b8;
            /* Color del borde */
            border-radius: 15px;
            /* Radio de la esquina del borde */
            padding: 20px;
            /* Espaciado interno del container */
            margin-bottom: 20px;
            /* Espaciado inferior del container */
        }
    </style>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>

        <section class="page-section" id="inicioSesion">
            <div class="container-fluid my-5">
                <div class="col-md-6 mx-auto">
                    <div class="container">
                        <div class="row">
                            <div class="text-center inicioSesion-header">
                                <h1 class="display-2">INICIAR SESIÓN</h1>
                            </div>
                            <div class="inicioSesion container-border">
                                <div class="col-md-8 offset-md-2">
                                    <form class="mt-4 mb-4">
                                        <!-- Usuario -->
                                        <div class="form-group row mb-3">
                                            <label for="usuario"
                                                class="col-sm-3 col-form-label text-right font-weight-bold text-white"
                                                style="font-size: 1.3em;">Usuario:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold" id="usuario">
                                            </div>
                                        </div>

                                        <!-- Contraseña -->
                                        <div class="form-group row mb-4">
                                            <label for="contrasena"
                                                class="col-sm-3 col-form-label text-right font-weight-bold text-white"
                                                style="font-size: 1.3em;">Contraseña:</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control font-weight-bold"
                                                    id="contrasena">
                                            </div>
                                        </div>

                                        <!-- ¿OLVIDASTE TU CONTRASEÑA? -->
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <b class="olvidaste-tu-contrasea font-weight-bold text-white"
                                                    style="font-size: 1.2em;">¿OLVIDASTE TU CONTRASEÑA?</b>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Botón ACCEDER fuera del contenedor -->
                            <div class="row mt-4">
                                <div class="col-md-8 offset-md-2">
                                    <div class="text-center">
                                        <button type="button"
                                            class="btn btn-primary btn-acceder font-weight-bold">ACCEDER</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Enlace "CREAR CUENTA" -->
                            <div class="row mt-3">
                                <div class="col-md-8 offset-md-2 text-center">
                                    <span class="no-tienes-cuenta-container">¿No tienes cuenta? <a
                                            href="../crearCuenta/register.php" class="crear-cuenta">CREAR
                                            CUENTA</a></span>
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