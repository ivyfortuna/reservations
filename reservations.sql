-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2018 a las 14:43:04
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservations`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `destinations`
--

INSERT INTO `destinations` (`id`, `name`) VALUES
(1, 'Ljubljana'),
(3, 'Kranj'),
(4, 'Stenvid'),
(5, 'Otoce');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `id_destination` int(11) NOT NULL,
  `id_pickup_destination` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `date`, `time`, `reason`, `id_destination`, `id_pickup_destination`, `id_user`) VALUES
(33, '2018-08-31', '00:00:00', 'asdasdas', 3, 4, 1),
(34, '2018-08-31', '08:00:00', 'asdasdas', 5, 5, 1),
(35, '2018-09-06', '00:00:00', 'asdasdasd', 5, 5, 1),
(36, '0000-00-00', '00:00:00', '', 5, 5, 1),
(37, '0000-00-00', '00:00:00', '', 5, 5, 1),
(38, '0000-00-00', '00:00:00', '', 5, 5, 1),
(39, '0000-00-00', '00:00:00', '', 5, 5, 1),
(40, '0000-00-00', '00:00:00', '', 5, 5, 1),
(41, '0000-00-00', '00:00:00', '', 5, 5, 1),
(42, '0000-00-00', '00:00:00', '', 5, 5, 1),
(43, '0000-00-00', '00:00:00', '', 5, 5, 1),
(44, '0000-00-00', '00:00:00', '', 5, 5, 1),
(45, '0000-00-00', '00:00:00', '', 3, 5, 1),
(46, '0000-00-00', '00:00:00', '', 5, 5, 1),
(47, '0000-00-00', '00:00:00', '', 5, 5, 1),
(48, '0000-00-00', '00:00:00', '', 5, 5, 1),
(49, '0000-00-00', '00:00:00', '', 3, 5, 1),
(50, '0000-00-00', '00:00:00', '', 5, 5, 1),
(51, '0000-00-00', '00:00:00', '', 5, 5, 1),
(52, '0000-00-00', '00:00:00', '', 5, 5, 1),
(53, '0000-00-00', '00:00:00', '', 5, 5, 1),
(54, '0000-00-00', '00:00:00', '', 5, 5, 1),
(55, '0000-00-00', '00:00:00', '', 5, 5, 1),
(56, '0000-00-00', '00:00:00', '', 5, 5, 1),
(57, '0000-00-00', '00:00:00', '', 5, 5, 1),
(58, '0000-00-00', '00:00:00', '', 5, 5, 1),
(59, '0000-00-00', '00:00:00', '', 5, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(72) NOT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Alja', 'alja@iskra.com', '$2y$10$BuRLU0/cEnFgaARCPJtsOOuifyIf5yczbED3plHih0maanW5W0h5S', 1),
(2, 'Pablo', 'pablo@iskra.com', '$2y$10$UZukbK5a.CgEt62bEk.Q8equ4/PKYLijNgHTMqNud/PKXpVxgKNBW', 1),
(3, 'Nikola', 'nikola@iskra.eu', '$2y$10$pklA63Yl7cIqvjnQF97K3ue/JSjZ4M46T6C8WV9jOQkn1x.CuPAbu', 0),
(12, 'Adrian', 'adrian@iskra.com', '$2y$10$0evtMoFz5wmqqPgaxqAcEu/HypZ76xwslwbRyA43fb4/VE8jGL4.y', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
