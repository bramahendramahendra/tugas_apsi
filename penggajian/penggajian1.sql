-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 05:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `penggajian1`
--

CREATE TABLE `penggajian1` (
  `id_guru` int(20) NOT NULL,
  `id_gaji` int(20) NOT NULL,
  `jam_kerja` int(20) NOT NULL,
  `nama_guru` varchar(20) COLLATE latin1_danish_ci NOT NULL,
  `total_gaji` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `penggajian1`
--

INSERT INTO `penggajian1` (`id_guru`, `id_gaji`, `jam_kerja`, `nama_guru`, `total_gaji`) VALUES
(1, 1, 8, 'Udin', 3500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penggajian1`
--
ALTER TABLE `penggajian1`
  ADD PRIMARY KEY (`id_guru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
