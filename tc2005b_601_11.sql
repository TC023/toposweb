-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2024 a las 04:24:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tc2005b_601_11`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reto_admins`
--

CREATE TABLE `reto_admins` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `contraseña` varchar(20) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reto_admins`
--

INSERT INTO `reto_admins` (`id_admin`, `nombre`, `correo`, `contraseña`, `telefono`) VALUES
(1, 'danperez', 'algo@hotmail.com', 'alkfjqioj234', '111111111'),
(2, 'yahelito', 'algo@hotmail.com', '1345gwds', '22222222'),
(3, 'rafa polinesio', 'algo@hotmail.com', 'admin', '55555555'),
(8, 'slobotsky', 'youtube@gmail.com', 'aves', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reto_eventos`
--

CREATE TABLE `reto_eventos` (
  `id_evento` int(11) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `header` varchar(100) DEFAULT NULL,
  `descrip` varchar(200) DEFAULT NULL,
  `name_responsable` varchar(50) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reto_eventos`
--

INSERT INTO `reto_eventos` (`id_evento`, `fecha_hora`, `header`, `descrip`, `name_responsable`, `imagen`) VALUES
(1, '2024-02-12 18:00:00', 'Test header', 'Esto es un ejemplo de descripción, viva Dan Perez y así', 'Oliart', 'checo.jpg'),
(10, '2024-05-23 22:15:00', 'hola popup', 'hola a todos lol test y ocuando hell oworld', 'miri', 'verstappen.jpg'),
(11, '2024-05-27 07:24:00', 'hola popup', 'AWARFERBQgyhq4a5ERT', 'yo merjo', 'verstappen.jpg'),
(12, '2024-05-21 02:39:00', 'hola yahel', 'descripción chida', 'miri', 'llael-removebg-preview.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reto_admins`
--
ALTER TABLE `reto_admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `reto_eventos`
--
ALTER TABLE `reto_eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reto_admins`
--
ALTER TABLE `reto_admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reto_eventos`
--
ALTER TABLE `reto_eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
