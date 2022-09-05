-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 04:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_sipeka`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `nip` int(25) NOT NULL,
  `masa_kerja` varchar(10) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `lama_cuti` varchar(10) NOT NULL,
  `mulai_cuti` date NOT NULL,
  `sampai_cuti` date NOT NULL,
  `thn1` varchar(11) NOT NULL,
  `thn2` varchar(11) NOT NULL,
  `thn3` varchar(11) NOT NULL,
  `sisa1` varchar(11) NOT NULL,
  `sisa2` varchar(11) NOT NULL,
  `sisa3` varchar(11) NOT NULL,
  `nama_penyetuju` varchar(25) NOT NULL,
  `nip_penyetuju` int(25) NOT NULL,
  `nama_ketua` varchar(25) NOT NULL,
  `nip_ketua` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jatah_cuti`
--

CREATE TABLE `jatah_cuti` (
  `id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nip` int(25) NOT NULL,
  `sisa1` int(3) NOT NULL,
  `sisa2` int(3) NOT NULL,
  `sisa3` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` int(17) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `pangkat` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `ruangan` varchar(25) NOT NULL,
  `masakerja` int(11) NOT NULL,
  `tgl_pengangkatan` date NOT NULL,
  `tmt_pkt_terakhir` date NOT NULL,
  `tmt_gajiterakhir` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `pangkat`, `jabatan`, `ruangan`, `masakerja`, `tgl_pengangkatan`, `tmt_pkt_terakhir`, `tmt_gajiterakhir`, `foto`, `id`) VALUES
(1313131, 'dadafgm ', 'adafkf', 'daasfsad', 'qdjfdiofjw', 0, '2022-08-24', '2022-08-31', '2022-08-24', 'shisdhfiq21321412.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'SAdmin', 'sadmin', 1),
(2, 'Admin', 'admin', 2),
(3, 'user', 'user', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jatah_cuti`
--
ALTER TABLE `jatah_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
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
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jatah_cuti`
--
ALTER TABLE `jatah_cuti`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
