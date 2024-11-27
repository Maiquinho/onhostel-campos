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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.banners: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `image`, `alt_title`, `order_position`, `url`, `created_at`, `updated_at`, `added_by`, `last_update`, `able`) VALUES
	(1, 'assets/site/img/uploads/2024/11/aluguel-de-uvt-quadriciclo.webp', 'Aluguel de UVT e Quadriciclo', 2, 'https://api.whatsapp.com/send?phone=5512974037217&text=Olá, vim pelo site e gostaria saber mais sobre o alguel de UVT e quadriciclos!', '2024-05-14 18:08:00', '2024-11-04 22:55:08', 'michaelmatheus', 'michaelmatheus', 1),
	(2, 'assets/site/img/uploads/2024/11/diarias-acessiveis.webp', 'Diárias a partir de R$99,90', 1, '', '2024-11-04 22:35:04', '2024-11-04 22:35:19', 'michaelmatheus', 'michaelmatheus', 1),
	(3, 'assets/site/img/uploads/2024/11/2-diarias-passeio-gratis-quadriciclo.webp', 'A partir de 2 diárias passeio de quadriciclo grátis', 0, '', '2024-11-04 22:53:50', '2024-11-04 22:55:17', 'michaelmatheus', 'michaelmatheus', 1);
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
	(4, 'phones', '{"phones":[{"phone":"(12) 97403-7217","unmaskedPhone":"+5512974037217","isWhatsApp":true}],"mobiles":[{"phone":"(12) 97403-7217","unmaskedPhone":"+5512974037217","isWhatsApp":true}]}'),
	(5, 'email', '{"email":[{"address":"campos@onhostel.com.br","type":"contato"}]}'),
	(6, 'social', '{"social":[{"name":"instagram","url":"https://www.instagram.com/on_hostel_gru/"},{"name":"waze","url":"https://www.waze.com/pt-BR/live-map/directions/br/sp/av.-otavio-braga-de-mesquita,-3055?to=place.ChIJgzXC5c-KzpQRCPDeye3EZY4"}]}');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.highlights: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `highlights` DISABLE KEYS */;
