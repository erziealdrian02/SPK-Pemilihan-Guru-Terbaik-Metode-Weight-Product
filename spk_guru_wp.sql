-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 07:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_guru_wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `guru_id` varchar(50) NOT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `jk_guru` varchar(50) DEFAULT NULL,
  `nmr_guru` varchar(100) DEFAULT NULL,
  `alamat_guru` text DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `pm` int(11) DEFAULT 0,
  `ab` int(11) DEFAULT 0,
  `pre` int(11) DEFAULT 0,
  `tj` int(11) DEFAULT 0,
  `dis` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`guru_id`, `nip`, `nama_guru`, `jk_guru`, `nmr_guru`, `alamat_guru`, `profile`, `pm`, `ab`, `pre`, `tj`, `dis`) VALUES
('GUR01', '1231234414', 'Intan Apriliyanti, S.Pd', 'Perempuan', '08124123123', 'Kab. Bogor Jonggol', 'about-image.jpg', 5, 4, 5, 3, 5),
('GURU18', '123875757575757555', 'Ramdhoni, S.Kom', 'Laki-Laki', '9848337436273', 'Alamat Satu', 'about-image.jpg', 3, 4, 3, 4, 4),
('GURU27', '855757575757575757', 'Della Ruth Magrid, S.Pd.', 'Laki-Laki', '8127467234738', 'Jalan Babakan Madang sdkahwidhoi joiasjd kask jaoiwdjios jdkj', 'logo-icon.ico', 4, 4, 5, 4, 4),
('GURU30', '123134234435465768', 'Dian Riana Novita H, S.Pd', 'Perempuan', '9848337436273', 'Jalan Babakan Madang sdkahwidhoi joiasjd kask jaoiwdjios jdkj', 'logo2.jpg', 3, 3, 4, 4, 5),
('GURU56', '123875757575757555', 'Soniawati, S.Pd.', 'Laki-Laki', '9848337436273', 'Jakarta', 'about-image.jpg', 4, 5, 3, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `kriteria_id` varchar(30) NOT NULL,
  `pm` int(11) DEFAULT NULL,
  `ab` int(11) DEFAULT NULL,
  `pre` int(11) DEFAULT NULL,
  `tj` int(11) DEFAULT NULL,
  `dis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kriteria_id`, `pm`, `ab`, `pre`, `tj`, `dis`) VALUES
('K1', 5, 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` varchar(50) NOT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `nama_pengguna`, `username`, `password`, `profile`) VALUES
('PENG29', 'Test User Edit', 'Test User', 'Test User', 'c10.PNG'),
('PENG55', 'Test Add', 'Test Add', 'Test Add', 'challengeunavailable.PNG'),
('PENG59', 'TEst Edit User', 'username', '123456', 'c12.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kriteria_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
