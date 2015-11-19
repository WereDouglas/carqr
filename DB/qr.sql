-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2015 at 02:31 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qr`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact` text,
  `numberplate` varchar(50) DEFAULT NULL,
  `chasis` varchar(50) DEFAULT NULL,
  `fuel` varchar(50) DEFAULT NULL,
  `engine` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `information` varchar(50) DEFAULT NULL,
  `created` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `contact`, `numberplate`, `chasis`, `fuel`, `engine`, `weight`, `information`, `created`) VALUES
(1, '0772503693', 'UZU242F', 'BF-23457', 'Diesel', '2.8', '1.3tonnes', 'Mr.Were From Busia', '2015-11-19'),
(2, '0782481746', 'UAV428X', 'BF234UIS', 'Petrol', '1.99', '1.3tonnes', 'Douglas Were Dont touch my car', '2015-11-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
