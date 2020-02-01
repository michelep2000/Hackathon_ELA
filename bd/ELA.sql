-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-02-2020 a las 12:36:19
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

<<<<<<< HEAD
CREATE DATABASE IF NOT EXISTS `ELA` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `ELA`;

=======
>>>>>>> 484aa9e00ac643601baef4c447f304f5142f70ca
--
-- Base de datos: `ELA`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginUsuarios`
--

CREATE TABLE `loginUsuarios` (
  `id_usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `loginUsuarios`
--

INSERT INTO `loginUsuarios` (`id_usuario`, `contrasena`, `nombre`, `apellido`, `rol`) VALUES
('PruebaA', 'qwerty', 'UsuarioPruebaName', 'UsuarioPruebaLast', 'adm'),
('PruebaU', 'qwerty', 'PruebaUsuarioName2', 'PruebaUsuarioLast2', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `necesidades`
--

CREATE TABLE `necesidades` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `necesidades`
--

INSERT INTO `necesidades` (`id`, `descripcion`) VALUES
(1, 'Seguir programando y desarrollándose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sintomas`
--

CREATE TABLE `sintomas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sintomas`
--

INSERT INTO `sintomas` (`id`, `descripcion`) VALUES
(1, 'Movilidad en mano derecha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `frase_mot` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `estado_civil` enum('Solter@','Casad@','Viud@','No especificado') NOT NULL,
  `profesion` varchar(100) NOT NULL,
  `biografia` text NOT NULL,
  `rol` enum('Paciente','Cuidador@','Familiar','Medico') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `frase_mot`, `edad`, `ubicacion`, `estado_civil`, `profesion`, `biografia`, `rol`) VALUES
(1, 'Jose', 'Martin Gomez', 'Esta enfermedad no define quien soy yo', 53, 'Madrid', 'Casad@', 'Ex-informatico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioNecesidad`
--

CREATE TABLE `usuarioNecesidad` (
  `id_usuario` int(11) NOT NULL,
  `id_necesidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarioNecesidad`
--

INSERT INTO `usuarioNecesidad` (`id_usuario`, `id_necesidad`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioSintomas`
--

CREATE TABLE `usuarioSintomas` (
  `id_usuario` int(11) NOT NULL,
  `id_sintoma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `necesidades`
--
ALTER TABLE `necesidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sintomas`
--
ALTER TABLE `sintomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarioNecesidad`
--
ALTER TABLE `usuarioNecesidad`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_necesidad` (`id_necesidad`);

--
-- Indices de la tabla `usuarioSintomas`
--
ALTER TABLE `usuarioSintomas`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_sintoma` (`id_sintoma`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `necesidades`
--
ALTER TABLE `necesidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sintomas`
--
ALTER TABLE `sintomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarioNecesidad`
--
ALTER TABLE `usuarioNecesidad`
  ADD CONSTRAINT `usuarionecesidad_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuarionecesidad_ibfk_2` FOREIGN KEY (`id_necesidad`) REFERENCES `necesidades` (`id`);

--
-- Filtros para la tabla `usuarioSintomas`
--
ALTER TABLE `usuarioSintomas`
  ADD CONSTRAINT `usuariosintomas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuariosintomas_ibfk_2` FOREIGN KEY (`id_sintoma`) REFERENCES `sintomas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
