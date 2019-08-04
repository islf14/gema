-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-08-2019 a las 22:43:26
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
(1, 'App\\User', 1);

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
(3, 'usuario', 'web', '2019-08-05 00:32:23', '2019-08-05 00:32:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `idEquipo` int(11) NOT NULL,
  `tipo_codigo` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `codigo_pat` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `ubicacion` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `modelo` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `serie` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `ram` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `dominio` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `ip` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `macRed` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `nom_equipo` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `usuario` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `licencia_w` varchar(35) CHARACTER SET utf8 DEFAULT NULL,
  `acceso_internet` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `observaciones` varchar(800) CHARACTER SET utf8 DEFAULT NULL,
  `TipoEquipo_idTipoEquipo` int(11) NOT NULL,
  `Dependencia_idDependencia` int(11) NOT NULL,
  `Estado_idEstado` int(11) NOT NULL,
  `Marca_idMarca` int(11) NOT NULL,
  `SO_idSO` int(11) DEFAULT NULL,
  `Procesador_idProcesador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_equipo`
--

INSERT INTO `tb_equipo` (`idEquipo`, `tipo_codigo`, `codigo_pat`, `ubicacion`, `modelo`, `serie`, `ram`, `dominio`, `ip`, `macRed`, `nom_equipo`, `usuario`, `licencia_w`, `acceso_internet`, `fecha`, `grupo`, `observaciones`, `TipoEquipo_idTipoEquipo`, `Dependencia_idDependencia`, `Estado_idEstado`, `Marca_idMarca`, `SO_idSO`, `Procesador_idProcesador`) VALUES
(1, 'Patrimonial', '12345678910', 'SGTIC', NULL, NULL, '2GB', 'mdcgal', '192.168.2.100', NULL, NULL, NULL, NULL, 'si', '2019-05-30 10:25:00', 1, NULL, 1, 1, 1, 1, 2, 16),
(2, 'Patrimonial', '12342342425', 'SGTIC', NULL, NULL, NULL, NULL, '192.168.2.1', NULL, NULL, NULL, NULL, 'si', '2019-05-30 08:00:00', 2, NULL, 1, 1, 1, 2, 5, 15);

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
  `idRegistro` int(11) NOT NULL,
  `problema` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `solucion` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `tipoMant` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `recomendaciones` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Equipo_idEquipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tb_registro`
--

INSERT INTO `tb_registro` (`idRegistro`, `problema`, `solucion`, `fecha`, `tipoMant`, `recomendaciones`, `user_id`, `Equipo_idEquipo`) VALUES
(1, 'se detecto que el ventilador no gira', 'se hizo limpiza', '2019-05-30 09:00:00', 'Correctivo', 'se recomienda hacer un seguimiento', 2, 1),
(2, 'mantenimiento de fuente', 'mantenimiento físico', '2019-05-30 14:00:00', 'Preventivo', 'limpieza', 2, 1);

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
(2, 'user', 'us', 'user@mdcgal.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$d/fQcCU9CPDl0jm6BnAN7e5BmgLrxF/tRi6.sBBICEPMILlRtyK2C', NULL, '2019-07-25 21:54:44', '2019-07-25 21:54:44'),
(3, 'admin', NULL, 'admin@mdcgal.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$386LIAJ9cvwSkYLyIIureeOOi/ojNql5/B.ArqbIeoWnfAysI69i.', NULL, '2019-08-05 00:34:17', '2019-08-05 00:34:17'),
(4, 'usuario2', NULL, 'user2@mdcgal.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$iBzN6to8SEFnt6PxIT3Pme5HYJ1s8TajofmuJ2miLnNggP/MmDhay', NULL, '2019-08-05 03:10:39', '2019-08-05 03:10:39'),
(5, 'usuario3', NULL, 'user3@mdcgal.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$HIvMFIxlJ.rHCbbR40Z9IeH5ChH02V85V7wy3Lj/7WPxi6nDSHFQq', NULL, '2019-08-05 03:28:21', '2019-08-05 03:28:21'),
(6, 'usuario4', 'usuario', 'user4@mdcgal.com', NULL, '23435423', NULL, NULL, NULL, '$2y$10$5gENwDKzWPpGp1pf2fenb.oa8H8ZWlJPbXd031A9imbqEuy5XhQ2e', NULL, '2019-08-05 03:36:27', '2019-08-05 03:36:27');

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
  ADD PRIMARY KEY (`idEquipo`),
  ADD KEY `fk_Equipo_TipoEquipo_idx` (`TipoEquipo_idTipoEquipo`),
  ADD KEY `fk_Equipo_Dependencia1_idx` (`Dependencia_idDependencia`),
  ADD KEY `fk_Equipo_Estado1_idx` (`Estado_idEstado`),
  ADD KEY `fk_Equipo_Marca1_idx` (`Marca_idMarca`),
  ADD KEY `fk_Equipo_SO1_idx` (`SO_idSO`),
  ADD KEY `fk_Equipo_Procesador1_idx` (`Procesador_idProcesador`);

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
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `fk_Registro_Equipo1_idx` (`Equipo_idEquipo`),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `fk_Equipo_Dependencia1` FOREIGN KEY (`Dependencia_idDependencia`) REFERENCES `tb_dependencia` (`idDependencia`),
  ADD CONSTRAINT `fk_Equipo_Estado1` FOREIGN KEY (`Estado_idEstado`) REFERENCES `tb_estado` (`idEstado`),
  ADD CONSTRAINT `fk_Equipo_Marca1` FOREIGN KEY (`Marca_idMarca`) REFERENCES `tb_marca` (`idMarca`),
  ADD CONSTRAINT `fk_Equipo_Procesador1` FOREIGN KEY (`Procesador_idProcesador`) REFERENCES `tb_procesador` (`idProcesador`),
  ADD CONSTRAINT `fk_Equipo_SO1` FOREIGN KEY (`SO_idSO`) REFERENCES `tb_so` (`idSO`),
  ADD CONSTRAINT `fk_Equipo_TipoEquipo` FOREIGN KEY (`TipoEquipo_idTipoEquipo`) REFERENCES `tb_tipoequipo` (`idTipoEquipo`);

--
-- Filtros para la tabla `tb_registro`
--
ALTER TABLE `tb_registro`
  ADD CONSTRAINT `FK_registro_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_Registro_Equipo1` FOREIGN KEY (`Equipo_idEquipo`) REFERENCES `tb_equipo` (`idEquipo`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_cargo` FOREIGN KEY (`cargoid`) REFERENCES `tb_cargo` (`idCargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
