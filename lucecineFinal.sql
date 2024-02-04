-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2024 a las 16:50:14
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
-- Estructura de tabla para la tabla `ayuda`
--

CREATE TABLE `ayuda` (
  `usernameAyuda` varchar(50) NOT NULL,
  `incidencias` varchar(1000) DEFAULT NULL,
  `reporte` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ayuda`
--

INSERT INTO `ayuda` (`usernameAyuda`, `incidencias`, `reporte`, `id`) VALUES
('pepe', '0', 'pokemon', 1),
('pepe', 'MA MATAO EL LOCO', 'pokemon', 2),
('pepe', 'pololoooooo', 'prueba1', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `usernameFeed` varchar(100) NOT NULL,
  `tema` varchar(1000) NOT NULL,
  `feed` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `feedback`
--

INSERT INTO `feedback` (`id`, `usernameFeed`, `tema`, `feed`) VALUES
(1, 'pepe', 'va bien', 'mejoraria la prueba1'),
(2, 'pepe', 'va perfeeeee', 'mejoraria la prueba2');

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
('Billy-the-Kid', 'serie', '01:00:00', 'un amujer rubia que mete espadazos', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7kSuas6mRpk?si=Jf-Q7n_UJUP8ml91\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'accion', '/assets/img/background-color3@2x.png'),
('DeadPool', 'pelicula', '01:30:00', 'un antiheroe muy loco ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/QyU7glpHg-c?si=dARKUJedHlBGMfWM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'accion', '/assets/img/portfolio/imagenesPeliculas/2.jpg'),
('Death-Note', 'anime', '00:20:00', 'un muchacho con un libro que se hace pasar por dios', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NlJZ-YgAt-c?si=825_VyJuu27zqmAe\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'drama', '/assets/img/portfolio/imagenesAnime/2.jpg'),
('Jujutsu-Kaisen', 'anime', '00:20:00', 'historia de unos hechiceros que luchan contra las maldiciones', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aPBUUJbrAWo?si=hA2HlZp2154DhqcY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'shounen', '/assets/img/portfolio/imagenesAnime/1.jpg'),
('Malefica', 'pelicula', '01:30:00', 'la vida de malefica la mala de blancanieves', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6yZXLIkkbMA?si=yWZPvl9Ba6Zw2exx\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'drama', '/assets/img/portfolio/imagenesPeliculas/1.png'),
('onepiece', 'serie', '00:24:00', 'quiere ser el rey de los piratas', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/d-MKnSPqsK8?si=wMn0ixlxw0SwfCGx\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'aventura', '/assets/img/background-color4@2x.png');

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
  `idusername` varchar(100) NOT NULL,
  `idpelicula` varchar(100) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`idusername`, `idpelicula`, `valoracion`, `comentario`) VALUES
('pepe', 'Malefica', 5, 'polokolok'),
('pepe', 'Malefica', 4, 'malefica peliculon'),
('pepe', 'Malefica', 5, '<p>pokemon</p>'),
('pepe', 'Malefica', 2, '<p>nueva 1</p>'),
('pepe', 'Malefica', 4, '<p>nuevo 2222</p>'),
('pepe', 'Malefica', 5, '<h1>nuevo 333<strong><span class=\"ql-cursor\">﻿</span></strong></h1>'),
('admin', 'Malefica', 5, '<p>soy el admin</p>'),
('admin', 'Malefica', 5, '<p>oijoijijoijiojoijoijoijo</p>'),
('admin', 'Malefica', 5, '<p>laguna cuantica</p>');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ayuda`
--
ALTER TABLE `ayuda`
  ADD CONSTRAINT `ayuda_ibfk_1` FOREIGN KEY (`usernameAyuda`) REFERENCES `usuario` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
