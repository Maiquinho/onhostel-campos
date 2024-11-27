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
CREATE DATABASE IF NOT EXISTS `u584963118_onhostelcamposcampos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `u584963118_onhostelcamposcampos`;

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

-- Copiando dados para a tabela u584963118_onhostelcampos.assets: ~30 rows (aproximadamente)
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
	(3, 'company', '{"company_name_short":"ON Hostel","company_name_full":"ON Hostel","domain":"onhostel.com.br","address":[{"address":"Av. Otávio Braga de Mesquita, 3055","district":"Vila Florida","city":"Guarulhos","state":"SP","zipcode":"07191-000","google_maps":"https://maps.app.goo.gl/LPpPDSTfmUzJnwmh8","waze":"https://www.waze.com/pt-BR/live-map/directions/br/sp/av.-otavio-braga-de-mesquita,-3055?to=place.ChIJgzXC5c-KzpQRCPDeye3EZY4","latitude":"-23.4382095","longitude":"-46.5073373"},{"address":"Av. Otávio Braga de Mesquita, 2919","district":"Jd aeroporto","city":"Guarulhos","state":"SP","zipcode":"07140-230","google_maps":"https://maps.app.goo.gl/gUVXG9KeZqqe8DWg7","waze":"https://www.waze.com/pt-BR/live-map/directions/br/sp/av.-otavio-braga-de-mesquita,-2919?to=place.ChIJp0zTvc-KzpQRoh7MV89Npnw","latitude":"-23.4392712","longitude":"-46.5077828"}]}'),
	(4, 'phones', '{"phones":[{"phone":"(11) 96921-0880","unmaskedPhone":"+5511969210880","isWhatsApp":true}],"mobiles":[{"phone":"(11) 96921-0880","unmaskedPhone":"+5511969210880","isWhatsApp":true}]}'),
	(5, 'email', '{"email":[{"address":"contato@onhostel.com.br","type":"contato"}]}'),
	(6, 'social', '{"social":[{"name":"instagram","url":"https://www.instagram.com/on_hostel_gru/"},{"name":"waze","url":"https://www.waze.com/pt-BR/live-map/directions/br/sp/av.-otavio-braga-de-mesquita,-3055?to=place.ChIJgzXC5c-KzpQRCPDeye3EZY4"}]}');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;

-- Copiando estrutura para tabela u584963118_onhostelcampos.galleryassets
CREATE TABLE IF NOT EXISTS `galleryassets` (
  `gallery_id` int(11) NOT NULL,
  `asset_id` int(11) NOT NULL,
  `order` int(11) DEFAULT 0,
  PRIMARY KEY (`gallery_id`,`asset_id`),
  KEY `asset_id` (`asset_id`),
  CONSTRAINT `galleryassets_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `galleryphotos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `galleryassets_ibfk_2` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.galleryassets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `galleryassets` DISABLE KEYS */;
/*!40000 ALTER TABLE `galleryassets` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.pages: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `h1`, `description`, `alt_title`, `slug`, `image`, `content`, `created_at`, `updated_at`, `added_by`, `last_update`, `able`) VALUES
	(1, 'Hostel em Guarulhos - ON Hostel', 'Hostel em Guarulhos', 'Explore o que torna o ON Hostel em Guarulhos especial: quartos confortáveis, diferenças entre hostel e hotel, dicas para escolher o melhor hostel e 5 vantagens exclusivas.', 'Hostel em Guarulhos', 'hostel-em-guarulhos', '', '<h2>O que é hostel?</h2>\r\n<p>Um hostel é uma forma de hospedagem que combina conforto acessível com interação social. No ON Hostel em Guarulhos, oferecemos um ambiente acolhedor para viajantes de todo o mundo.</p>\r\n<h2>Como são os quartos em um hostel?</h2>\r\n<p>Os quartos do ON Hostel variam de dormitórios compartilhados a quartos privativos, todos projetados para garantir conforto e privacidade aos nossos hóspedes. Descubra mais sobre as opções de acomodação em nosso hostel em Guarulhos.</p>\r\n<h2>Qual a diferença entre hostel e hotel?</h2>\r\n<p>A principal diferença está na experiência oferecida: enquanto os hotéis focam na privacidade e nos serviços exclusivos, os hostels valorizam a interação social e proporcionam uma atmosfera mais descontraída.</p>\r\n<h2>O que levar em consideração na hora de escolher o melhor hostel?</h2>\r\n<p>Ao escolher um hostel, considere a localização, comodidades, reputação, segurança e ambiente social. No ON Hostel, priorizamos cada aspecto para garantir uma estadia excepcional.</p>\r\n<h2>5 vantagens de se hospedar em um hostel</h2>\r\n<ol>\r\n<li><strong>Interação Social:</strong> Conheça pessoas de todo o mundo.</li>\r\n<li><strong>Preço Acessível:</strong> Conforto sem comprometer o bolso.</li>\r\n<li><strong>Ambiente Acolhedor:</strong> Espaços comuns convidativos.</li>\r\n<li><strong>Localização Estratégica:</strong> Próximo a pontos importantes.</li>\r\n<li><strong>Experiência Autêntica:</strong> Viva a cultura local de Guarulhos.</li>\r\n</ol>\r\n<p>Esperamos que essas informações ajudem você a entender por que o ON Hostel em Guarulhos é a escolha ideal para sua próxima viagem!</p>', '2024-05-15 21:06:07', '2024-05-16 17:41:58', 'michaelmatheus', 'michaelmatheus', 1),
	(2, 'Hospedagem Aeroporto Guarulhos - ON Hostel', 'Hospedagem Aeroporto Guarulhos', 'Descubra a melhor hospedagem próxima ao Aeroporto de Guarulhos no ON Hostel. Quartos confortáveis, traslado gratuito. Reserve agora!', 'Hospedagem Aeroporto Guarulhos', 'hospedagem-aeroporto-guarulhos', '', '<h2>Hospedagem Aeroporto Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página de hospedagem próxima ao Aeroporto de Guarulhos oferecida pelo ON Hostel. Descubra o conforto e a praticidade que temos para oferecer aos viajantes que passam pela região.</p>\r\n<h2>Localização Estratégica e Acesso Fácil</h2>\r\n<p>Nosso hostel está localizado a poucos minutos do Aeroporto Internacional de Guarulhos, proporcionando fácil acesso para quem busca uma estadia conveniente e sem complicações.</p>\r\n<h2>Acomodações Confortáveis e Tranquilas</h2>\r\n<p>No ON Hostel, oferecemos quartos confortáveis e tranquilos, garantindo uma boa noite de sono antes ou depois de seus voos. Nossas instalações foram projetadas pensando no seu bem-estar durante sua estadia.</p>\r\n<h2>Traslado Gratuito para o Aeroporto</h2>\r\n<p>Para tornar sua experiência ainda mais conveniente, disponibilizamos traslado gratuito para o Aeroporto de Guarulhos, assegurando que você chegue ao seu voo de forma rápida e segura.</p>\r\n<h2>Ambiente Acolhedor e Serviço Personalizado</h2>\r\n<p>Além do conforto das acomodações, oferecemos um ambiente acolhedor e um serviço personalizado para tornar sua estadia conosco ainda mais agradável e memorável.</p>\r\n<h2>Reserve Agora Sua Hospedagem no ON Hostel</h2>\r\n<p>Não deixe para a última hora! Reserve agora sua hospedagem no ON Hostel e desfrute do conforto e da conveniência que só um hostel próximo ao Aeroporto de Guarulhos pode oferecer. Estamos ansiosos para recebê-lo!</p>', '2024-05-15 21:21:17', '2024-05-16 17:42:19', 'michaelmatheus', 'michaelmatheus', 1),
	(3, 'Hostel Próximo ao Aeroporto de Guarulhos - ON Hostel', 'Hostel Próximo ao Aeroporto de Guarulhos', ' Descubra o melhor hostel próximo ao Aeroporto no ON Hostel. Quartos confortáveis, traslado gratuito. Reserve agora!', 'Hostel Próximo ao Aeroporto de Guarulhos', 'hostel-proximo-ao-aeroporto-de-guarulhos', '', '<h2>Hostel Próximo ao Aeroporto: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página do ON Hostel, sua escolha ideal para hospedagem próxima ao Aeroporto. Conheça nossas comodidades e a conveniência que oferecemos aos viajantes.</p>\r\n<h2>Localização Estratégica e Facilidade de Acesso</h2>\r\n<p>Nosso hostel está estrategicamente localizado próximo ao Aeroporto, proporcionando facilidade de acesso para quem busca uma estadia prática e sem complicações.</p>\r\n<h2>Acomodações Confortáveis e Tranquilas</h2>\r\n<p>No ON Hostel, oferecemos quartos confortáveis e tranquilos, garantindo uma boa noite de sono antes ou depois de seus voos. Nossas instalações foram projetadas pensando no seu conforto e bem-estar.</p>\r\n<h2>Traslado Gratuito para o Aeroporto</h2>\r\n<p>Para tornar sua experiência ainda mais conveniente, disponibilizamos traslado gratuito para o Aeroporto, permitindo que você chegue ao seu voo sem preocupações e de forma rápida e segura.</p>\r\n<h2>Ambiente Acolhedor e Serviço Personalizado</h2>\r\n<p>Além das acomodações confortáveis, proporcionamos um ambiente acolhedor e um serviço personalizado para garantir que sua estadia conosco seja agradável e memorável.</p>\r\n<h2>Reserve Agora Sua Hospedagem no ON Hostel</h2>\r\n<p>Não deixe para a última hora! Reserve agora sua hospedagem no ON Hostel e desfrute do conforto, conveniência e qualidade que só um hostel próximo ao Aeroporto pode oferecer. Estamos ansiosos para recebê-lo e tornar sua experiência em Guarulhos ainda mais especial!</p>', '2024-05-15 22:13:46', '2024-05-15 22:35:06', 'michaelmatheus', 'michaelmatheus', 1),
	(4, 'Hospedagem Barata em Guarulhos - ON Hostel', 'Hospedagem Barata em Guarulhos', 'Descubra a hospedagem barata em Guarulhos no ON Hostel. Quartos confortáveis, preço acessível. Reserve agora e economize!', 'Hospedagem Barata em Guarulhos', 'hospedagem-barata-em-guarulhos', '', '<h2>Hospedagem Barata em Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página do ON Hostel em Guarulhos, sua opção de hospedagem econômica e confortável na região. Conheça nossas vantagens e reserve sua estadia a um preço acessível.</p>\r\n<h2>Localização Estratégica e Preço Acessível</h2>\r\n<p>O ON Hostel está localizado em Guarulhos, próximo a pontos importantes da cidade e oferece tarifas acessíveis, garantindo uma hospedagem econômica sem comprometer o conforto.</p>\r\n<h2>Quartos Confortáveis e Econômicos</h2>\r\n<p>Nossos quartos foram projetados para proporcionar conforto e economia aos nossos hóspedes. Oferecemos acomodações aconchegantes a preços acessíveis para garantir uma estadia agradável.</p>\r\n<h2>Serviços de Qualidade e Atendimento Personalizado</h2>\r\n<p>Além do preço acessível, mantemos a qualidade dos serviços e um atendimento personalizado para garantir que sua experiência conosco seja satisfatória e econômica.</p>\r\n<h2>Dicas para Economizar em Sua Hospedagem</h2>\r\n<p>Para ajudar você a economizar ainda mais, oferecemos dicas úteis para aproveitar ao máximo sua hospedagem barata em Guarulhos, sem abrir mão do conforto e da conveniência.</p>\r\n<h2>Reserve Agora e Economize no ON Hostel</h2>\r\n<p>Não deixe para depois! Reserve agora sua hospedagem barata no ON Hostel e desfrute do conforto e da economia que só um hostel em Guarulhos pode oferecer. Estamos prontos para recebê-lo e garantir uma estadia agradável e econômica!</p>', '2024-05-15 22:18:37', '2024-05-15 22:18:37', 'michaelmatheus', 'michaelmatheus', 1),
	(5, 'Hospedagem Barata no Aeroporto de Guarulhos - ON Hostel', 'Hospedagem Barata Aeroporto de Guarulhos', 'Descubra a hospedagem barata no Aeroporto de Guarulhos no ON Hostel. Quartos confortáveis, preço acessível. Reserve agora!', 'Hospedagem Barata Aeroporto de Guarulhos', 'hospedagem-barata-no-aeroporto-de-guarulhos', '', '<h2>Hospedagem Barata Aeroporto de Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página do ON Hostel, sua opção de hospedagem econômica e confortável no Aeroporto de Guarulhos. Conheça nossas vantagens e reserve sua estadia a um preço acessível.</p>\r\n<h2>Localização Estratégica e Preço Acessível</h2>\r\n<p>O ON Hostel está estrategicamente localizado no Aeroporto de Guarulhos, oferecendo tarifas acessíveis para quem busca uma hospedagem econômica e conveniente.</p>\r\n<h2>Quartos Confortáveis e Econômicos</h2>\r\n<p>Nossos quartos foram projetados para proporcionar conforto e economia aos nossos hóspedes. Oferecemos acomodações aconchegantes a preços acessíveis para garantir uma estadia agradável.</p>\r\n<h2>Serviços de Qualidade e Atendimento Personalizado</h2>\r\n<p>Além do preço acessível, mantemos a qualidade dos serviços e um atendimento personalizado para garantir que sua experiência conosco seja satisfatória e econômica.</p>\r\n<h2>Dicas para Economizar em Sua Hospedagem</h2>\r\n<p>Para ajudar você a economizar ainda mais, oferecemos dicas úteis para aproveitar ao máximo sua hospedagem barata no Aeroporto de Guarulhos, sem abrir mão do conforto e da conveniência.</p>\r\n<h2>Reserve Agora e Economize no ON Hostel</h2>\r\n<p>Não deixe para depois! Reserve agora sua hospedagem barata no ON Hostel e desfrute do conforto e da economia que só um hostel no Aeroporto de Guarulhos pode oferecer. Estamos prontos para recebê-lo e garantir uma estadia agradável e econômica!</p>', '2024-05-15 22:27:16', '2024-05-15 22:27:16', 'michaelmatheus', 'michaelmatheus', 1),
	(6, 'Estadia Barata em Guarulhos - ON Hostel', 'Estadia Barata em Guarulhos', 'Descubra a estadia barata em Guarulhos no ON Hostel. Quartos confortáveis, preço acessível. Reserve agora e economize!', 'Estadia Barata em Guarulhos', 'estadia-barata-em-guarulhos', '', '<h2>Estadia Barata em Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página do ON Hostel em Guarulhos, onde oferecemos a melhor estadia barata na região. Conheça nossas vantagens e economize em sua hospedagem sem abrir mão do conforto.</p>\r\n<h2>Localização Estratégica e Preço Acessível</h2>\r\n<p>O ON Hostel está estrategicamente localizado em Guarulhos, oferecendo tarifas acessíveis para quem busca uma estadia barata sem abrir mão da qualidade e do conforto.</p>\r\n<h2>Quartos Confortáveis e Econômicos</h2>\r\n<p>Nossos quartos foram projetados para proporcionar conforto e economia aos nossos hóspedes. Oferecemos acomodações aconchegantes a preços acessíveis para garantir uma estadia agradável.</p>\r\n<h2>Serviços de Qualidade e Atendimento Personalizado</h2>\r\n<p>Além do preço acessível, mantemos a qualidade dos serviços e um atendimento personalizado para garantir que sua experiência conosco seja satisfatória e econômica.</p>\r\n<h2>Dicas para Economizar em Sua Estadia</h2>\r\n<p>Para ajudar você a economizar ainda mais, oferecemos dicas úteis para aproveitar ao máximo sua estadia barata em Guarulhos no ON Hostel, sem abrir mão do conforto e da conveniência.</p>\r\n<h2>Reserve Agora e Economize no ON Hostel</h2>\r\n<p>Não deixe para depois! Reserve agora sua estadia barata no ON Hostel e desfrute do conforto e da economia que só um hostel em Guarulhos pode oferecer. Estamos prontos para recebê-lo e garantir uma estadia agradável e econômica!</p>', '2024-05-15 22:30:14', '2024-05-15 22:30:14', 'michaelmatheus', 'michaelmatheus', 1),
	(7, 'Estadia Barata Aeroporto de Guarulhos - ON Hostel', 'Estadia Barata Aeroporto de Guarulhos', 'Descubra a estadia barata no Aeroporto de Guarulhos no ON Hostel. Quartos confortáveis, preço acessível. Reserve agora e economize!', 'Estadia Barata Aeroporto de Guarulhos', 'estadia-barata-aeroporto-de-guarulhos', '', '<h2>Estadia Barata Aeroporto de Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página do ON Hostel, sua opção de estadia barata no Aeroporto de Guarulhos. Conheça nossas vantagens e economize em sua hospedagem sem abrir mão do conforto.</p>\r\n<h2>Localização Estratégica e Preço Acessível</h2>\r\n<p>O ON Hostel está estrategicamente localizado próximo ao Aeroporto de Guarulhos, oferecendo tarifas acessíveis para quem busca uma estadia barata sem abrir mão da qualidade e do conforto.</p>\r\n<h2>Quartos Confortáveis e Econômicos</h2>\r\n<p>Nossos quartos foram projetados para proporcionar conforto e economia aos nossos hóspedes. Oferecemos acomodações aconchegantes a preços acessíveis para garantir uma estadia agradável.</p>\r\n<h2>Serviços de Qualidade e Atendimento Personalizado</h2>\r\n<p>Além do preço acessível, mantemos a qualidade dos serviços e um atendimento personalizado para garantir que sua experiência conosco seja satisfatória e econômica.</p>\r\n<h2>Dicas para Economizar em Sua Estadia</h2>\r\n<p>Para ajudar você a economizar ainda mais, oferecemos dicas úteis para aproveitar ao máximo sua estadia barata no Aeroporto de Guarulhos no ON Hostel, sem abrir mão do conforto e da conveniência.</p>\r\n<h2>Reserve Agora e Economize no ON Hostel</h2>\r\n<p>Não perca tempo! Reserve agora sua estadia barata no Aeroporto de Guarulhos no ON Hostel e desfrute do conforto e da economia que oferecemos. Estamos prontos para recebê-lo e garantir uma estadia agradável e econômica!</p>', '2024-05-15 22:37:40', '2024-05-15 22:37:40', 'michaelmatheus', 'michaelmatheus', 1),
	(8, 'Quarto Barato em Guarulhos - ON Hostel', 'Quarto Barato em Guarulhos', 'Descubra quartos baratos em Guarulhos no ON Hostel. Conforto e economia garantidos. Reserve agora e aproveite sua estadia!', 'Quarto Barato em Guarulhos', 'quarto-barato-em-guarulhos', '', '<h2>Quarto Barato em Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página do ON Hostel em Guarulhos, onde oferecemos quartos baratos sem abrir mão do conforto. Conheça nossas vantagens e garanta sua hospedagem econômica.</p>\r\n<h2>Localização Estratégica e Preço Acessível</h2>\r\n<p>O ON Hostel está estrategicamente localizado em Guarulhos, oferecendo quartos baratos para quem busca economia sem abrir mão do conforto e da qualidade.</p>\r\n<h2>Conforto e Economia Garantidos</h2>\r\n<p>Nossos quartos baratos foram projetados para proporcionar conforto e economia aos nossos hóspedes. Desfrute de uma estadia agradável a preços acessíveis.</p>\r\n<h2>Serviços de Qualidade e Atendimento Personalizado</h2>\r\n<p>Além do preço acessível, mantemos a qualidade dos serviços e um atendimento personalizado para garantir que sua experiência conosco seja satisfatória e econômica.</p>\r\n<h2>Dicas para Economizar em Sua Estadia</h2>\r\n<p>Para ajudar você a economizar ainda mais, oferecemos dicas úteis para aproveitar ao máximo sua estadia em nossos quartos baratos em Guarulhos no ON Hostel.</p>\r\n<h2>Reserve Agora e Economize no ON Hostel</h2>\r\n<p>Não perca a oportunidade! Reserve agora seu quarto barato em Guarulhos no ON Hostel e desfrute do conforto e da economia que oferecemos. Estamos prontos para recebê-lo e garantir uma estadia agradável e econômica!</p>', '2024-05-15 22:40:33', '2024-05-15 22:40:33', 'michaelmatheus', 'michaelmatheus', 1),
	(9, 'Quarto Barato com Cama de Casal em Guarulhos - ON Hostel', 'Quarto Barato com Cama de Casal em Guarulhos', 'Encontre o melhor quarto barato com cama de casal em Guarulhos no ON Hostel. Conforto e economia em sua estadia garantidos. Reserve agora!', 'Quarto Barato com Cama de Casal em Guarulhos', 'quarto-barato-com-cama-de-casal-em-guarulhos', '', '<h2>Quarto Barato com Cama de Casal em Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página do ON Hostel em Guarulhos, onde oferecemos quartos baratos com cama de casal para uma estadia confortável e econômica.</p>\r\n<h2>Conforto e Economia em um Único Lugar</h2>\r\n<p>No ON Hostel, você encontra o equilíbrio perfeito entre conforto e economia. Nossos quartos baratos com cama de casal são projetados para proporcionar uma estadia agradável a preços acessíveis.</p>\r\n<h2>Localização Privilegiada em Guarulhos</h2>\r\n<p>Desfrute de nossa localização privilegiada em Guarulhos, próxima a aeroportos e pontos turísticos. Seja a trabalho ou lazer, oferecemos a melhor opção de hospedagem com cama de casal a preços acessíveis.</p>\r\n<h2>Serviços de Qualidade e Atendimento Personalizado</h2>\r\n<p>Além do preço acessível, mantemos a qualidade dos serviços e um atendimento personalizado para garantir que sua experiência conosco seja satisfatória em todos os aspectos.</p>\r\n<h2>Dicas para uma Estadia Confortável e Econômica</h2>\r\n<p>Confira nossas dicas úteis para aproveitar ao máximo sua estadia em um quarto barato com cama de casal no ON Hostel. Economize sem abrir mão do conforto!</p>\r\n<h2>Reserve Agora seu Quarto Barato com Cama de Casal</h2>\r\n<p>Não perca tempo! Reserve agora seu quarto barato com cama de casal em Guarulhos no ON Hostel e garanta uma estadia confortável e econômica. Estamos ansiosos para recebê-lo!</p>', '2024-05-15 22:42:42', '2024-05-15 22:42:42', 'michaelmatheus', 'michaelmatheus', 1),
	(10, 'Quarto Barato com Cama de Solteiro em Guarulhos - ON Hostel', 'Quarto Barato com Cama de Solteiro em Guarulhos', 'Encontre o melhor quarto barato com cama de solteiro em Guarulhos no ON Hostel. Conforto e economia em sua estadia garantidos. Reserve agora!', 'Quarto Barato com Cama de Solteiro em Guarulhos', 'quarto-barato-com-cama-de-solteiro-em-guarulhos', '', '<h2>Quarto Barato com Cama de Solteiro em Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página do ON Hostel em Guarulhos, onde oferecemos quartos baratos com cama de solteiro para uma estadia confortável e econômica.</p>\r\n<h2>Conforto e Economia em um Único Lugar</h2>\r\n<p>No ON Hostel, você encontra o equilíbrio perfeito entre conforto e economia. Nossos quartos baratos com cama de solteiro são projetados para proporcionar uma estadia agradável a preços acessíveis.</p>\r\n<h2>Localização Privilegiada em Guarulhos</h2>\r\n<p>Desfrute de nossa localização privilegiada em Guarulhos, próxima a aeroportos e pontos turísticos. Seja a trabalho ou lazer, oferecemos a melhor opção de hospedagem com cama de solteiro a preços acessíveis.</p>\r\n<h2>Serviços de Qualidade e Atendimento Personalizado</h2>\r\n<p>Além do preço acessível, mantemos a qualidade dos serviços e um atendimento personalizado para garantir que sua experiência conosco seja satisfatória em todos os aspectos.</p>\r\n<h2>Dicas para uma Estadia Confortável e Econômica</h2>\r\n<p>Confira nossas dicas úteis para aproveitar ao máximo sua estadia em um quarto barato com cama de solteiro no ON Hostel. Economize sem abrir mão do conforto!</p>\r\n<h2>Reserve Agora seu Quarto Barato com Cama de Solteiro</h2>\r\n<p>Não perca tempo! Reserve agora seu quarto barato com cama de solteiro em Guarulhos no ON Hostel e garanta uma estadia confortável e econômica. Estamos ansiosos para recebê-lo!</p>', '2024-05-15 22:44:32', '2024-05-15 22:44:32', 'michaelmatheus', 'michaelmatheus', 1),
	(11, 'Quarto Barato com Ar Condicionado em Guarulhos - ON Hostel', 'Quarto Barato com Ar Condicionado em Guarulhos', 'Encontre o melhor quarto barato com ar condicionado em Guarulhos no ON Hostel. Conforto e economia em sua estadia garantidos. Reserve agora!', 'Quarto Barato com Ar Condicionado em Guarulhos', 'quarto-barato-com-ar-condicionado-em-guarulhos', '', '<h2>Quarto Barato com Ar Condicionado em Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Bem-vindo à página do ON Hostel em Guarulhos, onde oferecemos quartos baratos com ar condicionado para uma estadia confortável e econômica.</p>\r\n<h2>Conforto e Economia em um Único Lugar</h2>\r\n<p>No ON Hostel, você encontra o equilíbrio perfeito entre conforto e economia. Nossos quartos baratos com ar condicionado são projetados para proporcionar uma estadia agradável a preços acessíveis.</p>\r\n<h2>Localização Privilegiada em Guarulhos</h2>\r\n<p>Desfrute de nossa localização privilegiada em Guarulhos, próxima a aeroportos e pontos turísticos. Seja a trabalho ou lazer, oferecemos a melhor opção de hospedagem com ar condicionado a preços acessíveis.</p>\r\n<h2>Serviços de Qualidade e Atendimento Personalizado</h2>\r\n<p>Além do preço acessível, mantemos a qualidade dos serviços e um atendimento personalizado para garantir que sua experiência conosco seja satisfatória em todos os aspectos.</p>\r\n<h2>Dicas para uma Estadia Confortável e Econômica</h2>\r\n<p>Confira nossas dicas úteis para aproveitar ao máximo sua estadia em um quarto barato com ar condicionado no ON Hostel. Economize sem abrir mão do conforto!</p>\r\n<h2>Reserve Agora seu Quarto Barato com Ar Condicionado</h2>\r\n<p>Não perca tempo! Reserve agora seu quarto barato com ar condicionado em Guarulhos no ON Hostel e garanta uma estadia confortável e econômica. Estamos ansiosos para recebê-lo!</p>', '2024-05-15 22:48:18', '2024-05-15 22:48:18', 'michaelmatheus', 'michaelmatheus', 1),
	(12, 'Suíte com Ar Condicionado em Guarulhos - ON Hostel', 'Suíte com Ar Condicionado em Guarulhos', 'Conheça a suíte com ar condicionado em Guarulhos no ON Hostel. Conforto, comodidade e economia em sua hospedagem. Reserve já!', 'Suíte com Ar Condicionado em Guarulhos', 'suite-com-ar-condicionado-em-guarulhos', '', '<h2>Suíte com Ar Condicionado em Guarulhos: Conforto no ON Hostel</h2>\r\n<p>Seja bem-vindo à suíte com ar condicionado em Guarulhos no ON Hostel, onde conforto e comodidade se unem para uma estadia excepcional.</p>\r\n<h2>Conforto e Comodidade em Nossa Suíte</h2>\r\n<p>Nossa suíte com ar condicionado oferece o conforto que você merece durante sua estadia em Guarulhos. Comodidade, espaço e ambiente agradável estão garantidos para tornar sua hospedagem memorável.</p>\r\n<h2>Localização Estratégica em Guarulhos</h2>\r\n<p>Desfrute de nossa localização estratégica em Guarulhos, próxima a aeroportos, centros comerciais e atrações turísticas. Facilidade de acesso e conveniência para seus compromissos na cidade.</p>\r\n<h2>Serviços de Qualidade e Atendimento Personalizado</h2>\r\n<p>Além da suíte com ar condicionado, proporcionamos serviços de qualidade e um atendimento personalizado para garantir sua satisfação em todos os aspectos da hospedagem.</p>\r\n<h2>Dicas para Aproveitar sua Estadia</h2>\r\n<p>Confira nossas dicas para aproveitar ao máximo sua estadia na suíte com ar condicionado no ON Hostel. Desde passeios locais até recomendações gastronômicas, estamos aqui para tornar sua viagem ainda mais especial.</p>\r\n<h2>Reserve Agora sua Suíte com Ar Condicionado</h2>\r\n<p>Não perca tempo! Reserve agora sua suíte com ar condicionado em Guarulhos no ON Hostel e garanta conforto, comodidade e economia durante sua hospedagem na cidade. Estamos ansiosos para recebê-lo!</p>', '2024-05-15 22:51:42', '2024-05-15 22:51:42', 'michaelmatheus', 'michaelmatheus', 1);
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
	(1, 'Michael', 'Santos', 'michaelmatheus', '$2y$10$KEx9NpCt/fLLIigrVi5saO3151g3EBmC.c/uhkpnf1nfghN3rNpOS', 'assets/site/img/uploads/2024/05/michael-matheus.png', 0, '2024-05-14 18:05:53', '2024-05-16 22:33:29', 'michaelmatheus', 'michaelmatheus', '7792222c8bdcc7e87404b61b57914608', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
