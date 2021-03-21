-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2021 at 01:18 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mudos`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_04_08_225445_create_tbl_admin_table', 1),
(2, '2020_04_09_015213_create_tbl_category_table', 1),
(3, '2020_04_09_142043_create_tbl_manufacture_table', 1),
(4, '2020_04_09_231319_create_tbl_products_table', 1),
(5, '2020_04_12_000112_create_tbl_slider_table', 1),
(6, '2020_04_14_030514_create_tbl_customer_table', 1),
(7, '2020_04_14_121259_create_tbl_shipping_table', 1),
(8, '2020_04_15_130617_create_tbl_payment_table', 1),
(9, '2020_04_15_131029_create_tbl_order_table', 1),
(10, '2020_04_15_131103_create_tbl_order_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `prescription_id` int(30) NOT NULL AUTO_INCREMENT,
  `prescription_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`prescription_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `prescription_image`, `product_name`, `status`) VALUES
(1, 'images/c25jz2uapHfGsKlUiNXY,jpg', 'cipro', 'pending'),
(5, 'images/6guWnJiwovion6FT40l8,jpg', 'cipro', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'mubarakolagoke@gmail.com', '6db1d254edf47cfe2dc24556fa57a93f', 'Olagoke Mubarak', '0703699008', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'anti maleria', 'the drug for maleria', 1, NULL, NULL),
(2, 'antibiotics', 'Antibiotic drugs', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `password`, `mobile_number`, `created_at`, `updated_at`) VALUES
(1, 'Olagoke Mubarak', 'mubarakolagoke@gmail.com', '6db1d254edf47cfe2dc24556fa57a93f', '07036998003', NULL, NULL),
(2, 'Olagoke Mubarak', 'mubarakolagoke@gmail.com', '6db1d254edf47cfe2dc24556fa57a93f', '07036998003', NULL, NULL),
(3, 'Olagoke Mubarak', 'mubarakolagoke@gmail.com', '6db1d254edf47cfe2dc24556fa57a93f', '07036998003', NULL, NULL),
(6, 'Itunu Taiwo', 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '07036998003', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

DROP TABLE IF EXISTS `tbl_manufacture`;
CREATE TABLE IF NOT EXISTS `tbl_manufacture` (
  `manufacture_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `manufacture_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`manufacture_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Nasco', 'they do deugs', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

DROP TABLE IF EXISTS `tbl_order_details`;
CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_total` int(20) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `name`, `address`, `phone`, `email`, `order_id`, `order_details`, `order_total`, `status`) VALUES
(1, 'Olagoke Mubarak', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 123445, 'null', 0, 'completed'),
(3, 'Olagoke Mubarak', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 748328563, 'null', 0, 'completed'),
(4, 'Olagoke Mubarak', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 748329588, 'null', 0, 'awaiting-shipping'),
(5, 'Olagoke Mubarak', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 748331153, 'null', 0, 'paid'),
(6, 'Olagoke Mubarak', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 748331415, 'null', 0, 'awaiting-shipping'),
(7, 'Olagoke Mubarak', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 748331415, 'null', 0, 'paid'),
(8, 'Olagoke Mubarak', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 748331415, 'null', 0, 'paid'),
(9, 'Olagoke Mubarak', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 749125143, 'null', 0, 'paid'),
(10, 'Olagoke Mubarak', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 776139002, 'null', 0, 'pending'),
(13, 'Olagoke Olagoke', '29 eleyele', '07036998003', 'mubarakolagoke@gmail.com', 823166975, '{\"1\": {\"id\": 1, \"name\": \"Cloroquin\", \"price\": 1200, \"quantity\": \"1\", \"attributes\": [], \"conditions\": [], \"associatedModel\": {\"sold\": 9, \"created_at\": null, \"product_id\": 1, \"updated_at\": null, \"category_id\": 2, \"prescription\": \"false\", \"product_name\": \"Cloroquin\", \"product_size\": \"12g\", \"product_image\": \"images/dCECF2laPXJiqt3vHZpK,jpg\", \"product_price\": 1200, \"manufacture_id\": 1, \"publication_status\": 1, \"product_shipping_price\": 2000, \"product_long_description\": \"The drug is active for maleria\", \"product_short_description\": \"The drug is active for maleria\"}}, \"2\": {\"id\": 2, \"name\": \"Ceptrin\", \"price\": 500, \"quantity\": 2, \"attributes\": [], \"conditions\": [], \"associatedModel\": {\"sold\": 25, \"created_at\": null, \"product_id\": 2, \"updated_at\": null, \"category_id\": 2, \"prescription\": \"false\", \"product_name\": \"Ceptrin\", \"product_size\": \"3g\", \"product_image\": \"images/Kcyzw2o2TNpDWCCpmGfS,jpg\", \"product_price\": 500, \"manufacture_id\": 1, \"publication_status\": 1, \"product_shipping_price\": 700, \"product_long_description\": \"Lorem ipsum dolor sit amet consectetur adipisicing elit\", \"product_short_description\": \"Lorem ipsum dolor sit amet consectetur\"}}}', 1700, 'pending'),
(14, 'Olagoke Olagoke', 'I\'m testing this work with this address', '07036998003', 'mubarakolagoke@gmail.com', 824346546, '{\"1\":{\"id\":1,\"name\":\"Cloroquin\",\"price\":1200,\"quantity\":\"1\",\"attributes\":[],\"conditions\":[],\"associatedModel\":{\"product_id\":1,\"product_name\":\"Cloroquin\",\"category_id\":2,\"manufacture_id\":1,\"product_short_description\":\"The drug is active for maleria\",\"product_long_description\":\"The drug is active for maleria\",\"product_price\":1200,\"product_image\":\"images\\/dCECF2laPXJiqt3vHZpK,jpg\",\"product_size\":\"12g\",\"product_shipping_price\":2000,\"publication_status\":1,\"prescription\":\"false\",\"created_at\":null,\"updated_at\":null,\"sold\":21}}}', 1200, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE IF NOT EXISTS `tbl_products` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `product_short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_shipping_price` double(8,2) NOT NULL,
  `publication_status` int(11) NOT NULL,
  `prescription` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sold` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `category_id`, `manufacture_id`, `product_short_description`, `product_long_description`, `product_price`, `product_image`, `product_size`, `product_shipping_price`, `publication_status`, `prescription`, `created_at`, `updated_at`, `sold`) VALUES
