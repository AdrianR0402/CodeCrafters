<?php
require_once 'UsuariosController.php';
if (isset($_POST['iniciar'])) {
    session_start();
    echo "pokemon";
    $usuario = UsuariosController::buscarUsuarios($_POST['username']);
    var_dump($_POST['username']);

    if ($usuario === false) {
        echo '<script>alert("Usuario no existe.");</script>';
    } else {
        if ($usuario) {
            $claveIngresada = $_POST["contrasena"];

            if ($claveIngresada === $usuario->password) {
                $_SESSION['usuario'] = $usuario;

                header("location:index.php");
                exit();
            } else {
                echo '<script>alert("Contraseña incorrecta. Por favor, inténtalo de nuevo.");</script>';

            }
        }
    }
}

?>
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
                                <h1 class="display-2">INICIAR SESIÓN</h1>
                            </div>
                            <div class="inicioSesion container-border">
                                <div class="col-md-8 offset-md-2">
                                    <form method="POST" action="" class="mt-4 mb-4">
                                        <!-- Usuario -->
                                        <div class="form-group row mb-3">
                                            <label for="usuario"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Usuario:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="username" class="form-control font-weight-bold"
                                                    id="usuario" required>
                                            </div>
                                        </div>

                                        <!-- Contraseña -->
                                        <div class="form-group row mb-4">
                                            <label for="contrasena"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Contraseña:</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="contrasena"
                                                    class="form-control font-weight-bold" id="contrasena" required>
                                            </div>
                                        </div>

                                        <!-- ¿OLVIDASTE TU CONTRASEÑA? -->
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <b class="olvidaste-tu-contrasea letraInicioSesion">
                                                    <a href="olvidarContraseña.php" class="crear-cuenta">¿OLVIDASTE LA
                                                        CONTRASEÑA?
                                                    </a></b>
                                            </div>
                                        </div>

                                        <!-- Botón ACCEDER -->
                                        <div class="row mt-4">
                                            <div class="col-md-8 offset-md-2">
                                                <div class="text-center">
                                                    <input type="hidden" name="iniciar" value="acceder" />
                                                    <input type="submit"
                                                        class="btn btn-primary btn-acceder font-weight-bold"></input>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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