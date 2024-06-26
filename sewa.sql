-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 05:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(2, 'Lain-lain'),
(11, 'Tenda'),
(12, 'Carrier'),
(13, 'Alat Masak'),
(14, 'Penerangan'),
(15, 'Sepatu');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `kategori_id` varchar(45) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `stok` varchar(45) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `kategori_id`, `nama_produk`, `harga`, `stok`, `deskripsi`, `gambar`, `created_on`) VALUES
(5, '11', 'Tenda Arei 2P Double Layer', '35000', '8', 'Disewakan perhari', '164cf242c7b7b5bc48e33e10cd918a59.png', '2024-06-04 05:40:51'),
(7, '11', 'Tenda Pavillo 4P Double Layer', '40000', '8', 'Disewakan per hari', '1507d7c303ec21a9be14c14f9a6315ea.png', '2024-06-04 05:46:29'),
(8, '11', 'Tenda Go Nsm 4P Double Layer', '45000', '10', 'Disewakan Per hari', '8ef33f20a5998ccecbc8f413f2e14752.png', '2024-06-04 05:48:33'),
(9, '11', 'Tenda Compass 4P Double Layer', '50000', '10', 'Disewakan Perhari', '586a180b40f4ac21521a00f4ba9cfc87.png', '2024-06-04 05:49:45'),
(10, '11', 'Tenda Go Nsm 6P Double Layer', '70000', '10', 'Disewakan Perhari', 'a37c5f9a61d3ad9407462550a7fed4e6.png', '2024-06-04 05:51:09'),
(11, '2', 'Sleeping Bag Polar', '10000', '10', 'P 175 L 60\r\nDisewakan perhari', '5c5f259249e195c155109a5eaa05365d.png', '2024-06-04 05:58:04'),
(12, '13', 'Nasting', '10000', '10', 'Disewakan Perhari', '6cb073ad278cbf7a59c4255785c94fb0.png', '2024-06-04 06:03:29'),
(13, '12', 'Eiger 45L', '20000', '10', 'Include Rain Cover\r\nDisewakan Perhari', '489ebd6e285b765ec46fc44e201438d6.png', '2024-06-04 06:04:35'),
(14, '12', 'Arei 50+5 L', '20000', '10', 'Include Rain Cover\r\nDisewakan Perhari', '105d8075bef1983197ff04f6d99ad7d6.png', '2024-06-04 06:06:21'),
(15, '12', 'Avtech 60L', '20000', '10', 'Include Rain Cover\r\nDisewakan Perhari', '3070269c8e32b20a56c3550259477c0e.png', '2024-06-04 06:07:59'),
(16, '12', 'Cotrek 65+5L', '20000', '10', 'Include Rain Cover\r\nDIsewakan Perhari', 'b51724c0e9bdad82f90913f1bc66025b.png', '2024-06-04 06:09:19'),
(17, '13', 'Kompor Kotak Kecil', '10000', '10', 'Gas Terpisah\r\nDisewakan Perhari', 'db8c61527c2232c045ecad89d3978748.png', '2024-06-04 06:10:52'),
(18, '13', 'Grill Pan', '20000', '10', 'Disewakan Perhari', '31bc4943dce83c4a8a2ff17661d332a7.png', '2024-06-04 06:11:55'),
(19, '14', 'Head Lamp', '5000', '10', 'Baterai Terpisah\r\nDisewakan perhari', 'fc234da2a07bee015798b213a5275620.png', '2024-06-04 06:13:23'),
(20, '14', 'Lampu Tenda', '10000', '10', 'Baterai Terpisah\r\nDisewakan Perhari', '093df49ad8c0212e10c29b047869de66.png', '2024-06-04 06:14:44'),
(21, '15', 'Berghaus', '35000', '1', 'Size 38\r\nDisewakan Perhari', '906082d8a895c75a0c5261fd77f98b20.png', '2024-06-04 06:16:10'),
(22, '15', 'Arei', '30000', '1', 'Size 44\r\nDsewakan Perhari', '9b38b58b8e2bfd02759aff3f703ecee8.png', '2024-06-04 06:17:32'),
(23, '2', 'Fly Sheet', '15000', '5', 'Disewakan Perhari', '41949b296f74bf4a28abec25ee08db22.png', '2024-06-04 06:19:02'),
(24, '2', 'Hammock', '10000', '5', 'Disewakan Perhari', '7110aed00a82ec2feebe30fb80258ae6.png', '2024-06-04 06:20:01'),
(25, '2', 'Matras Spons', '5000', '25', 'Disewakan Perhari', 'ad1504b3f6af33a17adbd3628eb4a06f.png', '2024-06-04 06:21:23'),
(26, '13', 'Kompor Kotak Besar', '20000', '5', 'Disewakan Perhari', '96762348791e047c71a7233c106f9ed6.png', '2024-06-04 06:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `produk_id` varchar(45) DEFAULT NULL,
  `dari` date DEFAULT NULL,
  `sampai` date DEFAULT NULL,
  `jumlah` varbinary(45) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `status` enum('1','0','2') DEFAULT '0' COMMENT '2 kembali',
  `created_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `nama_lengkap` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `level` enum('0','1') DEFAULT '1',
  `blokir` varchar(1) DEFAULT '0',
  `alamat` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `nama_lengkap`, `email`, `notelp`, `level`, `blokir`, `alamat`) VALUES
(7, 'admin', 'Administrator', 'admin@admin.com', '08917934054', '0', '0', 'sdasdasd`'),
(10, '12345', 'mat', 'mat@gmail.com', '081341650602', '1', '0', 'Jalan Babaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
