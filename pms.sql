-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2016 at 05:46 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `idadmins` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(122) NOT NULL,
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`idadmins`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`idadmins`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$7FtETUEgG6Ek7cCIhyWFi.gORwHHsBZd8iOyx01W7DCxrznWi7DCG'),
(4, 'zooboole', '$2y$10$9h6JeQeNtYZveJCP3WZxCuOrLHyWkG13QNUwGxD3pK8uuMjg0zQ3q'),
(5, 'test', '$2y$10$GfgnuFFAqWYZzR3Pirlwa.jKMVdqeCSweDdT3oeWiFrWQPoVUCXmS'),
(6, 'aaaa', '$2y$10$9sF6uSSvIy7id8iGldLe6.S7CeGzpCKcv8sl.bsIXyg1e/.S21pVe');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_expires_on` date NOT NULL,
  `product_description` text NOT NULL,
  `created_on` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_expires_on`, `product_description`, `created_on`) VALUES
(7, 'Autralian Mangoes', 42.99, '2016-04-30', 'Installing Slim 3 through composer will install all its dependencies, when doing a PHP file count you will notice we have doubled in file count. This is a given with the amount of flexibility we now have. Most developers might not see any benefit in this as they will likely just work with what is provided, but if at any point you should hit a limitation in any working part of the framework, you can easily swap it out without a fuss.', '1457798455');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
