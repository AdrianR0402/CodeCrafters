<?php include("../../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../../includes/head-tag-contents.php"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>ADIVINA LA PELICULA</title>
</head>

<body>
    <h1>ADIVINA LA PELICULA</h1>

    <!-- Pantalla inicial -->
    <div id="pantalla-inicial">
        <p>¿A qué pais pertenece la bandera?</p>
        <button class="btn" onclick="comenzarJuego()">COMENZAR A JUGAR</button>
    </div>

    <!-- Pantalla juego -->
    <div class="pantalla-juego" id="pantalla-juego">
        <img src="img/ad.svg" alt="" id="imgBandera">
        <div class="opciones">
            <div class="opcion" id="op0" onclick="comprobarRespuesta(0)">
                <div class="letra" id="l0">A</div>
                <div class="nombre" id="n0">OPCION A</div>
            </div>
            <div class="opcion" id="op1" onclick="comprobarRespuesta(1)">
                <div class="letra" id="l1">B</div>
                <div class="nombre" id="n1">OPCION B</div>
            </div>
            <div class="opcion" id="op2" onclick="comprobarRespuesta(2)">
                <div class="letra" id="l2">C</div>
                <div class="nombre" id="n2">OPCION C</div>
            </div>
        </div>
    </div>
    <!-- Pantalla final -->
    <div id="pantalla-final">
        <h2>CORRECTAS: <span id="numCorrectas">3</span></h2>
        <h2>INCORRECTAS: <span id="numIncorrectas">2</span></h2>
        <button class="btn" onclick="volverAlInicio()">VOLVER AL INICIO</button>
    </div>

    <script>
        //cargo en un arreglo las imganes de las banderas. Este sera el orden que se mostrarán
        let banderas = ["marioPeli.png", "atodogas.png", "shazam.png", "guardianes.png", "mission.png"];

        //arreglo que guardara la opcion correcta
        let correcta = [2, 2, 1, 1, 0];

        //arreglo que guardara los paises a mostrar en cada jugada
        let opciones = [];
        //cargo en el arreglo opciones las opciones a mostrar en cada jugada
        opciones.push(["TORRENTE", "LUIGI MANSION", "MARIO BROS"]);
        opciones.push(["ERASED", "DAY Z", "A TODO GAS"]);
        opciones.push(["BABYLONIA", "SHAZAM", "POKEMON"]);
        opciones.push(["SALTA", "GUARDIANES", "EL HUMANO"]);
        opciones.push(["MISION IMPOSIBLE", "PALILLO", "MISION INCREIBLE"]);

        //variable que guarda la posicion actual
        let posActual = 0;
        //variable que guarda la cantidad acertadas hasta el moemento
        let cantidadAcertadas = 0;

        function comenzarJuego() {
            //reseteamos las variables
            posActual = 0;
            cantidadAcertadas = 0;
            //activamos las pantallas necesarias
            document.getElementById("pantalla-inicial").style.display = "none";
            document.getElementById("pantalla-juego").style.display = "block";
            cargarBandera();

        }

        //funcion que carga la siguiente bandera y sus opciones
        function cargarBandera() {
            //controlo sis se acabaron las banderas
            if (banderas.length <= posActual) {
                terminarJuego();
            }
            else {//cargo las opciones
                //limpiamos las clases que se asignaron
                limpiarOpciones();

                document.getElementById("imgBandera").src = "img/" + banderas[posActual];
                document.getElementById("n0").innerHTML = opciones[posActual][0];
                document.getElementById("n1").innerHTML = opciones[posActual][1];
                document.getElementById("n2").innerHTML = opciones[posActual][2];
            }
        }

        function limpiarOpciones() {
            document.getElementById("n0").className = "nombre";
            document.getElementById("n1").className = "nombre";
            document.getElementById("n2").className = "nombre";

            document.getElementById("l0").className = "letra";
            document.getElementById("l1").className = "letra";
            document.getElementById("l2").className = "letra";
        }

        function comprobarRespuesta(opElegida) {
            if (opElegida == correcta[posActual]) {//acertó
                //agregamos las clases para colocar el color verde a la opcion elegida
                document.getElementById("n" + opElegida).className = "nombre nombreAcertada";
                document.getElementById("l" + opElegida).className = "letra letraAcertada";
                cantidadAcertadas++;
            } else {//no acerto
                //agramos las clases para colocar en rojo la opcion elegida
                document.getElementById("n" + opElegida).className = "nombre nombreNoAcertada";
                document.getElementById("l" + opElegida).className = "letra letraNoAcertada";

                //opcion que era correcta
                document.getElementById("n" + correcta[posActual]).className = "nombre nombreAcertada";
                document.getElementById("l" + correcta[posActual]).className = "letra letraAcertada";
            }
            posActual++;
            //Esperamos 1 segundo y pasamos mostrar la siguiente bandera y sus opciones
            setTimeout(cargarBandera, 1000);
        }
        function terminarJuego() {
            //ocultamos las pantallas y mostramos la pantalla final
            document.getElementById("pantalla-juego").style.display = "none";
            document.getElementById("pantalla-final").style.display = "block";
            //agreamos los resultados
            document.getElementById("numCorrectas").innerHTML = cantidadAcertadas;
            document.getElementById("numIncorrectas").innerHTML = banderas.length - cantidadAcertadas;
        }

        function volverAlInicio() {
            //ocultamos las pantallas y activamos la inicial
            document.getElementById("pantalla-final").style.display = "none";
            document.getElementById("pantalla-inicial").style.display = "block";
            document.getElementById("pantalla-juego").style.display = "none";
        } 
    </script>
</body>

</html>