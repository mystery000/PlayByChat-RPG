/*
SQLyog Enterprise v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB : Database - gdrcd_test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gdrcd_test` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `gdrcd_test`;

/*Table structure for table `admin_messages` */

DROP TABLE IF EXISTS `admin_messages`;

CREATE TABLE `admin_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(255) DEFAULT NULL,
  `messages` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin_messages` */

insert  into `admin_messages`(`id`,`sender`,`messages`) values 
(1,'arthlo',' I need permission to enter to chat and forum pages.'),
(2,'arthlo','some text'),
(3,'name','Some text'),
(4,'name','Some text'),
(5,'name','Some text'),
(6,'Vuoto','How are you? Vuoto'),
(7,'Vuoto','asdfasdfasdfasdf'),
(8,'Vuoto','asdfasdfasdf'),
(9,'Vuoto','adsfafsadfasdf'),
(10,'Naruto','Could you please give me a permission to enter Chat and Forum pages? Thanks'),
(11,'Vuoto','Hello, how are you?'),
(12,'Vuoto','asdfaskdjfjklasdfasd\r\nfsadfasd\r\nfasdfasdfasdgf safadsfasdfadsfads'),
(13,'Vuoto','asdfaskdjfjklasdfasd\r\nfsadfasd\r\nfasdfasdfasdgf safadsfasdfadsfads'),
(14,'Vuoto','asd fasdfasdf asdf asdfasdf asdf'),
(20,'Vuoto','klsadjf;lkasdjf;klasdjf;klasjf;dklasjdf;kljasdf;kljsa;dfklasdfsadf'),
(21,'Vuoto','asdfasdfasdfasdfasdf'),
(22,'Vuoto','asdfsadfsdfsadf'),
(23,'Vuoto','asdfasdfasdfasfd');

/*Table structure for table `characters` */

DROP TABLE IF EXISTS `characters`;

