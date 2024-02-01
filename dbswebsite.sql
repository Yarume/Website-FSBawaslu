-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 03:01 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `link` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `nama`, `penulis`, `penerbit`, `file`, `link`, `tanggal`) VALUES
(6, 'admin', 'nyoman', 'cahaya dari timur', 'TamanPustaka/Buku/230-Article_Text-2440-1-10-20231223.pdf', '', '2024-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hukum`
--

CREATE TABLE `tb_hukum` (
  `No` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Kode` varchar(5) NOT NULL,
  `Uraian` varchar(200) NOT NULL,
  `File` text NOT NULL,
  `link` text NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `Status` enum('Valid','Butuh Validasi','Revisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hukum`
--

INSERT INTO `tb_hukum` (`No`, `username`, `Tanggal`, `Kode`, `Uraian`, `File`, `link`, `catatan`, `Status`) VALUES
(22, 'admin', '2024-01-31', 'BA201', 'contoh upload hukum', 'Hukum/ACFrOgAuW1BpijEehHa-eyMEmUu68lsvvMNtyglDkcnDde3qkg61_kZTMwmg0j8c05rmom9deKL82xeh2uG6RvaZn6WFS9-dfs1zRfEQtTS2crjAkbZe9OXbyjDiCgZh79hpc170ROTmHo-kZcU5_(1).pdf', 'https://elearning.stikom-bali.ac.id/', '', 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_logfile`
--

CREATE TABLE `tb_logfile` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `divisi` enum('Hukum','Penanganan','Pencegahan','Sdm','Majalah','Buku') NOT NULL,
  `divisi_no` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama_file` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_logfile`
--

INSERT INTO `tb_logfile` (`id`, `username`, `divisi`, `divisi_no`, `kode`, `nama_file`, `tanggal`) VALUES
(1, 'superadmin', 'Hukum', 10, 'AA01', 'Hukum/Laporan_Prakerin_GusCok1.pdf', '2023-12-15 06:51:57'),
(2, 'superadmin', 'Hukum', 10, 'AA01', 'Hukum/IMG_29631.pdf', '2023-12-15 06:59:31'),
(3, 'superadmin', 'Hukum', 10, 'AA01', 'Hukum/pengantar-ilmu-hukum.pdf', '2023-12-15 07:00:56'),
(4, 'superadmin', 'Hukum', 11, 'AA02', 'Hukum/pengantar-ilmu-hukum1.pdf', '2023-12-15 07:08:06'),
(5, 'superadmin', 'Pencegahan', 2, 'AA01', 'Pencegahan/', '2023-12-15 07:42:44'),
(6, 'superadmin', 'Pencegahan', 2, 'AA01', 'Pencegahan/', '2023-12-15 07:43:12'),
(7, 'superadmin', 'Pencegahan', 2, 'AA01', 'Pencegahan/photo_2023-12-10_17-58-32.jpg', '2023-12-15 07:45:03'),
(8, 'superadmin', 'Pencegahan', 3, 'AA01', 'Pencegahan/photo_2023-12-10_17-58-321.jpg', '2023-12-15 07:59:02'),
(9, 'superadmin', 'Penanganan', 1, 'AA01', 'Penanganan/photo_2023-11-24_09-10-43.jpg', '2023-12-15 08:04:20'),
(10, 'superadmin', 'Sdm', 1, 'AA01', 'Sdm/photo_2023-12-10_17-58-322.jpg', '2023-12-15 08:14:12'),
(11, 'superadmin', 'Hukum', 10, 'AA01', 'Hukum/Screenshot_2023-11-01_220532.png', '2023-12-15 19:58:10'),
(12, 'admin', 'Hukum', 13, 'Admin', 'Hukum/Screenshot_2023-11-01_225143.png', '2023-12-15 20:04:11'),
(13, 'Yanto', 'Penanganan', 3, 'AA01', 'Penanganan/FAQ_Akun_Microsoft_versi_2.pdf', '2024-01-08 21:00:05'),
(14, 'Yanto', 'Hukum', 20, 'BAA2', 'Hukum/FAQ_Akun_Microsoft_versi_22.pdf', '2024-01-08 21:02:07'),
(15, 'Yanto', 'Hukum', 21, 'AAP1', 'Hukum/Yudisium_III_Wisuda_XXXII_V3.pdf', '2024-01-08 21:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_majalah`
--

CREATE TABLE `tb_majalah` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `edisi` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `link` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_majalah`
--

INSERT INTO `tb_majalah` (`id`, `nama`, `edisi`, `file`, `link`, `tanggal`) VALUES
(4, 'admin', '2020', 'TamanPustaka/Majalah/Empat-Langkah-Pengampunan-William-Fergus-Martin.pdf', '', '2024-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penanganan`
--

CREATE TABLE `tb_penanganan` (
  `No` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Kode` varchar(10) NOT NULL,
  `Uraian` varchar(200) NOT NULL,
  `File` text NOT NULL,
  `link` text NOT NULL,
  `catatan` varchar(50) DEFAULT NULL,
  `Status` enum('Valid','Butuh Validasi','Revisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penanganan`
--

INSERT INTO `tb_penanganan` (`No`, `username`, `Tanggal`, `Kode`, `Uraian`, `File`, `link`, `catatan`, `Status`) VALUES
(5, 'kabag hukum', '2024-01-31', 'BB201', 'contoh penanganan', 'Penanganan/Certificate-164.pdf', 'https://sion.stikom-bali.ac.id/login', '', 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pencegahan`
--

CREATE TABLE `tb_pencegahan` (
  `No` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Kode` varchar(10) NOT NULL,
  `Uraian` varchar(200) NOT NULL,
  `File` text NOT NULL,
  `link` text NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `Status` enum('Valid','Butuh Validasi','Revisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pencegahan`
--

INSERT INTO `tb_pencegahan` (`No`, `username`, `Tanggal`, `Kode`, `Uraian`, `File`, `link`, `catatan`, `Status`) VALUES
(6, 'kabag hukum', '2024-01-31', 'CA201', 'contoh pencegahan', 'Pencegahan/203975-200.png', 'https://www.youtube.com/', 'diperjelas lagi pada uraian', 'Revisi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sdm`
--

CREATE TABLE `tb_sdm` (
  `No` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Kode` varchar(10) NOT NULL,
  `Uraian` varchar(200) NOT NULL,
  `File` text NOT NULL,
  `link` text NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `Status` enum('Valid','Butuh Validasi','Revisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sdm`
--

INSERT INTO `tb_sdm` (`No`, `username`, `Tanggal`, `Kode`, `Uraian`, `File`, `link`, `catatan`, `Status`) VALUES
(4, 'kabag hukum', '2024-01-31', 'BA201', 'contoh penanganan', 'Sdm/kebab_rumahan_logo.png', 'https://soundcloud.com/discover', '', 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Verification_Code` text NOT NULL,
  `peringkat` enum('admin','kabag','staff') NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`, `Verification_Code`, `peringkat`) VALUES
(5, '', 'kabag hukum', 'hukum123', 'kabaghukum123', 'kabag'),
(6, '', 'admin', 'admin123', 'admin123', 'admin'),
(7, '', 'staff', 'staff123', 'staff123', 'staff'),
(8, 'inympermanaputra@gmail.com', 'permana', '1234', 'nyoman', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hukum`
--
ALTER TABLE `tb_hukum`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tb_logfile`
--
ALTER TABLE `tb_logfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_majalah`
--
ALTER TABLE `tb_majalah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penanganan`
--
ALTER TABLE `tb_penanganan`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tb_pencegahan`
--
ALTER TABLE `tb_pencegahan`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tb_sdm`
--
ALTER TABLE `tb_sdm`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_hukum`
--
ALTER TABLE `tb_hukum`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_logfile`
--
ALTER TABLE `tb_logfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_majalah`
--
ALTER TABLE `tb_majalah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_penanganan`
--
ALTER TABLE `tb_penanganan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pencegahan`
--
ALTER TABLE `tb_pencegahan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sdm`
--
ALTER TABLE `tb_sdm`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
