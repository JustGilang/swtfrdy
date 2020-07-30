-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 02:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swtfrdy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id_baju` int(11) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `size` varchar(25) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `bahan` varchar(25) NOT NULL,
  `stock` int(2) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id_baju`, `kategori`, `size`, `warna`, `bahan`, `stock`, `harga`) VALUES
(1, 'Panjang Pria', 'M', 'Putih', 'Polyster', 100, 60000),
(2, 'Panjang Wanita', 'M', 'Hitam', 'Polyster', 100, 60000),
(4, 'Panjang Pria', 'L', 'Putih', 'Cotton Combed 30s', 10, 65000),
(5, 'Panjang Unisex', 'L', 'Hitam', 'Cotton Combed 30s', 19, 100000),
(6, 'Pendek unisex', 'L', 'Putih', 'Cotton Combed 30s', 19, 70000),
(7, 'Pendek Pria', 'L', 'Putih', 'Cotton Combed 30s', 12, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `bukti_tf`
--

CREATE TABLE `bukti_tf` (
  `id` int(11) NOT NULL,
  `id_customer` int(3) NOT NULL,
  `id_order` int(3) NOT NULL,
  `id_custom` int(3) NOT NULL,
  `date` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `id_custom` int(5) NOT NULL,
  `id_baju` int(11) NOT NULL,
  `jumlah_pesanan` int(12) NOT NULL,
  `ukuran_sablon` varchar(2) NOT NULL,
  `desain` varchar(100) NOT NULL,
  `total` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `desain`
--

CREATE TABLE `desain` (
  `id_desain` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desain`
--

INSERT INTO `desain` (`id_desain`, `nama`, `gambar`) VALUES
(1, 'SWTFRDY', 'bg-grey.png'),
(2, 'SWTFRDY', 'ikonik.png'),
(3, 'SWTFRDY 1', 'search.png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `email`, `username`, `pass`, `alamat`, `no_telp`) VALUES
(1, 'Alam', 'alam@gmail.com', 'alam', 'alam', '', 89267126180),
(2, 'Rizky', 'rizky@gmail.com', 'user', 'user', '', 895416022231);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `qty` int(3) NOT NULL,
  `total_harga` int(12) NOT NULL,
  `stats` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `bahan` varchar(25) NOT NULL,
  `size` varchar(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `bahan`, `size`, `harga`, `stok`, `gambar`) VALUES
(1, 'TS Psychoblood', 'Cotton Combed 30s', 'L', 110000, 1000, '006.jpg'),
(2, 'TS Flames', 'Cotton Combed 30s', 'L', 115000, 10, '005.jpg'),
(3, 'TS Porionette', 'Cotton Combed 30s', 'L', 115000, 15, '001.jpg'),
(4, 'TS MovieXXI', 'Cotton Combed 30s', 'L', 110000, 5, '003.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id_baju`);

--
-- Indexes for table `bukti_tf`
--
ALTER TABLE `bukti_tf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id_custom`);

--
-- Indexes for table `desain`
--
ALTER TABLE `desain`
  ADD PRIMARY KEY (`id_desain`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id_baju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bukti_tf`
--
ALTER TABLE `bukti_tf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `id_custom` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desain`
--
ALTER TABLE `desain`
  MODIFY `id_desain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
