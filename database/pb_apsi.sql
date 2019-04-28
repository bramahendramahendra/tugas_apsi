-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 07:57 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pb_apsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(1, 'admin', 'admin', 'Private', '', 'Administrator'),
(2, 'admin2', 'admin2', 'Agus', 'Alex', 'Zainudin');

-- --------------------------------------------------------

--
-- Table structure for table `calen`
--

CREATE TABLE `calen` (
  `cal_id` int(19) NOT NULL,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calen`
--

INSERT INTO `calen` (`cal_id`, `name`, `month`, `day`, `year`, `schedule`) VALUES
(1, 'Ahmad', 'Jan', '01', '2019', 'Friday AM'),
(2, 'Teacher', 'Jan', '01', '2016', 'Friday AM'),
(3, 'HUHUHU', 'Jan', '01', '2016', 'Friday AM');

-- --------------------------------------------------------

--
-- Table structure for table `calen_saturday`
--

CREATE TABLE `calen_saturday` (
  `cal_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calen_saturday`
--

INSERT INTO `calen_saturday` (`cal_id`, `name`, `month`, `day`, `year`, `schedule`) VALUES
(1, 'Ahmad', 'Jun', '01', '2016', 'Saturday AM');

-- --------------------------------------------------------

--
-- Table structure for table `calen_sunday`
--

CREATE TABLE `calen_sunday` (
  `cal_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id_enrollment` int(10) NOT NULL,
  `mata_pelajar` varchar(50) NOT NULL,
  `jam_mengajar` time NOT NULL,
  `hari_mengajar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id_enrollment`, `mata_pelajar`, `jam_mengajar`, `hari_mengajar`) VALUES
(1, 'matematika', '09:00:00', 'senin'),
(2, 'matematika', '13:00:00', 'senin');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(11) NOT NULL,
  `instructor_no` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `course` varchar(10) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `section` varchar(8) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `instructor_no`, `firstname`, `middlename`, `lastname`, `course`, `schedule`, `section`, `status`) VALUES
(1, '2', 'a', 'a', 'a', 'a', 'a', 'b', 'hadir'),
(117, '123444', 'y', 'y', 'y', 'C101', 'Friday AM', '2019', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `id_instruktur` int(10) NOT NULL,
  `nomor_instruktur` int(5) NOT NULL,
  `nama_instruktur` varchar(50) NOT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `jam_mengajar` time DEFAULT NULL,
  `hari_mengajar` varchar(10) DEFAULT NULL,
  `absensi_mengajar` int(10) DEFAULT NULL,
  `pendapatan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id_instruktur`, `nomor_instruktur`, `nama_instruktur`, `mata_pelajaran`, `jam_mengajar`, `hari_mengajar`, `absensi_mengajar`, `pendapatan`) VALUES
(1, 123444, 'y y y', 'matematika', '09:00:00', 'Friday', NULL, NULL),
(2, 2, 'a', 'matematika', '09:00:00', 'Friday', 1, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `late`
--

CREATE TABLE `late` (
  `late_id` int(11) NOT NULL,
  `student_no` varchar(200) NOT NULL,
  `student_details` varchar(200) NOT NULL,
  `late` varchar(200) NOT NULL,
  `time` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `No_pembayaran` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pembayaran` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`No_pembayaran`, `student_id`, `tanggal`, `pembayaran`) VALUES
