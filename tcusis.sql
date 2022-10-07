-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 07:11 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcusis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbm_students`
--

CREATE TABLE `cbm_students` (
  `id` int(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `midname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenum` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbm_students`
--

INSERT INTO `cbm_students` (`id`, `year`, `academic_year`, `lastname`, `firstname`, `midname`, `address`, `birthdate`, `email`, `mobilenum`, `gender`, `nationality`, `course`, `status`, `password`) VALUES
(0, '', '', 'sison', 'sison', '', '', '0000-00-00', '', 0, '', '', '', '', ''),
(0, '', '', 'sison', 'Sarah', '', '', '0000-00-00', '', 0, '', '', '', '', ''),
(0, '', '', 'sison', 'Sarah', '', '', '0000-00-00', '', 0, '', '', '', '', ''),
(19, '2nd', '20-21', 'Sison', 'Sarah', 'Lim', '120P MLQ', '2001-01-20', 'srls@gmail.com', 2147483647, 'others', 'Filipino', 'BSCS', 'Single', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
