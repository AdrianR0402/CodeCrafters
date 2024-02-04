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
    /* Estilos para las características de la película */
    .detalle-pelicula {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .detalle-titulo {
        font-size: 24px;
        color: #007bff;
        margin-bottom: 10px;
    }

    .detalle-info {
        font-size: 18px;
        margin-bottom: 8px;
    }
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
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
                <div class="detalle-pelicula">
                    <h1 class="detalle-titulo">Nombre: <?php echo $nombre; ?></h1>
                    <p class="detalle-info">Categoría: <?php echo $categoria; ?></p>
                    <p class="detalle-info">Duración: <?php echo $duracion; ?></p>
                    <p class="detalle-info">Descripción: <?php echo $descripcion; ?></p>
                    <p class="detalle-info"> <?php echo $trailer; ?></p>
                    <p class="detalle-info">Subcategoría: <?php echo $subcategoria; ?></p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="detalle-imagen">
                    <img src='<?php echo $portada; ?>' class='img-fluid rounded' alt='Portada de la película'>
                </div>
            </div>
        </div>

                </div> <!-- Cerrar la fila -->
                <div style="text-align: center; padding: 20px; margin-top: 20px;"> <!-- Añade margen-top para separación -->
                    <h1>Comentarios</h1>
                    <form id="quill" action="procesarComentario.php" method="POST">
                        <div id="editor" name="comentario" style="height: 400px; background-color: #fff;"></div>
                        <input type="hidden" name="contenido_quill" id="contenido_quill">

                        
                        <div style="margin-top: 50px;"></div>

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

                        <button type="submit" class="btn btn-primary">Enviar valoración</button>
                    </form>
                </div>

    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        // Actualiza el campo oculto con el contenido de Quill antes de enviar el formulario
        document.querySelector('form').onsubmit = function() {
            var contenidoQuill = quill.root.innerHTML;
            document.getElementById('contenido_quill').value = contenidoQuill;
        };

    </script>
            <?php 
            } else {
                echo "No se han encontrado detalles de la película.";
            }
            ?>
            
    </section>
    <?php include("includes/footer.php"); ?>
