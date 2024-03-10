-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2024 a las 12:57:01
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
-- Base de datos: `monopoly`
--
CREATE DATABASE IF NOT EXISTS `monopoly` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `monopoly`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartas`
--

DROP TABLE IF EXISTS `cartas`;
CREATE TABLE `cartas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipoCarta` varchar(255) NOT NULL,
  `definicion` varchar(255) NOT NULL,
  `casilla_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cartas`
--

INSERT INTO `cartas` (`id`, `tipoCarta`, `definicion`, `casilla_id`, `created_at`, `updated_at`) VALUES
(1, 'Suerte', 'Colócate en la casilla de salida, cobra 200', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(2, 'Suerte', 'Ve a la cárcel. Ve directamente sin pasar por la casilla de salida y sin cobrar los 200', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(3, 'Suerte', 'Avanza hasta el servicio público más cercano. Si no tiene dueño, puedes comprárselo a la Banca. Si tiene dueño, lanza los dados y paga al dueño un total de diez veces la cantidad mostrada', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(4, 'Suerte', 'Avanza hasta la estación más cercana. Si no tiene dueño, puedes comprárselo a la Banca. Si tiene dueño, lanza los dados y paga al dueño un total de diez veces la cantidad mostrada', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(5, 'Suerte', 'Avanza hasta la Plaza San Carlos. Si pasas por la casilla de salida, cobra 200', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(6, 'Suerte', 'Retrocede tres casillas', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(7, 'Suerte', 'Has sido elegido presidente de la junta directiva paga a cada jugador 50', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(8, 'Suerte', 'Rescate por el seguro de tus edificios. Cobra 150', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(9, 'Suerte', 'Multa por exceso de velocidad de 15', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(10, 'Suerte', 'Avanza hasta Avedina Indiana', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(11, 'Suerte', 'Haz reparaciones generales en todas tus propiedades paga por cada casa 25, paga por cada hotel 100', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(12, 'Suerte', 'La banca te paga un dividendo de 50', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(13, 'Suerte', 'Quedas libre de la cárcel. Puedes vender esta carta o conservarla hasta que la necesites', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(14, 'Suerte', 'Viaja hasta la estación de Ferrocarril Short Line', 8, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(15, 'Caja de Comunidad', 'Es tú cumpleaños. Recibe 10 de casa jugador', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(16, 'Caja de Comunidad', 'Beneficios de tu seguro de vida. Cobra 100', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(17, 'Caja de Comunidad', 'Recibe 25 como honorarios de la asesoría', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(18, 'Caja de Comunidad', 'Factura del medico paga 50', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(19, 'Caja de Comunidad', 'Has ganado el segundo premio en un concurso de belleza. Cobra 10', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(20, 'Caja de Comunidad', 'Ve a la cárcel. Ve directamente sin pasar por la casilla de salida y sin cobrar los 200', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(21, 'Caja de Comunidad', 'Paga por gastos escolares 50', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(22, 'Caja de Comunidad', 'Colócate en la casilla de salida, cobra 200', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(23, 'Caja de Comunidad', 'Debes realizar reparaciones en la calle: paga 40 por casa, paga 115 por hotel', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(24, 'Caja de Comunidad', 'El fondo de vacaciones, te reporta beneficios. Recibe 100', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(25, 'Caja de Comunidad', 'Paga las facturas del hospital de 100', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(26, 'Caja de Comunidad', 'Heredas 100', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(27, 'Caja de Comunidad', 'Error de la banca a tu favor, recibe 200', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(28, 'Caja de Comunidad', 'Hacienda te devuelve, cobra 20', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(29, 'Caja de Comunidad', 'Quedas libre de la cárcel. Puedes vender esta carta o conversarla hasta que la necesites', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(30, 'Propiedad', 'Plaza Mediterráneo, 60', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(31, 'Propiedad', 'Avenida Baltaica, 60', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(32, 'Propiedad', 'Avenida Oriental, 100', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(33, 'Propiedad', 'Avenida Vermont, 100', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(34, 'Propiedad', 'Avenida Connecticut, 120', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(35, 'Propiedad', 'Plaza San Carlos, 140', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(36, 'Propiedad', 'Avenida Estatal, 140', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(37, 'Propiedad', 'Avenida Virginia, 160', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(38, 'Propiedad', 'Plaza San James, 180', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(39, 'Propiedad', 'Avenida Tennessee, 180', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(40, 'Propiedad', 'Avenida Nueva York, 200', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(41, 'Propiedad', 'Avenida Kentucky, 220', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(42, 'Propiedad', 'Avenida Indiana, 220', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(43, 'Propiedad', 'Avenida Illinois, 240', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(44, 'Propiedad', 'Avenida Atlantico, 260', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(45, 'Propiedad', 'Avenida Ventor, 260', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(46, 'Propiedad', 'Jardines Marvin, 280', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(47, 'Propiedad', 'Avenida Pacífico, 300', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(48, 'Propiedad', 'Avenida Carolina del Norte, 300', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(49, 'Propiedad', 'Avenida Pensilvania, 320', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(50, 'Propiedad', 'Plaza Park, 350', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(51, 'Propiedad', 'Paseo de la fama, 400', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casillas`
--

