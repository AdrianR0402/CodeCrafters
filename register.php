<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
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
                                <h1 class="display-2">REGISTRARSE</h1>
                            </div>
                            <div class="inicioSesion container-border">
                                <div class="col-md-8 offset-md-2">
                                    <form class="mt-4 mb-4">
                                        <!-- Usuario -->
                                        <div class="form-group row mb-3">
                                            <label for="usuario"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Usuario:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold" id="usuario">
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group row mb-3">
                                            <label for="email"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Email:</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control font-weight-bold" id="email">
                                            </div>
                                        </div>

                                        <!-- Contraseña -->
                                        <div class="form-group row mb-4">
                                            <label for="contrasena"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Contraseña:</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control font-weight-bold"
                                                    id="contrasena">
                                            </div>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <label class="LetraCheckbox">
                                                    <input type="checkbox">
                                                    Al crear una cuenta muestras tu conformidad con nuestros Términos de
                                                    Uso y nuestra Política de
                                                    Privacidad, confirmando además que tienes 16 años o más.
                                                </label>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <!-- Botón ACCEDER fuera del contenedor -->
                            <div class="row mt-4">
                                <div class="col-md-8 offset-md-2">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary btn-acceder font-weight-bold">CREAR
                                            CUENTA</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Enlace "CREAR CUENTA" -->
                            <div class="row mt-3">
                                <div class="col-md-8 offset-md-2 text-center">
                                    <span class="no-tienes-cuenta-container">¿Ya tienes una cuenta? <a href="login.php"
                                            class="crear-cuenta">ACCEDER</a></span>
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