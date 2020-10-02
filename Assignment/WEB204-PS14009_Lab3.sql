-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for web204_gamestore
CREATE DATABASE IF NOT EXISTS `web204_gamestore` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `web204_gamestore`;

-- Dumping structure for table web204_gamestore.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT IGNORE INTO `admin` (`id`, `username`, `password`, `created`, `level`) VALUES
	(1, 'admin', 'admin', '2020-09-16 17:59:01', 10);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table web204_gamestore.code
CREATE TABLE IF NOT EXISTS `code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `user_active` int(11) DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__games` (`game_id`),
  KEY `user_active` (`user_active`),
  CONSTRAINT `FK__games` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `FK_code_users` FOREIGN KEY (`user_active`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.code: ~100 rows (approximately)
/*!40000 ALTER TABLE `code` DISABLE KEYS */;
INSERT IGNORE INTO `code` (`id`, `game_id`, `user_active`, `code`) VALUES
	(3, 3, NULL, 'S1M9-4TF0-69T8-2OY4'),
	(4, 5, NULL, '8558-I46T-5846-M593'),
	(5, 5, NULL, 'D1P7-0W5K-64VU-R0E2'),
	(6, 2, NULL, '2OT0-N4P4-EW4J-O83L'),
	(7, 1, NULL, 'KQ76-3U8Y-440L-9Q4Q'),
	(8, 3, NULL, '0JUK-82U0-2J0Y-37G0'),
	(9, 5, NULL, '16F3-EH6T-469Y-DV0I'),
	(10, 3, NULL, 'CG51-L0H6-5P6L-27Q2'),
	(11, 2, NULL, '617A-ON73-4J19-QQAK'),
	(12, 2, NULL, 'B8SG-TMFT-56KV-6IA5'),
	(13, 1, NULL, '09GU-2879-M24Y-5U2X'),
	(14, 2, NULL, '7C89-5O0C-8152-Z2OO'),
	(15, 2, NULL, 'DXHW-2W0L-49PV-PAG8'),
	(17, 4, 1, 'Z874-EP7N-2270-8J2L'),
	(18, 3, NULL, 'WSZ1-LVGP-35VZ-NUU8'),
	(19, 3, NULL, 'M430-56OS-TM80-0SY0'),
	(20, 3, NULL, '6PC6-X3V3-362F-0463'),
	(21, 1, NULL, '2V4M-JDO4-4137-435L'),
	(22, 3, NULL, '4925-017J-9RQ1-94PK'),
	(23, 4, NULL, '1MC7-5P10-397I-WI08'),
	(24, 2, NULL, 'LLS7-Y4J2-U374-3X1Q'),
	(25, 2, NULL, 'U662-72Y4-9747-5HPI'),
	(26, 1, NULL, 'BE41-0TJI-B03U-O7T0'),
	(27, 3, NULL, '771F-UZ83-52YP-WZ1G'),
	(28, 3, NULL, 'VXJZ-F2DN-AR03-08S6'),
	(29, 2, NULL, 'YJA7-3F5X-KNXI-WU74'),
	(30, 5, NULL, '50WW-3MBY-SWS8-1NOX'),
	(31, 3, NULL, 'S83I-CCNX-GGHR-56WB'),
	(32, 4, NULL, 'ZQ39-0NNJ-H3L5-A94I'),
	(33, 4, NULL, 'VC0P-4ADG-0727-43B9'),
	(34, 4, 1, 'BGK3-200J-3A10-71SO'),
	(35, 4, NULL, '3FZ8-MARZ-D4UV-JOB5'),
	(36, 2, NULL, '1BK8-7BFX-03N0-NYHT'),
	(37, 4, NULL, 'CDXH-0026-J6EV-DY69'),
	(38, 4, NULL, 'J2R7-W1U4-22O3-5G4F'),
	(39, 4, 3, '4975-74OY-4930-3TOA'),
	(40, 2, NULL, 'D77V-B7BK-J1F5-H7V8'),
	(41, 4, NULL, 'IVD2-AD41-N576-72UC'),
	(42, 1, NULL, '13CB-25Q5-SOV5-L88S'),
	(43, 4, NULL, '39G8-F9G0-6DTO-RWE2'),
	(44, 1, NULL, '0IH3-9G30-2R30-9IBG'),
	(45, 3, NULL, '0A6A-LQ03-G17C-ORE4'),
	(46, 4, NULL, '7NB6-3536-U69W-H6J1'),
	(47, 2, NULL, 'P355-TM3L-96E9-0Y7K'),
	(48, 5, NULL, 'EYC7-BYD5-PU2Q-471V'),
	(49, 3, NULL, 'EVX7-834X-78X3-O02K'),
	(50, 5, NULL, 'I414-4E82-162H-6O00'),
	(51, 2, NULL, '293S-3QIH-K495-SUIV'),
	(52, 3, NULL, '2GJ5-B816-FORV-102D'),
	(53, 4, NULL, 'D3P3-2P6C-8GW6-NES3'),
	(54, 4, NULL, '6ETO-C888-6M33-K86U'),
	(55, 4, NULL, '2C9K-TD4I-5NHI-E4II'),
	(56, 3, NULL, '78O3-26B4-G70M-Q1SP'),
	(57, 4, NULL, '68Z7-Y1MA-9E06-7X9V'),
	(58, 4, NULL, '2YEN-CUA2-YK7G-VLHI'),
	(59, 2, NULL, '8603-OKZH-S6L8-373W'),
	(60, 4, NULL, 'SMH3-T47V-O71H-7DW3'),
	(61, 4, NULL, 'OE40-1L8K-E8SI-YP63'),
	(62, 1, 3, 'G12L-5Y79-T522-FZ73'),
	(63, 4, 5, 'X4QG-J8UG-LY63-XO91'),
	(64, 2, NULL, '1XCJ-82X1-8GTZ-37VP'),
	(65, 2, NULL, 'A3J3-GR22-32UY-3O23'),
	(66, 4, NULL, '4Z8R-7J87-U4YF-KYT2'),
	(67, 4, NULL, 'GXNJ-09F0-F794-FIK2'),
	(68, 5, NULL, 'NNC1-69GM-25ZI-6IGN'),
	(69, 3, NULL, '4944-FDL3-8664-462R'),
	(70, 2, NULL, 'E15C-O7H2-3Z3F-L46J'),
	(71, 5, NULL, '1L76-VAJ7-K227-F7YU'),
	(72, 3, NULL, 'F797-6Q21-0O6R-H1RW'),
	(73, 3, NULL, 'E1C5-YJ84-3Q07-Q7X3'),
	(74, 3, NULL, '0L6H-U133-V052-786J'),
	(75, 4, 5, 'ATPK-WBHD-4BP1-JX11'),
	(76, 2, NULL, 'X3ZV-33I2-MZ5P-82WX'),
	(77, 4, NULL, '1UB5-H7VW-Z3RK-553K'),
	(78, 2, NULL, '22TS-3WU3-5QNF-6BL3'),
	(79, 2, NULL, '0ND5-12KJ-7H03-Y10B'),
	(80, 4, NULL, 'N360-GMO7-0HO6-9315'),
	(81, 2, NULL, '8WI3-3982-2B26-K4T6'),
	(82, 1, NULL, 'J89R-Y4G4-30C6-T6U2'),
	(83, 2, NULL, '22L1-331U-8MG2-W658'),
	(84, 5, NULL, 'AC6N-CVM5-176B-G4JT'),
	(85, 5, NULL, '9E0G-BS66-A120-E7DI'),
	(86, 5, NULL, 'W35Q-2T06-1I97-XFX9'),
	(87, 4, NULL, 'TOBF-H90Q-R16R-9MFN'),
	(88, 1, NULL, '4041-4YW3-87H7-WFKW'),
	(89, 5, NULL, 'PC4J-3ZV0-C8W9-ST8F'),
	(90, 1, NULL, 'UE70-AP94-967O-0Z4E'),
	(91, 2, NULL, 'D8KA-72LT-6SZK-38OO'),
	(92, 1, NULL, '7Q56-D3RW-AH63-C176'),
	(93, 2, 8, '507Y-250F-K987-37PZ'),
	(94, 5, NULL, '69V5-465O-1379-34QX'),
	(95, 1, NULL, 'OK48-BP89-67KK-QLL6'),
	(96, 3, NULL, 'K7TL-2230-76OM-QM9G'),
	(97, 5, NULL, '02T8-X880-259W-ST6J'),
	(98, 4, NULL, '36V9-2PYK-TZ92-WMCZ'),
	(99, 3, NULL, 'VW5K-58G4-28XT-G3Q9'),
	(100, 3, NULL, '27QU-7VDL-8RG3-3X7F'),
	(101, 1, NULL, '9SKZ-5GKG-O86K-0HJW'),
	(102, 1, NULL, '0G54-D847-5BI0-78QH'),
	(103, 1, NULL, 'D37B-9844-AA69-7091');
/*!40000 ALTER TABLE `code` ENABLE KEYS */;

-- Dumping structure for table web204_gamestore.games
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` text COLLATE utf8mb4_unicode_ci,
  `releaseDate` datetime DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `tag_id` text COLLATE utf8mb4_unicode_ci,
  `platform_id` text COLLATE utf8mb4_unicode_ci,
  `publisher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_games_publisher` (`publisher_id`),
  CONSTRAINT `FK_games_publisher` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.games: ~5 rows (approximately)
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT IGNORE INTO `games` (`id`, `name`, `price`, `destination`, `releaseDate`, `images`, `tag_id`, `platform_id`, `publisher_id`) VALUES
	(1, 'Fall Guys: Ultimate Knockout', '188.000', 'Bạn sẽ vào vai 1 hạt đậu rơi từ trên trời xuống để bắt đầu "Shows" Đó là cách Fall Guys bắt đầu trò chơi. Tối đa 60 hạt đậu với nhiều màu sắc khác nhau từ skin tự chọn. Tất cả sẽ tham gia vào từng màn game nhỏ để tìm ra người tồn tại sau cùng. 25 màn game khá đa dạng, chia thành 2 loại chơi đơn và phối hợp đồng đội. Chủ yếu là các cuộc đua vượt chướng ngại vật và một số game liên quan đến quả bóng tròn, đuổi bắt đuôi nhau. Game được lấy cảm hứng từ những gameshow thử thách trên truyền hình, vì vậy mục tiêu duy nhất của bạn sẽ chỉ là trở thành người về đích đầu tiên.Nhà phát triển Mediatonic đã nói rằng họ sẽ thêm vào các màn game mới trong tương lai. Việc trở thành cơn sốt của Fall Guys là một điều khá bất ngờ với giới chuyên môn', '2020-08-04 00:00:00', '["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg"]', '["1","2","3","4","5]', '["1","2","3","4"]', 1),
	(2, 'Among Us', '69.000', 'Play with 4-10 player online or via local WiFi as you attempt to prepare your spaceship for departure, but beware as one or more random players among the Crew are Impostors bent on killing everyone!', '2018-11-17 00:00:00', '["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg"]', '["1","2","3","4","5]', '["1","2","3","4"]', 2),
	(3, 'Agrou', '139.000', 'Là một tựa game Indie mới được ra mắt trong thời gian gần đây, nhưng Agrou thu hút được lượng lớn người chơi đặc biệt là từ các Streammer nổi tiếng với lối chơi vô cùng vui nhộn của mình.​', '2020-07-25 00:00:00', '["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg"]', '["1","2","3","4","5]', '["1","2","3","4"]', 3),
	(4, 'Dead by Daylight', '187.000', 'Dead by Daylight là 1 game nhiều người chơi (1 vs 4). 1 tựa game horror survivor , Dead by Daylight đem lại cho bạn những cảm giác như trong những phim kinh dị mỹ đình đám 1 thời.Với mỗi lần tiếng tim đập,hoặc tiếng âm nhạc dồn dập là 1 lần bạn thót tim và chạy không quay đầu lại.', '2016-06-14 00:00:00', '["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg"]', '["1","2","3","4","5]', '["1","2","3","4"]', 4),
	(5, 'Black Desert', '23.000', 'Bạn sẽ vào vai 1 hạt đậu rơi từ trên trời xuống để bắt đầu "Shows" Đó là cách Fall Guys bắt đầu trò chơi. Tối đa 60 hạt đậu với nhiều màu sắc khác nhau từ skin tự chọn. Tất cả sẽ tham gia vào từng màn game nhỏ để tìm ra người tồn tại sau cùng. 25 màn game khá đa dạng, chia thành 2 loại chơi đơn và phối hợp đồng đội. Chủ yếu là các cuộc đua vượt chướng ngại vật và một số game liên quan đến quả bóng tròn, đuổi bắt đuôi nhau. Game được lấy cảm hứng từ những gameshow thử thách trên truyền hình, vì vậy mục tiêu duy nhất của bạn sẽ chỉ là trở thành người về đích đầu tiên.Nhà phát triển Mediatonic đã nói rằng họ sẽ thêm vào các màn game mới trong tương lai. Việc trở thành cơn sốt của Fall Guys là một điều khá bất ngờ với giới chuyên môn', '2019-09-18 00:00:00', '["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg"]', '["1","2","3","4","5]', '["1","2","3","4"]', 5);
/*!40000 ALTER TABLE `games` ENABLE KEYS */;

-- Dumping structure for table web204_gamestore.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__users` (`user_id`),
  CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.orders: ~16 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT IGNORE INTO `orders` (`id`, `user_id`, `status`, `created`) VALUES
	(7, 1, 0, '2020-07-04 08:03:26'),
	(8, 1, 0, '2019-09-19 23:05:53'),
	(9, 10, 3, '2019-10-02 18:48:03'),
	(10, 7, 2, '2020-02-21 03:36:24'),
	(11, 1, 3, '2020-04-28 13:27:36'),
	(12, 1, 0, '2020-06-05 13:27:55'),
	(13, 2, 2, '2020-01-29 12:21:41'),
	(14, 1, 3, '2019-10-23 18:22:43'),
	(15, 9, 1, '2020-05-23 14:54:05'),
	(16, 6, 0, '2020-06-15 20:41:26'),
	(17, 6, 3, '2020-02-19 16:00:47'),
	(18, 7, 3, '2019-10-30 09:26:52'),
	(19, 6, 3, '2019-11-17 21:28:59'),
	(20, 9, 2, '2020-08-06 05:29:04'),
	(21, 5, 2, '2020-09-25 00:21:00'),
	(22, 5, 2, '2020-09-25 13:22:00');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table web204_gamestore.order_items
CREATE TABLE IF NOT EXISTS `order_items` (
  `order_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci,
  KEY `FK_order_items_games` (`game_id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `FK_order_items_games` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_order_items_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.order_items: ~15 rows (approximately)
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT IGNORE INTO `order_items` (`order_id`, `game_id`, `quantity`, `price`) VALUES
	(7, 4, 3, '187.000'),
	(7, 2, 2, '69.000'),
	(8, 5, 4, '23.000'),
	(8, 4, 3, '187.000'),
	(8, 2, 3, '69.000'),
	(8, 1, 3, '188.000'),
	(9, 3, 1, '139.000'),
	(9, 2, 3, '69.000'),
	(9, 1, 3, '188.000'),
	(10, 4, 1, '187.000'),
	(10, 3, 5, '139.000'),
	(10, 2, 1, '69.000'),
	(10, 1, 4, '188.000'),
	(22, 4, 3, '187.000'),
	(22, 2, 2, '69.000');
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;

-- Dumping structure for table web204_gamestore.platforms
CREATE TABLE IF NOT EXISTS `platforms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.platforms: ~13 rows (approximately)
/*!40000 ALTER TABLE `platforms` DISABLE KEYS */;
INSERT IGNORE INTO `platforms` (`id`, `name`) VALUES
	(1, 'PlayStation 4'),
	(2, 'Xbox One'),
	(3, 'Xbox 360'),
	(4, 'PlayStation 3'),
	(5, 'PC'),
	(6, 'Nintendo Switch'),
	(7, 'Wii U'),
	(8, 'Nintendo 3DS'),
	(9, 'Nintendo DS'),
	(10, 'PS Vita'),
	(11, 'PSP'),
	(12, 'iOS'),
	(13, 'GameCube');
/*!40000 ALTER TABLE `platforms` ENABLE KEYS */;

-- Dumping structure for table web204_gamestore.publisher
CREATE TABLE IF NOT EXISTS `publisher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.publisher: ~5 rows (approximately)
/*!40000 ALTER TABLE `publisher` DISABLE KEYS */;
INSERT IGNORE INTO `publisher` (`id`, `name`) VALUES
	(1, 'Devolver Digital'),
	(2, 'Innersloth'),
	(3, 'Bingames'),
	(4, 'Behaviour Interactive Inc.'),
	(5, 'Pearl Abyss');
/*!40000 ALTER TABLE `publisher` ENABLE KEYS */;

-- Dumping structure for table web204_gamestore.review
CREATE TABLE IF NOT EXISTS `review` (
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `rate` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  KEY `user_id` (`user_id`),
  KEY `game_id` (`game_id`),
  CONSTRAINT `FK_review_games` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_review_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.review: ~10 rows (approximately)
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT IGNORE INTO `review` (`user_id`, `game_id`, `content`, `rate`) VALUES
	(1, 2, NULL, '4'),
	(2, 4, 'magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien', '5'),
	(3, 2, 'molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci', '0'),
	(4, 2, 'ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae', '1'),
	(5, 3, 'amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non quam nec dui luctus rutrum', '5'),
	(6, 5, 'metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget eleifend luctus', '4'),
	(7, 1, NULL, '5'),
	(8, 2, 'vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus', '2'),
	(9, 3, 'venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat', '5'),
	(10, 3, 'accumsan tellus nisi eu orci mauris lacinia sapien quis libero', '3');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

-- Dumping structure for table web204_gamestore.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.tags: ~57 rows (approximately)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT IGNORE INTO `tags` (`id`, `name`) VALUES
	(1, 'Indie'),
	(2, 'Action'),
	(3, 'Adventure'),
	(4, 'Casual'),
	(5, 'Simulation'),
	(6, 'Strategy'),
	(7, 'RPG'),
	(8, 'Early Access'),
	(9, 'Singleplayer'),
	(10, 'Free to Play'),
	(11, 'Violent'),
	(12, 'Sports'),
	(13, 'Massively Multiplayer'),
	(14, '2D'),
	(15, 'Atmospheric'),
	(16, 'Gore'),
	(17, 'Racing'),
	(18, 'Puzzle'),
	(19, 'Multiplayer'),
	(20, 'Nudity'),
	(21, 'Sexual Content'),
	(22, 'Great Soundtrack'),
	(23, 'Story Rich'),
	(24, 'Fantasy'),
	(25, 'Anime'),
	(26, 'Funny'),
	(27, 'Pixel Graphics'),
	(28, 'Difficult'),
	(29, 'VR'),
	(30, 'First-Person'),
	(31, 'Horror'),
	(32, 'Sci-fi'),
	(33, 'Shooter'),
	(34, 'Retro'),
	(35, 'Arcade'),
	(36, 'Cute'),
	(37, 'Colorful'),
	(38, 'Family Friendly'),
	(39, 'Co-op'),
	(40, 'Platformer'),
	(41, 'Open World'),
	(42, 'Exploration'),
	(43, 'Survival'),
	(44, 'Female Protagonist'),
	(45, 'FPS'),
	(46, 'Comedy'),
	(47, 'Relaxing'),
	(48, 'Visual Novel'),
	(49, '3D'),
	(50, 'Utilities'),
	(51, ''),
	(52, ''),
	(53, ''),
	(54, ''),
	(55, ''),
	(56, ''),
	(57, ''),
	(58, ''),
	(59, ''),
	(60, '');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table web204_gamestore.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8mb4_unicode_ci,
  `password` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `created` datetime DEFAULT NULL,
  `birthday` text COLLATE utf8mb4_unicode_ci,
  `fullname` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table web204_gamestore.users: ~10 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `username`, `password`, `email`, `phone`, `created`, `birthday`, `fullname`) VALUES
	(1, 'jfraczek0', '5AlE9LfIxn8C', 'tbrydon0@simplemachines.org', '4946496384', '2020-04-26 00:00:00', '1991-04-16', 'Json'),
	(2, 'kfinby1', 'db7UkzVRZ', 'snayshe1@businessweek.com', '2173734775', '2020-02-09 00:00:00', '1997/08/25', NULL),
	(3, 'jculpin2', '7bufxJ', 'rgerin2@ted.com', '9471852777', '2020-01-08 00:00:00', '1992/09/23', NULL),
	(4, 'asurgeoner3', '1nm4aXqN', 'slineen3@creativecommons.org', '6342672467', '2020-05-29 00:00:00', '1990/01/26', NULL),
	(5, 'tpavolini4', 'gCVUTh3qxD', 'csleford4@about.me', '3684212989', '2019-11-16 00:00:00', '1999/12/10', NULL),
	(6, 'llagde5', 'nqIWleYt', 'cmarzellano5@qq.com', '6629882506', '2020-02-29 00:00:00', '1992/07/14', NULL),
	(7, 'gdoel6', '1MVsXdYMjSC', 'gborleace6@unc.edu', '6442327450', '2020-07-20 00:00:00', '1999/07/28', NULL),
	(8, 'cgoade7', 'HnomegDTsWLQ', 'abalsellie7@eepurl.com', '6597382056', '2020-07-22 00:00:00', '1991/04/17', NULL),
	(9, 'cdewey8', 'fXbziXhGvI2', 'lvansalzberger8@hao123.com', '1683825795', '2020-03-25 00:00:00', '1997/02/24', NULL),
	(10, 'jcock9', 'C9dsyrsUG', 'fosiaghail9@4shared.com', '1607537911', '2020-06-18 00:00:00', '1994/06/21', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
