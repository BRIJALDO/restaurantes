-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2020 a las 04:00:32
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `_sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE `restaurantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `Nombre`, `Descripcion`, `Direccion`, `Ciudad`, `Url`, `foto`, `created_at`, `updated_at`) VALUES
(16, 'Acacias', 'Platos tipicos', 'Av 45c # 35-12', 'Bogota', 'www.delicias.com', 'uploads/gcdWrePSBxeRrzAPZzqKUG8vTBuzGtaUeSuON5VB.jpeg', NULL, '2020-07-05 04:34:28'),
(17, 'Delicias', 'Postres', 'cav 35 # 10 - 39', 'Medellin', 'www.delicias.com', 'uploads/tGcd7YtfW6UApMEIdevM7FLmI7ZuLDEsXLgHcgMN.jpeg', NULL, '2020-07-05 04:14:17'),
(18, 'El mexicanmo', 'tacos y burritos', 'avenida 345', 'Jalisco', 'www.elmexicano.mx', 'uploads/SsMTuLHJlXR1dj5cjOqmB2oc59HQA3SgFI0rhy9i.jpeg', NULL, NULL),
(21, 'Gourmet', 'pizza', 'avenida siempre viva 123', 'Bogota', 'www.gourtnet.com.co', 'uploads/xRtJCRBRKcxioiFEsDjAvmmTw5iEHcZffbH7Vtd6.png', NULL, NULL),
(22, 'El baron rojo', 'Domicilio', 'Cra 2 # 4 a 56', 'Bogota', 'www.elbaronrojo.com', '', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
