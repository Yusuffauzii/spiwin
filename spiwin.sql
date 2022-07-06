-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 02:56 AM
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
-- Database: `spiwin`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_brg` varchar(10) NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `kd_sp` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `hrg` double NOT NULL,
  `hrgb` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_brg`, `nm_brg`, `kd_sp`, `qty`, `hrg`, `hrgb`) VALUES
('KB01', 'Keyboard', 'S01', 3, 10000, 1500000),
('KB02', 'Monster 30000', 'S01', 5, 50000, 2500000),
('KB03', 'Handphone', 'S02', 5, 150000, 50000000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kd_pmb` varchar(10) NOT NULL,
  `kd_brg` varchar(10) NOT NULL,
  `kd_pbl` varchar(10) NOT NULL,
  `total` double NOT NULL,
  `kembalian` double NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kd_pmb`, `kd_brg`, `kd_pbl`, `total`, `kembalian`, `tgl`) VALUES
('KP01', 'KB01', 'KP01', 5000000, 3500000, '2022-05-24 15:48:34'),
('KP02', 'KB03', 'KP02', 600000000, 550000000, '2022-05-24 15:54:06'),
('KP03', 'KB01', 'P04', 3000000, 1500000, '2022-05-25 06:50:52'),
('KP04', 'KB01', 'KP01', 5000000, 3500000, '2022-05-25 06:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `kd_pbl` varchar(10) NOT NULL,
  `nm_pbl` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`kd_pbl`, `nm_pbl`, `no_hp`, `alamat`) VALUES
('KP01', 'Rani Tantuli', '081394203090', 'Cirebon'),
('KP02', 'Mutsanna', '083823373546', 'Cirebon'),
('P04', 'Aliyah', '0894038934293', 'Ujung Berung');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `kd_sp` varchar(10) NOT NULL,
  `nm_sp` varchar(50) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`kd_sp`, `nm_sp`, `no_tlp`, `alamat`) VALUES
('S01', 'Farhan ABG', '081394203090', 'Sadang Serang'),
('S02', 'Hendy', '0819329803249', 'Ujung Berung');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kd_tr` varchar(10) NOT NULL,
  `kd_brg` varchar(10) NOT NULL,
  `kd_pbl` varchar(10) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kd_tr`, `kd_brg`, `kd_pbl`, `tgl`) VALUES
('KT01', 'KB02', 'KP01', '2022-05-25 06:51:15'),
('PE01', '2022-04-07', '200000', '0000-00-00 00:00:00'),
('TR01', 'KD01', 'P01', '2022-04-07 05:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kd_usr` varchar(10) NOT NULL,
  `usr` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_usr`, `usr`, `pass`, `level`) VALUES
('1', 'saya', 'saya', 'admin'),
('2', 'fajar', 'fajar', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kd_pmb`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`kd_pbl`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`kd_sp`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_tr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_usr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
