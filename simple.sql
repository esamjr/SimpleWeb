-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2020 pada 10.57
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `name`, `age`, `email`) VALUES
(4, 'Agil Dimas', 21, 'agildimasjr1@gmail.com'),
(5, 'Jeremy', 21, 'jeremydotcom@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'gaben1.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(4, 'agildimasjr', 'agildimasjr@gmail.com', '$2y$10$fUfBxW8gSiP97xv9JlQVyO.WrxoUa25M/qc6xIgiu69bb6a7xvtMS', 'Agil Dimas', 'default.svg'),
(5, 'agildimasjr1', 'agildimasjr1@gmail.com', '$2y$10$NsPtYzw3KBJZW63mWP2rTe.YivLAbFRL3ATp.zeFA.fSWjb1EwbH2', 'Agil Dimas', 'default.svg'),
(7, 'admin', 'admin@gmail.com', '$2y$10$rPrWnSWyvV6wk7CX4Spb.O3L/4dSHcQmhe.pG0E971z5/mLhdHpKS', 'admin', 'default.svg'),
(8, 'user', 'user@gmail.com', '$2y$10$ckfb3AjPJiXSsF2Yczzutu3uUozMc6QGr2m1zCq1HSvYZhz3lxUMK', 'Agil DimasH ', 'gaben.gif'),
(9, 'agildimasjr2', 'agildimasjr1@gmail.com', '$2y$10$DxW9mpyPcJmJPGq7O2.fROIwzMO1b0aydE7eNcdZxjY48pxfL0hV.', '4', 'gaben1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
