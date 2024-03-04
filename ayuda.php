<?php

?>

<?php require_once 'UsuariosController.php'; ?>
<?php include("includes/a_config.php");
if (($_SESSION["usuario"]) == null) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
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
                                    <form action="procesarAyuda.php" method="POST" class="mt-4 mb-4">
                                        <!-- Reporte -->
                                        <div class="form-group row mb-3">
                                            <label for="reporte"
                                                class="col-sm-3 col-form-label text-right font-weight-bold text-white letraInicioSesion">Reporte:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold" id="reporte"
                                                    name="reporte" alt="pon tu reporte">
                                            </div>
                                        </div>

                                        <!-- Problemas -->
                                        <div class="form-group row mb-4">
                                            <label for="problemas"
                                                class="col-sm-3 col-form-label text-right font-weight-bold text-white letraInicioSesion">Problemas:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control font-weight-bold" id="problemas"
                                                    name="problemas" alt="pon tu problema"></textarea>
                                            </div>
                                        </div>

                                        <!-- ¿OLVIDASTE TU CONTRASEÑA? -->
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <b
                                                    class="olvidaste-tu-contrasea font-weight-bold text-white letraInicioSesion">
                                                    <p id="wave2" class="crear-cuenta">
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

                                </div>
                            </div>

                            <!-- Botón ACCEDER fuera del contenedor -->
                            <div class="row mt-4">
                                <!-- CF2:¿Donde están las 4 columnas restantes? Si sólo hay una columna, usa la clase col-->
                                <div class="col-md-8 offset-md-2">
                                    <div class="text-center">
                                        <input type="submit" value="ENVIAR INFORME" alt="enviar informe"
                                            class="btn btn-primary btn-acceder font-weight-bold">
                                    </div>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>