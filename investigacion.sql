-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2016 a las 16:09:23
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `investigacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE IF NOT EXISTS `asignacion` (
`id` int(200) NOT NULL,
  `id_vehiculo` int(200) NOT NULL,
  `id_persona` int(200) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id`, `id_vehiculo`, `id_persona`, `fecha`) VALUES
(1, 2, 1, '2016-11-22 19:48:52'),
(2, 3, 3, '2016-11-24 14:52:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
`id` int(200) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `cedula`) VALUES
(1, 'prueba', 'apeprueba', 12345),
(2, 'jeickel', 'oropeza', 12345678),
(3, 'persona', 'apepersona', 12457);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
`id` int(200) NOT NULL,
  `placa` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `año` int(5) NOT NULL,
  `estatus` int(2) NOT NULL DEFAULT '1',
  `kilometraje` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `placa`, `marca`, `modelo`, `tipo`, `año`, `estatus`, `kilometraje`) VALUES
(1, 'asd123', 'ford', 'ka', 'sedan', 2007, 0, 0),
(2, 'sd', 'chrevolet', 'corsa', 'Sedan', 1998, 2, 0),
(3, 'tyu12', 'toyota', 'corolla', 'sedan', 2016, 0, 0),
(4, 'hjk789', 'mitsubishi', 'lancer', 'sedan', 2015, 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
