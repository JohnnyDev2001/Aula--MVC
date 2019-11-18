-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 05:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Giannini'),
(2, 'Yamaha'),
(3, 'Hendrix'),
(4, 'Michael');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `sub` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `sub`, `name`) VALUES
(6, NULL, 'Cajon'),
(14, NULL, 'Guitarra'),
(15, 14, 'Eletrica'),
(16, 14, 'Acustica'),
(17, 15, 'Com Fio'),
(18, 15, 'Sem Fio');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `coupon_type` int(11) NOT NULL,
  `coupon_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`) VALUES
(1, 'Cor'),
(2, 'Tamanho'),
(3, 'Marca'),
(4, 'Marca');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL,
  `price_from` float NOT NULL,
  `rating` float NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `bestseller` tinyint(1) NOT NULL,
  `new_product` tinyint(1) NOT NULL,
  `options` varchar(200) DEFAULT NULL,
  `weight` float NOT NULL,
  `width` float NOT NULL,
  `heigth` float NOT NULL,
  `length` float NOT NULL,
  `diameter` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_category`, `id_brand`, `name`, `description`, `stock`, `price`, `price_from`, `rating`, `featured`, `sale`, `bestseller`, `new_product`, `options`, `weight`, `width`, `heigth`, `length`, `diameter`) VALUES
(1, 6, 1, 'Guitarra Pink Eletrica', 'Guitarra Pink com grande durabilidade e resistência ', 10, 499, 599, 0, 1, 1, 1, 0, '1,2,4', 0.8, 20, 15, 20, 15),
(2, 6, 3, 'Guitarra Blackskull Eletrica', 'Guitarra Blackskull Eletrica com grande durabilidade e resistência ', 10, 399, 999, 2, 1, 1, 1, 0, '1,2', 0.9, 20, 15, 20, 15),
(3, 6, 2, 'Piano de Cauda Grafite', 'Piano de cauda Grafite \r\ncom grande durabilidade e resistência ', 10, 599, 699, 0, 1, 0, 0, 1, '1,2', 0.85, 20, 15, 20, 15),
(4, 6, 2, 'Piano Classico  Azul Royal', 'Piano classico Azul Royal \r\ncom grande durabilidade e resistência ', 10, 3779, 900, 2, 1, 0, 0, 0, '1,4', 0.7, 20, 15, 20, 15),
(5, 6, 3, 'Bateria Skull Red Ciano', ' Bateria Skull Red Ciano com grande durabilidade e resistência', 10, 299, 499, 2, 1, 0, 0, 1, '1', 0.6, 20, 15, 20, 15),
(6, 6, 2, 'Bateria Black Row ', 'Bateria Black Row com grande durabilidade e resistência', 10, 699, 0, 4, 1, 0, 0, 0, '1,2,4', 0.85, 20, 15, 20, 15),
(7, 6, 3, 'Cajon Cadrix Sull', 'Cajon Cadrix Sull com grande durabilidade e resistência', 10, 889, 999, 5, 1, 1, 0, 0, '2,4', 0.7, 20, 15, 20, 15),
(8, 6, 1, 'Cajon Black Classico', 'Cajon Black Classico com grande durabilidade e resistência', 10, 599, 699, 5, 1, 1, 0, 1, '4', 0.8, 20, 15, 20, 15),
(9, 6, 1, 'Violao Classico Tyerri', 'Violao Classico Tyerri com grande durabilidade e resistência', 10, 560, 750, 2, 1, 0, 0, 1, '4', 0.85, 20, 15, 20, 15),
(10, 6, 2, 'Violao Eletrico Murray Dex', 'Violao Eletrico Murray Dex com grande durabilidade e resistência', 10, 750, 850, 3, 0, 1, 1, 0, '1,2', 1, 20, 15, 20, 15),
(11, 6, 1, 'Violino Outlet Silver', 'Violino Outlet Silver com grande durabilidade e resistência', 10, 950, 1200, 4, 1, 0, 1, 0, '1,2,3', 0.7, 20, 15, 20, 15);

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `url` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `id_product`, `url`) VALUES
(1, 1, '1.jpg'),
(2, 2, '2.jpg'),
(3, 3, '3.jpg'),
(4, 4, '4.jpg'),
(5, 5, '5.jpg'),
(6, 6, '6.jpg'),
(7, 7, '7.jpg'),
(8, 8, '8.jpg'),
(9, 9, '9.jpg'),
(10, 10, '10.jpg'),
(11, 11, '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products_options`
--

CREATE TABLE `products_options` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_option` int(11) NOT NULL,
  `p_value` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_options`
--

INSERT INTO `products_options` (`id`, `id_product`, `id_option`, `p_value`) VALUES
(1, 1, 1, 'Rosa'),
(2, 1, 2, '151cm'),
(3, 1, 4, 'Giannini'),
(4, 2, 1, 'Azul'),
(5, 2, 2, '140cm'),
(6, 3, 1, 'Preto'),
(7, 3, 2, '215cm'),
(8, 4, 1, 'Azul'),
(9, 4, 2, '215cm'),
(10, 5, 1, 'Vermelho'),
(11, 5, 2, '200cm'),
(12, 6, 1, 'Azul'),
(13, 6, 2, '200cm'),
(14, 7, 1, 'Preto'),
(15, 7, 2, '80cm'),
(16, 8, 1, 'Marrom'),
(17, 8, 2, '80cm'),
(18, 9, 1, 'Preto'),
(19, 9, 2, '151cm'),
(20, 10, 1, 'Marrom'),
(21, 10, 2, '140cm'),
(22, 11, 1, 'Marrom'),
(23, 11, 2, '80cm'),
(24, 3, 4, 'Yamaha'),
(25, 4, 4, 'Giannini'),
(26, 5, 4, 'Hendrix'),
(27, 6, 4, 'Yamaha'),
(28, 7, 4, 'Hendrix'),
(29, 8, 4, 'Giannini'),
(30, 9, 4, 'Giannini'),
(31, 10, 4, 'Yamaha'),
(32, 0, 0, ''),
(33, 0, 0, ''),
(34, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_coupon` int(11) DEFAULT NULL,
  `total_amount` float NOT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purchases_products`
--

CREATE TABLE `purchases_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_purchase` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_transactions`
--

CREATE TABLE `purchase_transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_purchase` int(11) NOT NULL,
  `amount` float NOT NULL,
  `transaction_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_rated` datetime NOT NULL,
  `points` int(11) NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `id_product`, `id_user`, `date_rated`, `points`, `comment`) VALUES
(1, 2, 1, '2017-01-01 00:00:00', 2, 'Produto muito legal.'),
(2, 2, 1, '2017-01-02 00:00:00', 2, 'Produto meio ruim.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'suporte@b7web.com.br', '698dc19d489c4e4db73e28a713eab07b', 'Bonieky Lacerda'),
(2, 'mjboss2001@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'João'),
(3, 'adriano@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Adriano');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `num_casa` varchar(150) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `referencia` varchar(150) DEFAULT NULL,
  `img_perfil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `id_user`, `name`, `email`, `cep`, `telefone`, `endereco`, `num_casa`, `cidade`, `estado`, `referencia`, `img_perfil`) VALUES
(1, 1, 'Bonieky Lacerda', 'suporte@b7web.com.br', '', '(12) 9999-9999', '', '21', '', '', '', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_options`
--
ALTER TABLE `products_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases_products`
--
ALTER TABLE `purchases_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_transactions`
--
ALTER TABLE `purchase_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products_options`
--
ALTER TABLE `products_options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases_products`
--
ALTER TABLE `purchases_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_transactions`
--
ALTER TABLE `purchase_transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
