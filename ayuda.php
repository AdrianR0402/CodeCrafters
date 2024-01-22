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
        <!-- CF2: has usado tres breakpoints en el documento !!!, no tienes cuatro layout en figma, solo dos,
         por tanto solo puedes usar un breakpoint-->
        <section class="page-section" id="inicioSesion">
            <div class="container-fluid my-5">
                <div class="col-md-6 mx-auto">
                    <!-- CF2: No debes meter un container dentro de otro-->
                    <div class="container">
                        <div class="row">
                            <!-- CF2: ¿Dónde está el col?-->
                            <div class="text-center inicioSesion-header">
                                <h1 class="display-2">AYUDA</h1>
                            </div>
                            <div class="inicioSesion container-border">
                                <div class="col-md-8 offset-md-2">
                                    <form class="mt-4 mb-4">
                                        <!-- Reporte -->
                                        <div class="form-group row mb-3">
                                            <label for="reporte"
                                                class="col-sm-3 col-form-label text-right font-weight-bold text-white letraInicioSesion">Reporte:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold" id="reporte">
                                            </div>
                                        </div>

                                        <!-- Problemas -->
                                        <div class="form-group row mb-4">
                                            <label for="problemas"
                                                class="col-sm-3 col-form-label text-right font-weight-bold text-white letraInicioSesion">Problemas:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control font-weight-bold"
                                                    id="problemas"></textarea>
                                            </div>
                                        </div>

                                        <!-- ¿OLVIDASTE TU CONTRASEÑA? -->
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <b
                                                    class="olvidaste-tu-contrasea font-weight-bold text-white letraInicioSesion">
                                                    <p class="crear-cuenta">
                                                        ¿Necesitas ayuda?
                                                        Contáctanos al:
                                                        <br>
                                                        <span class="font-weight-bold">Atención al cliente:
                                                            6-8789-9799</span>
                                                        <br>
                                                        Disponible las 24 horas.
                                                    </p>
                                                </b>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Botón ACCEDER fuera del contenedor -->
                            <div class="row mt-4">
                                <!-- CF2:¿Donde están las 4 columnas restantes? Si sólo hay una columna, usa la clase col-->
                                <div class="col-md-8 offset-md-2">
                                    <div class="text-center">
                                        <button type="button"
                                            class="btn btn-primary btn-acceder font-weight-bold">ENVIAR INFORME</button>
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