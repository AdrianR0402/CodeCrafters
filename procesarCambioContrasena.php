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

// Obtener la nueva contraseña y la confirmación de la contraseña del formulario
$contrasenaNueva = $_POST['passNueva'];
$confirmacionContrasena = $_POST['passRep'];

// Verificar si la nueva contraseña y la confirmación de la contraseña coinciden
if ($contrasenaNueva != $confirmacionContrasena) {
    $_SESSION['errorMsg'] = "La nueva contraseña y la confirmación de la contraseña no coinciden.";
} else {
    // Consulta SQL para seleccionar la contraseña actual del usuario
    $sql = "SELECT pass FROM usuario WHERE username = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $nombreUsuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Obtener la contraseña actual del usuario de la base de datos
        $fila = $result->fetch_assoc();
        $contrasenaActualBD = $fila['pass'];

        // Verificar si la contraseña actual ingresada por el usuario coincide con la contraseña almacenada en la base de datos
        if ($_POST['passAct'] == $contrasenaActualBD) {
            // Las contraseñas coinciden, ahora puedes actualizar la contraseña en la base de datos

            // Consulta SQL para actualizar la contraseña en la base de datos
            $sqlUpdate = "UPDATE usuario SET pass = ? WHERE username = ?";
            $stmtUpdate = $conexion->prepare($sqlUpdate);
            $stmtUpdate->bind_param("ss", $contrasenaNueva, $nombreUsuario);
            $stmtUpdate->execute();

            // Verificar si la actualización fue exitosa
            if ($stmtUpdate->affected_rows > 0) {
                $_SESSION['errorMsg'] = "¡Contraseña actualizada exitosamente!";
            } else {
                $_SESSION['errorMsg'] = "Error al actualizar la contraseña: " . $conexion->error;
            }

            $stmtUpdate->close();
        } else {
            // La contraseña actual ingresada por el usuario no coincide con la contraseña almacenada en la base de datos
            $_SESSION['errorMsg'] = "La contraseña actual ingresada no es válida.";
        }
    } else {
        $_SESSION['errorMsg'] = "No se encontró ningún usuario con el nombre proporcionado.";
    }

    $stmt->close();
}

$conexion->close();

// Redirigir al archivo HTML
header("Location:password.php");
exit;
?>