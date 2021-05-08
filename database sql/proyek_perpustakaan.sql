-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 04:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_15_165252_tambah_kolom_time', 2),
(5, '2021_04_26_153145_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `id_login` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `jurusan`, `created_at`, `updated_at`) VALUES
(1631720255, 'Bisri Musthofa', 'Jayapura', '1998-04-14', 'Laki-laki', 'Teknik Mesin', NULL, NULL),
(1641720012, 'Zainal Abidin', 'Pontianak', '1998-01-06', 'Laki-laki', 'Teknik Mesin', NULL, NULL),
(1731720085, 'Dinda Miftah', 'Banyuwangi', '1999-07-11', 'Perempuan', 'Teknik Kimia', NULL, NULL),
(1741720128, 'Putra Candra', 'Semarang', '1998-07-27', 'Laki-laki', 'Teknologi Informasi', NULL, NULL),
(1831720015, 'Tita Wijaya', 'Medan', '1997-10-14', 'Perempuan', 'Akuntansi', NULL, NULL),
(1831720022, 'Widad Bariroh', 'Malang', '2000-09-04', 'Perempuan', 'Administrasi Niaga', NULL, NULL),
(1841720050, 'Krisna Blue', 'Jakarta', '1999-08-05', 'Laki-laki', 'Teknik Elektro', NULL, NULL),
(1941720061, 'Spongebob', 'Pasuruan', '2001-03-15', 'Laki-laki', 'Teknik Sipil', NULL, NULL),
(2031720128, 'Haris Vriza Milano', 'Bogor', '2002-12-05', 'Laki-laki', 'Teknik Kimia', NULL, NULL),
(2041720043, 'Nuril Faizah ', 'Palembang', '2001-05-15', 'Perempuan', 'Teknologi Informasi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` varchar(11) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(1, 'Belajar Pemrograman Web', 'Nadia Layra', 'Mediamurah', '2002', '123NBGYE67', 10, 'rak2', '2020-12-16'),
(2, 'Dasar Pemrograman', 'Tita Wijaya', 'Halomedia', '2005', '7349GFK12Y', 15, 'rak1', '2020-12-02'),
(3, 'Basis Data Lanjut', 'Cinderella', 'Mediamurah', '2007', '1205DEY765', 34, 'rak3', '2020-12-27'),
(4, 'Pemrograman Android', 'Natasya Wilona', 'FunMedia', '2000', '512CB76N6Q', 49, 'rak1', '2020-12-10'),
(6, 'Menembus Impian', 'Abidah el Khalieqy', 'Gagas Media', '1997', 'GT45DXC230', 37, 'rak3', '2019-10-14'),
(7, 'Merpati Biru', 'Achmad Munif', 'Grasindo', '2006', '65VEW2309B', 62, 'rak2', '2018-09-18'),
(8, 'Metode Karakterisasi Telaah Fiksi', 'Albertine Minderop', 'Mediamurah', '1998', '97FG54CXS1', 72, 'rak2', '2020-01-06'),
(9, 'Sekeping Tanda', 'Andi Wirambara', 'Gagas Media', '2010', 'HT340WELO5', 48, 'rak2', '2017-10-07'),
(10, 'Beton Non-Pasir ', 'Diarto Trisnoyuwono', 'Graha Ilmu ', '2003', '540DFMB20D', 39, 'rak2', '2017-01-16'),
(11, 'Ilmu Ukur Tanah', 'Slamet Basuki', 'Graha Ilmu ', '1993', '75VF0DS34V', 90, 'rak3', '2013-04-19'),
(12, 'Drainase Perkotaan', 'Wesli ', 'Grasindo', '2006', '608BVW23C4', 17, 'rak2', '2020-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_pinjam` varchar(255) NOT NULL,
  `tgl_kembali` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nis`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 'Dasar Pemrograman', '1941720061', 'Spongebob', '04-12-2020', '11-12-2020', 'Pinjam'),
(2, 'Basis Data Lanjut', '1841720050', 'Krisna Blue', '07-12-2020', '14-12-2020', 'Kembali'),
(3, 'Pemrograman Android', '1841720050', 'Krisna Blue', '24-12-2020', '31-12-2020', 'Kembali'),
(4, 'Pemrograman Android', '1831720015', 'Tita Wijaya', '24-12-2020', '31-12-2020', 'Kembali'),
(5, 'Basis Data Lanjut', '1831720015', 'Tita Wijaya', '24-12-2020', '14-01-2021', 'pinjam'),
(6, 'Merpati Biru', '2041720043', 'Nuril Faizah ', '29-12-2020', '05-01-2021', 'pinjam'),
(7, 'Ilmu Ukur Tanah', '1831720022', 'Widad Bariroh', '29-12-2020', '05-01-2021', 'pinjam'),
(8, 'Menembus Impian', '1731720085', 'Dinda Miftah', '29-12-2020', '05-01-2021', 'pinjam'),
(9, 'Sekeping Tanda', '2031720128', 'Haris Vriza Milano', '29-12-2020', '05-01-2021', 'Kembali'),
(10, 'Beton Non-Pasir ', '1741720128', 'Putra Candra', '29-12-2020', '05-01-2021', 'pinjam'),
(11, 'Drainase Perkotaan', '1631720255', 'Bisri Musthofa', '29-12-2020', '05-01-2021', 'pinjam'),
(12, 'Pemrograman Android', '1741720128', 'Putra Candra', '29-12-2020', '05-01-2021', 'pinjam'),
(13, 'Ilmu Ukur Tanah', '1831720015', 'Tita Wijaya', '29-12-2020', '05-01-2021', 'pinjam'),
(14, 'Merpati Biru', '2031720128', 'Haris Vriza Milano', '29-12-2020', '05-01-2021', 'pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'avatar5.png'),
(2, 'user', 'user', 'user', 'user', 'login.png'),
(3, 'nadia', '12345', 'nadia', 'user', 'nadia.jpg'),
(4, 'tita', 'tita', 'tita', 'admin', 'tita.jpg'),
(5, 'wijayanti', 'wijayanti', 'wijayanti', 'user', 'wijayanti.jpg'),
(6, 'yushintia', 'yushintia', 'yushintia', 'admin', 'yushintia.jpg'),
(7, 'lala', 'lala', 'lala', 'user', 'lala.jpg'),
(8, 'guest', 'guest', 'guest', 'user', 'guest.jpg'),
(9, 'heffy', 'heffy', 'heffy', 'admin', 'heffy.jpg'),
(10, 'muhammad', 'muhammad', 'muhammad', 'admin', 'muhammad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL COMMENT '0 super, 1 admin, 2 siswa',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'euy@email.com', NULL, '$2y$10$h6Q7.ZQxCIMgaUtt41b3I.oq0ffx9DfNfPlETLpskunJKOeq4RLr2', 0, NULL, '2021-04-12 08:43:00', '2021-04-12 08:43:00'),
(4, 'admin', 'admin@email.com', NULL, '$2y$10$gFGF7r.UgbTrYJPE3L14ruoXQB.S7NzJ/8c6Lkvti.2d8knkLnLZS', 1, NULL, '2021-05-08 07:18:47', '2021-05-08 07:18:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`id`),
  ADD KEY `nim_2` (`id`),
  ADD KEY `nim_3` (`id`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nim` (`nis`),
  ADD KEY `nim_2` (`nis`),
  ADD KEY `nim_3` (`nis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
