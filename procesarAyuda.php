<?php


require_once 'Model/Usuarios.php';

session_start();

// Realizar la conexión a la base de datos
$conexion = new mysqli("localhost", "dwes", "abc123.", "lucecine");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener el nombre de usuario de la sesión
$nombreUsuario = $_SESSION['usuario']->username;

// Obtener los datos del formulario y escaparlos para prevenir inyección de SQL
$problemas = $conexion->real_escape_string($_POST['problemas']);
$reporte = $conexion->real_escape_string($_POST['reporte']);

// Consulta SQL para insertar los datos en la tabla 'ayuda'
$sql = "INSERT INTO ayuda (usernameAyuda, incidencias, reporte) VALUES ('$nombreUsuario', '$problemas', '$reporte')";

if ($conexion->query($sql) === TRUE) {
    header("Location: ayuda.php");
    exit();
} else {
    // Mostrar mensaje de error si la inserción falló
    echo "Error al insertar datos: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>