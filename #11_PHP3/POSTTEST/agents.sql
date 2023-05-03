-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 03:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php3_pt`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `tipe` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `email`, `password`, `tipe`) VALUES
(1, 'Haniif', 'haniif@bin.com', 'haniifpass', 'Intelejen'),
(2, 'Satria', 'satria@bin.com', 'satriapass', 'Infiltrasi'),
(5, 'James Bond', 'test@mail.com', 'test', 'Infiltrasi');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `mission` varchar(255) DEFAULT NULL,
  `pemberi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `mission`, `pemberi`) VALUES
(1, 'Kerja Kantor', 'Agent A'),
(2, 'Isi Berkas', 'Agent B'),
(3, 'Dinas', 'Agent C');

-- --------------------------------------------------------

--
-- Table structure for table `history_agent`
--

CREATE TABLE `history_agent` (
  `id` int(11) NOT NULL,
  `id_agent` int(11) DEFAULT NULL,
  `id_history` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_agent`
--

INSERT INTO `history_agent` (`id`, `id_agent`, `id_history`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 5, 1),
(4, 1, 3),
(5, 2, 1),
(6, 5, 2),
(7, 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `history_agent`
--
ALTER TABLE `history_agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_history` (`id_history`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_agent`
--
ALTER TABLE `history_agent`
  ADD CONSTRAINT `history_agent_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id`),
  ADD CONSTRAINT `history_agent_ibfk_2` FOREIGN KEY (`id_history`) REFERENCES `history` (`id_history`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
