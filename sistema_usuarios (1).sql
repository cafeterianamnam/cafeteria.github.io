-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2024 a las 21:35:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `contraseña`) VALUES
(1, 'fff', 'ddd@ggg.cxom', '$2y$10$/eqVi7RTxBmNbmOloYOvPekk9UdHkIESuI/gm9olOYFgiKRqRJ6.q'),
(2, 'asdasd', 'valentina@gmail.com', '$2y$10$bo5Rz/brcD2m9lyEXAmMpeJsInVMgEXv4pn3fnA1SpHXqGUqsj4Gy'),
(4, 'sara', 'sara@gmail.com', '$2y$10$6b81a.KMivMW4CqBkwx2Melu2Jcy7tP9xHLvxD1QibDmlU3eXdfpK'),
(5, 'gdgfd', 'pepito@gmail.com', '$2y$10$ClVIuDfGfx2lgs8MxmAQ7eDCT.v4JnncHoruFN/2.sGeNI5kKC10W'),
(6, 'cindy', 'cindy@example.com', '$2y$10$xknVyLWZHbzjvwcbLM.yDu3hvElBcrfun4/zP8iyFMrkF8BednQGa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_vend`
--

CREATE TABLE `usuarios_vend` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_vend`
--

INSERT INTO `usuarios_vend` (`id`, `Nombre`, `Apellido`, `Correo`, `Contrasena`) VALUES
(1, 'pepito1', 'sfdg1', 'asg1@gmail.com', '$2y$10$fx08J0AdAzlpicloKtoKnuPHDvDgt5OSA6PbGN2I1jeel4sGGh0Bi'),
(2, 'juan', 'perez', 'juan@example.com', '$2y$10$4NnE3vnQjFFcOyTJT1bgUuTz1/zf5CI7oXrAwl.sAP60bEMKF7Efq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `usuarios_vend`
--
ALTER TABLE `usuarios_vend`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios_vend`
--
ALTER TABLE `usuarios_vend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
