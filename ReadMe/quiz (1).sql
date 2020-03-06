-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 04:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `optiona` varchar(255) NOT NULL,
  `optionb` varchar(255) NOT NULL,
  `optionc` varchar(255) NOT NULL,
  `optiond` varchar(255) NOT NULL,
  `answer` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `optiona`, `optionb`, `optionc`, `optiond`, `answer`) VALUES
(1, 'What is PHP??', 'Personal Home Page', 'People Home Page', 'POll Home Page', 'Public Home Page', 1),
(2, 'What is CSS ??', 'Cascading Style Sheet', 'Cycle Style Sheet', 'Circular style Sheet', 'Cool Style Sheet', 1),
(3, 'What is ML ??', 'Mechanical Engineering', 'Machine Learning', 'Mechanical Learning', 'Main Learning', 2),
(4, 'What is IoT ?? ', 'Internal Of Things', 'Induvidual Of Thing', 'Insert Of Thing', 'Internet OF Thing', 4),
(5, 'How apply comment in PHP??', '/*        */', '/*', '//', '*/', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
