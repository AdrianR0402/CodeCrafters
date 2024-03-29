<?php require_once 'UsuariosController.php'; ?>
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
                <p class="lead text-white">Tu sitio de películas y series favorito</p>
            </div>

            <!-- Texto sobre la página -->
            <div class="container mt-4">
                <p class="text-center text-white letraLucecine">Bienvenido a Lucecine, el lugar perfecto para
                    disfrutar de tus
                    <span class="text-bold">películas</span> y <span class="text-bold">series</span>
                    favoritas. Explora nuestro amplio catálogo y sumérgete en el emocionante mundo del cine y la
                    televisión.
                </p>
            </div>

            <!-- Sección de Imágenes con Texto -->
            <div class="container mt-4">
                <div class="row">
                    <!-- Primera Imagen con Texto -->
                    <div class="col-md-6">
                        <img src="assets/img/portfolio/peliculas.png" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Primera Imagen">
                        <p class="mt-2 text-center text-white letrasImg">
                            <span class="text-bold">Peliculas</span>
                        </p>
                    </div>
                    <!-- Segunda Imagen con Texto -->
                    <div class="col-md-6">
                        <img src="assets/img/portfolio/series.png" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Segunda Imagen">
                        <p class="mt-2 text-center text-white letrasImg">
                            <span class="text-bold">Series</span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <!-- Tercera Imagen con Texto -->
                    <div class="col-md-6">
                        <img src="assets/img/portfolio/animes.png" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Tercera Imagen">
                        <p class="mt-2 text-center text-white letrasImg">
                            <span class="text-bold">Animes</span>
                        </p>
                    </div>
                    <!-- Cuarta Imagen con Texto. -->
                    <div class="col-md-6">
                        <img src="assets/img/portfolio/trailers.png" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Cuarta Imagen">
                        <p class="mt-2 text-center text-white letrasImg">
                            <span class="text-bold">Trailers</span>
                        </p>
                    </div>

                </div>
            </div>
            <h2>Juegos</h2>
            <a href="/juegos/juegoJuan/index.php">Juego 1</a><br>
            <a href="/juegos/juegoIvan/index.php">Juego 2</a><br>
            <a href="/juegos/juegoIzan/index.php">Juego 3</a><br>
            <a href="/juegos/juegoAdrian/index.php">Juego 4</a><br>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>