DROP TABLE IF EXISTS `casillas`;
CREATE TABLE `casillas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipoCasilla` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `uso` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `casillas`
--

INSERT INTO `casillas` (`id`, `nombre`, `tipoCasilla`, `color`, `precio`, `uso`, `created_at`, `updated_at`) VALUES
(1, 'Casilla de Salida', 'Salida', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(2, 'Plaza Mediterráneo', 'Propiedad', 'Marrón', 60, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(3, 'Caja de Comunidad 1', 'Caja de Comunidad', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(4, 'Avenida Baltica', 'Propiedad', 'Marrón', 60, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(5, 'Impuesto sobre el Capital', 'Impuesto', 'Ninguno', 200, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(6, 'Estación de ferrocarril Reading', 'Ferrocarril', 'Ninguno', 200, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(7, 'Avenida Oriental', 'Propiedad', 'Celeste', 100, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(8, 'Suerte 1', 'Suerte', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(9, 'Avenida Vermont', 'Propiedad', 'Celeste', 100, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(10, 'Avenida Connecticut', 'Propiedad', 'Celeste', 120, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(11, 'Cárcel / Visitas', 'Cárcel', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(12, 'Plaza San Carlos', 'Propiedad', 'Rosa', 140, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(13, 'Servicio Eléctrico', 'Servicio público', 'Ninguno', 150, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(14, 'Avenida Estatal', 'Propiedad', 'Rosa', 140, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(15, 'Avenida Virginia', 'Propiedad', 'Rosa', 160, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(16, 'Estación de ferrocarril Pennsylvania', 'Ferrocarril', 'Ninguno', 200, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(17, 'Plaza San James', 'Propiedad', 'Naranja', 180, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(18, 'Caja de Comunidad 2', 'Caja de Comunidad', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(19, 'Avenida Tennessee', 'Propiedad', 'Naranja', 180, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(20, 'Avenida Nueva York', 'Propiedad', 'Naranja', 200, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(21, 'Estacionamiento gratuito', 'Estacionamiento', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(22, 'Avenida Kentucky', 'Propiedad', 'Rojo', 220, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(23, 'Suerte 2', 'Suerte', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(24, 'Avenida Indiana', 'Propiedad', 'Rojo', 220, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(25, 'Avenida Illinois', 'Propiedad', 'Rojo', 240, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(26, 'Estación de ferrocarril B. & O.', 'Ferrocarril', 'Ninguno', 200, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(27, 'Avenida Atlántico', 'Propiedad', 'Amarillo', 260, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(28, 'Avenida Ventnor', 'Propiedad', 'Amarillo', 260, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(29, 'Servicio de Aguas', 'Servicio público', 'Ninguno', 150, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(30, 'Jardines Marvin', 'Propiedad', 'Amarillo', 280, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(31, 'Ir a la cárcel', 'Ir a la cárcel', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(32, 'Avenida Pacífico', 'Propiedad', 'Verde', 300, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(33, 'Avenida Carolina del Norte', 'Propiedad', 'Verde', 300, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(34, 'Caja de Comunidad 3', 'Caja de Comunidad', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(35, 'Avenida Pensilvania', 'Propiedad', 'Verde', 320, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(36, 'Estación de ferrocarril Short Line', 'Ferrocarril', 'Ninguno', 200, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(37, 'Suerte 3', 'Suerte', 'Ninguno', 0, '0', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(38, 'Plaza Park', 'Propiedad', 'Azul', 350, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(39, 'Impuesto de Lujo', 'Impuesto', 'Ninguno', 100, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(40, 'Paseo de la fama', 'Propiedad', 'Azul', 400, '1', '2024-03-10 09:09:36', '2024-03-10 09:09:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciones`
--

DROP TABLE IF EXISTS `clasificaciones`;
CREATE TABLE `clasificaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numPosicion` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clasificaciones`
--

INSERT INTO `clasificaciones` (`id`, `numPosicion`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 23040, '2023-04-23 17:31:30', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(2, 61203, '2023-10-08 01:53:57', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(3, 36700, '2023-11-17 14:40:32', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(4, 47050, '2023-04-11 04:31:34', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(5, 25167, '2023-05-11 21:50:18', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(6, 79533, '2024-01-01 09:51:54', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(7, 51511, '2023-04-15 04:18:00', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(8, 42903, '2023-11-16 07:17:15', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(9, 46075, '2023-11-26 12:09:08', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(10, 57148, '2024-02-21 07:25:30', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(11, 45835, '2023-05-02 22:37:13', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(12, 17051, '2023-08-21 09:31:42', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(13, 77667, '2023-03-12 13:57:41', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(14, 34018, '2023-05-18 14:42:02', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(15, 15502, '2023-03-14 23:30:17', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(16, 15017, '2023-03-12 12:36:40', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(17, 10176, '2023-09-13 23:44:43', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(18, 48326, '2024-02-14 21:25:23', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(19, 70985, '2023-12-10 10:14:27', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(20, 69438, '2023-05-09 18:42:37', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(21, 65240, '2024-02-13 19:42:44', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(22, 7034, '2023-04-15 00:16:58', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(23, 69222, '2023-08-15 22:41:23', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(24, 14881, '2023-04-08 20:12:57', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(25, 98580, '2023-08-03 10:15:45', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(26, 53281, '2023-11-14 06:23:15', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(27, 83099, '2024-01-24 01:08:35', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(28, 53611, '2023-08-02 03:58:51', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(29, 62375, '2023-04-02 18:16:03', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(30, 31049, '2023-04-10 19:40:58', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(31, 7777, '2023-06-13 17:25:12', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(32, 25379, '2023-10-05 14:06:00', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(33, 44111, '2023-11-06 17:49:50', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(34, 47759, '2023-05-03 15:17:10', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(35, 67153, '2023-11-13 19:36:58', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(36, 86064, '2024-03-08 04:42:20', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(37, 43521, '2023-11-16 22:50:30', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(38, 41499, '2023-05-29 08:22:16', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(39, 25313, '2024-01-10 07:43:12', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(40, 56626, '2024-02-27 22:12:50', '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(41, 6931, '2024-03-10 10:31:32', '2024-03-10 09:31:32', '2024-03-10 09:31:32'),
(42, 8207, '2024-03-10 11:33:03', '2024-03-10 10:33:03', '2024-03-10 10:33:03'),
(43, 9078, '2024-03-10 11:43:15', '2024-03-10 10:43:15', '2024-03-10 10:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2024_03_01_125531_create_partidas_table', 1),
(17, '2024_03_01_125550_create_clasificaciones_table', 1),
(18, '2024_03_01_125612_create_participantes_table', 1),
(19, '2024_03_01_125633_create_casillas_table', 1),
(20, '2024_03_01_125650_create_cartas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

DROP TABLE IF EXISTS `participantes`;
CREATE TABLE `participantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomUsuario` varchar(255) NOT NULL,
  `clasificacion_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id`, `nomUsuario`, `clasificacion_id`, `created_at`, `updated_at`) VALUES
(1, 'doyle.aracely', 21, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(2, 'sipes.kirsten', 22, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(3, 'hane.luis', 23, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(4, 'sbartoletti', 24, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(5, 'jgoldner', 25, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(6, 'gcrist', 26, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(7, 'giuseppe95', 27, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(8, 'henri48', 28, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(9, 'vgleason', 29, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(10, 'mmoore', 30, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(11, 'uleannon', 31, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(12, 'coby.krajcik', 32, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(13, 'qconnelly', 33, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(14, 'ludie54', 34, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(15, 'harmony11', 35, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(16, 'clint.parker', 36, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(17, 'rprice', 37, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(18, 'west.sister', 38, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(19, 'lisa43', 39, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(20, 'schimmel.allan', 40, '2024-03-10 09:09:36', '2024-03-10 09:09:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas`
--

DROP TABLE IF EXISTS `partidas`;
CREATE TABLE `partidas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `numMaxParticipantes` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `partidas`
--

INSERT INTO `partidas` (`id`, `nombre`, `fecha`, `numMaxParticipantes`, `created_at`, `updated_at`) VALUES
(1, 'dolorem', '2023-10-28 17:29:13', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(2, 'magni', '2023-11-26 00:46:18', 2, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(3, 'qui', '2023-03-29 17:01:48', 6, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(4, 'esse', '2023-04-01 23:50:49', 5, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(5, 'autem', '2023-11-09 16:59:01', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(6, 'et', '2023-05-04 06:14:30', 4, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(7, 'assumenda', '2023-11-26 08:38:20', 4, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(8, 'et', '2023-04-28 07:12:50', 5, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(9, 'sit', '2023-04-23 23:11:36', 5, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(10, 'necessitatibus', '2023-09-07 17:47:10', 3, '2024-03-10 09:09:36', '2024-03-10 09:09:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(15, 'App\\Models\\User', 6, 'auth_token', 'edcf1dc03f8be45587a97835f891364edf3abf4dae3786c3dc76c1451477b043', '[\"*\"]', '2024-03-10 10:27:45', NULL, '2024-03-10 10:25:55', '2024-03-10 10:27:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rol` enum('admin','member') NOT NULL DEFAULT 'member',
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `rol`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `age`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Julia', 'admin', '$2y$12$lQMTjoJoH2cmoFrgzC/28OVE7H9KY39JivyayDB6tsXDxCaJ/kRCu', NULL, NULL, NULL, 26, 'julia@gmail.com', NULL, '2024-03-10 09:09:36', '2024-03-10 09:09:36'),
(2, 'Angel', 'admin', '$2y$12$X9tkuNdRGcnLNqx6PNXGluhbXMvUc54p03LU21/gM3NvTwGYgkc5K', NULL, NULL, NULL, 22, 'angel@gmail.com', NULL, '2024-03-10 09:09:37', '2024-03-10 09:09:37'),
(3, 'Marc', 'admin', '$2y$12$ZC3F19r6JvEfscyaYCu9uOOKz5ocWXJ5MfUXxElSKynLCoyrmF7my', NULL, NULL, NULL, 20, 'marc@gmail.com', NULL, '2024-03-10 09:09:37', '2024-03-10 09:09:37'),
(4, 'Alejandra', 'admin', '$2y$12$XsG1aB3VWDk8ReBecn6rCeAtkeH7MypWBvUCvrLmkNLHtoPpRmTPe', NULL, NULL, NULL, 19, 'alejandra@gmail.com', NULL, '2024-03-10 09:09:37', '2024-03-10 09:09:37'),
(5, 'dani', 'member', '$2y$12$R6CXMZi49QRYxoVdz5vKweQOJpK0rlif7cU0Zlj/h9VaOq6RzY8iG', NULL, NULL, NULL, 18, 'dani@gmail.com', NULL, '2024-03-10 09:33:41', '2024-03-10 09:33:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cartas_casilla_id_foreign` (`casilla_id`);

--
-- Indices de la tabla `casillas`
--
ALTER TABLE `casillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participantes_clasificacion_id_foreign` (`clasificacion_id`);

--
-- Indices de la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `casillas`
--
ALTER TABLE `casillas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `partidas`
--
ALTER TABLE `partidas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD CONSTRAINT `cartas_casilla_id_foreign` FOREIGN KEY (`casilla_id`) REFERENCES `casillas` (`id`);

--
-- Filtros para la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_clasificacion_id_foreign` FOREIGN KEY (`clasificacion_id`) REFERENCES `clasificaciones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
