-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2021 a las 03:01:05
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_register_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre_completo`, `correo`, `telefono`) VALUES
(1, 'Mario Robles ', 'mario@gmail.com', 78729410),
(2, 'Mario Robles ', 'admin@noor.com.gt', 78723445),
(3, 'Cris Robles ', 'cris@gmail.com', 59472422),
(4, 'Cris Robles ', 'cirs', 5758966),
(5, 'karin vasquez', 'karin@gmail.com', 78725469),
(6, '', '', 0),
(7, '', '', 0),
(8, '', '', 0),
(9, '', '', 0),
(10, '', '', 0),
(11, '', '', 0),
(12, '', '', 0),
(13, '', '', 0),
(14, '', '', 0),
(15, '', '', 0),
(16, 'luisa ', 'luisafer.robles@gmail.com', 78729410),
(17, 'luisa ', 'luisafer.robles@gmail.com', 78729410);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desayunos`
--

CREATE TABLE `desayunos` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `desayunos`
--

INSERT INTO `desayunos` (`id`, `fecha`, `hora`, `cantidad`, `nombre`, `correo`, `comentarios`) VALUES
(9, '1970-01-01', '9:00 A.M.', 2, 'pruebs', 'prueba', 'hola'),
(10, '1970-01-01', '10:00 A.M.', 2, 'JACQUELINE', 'jkvasquezb@gmail.com', ''),
(11, '1970-01-01', '10:00 A.M.', 4, 'pruebs', 'mmmmm', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id` int(11) NOT NULL,
  `ingreso` date NOT NULL,
  `salida` date NOT NULL,
  `adultos` int(11) DEFAULT NULL,
  `ninos` int(11) DEFAULT NULL,
  `tipo_hab` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id`, `ingreso`, `salida`, `adultos`, `ninos`, `tipo_hab`, `cantidad`, `nombre`, `telefono`, `correo`, `comentarios`) VALUES
(0, '1970-01-01', '1970-01-01', 2, 0, 'doble', 1, 'JACQUELINE', 12345678, 'admin@noor.com.gt', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasenia`) VALUES
(5, 'Jacqueline Robles', 'admin@noor.com.gt', 'admin', 'admin'),
(6, '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `desayunos`
--
ALTER TABLE `desayunos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `desayunos`
--
ALTER TABLE `desayunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
