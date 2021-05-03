/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.18-MariaDB : Database - modul4pemilu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`modul4pemilu` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `modul4pemilu`;

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` varchar(11) NOT NULL,
  `Nama` varchar(15) DEFAULT NULL,
  `RolePlayer` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`id`,`Nama`,`RolePlayer`) values 
('1','Arteezy','Carry'),
('10','Attacker','MidLaner'),
('11','Notail','HardSupport'),
('12','Topson','MidLaner'),
('13','General','OffLaner'),
('14','IYD','MidLaner'),
('15','GH','SoftSupport'),
('16','Kuroky','HardSupport'),
('17','Mind_Control','OffLaner'),
('2','Dendi','MidLaner'),
('3','Ceb','OffLaner'),
('4','Puppey','HardSupport'),
('5','Jerax','SoftSupport'),
('6','Sumail','MidLaner'),
('7','Ana','Carry'),
('8','Nikobaby','Carry'),
('9','MATUMBAMAN','Carry');

/*Table structure for table `suara` */

DROP TABLE IF EXISTS `suara`;

CREATE TABLE `suara` (
  `id` varchar(15) NOT NULL,
  `Nama_Pemilih` varchar(15) DEFAULT NULL,
  `Pilihan` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `suara` */

insert  into `suara`(`id`,`Nama_Pemilih`,`Pilihan`) values 
('1','Van','OX'),
('2','MyEX','OX'),
('3','Crywolf','UVX'),
('4','RunCrywolf','Evan');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
