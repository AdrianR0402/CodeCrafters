<?php require_once 'UsuariosController.php'; ?>
<?php

include("Model/Usuarios.php");
include("includes/dbconnection.php");

class UsuariosController
{
    public static function buscarUsuarios($usuario)
    {
        try {
            // Reemplaza estos valores con tus credenciales reales de la base de datos
            $servername = "localhost";
            $database = "lucecine";
            $username = "dwes";
            $password = "abc123.";

            $conn = mysqli_connect($servername, $username, $password, $database);

            // Check connection

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $stmt = $conn->prepare("SELECT * FROM usuario WHERE username = ?");
            $stmt->bind_param("s", $usuario);
            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $reg = $result->fetch_assoc();
                $c = new Usuarios(
                    $reg['username'],
                    $reg['password'],
                    $reg['nombre'],
                    $reg['apellido1'],
                    $reg['apellido2'],
                    $reg['email'],
                    $reg['fechanacimiento'],
                    $reg['pais'],
                    $reg['codigopostal'],
                    $reg['telefono'],
                    $reg['rol']
                );
            } else {
                $c = false;
            }

            $stmt->close();
            $conn->close();
        } catch (Exception $ex) {
            $c = false;
            echo $ex->getMessage();
        }

        return $c;
    }
}
?>