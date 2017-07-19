-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jul 2017 pada 03.18
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

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
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `alamat`, `no_telepon`) VALUES
(1, 'ifa', 'ifa', '123456', 'malang', 123456);

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
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
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nim`, `nama_mahasiswa`, `jurusan`, `program_studi`, `tanggal_lahir`, `tanggal_registrasi`, `tanggal_expired`, `jenis_kelamin`, `alamat`, `no_telepon`) VALUES
('1341180119', 'Ersa Rahmawati', 'Teknologi Informasi', 'Teknik Informatika', '2017-06-04', '2017-06-04', '2017-06-04', 'Perempuan', 'landungsari', '45678'),
('1341180119', 'Meilinda Ika Z', 'Teknologi Informasi', 'Teknik Informatika', '1995-05-01', '2017-06-08', '2017-06-08', 'Perempuan', 'Pakis Wetan', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bibliography`
--

CREATE TABLE IF NOT EXISTS `bibliography` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `bibliography`
--

INSERT INTO `bibliography` (`id_buku`, `no_kategori`, `judul_buku`, `pengarang_buku`, `penerbit_buku`, `tahun_terbit`, `tempat_terbit`, `edisi`, `jumlah_eksemplar`, `jumlah_stok_buku`, `jenis_koleksi_buku`, `no_registrasi`, `no_acc`, `keterangan`) VALUES
(1, '1213543546', 'Ayat-ayat Cinta', 'Habiburrahman Al Shirazy', 'Gramedia Pustaka Utama', '2009', 'Jakarta', '10', 5, 5, 'Koleksi Umum', 456798, 546798, 'Oke'),
(2, '1213543546', 'New Moon', 'Stephanie Mayer', 'Gramedia Pustaka Utama', '2008', 'Jakarta', '5', 5, 10, 'Koleksi Umum', 3456, 34567, 'Oke');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_bibli`
--

CREATE TABLE IF NOT EXISTS `detail_bibli` (
  `id_detail_buku` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `status_pinjam_buku` varchar(30) NOT NULL,
  PRIMARY KEY (`id_detail_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `detail_bibli`
--

INSERT INTO `detail_bibli` (`id_detail_buku`, `id_buku`, `status_pinjam_buku`) VALUES
(1, 1, 'tersedia'),
(2, 1, 'tersedia'),
(3, 1, 'tersedia'),
(4, 1, 'tersedia'),
(5, 1, 'tersedia'),
(6, 2, 'tersedia'),
(7, 2, 'tersedia'),
(8, 2, 'tersedia'),
(9, 2, 'tersedia'),
(10, 2, 'tersedia'),
(11, 2, 'tersedia'),
(12, 2, 'tersedia'),
(13, 2, 'tersedia'),
(14, 2, 'tersedia'),
(15, 2, 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `no_kategori` varchar(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`no_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`no_kategori`, `nama_kategori`, `deskripsi`) VALUES
('1213543546', 'asfds', 'asdfdsgdhgf			   				          ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksi`
--

CREATE TABLE IF NOT EXISTS `koleksi` (
  `no_koleksi` varchar(5) NOT NULL,
  `nama_koleksi` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sirkulasi`
--

CREATE TABLE IF NOT EXISTS `sirkulasi` (
  `id_pinjam` varchar(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `id_detail_buku` varchar(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `tanggal_diperbarui` date DEFAULT NULL,
  `tanggal_dikembalikan` date DEFAULT NULL,
  `status_peminjaman` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pinjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sirkulasi`
--

INSERT INTO `sirkulasi` (`id_pinjam`, `nim`, `id_detail_buku`, `tanggal_pinjam`, `tanggal_kembali`, `tanggal_diperbarui`, `tanggal_dikembalikan`, `status_peminjaman`) VALUES
('P00001', '1341180119', '', '2017-06-09', '2017-06-09', '0000-00-00', '0000-00-00', ''),
('P00002', '1341180035', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'lunas'),
('P00003', '1341180035', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'lunas'),
('P00004', '1341180035', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'lunas'),
('P00005', '1341180035', '', '2017-07-13', NULL, NULL, NULL, 'lunas'),
('P00006', '1341180035', '', '2017-07-13', NULL, NULL, NULL, 'belum lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sirkulasi_detail`
--

CREATE TABLE IF NOT EXISTS `sirkulasi_detail` (
  `id_detail_sir` int(15) NOT NULL AUTO_INCREMENT,
  `id_sirkulasi` varchar(15) NOT NULL,
  `id_buku` varchar(15) NOT NULL,
  PRIMARY KEY (`id_detail_sir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `sirkulasi_detail`
--

INSERT INTO `sirkulasi_detail` (`id_detail_sir`, `id_sirkulasi`, `id_buku`) VALUES
(1, 'P00004', '1'),
(2, 'P00004', '2'),
(3, 'P00005', '1'),
(4, 'P00005', '2'),
(5, 'P00006', '1'),
(6, 'P00006', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
