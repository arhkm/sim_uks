-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 04:14 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_uks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuesioner`
--

CREATE TABLE `tbl_kuesioner` (
  `id_kuesioner` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `rombel` varchar(100) NOT NULL,
  `rayon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kuesioner`
--

INSERT INTO `tbl_kuesioner` (`id_kuesioner`, `nis`, `nama_lengkap`, `rombel`, `rayon`) VALUES
(34, '11605386', 'Arief Rahman Hakim ', 'RPL XI', 'Cisarua'),
(35, '11808080', 'Fitriyani', 'APK XII', 'Cisarua'),
(36, '11707089', 'Rudi', 'RPL', 'Cisarua');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `rombel` varchar(100) NOT NULL,
  `rayon` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `no_tlp` varchar(100) NOT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama_lengkap`, `rombel`, `rayon`, `keterangan`, `no_tlp`, `tgl_input`) VALUES
(11605386, 'Arief Rahman Hakim ', 'RPL XI', 'Cisarua 3', 'Sakit panas', '083804226339', '0000-00-00 00:00:00'),
(11708080, 'Kim Kurniawan', 'MMD XI', 'Sukasari', 'Demam', '081282186000', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('guru','kepsek','siswa','medis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'guru', 'guru', 'guru'),
(2, 'kepsek', 'kepsek', 'kepsek'),
(3, 'siswa', 'siswa', 'siswa'),
(4, 'medis', 'medis', 'medis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kuesioner`
--
ALTER TABLE `tbl_kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kuesioner`
--
ALTER TABLE `tbl_kuesioner`
  MODIFY `id_kuesioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
