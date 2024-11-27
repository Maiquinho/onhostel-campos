-- --------------------------------------------------------
-- Servidor:                     193.203.175.33
-- Versão do servidor:           10.11.9-MariaDB - MariaDB Server
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para u584963118_onhostelcampos
CREATE DATABASE IF NOT EXISTS `u584963118_onhostelcampos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `u584963118_onhostelcampos`;

-- Copiando estrutura para tabela u584963118_onhostelcampos.assets
CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `legend` varchar(150) DEFAULT NULL,
  `height` int(255) DEFAULT NULL,
  `width` int(255) DEFAULT NULL,
  `size` float NOT NULL,
  `mime_type` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_by` varchar(50) DEFAULT NULL,
  `last_update` varchar(50) DEFAULT NULL,
  `able` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.assets: ~34 rows (aproximadamente)
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` (`id`, `file_name`, `legend`, `height`, `width`, `size`, `mime_type`, `created_at`, `updated_at`, `added_by`, `last_update`, `able`) VALUES
	(1, 'assets/site/img/uploads/2024/05/unidade-1-quarto-basico-2.jpg', NULL, 1120, 840, 181.2, 'image/jpeg', '2024-05-21 19:22:05', '2024-05-21 19:22:05', 'michaelmatheus', 'michaelmatheus', 1),
	(2, 'assets/site/img/uploads/2024/05/unidade-1-quarto-basico-1.jpg', NULL, 1120, 840, 312.4, 'image/jpeg', '2024-05-21 19:22:05', '2024-05-21 19:22:05', 'michaelmatheus', 'michaelmatheus', 1),
	(3, 'assets/site/img/uploads/2024/05/unidade-1-quarto-basico-3.jpg', NULL, 1120, 840, 133.8, 'image/jpeg', '2024-05-21 19:22:05', '2024-05-21 19:22:05', 'michaelmatheus', 'michaelmatheus', 1),
	(4, 'assets/site/img/uploads/2024/05/unidade-1-quarto-basico-4.jpg', NULL, 1120, 840, 214.8, 'image/jpeg', '2024-05-21 19:22:05', '2024-05-21 19:22:05', 'michaelmatheus', 'michaelmatheus', 1),
	(5, 'assets/site/img/uploads/2024/05/unidade-1-quarto-basico-5.jpg', NULL, 1120, 840, 226.9, 'image/jpeg', '2024-05-21 19:22:05', '2024-05-21 19:22:05', 'michaelmatheus', 'michaelmatheus', 1),
	(6, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-2.jpg', NULL, 1120, 840, 85.8, 'image/jpeg', '2024-05-21 19:22:20', '2024-05-21 19:22:20', 'michaelmatheus', 'michaelmatheus', 1),
	(7, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-1.jpg', NULL, 840, 1120, 126.1, 'image/jpeg', '2024-05-21 19:22:20', '2024-05-21 19:22:20', 'michaelmatheus', 'michaelmatheus', 1),
	(8, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-3.jpg', NULL, 1120, 840, 103, 'image/jpeg', '2024-05-21 19:22:20', '2024-05-21 19:22:20', 'michaelmatheus', 'michaelmatheus', 1),
	(9, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-4.jpg', NULL, 1120, 678, 224.8, 'image/jpeg', '2024-05-21 19:22:20', '2024-05-21 19:22:20', 'michaelmatheus', 'michaelmatheus', 1),
	(10, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-5.jpg', NULL, 1600, 1200, 182.1, 'image/jpeg', '2024-05-21 19:22:21', '2024-05-21 19:22:21', 'michaelmatheus', 'michaelmatheus', 1),
	(11, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-6.jpg', NULL, 1600, 1200, 224.5, 'image/jpeg', '2024-05-21 19:22:21', '2024-05-21 19:22:21', 'michaelmatheus', 'michaelmatheus', 1),
	(12, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-7.jpg', NULL, 1600, 1200, 285.7, 'image/jpeg', '2024-05-21 19:22:21', '2024-05-21 19:22:21', 'michaelmatheus', 'michaelmatheus', 1),
	(13, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-8.jpg', NULL, 1014, 1600, 173, 'image/jpeg', '2024-05-21 19:22:21', '2024-05-21 19:22:21', 'michaelmatheus', 'michaelmatheus', 1),
	(14, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-9.jpg', NULL, 1122, 1600, 238.5, 'image/jpeg', '2024-05-21 19:22:21', '2024-05-21 19:22:21', 'michaelmatheus', 'michaelmatheus', 1),
	(15, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-10.jpg', NULL, 1398, 1600, 314.8, 'image/jpeg', '2024-05-21 19:22:21', '2024-05-21 19:22:21', 'michaelmatheus', 'michaelmatheus', 1),
	(16, 'assets/site/img/uploads/2024/05/unidade-1-recepcao-11.jpg', NULL, 1200, 1600, 178.1, 'image/jpeg', '2024-05-21 19:22:21', '2024-05-21 19:22:21', 'michaelmatheus', 'michaelmatheus', 1),
	(17, 'assets/site/img/uploads/2024/05/unidade-1-suite-2.jpg', NULL, 1600, 1200, 128.7, 'image/jpeg', '2024-05-21 19:22:37', '2024-05-21 19:22:37', 'michaelmatheus', 'michaelmatheus', 1),
	(18, 'assets/site/img/uploads/2024/05/unidade-1-suite-1.jpg', NULL, 1600, 1200, 121.1, 'image/jpeg', '2024-05-21 19:22:37', '2024-05-21 19:22:37', 'michaelmatheus', 'michaelmatheus', 1),
	(19, 'assets/site/img/uploads/2024/05/unidade-1-suite-3.jpg', NULL, 1600, 1200, 255.7, 'image/jpeg', '2024-05-21 19:22:37', '2024-05-21 19:22:37', 'michaelmatheus', 'michaelmatheus', 1),
	(20, 'assets/site/img/uploads/2024/05/unidade-1-suite-4.jpg', NULL, 1600, 1200, 91, 'image/jpeg', '2024-05-21 19:22:37', '2024-05-21 19:22:37', 'michaelmatheus', 'michaelmatheus', 1),
	(21, 'assets/site/img/uploads/2024/05/unidade-1-suite-5.jpg', NULL, 1600, 1200, 257.6, 'image/jpeg', '2024-05-21 19:22:37', '2024-05-21 19:22:37', 'michaelmatheus', 'michaelmatheus', 1),
	(22, 'assets/site/img/uploads/2024/05/unidade-1-suite-6.jpg', NULL, 1600, 1200, 243.6, 'image/jpeg', '2024-05-21 19:22:37', '2024-05-21 19:22:37', 'michaelmatheus', 'michaelmatheus', 1),
	(23, 'assets/site/img/uploads/2024/05/unidade-1-suite-7.jpg', NULL, 1600, 1200, 183.7, 'image/jpeg', '2024-05-21 19:22:38', '2024-05-21 19:22:38', 'michaelmatheus', 'michaelmatheus', 1),
	(24, 'assets/site/img/uploads/2024/05/unidade-1-suite-8.jpg', NULL, 1600, 1200, 271.3, 'image/jpeg', '2024-05-21 19:22:38', '2024-05-21 19:22:38', 'michaelmatheus', 'michaelmatheus', 1),
	(25, 'assets/site/img/uploads/2024/05/unidade-2-quarto-familia-2.jpg', NULL, 1600, 1040, 363.4, 'image/jpeg', '2024-05-21 19:22:48', '2024-05-21 19:22:48', 'michaelmatheus', 'michaelmatheus', 1),
	(26, 'assets/site/img/uploads/2024/05/unidade-2-quarto-familia-1.jpg', NULL, 1600, 1200, 446.2, 'image/jpeg', '2024-05-21 19:22:48', '2024-05-21 19:22:48', 'michaelmatheus', 'michaelmatheus', 1),
	(27, 'assets/site/img/uploads/2024/05/unidade-2-quarto-familia-3.jpg', NULL, 1600, 1200, 363.6, 'image/jpeg', '2024-05-21 19:22:48', '2024-05-21 19:22:48', 'michaelmatheus', 'michaelmatheus', 1),
	(28, 'assets/site/img/uploads/2024/05/unidade-2-quarto-familia-4.jpg', NULL, 1600, 1248, 321.5, 'image/jpeg', '2024-05-21 19:22:48', '2024-05-21 19:22:48', 'michaelmatheus', 'michaelmatheus', 1),
	(29, 'assets/site/img/uploads/2024/05/unidade-2-quarto-familia-5.jpg', NULL, 1600, 1200, 316.7, 'image/jpeg', '2024-05-21 19:22:49', '2024-05-21 19:22:49', 'michaelmatheus', 'michaelmatheus', 1),
	(30, 'assets/site/img/uploads/2024/05/unidade-2-quarto-familia-6.jpg', NULL, 1600, 1200, 337.6, 'image/jpeg', '2024-05-21 19:22:49', '2024-05-21 19:22:49', 'michaelmatheus', 'michaelmatheus', 1),
	(31, 'assets/site/img/uploads/2024/05/unidade-2-quarto-individual-1.jpg', NULL, 1600, 1286, 417.6, 'image/jpeg', '2024-05-21 19:22:57', '2024-05-21 19:22:57', 'michaelmatheus', 'michaelmatheus', 1),
	(32, 'assets/site/img/uploads/2024/05/unidade-2-quarto-individual-2.jpg', NULL, 1600, 1044, 216.7, 'image/jpeg', '2024-05-21 19:22:57', '2024-05-21 19:22:57', 'michaelmatheus', 'michaelmatheus', 1),
	(33, 'assets/site/img/uploads/2024/05/unidade-2-quarto-individual-3.jpg', NULL, 1600, 1200, 331.3, 'image/jpeg', '2024-05-21 19:22:57', '2024-05-21 19:22:57', 'michaelmatheus', 'michaelmatheus', 1),
	(34, 'assets/site/img/uploads/2024/05/unidade-2-recepcao-1.jpg', NULL, 1600, 1200, 395.2, 'image/jpeg', '2024-05-21 19:23:05', '2024-05-21 19:23:05', 'michaelmatheus', 'michaelmatheus', 1);
/*!40000 ALTER TABLE `assets` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `alt_title` varchar(255) NOT NULL,
  `order_position` int(11) NOT NULL,
  `url` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_by` varchar(50) NOT NULL,
  `last_update` varchar(50) NOT NULL,
  `able` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.banners: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `image`, `alt_title`, `order_position`, `url`, `created_at`, `updated_at`, `added_by`, `last_update`, `able`) VALUES
	(1, 'assets/site/img/uploads/2024/05/banner-home-cafe-traslado.png', 'Café da manhã + Traslado gratuito (ida e volta)', 0, '', '2024-05-14 18:08:00', '2024-05-14 22:54:05', 'michaelmatheus', 'michaelmatheus', 1);
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.configs
CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `config_name` varchar(50) NOT NULL,
  `config_value` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.configs: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` (`id`, `config_name`, `config_value`) VALUES
	(1, 'language', '{"language":"portuguese, português"}'),
	(2, 'author', '{"author_name":"Michael Matheus","author_url":"https://michaelmatheus.dev"}'),
	(3, 'company', '{"company_name_short":"ON Hostel","company_name_full":"ON Hostel","domain":"campos.onhostel.com.br","address":[{"address":"R. Camilo de Morais, 530","district":"Capivari","city":"Campos do Jordão","state":"SP","zipcode":"12460-000","google_maps":"https://maps.app.goo.gl/Lmr5rJ79c9bWzwtG8","waze":"https://ul.waze.com/ul?place=ChIJlfkbcFGIzJQReUep3pUAGV4&ll=-22.71791570%2C-45.56945490&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location","latitude":"-22.717767","longitude":"-45.569528"}]}'),
	(4, 'phones', '{"phones":[{"phone":"(11) 96921-0880","unmaskedPhone":"+5511969210880","isWhatsApp":true}],"mobiles":[{"phone":"(11) 96921-0880","unmaskedPhone":"+5511969210880","isWhatsApp":true}]}'),
	(5, 'email', '{"email":[{"address":"contato@onhostel.com.br","type":"contato"}]}'),
	(6, 'social', '{"social":[{"name":"instagram","url":"https://www.instagram.com/on_hostel_gru/"},{"name":"waze","url":"https://ul.waze.com/ul?place=ChIJlfkbcFGIzJQReUep3pUAGV4&ll=-22.71791570%2C-45.56945490&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location"}]}');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.galleryphotos
CREATE TABLE IF NOT EXISTS `galleryphotos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_by` varchar(50) DEFAULT NULL,
  `last_update` varchar(50) DEFAULT NULL,
  `able` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.galleryphotos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `galleryphotos` DISABLE KEYS */;
/*!40000 ALTER TABLE `galleryphotos` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.highlights
CREATE TABLE IF NOT EXISTS `highlights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `icon` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_by` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_update` varchar(50) DEFAULT NULL,
  `able` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.highlights: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `highlights` DISABLE KEYS */;
