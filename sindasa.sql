-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2022 pada 12.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sindasa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `jk_anak` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`id_anak`, `nama_ibu`, `nama_anak`, `no_hp`, `tmpt_lahir`, `tgl_lahir`, `umur`, `jk_anak`, `alamat`) VALUES
(1, 'Nurul Khairunnisa', 'Talitha Amalia', '085120000000', 'Madiun', '10-05-2018', '49', 'Perempuan', 'Jl. Dwijaya'),
(2, 'Supraptani Ajeng', 'Rifqi Kodirot', '089556622310', 'Madiun', '20-12-2017', '54', 'Laki-Laki', 'Jl. Dwijaya IX'),
(3, 'Intan Sulistya', 'Septiani Nugraheni', '089563214500', 'Madiun', '11-05-2020', '25', 'Perempuan', 'Jl. Dwijaya IX/04'),
(4, 'Ika Pratiwi', 'Haris Ahmad', '089923443428', 'Madiun', '04-02-2018', '52', 'Laki-Laki', 'Jl. Dwijaya IX/01'),
(5, 'Intan Jainuddin', 'Farelin Sutan', '082399999823', 'Madiun', '14-10-2020', '20', 'Laki-Laki', 'Jl. Trijaya IX/09'),
(6, 'Sulistyawati', 'Indah Sari', '082344537457', 'Madiun', '25-01-2021', '17', 'Perempuan', 'Jl. Trijaya IX/12'),
(7, 'Venna Rahmawati', 'Dendi Reforma Malik', '0812442245', 'Madiun', '16-05-2020', '25', 'Laki-Laki', 'Jl. Dwijaya IX/12'),
(8, 'Dewi Ambar', 'Agung Aji Purnomo', '0855882399221', 'Madiun', '10-10-2018', '44', 'Laki-Laki', 'Jl. Trijaya IX/09'),
(9, 'Rina Septiani', 'Pandu Dwi Saputra', '082939488392', 'Madiun', '03-03-2021', '15', 'Laki-Laki', 'Jl. Trijaya IX/09'),
(10, 'Ayu Eka Safitri', 'Winda Hidayati', '087888115588', 'Madiun', '20-09-2018', '45', 'Perempuan', 'Jl. Dwijaya No. 10'),
(11, 'Rizkyana Dewi', 'Nabilla Hasna', '085010203888', 'Madiun', '01-01-2020', '29', 'Perempuan', 'Jl. Trijaya No. 04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cekstunting`
--

CREATE TABLE `cekstunting` (
  `id_cek` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `tb` int(3) NOT NULL,
  `bb` int(3) NOT NULL,
  `tgl_cek_stunting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_anak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cekstunting`
--

INSERT INTO `cekstunting` (`id_cek`, `id_anak`, `tb`, `bb`, `tgl_cek_stunting`, `status_anak`) VALUES
(1, 4, 100, 12, '2022-05-28 06:27:41', 'Gizi Kurang (Wasted)'),
(2, 4, 102, 15, '2022-05-31 01:53:43', 'Gizi Baik (Normal)'),
(3, 7, 82, 14, '2022-06-07 14:45:45', 'Obesitas'),
(4, 5, 100, 22, '2022-06-10 02:22:18', 'Obesitas'),
(5, 6, 98, 10, '2022-06-13 16:06:12', 'Gizi Buruk (Severely Wasted)'),
(6, 10, 107, 13, '2022-06-14 14:17:48', 'Gizi Buruk (Severely Wasted)'),
(7, 6, 99, 15, '2022-06-15 01:17:54', 'Gizi Baik (Normal)'),
(8, 4, 102, 13, '2022-06-15 01:43:00', 'Gizi Kurang (Wasted)'),
(9, 1, 100, 10, '2022-06-16 02:29:40', 'Gizi Buruk (Severely Wasted)'),
(10, 3, 100, 10, '2022-06-16 04:29:38', 'Gizi Buruk (Severely Wasted)'),
(11, 6, 79, 12, '2022-06-16 04:38:33', 'Gizi Lebih (Overweight)'),
(12, 5, 90, 10, '2022-06-16 04:51:21', 'Gizi Buruk (Severely Wasted)'),
(14, 5, 100, 10, '2022-06-16 04:55:45', 'Gizi Buruk (Severely Wasted)'),
(15, 5, 100, 10, '2022-06-16 04:56:13', 'Gizi Buruk (Severely Wasted)'),
(16, 6, 100, 10, '2022-06-16 04:56:44', 'Gizi Buruk (Severely Wasted)'),
(17, 7, 100, 10, '2022-06-16 04:58:51', 'Gizi Buruk (Severely Wasted)'),
(19, 5, 100, 12, '2022-06-16 05:02:07', 'Gizi Buruk (Severely Wasted)'),
(20, 6, 100, 10, '2022-06-16 05:02:53', 'Gizi Buruk (Severely Wasted)'),
(21, 6, 100, 10, '2022-06-16 05:03:28', 'Gizi Buruk (Severely Wasted)'),
(23, 8, 80, 10, '2022-06-16 05:14:04', 'Gizi Baik (Normal)'),
(24, 9, 80, 10, '2022-06-16 05:16:54', 'Gizi Baik (Normal)'),
(25, 3, 100, 10, '2022-06-16 05:30:23', 'Gizi Buruk (Severely Wasted)'),
(26, 5, 89, 9, '2022-06-17 04:02:09', 'Gizi Buruk (Severely Wasted)'),
(27, 10, 102, 15, '2022-06-17 04:05:09', 'Gizi Baik (Normal)'),
(68, 1, 100, 17, '2022-06-19 12:35:44', 'Beresiko Overweight'),
(73, 4, 102, 16, '2022-06-19 13:22:57', 'Gizi Baik (Normal)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul_galeri` varchar(500) NOT NULL,
  `deskripsi_galeri` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul_galeri`, `deskripsi_galeri`, `gambar`) VALUES
(16, 'Kegiatan Penimbangan oleh Istri Walikota Madiun', '<p xss=removed>Pemerintah menerapkan bulan Februari dan Agustus sebagai bulan timbang bersamaan dengan pemberian Vitamin A pada balita, dengan harapan bahwa pada bulan-bulan tersebut kedatangan balita di posyandu juga meningkat. Pada bulan tersebut selain dilakukan penimbangan berat badan dan pengukuran tinggi badan. Hasil penimbangan dan pengukuran tersebut dapat mencerminkan status gizi balita yang merupakan tolak ukur status gizi masyarakat.</p>', 'nimbang.jpeg'),
(17, 'Pelaksanaan Kegiatan Sosialisasi Stunting', 'Untuk kegiatan penimbangan bulan ini, target penimbangan balita adalah 36, akan tetapi yang hadir untuk melaksanakan penimbangan hanya 27 balita.\r\n\r\nJumlah balita yang hadir pada bulan ini lebih banyak dibandingkan dengan target penimbangan bulan lalu. Untuk pemeriksaan itu sendiri yaitu penimbangan balita dan pemeriksaan tumbuh kembang anak (seperti berat badan dan tinggi anak).', 'WhatsApp-Image-2018-09-26-at-14_44_05-678x381.jpeg'),
(18, 'Kegiatan Imunisasi di Posyandu Anggareni', 'Stunting pada anak dapat dicegah sejak masa kehamilan hingga anak berusia dua tahun atau bisa disebut juga sebagai periode 1000 hari pertama kehidupan (HPK). Tindakan yang relatif ampuh dilakukan untuk mencegah stunting pada anak adalah selalu memenuhi gizi sejak masa kehamilan. Dalam kegiatan ini balita diberikan makanan bergizi serta dilakukan pengukuran tinggi badan dan menimbang berat badan.', 'FOTO-BOOK-Para-ibu-ibu-nampak-antusias-membawa-balita-nya-ke-posyandu-Foto-Reno.jpg'),
(19, 'Kegiatan Posyandu 1', 'Kegiatan Posyandu', 'posyandu.jpg'),
(20, 'Kegiatan Penyuluhan Anak Stunting', 'Deskripsi kegiatan penyuluhan', 'koordinasi.jpeg'),
(25, 'Kegiatan Penyuluhan di Posyandu Anggraeni', 'Bentuk kegiatan edukasi kepada masyarakat terutama kader dengan cara pengukuran antropometri yang baik pada bayi dan balita dan edukasi cara stimulasi secara langsung pada anak balita. Serta melakukan deteksi tumbuh kembang anak secara langsung kepada balita dalam perkembangan motorik halus, motorik kasar, bahasa dan kemandirian. Kegiatan berjalan baik dan mendapatkan antusias yang baik dari kader dan masyarakat.', 'penyuluhan.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gizilk`
--

CREATE TABLE `gizilk` (
  `id_gizilk` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `min_tiga` decimal(3,1) NOT NULL,
  `min_dua` decimal(3,1) NOT NULL,
  `min_satu` decimal(3,1) NOT NULL,
  `median` decimal(3,1) NOT NULL,
  `plus_satu` decimal(3,1) NOT NULL,
  `plus_dua` decimal(3,1) NOT NULL,
  `plus_tiga` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gizilk`
--

INSERT INTO `gizilk` (`id_gizilk`, `umur`, `min_tiga`, `min_dua`, `min_satu`, `median`, `plus_satu`, `plus_dua`, `plus_tiga`) VALUES
(1, 0, '10.2', '11.1', '12.2', '13.4', '14.8', '16.3', '18.1'),
(2, 1, '11.3', '12.4', '13.6', '14.9', '16.3', '17.8', '19.4'),
(3, 2, '12.5', '13.7', '15.0', '16.3', '17.8', '19.4', '21.1'),
(4, 3, '13.1', '14.3', '15.5', '16.9', '18.4', '20.0', '21.8'),
(5, 4, '13.4', '14.5', '15.8', '17.2', '18.7', '20.3', '22.1'),
(6, 5, '13.5', '14.7', '15.9', '17.3', '18.8', '20.5', '22.3'),
(7, 6, '13.6', '14.7', '16.0', '17.3', '18.8', '20.5', '22.3'),
(8, 7, '13.7', '14.8', '16.0', '17.3', '18.8', '20.5', '22.3'),
(9, 8, '13.6', '14.7', '15.9', '17.3', '18.7', '20.4', '22.2'),
(10, 9, '13.6', '14.7', '15.8', '17.2', '18.6', '20.3', '22.1'),
(11, 10, '13.5', '14.6', '15.7', '17.0', '18.5', '20.1', '22.0'),
(12, 11, '13.4', '14.5', '15.6', '16.9', '18.4', '20.0', '21.8'),
(13, 12, '13.4', '14.4', '15.5', '16.8', '18.2', '19.8', '21.6'),
(14, 13, '13.3', '14.3', '15.4', '16.7', '18.1', '19.7', '21.5'),
(15, 14, '13.2', '14.2', '15.3', '16.6', '18.0', '19.5', '21.3'),
(16, 15, '13.1', '14.1', '15.2', '16.4', '17.8', '19.4', '21.2'),
(17, 16, '13.1', '14.0', '15.1', '16.3', '17.7', '19.3', '21.0'),
(18, 17, '13.0', '13.9', '15.0', '16.2', '17.6', '19.1', '20.9'),
(19, 18, '12.9', '13.9', '14.9', '16.1', '17.5', '19.0', '20.8'),
(20, 19, '12.9', '13.8', '14.9', '16.1', '17.4', '18.9', '20.7'),
(21, 20, '12.8', '13.7', '14.8', '16.0', '17.3', '18.8', '20.6'),
(22, 21, '12.8', '13.7', '14.7', '15.9', '17.2', '18.7', '20.5'),
(23, 22, '12.7', '13.6', '14.7', '15.8', '17.2', '18.7', '20.4'),
(24, 23, '12.7', '13.6', '14.6', '15.8', '17.1', '18.6', '20.3'),
(25, 24, '12.7', '13.6', '14.6', '15.7', '17.0', '18.5', '20.3'),
(26, 25, '12.8', '13.8', '14.8', '16.0', '17.3', '18.8', '20.5'),
(27, 26, '12.8', '13.7', '14.8', '15.9', '17.3', '18.8', '20.5'),
(28, 27, '12.7', '13.7', '14.7', '15.9', '17.2', '18.7', '20.4'),
(29, 28, '12.7', '13.6', '14.7', '15.9', '17.2', '18.7', '20.4'),
(30, 29, '12.7', '13.6', '14.7', '15.8', '17.1', '18.6', '20.3'),
(31, 30, '12.6', '13.6', '14.6', '15.8', '17.1', '18.6', '20.2'),
(32, 31, '12.6', '13.5', '14.6', '15.8', '17.1', '18.5', '20.2'),
(33, 32, '12.5', '13.5', '14.6', '15.7', '17.0', '18.5', '20.1'),
(34, 33, '12.5', '13.5', '14.5', '15.7', '17.0', '18.5', '20.1'),
(35, 34, '12.5', '13.4', '14.5', '15.7', '17.0', '18.4', '20.0'),
(36, 35, '12.4', '13.4', '14.5', '15.6', '16.9', '18.4', '20.0'),
(37, 36, '12.4', '13.4', '14.4', '15.6', '16.9', '18.4', '20.0'),
(38, 37, '12.4', '13.3', '14.4', '15.6', '16.9', '18.3', '19.9'),
(39, 38, '12.3', '13.3', '14.4', '15.5', '16.8', '18.3', '19.9'),
(40, 39, '12.3', '13.3', '14.3', '15.5', '16.8', '18.3', '19.9'),
(41, 40, '12.3', '13.2', '14.3', '15.5', '16.8', '18.2', '19.9'),
(42, 41, '12.2', '13.2', '14.3', '15.5', '16.8', '18.2', '19.9'),
(43, 42, '12.2', '13.2', '14.3', '15.4', '16.8', '18.2', '19.8'),
(44, 43, '12.2', '13.2', '14.2', '15.4', '16.7', '18.2', '19.8'),
(45, 44, '12.2', '13.1', '14.2', '15.4', '16.7', '18.2', '19.8'),
(46, 45, '12.2', '13.1', '14.2', '15.4', '16.7', '18.2', '19.8'),
(47, 46, '12.1', '13.1', '14.2', '15.4', '16.7', '18.2', '19.8'),
(48, 47, '12.1', '13.1', '14.2', '15.3', '16.7', '18.2', '19.9'),
(49, 48, '12.1', '13.1', '14.1', '15.3', '16.7', '18.2', '19.9'),
(50, 49, '12.1', '13.0', '14.1', '15.3', '16.7', '18.2', '19.9'),
(51, 50, '12.1', '13.0', '14.1', '15.3', '16.7', '18.2', '19.9'),
(52, 51, '12.1', '13.0', '14.1', '15.3', '16.6', '18.2', '19.9'),
(53, 52, '12.0', '13.0', '14.1', '15.3', '16.6', '18.2', '19.9'),
(54, 53, '12.0', '13.0', '14.1', '15.3', '16.6', '18.2', '20.0'),
(55, 54, '12.0', '13.0', '14.0', '15.3', '16.6', '18.2', '20.0'),
(56, 55, '12.0', '13.0', '14.0', '15.2', '16.6', '18.2', '20.0'),
(57, 56, '12.0', '12.9', '14.0', '15.2', '16.6', '18.2', '20.1'),
(58, 57, '12.0', '12.9', '14.0', '15.2', '16.6', '18.2', '20.1'),
(59, 58, '12.0', '12.9', '14.0', '15.2', '16.6', '18.3', '20.2'),
(60, 59, '12.0', '12.9', '14.0', '15.2', '16.6', '18.3', '20.2'),
(61, 60, '12.0', '12.9', '14.0', '15.2', '16.6', '18.3', '20.3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gizipr`
--

CREATE TABLE `gizipr` (
  `id_gizipr` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `min_tiga` decimal(3,1) NOT NULL,
  `min_dua` decimal(3,1) NOT NULL,
  `min_satu` decimal(3,1) NOT NULL,
  `median` decimal(3,1) NOT NULL,
  `plus_satu` decimal(3,1) NOT NULL,
  `plus_dua` decimal(3,1) NOT NULL,
  `plus_tiga` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gizipr`
--

INSERT INTO `gizipr` (`id_gizipr`, `umur`, `min_tiga`, `min_dua`, `min_satu`, `median`, `plus_satu`, `plus_dua`, `plus_tiga`) VALUES
(1, 0, '10.1', '11.1', '12.2', '13.3', '14.6', '16.1', '17.7'),
(2, 1, '10.8', '12.0', '13.2', '14.6', '16.0', '17.5', '19.1'),
(3, 2, '11.8', '13.0', '14.3', '15.8', '17.3', '19.0', '20.7'),
(4, 3, '12.4', '13.6', '14.9', '16.4', '17.9', '19.7', '21.5'),
(5, 4, '12.7', '13.9', '15.2', '16.7', '18.3', '20.0', '22.0'),
(6, 5, '12.9', '14.1', '15.4', '16.8', '18.4', '20.2', '22.2'),
(7, 6, '13.0', '14.1', '15.5', '16.9', '18.5', '20.3', '22.3'),
(8, 7, '13.0', '14.2', '15.5', '16.9', '18.5', '20.3', '22.3'),
(9, 8, '13.0', '14.1', '15.4', '16.8', '18.4', '20.2', '22.2'),
(10, 9, '12.9', '14.1', '15.3', '16.7', '18.3', '20.1', '22.1'),
(11, 10, '12.9', '14.0', '15.2', '16.6', '18.2', '19.9', '21.9'),
(12, 11, '12.8', '13.9', '15.1', '16.5', '18.0', '19.8', '21.8'),
(13, 12, '12.7', '13.8', '15.0', '16.4', '17.9', '19.6', '21.6'),
(14, 13, '12.6', '13.7', '14.9', '16.2', '17.7', '19.5', '21.4'),
(15, 14, '12.6', '13.6', '14.8', '16.1', '17.6', '19.3', '21.3'),
(16, 15, '12.5', '13.5', '14.7', '16.0', '17.5', '19.2', '21.1'),
(17, 16, '12.4', '13.5', '14.6', '15.9', '17.4', '19.1', '21.0'),
(18, 17, '12.4', '13.4', '14.5', '15.8', '17.3', '18.9', '20.9'),
(19, 18, '12.3', '13.3', '14.4', '15.7', '17.2', '18.8', '20.8'),
(20, 19, '12.3', '13.3', '14.4', '15.7', '17.1', '18.8', '20.7'),
(21, 20, '12.2', '13.2', '14.3', '15.6', '17.0', '18.7', '20.6'),
(22, 21, '12.2', '13.2', '14.3', '15.5', '17.0', '18.6', '20.5'),
(23, 22, '12.2', '13.1', '14.2', '15.5', '16.9', '18.5', '20.4'),
(24, 23, '12.2', '13.1', '14.2', '15.4', '16.9', '18.5', '20.4'),
(25, 24, '12.1', '13.1', '14.2', '15.4', '16.8', '18.4', '20.3'),
(26, 25, '12.4', '13.3', '14.4', '15.7', '17.1', '18.7', '20.6'),
(27, 26, '12.3', '13.3', '14.4', '15.6', '17.0', '18.7', '20.6'),
(28, 27, '12.3', '13.3', '14.4', '15.6', '17.0', '18.6', '20.5'),
(29, 28, '12.3', '13.3', '14.3', '15.6', '17.0', '18.6', '20.5'),
(30, 29, '12.3', '13.2', '14.3', '15.6', '17.0', '18.6', '20.4'),
(31, 30, '12.3', '13.2', '14.3', '15.5', '16.9', '18.5', '20.4'),
(32, 31, '12.2', '13.2', '14.3', '15.5', '16.9', '18.5', '20.4'),
(33, 32, '12.2', '13.2', '14.3', '15.5', '16.9', '18.5', '20.4'),
(34, 33, '12.2', '13.1', '14.2', '15.5', '16.9', '18.5', '20.3'),
(35, 34, '12.2', '13.1', '14.2', '15.4', '16.8', '18.5', '20.3'),
(36, 35, '12.1', '13.1', '14.2', '15.4', '16.8', '18.4', '20.3'),
(37, 36, '12.1', '13.1', '14.2', '15.4', '16.8', '18.4', '20.3'),
(38, 37, '12.1', '13.1', '14.1', '15.4', '16.8', '18.4', '20.3'),
(39, 38, '12.1', '13.0', '14.1', '15.4', '16.8', '18.4', '20.3'),
(40, 39, '12.0', '13.0', '14.1', '15.3', '16.8', '18.4', '20.3'),
(41, 40, '12.0', '13.0', '14.1', '15.3', '16.8', '18.4', '20.3'),
(42, 41, '12.0', '13.0', '14.1', '15.3', '16.8', '18.4', '20.4'),
(43, 42, '12.0', '12.9', '14.0', '15.3', '16.8', '18.4', '20.4'),
(44, 43, '11.9', '12.9', '14.0', '15.3', '16.8', '18.4', '20.4'),
(45, 44, '11.9', '12.9', '14.0', '15.3', '16.8', '18.5', '20.4'),
(46, 45, '11.9', '12.9', '14.0', '15.3', '16.8', '18.5', '20.5'),
(47, 46, '11.9', '12.9', '14.0', '15.3', '16.8', '18.5', '20.5'),
(48, 47, '11.8', '12.8', '14.0', '15.3', '16.8', '18.5', '20.5'),
(49, 48, '11.8', '12.8', '14.0', '15.3', '16.8', '18.5', '20.6'),
(50, 49, '11.8', '12.8', '13.9', '15.3', '16.8', '18.5', '20.6'),
(51, 50, '11.8', '12.8', '13.9', '15.3', '16.8', '18.6', '20.7'),
(52, 51, '11.8', '12.8', '13.9', '15.3', '16.8', '18.6', '20.7'),
(53, 52, '11.7', '12.8', '13.9', '15.2', '16.8', '18.6', '20.7'),
(54, 53, '11.7', '12.7', '13.9', '15.3', '16.8', '18.6', '20.8'),
(55, 54, '11.7', '12.7', '13.9', '15.3', '16.8', '18.7', '20.8'),
(56, 55, '11.7', '12.7', '13.9', '15.3', '16.8', '18.7', '20.9'),
(57, 56, '11.7', '12.7', '13.9', '15.3', '16.8', '18.7', '20.9'),
(58, 57, '11.7', '12.7', '13.9', '15.3', '16.9', '18.7', '21.0'),
(59, 58, '11.7', '12.7', '13.9', '15.3', '16.9', '18.8', '21.0'),
(60, 59, '11.6', '12.7', '13.9', '15.3', '16.9', '18.8', '21.0'),
(61, 60, '11.6', '12.7', '13.9', '15.3', '16.9', '18.8', '21.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posyandu`
--

CREATE TABLE `posyandu` (
  `id_posyandu` int(255) NOT NULL,
  `nama_posyandu` varchar(500) NOT NULL,
  `alamat_posyandu` varchar(500) NOT NULL,
  `penanggung_jawab` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posyandu`
--

INSERT INTO `posyandu` (`id_posyandu`, `nama_posyandu`, `alamat_posyandu`, `penanggung_jawab`) VALUES
(1, 'Posyandu Demangan', 'Jl.Raya Ponorogo - Madiun No.47, Nambangan Kidul, Kec. Madiun, Kota Madiun, Jawa Timur 63128', 'Nanang Sunaryo'),
(2, 'Posyandu Manguharjo ', 'Jl.Gajah Mada No.124, Manguharjo, Kec. Manguharjo, Kota Madiun, Jawa Timur 63127', 'Bambang Sutejo'),
(3, 'Posyandu Banjarejo', 'Jl.Bayangkara No.1, Banjarejo, Kec. Taman, Kota Madiun, Jawa Timur 63137', 'Mahmud Jaludin'),
(4, 'Posyandu Tawangrejo', 'Jl. Tawang Sari, Tawangrejo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63113', 'Samsudin Aladin'),
(5, 'Posyandu Dimong', 'JL, Dimong, Kec. Madiun, Kabupaten Madiun, Jawa Timur 63151', 'Dadang Sutarjo'),
(6, 'Posyandu Sukosari', 'Jl. Basuki Rahmat No.4, Sukosari, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63114', 'Naning Maharani'),
(7, 'Posyandu Patihan/Ngegong', 'Jl. Keningar, Ngegong, Kec. Manguharjo, Kota Madiun, Jawa Timur 63125', 'Lita Nurlaila'),
(8, 'Posyandu Nambangan Lor', 'Jl. Sriti, Nambangan Lor, Kec. Manguharjo, Kota Madiun, Jawa Timur 63129', 'Siska Wijaya'),
(9, 'Posyandu Kanigoro', 'Jl. Ki Ageng Pemanahan Kanigoro, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63118', 'Nike Wahluyo'),
(10, 'Posyandu Taman', 'Jl. Serayu, Pandean, Kec. Taman, Kota Madiun, Jawa Timur 63133\r\n', 'Dania Rahayu'),
(11, 'Posyandu Kejuron', 'JL. Kapten Saputro, Kejuron, Kec. Madiun, Kota Madiun, Jawa Timur 63132', 'Kinanti Wijaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_posyandu`, `nama_user`, `username`, `password`, `role`, `photo`) VALUES
(1, 1, 'Tanzil', 'tanzil', '12345678', 'admin', 'tanzil.png'),
(2, 6, 'Nadia', 'nadia', '12345678', 'admin', 'IMG_20200908_1312001.png'),
(3, 11, 'Rosa', 'rosaa', '12345678', 'staff', 'WhatsApp_Image_2022-05-08_at_19_12_181.jpeg'),
(4, 4, 'Putri', 'putri', '12345678', 'staff', 'IMG-20220508-WA00171.jpg'),
(5, 10, 'Rifqi', 'rifqi', '12345678', 'admin', 'September_2020_(793)1.jpg'),
(6, 8, 'Ilham', 'ilham', '12345678', 'admin', 'WhatsApp_Image_2022-05-08_at_19_15_26_(2)1.jpeg'),
(7, 8, 'Staff', 'staff_01', '12345678', 'staff', 'user1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indeks untuk tabel `cekstunting`
--
ALTER TABLE `cekstunting`
  ADD PRIMARY KEY (`id_cek`),
  ADD KEY `id_anak` (`id_anak`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `gizilk`
--
ALTER TABLE `gizilk`
  ADD PRIMARY KEY (`id_gizilk`);

--
-- Indeks untuk tabel `gizipr`
--
ALTER TABLE `gizipr`
  ADD PRIMARY KEY (`id_gizipr`);

--
-- Indeks untuk tabel `posyandu`
--
ALTER TABLE `posyandu`
  ADD PRIMARY KEY (`id_posyandu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_posyandu` (`id_posyandu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `cekstunting`
--
ALTER TABLE `cekstunting`
  MODIFY `id_cek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `gizilk`
--
ALTER TABLE `gizilk`
  MODIFY `id_gizilk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `gizipr`
--
ALTER TABLE `gizipr`
  MODIFY `id_gizipr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `posyandu`
--
ALTER TABLE `posyandu`
  MODIFY `id_posyandu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
