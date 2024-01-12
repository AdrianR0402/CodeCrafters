<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

  <?php
  //Este script crea la base de datos necesaria para probar el ejemplo.
  
  $servername = "localhost"; //!NO CAMBIAR
  $database = "googlelogin"; //!NO CAMBIAR
  $username = "root"; //¿CAMBIAR?
  $password = "root"; //¿CAMBIAR?
  
  // Create connection
  
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "CREATE DATABASE IF NOT EXISTS $database";

  if ($conn->query($sql) === TRUE) {
    echo "<p>Database created successfully</p>";
  } else {
    die("Error creating database: " . $conn->error);
  }

  mysqli_select_db($conn, $database);

  $sql = "CREATE TABLE `usuario` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `pais` varchar(50) NOT NULL,
  `codigopostal` int(11) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `pelicula` (
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `duracion` time NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `trailer` varchar(100) NOT NULL,
  `subcategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `valoracion` (
  `usuario` varchar(50) NOT NULL,
  `pelicula` varchar(50) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  PRIMARY KEY (`usuario`, `pelicula`),
  KEY `pelicula` (`pelicula`),
  CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`username`),
  CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`pelicula`) REFERENCES `pelicula` (`nombre`)
)";


  if ($conn->query($sql) === TRUE) {
    echo "<p>Table user created successfully</p>";
  } else {
    die("Error creating table user: " . $conn->error);
  }

  $conn->close();

  ?>
</body>

</html>