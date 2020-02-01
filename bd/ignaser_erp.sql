-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2020 a las 19:00:08
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
DROP DATABASE IF EXISTS `ignaser_erp`;
 CREATE DATABASE IF NOT EXISTS `ignaser_erp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
  USE `ignaser_erp`;
--
-- Base de datos: `ignaser_erp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`id`, `name`, `surname`, `address`, `image`) VALUES
(1, 'Michele', 'Pardo', 'calle de la patata, 21', './img/persona1.png'),
(2, 'Beatriz', 'Lopez', 'calle de la sandia, 33', './img/persona2.png'),
(3, 'Adrian ', 'Cactus', 'calle de los cactus, 69', './img/persona3.png'),
(4, 'Jaime', 'Casado', 'calle del cerebro, 51', './img/persona4.png');

--
-- Disparadores `employee`
--
DELIMITER $$
CREATE TRIGGER `checkInsert` BEFORE INSERT ON `employee` FOR EACH ROW BEGIN
	IF EXISTS (SELECT employee.name, employee.surname FROM employee WHERE employee.name = new.name AND employee.surname = new.surname)THEN
		SIGNAL SQLSTATE '45000'
    	SET MESSAGE_TEXT = 'Fatal error 3...2...1...pum';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fee`
--

CREATE TABLE `fee` (
  `id` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `expectedDate` date NOT NULL,
  `amount` double NOT NULL,
  `rest` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `idFee` int(11) NOT NULL,
  `total` double NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `payment` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `contrasena`, `nombre`, `apellido`) VALUES
('Prueba', 'qwerty', 'namePrueba', 'lastPrueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `idEmployee` int(11) NOT NULL,
  `idWorkInfo` int(11) NOT NULL,
  `hoursType` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finished` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `work`
--

INSERT INTO `work` (`id`, `idEmployee`, `idWorkInfo`, `hoursType`, `hours`, `date`, `description`, `finished`) VALUES
(1, 3, 2, 'Extras', 2, '2020-01-31', 'Desataco vater y arreglo una tubería', 0),
(2, 4, 3, 'Normales', 7, '2020-01-22', 'Reforma de una cocina', 1),
(3, 1, 4, 'Normales', 3, '2020-01-16', 'Arreglo de pared y pintura', 1),
(4, 2, 1, 'Extras', 16, '2020-02-08', 'Tiramos un tabique y recogida de escombros', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `work_info`
--

CREATE TABLE `work_info` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `work_info`
--

INSERT INTO `work_info` (`id`, `name`, `description`, `address`, `imagen`) VALUES
(1, 'Accenture', 'Consultora', 'Calle Gral. Álvarez de Castro, 26, 28010 Madrid', './img/accenture.png'),
(2, 'Bankia', 'Banco internacional', 'Calle Illescas, 18, 28024 Madrid', './img/bankia.png'),
(3, 'La Fermu', 'Ferreteria', 'Calle Illescas, 18, 28024 Madrid', './img/Lafermu.png'),
(4, 'Apple', 'Tienda de dispositivos electrónicos', 'Puerta del Sol, 1', './img/apple.png'),
(5, 'Emprechaurio', 'emprechucha', 'callejuela', './img/company.png');

--
-- Disparadores `work_info`
--
DELIMITER $$
CREATE TRIGGER `checkInsertWi` BEFORE INSERT ON `work_info` FOR EACH ROW BEGIN
	IF EXISTS (SELECT work_info.name, work_info.description FROM work_info WHERE work_info.name = new.name AND work_info.description = new.description)THEN
		SIGNAL SQLSTATE '45000'
    	SET MESSAGE_TEXT = 'Fatal error 3...2...1...pum';
    END IF;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFee` (`idFee`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmployee` (`idEmployee`),
  ADD KEY `idWorkInfo` (`idWorkInfo`);

--
-- Indices de la tabla `work_info`
--
ALTER TABLE `work_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `work_info`
--
ALTER TABLE `work_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`idFee`) REFERENCES `fee` (`id`);

--
-- Filtros para la tabla `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`idEmployee`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `work_ibfk_2` FOREIGN KEY (`idWorkInfo`) REFERENCES `work_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
