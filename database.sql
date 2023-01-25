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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `characters` */

insert  into `characters`(`id`,`name`,`email`,`password`,`latest_map`,`last_place`,`online_status`) values 
(1,'arthlo','$P$B11Ix0oLTOrWTiC5nXTbpJlNBPnlR10','$P$BsE218SdSwFj/f5wM/4zHcFk1dHwKH/',1,1,1),
(5,'dene','$P$BVDhi8CMynuBsogOxwke2Fr4A33Hlw/','$P$B82sgslcL2tMFK.T3685oLfmUSKnCI1',1,-1,0),
(6,'Rasheed','$P$BVeheZs6iFoeS.qCVOn9CcUTMaRUGa1','$P$BsE218SdSwFj/f5wM/4zHcFk1dHwKH/',1,2,0),
(7,'demo','$P$BiciAmao0qER5N1gyvT8pxsTHgvNT70','$P$BIbXF3xNOhWZRf/tHLUYPANY..lkZN/',1,2,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4;

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
(66,1,'arthlo','','afasfasdfasdfasd','2023-01-25 07:40:21');

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
