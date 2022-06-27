-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2022 at 04:16 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ouruniverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_student_record`
--

CREATE TABLE IF NOT EXISTS `add_student_record` (
  `sid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(16) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_student_record`
--

