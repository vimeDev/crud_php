-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2018 a las 20:45:53
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_colores`
--

CREATE TABLE `t_colores` (
  `id_colores` int(11) NOT NULL,
  `color_name` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_colores`
--

INSERT INTO `t_colores` (`id_colores`, `color_name`, `description`) VALUES
(1, 'primary', 'color azul'),
(3, 'danger', 'Este es un color rojo, alerta'),
(4, 'info', 'Azul cielo'),
(5, 'warning', 'Color amarillo'),
(6, 'dark ', 'Este es un color negro'),
(7, 'danger', 'Alert para advertencias...');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_colores`
--
ALTER TABLE `t_colores`
  ADD PRIMARY KEY (`id_colores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_colores`
--
ALTER TABLE `t_colores`
  MODIFY `id_colores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
