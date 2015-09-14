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

/*Table structure for table `fbpageinfo` */

DROP TABLE IF EXISTS `fbpageinfo`;

CREATE TABLE `fbpageinfo` (
  `FBPINFO_ID` varchar(5) DEFAULT NULL,
  `FBPINFO_DESC` varchar(150) DEFAULT NULL,
  `FBPINFO_TYPE` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fbpageinfo` */

insert  into `fbpageinfo`(`FBPINFO_ID`,`FBPINFO_DESC`,`FBPINFO_TYPE`) values ('FB01','App Page','T01'),('FB02','Appliances','T01'),('FB03','Baby Goods/Kids Goods','T01'),('FB04','Bags/Luggage','T01'),('FB05','Board Game','T01'),('FB06','Building Materials','T01'),('FB07','Camera/Photo','T01'),('FB08','Cars','T01'),('FB09','Clothing','T01'),('FB10','Commercial Equipment','T01'),('FB11','Computers','T01'),('FB12','Drugs','T01'),('FB13','Electronics','T01'),('FB14','Food/Beverages','T01'),('FB15','Furniture','T01'),('FB16','Games/Toys','T01'),('FB17','Health/Beauty','T01'),('FB18','Home Decor','T01'),('FB19','Household Supplies','T01'),('FB20','Jewelry/Watches','T01'),('FB21','Kitchen/Cooking','T01'),('FB22','Office Supplies','T01'),('FB23','Patio/Garden','T01'),('FB24','Pet Supplies','T01'),('FB25','Phone/Tablet','T01'),('FB26','Product/Service','T01'),('FB27','Software','T01'),('FB28','Tools/Equipment','T01'),('FB29','Video Game','T01'),('FB30','Vitamins/Supplements','T01'),('FB31','Website','T01'),('FB32','Wine/Spirits','T01'),('FB33','Aerospace/Defense','T02'),('FB34','Automobiles and Parts','T02'),('FB35','Bank/Financial Institution','T02'),('FB36','Biotechnology','T02'),('FB37','Cause','T02'),('FB38','Chemicals','T02'),('FB39','Church/Religious Organization','T02'),('FB40','Community Organization','T02'),('FB41','Company','T02'),('FB42','Computers/Technology','T02'),('FB43','Consulting/Business Services','T02'),('FB44','Education','T02'),('FB45','Elementary School','T02'),('FB46','Energy/Utility','T02'),('FB47','Engineering/Construction','T02'),('FB48','Farming/Agriculture','T02'),('FB49','Food/Beverages','T02'),('FB50','Government Organization','T02'),('FB51','Health/Beauty','T02'),('FB52','Health/Medical/Pharmaceuticals','T02'),('FB53','Industrials','T02'),('FB54','Insurance Company','T02'),('FB55','Internet/Software','T02'),('FB56','Legal/Law','T02'),('FB57','Media/News/Publishing','T02'),('FB58','Middle School','T02'),('FB59','Mining/Materials','T02'),('FB60','Non-Governmental Organization (NGO)','T02'),('FB61','Non-Profit Organization','T02'),('FB62','Organization','T02'),('FB63','Political Organization','T02'),('FB64','Political Party','T02'),('FB65','Preschool','T02'),('FB66','Retail and Consumer Merchandise','T02'),('FB67','School','T02'),('FB68','Small Business','T02'),('FB69','Telecommunication','T02'),('FB70','Transport/Freight','T02'),('FB71','Travel/Leisure','T02'),('FB72','University','T02'),('FB73','Airport','T03'),('FB74','Arts/Entertainment/Nightlife','T03'),('FB75','Attractions/Things to Do','T03'),('FB76','Automotive','T03'),('FB77','Bank/Financial Services','T03'),('FB78','Bar','T03'),('FB79','Book Store','T03'),('FB80','Business Services','T03'),('FB81','Church/Religious Organization','T03'),('FB82','Club','T03'),('FB83','Community/Government','T03'),('FB84','Concert Venue','T03'),('FB85','Doctor','T03'),('FB86','Education','T03'),('FB87','Event Planning/Event Services','T03'),('FB88','Food/Grocery','T03'),('FB89','Health/Medical/Pharmacy','T03'),('FB90','Home Improvement','T03'),('FB91','Hospital/Clinic','T03'),('FB92','Hotel','T03'),('FB93','Landmark','T03'),('FB94','Lawyer','T03'),('FB95','Library','T03'),('FB96','Local Business','T03'),('FB97','Middle School','T03'),('FB98','Movie Theater','T03'),('FB99','Museum/Art Gallery','T03'),('FB100','Outdoor Gear/Sporting Goods','T03'),('FB101','Pet Services','T03'),('FB102','Professional Services','T03'),('FB103','Public Places','T03'),('FB104','Real Estate','T03'),('FB105','Restaurant/Cafe','T03'),('FB106','School','T03'),('FB107','Shopping/Retail','T03'),('FB108','Spas/Beauty/Personal Care','T03'),('FB109','Sports Venue','T03'),('FB110','Sports/Recreation/Activities','T03'),('FB111','Tours/Sightseeing','T03'),('FB112','Transportation','T03'),('FB113','University','T03'),('FB114','Actor/Director','T04'),('FB115','Artist','T04'),('FB116','Athlete','T04'),('FB117','Author','T04'),('FB118','Blogger','T04'),('FB119','Business Person','T04'),('FB120','Chef','T04'),('FB121','Coach','T04'),('FB122','Comedian','T04'),('FB123','Dancer','T04'),('FB124','Designer','T04'),('FB125','Entertainer','T04'),('FB126','Entrepreneur','T04'),('FB127','Fictional Character','T04'),('FB128','Government Official','T04'),('FB129','Journalist','T04'),('FB130','Movie Character','T04'),('FB131','Musician/Band','T04'),('FB132','News Personality','T04'),('FB133','Pet','T04'),('FB134','Photographer','T04'),('FB135','Politician','T04'),('FB136','Producer','T04'),('FB137','Public Figure','T04'),('FB138','Scientist','T04'),('FB139','Teacher','T04'),('FB140','Writer','T04'),('FB141','Album','T05'),('FB142','Amateur Sports Team','T05'),('FB143','Book','T05'),('FB144','Book Series','T05'),('FB145','Book Store','T05'),('FB146','Concert Tour','T05'),('FB147','Concert Venue','T05'),('FB148','Fictional Character','T05'),('FB149','Library','T05'),('FB150','Magazine','T05'),('FB151','Movie','T05'),('FB152','Movie Character','T05'),('FB153','Movie Theater','T05'),('FB154','usic Award','T05'),('FB155','Music Chart','T05'),('FB156','Music Video','T05'),('FB157','Performance Art','T05'),('FB158','Radio Station','T05'),('FB159','Record Label','T05'),('FB160','School Sports Team','T05'),('FB161','Song','T05'),('FB162','Sports League','T05'),('FB163','Sports Team','T05'),('FB164','Sports Venue','T05'),('FB165','Studio','T05'),('FB166','Theatrical Play','T05'),('FB167','TV Channel','T05'),('FB168','TV Network','T05'),('FB169','TV Show','T05'),('FB170','TV/Movie Award','T05');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
