-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2022 pada 09.33
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spesialis_jb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduanjasas`
--

CREATE TABLE `aduanjasas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ajuans`
--

CREATE TABLE `ajuans` (
  `kd_ajuan` int(10) UNSIGNED NOT NULL,
  `kd_jasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_userpelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_15_173940_create_produkjasas_table', 1),
(5, '2021_07_25_155010_create_aduanjasas_table', 1),
(6, '2021_08_02_114228_create_ajuans_table', 1),
(7, '2021_10_02_111616_create_tambahreks_table', 1),
(8, '2022_03_19_034018_create_pengajuans_table', 1),
(9, '2022_03_19_034048_create_sarans_table', 1),
(10, '2022_04_18_035348_add_paid_to_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuans`
--

CREATE TABLE `pengajuans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_produk` int(10) UNSIGNED NOT NULL,
  `kd_user` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produkjasas`
--

CREATE TABLE `produkjasas` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_user` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pembuatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produkjasas`
--

INSERT INTO `produkjasas` (`id`, `kd_user`, `nama_toko`, `jenis_pembuatan`, `alamat`, `phone`, `harga`, `latitude`, `longitude`, `gambar`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Ilham Store', 'Pembuatan Pagar', 'Tegal', '098378949878', '120000', '-6.940230799999999', '109.1402522', 'produkjasa/pagar1.jpg', 'pembuatan pagar bergaransi', 'jasa', '2022-04-19 00:31:45', '2022-04-19 00:31:45'),
(2, 3, 'Ilham Store', 'Material Semen', 'Tegal', '098378949878', '50000', '-6.940230799999999', '109.1402522', 'produkjasa/semen.jpg', 'menyediakan semen bangunan', 'material', '2022-04-19 00:31:45', '2022-04-19 00:31:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sarans`
--

CREATE TABLE `sarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_produk` int(10) UNSIGNED NOT NULL,
  `kd_user` bigint(20) UNSIGNED NOT NULL,
  `kd_pengajuan` int(10) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambahreks`
--

CREATE TABLE `tambahreks` (
  `kd_rekening` int(10) UNSIGNED NOT NULL,
  `kd_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fcm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `alamat`, `phone`, `status`, `gambar`, `remember_token`, `created_at`, `updated_at`, `fcm`) VALUES
(1, 'admin123', 'admin@gmail.com', NULL, '$2y$10$XO1Kig8JP1cVt6AKq0I7z.h66Bo5Q5Ai4sSmJoXkkTYJ95/gAe/YK', 'Tegal', '09837894', 'admin', 'produkjasa/profil1.png', NULL, '2022-04-19 00:31:45', '2022-04-19 00:31:45', NULL),
(2, 'ilham muzani', 'ilham123@gmail.com', NULL, '$2y$10$jbLBkmQj6R5nObLcmwCBGeIsE4sbjQry9VkftSVlG1MNMJIm97d5y', 'Tegal', '09837894', 'pelanggan', 'profil.jpg', NULL, '2022-04-19 00:31:45', '2022-04-19 00:31:45', NULL),
(3, 'Ahmad Alfarizi', 'userjasa@gmail.com', NULL, '$2y$10$bZI10pTjXdbJIBL6OD4yV.GLeUU4mklu6zvxKqHAUMnbyjByJEdJC', 'Tegal', '09837894987', 'jasa', 'profil1.jpg', NULL, '2022-04-19 00:31:45', '2022-04-19 00:31:45', NULL),
(4, 'admin123', 'admin123@gmail.com', NULL, '$2y$10$XO1Kig8JP1cVt6AKq0I7z.h66Bo5Q5Ai4sSmJoXkkTYJ95/gAe/YK', 'Tegal', '09837894987', 'jasa', 'profil1.jpg', NULL, '2022-04-19 00:31:45', '2022-04-19 00:31:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aduanjasas`
--
ALTER TABLE `aduanjasas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ajuans`
--
ALTER TABLE `ajuans`
  ADD PRIMARY KEY (`kd_ajuan`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajuans_kd_produk_foreign` (`kd_produk`),
  ADD KEY `pengajuans_kd_user_foreign` (`kd_user`);

--
-- Indeks untuk tabel `produkjasas`
--
ALTER TABLE `produkjasas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produkjasas_kd_user_foreign` (`kd_user`);

--
-- Indeks untuk tabel `sarans`
--
ALTER TABLE `sarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sarans_kd_produk_foreign` (`kd_produk`),
  ADD KEY `sarans_kd_user_foreign` (`kd_user`),
  ADD KEY `sarans_kd_pengajuan_foreign` (`kd_pengajuan`);

--
-- Indeks untuk tabel `tambahreks`
--
ALTER TABLE `tambahreks`
  ADD PRIMARY KEY (`kd_rekening`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aduanjasas`
--
ALTER TABLE `aduanjasas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ajuans`
--
ALTER TABLE `ajuans`
  MODIFY `kd_ajuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengajuans`
--
ALTER TABLE `pengajuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produkjasas`
--
ALTER TABLE `produkjasas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sarans`
--
ALTER TABLE `sarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tambahreks`
--
ALTER TABLE `tambahreks`
  MODIFY `kd_rekening` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengajuans`
--
ALTER TABLE `pengajuans`
  ADD CONSTRAINT `pengajuans_kd_produk_foreign` FOREIGN KEY (`kd_produk`) REFERENCES `produkjasas` (`id`),
  ADD CONSTRAINT `pengajuans_kd_user_foreign` FOREIGN KEY (`kd_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `produkjasas`
--
ALTER TABLE `produkjasas`
  ADD CONSTRAINT `produkjasas_kd_user_foreign` FOREIGN KEY (`kd_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `sarans`
--
ALTER TABLE `sarans`
  ADD CONSTRAINT `sarans_kd_pengajuan_foreign` FOREIGN KEY (`kd_pengajuan`) REFERENCES `pengajuans` (`id`),
  ADD CONSTRAINT `sarans_kd_produk_foreign` FOREIGN KEY (`kd_produk`) REFERENCES `produkjasas` (`id`),
  ADD CONSTRAINT `sarans_kd_user_foreign` FOREIGN KEY (`kd_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
