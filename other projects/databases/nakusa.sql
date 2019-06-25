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
-- Database: `nakusa`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`slno`, `heading`, `doc_file`, `date`, `datetime`, `login`) VALUES
(4, 'Win', '', '2018-10-13', '2018-10-13 23:04:14', 'admin'),
(6, 'reyte', '', '2018-10-13', '2018-10-13 23:04:22', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `actionplan`
--

CREATE TABLE IF NOT EXISTS `actionplan` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `action` text NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `actionplan`
--

INSERT INTO `actionplan` (`slno`, `action`, `doc_file`, `date`, `login`) VALUES
(2, 'stesyt tst5s e545', 'ACTNPLAN101220181142th.jpg', '2018-10-11', 'admin'),
(3, 'The Division has 13 national institutes including one deemed-to-be-university, 3 bureaus, 9 project directorates, 2 national research centres, 27 all-India coordinated research projects, and 5 all-India network projects. Besides, it administers a large number of revolving fund schemes and national research networks, and facilitates the technical clearance of externally funded projects.', '', '2018-10-13', 'admin'),
(4, 'Developed the bioinsecticide strain DOR Bt-l, registered and commercialized its formulation KNOCK W.P. along with a low-cost mass multiplication methodology for integrated management of semilooper caterpillar in a number of crops; developed endosulfan-tolerant strain of Trichogramma chilonis (Endograma); deployed Pest Management Information System including Interactive Kiosks for Basmati rice, cotton, mustard, chickpea and groundnut', '', '2018-10-13', 'admin'),
(5, 'DNA fingerprinting in 33 major crops; fingerprinted 2215 released varieties and landraces.', '', '2018-10-13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `annualreport`
--

CREATE TABLE IF NOT EXISTS `annualreport` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `annualreport`
--

INSERT INTO `annualreport` (`slno`, `year`, `doc_file`, `remarks`, `date`, `datetime`, `login`) VALUES
(5, 2018, '', 'Annual Report 2018-2019', '2018-10-13', '2018-10-13 20:13:55', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `articlejournal`
--

CREATE TABLE IF NOT EXISTS `articlejournal` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `articlejournal`
--

INSERT INTO `articlejournal` (`slno`, `heading`, `doc_file`, `date`, `login`) VALUES
(2, 'GFUYFY', 'ARTICLE101320181022th.jpg', '2018-10-13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contactstaff`
--

CREATE TABLE IF NOT EXISTS `contactstaff` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(50) NOT NULL,
  `sender_phone` varchar(50) NOT NULL,
  `sender_email` varchar(80) NOT NULL,
  `queries` text NOT NULL,
  `reply` text NOT NULL,
  `staff_email` varchar(80) NOT NULL,
  `date` date NOT NULL,
  `reply_date` date DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contactstaff`
--

INSERT INTO `contactstaff` (`slno`, `sender_name`, `sender_phone`, `sender_email`, `queries`, `reply`, `staff_email`, `date`, `reply_date`, `status`) VALUES
(1, 'Kamal Baruah', '8638975612', 'kmal@gmail.com', 'fdge  ew rwrt t twr tw', '', 'swarup22@gmail.com', '2018-10-09', NULL, 1),
(2, 'Naba Bora', '7896451234', 'naba@gmail.com', 'eohrh tuh eh', 'jgfffu efqeygyi efig', 'swarup22@gmail.com', '2018-10-09', '2018-11-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `documentaryfilm`
--

CREATE TABLE IF NOT EXISTS `documentaryfilm` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `remarks` text NOT NULL,
  `date` date NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `documentaryfilm`
--

INSERT INTO `documentaryfilm` (`slno`, `link`, `remarks`, `date`, `login`) VALUES
(1, 'https://www.youtube.com/watch?v=4wDVzjn9s9E', 'Lionel Messi', '2018-10-13', 'admin'),
(2, 'https://www.youtube.com/watch?v=1iWHFl9QVAI', 'Sunil Chhetri', '2018-10-13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `details` varchar(100) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`slno`, `details`, `doc_file`, `date`, `datetime`, `login`) VALUES
(1, 'Misc', 'DFILE101020180807th.zip', '2018-10-10', '2018-10-10 08:07:23', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE IF NOT EXISTS `ebook` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`slno`, `heading`, `doc_file`, `date`, `login`) VALUES
(2, 'ftftf\r\n\r\nuff', 'EBOOK101320181043th.jpg', '2018-10-13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `eventphotos`
--

CREATE TABLE IF NOT EXISTS `eventphotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_code` varchar(20) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_photos` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `login` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `eventphotos`
--

INSERT INTO `eventphotos` (`id`, `event_code`, `event_name`, `event_photos`, `date`, `datetime`, `login`) VALUES
(1, '2018091', 'Misc', 'KVK09820180259th0.JPG', '2018-09-08', '2018-09-08 09:29:26', 'admin'),
(3, '2018093', 'Sport', 'KVK09820180302th0.jpg', '2018-09-08', '2018-09-08 09:32:16', 'admin'),
(4, '2018093', 'Sport', 'KVK09820180302th1.jpg', '2018-09-08', '2018-09-08 09:32:16', 'admin'),
(5, '2018091', 'Misc', 'KVK09820180326th0.jpg', '2018-09-08', '2018-09-08 09:56:46', 'admin'),
(6, '2018091', 'Misc', 'KVK09820180326th1.jpeg', '2018-09-08', '2018-09-08 09:56:46', 'admin'),
(7, '2018107', 'KVK', 'KVK101420181159th0.jpg', '2018-10-14', '2018-10-14 06:29:33', 'admin'),
(8, '2018107', 'KVK', 'KVK101420181159th1.jpg', '2018-10-14', '2018-10-14 06:29:33', 'admin'),
(9, '2018107', 'KVK', 'KVK101420181159th2.jpg', '2018-10-14', '2018-10-14 06:29:33', 'admin'),
(14, '20190610', 'today', 'KVK06720191017th0.jpg', '2019-06-07', '2019-06-07 04:47:26', 'swarup22@gmail.com'),
(15, '20190610', 'today', 'KVK06720191017th1.png', '2019-06-07', '2019-06-07 04:47:26', 'swarup22@gmail.com'),
(16, '20190616', 'intern', 'KVK06720191017th0.jpg', '2019-06-07', '2019-06-07 04:47:40', 'swarup22@gmail.com'),
(17, '20190616', 'intern', 'KVK06720191017th1.jpg', '2019-06-07', '2019-06-07 04:47:40', 'swarup22@gmail.com'),
(18, '20190616', 'intern', 'KVK06720191017th2.jpg', '2019-06-07', '2019-06-07 04:47:40', 'swarup22@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `exempfarmers`
--

CREATE TABLE IF NOT EXISTS `exempfarmers` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `discipline` varchar(50) NOT NULL,
  `activity` text NOT NULL,
  `doc_file` varchar(40) NOT NULL,
  `activity_date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `exempfarmers`
--

INSERT INTO `exempfarmers` (`slno`, `discipline`, `activity`, `doc_file`, `activity_date`, `datetime`, `login`) VALUES
(2, 'Horticulture', 'huy', 'EXPFRMR101220180518th.jpg', '2018-10-11', '2018-10-12 17:18:30', 'admin'),
(3, 'Agronomy', 'Identification of novel Arabidopsis derived promoter that drives constitutive expression of foreign genes in transgenic plants', '', '2018-10-13', '2018-10-13 15:32:15', 'admin'),
(4, 'Agronomy', 'Doubled the seed production of improved varieties in a year amounting to 606,000 quintals during 2006-07 through a mega seed project; thus enhanced the transfer of released varieties for cultivation', 'EXPFRMR101320180852th.pdf', '2018-10-13', '2018-10-13 20:52:00', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `extratraining`
--

CREATE TABLE IF NOT EXISTS `extratraining` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `discipline` varchar(50) NOT NULL,
  `training` text NOT NULL,
  `doc_file` varchar(40) NOT NULL,
  `activity_date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `extratraining`
--

INSERT INTO `extratraining` (`slno`, `discipline`, `training`, `doc_file`, `activity_date`, `datetime`, `login`) VALUES
(4, 'Agronomy', 'Identified and isolated a gene conferring male sterility in mustard that is useful for hybrid development in other crops; developed a SCAR marker for fertility restorer gene', '', '2018-10-13', '2018-10-13 15:29:14', 'admin'),
(6, 'Agronomy', 'Identification of novel Arabidopsis derived promoter that drives constitutive expression of foreign genes in transgenic plants', '', '2018-10-13', '2018-10-13 15:31:47', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `fldactivities`
--

CREATE TABLE IF NOT EXISTS `fldactivities` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `discipline` varchar(50) NOT NULL,
  `fld` text NOT NULL,
  `doc_file` varchar(40) NOT NULL,
  `activity_date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fldactivities`
--

INSERT INTO `fldactivities` (`slno`, `discipline`, `fld`, `doc_file`, `activity_date`, `datetime`, `login`) VALUES
(1, 'Agronomy', 'gdeyrdey', 'FLD101220180455th.jpg', '2018-10-12', '2018-10-12 16:55:53', 'admin'),
(3, 'Agronomy', 'Employed genes for stress resistance and quality in several crops from their wild relatives; developed early and suitable plant types for new niche areas and cropping systems in pulses and other crops; evolved effective male sterility systems for hybrid development in many crops', '', '2018-10-13', '2018-10-13 15:18:32', 'admin'),
(6, 'Home Science', 'hgtgetg', '', '2018-10-14', '2018-10-14 15:26:55', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE IF NOT EXISTS `folder` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`slno`, `heading`, `doc_file`, `date`, `login`) VALUES
(2, 'yfgfg', 'FOLDER101320181039th.png', '2018-10-13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `loginid` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `loginid`, `password`, `role`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 0, 0),
(5, 'Swarup Dey', 'swarup22@gmail.com', 'abc', 1, 0),
(4, 'Bhabanada Baruah', 'bob@gmail.com', '123', 1, 0),
(7, 'Omuk', 'omuk@gmail.com', '123', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsevent`
--

CREATE TABLE IF NOT EXISTS `newsevent` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `news_event` text NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `newsevent`
--

INSERT INTO `newsevent` (`slno`, `news_event`, `doc_file`, `date`, `datetime`, `login`) VALUES
(3, 'all news are here', 'NEWS09920180737th.jpg', '2018-09-09', '2018-09-09 19:37:31', 'admin'),
(6, 'ufuufu', '', '2018-10-14', '2018-10-14 15:45:17', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `newspaperpublication`
--

CREATE TABLE IF NOT EXISTS `newspaperpublication` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newspaperpublication`
--

INSERT INTO `newspaperpublication` (`slno`, `heading`, `doc_file`, `date`, `login`) VALUES
(3, 'Volume 23 No. 4 Oct- Dec 2017', 'NEWSPAPER101320180823th.jpg', '2018-10-13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `oftactivities`
--

CREATE TABLE IF NOT EXISTS `oftactivities` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `discipline` varchar(50) NOT NULL,
  `oft` text NOT NULL,
  `doc_file` varchar(40) NOT NULL,
  `activity_date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `oftactivities`
--

INSERT INTO `oftactivities` (`slno`, `discipline`, `oft`, `doc_file`, `activity_date`, `datetime`, `login`) VALUES
(1, 'Agronomy', 'rryey', 'OFT101220180448th.jpg', '2018-10-12', '2018-10-12 16:48:14', 'admin'),
(2, 'Agronomy', 'First in the world to develop hybrids in grain pearl millet and cotton in the 1970s; also developed hybrids in other crops, including non-conventional crops, such as castor, safflower, rice, pigeonpea and rapeseed-mustard; developed single cross hybrids in quality protein maize (QPM) and baby corn for high nutritional value in addition to high yield', '', '2018-10-13', '2018-10-13 15:17:04', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `otherreport`
--

CREATE TABLE IF NOT EXISTS `otherreport` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `otherreport`
--

INSERT INTO `otherreport` (`slno`, `heading`, `doc_file`, `date`, `datetime`, `login`) VALUES
(2, 'Annual Account and Audit Report 2015-16', 'ACHVMNT101320180818th.pdf', '2018-10-13', '2018-10-13 20:18:07', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `researchpaper`
--

CREATE TABLE IF NOT EXISTS `researchpaper` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `researchpaper`
--

INSERT INTO `researchpaper` (`slno`, `heading`, `doc_file`, `date`, `login`) VALUES
(2, 'trrr', 'RSPAPER101320181004th.jpg', '2018-10-13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `rolloveradvisories`
--

CREATE TABLE IF NOT EXISTS `rolloveradvisories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details` text NOT NULL,
  `login` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `datetime` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `rolloveradvisories`
--

INSERT INTO `rolloveradvisories` (`id`, `details`, `login`, `date`, `datetime`) VALUES
(9, 'Advisories 1', 'admin', '2018-11-20', '2018-11-20 16:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `rolloverfarmersinnovation`
--

CREATE TABLE IF NOT EXISTS `rolloverfarmersinnovation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photos` varchar(300) NOT NULL,
  `caption` text NOT NULL,
  `date` date NOT NULL,
  `datetime` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `rolloverfarmersinnovation`
--

INSERT INTO `rolloverfarmersinnovation` (`id`, `photos`, `caption`, `date`, `datetime`) VALUES
(14, 'KVKFI112020180915th.jpg', 'Farmer Innovation 1', '2018-11-20', '2018-11-20 15:45:36'),
(11, 'KVKFI111920181015th2.jpg', 'Farmers Innovation 2', '2018-11-19', '2018-11-19 16:45:28'),
(15, 'KVKFI1120201871.jpg', 'Farmers Innovation 3', '2018-11-20', '2018-11-20 15:49:44'),
(9, 'KVKFI111920181015th0.jpg', 'Farmers Innovation 4', '2018-11-19', '2018-11-19 16:45:28'),
(13, 'KVKFI111920181015th4.jpg', 'Farmers Innovation 5', '2018-11-19', '2018-11-19 16:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `rolloverhome`
--

CREATE TABLE IF NOT EXISTS `rolloverhome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photos` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `datetime` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `rolloverhome`
--

INSERT INTO `rolloverhome` (`id`, `photos`, `date`, `datetime`) VALUES
(17, 'KVKHOME111920180851th4.jpg', '2018-11-19', '2018-11-19 15:21:19'),
(16, 'KVKHOME111920180851th3.png', '2018-11-19', '2018-11-19 15:21:19'),
(15, 'KVKHOME111920180851th2.jpg', '2018-11-19', '2018-11-19 15:21:19'),
(14, 'KVKHOME111920180851th1.jpg', '2018-11-19', '2018-11-19 15:21:19'),
(13, 'KVKHOME111920180851th0.jpg', '2018-11-19', '2018-11-19 15:21:19'),
(18, 'KVKHOME111920180851th5.jpg', '2018-11-19', '2018-11-19 15:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `rolloversuccessstories`
--

CREATE TABLE IF NOT EXISTS `rolloversuccessstories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photos` varchar(300) NOT NULL,
  `caption` text NOT NULL,
  `date` date NOT NULL,
  `datetime` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `rolloversuccessstories`
--

INSERT INTO `rolloversuccessstories` (`id`, `photos`, `caption`, `date`, `datetime`) VALUES
(11, 'KVKSS112020180908th.jpg', 'Success Stories 1', '2018-11-20', '2018-11-20 15:38:58'),
(17, 'KVKSS1120201863.jpg', 'Success Stories 2', '2018-11-20', '2018-11-20 15:51:09'),
(16, 'KVKSS112020180912th.jpg', 'Success Stories 3', '2018-11-20', '2018-11-20 15:42:47'),
(14, 'KVKSS112020180910th.jpg', 'Success Stories 4', '2018-11-20', '2018-11-20 15:40:22'),
(6, 'KVKSS111920180937th0.jpg', 'Success Stories 5', '2018-11-19', '2018-11-19 16:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `qualification`, `designation`, `address`, `phone_no`, `gender`, `email`, `photo`) VALUES
(2, 'Bhabanada Baruah', 'MCA', 'Director', 'Narengi', '9864188777', 'Male', 'bob@gmail.com', ''),
(3, 'Swarup Dey', 'MCA', 'Programmer', 'Narengi', '9706498575', 'Male', 'swarup22@gmail.com', ''),
(5, 'Omuk', 'MBA', 'Accountant', 'Nagaland', '7543895643', 'Male', 'omuk@gmail.com', 'PHOTO101120181205th.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `technicalbook`
--

CREATE TABLE IF NOT EXISTS `technicalbook` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `technicalbook`
--

INSERT INTO `technicalbook` (`slno`, `heading`, `doc_file`, `date`, `login`) VALUES
(2, 'rt5e5e', 'TECHBOOK101320180955th.pdf', '2018-10-13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `trainingactivities`
--

CREATE TABLE IF NOT EXISTS `trainingactivities` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `discipline` varchar(50) NOT NULL,
  `training` text NOT NULL,
  `doc_file` varchar(40) NOT NULL,
  `activity_date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `trainingactivities`
--

INSERT INTO `trainingactivities` (`slno`, `discipline`, `training`, `doc_file`, `activity_date`, `datetime`, `login`) VALUES
(1, 'Agronomy', 'bkj', 'TRAIN101220180438th.jpg', '2018-10-12', '2018-10-12 16:38:26', 'admin'),
(4, 'Agronomy', 'Harnessing conventional and modern scientific knowledge, tools, and cutting-edge of science for development of improved crop varieties/hybrids suited to diverse agro-ecologies and situations, and efficient, economic, eco-friendly and sustainable crop production and protection technologies; promoting excellence in basic, strategic and anticipatory crop science research', '', '2018-10-13', '2018-10-13 15:14:58', 'admin'),
(5, 'Agronomy', 'For the first time, successfully employed molecular marker assisted selection/pyramiding and backcross transfer of ''xa13 , and ''Xa21 , genes from IRBB 55 in the genetic background of Pusa Basmati 1; thus developed bacterial blast resistant variety Improved Pusa Basmati 1', '', '2018-10-13', '2018-10-13 21:29:22', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `upcomingactivities`
--

CREATE TABLE IF NOT EXISTS `upcomingactivities` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `discipline` varchar(50) NOT NULL,
  `activity` varchar(40) NOT NULL,
  `doc_file` varchar(40) NOT NULL,
  `activity_date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `upcomingactivities`
--

INSERT INTO `upcomingactivities` (`slno`, `discipline`, `activity`, `doc_file`, `activity_date`, `datetime`, `login`) VALUES
(1, 'Agronomy', 'misc', 'UPAC101220180430th.rar', '2018-10-13', '2018-10-12 16:30:56', 'admin'),
(2, 'Animal Science', 'gfutf', 'UPAC101220180431th.jpg', '2018-10-11', '2018-10-12 16:31:29', 'admin'),
(5, 'Agronomy', 'jvjhvjhvjh', '', '2018-10-13', '2018-10-13 23:05:48', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `video` text NOT NULL,
  `remarks` text NOT NULL,
  `date` date NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`slno`, `video`, `remarks`, `date`, `login`) VALUES
(1, 'https://www.youtube.com/watch?v=9g5knnlF7Zo', 'Disney Alladin', '2018-10-13', 'admin'),
(3, 'https://www.youtube.com/watch?v=aQch7s56BQI', 'Tom & Jerry', '2018-10-11', 'admin'),
(4, 'https://www.youtube.com/watch?v=ZGUfdMukaZc', 'Aus Vs Sa', '2018-10-14', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `zoneannualreport`
--

CREATE TABLE IF NOT EXISTS `zoneannualreport` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `doc_file` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `login` varchar(60) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `zoneannualreport`
--

INSERT INTO `zoneannualreport` (`slno`, `year`, `doc_file`, `remarks`, `date`, `datetime`, `login`) VALUES
(3, 2018, '', 'DARE-ICAR Annual Report 2017-18', '2018-10-13', '2018-10-13 20:15:35', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
