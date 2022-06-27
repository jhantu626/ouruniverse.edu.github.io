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
-- Table structure for table `course_detail`
--

CREATE TABLE IF NOT EXISTS `course_detail` (
  `course_name` varchar(100) NOT NULL,
  `course_duration` varchar(50) NOT NULL,
  `course_fees` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_detail`
--

INSERT INTO `course_detail` (`course_name`, `course_duration`, `course_fees`) VALUES
('J2EE (Core Java + Advanced Java) ', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Web App Design using PHP + MySQL', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Android App Design', '3 Months', 'Rs. 3000 - Rs. 5000'),
('. NET Technologies', '3 Months', 'Rs. 3000 - Rs. 5000'),
('MEAN Stack Web Development', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Python', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Java Script', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Google Go', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Delphi', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Robotics ', '3 Months', 'Rs. 3000 - Rs. 5000'),
('R Programming', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Sage math ', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Core Java ', '3 Months', 'Rs. 3000 - Rs. 5000'),
('Digital Marketing', '6 Months', 'Rs. 10000'),
('Professional Photography', '6 Months', 'Rs. 12000'),
('Ethical Hacking & Cyber Security', '6 Months', 'Rs. 10000');
