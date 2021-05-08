-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 04:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `jurusan`, `created_at`, `updated_at`) VALUES
(1631720255, 'Bisri Musthofa', 'Jayapura', '1998-04-14', 'Laki-laki', 'Teknik Mesin', NULL, NULL),
(1641720012, 'Zainal Abidin', 'Pontianak', '1998-01-06', 'Laki-laki', 'Teknik Mesin', NULL, NULL),
(1731720085, 'Dinda Miftah', 'Banyuwangi', '1999-07-11', 'Perempuan', 'Teknik Kimia', NULL, NULL),
(1741720128, 'Putra Candra', 'Semarang', '1998-07-27', 'Laki-laki', 'Teknologi Informasi', NULL, NULL),
(1831720015, 'Tita Wijaya', 'Medan', '1997-10-14', 'Perempuan', 'Akuntansi', NULL, NULL),
(1831720022, 'Widad Bariroh', 'Malang', '2000-09-04', 'Perempuan', 'Administrasi Niaga', NULL, NULL),
(1841720050, 'Krisna Blue', 'Jakarta', '1999-08-05', 'Laki-laki', 'Teknik Elektro', NULL, NULL),
(1941720061, 'Spongebob', 'Pasuruan', '2001-03-15', 'Laki-laki', 'Teknik Sipil', NULL, NULL),
(2031720128, 'Haris Vriza Milano', 'Bogor', '2002-12-05', 'Laki-laki', 'Teknik Kimia', NULL, NULL),
(2041720043, 'Nuril Faizah ', 'Palembang', '2001-05-15', 'Perempuan', 'Teknologi Informasi', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nim` (`nis`),
  ADD KEY `nim_2` (`nis`),
  ADD KEY `nim_3` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
