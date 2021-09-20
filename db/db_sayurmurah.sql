-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 09:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sayurmurah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` enum('SuperAdmin','Admin','User','Mitra') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `foto`, `telepon`, `password`, `akses`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Magang Jogja', 'adminer@magang.jogja', '', '08123123123', 'seveninc', 'SuperAdmin', 'aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `id_daerah` bigint(20) UNSIGNED NOT NULL,
  `nama_daerah` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pasar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`id_daerah`, `nama_daerah`, `jumlah_pasar`, `created_at`, `updated_at`) VALUES
(1, 'Yogyakarta', 17, '2021-09-16 07:23:09', '2021-09-16 07:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis_produk` bigint(20) UNSIGNED NOT NULL,
  `jenis_produk` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_jenis_produk` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_jenis_produk` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis_produk`, `jenis_produk`, `deskripsi_jenis_produk`, `foto_jenis_produk`, `created_at`, `updated_at`) VALUES
(1, 'Sayur', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', '', NULL, NULL),
(2, 'Buah', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', '', NULL, NULL),
(3, 'Daging', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', '', NULL, NULL),
(4, 'Seafood', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', '', NULL, NULL),
(5, 'Sembako', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', '', NULL, NULL),
(6, 'Rempah-rempah', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', '', NULL, NULL),
(7, 'Lauk-pauk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia ipsa suscipit praesentium illum blanditiis repellendus nulla quae aliquid beatae repudiandae.', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_09_13_071026_create_admin_table', 1),
(3, '2021_09_13_072818_create_daerah_table', 1),
(4, '2021_09_13_073005_create_detail_transaksi_table', 1),
(5, '2021_09_13_073251_create_jenis_produk_table', 1),
(6, '2021_09_13_073543_create_pasar_table', 1),
(7, '2021_09_13_074118_create_produk_table', 1),
(8, '2021_09_13_074505_create_status_transaksi_table', 1),
(9, '2021_09_13_074645_create_transaksi_table', 1),
(10, '2021_09_13_075218_create_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` bigint(20) UNSIGNED NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `nama_pasar` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pasar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pasar` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id_pasar`, `id_daerah`, `nama_pasar`, `alamat_pasar`, `foto_pasar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pasar Beringharjo', 'Jl. Pabringan No. 1', '', NULL, NULL),
(2, 1, 'Pasar Kranggan', 'Jl. Pangeran Diponegoro', '', NULL, NULL),
(3, 1, 'Pasar Gading', 'Jl. Mayjend. D.I Panjaitan, Yogyakarta', '', NULL, NULL),
(4, 1, 'Pasar Sentul', 'Jl. Sultan Agung Pakualaman', '', NULL, NULL),
(5, 1, 'Pasar Pace/Semaki', 'Jl. Kusumanegara, Semaki, Umbulharjo.', '', NULL, NULL),
(6, 1, 'Pasar Demangan', 'Jl. Gejayan No. 28 Demangan Sleman', '', NULL, NULL),
(7, 1, 'Pasar Condongcatur Yogyakarta', 'Jl Ringroad Utara, condongcatur, Sleman', '', NULL, NULL),
(8, 1, 'Pasar Colombo Yogyakarta', 'Jl Kaliurang Km.7 Yogyakarta', '', NULL, NULL),
(9, 1, 'Pasar Gedongkuning Yogyakarta', 'Jl. Kusumanegara, Umbulharjo, Yogyakarta Wilayah UPT Kotagede', '', NULL, NULL),
(10, 1, 'Pasar Prambanan', 'Jl. Raya Jogja-Solo, Kalasan. sekitar kawasan prambanan', '', NULL, NULL),
(11, 1, 'Pasar Prawirotaman', 'Jl. Parangtritis No. 103 Prawirotaman, Mantrijeron', '', NULL, NULL),
(12, 1, 'Pasar Telo Karangkajen', 'Jl. Sisingamangaraja barat jalan ,', '', NULL, NULL),
(13, 1, 'Pasar Giwangan', 'Kotagede', '', NULL, NULL),
(14, 1, 'Pasar Piyungan', 'Jl. Jogja - Wonosari', '', NULL, NULL),
(15, 1, 'Pasar Legi', 'Jl. Bugisan,', '', NULL, NULL),
(16, 1, 'Pasar Gamping', 'Jl. Wates Km 5 Gamping, Sleman', '', NULL, NULL),
(17, 1, ' Pasar Godean', 'Jl Godean KM utara jalan. kelurahan Sidoluhur, Godean, Sleman', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `id_pasar` int(11) NOT NULL,
  `nama_produk` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_transaksi`
--

CREATE TABLE `status_transaksi` (
  `id_status_transaksi` bigint(20) UNSIGNED NOT NULL,
  `status_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `nama_user` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pengiriman` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_total` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `total_kembali` int(11) NOT NULL,
  `bukti_bayar` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_user` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `email`, `password`, `telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Polije', 'Polijesip', 'polije@polije.sip', 'polije', '01231231213', 'MAstrip', '2021-09-16 07:28:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admin_email_unique` (`email`),
  ADD KEY `admin_id_admin_index` (`id_admin`);

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id_daerah`),
  ADD UNIQUE KEY `daerah_nama_daerah_unique` (`nama_daerah`),
  ADD KEY `daerah_id_daerah_index` (`id_daerah`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `detail_transaksi_id_detail_transaksi_index` (`id_detail_transaksi`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis_produk`),
  ADD UNIQUE KEY `jenis_produk_jenis_produk_unique` (`jenis_produk`),
  ADD KEY `jenis_produk_id_jenis_produk_index` (`id_jenis_produk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`),
  ADD UNIQUE KEY `pasar_nama_pasar_unique` (`nama_pasar`),
  ADD KEY `pasar_id_pasar_index` (`id_pasar`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  ADD PRIMARY KEY (`id_status_transaksi`),
  ADD KEY `status_transaksi_id_status_transaksi_index` (`id_status_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_id_transaksi_index` (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_username_unique` (`username`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id_daerah` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id_pasar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_transaksi`
--
ALTER TABLE `status_transaksi`
  MODIFY `id_status_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
