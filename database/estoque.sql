-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:53797
-- Generation Time: Sep 12, 2021 at 06:49 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `dt_vencimento` date DEFAULT NULL,
  `corredor` varchar(100) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estoque`
--

INSERT INTO `estoque` (`id`, `nome`, `quantidade`, `categoria`, `dt_vencimento`, `corredor`, `preco`) VALUES
(5, 'VICTOR FERNANDO MAGALHAES VASCONCELOS', -1, '1234', '2021-09-15', 'l9', 3000),
(6, 'arroz', 1, 'Alimentos', '2021-10-07', '4', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
