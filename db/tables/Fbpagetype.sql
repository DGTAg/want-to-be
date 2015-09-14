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

/*Table structure for table `fbpagetype` */

DROP TABLE IF EXISTS `fbpagetype`;

CREATE TABLE `fbpagetype` (
  `FBPTYPE_ID` varchar(4) DEFAULT NULL,
  `FBPTYPE_DESC` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fbpagetype` */

insert  into `fbpagetype`(`FBPTYPE_ID`,`FBPTYPE_DESC`) values ('T01','Brand or Product'),('T02','Company, Organization or Institution'),('T03','Local Business or Place'),('T04','Artist, Band or Public Figure'),('T05','Entertainment');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
