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
$tema = $conexion->real_escape_string($_POST['tema']);
$feed = $conexion->real_escape_string($_POST['feed']);

// Consulta SQL para insertar los datos en la tabla 'ayuda'
$sql = "INSERT INTO feedback (usernameFeed, tema, feed) VALUES ('$nombreUsuario', '$tema', '$feed')";

if ($conexion->query($sql) === TRUE) {
    header("Location: contact.php");
    exit();
} else {
    // Mostrar mensaje de error si la inserción falló
    echo "Error al insertar datos: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>