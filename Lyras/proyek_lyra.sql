-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2023 pada 08.29
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_lyra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(10) NOT NULL,
  `jenis_kendaraan` enum('Roda Dua','Roda Empat') NOT NULL,
  `merek` varchar(30) NOT NULL,
  `no_polisi` varchar(30) NOT NULL,
  `tanggal_pajak` date NOT NULL,
  `kondisi` enum('Rusak Parah','Rusak Ringan','Tidak Ada Kerusakan') NOT NULL,
  `photo` varchar(30) NOT NULL,
  `keterangan` enum('ada','bengkel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `jenis_kendaraan`, `merek`, `no_polisi`, `tanggal_pajak`, `kondisi`, `photo`, `keterangan`) VALUES
(2, 'Roda Dua', 'kawasaki/KLX 150S', ' B 6378 PVQ', '2023-09-12', 'Rusak Ringan', 'kawaski.jpg', 'ada'),
(3, 'Roda Dua', 'kawasaki/KLX 150 S', 'B6058 PTQ', '2023-09-06', 'Rusak Ringan', 'motor.png', 'ada'),
(4, 'Roda Dua', 'Honda/Megapro', 'Z 5034 N', '2023-07-12', 'Tidak Ada Kerusakan', 'honda.jpg', 'ada'),
(5, 'Roda Dua', 'kawasaki KLX/150 S', 'B 6379 PVQ', '2023-09-06', 'Tidak Ada Kerusakan', 'klx.jpg', 'ada'),
(6, 'Roda Dua', 'honda/megapro', ' Z5035 N', '2023-04-13', 'Tidak Ada Kerusakan', '', 'ada'),
(7, 'Roda Dua', 'Yamaha/2 BU AT', ' Z 5326 N', '2023-11-09', 'Tidak Ada Kerusakan', '', 'ada'),
(8, 'Roda Dua', 'kawasaki KLX/150 S', 'D 4793 E', '2024-01-04', 'Rusak Ringan', '', 'bengkel'),
(9, 'Roda Dua', 'Yamaha/2 BU AT', 'Z 5327 N', '2023-09-12', 'Tidak Ada Kerusakan', '', 'ada'),
(10, 'Roda Dua', 'Yamaha/2 BU AT', 'Z 5325 N', '2023-08-19', 'Tidak Ada Kerusakan', '', 'ada'),
(11, 'Roda Dua', 'Honda/megapro', 'Z 5032 N', '2023-05-18', 'Tidak Ada Kerusakan', '', 'ada'),
(12, 'Roda Dua', 'Yamaha /SE 88', 'Z 5853 N', '2024-04-21', 'Tidak Ada Kerusakan', '', 'ada'),
(13, 'Roda Dua', 'Kawasaki /KLX 150 S', 'D 4808 E', '2024-03-07', 'Tidak Ada Kerusakan', '', 'ada'),
(14, 'Roda Dua', 'Kawaski/150 S', 'B 6059 PTQ', '2023-12-08', 'Tidak Ada Kerusakan', '', 'ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', '356a192b7913b04c54574d18c28d46e6395428ab');

-- --------------------------------------------------------

--
-- Struktur dari tabel `servis`
--

CREATE TABLE `servis` (
  `id_servis` int(10) NOT NULL,
  `tanggal_servis` date NOT NULL,
  `merek` varchar(50) NOT NULL,
  `servis` varchar(30) NOT NULL,
  `total` int(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `servis`
--

INSERT INTO `servis` (`id_servis`, `tanggal_servis`, `merek`, `servis`, `total`, `photo`) VALUES
(2, '2023-09-04', 'honda', 'aki', 10, ''),
(3, '2023-09-14', 'yamaha', 'rem', 170, ''),
(5, '2023-09-23', 'brio', 'ban', 34, ''),
(8, '2023-02-08', 'toyota avanza', 'stang', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id_servis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `servis`
--
ALTER TABLE `servis`
  MODIFY `id_servis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