INSERT INTO `highlights` (`id`, `name`, `description`, `icon`, `created_at`, `updated_at`, `added_by`, `last_update`, `able`) VALUES
	(1, 'Localização Privilegiada', 'Próximo a fast-foods, postos e mercados.', 'fas fa-map-marked-alt', '2024-05-15 18:46:14', '2024-05-15 18:46:14', 'michaelmatheus', 'michaelmatheus', 1),
	(2, 'Conforto e Hospitalidade', 'Experiência acolhedora.', 'fas fa-home', '2024-05-15 18:54:08', '2024-05-15 18:54:08', 'michaelmatheus', 'michaelmatheus', 1),
	(3, 'Traslado gratuito', 'Chegue sem preocupações.', 'fas fa-shuttle-van', '2024-05-15 18:55:07', '2024-05-15 18:55:07', 'michaelmatheus', 'michaelmatheus', 1),
	(4, 'Café da Manhã Incluso', 'Comece bem o dia.', 'fas fa-coffee', '2024-05-15 18:56:54', '2024-05-15 18:56:54', 'michaelmatheus', 'michaelmatheus', 1),
	(5, 'Wi-Fi gratuito', 'Conectividade sem limites.', 'fas fa-wifi', '2024-05-15 18:57:50', '2024-05-15 18:57:50', 'michaelmatheus', 'michaelmatheus', 1);
