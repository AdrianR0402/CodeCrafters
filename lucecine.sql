-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2024 a las 08:42:08
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lucecine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `duracion` time NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `trailer` varchar(900) NOT NULL,
  `subcategoria` varchar(50) NOT NULL,
  `portada` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`nombre`, `categoria`, `duracion`, `descripcion`, `trailer`, `subcategoria`, `portada`) VALUES
('onepiece', 'anime', '00:24:00', 'quiere ser el rey de los piratas', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/d-MKnSPqsK8?si=wMn0ixlxw0SwfCGx\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'aventura', '/assets/img/background-color4@2x.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `pais` varchar(50) NOT NULL,
  `codigopostal` int(11) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`username`, `pass`, `nombre`, `apellido1`, `apellido2`, `email`, `fechanacimiento`, `pais`, `codigopostal`, `telefono`, `rol`) VALUES
('admin', '1234', 'izan', 'herenas', 'guerrero', 'antonio@gmail.com', '2009-03-03', 'españa', 14531, '666666666', ''),
('nty', '1234', 'polo', 'swqdqd', 'awdawd', 'polo@gmail.com', '2008-04-04', 'polonia', 13444, '35354463', ''),
('pepe', '1234', 'pepe', 'pepe1', 'pepe2', 'pepe@gmail.com', '2024-01-01', 'españa', 14900, '123456789', 'admin'),
('usuarioBasico', '1234', 'pope', 'eeee', 'eeeeeee', 'izan@gmail.com', '0000-00-00', 'España', 13444, '676575754', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `usuario` varchar(50) NOT NULL,
  `pelicula` varchar(50) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`usuario`,`pelicula`),
  ADD KEY `pelicula` (`pelicula`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`username`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`pelicula`) REFERENCES `pelicula` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
