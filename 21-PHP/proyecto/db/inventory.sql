-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 02:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `seller_id` bigint(20) NOT NULL,
  `stock` float NOT NULL,
  `type_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `seller_id`, `stock`, `type_id`, `created_at`, `updated_at`) VALUES
(11, 'Monitor', 'Monitors', 3, 10, 2, '2023-05-28 14:21:26', '2023-05-30 23:43:44'),
(12, 'ssd', 'Storage', 4, 10, 1, '2023-05-28 18:30:16', '2023-05-28 18:30:16'),
(13, 'Mouse', 'Mice', 4, 10, 1, '2023-05-28 18:39:15', '2023-05-28 18:39:15'),
(14, 'Watch', 'Watches', 3, 20, 1, '2023-05-28 18:39:31', '2023-05-28 18:39:31'),
(15, 'T-shirt', 'Tees', 4, 10, 1, '2023-05-28 18:40:00', '2023-05-28 18:40:00'),
(16, 'Iphone', 'Phones', 3, 1, 1, '2023-05-31 11:53:35', '2023-06-04 21:45:40'),
(17, 'Desktop memory DDR3', 'RAM&#039;S', 3, 10, 1, '2023-06-04 21:48:57', '2023-06-04 21:48:57'),
(18, 'Speaker', 'Speakers', 4, 7, 1, '2023-06-04 22:06:05', '2023-06-04 22:06:05'),
(19, 'AirPods', 'AirPods', 4, 100, 1, '2023-06-04 22:07:54', '2023-06-04 22:07:54'),
(20, 'Printer', 'Printers', 5, 1, 1, '2023-06-04 22:10:15', '2023-06-04 22:10:15'),
(21, 'Camera', 'Cameras', 4, 1, 1, '2023-06-04 22:10:37', '2023-06-04 22:10:37'),
(22, 'Microphone', 'Microphones', 5, 11, 1, '2023-06-04 22:17:41', '2023-06-04 22:17:41'),
(23, 'Test', 'test', 4, 10, 2, '2023-06-04 23:26:47', '2023-06-04 23:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` bigint(20) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `type`) VALUES
(1, 'Physical'),
(2, 'Digital');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `lastname`, `age`) VALUES
(3, 'Yohan', 'Angulo', 24),
(4, 'Erin', 'Angulo', 38),
(5, 'Jose', 'Angulo', 64);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` bigint(20) NOT NULL DEFAULT 2,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `username`, `password`, `email`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@system.com', 1, '2023-05-17 21:18:56', '2023-06-02 09:39:32'),
(4, 'Jose', 'Angulo', 'JoseA', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'joseangulo@gmail.com', 1, '2023-06-03 15:01:00', '2023-06-04 23:27:42'),
(5, 'Yohan', 'Angulo', 'yohan', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'anguloyohan@gmail.com', 2, '2023-06-04 02:40:39', '2023-06-04 11:06:00'),
(6, 'Juanito', 'Perez', 'juanito', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'juanito@gmail.com', 2, '2023-06-04 02:44:02', '2023-06-04 02:44:02'),
(7, 'Maria', 'Silva', 'maria', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'maria@gmail.com', 2, '2023-06-04 02:49:08', '2023-06-04 02:49:08'),
(8, 'Lucas', 'Martinez', 'LucasM', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'lucas.martinez@gmail.com', 2, '2023-06-04 22:35:02', '2023-06-04 22:35:02'),
(9, 'Sofia', 'Rodriguez', 'SofiaR', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'sofia.rodriguez@gmail.com', 2, '2023-06-04 22:36:15', '2023-06-04 22:36:15'),
(10, 'Alejandro', 'Lopez', 'AlejandroL', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'alejandro.lopez@gmail.com', 2, '2023-06-04 22:36:42', '2023-06-04 22:36:42'),
(11, 'Valentina', 'Gomez', 'ValentinaG', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'valentina.gomez@gmail.com', 2, '2023-06-04 22:37:22', '2023-06-04 22:37:22'),
(12, 'Mateo', 'Torres', 'MateoT', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'mateo.torres@gmail.com', 2, '2023-06-04 22:37:47', '2023-06-04 22:37:47'),
(13, 'Carolina', 'Vargas', 'CarolinaV', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'carolina.vargas@gmail.com', 2, '2023-06-04 22:39:51', '2023-06-04 22:39:51'),
(14, 'Andres', 'Silva', 'AndresS', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'andres.silva@gmail.com', 2, '2023-06-04 22:40:36', '2023-06-04 22:40:36'),
(15, 'Isabella', 'Morales', 'IsabellaM', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'isabella.morales@gmail.com', 2, '2023-06-04 22:41:20', '2023-06-04 22:41:20'),
(16, 'Gabriel', 'Pineda', 'GabrielP', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'gabriel.pineda@gmail.com', 2, '2023-06-04 22:41:59', '2023-06-04 22:41:59'),
(17, 'Camila', 'Ortega', 'CamilaO', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'camila.ortega@gmail.com', 2, '2023-06-04 22:42:45', '2023-06-04 22:42:45'),
(18, 'yohan', 'Angulo', 'yohan2', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'anguloyohan98@gmail.com', 2, '2023-06-04 23:20:26', '2023-06-04 23:20:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
