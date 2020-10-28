-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2020 pada 08.48
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqlku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`contact`) VALUES
('@dnurhidayah_'),
('@dnurhidayah_'),
('@idaa_07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sqlku`
--

CREATE TABLE `sqlku` (
  `jenjang_sekolah` varchar(20) NOT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sqlku`
--

INSERT INTO `sqlku` (`jenjang_sekolah`, `nama_sekolah`) VALUES
('NOW &emsp;', 'UPN V JATIM <br>'),
('SDN &emsp;', 'SDN KALANGKETI <br>'),
('SMK &emsp;', 'SMKN 1 MAGETAN <br>'),
('SMP &emsp;', 'SMPN 4 MAGETAN <br>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sqlku`
--
ALTER TABLE `sqlku`
  ADD PRIMARY KEY (`jenjang_sekolah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
