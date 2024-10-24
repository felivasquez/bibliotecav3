-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2024 a las 13:42:11
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
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID_categoria` int(10) UNSIGNED NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_categoria`, `nombre_categoria`) VALUES
(1, 'Historia'),
(2, 'Novela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `ID_historial` int(10) UNSIGNED NOT NULL,
  `ID_libro` int(10) UNSIGNED DEFAULT NULL,
  `descripcion_cambio` text DEFAULT NULL,
  `fecha_cambio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ID_libro` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `año_publicacion` int(11) DEFAULT NULL,
  `ID_categoria` int(10) UNSIGNED DEFAULT NULL,
  `imageLink` text NOT NULL,
  `pdf_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ID_libro`, `titulo`, `autor`, `ISBN`, `año_publicacion`, `ID_categoria`, `imageLink`, `pdf_link`) VALUES
(4, 'Martin Fierro', 'Jose Hernandez', ' 332311', 1873, 1, 'data:image/jpeg;base64,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', 'https://www.argentina.gob.ar/sites/default/files/hernandez_jose_-_el_gaucho_martin_fierro.pdf'),
(8, 'El principito', 'Antoine de Saint-Exupéry', ' 54323', 1943, 2, 'data:image/jpeg;base64,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', 'https://bcn.gob.ar/uploads/El-Principitocompleto.pdf'),
(9, 'Harry potter', 'JK Rolling', ' 663456', 2001, 2, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.sensacine.com%2Fpeliculas%2Fpelicula-29276%2F&psig=AOvVaw2O8ACGk9P5lh-KtP7DOo-3&ust=1729855411252000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNCZ2_PzpokDFQAAAAAdAAAAABAE', 'd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `ID_prestamo` int(10) UNSIGNED NOT NULL,
  `ID_usuario` int(10) UNSIGNED DEFAULT NULL,
  `ID_libro` int(10) UNSIGNED DEFAULT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_devolucion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contraseña` varchar(40) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`ID_historial`),
  ADD KEY `ID_libro` (`ID_libro`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ID_libro`),
  ADD KEY `ID_categoria` (`ID_categoria`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`ID_prestamo`),
  ADD KEY `ID_usuario` (`ID_usuario`),
  ADD KEY `ID_libro` (`ID_libro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `ID_historial` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `ID_libro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `ID_prestamo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`ID_libro`) REFERENCES `libros` (`ID_libro`) ON DELETE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`ID_categoria`) REFERENCES `categorias` (`ID_categoria`) ON DELETE SET NULL;

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`ID_libro`) REFERENCES `libros` (`ID_libro`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
