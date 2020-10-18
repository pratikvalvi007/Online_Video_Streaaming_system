-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 18, 2020 at 01:37 AM
-- Server version: 10.3.9-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `series`
--

-- --------------------------------------------------------

--
-- Table structure for table `auser`
--

DROP TABLE IF EXISTS `auser`;
CREATE TABLE IF NOT EXISTS `auser` (
  `username` varchar(16) NOT NULL,
  `email` varchar(16) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `flag` varchar(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auser`
--

INSERT INTO `auser` (`username`, `email`, `pass`, `flag`) VALUES
('', 'p@G.com', 'Aa@12345678', 'A'),
('aaa', 'aaa@gmail.com', 'Pratik@123', 'U'),
('abc', 'abc@gmail.com', 'Pratik@12', 'U'),
('admin', 'admin@gmail.com', 'Admin@123', 'A'),
('libra', 'libra@gmail.com', 'Tanay@123', 'U'),
('pratik', 'pratik@gmail.com', 'Pratik@123', 'U'),
('sayali', 'sayali@gmail.com', 'Sayali@123', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

DROP TABLE IF EXISTS `episode`;
CREATE TABLE IF NOT EXISTS `episode` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `season_id` int(15) NOT NULL,
  `episode_no` int(11) NOT NULL,
  `episode_name` varchar(50) NOT NULL,
  `file` varchar(30) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`eid`, `season_id`, `episode_no`, `episode_name`, `file`) VALUES
(49, 8, 1, 'episode 1', '1.mp4'),
(51, 8, 2, 'episode 2', '2.mp4'),
(52, 10, 1, 'episode 1', '3.mp4'),
(53, 10, 2, 'episode 2', 'Kimetsu-no-Yaiba-Episode-4.mp4'),
(54, 11, 1, 'episode 1', 'w.mp4'),
(56, 8, 3, 'a', 'Kimetsu-Yaiba-Episode-4.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

DROP TABLE IF EXISTS `season`;
CREATE TABLE IF NOT EXISTS `season` (
  `season_id` int(11) NOT NULL AUTO_INCREMENT,
  `series_id` int(20) NOT NULL,
  `season_no` int(11) NOT NULL,
  `season_name` varchar(50) NOT NULL,
  PRIMARY KEY (`season_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`season_id`, `series_id`, `season_no`, `season_name`) VALUES
(8, 9, 1, 'season 1'),
(10, 9, 2, 'season 2'),
(11, 15, 1, 'season 1'),
(12, 9, 4, 'season 4');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
CREATE TABLE IF NOT EXISTS `series` (
  `series_id` int(11) NOT NULL AUTO_INCREMENT,
  `series_title` varchar(50) NOT NULL,
  `thumbnail` text NOT NULL,
  `series_desc` text NOT NULL,
  `language` varchar(30) NOT NULL,
  `keyword` text NOT NULL,
  PRIMARY KEY (`series_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`series_id`, `series_title`, `thumbnail`, `series_desc`, `language`, `keyword`) VALUES
(9, 'Naruto', 'konoha-naruto-anime-hd-wallpaper-1920x1080-30887.jpg', 'Naruto (ãƒŠãƒ«ãƒˆ) is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks to gain recognition from his peers and also dreams of becoming the Hokage, the leader of his village.', 'japanise', 'naruto,ninja, n,na,naru,narut'),
(15, 'witcher', '1.jpg', 'The witcher Geralt, a mutated monster hunter, struggles to find his place in a world in which people often prove more wicked than beasts.', 'english', 'witcher,w,witch,');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

DROP TABLE IF EXISTS `watchlist`;
CREATE TABLE IF NOT EXISTS `watchlist` (
  `watch_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `series_id` int(11) DEFAULT 0,
  PRIMARY KEY (`watch_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`watch_id`, `username`, `series_id`) VALUES
(1, 'abc', 9),
(2, 'pratik', 9),
(3, 'rushikesh', 0),
(4, 'anishmarathe', 0),
(5, 'maratheanish', 0),
(6, 'aaa', 0),
(7, 'sayali', 15),
(8, 'sayali', 15),
(9, 'sayali', 15),
(10, 'sayali', 15),
(11, 'libra', 9),
(12, 'abc', 9),
(13, 'aaa', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
