/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.14-MariaDB : Database - kakosidb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kakosidb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `kakosidb`;

/*Table structure for table `fitnes` */

DROP TABLE IF EXISTS `fitnes`;

CREATE TABLE `fitnes` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `address` varbinary(255) DEFAULT NULL,
  `visina` varchar(255) DEFAULT NULL,
  `tezina` varchar(255) DEFAULT NULL,
  `trening` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `fitnes` */

insert  into `fitnes`(`id`,`address`,`visina`,`tezina`,`trening`) values 
(1,'naida@gmail.com','165','65','2x sedmicno'),
(2,'fatic@gmail.com','165','65','2x'),
(3,'sunit@gmail.com','165','65','3x'),
(4,'samija@gmail.com','178','60','0x'),
(5,'lamija@hotmail.com','170','70','1x'),
(6,'babovic@gmail.com','130','40','2x'),
(7,'naida@gmail.com','165',NULL,'0');

/*Table structure for table `mail` */

DROP TABLE IF EXISTS `mail`;

CREATE TABLE `mail` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `done` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mail` */

insert  into `mail`(`id`,`address`,`message`,`doctor`,`done`) values 
(1,'naida@gmail.com','hey','',NULL),
(2,'naida@gmail.com','hey','',NULL),
(3,'naida@gmail.com','hello','N.N',NULL),
(4,'naida@gmail.com','mess','B.B',NULL),
(5,'naida@gmail.com','hello','C.C',NULL),
(6,'naida@gmail.com','hello','A.A',NULL),
(7,'naida@gmail.com','i need session\r\n','N.N',NULL),
(8,'naida@gmail.com','my head hurts\r\n','',NULL),
(9,'naida@gmail.com','imam depresiju\r\n','',NULL),
(10,'naida@gmail.com','tuzna sam','',NULL),
(11,'naida@gmail.com','nervozna sam\r\n','',NULL),
(12,'naida@gmail.com','zdravo, mozete li mi se javiti na mail da zakazem termin\r\n','',NULL),
(13,'naida@gmail.com','treba mi pomoc','',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
