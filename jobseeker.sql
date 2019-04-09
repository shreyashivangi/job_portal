-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 07:22 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobseeker`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `qua` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fname`, `lname`, `qua`) VALUES
('aditya@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `sq` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `uname`, `pass`, `gender`, `age`, `city`, `sq`, `ans`) VALUES
('aditya@gmail.com', 'Aditya Jha', 'abc123', 'Employee', 17, 'Delhi', 'What is ur pet name?', 'Adi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
