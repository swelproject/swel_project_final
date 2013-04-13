-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2013 at 07:57 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `market2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE IF NOT EXISTS `blog_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`) VALUES
(1, 'كتب'),
(2, 'مقالت دينية');

-- --------------------------------------------------------

--
-- Table structure for table `blog_sub_categ`
--

CREATE TABLE IF NOT EXISTS `blog_sub_categ` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `b_c_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sub_categ_2` (`b_c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog_sub_categ`
--

INSERT INTO `blog_sub_categ` (`id`, `name`, `b_c_id`) VALUES
(1, 'اخوان', 1),
(3, 'مرشد', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(450) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(13, 'مبيعات'),
(14, 'مشتريات'),
(15, 'خدمات ألكترونيه'),
(16, 'ادوات منزلية'),
(22, 'ادوات منزلية'),
(23, 'مؤمن'),
(24, 'كتب'),
(25, 'زيارات');

-- --------------------------------------------------------

--
-- Table structure for table `civou`
--

CREATE TABLE IF NOT EXISTS `civou` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(450) NOT NULL,
  `pass` varchar(453) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `civou`
--

INSERT INTO `civou` (`id`, `username`, `pass`) VALUES
(1, 'civou', 'ab7bdb533b18fcccf72ca2379b556923');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(950) NOT NULL,
  `pass` varchar(950) NOT NULL,
  `name` varchar(950) NOT NULL,
  `phone` varchar(950) DEFAULT NULL,
  `email` varchar(950) DEFAULT NULL,
  `rate_up` varchar(950) DEFAULT NULL,
  `rate_down` varchar(950) DEFAULT NULL,
  `num_success` varchar(950) DEFAULT NULL,
  `num_failed` varchar(950) DEFAULT NULL,
  `note` varchar(950) DEFAULT NULL,
  `c_id` int(10) unsigned DEFAULT NULL,
  `sc_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_employee_1` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `external`
--

CREATE TABLE IF NOT EXISTS `external` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(950) NOT NULL,
  `price` varchar(450) NOT NULL,
  `ser_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_external_1` (`ser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `s_id` int(10) unsigned DEFAULT NULL,
  `u_id` int(10) unsigned DEFAULT NULL,
  `e_id` int(10) unsigned DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `duration` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_order_1` (`s_id`),
  KEY `FK_order_2` (`u_id`),
  KEY `FK_order_3` (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `s_id`, `u_id`, `e_id`, `start`, `end`, `duration`) VALUES
(1, 20, 10, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(950) NOT NULL,
  `price_point` varchar(950) NOT NULL,
  `detail` varchar(950) NOT NULL,
  `photo_name` varchar(950) DEFAULT NULL,
  `instruction` varchar(950) DEFAULT NULL,
  `rate_up` varchar(950) DEFAULT NULL,
  `rate_down` varchar(950) DEFAULT NULL,
  `tags` varchar(950) DEFAULT NULL,
  `c_id` int(10) unsigned NOT NULL,
  `sc_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_service_1` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `price_point`, `detail`, `photo_name`, `instruction`, `rate_up`, `rate_down`, `tags`, `c_id`, `sc_id`) VALUES
(18, '100 يوزر ف اليوم', '500', '100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم\r\n100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم', '221.png', '100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم\r\n100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم\r\n100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم', NULL, NULL, NULL, 15, 19),
(19, '100 يوزر ف اليوم', '500', '100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم\r\n100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم', '2211.png', '100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم\r\n100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم\r\n100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم', NULL, NULL, NULL, 15, 19),
(20, '100 يوزر ف اليوم', '500', '100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم\r\n100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم', '2212.png', '100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم\r\n100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم\r\n100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم100 يوزر ف اليوم', NULL, NULL, NULL, 15, 19),
(21, 'ولاعه', '2300', 'ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه', '549200_429971077081095_805434467_n.jpg', 'ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه', NULL, NULL, NULL, 13, 18),
(22, 'ولاعه', '2300', 'ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه', '549200_429971077081095_805434467_n1.jpg', 'ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه', NULL, NULL, NULL, 13, 18),
(23, 'ولاعه', '2300', 'ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه', '549200_429971077081095_805434467_n2.jpg', 'ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه', NULL, NULL, NULL, 13, 18),
(24, 'ولاعه', '2300', 'ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه', '549200_429971077081095_805434467_n3.jpg', 'ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه \r\nولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه ولاعه', NULL, NULL, NULL, 13, 18),
(25, 'بيع منازل', '2300', 'بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل', 'logo.png', 'بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل', NULL, NULL, NULL, 13, 18),
(26, 'بيع منازل', '2300', 'بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل', 'logo1.png', 'بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل\r\n بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل بيع منازل', NULL, NULL, NULL, 13, 18),
(27, 'موبيل', '958', 'موبيل موبيل موبيل موبيل موبيل موبيل موبيل \r\nموبيل موبيل موبيل موبيل موبيل موبيل موبيل \r\nموبيل موبيل موبيل موبيل موبيل موبيل موبيل \r\nموبيل موبيل موبيل موبيل موبيل موبيل موبيل \r\nموبيل موبيل موبيل موبيل موبيل موبيل موبيل', '10.PNG', 'موبيل موبيل موبيل موبيل موبيل موبيل موبيل \r\nموبيل موبيل موبيل موبيل موبيل موبيل موبيل \r\nموبيل موبيل موبيل موبيل موبيل موبيل موبيل \r\nموبيل موبيل موبيل موبيل موبيل موبيل موبيل \r\nموبيل موبيل موبيل موبيل موبيل موبيل موبيل', NULL, NULL, NULL, 14, 0),
(28, 'بيع منازل', '0545', 'تايبنصاتنبصاشكمنهخاثصنتاثنتانسايق\r\nسنتنمتنستثنتنمس', '3.PNG', 'اناهعغعثقهصغخهعفه\r\nصثتاعثصغهعغثقصه', NULL, NULL, NULL, 23, 20),
(29, 'l;k;lk', '625', 'kljkljlkjkjkljkljikj', 'DSCF0219.JPG', 'kjkljk;lk86', NULL, NULL, NULL, 13, 18);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categ`
--

