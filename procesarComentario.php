<?php
require_once 'Model/Usuarios.php';
// Verificar si se ha enviado un comentario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comentario"]) && isset($_POST["valoracion"])) {
    // Obtener el comentario enviado por el formulario
    $comentario = $_POST["comentario"];
    // Obtener la valoración enviada por el formulario
    $valoracion = $_POST["rating"];

    // Obtener el idusername de la sesión (asegúrate de haber iniciado la sesión previamente)
    session_start();
    if (isset($_SESSION["usuario"])) {
        $idusername = $_SESSION["usuario"]->username;

        // Obtener el idpelicula de la sesión
        if (isset($_SESSION["pelicula"])) {
            $pelicula = $_SESSION["pelicula"];
            $idpelicula = $pelicula['nombre'];

            // Guardar el comentario en la base de datos
            $servername = "localhost";
            $username = "dwes"; // Cambia esto por tu nombre de usuario de la base de datos
            $password = "abc123."; // Cambia esto por tu contraseña de la base de datos
            $dbname = "lucecine"; // Cambia esto por el nombre de tu base de datos

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Preparar la consulta para insertar el comentario en la tabla
            $sql = "INSERT INTO valoracion (idusername, idpelicula, valoracion, comentario) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Vincular los parámetros y ejecutar la consulta
            $stmt->bind_param("ssis", $idusername, $idpelicula, $valoracion, $comentario);
            if ($stmt->execute()) {
                echo "Comentario guardado correctamente.";
            } else {
                echo "Error al guardar el comentario: " . $conn->error;
            }

            // Cerrar la conexión
            $stmt->close();
            $conn->close();
        } else {
            echo "No se ha encontrado el ID de la película en la sesión.";
        }
    } else {
        echo "No se ha encontrado el ID de usuario en la sesión.";
    }
} else {
    // Si no se ha enviado un comentario o una valoración, redirigir de vuelta a la página principal
    header("Location: detallesSerie.php");
    exit();
}
?>