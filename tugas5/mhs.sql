-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 11:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `npm` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jurus` varchar(100) DEFAULT NULL,
  `fakul` varchar(100) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `alm` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`npm`, `nama`, `jurus`, `fakul`, `jk`, `alm`) VALUES
('17081010069', 'Annisa Fadhilasari', 'tek informatika', 'FIK', 'P', 'Sidoarjo'),
('17081010073', 'dina Ratna', 'tek informatika', 'FIK', 'P', 'Gresik'),
('1708101200', 'M BIMA GHOZALI', 'HUKUM', 'F. Hukum', 'L', 'Surabaya'),
('1708101201', 'M KRESNA AZIZ', 'Akutansi', 'F. Ekonomi & Bisnis', 'L', 'PONOROGO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
