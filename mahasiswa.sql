-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 13.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `tanglah` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `nim`, `jurusan`, `tanglah`, `email`, `alamat`) VALUES
(1, 'Rion Djuwan Fadillah', '1905112045', 'Teknik Komputer', '24-04-2000', 'riondjuwan@gmail.com', 'jl. balam no 5a, seisikambing medan'),
(2, 'Dina LockHeart', '1905879067', 'Teknik Komputer', '23-09-2005', 'dinalock@gmail.com', 'Jl.Abdul Hakim GG.Susuk II No. 9a, Medan Selayang'),
(3, 'Dino Lustin', '1708672045', 'Teknik Sipil', '28-09-2008', 'Dino@gmail.com', 'JL.Sisingamangaraja no 90, amplas'),
(5, 'Djuwan Farloh', '1908056789', 'Teknik Sipil', '2005-01-08', 'Dharmawat@gmail.com', 'Jl. Sore no 90, Panam, Pekanbaru, Riau'),
(6, 'Muhammad Ade', '18097890', 'TEkonik', '2009-10-08', 'Dharmawat@gmail.com', 'Jl. Jati Kularga no 90, Takerang labuai, Pekanbaru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Rion', 'Rion90', '12345', 'admin'),
(2, 'Josep', 'Josep45', '67890', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
