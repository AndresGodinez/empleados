-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2016 a las 15:39:36
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cementeries`
--

CREATE TABLE `cementeries` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cementeries`
--

INSERT INTO `cementeries` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Municipal', '2016-01-30 11:03:15', '2016-01-30 11:03:26'),
(2, 'Jardín', '2016-01-30 11:03:20', '2016-01-30 11:03:23'),
(3, 'Tianguis Guadalupe', '2016-05-11 18:45:13', '2016-05-11 18:45:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `addres` varchar(200) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_dir` varchar(255) DEFAULT NULL,
  `cementery_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `name`, `addres`, `telephone`, `foto`, `foto_dir`, `cementery_id`, `position_id`, `created`, `modified`) VALUES
(1, 'migel cancino morales otro', '16 poniente entre  8a y 10a Sur (al lado de la perla)', '9671116645', 'DSC_0006.JPG', '1', 2, 1, '2016-02-03 16:48:04', '2016-02-16 06:59:51'),
(2, 'Ramiro Ramiréz', 'Dirección de Ramirio Ramirez', '9623127726', 'starwars.jpg', '2', 2, 2, '2016-02-05 03:41:05', '2016-02-16 15:51:55'),
(3, 'Rosita', 'dirección de rosita', '98162311', 'Mike_Tyson.jpg', '3', 2, 3, '2016-02-05 03:42:19', '2016-02-05 03:42:19'),
(4, 'Rosalio Vergara', 'Direccion de Rosalio', '3626362', 'ramiro-calle-yoga-300x225.jpg', '4', 1, 1, '2016-02-05 03:56:59', '2016-02-05 03:56:59'),
(5, 'El Rosita 2', 'Dirección de Rosita 2', '912812781', '_uploads_original_11124_111240706_4798935_saurons.jpg', '5', 2, 2, '2016-02-05 18:41:50', '2016-02-05 18:41:50'),
(6, 'Angel Flores Rosales', 'por soriana', '9826172', '12711191_958899804164289_1461182203910828823_o.jpg', '6', 1, 1, '2016-02-15 21:23:29', '2016-02-15 21:23:29'),
(7, 'Osmar Godinez', 'Dirección de Osmar', '782652', 'DSC_0017.JPG', '7', 1, 1, '2016-02-16 04:12:05', '2016-02-16 04:12:05'),
(8, 'David Anguiano', 'Dirección de Anguiano', '9876152516', 'DSC_0039.JPG', '8', 1, 4, '2016-02-23 01:42:37', '2016-02-23 01:42:37'),
(9, 'Raúl Arrazate gordillo ', '34 vhje', '56666', 'image.jpg', '9', 2, 2, '2016-03-17 23:41:40', '2016-03-17 23:41:40'),
(10, 'Andres Alberto Godinez Cabrera', 'bj', '9621475147', '27375_game_of_thrones.jpg', '10', 3, 1, '2016-05-11 18:45:56', '2016-05-11 18:45:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `positions`
--

INSERT INTO `positions` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-01-30 16:35:02', '2016-02-05 18:59:00'),
(2, 'Auxiliar', '2016-01-30 16:35:08', '2016-02-05 18:59:17'),
(3, 'Cuadrilla', '2016-01-14 16:35:16', '2016-01-18 16:35:20'),
(4, 'Limpia', '2016-01-03 16:43:36', '2016-01-18 16:43:39'),
(6, 'Herrero', '2016-02-05 18:59:51', '2016-02-05 18:59:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cementeries`
--
ALTER TABLE `cementeries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cementeries`
--
ALTER TABLE `cementeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
