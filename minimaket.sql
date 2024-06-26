-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 02:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimaket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bebidas`
--

CREATE TABLE `bebidas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `litros` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre`, `litros`, `precio`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Coca-Cola', '500 ml', 900, 'Coca-Cola (500 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(2, 'Coca-Cola', '1 litro', 1200, 'Coca-Cola (1 litro).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(3, 'Coca-Cola', '1.5 litros', 1500, 'Coca-Cola (1.5 litros).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(4, 'Coca-Cola', '3 litros', 2500, 'Coca-Cola (3 litros).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(5, 'Pepsi', '600 ml', 850, 'Pepsi (600 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(6, 'Pepsi', '1.5 litros', 1400, 'Pepsi (1500 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(7, 'Pepsi', '3 litros', 2400, 'Pepsi (3 litros).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(8, 'Fanta', '500 ml', 900, 'Fanta (500 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(9, 'Fanta', '1.5 litros', 1500, 'Fanta (1.5 litros).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(10, 'Fanta', '3 litros', 2500, 'Fanta (3 litros).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(11, 'Sprite', '500 ml', 900, 'sprite.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(12, 'Sprite', '1 litro', 1200, 'sprite.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(13, 'Sprite', '1.5 litros', 1500, 'sprite.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(14, 'Sprite', '3 litros', 2500, 'sprite.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(15, 'Bebida energética Red Bull', '250 ml', 2000, 'Bebida energética Red Bull (250 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(16, 'Bebida energética Red Bull', '355 ml', 2800, 'Bebida energética Red Bull (355 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(17, 'Bebida energética Monster', '473 ml', 2300, 'Bebida energética Monster (473 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(18, 'Bebida energética Monster', '710 ml', 3000, 'mBebida energética Monster (710 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(19, 'Bebida energética Score Gorilla', '600 ml', 1800, 'Bebida energética Score Gorilla (500 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(20, 'Agua mineral Cachantún', '500 ml', 700, 'Agua mineral Cachantún (500 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(21, 'Agua mineral Cachantún', '1 litro', 900, 'Agua mineral Cachantún (1.5 litros).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(22, 'Agua mineral Cachantún', '1.5 litros', 1000, 'Agua mineral Cachantún (2 litros).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(23, 'Agua mineral Cachantún', '2.5 litros', 1200, 'Agua mineral Cachantún (2.5 litros).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(24, 'Agua mineral Vital', '600 ml', 650, 'Agua mineral Vital (600 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(25, 'Agua mineral Vital', '990 ml', 850, 'Agua mineral Vital (990 ml)l.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(26, 'Agua mineral Vital', '1.5 litros', 900, 'Agua mineral Vital (1.5 litros).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(27, 'Jugos Watts', '200 ml', 500, 'Jugos Watts (200 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(28, 'Jugos Watts', '1 litro', 1200, 'Jugos Watts (1 litro).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(29, 'Jugos Andina', '200 ml', 450, 'Jugos Andina (200 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(30, 'Jugos Andina', '600 ml', 850, 'Jugos Andina (600 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(31, 'Jugos Andina', '1 litro', 1100, 'Jugos Andina (1 litro).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(32, 'Té helado Lipton', '400 ml', 900, 'Té helado Lipton (400 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(33, 'Té helado Lipton', '1.5 litros', 1500, 'Té helado Lipton (1.5 litro).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(34, 'Bebida de soya Ades', '200 ml', 600, 'Bebida de soya Ades (200 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(35, 'Bebida de soya Ades', '1 litro', 1600, 'Bebida de soya Ades (1 litro).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(36, 'Bebida isotónica Gatorade', '500 ml', 1200, 'Bebida isotónica Gatorade (500 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(37, 'Bebida isotónica Gatorade', '1 litro', 2000, 'Bebida isotónica Gatorade (1 litro).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(38, 'Bebida isotónica Powerade', '600 ml', 1100, 'Bebida isotónica Powerade (600 ml).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(39, 'Bebida isotónica Powerade', '1.1 litro', 1800, 'Bebida isotónica Powerade (1.1 litro).jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carritos`
--

