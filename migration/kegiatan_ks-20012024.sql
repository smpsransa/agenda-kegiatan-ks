-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2024 at 01:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` varchar(36) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `start` time NOT NULL DEFAULT current_timestamp(),
  `end` time NOT NULL DEFAULT current_timestamp(),
  `tempat` text NOT NULL,
  `acara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `start`, `end`, `tempat`, `acara`) VALUES
('066c212d-629c-431d-9e20-6fa4fd8a10e0', '2024-01-19', '12:20:00', '13:20:00', 'Badakan', 'Badak Bercula 1'),
('0fb227ed-c6b9-4284-aa09-29aa3083bcda', '2024-01-20', '13:19:00', '16:19:00', 'Kuala Lumpur', 'Mandi Lumpur');

-- --------------------------------------------------------

--
-- Table structure for table `statement_code`
--

CREATE TABLE `statement_code` (
  `id` varchar(36) NOT NULL,
  `code` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `more` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statement_code`
--

INSERT INTO `statement_code` (`id`, `code`, `name`, `description`, `more`) VALUES
('06cbf979-f39e-420b-99c7-33878142414d', '426', 'keolahragaan', 'Cabang olahraga, Instruktur, Pelatih, Sarana Olahraga, Pesta Olahraga', 'PON, POR, Olimpiade, dsb'),
('34c0288e-c4e5-430a-95d6-447e65096dcf', '422', 'administrasi sekolah', 'Persyaratan masuk sekolah, Tryout, Testing, Ujian Masuk Sekolah, Pendaftaran, MOS, Tahun Pelajaran, Hari Libur, Uang Sekolah', '(SPP, BOP, Beasiswa, Biaya Belajar Mandiri, Dsb)'),
('35955c13-491f-417f-845a-badced417a1d', '429', 'pendidikan kedinasan', 'MGMP', ''),
('483faa9f-5b22-47cc-b923-47df68ca4fbe', '424', 'tenaga pengajar', 'Tenaga Pengajar: Guru, Dosen, dsb', 'Tenaga Non Pengajar: Pengawas Sekolah, Tenaga Administrasi, dsb'),
('5831cf78-b69a-4ce7-bd36-f16a1507d722', '420', 'pendidikan', '', ''),
('64500787-1831-47e9-a82a-aab5d677b5ef', '428', 'kepramukaan', 'Persami, Jambore, Lomba, Kemah, dsb', ''),
('968271f5-8e6e-4403-ab88-091df5953b1b', '421', 'sekolah', 'Pra Sekolah / Play Group, SD, SMP, dsb', 'Kegiatan Pelajar: Class Meeting, Ekstrakurikuler, PLS'),
('9d1a030a-e4df-48fd-8f4b-c108045ee295', '425', 'sarana pendidikan', 'Gedung, Buku, Perlengkapan Sekolah, dsb', ''),
('e1bf8303-ec47-4f71-9214-ec21f80049de', '427', 'kepemudaan', 'Organisasi dan Kegiatan Remaja, Gelanggang Remaja, Karangtaruna, dsb', ''),
('f71dc608-9b5b-467e-92a7-69a013d3f340', '423', 'metode belajar', 'Ujian, UTS, UAS, Kuliah, Ceramah, Diskusi, KBK, Silabus, Karya Tulis, KKN, PPL, dsb', '');

-- --------------------------------------------------------

--
-- Table structure for table `statement_out`
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
-- Dumping data for table `statement_out`
--

INSERT INTO `statement_out` (`id`, `code_id`, `date`, `sent`, `about`, `note`) VALUES
('df76d6d5-19e0-4b6b-a331-88e3c879609a', '34c0288e-c4e5-430a-95d6-447e65096dcf', '2023-01-04', 'Ybs', 'SK Pembuat RKAS', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statement_code`
--
ALTER TABLE `statement_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statement_out`
--
ALTER TABLE `statement_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_id` (`code_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `statement_out`
--
ALTER TABLE `statement_out`
  ADD CONSTRAINT `statement_out_ibfk_1` FOREIGN KEY (`code_id`) REFERENCES `statement_code` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
