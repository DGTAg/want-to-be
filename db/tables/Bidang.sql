/*
SQLyog Community Edition- MySQL GUI v6.16
MySQL - 5.6.24 : Database - onetobe
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `onetobe`;

USE `onetobe`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `bidang` */

DROP TABLE IF EXISTS `bidang`;

CREATE TABLE `bidang` (
  `BID_ID` varchar(4) DEFAULT NULL,
  `BID_DESC` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bidang` */

insert  into `bidang`(`BID_ID`,`BID_DESC`) values ('B01','BAHASA'),('B02','EKONOMI/PERAKAUNAN/ PERNIAGAAN'),('B03','FARMASI'),('B04','KEJURUTERAAN'),('B05','KOMPUTER/ ICT'),('B06','PENDIDIKAN'),('B07','PENGAJIAN ISLAM'),('B08','PENGURUSAN'),('B09','PERGIGIAN'),('B10','SAINS'),('B11','SAINS GUNAAN'),('B12','SAINS KESIHATAN/ SAINS BERSEKUTU'),('B13','SAINS TULEN'),('B14','SASTERA'),('B15','SENI BINA'),('B16','TEKNOLOGI'),('B17','UNDANG-UNDANG');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
