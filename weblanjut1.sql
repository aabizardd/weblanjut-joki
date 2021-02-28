-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 02:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ibuhamil`
--

CREATE TABLE `ibuhamil` (
  `id_reg` int(15) NOT NULL,
  `tanggal_daftar` date NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(255) NOT NULL,
  `pekerjaan` enum('IRT','PNS','Swasta') NOT NULL,
  `gol_dar` enum('A','B','AB','O') NOT NULL,
  `nama_suami` varchar(255) NOT NULL,
  `pekerjaan_suami` enum('PNS','Swasta') NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelurahan` enum('27 Ilir','28 Ilir','29 Ilir','30 Ilir','32 Ilir','35 Ilir','Kemang Manis') NOT NULL,
  `notelp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ibuhamil`
--

INSERT INTO `ibuhamil` (`id_reg`, `tanggal_daftar`, `nama`, `pekerjaan`, `gol_dar`, `nama_suami`, `pekerjaan_suami`, `umur`, `alamat`, `kelurahan`, `notelp`) VALUES
(555, '2021-02-17', 'Dina', 'IRT', 'A', 'M Diki', 'PNS', '32', 'Jalan Makrayu Plg', '27 Ilir', '2147483647'),
(1212, '2021-02-02', 'Nilawati', 'Swasta', 'AB', 'Udin', 'PNS', '53', 'Jalan Raya', '28 Ilir', '2147483647'),
(27271, '2021-02-02', 'mawar', 'PNS', 'AB', 'nang', 'Swasta', '34', 'jalann', '29 Ilir', '081324411622'),
(45543, '2021-02-02', 'ff', 'IRT', 'B', 'bu', 'Swasta', '56', 'jalanin aja', '30 Ilir', '085344290077'),
(234455, '2021-03-02', 'Humairoh', 'IRT', 'B', 'Jojokk', 'Swasta', '45', 'jalan sutomo', '32 Ilir', '08231188677'),
(505432, '2021-03-02', 'kikia', 'PNS', 'B', 'bimo', 'PNS', '34', 'jalan bandung no 32 AB', '35 Ilir', '084322119021'),
(9999991, '2021-03-02', 'zaskia', 'PNS', 'AB', 'xx', 'Swasta', '34', 'frasde', 'Kemang Manis', '08121755498');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bln` varchar(255) NOT NULL,
  `thn` varchar(255) NOT NULL,
  `wilayah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_petugas`, `id_wilayah`, `nama`, `bln`, `thn`, `wilayah`) VALUES
(137, 0, 0, 'nana putri', '11', '2020', 'Wilayah 4'),
(138, 0, 0, 'sasa', '12', '2020', 'Wilayah 5'),
(666, 0, 0, 'reza', '12', '2021', 'Wilayah 5'),
(876, 0, 0, 'sasan', '09', '2020', 'Wilayah 1'),
(1007, 1, 2, 'reza', '04', '2020', 'Wilayah 2'),
(1133, 1, 5, 'tia', '03', '2020', 'Wilayah 7'),
(1144, 2, 6, 'putri', '07', '2020', 'Wilayah 3');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `id_jenis` int(11) NOT NULL,
  `pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_pembayaran`
--

INSERT INTO `jenis_pembayaran` (`id_jenis`, `pembayaran`) VALUES
(1, 'Jamsoskes'),
(3, 'BPJS'),
(4, 'Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_hb`
--

