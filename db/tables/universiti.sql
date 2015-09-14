-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2015 at 09:19 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onetobe`
--

-- --------------------------------------------------------

--
-- Table structure for table `universiti`
--

CREATE TABLE IF NOT EXISTS `universiti` (
  `UNI_ID` varchar(4) DEFAULT NULL,
  `UNI_DESC` varchar(150) DEFAULT NULL,
  `UNI_ADDR` varchar(150) NOT NULL,
  `UNI_TEL` varchar(12) NOT NULL,
  `UNI_WEB` varchar(150) NOT NULL,
  `UNI_LAT` varchar(50) NOT NULL,
  `UNI_LONG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universiti`
--

INSERT INTO `universiti` (`UNI_ID`, `UNI_DESC`, `UNI_ADDR`, `UNI_TEL`, `UNI_WEB`, `UNI_LAT`, `UNI_LONG`) VALUES
('A', 'UPSI', 'Tanjong Malim, Perak Darul Ridzuan 35900, 35900 Tanjong Malim, Perak', '05-450 6000', 'http://www.upsi.edu.my/', '33.83036', '77.81421'),
('C', 'UTEM', 'Hang Tuah Jaya, 76100 Durian Tunggal, Melaka', '06-331 6768', 'http://www.utem.edu.my/portal/', '42.05027', '-95.70639'),
('D', 'UNISZA', 'Gong Badak, Kuala Terengganu, Terengganu', '09-668 8888', 'https://www.unisza.edu.my', '5.39816', '103.08314'),
('E', 'UITM', '40450 Shah Alam, Selangor', '03-5544 2000', 'http://www.uitm.edu.my/', '3.06962', '101.50376'),
('F', 'POLITEKNIK', 'Semambu,25350 Kuantan, Pahang', '09-5655300', 'http://www.polisas.edu.my/', '3.86154', '103.31149'),
('G', 'UMT', 'Kuala Terengganu, Terengganu', '06-664 8100', 'http://www.umt.edu.my/', '69.37059', '-152.13696'),
('H', 'UMS', 'Universiti Malaysia Sabah, Jalan UMS, 88400 Kota Kinabalu, Sabah, Malaysia.', '088-320 000', 'http://www.ums.edu.my', '6.03667', '116.11861'),
('J', 'UMP', 'Kuantan, Lebuhraya Tun Razak, 26300 Gambang, Pahang', '09-549 2020', 'http://www.ump.edu.my/', '3.72089', '103.12489'),
('K', 'UKM', 'Jalan Reko, 43600 Bangi, Selangor', '03-8921 5555', 'http://www.ukm.edu.my/', '2.92976', '101.77915'),
('L', 'UMK', 'Pengkalan Chepa, 16100 Kota Bharu, Kelantan', '09-771 7000', 'http://www.umk.edu.my/', '6.16416', '102.28454'),
('M', 'UM', 'Jalan Universiti, 50603 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', '03-7955 2595', 'http://www.um.edu.my/', '3.12170', '101.65304'),
('P', 'UPM', '43300 Serdang', '03-8946 6000', 'http://www.upm.edu.my/', '2.99169', '101.71629'),
('Q', 'USIM', 'Bandar Baru Nilai, 71800 NilaI, Negeri Sembilan', '06-798 8000', 'http://www.usim.edu.my/', '2.84420', '101.78189'),
('R', 'UNIMAP', '02600 Arau, Perlis', '04-979 8008', 'http://www.unimap.edu.my/', '6.46217', '100.16313'),
('S', 'USM', '11800 Gelugor, Penang', '11800 Gelugo', 'http://www.usm.edu.my/', '5.35593', '100.30252'),
('T', 'UTM', '81310 Johor Bahru, Johor', '07-553 3333', 'http://www.utm.edu.my/', '1.55857', '103.63816'),
('U', 'UUM', 'Sintok, Universiti Utara Malaysia, Kedah', '04-928 4000', 'http://www.uum.edu.my/', '1.55857', '103.63816'),
('W', 'UNIMAS', 'Jln Meranti, 94300 Kota Samarahan, Sarawak', '082 582479  ', 'http://www.unimas.edu.my/', '1.46477', '110.42896'),
('Y', 'UIAM', 'Jalan Gombak, 53100 Kuala Lumpur, Selangor', '036196 4000', 'http://www.iium.edu.my/', '3.25154', '101.73664'),
('Z', 'UPNM', 'Jalan Raja, Kem Sungai Besi, Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', '03-9051 3400', 'http://www.upnm.edu.my/', '3.04955', '101.72684'),
('B', 'UTHM', '86400 Batu Pahat, Johor', '07-4537000', 'http://www.uthm.edu.my/v2/', '1.85863', '103.08558');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