CREATE TABLE IF NOT EXISTS `sub_categ` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(450) NOT NULL,
  `c_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sub_categ_1` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `sub_categ`
--

INSERT INTO `sub_categ` (`id`, `name`, `c_id`) VALUES
(17, 'محمد', 13),
(18, 'لعب اطفال', 13),
(19, 'تسويق ألكترونى', 15),
(20, 'سعاد', 23),
(21, 'منى', 23);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `t_photo_name` varchar(255) NOT NULL,
  `rate_up` int(11) NOT NULL,
  `rate_down` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `c_id`, `sc_id`, `user_id`, `title`, `content`, `t_photo_name`, `rate_up`, `rate_down`) VALUES
(3, 0, 0, 3, '????????? ???? ?? ??????? ??? ???????', '??? ?? : ???? - ?????? ??? ( ???? ?????? ) .\r\n??? ?????? ? ??????? ?????? : ??????? ? ????? ???? ??? ??? ??????? ??? ????? ? ????? ??? ?????? ?? ??? ????????? ???? ??????? !\r\n\r\n??? ??????? ??? ???? ????? ???? :\r\n1 ) ??????? ???? ??? ???? ????? ?? ??????? ? ???????? ??? ????? ??????? .. ?? ( ?????? ??? ) .\r\n2 ) ??????? ????? ????? ?? ??? ??????? ?????? ? ??? ???? ???????? ?? ???? ?? ??????? ????? ?????? ??? ????? ??? ???? ??? ???? ??????? ???????? !\r\n\r\n??? ?????? .. ???? ???? ????? ?????? ??? ?????? ? ???? ???? ???? ?????????? ? ????? ?? ?????????? ? ??? ???? ?????? ? ????? ?? ?????? ? ???? ????? ???? ???? ?????????? ??? ???? ?????? ???? ????? !\r\n\r\n???? ????? ? ??? ??????? ????????? ???? ?? ???? ??? ????? ????????? ????? ????? ?? ??? ??? ?? ? ?????? ?? ???????? ??????? ???? ?? ??????? ? ??? ?????? !\r\n????? ???? ????? ???? ??? ?? ??? ? ?????? ????? ? ?????? ???? ???? ???? ????? ???? ??????? ??? ?????? ????? !\r\n???????? ??? ????? ?????? ??????? ?????? ???? ?? ?????? !', '15910_316879175083269_1441858723_n6.jpg', 0, 0),
(4, 0, 0, 10, '??? ?? ???', '???????????????????????????????????? ? ??? ?? ?????????????????????????????? ??? ?? ??? ?? ?? ??? ??? ?? ?? ??????????? ?? ? ??? ??? ?? ? ??? ?? ????', '487411_526178754075911_1535584435_n.jpg', 0, 0),
(5, 0, 0, 10, 'sfdf  fsdfsdf', 'werewrrrrrrrrrrrrrrrrr  e wrrrrrrrrrrrrrrrrrrrrrrrrrw er werwe r wer', '523427_10150693365828484_669169220_n.jpg', 0, 0),
(6, 0, 0, 10, 'sfdf  fsdfsdf', 'werewrrrrrrrrrrrrrrrrr  e wrrrrrrrrrrrrrrrrrrrrrrrrrw er werwe r wer', '523427_10150693365828484_669169220_n1.jpg', 0, 0),
(7, 0, 0, 10, 'sfdf  fsdfsdf', 'werewrrrrrrrrrrrrrrrrr  e wrrrrrrrrrrrrrrrrrrrrrrrrrw er werwe r wer', '523427_10150693365828484_669169220_n2.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zip_code` varchar(450) NOT NULL,
  `email` varchar(450) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount_point` int(10) unsigned DEFAULT NULL,
  `amount_money` double DEFAULT NULL,
  `pincode` varchar(450) NOT NULL,
  `last_log` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(450) NOT NULL,
  `pass` varchar(950) NOT NULL,
  `phone` varchar(450) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `parent_link` varchar(500) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `zip_code`, `email`, `reg_date`, `amount_point`, `amount_money`, `pincode`, `last_log`, `username`, `pass`, `phone`, `country`, `city`, `address`, `parent_link`, `profile_pic`) VALUES
(1, '', 'malah@yahoo.com', '2013-03-03 22:32:50', NULL, NULL, '', '2013-03-02 16:57:52', 'malah', '81dc9bdb52d04dc20036dbd8313ed055', '012987878787', '????????', 'asdfs', 'kjn', 'sdfvxcv', 'default_pic.jpg'),
(2, '', 'mohamedsaad2085@yahoo.com', '2013-03-03 22:32:50', NULL, NULL, '', '2013-03-02 17:24:39', 'mohamed', '1c9c6a5272d43ad8e85470ffa0c1f07d', '010650216546', '???', '?????', '????-?????', '0', 'default_pic.jpg'),
(3, '123', 'temraz@yahoo.com', '2013-03-03 22:32:50', NULL, NULL, '', '2013-03-03 16:33:42', 'temraz', '202cb962ac59075b964b07152d234b70', '012', 'MA', 'القاهره', 'dsf', 'tet', 'gym.jpg'),
(4, '', 'temraaz@yahoo.com', '2013-03-08 03:47:36', NULL, NULL, '', '0000-00-00 00:00:00', '???? ?????', '81dc9bdb52d04dc20036dbd8313ed055', '0106186891195', '???????', 'cairo', 'm4 mohem', '123', 'default_pic.jpg'),
(5, '0', 'temraz21@yahoo.com', '2013-03-08 03:51:12', NULL, NULL, '', '0000-00-00 00:00:00', '????', '81dc9bdb52d04dc20036dbd8313ed055', '0106186891195', '???????', 'sfg,,', 'wfsdf', '1233', 'default_pic.jpg'),
(6, '0', 'rr@yahoo.com', '2013-03-08 04:01:14', NULL, NULL, '', '0000-00-00 00:00:00', 'rrr', '202cb962ac59075b964b07152d234b70', '124', 'none', '123', '123', 'wqer', 'default_pic.jpg'),
(7, '12345', 'we@yahoo.com', '2013-03-08 04:03:08', NULL, NULL, '', '0000-00-00 00:00:00', 'temraz4', '202cb962ac59075b964b07152d234b70', '123', 'DZ', '123', 'we', 'qr', '301949_313921635289170_1892217951_n.jpg'),
(8, '123', 'temraaz12@yahoo.com', '2013-03-08 06:39:50', NULL, NULL, '', '0000-00-00 00:00:00', 'تمراز', '202cb962ac59075b964b07152d234b70', '0106186891195', '????????', '12', 'wr', 'sdf', 'default_pic.jpg'),
(9, '1234', 'temo12@yahoo.com', '2013-03-08 11:38:32', NULL, NULL, '', '0000-00-00 00:00:00', 'temraz122', '202cb962ac59075b964b07152d234b70', '01061868195', 'SA', '???????', ';df;g;', 'werkn', 'default_pic.jpg'),
(10, '1234', 'gado@yahoo.com', '2013-03-12 07:58:06', 0, NULL, '', '0000-00-00 00:00:00', 'gado', '202cb962ac59075b964b07152d234b70', '01061868195', 'AE', 'cairo', 'sfgsg sg sfg', '123', '426173_535383309827367_703914136_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_chat`
--

CREATE TABLE IF NOT EXISTS `user_chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `receiv_id` int(10) unsigned NOT NULL,
  `sender_id` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `receiv_seen` varchar(45) NOT NULL,
  `sender_seen` varchar(45) NOT NULL,
  `mess_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_user_chat_1` (`receiv_id`),
  KEY `FK_user_chat_2` (`sender_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_chat`
--

INSERT INTO `user_chat` (`id`, `receiv_id`, `sender_id`, `message`, `receiv_seen`, `sender_seen`, `mess_date`) VALUES
(1, 3, 10, 'sdfsdfdsf', '0', '1', '2013-03-17 03:58:53'),
(2, 3, 10, 'dasdasd\n', '1', '1', '2013-03-17 04:36:15'),
(3, 10, 3, 'sdfsdfsdf', '0', '1', '2013-03-17 05:08:56'),
(4, 3, 10, 'تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجاناتصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا', '0', '1', '2013-03-17 05:10:09'),
(5, 10, 3, 'kooooooooooo', '0', '1', '2013-03-17 12:12:36'),
(8, 3, 10, 'hi\n', '0', '1', '2013-03-17 13:27:09'),
(9, 3, 7, 'hah', '0', '1', '2013-03-17 13:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_temp`
--

CREATE TABLE IF NOT EXISTS `user_temp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(245) NOT NULL,
  `email` varchar(245) NOT NULL,
  `country` varchar(245) NOT NULL,
  `city` varchar(245) NOT NULL,
  `address` varchar(245) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `pass` varchar(245) NOT NULL,
  `parent_link` varchar(500) NOT NULL,
  `key` varchar(500) NOT NULL,
  `zip_code` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `FK_employee_1` FOREIGN KEY (`c_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `external`
--
ALTER TABLE `external`
  ADD CONSTRAINT `FK_external_1` FOREIGN KEY (`ser_id`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_order_1` FOREIGN KEY (`s_id`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_order_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_order_3` FOREIGN KEY (`e_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_service_1` FOREIGN KEY (`c_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categ`
--
ALTER TABLE `sub_categ`
  ADD CONSTRAINT `FK_sub_categ_1` FOREIGN KEY (`c_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_chat`
--
ALTER TABLE `user_chat`
  ADD CONSTRAINT `FK_user_chat_1` FOREIGN KEY (`receiv_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_chat_2` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
