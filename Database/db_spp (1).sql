-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 02:30 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_anggota` varchar(35) NOT NULL,
  `level` enum('admin','walikelas','','') NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `password`, `nama_anggota`, `level`) VALUES
(1, 'admin', 'admin', 'agil saputra', 'admin'),
(11, 'bima', '123', 'bimantoro', 'walikelas'),
(12, 'agil aja', '123', 'agil agil', 'admin'),
(13, 'pecok', '123', 'pecok gaul', 'walikelas'),
(16, 'aku', '123', 'Pak beni', 'walikelas');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(2, 'TKJ', 'Teknik Komputer dan Jaringan'),
(4, 'TAV', 'Teknik Audio Video'),
(5, 'TGB', 'Teknik Gambar Bangunan'),
(6, 'RPL', 'Rekayasa Perangkat Lunak'),
(7, 'TKR', 'Teknik Kendaraan Ringan'),
(8, 'KKBT', 'Kriya Batik dan Tekstil'),
(9, 'TP', 'Teknik Permesinan'),
(10, 'Lintrik', 'Teknik Listrik');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `bulan_dibayar` varchar(10) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_anggota`, `nisn`, `tanggal_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
(40, 8, '2210', '2024-01-09', '2', '2024', 100000, 200000),
(44, 9, '2210115263', '2024-01-09', '4', '2012', 120000, 480000),
(45, 1, '220271', '2024-01-09', '3', '2024', 90000, 270000),
(46, 0, '2210', '2024-01-09', '5', '2024', 90000, 450000),
(47, 0, '2010123', '2024-01-09', '1', '2024', 100000, 100000),
(48, 12, '2010123', '2024-01-09', '1', '2024', 100000, 100000),
(49, 1, '2210', '2024-01-09', '3', '2023', 120000, 360000),
(50, 1, '1166', '2024-01-11', '10', '2024', 100000, 1000000),
(51, 11, '1156', '2024-01-16', '2', '2024', 100000, 200000),
(52, 11, '220271', '2024-01-16', '4', '2024', 120000, 480000),
(53, 1, '09887', '2024-01-16', '1', '2024', 120000, 120000),
(54, 1, '09986', '2024-01-16', '3', '2012', 5, 15),
(55, 1, '09986', '2024-01-16', '3', '2024', 100000, 300000),
(56, 11, '112432', '2024-01-23', '3', '2024', 90000, 270000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_spp`
--

CREATE TABLE IF NOT EXISTS `pembayaran_spp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_pembayaran` decimal(10,0) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pembayaran_spp`
--

INSERT INTO `pembayaran_spp` (`id`, `id_siswa`, `bulan`, `tahun`, `jumlah_pembayaran`, `tanggal_pembayaran`) VALUES
(1, 0, '', 0, '0', '2024-01-08'),
(2, 12, 'oktober', 2024, '100000', '2024-01-08'),
(3, 12, 'oktober', 2024, '100000', '2024-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('09887', '124', 'Miftahul Khair', 4, 'Lintau', '0822393', 6),
('09986', '125', 'Karel', 2, 'Padang', '0822389', 5),
('09988', '123', 'Reyhan Maulana', 10, 'Bukit Tinggi', '08224567', 7),
('11223', '113', 'AL HAFIZ', 2, 'padang barat', '082824', 0),
('112245', '4523', 'Bima', 5, 'Lumin', '09887', 0),
('112432', '11334', 'gilang', 5, 'padang bb', '0828253', 0),
('1166', '12', 'pecok', 2, 'lubuk basung', '8834', 0),
('2010123', '1122', 'akbar', 6, 'padang barat', '082822', 6),
('220271', '181002', 'Ervan Maulana', 6, 'Banda Buat Padang', '0822999', 0),
('2210', '181003', 'udinn', 2, 'padang barat', '08282', 5),
('2210115263', '181002', 'Agil Saputra', 2, 'Lintau Buo Utara Lubuk Jantan', '082288441637', 4);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE IF NOT EXISTS `spp` (
  `id_spp` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  PRIMARY KEY (`id_spp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(5, 2024, 100000),
(6, 2024, 120000),
(7, 2023, 90000);