CREATE TABLE `kondisi_hb` (
  `id_hb` int(11) NOT NULL,
  `kondisiHb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kondisi_hb`
--

INSERT INTO `kondisi_hb` (`id_hb`, `kondisiHb`) VALUES
(1, 'Rendah (< 10 gram %)'),
(3, 'Normal (> 11 gram %)');

-- --------------------------------------------------------

--
-- Table structure for table `letak_bayi`
--

CREATE TABLE `letak_bayi` (
  `id_letak` int(11) NOT NULL,
  `letakBayi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `letak_bayi`
--

INSERT INTO `letak_bayi` (`id_letak`, `letakBayi`) VALUES
(1, 'LETBO (Letak Bokong)'),
(2, 'LKEP (Letak Kepala)'),
(3, 'LETLI (Letak Lintang)');

-- --------------------------------------------------------

--
-- Table structure for table `pasienrujukan`
--

CREATE TABLE `pasienrujukan` (
  `id_rujukan` int(15) NOT NULL,
  `no_rujukan` varchar(255) NOT NULL,
  `puskesmas` varchar(255) NOT NULL,
  `rumahsakit` varchar(255) NOT NULL,
  `kab_kota` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `namapasien` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nopasien` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `tgl_pembuatan` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasienrujukan`
--

INSERT INTO `pasienrujukan` (`id_rujukan`, `no_rujukan`, `puskesmas`, `rumahsakit`, `kab_kota`, `poli`, `namapasien`, `umur`, `alamat`, `nopasien`, `diagnosa`, `tgl_pembuatan`, `status`) VALUES
(11, '129', 'Puskesmas Makrayu', '', 'Palembang', 'Poli KIA', 'rara', '12', 'bbc', '3247', 'flu batuk', '2020-12-21', 0),
(12, '2527', 'Puskesmas Makrayu', '', 'Palembang', 'Poli KIA', 'putri ana', '12', 'bbc4', '33218', 'Demam', '2020-12-21', 0),
(13, '13', 'Puskesmas Makrayu', '', 'Palembang', 'Poli KIA', 'putri', '12', 'bbc4', '01', 'Demam Tinggi', '2020-12-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_akses`
--

CREATE TABLE `password_akses` (
  `id_password` int(11) NOT NULL,
  `role` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_akses`
--

INSERT INTO `password_akses` (`id_password`, `role`, `password`) VALUES
(1, 'Posyandu', '1234'),
(2, 'Puskesmas', '4321'),
(3, 'Superadmin', '321');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_reg` int(15) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_petugas` int(15) NOT NULL,
  `idWilayah` int(11) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `gravida` int(11) NOT NULL,
  `partes` int(11) NOT NULL,
  `abortus` int(11) NOT NULL,
  `jarak_kehamilan` int(11) NOT NULL,
  `usia_kehamilan` int(11) NOT NULL,
  `tinggi_badan` float NOT NULL,
  `lila` float NOT NULL,
  `sistol` float NOT NULL,
  `diastol` float NOT NULL,
  `tetanus_toksoid` varchar(30) NOT NULL,
  `fe` float NOT NULL,
  `tfu` float NOT NULL,
  `letak_bayi` varchar(50) NOT NULL,
  `detak_jantung` varchar(225) NOT NULL,
  `hpht` date NOT NULL,
  `tp` date NOT NULL,
  `hb` varchar(30) NOT NULL,
  `namaobat` varchar(225) NOT NULL,
  `tindakanmedis` varchar(225) NOT NULL,
  `hbsag` enum('Positif','Negatif') DEFAULT NULL,
  `hiv` enum('Positif','Negatif') DEFAULT NULL,
  `sypilis` enum('Positif','Negatif') DEFAULT NULL,
  `pembayaran` enum('Jamsoskes','BPJS','Bayar') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_pemeriksaan`, `id_reg`, `id_pasien`, `id_petugas`, `idWilayah`, `tgl_periksa`, `gravida`, `partes`, `abortus`, `jarak_kehamilan`, `usia_kehamilan`, `tinggi_badan`, `lila`, `sistol`, `diastol`, `tetanus_toksoid`, `fe`, `tfu`, `letak_bayi`, `detak_jantung`, `hpht`, `tp`, `hb`, `namaobat`, `tindakanmedis`, `hbsag`, `hiv`, `sypilis`, `pembayaran`) VALUES
(5, 0, 1212, 5092, 1, '2020-01-02', 1, 1, 2, 3, 6, 145, 22, 90, 80, '11', 33, 44, 'Letak Lintang', '90/100', '2020-12-03', '2020-12-25', 'Rendah', 'tidak ada ', 'medis', 'Negatif', 'Positif', 'Negatif', 'Bayar'),
(6, 0, 778866, 21231, 1, '2020-12-03', 0, 0, 1, 1, 4, 177, 54, 89, 99, '53', 17, 19, 'Letak Bokong', '90/100', '2020-11-29', '2021-01-09', 'Normal', 'neurobion', 'memberikan obat tambah darah', 'Negatif', 'Positif', 'Positif', 'Bayar'),
(7, 0, 555, 50924, 1, '2020-12-03', 1, 0, 2, 2, 3, 155, 32, 45, 55, '5', 6, 7, 'Letak Kepala', '90/100', '2020-12-03', '2020-12-03', 'Rendah', 'tidak ada ', 'melakukan pemeriksaan rutin', 'Positif', 'Negatif', 'Negatif', 'Bayar'),
(8, 0, 505432, 2705, 1, '2020-12-21', 0, 0, 2, 4, 8, 145, 56, 90, 110, '34', 60, 6, 'Letak Bokong', '90/100', '2020-12-07', '2021-03-31', 'Pilih kondisi hb', 'neuobion ', 'memberikan obat tambah darah', 'Negatif', 'Negatif', 'Negatif', 'Jamsoskes'),
(9, 0, 131, 2705, 2, '2020-12-21', 0, 0, 1, 6, 9, 156, 45, 80, 90, '5', 67, 50, 'Letak Kepala', '90/100', '2020-11-29', '2021-01-28', 'Normal', 'tidak ada ', 'melakukan pemeriksaan saja', 'Negatif', 'Negatif', 'Negatif', 'BPJS'),
(10, 0, 555, 270500, 3, '2020-12-24', 1, 1, 2, 7, 9, 165, 23, 80, 90, '50', 42, 12, 'Letak Bokong', '90/100', '2020-10-13', '2021-03-03', 'Rendah', 'neurobion', 'memberikan obat tambah darah', 'Negatif', 'Negatif', 'Negatif', 'Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `pencatatan`
--

CREATE TABLE `pencatatan` (
  `id_pencatatan` int(11) NOT NULL,
  `no_pasien` varchar(50) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `idWilayah` int(11) NOT NULL,
  `nama_bidan` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tinggi` varchar(255) NOT NULL,
  `bb` varchar(255) NOT NULL,
  `temperatur` varchar(255) NOT NULL,
  `lingkar` varchar(255) NOT NULL,
  `jenis_imunisasi` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `penyuluhan` varchar(255) NOT NULL,
  `vitamin` varchar(255) NOT NULL,
  `obat` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `tgl_pencatatan` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pencatatan`
--

INSERT INTO `pencatatan` (`id_pencatatan`, `no_pasien`, `id_petugas`, `idWilayah`, `nama_bidan`, `umur`, `kategori`, `tinggi`, `bb`, `temperatur`, `lingkar`, `jenis_imunisasi`, `diagnosa`, `penyuluhan`, `vitamin`, `obat`, `notelp`, `tgl_pencatatan`, `status`) VALUES
(11, '1234', 1, 2, 'wsgj', '1', 'Bayi (0-12 bln)', '42', '3', '32', '33', '0 - 7 hari (HBO)', 'demam', 'rceoh', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '6282285139826', '2020-03-09', 1),
(14, '1024', 2, 1, 'gh', '3', 'Bayi (0-12 bln)', '123', '45', '32', '33', '2 bulan (BPT1 +Volio2)', 'sehat', 'tidak ada', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '6282285139826', '2020-03-13', 1),
(15, '022', 3, 3, 'gukguk', '19', 'Bayi (0-12 bln)', '36', '4', '34', '34', '0 - 7 hari (HBO)', 'sehat', 'tidak ada', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '6282285139826', '2020-03-13', 1),
(16, '133', 1, 3, 'wsgj', '2', 'Batita (16-19 bln)', '4245', '2', '32', '31', '0 - 7 hari (HBO)', 'gf', 'bjkdsha', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '6282285139826', '2020-03-13', 0),
(19, '133', 2, 2, 'gh', '3', 'Bayi (0-12 bln)', '67', '7', '34', '34', '0 - 7 hari (HBO)', 'sehat', 'tidak ada', 'Vitamin A (umur 1 tahun - 5 tahun ) warna merah', '½ pil (umur 1 - 2 tahun)', '6282285139826', '2020-03-13', 0),
(37, '02', 1, 4, 'nana', '4', 'Bayi (0-12 bln)', '56', '44', '38', '46', '0 - 7 hari (HBO)', 'sehat', 'tidak ada', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '08346348289', '2020-04-20', 1),
(38, '1024', 3, 2, 'nani', '18', 'Batita (16-19 bln)', '89', '2', '33', '67', '0 - 7 hari (HBO)', 'sehat', 'tdk ada', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '9374694044', '2020-12-16', 1),
(39, '342', 0, 1, 'nani', '18', 'Bayi (0-12 bln)', '87', '4', '34', '48', '0 - 7 hari (HBO)', 'flu', 'rujuk ke puskesmas makrayu', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '62813946498', '2020-12-20', 1),
(40, '12', 0, 2, 'nani', '12', 'Bayi (0-12 bln)', '87', '4', '34', '84', '0 - 7 hari (HBO)', 'flu', 'rujuk ke puskesmas makrayu', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '6283035387', '2020-12-21', 1),
(41, '33', 0, 1, 'nani', '14', 'Bayi (0-12 bln)', '84', '6', '36', '46', '0 - 7 hari (HBO)', 'flu', 'rujuk ke puskesmas makrayu', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '8798794', '2020-12-21', 1),
(42, '138', 0, 2, 'nani', '12', 'Bayi (0-12 bln)', '78', '6', '36', '48', '0 - 7 hari (HBO)', 'Demam', 'rujuk ke puskesmas makrayu', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '08247290207', '2020-12-21', 1),
(43, '01', 0, 4, 'nani', '12', 'Bayi (0-12 bln)', '87', '8', '36', '48', '9 bulan (Campak)', 'Demam Tinggi', 'memberikan anak vitamin ', 'Vitamin A (umur 1 tahun - 5 tahun ) warna merah', '½ pil (umur 1 - 2 tahun)', '6282285139828', '2020-12-22', 1),
(44, '42', 0, 4, 'nani', '12', 'Bayi (0-12 bln)', '78', '6', '36', '48', '0 - 7 hari (HBO)', 'Demam Tinggi', 'rujuk ke puskesmas makrayu', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '08247290207', '2020-12-24', 0),
(45, '33', 0, 4, 'nani', '18', 'Bayi (0-12 bln)', '87', '6', '38', '47', '0 - 7 hari (HBO)', 'Demam Tinggi', 'rujuk ke puskesmas makrayu', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '083758912289', '2020-12-24', 1),
(46, '8777', 0, 4, 'ana', '2', 'Bayi (0-12 bln)', '98', '6', '36', '48', '2 bulan (BPT1 +Volio2)', 'Demam Tinggi', 'memberikan anak vitamin ', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '082285139826', '2020-12-24', 1),
(47, '01', 0, 1, 'nani', '12', 'Bayi (0-12 bln)', '148', '6', '34', '48', '0 - 7 hari (HBO)', 'flu', 'rujuk ke puskesmas makrayu', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '82285139826', '2021-01-16', 1),
(48, '01', 0, 2, 'gha', '12', 'Bayi (0-12 bln)', '87', '8', '36', '48', '0 - 7 hari (HBO)', 'sehat', 'tdk ada', 'Vitamin A (umur 6 bulan - 1 tahun ) warna biru', '½ pil (umur 1 - 2 tahun)', '910926728', '2021-01-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('posyandu','puskesmas','superadmin') NOT NULL,
  `status_aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `nama`, `foto`, `password`, `status`, `status_aktif`) VALUES
(2, 'reza@mail.com', 'reza', 'img_602a6c648d478.jpg', '12345', 'puskesmas', 1),
(3, 'superadmin@mail.com', 'superadmin', 'img_602a6c648d478.jpg', '54321', 'superadmin', 1),
(5, 'm.abizard1123@gmail.com', 'Muhammad Abizard', 'img_603101bc95d35.png', '123455', 'posyandu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `regisanak`
--

CREATE TABLE `regisanak` (
  `no_pasien` varchar(50) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `p_ibu` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `p_ayah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_daftar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regisanak`
--

INSERT INTO `regisanak` (`no_pasien`, `id_wilayah`, `nama_anak`, `tempat_lahir`, `tanggal_lahir`, `jk`, `nama_ibu`, `p_ibu`, `nama_ayah`, `p_ayah`, `alamat`, `tgl_daftar`) VALUES
('001', 3, 'nana', 'bandung', '2020-02-12', 'Perempuan', 'mama', 'dokter', 'ady', 'dokter', 'pga', '2020-02-27'),
('002', 2, 'ana', 'pekanbaru', '2020-04-18', 'Laki - Laki', 'ani', 'dokter', 'andi', 'dokter', 'bbc', '2020-04-18'),
('01', 1, 'putri ayu p', 'Pekanbaru', '2020-11-18', 'Perempuan', 'nana', 'dokter', 'al', 'dokter', 'bbc4', '2020-12-24'),
('138', 1, 'putri ana', 'Pekanbaru', '2020-12-21', 'Perempuan', 'nana', 'dokter', 'ady', 'dokter', 'bbc4', '2020-12-21'),
('33', 1, 'rara', 'bdo', '2020-12-08', 'Perempuan', 'nana', 'Guru', 'Adi a', 'Guru', 'bbc', '2020-12-21'),
('8777', 1, 'aldo', 'Bandung', '2020-11-21', 'Laki - Laki', 'Ani', 'Guru', 'ady', 'dokter', 'jalan babakan ciamis', '2021-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `token` varchar(250) NOT NULL,
  `date_created` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(2, 'reza@mail.com', '/qqBEhBzikTKPMS/5ObTTZYK6g1VZEkoc6RFG+JpR/M=', '1613392996');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(225) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `nama_posyandu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`, `kelurahan`, `rw`, `rt`, `nama_posyandu`) VALUES
(1, 'Wilayah 1', '27 Ilir', '1 - 2', '1 - 10', 'Posyandu A'),
(2, 'Wilayah 2', '28 Ilir', '1 - 3', '1 - 14', 'Posyandu B'),
(3, 'Wilayah 3', '29 Ilir', '1 - 11', '1 - 35', 'Posyandu C'),
(4, 'Wilayah 4', '30 Ilir', '1 - 16', '1 - 60', 'Posyandu D'),
(5, 'Wilayah 5', '32 Ilir', '1 - 8', '1 - 38', 'Posyandu E'),
(6, 'Wliayah 6', '35 Ilir', '1 - 7', '1 - 36', 'Posyandu F'),
(7, 'Wilayah 7', 'Kemang Manis', '1 - 4', '1 - 13', 'Posyandu G'),
(9, 'Jawa Barat', 'Cisarua', '22', '1-3', 'Posyandu Cisarua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ibuhamil`
--
ALTER TABLE `ibuhamil`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `a` (`id_wilayah`),
  ADD KEY `b` (`id_petugas`);

--
-- Indexes for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kondisi_hb`
--
ALTER TABLE `kondisi_hb`
  ADD PRIMARY KEY (`id_hb`);

--
-- Indexes for table `letak_bayi`
--
ALTER TABLE `letak_bayi`
  ADD PRIMARY KEY (`id_letak`);

--
-- Indexes for table `pasienrujukan`
--
ALTER TABLE `pasienrujukan`
  ADD PRIMARY KEY (`id_rujukan`);

--
-- Indexes for table `password_akses`
--
ALTER TABLE `password_akses`
  ADD PRIMARY KEY (`id_password`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `pencatatan`
--
ALTER TABLE `pencatatan`
  ADD PRIMARY KEY (`id_pencatatan`),
  ADD KEY `e` (`id_petugas`),
  ADD KEY `g` (`no_pasien`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `regisanak`
--
ALTER TABLE `regisanak`
  ADD PRIMARY KEY (`no_pasien`),
  ADD KEY `f` (`id_wilayah`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kondisi_hb`
--
ALTER TABLE `kondisi_hb`
  MODIFY `id_hb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `letak_bayi`
--
ALTER TABLE `letak_bayi`
  MODIFY `id_letak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasienrujukan`
--
ALTER TABLE `pasienrujukan`
  MODIFY `id_rujukan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `password_akses`
--
ALTER TABLE `password_akses`
  MODIFY `id_password` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pencatatan`
--
ALTER TABLE `pencatatan`
  MODIFY `id_pencatatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
