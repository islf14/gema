-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-09-2019 a las 07:38:44
-- Versión del servidor: 5.7.18-log
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_01_233925_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(3, 'App\\User', 3),
(3, 'App\\User', 4),
(4, 'App\\User', 4),
(8, 'App\\User', 17),
(12, 'App\\User', 17),
(15, 'App\\User', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'users.index', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(2, 'users.show', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(3, 'users.create', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(4, 'users.edit', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(5, 'users.destroy', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(6, 'roles.index', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(7, 'roles.show', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(8, 'roles.create', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(9, 'roles.edit', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(10, 'roles.destroy', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(11, 'device.index', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(12, 'device.show', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(13, 'device.create', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(14, 'device.edit', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(15, 'device.destroy', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(16, 'activity.index', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(17, 'activity.show', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(18, 'activity.create', 'web', '2019-08-05 00:52:35', '2019-08-05 00:52:35'),
(19, 'activity.edit', 'web', '2019-08-05 00:52:36', '2019-08-05 00:52:36'),
(20, 'activity.destroy', 'web', '2019-08-05 00:52:36', '2019-08-05 00:52:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2019-08-02 06:40:48', '2019-08-02 06:40:48'),
(2, 'Administrador', 'web', '2019-08-02 07:04:12', '2019-08-02 07:04:12'),
(3, 'Supervisor', 'web', '2019-08-05 00:32:23', '2019-08-09 06:00:02'),
(4, 'Técnico', 'web', '2019-08-08 05:35:31', '2019-08-09 06:00:40'),
(8, 'Observador', 'web', '2019-08-09 06:02:30', '2019-08-09 06:02:30'),
(9, 'Tablero', 'web', '2019-08-09 06:47:08', '2019-08-09 06:47:08'),
(10, 'Mantenimiento', 'web', '2019-08-09 06:47:16', '2019-08-09 06:47:16'),
(11, 'Equipos', 'web', '2019-08-09 06:47:24', '2019-08-09 06:47:24'),
(12, 'Usuarios', 'web', '2019-08-09 06:47:31', '2019-08-09 06:47:31'),
(13, 'Reportes', 'web', '2019-08-09 06:47:41', '2019-08-09 06:47:41'),
(14, 'Documentación', 'web', '2019-08-09 06:47:50', '2019-08-09 06:47:50'),
(15, 'Administrador de usuarios', 'web', '2019-08-09 06:51:28', '2019-08-09 06:51:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(4, 2),
(5, 2),
(6, 2),
(1, 15),
(2, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cargo`
--

CREATE TABLE `tb_cargo` (
  `idCargo` int(11) NOT NULL,
  `nomCargo` varchar(45) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_cargo`
--

INSERT INTO `tb_cargo` (`idCargo`, `nomCargo`) VALUES
(1, 'Administrador'),
(2, 'Sub Gerente'),
(3, 'Analista'),
(4, 'Desarrollador'),
(5, 'Técnico'),
(6, 'Practicante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_dependencia`
--

CREATE TABLE `tb_dependencia` (
  `idDependencia` int(11) NOT NULL,
  `nomDependencia` varchar(110) CHARACTER SET utf8 DEFAULT NULL,
  `sigla` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `sede` varchar(25) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_dependencia`
--

INSERT INTO `tb_dependencia` (`idDependencia`, `nomDependencia`, `sigla`, `sede`) VALUES
(1, 'Sub Gerencia de Tecnologías de Información y Comunicación', 'SGTIC', 'Central'),
(2, 'Gerencia General', 'GG', 'Central');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_equipo`
--

CREATE TABLE `tb_equipo` (
  `id` int(11) NOT NULL,
  `tipo_codigo` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `codigo_pat` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `ubicacion` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `modelo` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `serie` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `ram` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `dominio` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `ip` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `mac` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `nom_equipo` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `usuario` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `licencia_w` varchar(35) CHARACTER SET utf8 DEFAULT NULL,
  `acceso_internet` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `observaciones` varchar(800) CHARACTER SET utf8 DEFAULT NULL,
  `Estado` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idTipoEquipo` int(11) NOT NULL,
  `idDependencia` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idSO` int(11) DEFAULT NULL,
  `idProcesador` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_equipo`
--

INSERT INTO `tb_equipo` (`id`, `tipo_codigo`, `codigo_pat`, `ubicacion`, `modelo`, `serie`, `ram`, `dominio`, `ip`, `mac`, `nom_equipo`, `usuario`, `licencia_w`, `acceso_internet`, `fecha`, `grupo`, `observaciones`, `Estado`, `idTipoEquipo`, `idDependencia`, `idEstado`, `idMarca`, `idSO`, `idProcesador`, `created_at`, `updated_at`) VALUES
(1, 'Patrimonial', '12345678910', 'SGTIC', NULL, NULL, '2GB', 'mdcgal', '192.168.2.100', NULL, NULL, NULL, NULL, 'Si', '2019-05-30 10:25:00', 1, NULL, 'Eliminado', 1, 1, 1, 1, 2, 16, NULL, '2019-09-10 04:04:55'),
(2, 'Patrimonial', '12342342425', 'SGTIC', NULL, NULL, NULL, NULL, '192.168.2.1', NULL, NULL, NULL, NULL, 'Si', '2019-05-30 08:00:00', 2, NULL, 'Eliminado', 1, 1, 1, 2, 5, 15, NULL, '2019-09-10 05:01:38'),
(3, 'Patrimonial', '56765765765', 'SGTIC', NULL, NULL, '2GB', 'mdcgal', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-14 23:30:35', NULL, NULL, 'Eliminado', 1, 1, 2, 1, NULL, NULL, NULL, '2019-09-10 04:46:17'),
(4, 'Patrimonial', '98388338', 'SGTIC', NULL, NULL, '2GB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-13 23:30:35', NULL, NULL, 'Activo', 1, 1, 2, 1, NULL, NULL, NULL, NULL),
(5, 'Patrimonial', '76576576', 'SGTIC', NULL, NULL, NULL, 'mdcgal', NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-13 23:30:35', NULL, 'kjh', 'Activo', 1, 1, 1, 2, 2, 2, '2019-08-16 00:55:25', '2019-09-10 03:18:49'),
(6, 'Interno', '76576576', 'sgtic', NULL, NULL, NULL, 'mdcgal', NULL, NULL, NULL, NULL, NULL, 'Si', '2019-08-15 19:58:15', NULL, NULL, 'Eliminado', 2, 2, 2, 2, 1, 2, '2019-08-16 01:20:46', '2019-09-10 05:14:56'),
(7, 'Patrimonial', '192334832947', 'SGTIC', 'abc', 'bnm', '2 GB', 'mdcgal', '192.168.1.13', '3G:2H:5H:5H', NULL, 'Usuario', 'yuyuyuyuyu', 'Si', '2019-08-15 20:47:42', NULL, 'no hay', 'Eliminado', 1, 1, 1, 3, 2, 18, '2019-08-16 01:49:33', '2019-09-10 04:03:59'),
(8, 'Patrimonial', '7882334832947', 'Alcaldía', 'M45', 'lkj798jl', '2 GB', 'mdcgal', '192.168.2.13', '3G:2H:5H:5H', 'MDCGAL003', 'Juan', 'KJL234L23KJ5LK345LK', 'Si', '2019-08-15 21:36:52', NULL, 'no hay observaciones', 'Eliminado', 1, 2, 1, 4, 6, 17, '2019-08-16 02:38:51', '2019-09-10 03:37:18'),
(9, 'Patrimonial', '576576576576576', 'SGTIC', NULL, NULL, NULL, 'mdcgal', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-09 22:35:23', NULL, NULL, 'Eliminado', 3, 1, 1, 1, NULL, NULL, '2019-09-10 03:36:12', '2019-09-10 05:14:52'),
(10, 'Patrimonial', '64654654654654', 'sgtic', NULL, NULL, NULL, 'mdcgal', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-09 22:38:02', NULL, NULL, 'Activo', 4, 1, 2, 4, NULL, NULL, '2019-09-10 03:38:42', '2019-09-10 03:38:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estado`
--

CREATE TABLE `tb_estado` (
  `idEstado` int(11) NOT NULL,
  `nomEstado` varchar(25) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_estado`
--

INSERT INTO `tb_estado` (`idEstado`, `nomEstado`) VALUES
(1, 'Bueno'),
(2, 'Regular'),
(3, 'Malo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_marca`
--

CREATE TABLE `tb_marca` (
  `idMarca` int(11) NOT NULL,
  `nomMarca` varchar(25) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_marca`
--

INSERT INTO `tb_marca` (`idMarca`, `nomMarca`) VALUES
(1, 'HP'),
(2, 'Advance'),
(3, 'Dell'),
(4, 'Toshiba'),
(5, 'Micronics'),
(6, 'Microsoft');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_procesador`
--

CREATE TABLE `tb_procesador` (
  `idProcesador` int(11) NOT NULL,
  `nomProcesador` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `velocidad` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_procesador`
--

INSERT INTO `tb_procesador` (`idProcesador`, `nomProcesador`, `velocidad`) VALUES
(1, 'AMD A4', NULL),
(2, 'AMD A6', NULL),
(3, 'AMD A12', NULL),
(4, 'AMD Athlon', ''),
(5, 'AMD Athlon II', NULL),
(6, 'AMD Athlon XP', NULL),
(7, 'AMD FX', NULL),
(8, 'AMD Opteron', NULL),
(9, 'AMD Phenom', NULL),
(10, 'AMD Turion', NULL),
(11, 'AMD Turion X2', NULL),
(12, 'Intel Atom', '1.66GHz'),
(13, 'Intel Cleron', '1.7GHz'),
(14, 'Intel Core2 Duo', '1.8GHz'),
(15, 'Intel Core2 Quad', '2.4GHz'),
(16, 'Intel Core i3', '2.13GHz'),
(17, 'Intel Core i5', '2.4GHz'),
(18, 'Intel Core i7', '2.8GHz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_registro`
--

CREATE TABLE `tb_registro` (
  `id` int(11) NOT NULL,
  `problema` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `problema_real` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solucion` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `tipoMant` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `recomendaciones` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `idEquipo` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_registro`
--

INSERT INTO `tb_registro` (`id`, `problema`, `problema_real`, `solucion`, `fecha`, `tipoMant`, `recomendaciones`, `user_id`, `idEquipo`, `created_at`, `updated_at`) VALUES
(1, 'se detecto que el ventilador no gira', NULL, 'se hizo limpiza', '2019-05-30 09:00:00', 'Correctivo', 'se recomienda hacer un seguimiento', 2, 1, NULL, NULL),
(2, 'se detecto que el ventilador no gira', NULL, 'se hizo limpiza', '2019-05-30 09:00:00', 'Correctivo', 'se recomienda hacer un seguimiento', 2, 1, NULL, NULL),
(3, 'se detecto que el ventilador no gira', NULL, 'se hizo limpiza', '2019-05-30 09:00:00', 'Correctivo', 'se recomienda hacer un seguimiento', 2, 1, NULL, NULL),
(4, 'no enciende', 'error en la fuente', 'reemplazo de fuente', '2019-08-17 12:38:04', NULL, NULL, 1, 4, '2019-08-17 17:43:10', '2019-08-17 17:43:10'),
(5, 'no enciende', 'cable poder roto', 'cambio de cable', '2019-08-17 12:47:54', 'Preventivo', 'se recomienda cambiar lugar', 1, 1, '2019-08-17 17:48:43', '2019-08-17 17:48:43'),
(6, 'jkh', 'kjh', 'kjh', '2019-08-17 12:49:53', NULL, 'kjh', 1, NULL, '2019-08-17 17:50:01', '2019-08-17 17:50:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_so`
--

CREATE TABLE `tb_so` (
  `idSO` int(11) NOT NULL,
  `nomSO` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `arquitectura` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_so`
--

INSERT INTO `tb_so` (`idSO`, `nomSO`, `arquitectura`) VALUES
(1, 'Windows XP 86', '86'),
(2, 'Windows 7 86', '86'),
(3, 'Windows 7 64', '64'),
(4, 'Windows 8 86', '86'),
(5, 'Windows 8 64', '64'),
(6, 'Windows 8.1 86', '86'),
(7, 'Windows 8.1 64', '64'),
(8, 'Windows 10 64', '64');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipoequipo`
--

CREATE TABLE `tb_tipoequipo` (
  `idTipoEquipo` int(11) NOT NULL,
  `nomTipoE` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_tipoequipo`
--

INSERT INTO `tb_tipoequipo` (`idTipoEquipo`, `nomTipoE`) VALUES
(1, 'Computadora'),
(2, 'Laptop'),
(3, 'Impresora'),
(4, 'Monitor'),
(5, 'Teclado'),
(6, 'Mouse');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `cargoid` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `phone`, `dni`, `nivel`, `cargoid`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'Ad', 'superadmin@mdcgal.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$cI5JrXNVKhVMASMgRm0fR.TstsJgfTowjDdEZAkaNi0lhTennW91C', NULL, '2019-07-20 00:14:17', '2019-07-20 00:14:17'),
(2, 'Administrador', NULL, 'admin@mdcgal.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$4wmFUAZb5oIoZUSGUkdhT.U5nIyTutWGJh.zQ4C0JlJWABCSIojwu', NULL, '2019-07-25 21:54:44', '2019-08-08 09:53:40'),
(3, 'Supervisor', NULL, 'supervisor@mdcgal.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$5AVl76U60gSGADIavAvjfOfhrv.M3mqN87VGr2k/S6lFphkncGeVu', NULL, '2019-08-05 00:34:17', '2019-08-08 09:49:53'),
(4, 'usuario2', 'usuario', 'user2@mdcgal.com', '95555555', '66778899', NULL, NULL, NULL, '$2y$10$Cpvm8XcAt4I/PBOAq.dtbORw4h3ZzqxNP02R078dYcQC6jr.tuD2m', 'TfYC3f4bFLQMmTGkLCvUMflB1Ez7hh7XG6a4wn7wLCk1e5fEZpVB3O0JiWJP', '2019-08-05 03:10:39', '2019-08-07 05:53:50'),
(17, 'Patricio', 'Melendez', 'user3@mdcgal.com', '9878787', '89898898', NULL, NULL, '2019-08-08 07:38:24', '$2y$10$pywgU4/tmaxGkN7AWUJke.nfWCEC0ZH1RDvselnZ6aK30Q7nanIaG', 'GN1cSm1Z8YVAgdOurzU1pvEhnlUyHaGFdkBNMMqBMYXzHF2uzMZoDMCLOq1H', '2019-08-08 07:38:24', '2019-08-09 06:14:40'),
(19, 'Vesta Abshire', NULL, 'roman.kozey@example.org', NULL, NULL, NULL, NULL, '2019-08-08 07:38:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '58WEwc2sIJ', '2019-08-08 07:38:25', '2019-08-08 07:38:25'),
(20, 'Prof. Zetta Lakin', NULL, 'carey86@example.org', NULL, NULL, NULL, NULL, '2019-08-08 07:38:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BSHikyhxTb', '2019-08-08 07:38:25', '2019-08-08 07:38:25'),
(21, 'Hannah Schowalter', NULL, 'ocremin@example.org', NULL, NULL, NULL, NULL, '2019-08-08 07:38:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1m6S0eAZG6', '2019-08-08 07:38:25', '2019-08-08 07:38:25'),
(22, 'Prof. Mason Brakus IV', NULL, 'garfield32@example.com', NULL, NULL, NULL, NULL, '2019-08-08 07:38:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'upEMDNmue4', '2019-08-08 07:38:25', '2019-08-08 07:38:25'),
(23, 'SuperAdmin', NULL, 'ubrakus@example.net', NULL, NULL, NULL, NULL, '2019-08-08 07:38:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OBAGo9mont', '2019-08-08 07:38:25', '2019-08-09 07:51:50'),
(37, 'Juan Pedro', 'Llanos Sosa', 'user4@mdcgal.com', '324324234', '23443322', NULL, NULL, NULL, '$2y$10$R0ySK28E4eM5Mw/xARvE0eqE4aRW9164qi9cTl1v/GYKuxif2zwUO', NULL, '2019-08-09 08:21:21', '2019-08-09 08:21:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `contrasena` varchar(41) CHARACTER SET utf8 DEFAULT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `apellido` varchar(35) CHARACTER SET utf8 DEFAULT NULL,
  `numCel` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `dni` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `Cargo_idCargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`, `nombre`, `apellido`, `numCel`, `dni`, `nivel`, `Cargo_idCargo`) VALUES
(1, 'administrador', 'f8b92ade3ea6b9633ec4f1f50fb551d08b3b74dd', 'Administrador', 'Administrador', NULL, NULL, 1, 1),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin', NULL, NULL, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `tb_cargo`
--
ALTER TABLE `tb_cargo`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indices de la tabla `tb_dependencia`
--
ALTER TABLE `tb_dependencia`
  ADD PRIMARY KEY (`idDependencia`);

--
-- Indices de la tabla `tb_equipo`
--
ALTER TABLE `tb_equipo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Equipo_TipoEquipo_idx` (`idTipoEquipo`),
  ADD KEY `fk_Equipo_Dependencia1_idx` (`idDependencia`),
  ADD KEY `fk_Equipo_Estado1_idx` (`idEstado`),
  ADD KEY `fk_Equipo_Marca1_idx` (`idMarca`),
  ADD KEY `fk_Equipo_SO1_idx` (`idSO`),
  ADD KEY `fk_Equipo_Procesador1_idx` (`idProcesador`);

--
-- Indices de la tabla `tb_estado`
--
ALTER TABLE `tb_estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `tb_marca`
--
ALTER TABLE `tb_marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `tb_procesador`
--
ALTER TABLE `tb_procesador`
  ADD PRIMARY KEY (`idProcesador`);

--
-- Indices de la tabla `tb_registro`
--
ALTER TABLE `tb_registro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Registro_Equipo1_idx` (`idEquipo`),
  ADD KEY `Índice 3` (`user_id`);

--
-- Indices de la tabla `tb_so`
--
ALTER TABLE `tb_so`
  ADD PRIMARY KEY (`idSO`);

--
-- Indices de la tabla `tb_tipoequipo`
--
ALTER TABLE `tb_tipoequipo`
  ADD PRIMARY KEY (`idTipoEquipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `FK_cargo` (`cargoid`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_cargo`
--
ALTER TABLE `tb_cargo`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_dependencia`
--
ALTER TABLE `tb_dependencia`
  MODIFY `idDependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_equipo`
--
ALTER TABLE `tb_equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tb_estado`
--
ALTER TABLE `tb_estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_marca`
--
ALTER TABLE `tb_marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_procesador`
--
ALTER TABLE `tb_procesador`
  MODIFY `idProcesador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tb_registro`
--
ALTER TABLE `tb_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_so`
--
ALTER TABLE `tb_so`
  MODIFY `idSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tb_tipoequipo`
--
ALTER TABLE `tb_tipoequipo`
  MODIFY `idTipoEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tb_equipo`
--
ALTER TABLE `tb_equipo`
  ADD CONSTRAINT `fk_Equipo_Dependencia1` FOREIGN KEY (`idDependencia`) REFERENCES `tb_dependencia` (`idDependencia`),
  ADD CONSTRAINT `fk_Equipo_Estado1` FOREIGN KEY (`idEstado`) REFERENCES `tb_estado` (`idEstado`),
  ADD CONSTRAINT `fk_Equipo_Marca1` FOREIGN KEY (`idMarca`) REFERENCES `tb_marca` (`idMarca`),
  ADD CONSTRAINT `fk_Equipo_Procesador1` FOREIGN KEY (`idProcesador`) REFERENCES `tb_procesador` (`idProcesador`),
  ADD CONSTRAINT `fk_Equipo_SO1` FOREIGN KEY (`idSO`) REFERENCES `tb_so` (`idSO`),
  ADD CONSTRAINT `fk_Equipo_TipoEquipo` FOREIGN KEY (`idTipoEquipo`) REFERENCES `tb_tipoequipo` (`idTipoEquipo`);

--
-- Filtros para la tabla `tb_registro`
--
ALTER TABLE `tb_registro`
  ADD CONSTRAINT `FK_registro_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_Registro_Equipo1` FOREIGN KEY (`idEquipo`) REFERENCES `tb_equipo` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_cargo` FOREIGN KEY (`cargoid`) REFERENCES `tb_cargo` (`idCargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