INSERT INTO `highlights` (`id`, `name`, `description`, `icon`, `created_at`, `updated_at`, `added_by`, `last_update`, `able`) VALUES
	(1, 'Aluguel de Quadriciclo', 'Explore trilhas de quadriciclo incríveis.', 'fas fa-fas fa-fas fa-fas fa-car', '2024-05-15 18:46:14', '2024-11-02 20:38:13', 'michaelmatheus', 'michaelmatheus', 1),
	(2, 'Estacionamento Gratuito', 'Estacionamento seguro e gratuito.', 'fas fa-fas fa-fas fa-fas fa-car', '2024-11-04 22:08:03', '2024-11-26 22:07:25', 'michaelmatheus', 'michaelmatheus', 0),
	(3, 'Pet Friendly', 'Traga seu pet para curtir com você.', 'fas fa-fas fa-dog', '2024-11-04 22:08:31', '2024-11-04 22:09:32', 'michaelmatheus', 'michaelmatheus', 1),
	(4, 'Café da Manhã', 'Comece bem o dia.', 'fas fa-coffee', '2024-05-15 18:56:54', '2024-05-15 18:56:54', 'michaelmatheus', 'michaelmatheus', 1),
	(8, 'Wi-Fi gratuito', 'Conectividade sem limites.', 'fas fa-wifi', '2024-05-15 18:57:50', '2024-11-04 22:08:51', 'michaelmatheus', 'michaelmatheus', 1),
	(9, 'Conforto e Hospitalidade', 'Experiência acolhedora.', 'fas fa-home', '2024-05-15 18:54:08', '2024-11-04 22:09:07', 'michaelmatheus', 'michaelmatheus', 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela u584963118_onhostelcampos.pages: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `h1`, `description`, `alt_title`, `slug`, `image`, `content`, `created_at`, `updated_at`, `added_by`, `last_update`, `able`) VALUES
	(1, 'Pousada em Campos do Jordão | ON Hostel', 'Pousada em Campos do Jordão', 'Hospede-se na pousada ON Hostel em Campos do Jordão e viva momentos únicos de conforto e aventura. Reserve sua experiência agora!', 'Pousada em Campos do Jordão', 'pousada-campos-do-jordao', '', '<h2>Conheça a Pousada ON Hostel em Campos do Jordão</h2>\r\n<p>A Pousada ON Hostel é o destino ideal para quem busca uma estadia única em Campos do Jordão, seja para descansar, se conectar com a natureza ou viver aventuras nas trilhas da Serra da Mantiqueira. Oferecemos conforto, segurança e serviços exclusivos em um ambiente acolhedor, pensado para proporcionar experiências inesquecíveis.</p>\r\n<h2>Conforto e Aconchego em Cada Detalhe</h2>\r\n<p>Aqui, priorizamos o bem-estar dos nossos hóspedes. Nossos quartos são decorados para criar uma atmosfera aconchegante, perfeita para as temperaturas serranas. Com camas confortáveis, aquecimento e amenities especiais, garantimos que você tenha noites tranquilas e relaxantes durante sua estadia. Seja em um quarto individual, duplo ou família, cada detalhe é cuidadosamente planejado para proporcionar conforto.</p>\r\n<h2>Localização Privilegiada no Coração da Serra</h2>\r\n<p>Nossa pousada está situada em uma das áreas mais encantadoras de Campos do Jordão, próximo a pontos turísticos, trilhas e atividades ao ar livre. Essa localização estratégica permite que nossos hóspedes aproveitem o melhor da cidade e da natureza. Para quem deseja explorar, oferecemos também o aluguel de UTVs e quadriciclos, ideais para aventuras nas trilhas e contato direto com as paisagens da região.</p>\r\n<h2>Serviços Exclusivos e Café da Manhã</h2>\r\n<p>No ON Hostel, cada estadia inclui um delicioso café da manhã, preparado para todos os gostos e perfeito para iniciar o dia com energia. Além disso, nossa equipe está sempre pronta para ajudar, garantindo que todos os nossos serviços atendam suas necessidades. Oferecemos ainda áreas de convivência, onde você pode socializar com outros hóspedes em um ambiente confortável e seguro.</p>\r\n<h2>Por Que Escolher a Pousada ON Hostel?</h2>\r\n<p>A Pousada ON Hostel é mais que uma acomodação; é um espaço onde você se sente em casa. Nossa filosofia é de hospitalidade autêntica, com uma equipe que cuida de cada detalhe para que sua experiência seja completa. Se você busca uma pousada que combine conforto, localização privilegiada e um toque de aventura, o ON Hostel é a escolha ideal em Campos do Jordão.</p>', '2024-11-04 20:25:38', '2024-11-04 20:25:38', 'michaelmatheus', 'michaelmatheus', 1),
	(2, 'Hospedagem em Campos do Jordão | ON Hostel', 'Hospedagem em Campos do Jordão', 'Hospedagem em Campos do Jordão com conforto e aventura no ON Hostel. Descubra a melhor opção para sua estadia e reserve já!', 'Hospedagem em Campos do Jordão', 'hospedagem-campos-do-jordao', '', '<h2>ON Hostel - Sua Melhor Opção de Hospedagem em Campos do Jordão</h2>\r\n<p>No ON Hostel, oferecemos uma experiência de hospedagem diferenciada em Campos do Jordão. Nossa unidade, inaugurada em 2024, une conforto, segurança e um toque de aventura para tornar sua estadia única. Seja para relaxar ou para explorar as paisagens serranas, nossa estrutura é pensada para oferecer o melhor.</p>\r\n<h2>Conforto e Estrutura Completa para seu Bem-Estar</h2>\r\n<p>Aqui, cada detalhe é cuidadosamente planejado para proporcionar conforto e aconchego em sua estadia. Com quartos que atendem a diferentes perfis de hóspedes, nossa estrutura inclui aquecimento, roupas de cama de qualidade e decoração que traz o charme da serra. O objetivo é garantir que cada momento seja acolhedor, para que você se sinta em casa.</p>\r\n<h2>Localização Privilegiada Próxima às Atrações de Campos do Jordão</h2>\r\n<p>Nossa hospedagem está situada em um ponto estratégico de Campos do Jordão, perto de trilhas, pontos turísticos e atividades locais. Esta localização permite fácil acesso à natureza e ao turismo, para que você aproveite o que a cidade tem de melhor. Além disso, disponibilizamos aluguel de UTVs e quadriciclos, ideal para explorar a região de forma emocionante.</p>\r\n<h2>Café da Manhã e Serviços Especiais</h2>\r\n<p>Para começar bem o dia, oferecemos um café da manhã completo, preparado com variedade e frescor, incluído em sua hospedagem. Nossas áreas de convivência proporcionam momentos relaxantes, seja para descansar ou para socializar com outros hóspedes, em um ambiente seguro e confortável.</p>\r\n<h2>Por que Escolher o ON Hostel para sua Hospedagem em Campos do Jordão?</h2>\r\n<p>Ao escolher o ON Hostel, você opta por uma experiência de hospedagem que vai além do básico. Nosso compromisso é com a qualidade e o bem-estar dos nossos hóspedes. Nossa equipe está sempre pronta para auxiliar no que for necessário, tornando sua estadia em Campos do Jordão memorável.</p>', '2024-11-04 20:41:56', '2024-11-04 20:41:56', 'michaelmatheus', 'michaelmatheus', 1),
	(3, 'Hotel em Campos do Jordão | ON Hostel', 'Hotel em Campos do Jordão', 'Encontre conforto e aventura em Campos do Jordão no ON Hostel. Hospede-se com estilo e aproveite uma experiência completa. Reserve já!', 'Hotel em Campos do Jordão', 'hotel-campos-do-jordao', '', '<h2>Bem-vindo ao ON Hostel: Seu Hotel em Campos do Jordão</h2>\r\n<p>O ON Hostel é mais do que um simples hotel em Campos do Jordão – somos o destino ideal para quem busca uma experiência completa de conforto e aventura. Recém-inaugurada em 2024, nossa unidade combina um ambiente acolhedor com opções emocionantes para quem deseja explorar a cidade ao máximo.</p>\r\n<h2>Conforto e Qualidade para Sua Hospedagem</h2>\r\n<p>Nossos quartos foram projetados para proporcionar o máximo de conforto e praticidade durante sua estadia. Oferecemos uma estrutura de hospedagem de qualidade, incluindo quartos aconchegantes, decoração moderna e um ambiente pensado para garantir sua tranquilidade e descanso após um dia cheio de atividades.</p>\r\n<h3>Localização Privilegiada para Aproveitar Campos do Jordão</h3>\r\n<p>Situado em uma das áreas mais bonitas de Campos do Jordão, o ON Hostel permite fácil acesso às principais atrações turísticas da região. Desde pontos turísticos a trilhas naturais, estamos próximos de tudo o que você precisa para uma experiência completa, com a conveniência de um hotel bem localizado.</p>\r\n<h2>Aventura na Montanha: Aluguel de Quadriciclo e UTV</h2>\r\n<p>Além de conforto, oferecemos experiências únicas como o aluguel de quadriciclos e UTVs, para que você aproveite trilhas e percursos em meio à natureza exuberante. Explore paisagens incríveis com segurança e emoção, em uma atividade pensada para aventureiros de todas as idades.</p>\r\n<h3>Faça Sua Reserva e Viva a Experiência ON Hostel</h3>\r\n<p>Seja para relaxar ou explorar, o ON Hostel é a melhor escolha de hotel em Campos do Jordão. Com uma equipe pronta para atender você, cada detalhe de sua hospedagem é pensado para que você tenha uma experiência memorável. Reserve agora e descubra tudo o que o ON Hostel tem a oferecer!</p>', '2024-11-04 20:57:24', '2024-11-04 20:58:12', 'michaelmatheus', 'michaelmatheus', 1),
	(4, 'Hotel Pet Friendly | ON Hostel', 'Hotel Pet Friendly', 'Curta Campos do Jordão ao lado do seu pet no ON Hostel! Conforto, diversão e aventuras para você e seu companheiro. Reserve hoje!', 'Hotel Pet Friendly', 'hotel-pet-friendly', '', '<h2>ON Hostel – Seu Hotel Pet Friendly em Campos do Jordão</h2>\r\n<p>O ON Hostel é o lugar perfeito para quem deseja viajar com seu companheiro de quatro patas. Em nossa unidade pet friendly, você e seu pet são muito bem-vindos, para uma estadia confortável, divertida e repleta de experiências especiais em Campos do Jordão.</p>\r\n<h2>Conforto e Bem-Estar para Você e Seu Pet</h2>\r\n<p>No ON Hostel, criamos um ambiente acolhedor para que você e seu pet se sintam em casa. Contamos com quartos amplos e áreas de lazer pensadas para tornar sua hospedagem mais agradável, garantindo o conforto e a praticidade que você e seu amigo precisam.</p>\r\n<h3>Ambientes Adaptados e Acessíveis para Pets</h3>\r\n<p>Nossas instalações são adaptadas para receber pets com segurança e conveniência. Dispomos de áreas para que seu pet possa brincar, além de fornecer orientações para passeios nos arredores de Campos do Jordão. Aqui, seu pet terá um espaço adequado e seguro para se divertir.</p>\r\n<h2>Campos do Jordão com Seu Pet: Aventuras ao Ar Livre</h2>\r\n<p>Hospedando-se no ON Hostel, você tem a oportunidade de explorar Campos do Jordão com seu pet. A cidade oferece várias trilhas e parques para um dia repleto de aventura ao lado do seu amigo de estimação. Desfrute de paisagens incríveis e aproveite momentos únicos juntos!</p>\r\n<h3>Reserve Já e Aproveite o ON Hostel Pet Friendly</h3>\r\n<p>Não deixe seu pet de fora da diversão! Faça sua reserva no ON Hostel e venha conhecer a nossa unidade pet friendly. Garantimos uma experiência completa, com conforto e diversão para você e seu pet em Campos do Jordão. Reserve agora e prepare-se para momentos inesquecíveis!</p>', '2024-11-04 21:18:06', '2024-11-04 21:18:46', 'michaelmatheus', 'michaelmatheus', 1),
	(5, 'Aluguel de UTV | ON Hostel', 'Aluguel de UTV', 'Explore Campos do Jordão com aluguel de UTV! Aventura e adrenalina em paisagens únicas. Reserve seu UTV no ON Hostel e vivencie essa experiência!', 'Aluguel de UTV', 'aluguel-de-utv', '', '<h2>Aventura e Liberdade com Aluguel de UTV</h2>\r\n<p>No ON Hostel, você encontra o serviço de aluguel de UTV para explorar Campos do Jordão de uma maneira empolgante e diferenciada. Com UTVs de alta qualidade e seguros, oferecemos aos nossos hóspedes e visitantes uma experiência repleta de aventura, onde é possível desbravar trilhas e paisagens naturais únicas.</p>\r\n<h2>Descubra as Trilhas de Campos do Jordão com Estilo</h2>\r\n<p>Com o UTV, você terá acesso a trilhas exclusivas e poderá conhecer regiões de Campos do Jordão que poucos exploram. Essa é uma oportunidade perfeita para quem busca uma experiência imersiva na natureza, com vistas panorâmicas e muito contato com o meio ambiente.</p>\r\n<h3>Equipamentos Seguros e Adequados para Todo Tipo de Aventura</h3>\r\n<p>Nossos UTVs são inspecionados regularmente, garantindo segurança e performance para suas aventuras. Com um design robusto e fácil de manusear, eles são ideais para terrenos variados, desde trilhas leves até as mais desafiadoras. Oferecemos capacetes e todo o suporte necessário para garantir uma experiência segura e agradável.</p>\r\n<h2>Reserve Seu UTV com Facilidade no ON Hostel</h2>\r\n<p>Oferecemos a facilidade de reserva online para aluguel de UTV, assim você pode planejar sua aventura com antecedência e garantir sua vaga. Nossa equipe está pronta para orientá-lo quanto aos melhores trajetos e dar dicas sobre as trilhas mais bonitas da região.</p>\r\n<h3>Experimente a Emoção do UTV em Campos do Jordão</h3>\r\n<p>Escolha o aluguel de UTV do ON Hostel e viva uma experiência única de adrenalina e diversão em Campos do Jordão. Seja em grupo ou em dupla, o UTV proporciona momentos incríveis em meio à natureza, tornando sua viagem inesquecível.</p>', '2024-11-04 20:51:07', '2024-11-04 21:18:54', 'michaelmatheus', 'michaelmatheus', 1),
	(6, 'Aluguel de Quadriciclo | ON Hostel', 'Aluguel de Quadriciclo', 'Alugue quadriciclos e explore as trilhas de Campos do Jordão com segurança e emoção. Reserve já no ON Hostel e viva essa aventura ao ar livre!', 'Aluguel de Quadriciclo', 'aluguel-de-quadriciclo', '', '<h2>Aluguel de Quadriciclo para Aventura e Exploração</h2>\r\n<p>No ON Hostel, oferecemos a experiência única do aluguel de quadriciclo, permitindo que nossos hóspedes e visitantes aproveitem ao máximo as belezas de Campos do Jordão. Com quadriciclos de alta qualidade, nossos veículos são perfeitos para explorar paisagens naturais de tirar o fôlego e trilhas cheias de aventura.</p>\r\n<h2>Explore as Trilhas de Campos do Jordão com Quadriciclos</h2>\r\n<p>Campos do Jordão possui trilhas e percursos incríveis para descobrir, e o quadriciclo é a melhor forma de chegar a lugares escondidos e apreciar o visual com uma pitada de adrenalina. Percorra caminhos únicos e vivencie momentos inesquecíveis, rodeado por natureza e ar puro.</p>\r\n<h3>Segurança e Qualidade Garantidas para Sua Trilha</h3>\r\n<p>Nossos quadriciclos passam por manutenções frequentes para garantir a segurança e a melhor experiência para nossos clientes. Eles vêm com todos os equipamentos necessários, como capacetes e instruções de uso, para que você possa explorar com segurança. Nossa equipe estará à disposição para orientá-lo e oferecer o suporte que precisar.</p>\r\n<h2>Faça Sua Reserva e Garanta Seu Quadriciclo no ON Hostel</h2>\r\n<p>Para garantir seu quadriciclo, oferecemos um processo de reserva fácil e rápido. Agende sua aventura com antecedência para assegurar a disponibilidade, e esteja pronto para descobrir os segredos de Campos do Jordão com conforto e segurança.</p>\r\n<h3>Desafie-se e Descubra Novas Paisagens de Forma Divertida</h3>\r\n<p>Escolher o aluguel de quadriciclo do ON Hostel significa vivenciar uma experiência diferente, de imersão na natureza e pura diversão. Se você gosta de aventura, não perca a oportunidade de desbravar Campos do Jordão em um passeio inesquecível!</p>', '2024-11-04 20:52:38', '2024-11-04 21:18:56', 'michaelmatheus', 'michaelmatheus', 1);
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
