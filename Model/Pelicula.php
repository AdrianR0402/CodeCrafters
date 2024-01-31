<?php

class Pelicula
{
    private $nombre;
    private $categoria;
    private $duracion;
    private $descripcion;
    private $trailer;
    private $subcategoria;

    private $portada;

    public function __construct($nombre, $categoria, $duracion, $descripcion, $trailer, $subcategoria, $portada)
    {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->duracion = $duracion;
        $this->descripcion = $descripcion;
        $this->trailer = $trailer;
        $this->subcategoria = $subcategoria;
        $this->portada = $portada;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
?>