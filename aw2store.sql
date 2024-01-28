-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jan-2024 às 22:03
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aw2store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `advertises`
--

CREATE TABLE `advertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `negotiable` tinyint(1) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `advertises`
--

INSERT INTO `advertises` (`id`, `title`, `slug`, `price`, `negotiable`, `description`, `contact`, `views`, `user_id`, `state_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Volkswagen Fusca 1968', 'fusca-68', '34991.50', 1, 'É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao olhar para seu layout.', '55111211211', 134, 1, 1, 1, '2024-01-25 19:04:38', '2024-01-28 19:25:24'),
(3, 'Fuscão 1', 'fusca-69', '75000.00', 1, 'É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao olhar para seu layout.', '55111211211', 257, 1, 1, 1, '2024-01-25 14:20:15', '2024-01-28 19:27:51'),
(4, 'Fuscão 2', 'fusca-70', '65000.00', 1, 'É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao olhar para seu layout.', '55111211211', 107, 1, 1, 1, '2024-01-28 14:22:19', '2024-01-28 19:28:00'),
(5, 'Fuscão 3', 'fusca-71', '55000.00', 1, 'É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao olhar para seu layout.', '55111211211', 101, 1, 1, 1, '2024-01-28 14:16:07', '2024-01-28 19:11:43'),
(6, 'Fuscão 4', 'fusca-72', '45000.00', 1, 'É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao olhar para seu layout.', '55111211211', 156, 2, 1, 1, '2024-01-25 19:04:38', '2024-01-28 19:10:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `advertise_images`
--

CREATE TABLE `advertise_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `advertise_id` bigint(20) UNSIGNED NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `advertise_images`
--

INSERT INTO `advertise_images` (`id`, `url`, `advertise_id`, `featured`, `created_at`, `updated_at`) VALUES
(2, '/assets/adFusca/fusca.png', 2, 1, NULL, NULL),
(3, '/assets/adFusca/fusca6.png', 2, 0, NULL, NULL),
(4, '/assets/adFusca/fusca7.png', 4, 1, NULL, NULL),
(5, '/assets/adFusca/fusca8.png', 2, 0, NULL, NULL),
(9, '/assets/adFusca/fusca8.png', 3, 1, NULL, NULL),
(10, '/assets/adFusca/fusca2.png', 3, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Veículos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_27_203452_create_categories__table', 1),
(6, '2023_10_27_203951_create_states_table', 1),
(7, '2023_10_27_205102_alter_table_users_add_state', 1),
(8, '2023_10_27_210349_create_advertises_table', 1),
(9, '2023_10_29_074637_create_table_advertise_images', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Acre'),
(2, 'Alagoas'),
(3, 'Amapá'),
(4, 'Amazonas'),
(5, 'Bahia'),
(6, 'Ceará'),
(7, 'Distrito Federal'),
(8, 'Espírito Santo'),
(9, 'Goiás'),
(10, 'Maranhão'),
(11, 'Mato Grosso'),
(12, 'Mato Grosso do Sul'),
(13, 'Minas Gerais'),
(14, 'Pará'),
(15, 'Paraíba'),
(16, 'Paraná'),
(17, 'Pernambuco'),
(18, 'Piauí'),
(19, 'Rio de Janeiro'),
(20, 'Rio Grande do Norte'),
(21, 'Rio Grande do Sul'),
(22, 'Rondônia'),
(23, 'Roraima'),
(24, 'Santa Catarina'),
(25, 'São Paulo'),
(26, 'Sergipe'),
(27, 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `state_id`) VALUES
(1, 'Carlos', 'car@gmail.com', NULL, '$2y$10$CTOH7CmMcoaYyY9AHsKA1OIJSDe6BS5kKIY8BelwXf.TXNBI8LgTu', NULL, '2024-01-25 18:02:21', '2024-01-25 18:02:26', 16);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `advertise_images`
--
ALTER TABLE `advertise_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertise_images_advertise_id_foreign` (`advertise_id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories__name_unique` (`name`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `states_name_unique` (`name`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `advertise_images`
--
ALTER TABLE `advertise_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `advertise_images`
--
ALTER TABLE `advertise_images`
  ADD CONSTRAINT `advertise_images_advertise_id_foreign` FOREIGN KEY (`advertise_id`) REFERENCES `advertises` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