(1, 116, '2019-04-11', 500000),
(2, 116, '2019-04-11', 500000);

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

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_no` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `course` varchar(10) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `section` varchar(8) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_no`, `firstname`, `middlename`, `lastname`, `course`, `schedule`, `section`, `status`) VALUES
(116, '3286426326', 'm yumna m', '', 'majdina', 'C101', 'Friday AM', '2019', 'Tidak Hadir'),
(117, '291219391391', 'wildan', '', 'chairul', 'C101', 'Friday PM', '2019', 'Hadir'),
(118, '23092j3ej2', 'jeki', '', 'chun', 'C101', 'Friday PM', '2019', 'Tidak Hadir'),
(120, 'QWERTY123', 'kkh', '', 'ihi', 'C101', 'Friday AM', '2019', 'hadir'),
(121, '12345678', 'y', 'y', 'y', 'C101', 'Friday AM', '2019', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tbljeniskas`
--

CREATE TABLE `tbljeniskas` (
  `id_jeniskas` int(11) NOT NULL,
  `namajeniskas` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljeniskas`
--

INSERT INTO `tbljeniskas` (`id_jeniskas`, `namajeniskas`) VALUES
(1, 'Kas Masuk'),
(2, 'Kas Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `tblkaskeluar`
--

CREATE TABLE `tblkaskeluar` (
  `id_kaskeluar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkaskeluar`
--

INSERT INTO `tblkaskeluar` (`id_kaskeluar`, `nama`) VALUES
(1, 'Pembelian Barang'),
(2, 'Pembayaran Piutang');

-- --------------------------------------------------------

--
-- Table structure for table `tblkasmasuk`
--

CREATE TABLE `tblkasmasuk` (
  `id_kasmasuk` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkasmasuk`
--

INSERT INTO `tblkasmasuk` (`id_kasmasuk`, `nama`) VALUES
(1, 'Pembayaran Piutang'),
(2, 'Penyetoran Persekot');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi`
--

CREATE TABLE `tbltransaksi` (
  `kd_transaksi` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `id_jeniskas` int(11) NOT NULL,
  `id_kasmasuk` int(11) DEFAULT NULL,
  `id_kaskeluar` int(11) DEFAULT NULL,
  `ket` text NOT NULL,
  `nominal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaksi`
--

INSERT INTO `tbltransaksi` (`kd_transaksi`, `tgl`, `id_jeniskas`, `id_kasmasuk`, `id_kaskeluar`, `ket`, `nominal`) VALUES
('TRS23041700001', '2017-04-23', 1, 1, 0, 'dfafasd', 9000000),
('TRS23041700002', '2017-04-23', 2, 0, 1, 'Beli Komputer', 5000000),
('TRS26041700001', '2017-04-26', 1, 1, 0, 'Pembayaran piutang dari PT. Indomarco', 10000000),
('TRS26041700002', '2017-04-26', 2, 0, 1, 'Pembelian Pipa', 8900000),
('TRS26041700003', '2017-04-26', 2, 0, 1, 'Pembelian Alat Kantor', 2000000),
('TRS31101700001', '2017-10-30', 2, 0, 1, 'Pembelia brang kapas', 500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `calen`
--
ALTER TABLE `calen`
  ADD PRIMARY KEY (`cal_id`);

--
-- Indexes for table `calen_saturday`
--
ALTER TABLE `calen_saturday`
  ADD PRIMARY KEY (`cal_id`);

--
-- Indexes for table `calen_sunday`
--
ALTER TABLE `calen_sunday`
  ADD PRIMARY KEY (`cal_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id_enrollment`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD UNIQUE KEY `instructor_no` (`instructor_no`);

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id_instruktur`);

--
-- Indexes for table `late`
--
ALTER TABLE `late`
  ADD PRIMARY KEY (`late_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`No_pembayaran`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `penggajian1`
--
ALTER TABLE `penggajian1`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_no` (`student_no`);

--
-- Indexes for table `tbljeniskas`
--
ALTER TABLE `tbljeniskas`
  ADD PRIMARY KEY (`id_jeniskas`);

--
-- Indexes for table `tblkaskeluar`
--
ALTER TABLE `tblkaskeluar`
  ADD PRIMARY KEY (`id_kaskeluar`);

--
-- Indexes for table `tblkasmasuk`
--
ALTER TABLE `tblkasmasuk`
  ADD PRIMARY KEY (`id_kasmasuk`);

--
-- Indexes for table `tbltransaksi`
--
ALTER TABLE `tbltransaksi`
  ADD PRIMARY KEY (`kd_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `calen`
--
ALTER TABLE `calen`
  MODIFY `cal_id` int(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `calen_saturday`
--
ALTER TABLE `calen_saturday`
  MODIFY `cal_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calen_sunday`
--
ALTER TABLE `calen_sunday`
  MODIFY `cal_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id_enrollment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id_instruktur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `late`
--
ALTER TABLE `late`
  MODIFY `late_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `No_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `tbljeniskas`
--
ALTER TABLE `tbljeniskas`
  MODIFY `id_jeniskas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblkaskeluar`
--
ALTER TABLE `tblkaskeluar`
  MODIFY `id_kaskeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblkasmasuk`
--
ALTER TABLE `tblkasmasuk`
  MODIFY `id_kasmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
