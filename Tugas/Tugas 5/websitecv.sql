-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 06.33
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
-- Database: `websitecv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telpon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `github` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `ttl`, `kota`, `telpon`, `email`, `github`, `linkedin`) VALUES
(1, '31 May 2000', 'Surabaya', '081234764444', 'dwe22@gmail.com', 'dwiwahyueffendi', 'dwiwahyueffendi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edukasi`
--

CREATE TABLE `edukasi` (
  `id` int(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `edukasi`
--

INSERT INTO `edukasi` (`id`, `logo`, `jenjang`, `tahun`) VALUES
(1, 'Image/Home/logosd.png', 'SDN SIWALANKERTO III / 419', '2006 - 2012'),
(2, 'Image/Home/logosmp.png', 'SMPN 36 SURABAYA', '2012 - 2015'),
(3, 'Image/Home/logosma.png', 'SMA KEMALA BHAYANGKARI 1 SURABAYA', '2015 - 2018'),
(4, 'Image/Home/logos1.png', 'UPN VETERAN JAWA TIMUR', '2018 - Now');

-- --------------------------------------------------------

--
-- Struktur dari tabel `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `film` varchar(50) NOT NULL,
  `rilis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `movie`
--

INSERT INTO `movie` (`id`, `poster`, `film`, `rilis`) VALUES
(1, 'Image/Home/3Idiot.png', '3 Idiots', '2009'),
(2, 'Image/Home/doctorstrang.png', 'Docter Strange', '2016'),
(3, 'Image/Home/moneyheis.png', 'Money Heist', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `keterangan` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id`, `gambar`, `jenis`, `keterangan`) VALUES
(1, 'Image/Home/linux.png', 'Linux Enthusiast', 'I am a big fan of the Linux operating system. Because of what? because Linux is open source and runs on any device. My laptop uses the Ubuntu distro that I use to work on projects. Because this OS is easier to use and I like it more than others'),
(2, 'Image/Home/backend.png', 'Backend Developer', 'Back-end developers primarily develop and maintain the core functional logic and operations of a software application or information system. Typically, a back-end developer has expert programming skills in Java, Kotlin and other high-level programming languages.'),
(3, 'Image/Home/brain.png', 'Artificial Intelligence', 'Sometimes called machine intelligence, is intelligence demonstrated by machines, unlike the natural intelligence displayed by humans and animals. Colloquially, the term \"artificial intelligence\" is often used to describe machines (or computers) that mimic \"cognitive\" functions that humans associate with the human mind, such as \"learning\" and \"problem solving\".'),
(4, 'Image/Home/android.png', 'Mobile Developer', 'A mobile developer creates software for mobile devices and technology. Whether for an Android, Apple or Windows platform, a mobile developer must learn the software development environment and programming languages for their chosen platform.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edukasi`
--
ALTER TABLE `edukasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `edukasi`
--
ALTER TABLE `edukasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
