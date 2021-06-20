-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 04:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_kajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `level_akses` int(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `level_akses`, `username`, `password`) VALUES
(1, 0, 'admin', 'admin'),
(2, 1, 'test_perwakillan', 'perwakilan'),
(3, 2, 'test_cabang', 'cabang'),
(4, 3, 'test_kelompok', 'kelompok');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(11) NOT NULL,
  `id_perwakilan` int(11) NOT NULL,
  `nama_cabang` varchar(50) NOT NULL,
  `ketua_cabang` varchar(50) NOT NULL,
  `sekertaris_cabang` varchar(50) NOT NULL,
  `bendahara_cabang` varchar(50) NOT NULL,
  `alamat_cabang` varchar(255) NOT NULL,
  `cp_cabang` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `id_perwakilan`, `nama_cabang`, `ketua_cabang`, `sekertaris_cabang`, `bendahara_cabang`, `alamat_cabang`, `cp_cabang`) VALUES
(1, 1, 'IceCave', 'Lisa', 'Maya', 'Nadia', 'IceCave', '029384773821');

-- --------------------------------------------------------

--
-- Table structure for table `gelombang`
--

CREATE TABLE `gelombang` (
  `id_gelombang` int(2) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `sekertaris` varchar(50) NOT NULL,
  `bendahara` varchar(50) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `gender` enum('Pa/Pi','Pa','Pi') NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gelombang`
--

INSERT INTO `gelombang` (`id_gelombang`, `id_kegiatan`, `ketua`, `sekertaris`, `bendahara`, `tanggal_kegiatan`, `waktu_mulai`, `waktu_selesai`, `gender`, `link`) VALUES
(1, 1, 'Uma', 'Ulyana', 'Ulyssa', '2021-07-01', '07:02:00', '10:02:00', 'Pi', 'kjiqo.ly'),
(2, 1, 'Gloria', 'Helena', 'Isadora', '2021-06-20', '05:47:00', '11:47:00', 'Pa/Pi', 'iykwim.ly'),
(3, 1, 'Abe', 'Bianca', 'Cassandra', '2021-07-01', '07:02:00', '10:02:00', 'Pi', 'bit.ly/jsjkajs'),
(4, 2, 'Abe', 'Bianca', 'Cassandra', '2021-07-01', '07:02:00', '10:02:00', 'Pi', 'bit.ly/jsjkajs'),
(5, 2, 'Abe', 'Bianca', 'Cassandra', '2021-07-01', '07:02:00', '10:02:00', 'Pi', 'bit.ly/jsjkajs'),
(8, 2, 'Abe', 'Bianca', 'Cassandra', '2021-07-01', '07:02:00', '10:02:00', 'Pi', 'bit.ly/jsjkajs');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`) VALUES
(1, 'Perkulian Tengah Malam 2021'),
(2, 'DropAfter No Drop Now 1.1');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id_kelompok` int(11) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `nama_kelompok` varchar(50) NOT NULL,
  `ketua_kelompok` varchar(50) NOT NULL,
  `sekertaris_kelompok` varchar(50) NOT NULL,
  `bendahara_kelompok` varchar(50) NOT NULL,
  `alamat_kelompok` varchar(255) NOT NULL,
  `cp_kelompok` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id_kelompok`, `id_cabang`, `nama_kelompok`, `ketua_kelompok`, `sekertaris_kelompok`, `bendahara_kelompok`, `alamat_kelompok`, `cp_kelompok`) VALUES
(1, 1, 'Alpha', 'Sarah', 'Serena ', 'Sonya', 'Everland', '101010101001'),
(4, 1, 'FrozenCrown', 'Ivy', 'Jane', 'Kylee', 'Neverland', '010101000011');

-- --------------------------------------------------------

--
-- Table structure for table `level_akses`
--

CREATE TABLE `level_akses` (
  `level_akses` int(1) NOT NULL,
  `tingkatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_akses`
--

INSERT INTO `level_akses` (`level_akses`, `tingkatan`) VALUES
(0, 'SUPER ADMIN'),
(1, 'Perwakilan'),
(2, 'Cabang'),
(3, 'Kelompok');

-- --------------------------------------------------------

--
-- Table structure for table `perwakilan`
--

CREATE TABLE `perwakilan` (
  `id_perwakilan` int(11) NOT NULL,
  `nama_perwakilan` varchar(50) NOT NULL,
  `ketua_perwakilan` varchar(50) NOT NULL,
  `sekertaris_perwakilan` varchar(50) NOT NULL,
  `bendahara_perwakilan` varchar(50) NOT NULL,
  `alamat_perwakilan` varchar(255) NOT NULL,
  `cp_perwakilan` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perwakilan`
--

INSERT INTO `perwakilan` (`id_perwakilan`, `nama_perwakilan`, `ketua_perwakilan`, `sekertaris_perwakilan`, `bendahara_perwakilan`, `alamat_perwakilan`, `cp_perwakilan`) VALUES
(1, 'Schamaghamond', 'Isadora', 'Julia', 'Katya', 'Schamaghamond', '010110101001'),
(2, 'Honeywood', 'Bianca', 'Cassandra', 'Celena', 'Honneywood', '123456789012'),
(4, 'Delathan', 'Felicia', 'Gloria', 'Helena', 'Delathan', '675438920112');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_warga` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `khusi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `level_akses` (`level_akses`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`),
  ADD KEY `id_perwakilan` (`id_perwakilan`) USING BTREE;

--
-- Indexes for table `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id_gelombang`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id_kelompok`),
  ADD KEY `id_cabang` (`id_cabang`) USING BTREE;

--
-- Indexes for table `level_akses`
--
ALTER TABLE `level_akses`
  ADD PRIMARY KEY (`level_akses`);

--
-- Indexes for table `perwakilan`
--
ALTER TABLE `perwakilan`
  ADD PRIMARY KEY (`id_perwakilan`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `id_warga` (`id_warga`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id_gelombang` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perwakilan`
--
ALTER TABLE `perwakilan`
  MODIFY `id_perwakilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`level_akses`) REFERENCES `level_akses` (`level_akses`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cabang`
--
ALTER TABLE `cabang`
  ADD CONSTRAINT `cabang_ibfk_1` FOREIGN KEY (`id_perwakilan`) REFERENCES `perwakilan` (`id_perwakilan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gelombang`
--
ALTER TABLE `gelombang`
  ADD CONSTRAINT `gelombang_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD CONSTRAINT `kelompok_ibfk_1` FOREIGN KEY (`id_cabang`) REFERENCES `cabang` (`id_cabang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