CREATE TABLE `characters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `latest_map` int(11) DEFAULT 1,
  `last_place` int(11) DEFAULT -1,
  `online_status` tinyint(1) DEFAULT 0,
  `join_date` datetime DEFAULT current_timestamp(),
  `race` varchar(255) DEFAULT 'rising',
  `admin` tinyint(1) DEFAULT 0,
  `allow` tinyint(1) DEFAULT 0,
  `dreams` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `characters` */

insert  into `characters`(`id`,`name`,`email`,`password`,`latest_map`,`last_place`,`online_status`,`join_date`,`race`,`admin`,`allow`,`dreams`) values 
(17,'Vuoto','$P$BGmfxwsfulEVrXUN2PB8aCAF39Yd031','$P$BxYG/hPmRKG.xweAg/0vpnnWvAoTAq.',1,-1,1,'2023-01-30 18:45:15','rising',1,1,'My dreams and memories.'),
(21,'Naruto','$P$BolCnuAgGO7GPh5lh0kgte6435IAdD1','$P$BEyxM15itSIJboJ8AflKYugETMHdxH.',1,-1,0,'2023-01-31 07:54:02','rising',0,1,'My memories'),
(22,'dene','$P$BRPDYeNrG6DJ.s7kusu0rOZdkWH5ah0','$P$BEyxM15itSIJboJ8AflKYugETMHdxH.',1,-1,0,'2023-01-31 17:00:19','Dead',0,1,'His dream is done');

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `now` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8mb4;

/*Data for the table `chat` */

insert  into `chat`(`id`,`room_id`,`sender`,`recipient`,`text`,`now`) values 
(1,1,'arthlo','urbano','Hello.','2023-01-19 19:27:58'),
(2,1,'arthlo','urbano','I am oleksandrF from freelancer,I just joined to your \"Play by Chat\" team.','2023-01-19 19:27:58'),
(3,3,'arthlo','urbano','Could you please come to Street?','2023-01-24 20:57:48'),
(4,3,'arthlo','urbano','I am Oleksandr from Ukraine. ','2023-01-24 20:58:16'),
(5,3,'arthlo','','asdfasdfasdf','2023-01-24 22:08:51'),
(6,3,'arthlo','','asdfasdfasdf','2023-01-24 22:08:55'),
(7,3,'arthlo','','asdfasdfasdf','2023-01-24 22:09:01'),
(8,3,'arthlo','','zvxcvzcvzxcv','2023-01-24 22:09:04'),
(9,3,'arthlo','','wertwertwertwertwertwert','2023-01-24 22:09:08'),
(10,3,'arthlo','','asdfkjasdf;kajsdflkjas;dkf','2023-01-24 22:09:12'),
(11,3,'arthlo','','asdfkjasdf;kajsdflkjas;dkf','2023-01-24 22:09:54'),
(12,3,'arthlo','','asdfkjasdf;kajsdflkjas;dkf','2023-01-24 22:10:43'),
(13,3,'arthlo','','asdjfklasjd;fasdf','2023-01-24 22:10:46'),
(14,3,'arthlo','','fadsfadf','2023-01-24 22:10:49'),
(15,3,'arthlo','','fadsfadf','2023-01-24 22:14:11'),
(16,2,'arthlo','','asdfasdf','2023-01-24 22:14:18'),
(17,2,'arthlo','','Minato','2023-01-24 22:16:46'),
(18,2,'arthlo','','Minato','2023-01-24 22:23:20'),
(19,2,'demo','','asdkfjasdkfj;aksdljf;askdfjaskdf','2023-01-24 22:59:11'),
(20,2,'arthlo','','Ny anme is oleksandr','2023-01-24 23:11:09'),
(21,2,'arthlo','','asdf','2023-01-24 23:11:11'),
(22,2,'arthlo','','asdfasdfasdfasdf','2023-01-24 23:11:14'),
(23,2,'arthlo','','zxcvzxcvczxv','2023-01-24 23:11:16'),
(24,1,'arthlo','','AAAAAAAA','2023-01-24 23:11:28'),
(25,1,'arthlo','','asdfkljasdklfjaskdlfjklasdjf;asdjfksaj;dfkasdf','2023-01-24 23:11:47'),
(26,2,'arthlo','','ajsdfhlajksdfhlasdjkfasd','2023-01-25 07:02:31'),
(27,2,'arthlo','','adfasdfadfadsf','2023-01-25 07:02:36'),
(28,2,'arthlo','','adfklja;kdlsjf;kaljsdf;kajds;fkjasdlkfja;skdlfjasdklfj;aksdljf;aksdf','2023-01-25 07:02:52'),
(29,1,'Rasheed','','askldfjklajdsf;klajsdf;klads','2023-01-25 07:04:38'),
(30,1,'Rasheed','','adsfasdfasdvzxcvzcxvzcxv a gsadfg sdfg','2023-01-25 07:04:42'),
(31,1,'Rasheed','','asdfasdfadfasdf','2023-01-25 07:04:45'),
(32,2,'Rasheed','','adkfjka;lsdjf;kljklej f aisdjf ijqwe ;rjk','2023-01-25 07:04:55'),
(33,2,'Rasheed','','agivuipouioeruioqweurniocuqpriqer','2023-01-25 07:04:59'),
(34,2,'arthlo','','adsfaskldjfkasdjfklajsd;kflj','2023-01-25 07:05:19'),
(35,2,'arthlo','','xcvjklxcjvkljz;xclkvzj;kljasdklfj;asd','2023-01-25 07:05:22'),
(36,2,'arthlo','','asdfjaksldf;lkasjdf;klasdf','2023-01-25 07:05:25'),
(37,2,'arthlo','','asdfaskdljklvzxcjvk zjxcvkjai uripoqweurqiqerqipoeuwripuqwe','2023-01-25 07:05:35'),
(38,2,'arthlo','','casfafaasawqrwqrqwer','2023-01-25 07:05:47'),
(39,2,'arthlo','','casfafaasawqrwqrqwer','2023-01-25 07:06:26'),
(40,2,'arthlo','','casfafaasawqrwqrqwer','2023-01-25 07:06:40'),
(41,2,'arthlo','','casfafaasawqrwqrqwer','2023-01-25 07:08:22'),
(42,2,'arthlo','','casfafaasawqrwqrqwer','2023-01-25 07:10:36'),
(43,2,'arthlo','','sdfajdfhasjkdfhajlsdfhjkalsdf','2023-01-25 07:22:08'),
(44,2,'arthlo','','asdfaksdjfkljasdf','2023-01-25 07:22:11'),
(45,2,'arthlo','','asdfaksdjfkljasdf','2023-01-25 07:22:39'),
(46,2,'arthlo','','asdfaksdjfkljasdf','2023-01-25 07:24:29'),
(47,1,'arthlo','','fdgsdfgsdfgsdfg','2023-01-25 07:27:49'),
(48,2,'arthlo','','sdfgsdfgsdfgs','2023-01-25 07:27:57'),
(49,2,'arthlo','','dasfasdfasdfasdfsdf','2023-01-25 07:28:17'),
(50,2,'arthlo','','dasfasdfasdfasdfsdf','2023-01-25 07:32:31'),
(51,2,'arthlo','','asdfadsf','2023-01-25 07:32:39'),
(52,2,'arthlo','','asdfasd','2023-01-25 07:32:45'),
(53,2,'arthlo','','sdfgksjdfklgjksldfjgklsdfjg;klsdf','2023-01-25 07:32:48'),
(54,2,'arthlo','','11111111111111111111111111111111','2023-01-25 07:32:59'),
(55,2,'arthlo','','asdfasdfasdfasdfasdfasdfasdfasdf','2023-01-25 07:33:16'),
(56,2,'arthlo','','afhafchakjfhjkafahsdljfkhaldksjfhalsdjkfhalsjkdf','2023-01-25 07:33:21'),
(57,2,'arthlo','','asdfadskfjaksdlfjaslkdjf;klasdf','2023-01-25 07:33:24'),
(58,2,'arthlo','','asdfasdf','2023-01-25 07:33:28'),
(59,2,'arthlo','','a','2023-01-25 07:33:31'),
(60,2,'arthlo','','aa','2023-01-25 07:33:33'),
(61,2,'arthlo','','aa','2023-01-25 07:33:49'),
(62,2,'arthlo','','asdfasdf','2023-01-25 07:33:51'),
(63,2,'arthlo','','asdfadsfasdfasdf','2023-01-25 07:33:54'),
(64,2,'arthlo','','asdfklajsd;fkljasd;klfjaskljfdaklsdfj','2023-01-25 07:33:57'),
(65,2,'arthlo','','asdfkjakdfja;lskdfja;klsdfjak;sldfjaklsdjfklajd','2023-01-25 07:34:00'),
(66,1,'arthlo','','afasfasdfasdfasd','2023-01-25 07:40:21'),
(67,2,'arthlo','','fasdjfkhasjkdfhkajsdhflsajdkf','2023-01-25 11:37:49'),
(68,2,'arthlo','','asdfasdfasdfasd','2023-01-25 11:37:51'),
(69,3,'arthlo','','asdfasdfasdf','2023-01-25 15:58:43'),
(70,3,'arthlo','','asdfasdfsa','2023-01-25 15:58:45'),
(71,3,'arthlo','','asdfasdfsa','2023-01-25 15:58:47'),
(72,3,'arthlo','','asdfasdf','2023-01-25 15:58:49'),
(73,3,'arthlo','','adfs','2023-01-25 15:58:52'),
(74,3,'arthlo','','a','2023-01-25 15:58:54'),
(75,2,'arthlo','','asdfasdf','2023-01-25 15:58:58'),
(76,2,'arthlo','','asdfasdf','2023-01-25 15:59:11'),
(77,2,'arthlo','','asdf','2023-01-25 15:59:13'),
(78,2,'arthlo','','a','2023-01-25 15:59:15'),
(79,2,'arthlo','','asdfasdf','2023-01-25 16:05:43'),
(80,2,'arthlo','','asdfasdf','2023-01-25 16:06:33'),
(81,2,'arthlo','','asdfasdf','2023-01-25 16:07:58'),
(82,2,'arthlo','','asdfasdf','2023-01-25 16:08:09'),
(83,2,'arthlo','','a','2023-01-25 16:08:15'),
(84,2,'arthlo','','a','2023-01-25 16:08:17'),
(85,2,'arthlo','','a','2023-01-25 16:09:05'),
(86,2,'arthlo','','a','2023-01-25 16:14:59'),
(87,2,'arthlo','','dsadf','2023-01-25 16:15:01'),
(88,2,'arthlo','','asdfasdf','2023-01-25 16:15:12'),
(89,2,'arthlo','','asdfasdfasd','2023-01-25 16:15:14'),
(90,2,'arthlo','','xcvbxcvbxcvbxvcb','2023-01-25 16:15:16'),
(91,1,'arthlo','','asdfasdfa','2023-01-25 16:15:25'),
(92,3,'arthlo','','xcvbxcjvkjdskfljasd','2023-01-25 16:15:29'),
(93,3,'arthlo','','asdfasdf','2023-01-25 16:15:31'),
(94,3,'arthlo','','asdfasdf','2023-01-25 16:15:47'),
(95,3,'arthlo','','asdfasdfsadf','2023-01-25 16:15:50'),
(96,3,'arthlo','','a','2023-01-25 16:15:53'),
(97,3,'arthlo','','a','2023-01-25 16:16:34'),
(98,3,'arthlo','','asdfkljasdfjasjdfkasdf','2023-01-25 16:20:21'),
(99,3,'arthlo','','asdfadsf','2023-01-25 16:20:23'),
(100,3,'arthlo','','asdfadsf','2023-01-25 16:31:15'),
(101,3,'arthlo','','I can\'t see','2023-01-25 16:31:22'),
(102,2,'arthlo','','I can\'t see','2023-01-25 16:32:06'),
(103,2,'Vuoto','','Hello, how are you?','2023-01-30 10:32:41'),
(104,2,'Vuoto','','Long time no can see.','2023-01-30 10:32:53'),
(105,2,'Vuoto','','Long time no can see.','2023-01-30 10:38:45'),
(106,2,'Vuoto','','asdfasdfasdf','2023-01-30 10:38:49'),
(107,2,'Vuoto','','asdfsadfasdf','2023-01-30 10:40:05'),
(108,2,'Vuoto','','asdfasdfkjasdklfjsa;dklfja;skdlf','2023-01-30 10:40:11'),
(109,2,'Vuoto','','asdfasdfkjasdklfjsa;dklfja;skdlf','2023-01-30 10:40:23'),
(110,2,'Vuoto','','asdfasdfkjasdklfjsa;dklfja;skdlf','2023-01-30 10:40:29'),
(111,2,'Vuoto','','asdfasdfkjasdklfjsa;dklfja;skdlf','2023-01-30 10:40:33'),
(112,2,'Vuoto','','asdfasdflkjasdfkl','2023-01-30 10:40:35'),
(113,2,'Vuoto','','asdfasdfjasdfkjasdfjsadlkfjasdf','2023-01-30 10:40:41'),
(114,2,'Vuoto','','asdfasdfjasdfkjasdfjsadlkfjasdf','2023-01-30 10:40:48'),
(115,2,'Vuoto','','adsfaksdjflkajsdflkasdf','2023-01-30 10:41:11'),
(116,2,'Vuoto','','asdflkjasdfkljasdkfl','2023-01-30 10:41:21'),
(117,2,'Vuoto','','asdfsadf','2023-01-30 10:41:24'),
(118,2,'Vuoto','','asdfsadf','2023-01-30 10:41:36'),
(119,2,'Vuoto','','asdfasdf','2023-01-30 10:41:39'),
(120,2,'Vuoto','','asdfasdf','2023-01-30 10:41:43'),
(121,2,'Vuoto','','asdfasdf','2023-01-30 10:41:47'),
(122,2,'Vuoto','','asdfasdfasdfasdfasdfsadf','2023-01-30 10:41:54'),
(123,2,'Vuoto','','jkla;sdjfkljaskdlfjkl jklasdjf aksdjf kalsdjfkasdf','2023-01-30 10:42:09'),
(124,2,'Vuoto','','I can\'t help','2023-01-30 10:42:15'),
(125,2,'Vuoto','','asdfasdklfjaskldf','2023-01-30 11:13:37'),
(126,2,'Vuoto','','asdfasdf','2023-01-30 11:13:40'),
(127,2,'Vuoto','','asdfasd','2023-01-30 11:13:42'),
(128,2,'Vuoto','','zxcvzxcvzxcv','2023-01-30 11:13:46'),
(129,1,'Vuoto','','aksjdf;klasdjf;lkasdjf;klasdjfk;lajsdf;klasdjf','2023-01-30 11:13:54'),
(130,1,'Vuoto','','zxcvasdfasdf','2023-01-30 11:13:57'),
(131,1,'Vuoto','','aa','2023-01-30 11:14:01'),
(132,1,'Vuoto','','asdf','2023-01-30 11:14:05'),
(133,1,'Vuoto','','zxcvzxcv','2023-01-30 11:14:08'),
(134,1,'Vuoto','','zxcv','2023-01-30 11:14:10'),
(135,1,'Vuoto','','asdfkzjxcvkljzxcklvj','2023-01-30 11:14:19'),
(136,1,'Vuoto','','asdfasdfasdjfkljxzc vjk','2023-01-30 11:14:27'),
(137,1,'Vuoto','','adsfads','2023-01-30 11:14:30'),
(138,1,'Vuoto','','asdfsadkljfksajdfklasdjf','2023-01-30 11:17:55'),
(139,2,'Vuoto','','askldfjlk;sadjf;klsadjf;kldjsf;skdaf','2023-01-31 22:57:49'),
(140,2,'Vuoto','','askldfjlk;sadjf;klsadjf;kldjsf;skdaf','2023-01-31 22:57:59'),
(141,2,'Vuoto','','askldfjlk;sadjf;klsadjf;kldjsf;skdaf','2023-01-31 22:58:09'),
(142,2,'Vuoto','','askldfjlk;sadjf;klsadjf;kldjsf;skdaf','2023-01-31 22:58:11'),
(143,2,'Vuoto','','askldfjlk;sadjf;klsadjf;kldjsf;skdaf','2023-01-31 22:58:30'),
(144,3,'Vuoto','','sdafasdf','2023-02-01 08:21:00'),
(145,3,'Vuoto','','sdafasdf','2023-02-01 08:21:25'),
(146,3,'Vuoto','','safasdfasdf','2023-02-01 08:21:45'),
(147,3,'Vuoto','','safasdfasdf','2023-02-01 08:22:01'),
(148,3,'Vuoto','','safasdfasdf','2023-02-01 08:22:14');

/*Table structure for table `mappa` */

DROP TABLE IF EXISTS `mappa`;

CREATE TABLE `mappa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'standard_mappa.png',
  `weather` varchar(255) NOT NULL DEFAULT '20Â°c - sereno',
  `width` smallint(6) NOT NULL DEFAULT 500,
  `height` smallint(6) NOT NULL DEFAULT 330,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mappa` */

insert  into `mappa`(`id`,`name`,`image`,`weather`,`width`,`height`) values 
(1,'Mappa principale','spacer.gif','20Â°c - sereno',500,330),
(2,'Mappa secondaria','spacer.gif','18Â°c - nuvoloso',500,330);

/*Table structure for table `mappa_room` */

DROP TABLE IF EXISTS `mappa_room`;

CREATE TABLE `mappa_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT 'standard_luogo.png',
  `id_map` int(11) DEFAULT 0,
  `link_image` varchar(255) NOT NULL,
  `x_cord` int(11) DEFAULT 0,
  `y_cord` int(11) DEFAULT 0,
  `guests` text NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `Invitati` (`guests`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mappa_room` */

insert  into `mappa_room`(`id`,`name`,`description`,`image`,`id_map`,`link_image`,`x_cord`,`y_cord`,`guests`) values 
(1,'World of Memories','Via che congiunge la periferia al centro.','standard_luogo.png',1,'standard_mappa.png',60,20,''),
(2,'World of Dreams','Piccola piazza con panchine ed una fontana al centro.','free-download-this-stunning-alberta-scene-for-your-device-background-image-L-6.jpg',1,'standard_mappa.png',20,20,''),
(3,'Void','New Description of Void','images.jpg',1,'standard_mappa.png',40,50,'');

/*Table structure for table `memories` */

DROP TABLE IF EXISTS `memories`;

CREATE TABLE `memories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player_name` varchar(50) NOT NULL,
  `memories` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `memories` */

insert  into `memories`(`id`,`player_name`,`memories`) values 
(1,'Vuoto','adfkljasdklfjlkjcvznvc,xmnzxcm,vnASDFasdfasdfasdasdfkjaslkdfasdfadsfasdfadsfadfadsf'),
(2,'Vuoto','asdfasdfzcxvzcxvzasdfcxvzcxvadfsadadsfs'),
(3,'Naruto','aasdfasdfadsfasdfads'),
(4,'Vuoto','aaasdfasdkfjasldkfjaslkdfjadsfzcxvzxcv'),
(5,'Vuoto','asdfasdf'),
(6,'Vuoto','SADsdadsfasdfASDFA'),
(7,'Vuoto','ASDFADSFADFASDASDFASDFadsasdfadff'),
(8,'Vuoto','adsf'),
(9,'Vuoto','adsfasdfasdfasdf');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `Department` varchar(30) NOT NULL,
  `pss` varchar(100) NOT NULL,
  `question` varchar(80) NOT NULL,
  `answer` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
