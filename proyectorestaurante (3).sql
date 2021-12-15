-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2021 a las 06:14:06
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectorestaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `categoria_bebida` int(11) NOT NULL,
  `bebida` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio_bebida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `categoria_bebida`, `bebida`, `descripcion`, `precio_bebida`) VALUES
(1, 1, 'Campari Soda', 'Ésta era la bebida más popular', 11),
(2, 4, 'Té - Infusiones', 'Te caliente', 2),
(3, 2, 'Coca Cola (2L)', 'coca cola de un litro', 8),
(6, 4, 'Capuchino de Leche', 'Capuchino de Leche', 5),
(8, 3, 'Coronita', 'corona', 5),
(9, 2, 'Chicha Morada (1L)', 'chicha morada jarra de un litro', 5),
(10, 5, 'Limonada', 'limonada', 3),
(11, 2, 'Agua Mineral (1l)', 'Agua Mineral de 1 Litro', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(14, 'Pescados y Mariscos', 'platos marinos', 2),
(15, 'criollo', 'Platos criollos', 2),
(16, 'Parrilladas', 'Platos Parrilladas', 2),
(17, 'Chifa', 'comida china', 2),
(18, 'Comida Rapida', 'Comida rapida', 2),
(19, 'Ensaladas', 'ensaladas', 1),
(21, 'Selva', 'comida de la selva', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_bebida`
--

CREATE TABLE `categoria_bebida` (
  `id` int(11) NOT NULL,
  `categoria_bebida` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_bebida`
--

INSERT INTO `categoria_bebida` (`id`, `categoria_bebida`) VALUES
(1, 'APERITIVOS'),
(2, 'REFRESCOS'),
(3, 'CERVEZAS'),
(4, 'BEBIDAS CALIENTES'),
(5, 'ZUMOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_pat` varchar(60) NOT NULL,
  `apellido_mat` varchar(60) NOT NULL,
  `dni` int(8) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `celular` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido_pat`, `apellido_mat`, `dni`, `direccion`, `celular`) VALUES
(1, 'Guillermo Gabriel', 'Fernandez', 'Reyna', 72368462, 'av.sur 157', 911511213),
(3, 'Jordi', 'Chavarry', 'De La Cruz', 82373233, 'av.norte 346', 983763747),
(4, 'Enrique Felix', 'Zavaleta', 'Gonzales', 37842976, 'los olivos 980', 923876244),
(5, 'Angie Elizabeth', 'Escobal', 'Julca', 98767667, 'la esperanza 456', 923823846),
(10, 'jeremi scoth', 'Encarnacion', 'Ramirez', 87678678, 'La Esperanza 515', 687257687);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `estado`) VALUES
(1, 'Disponible'),
(2, 'No Disponibles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `plato` int(11) NOT NULL,
  `cantidadinicial` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `plato`, `cantidadinicial`, `stock`) VALUES
(3, 1, 10, 10),
(4, 7, 10, 10),
(5, 12, 5, 5),
(7, 11, 5, 5),
(9, 8, 5, 5),
(11, 2, 20, 20);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `plato` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `id_categoria`, `plato`, `descripcion`, `precio`) VALUES
(1, 15, 'Arroz Con Pollo', 'arroz con pollo con papa y arroz', 10),
(2, 18, 'Hamburguesa', 'Comida rapida', 8),
(3, 14, 'Ceviche', 'Platillo con trozos de pescado crudo, en jugo de limón', 10),
(7, 15, 'Papa a la Huancaina', 'papa a la huancaina con huevo duro,aceituna', 10),
(8, 15, 'Causa de Pollo', 'causa con mayonesa ,palta ,huevo', 15),
(9, 14, 'Apanado de Tollo', 'tollo fileteado y apanado con papas fritas,arroz', 20),
(10, 15, 'Cabrito', 'cabrito con frijol, yuca, arroz, sarza criolla', 14),
(11, 15, 'Lomo Saltado', 'lomo saltado con tomate y cebolla,papas fritas, arroz', 15),
(12, 14, 'Arroz con Mariscos', 'arroz con mariscos a base de aji amarillo,sarza criolla,palta', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Guillermo Fernandez', 'gfernandezreyna@gmail.com', NULL, '$2y$10$n/upFjKbm2l2ys6/MU/1QekDIYXFMGp.1vbW27g50DnhjE4hiAsou', NULL, '2021-12-13 21:19:44', '2021-12-13 21:19:44'),
(2, 'Enrique Zavaleta', 'enrique@gmail.com', NULL, '$2y$10$ly93GuAxjmTu5jGCJNSrq.C9mk4nthHHR0q66bYQ1m778ppXi44du', NULL, '2021-12-13 23:37:16', '2021-12-13 23:37:16'),
(3, 'Jordi Chavarry', 'jordi@gmail.com', NULL, '$2y$10$Sb7bRY7l33dRAa5IxPZa8.oWa6FqJ9.iquyqVCdNGcJPi7TBcCeAu', NULL, '2021-12-13 23:39:49', '2021-12-13 23:39:49'),
(4, 'Angie Escobal', 'angie@gmail.com', NULL, '$2y$10$ENj7MHoo2Ie.LjDXppJ8cuOfW70GCsizW4/4U1CNXVyHxkqk59lsW', NULL, '2021-12-13 23:42:36', '2021-12-13 23:42:36'),
(5, 'Jeremi Encarnacion', 'jeremi@gmail.com', NULL, '$2y$10$PjRrJarHzJFLBH2EsffpPesohmLnCoMoXCrEL75uItJCS8dI9kSTu', NULL, '2021-12-13 23:44:24', '2021-12-13 23:44:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `cantidad_menu` int(11) NOT NULL,
  `bebida` int(11) DEFAULT NULL,
  `cantidad_bebida` int(11) DEFAULT NULL,
  `fecharegistro` date DEFAULT NULL,
  `pago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `cliente`, `menu`, `cantidad_menu`, `bebida`, `cantidad_bebida`, `fecharegistro`, `pago`) VALUES
(3, 1, 3, 1, 10, 1, '2021-12-10', 100),
(9, 3, 9, 2, 1, 1, '2021-12-11', 50),
(10, 10, 7, 1, NULL, NULL, '2021-12-12', 20),
(11, 4, 4, 3, 11, 1, '2021-12-12', 70),
(14, 3, 11, 5, 3, 1, '2021-12-12', 60);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bebida_nombre` (`bebida`),
  ADD KEY `fk_cabe` (`categoria_bebida`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_nombre` (`nombre`),
  ADD KEY `fk_CP` (`estado`);

--
-- Indices de la tabla `categoria_bebida`
--
ALTER TABLE `categoria_bebida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_nombre` (`nombre`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_plato` (`plato`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plato_nombre` (`plato`),
  ADD KEY `fk_capla` (`id_categoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vm` (`cliente`),
  ADD KEY `fk_vmenu` (`menu`),
  ADD KEY `fk_vbebida` (`bebida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `categoria_bebida`
--
ALTER TABLE `categoria_bebida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD CONSTRAINT `fk_cabe` FOREIGN KEY (`categoria_bebida`) REFERENCES `categoria_bebida` (`id`);

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `fk_CP` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_mp` FOREIGN KEY (`plato`) REFERENCES `platos` (`id`);

--
-- Filtros para la tabla `platos`
--
ALTER TABLE `platos`
  ADD CONSTRAINT `fk_capla` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_vbebida` FOREIGN KEY (`bebida`) REFERENCES `bebidas` (`id`),
  ADD CONSTRAINT `fk_vm` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `fk_vmenu` FOREIGN KEY (`menu`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
