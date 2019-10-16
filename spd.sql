-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 10:25 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_papua_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `spd`
--

CREATE TABLE `spd` (
  `id` int(11) NOT NULL,
  `flagconfirm` varchar(50) DEFAULT NULL,
  `id_alamat` varchar(255) DEFAULT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `catatan_transaksi` varchar(255) DEFAULT NULL,
  `jenis_biaya_id` int(11) DEFAULT NULL,
  `nominal` bigint(20) DEFAULT NULL,
  `tgl_input_biaya` varchar(50) DEFAULT NULL,
  `sisa` varchar(255) DEFAULT NULL,
  `status_spd` varchar(50) DEFAULT NULL,
  `flagtime` varchar(255) DEFAULT NULL,
  `flagupload` varchar(255) DEFAULT NULL,
  `file_usercreate` varchar(255) DEFAULT NULL,
  `file_datecreate` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `yout_image_64_name` varchar(255) DEFAULT NULL,
  `your_image_64_file` text DEFAULT NULL,
  `iplan` varchar(255) DEFAULT NULL,
  `cacatan_transaksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spd`
--

INSERT INTO `spd` (`id`, `flagconfirm`, `id_alamat`, `file_url`, `description`, `task_id`, `catatan_transaksi`, `jenis_biaya_id`, `nominal`, `tgl_input_biaya`, `sisa`, `status_spd`, `flagtime`, `flagupload`, `file_usercreate`, `file_datecreate`, `keterangan`, `yout_image_64_name`, `your_image_64_file`, `iplan`, `cacatan_transaksi`) VALUES
(1, 'ID=\'idPenguna\'', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SPD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, 'asdsad', '1', NULL, NULL, 4, 'asd', 2, 113213, NULL, NULL, 'SPD', NULL, NULL, NULL, NULL, 'asdasd', NULL, NULL, '202.134.0.155', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spd`
--
ALTER TABLE `spd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-spd-task_id-task-id` (`task_id`),
  ADD KEY `fk-spd-jenis_biaya_id-jenis_biaya-id` (`jenis_biaya_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spd`
--
ALTER TABLE `spd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spd`
--
ALTER TABLE `spd`
  ADD CONSTRAINT `fk-spd-jenis_biaya_id-jenis_biaya-id` FOREIGN KEY (`jenis_biaya_id`) REFERENCES `jenis_biaya` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-spd-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
