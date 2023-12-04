<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
    <style>

    </style>
</head>
<?php include("includes/navigation.php"); ?>

<body>
    <div id="video-container">
        <video id="video" width="900" height="365">
            <source src="videos/mikethefrog.webm" type="video/webm">
            <source src="videos/mikethefrog.ogv" type="video/ogv">
            <source src="videos/mikethefrog.mp4" type="video/mp4">
            <p>
                Your browser doesn't support HTML5 video.
                <a href="videos/mikethefrog.mp4">Download</a> the video instead.
            </p>
        </video>
        <div id="video-controls">
            <button type="button" id="play-pause" class="play">Play</button>
            <progress id="seek-bar" value="0" max="100"></progress>
            <button type="button" id="mute">Mute</button>
            <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
            <button type="button" id="full-screen">Full-Screen</button>
        </div>
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var video = document.getElementById("video");
            var playButton = document.getElementById("play-pause");
            var muteButton = document.getElementById("mute");
            var fullScreenButton = document.getElementById("full-screen");
            var seekBar = document.getElementById("seek-bar");
            var volumeBar = document.getElementById("volume-bar");

            // Función para cambiar el estado de reproducción
            function togglePlayPause() {
                if (video.paused) {
                    video.play();
                    playButton.innerHTML = "Pause";
                    playButton.classList.remove("paused");
                } else {
                    video.pause();
                    playButton.innerHTML = "Play";
                    playButton.classList.add("paused");
                }
            }

            // Función para cambiar el estado de silencio
            function toggleMute() {
                video.muted = !video.muted;
                muteButton.innerHTML = video.muted ? "Unmute" : "Mute";
            }

            // Función para manejar el evento de clic en la barra de búsqueda
            function handleSeekBarClick(e) {
                var newPosition = (e.clientX - seekBar.getBoundingClientRect().left) / seekBar.offsetWidth;
                seekBar.value = newPosition * 100;
                video.currentTime = newPosition * video.duration;
            }

            // Función para manejar el evento de cambio en la barra de volumen
            function handleVolumeBarChange() {
                video.volume = volumeBar.value;
            }

            // Event listeners
            playButton.addEventListener("click", togglePlayPause);
            muteButton.addEventListener("click", toggleMute);
            fullScreenButton.addEventListener("click", () => video.requestFullscreen());
            seekBar.addEventListener("input", handleSeekBarClick);
            volumeBar.addEventListener("input", handleVolumeBarChange);

            // Actualizar la barra de búsqueda mientras el video se reproduce
            video.addEventListener("timeupdate", function () {
                seekBar.value = (video.currentTime / video.duration) * 100;
            });

            // Pausar el video al hacer clic en la barra de búsqueda
            seekBar.addEventListener("mousedown", () => video.pause());

            // Reanudar la reproducción cuando se suelta el mango de la barra de búsqueda
            seekBar.addEventListener("mouseup", () => video.play());

            // Cambiar color del botón de reproducción/pausa al cambiar de estado
            video.addEventListener("play", function () {
                playButton.classList.remove("paused");
            });

            video.addEventListener("pause", function () {
                playButton.classList.add("paused");
            });
        });

    </script>

    <?php include("includes/footer.php"); ?>

</body>

</html>