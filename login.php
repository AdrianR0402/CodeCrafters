<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php");
    require_once "/Model/Usuarios"; ?>
</head>

<body>
    <?php
    try {
        $conex = new Connection();
        $stmt = $conex->prepare("SELECT * FROM usuarios WHERE username = :user");
        $stmt->bindParam(':user', $_POST['username']);
        $stmt->execute();

        $rowCount = $stmt->rowCount();

        if ($rowCount > 0) {
            $reg = $stmt->fetch(PDO::FETCH_OBJ);

            // Crear objeto Usuarios con los datos de la base de datos
            $usuario = new Usuarios(
                $reg->username,
                $reg->password,
                $reg->nombre,
                $reg->apellido1,
                $reg->apellido2,
                $reg->email,
                $reg->fechanacimiento,
                $reg->pais,
                $reg->codigopostal,
                $reg->telefono,
                $reg->rol
            );

            // Guardar el objeto Usuarios en una variable de sesión
            $_SESSION['usuario'] = $usuario;
        } else {
            $_SESSION['usuario'] = false;
        }
    } catch (Exception $ex) {
        $_SESSION['usuario'] = false;
        echo $ex->getMessage();
    }

    ?>

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
                                                    id="usuario">
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

                                        <!-- ¿OLVIDASTE TU CONTRASEÑA? -->
                                        <div class="form-group row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <b class="olvidaste-tu-contrasea letraInicioSesion">
                                                    <a href="olvidarContraseña.php" class="crear-cuenta">¿OLVIDASTE LA
                                                        CONTRASEÑA?
                                                    </a></b>
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
                                    <span class="no-tienes-cuenta-container">¿No tienes cuenta? <a href="register.php"
                                            class="crear-cuenta">CREAR CUENTA</a></span>
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