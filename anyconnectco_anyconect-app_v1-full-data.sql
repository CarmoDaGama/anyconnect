-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02-Abr-2026 às 11:35
-- Versão do servidor: 10.6.20-MariaDB-cll-lve
-- versão do PHP: 8.1.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `anyconnectco_anyconect-app_v1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Datacenter', 'datacenter', '2025-09-04 08:05:06', '2025-09-04 08:05:06'),
(2, 'Conectividade', 'conectividade', '2025-09-04 08:05:06', '2025-09-04 08:05:06'),
(3, 'Outros', 'outros', '2025-09-04 08:05:06', '2025-09-04 08:05:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_servico`
--

CREATE TABLE `categoria_servico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria_id` bigint(20) UNSIGNED NOT NULL,
  `servico_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categoria_servico`
--

INSERT INTO `categoria_servico` (`id`, `categoria_id`, `servico_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '2025-09-04 09:17:40', '2025-09-04 09:17:40'),
(9, 1, 10, '2025-09-04 09:17:40', '2025-09-04 09:17:40'),
(11, 3, 7, NULL, NULL),
(12, 2, 3, NULL, NULL),
(14, 2, 6, NULL, NULL),
(15, 1, 5, NULL, NULL),
(16, 3, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lançamentos de Produtos e Serviços', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(2, 'Tecnologia e Inovação', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(3, 'Cobertura e Expansão de Rede', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(4, 'Promoções e Ofertas Especiais', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(5, 'Tutoriais e Dicas', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(6, 'Segurança Digital', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(7, 'Tendências do Mercado', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(8, 'Responsabilidade Social', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(9, 'Eventos e Parcerias', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(10, 'Comunicados Oficiais', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(11, 'Relatórios e Dados', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(12, 'Políticas e Regulações', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(13, 'Iniciativas Corporativas', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(14, 'Crises e Respostas', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(15, 'Histórias de Sucesso', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(16, 'Prêmios e Reconhecimentos', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(17, 'Notas de Imprensa', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(18, 'Carreiras e Oportunidades', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(19, 'Educação e Treinamento', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(20, 'Histórias de Clientes', '2025-01-17 06:22:34', '2025-01-17 06:22:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `imprensas`
--

CREATE TABLE `imprensas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `imprensas`
--

INSERT INTO `imprensas` (`id`, `created_by`, `slug`, `title`, `cover`, `content`, `category_id`, `views`, `created_at`, `updated_at`) VALUES
(1, 1, 'engenheiro-maximino-paca-recebe-mencao-honrosa-no-angotic-2024', 'Engenheiro Maximino Paca, recebe menção honrosa no ANGOTIC 2024', 'covers/OwzG6aRJuVDSiW4IugEnejiNucbkDgYGzSn39BzX.jpg', '<p>Na edi&ccedil;&atilde;o do <strong>ANGOTIC 2024</strong>, o nosso CEO <strong>Maximino Paca</strong>, pela <strong>Associa&ccedil;&atilde;o Angolana de Internet (AAI)</strong>, recebeu o reconhecimento pelo empenho em congregar todos os operadores e prestadores de servi&ccedil;os de Comunica&ccedil;&otilde;es Electr&oacute;nicas.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 16, 637, '2025-02-28 11:44:47', '2026-04-02 02:56:25'),
(2, 1, 'anyconnect-recebe-visita-da-emis-no-seu-data-center', 'ANYCONNECT recebe visita da Emis, no seu Data Center', 'covers/GbRKz1LcnlfrRCfbIRHPiz1L8YJTVf3pnGXQDYe1.jpg', '<p>&Eacute; com grande satisfa&ccedil;&atilde;o e entusiasmo que, no dia <strong>08 de Outubro de 2024</strong>, tivemos a honra de receber a visita t&eacute;cnica da equipa executiva da <strong>EMIS </strong>ao nosso datacenter, que j&aacute; se encontra em fase terminal da sua constru&ccedil;&atilde;o.<br /><br />A visita foi guiada pelo nosso CEO, Eng. <strong>Maximino Paca</strong>, acompanhado pelo nosso <strong>Director de Marketing e Comunica&ccedil;&atilde;o</strong> (Dr. <strong>Garcia Matondo</strong>) e a equipa t&eacute;cnica, j&aacute; da parte da EMIS estiveram presentes a equipa da Direc&ccedil;&atilde;o.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 13, 762, '2025-02-28 11:46:41', '2026-04-02 00:04:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_01_01_162850_create_categories_table', 1),
(5, '2024_12_16_142349_create_noticias_table', 1),
(6, '2024_12_16_142354_create_imprensas_table', 1),
(7, '2024_12_16_142402_create_projectos_table', 1),
(8, '2024_12_16_142413_create_servicos_table', 1),
(9, '2025_01_16_143709_create_banners_table', 1),
(10, '2025_09_04_084224_create_categorias_table', 2),
(11, '2025_09_04_084317_create_categoria_servico_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `created_by`, `slug`, `title`, `cover`, `content`, `category_id`, `views`, `created_at`, `updated_at`) VALUES
(3, 1, 'angola-cables-realiza-mesa-redonda-dentro-do-programa-acelera-net-20', 'Angola Cables realiza Mesa Redonda dentro do Programa Acelera NET 2.0', 'covers/d0ZFnZfle2Xn3j0okRPskvIKLL2hPJBEYj8lF6FM.jpg', '<p>Promovido no &acirc;mbito do programa 𝗔𝗰𝗲𝗹𝗲𝗿𝗮 𝗡𝗘𝗧 𝟮.𝟬, o evento teve como tema central \"𝗦𝗼𝗹𝘂𝗰̧𝗼̃𝗲𝘀 𝗽𝗮𝗿𝗮 𝗳𝗼𝗺𝗲𝗻𝘁𝗮𝗿 𝗼 𝗱𝗶𝗴𝗶𝘁𝗮𝗹 𝗲𝗺 𝗔𝗻𝗴𝗼𝗹𝗮\", moderado por 𝗦𝗲𝗶𝗱𝗼𝘂 𝗡𝗱𝗼𝗹𝘂𝗺𝗶𝗻𝗴𝗼.<br /><br />Contou com a participa&ccedil;&atilde;o de 𝗶𝗺𝗽𝗼𝗿𝘁𝗮𝗻𝘁𝗲𝘀 𝗿𝗲𝗽𝗿𝗲𝘀𝗲𝗻𝘁𝗮𝗻𝘁𝗲𝘀 𝗱𝗲 𝗶𝗻𝘀𝘁𝗶𝘁𝘂𝗶𝗰̧𝗼̃𝗲𝘀 ligadas ao desenvolvimento tecnol&oacute;gico e digital no pa&iacute;s, incluindo 𝗕𝗿𝗮́𝘂𝗹𝗶𝗼 𝗔𝘂𝗴𝘂𝘀𝘁𝗼 (𝗜𝗡𝗔𝗣𝗘𝗠), 𝗝𝗼𝗮̃𝗼 𝗕𝗮𝗽𝘁𝗶𝘀𝘁𝗮 (𝗔𝗡𝗧𝗢𝗦𝗖), 𝗟𝗶𝘀𝗮 𝗩𝗶𝗱𝗲𝗶𝗿𝗮 (𝗔𝗔𝗦𝗘𝗗) e 𝗠𝗮𝘅𝗶𝗺𝗶𝗻𝗼 𝗣𝗮𝗰𝗮 (𝗔𝗡𝗬𝗖𝗢𝗡𝗡𝗘𝗖𝗧).</p>\r\n<p>Durante a actividade, foram discutidas solu&ccedil;&otilde;es que visam 𝗶𝗺𝗽𝘂𝗹𝘀𝗶𝗼𝗻𝗮𝗿 𝗼 𝘀𝗶𝘀𝘁𝗲𝗺𝗮 𝗱𝗶𝗴𝗶𝘁𝗮𝗹 𝗻𝗼 𝗽𝗮𝗶́𝘀, com foco nas 𝗲𝗺𝗽𝗿𝗲𝘀𝗮𝘀 𝗱𝗲 𝘁𝗲𝗹𝗲𝗰𝗼𝗺𝘂𝗻𝗶𝗰𝗮𝗰̧𝗼̃𝗲𝘀, cujo papel &eacute; 𝗳𝗮𝗰𝗶𝗹𝗶𝘁𝗮𝗿 𝗼 𝗮𝗰𝗲𝘀𝘀𝗼 𝗮̀ 𝗶𝗻𝘁𝗲𝗿𝗻𝗲𝘁, um dos principais pilares para a digitaliza&ccedil;&atilde;o. Outro ponto abordado foi a necessidade de o Estado actuar na cria&ccedil;&atilde;o de regulamenta&ccedil;&otilde;es favor&aacute;veis e na 𝗿𝗲𝗱𝘂𝗰̧𝗮̃𝗼 𝗱𝗲 𝗶𝗺𝗽𝗼𝘀𝘁𝗼𝘀, promovendo, assim, um ambiente prop&iacute;cio para o surgimento de startups digitais. Essas empresas podem fornecer servi&ccedil;os que v&atilde;o desde educa&ccedil;&atilde;o, finan&ccedil;as, entrega de produtos at&eacute; transporte, contribuindo para a diversifica&ccedil;&atilde;o e moderniza&ccedil;&atilde;o da economia angolana.<br /><br />A troca de opini&otilde;es entre os membros do painel destacou o compromisso de diferentes setores em colaborar para a constru&ccedil;&atilde;o de uma Angola mais conectada e digitalizada, com o objetivo de aumentar o acesso &agrave; tecnologia e promover a inova&ccedil;&atilde;o em &aacute;reas essenciais para o desenvolvimento do pa&iacute;s.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 9, 369, '2025-02-27 13:31:27', '2026-03-29 14:51:52'),
(4, 1, 'engenheiro-maximino-paca-ceo-anyconnect-participa-do-podcast-zwelando', 'Engenheiro Maximino Paca, CEO ANYCONNECT participa do Podcast Zwelando', 'covers/am3PiNxpbO9l8rkKS6M3tUFNy2BjoI6JHNQHnK9g.jpg', '<p>O nosso 𝗖𝗘𝗢 𝗘𝗻𝗴. 𝗠𝗮𝘅𝗶𝗺𝗶𝗻𝗼 𝗣𝗮𝗰𝗮, participou do 𝗽𝗼𝗱𝗰𝗮𝘀𝘁 𝗭𝘄𝗲𝗹𝗮𝗻𝗱𝗼, apresentado por 𝗡𝗶́𝗰𝗶𝗮 𝗱𝗲 𝗖𝗮𝗿𝘃𝗮𝗹𝗵𝗼 𝗙𝗲𝗿𝗻𝗮𝗻𝗱𝗲𝘀. Durante a entrevista, o mesmo abordou diversos aspectos de sua 𝘁𝗿𝗮𝗷𝗲𝗰𝘁𝗼́𝗿𝗶𝗮 𝗽𝗲𝘀𝘀𝗼𝗮𝗹 e 𝗽𝗿𝗼𝗳𝗶𝘀𝘀𝗶𝗼𝗻𝗮𝗹, incluindo sua chegada a Luanda, vindo do U&iacute;ge, e seu percurso no 𝗺𝘂𝗻𝗱𝗼 𝗰𝗼𝗿𝗽𝗼𝗿𝗮𝘁𝗶𝘃𝗼 e das 𝘁𝗲𝗹𝗲𝗰𝗼𝗺𝘂𝗻𝗶𝗰𝗮𝗰̧𝗼̃𝗲𝘀.<br /><br />Maximino Paca revelou que sua paix&atilde;o pelas tecnologias come&ccedil;ou ainda no U&iacute;ge. Ele contou sobre suas experi&ecirc;ncias como estudante de 𝗘𝗹𝗲𝗰𝘁𝗿𝗼́𝗻𝗶𝗰𝗮 𝗲 𝗧𝗲𝗹𝗲𝗰𝗼𝗺𝘂𝗻𝗶𝗰𝗮𝗰̧𝗼̃𝗲𝘀 no 𝗜𝗧𝗘𝗟, onde enfrentou dificuldades que superou com muita dedica&ccedil;&atilde;o. Al&eacute;m disso, mencionou sua passagem pela 𝗖𝗜𝗦𝗖𝗢 como estudante, o que acrescentou significativamente ao seu conhecimento e forma&ccedil;&atilde;o na &aacute;rea.<br /><br />Durante o podcast, o CEO tamb&eacute;m destacou as empresas nas quais est&aacute; actualmente envolvido. A 𝗔𝗡𝗬𝗖𝗢𝗡𝗡𝗘𝗖𝗧, 𝘂𝗺𝗮 𝗲𝗺𝗽𝗿𝗲𝘀𝗮 𝗱𝗲 𝘁𝗲𝗹𝗲𝗰𝗼𝗺𝘂𝗻𝗶𝗰𝗮𝗰̧𝗼̃𝗲𝘀 𝗾𝘂𝗲 𝗼𝗳𝗲𝗿𝗲𝗰𝗲 𝘀𝗼𝗹𝘂𝗰̧𝗼̃𝗲𝘀 𝗶𝗻𝗼𝘃𝗮𝗱𝗼𝗿𝗮𝘀 𝗲 𝗲𝗳𝗶𝗰𝗶𝗲𝗻𝘁𝗲𝘀, onde exerce o cargo de CEO, e a 𝗔𝗡𝗬 𝗣𝗔𝗬, uma Sociedade Prestadora de Servi&ccedil;os de Pagamentos, licenciada pelo 𝗕𝗮𝗻𝗰𝗼 𝗡𝗮𝗰𝗶𝗼𝗻𝗮𝗹 𝗱𝗲 𝗔𝗻𝗴𝗼𝗹𝗮 (𝗕𝗡𝗔). Abordou sobre a origem da ANYCONNECT, os principais desafios enfrentados e os projectos futuros. Tamb&eacute;m falou sobre o estado actual da ANY PAY e o que pode ser esperado da empresa nos pr&oacute;ximos tempos.<br /><br />Ao final da entrevista, Maximino Paca deixou uma mensagem inspiradora para aqueles que desejam seguir uma carreira ou empreender: 𝘀𝗲𝗴𝘂𝗶𝗿 𝗼 𝗾𝘂𝗲 𝗴𝗼𝘀𝘁𝗮𝗺, 𝗻𝗮̃𝗼 𝗼 𝗾𝘂𝗲 𝗼𝘀 𝗼𝘂𝘁𝗿𝗼𝘀 𝗲𝘀𝗽𝗲𝗿𝗮𝗺, 𝗲 𝗮𝗽𝗿𝗲𝗻𝗱𝗲𝗿 𝗮 𝗰𝗼𝗻𝘁𝗼𝗿𝗻𝗮𝗿 𝗮𝘀 𝗱𝗶𝗳𝗶𝗰𝘂𝗹𝗱𝗮𝗱𝗲𝘀 𝗽𝗮𝗿𝗮 𝗮𝗹𝗰𝗮𝗻𝗰̧𝗮𝗿 𝗼 𝘀𝘂𝗰𝗲𝘀𝘀𝗼.<br /><br /><br /><br /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 9, 482, '2025-02-27 13:33:24', '2026-03-31 18:38:06');

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
-- Estrutura da tabela `projectos`
--

CREATE TABLE `projectos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `created_by`, `slug`, `title`, `cover`, `content`, `created_at`, `updated_at`) VALUES
(2, 1, 'ip-transit', 'IP Transit', 'servicos/zfZ55KWhpox638wC4FXadIZA7zl8iNgwm3KmgSP3.png', '<h5>SERVI&Ccedil;O DE INTERNET &ndash; ANYCONNECT</h5>\r\n<h6>Internet Corporativa Anyconnect</h6>\r\n<p><strong>Conectividade Inteligente, Onde Voc&ecirc; Precisar</strong></p>\r\n<p>Solu&ccedil;&otilde;es sob medida, com m&uacute;ltiplas tecnologias de acesso.<br />Oferecemos internet corporativa de <strong>alta performance</strong>, garantindo conectividade <strong>confi&aacute;vel, segura e escal&aacute;vel</strong> para neg&oacute;cios urbanos ou remotos.</p>\r\n<hr />\r\n<h2>Tecnologias Oferecidas</h2>\r\n<p><strong>Um portf&oacute;lio completo para qualquer desafio</strong></p>\r\n<ul>\r\n<li>\r\n<p><strong>Fibra &Oacute;ptica</strong> &ndash; Alta velocidade, estabilidade e baixa lat&ecirc;ncia</p>\r\n</li>\r\n<li>\r\n<p><strong>Fibra Escura (Dark Fiber)</strong> &ndash; Controle total sobre sua rede</p>\r\n</li>\r\n<li>\r\n<p><strong>R&aacute;dio Micro-ondas</strong> &ndash; Ideal para locais sem fibra dispon&iacute;vel</p>\r\n</li>\r\n<li>\r\n<p><strong>Internet via Sat&eacute;lite</strong> &ndash; Cobertura em &aacute;reas remotas</p>\r\n</li>\r\n<li>\r\n<p><strong>LTE 4G Corporativo</strong> &ndash; Mobilidade e ativa&ccedil;&atilde;o r&aacute;pida, cobertura nacional</p>\r\n</li>\r\n</ul>\r\n<hr />\r\n<h2>Solu&ccedil;&otilde;es para Todos os Cen&aacute;rios</h2>\r\n<p><strong>Flexibilidade e desempenho em toda conex&atilde;o</strong></p>\r\n<ul>\r\n<li>\r\n<p><strong>Empresas urbanas:</strong> Fibra &oacute;ptica dedicada com SLA garantido</p>\r\n</li>\r\n<li>\r\n<p><strong>&Oacute;rg&atilde;os p&uacute;blicos e grandes corpora&ccedil;&otilde;es:</strong> Fibra escura para interliga&ccedil;&atilde;o de sites</p>\r\n</li>\r\n<li>\r\n<p><strong>Ind&uacute;strias remotas ou minera&ccedil;&atilde;o:</strong> Micro-ondas e sat&eacute;lite</p>\r\n</li>\r\n<li>\r\n<p><strong>Backups e conex&otilde;es secund&aacute;rias:</strong> LTE 4G com IP fixo</p>\r\n</li>\r\n<li>\r\n<p><strong>Projetos emergenciais ou tempor&aacute;rios:</strong> LTE ou sat&eacute;lite de ativa&ccedil;&atilde;o r&aacute;pida</p>\r\n</li>\r\n</ul>\r\n<hr />\r\n<h2>Tecnologia de Micro-ondas</h2>\r\n<p><strong>Conectividade sem cabos, com alta estabilidade</strong></p>\r\n<ul>\r\n<li>\r\n<p>Conex&atilde;o ponto-a-ponto</p>\r\n</li>\r\n<li>\r\n<p>Instala&ccedil;&atilde;o &aacute;gil</p>\r\n</li>\r\n<li>\r\n<p>Ideal para &aacute;reas sem infraestrutura f&iacute;sica</p>\r\n</li>\r\n<li>\r\n<p>Baixa lat&ecirc;ncia e tr&aacute;fego seguro</p>\r\n</li>\r\n</ul>\r\n<hr />\r\n<h2>Fibra e Fibra Escura</h2>\r\n<h3>Fibra &Oacute;ptica</h3>\r\n<ul>\r\n<li>\r\n<p>Banda sim&eacute;trica dedicada</p>\r\n</li>\r\n<li>\r\n<p>Alta disponibilidade e estabilidade</p>\r\n</li>\r\n<li>\r\n<p>Monitoramento 24/7</p>\r\n</li>\r\n<li>\r\n<p>SLA garantido</p>\r\n</li>\r\n</ul>\r\n<h3>Fibra Escura</h3>\r\n<ul>\r\n<li>\r\n<p>Total controle da rede pelo cliente</p>\r\n</li>\r\n<li>\r\n<p>Ideal para interliga&ccedil;&otilde;es privadas</p>\r\n</li>\r\n<li>\r\n<p>Flexibilidade de configura&ccedil;&atilde;o</p>\r\n</li>\r\n</ul>\r\n<hr />\r\n<h2>Internet por Sat&eacute;lite</h2>\r\n<p><strong>Alcance onde ningu&eacute;m mais chega</strong></p>\r\n<ul>\r\n<li>\r\n<p>Cobertura nacional, incluindo zonas rurais</p>\r\n</li>\r\n<li>\r\n<p>Conectividade de miss&atilde;o cr&iacute;tica</p>\r\n</li>\r\n<li>\r\n<p>Ideal para agroneg&oacute;cio, minera&ccedil;&atilde;o e obras remotas</p>\r\n</li>\r\n<li>\r\n<p>Equipamentos robustos e opera&ccedil;&atilde;o cont&iacute;nua</p>\r\n</li>\r\n</ul>\r\n<hr />\r\n<h2>LTE 4G Corporativo</h2>\r\n<p><strong>Conex&atilde;o r&aacute;pida e m&oacute;vel</strong></p>\r\n<ul>\r\n<li>\r\n<p>Acesso imediato em qualquer lugar com 4G</p>\r\n</li>\r\n<li>\r\n<p>Plano corporativo com IP fixo (opcional)</p>\r\n</li>\r\n<li>\r\n<p>Perfeito para backups, eventos e neg&oacute;cios itinerantes</p>\r\n</li>\r\n<li>\r\n<p>Integra&ccedil;&atilde;o com SD-WAN e solu&ccedil;&otilde;es h&iacute;bridas</p>\r\n</li>\r\n</ul>\r\n<hr />\r\n<h2>Seguran&ccedil;a e Confiabilidade</h2>\r\n<p><strong>Internet com infraestrutura profissional</strong></p>\r\n<ul>\r\n<li>\r\n<p>Gerenciamento proativo de rede</p>\r\n</li>\r\n<li>\r\n<p>Equipamentos de &uacute;ltima gera&ccedil;&atilde;o</p>\r\n</li>\r\n<li>\r\n<p>Monitoramento em tempo real</p>\r\n</li>\r\n<li>\r\n<p>Equipes t&eacute;cnicas locais e nacionais</p>\r\n</li>\r\n<li>\r\n<p>Infraestrutura hospedada no DataCenter Anyconnect</p>\r\n</li>\r\n</ul>\r\n<hr />\r\n<h2>Por Que Escolher a Anyconnect?</h2>\r\n<p><strong>Mais do que conex&atilde;o, uma estrat&eacute;gia digital</strong></p>\r\n<ul>\r\n<li>\r\n<p>Solu&ccedil;&otilde;es multitecnologia adapt&aacute;veis</p>\r\n</li>\r\n<li>\r\n<p>Suporte t&eacute;cnico especializado 24/7</p>\r\n</li>\r\n<li>\r\n<p>Atendimento personalizado e consultivo</p>\r\n</li>\r\n<li>\r\n<p>Redu&ccedil;&atilde;o de riscos e aumento da produtividade</p>\r\n</li>\r\n<li>\r\n<p>Integra&ccedil;&atilde;o com outros servi&ccedil;os: <strong>Cloud, Hosting, VOIP e USSD</strong></p>\r\n</li>\r\n</ul>\r\n<hr />\r\n<h2>Vamos Conectar Seu Neg&oacute;cio?</h2>\r\n<p>Fale com a <strong>Anyconnect</strong></p>\r\n<p>Inclu&iacute;mos:</p>\r\n<ul>\r\n<li>\r\n<p>Site, e-mail, telefone e WhatsApp</p>\r\n</li>\r\n<li>\r\n<p>QR Code para consultoria gratuita ou agendamento de visita t&eacute;cnica</p>\r\n</li>\r\n</ul>\r\n<p><strong>Solicite j&aacute; um estudo t&eacute;cnico de viabilidade para sua empresa ou neg&oacute;cio.</strong></p>\r\n<p>&nbsp;</p>', '2025-02-06 10:25:43', '2025-09-08 14:25:45'),
(3, 1, 'multiclouds', 'Multiclouds', 'servicos/T00YHoENix2CKxDfDcl3oUa3bTrkG1R6at27zGOV.png', '<p>Acesso aos conte&uacute;dos televisivos quando e onde quiser na sua TV e tamb&eacute;m nos seus dispositivos m&oacute;veis. <strong>&nbsp;</strong></p>', '2025-02-20 10:24:20', '2025-09-08 12:30:46'),
(5, 1, 'vpn-virtual-private-network', 'VPN (Virtual Private Network)', 'servicos/SwVk9cGG1Mc40znOwAwUCudoMNZuqITKdBajVTLO.jpg', '<p>Com os nosso servi&ccedil;os de VPNs garantimos uma conex&atilde;o segura e protegida permitindo a interliga&ccedil;&atilde;o de dois ou mais sites remotos, usando as VPNs <strong>Site-to-Site</strong>, <strong>Ipsec</strong>, <strong>DMVPN</strong> e <strong>MPLS</strong>.</p>', '2025-02-20 10:27:38', '2025-02-20 10:41:20'),
(6, 1, 'colocaction-hosting', 'Colocaction & Hosting', 'servicos/nMDFqRLcNbxgXy2EIxwd0j2dlUFCE3OFFtKZSU9U.jpg', '<p>Servi&ccedil;os de monitorizados 24/7, pelo nosso NOC e SOC, com redund&acirc;ncias nas redes de comunica&ccedil;&otilde;es e el&eacute;trica, com capacidade energ&eacute;tica de 2550 KVA, atrav&eacute;s do nosso data center.</p>', '2025-02-20 10:29:36', '2025-09-08 12:30:28'),
(7, 1, 'vod', 'VOD', 'servicos/pvDiKstbUOfnowuTe4S7foG1KfMjixxk8kweMVBq.jpg', '<p>Servi&ccedil;o de telefonia digital VoIP, com suporte de uma plataforma de comuta&ccedil;&atilde;o, ligada &agrave; rede p&uacute;blica PSTN com os operadores Nacionais e Internacionais, ligados a uma rede de operadores, permitindo a revenda dos servi&ccedil;os de telefonia fixa aos potenciais cliente.</p>', '2025-02-20 10:31:04', '2025-09-08 12:31:30'),
(8, 1, 'ussd', 'USSD', 'servicos/I8zJfToN5DzXwcMJJlS5P2QieGEypLljAmJXobOu.jpg', '<p>Servi&ccedil;o de mobilidade 360&ordm; com prop&oacute;sitos distintos e para diversos sectores de atividade, incluindo opera&ccedil;&otilde;es financeiras e de pagamentos.</p>', '2025-02-20 10:31:42', '2025-02-20 10:31:42'),
(10, 1, 'internet', 'Internet', 'servicos/Mg6AhWEXpeQIgg7Tc5cZmq3Asi4r5aomAXiFHAGP.jpg', '<p>Servi&ccedil;os para os clientes, atrav&eacute;s da nossa rede de transmiss&atilde;o via sat&eacute;lite, suportada pela nossa infraestrutura localizada em nosso DATA CENTER estando dispon&iacute;veis servi&ccedil;os direcionados para o sector Mineiro e Petrol&iacute;fero.</p>', '2025-02-20 10:37:14', '2025-09-08 12:27:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('00WpzpXsGusRsPXcQWzXbg72M0L51VBjcanu2sum', NULL, '129.122.222.153', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlRCYmppc09KZWpaaTBZNHRHREdxQzNRZmJtck5pRTRoMlJ6VzhabyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmFueWNvbm5lY3QuYW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1775122649),
('1k4HZfw9VINyQcf41Tndgzaxo8q8QxXkFfKgbfml', NULL, '105.168.1.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0RqOU90cXZmTENNS0Fnb21TeGQyZnBUU3NKQXRQSlRXQzF0bzJEeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775124370),
('1kwFbMxT7vK6lTLVzTovLH4lqEaskVWNzFTIKtss', NULL, '31.13.103.113', 'meta-webindexer/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGxKRkw0bzZoUVlzbGFVMm9QemZ5Umt5amNDZXlxN0V2cENNZzFSUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775123101),
('235LlLIaS5uKXQIgtFibwe40gQKcsxltQIqnVACN', NULL, '216.157.40.87', 'Mozilla/5.0 (compatible; HubSpot Crawler; HubSpot Domain check; +https://www.hubspot.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEN4dFNUUkt2VmZTSktWd3k3WnRhVVF0NWhDM2xncjc5eDQ1TDlaMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775122752),
('4xSCwsEisqukDUiFz2U4VEIrGgCWRnt3g6ZNpz1g', NULL, '18.193.15.23', 'Mozilla/5.0 (compatible; HubSpot Crawler; HubSpot Domain check; +https://www.hubspot.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVNpMllHZHY2ZUVKb2hRaVVBNEJVSGdYRzRzV3B5T2tTdkxKZ2ZTeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775122716),
('5yWxLdP11E1Cc7RrEFr3BdKsDbhbwyv9AsDXOuQw', NULL, '40.116.73.215', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY1R1UUNDeDRISWxjd2dDY09COVpqS2I1YnQ1d1lMTm50SDF5MlBUNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775125383),
('6vumXbaBBAJKgHspkjClgzNyDTCcX9M7NTKyYbSo', NULL, '216.157.42.80', 'Mozilla/5.0 (compatible; HubSpot Crawler; HubSpot Domain check; +https://www.hubspot.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmhQbVFIQ1QzZTVPUlFTY2wzTXRmNHVGZU9PWEhPdWhsQmZpUk8xbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775122777),
('BF5XDW1NlA14vxBBR4DlnSAuthOGsVwsyuVVm63M', NULL, '216.157.41.67', 'Mozilla/5.0 (compatible; HubSpot Crawler; HubSpot Domain check; +https://www.hubspot.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjFrRWxOUnJjcGNMaTVWcmNBOFRqempwTHdaeFp6WnJJY2k3eTBFciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775122754),
('ebgKhGgFFGLIDyOyDfgAFMaCiuk5SUTCIivUcGml', NULL, '31.13.103.114', 'meta-webindexer/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkpaTWhySWk3aDdTdFd3aUFBM1pXZEdFbGNYSU5jRDZ2MG9QcHBhYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vd3d3LmFueWNvbm5lY3QuYW8vc29icmUtbm9zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1775121702),
('eilxKkYwMLa52USlM5jIeUgY9f399WZTDX0QhLmC', NULL, '54.174.58.252', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzhldXBoUmpTMXJxVjhUdHZua2wwUGhsbUxncW5tTUttODlKSWtvcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775121770),
('gOk8nxSgev26cvDWlzkoafYJSGgun16WNvTQUCOd', NULL, '41.205.60.210', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFRnQVd3UWI5S3dpcmo5ZXNjZDdOQng2SDA0Sk9XYjlXTXo0bExvUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vd3d3LmFueWNvbm5lY3QuYW8vY29udGFjdG9zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1775124545),
('JGuxetIivLEyKXWtGT0ZWAS02V9cGISaxO2Mrfq5', NULL, '31.13.115.30', 'meta-webindexer/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFVQZEtsRzF1cjRNSlBWVnRwTWFFU3VXR3NtdVNxZTNiSVI4bmkyMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775122412),
('KRmI0t9hdPMyRx8o8BzIJVYdSTGsBakLqGhmvQEq', NULL, '146.75.182.3', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0NKeU1CSGU5MWlDZ09BaUcyRTJOYWNpbkZWWUo5RFdrWTdsRlhoZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775122521),
('mgvueavhEcnqTz89ysIzwTT3UIm1bB0e6QOvm3d5', NULL, '66.249.65.101', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.7680.164 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZDZSUG9OeGFYcjB5dUZVbEdiWGtoY3d6dE1LSnlLTlBndzdwM3FhMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmFueWNvbm5lY3QuYW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1775119641),
('nw5PvL5aKzjH54y59wboXSr3wy5IIt3bf9pw3m4u', NULL, '31.13.115.30', 'meta-webindexer/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGJiOXJ4b3JKT0gwYzRpU3pRVnFHMExNRGE5NUF6TmdrdnhDSVJnNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775122474),
('PMJZ2t2Rn0R91NGSXKd2rZITLK80bg9G7qjzt3ow', NULL, '105.168.1.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVk1xVXNYdHJUTWlOYXN3QUcwZXljZGRHYkpzQUlRYXEzQVZ4ODgwNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775120381),
('R2to7UFMW9435PVmC2wdaeseJwk1QAbkqS37iXQc', NULL, '105.168.1.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHQ0cEI5SmY3eDRSc2dRZzZHMnI2Sk5mWGlPemxWanlYY3pFSnJOMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775121464),
('s90SYIdZEczdFCjuIFAPYumgNMUvq6uYzPw1t0fA', NULL, '40.77.167.76', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVZYcWZjT0lnMTdPTGJqU2duNXNwWThSTmhLemZNU01Zczc0WkNERSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775121468),
('u3Q05S33DzhdGtPGpbESqZbh9D8Nyll7L8Ux5lQa', NULL, '105.168.1.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXZTRG9vUEhFakEyZ05IZjdpVnB2cE5XTnBTd2pRdHlGYkpESUJYSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775123952),
('w7PYs8HrSGMETMJEy09ldFGFvHdFi1v03UxqeEDu', NULL, '129.122.222.153', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFFiUlE4c2J2WGlLakp4czhaU2o0SzBNdk0xZDY3clJnVmpqc2FqUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vYW55Y29ubmVjdC5hbyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1775125573),
('XarkYq1A2ZJg3wI463kEwd1QMF6C2CRgWXK62kj4', NULL, '105.168.1.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3pQNVpYb3hGcXd5cjZ2MHVXNEI2NGN4aktmTDBsenVyNWlraEF5MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmFueWNvbm5lY3QuYW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1775120370),
('y1a77k0Qsdfj06SHSmejnJd6hGTEoXZU5dk8E2zr', NULL, '43.164.195.17', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXZnY1FMNGdCeEdlb0ZKcjZSdUc2cEp2eWkxbXJEQ1hYNkN3MzkwRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LmFueWNvbm5lY3QuYW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1775119441);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@anyconnect.co.ao', NULL, '$2y$12$z0jJnvOFwaqg53DV7ehzpuJPnfk2GGSJum90nkC7O.YSqMLXdYgZy', '1xVXcieBQpL3KWrbgJXcruWm2Hql2uo0RuGRCL1L9RsGu9LDAn4JUDunMOBd', '2025-01-17 06:22:34', '2025-01-17 06:22:34'),
(2, 'Salomão Nunes', 'salomo@gmail.com', NULL, '$2y$12$zdj4N94RoOjrjm9Eao5npuJFyt4u7idGnWQ1t6Y5gKTblpyfU7zGO', NULL, '2025-01-17 06:29:33', '2025-01-17 06:53:47'),
(3, 'Nelson', 'nelsonjoao020@gmail.com', NULL, '$2y$12$d0/wxm99sdMIf2zoPTMmAOLmAZCQBM9DTl9BKjSEQYc/smiY2L53i', 'llmV4iC3vo0hycj5Ujd6VHhdSaqu7R8D8Aiy7utXDFra3hgJYpDvV4YCC2ui', NULL, '2026-03-25 16:10:15');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_created_by_foreign` (`created_by`);

--
-- Índices para tabela `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Índices para tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categorias_slug_unique` (`slug`);

--
-- Índices para tabela `categoria_servico`
--
ALTER TABLE `categoria_servico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_servico_categoria_id_foreign` (`categoria_id`),
  ADD KEY `categoria_servico_servico_id_foreign` (`servico_id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `imprensas`
--
ALTER TABLE `imprensas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imprensas_created_by_foreign` (`created_by`),
  ADD KEY `imprensas_category_id_foreign` (`category_id`);

--
-- Índices para tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Índices para tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noticias_created_by_foreign` (`created_by`),
  ADD KEY `noticias_category_id_foreign` (`category_id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `projectos`
--
ALTER TABLE `projectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projectos_created_by_foreign` (`created_by`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicos_created_by_foreign` (`created_by`);

--
-- Índices para tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `categoria_servico`
--
ALTER TABLE `categoria_servico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imprensas`
--
ALTER TABLE `imprensas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `projectos`
--
ALTER TABLE `projectos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `categoria_servico`
--
ALTER TABLE `categoria_servico`
  ADD CONSTRAINT `categoria_servico_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categoria_servico_servico_id_foreign` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
