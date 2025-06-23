-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2025 a las 08:27:34
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
-- Base de datos: `hefesto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `familia` varchar(255) NOT NULL,
  `edificio` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `familia`, `edificio`, `ubicacion`) VALUES
(1, 'Rooftop', 'San Justo', 'UTIA'),
(2, 'Rooftop', 'San Justo', 'UTIP'),
(3, 'Rooftop', 'San Justo', 'UTMO'),
(4, 'Rooftop', 'San Justo', 'NEONATOLOGIA'),
(5, 'Rooftop', 'San Justo', 'HEMODINAMICA'),
(6, 'Rooftop', 'San Justo', 'UCO'),
(7, 'Rooftop', 'San Justo', 'PASILLO QUIROFANO'),
(8, 'Rooftop', 'San Justo', 'QUIROFANO 1 y 2'),
(9, 'Rooftop', 'San Justo', 'QUIROFANO 3'),
(10, 'Rooftop', 'San Justo', 'Quirofano 1 primer piso'),
(11, 'Rooftop', 'San Justo', 'Cerini'),
(12, 'Rooftop', 'San Justo', 'Hemoterapia'),
(13, 'Rooftop', 'San Justo', 'Farmacia Oncologica'),
(14, 'Rooftop', 'San Justo', 'Pasillo cerini-chioccarelli'),
(15, 'Split', 'San Justo', 'Esterilizacion lavado'),
(16, 'Split', 'San Justo', 'Esterilizacion mesa de preparado'),
(17, 'Split', 'San Justo', 'Esterilizacion pasillo 1'),
(18, 'Split', 'San Justo', 'Esterilizacion pasillo 2'),
(19, 'Split', 'San Justo', 'Esterilizacion plasma 1'),
(20, 'Split', 'San Justo', 'Esterilizacion plasma 2'),
(21, 'Split', 'San Justo', 'Esterilizacion oxido etileno'),
(22, 'Split', 'San Justo', 'Esterilizacion sala de maquinas'),
(23, 'Split', 'San Justo', 'Sala de rack 1 hemodinamia'),
(24, 'Split', 'San Justo', 'Sala de rack 2 hemodinamia'),
(25, 'Split', 'San Justo', 'Quirofano 1'),
(26, 'Split', 'San Justo', 'Litotricia (Ex Endoscopia)'),
(27, 'Split', 'San Justo', 'Sala de recuperacion 1'),
(28, 'Split', 'San Justo', 'Sala de recuperacion 2'),
(29, 'Split', 'San Justo', 'Rack PB edificio Chioccarelli'),
(30, 'Split', 'San Justo', 'Rack 1 piso edificio Chioccarelli'),
(31, 'Split', 'San Justo', 'Rack 2 piso edificio Chioccarelli'),
(32, 'Split', 'San Justo', 'Banco de tejidos 1'),
(33, 'Split', 'San Justo', 'Banco de tejidos 2'),
(34, 'Split', 'San Justo', 'Recuperacion UCA 1'),
(35, 'Split', 'San Justo', 'Recuperacion UCA 2'),
(36, 'Split', 'San Justo', 'Vestuario UCA 1'),
(37, 'Split', 'San Justo', 'Vestuario UCA 2'),
(38, 'Split', 'San Justo', 'Habitacion 9701 Maternidad'),
(39, 'Split', 'San Justo', 'Habitacion 8304 Raggio'),
(40, 'Split', 'San Justo', 'Habitacion 8309 Raggio'),
(41, 'Split', 'San Justo', 'Rack imagenes P.B 1'),
(42, 'Split', 'San Justo', 'Rack imagenes P.B 2'),
(43, 'Split', 'San Justo', 'Rack imagenes 1 Piso 1'),
(44, 'Split', 'San Justo', 'Rack imagenes 1 Piso 2'),
(45, 'Split', 'San Justo', 'Rack imagenes 2 Piso 1'),
(46, 'Split', 'San Justo', 'Rack imagenes 2 Piso 2'),
(47, 'Split', 'San Justo', 'Rack cerini'),
(48, 'Split', 'San Justo', 'Rack Utim'),
(49, 'Split', 'San Justo', 'Rack Devoto|'),
(50, 'Split', 'San Justo', 'bajo silueta UPS guardia'),
(51, 'Split', 'San Justo', 'bajo silueta UPS DXI'),
(52, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 001] JEFE MEDICO'),
(53, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 002] ENFERMERIA CONS 37'),
(54, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 003] PEDIATRIA CONS 32'),
(55, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 003] PEDIATRIA CONS 34'),
(56, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 003] PEDIATRIA CONS 36'),
(57, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 003] PEDIATRIA CONS 38'),
(58, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 004] PEDIATRIA TRIAGPE 31'),
(59, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 005] CONSULTORIO 35'),
(60, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 006] CONSULTORIO 33'),
(61, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 007] LOCKERS RECEPCION'),
(62, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 014] FRENTE A BREACK ROOM'),
(63, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 008] JEFE ENFERMERIA ADULTO'),
(64, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 009] CONSULTORIO 8'),
(65, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 010 A] PASILLO SILLONES ADULTO'),
(66, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 010 B] PASILLO SILLONES PEDIATRIA'),
(67, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 011] CONSULTORIO 5'),
(68, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 012] CONSULTORIO 3'),
(69, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 013] TRIAGPE CONS 1'),
(70, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 015] SALA DE YESO CONSULTORIO 11'),
(71, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 016] CONSULTORIO 10'),
(72, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 016] CONSULTORIO 9'),
(73, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 016] CONSULTORIO 7'),
(74, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 016] CONSULTORIO 6'),
(75, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 016] CONSULTORIO 4'),
(76, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 016] CONSULTORIO 2'),
(77, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 018 B] PASILLO GUARDIA'),
(78, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 024] PASILLO ADULTO'),
(79, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 017-1 A] PASILLO FRENTE CENTRAL'),
(80, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 017-1 B] PASILLO FRENTE PUERTA CORREDIZA'),
(81, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 017-2 A] FINAL PASILLO FRENTE ESCALERA'),
(82, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 017-2 B] PASILLO PEDIATRICO 1'),
(83, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 022] JEFE ADMINISTRACION'),
(84, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 018 A] AMBULANCIA'),
(85, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 021-1 A] FRENTE A BANO'),
(86, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 026-1 B] PASILLO SALA TABLERO PRINCIPAL'),
(87, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 027] CAMILLERO'),
(88, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 021-2 A] SALA ESPERA ADULTO'),
(89, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 021-1 B] FRENTE ASCENSOR'),
(90, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 021-2 B] FRENTE ASCENSOR'),
(91, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 004-2] SUB SUELO'),
(92, 'Fan Coil', 'San Justo', '(Edificio de Guardia) ADULTO [FC 003] SUB SUELO'),
(93, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 019-1 B] SALA ESPERA PEDIATRIA'),
(94, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 019-2 B] SALA ESPERA PEDIATRIA'),
(95, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 019-2 A] SALA ESPERA PEDIATRIA'),
(96, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 019-1 A] SALA ESPERA PEDIATRIA'),
(97, 'Fan Coil', 'San Justo', '(Edificio de Guardia) PEDIATRIA [FC 025] ADMINISTRACION PEDIATRICA'),
(98, 'Fan Coil', 'San Justo', '(Edificio de imagenes) TOMOGRAFO [FC 022] CONSULTORIO 57 (TFCA 110 - 9000 FR)'),
(99, 'Fan Coil', 'San Justo', '(Edificio de imagenes) TOMOGRAFO [FC 023] CONSULTORIO 57 (TFCA 110  - 9000 FR)'),
(100, 'Fan Coil', 'San Justo', '(Edificio de imagenes) TOMOGRAFO [FC 007] SALA RESONANCIA (TFCA 25  - 2300 FR)'),
(101, 'Fan Coil', 'San Justo', '(Edificio de imagenes) TOMOGRAFO [FC 001- 1] CONSULTORIO 58 (TFCA 110  - 9000 FR)'),
(102, 'Fan Coil', 'San Justo', '(Edificio de imagenes) TOMOGRAFO [FC 005- 2] CONSULTORIO 59 (TFCA 110  - 9000 FR)'),
(103, 'Fan Coil', 'San Justo', '(Edificio de imagenes) TOMOGRAFO [FC 006- 2] CONSULTORIO 58 (TFCA 110  - 9000 FR)'),
(104, 'Fan Coil', 'San Justo', '(Edificio de imagenes) TOMOGRAFO [FC 005- 1] CONSULTORIO 59 (TFCA 110  - 9000 FR)'),
(105, 'Fan Coil', 'San Justo', '(Edificio de imagenes) TOMOGRAFO [FC 025] ENTRADA RESONANCIA (TFCA 24  - 2300 FR)'),
(106, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 001] CONSULTORIO 61 NUEVO (TFCA 35  - 3000 FR)'),
(107, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 004] ANESTECIA RECU (TFCA 70  - 8500 FR)'),
(108, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 002] CONS 62 Y 63 (TFCA 36  - 3000 FR)'),
(109, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 003] CONSULTORIO 60 (TFCA 35  - 3000 FR)'),
(110, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 012] CONSULTORIO 55 (TFCA 50  - 4300 FR)'),
(111, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 013] CONSULTORIO 54 (TFCA 50  - 4300 FR)'),
(112, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 014] CONSULTORIO 56 (TFCA 50  - 4300 FR)'),
(113, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 015] CONSULTORIO 53 (TFCA 53  - 4000 FR)'),
(114, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 016] CONSULTORIO 52 (TFCA 35  - 3000 FR)'),
(115, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 020] CONSULTORIO 51 (TFCA 35  - 3000 FR)'),
(116, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 3 A [FC 021] CONSULTORIO 50 (TFCA 25  - 2300 FR)'),
(117, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 1 A [FC 008 - 2] PASILLO TECNICO (TFCA 110  - 9000 FR)'),
(118, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 1 A [FC 008 - 3] PASILLO TECNICO (TFCA 110  - 9000 FR)'),
(119, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 1 A [FC 008 - 4] PASILLO TECNICO (TFCA 110  - 9000 FR)'),
(120, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 1 A [FC 008 - 1] PASILLO TECNICO (TFCA 110  - 9000 FR)'),
(121, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 4 A [FC 019] UTIP DORMI MEDICO (TFCA 35  - 3000 FR)'),
(122, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 4 A [FC 009] UTIP NUEVA (TFCA 35  - 3000 FR)'),
(123, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 4 B [FC 010] FARMACIA (TFCA 25  - 2300 FR)'),
(124, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 4 C [FC 017] GUARDIA DXI (TFCA 50  - 4300 FR)'),
(125, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 2 B [FC 024] OF. ADMIN. RECEPCION (TFCA 50  - 4301 FR)'),
(126, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 2 B [FC 011 - 4] RECEOCION (TFCA 110  - 9000 FR)'),
(127, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 2 A [FC 011 - 1] SALA DE ESPERA (TFCA 110  - 4000 FR)'),
(128, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 2 A [FC 011 - 2] SALA DE ESPERA (TFCA 110  - 9000 FR)'),
(129, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 2 A [FC 011 - 3] SALA DE ESPERA (TFCA 110  - 9000 FR)'),
(130, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 2 A [FC 011 - 5] SALA DE ESPERA (TFCA 110  - 9000 FR)'),
(131, 'Fan Coil', 'San Justo', '(Edificio de imagenes) ZONA 1 B [FC 018] SALA DE ESPERA GUARDIA (TFCA 110  - 9000 FR)'),
(132, 'Chiller', 'San Justo', 'Chiller 1'),
(133, 'Chiller', 'San Justo', 'Chiller 2'),
(134, 'Chiller', 'San Justo', 'Chiller 3 emergencia'),
(135, 'Chiller', 'San Justo', 'Chiller Resonador'),
(136, 'Chiller', 'San Justo', 'Chiller Diagnostico por imagenes'),
(137, 'UTA', 'San Justo', 'UTA 1'),
(138, 'UTA', 'San Justo', 'UTA 2'),
(139, 'UTA', 'San Justo', 'UTA 235'),
(140, 'UTA', 'San Justo', 'UTA 236'),
(141, 'UTA', 'San Justo', 'UTA 237'),
(142, 'UTA', 'San Justo', 'UTA 201'),
(143, 'VRV', 'San Justo', 'Equipo de diagnostico por imagenes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

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
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `limpieza_filtros` tinyint(1) DEFAULT 0,
  `limpieza_evaporador` tinyint(1) DEFAULT 0,
  `lubricacion_bujes_motor` tinyint(1) DEFAULT 0,
  `lubricacion_bujes_blower` tinyint(1) DEFAULT 0,
  `limpieza_blower_evaporador` tinyint(1) DEFAULT 0,
  `ajuste_contacto_electrico` tinyint(1) DEFAULT 0,
  `limpieza_caja_electrica` tinyint(1) DEFAULT 0,
  `limpieza_drenaje_bomba_bandeja` tinyint(1) DEFAULT 0,
  `verificacion_termostato` tinyint(1) DEFAULT 0,
  `limpieza_unidad_condensadora` tinyint(1) DEFAULT 0,
  `presion_baja_antes` varchar(255) DEFAULT NULL,
  `presion_baja_despues` varchar(255) DEFAULT NULL,
  `presion_alta_antes` varchar(255) DEFAULT NULL,
  `presion_alta_despues` varchar(255) DEFAULT NULL,
  `amperaje_compresor_antes` varchar(255) DEFAULT NULL,
  `amperaje_compresor_despues` varchar(255) DEFAULT NULL,
  `voltaje_alimentacion_antes` varchar(255) DEFAULT NULL,
  `voltaje_alimentacion_despues` varchar(255) DEFAULT NULL,
  `inyeccion_aire_temp_antes` varchar(255) DEFAULT NULL,
  `inyeccion_aire_temp_despues` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_23_044926_add_role_to_users_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('b3ugP09MfyMg49FQDooE1nny7O5Hxynlg3kkZEVL', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZDE0M25LMnlRUGVPMVpkNFhhdDROQjBRdGMyMW93a3hER1E2aGdnMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9oZWZlc3RvLWluZm9ybWVzL3B1YmxpYy9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1750660039);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'operador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@example.com', NULL, '$2y$12$T4gCspUtN2.DIYIJ0lxoWe6TE49LgZ6nDBwcS6ey8KGD0RIkQpZfe', NULL, '2025-06-23 07:50:54', '2025-06-23 07:50:54', 'admin'),
(2, 'Operador', 'operador@example.com', NULL, '$2y$12$RAr7Y7Q/zRpXrNgPddWO7uYARnIPC2yJfi66hL61h/6R1EMtvyLeW', NULL, '2025-06-23 07:50:54', '2025-06-23 07:50:54', 'operador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