CREATE TABLE `carritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carritos`
--

INSERT INTO `carritos` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-06-26 14:53:55', '2024-06-26 14:53:55'),
(2, 3, '2024-06-26 15:01:23', '2024-06-26 15:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `carrito_items`
--

CREATE TABLE `carrito_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrito_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrito_items`
--

INSERT INTO `carrito_items` (`id`, `carrito_id`, `producto_id`, `cantidad`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 2400.00, '2024-06-26 14:53:55', '2024-06-26 14:53:59'),
(2, 2, 2, 2, 1600.00, '2024-06-26 15:01:23', '2024-06-26 15:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `cecinas`
--

CREATE TABLE `cecinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `peso` int(11) NOT NULL DEFAULT 250,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cecinas`
--

INSERT INTO `cecinas` (`id`, `nombre`, `marca`, `precio`, `imagen`, `peso`, `created_at`, `updated_at`) VALUES
(1, 'Jamón Cocido', 'San Jorge', 3500, 'jamon_cocido.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(2, 'Jamón de Pavo', 'San Jorge', 3800, 'jamon_pavo.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(3, 'Mortadela', 'Winter', 1800, 'mortadela.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(4, 'Salame', 'Winter', 4200, 'salame.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(5, 'Salchichón', 'Winter', 3500, 'salchichon.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(6, 'Chorizo', 'San Jorge', 3000, 'chorizo.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(7, 'Longaniza', 'Cecinas Llanquihue', 2800, 'longaniza.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(8, 'Vienesas', 'San Jorge', 2500, 'vienesas.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(9, 'Paté', 'Winter', 1500, 'pate.jpg', 150, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(10, 'Lomo Canadiense', 'Cecinas Llanquihue', 4500, 'lomo_canadiense.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(11, 'Cecina Ahumada', 'Cecinas Llanquihue', 4000, 'cecina_ahumada.jpg', 250, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(12, 'Costillar Ahumado', 'Cecinas Llanquihue', 5000, 'costillar_ahumado.jpg', 500, '2024-06-26 14:12:49', '2024-06-26 14:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `galletas`
--

CREATE TABLE `galletas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galletas`
--

INSERT INTO `galletas` (`id`, `nombre`, `marca`, `precio`, `peso`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Galletas Trencito', 'Nestlé', 1500, '180', 'Galleta_tren.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(2, 'Galletas Tritón', 'Costa', 1200, '126', 'Galleta_triton.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(3, 'Galletas Frac', 'Costa', 1300, '150', 'Frac.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(4, 'Galletas Cerealitas', 'McKay', 1600, '170', 'cerealitas.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(5, 'Galletas Macay', 'McKay', 1100, '200', 'Mcay.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(6, 'Galletas Vizzio', 'Costa', 1800, '165', 'vizzio.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(7, 'Galletas Selz', 'McKay', 1200, '170', 'selz.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(8, 'Galletas Malla', 'McKay', 1400, '180', 'malla.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(9, 'Galletas Óreo', 'Nabisco', 1500, '154', 'oreo.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(10, 'Galletas Mora Mora', 'Costa', 1300, '160', 'mora_mora.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(11, 'Galletas Soda', 'McKay', 1100, '170', 'soda.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(12, 'Galletas Frutigran', 'Nestlé', 1600, '190', 'frutigran.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
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
-- Table structure for table `lacteos`
--

CREATE TABLE `lacteos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lacteos`
--

INSERT INTO `lacteos` (`id`, `nombre`, `marca`, `precio`, `peso`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Leche Entera', 'Colun', 1200, '1000', 'Leche_Colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(2, 'Leche Entera', 'Soprole', 1250, '1000', 'Leche_Soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(3, 'Leche Entera', 'Loncoleche', 1150, '1000', 'Leche_Lonco.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(4, 'Leche Descremada', 'Colun', 1200, '1000', 'leche_descremada_colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(5, 'Leche Descremada', 'Soprole', 1250, '1000', 'leche_descremada_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(6, 'Leche Descremada', 'Loncoleche', 1150, '1000', 'leche_descremada_loncoleche.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(7, 'Leche Semidescremada', 'Colun', 1200, '1000', 'leche_semidescremada_colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(8, 'Leche Semidescremada', 'Soprole', 1250, '1000', 'leche_semidescremada_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(9, 'Leche Semidescremada', 'Loncoleche', 1150, '1000', 'leche_semidescremada_loncoleche.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(10, 'Yogur Natural', 'Colun', 500, '125', 'yogur_natural_colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(11, 'Yogur Frutilla', 'Soprole', 550, '125', 'yogur_frutilla_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(12, 'Yogur Vainilla', 'Nestlé', 600, '125', 'yogur_vainilla_nestle.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(13, 'Queso Fresco', 'Colun', 5500, '1000', 'queso_fresco_colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(14, 'Queso Mantecoso', 'Soprole', 6000, '1000', 'queso_mantecoso_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(15, 'Queso Gauda', 'Colun', 7500, '1000', 'queso_gauda_colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(16, 'Queso Chanco', 'Soprole', 7300, '1000', 'queso_chanco_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(17, 'Mantequilla', 'Colun', 1800, '250', 'mantequilla_colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(18, 'Mantequilla', 'Soprole', 1900, '250', 'mantequilla_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(19, 'Crema', 'Colun', 900, '200', 'crema_colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(20, 'Crema', 'Soprole', 950, '200', 'crema_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(21, 'Quesillo', 'Colun', 1600, '250', 'quesillo_colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(22, 'Quesillo', 'Soprole', 1700, '250', 'quesillo_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(23, 'Leche Condensada', 'Nestlé', 1200, '397', 'leche_condensada_nestle.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(24, 'Leche Evaporada', 'Nestlé', 1100, '410', 'leche_evaporada_nestle.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(25, 'Queso Rallado', 'Soprole', 1500, '100', 'queso_rallado_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(26, 'Postre Flan', 'Soprole', 600, '125', 'flan_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(27, 'Postre Manjarate', 'Soprole', 700, '125', 'manjarate_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(28, 'Postre Leche Asada', 'Soprole', 650, '125', 'leche_asada_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(29, 'Manjar', 'Colun', 2000, '500', 'manjar_colun.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(30, 'Manjar', 'Soprole', 2100, '500', 'manjar_soprole.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2024_06_25_030824_create_users_table', 2),
(12, '2024_06_26_001021_create_cecinas_table', 3),
(125, '0001_01_01_000000_create_users_table', 4),
(126, '0001_01_01_000001_create_cache_table', 4),
(127, '0001_01_01_000002_create_jobs_table', 4),
(234, '2024_06_25_021642_create_products_table', 5),
(235, '2024_06_26_001016_create_bebidas_table', 5),
(236, '2024_06_26_001025_create_lacteos_table', 5),
(237, '2024_06_26_001030_create_otros_table', 5),
(238, '2024_06_26_001257_create_galletas_table', 5),
(239, '2024_06_26_045231_create_cecinas_table', 5),
(240, '2024_06_26_053422_create_panaderia_table', 5),
(241, '2024_06_26_064857_create_usuarios_table', 5),
(242, '2024_06_26_072906_create_productos_table', 5),
(243, '2024_06_26_073312_create_ofertas_table', 5),
(244, '2024_06_26_081918_create_orders_table', 5),
(245, '2024_06_26_082610_create_order_items_table', 5),
(246, '2024_06_26_100839_create_carritos_table', 5),
(247, '2024_06_26_100840_create_carrito_items_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ofertas`
--

CREATE TABLE `ofertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ofertas`
--

INSERT INTO `ofertas` (`id`, `nombre`, `precio`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Descuento 10% en Bebidas', 900.00, 'descuento_bebidas.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(2, '2x1 en Galletas', 1500.00, '2x1_galletas.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otros`
--

CREATE TABLE `otros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) DEFAULT NULL,
  `unidad` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otros`
--

INSERT INTO `otros` (`id`, `nombre`, `categoria`, `marca`, `precio`, `peso`, `unidad`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Pizza Congelada', 'Productos Congelados', 'San Jorge', 4500, 400, 'g', 'pizza.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(2, 'Empanadas Congeladas', 'Productos Congelados', 'La Preferida', 3800, 4, 'unidades', 'Empanadas.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(3, 'Verduras Congeladas (Mix de verduras)', 'Productos Congelados', 'Frutos del Maipo', 2500, 1000, 'g', 'Verduras.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(4, 'Helado (Bote)', 'Productos Congelados', 'Savory', 3000, 1000, 'ml', 'helado.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(5, 'Papas Fritas Congeladas', 'Productos Congelados', 'McCain', 2800, 1000, 'g', 'papas_fritas.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(6, 'Jabón (barra)', 'Productos de Higiene Personal', 'Dove', 1200, 90, 'g', 'jabon.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(7, 'Shampoo', 'Productos de Higiene Personal', 'Pantene', 4000, 400, 'ml', 'shampoo.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(8, 'Pasta de Dientes', 'Productos de Higiene Personal', 'Colgate', 2500, 90, 'g', 'pasta_dientes.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(9, 'Desodorante', 'Productos de Higiene Personal', 'Rexona', 2200, 150, 'ml', 'desodorante.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(10, 'Papel Higiénico', 'Productos de Higiene Personal', 'Elite', 3500, 12, 'rollos', 'papel_higienico.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(11, 'Lápices', 'Productos de Papelería', 'Bic', 1000, 12, 'unidades', 'lapices.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(12, 'Cuadernos', 'Productos de Papelería', 'Torre', 2500, 100, 'hojas', 'cuadernos.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(13, 'Papel Higiénico (para oficina)', 'Productos de Papelería', 'Scott', 1200, 4, 'rollos', 'papel_higienico_oficina.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(14, 'Cinta Adhesiva', 'Productos de Papelería', 'Scotch', 1500, 1, 'rollo', 'cinta_adhesiva.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(15, 'Gomas de Borrar', 'Productos de Papelería', 'Milan', 500, 1, 'unidad', 'gomas_borrar.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(16, 'Alimento para Perros', 'Productos para Mascotas', 'Pedigree', 18000, 10000, 'g', 'alimento_perros.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(17, 'Alimento para Gatos', 'Productos para Mascotas', 'Whiskas', 16000, 10000, 'g', 'alimento_gatos.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(18, 'Snacks para Perros', 'Productos para Mascotas', 'Pedigree Dentastix', 3500, 7, 'unidades', 'snacks_perros.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(19, 'Snacks para Gatos', 'Productos para Mascotas', 'Whiskas Temptations', 2500, 85, 'g', 'snacks_gatos.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(20, 'Arena para Gatos', 'Productos para Mascotas', 'Sanicat', 5000, 5000, 'g', 'arena_gatos.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `panaderia`
--

CREATE TABLE `panaderia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panaderia`
--

INSERT INTO `panaderia` (`id`, `nombre`, `marca`, `precio`, `peso`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Marraqueta', '', 300, 100, 'marraqueta.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(2, 'Hallulla', '', 250, 100, 'hallulla.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(3, 'Pan Amasado', '', 350, 100, 'Amasado.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(4, 'Pan de Molde', '', 1200, 500, 'Molde.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(5, 'Pan Integral', '', 1500, 500, 'pan_integral.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(6, 'Dobladas', '', 500, 100, 'dobladas.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(7, 'Churrascas', '', 400, 100, 'churrascas.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(8, 'Berlines', '', 500, 100, 'berlines.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(9, 'Chilenitos', '', 700, 100, 'chilenitos.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(10, 'Empanadas de Pino', '', 1500, 200, 'empanadas_pino.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(11, 'Empanadas de Queso', '', 1200, 200, 'empanadas_queso.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(12, 'Cuernitos', '', 400, 100, 'cuernitos.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(13, 'Queques', '', 2000, 300, 'queques.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(14, 'Kuchen', '', 3500, 400, 'kuchen.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(15, 'Tartaletas', '', 1000, 100, 'tartaletas.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(16, 'Pan de Pascua', '', 3000, 500, 'pan_de_pascua.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(17, 'Coliza', '', 600, 100, 'coliza.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(18, 'Bollo Dulce', '', 300, 100, 'bollo_dulce.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(19, 'Torta de Milhojas', '', 15000, 1000, 'torta_milhojas.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(20, 'Brazo de Reina', '', 6000, 500, 'brazo_reina.jpg', '2024-06-26 14:12:49', '2024-06-26 14:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen`, `destacado`, `created_at`, `updated_at`) VALUES
(1, 'Leche Entera Colun', 1200.00, 'leche_entera_colun.jpg', 1, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(2, 'Yogur Natural Colun', 800.00, 'yogur_natural_colun.jpg', 1, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(3, 'Coca-Cola', 1500.00, 'coca_cola.jpg', 1, '2024-06-26 14:12:56', '2024-06-26 14:12:56'),
(4, 'Pepsi', 1400.00, 'pepsi.jpg', 1, '2024-06-26 14:12:56', '2024-06-26 14:12:56'),
(5, 'Leche Entera Colun', 1200.00, 'leche_entera_colun.jpg', 1, '2024-06-26 14:12:56', '2024-06-26 14:12:56'),
(6, 'Yogur Natural Colun', 800.00, 'yogur_natural_colun.jpg', 1, '2024-06-26 14:12:56', '2024-06-26 14:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dUJqN0XJrzc0M9nTCxTbQnJtumeqBdCk8sKU2Shg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieE1jQm1UUVJVbGlyUjZadE5QNmltbVVMcHdHd1R0Zk1ieG41d0FlaSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2NlY2luYXMiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Byb2ZpbGVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjI6e2k6MTthOjQ6e3M6Njoibm9tYnJlIjtzOjE4OiJMZWNoZSBFbnRlcmEgQ29sdW4iO3M6NjoicHJlY2lvIjtzOjc6IjEyMDAuMDAiO3M6ODoiY2FudGlkYWQiO2k6MztzOjg6InN1YnRvdGFsIjtkOjM2MDA7fWk6MjthOjQ6e3M6Njoibm9tYnJlIjtzOjE5OiJZb2d1ciBOYXR1cmFsIENvbHVuIjtzOjY6InByZWNpbyI7czo2OiI4MDAuMDAiO3M6ODoiY2FudGlkYWQiO2k6MztzOjg6InN1YnRvdGFsIjtkOjI0MDA7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1719400817);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'admin@example.com', NULL, 'password', 'admin', NULL, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(2, 'Normal User', 'user@example.com', NULL, 'password', 'user', NULL, '2024-06-26 14:12:49', '2024-06-26 14:12:49'),
(3, 'matias', 'matias@usm.cl', NULL, '123456', 'user', NULL, '2024-06-26 14:58:49', '2024-06-26 14:58:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carritos_user_id_foreign` (`user_id`);

--
-- Indexes for table `carrito_items`
--
ALTER TABLE `carrito_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrito_items_carrito_id_foreign` (`carrito_id`),
  ADD KEY `carrito_items_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `cecinas`
--
ALTER TABLE `cecinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galletas`
--
ALTER TABLE `galletas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lacteos`
--
ALTER TABLE `lacteos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_producto_id_foreign` (`producto_id`);

--
-- Indexes for table `otros`
--
ALTER TABLE `otros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panaderia`
--
ALTER TABLE `panaderia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carrito_items`
--
ALTER TABLE `carrito_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cecinas`
--
ALTER TABLE `cecinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galletas`
--
ALTER TABLE `galletas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lacteos`
--
ALTER TABLE `lacteos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otros`
--
ALTER TABLE `otros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `panaderia`
--
ALTER TABLE `panaderia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carritos`
--
ALTER TABLE `carritos`
  ADD CONSTRAINT `carritos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carrito_items`
--
ALTER TABLE `carrito_items`
  ADD CONSTRAINT `carrito_items_carrito_id_foreign` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carrito_items_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
