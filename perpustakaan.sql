-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2017 at 03:52 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `nim` varchar(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  `tanggal_expired` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nim`, `nama_mahasiswa`, `jurusan`, `program_studi`, `tanggal_lahir`, `tanggal_registrasi`, `tanggal_expired`, `jenis_kelamin`, `alamat`, `no_telepon`) VALUES
('1341180119', 'Ersa Rahmawati', 'Teknologi Informasi', 'Teknik Informatika', '2017-06-04', '2017-06-04', '2017-06-04', 'Perempuan', 'landungsari', '45678'),
('1341180119', 'Meilinda Ika Z', 'Teknologi Informasi', 'Teknik Informatika', '1995-05-01', '2017-06-08', '2017-06-08', 'Perempuan', 'Pakis Wetan', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bibliography`
--

CREATE TABLE IF NOT EXISTS `bibliography` (
  `id_buku` varchar(11) NOT NULL,
  `no_kategori` varchar(11) NOT NULL,
  `judul_buku` text NOT NULL,
  `pengarang_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(50) NOT NULL,
  `tahun_terbit` varchar(5) NOT NULL,
  `tempat_terbit` varchar(50) NOT NULL,
  `edisi` varchar(20) NOT NULL,
  `jumlah_eksemplar` int(5) NOT NULL,
  `jumlah_stok_buku` int(11) NOT NULL,
  `jenis_koleksi_buku` varchar(50) NOT NULL,
  `no_registrasi` int(20) NOT NULL,
  `no_acc` int(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bibliography`
--

INSERT INTO `bibliography` (`id_buku`, `no_kategori`, `judul_buku`, `pengarang_buku`, `penerbit_buku`, `tahun_terbit`, `tempat_terbit`, `edisi`, `jumlah_eksemplar`, `jumlah_stok_buku`, `jenis_koleksi_buku`, `no_registrasi`, `no_acc`, `keterangan`) VALUES
('B0007', '', '', '', '', '', '', '', 0, 0, 'Koleksi Umum', 0, 0, ''),
('B002', '', '', '', '', '', '', '', 0, 0, 'Koleksi Umum', 0, 0, ''),
('B003', '5435565', 'sgsfg', 'dfagdfg', 'sdaadsf', 'DADS', '0', '', 0, 0, 'Koleksi Tandon', 0, 0, ''),
('B004', '43325', 'fdsdsgdsg', 'safs', 'fdsgdgd', '32546', 'Malang', '1', 5, 0, '0', 32456, 435, 'okey'),
('B005', '', '', '', '', '', '', '', 0, 0, 'Koleksi Tandon', 0, 0, ''),
('ece2', '', '', '', '', '', '0', '', 0, 0, '0', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_buku`
--

CREATE TABLE IF NOT EXISTS `detail_buku` (
  `id_detail_buku` varchar(11) NOT NULL,
  `id_buku` varchar(11) NOT NULL,
  `status_pinjam_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `no_kategori` varchar(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`no_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`no_kategori`, `nama_kategori`, `deskripsi`) VALUES
('1213543546', 'asfds', 'asdfdsgdhgf			   				          ');

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE IF NOT EXISTS `koleksi` (
  `no_koleksi` varchar(5) NOT NULL,
  `nama_koleksi` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sirkulasi`
--

CREATE TABLE IF NOT EXISTS `sirkulasi` (
  `id_pinjam` varchar(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `id_buku` varchar(11) NOT NULL,
  `id_detail_buku` varchar(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_diperbarui` date NOT NULL,
  `tanggal_dikembalikan` date NOT NULL,
  `status_peminjaman` varchar(2) NOT NULL,
  PRIMARY KEY (`id_pinjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sirkulasi`
--

INSERT INTO `sirkulasi` (`id_pinjam`, `nim`, `id_buku`, `id_detail_buku`, `tanggal_pinjam`, `tanggal_kembali`, `tanggal_diperbarui`, `tanggal_dikembalikan`, `status_peminjaman`) VALUES
('P00001', '1341180119', '', '', '2017-06-09', '2017-06-09', '0000-00-00', '0000-00-00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
