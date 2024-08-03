-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table jaighosh.carousel
CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img-src` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table jaighosh.carousel: ~4 rows (approximately)
INSERT INTO `carousel` (`id`, `img-src`, `class`) VALUES
	(1, 'assets/img/image_01.jpg', 'carousel-item active'),
	(2, 'assets/img/image_02.jpg', 'carousel-item '),
	(3, 'assets/img/image_03.jpg', 'carousel-item '),
	(4, 'assets/img/image_04.jpg', 'carousel-item');

-- Dumping structure for table jaighosh.latestnews
CREATE TABLE IF NOT EXISTS `latestnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headline` varchar(500) DEFAULT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  `long_description` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `video` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table jaighosh.latestnews: ~1 rows (approximately)
INSERT INTO `latestnews` (`id`, `headline`, `short_description`, `long_description`, `thumbnail`, `video`) VALUES
	(1, 'Today\'s Top News', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero inventore molestiae deserunt modi vel, sapiente provident sunt non iste perspiciatis.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, ullam. Quos quibusdam unde saepe quam officia veniam ut, enim voluptate? Placeat hic, error fugit ratione tenetur ex deleniti asperiores, atque aperiam, voluptatum cumque! Tempora, esse eligendi quos aut accusamus aliquam!', '../uploads/Dhanteras .jpg', 'assets/video/nature_02.mp4');

-- Dumping structure for table jaighosh.testimonials
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_name` varchar(50) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `profilePic` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table jaighosh.testimonials: ~4 rows (approximately)
INSERT INTO `testimonials` (`id`, `person_name`, `profession`, `message`, `profilePic`) VALUES
	(1, 'Person Name', 'Profession', 'Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'assets/img/news_100_1_thumb.jpg'),
	(2, 'Person Name', 'Profession', 'Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'assets/img/news_100_1_thumb.jpg'),
	(3, 'Person Name', 'Profession', 'Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'assets/img/news_100_1_thumb.jpg'),
	(4, 'Person Name', 'Profession', 'Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'assets/img/news_100_1_thumb.jpg');

-- Dumping structure for table jaighosh.testing
CREATE TABLE IF NOT EXISTS `testing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table jaighosh.testing: ~15 rows (approximately)
INSERT INTO `testing` (`id`, `name`, `title`) VALUES
	(1, 'Gautam', 'Shukla'),
	(2, 'Shubham', 'Shingh'),
	(10, 'durgesh', 'Singh'),
	(12, 'Sagar', 'Singh'),
	(13, 'Ramesh', 'Singh'),
	(14, NULL, 'Singh'),
	(15, NULL, 'Singh'),
	(16, NULL, 'Singh'),
	(17, NULL, 'Singh'),
	(18, NULL, 'Singh'),
	(19, NULL, 'Singh'),
	(20, NULL, 'Singh'),
	(21, NULL, 'Singh'),
	(22, NULL, 'Singh'),
	(23, NULL, 'Singh');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
