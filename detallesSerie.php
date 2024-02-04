<?php require_once 'UsuariosController.php'; ?>
<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body class="series-Peliculas ">
    <section class="page-section">
        <?php include("includes/navigation.php"); ?>
        <header>
            <?php
            session_start();

            // Verificar si la película está almacenada en la sesión
            if (isset($_SESSION['pelicula'])) {
                // Obtener los detalles de la película
                $pelicula = $_SESSION['pelicula'];

                // Ahora puedes acceder a los detalles de la película, por ejemplo:
                $nombre = $pelicula['nombre'];
                $categoria = $pelicula['categoria'];
                $duracion = $pelicula['duracion'];
                $descripcion = $pelicula['descripcion'];
                $trailer = $pelicula['trailer'];
                $subcategoria = $pelicula['subcategoria'];
                $portada = $pelicula['portada'];
                // Y así sucesivamente...
                ?>
                <div class="row" class="row1">
                    <div class="col-md-6">
                        <div class="detalle-pelicula">
                            <h1 class="detalle-titulo">Nombre:
                                <?php echo $nombre; ?>
                            </h1>
                            <p class="detalle-info">Categoría:
                                <?php echo $categoria; ?>
                            </p>
                            <p class="detalle-info">Duración:
                                <?php echo $duracion; ?>
                            </p>
                            <p class="detalle-info">Descripción:
                                <?php echo $descripcion; ?>
                            </p>
                            <p class="detalle-info">
                                <?php echo $trailer; ?>
                            </p>
                            <p class="detalle-info">Subcategoría:
                                <?php echo $subcategoria; ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detalle-imagen">
                            <img src='<?php echo $portada; ?>' class='img-fluid rounded' alt='Portada de la película'>
                        </div>
                    </div>
                </div>

                </div> <!-- Cerrar la fila -->
                <div class="separacionDiv"> <!-- Añade margen-top para separación -->
                    <h1>Comentarios</h1>
                    <form id="quill" action="" method="POST">
                        <div class="edicion" id="editor" name="comentario"></div>
                        <input type="hidden" name="contenido_quill" id="contenido_quill">


                        <div class="margin1"></div>

                        <!-- Agrega un formulario para las estrellas con clases de Bootstrap -->
                        <div class="mb-3">
                            <h1>Selecciona una valoración: (1 - 5 )</h1>
                            <div id="starRating" class="mb-3">
                                <!-- Utiliza etiquetas <label> para las estrellas -->
                                <input type="radio" name="rating" value="1" id="star1"><label for="star1"></label>
                                <input type="radio" name="rating" value="2" id="star2"><label for="star2"></label>
                                <input type="radio" name="rating" value="3" id="star3"><label for="star3"></label>
                                <input type="radio" name="rating" value="4" id="star4"><label for="star4"></label>
                                <input type="radio" name="rating" value="5" id="star5"><label for="star5"></label>
                            </div>
                        </div>

                        <button type="submit" name="enviar" class="btn btn-primary">Enviar valoración</button>
                    </form>
                </div>

                <script>
                    var quill = new Quill('#editor', {
                        theme: 'snow'
                    });
                    // Actualiza el campo oculto con el contenido de Quill antes de enviar el formulario
                    document.querySelector('form').onsubmit = function () {
                        var contenidoQuill = quill.root.innerHTML;
                        document.getElementById('contenido_quill').value = contenidoQuill;

                        // Desplazar la página automáticamente hasta el final
                        window.scrollTo(0, document.body.scrollHeight);
                    };

                </script>
                <?php
            } else {
                echo "No se han encontrado detalles de la película.";
            }
            ?>
            <?php
            if (isset($_POST["enviar"])) {
                require_once 'Model/Usuarios.php';



                // Verificar si se ha enviado un comentario
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rating"]) && isset($_POST["contenido_quill"])) {
                    // Obtener el comentario enviado por el formulario
                    $comentario = $_POST["contenido_quill"];
                    // Obtener la valoración enviada por el formulario
                    $valoracion = $_POST["rating"];

                    // Obtener el idusername de la sesión (asegúrate de haber iniciado la sesión previamente)
                    if (isset($_SESSION["usuario"])) {
                        $idusername = $_SESSION["usuario"]->username;

                        // Obtener el idpelicula de la sesión
                        if (isset($_SESSION["pelicula"])) {
                            $pelicula = $_SESSION["pelicula"];
                            $idpelicula = $pelicula['nombre'];

                            // Guardar el comentario en la base de datos
                            $servername = "localhost";
                            $username = "dwes"; // Cambia esto por tu nombre de usuario de la base de datos
                            $password = "abc123."; // Cambia esto por tu contraseña de la base de datos
                            $dbname = "lucecine"; // Cambia esto por el nombre de tu base de datos
            
                            // Crear conexión
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Verificar la conexión
                            if ($conn->connect_error) {
                                die("Conexión fallida: " . $conn->connect_error);
                            }

                            // Preparar la consulta para insertar el comentario en la tabla
                            $sql = "INSERT INTO valoracion (idusername, idpelicula, valoracion, comentario) VALUES (?, ?, ?, ?)";
                            $stmt = $conn->prepare($sql);

                            // Vincular los parámetros y ejecutar la consulta
                            $stmt->bind_param("ssis", $idusername, $idpelicula, $valoracion, $comentario);
                            if ($stmt->execute()) {
                                echo "Comentario guardado correctamente.";
                            } else {
                                echo "Error al guardar el comentario: " . $conn->error;
                            }

                            // Cerrar la conexión
                            $stmt->close();
                            $conn->close();
                        } else {
                            echo "No se ha encontrado el ID de la película en la sesión.";
                        }
                    } else {
                        echo "No se ha encontrado el ID de usuario en la sesión.";
                    }
                } else {
                    // Si no se ha enviado un comentario o una valoración, redirigir de vuelta a la página principal
                }
            }
            ?>


            <?php

            // Verificar si la película está almacenada en la sesión
            if (isset($_SESSION['pelicula'])) {
                // Obtener los detalles de la película
                $pelicula = $_SESSION['pelicula'];

                // Conexión a la base de datos
                $servername = "localhost";
                $username = "dwes";
                $password = "abc123.";
                $dbname = "lucecine";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Consulta para obtener las valoraciones de la película con el nombre de usuario
                $sql = "SELECT * FROM valoracion WHERE idpelicula = '{$pelicula['nombre']}'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar las valoraciones
                    echo "<div id='valoraciones'>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<h1>Usuario: {$row['idusername']}</h1>";
                        echo "<p>Película: {$row['idpelicula']}</p>";
                        echo "<p>Valoración: {$row['valoracion']}</p>";
                        echo "<p>Comentario: {$row['comentario']}</p>";
                        echo "<hr>"; // Separador entre valoraciones
                    }
                    echo "</div>";
                } else {
                    echo "No se encontraron valoraciones.";
                }

                // Cerrar conexión
                $conn->close();
            } else {
                echo "No se han encontrado detalles de la película.";
            }
            ?>

    </section>
    <?php include("includes/footer.php"); ?>

</body>

</html>