-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 03:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipenap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `satker_admin` varchar(50) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `password_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `satker_admin`, `username_admin`, `password_admin`) VALUES
(1, 'Agun Skw', 'BERANTAS', 'Agun', 'agun'),
(7, 'Libertus Lin', 'ITTAMA', 'Libertus', 'libertus'),
(8, 'Maria Mutiara Lustati', 'ITTAMA', 'Maria', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `email_pelapor` varchar(100) NOT NULL,
  `isi_laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `narkotika`
--

CREATE TABLE `narkotika` (
  `id_narkotika` int(11) NOT NULL,
  `golongan_narkotika` varchar(20) NOT NULL,
  `nama_narkotika` text NOT NULL,
  `kandungan_narkotika` text NOT NULL,
  `dasar_hukum_narkotika` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narkotika`
--

INSERT INTO `narkotika` (`id_narkotika`, `golongan_narkotika`, `nama_narkotika`, `kandungan_narkotika`, `dasar_hukum_narkotika`) VALUES
(1, 'Golongan I', 'Cocain, Ganja, dan Heroin', 'Golongan narkotika ini hanya dapat digunakan untuk tujuan pengembangan ilmu pengetahuan dan tidak digunakan dalam terapi, serta mempunyai potensi sangat tinggi mengakibatkan ketergantungan.', 'Dasar hukum Undang-Undang Nomor 35 tahun 2009 tentang Narkotika adalah:\r\n2. Undang-Undang Nomor 8 Tahun 1976 tentang Pengesahan Konvensi Tunggal Narkotika 1961 beserta Protokol Tahun 1972 yang Mengubahnya (Lembaran Negara Republik Indonesia Tahun 1976 Nomor 36, Tambahan Lembaran Negara Republik Indonesia Nomor 3085);'),
(2, 'Golongan II', 'Morfin, Petidin, Fentanil, Metadon.', 'Golongan narkotika ini berkhasiat untuk pengobatan, namun digunakan sebagai pilihan terakhir. Selain itu, dapat digunakan untuk terapi dan/atau untuk tujuan pengembangan ilmu pengetahuan. Mempunyai potensi tinggi mengakibatkan ketergantungan.', 'Dasar hukum Undang-Undang Nomor 35 tahun 2009 tentang Narkotika adalah: \r\n2. Undang-Undang Nomor 8 Tahun 1976 tentang Pengesahan Konvensi Tunggal Narkotika 1961 beserta Protokol Tahun 1972 yang Mengubahnya (Lembaran Negara Republik Indonesia Tahun 1976 Nomor 36, Tambahan Lembaran Negara Republik Indonesia Nomor 3085);');

-- --------------------------------------------------------

--
-- Table structure for table `psikotropika`
--

CREATE TABLE `psikotropika` (
  `id_psikotropika` int(11) NOT NULL,
  `golongan_psikotropika` varchar(20) NOT NULL,
  `nama_psikotropika` varchar(50) NOT NULL,
  `kandungan_psikotropika` text NOT NULL,
  `dasar_hukum_psikotropika` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psikotropika`
--

INSERT INTO `psikotropika` (`id_psikotropika`, `golongan_psikotropika`, `nama_psikotropika`, `kandungan_psikotropika`, `dasar_hukum_psikotropika`) VALUES
(5, 'Golongan II', 'Kokain', 'Kokain merupakan kandungan yang dapat menyebabkan penularan pada seseorang yang tidak mampu mengenadalikan dirinya terhadap orang lain. ', 'Undang-undang yang digunakan untuk narkoba secara khusus pada pengguna psikotropika yakni:\r\n\r\n1) lakklafklajfkljk\r\n2) Dilanjutkan dengan undang-undang pada pengguna yang terkena dalam penggunaan tersebut');

-- --------------------------------------------------------

--
-- Table structure for table `zat_adiktif`
--

CREATE TABLE `zat_adiktif` (
  `id_zat_adiktif` int(11) NOT NULL,
  `golongan_zat_adiktif` varchar(20) NOT NULL,
  `nama_zat_adiktif` varchar(50) NOT NULL,
  `kandungan_zat_adiktif` text NOT NULL,
  `dasar_hukum_zat_adiktif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zat_adiktif`
--

INSERT INTO `zat_adiktif` (`id_zat_adiktif`, `golongan_zat_adiktif`, `nama_zat_adiktif`, `kandungan_zat_adiktif`, `dasar_hukum_zat_adiktif`) VALUES
(1, 'Golongan I', 'Gelas Coding PHP', 'Kandungan zat adiktif tersebut adalah bla bla bla', 'Sedangkan untuk undang-undang yang berlaku bagi pengguna jika menggunakan zat adiktif tersebut adalah yakni:\r\n\r\n1) Bla bla bla\r\n2) Dilanjutkan dengan UUD bla bla bla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `narkotika`
--
ALTER TABLE `narkotika`
  ADD PRIMARY KEY (`id_narkotika`);

--
-- Indexes for table `psikotropika`
--
ALTER TABLE `psikotropika`
  ADD PRIMARY KEY (`id_psikotropika`);

--
-- Indexes for table `zat_adiktif`
--
ALTER TABLE `zat_adiktif`
  ADD PRIMARY KEY (`id_zat_adiktif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `narkotika`
--
ALTER TABLE `narkotika`
  MODIFY `id_narkotika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `psikotropika`
--
ALTER TABLE `psikotropika`
  MODIFY `id_psikotropika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zat_adiktif`
--
ALTER TABLE `zat_adiktif`
  MODIFY `id_zat_adiktif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
