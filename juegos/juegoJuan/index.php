<?php include("/includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("/includes/head-tag-contents.php"); ?>
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
      border: solid black 1px;
      background-size: cover;
    }

    

    /* Estilos adicionales para el diseño con Bootstrap */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
    }

    h1, h2 {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <?php include("/includes/navigation.php"); ?>
  <main>
    <div class="container">
      <h1>Dale a Todas las Películas que puedas</h1>
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
  </main>
  <?php include("/includes/footer.php"); ?>
  <script src="app.js"></script>
</body>

</html>