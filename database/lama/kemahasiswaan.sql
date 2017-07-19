-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jul 2017 pada 01.38
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

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
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'ifa', 'ifa123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(30) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `program_studi`, `tgl_lahir`, `jk`) VALUES
(1341180035, 'Dessy Susanti', 'Teknik Informatika', '1995-12-31', 'perempuan'),
(1341180043, 'Rahmad Jibril', 'Teknik Informatika', '0000-00-00', 'laki-laki'),
(1341180072, 'Aditya Dwi Wardhana', 'Teknik Informatika', '0000-00-00', 'laki-laki'),
(1341180105, 'Sharfina Mahdiya Anisah', 'Teknik Informatika', '0000-00-00', 'perempuan'),
(1341180114, 'Achmad Asa Niswara P.', 'Teknik Informatika', '0000-00-00', 'laki-laki'),
(1341180119, 'Meilinda Ika Z', 'Teknik Informatika', '0000-00-00', 'perempuan'),
(1431140009, 'Riski Anugrah Putra', 'Manajemen Informatika', '0000-00-00', 'laki-laki'),
(1431140034, 'Ilham Akbar', 'Manajemen Informatika', '0000-00-00', 'laki-laki'),
(1431140085, 'Mahrus Ali', 'Manajemen Informatika', '0000-00-00', 'laki-laki'),
(1431140140, 'Citra Adi Negara', 'Manajemen Informatika', '0000-00-00', 'perempuan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
