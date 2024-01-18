-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Jan 2024 pada 18.18
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
-- Database: `kegiatan_ks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` varchar(36) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `pukul` time NOT NULL DEFAULT current_timestamp(),
  `tempat` text NOT NULL,
  `acara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `pukul`, `tempat`, `acara`) VALUES
('4aaa3f6a-c16c-4aa6-9e4e-53d84706c75f', '2024-01-17', '00:02:00', 'yk', 'ngopi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statement_code`
--

CREATE TABLE `statement_code` (
  `id` varchar(36) NOT NULL,
  `code` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `more` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `statement_code`
--

INSERT INTO `statement_code` (`id`, `code`, `name`, `description`, `more`) VALUES
('65a34300-abef-4520-a084-196125ac71a1', '430', 'pendidikan', 'gdfgdf', 'gdfgdfg'),
('b88a9eec-3e7c-42f8-96a8-ec8af5c715e1', '456', 'fdsgfdg', 'dfgdfgdfg', 'dfgdfgdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statement_out`
--

CREATE TABLE `statement_out` (
  `id` varchar(36) NOT NULL,
  `code_id` varchar(36) NOT NULL,
  `date` date NOT NULL,
  `sent` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `statement_out`
--

INSERT INTO `statement_out` (`id`, `code_id`, `date`, `sent`, `about`, `note`) VALUES
('714e7d91-6e2d-44c8-91de-238f2682029c', '65a34300-abef-4520-a084-196125ac71a1', '2024-01-18', 'Atasan', 'mantap', 'mantap');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statement_code`
--
ALTER TABLE `statement_code`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statement_out`
--
ALTER TABLE `statement_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_id` (`code_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `statement_out`
--
ALTER TABLE `statement_out`
  ADD CONSTRAINT `statement_out_ibfk_1` FOREIGN KEY (`code_id`) REFERENCES `statement_code` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
