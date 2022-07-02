-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 02:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensus_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id` int(11) NOT NULL,
  `no_kk` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_tgllahir` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt_rw` varchar(50) NOT NULL,
  `kelurahan_kecamatan` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `status_keberadaan` varchar(50) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `hubungan_keluarga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `no_kk`, `nik`, `nama`, `tempat_tgllahir`, `jenis_kelamin`, `alamat`, `rt_rw`, `kelurahan_kecamatan`, `kota`, `provinsi`, `status_keberadaan`, `pendidikan`, `agama`, `kewarganegaraan`, `pekerjaan`, `status_perkawinan`, `nama_ayah`, `nama_ibu`, `hubungan_keluarga`) VALUES
(1, 4324234, 324324, 'sdfsd', 'dsfsdf', 'sdfds', 'sdfsdf', 'ddd', 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'ddd', 'dd', 'dd', 'dd', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `role_user` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `password_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role_user`, `nama_user`, `username_user`, `password_user`) VALUES
(1, 'A', 'admin', 'admin', 'admin'),
(2, 'P', 'pak rt', 'pakrt', 'pakrt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
