<?php require_once 'UsuariosController.php'; ?>
<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<style>
    h2 {
        color: $primary;
    }

    .detalle-valor {
        text-align: right;
    }
</style>

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
                echo "<div class='row'>";
                echo "<div class='col-md-6'>"; // Columna para los detalles
                echo "<div>";
                echo "<div>";
                echo "<h1>Nombre: $nombre<br></h1>";
                echo "<h1>Categoría: $categoria<br></h1>";
                echo "<h1>Duración: $duracion<br></h1>";
                echo "<h1>Descripcion: $descripcion<br></h1>";
                echo "<h1>Trailer: $trailer<br></h1>";
                echo "<h1>Subcategoria: $subcategoria<br></h1>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                echo "<div class='col-md-6'>"; // Columna para la imagen
                echo "<div class='detalle-imagen'>"; // Este div contendrá la imagen
                echo "<img src='$portada' style='border: 3px solid #ccc; border-radius: 10px; margin-top: 50px;'>";



                echo "</div>";
                echo "</div>";

                echo "</div>"; // Cerrar la fila
            


            } else {
                echo "No se han encontrado detalles de la película.";
            }

            ?>
    </section>
    <?php include("includes/footer.php"); ?>