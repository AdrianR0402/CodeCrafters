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
            
                ?>
                <style>
        /* Estilo para las estrellas */
        #starRating {
            font-size: 0; /* Elimina el espacio entre las estrellas */
            white-space: nowrap; /* Evita que las estrellas se muevan a la siguiente línea */
        }

        #starRating input {
            display: none; /* Oculta los radios originales */
        }

        #starRating label {
            font-size: 30px; /* Tamaño de las estrellas */
            cursor: pointer;
            display: inline-block;
        }

        #starRating label:before {
            content: '\2605'; /* Carácter de estrella vacía Unicode */
        }

        #starRating input:checked + label:before {
            content: '\2605'; /* Carácter de estrella rellena Unicode cuando se selecciona */
            color: gold; /* Cambia el color de la estrella seleccionada */
        }
    </style>


    <div style="text-align: center; padding: 20px;">
        <h1>Valoraciones</h1>
        <form id="quill" action="procesarComentario.php" method="POST">
            <div id="editor" name="comentario" style="height: 400px; background-color: #fff;"></div>
            <button type="submit" >Enviar Comentario</button>
        </form>

        <!-- Agrega un formulario para las estrellas -->
        <form id="ratingForm" action="procesarComentario.php" method="POST">
            <h1>Selecciona una valoración: (1 - 5 )</h1>
            <div id="starRating">
                <!-- Utiliza etiquetas <label> para las estrellas -->
                <input type="radio" name="rating" value="1" id="star1"><label for="star1"></label>
                <input type="radio" name="rating" value="2" id="star2"><label for="star2"></label>
                <input type="radio" name="rating" value="3" id="star3"><label for="star3"></label>
                <input type="radio" name="rating" value="4" id="star4"><label for="star4"></label>
                <input type="radio" name="rating" value="5" id="star5"><label for="star5"></label>
            </div>
            <br>
            <button type="submit" >Enviar valoracion</button>
        </form>
    </div>

    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>



            <?php 

            } else {
                echo "No se han encontrado detalles de la película.";
            }
            
            ?>
            
    </section>
    <?php include("includes/footer.php"); ?>