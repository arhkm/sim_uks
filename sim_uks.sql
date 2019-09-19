-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Sep 2019 pada 02.51
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.0.18

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
-- Struktur dari tabel `tbl_detail_kuesioner`
--

CREATE TABLE `tbl_detail_kuesioner` (
  `id` int(11) NOT NULL,
  `id_kuesioner` int(11) NOT NULL,
  `kuesioner` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_kuesioner`
--

INSERT INTO `tbl_detail_kuesioner` (`id`, `id_kuesioner`, `kuesioner`) VALUES
(32, 239, '{\"tahapI\":{\"tahap\":\"I\",\"bagianA\":{\"bagian\":\"A\",\"alergi\":{\"kuesioner\":\"Ya\",\"sebutkan\":\"Bakso\"},\"obat\":{\"kuesioner\":\"Ya\",\"sebutkan\":\"Panadol\"},\"geger\":{\"kuesioner\":\"Ya\",\"sebutkan\":\"Patah hati\"},\"kejang\":\"Tidak\",\"pingsan\":\"Tidak\",\"transfusi\":\"Tidak\",\"kelainan\":{\"kuesioner\":\"Tidak\",\"sebutkan\":\"\"},\"penyakit_lainnya\":{\"kuesioner\":\"Ya\",\"sebutkan\":\"cinta berlebihan\"}},\"bagianB\":{\"bagian\":\"B\",\"catatan_imunisasi\":\"Tidak\",\"bayi\":\"Tidak\",\"kelas1SD\":\"Tidak\",\"kelas2SD\":\"Tidak\",\"kelas3SD\":\"Tidak\"},\"bagianC\":{\"bagian\":\"C\",\"tbc\":\"Tidak\",\"diabetes\":\"Tidak\",\"hepatitis\":\"Tidak\",\"asma\":\"Tidak\",\"penyakit_jantung\":\"Tidak\",\"stroke\":\"Tidak\",\"obesitas\":\"Tidak\",\"tekanan_darah\":\"Tidak\",\"kanker_tumor\":\"Tidak\",\"anemia\":\"Tidak\",\"thalasemia\":\"Tidak\",\"hemofilia\":\"Tidak\"},\"bagianD\":{\"bagian\":\"D\",\"sarapan\":\"Selalu\",\"jajan\":\"Selalu\",\"risiko_merokok\":\"Tidak\",\"risiko_minum\":\"Tidak\"},\"bagianE\":{\"bagian\":\"E\",\"pubertas\":\"Tidak\",\"risiko_ims\":\"Tidak\",\"kekerasan_seksual\":\"Tidak\",\"gangguan_menstruasi\":\"Tidak\"},\"bagianF\":{\"bagian\":\"F\",\"gejala_emosional\":\"Normal\",\"masalah_perilaku\":\"Normal\",\"hiperaktifitas\":\"Normal\",\"teman_sebaya\":\"Normal\",\"perilaku_prososial\":\"Normal\"},\"bagianG\":{\"bagian\":\"G\",\"visual\":\"Optimal\",\"audio\":\"Optimal\",\"kinestetik\":\"Optimal\",\"dominan_otak\":\"Otak Kiri\"}},\"tahapII\":{\"tahap\":\"II\",\"bagianB\":{\"bagian\":\"B\",\"berat_badan\":\"56\",\"tinggi_badan\":\"171\",\"indeks_masa_tubuh\":\"18.078512396694215\",\"kategori_imt\":\"Kurus\"}}}'),
(33, 240, '{\"tahapI\":{\"tahap\":\"I\",\"bagianA\":{\"bagian\":\"A\",\"alergi\":{\"kuesioner\":\"Tidak\",\"sebutkan\":\"\"},\"obat\":{\"kuesioner\":\"Tidak\",\"sebutkan\":\"\"},\"geger\":{\"kuesioner\":\"Tidak\",\"sebutkan\":\"\"},\"kejang\":\"Tidak\",\"pingsan\":\"Tidak\",\"transfusi\":\"Tidak\",\"kelainan\":{\"kuesioner\":\"Tidak\",\"sebutkan\":\"\"},\"penyakit_lainnya\":{\"kuesioner\":\"Tidak\",\"sebutkan\":\"\"}},\"bagianB\":{\"bagian\":\"B\",\"catatan_imunisasi\":\"Tidak\",\"bayi\":\"Tidak\",\"kelas1SD\":\"Tidak\",\"kelas2SD\":\"Tidak\",\"kelas3SD\":\"Tidak\"},\"bagianC\":{\"bagian\":\"C\",\"tbc\":\"Tidak\",\"diabetes\":\"Tidak\",\"hepatitis\":\"Tidak\",\"asma\":\"Tidak\",\"penyakit_jantung\":\"Tidak\",\"stroke\":\"Tidak\",\"obesitas\":\"Tidak\",\"tekanan_darah\":\"Tidak\",\"kanker_tumor\":\"Tidak\",\"anemia\":\"Tidak\",\"thalasemia\":\"Tidak\",\"hemofilia\":\"Tidak\"},\"bagianD\":{\"bagian\":\"D\",\"sarapan\":\"Selalu\",\"jajan\":\"Selalu\",\"risiko_merokok\":\"Tidak\",\"risiko_minum\":\"Tidak\"},\"bagianE\":{\"bagian\":\"E\",\"pubertas\":\"Tidak\",\"risiko_ims\":\"Tidak\",\"kekerasan_seksual\":\"Tidak\",\"gangguan_menstruasi\":\"Tidak\"},\"bagianF\":{\"bagian\":\"F\",\"gejala_emosional\":\"Normal\",\"masalah_perilaku\":\"Normal\",\"hiperaktifitas\":\"Normal\",\"teman_sebaya\":\"Normal\",\"perilaku_prososial\":\"Normal\"},\"bagianG\":{\"bagian\":\"G\",\"visual\":\"Optimal\",\"audio\":\"Optimal\",\"kinestetik\":\"Optimal\",\"dominan_otak\":\"Otak Kiri\"}},\"tahapII\":{\"tahap\":\"II\",\"bagianB\":{\"bagian\":\"B\",\"berat_badan\":\"78\",\"tinggi_badan\":\"188\",\"indeks_masa_tubuh\":\"22.068809416025353\",\"kategori_imt\":\"Normal\"}}}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kuesioner`
--

CREATE TABLE `tbl_kuesioner` (
  `id_kuesioner` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `rombel` varchar(100) NOT NULL,
  `rayon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kuesioner`
--

INSERT INTO `tbl_kuesioner` (`id_kuesioner`, `nis`, `nama_lengkap`, `rombel`, `rayon`) VALUES
(34, '11605386', 'Arief Rahman Hakim ', 'RPL XI', 'Cisarua'),
(35, '11808080', 'Fitriyani', 'APK XII', 'Cisarua'),
(36, '11707089', 'Rudi', 'RPL', 'Cisarua'),
(239, '11505006', 'Muhamad Al Fahasyim', 'RPL', 'Cicurug'),
(240, '11505050', 'basri', 'wkwk', 'wkwk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kuesioner_detail`
--

CREATE TABLE `tbl_kuesioner_detail` (
  `id` int(11) NOT NULL,
  `id_kuesioner` int(11) NOT NULL,
  `tahap` varchar(5) NOT NULL,
  `bagian` varchar(1) NOT NULL,
  `kuesioner` enum('Ya','Tidak','Tidak Tahu','Selalu','Kadang','Tidak Pernah','Normal','Borderline','Abnormal','Optimal','Cukup Optimal','Belum Optimal','Otak Kiri','Otak Kanan','Otak Kiri Kanan') NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
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
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama_lengkap`, `rombel`, `rayon`, `keterangan`, `no_tlp`, `tgl_input`) VALUES
(11605386, 'Arief Rahman Hakim ', 'RPL XI', 'Cisarua 3', 'Sakit panas', '083804226339', '0000-00-00 00:00:00'),
(11708080, 'Kim Kurniawan', 'MMD XI', 'Sukasari', 'Demam', '081282186000', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('guru','kepsek','siswa','medis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
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
-- Indexes for table `tbl_detail_kuesioner`
--
ALTER TABLE `tbl_detail_kuesioner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kuesioner` (`id_kuesioner`);

--
-- Indexes for table `tbl_kuesioner`
--
ALTER TABLE `tbl_kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indexes for table `tbl_kuesioner_detail`
--
ALTER TABLE `tbl_kuesioner_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kuesioner` (`id_kuesioner`);

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
-- AUTO_INCREMENT for table `tbl_detail_kuesioner`
--
ALTER TABLE `tbl_detail_kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_kuesioner`
--
ALTER TABLE `tbl_kuesioner`
  MODIFY `id_kuesioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT for table `tbl_kuesioner_detail`
--
ALTER TABLE `tbl_kuesioner_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_detail_kuesioner`
--
ALTER TABLE `tbl_detail_kuesioner`
  ADD CONSTRAINT `tbl_detail_kuesioner_ibfk_1` FOREIGN KEY (`id_kuesioner`) REFERENCES `tbl_kuesioner` (`id_kuesioner`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
