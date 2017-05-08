-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 06:49 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bebastanggungan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `notelepon` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `alamat`, `notelepon`) VALUES
(1, 'Sharfina ', 'admin1', 'admin1', 'landungsari', 466638),
(2, 'Mahdiya', 'admin2', 'admin2', 'sengkaling', 466678);

-- --------------------------------------------------------

--
-- Table structure for table `bebastanggungan_mhs`
--

CREATE TABLE IF NOT EXISTS `bebastanggungan_mhs` (
  `nim` int(10) NOT NULL AUTO_INCREMENT,
  `id_list` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bebas_tanggungan`
--

CREATE TABLE IF NOT EXISTS `jenis_bebas_tanggungan` (
  `id_jenis` int(10) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `list_bebas_tanggungan`
--

CREATE TABLE IF NOT EXISTS `list_bebas_tanggungan` (
  `id_list` int(10) NOT NULL AUTO_INCREMENT,
  `nama_list` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_list`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
