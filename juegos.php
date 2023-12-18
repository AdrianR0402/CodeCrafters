<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>
    <?php include("includes/navigation.php"); ?>
    <main>
    <section class="page-section" id="acercaDe">
            <div class="container-fluid py-5 text-center">
                <h1 class="display-1 text-primary text-bold">Lucecine</h1>
                <p class="lead text-white">Tus juegos favoritos</p>
            </div>

            <!-- Sección de Imágenes con Texto -->
            <div class="container mt-4">
                <div class="row">
                    <!-- Primera Imagen con Texto -->
                    <div class="col-md-6">
                        <img src="assets/img/portfolio/juego1.jpeg" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Primera Imagen">
                        <p class="mt-2 text-center text-white letrasImg">
                            <a href="/juegos/juegoJuan/index.php" class="text-bold">Smash Movie</a>
                        </p>
                    </div>
                    <!-- Segunda Imagen con Texto -->
                    <div class="col-md-6">
                        <img src="assets/img/portfolio/series.png" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Segunda Imagen">
                        <p class="mt-2 text-center text-white letrasImg">
                            <a href="" class="text-bold">Juego 2</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <!-- Tercera Imagen con Texto -->
                    <div class="col-md-6">
                        <img src="assets/img/portfolio/animes.png" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Tercera Imagen">
                        <p class="mt-2 text-center text-white letrasImg">
                            <a href="" class="text-bold">Juego 3</a>
                        </p>
                    </div>
                    <!-- Cuarta Imagen con Texto. -->
                    <div class="col-md-6">
                        <img src="assets/img/portfolio/trailers.png" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Cuarta Imagen">
                        <p class="mt-2 text-center text-white letrasImg">
                            <a href="" class="text-bold">Juego 4</a>
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>

    </main>
    <?php include("includes/footer.php"); ?>
</body>
</html>