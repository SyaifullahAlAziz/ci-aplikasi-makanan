-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 09:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_makanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_order`
--

CREATE TABLE `tb_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `no_antrian` varchar(225) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_order`
--

INSERT INTO `tb_detail_order` (`id_detail_order`, `no_antrian`, `id_user`, `id_menu`, `jml`) VALUES
(1, '2211171001', 1, 1, 2),
(2, '2211171001', 1, 2, 1),
(4, '2211171001', 1, 1, 2),
(5, '2211171001', 1, 2, 1),
(7, '2211171001', 1, 1, 2),
(8, '2211171001', 1, 2, 1),
(10, '2211171002', 1, 1, 2),
(11, '2211171002', 1, 2, 1),
(13, '2211171003', 1, 1, 2),
(14, '2211171003', 1, 2, 1),
(15, '2211171003', 1, 3, 1),
(16, '2211171003', 1, 4, 3),
(20, '2211171004', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `jenis`) VALUES
(1, 'Aneka Nasi'),
(2, 'Cepat Saji'),
(3, 'Kopi'),
(4, 'Jajanan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kantin`
--

CREATE TABLE `tb_kantin` (
  `id_kantin` int(11) NOT NULL,
  `nama_kantin` varchar(255) NOT NULL,
  `alamat_kantin` varchar(255) NOT NULL,
  `foto_kantin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kantin`
--

INSERT INTO `tb_kantin` (`id_kantin`, `nama_kantin`, `alamat_kantin`, `foto_kantin`) VALUES
(1, 'Food Corner Station A', 'Padang', 'https://www.astronauts.id/blog/wp-content/uploads/2022/08/Makanan-Khas-Daerah-tiap-Provinsi-di-Indonesia-Serta-Daerah-Asalnya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_kantin` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `harga_menu` varchar(255) NOT NULL,
  `foto_menu` varchar(255) NOT NULL,
  `deskripsi_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `id_jenis`, `id_kantin`, `nama_menu`, `harga_menu`, `foto_menu`, `deskripsi_menu`) VALUES
(1, 1, 1, 'Nasi + Ayam Bakar + Sayur', '15000', 'https://img-global.cpcdn.com/recipes/7fa7fdc21d48af83/680x482cq70/nasi-ayam-bakar-foto-resep-utama.jpg', 'Nasi ayam bakar dan lalapan serta sambal khas kami'),
(2, 4, 1, 'Es Teh', '5000', 'https://i.pinimg.com/originals/5d/31/ef/5d31ef90cd6c389e07bc48a08e583122.jpg', '-'),
(3, 1, 1, 'Nasi + Ayam Bakar + Sayur', '15000', 'https://img-global.cpcdn.com/recipes/7fa7fdc21d48af83/680x482cq70/nasi-ayam-bakar-foto-resep-utama.jpg', 'Nasi ayam bakar dan lalapan serta sambal khas kami'),
(4, 4, 1, 'Es Teh', '5000', 'https://i.pinimg.com/originals/5d/31/ef/5d31ef90cd6c389e07bc48a08e583122.jpg', '-'),
(5, 1, 1, 'Nasi + Ayam Bakar + Sayur', '15000', 'https://img-global.cpcdn.com/recipes/7fa7fdc21d48af83/680x482cq70/nasi-ayam-bakar-foto-resep-utama.jpg', 'Nasi ayam bakar dan lalapan serta sambal khas kami'),
(6, 4, 1, 'Es Teh', '5000', 'https://i.pinimg.com/originals/5d/31/ef/5d31ef90cd6c389e07bc48a08e583122.jpg', '-'),
(7, 1, 1, 'Nasi + Ayam Bakar + Sayur', '15000', 'https://img-global.cpcdn.com/recipes/7fa7fdc21d48af83/680x482cq70/nasi-ayam-bakar-foto-resep-utama.jpg', 'Nasi ayam bakar dan lalapan serta sambal khas kami'),
(8, 4, 1, 'Es Teh', '5000', 'https://i.pinimg.com/originals/5d/31/ef/5d31ef90cd6c389e07bc48a08e583122.jpg', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_antrian` varchar(255) NOT NULL,
  `lokasi_antar` varchar(255) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tgl_order` datetime NOT NULL DEFAULT current_timestamp(),
  `status_order` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `id_user`, `no_antrian`, `lokasi_antar`, `total_harga`, `tgl_order`, `status_order`) VALUES
(1, 1, '2211171001', 'a', 1000, '2022-11-17 18:45:56', 'Menunggu Konfirmasi'),
(2, 1, '2211171002', 'a', 1000, '2022-11-17 18:46:24', 'Sudah Dikonfirmasi'),
(3, 1, '2211171003', 'alamat lengkap berdasar jalan ibukota profinsi ', 1000, '2022-11-17 18:49:16', 'Menunggu Konfirmasi'),
(4, 1, '2211171004', 'a', 15000, '2022-11-17 20:59:58', 'Sudah Dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `alamat_user`, `username`, `password`) VALUES
(1, 'Agus', 'padang', 'agus', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  ADD PRIMARY KEY (`id_detail_order`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_kantin`
--
ALTER TABLE `tb_kantin`
  ADD PRIMARY KEY (`id_kantin`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_detail_order`
--
ALTER TABLE `tb_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kantin`
--
ALTER TABLE `tb_kantin`
  MODIFY `id_kantin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
