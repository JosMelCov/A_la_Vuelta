-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-05-2022 a las 22:41:43
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `a_la_vuelta`
--
CREATE DATABASE IF NOT EXISTS `a_la_vuelta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `a_la_vuelta`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `passw` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_completo`, `email`, `usuario`, `passw`) VALUES
(3, 'Dany Melgoza', 'dany13mc@hotmail.es', 'DanyMC', '12345678'),
(2, 'Jose Francisco', 'joser_2011@hotmail.com', 'FrankMc', 'jfmc2155'),
(6, 'Annie ', 'annie@gmail.com', 'Annie52', 'Annie546'),
(5, 'paola', 'uywgd@gmail.com', 'uqwfgs', 'trwyuug7'),
(9, 'Dulce ', '8973@gmail.com', 'ygusa', 'b6a7fbaad3f2fe1ae73dffac1185b8da30efd615'),
(10, 'Anahi', 'anahi@gmail.com', 'Anahi12', '713892b312123da3d10a44ba1bf23fb5894b43ab');
--
-- Base de datos: `contacto_cliente`
--
CREATE DATABASE IF NOT EXISTS `contacto_cliente` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `contacto_cliente`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `numero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `colonia` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `calle` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `numeroint` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `servicio` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_usuario`, `nombre_completo`, `email`, `numero`, `ciudad`, `colonia`, `calle`, `numeroint`, `servicio`) VALUES
(13, 'jose francisco', 'joser_2011@hotmail.com', '3318701186', 'Guadalajara', 'El rodeo', 'lazaro cardenas', '4A', 'Internet');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
