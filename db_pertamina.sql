-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 06:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pertamina`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_checklist`
--

CREATE TABLE `tb_checklist` (
  `id_check` int(11) NOT NULL,
  `data_check` varchar(255) NOT NULL,
  `tipe_check` varchar(255) NOT NULL,
  `remark_on` tinyint(1) NOT NULL,
  `satuan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_checklist`
--

INSERT INTO `tb_checklist` (`id_check`, `data_check`, `tipe_check`, `remark_on`, `satuan`) VALUES
(1, 'Cleanliness', 'title', 0, ''),
(2, 'Truck conditions', 'title', 0, ''),
(3, 'Fuel', 'isi', 0, ''),
(4, 'Radiator Condition / Water', 'isi', 0, ''),
(5, 'Lubricant', 'isi', 0, ''),
(6, 'Battery Condition', 'isi', 0, ''),
(7, 'Brake', 'isi', 0, ''),
(8, 'General Condition of Engine', 'isi', 0, ''),
(9, 'Horn', 'isi', 0, ''),
(10, 'Wiper', 'isi', 0, ''),
(11, 'Head & Tail Lamps Condition', 'isi', 0, ''),
(12, 'Sign Lamps', 'isi', 0, ''),
(13, 'Beacon Light', 'isi', 0, ''),
(14, 'Fueling Lamps', 'isi', 0, ''),
(15, 'PTO / Hydraulic Pump', 'isi', 0, ''),
(16, 'Compressor', 'isi', 0, ''),
(17, 'Mirrors', 'isi', 0, ''),
(18, 'Tires', 'isi', 0, ''),
(19, 'General Condition of Transmission', 'isi', 0, ''),
(20, 'Hydraulic Ladder / Platform', 'isi', 0, ''),
(21, 'Rearward Gear Warning', 'isi', 0, ''),
(22, 'Tank Condition', 'title', 0, ''),
(23, 'Step Condition', 'isi', 0, ''),
(24, 'Jet Level Sensor Condition', 'isi', 0, ''),
(25, 'Pressure Vacum Valve / Free Vent', 'isi', 0, ''),
(26, 'Water Drain Line Tank (roof area water drain)', 'isi', 0, ''),
(27, 'Safety Equipments', 'title', 0, ''),
(28, 'Flame trap condition', 'isi', 0, ''),
(29, 'Grounding and/or Bonding Cable Condition', 'isi', 0, ''),
(30, 'Interlock System', 'isi', 0, ''),
(31, 'Seal Override Interlock System', 'isi', 0, ''),
(32, 'Seal Override Deadman', 'isi', 0, ''),
(33, 'Fire Extinguishers(seal, number & date of last check)', 'isi', 1, ''),
(34, '(pressure indicator)', 'sub isi', 1, ''),
(35, '\"Product\"-\"No Smoking\"-Safety Signs& Decals', 'isi', 0, ''),
(36, 'Safety Cone ; 4-Direction Flag ; Landyard', 'isi', 0, ''),
(37, 'Refueling Equipments', 'title', 0, ''),
(38, '- Before Refueling', 'title', 0, ''),
(39, 'Underwing Hoses Condition', 'isi', 0, ''),
(40, ': RearHose & Reel conditions', 'sub isi', 0, ''),
(41, ': FrontHose & Reel conditions', 'sub isi', 0, ''),
(42, 'Platform Hoses Condition: Left', 'isi', 0, ''),
(43, ': Right', 'sub isi', 0, ''),
(44, 'Condition of Flowmeter: Sealing', 'isi', 0, ''),
(45, ': Calibration exp. Date', 'sub isi', 1, ''),
(46, 'Deadman Control Condition', 'isi', 0, ''),
(47, 'Input Coupler Condition', 'isi', 0, ''),
(48, 'Date of Last Filter Change', 'isi', 1, ''),
(49, 'PCV & Regulator', 'isi', 0, ''),
(50, 'Nitrogen Pressure Indicator', 'isi', 1, 'PSI	( 40 - 70 PSI)'),
(51, '- During Refueling', 'title', 0, ''),
(52, 'Inlet Pessure Indicator', 'isi', 1, 'Kg/Cm2 or PSI'),
(53, 'PCV Monitor Indicator', 'isi', 1, 'Kg/Cm2 or PSI'),
(54, 'PCV Air Reference Indicator', 'isi', 1, 'Kg/Cm2 or PSI'),
(55, 'PDG indicator', 'isi', 1, 'PSI, Flowrate                        LPM'),
(56, 'Others', 'title', 0, ''),
(57, 'Operating Hours Record', 'isi', 0, ''),
(58, 'Rubber Block', 'isi', 0, ''),
(59, 'Oil Absorbent / Spill Kit', 'isi', 0, ''),
(60, 'Sight Glass / Visijar Condition', 'isi', 0, ''),
(61, 'Ladder Wellness', 'isi', 0, ''),
(62, 'Fuel Leaks', 'isi', 0, ''),
(63, 'Dust Cap Input Coupler and/or Underwing Coupling', 'isi', 0, ''),
(64, 'Bucket with Bonding Wire', 'isi', 0, ''),
(65, 'Filter Sumps and/or Tank Sumps Drain', 'isi', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_isi_checklist`
--

CREATE TABLE `tb_isi_checklist` (
  `id_isi` int(11) NOT NULL,
  `id_klompok` int(11) NOT NULL,
  `id_checklist` int(11) NOT NULL,
  `sc` varchar(225) NOT NULL,
  `remark` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_isi_checklist`
--

INSERT INTO `tb_isi_checklist` (`id_isi`, `id_klompok`, `id_checklist`, `sc`, `remark`) VALUES
(1, 1, 1, 'S/C', 'hahah'),
(2, 1, 3, 'S', ''),
(3, 1, 4, 'N/A', ''),
(4, 1, 1, 'S/C', 'hahah'),
(5, 1, 3, 'S', ''),
(6, 1, 4, 'N/A', ''),
(7, 1, 4, 'S/C', 'hahah'),
(8, 1, 5, 'S', ''),
(9, 1, 6, 'N/A', ''),
(10, 1, 7, 'S/C', 'hahah'),
(11, 1, 8, 'S', ''),
(12, 1, 9, 'N/A', ''),
(13, 1, 4, 'S/C', 'hahah'),
(14, 1, 5, 'S', ''),
(15, 1, 6, 'N/A', ''),
(16, 1, 7, 'S/C', 'hahah'),
(17, 1, 12, 'S', ''),
(18, 1, 11, 'N/A', ''),
(19, 1, 16, 'S', ''),
(21, 1, 10, 'S', ''),
(22, 1, 11, 'N/A', ''),
(23, 1, 12, 'S', ''),
(24, 1, 13, 'S/C', ''),
(25, 1, 17, 'S/C', 'poooll'),
(26, 1, 18, 'S', ''),
(27, 1, 19, 'S', ''),
(28, 1, 20, 'S', ''),
(29, 1, 21, 'S', ''),
(30, 1, 23, 'N/A', ''),
(31, 1, 24, 'S', ''),
(32, 1, 25, 'S', ''),
(33, 1, 26, 'S', ''),
(34, 1, 28, 'S', ''),
(35, 1, 29, 'S', ''),
(36, 1, 30, 'N/A', ''),
(37, 1, 31, 'S', ''),
(38, 1, 32, 'S', ''),
(39, 1, 33, 'S', ''),
(40, 1, 34, 'S', ''),
(41, 1, 35, 'S', ''),
(42, 1, 36, 'S', ''),
(43, 1, 39, 'S', ''),
(44, 1, 40, 'S', ''),
(45, 1, 41, 'S', ''),
(46, 1, 42, 'S', ''),
(47, 1, 43, 'S', ''),
(48, 1, 44, 'S', ''),
(49, 1, 45, 'C', '2025-05'),
(50, 1, 46, 'N/A', ''),
(51, 1, 47, 'S', ''),
(52, 1, 48, 'C', 'tu'),
(53, 1, 49, 'S', ''),
(54, 1, 50, 'S', ''),
(55, 1, 52, 'S/C', '10'),
(56, 1, 53, 'C', '300'),
(57, 1, 54, 'S/C', 'poll'),
(58, 1, 55, 'S/C', '15-522'),
(59, 1, 57, 'N/A', ''),
(60, 1, 58, 'S', ''),
(61, 1, 59, 'S', ''),
(62, 1, 60, 'S', ''),
(63, 1, 61, 'S', ''),
(64, 1, 62, 'N/A', ''),
(65, 1, 63, 'S', ''),
(66, 1, 64, 'S', ''),
(67, 1, 65, 'S', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerusakan`
--

CREATE TABLE `tb_kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `id_isi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pelaksanaan_kerusakan` varchar(255) NOT NULL,
  `tgl_perbaikan` date NOT NULL,
  `group_kerusakan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kerusakan`
--

INSERT INTO `tb_kerusakan` (`id_kerusakan`, `id_isi`, `id_user`, `pelaksanaan_kerusakan`, `tgl_perbaikan`, `group_kerusakan`) VALUES
(2, 4, 3, 'Perbaikan Part', '2022-06-08', 0),
(3, 10, 3, 'Ganti oli garden', '2022-06-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_klompok`
--

CREATE TABLE `tb_klompok` (
  `id_klompok` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_shift` int(11) NOT NULL,
  `group` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_klompok`
--

INSERT INTO `tb_klompok` (`id_klompok`, `id_unit`, `id_user`, `id_shift`, `group`, `date`) VALUES
(1, 1, 3, 2, 'B', '2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_shift`
--

CREATE TABLE `tb_shift` (
  `id_shift` int(11) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `shift` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_shift`
--

INSERT INTO `tb_shift` (`id_shift`, `jam_awal`, `jam_akhir`, `shift`) VALUES
(1, '05:00:00', '14:00:00', 'Pagi'),
(2, '14:00:00', '21:00:00', 'Siang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id_unit` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_unit`
--

INSERT INTO `tb_unit` (`id_unit`, `unit`) VALUES
(1, 'MIA 09'),
(2, 'MIA 01'),
(3, 'MIA 02'),
(4, 'MIA 03'),
(5, 'MIA 06'),
(6, 'MIA 07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(3, 'Pirdaus', 'pertamina', '$2y$10$kEIFPTprrIKotNDF80bes.yp54X8oIwERVBhpBE.id6TvsH7KsC5i', 'Operation Head'),
(4, 'User 1', 'user1', '$2y$10$e4qO3WyMb8EgLH.w.LgaOejXbwaI35ZieOYBp9srqOsFp19v4QoP6', 'Certified Reffueling Maintenance'),
(5, 'User 2', 'user2', '$2y$10$JSCJ2OuO7Xo3.ucDSdxsE.SbiVaxqvnL6gQsfHhaj4mYRY3fQdHJq', 'Maintenance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_checklist`
--
ALTER TABLE `tb_checklist`
  ADD PRIMARY KEY (`id_check`);

--
-- Indexes for table `tb_isi_checklist`
--
ALTER TABLE `tb_isi_checklist`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indexes for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `tb_klompok`
--
ALTER TABLE `tb_klompok`
  ADD PRIMARY KEY (`id_klompok`);

--
-- Indexes for table `tb_shift`
--
ALTER TABLE `tb_shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_checklist`
--
ALTER TABLE `tb_checklist`
  MODIFY `id_check` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_isi_checklist`
--
ALTER TABLE `tb_isi_checklist`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_klompok`
--
ALTER TABLE `tb_klompok`
  MODIFY `id_klompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_shift`
--
ALTER TABLE `tb_shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
