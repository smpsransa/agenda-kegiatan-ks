-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 07:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `pukul` time NOT NULL DEFAULT current_timestamp(),
  `tempat` text NOT NULL,
  `acara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `pukul`, `tempat`, `acara`) VALUES
('4aaa3f6a-c16c-4aa6-9e4e-53d84706c75f', '2024-01-17', '00:02:00', 'yogyakarta', 'ngopi');

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
('1121a199-af57-4347-b97e-f2add7818c0d', '430', 'Pendidikan', 'informasi pendidikan', 'fgfgdf'),
('6e821c5f-2553-46d1-b5de-31a06f4ec351', '430', 'Pendidikan', 'informasi pendidikan', 'fgfgdf'),
('6fe4f4b0-0fc7-4f0e-af0a-295b64b37f1a', '430', 'Pendidikan', 'informasi pendidikan', 'fgfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `statement_out`
--

CREATE TABLE `statement_out` (
  `id` varchar(36) NOT NULL,
  `code_id` varchar(36) NOT NULL,
  `date` date NOT NULL,
  `to` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
