-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 02:03 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sayurmurah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `password` varchar(8) NOT NULL,
  `id_akses` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1. aktif / 2. nonaktif',
  `time_in_usr` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `hak_akses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `hak_akses`) VALUES
(1, 'Super admin'),
(2, 'Admin'),
(3, 'Mitra');

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `id_daerah` int(11) NOT NULL,
  `nama_daerah` varchar(50) NOT NULL,
  `jumlah_pasar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`id_daerah`, `nama_daerah`, `jumlah_pasar`) VALUES
(1, 'Yogyakarta', 17),
(2, 'Bandung', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis_produk` int(11) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `deskripsi_jenis_produk` text NOT NULL,
  `foto_jenis_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis_produk`, `jenis_produk`, `deskripsi_jenis_produk`, `foto_jenis_produk`) VALUES
(1, 'Sayur', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', ''),
(2, 'Buah', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', ''),
(3, 'Daging', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', ''),
(4, 'Seafood', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', ''),
(5, 'Sembako', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', ''),
(6, 'Rempah-rempah', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', ''),
(7, 'Lauk-pauk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', '');

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `nama_pasar` varchar(50) NOT NULL,
  `alamat_pasar` text NOT NULL,
  `foto_pasar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id_pasar`, `id_daerah`, `nama_pasar`, `alamat_pasar`, `foto_pasar`) VALUES
(1, 1, 'Pasar Beringharjo', 'Jl. Pabringan No. 1', ''),
(2, 1, 'Pasar Kranggan', 'Jl. Pangeran Diponegoro', ''),
(3, 1, 'Pasar Gading', 'Jl. Mayjend. D.I Panjaitan, Yogyakarta', ''),
(4, 1, 'Pasar Sentul', 'Jl. Sultan Agung Pakualaman', ''),
(5, 1, 'Pasar Pace/Semaki', 'Jl. Kusumanegara, Semaki, Umbulharjo.', ''),
(6, 1, 'Pasar Demangan', 'Jl. Gejayan No. 28 Demangan Sleman', ''),
(7, 1, 'Pasar Condongcatur Yogyakarta', 'Jl Ringroad Utara, condongcatur, Sleman', ''),
(8, 1, 'Pasar Colombo Yogyakarta', 'Jl Kaliurang Km.7 Yogyakarta', ''),
(9, 1, 'Pasar Gedongkuning Yogyakarta', 'Jl. Kusumanegara, Umbulharjo, Yogyakarta Wilayah UPT Kotagede', ''),
(10, 1, 'Pasar Prambanan', 'Jl. Raya Jogja-Solo, Kalasan. sekitar kawasan prambanan', ''),
(11, 1, 'Pasar Prawirotaman', 'Jl. Parangtritis No. 103 Prawirotaman, Mantrijeron', ''),
(12, 1, 'Pasar Telo Karangkajen', 'Jl. Sisingamangaraja barat jalan ,', ''),
(13, 1, 'Pasar Giwangan', 'Kotagede', ''),
(14, 1, 'Pasar Piyungan', 'Jl. Jogja - Wonosari', ''),
(15, 1, 'Pasar Legi', 'Jl. Bugisan,', ''),
(16, 1, 'Pasar Gamping', 'Jl. Wates Km 5 Gamping, Sleman', ''),
(17, 1, ' Pasar Godean', 'Jl Godean KM utara jalan. kelurahan Sidoluhur, Godean, Sleman', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_pasar` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_jenis_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status_transaksi`
--

CREATE TABLE `status_transaksi` (
  `id_status_transaksi` int(11) NOT NULL,
  `status_transaksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nama_pembeli` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `sub_total` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `bukti_pemabayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_akses` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis_produk`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  ADD PRIMARY KEY (`id_status_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id_daerah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id_pasar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  MODIFY `id_status_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
