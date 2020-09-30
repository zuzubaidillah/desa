-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 05:27 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `do`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` text NOT NULL,
  `kategori` text NOT NULL,
  `jenis` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `keterangan`, `gambar`, `tanggal`, `lokasi`, `kategori`, `jenis`) VALUES
(141, '', '', '5bd2ff2907fac.png', '2018-10-26', 'gambar/slide/5bd2ff2907fac.png', 'slide', 'slide'),
(142, '', '', '5bd2ff21713d9.png', '2018-10-26', 'gambar/slide/5bd2ff21713d9.png', 'slide', 'slide'),
(143, '', '', '5bc7ebd33315a.png', '2018-10-18', 'gambar/slide/5bc7ebd33315a.png', 'slide', 'slide'),
(144, '', '', '5bc7ebdb029c0.png', '2018-10-18', 'gambar/slide/5bc7ebdb029c0.png', 'slide', 'slide'),
(145, '', '', '5bc7ebe234454.png', '2018-10-18', 'gambar/slide/5bc7ebe234454.png', 'slide', 'slide');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `session` int(11) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`session`, `waktu`) VALUES
(1, '600'),
(2, '600');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `idposting` int(11) NOT NULL,
  `jenisposting` int(5) NOT NULL,
  `idsub` int(5) NOT NULL,
  `judulposting` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(6) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id_statistik` int(11) NOT NULL,
  `ip` text NOT NULL,
  `os` text NOT NULL,
  `browser` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id_submenu` int(5) NOT NULL,
  `id_menu` int(5) NOT NULL,
  `jenis` int(2) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link` varchar(50) NOT NULL,
  `urutan` int(3) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tampil`
--

CREATE TABLE `tampil` (
  `id_tampil` int(1) NOT NULL,
  `titel` varchar(35) NOT NULL,
  `tahun` int(11) NOT NULL,
  `suka` int(11) NOT NULL,
  `tidak` int(11) NOT NULL,
  `notelpon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `fb` varchar(111) NOT NULL,
  `ig` varchar(55) NOT NULL,
  `yt` varchar(55) NOT NULL,
  `linkfb` varchar(555) NOT NULL,
  `linkig` varchar(555) NOT NULL,
  `linkyt` varchar(555) NOT NULL,
  `wmatas` varchar(55) NOT NULL,
  `wbredup` varchar(55) NOT NULL,
  `whredup` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tampil`
--

INSERT INTO `tampil` (`id_tampil`, `titel`, `tahun`, `suka`, `tidak`, `notelpon`, `email`, `info`, `fb`, `ig`, `yt`, `linkfb`, `linkig`, `linkyt`, `wmatas`, `wbredup`, `whredup`) VALUES
(1, 'Web Site Resmi Desa Tebel', 2018, 0, 0, '0', 'j@asd', '<p><span style=\"color: #ffffff;\">Madrasatul Qur\'an :</span></p>', 'Belum ada', 'Belum ada', 'Belum ada', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.youtube.com', '#119ade', '#188bc4', '#0c3e56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `job` varchar(50) NOT NULL,
  `lp` varchar(25) NOT NULL,
  `level` int(5) NOT NULL,
  `foto` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urutan` int(3) NOT NULL,
  `created` int(11) NOT NULL,
  `bagian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `job`, `lp`, `level`, `foto`, `username`, `password`, `urutan`, `created`, `bagian`) VALUES
(1, 'admin', 'duson larangan ds.tebel', 'sekdes', 'Laki - Laki', 1, '', 'admin01', '$2y$10$DybPkkC3lburAJA4.0KlXu7IrEMf65qxpSykF6JRlZx.L657XfSEy', 0, 12, 'admin'),
(2, 'staf', 'tebel', 'staf', 'Laki - Laki', 1, '', 'zuzz', '$2y$10$cNCuoGmZcb0ggmCVD0wfq.eOp5E7Wu1fM.c1JkUV32ZRlmVeFU3G6', 0, 12, 'staf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`session`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`idposting`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- Indexes for table `tampil`
--
ALTER TABLE `tampil`
  ADD PRIMARY KEY (`id_tampil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `session` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `idposting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id_submenu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `tampil`
--
ALTER TABLE `tampil`
  MODIFY `id_tampil` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
