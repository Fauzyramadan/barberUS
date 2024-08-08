-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2024 pada 12.48
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usbarber`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `confirmDate` date NOT NULL,
  `confirmJam` varchar(255) NOT NULL,
  `confirmService` varchar(255) NOT NULL,
  `confirmPrice` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`id`, `name`, `nohp`, `confirmDate`, `confirmJam`, `confirmService`, `confirmPrice`, `created_at`, `updated_at`) VALUES
(26, 'Erik Bagja Nugraha', '082129348348', '2024-07-20', '09.00', 'Standard', 'Rp. 20.000', '2024-07-19 22:57:19', '2024-07-19 22:57:19'),
(27, 'Erik Bagja Nugraha', '082129348348', '2024-08-06', '13.00', 'Full Package', 'Rp. 30.000', '2024-08-06 02:55:57', '2024-08-06 02:55:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_25_022434_create_posts_table', 2),
(6, '2024_04_25_025317_create_bulans_table', 3),
(7, '2024_04_25_025348_create_tanggals_table', 3),
(8, '2024_04_25_025401_create_jams_table', 3),
(9, '2024_04_25_025441_create_jadwals_table', 3),
(10, '2024_04_25_025456_create_bookings_table', 3),
(11, '2024_04_25_025518_create_bookings_table', 4),
(12, '2024_05_11_053614_create_bookings_table', 5),
(13, '2024_05_18_180506_create_jadwals_table', 6),
(14, '2024_05_18_180915_create_jadwals_table', 7),
(15, '2024_05_23_105125_create_jadwals_table', 8),
(16, '2024_05_23_115435_create_jadwals_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('fauzyfauzy288@gmail.com', '$2y$12$irn0B3f6EsTZt5jHxno6Ze5aZuHt1ChXVx0YnBbkQqWDDkfj.Lwqm', '2024-07-19 22:26:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggals`
--

CREATE TABLE `tanggals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tanggals`
--

INSERT INTO `tanggals` (`id`, `tanggal`, `jam`, `status`, `created_at`, `updated_at`) VALUES
(41, '2024-05-24', '08.00', 1, '2024-05-24 03:24:14', '2024-05-24 04:03:47'),
(42, '2024-05-24', '09.00', 1, '2024-05-24 03:24:14', '2024-05-24 03:35:53'),
(43, '2024-05-24', '10.00', 1, '2024-05-24 03:24:14', '2024-05-24 04:09:09'),
(44, '2024-05-24', '11.00', 1, '2024-05-24 04:11:12', '2024-05-24 04:11:35'),
(45, '2024-05-24', '19.00', 1, '2024-05-24 04:11:12', '2024-05-24 04:15:20'),
(46, '2024-07-20', '08.00', 0, '2024-07-19 22:56:59', '2024-07-19 22:56:59'),
(47, '2024-07-20', '09.00', 1, '2024-07-19 22:56:59', '2024-07-19 22:57:19'),
(48, '2024-07-20', '10.00', 0, '2024-07-19 22:56:59', '2024-07-19 22:56:59'),
(49, '2024-07-20', '15.00', 0, '2024-07-19 22:56:59', '2024-07-19 22:56:59'),
(50, '2024-07-20', '16.00', 0, '2024-07-19 22:56:59', '2024-07-19 22:56:59'),
(51, '2024-07-20', '17.00', 0, '2024-07-19 22:56:59', '2024-07-19 22:56:59'),
(52, '2024-08-06', '08.00', 0, '2024-08-06 02:55:27', '2024-08-06 02:55:27'),
(53, '2024-08-06', '13.00', 1, '2024-08-06 02:55:27', '2024-08-06 02:55:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nohp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `nohp`, `password`, `isadmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Fauzy Ramadan', 'fauzyfauzy288@gmail.com', NULL, '089647333794', '$2y$12$eUHTSrk8y8otgrp3s5Gga.vjkEMRnrUaPri1qqUkcjxDCElSZzo/e', 1, NULL, '2024-07-19 22:28:59', '2024-07-19 22:28:59'),
(12, 'Erik Bagja Nugraha', 'erikbagja@gmail.com', NULL, '082129348348', '$2y$12$zFJ8KkSAERCuxHQ9okYSxOL9CJS72qBJAB408GPmRLgwih7PGPf4i', 0, NULL, '2024-07-19 22:31:06', '2024-07-19 22:31:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tanggals`
--
ALTER TABLE `tanggals`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanggals`
--
ALTER TABLE `tanggals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
