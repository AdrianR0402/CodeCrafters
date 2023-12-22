<?php include("../../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("../../includes/head-tag-contents.php"); ?>
  <style>
    .custom-grid {
      display: grid;
      grid-template-columns: repeat(3, 200px); /* Tamaño de los cuadrados */
      gap: 5px; /* Espacio entre los cuadrados */
      justify-content: center;
    }

    .square {
      height: 200px;
      width: 200px;
      border: solid white 1px;
      background-size: cover;
      background-color:white;
    }

    /* Estilos adicionales para el diseño con Bootstrap */
    h1, h2 {
      text-align: center;
      margin-bottom: 20px;
      color: white;
    }
    .leaderboard-section {
            padding-top: 1px; 
            padding-bottom: 50px; 
        }
    .main-section {
          padding-top: 170px; 
          padding-bottom: 50px; 
          background-image: url("../../assets/img/portfolio/fondojuego1.jpg");
    }
  </style>
</head>

<body>
  <?php include("../../includes/navigation.php"); ?>
  
    <section class="page-section main-section">
      <div class="container">
        <h1>Dale a Todas las Películas que puedas</h1><br><br>
        <div class="d-flex justify-content-center mb-4">
          <div class="col-4">
            <h2>Tu marcador:</h2>
            <h2 id="score">0</h2>
          </div>
          <div class="col-4">
            <h2>Tiempo Restante :</h2>
            <h2 id="time-left">60</h2>
          </div>
        </div>

        <div class="d-flex justify-content-center"></div>
          <div class="custom-grid ">
            <div class="square" id="1"></div>
            <div class="square" id="2"></div>
            <div class="square" id="3"></div>
            <div class="square" id="4"></div>
            <div class="square" id="5"></div>
            <div class="square" id="6"></div>
            <div class="square" id="7"></div>
            <div class="square" id="8"></div>
            <div class="square" id="9"></div>
          </div>
        </div>
      </div>
      <section class=" leaderboard-section">
        <div class="container">
            <div class="card text-center mt-4">
                <div class="card-header">
                    ¡ Mejores Puntuaciones !
                </div>
                <div class="card-body">
                    <!-- Agrega aquí el contenido del leaderboard, puedes usar tablas, listas o cualquier otro elemento según tus necesidades -->
                    <p class="card-text">Juan: 25</p>
                    <p class="card-text">Ivan: 33</p>
                    <p class="card-text">Izan: 12</p>
                    <!-- Ajusta el contenido según tu necesidad -->
                </div>
            </div>
        </div>
    </section>

    </section>

    

 
  <?php include("../../includes/footer.php"); ?>
  <script src="app.js"></script>
</body>

</html>