-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2023 a las 18:37:18
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
-- Base de datos: `laboratorio_3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido1` varchar(25) DEFAULT NULL,
  `apellido2` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `contraseña` varchar(8) DEFAULT NULL
) ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido1`, `apellido2`, `email`, `login`, `contraseña`) VALUES
(1, 'Sharon', 'Suarez', 'Chavez', 'sharonsuarezc@gmail.com', 'sharonrzt', '1234'),
(2, 'damian', 'dgfg', 'gfdg', 'fhfh@gmail.com', 'manuel98', '4563'),
(3, 'Alejandro', 'Maldonado', 'Torres', 'toresam@yahoo.com', 'aleja5', '4785'),
(4, 'kjg', 'ggfh', 'ghj', 'jsuarezm5@gmail.com', 'jrtjyu', '7896'),
(5, 'Maria', 'Fernandez', 'Gomez', 'mariagomezf@live.com', 'maria78', '1458'),
(6, 'Paloma', 'Diaz', 'Herrera', 'paloma.herrera@gamil.com', 'palomah89', '78965412'),
(7, 'Paz', 'Suarez', 'Reuziault', 'paz.rzt@gmail.com', 'pazrzt', '2410'),
(8, 'Juan', 'Gomez', 'Casas', 'jgomez@gmail.com', 'juan45', '47856'),
(9, 'Carmen', 'Flores', 'Amarilla', 'carmen@gmail.com', 'carmenflor', '78563'),
(10, 'Luis', 'monasterio', 'segundo', 'luiszzz@gmail.com', 'luis55', '89654'),
(11, 'Arancha', 'Fernandez', 'Diaz', 'aranchadin@gmail.com', 'aran67', '8524'),
(12, 'lisa', 'pais', 'garcia', 'lisapais@hotmail.com', 'lisapa75', '7634'),
(13, 'Nayla', 'garcia', 'azcurra', 'nayazcu@gmai.com', 'nay98', '785468');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
