-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 03:34 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kemahasiswaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `jk` varchar(30) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `program_studi`, `jk`) VALUES
(1341180035, 'Dessy Susanti', 'Teknik Informatika', 'perempuan'),
(1341180043, 'Rahmad Jibril', 'Teknik Informatika', 'laki-laki'),
(1341180072, 'Aditya Dwi Wardhana', 'Teknik Informatika', 'laki-laki'),
(1341180105, 'Sharfina Mahdiya Anisah', 'Teknik Informatika', 'perempuan'),
(1341180114, 'Achmad Asa Niswara P.', 'Teknik Informatika', 'laki-laki'),
(1341180119, 'Meilinda Ika Z', 'Teknik Informatika', 'perempuan'),
(1431140009, 'Riski Anugrah Putra', 'Manajemen Informatika', 'laki-laki'),
(1431140034, 'Ilham Akbar', 'Manajemen Informatika', 'laki-laki'),
(1431140085, 'Mahrus Ali', 'Manajemen Informatika', 'laki-laki'),
(1431140140, 'Citra Adi Negara', 'Manajemen Informatika', 'perempuan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
