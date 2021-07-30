-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 12:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_120110180119`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(45) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `jumlah_stok` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga_barang`, `jumlah_stok`) VALUES
('AB02', 'Kursi', 1000000, '12'),
('AB03', 'Lemari', 750000, '6'),
('AB04', 'Meja Makan', 900000, '2'),
('AB05', 'Meja Belajar', 750000, '15'),
('BB02', 'Tempat Tidur', 650000, '3'),
('CA01', 'Tikar', 250000, '15'),
('CA02', 'Jam Dinding', 150000, '20'),
('DA01', 'Lampu', 90000, '20');

-- --------------------------------------------------------

--
-- Table structure for table `baris_order`
--

CREATE TABLE `baris_order` (
  `kode_barang` varchar(5) NOT NULL,
  `no_faktur` varchar(5) NOT NULL,
  `jumlah_order` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baris_order`
--

INSERT INTO `baris_order` (`kode_barang`, `no_faktur`, `jumlah_order`) VALUES
('AB01', 'IN01', '1'),
('AB01', 'IN02', '3'),
('AB03', 'IN05', '2'),
('AB05', 'IN02', '1'),
('AB05', 'IN03', '4'),
('BB01', 'IN01', '2'),
('BB01', 'IN04', '1'),
('BB01', 'IN05', '1'),
('BB02', 'IN03', '2'),
('DA01', 'IN01', '5');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_pelanggan` varchar(5) NOT NULL,
  `nama_pelanggan` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `no_hp` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`ID_pelanggan`, `nama_pelanggan`, `alamat`, `kota`, `no_hp`, `status`) VALUES
('P001', 'Angga', 'Jln Mawar No 10', 'Papua Barat', '081233809012', 'Lunas'),
('P002', 'Bianca', 'Jln Pengangsaan Timur No 10', 'Jakarta Timur', '081900991287', 'Utang'),
('P003', 'Chelsi', 'Jln Hegarmanah No 101', 'Sumedang', '082389878700', 'Lunas'),
('P004', 'Dimas', 'Jln Braga No 100', 'Bandung', '085311002255', 'Lunas'),
('P005', 'Edgar', 'Jln Asia Afrika No 20', 'Padang', '085241317060', 'Utang');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_penjualan`
--

CREATE TABLE `pesanan_penjualan` (
  `no_faktur` varchar(5) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ID_pelanggan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan_penjualan`
--

INSERT INTO `pesanan_penjualan` (`no_faktur`, `tanggal`, `ID_pelanggan`) VALUES
('IN01', '2020-12-09', 'P005'),
('IN02', '2020-08-23', 'P001'),
('IN03', '2020-10-10', 'P002'),
('IN04', '2020-09-23', 'P001'),
('IN05', '2020-11-08', 'P005');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pengguna` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `divisi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pengguna`, `pass`, `divisi`) VALUES
('Sales', 'maujualanaja', 'Penjualan'),
('Purchase', 'Belanjaterus', 'Pembelian'),
('Payroll', 'amountpaid', 'HRD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `baris_order`
--
ALTER TABLE `baris_order`
  ADD PRIMARY KEY (`kode_barang`,`no_faktur`),
  ADD KEY `fk_barang_has_pesanan_penjualan_pesanan_penjualan1_idx` (`no_faktur`),
  ADD KEY `fk_barang_has_pesanan_penjualan_barang_idx` (`kode_barang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_pelanggan`);

--
-- Indexes for table `pesanan_penjualan`
--
ALTER TABLE `pesanan_penjualan`
  ADD PRIMARY KEY (`no_faktur`,`ID_pelanggan`),
  ADD KEY `fk_pesanan_penjualan_pelanggan1_idx` (`ID_pelanggan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baris_order`
--
ALTER TABLE `baris_order`
  ADD CONSTRAINT `fk_barang_has_pesanan_penjualan_barang` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barang_has_pesanan_penjualan_pesanan_penjualan1` FOREIGN KEY (`no_faktur`) REFERENCES `pesanan_penjualan` (`no_faktur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pesanan_penjualan`
--
ALTER TABLE `pesanan_penjualan`
  ADD CONSTRAINT `fk_pesanan_penjualan_pelanggan1` FOREIGN KEY (`ID_pelanggan`) REFERENCES `pelanggan` (`ID_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