/*!40000 ALTER TABLE `highlights` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.leads
CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `cpf_cnpj` varchar(18) DEFAULT NULL,
  `where_wanna_callback` varchar(30) DEFAULT NULL,
  `where_found_us` varchar(30) DEFAULT NULL,
  `message` text NOT NULL,
  `products` text DEFAULT NULL,
  `gclid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.leads: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `h1` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `alt_title` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `image` longtext NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_by` varchar(50) NOT NULL,
  `last_update` varchar(50) NOT NULL,
  `able` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.pages: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `h1` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `alt_title` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `image` longtext NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_by` varchar(50) NOT NULL,
  `last_update` varchar(50) NOT NULL,
  `able` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.posts: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `company` varchar(40) DEFAULT NULL,
  `text` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_by` varchar(50) NOT NULL,
  `last_update` varchar(50) NOT NULL,
  `able` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.testimonials: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `name`, `company`, `text`, `created_at`, `updated_at`, `added_by`, `last_update`, `able`) VALUES
	(1, 'Roseanne Mota', NULL, 'Eu precisava de um lugar para descansar e encontrei o hostel na internet Gostei muito! Quarto limpo, banheiro limpo oferece café da manhã que dá p comer tranquilo os atendentes bem educados e no preço acessível.', '2024-05-16 22:36:28', '2024-05-16 22:36:28', 'michaelmatheus', 'michaelmatheus', 1),
	(2, 'Calvin Kintschner', NULL, 'Excelente opção para quem precisa ficar próximo ao aeroporto de Guarulhos ou precisa ficar somente um ou dois dias em SP. Ficamos na unidade 1. Pegamos o translado gratuito que eles oferecem tanto na ida pro hostel, quanto na ida pro aeroporto.', '2024-05-16 22:37:02', '2024-05-16 22:37:02', 'michaelmatheus', 'michaelmatheus', 1),
	(3, 'Dayanna Esteu', NULL, 'Eu tive uma ótima experiência no On Hostel GRU! O hotel oferece um excelente custo benefício, com quartos confortáveis e um café da manhã delicioso. Além disso, o translado do hotel para o aeroporto, tanto na ida quanto na volta, foi muito conveniente.', '2024-05-16 22:37:17', '2024-05-16 22:37:17', 'michaelmatheus', 'michaelmatheus', 1);
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text DEFAULT NULL,
  `permissions` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `added_by` varchar(50) NOT NULL,
  `last_update` varchar(50) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `able` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `last_name`, `username`, `password`, `avatar`, `permissions`, `created_at`, `updated_at`, `added_by`, `last_update`, `token`, `able`) VALUES
	(1, 'Michael', 'Santos', 'michaelmatheus', '$2y$10$KEx9NpCt/fLLIigrVi5saO3151g3EBmC.c/uhkpnf1nfghN3rNpOS', 'assets/site/img/uploads/2024/05/michael-matheus.png', 0, '2024-05-14 18:05:53', '2024-11-02 17:32:25', 'michaelmatheus', 'michaelmatheus', 'dd99ac15b8452d14b6a3595f16f7f928', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
