-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2015 at 03:23 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--
CREATE DATABASE IF NOT EXISTS `kasir` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kasir`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `code` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`code`, `nama`, `harga`) VALUES
('1111', 'Oreo Coklat', 5500),
('1112', 'Aqua 500ml', 2900),
('1113', 'Ultramilk Coklat', 5000),
('1114', 'Sariroti Keju', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `poin`
--

CREATE TABLE IF NOT EXISTS `poin` (
  `id` varchar(12) NOT NULL,
  `poin` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `nomor` int(11) NOT NULL,
  `noo` int(11) NOT NULL,
  `hasil` text NOT NULL,
  `total` int(10) NOT NULL,
  `id` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`nomor`, `noo`, `hasil`, `total`, `id`, `status`) VALUES
(112, 26, 'Oreo Coklat   1   5500<br>Total : 5500<br> Uang : 50000<br>  Kembalian : 44500', 5500, 'rahmat2222', 2),
(112, 49, 'Oreo Coklat   1   5500<br>Total : 5500<br> Uang : 5500<br>  Kembalian : 0', 5500, 'rahmat2222', 2),
(112, 50, 'Aqua 500ml   2   5800<br>Total : 5800<br> Uang : 5800<br>  Kembalian : 0', 5800, 'rahmat2222', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(12) NOT NULL,
  `password` varchar(26) NOT NULL,
  `nama` varchar(26) NOT NULL,
  `saldo` int(10) NOT NULL,
  `poin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `nama`, `saldo`, `poin`) VALUES
('rahmat2222', 'rahmat', 'Rahmat Burhanudin', 9689200, 1182);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `poin`
--
ALTER TABLE `poin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`noo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `noo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
