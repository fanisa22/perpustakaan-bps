-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Nov 30, 2022 at 07:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11
=======
-- Waktu pembuatan: 30 Nov 2022 pada 07.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10
>>>>>>> e1e6e47c8ca4d09a1d9d7468c9219781db4b2153

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan-bps`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `login`
=======
-- Struktur dari tabel `admin`
>>>>>>> e1e6e47c8ca4d09a1d9d7468c9219781db4b2153
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
<<<<<<< HEAD
-- Dumping data for table `login`
=======
-- Dumping data untuk tabel `admin`
>>>>>>> e1e6e47c8ca4d09a1d9d7468c9219781db4b2153
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, '', 'admin', 'admin123', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_role`
--

CREATE TABLE `login_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_role`
--

INSERT INTO `login_role` (`id`, `role`) VALUES
(1, 'Superadmin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` varchar(50) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
('P001', 'Gramedia Pustaka Utama'),
('P002', 'Grasindo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(25) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `id_penerbit` int(15) NOT NULL,
  `id_pengarang` int(15) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `tahun` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` int(15) NOT NULL,
  `nama_pengarang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(2, 'dfdsf');

--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Indexes for table `login`
=======
-- Indeks untuk tabel `admin`
>>>>>>> e1e6e47c8ca4d09a1d9d7468c9219781db4b2153
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_role`
--
ALTER TABLE `login_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_role`
--
ALTER TABLE `login_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id_pengarang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> e1e6e47c8ca4d09a1d9d7468c9219781db4b2153
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
