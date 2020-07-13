-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 13-Jul-2020 às 02:13
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `programa_empresas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `title`, `phone`, `adress`, `zipcode`, `city`, `state`, `drescription`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Pizzaria Torre ', '(14)3815-6487', 'Rua Francisco Caricati 436', '18603-100', 'Recife', 'Pernambuco', 'Melhor comida da cidade, venha para o restaurante que lhe dará aquele gostinho da comida da mama', 'Food and Dining', '2020-07-13 01:06:45', '2020-07-13 01:06:45'),
(2, 'Farmácia São Lucas', '(14)3815-6487', 'Rua Beira Mar 545 Praia da Boa Viagem', '88888-888', 'São Lucas', 'Rio Grande do Sul', 'São Lucas a melhor farmácia que fica na Rua São Lucas da cidade de São Lucas', 'Health', '2020-07-13 01:09:19', '2020-07-13 01:09:19'),
(3, 'A Roda', '(14)3815-6487', 'Rua Francisco Caricati 436', '18603-100', 'Recife', 'Rio de Janeiro', 'Melhor tratamento para o seu carro.', 'Auto', '2020-07-13 01:14:10', '2020-07-13 01:14:10'),
(4, 'Loja do esportista', '(11)1111-1111', 'Rua Do Treinador', '88888-888', 'São Paulo', 'Rio de Janeiro', 'Melhor lugar para você que é esportista', 'Health', '2020-07-13 01:26:34', '2020-07-13 01:26:34'),
(5, 'Restaurante Santa Massa', '(15)-3886-5555', 'Rua Das Árvoves, 556', '99999-999', 'Bauru', 'São Paulo', 'Melhor lugar para se comer uma pizza de qualidade', 'Food and Dining', '2020-07-13 01:35:50', '2020-07-13 01:35:50'),
(6, 'Loja de frutas', '(14)3815-6487', 'Rua Francisco Caricati 436', '(14)38156487', 'Salvador', 'Bahia', 'Melhor loja de frutas da cidade', 'Food and Dining', '2020-07-13 04:50:34', '2020-07-13 04:50:34'),
(7, 'Viagem bem', '(11)3311-0099', 'Avenida Paulista, 1000', '0300-100', 'São Paulo', 'São Paulo', 'Viagem com a viagem bem e seja feliz.\r\nNós somos a única empresa de viagem que tem as melhores promoções.', 'Travel', '2020-07-13 04:51:57', '2020-07-13 04:51:57'),
(8, 'Cantina da Mama', '(14)7777-7777', 'Rua Beira Mar 545 Praia da Boa Viagem', '77777-777', 'Recife', 'Pernambuco', 'Venha na cantina da mama e seja feliz, só a cantina da mama tem os melhores pratos para você', 'Food and Dining', '2020-07-13 04:53:00', '2020-07-13 04:53:00'),
(9, 'Auto Peças São José', '(14)3311-8719', 'Rua José Soares, 1128', '18610-100', 'Botucatu', 'São Paulo', 'Melhor lugar para o seu carro, só aqui temos as melhores peças para vocês', 'Auto', '2020-07-13 04:54:09', '2020-07-13 04:54:09'),
(10, 'Cinema em Casa', '(14)3815-6487', 'Rua do Cinema, 394', '18603-200', 'Curitiba', 'Paraná', 'Você acha que alugar filmes está fora de moda, aí que vocês está enganado. Só na cinema em casa temos os melhores vídeos.', 'Entertainment', '2020-07-13 04:56:16', '2020-07-13 04:56:16'),
(11, 'Salão de Beleza A Bela', '(11)1111-1111', 'Rua Beira Mar 545 Praia da Boa Viagem', '88888-888', 'Recife', 'Pernambuco', 'Melhor salão de beleza do Nordeste venha aqui e fique bela', 'Beautyfull and Fitness', '2020-07-13 05:03:24', '2020-07-13 05:03:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_12_055241_create_model_empresas_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
