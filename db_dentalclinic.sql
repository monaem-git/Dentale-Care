-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 08:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_dentalclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_date` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `staff` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `notes` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_phone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `registration_date`, `country`, `city`, `service`, `staff`, `appointment_date`, `appointment_time`, `notes`, `firstName`, `lastName`, `gender`, `client_email`, `client_phone`) VALUES
(1, '2016-08-31', 'Tunisia', 'medenine', 'extractionsTeeth', 'AMIR LAHWEL', '2016-09-01', '10:00:00', 'thank u doctor', 'omar', 'gzayel', 'male', 'gzayel.monaem@gmail.com', 58164898),
(3, '2016-08-31', 'Tunisia', 'medenine', 'consultation', 'SERINE BEN AMMAR', '2016-09-01', '10:30:00', '\r\n\r\n', 'serine', 'liouene', 'female', 'serine1994@gmail.com', 22445897),
(4, '2016-09-04', 'Afrique central ', 'chdhdh', 'rootCanal', 'MONTASSER JAMAII', '2016-09-30', '10:11:00', '', 'morsi', 'mallek', 'male', 'morsi1995@gmail.com', 21546987),
(5, '2016-09-04', 'Tunisia', 'gassrine', 'consultation', 'RANIA SDIRI', '2016-09-15', '14:00:00', '', 'Ridha', 'Gzayel', 'male', 'ridha.1988@gmail.com', 52006207),
(6, '2016-09-04', 'Tunisia', 'tunis', 'extractionsTeeth', 'AMIR LAHWEL', '2016-09-21', '14:00:00', 'u', 'med mansour', 'ghorbel', 'male', 'med@gmail.com', 21458746);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `adress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `profilePhoto` varchar(255) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `firstName`, `lastName`, `sexe`, `birthday`, `adress`, `email`, `phoneNumber`, `password`, `notes`, `profilePhoto`, `created`) VALUES
(1, 'Admin', 'root', '', '0000-00-00', 'medenine', 'root@admin.com', '58618073', '7e03c9685ae72508a037ed250ed311d4', 'hello world', '8skdhkss785slls2354711ssmsms.png', '0000-00-00'),
(19, 'omar', 'Gzayel', 'male', '1994-02-02', 'medenine', 'omar.gzayel@gmail.com', '51248758', 'fde8aec7983ecf022b6e6d53c2f132d4', '', '9e3289a856ae796de3b50ba59af46514.png', '2016-08-21'),
(20, 'Ridha', 'Gzayel', 'male', '1988-05-12', 'gassrine', 'ridha.1988@gmail.com', '52006207', '20e60e784410d4eaaded1c58a23d0d7a', '', '426f0e4b571748e351fe20b0dcd272a0.png', '2016-08-21'),
(25, 'morsi', 'mallek', 'male', '1995-12-01', 'sfax', 'morsi1995@gmail.com', '21546987', 'b640b591dff1c9036e4e0f80f8eeca02', '', '2a48b9dffc23017342458650524fe491.png', '2016-09-02'),
(26, 'oussama', 'kallel', 'male', '1994-05-05', 'sfax', 'oussama@gmail.com', '24578965', '0d8f0df0eb9f55184c584d4f4d1ec37f', '', '45cc059dfb0b010077b209a8331325d2.png', '2016-09-03'),
(27, 'med mansour', 'ghorbel', 'male', '1994-07-02', 'mourouj', 'med@gmail.com', '21458746', '071fddf74e9e4fd9a938c5b6f16e07ba', '', '9651aa74b298f10501953e2369fb3f7c.png', '2016-09-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
