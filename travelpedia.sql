-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2025 at 02:31 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelpedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `waktu_wisata` date NOT NULL,
  `hari_wisata` int NOT NULL,
  `paket_wisata` varchar(255) NOT NULL,
  `jumlah_peserta` int NOT NULL,
  `total_tagihan` int NOT NULL,
  `is_deleted` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `no_hp`, `waktu_wisata`, `hari_wisata`, `paket_wisata`, `jumlah_peserta`, `total_tagihan`, `is_deleted`, `created_at`) VALUES
(1, 'Agus', '0812345645', '2025-01-16', 2, 'Paket Silver', 1, 2500000, 0, '2025-01-04 07:09:55'),
(2, 'Aceng', '08342343', '2025-01-22', 3, 'Paket Gold', 1, 4950000, 0, '2025-01-04 07:12:26'),
(3, 'Asep', '08343243246', '2025-02-06', 2, 'Paket Silver', 4, 10000000, 1, '2025-01-08 02:02:03'),
(4, 'Asep', '084323423', '2025-01-30', 2, 'Paket Silver', 2, 5000000, 0, '2025-01-08 02:02:40'),
(5, 'Andi', '083123212414', '2025-02-20', 4, 'Paket Bronze', 2, 6000000, 0, '2025-01-08 02:03:17'),
(6, 'Anton', '081232373', '2025-03-06', 2, 'Paket Gold', 2, 6600000, 0, '2025-01-08 02:03:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
