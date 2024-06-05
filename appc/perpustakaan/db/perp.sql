-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 09:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrator`
--

CREATE TABLE `tb_administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_administrator`
--

INSERT INTO `tb_administrator` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Administrator'),
(4, 'kepala', 'kepalaperpus', 'Kepala Perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(150) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `stok_buku` int(11) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `label_buku` text NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `gambar`, `jumlah_halaman`, `stok_buku`, `bahasa`, `sinopsis`, `label_buku`, `kategori`) VALUES
(14, 'Notes On Discrete Mathematics', 'Miguel A. Lerma', 'Northwestern University', 2005, '61ff4ed23ba948c191e4d7fe04d5ce15.jpg', 120, 5, 'Ingris', '-', '', 6),
(15, 'Complex Manifolds and Hermitian Differential Geometry', 'Andrew D. Hwang', 'University of Toronto', 1997, 'e1b0b2e9db8244aca46161c39e9d0b06.jpg', 50, 12, 'Inggris', '-', '', 7),
(16, 'Pemrograman Database dengan Delphi7 Menggunakan Access ADO', 'Abdul Kadir', 'Penerbit Andi', 2004, '9ec531d10cfe4d8fac0773d6a2bab6f9.jpg', 100, 3, 'indonesia', '-', '', 6),
(17, 'Menguasai Efek Khusus dengan Photoshop', 'Jubilee Enterprise', 'Elex Media Komputindo', 2015, 'd9b30460ac34429884f23b9e7ac8cb3a.jpg', 100, 35, 'indonesia', '-', '', 6),
(19, 'dnajd', 'sad', 'sadk', 2000, '6e48ff81ddb04ee38c9a92f785ca6d82.jpg', 33, 0, 'sdaj', 'sda', 'label buku 2', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(6, 'Terapan'),
(7, 'Ilmu Ukur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelamin` int(11) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nim`, `nama`, `kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `password`, `token`) VALUES
(1, '123456', 'kakashi hatakee', 1, 'agama', 'tempat', '2021-02-26', 'alamat 2', '0823871731', '123456', 'dbcUhEbFSFuoOrBlptUwA0:APA91bGmUM6XclJzdKdpqesSLxG9oWTCbATcTxvSFhBbKNTzHR0EFqk24CvTb3dduy2lXQIjqr7LrtDWNQmt9IH_ubNamajf60YHbmVDNuqDjTGAEug9LlCfDW3DEmHFpa2qxDwOd109'),
(2, '21715086', 'jiraiya', 1, 'Islam', 'Gorontalo', '1997-08-05', 'Jl. Ampi', '082259500319', '21715086', 'cIfW-WnZTrqJnMSuHlbsT8:APA91bH6MUjfX1sKS_l0OJ_DWNvgYNl9y52MpoeUTXomOSjziyXXsAkel-XUjChFKAgN3GPCczkvjjCu6MByZgUPYRk1Y0PC5Yz-w9eKXCq7CYHnKQTuNXUt0vQYUx9QOkJ4pGV9Fauc'),
(3, '21315049', 'shikaku nara', 1, 'Agama', 'Tempat Lahir', '2021-02-28', 'aamat', '082259500319', '21315049', 'dlzrr6xcRGuTTsMn_iigLY:APA91bGPIafs4Trq9q__pxBDcDlIKe5exq65RC2yedJHl7p9TuQm4phUgICOy5VF_cJJXcGwmM0JSTzdHWLbwVi_eMktMWRxA9qfcG1tI9xdq8ktsE2Nqr45vh5ygwNvLJYi-7lS9c-z'),
(5, '21315048', 'Alva Paris', 1, 'Islam', 'Jakarta', '2021-09-26', '-', '082259500319', '21315048', 'c61SoPv7QiaxWiS8bhpK-D:APA91bEns45OzpgT9dmIEpY1fPmXNOXKhd8d6oPC9O48DaBLXEH14I0BGKcqm3NaRmWBt6fjffi7aLK-ehmeyM46WITP6K2UM-2PMWwQqVBxhAaJwgCHijDg7uwoydu37X7RmHWVj3jO');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id` int(11) NOT NULL,
  `tgl_peminjaman` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `peminjaman` text NOT NULL,
  `status_pinjam` int(11) NOT NULL,
  `alasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id`, `tgl_peminjaman`, `tgl_kembali`, `id_mahasiswa`, `peminjaman`, `status_pinjam`, `alasan`) VALUES
(14, '2021-02-27 20:27:54', '2021-03-06 20:27:54', 2, '9b755c0c197348e0816ded4ba1f828d9', 2, ''),
(15, '2021-02-28 04:43:26', '2021-03-07 04:43:26', 2, '10a58528684c4d98865e4ea7f9232295', 2, ''),
(16, '2021-02-28 06:02:14', '2021-03-07 06:02:14', 2, '894a28dec7204c0ca8a0fde92bef4a95', 5, 'buku sudah hilang'),
(17, '2021-02-28 06:05:33', '2021-03-07 06:05:33', 2, '1b57a23c42814b9fb2b2dba887d8fe4a', 5, 'sudah hilang'),
(18, '2021-02-28 07:01:01', '2021-03-07 07:01:01', 2, '133c6513ea1342168fc56bb569581a5d', 2, ''),
(19, '2021-02-28 07:05:40', '2021-03-07 07:05:40', 2, '1db807c662d5498da20a474fa104cd29', 2, ''),
(20, '2021-02-28 07:07:22', '2021-03-07 07:07:22', 2, 'a7de87a885eb436696c115a3580b74d2', 2, ''),
(21, '2021-02-28 14:17:32', '2021-03-07 14:17:32', 2, '62ed982fa62046aba452048a5ff7b4ac', 2, ''),
(22, '2021-02-28 14:54:22', '2021-03-07 14:54:22', 2, '447940f033264355b576661f40b7bd0d', 1, ''),
(23, '2021-02-28 20:08:33', '2021-03-07 20:08:33', 3, '2308a7d390984300a2fcf20ea104eaa4', 2, ''),
(24, '2021-03-11 22:34:03', '2021-03-18 22:34:03', 3, '0e7edd70ced64c3b89da0e3277385efb', 2, ''),
(25, '2021-03-15 13:05:34', '2021-03-16 13:05:34', 2, 'b3d5136965964888800ba22ec96e2999', 2, ''),
(26, '2021-03-13 13:22:34', '2021-03-14 13:22:34', 2, '8ac74eeffb1b42c5b5a31723426ff617', 2, ''),
(27, '2021-04-09 20:18:25', '2021-04-16 20:18:25', 1, '2ccf58c892114567a1274c48ca0be652', 2, ''),
(28, '2021-04-09 20:47:39', '2021-04-16 20:47:39', 1, '74c8b9d4a60a4328a3278818a138e41b', 2, ''),
(30, '2021-10-21 10:14:06', '2021-10-28 10:14:06', 5, '5dbb12f7824b4ce7ae27620c76c95c94', 2, ''),
(31, '2021-11-07 11:27:22', '2021-11-14 11:27:22', 1, '2bcb260baeb442e59338c6138353e96a', 2, ''),
(32, '2021-11-07 11:30:58', '2021-11-14 11:30:58', 1, 'a64b3be1b7e046f5b709fcd20382b7c9', 1, ''),
(33, '2022-12-22 00:37:35', '2022-12-29 00:37:35', 1, '288c2da1745c4e789cd39764bba2227c', 2, ''),
(34, '2022-12-22 00:50:41', '2022-12-29 00:50:41', 1, 'f49adaaacf924320acbf28e0c3a21999', 1, ''),
(35, '2022-12-22 01:13:23', '2022-12-29 01:13:23', 1, 'ce8490fd348549759c9fbc1af667fcb8', 1, ''),
(36, '2023-05-22 15:16:54', '2023-05-29 15:16:54', 1, '2353517803d340fc8a75321adfc1d72e', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman_item`
--

