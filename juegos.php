<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
    <style>
        body {
            background-color: #111;
        }

        .video-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #000;
            padding: 20px;
            border-radius: 10px;
        }

        #video-container {
            width: 60%;
            /* Ajusta el ancho del contenedor del video según sea necesario */
            border: none;
            /* Quita el borde del video */
        }

        .text-section {
            width: 35%;
            /* Ajusta el ancho del contenedor de texto según sea necesario */
            padding-left: 20px;
            color: #fff;
            text-align: center;
            /* Alinea el texto al centro */
        }
    </style>
</head>

<body>
    <?php include("includes/navigation.php"); ?>

    <main>
        <section class="page-section" id="acercaDe">
            <div class="container-fluid py-5 text-center">
                <h1 class="display-1 text-primary text-bold">Lucecine</h1>
                <p class="lead text-white">Tus juegos favoritos</p>

                <div class="video-section mt-5">
                    <div id="video-container">
                        <video id="myVideo" controls width="640" height="360" class="mx-auto">
                            <source src="./videos/mikethefrog.mp4" type="video/mp4">
                            Tu navegador no soporta la etiqueta de video.
                        </video>

                        <div id="controls" class="mt-3">
                            <button onclick="togglePlayPause()">▶️</button>
                            <button onclick="toggleMute()">🔇</button>
                            <input type="range" id="volume" min="0" max="1" step="0.1" value="1" oninput="setVolume()">
                            <button onclick="toggleFullscreen()">⛶</button>
                        </div>
                    </div>

                    <div class="text-section">
                        <h1 class="text-white">Tus juegos favoritos en este lugar</h1>
                    </div>
                </div>
            </div>

            <!-- Sección de Imágenes con Texto -->
            <div class="container mt-4">
                <!-- Resto de tu código HTML para la sección de imágenes con texto -->
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
                            <a href="/juegos/juegoIvan/juegoIvan.php" class="text-bold">Ruleta</a>
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

    <script>
        var video = document.getElementById("myVideo");
        var volumeControl = document.getElementById("volume");

        // Remover el atributo 'controls' después de que la página se ha cargado
        document.addEventListener("DOMContentLoaded", function () {
            video.removeAttribute("controls");
        });

        function togglePlayPause() {
            video.paused ? video.play() : video.pause();
        }

        function toggleMute() {
            video.muted = !video.muted;
        }

        function setVolume() {
            video.volume = volumeControl.value;
        }

        function toggleFullscreen() {
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.mozRequestFullScreen) { /* Firefox */
                video.mozRequestFullScreen();
            } else if (video.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
                video.webkitRequestFullscreen();
            } else if (video.msRequestFullscreen) { /* IE/Edge */
                video.msRequestFullscreen();
            }
        }
    </script>
</body>

</html>