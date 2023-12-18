<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Video</title>

<body>
    <div id="video-container">
        <video id="myVideo" controls>
            <source src="./videos/mikethefrog.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>

        <div id="controls">
            <button onclick="togglePlayPause()">▶️</button>
            <button onclick="toggleMute()">🔇</button>
            <input type="range" id="volume" min="0" max="1" step="0.1" value="1" oninput="setVolume()">
            <button onclick="toggleFullscreen()">⛶</button>
        </div>
    </div>
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

</body>

</html>