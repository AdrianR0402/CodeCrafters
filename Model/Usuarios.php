<?php
class Usuarios
{
    private $username;
    private $password;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $email;
    private $fechanacimiento;
    private $pais;
    private $codigopostal;
    private $telefono;
    private $rol;

    // Constructor
    public function __construct(
        $username,
        $password,
        $nombre,
        $apellido1,
        $apellido2,
        $email,
        $fechanacimiento,
        $pais,
        $codigopostal,
        $telefono,
        $rol
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->email = $email;
        $this->fechanacimiento = $fechanacimiento;
        $this->pais = $pais;
        $this->codigopostal = $codigopostal;
        $this->telefono = $telefono;
        $this->rol = $rol;
    }

    // Métodos getters y setters

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}