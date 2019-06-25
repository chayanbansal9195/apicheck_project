-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 07:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_image`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(40) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`slno`, `user`, `pass`, `status`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `album_name`
--

CREATE TABLE IF NOT EXISTS `album_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `album_name`
--

INSERT INTO `album_name` (`id`, `album`) VALUES
(76, 'image'),
(77, 'intern'),
(78, 'image'),
(79, 'next'),
(80, 'next1'),
(81, 'next1'),
(82, 'text'),
(83, 'text'),
(84, 'inh'),
(85, 'kl'),
(86, 'ju'),
(87, 'hgjh'),
(88, 'gfghjk'),
(89, 'asd'),
(90, 'wert'),
(91, ''),
(92, 'as');

-- --------------------------------------------------------

--
-- Table structure for table `ckeditor`
--

CREATE TABLE IF NOT EXISTS `ckeditor` (
  `slno` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `details` longtext NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ckeditor`
--

INSERT INTO `ckeditor` (`slno`, `title`, `details`, `datetime`) VALUES
(1, 'Something', '<p><span style="font-family:Comic Sans MS,cursive"><span style="font-size:11px"><span style="color:#e67e22">Chayan</span></span></span></p>\r\n', '0000-00-00 00:00:00'),
(2, 'bla bla', '<h1><span style="font-family:Comic Sans MS,cursive"><span style="color:#8e44ad">Hello</span></span></h1>\r\n', '0000-00-00 00:00:00'),
(3, 'llklkjlk', '<p>lkkjkjkj</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-06-19 11:06:29'),
(4, 'price table', '<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>particulars</td>\r\n			<td>qty</td>\r\n			<td>rate</td>\r\n			<td>total</td>\r\n		</tr>\r\n		<tr>\r\n			<td>biscuit</td>\r\n			<td>3</td>\r\n			<td>20</td>\r\n			<td>60</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-06-19 11:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `album`) VALUES
(135, 'blog.PNG', 'image'),
(136, 'Capture.PNG', 'intern'),
(137, 'code-wallpaper-8.jpg', 'intern'),
(138, 'blog.PNG', 'image'),
(139, '909185.jpg', 'next'),
(140, 'A.png', 'next1'),
(141, 'blog.PNG', 'next1'),
(142, 'Capture.PNG', 'next1'),
(143, 'A.png', 'next1'),
(144, 'blog.PNG', 'next1'),
(145, 'Capture.PNG', 'next1'),
(146, '909185.jpg', 'text'),
(147, 'A.png', 'text'),
(148, '909185.jpg', 'text'),
(149, 'A.png', 'text'),
(150, '909185.jpg', 'inh'),
(151, 'A.png', 'inh'),
(152, 'high_tech_earth-wallpaper-2880x1800.jpg', 'kl'),
(153, 'A.png', 'ju'),
(154, 'A.png', 'hgjh'),
(155, 'blog.PNG', 'hgjh'),
(156, 'A.png', 'gfghjk'),
(157, 'blog.PNG', 'gfghjk'),
(158, 'Capture.PNG', 'gfghjk'),
(159, 'cbsal.jpg', 'gfghjk'),
(160, '909185.jpg', 'asd'),
(161, 'A.png', 'wert'),
(162, 'blog.PNG', 'wert'),
(163, 'Capture.PNG', 'wert'),
(164, 'code-wallpaper-8.jpg', 'wert'),
(165, '909185.jpg', ''),
(166, 'A.png', ''),
(167, 'Capture.PNG', ''),
(168, 'A.png', 'as'),
(169, 'blog.PNG', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `multidata`
--

CREATE TABLE IF NOT EXISTS `multidata` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `rollno` int(5) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `multidata`
--

INSERT INTO `multidata` (`slno`, `name`, `class`, `rollno`, `status`) VALUES
(4, 'Rohit', '10', 222, 0),
(5, 'Sumit', '10', 123, 0),
(6, 'Suman', '10', 444, 0),
(10, 'Mark', '11', 9876543, 1),
(13, 'asdf', '123', 12345, 0),
(14, 'Khs', '123', 112, 0),
(15, 'Hello', '45', 111, 0),
(16, 'fhhgdhg', '112', 2323423, 0),
(17, 'ffghfgf', '12', 43543543, 0),
(18, 'gfgd', '12', 121234, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