(1, 'Cloroquin', 2, 1, 'The drug is active for maleria', 'The drug is active for maleria', 1200.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '12g', 2000.00, 1, 'false', NULL, NULL, 22),
(2, 'Ceptrin', 2, 1, 'Lorem ipsum dolor sit amet consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 500.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '3g', 700.00, 1, 'false', NULL, NULL, 29),
(3, 'cipro', 2, 1, 'this is an antibiotic', 'the antibioctic is useful for treatment of all kind of bacterial infections', 2000.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '20g', 1400.00, 1, 'true', NULL, NULL, 0),
(4, 'Combisute', 2, 1, 'The drug is active for maleria', 'The drug is active for maleria', 1200.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '12g', 2000.00, 1, 'false', NULL, NULL, 22),
(5, 'Azymthrocim', 2, 1, 'Lorem ipsum dolor sit amet consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 500.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '3g', 700.00, 1, 'false', NULL, NULL, 29),
(6, 'B-complex', 2, 1, 'this is an antibiotic', 'the antibioctic is useful for treatment of all kind of bacterial infections', 2000.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '20g', 1400.00, 1, 'true', NULL, NULL, 0),
(7, 'Tramol', 2, 1, 'The drug is active for maleria', 'The drug is active for maleria', 1200.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '12g', 2000.00, 1, 'false', NULL, NULL, 22),
(8, 'codine', 2, 1, 'Lorem ipsum dolor sit amet consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 500.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '3g', 700.00, 1, 'false', NULL, NULL, 29),
(9, 'paracetamol', 2, 1, 'this is an antibiotic', 'the antibioctic is useful for treatment of all kind of bacterial infections', 2000.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '20g', 1400.00, 1, 'true', NULL, NULL, 0),
(10, 'Codolin', 2, 1, 'The drug is active for maleria', 'The drug is active for maleria', 1200.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '12g', 2000.00, 1, 'false', NULL, NULL, 22),
(11, 'Aspirine', 2, 1, 'Lorem ipsum dolor sit amet consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 500.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '3g', 700.00, 1, 'false', NULL, NULL, 29),
(12, 'B-complex', 2, 1, 'this is an antibiotic', 'the antibioctic is useful for treatment of all kind of bacterial infections', 2000.00, 'images/ewou7exRIx6SsAMe0oaG,jpg', '20g', 1400.00, 1, 'true', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

DROP TABLE IF EXISTS `tbl_shipping`;
CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_email`, `shipping_first_name`, `shipping_last_name`, `shipping_address`, `shipping_mobile_number`, `shipping_city`, `created_at`, `updated_at`) VALUES
(1, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(2, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(3, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(4, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(5, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(6, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(7, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(8, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(9, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(10, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(11, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(12, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(13, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(14, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(15, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(16, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(17, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(18, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(19, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(20, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(21, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(22, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(23, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(24, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(25, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(26, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(27, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(28, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(29, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(30, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(31, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(32, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(33, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(34, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(35, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(36, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(37, 'mubarakolagoke@gmail.com', 'olagoke', 'mubarak', '23 eleyel', 'o7o36990880', 'sdfjnioskjkijb', NULL, NULL),
(38, 'mubarakolagoke@gmail.com', 'olagoke', 'mubarak', '23 eleyel', 'o7o36990880', 'sdfjnioskjkijb', NULL, NULL),
(39, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(40, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(41, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(42, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(43, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(44, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(45, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(46, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(47, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(48, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(49, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(50, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(51, 'mubarakolagoke@gmail.com', 'Olagoke', 'Olagoke', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(52, 'mubarakolagoke@gmail.com', 'Olagoke', 'Olagoke', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(53, 'mubarakolagoke@gmail.com', 'Olagoke', 'Olagoke', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(54, 'mubarakolagoke@gmail.com', 'Olagoke', 'Olagoke', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(55, 'mubarakolagoke@gmail.com', 'Olagoke', 'Olagoke', '29 eleyele', '07036998003', 'Ile-ife', NULL, NULL),
(56, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(57, 'mubarakolagoke@gmail.com', 'Olagoke', 'Olagoke', 'I\'m testing this work with this address', '07036998003', 'Ile-ife', NULL, NULL),
(58, 'mubarakolagoke@gmail.com', 'Olagoke', 'Mubarak', '29 unoilbikj', '9002033929', 'ife', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp_data`
--

DROP TABLE IF EXISTS `tbl_temp_data`;
CREATE TABLE IF NOT EXISTS `tbl_temp_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `sub_total` varchar(20) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `cart` longtext NOT NULL,
  `shipping_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temp_data`
--

INSERT INTO `tbl_temp_data` (`id`, `customer_id`, `sub_total`, `total_price`, `cart`, `shipping_id`) VALUES
(2, 1, '1000', '1700', '{\"8\":{\"id\":8,\"name\":\"codine\",\"price\":500,\"quantity\":2,\"attributes\":[],\"conditions\":[],\"associatedModel\":{\"product_id\":8,\"product_name\":\"codine\",\"category_id\":2,\"manufacture_id\":1,\"product_short_description\":\"Lorem ipsum dolor sit amet consectetur\",\"product_long_description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit\",\"product_price\":500,\"product_image\":\"images\\/Kcyzw2o2TNpDWCCpmGfS,jpg\",\"product_size\":\"3g\",\"product_shipping_price\":700,\"publication_status\":1,\"prescription\":\"false\",\"created_at\":null,\"updated_at\":null,\"sold\":29}}}', 58),
(4, 4, '500', '700', '{\"2\":{\"id\":2,\"name\":\"Ceptrin\",\"price\":500,\"quantity\":\"1\",\"attributes\":[],\"conditions\":[],\"associatedModel\":{\"product_id\":2,\"product_name\":\"Ceptrin\",\"category_id\":2,\"manufacture_id\":1,\"product_short_description\":\"Lorem ipsum dolor sit amet consectetur\",\"product_long_description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit\",\"product_price\":500,\"product_image\":\"images\\/Kcyzw2o2TNpDWCCpmGfS,jpg\",\"product_size\":\"3g\",\"product_shipping_price\":700,\"publication_status\":1,\"prescription\":\"false\",\"created_at\":null,\"updated_at\":null,\"sold\":29}}}', NULL),
(3, 3, '1200', '3700', '{\"1\": {\"id\": 1, \"name\": \"Cloroquin\", \"price\": 1200, \"quantity\": \"1\", \"attributes\": [], \"conditions\": [], \"associatedModel\": {\"sold\": 21, \"created_at\": null, \"product_id\": 1, \"updated_at\": null, \"category_id\": 2, \"prescription\": \"false\", \"product_name\": \"Cloroquin\", \"product_size\": \"12g\", \"product_image\": \"images/dCECF2laPXJiqt3vHZpK,jpg\", \"product_price\": 1200, \"manufacture_id\": 1, \"publication_status\": 1, \"product_shipping_price\": 2000, \"product_long_description\": \"The drug is active for maleria\", \"product_short_description\": \"The drug is active for maleria\"}}}', 56),
(5, 5, '500', '700', '{\"2\":{\"id\":2,\"name\":\"Ceptrin\",\"price\":500,\"quantity\":\"1\",\"attributes\":[],\"conditions\":[],\"associatedModel\":{\"product_id\":2,\"product_name\":\"Ceptrin\",\"category_id\":2,\"manufacture_id\":1,\"product_short_description\":\"Lorem ipsum dolor sit amet consectetur\",\"product_long_description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit\",\"product_price\":500,\"product_image\":\"images\\/Kcyzw2o2TNpDWCCpmGfS,jpg\",\"product_size\":\"3g\",\"product_shipping_price\":700,\"publication_status\":1,\"prescription\":\"false\",\"created_at\":null,\"updated_at\":null,\"sold\":29}}}', NULL),
(6, 6, '500', '700', '{\"2\":{\"id\":2,\"name\":\"Ceptrin\",\"price\":500,\"quantity\":\"1\",\"attributes\":[],\"conditions\":[],\"associatedModel\":{\"product_id\":2,\"product_name\":\"Ceptrin\",\"category_id\":2,\"manufacture_id\":1,\"product_short_description\":\"Lorem ipsum dolor sit amet consectetur\",\"product_long_description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit\",\"product_price\":500,\"product_image\":\"images\\/Kcyzw2o2TNpDWCCpmGfS,jpg\",\"product_size\":\"3g\",\"product_shipping_price\":700,\"publication_status\":1,\"prescription\":\"false\",\"created_at\":null,\"updated_at\":null,\"sold\":29}}}', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
