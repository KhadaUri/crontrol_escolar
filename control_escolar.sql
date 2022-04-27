-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2022 a las 23:01:15
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_escolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id_cal` int(11) NOT NULL,
  `nombre_materia` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `calificacion` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id_cal`, `nombre_materia`, `nombre`, `calificacion`, `id_curso`) VALUES
(1, '0000-00-00', 'Ulises', 8, 2020);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `id_curso` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `id_materia` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `calificacion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `id_curso`, `id_materia`, `id_usuario`, `calificacion`) VALUES
(1, '2020A', 0, 0, 0),
(2, '2020B', 0, 0, 0),
(5, '2020C', 0, 0, 0),
(7, '2020LEL', 0, 0, 0),
(8, '2020LEL', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(10) NOT NULL,
  `id_curso` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_materia` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `id_curso`, `nombre_materia`) VALUES
(1, '2020A', 'Algoritmos'),
(2, '2020A', 'Programacion web'),
(3, '2020', '4234342344'),
(4, '2020B', 'Programacion lineal'),
(5, '2020B', '4423423423');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_curso` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apaterno` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `amaterno` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `boleta` int(11) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla de usuarios';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_curso`, `nombre`, `apaterno`, `amaterno`, `boleta`, `telefono`, `correo`, `usuario`, `password`, `tipo_usuario`) VALUES
(5, '2020B', 'Mitzy', 'Diaz', 'Valor', 2016602019, 551449221, 'michi@gmail.com', 'michi123', 'michi123', 3),
(6, '', 'admin', 'admin', 'admin', 2020202020, 551449221, 'admin@gmail.com', 'admin', 'admin', 1),
(7, '2020A', 'Ulises', 'Vega', 'Gonzalez', 2016601020, 551449255, 'ulises@gmail.com', 'uli123', 'uli123', 2),
(8, '$c', '$n', '$p', '$m', 0, 0, '$co', '$u', '$pw', 0),
(9, '$c', '$n', '$p', '$m', 0, 0, '$co', '$u', '$pw', 0),
(10, '2020C', 'Juan', 'Reformed', 'AM', 32423432, 34234234, 'djkas@outjkld.com', 'Juan', 'Juan', 2),
(11, '', 'Francisco', 'AP', 'AM', 2147483647, 4234234, 'djkas@outjkld.com', 'lel', 'lel', 3),
(13, '', '', '', '', 0, 0, '', '', '', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id_cal`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id_cal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
