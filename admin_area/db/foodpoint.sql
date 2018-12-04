-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 11:24 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `image`, `email`, `password`, `date`) VALUES
(1, 'Mirza Mamoon Baig', '', 'mamoon@yahoo.com', '5d41402abc4b2a76b9719d911017c592', '2017-05-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `day` varchar(50) NOT NULL,
  `people` varchar(50) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `address`, `day`, `people`, `timing`, `date`) VALUES
(2, 'mamoon', 'mamoon@yahoo.com', '03162200308', 'a-175', '05/17/2017', '4', 'dinner', '2017-05-05 10:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `delifood`
--

CREATE TABLE IF NOT EXISTS `delifood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `foodn` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `delifood`
--

INSERT INTO `delifood` (`id`, `image`, `foodn`, `price`, `desc`, `date`) VALUES
(2, 'g1.jpg', 'Zinger Burger', '150', 'Taste Burger', '2017-05-05 13:56:17'),
(3, 'g6.jpg', 'Pizza', '999', 'vIp', '2017-05-05 14:05:54'),
(5, 'g3.jpg', 'Special Pizza', '1499', 'Lorem ipsum dolor sit amet, consectetur adipi est Itaque', '2017-05-05 14:20:49'),
(6, 'g5.jpg', 'Sikh Kabab', '170', 'Lorem ipsum dolor sit amet, consectetur adipi est Itaque', '2017-05-05 14:21:15'),
(7, 'g2.jpg', 'Fish Fry', '300', 'Lorem ipsum dolor sit amet, consectetur adipi est Itaque', '2017-05-05 14:21:35'),
(8, 'img3.jpg', 'Chicken Roast', '180', 'Lorem ipsum dolor sit amet, consectetur adipi est Itaque', '2017-05-05 14:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `specialfood`
--

CREATE TABLE IF NOT EXISTS `specialfood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `foodn` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `specialfood`
--

INSERT INTO `specialfood` (`id`, `image`, `foodn`, `price`, `desc`, `date`) VALUES
(2, 'm3.jpg', 'Sikh', '70', 'Lorem Ipsum is simply dummy text of the printing.', '2017-05-05 02:31:34'),
(4, 'm4.jpg', 'Sikh Kabab', '60', 'Lorem Ipsum is simply dummy text of the printing.', '2017-05-05 02:33:17'),
(6, 'm5.jpg', 'Special Kabab', '120', 'Lorem Ipsum is simply dummy text of the printing.', '2017-05-05 02:36:46'),
(7, 'm2.jpg', 'Chicken Roast', '150', 'Lorem Ipsum is simply dummy text of the printing.', '2017-05-05 02:37:18'),
(8, 'm3.jpg', 'Hot Dog', '130', 'Lorem Ipsum is simply dummy text of the printing.', '2017-05-05 02:38:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
