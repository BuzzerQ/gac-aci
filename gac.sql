-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2020 pada 04.56
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gac`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ambasador`
--

CREATE TABLE `ambasador` (
  `id` varchar(255) NOT NULL,
  `id_coach` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_join` datetime NOT NULL,
  `nik_ktp` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `grade1` int(11) NOT NULL,
  `grade2` int(11) NOT NULL,
  `grade3` int(11) NOT NULL,
  `grade4` int(11) NOT NULL,
  `grade5` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `jumlah_investor` int(11) NOT NULL,
  `link_coach` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `status_gac` int(11) NOT NULL,
  `status_grade` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `coach`
--

CREATE TABLE `coach` (
  `id` varchar(255) NOT NULL,
  `id_coach` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_join` date NOT NULL,
  `nik_ktp` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `grade1` int(11) NOT NULL,
  `grade2` int(11) NOT NULL,
  `grade3` int(11) NOT NULL,
  `grade4` int(11) NOT NULL,
  `grade5` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `jumlah_investor` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `link_coach` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `status_gac` int(11) NOT NULL,
  `status_grade` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `id_grade1` varchar(255) NOT NULL,
  `id_grade2` varchar(255) NOT NULL,
  `id_grade3` varchar(255) NOT NULL,
  `id_grade4` varchar(255) NOT NULL,
  `id_grade5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `coach`
--

INSERT INTO `coach` (`id`, `id_coach`, `nama`, `tgl_join`, `nik_ktp`, `phone`, `email`, `grade1`, `grade2`, `grade3`, `grade4`, `grade5`, `password`, `tgl_daftar`, `jumlah_investor`, `pendapatan`, `link_coach`, `status`, `status_gac`, `status_grade`, `role_id`, `id_grade1`, `id_grade2`, `id_grade3`, `id_grade4`, `id_grade5`) VALUES
('GAC20010001', '', 'Administrator', '2020-01-01', '1805260704980001', '082282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$HPujXFqObYcxpyt3Ng24fuaQwnpd.A0F1t4QFS1IdSH0T2keBbOle', '2020-01-01 00:00:00', 0, 0, 'GAC20010001', 1, 1, 1, 3, '', '', '', '', ''),
('GAC20010002', '', 'Iryana', '0000-00-00', '1805260704980002', '82282107470', 'iryanammm@gmail.com', 1, 0, 0, 0, 0, '$2y$10$7WjnSzc.sus.dqWtMAZA1uFCKUaJowvb6Fhj9I2mVQz2P.dZhEx5u', '2020-01-26 21:15:42', 0, 500000, 'GAC20010002', 1, 2, 1, 3, '', '', '', '', ''),
('GAC20010003', '', 'Yoel Abraham', '0000-00-00', '1805260704980003', '82112709889', 'yoel@gmail.com', 0, 0, 0, 0, 0, '$2y$10$.jkG6WWrx0nOPvji1N/X.OIBrUfmez9PqWy296vWrWfYdqsA0S4ya', '2020-01-26 21:25:38', 0, 0, 'GAC20010003', 1, 2, 1, 3, '', '', '', '', ''),
('GAC20010004', 'GAC20010002', 'A', '0000-00-00', '1805260704980005', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$VqH0DVFr8Wc/Utmddb8SAOTVDNN/kAYtNArma5uJ4SrsR./Ajzcru', '2020-01-27 14:37:07', 0, 900000, 'GAC20010002', 1, 2, 2, 5, '', '', '', '', ''),
('GAC20010005', 'GAC20010004', 'B', '0000-00-00', '1805260704980006', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$i8l4oCaDqG.SUJiYMCl...vqwXGforg5Ev.5nnm8h.5HclNbpQoiO', '2020-01-27 14:37:50', 0, 0, 'GAC20010002', 1, 2, 3, 5, '', '', '', '', ''),
('GAC20010006', 'GAC20010004', 'B', '0000-00-00', '1805260704980007', '82112709889', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$14sYkMzkFErm3dCeXvdYs.rwZrSHlJH6kOw3kRwS/ARmC.KscOhEy', '2020-01-27 14:44:59', 0, 0, 'GAC20010002', 1, 2, 3, 5, '', '', '', '', ''),
('GAC20010007', 'GAC20010004', 'B', '0000-00-00', '1805260704980015', '82112709889', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$s/dG7Pw/dikUexpxhkQjWep20dMb0KAC.zbYK6mvK10rH4ZneOBM.', '2020-01-27 15:26:52', 0, 0, 'GAC20010002', 1, 2, 3, 5, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `investor`
--

CREATE TABLE `investor` (
  `id` varchar(255) NOT NULL,
  `id_coach` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_join` datetime NOT NULL,
  `nik_ktp` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `grade1` int(11) NOT NULL,
  `grade2` int(11) NOT NULL,
  `grade3` int(11) NOT NULL,
  `grade4` int(11) NOT NULL,
  `grade5` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `jumlah_investor` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `status_gac` int(11) NOT NULL,
  `status_grade` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `id_grade1` varchar(255) NOT NULL,
  `id_grade2` varchar(255) NOT NULL,
  `id_grade3` varchar(255) NOT NULL,
  `id_grade4` varchar(255) NOT NULL,
  `id_grade5` varchar(255) NOT NULL,
  `link_coach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `investor`
--

INSERT INTO `investor` (`id`, `id_coach`, `nama`, `tgl_join`, `nik_ktp`, `phone`, `email`, `grade1`, `grade2`, `grade3`, `grade4`, `grade5`, `password`, `tgl_daftar`, `jumlah_investor`, `pendapatan`, `status`, `status_gac`, `status_grade`, `role_id`, `id_grade1`, `id_grade2`, `id_grade3`, `id_grade4`, `id_grade5`, `link_coach`) VALUES
('1111', '1111', 'Administrator', '0000-00-00 00:00:00', '1805260704980011', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$HPujXFqObYcxpyt3Ng24fuaQwnpd.A0F1t4QFS1IdSH0T2keBbOle', '2020-01-27 12:57:25', 0, 0, 0, 1, 0, 0, '', '', '', '', '', '0'),
('GAC20010001', '', 'Hermawan', '2020-01-01 00:00:00', '1805260704980001', '82282107470', 'hermawan.lee22@gmail.com', 2, 4, 4, 1, 2, '$2y$10$/G9CHkKkzQdqcLa9xZb7Lez8iCdr8pdmqhCY4Sv4g/.N2JJLkipuK', '2020-01-28 09:09:09', 13, 1250000, 1, 2, 0, 3, '', '', '', '', '', 'GAC20010001'),
('GAC20010003', 'GAC20010001', 'A', '0000-00-00 00:00:00', '1805260704980003', '08228107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$Snv549JwSp6VYX8rq2QXmeB1kUzp0uge7Nere.tPKaSEE2AwBrEbW', '2020-01-28 16:05:01', 4, 400000, 1, 2, 1, 5, 'GAC20010001', '0', '0', '0', '0', 'GAC20010001'),
('GAC20010004', 'GAC20010003', 'B', '0000-00-00 00:00:00', '1805260704980004', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$mSi1VmCs2dRc7uASv9eAfu8LKy6d2VIpQM3.aek4URKS3itB0.8hq', '2020-01-28 16:06:01', 4, 1200000, 1, 2, 2, 5, 'GAC20010001', 'GAC20010003', '0', '0', '0', 'GAC20010001'),
('GAC20010005', 'GAC20010004', 'C', '0000-00-00 00:00:00', '1805260704980005', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$FcC/H9szzYu/MgYZ6wd9Feei2.d5t9kRIn/GQTJGISmiNTRDeqTKq', '2020-01-28 23:32:26', 0, 0, 1, 2, 3, 5, 'GAC20010001', 'GAC20010003', 'GAC20010004', '0', '0', 'GAC20010001'),
('GAC20010006', 'GAC20010005', 'D', '0000-00-00 00:00:00', '1805260704980006', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$eUlGSvxu3I0pOLfijvvjfO3LWrA8AI9nwzG.psFQrcWgLf903HAjG', '2020-01-28 23:34:59', 0, 0, 1, 2, 4, 5, 'GAC20010001', 'GAC20010003', 'GAC20010004', 'GAC20010005', '0', 'GAC20010001'),
('GAC20010007', 'GAC20010006', 'E', '0000-00-00 00:00:00', '1805260704980007', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$HfF9GMOQZa6.S3vEBq54feTUpcDKFvbdOl6YbDEnYdrbMOlcHLzgS', '2020-01-28 23:36:35', 0, 0, 1, 2, 5, 5, 'GAC20010001', 'GAC20010003', 'GAC20010004', 'GAC20010005', 'GAC20010006', 'GAC20010001'),
('GAC20010008', 'GAC20010006', 'F', '0000-00-00 00:00:00', '1805260704980008', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$79W9NQf1EEXDqtQyNjIQTeVjzMIAuvJ7kuiySn0tMrG3baHNfDNfq', '2020-01-28 23:42:20', 0, 0, 1, 2, 5, 5, 'GAC20010001', 'GAC20010003', 'GAC20010004', 'GAC20010005', 'GAC20010006', 'GAC20010001'),
('GAC20010009', '', 'B', '0000-00-00 00:00:00', '1805260704980010', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$YNyoWckRnBLcYVVOFSue5uNWXRcSLlZpAYJQNCINcGpMo/t0CFlVG', '2020-01-29 09:12:56', 0, 0, 1, 2, 1, 5, 'GAC20010001', '0', '0', '0', '0', 'GAC20010001'),
('GAC20010010', '', 'C', '0000-00-00 00:00:00', '1805260704980015', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$O3Da9ssx0OirMB2f6V94S.9IlV8PJhb/MF.NTE7dc54cKCzqDk5.2', '2020-01-29 09:16:45', 0, 0, 1, 2, 2, 5, 'GAC20010001', 'GAC20010003', '0', '0', '0', 'GAC20010001'),
('GAC20010011', 'GAC20010003', 'A', '0000-00-00 00:00:00', '1805260704980016', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$IIWqSBTIz6JjkBlC8/uf/.KenoQ6nQ3EsVJyF9fDCUfmp4BKNlEbO', '2020-01-29 09:40:21', 0, 0, 1, 2, 2, 5, 'GAC20010001', 'GAC20010003', '0', '0', '0', 'GAC20010001'),
('GAC20010012', 'GAC20010003', 'A', '0000-00-00 00:00:00', '1805260704980017', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$pf2rjkCNfA8j481471ZIeeurH/6PTO6Cgkic2JL363lPN7VT.bQVG', '2020-01-29 09:43:08', 0, 0, 1, 2, 2, 5, 'GAC20010001', 'GAC20010003', '0', '0', '0', 'GAC20010001'),
('GAC20010013', 'GAC20010004', 'B', '0000-00-00 00:00:00', '1805260704980018', '82112709889', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$oD5KNjl.c8EYh0IAn/fPtevfDj5eYp1.lnzbKClz6wqujGOMlAodi', '2020-01-29 10:09:01', 0, 0, 1, 2, 3, 5, 'GAC20010001', 'GAC20010003', 'GAC20010004', '0', '0', 'GAC20010001'),
('GAC20010014', 'GAC20010004', 'B', '0000-00-00 00:00:00', '1805260704980019', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$to6csm7LTYl3yYJeC0t1NuVSZYIoHqLYSvNYQ6If6DAtpmEGJo/qO', '2020-01-29 10:11:50', 0, 0, 1, 2, 3, 5, 'GAC20010001', 'GAC20010003', 'GAC20010004', '0', '0', 'GAC20010001'),
('GAC20010015', 'GAC20010004', 'mawan', '0000-00-00 00:00:00', '1805260704980020', '82282107470', 'hermawan.lee22@gmail.com', 0, 0, 0, 0, 0, '$2y$10$9PaLl2qP1MjZ3OlQs7dHSe8dQyAYL6pqxE1pEBrtplmIxYUl/kce2', '2020-01-29 10:39:51', 0, 0, 1, 2, 3, 5, 'GAC20010001', 'GAC20010003', 'GAC20010004', '0', '0', 'GAC20010001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id` varchar(255) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `persentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `nama`) VALUES
(1, 'Aktif'),
(2, 'Non-Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_grade`
--

CREATE TABLE `status_grade` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_grade`
--

INSERT INTO `status_grade` (`id`, `nama`, `value`) VALUES
(1, 'Grade 1', 300000),
(2, 'Grade 2', 100000),
(3, 'Grade 3', 50000),
(4, 'Grade 4', 25000),
(5, 'Grade 5', 12500),
(6, 'Elite', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_investor`
--

CREATE TABLE `status_investor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_investor`
--

INSERT INTO `status_investor` (`id`, `nama`) VALUES
(1, 'Investor'),
(2, 'Ambasador'),
(3, 'Coach'),
(4, 'National Coach'),
(5, 'International Coach');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_role`
--

CREATE TABLE `status_role` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_role`
--

INSERT INTO `status_role` (`id`, `nama`) VALUES
(1, 'International Coach'),
(2, 'National Coach'),
(3, 'Coach'),
(4, 'Ambassador'),
(5, 'Investor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ambasador`
--
ALTER TABLE `ambasador`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_grade`
--
ALTER TABLE `status_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_investor`
--
ALTER TABLE `status_investor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_role`
--
ALTER TABLE `status_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `status_grade`
--
ALTER TABLE `status_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `status_investor`
--
ALTER TABLE `status_investor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `status_role`
--
ALTER TABLE `status_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
