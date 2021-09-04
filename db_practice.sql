-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 09:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_practice`
--

CREATE TABLE `tb_practice` (
  `i` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_practice`
--

INSERT INTO `tb_practice` (`i`, `id`, `name`, `email`) VALUES
(13, 0, '', ''),
(3, 1, 'one', 'one@gmail.com'),
(2, 2, 'two', 'two@gmail.com'),
(4, 3, 'three', 'three@gmail.com'),
(5, 4, 'four', 'four@gmail.com'),
(12, 7, 'qat', 'ch'),
(10, 123, 'ert', 'afg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_st`
--

CREATE TABLE `tb_st` (
  `sid` varchar(10) NOT NULL,
  `sname` text NOT NULL,
  `scontact` int(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_st`
--

INSERT INTO `tb_st` (`sid`, `sname`, `scontact`, `address`) VALUES
('1', 'adc', 36, 'dfs'),
('2', 'gbdx', 324, 'dsg'),
('3', 'xchbdfx', 4225, 'fg'),
('5', 'cgdf', 3245, 'shg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_practice`
--
ALTER TABLE `tb_practice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `i` (`i`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_practice`
--
ALTER TABLE `tb_practice`
  MODIFY `i` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
