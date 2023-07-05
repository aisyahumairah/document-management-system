-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 04:27 PM
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
-- Database: `db_dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_department`
--

CREATE TABLE `tb_department` (
  `dept_code` char(10) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_department`
--

INSERT INTO `tb_department` (`dept_code`, `dept_name`) VALUES
('99', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_document`
--

CREATE TABLE `tb_document` (
  `d_code` char(20) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_file` varchar(100) NOT NULL,
  `d_tarikh_keluaran` date NOT NULL,
  `d_catatan` varchar(200) DEFAULT NULL,
  `owner_code` char(10) DEFAULT NULL,
  `d_perkhidmatan` int(11) DEFAULT NULL,
  `d_pecahan` int(11) DEFAULT NULL,
  `d_kategori` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawatan`
--

CREATE TABLE `tb_jawatan` (
  `j_id` int(11) NOT NULL,
  `j_name` varchar(50) NOT NULL,
  `j_gred` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jawatan`
--

INSERT INTO `tb_jawatan` (`j_id`, `j_name`, `j_gred`) VALUES
(1, 'Admin', '99');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `k_id` int(11) NOT NULL,
  `k_code` varchar(10) NOT NULL,
  `k_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pecahan`
--

CREATE TABLE `tb_pecahan` (
  `pecahan_id` int(11) NOT NULL,
  `pecahan_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perkhidmatan`
--

CREATE TABLE `tb_perkhidmatan` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_ic` varchar(15) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_jawatan` int(11) NOT NULL,
  `s_dept` char(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`s_id`, `s_name`, `s_ic`, `s_email`, `s_password`, `s_jawatan`, `s_dept`, `role`) VALUES
(12345, 'Admin', '0123456789012', 'admin@gmail.com', 'password', 1, '99', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_department`
--
ALTER TABLE `tb_department`
  ADD PRIMARY KEY (`dept_code`);

--
-- Indexes for table `tb_document`
--
ALTER TABLE `tb_document`
  ADD PRIMARY KEY (`d_code`),
  ADD KEY `owner_code` (`owner_code`),
  ADD KEY `d_perkhidmatan` (`d_perkhidmatan`),
  ADD KEY `d_pecahan` (`d_pecahan`),
  ADD KEY `d_kategori` (`d_kategori`);

--
-- Indexes for table `tb_jawatan`
--
ALTER TABLE `tb_jawatan`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `tb_pecahan`
--
ALTER TABLE `tb_pecahan`
  ADD PRIMARY KEY (`pecahan_id`);

--
-- Indexes for table `tb_perkhidmatan`
--
ALTER TABLE `tb_perkhidmatan`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_ic` (`s_ic`),
  ADD UNIQUE KEY `s_email` (`s_email`),
  ADD KEY `s_jawatan` (`s_jawatan`),
  ADD KEY `s_dept` (`s_dept`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jawatan`
--
ALTER TABLE `tb_jawatan`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pecahan`
--
ALTER TABLE `tb_pecahan`
  MODIFY `pecahan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_perkhidmatan`
--
ALTER TABLE `tb_perkhidmatan`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_document`
--
ALTER TABLE `tb_document`
  ADD CONSTRAINT `tb_document_ibfk_1` FOREIGN KEY (`owner_code`) REFERENCES `tb_department` (`dept_code`),
  ADD CONSTRAINT `tb_document_ibfk_2` FOREIGN KEY (`d_perkhidmatan`) REFERENCES `tb_perkhidmatan` (`p_id`),
  ADD CONSTRAINT `tb_document_ibfk_3` FOREIGN KEY (`d_pecahan`) REFERENCES `tb_pecahan` (`pecahan_id`),
  ADD CONSTRAINT `tb_document_ibfk_4` FOREIGN KEY (`d_kategori`) REFERENCES `tb_kategori` (`k_id`);

--
-- Constraints for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD CONSTRAINT `tb_staff_ibfk_1` FOREIGN KEY (`s_jawatan`) REFERENCES `tb_jawatan` (`j_id`),
  ADD CONSTRAINT `tb_staff_ibfk_2` FOREIGN KEY (`s_dept`) REFERENCES `tb_department` (`dept_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