CREATE TABLE `tb_peminjaman_item` (
  `urutan` int(11) NOT NULL,
  `id_peminjam` text NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjaman_item`
--

INSERT INTO `tb_peminjaman_item` (`urutan`, `id_peminjam`, `id_mahasiswa`, `id_buku`) VALUES
(24, '927a98a397c54011858a5e99bdedd2e0', 1, 18),
(25, '927a98a397c54011858a5e99bdedd2e0', 1, 17),
(26, '927a98a397c54011858a5e99bdedd2e0', 1, 16),
(27, '9b755c0c197348e0816ded4ba1f828d9', 2, 18),
(28, '9b755c0c197348e0816ded4ba1f828d9', 2, 17),
(29, '10a58528684c4d98865e4ea7f9232295', 2, 13),
(30, '10a58528684c4d98865e4ea7f9232295', 2, 14),
(31, '894a28dec7204c0ca8a0fde92bef4a95', 2, 14),
(32, '894a28dec7204c0ca8a0fde92bef4a95', 2, 13),
(33, '1b57a23c42814b9fb2b2dba887d8fe4a', 2, 18),
(34, '1b57a23c42814b9fb2b2dba887d8fe4a', 2, 16),
(35, '133c6513ea1342168fc56bb569581a5d', 2, 15),
(36, '133c6513ea1342168fc56bb569581a5d', 2, 13),
(37, '133c6513ea1342168fc56bb569581a5d', 2, 14),
(38, '1db807c662d5498da20a474fa104cd29', 2, 15),
(39, '1db807c662d5498da20a474fa104cd29', 2, 13),
(40, '1db807c662d5498da20a474fa104cd29', 2, 18),
(41, '1db807c662d5498da20a474fa104cd29', 2, 17),
(42, 'a7de87a885eb436696c115a3580b74d2', 2, 18),
(43, 'a7de87a885eb436696c115a3580b74d2', 2, 17),
(44, 'a7de87a885eb436696c115a3580b74d2', 2, 15),
(45, 'a7de87a885eb436696c115a3580b74d2', 2, 16),
(46, 'a7de87a885eb436696c115a3580b74d2', 2, 14),
(47, 'a7de87a885eb436696c115a3580b74d2', 2, 13),
(48, '62ed982fa62046aba452048a5ff7b4ac', 2, 18),
(49, '62ed982fa62046aba452048a5ff7b4ac', 2, 17),
(50, '447940f033264355b576661f40b7bd0d', 2, 18),
(51, '447940f033264355b576661f40b7bd0d', 2, 17),
(52, '2308a7d390984300a2fcf20ea104eaa4', 3, 15),
(53, '2308a7d390984300a2fcf20ea104eaa4', 3, 16),
(54, '2308a7d390984300a2fcf20ea104eaa4', 3, 14),
(55, '0e7edd70ced64c3b89da0e3277385efb', 3, 18),
(56, '0e7edd70ced64c3b89da0e3277385efb', 3, 17),
(57, '0e7edd70ced64c3b89da0e3277385efb', 3, 15),
(58, '0e7edd70ced64c3b89da0e3277385efb', 3, 14),
(59, 'b3d5136965964888800ba22ec96e2999', 2, 18),
(60, 'b3d5136965964888800ba22ec96e2999', 2, 17),
(61, '8ac74eeffb1b42c5b5a31723426ff617', 2, 18),
(62, '8ac74eeffb1b42c5b5a31723426ff617', 2, 17),
(63, '2ccf58c892114567a1274c48ca0be652', 1, 19),
(64, '74c8b9d4a60a4328a3278818a138e41b', 1, 17),
(65, '52c6189108c549f7800f635374ff4a4f', 4, 17),
(66, '52c6189108c549f7800f635374ff4a4f', 4, 16),
(67, '52c6189108c549f7800f635374ff4a4f', 4, 14),
(68, '5dbb12f7824b4ce7ae27620c76c95c94', 5, 16),
(69, '5dbb12f7824b4ce7ae27620c76c95c94', 5, 15),
(70, '2bcb260baeb442e59338c6138353e96a', 1, 17),
(71, '2bcb260baeb442e59338c6138353e96a', 1, 16),
(72, 'a64b3be1b7e046f5b709fcd20382b7c9', 1, 17),
(73, '288c2da1745c4e789cd39764bba2227c', 1, 17),
(74, '288c2da1745c4e789cd39764bba2227c', 1, 16),
(75, 'f49adaaacf924320acbf28e0c3a21999', 1, 17),
(76, 'ce8490fd348549759c9fbc1af667fcb8', 1, 17),
(77, '2353517803d340fc8a75321adfc1d72e', 1, 17),
(78, '2353517803d340fc8a75321adfc1d72e', 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengembalian`
--

CREATE TABLE `tb_pengembalian` (
  `id` int(11) NOT NULL,
  `tgl_peminjaman` varchar(20) NOT NULL,
  `tgl_kembali` varchar(20) NOT NULL,
  `tgl_pengembalian` varchar(20) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `pengembalian` text NOT NULL,
  `denda` varchar(50) NOT NULL,
  `status_kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengembalian`
--

INSERT INTO `tb_pengembalian` (`id`, `tgl_peminjaman`, `tgl_kembali`, `tgl_pengembalian`, `id_mahasiswa`, `pengembalian`, `denda`, `status_kembali`) VALUES
(13, '2021-02-27 20:22:27', '2021-03-06 20:22:27', '2021-02-27 20:24:32', 1, '927a98a397c54011858a5e99bdedd2e0', '0', 1),
(14, '2021-02-27 20:27:54', '2021-03-06 20:27:54', '2021-02-27 20:28:24', 2, '9b755c0c197348e0816ded4ba1f828d9', '0', 1),
(15, '2021-02-28 04:43:26', '2021-03-07 04:43:26', '2021-02-28 06:01:15', 2, '10a58528684c4d98865e4ea7f9232295', '0', 1),
(16, '2021-02-28 07:01:01', '2021-03-07 07:01:01', '2021-02-28 07:02:45', 2, '133c6513ea1342168fc56bb569581a5d', '0', 1),
(17, '2021-02-28 07:05:40', '2021-03-07 07:05:40', '2021-02-28 07:07:06', 2, '1db807c662d5498da20a474fa104cd29', '0', 1),
(18, '2021-02-28 07:07:22', '2021-03-07 07:07:22', '2021-02-28 14:17:04', 2, 'a7de87a885eb436696c115a3580b74d2', '0', 1),
(19, '2021-02-28 14:17:32', '2021-03-07 14:17:32', '2021-03-11 22:22:39', 2, '62ed982fa62046aba452048a5ff7b4ac', '8000', 1),
(20, '2021-02-28 20:08:33', '2021-03-07 20:08:33', '2021-02-28 20:10:09', 3, '2308a7d390984300a2fcf20ea104eaa4', '0', 1),
(21, '2021-03-11 22:34:03', '2021-03-18 22:34:03', '2021-03-11 22:38:04', 3, '0e7edd70ced64c3b89da0e3277385efb', '0', 1),
(22, '2021-03-15 13:05:34', '2021-03-16 13:05:34', '2021-03-17 13:08:41', 2, 'b3d5136965964888800ba22ec96e2999', '2000', 1),
(23, '2021-03-13 13:22:34', '2021-03-14 13:22:34', '2021-03-17 13:23:30', 2, '8ac74eeffb1b42c5b5a31723426ff617', '6000', 1),
(24, '2021-04-09 20:18:25', '2021-04-16 20:18:25', '2021-04-18 20:19:33', 1, '2ccf58c892114567a1274c48ca0be652', '2000', 1),
(25, '2021-04-09 20:47:39', '2021-04-16 20:47:39', '2021-04-17 20:48:02', 1, '74c8b9d4a60a4328a3278818a138e41b', '1000', 1),
(27, '2021-10-21 10:14:06', '2021-10-28 10:14:06', '2021-10-21 10:15:08', 5, '5dbb12f7824b4ce7ae27620c76c95c94', '0', 1),
(28, '2021-11-07 11:27:22', '2021-11-14 11:27:22', '2021-11-07 11:30:43', 1, '2bcb260baeb442e59338c6138353e96a', '0', 1),
(29, '2022-12-22 00:37:35', '2022-12-29 00:37:35', '2022-12-22 00:50:11', 1, '288c2da1745c4e789cd39764bba2227c', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_mahasiswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`id`, `tanggal`, `id_mahasiswa`) VALUES
(1, '2021-11-17', '1'),
(2, '2021-11-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_qrqode`
--

CREATE TABLE `tb_qrqode` (
  `id` int(11) NOT NULL,
  `qr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_qrqode`
--

INSERT INTO `tb_qrqode` (`id`, `qr`) VALUES
(1, '1p2o3i4u5y6t7r8e9w0q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_administrator`
--
ALTER TABLE `tb_administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_peminjaman_item`
--
ALTER TABLE `tb_peminjaman_item`
  ADD PRIMARY KEY (`urutan`);

--
-- Indexes for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_administrator`
--
ALTER TABLE `tb_administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_peminjaman_item`
--
ALTER TABLE `tb_peminjaman_item`
  MODIFY `urutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
