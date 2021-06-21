-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 05:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essential`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `kode_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`kode_divisi`, `nama_divisi`) VALUES
(1001, 'PPIC'),
(1002, 'warehouse');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kode_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kode_jabatan`, `nama_jabatan`) VALUES
(101, 'operator'),
(102, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_cetak`
--

CREATE TABLE `jadwal_cetak` (
  `id_sticker` int(11) NOT NULL,
  `qty_cetak` int(11) NOT NULL,
  `no_batch` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_kemas` date NOT NULL,
  `qty_dikerjakan` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_cetak`
--

INSERT INTO `jadwal_cetak` (`id_sticker`, `qty_cetak`, `no_batch`, `tgl_order`, `tgl_kemas`, `qty_dikerjakan`, `status`) VALUES
(1000001, 200, 1000000002, '2020-06-01', '2020-07-13', 1000, 1),
(1000003, 700, 134235, '2020-06-17', '0000-00-00', 300, 0),
(1000006, 1000, 111111111, '2020-06-02', '2020-06-22', 100, 0),
(1000004, 250, 1000000013, '2020-06-08', '2020-06-24', 300, 1),
(1000005, 356, 1000000014, '2020-06-09', '2020-06-25', 0, 0),
(1000002, 700, 1000000015, '2020-06-02', '2020-06-25', 750, 1),
(1000007, 345, 1000000016, '2020-06-08', '2020-06-26', 0, 0),
(1000008, 567, 1000000055, '2020-06-06', '2020-06-27', 0, 0),
(1000004, 430, 1000000056, '2020-07-01', '2020-07-16', 500, 1),
(1000009, 600, 1000000021, '2020-07-03', '2020-07-25', 0, 0),
(1000010, 750, 1000000019, '2020-07-09', '2020-07-31', 800, 1),
(1000001, 900, 1000000033, '2020-07-02', '2020-07-31', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` tinyint(1) NOT NULL,
  `umur` int(3) NOT NULL,
  `alamat` text NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `jeniskelamin`, `umur`, `alamat`, `id_jabatan`, `id_divisi`, `no_telp`, `foto`) VALUES
(10001, 'willy', 1, 24, 'bukit dago', 101, 1001, '082249407006', ''),
(10002, 'wahyu budianto', 1, 25, 'legok', 102, 1001, '08222222', ''),
(10003, 'reza', 1, 25, 'pamulang', 102, 1002, '08492489034', '');

-- --------------------------------------------------------

--
-- Table structure for table `master_customer`
--

CREATE TABLE `master_customer` (
  `kode_customer` int(11) NOT NULL,
  `nama_customer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL,
  `pavicon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `url`, `pavicon`) VALUES
(101, 'input batch', 'Admin_Cetak/input_batch', 'fa fa-fw fa-dashboard'),
(102, 'input jadwal cetak sticker', 'Admin_Cetak/input_jadwal_cetak', 'fa fa-fw fa-dashboard'),
(103, 'master customer', 'Admin_Cetak/lihat_master_customer', 'fa fa-fw fa-table'),
(104, 'daftar batch', 'Admin_Cetak/daftar_batch', 'fa fa-fw fa-table');

-- --------------------------------------------------------

--
-- Table structure for table `sticker`
--

CREATE TABLE `sticker` (
  `kd_sticker` int(11) NOT NULL,
  `nm_sticker` varchar(100) NOT NULL,
  `no_na` varchar(20) NOT NULL,
  `kd_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sticker`
--

INSERT INTO `sticker` (`kd_sticker`, `nm_sticker`, `no_na`, `kd_customer`) VALUES
(1000001, 'Theraskin Whitening Cream', 'NA000001', 0),
(1000002, 'Theraskin Mask peel Of Acne', 'NA000002', 0),
(1000003, 'Theraskin Loose Powder', 'NA000003', 0),
(1000004, 'Theraskin Suncare Whitening', 'NA000004', 0),
(1000005, 'Theraskin Aloevera Cream', 'NA000005', 0),
(1000006, 'Theraskin Niacin Cream', 'NA000006', 0),
(1000007, 'Theraskin FLC Normal', 'NA000006', 0),
(1000008, 'Theraskin Facial Wash Oily', 'NA000007', 0),
(1000009, 'Theraskin Facial Wash Acne', 'NA000008', 0),
(1000010, 'Theraskin Facial Wash Normal', 'NA000009', 0),
(1000011, 'Theraskin Suncare Lotion', 'NA000010', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_gudang`
--

CREATE TABLE `stock_gudang` (
  `kode_sticker` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `buffer_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_gudang`
--

INSERT INTO `stock_gudang` (`kode_sticker`, `qty`, `buffer_stock`) VALUES
(1000003, 500, 1000),
(1000001, 500, 200),
(1000002, 250, 300),
(1000005, 400, 500),
(1000007, 100, 900),
(1000010, 500, 100),
(1000009, 400, 90);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `nik` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`nik`, `password`) VALUES
(10001, '202cb962ac59075b964b07152d234b70'),
(10002, '250cf8b51c773f3f8dc8b4be867a9a02'),
(10003, '68053af2923e00204c3ca7c6a3150cf7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`kode_divisi`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- Indexes for table `jadwal_cetak`
--
ALTER TABLE `jadwal_cetak`
  ADD KEY `id_sticker` (`id_sticker`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `master_customer`
--
ALTER TABLE `master_customer`
  ADD PRIMARY KEY (`kode_customer`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `sticker`
--
ALTER TABLE `sticker`
  ADD PRIMARY KEY (`kd_sticker`),
  ADD KEY `kd_customer` (`kd_customer`);

--
-- Indexes for table `stock_gudang`
--
ALTER TABLE `stock_gudang`
  ADD KEY `kode_sticker` (`kode_sticker`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD KEY `nik` (`nik`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `kode_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `kode_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `master_customer`
--
ALTER TABLE `master_customer`
  MODIFY `kode_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10010;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `sticker`
--
ALTER TABLE `sticker`
  MODIFY `kd_sticker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000012;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_cetak`
--
ALTER TABLE `jadwal_cetak`
  ADD CONSTRAINT `jadwal_cetak_ibfk_1` FOREIGN KEY (`id_sticker`) REFERENCES `sticker` (`kd_sticker`) ON DELETE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`kode_jabatan`) ON DELETE CASCADE,
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`kode_divisi`);

--
-- Constraints for table `master_customer`
--
ALTER TABLE `master_customer`
  ADD CONSTRAINT `master_customer_ibfk_1` FOREIGN KEY (`kode_customer`) REFERENCES `sticker` (`kd_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stock_gudang`
--
ALTER TABLE `stock_gudang`
  ADD CONSTRAINT `stock_gudang_ibfk_1` FOREIGN KEY (`kode_sticker`) REFERENCES `sticker` (`kd_sticker`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userlog`
--
ALTER TABLE `userlog`
  ADD CONSTRAINT `userlog_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `karyawan` (`nik`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
