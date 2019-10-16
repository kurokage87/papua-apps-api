-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 10:23 AM
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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `SN` varchar(255) DEFAULT NULL,
  `iplan` varchar(100) NOT NULL,
  `esnmodem` varchar(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `file_user_create` varchar(255) DEFAULT NULL,
  `file_date_create` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `date_create` varchar(255) DEFAULT NULL,
  `user_create` varchar(255) DEFAULT NULL,
  `jenis_barang` varchar(255) DEFAULT NULL,
  `flag_data_barang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `task_id`, `nama_barang`, `type`, `SN`, `iplan`, `esnmodem`, `status`, `file_url`, `file_user_create`, `file_date_create`, `description`, `keterangan`, `date_create`, `user_create`, `jenis_barang`, `flag_data_barang`) VALUES
(5, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cost_task`
--

CREATE TABLE `cost_task` (
  `id` int(11) NOT NULL,
  `cost` bigint(20) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status_cost` varchar(50) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost_task`
--

INSERT INTO `cost_task` (`id`, `cost`, `keterangan`, `status_cost`, `task_id`) VALUES
(7, 32321, 'sdfsdf', 'SDSD', 4),
(8, 32321, 'sdfsdf', 'persetujuan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `data_teknisi`
--

CREATE TABLE `data_teknisi` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `fail_hw` varchar(255) DEFAULT NULL,
  `sqf` varchar(255) DEFAULT NULL,
  `initial_esno` varchar(255) DEFAULT NULL,
  `carrier_to_noice` varchar(255) DEFAULT NULL,
  `hasil_xpoll` varchar(255) DEFAULT NULL,
  `cpi` varchar(255) DEFAULT NULL,
  `operator_satelite` varchar(255) DEFAULT NULL,
  `operator_helpdesk` varchar(255) DEFAULT NULL,
  `out_pln` varchar(255) DEFAULT NULL,
  `out_ups` varchar(255) DEFAULT NULL,
  `ups_for_backup` varchar(255) DEFAULT NULL,
  `suhu_ruangan` varchar(255) DEFAULT NULL,
  `type_mounting` varchar(255) DEFAULT NULL,
  `panjang_kabel` varchar(255) DEFAULT NULL,
  `letak_antena` varchar(255) DEFAULT NULL,
  `letak_modem` varchar(255) DEFAULT NULL,
  `kondisi_bangunan` varchar(255) DEFAULT NULL,
  `analisa_problem` varchar(255) DEFAULT NULL,
  `aktifitas_solusi` varchar(255) DEFAULT NULL,
  `flag_data_teknis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_task`
--

CREATE TABLE `detail_task` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `id_status_perbaikan` int(11) DEFAULT NULL,
  `flag_data_instalasi` int(11) DEFAULT NULL,
  `diameter_antena` varchar(255) DEFAULT NULL,
  `polarisasi_arah_antena` varchar(255) DEFAULT NULL,
  `elevasi_arah_antena` varchar(255) DEFAULT NULL,
  `azimuth_arah_antena` varchar(255) DEFAULT NULL,
  `source_listrik` varchar(255) DEFAULT NULL,
  `kabel_roll` varchar(255) DEFAULT NULL,
  `perangkat_ke_ups` varchar(255) DEFAULT NULL,
  `kvaups` varchar(255) DEFAULT NULL,
  `frequency_band_modulation` varchar(255) DEFAULT NULL,
  `ip_management` varchar(100) DEFAULT NULL,
  `receive_symbole_rate` varchar(100) DEFAULT NULL,
  `phase_netral_pln` varchar(100) DEFAULT NULL,
  `phase_netral_ups` varchar(100) DEFAULT NULL,
  `phase_netral_genset` varchar(100) DEFAULT NULL,
  `phase_ground_pln` varchar(100) DEFAULT NULL,
  `phase_ground_ups` varchar(100) DEFAULT NULL,
  `phase_ground_genset` varchar(100) DEFAULT NULL,
  `netral_ground_pln` varchar(100) DEFAULT NULL,
  `netral_ground_ups` varchar(100) DEFAULT NULL,
  `netral_ground_genset` varchar(100) DEFAULT NULL,
  `satelite_longitude` varchar(255) DEFAULT NULL,
  `iplan1` varchar(100) DEFAULT NULL,
  `subnetmask1` varchar(100) DEFAULT NULL,
  `iplan2` varchar(100) DEFAULT NULL,
  `subnetmask2` varchar(100) DEFAULT NULL,
  `hasil_test_alamat1` varchar(255) DEFAULT NULL,
  `success_test1` varchar(255) DEFAULT NULL,
  `loss_test1` varchar(255) DEFAULT NULL,
  `keterangan_test1` varchar(255) DEFAULT NULL,
  `hasil_test_alamat2` varchar(255) DEFAULT NULL,
  `success_test2` varchar(255) DEFAULT NULL,
  `loss_test2` varchar(255) DEFAULT NULL,
  `keterangan_test2` varchar(255) DEFAULT NULL,
  `hasil_test_alamat3` varchar(255) DEFAULT NULL,
  `success_test3` varchar(255) DEFAULT NULL,
  `loss_test3` varchar(255) DEFAULT NULL,
  `keterangan_test3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `flag_upload_foto` varchar(255) DEFAULT NULL,
  `file_usercreate` varchar(255) DEFAULT NULL,
  `flagtime` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `your_image_64_name` varchar(255) DEFAULT NULL,
  `your_image_64_file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

CREATE TABLE `general_info` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `atm_id` int(11) DEFAULT NULL,
  `IPLAN` varchar(255) DEFAULT NULL,
  `tgl_berangkat` varchar(255) DEFAULT NULL,
  `tgl_selesai_kerjaan` varchar(255) DEFAULT NULL,
  `tgl_pulang` varchar(255) DEFAULT NULL,
  `tgl_status_perbaikan` varchar(255) DEFAULT NULL,
  `user_update` varchar(255) DEFAULT NULL,
  `date_update` varchar(255) DEFAULT NULL,
  `flag_general_info` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jarkom`
--

CREATE TABLE `jarkom` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jarkom`
--

INSERT INTO `jarkom` (`id`, `nama`) VALUES
(1, '1234'),
(2, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_biaya`
--

CREATE TABLE `jenis_biaya` (
  `id` int(11) NOT NULL,
  `nama_jenis_biaya` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_biaya`
--

INSERT INTO `jenis_biaya` (`id`, `nama_jenis_biaya`) VALUES
(1, 'qwert'),
(2, 'asdfg'),
(3, 'asdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `kanwil` varchar(255) DEFAULT NULL,
  `kanca_induk` varchar(255) DEFAULT NULL,
  `alamat_install` text DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `jarkom_id` int(11) DEFAULT NULL,
  `satelite_id` int(11) DEFAULT NULL,
  `nama_pic` varchar(255) DEFAULT NULL,
  `no_hp_pic` varchar(255) DEFAULT NULL,
  `hub` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `alamat_sekarang` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `flag_data_lokasi` varchar(255) DEFAULT NULL,
  `customer_pic_nama` varchar(255) DEFAULT NULL,
  `customer_pic_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1562252873),
('m130524_201442_init', 1562252876),
('m190522_140719_tabel_master', 1562252878),
('m190526_152631_tabel_cost_task', 1562252879),
('m190528_145723_tabel_spd_vid', 1562252880),
('m190611_075018_tambahan_vid_survey', 1562252890);

-- --------------------------------------------------------

--
-- Table structure for table `satelite`
--

CREATE TABLE `satelite` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satelite`
--

INSERT INTO `satelite` (`id`, `nama`) VALUES
(1, 'asdasd'),
(2, 'asdasd123');

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

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `alamat_pengiriman_survey` text DEFAULT NULL,
  `tempat_penyimpanan_survey` varchar(255) DEFAULT NULL,
  `nama_pic_survey` varchar(255) DEFAULT NULL,
  `kontsk_pic_survey` varchar(255) DEFAULT NULL,
  `penempatan_grounding_survey` varchar(255) DEFAULT NULL,
  `ukuran_antena_survey` varchar(255) DEFAULT NULL,
  `tempat_antena_survey` varchar(255) DEFAULT NULL,
  `kekuatan_roof_survey` varchar(255) DEFAULT NULL,
  `jenis_mounting_survey` varchar(255) DEFAULT NULL,
  `latitude_survey` varchar(255) DEFAULT NULL,
  `longitude_survey` varchar(255) DEFAULT NULL,
  `listrik_awal_survey` varchar(255) DEFAULT NULL,
  `sarpen_aci_indoor` varchar(255) DEFAULT NULL,
  `sarpen_ups_survey` varchar(255) DEFAULT NULL,
  `panjang_kabel_survey` varchar(255) DEFAULT NULL,
  `type_kabel_survey` varchar(255) DEFAULT NULL,
  `arah_antena_survey` varchar(255) DEFAULT NULL,
  `keterangan_survey` text DEFAULT NULL,
  `status_hasil_survey` varchar(255) DEFAULT NULL,
  `flag_data_survey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `nama_remote` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_task` varchar(255) DEFAULT NULL,
  `vid` int(11) DEFAULT NULL,
  `tanggal_task` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `id_jenis_task` int(11) DEFAULT NULL,
  `nama_kordinator` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status_task` varchar(255) DEFAULT NULL,
  `status_perbaikan` varchar(255) DEFAULT NULL,
  `no_stamp` varchar(255) DEFAULT NULL,
  `date_stamp` varchar(100) NOT NULL,
  `date_update` varchar(255) DEFAULT NULL,
  `user_update` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `nama_remote`, `alamat`, `no_task`, `vid`, `tanggal_task`, `provinsi`, `id_jenis_task`, `nama_kordinator`, `user_id`, `status_task`, `status_perbaikan`, `no_stamp`, `date_stamp`, `date_update`, `user_update`) VALUES
(4, 'asdsa', 'ASDASD', '1', 1, NULL, 'ASDADS', 1, 'asdadsd', 1, 'asda', 'asdasd', NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nik` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `level`, `nama`, `nik`) VALUES
(1, 'admin', 'CU6qlakzdUpZIO4TCpMffTWqfvCzbgne', '$2y$13$MjcZMhYId9LDEyhSvuk18O0BT3eneArNEfhndy/sPNczEzzVA2/BW', NULL, 'admin@admin.com', 10, 1562253658, 1562253658, NULL, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-barang-task_id-task-id` (`task_id`);

--
-- Indexes for table `cost_task`
--
ALTER TABLE `cost_task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-cost_task-task_id-task-id` (`task_id`);

--
-- Indexes for table `data_teknisi`
--
ALTER TABLE `data_teknisi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-data_teknisi-task_id-task-id` (`task_id`);

--
-- Indexes for table `detail_task`
--
ALTER TABLE `detail_task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-detail_task-task_id-task-id` (`task_id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-foto-task_id-task-id` (`task_id`);

--
-- Indexes for table `general_info`
--
ALTER TABLE `general_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-general_info-task_id-task-id` (`task_id`);

--
-- Indexes for table `jarkom`
--
ALTER TABLE `jarkom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_biaya`
--
ALTER TABLE `jenis_biaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-lokasi-task_id-task-id` (`task_id`),
  ADD KEY `fk-lokasi-satelite_id-satelite-id` (`satelite_id`),
  ADD KEY `fk-lokasi-jarkom_id-jarkom-id` (`jarkom_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `satelite`
--
ALTER TABLE `satelite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spd`
--
ALTER TABLE `spd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-spd-task_id-task-id` (`task_id`),
  ADD KEY `fk-spd-jenis_biaya_id-jenis_biaya-id` (`jenis_biaya_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-survey-task_id-task-id` (`task_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-user-id-task-user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cost_task`
--
ALTER TABLE `cost_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_teknisi`
--
ALTER TABLE `data_teknisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_task`
--
ALTER TABLE `detail_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general_info`
--
ALTER TABLE `general_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jarkom`
--
ALTER TABLE `jarkom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_biaya`
--
ALTER TABLE `jenis_biaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `satelite`
--
ALTER TABLE `satelite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spd`
--
ALTER TABLE `spd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk-barang-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cost_task`
--
ALTER TABLE `cost_task`
  ADD CONSTRAINT `fk-cost_task-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_teknisi`
--
ALTER TABLE `data_teknisi`
  ADD CONSTRAINT `fk-data_teknisi-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_task`
--
ALTER TABLE `detail_task`
  ADD CONSTRAINT `fk-detail_task-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk-foto-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `general_info`
--
ALTER TABLE `general_info`
  ADD CONSTRAINT `fk-general_info-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `fk-lokasi-jarkom_id-jarkom-id` FOREIGN KEY (`jarkom_id`) REFERENCES `jarkom` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-lokasi-satelite_id-satelite-id` FOREIGN KEY (`satelite_id`) REFERENCES `satelite` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-lokasi-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spd`
--
ALTER TABLE `spd`
  ADD CONSTRAINT `fk-spd-jenis_biaya_id-jenis_biaya-id` FOREIGN KEY (`jenis_biaya_id`) REFERENCES `jenis_biaya` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk-spd-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `fk-survey-task_id-task-id` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `fk-user-id-task-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
