// Selecciona todos los elementos con la clase 'square' y los almacena en 'cuadrados'
const cuadrados = document.querySelectorAll('.square');

// Selecciona el elemento con el ID 'time-left' y lo almacena en 'tiempoRestante'
const tiempoRestante = document.querySelector('#time-left');

// Selecciona el elemento con el ID 'score' y lo almacena en 'puntuacion'
const puntuacion = document.querySelector('#score');

// Variables para almacenar información del juego
let resultado = 0; // Almacena la puntuación del jugador
let posicionGolpe; // Almacena la posición del topo que debe ser golpeada
let tiempoActual = 60; // Almacena el tiempo inicial del juego (en segundos)
let temporizadorId = null; // Almacena el ID del temporizador para el movimiento del topo

// Función para mostrar el topo en un cuadrado aleatorio
const imagenesTopo = ['peli1juego.jpg', 'peli2juego.jpg', 'peli3juego.jpg','peli4juego.jpg','peli5juego.jpg']; // Rutas de las imágenes
let imagenActual = '';

function cuadradoAleatorio() {
  cuadrados.forEach(cuadrado => {
    cuadrado.style.backgroundImage = 'none'; // Reinicia el estilo de fondo
  });

  let cuadradoAleatorio = cuadrados[Math.floor(Math.random() * 9)];
  
  // Cambia la imagen del topo al azar usando las imágenes del arreglo
  const imagenRandom = imagenesTopo[Math.floor(Math.random() * imagenesTopo.length)];
  cuadradoAleatorio.style.backgroundImage = `url('${imagenRandom}')`;

  posicionGolpe = cuadradoAleatorio.id;
}

// Agrega un evento de clic a cada cuadrado para detectar golpes al topo
cuadrados.forEach(cuadrado => {
  cuadrado.addEventListener('mousedown', () => {
    if (cuadrado.id == posicionGolpe) { // Comprueba si el cuadrado golpeado es el topo
      resultado++; // Incrementa la puntuación
      puntuacion.textContent = resultado; // Actualiza la puntuación mostrada en la interfaz
      posicionGolpe = null; // Reinicia la posición del topo

      // Cambiar la imagen del topo solo al ganar un punto
      const nuevaImagen = imagenesTopo.find(imagen => imagen !== imagenActual);
      cuadrado.style.backgroundImage = `url('${nuevaImagen}')`;
      imagenActual = nuevaImagen;
    }
  });
});

// Función para iniciar el movimiento del topo en intervalos de tiempo
function moverTopo() {
  temporizadorId = setInterval(cuadradoAleatorio, 760); // Llama a cuadradoAleatorio cada 500 milisegundos
}

moverTopo(); // Inicia el movimiento del topo al cargar la página

// Función que maneja la cuenta regresiva del tiempo de juego
function cuentaRegresiva() {
  tiempoActual--; // Reduce el tiempo restante
  tiempoRestante.textContent = tiempoActual; // Actualiza el tiempo mostrado en la interfaz

  if (tiempoActual == 0) { // Verifica si el tiempo ha llegado a cero
    clearInterval(temporizadorCuentaRegresivaId); // Detiene el temporizador de cuenta regresiva
    clearInterval(temporizadorId); // Detiene el movimiento del topo
    alert('¡GAME OVER! Tu puntuación final es: ' + resultado); // Muestra la puntuación final en un mensaje de alerta
  }
}

// Inicia el temporizador para la cuenta regresiva del tiempo de juego
let temporizadorCuentaRegresivaId = setInterval(cuentaRegresiva, 1000); // Llama a cuentaRegresiva cada segundo (1000 milisegundos)