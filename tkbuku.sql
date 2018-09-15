-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 06:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_buku`
--

CREATE TABLE `table_buku` (
  `id_buku` varchar(15) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `harga` int(25) NOT NULL,
  `stok` int(15) NOT NULL,
  `penerbit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_buku`
--

INSERT INTO `table_buku` (`id_buku`, `kategori`, `nama`, `pengarang`, `harga`, `stok`, `penerbit`) VALUES
('BK1001', 'Contemporary Fiction', 'Kafka On The Shore', 'Haruki Murakami', 200000, 60, 'Vintage Publishingsss'),
('BK1002', 'Contemporary Fiction', 'Norwergia Wood', 'Haruki Murakami', 180000, 60, 'Vintage Publishing'),
('BK1003', 'Contemporary Fiction', 'The Wind-Up Bird Chronicle', 'Haruki Murakami', 225000, 20, 'Vintage Publishing'),
('BK2001', 'Contemporary Fiction', 'The Alchemist', 'Paulo Ceolho', 200000, 40, 'HarperCollins Publisher I'),
('BK2002', 'Crime Fiction', 'And The There Were None', 'Agatha Christie', 140000, 40, 'HarperCollins Publisher I'),
('BK2003', 'Crime Fiction', 'Murder On The Orient Express', 'Agatha Christie', 150000, 35, 'HarperCollins Publisher I'),
('BK3001', 'Classic', 'To Kill a Mockingbird', 'Harper Lee', 345000, 20, 'Cornerstone'),
('BK3002', 'Classic', 'A Tale of Two Cities', 'Charles Dickens', 170000, 15, 'Penguin Books Ltd'),
('BK3003', 'Classic', 'Animal Farm', 'George Orwell', 160000, 20, 'Penguin Books Ltd');

-- --------------------------------------------------------

--
-- Table structure for table `table_penerit`
--

CREATE TABLE `table_penerit` (
  `id_penerbit` varchar(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `negara` varchar(25) NOT NULL,
  `kota` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_penerit`
--

INSERT INTO `table_penerit` (`id_penerbit`, `nama`, `negara`, `kota`) VALUES
('PN01', 'Vintage Publishing', 'United Kingdom', 'London'),
('PN02', 'HarperCollins Publisher Inc', 'United State', 'New York'),
('PN03', 'Cornerstone', 'United Kingdom', 'London'),
('PN04', 'Penguin Books Ltd', 'United Kingdom', 'London');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_buku`
--
ALTER TABLE `table_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `table_penerit`
--
ALTER TABLE `table_penerit`
  ADD PRIMARY KEY (`id_penerbit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
