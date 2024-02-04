<?php
require_once 'UsuariosController.php';

if (isset($_POST['registrarse'])) {
    $ola = UsuariosController::realizarRegistro($_POST['usuario'], $_POST['contrasena'], $_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['email'], $_POST['fecha_nacimiento'], $_POST['pais'], $_POST['postal'], $_POST['telefono']);
    $usuario = UsuariosController::buscarUsuarios($_POST['usuario']);
    var_dump($_POST['username']);

    if ($usuario === false) {
        echo '<script>alert("Usuario no existe.");</script>';
    } else {
        if ($usuario) {
            $claveIngresada = $_POST["contrasena"];

            if ($claveIngresada === $usuario->password) {
                $_SESSION['usuario'] = $usuario;
                setcookie('usuario_logueado', $usuario->username, time() + 86400, '/'); // La cookie expira en 1 dia (3600 segundos)
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
    <script>
        // Función para validar el formulario antes de enviarlo
        function validarFormulario() {
            var usuario = document.getElementById("usuario").value;
            var nombre = document.getElementById("nombre").value;
            var apellido1 = document.getElementById("apellido1").value;
            var apellido2 = document.getElementById("apellido2").value;
            var pais = document.getElementById("pais").value;
            var telefono = document.getElementById("telefono").value;
            var email = document.getElementById("email").value;
            var fechaNacimiento = document.getElementById("fecha_nacimiento").value;
            var postal = document.getElementById("postal").value;
            var contrasena = document.getElementById("contrasena").value;
            var captcha = document.getElementById("captcha").value;

            // Validación básica de campos vacíos
            if (usuario == "" || nombre == "" || apellido1 == "" || apellido2 == "" || pais == "" || telefono == "" || email == "" || fechaNacimiento == "" || postal == "" || contrasena == "" || captcha == "") {
                alert("Todos los campos son obligatorios");
                return false;
            }

            // Validación de formato de email
            var emailRegex = /\S+@\S+\.\S+/;
            if (!emailRegex.test(email)) {
                alert("El formato del email es inválido");
                return false;
            }

            // Validación de formato de fecha (puede ser más específica según el formato deseado)
            var fechaNacimientoRegex = /^\d{4}-\d{2}-\d{2}$/;
            if (!fechaNacimientoRegex.test(fechaNacimiento)) {
                alert("El formato de la fecha de nacimiento es inválido");
                return false;
            }

            // Validación de captcha (solo letras mayúsculas)
            var captchaRegex = /^[A-Z]{6}$/;
            if (!captchaRegex.test(captcha)) {
                alert("El captcha es inválido");
                return false;
            }

            // Si pasa todas las validaciones, el formulario se enviará
            return true;
        }
    </script>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>

        <section class="page-section" id="inicioSesion">
            <div class="container-fluid my-5">
                <div class="col-md-9 mx-auto">
                    <div class="container">
                        <div class="row">
                            <div class="text-center inicioSesion-header">
                                <h1 class="display-2">REGISTRARSE</h1>
                            </div>
                            <div class="inicioSesion container-border">
                                <div class="col-md-8 offset-md-2">
                                    <form class="mt-4 mb-4" action="" method="POST"
                                        onsubmit="return validarFormulario()">
                                        <!-- Usuario -->
                                        <div class="form-group row mb-3">
                                            <label for="usuario"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Usuario:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold" name="usuario"
                                                    id="usuario" required>
                                            </div>
                                        </div>

                                        <!-- Nombre -->
                                        <div class="form-group row mb-3">
                                            <label for="nombre"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Nombre:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold" name="nombre"
                                                    id="nombre" required>
                                            </div>
                                        </div>

                                        <!-- Apellido 1 -->
                                        <div class="form-group row mb-3">
                                            <label for="apellido1"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Apellido
                                                1:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold"
                                                    name="apellido1" id="apellido1" required>
                                            </div>
                                        </div>

                                        <!-- Apellido 2 -->
                                        <div class="form-group row mb-3">
                                            <label for="apellido2"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Apellido
                                                2:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold"
                                                    name="apellido2" id="apellido2" required>
                                            </div>
                                        </div>

                                        <!-- País -->
                                        <div class="form-group row mb-3">
                                            <label for="pais"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">País:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control font-weight-bold" name="pais"
                                                    id="pais" required>
                                            </div>
                                        </div>

                                        <!-- Teléfono -->
                                        <div class="form-group row mb-3">
                                            <label for="telefono"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Teléfono:</label>
                                            <div class="col-sm-9">
                                                <input type="tel" class="form-control font-weight-bold" name="telefono"
                                                    id="telefono" required>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group row mb-3">
                                            <label for="email"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Email:</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control font-weight-bold" name="email"
                                                    id="email" required>
                                            </div>
                                        </div>

                                        <!-- Fecha -->
                                        <div class="form-group row mb-3">
                                            <label for="fecha_nacimiento"
                                                class="col-sm-4 col-form-label text-right letraInicioSesion">Fecha de
                                                Nacimiento:</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control font-weight-bold"
                                                    name="fecha_nacimiento" id="fecha_nacimiento" required>
                                            </div>
                                        </div>

                                        <!-- Código Postal -->
                                        <div class="form-group row mb-3">
                                            <label for="postal"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Código
                                                Postal:</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control font-weight-bold" name="postal"
                                                    id="postal" required>
                                            </div>
                                        </div>

                                        <!-- Contraseña -->
                                        <div class="form-group row mb-4">
                                            <label for="contrasena"
                                                class="col-sm-3 col-form-label text-right letraInicioSesion">Contraseña:</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control font-weight-bold"
                                                    id="contrasena" name="contrasena" required>
                                            </div>
                                        </div>

                                        <label for="captcha"><b>
                                                <?php if (isset($_GET["captchaerror"]))
                                                    echo "Captcha Incorrecto.";
                                                else
                                                    echo "Porfavor realize este Captcha<b>"; ?>
                                            </b></label>
                                        <img src="includes/generatecaptcha.php" alt="CAPTCHA" class="captcha-image"><i
                                            class="fas fa-redo refresh-captcha"></i>
                                        <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">

                                        <script>
                                            var refreshButton = document.querySelector(".refresh-captcha");
                                            refreshButton.onclick = function () {
                                                document.querySelector(".captcha-image").src = 'includes/generatecaptcha.php?' + Date.now();
                                            }
                                        </script>

                                        <!-- Checkbox -->
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <label class="LetraCheckbox">
                                                    <input type="checkbox">
                                                    Al crear una cuenta muestras tu conformidad con nuestros Términos de
                                                    Uso y nuestra Política de Privacidad, confirmando además que tienes
                                                    16 años o más.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-md-8 offset-md-2">
                                                <div class="text-center">
                                                    <input type="hidden" name="registrado" value="registro" />
                                                    <input type="submit" name="registrarse" value="CREAR CUENTA"
                                                        class="btn btn-primary btn-acceder font-weight-bold"></input>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    <!-- Enlace "CREAR CUENTA" -->
                                    <div class="row mt-3">
                                        <div class="col-md-8 offset-md-2 text-center">
                                            <span class="no-tienes-cuenta-container">¿Ya tienes una cuenta? <a
                                                    href="login.php" class="crear-cuenta">ACCEDER</a></span>
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