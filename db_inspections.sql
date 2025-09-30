-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 06:19 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inspections`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_his` int(11) NOT NULL,
  `id_line` int(11) NOT NULL,
  `id_part` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lb_part` varchar(100) NOT NULL,
  `lb_box` varchar(100) NOT NULL,
  `lb_sn` varchar(100) NOT NULL,
  `lb_eancode` int(11) NOT NULL,
  `lb_vnl_bag` varchar(100) NOT NULL,
  `lb_mn_book` varchar(100) NOT NULL,
  `lb_screw` varchar(100) NOT NULL,
  `lb_holder` varchar(100) NOT NULL,
  `lb_cover_1` varchar(100) NOT NULL,
  `lb_cover_2` varchar(100) NOT NULL,
  `lb_std_base` varchar(100) NOT NULL,
  `lb_bracket_std` varchar(100) NOT NULL,
  `date_box_sc` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_part_sc` varchar(100) NOT NULL,
  `date_sn_sc` varchar(100) NOT NULL,
  `date_ean_sc` varchar(100) NOT NULL,
  `date_vnl_bag` varchar(100) NOT NULL,
  `date_mn_book` varchar(100) NOT NULL,
  `date_screw_sc` varchar(100) NOT NULL,
  `date_holder_sc` varchar(100) NOT NULL,
  `date_cover1_sc` varchar(100) NOT NULL,
  `date_cover2_sc` varchar(100) NOT NULL,
  `date_std_base_sc` varchar(100) NOT NULL,
  `date_bracket_std` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `remain_qty` int(11) NOT NULL,
  `judge` varchar(5) NOT NULL,
  `status` varchar(5) NOT NULL,
  `shift` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `line`
--

CREATE TABLE `line` (
  `id_line` int(11) NOT NULL,
  `namaline` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `line`
--

INSERT INTO `line` (`id_line`, `namaline`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'CSKD'),
(5, 'Outgoing');

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `id_part` int(11) NOT NULL,
  `part_name` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `eancode` varchar(100) NOT NULL,
  `lb_av` varchar(50) NOT NULL,
  `lb_decor` varchar(50) NOT NULL,
  `color_part` varchar(50) NOT NULL,
  `part_type` varchar(50) NOT NULL,
  `part_group` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`id_part`, `part_name`, `model`, `eancode`, `lb_av`, `lb_decor`, `color_part`, `part_type`, `part_group`, `customer`, `reg_date`, `id_user`) VALUES
(1, 'ST-G4SN65.AKR', '', '8806096110430', '', '', '', 'BC', 1, 'LGE', '2024-07-17 04:02:04', 0),
(2, 'AAN30020040.AKR', '', '8806087959628', '', '', '', 'MC', 2, 'LGE', '2024-07-17 04:02:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namauser` varchar(50) NOT NULL,
  `password` varchar(6) NOT NULL,
  `team` varchar(1) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_his`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `part_name` (`id_part`),
  ADD KEY `id_line` (`id_line`);

--
-- Indexes for table `line`
--
ALTER TABLE `line`
  ADD PRIMARY KEY (`id_line`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`id_part`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_his` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `line`
--
ALTER TABLE `line`
  MODIFY `id_line` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
