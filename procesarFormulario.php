<?php
session_start();
// Realizar la conexión a la base de datos (aquí deberás incluir tu lógica para conectarte a tu base de datos)
$conexion = new mysqli("localhost", "dwes", "abc123.", "lucecine");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener el nombre de la película del formulario
$nombrePelicula = $_POST['nombre'];

// Consulta SQL para obtener los detalles de la película
$sql = "SELECT * FROM pelicula WHERE nombre = '$nombrePelicula'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Obtener los detalles de la película
    $pelicula = $resultado->fetch_assoc();

    // Almacenar los detalles de la película en una sesión
    $_SESSION['pelicula'] = $pelicula;

    // Redirigir a detallesUsuario.php
    header("Location: detallesSerie.php");
} else {
    echo "No se encontró ninguna película con ese nombre.";
}
?>