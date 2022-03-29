-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 29, 2022 alle 21:58
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `failed_jobs`
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
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `personal_access_tokens`
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

--
-- Dump dei dati per la tabella `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'myapptoken', '9c998669ad632060ce0e708db7c1c0fc0355b82ab4efe0e846340b123343c35c', '[\"*\"]', NULL, '2022-03-27 07:54:00', '2022-03-27 07:54:00'),
(4, 'App\\Models\\User', 3, 'myapptoken', 'fa7983884dfb6974b8e126181be0e8abae35949d44e9b3b58b7b8faf0f87e6b7', '[\"*\"]', NULL, '2022-03-27 08:05:28', '2022-03-27 08:05:28'),
(5, 'App\\Models\\User', 4, 'myapptoken', 'ec225f0c26066dfd396210c9b4656990949162901d09e29665af87f31ad3fd74', '[\"*\"]', NULL, '2022-03-27 12:21:28', '2022-03-27 12:21:28'),
(6, 'App\\Models\\User', 5, 'myapptoken', '96efc202a62819ef6ea1541341b51a65ea9b4a553dfd827be353a4c38cb01401', '[\"*\"]', NULL, '2022-03-27 12:22:37', '2022-03-27 12:22:37'),
(8, 'App\\Models\\User', 7, 'myapptoken', '00318bf01fe4f837631d0c333e7a59d5a5f8974e9edeed204a17140837366044', '[\"*\"]', NULL, '2022-03-27 12:23:55', '2022-03-27 12:23:55'),
(9, 'App\\Models\\User', 8, 'myapptoken', '965060e2762b2038b71584dc40d06a57c09d929ed1bda0b65c84c4fcf68d2ee7', '[\"*\"]', NULL, '2022-03-27 12:25:11', '2022-03-27 12:25:11'),
(10, 'App\\Models\\User', 3, 'myapptoken', '6b5e329c17584d84fb72774090573552b36b20f796016fe4fad299317addd3d2', '[\"*\"]', NULL, '2022-03-27 12:29:00', '2022-03-27 12:29:00'),
(11, 'App\\Models\\User', 3, 'myapptoken', '2b023a435a0bfc5918510961b46441379e6f3e6b62f875224ae25bb023fc7bf3', '[\"*\"]', NULL, '2022-03-27 12:29:12', '2022-03-27 12:29:12'),
(12, 'App\\Models\\User', 3, 'myapptoken', '224396d3b8962eea8172965d4498c1b79293f91fce97cda0747089234ae4baed', '[\"*\"]', NULL, '2022-03-27 12:29:22', '2022-03-27 12:29:22'),
(13, 'App\\Models\\User', 3, 'myapptoken', 'c3b0e4bd749159eb5a3f7f671034bf4c47b53e0557cfe9094c0ff9843702548c', '[\"*\"]', NULL, '2022-03-27 12:29:27', '2022-03-27 12:29:27'),
(14, 'App\\Models\\User', 6, 'myapptoken', '13b0dd886e08d16c0c27638d5b92ae2bccfb0d28abe9e91fddfe44899a30c3b4', '[\"*\"]', NULL, '2022-03-27 12:30:05', '2022-03-27 12:30:05'),
(15, 'App\\Models\\User', 6, 'myapptoken', '182be721d2d7a98c41505a8d517ab5a9c0762ba7e953c2badb2ba30663fb7a60', '[\"*\"]', '2022-03-27 12:31:22', '2022-03-27 12:30:47', '2022-03-27 12:31:22'),
(16, 'App\\Models\\User', 9, 'myapptoken', 'be260269c92bc7b61cb8a6e9986a389b88ef16e1d00ada8723a839c563b1c448', '[\"*\"]', '2022-03-27 12:35:06', '2022-03-27 12:34:23', '2022-03-27 12:35:06'),
(17, 'App\\Models\\User', 10, 'myapptoken', 'b182bff05fa75da2d35120a2c532c9a498276ba8fea487069ef9df09e4ebc54c', '[\"*\"]', NULL, '2022-03-27 12:38:10', '2022-03-27 12:38:10'),
(18, 'App\\Models\\User', 11, 'myapptoken', 'c6b34cb5489d0ee9b676a111b39ddc1d35cfb49a40360b05b3c36679705afa23', '[\"*\"]', NULL, '2022-03-27 12:39:30', '2022-03-27 12:39:30'),
(19, 'App\\Models\\User', 12, 'myapptoken', '20ab9ae11b403aa65d82eacc4162bb2bdda77cfc8107bf8707b6acc7537752b6', '[\"*\"]', NULL, '2022-03-27 12:40:48', '2022-03-27 12:40:48'),
(20, 'App\\Models\\User', 13, 'myapptoken', '2821b45e9b3c2dd2c1b390044a30c9005094774775441c40f443d4562b63c551', '[\"*\"]', NULL, '2022-03-27 12:41:22', '2022-03-27 12:41:22'),
(21, 'App\\Models\\User', 14, 'myapptoken', '968b7f3129a1ff8d03d62b4f5679551822639542faa3fe2551c4e5363e2a1847', '[\"*\"]', NULL, '2022-03-27 12:44:36', '2022-03-27 12:44:36'),
(22, 'App\\Models\\User', 15, 'myapptoken', '5efb172d618b27ae8128a23abed53e96cb9697e3e931da746e65fce9d996cb00', '[\"*\"]', NULL, '2022-03-27 12:46:27', '2022-03-27 12:46:27'),
(23, 'App\\Models\\User', 16, 'myapptoken', 'c12e3e5b4ce852cbdf2b9743856b474f7d3d17dd89c67925a88198b2875bec45', '[\"*\"]', NULL, '2022-03-27 12:47:12', '2022-03-27 12:47:12'),
(24, 'App\\Models\\User', 17, 'myapptoken', '9502693373798b0d40d6c2966f99995bd71a738b3c62d3d5d99a397dee0d63f6', '[\"*\"]', NULL, '2022-03-27 12:49:11', '2022-03-27 12:49:11'),
(25, 'App\\Models\\User', 18, 'myapptoken', '6d0d1d394e627c498045ae70b565dc2cdf1f24a18b19fcb315963c451979f319', '[\"*\"]', NULL, '2022-03-27 12:50:30', '2022-03-27 12:50:30'),
(26, 'App\\Models\\User', 19, 'myapptoken', 'fef55c49945bc8320833e68dcc1129fe72c97a56bd13f8a0b7ab4b0fd399a9c7', '[\"*\"]', NULL, '2022-03-27 12:56:07', '2022-03-27 12:56:07'),
(27, 'App\\Models\\User', 20, 'myapptoken', '7985ef989a572861c3dab24e54ec0d514c052bec627660b6dbe0fff88c75acb7', '[\"*\"]', NULL, '2022-03-27 13:00:28', '2022-03-27 13:00:28'),
(28, 'App\\Models\\User', 21, 'myapptoken', '1c247092a26d6f40ed90eb7551f949705f93de0e5a5d27d6320da3af7521c6f2', '[\"*\"]', NULL, '2022-03-29 16:56:27', '2022-03-29 16:56:27'),
(29, 'App\\Models\\User', 22, 'myapptoken', '3d6ffdca82c5cf7615b7e7842148759e42249c6555e94eeefb58b680a96118a8', '[\"*\"]', NULL, '2022-03-29 16:58:36', '2022-03-29 16:58:36'),
(30, 'App\\Models\\User', 23, 'myapptoken', '3c21c41294699f55a403c00bbff344a0b6ab78844659682a28686ae36db8d5b1', '[\"*\"]', NULL, '2022-03-29 17:06:56', '2022-03-29 17:06:56'),
(31, 'App\\Models\\User', 24, 'myapptoken', 'dae53b3bd5cef12b4c176f91fda5990d544253260dd470d4b467061de05b1780', '[\"*\"]', NULL, '2022-03-29 17:12:40', '2022-03-29 17:12:40'),
(32, 'App\\Models\\User', 25, 'myapptoken', '339821814f988076af360287eee55bf5669ee25f3395a6ef91f23446076b88f6', '[\"*\"]', NULL, '2022-03-29 17:13:52', '2022-03-29 17:13:52'),
(33, 'App\\Models\\User', 26, 'myapptoken', '7a0690302919b01db8df0a70d763ee0e3722445eb05627f841c65f92db5cdc99', '[\"*\"]', NULL, '2022-03-29 17:37:40', '2022-03-29 17:37:40'),
(34, 'App\\Models\\User', 27, 'myapptoken', 'b9cb1643da628c2825b3b726db5654243f9403bc158c071c3ebf695625fdf568', '[\"*\"]', NULL, '2022-03-29 17:38:15', '2022-03-29 17:38:15'),
(35, 'App\\Models\\User', 28, 'myapptoken', '5700c39b11d762043018d8e13f929af8fec701a4dcdd34e9f11b738af921112f', '[\"*\"]', NULL, '2022-03-29 17:40:02', '2022-03-29 17:40:02'),
(36, 'App\\Models\\User', 29, 'myapptoken', '439ec22d9dd015fd99831a1d32056701572f5024b79d2b12eac4578974137c17', '[\"*\"]', NULL, '2022-03-29 17:40:43', '2022-03-29 17:40:43'),
(37, 'App\\Models\\User', 30, 'myapptoken', 'dd5136f94fe1d8d7fa1f8529fd64b777f6cf3036a62aea2391eda51864d823c7', '[\"*\"]', NULL, '2022-03-29 17:41:35', '2022-03-29 17:41:35'),
(38, 'App\\Models\\User', 31, 'myapptoken', '8d9232c734c36579e59b717533b7069d00214e940649bc5a181c231bbf2f0a9b', '[\"*\"]', NULL, '2022-03-29 17:53:31', '2022-03-29 17:53:31');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(29, 'asd', 'assd@gmail.com', NULL, '$2y$10$nuLCVD.iQaTzVIFhBLc8wO2TLO.x.1rJ9PlVU7cLpg0s9kIGzhhZC', NULL, '2022-03-29 17:40:43', '2022-03-29 17:40:43'),
(30, 'asd', 'asdassd@asd', NULL, '$2y$10$8T7HqPyp93zQTxrYDM/Pgel5ZljcOIlu/dKPDVNVSVnPXORFQQ8Fi', NULL, '2022-03-29 17:41:35', '2022-03-29 17:41:35'),
(31, 'asdasdassd', 'asdasdassdasd@gmail.com', NULL, '$2y$10$RGMONqVnO/YJxZB2dDRZ3ee//e3Bi8WXbpgC/8Y5Grg/66s5Fk4FK', NULL, '2022-03-29 17:53:31', '2022-03-29 17:53:31');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indici per le tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
