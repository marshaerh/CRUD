-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 11:13 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `No_Presensi` int(4) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Kelas` varchar(3) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`No_Presensi`, `Nama`, `Kelas`, `Alamat`, `No_hp`) VALUES
(1, 'Yuliana Safitri', '11A', 'Gorongan, Yogyakarta', '0866-8554-2566'),
(2, 'Wijaya saputra', '11A', 'Ngaglik, Yogyakarta', '0826-2258-4444'),
(3, 'Maria Safitri', '11A', 'Ngemplak. Yogyakarta', '0813-2589-5656'),
(4, 'Bagas Yudha', '11A', 'Krajan, Yogyakarta', '0856-7446-6546'),
(5, 'Santi Astuti', '11A', 'Kaliwaru, Yogyakarta', '0568-2556-7445'),
(6, 'Andriani', '11A', 'Ngaglik, Yogyakarta', '0879-7889-4998'),
(7, 'Anggi', '11A', 'Gorongan, Yogyakarta', '0812-7883-3333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`No_Presensi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
