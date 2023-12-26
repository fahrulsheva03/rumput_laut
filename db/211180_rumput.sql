-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2023 at 07:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `211180_rumput`
--

-- --------------------------------------------------------

--
-- Table structure for table `211180_checkout`
--

CREATE TABLE `211180_checkout` (
  `211180_id_checkout` int(11) NOT NULL,
  `211180_id_pengguna` int(11) DEFAULT NULL,
  `211180_id_produk` int(11) DEFAULT NULL,
  `211180_jumlah` int(11) DEFAULT NULL,
  `211180_harga_satuan` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `211180_checkout`
--

INSERT INTO `211180_checkout` (`211180_id_checkout`, `211180_id_pengguna`, `211180_id_produk`, `211180_jumlah`, `211180_harga_satuan`) VALUES
(4, 2, 8, 20190000, NULL),
(5, 2, 9, 20190000, NULL),
(6, 2, 10, 20190000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `211180_pelanggan`
--

CREATE TABLE `211180_pelanggan` (
  `211180_id_pelanggan` int(11) NOT NULL,
  `211180_nama_pelanggan` varchar(255) NOT NULL,
  `211180_alamat` text DEFAULT NULL,
  `211180_email` varchar(255) NOT NULL,
  `211180_password` varchar(255) NOT NULL,
  `211180_nomor_telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `211180_pelanggan`
--

INSERT INTO `211180_pelanggan` (`211180_id_pelanggan`, `211180_nama_pelanggan`, `211180_alamat`, `211180_email`, `211180_password`, `211180_nomor_telepon`) VALUES
(2, 'Fahrul', 'Makassar', 'fahrul@gmail.com', '123', '077312');

-- --------------------------------------------------------

--
-- Table structure for table `211180_pesanan`
--

CREATE TABLE `211180_pesanan` (
  `211180_id_pesanan` int(11) NOT NULL,
  `211180_id_pelanggan` int(11) DEFAULT NULL,
  `211180_tanggal_pesanan` date DEFAULT NULL,
  `211180_total_harga` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `211180_produk`
--

CREATE TABLE `211180_produk` (
  `211180_id_produk` int(11) NOT NULL,
  `211180_nama_produk` varchar(255) NOT NULL,
  `211180_deskripsi` text DEFAULT NULL,
  `211180_harga` decimal(10,2) NOT NULL,
  `211180_stok` int(11) NOT NULL,
  `211180_gambar` varchar(255) DEFAULT NULL,
  `211180_username` varchar(100) NOT NULL,
  `211180_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `211180_produk`
--

INSERT INTO `211180_produk` (`211180_id_produk`, `211180_nama_produk`, `211180_deskripsi`, `211180_harga`, `211180_stok`, `211180_gambar`, `211180_username`, `211180_password`) VALUES
(8, 'Produk 1', 'Deskripsii 1', 90000.00, 7, '6551afd74fdb5.jpg', '', ''),
(9, 'Produk 2', 'Deskripsii 2', 100000.00, 7, '6551b0d3c6668.jpg', '', ''),
(10, 'Produk 3', 'Deskripsi 3', 20000000.00, 8, '6551b0edcb285.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `211180_checkout`
--
ALTER TABLE `211180_checkout`
  ADD PRIMARY KEY (`211180_id_checkout`),
  ADD KEY `211180_id_produk` (`211180_id_produk`),
  ADD KEY `211180_id_pengguna` (`211180_id_pengguna`);

--
-- Indexes for table `211180_pelanggan`
--
ALTER TABLE `211180_pelanggan`
  ADD PRIMARY KEY (`211180_id_pelanggan`);

--
-- Indexes for table `211180_pesanan`
--
ALTER TABLE `211180_pesanan`
  ADD PRIMARY KEY (`211180_id_pesanan`),
  ADD KEY `211180_id_pelanggan` (`211180_id_pelanggan`);

--
-- Indexes for table `211180_produk`
--
ALTER TABLE `211180_produk`
  ADD PRIMARY KEY (`211180_id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `211180_checkout`
--
ALTER TABLE `211180_checkout`
  MODIFY `211180_id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `211180_pelanggan`
--
ALTER TABLE `211180_pelanggan`
  MODIFY `211180_id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `211180_pesanan`
--
ALTER TABLE `211180_pesanan`
  MODIFY `211180_id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `211180_produk`
--
ALTER TABLE `211180_produk`
  MODIFY `211180_id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `211180_checkout`
--
ALTER TABLE `211180_checkout`
  ADD CONSTRAINT `211180_checkout_ibfk_2` FOREIGN KEY (`211180_id_produk`) REFERENCES `211180_produk` (`211180_id_produk`),
  ADD CONSTRAINT `211180_checkout_ibfk_3` FOREIGN KEY (`211180_id_pengguna`) REFERENCES `211180_pelanggan` (`211180_id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `211180_pesanan`
--
ALTER TABLE `211180_pesanan`
  ADD CONSTRAINT `211180_pesanan_ibfk_1` FOREIGN KEY (`211180_id_pelanggan`) REFERENCES `211180_pelanggan` (`211180_id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
