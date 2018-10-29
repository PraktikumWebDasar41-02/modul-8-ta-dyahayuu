-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 04:58 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-ta8`
--

-- --------------------------------------------------------

--
-- Table structure for table `dyahayu`
--

CREATE TABLE `dyahayu` (
  `nama` varchar(30) NOT NULL,
  `nim` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `wisata` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dyahayu`
--

INSERT INTO `dyahayu` (`nama`, `nim`, `kelas`, `hobi`, `genre`, `wisata`, `tgl`, `email`) VALUES
('Dyah Ayu', 2147483647, 'D3SI-41-02', 'Minum, Makan', 'romance', 'Lombok', '2018-10-30', 'ayu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('ayu', 'ayu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dyahayu`
--
ALTER TABLE `dyahayu`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
