-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 07:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_kode`
--

CREATE TABLE `alat_kode` (
  `id` int(11) NOT NULL,
  `kode` varchar(7) NOT NULL,
  `kel` varchar(19) NOT NULL,
  `jenis` varchar(24) NOT NULL,
  `nama` varchar(37) NOT NULL,
  `lok` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_kode`
--

INSERT INTO `alat_kode` (`id`, `kode`, `kel`, `jenis`, `nama`, `lok`) VALUES
(1, 'ALAT1', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Sensor Temperatur dan RH', 'Taman Alat'),
(2, 'ALAT2', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Sensor Tekanan Udara', 'Taman Alat'),
(3, 'ALAT3', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Sensor Kecepatan Angin dan Arah Angin', 'Taman Alat'),
(4, 'ALAT4', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Sensor Curah Hujan', 'Taman Alat'),
(5, 'ALAT5', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Sensor Intensitas Radiasi Matahari', 'Taman Alat'),
(6, 'ALAT6', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Sensor Suhu Air', 'Taman Alat'),
(7, 'ALAT7', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Sensor Tinggi Air', 'Taman Alat'),
(8, 'ALAT8', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Cup Sounter Anemometer', 'Taman Alat'),
(9, 'ALAT9', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Data Logger', 'Taman Alat'),
(10, 'ALAT10', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Solar Cell', 'Taman Alat'),
(11, 'ALAT11', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Solar Controller', 'Taman Alat'),
(12, 'ALAT12', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Battery', 'Taman Alat'),
(13, 'ALAT13', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Inverter', 'Taman Alat'),
(14, 'ALAT14', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'PC Server', 'Gedung Observasi'),
(15, 'ALAT15', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Monitor Server', 'Gedung Observasi'),
(16, 'ALAT16', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'PC Client', 'Gedung Observasi'),
(17, 'ALAT17', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Monitor Client', 'Gedung Observasi'),
(18, 'ALAT18', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'PC Display', 'Gedung Observasi'),
(19, 'ALAT19', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'Monitor Display', 'Gedung Observasi'),
(20, 'ALAT20', 'AWS Digitalisasi', 'Teknologi Canggih/Modern', 'UPS', 'Gedung Observasi'),
(21, 'ALAT21', 'AWOS', 'Teknologi Canggih/Modern', 'Data Logger', 'Runway 10'),
(22, 'ALAT22', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Arah dan Kecepatan Angin', 'Runway 10'),
(23, 'ALAT23', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Temperatur dan RH', 'Runway 10'),
(24, 'ALAT24', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Tekanan Udara', 'Runway 10'),
(25, 'ALAT25', 'AWOS', 'Teknologi Canggih/Modern', 'Ceilometer', 'Runway 10'),
(26, 'ALAT26', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Visibility', 'Runway 10'),
(27, 'ALAT27', 'AWOS', 'Teknologi Canggih/Modern', 'Radio Komunikasi', 'Runway 10'),
(28, 'ALAT28', 'AWOS', 'Teknologi Canggih/Modern', 'Data Logger', 'Runway 28'),
(29, 'ALAT29', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Arah dan Kecepatan Angin', 'Runway 28'),
(30, 'ALAT30', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Temperatur dan RH', 'Runway 28'),
(31, 'ALAT31', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Tekanan Udara', 'Runway 28'),
(32, 'ALAT32', 'AWOS', 'Teknologi Canggih/Modern', 'Ceilometer', 'Runway 28'),
(33, 'ALAT33', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Visibility', 'Runway 28'),
(34, 'ALAT34', 'AWOS', 'Teknologi Canggih/Modern', 'Radio Komunikasi', 'Runway 28'),
(35, 'ALAT35', 'AWOS', 'Teknologi Canggih/Modern', 'Data Logger', 'Runway Middle'),
(36, 'ALAT36', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Arah dan Kecepatan Angin', 'Runway Middle'),
(37, 'ALAT37', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Temperatur dan RH', 'Runway Middle'),
(38, 'ALAT38', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Tekanan Udara', 'Runway Middle'),
(39, 'ALAT39', 'AWOS', 'Teknologi Canggih/Modern', 'Sensor Curah Hujan', 'Runway Middle'),
(40, 'ALAT40', 'AWOS', 'Teknologi Canggih/Modern', 'Pyranometer', 'Runway Middle'),
(41, 'ALAT41', 'AWOS', 'Teknologi Canggih/Modern', 'Lightning Detector', 'Runway Middle'),
(42, 'ALAT42', 'AWOS', 'Teknologi Canggih/Modern', 'Radio Komunikasi', 'Runway Middle'),
(43, 'ALAT43', 'AWOS', 'Teknologi Canggih/Modern', 'Server 1', 'Server'),
(44, 'ALAT44', 'AWOS', 'Teknologi Canggih/Modern', 'Server 2', 'Server'),
(45, 'ALAT45', 'AWOS', 'Teknologi Canggih/Modern', 'Client AWOS Observer', 'Client'),
(46, 'ALAT46', 'AWOS', 'Teknologi Canggih/Modern', 'Client AWOS Forecaster', 'Client'),
(47, 'ALAT47', 'AWOS', 'Teknologi Canggih/Modern', 'Client AWOS APP Timur', 'Client'),
(48, 'ALAT48', 'AWOS', 'Teknologi Canggih/Modern', 'Client AWOS APP Tengah', 'Client'),
(49, 'ALAT49', 'AWOS', 'Teknologi Canggih/Modern', 'Client AWOS APP Barat', 'Client'),
(50, 'ALAT50', 'AWOS', 'Teknologi Canggih/Modern', 'Client AWOS ATC Tower', 'Client'),
(51, 'ALAT51', 'AWOS', 'Teknologi Canggih/Modern', 'Client AWOS ATIS', 'Client'),
(52, 'ALAT52', 'AWOS', 'Teknologi Canggih/Modern', 'Client AWOS BO', 'Client'),
(53, 'ALAT53', 'Sinoptik', 'Sederhana Mekanik', 'Termometer Bola Kering', 'Taman Alat'),
(54, 'ALAT54', 'Sinoptik', 'Sederhana Mekanik', 'Termometer Bola Basah', 'Taman Alat'),
(55, 'ALAT55', 'Sinoptik', 'Sederhana Mekanik', 'Termometer Maksimum', 'Taman Alat'),
(56, 'ALAT56', 'Sinoptik', 'Sederhana Mekanik', 'Termometer Minimum', 'Taman Alat'),
(57, 'ALAT57', 'Sinoptik', 'Sederhana Mekanik', 'Termometer BB-BK', 'Gedung Observasi'),
(58, 'ALAT58', 'Sinoptik', 'Sederhana Mekanik', 'Termometer BB-BK', 'Gedung Observasi'),
(59, 'ALAT59', 'Sinoptik', 'Sederhana Mekanik', 'Termometer BB-BK', 'Gedung Observasi'),
(60, 'ALAT60', 'Sinoptik', 'Sederhana Mekanik', 'Termometer BB-BK', 'Gedung Observasi'),
(61, 'ALAT61', 'Sinoptik', 'Sederhana Mekanik', 'Termometer BB-BK', 'Gedung Observasi'),
(62, 'ALAT62', 'Sinoptik', 'Sederhana Mekanik', 'Termometer Apung', 'Taman Alat'),
(63, 'ALAT63', 'Sinoptik', 'Sederhana Mekanik', 'Thermohygrograph', 'Taman Alat'),
(64, 'ALAT64', 'Sinoptik', 'Sederhana Mekanik', 'Campbell Stokes', 'Taman Alat'),
(65, 'ALAT65', 'Sinoptik', 'Sederhana Mekanik', 'Panci Penguapan', 'Taman Alat'),
(66, 'ALAT66', 'Sinoptik', 'Sederhana Mekanik', 'Still Well - Hook Gauge', 'Taman Alat'),
(67, 'ALAT67', 'Sinoptik', 'Sederhana Mekanik', 'Cup Counter Anemometer', 'Taman Alat'),
(68, 'ALAT68', 'Sinoptik', 'Sederhana Mekanik', 'Penakar Hujan Obs', 'Taman Alat'),
(69, 'ALAT69', 'Sinoptik', 'Sederhana Mekanik', 'Penakar Hujan Hellmann', 'Taman Alat'),
(70, 'ALAT70', 'Sinoptik', 'Sederhana Mekanik', 'Theodolit', 'Taman Alat'),
(71, 'ALAT71', 'Sinoptik', 'Sederhana Elektronik', 'Barometer Digital', 'Gedung Observasi'),
(72, 'ALAT72', 'Sinoptik', 'Sederhana Elektronik', 'Pyranometer', 'Taman Alat'),
(73, 'ALAT73', 'Sinoptik', 'Sederhana Elektronik', 'Anemometer', 'Taman Alat'),
(74, 'ALAT74', 'Sinoptik', 'Sederhana Elektronik', 'HVA Sampler', 'Taman Alat'),
(75, 'ALAT75', 'Sinoptik', 'Sederhana Elektronik', 'ARWS / KAH', 'Taman Alat'),
(76, 'ALAT76', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'DEHYDRATOR', 'Gedung Radar'),
(77, 'ALAT77', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'ANTENA & PEDESTAL', 'Gedung Radar'),
(78, 'ALAT78', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'BLOK CABINET FAN', 'Gedung Radar'),
(79, 'ALAT79', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'BLOK MAGNETRON', 'Gedung Radar'),
(80, 'ALAT80', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'ANTENNA CONTROL UNIT', 'Gedung Radar'),
(81, 'ALAT81', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'BLOK TRANSMITTER', 'Gedung Radar'),
(82, 'ALAT82', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'BLOK RECEIVER', 'Gedung Radar'),
(83, 'ALAT83', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'BLOK KABINET TRANSMITTER', 'Gedung Radar'),
(84, 'ALAT84', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'OBSTRUCTION LIGHTS', 'Gedung Radar'),
(85, 'ALAT85', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'UPS RADAR', 'Gedung Radar'),
(86, 'ALAT86', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'GENSET', 'Gedung Radar'),
(87, 'ALAT87', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'Server Radar', 'Gedung Radar'),
(88, 'ALAT88', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'Client Radar Forecaster 1', 'Client'),
(89, 'ALAT89', 'Radar Cuaca', 'Teknologi Canggih/Modern', 'Client Radar APP', 'Client'),
(90, 'ALAT90', 'LLWAS', 'Teknologi Canggih/Modern', 'A2 - Tambak Cemandi', 'Site'),
(91, 'ALAT91', 'LLWAS', 'Teknologi Canggih/Modern', 'A3 - Selatan Pos Lanudal', 'Site'),
(92, 'ALAT92', 'LLWAS', 'Teknologi Canggih/Modern', 'A4 - Timur Wisma Perwira', 'Site'),
(93, 'ALAT93', 'LLWAS', 'Teknologi Canggih/Modern', 'A5 - Sedati Agung', 'Site'),
(94, 'ALAT94', 'LLWAS', 'Teknologi Canggih/Modern', 'A6 - Semambung', 'Site'),
(95, 'ALAT95', 'LLWAS', 'Teknologi Canggih/Modern', 'B2 - Banjar Kemuning', 'Site'),
(96, 'ALAT96', 'LLWAS', 'Teknologi Canggih/Modern', 'B3 - Taman Area Parkir Terminal 1', 'Site'),
(97, 'ALAT97', 'LLWAS', 'Teknologi Canggih/Modern', 'B4 - Timur Kantor Basarnas', 'Site'),
(98, 'ALAT98', 'LLWAS', 'Teknologi Canggih/Modern', 'B5 - Tropodo', 'Site'),
(99, 'ALAT99', 'LLWAS', 'Teknologi Canggih/Modern', 'B6 - Sawotratap', 'Site'),
(100, 'ALAT100', 'LLWAS', 'Teknologi Canggih/Modern', 'Server 1 (IMS 0)', 'Server'),
(101, 'ALAT101', 'LLWAS', 'Teknologi Canggih/Modern', 'Server 2 (IMS 1)', 'Server'),
(102, 'ALAT102', 'LLWAS', 'Teknologi Canggih/Modern', 'Client LLWAS Observer', 'Client'),
(103, 'ALAT103', 'LLWAS', 'Teknologi Canggih/Modern', 'Client LLWAS Forecaster', 'Client'),
(104, 'ALAT104', 'LLWAS', 'Teknologi Canggih/Modern', 'Client LLWAS APP', 'Client'),
(105, 'ALAT105', 'LLWAS', 'Teknologi Canggih/Modern', 'Client LLWAS ATC Tower', 'Client'),
(106, 'ALAT106', 'LLWAS', 'Teknologi Canggih/Modern', 'Client LLWAS Teknisi', 'Client'),
(107, 'ALAT107', 'Aerologi', 'Sederhana Mekanik', 'THEODOLITE', 'Gedung Aerologi'),
(108, 'ALAT108', 'Aerologi', 'Teknologi Canggih/Modern', 'ANTENA UHF RADIOSONDE', 'Gedung Aerologi'),
(109, 'ALAT109', 'Aerologi', 'Teknologi Canggih/Modern', 'ANTENA GPS', 'Gedung Aerologi'),
(110, 'ALAT110', 'Aerologi', 'Teknologi Canggih/Modern', 'REPEATER ANTENA GPS', 'Gedung Aerologi'),
(111, 'ALAT111', 'Aerologi', 'Teknologi Canggih/Modern', 'RECEIVER', 'Gedung Aerologi'),
(112, 'ALAT112', 'Aerologi', 'Teknologi Canggih/Modern', 'SONDE CHECKER', 'Gedung Aerologi'),
(113, 'ALAT113', 'Aerologi', 'Teknologi Canggih/Modern', 'PC PENGOLAH DATA RASOND & PIBAL', 'Gedung Aerologi'),
(114, 'ALAT114', 'Display Cuaca', 'Sederhana Elektronik', 'Komputer PC', 'Terminal 1 Bandara Juanda'),
(115, 'ALAT115', 'Display Cuaca', 'Sederhana Elektronik', 'Monitor', 'Terminal 1 Bandara Juanda'),
(116, 'ALAT116', 'Display Cuaca', 'Sederhana Elektronik', 'Kamera CCTV', 'Terminal 1 Bandara Juanda'),
(117, 'ALAT117', 'Display Cuaca', 'Sederhana Elektronik', 'Modem ADSL dan GSM', 'Terminal 1 Bandara Juanda'),
(118, 'ALAT118', 'Display Cuaca', 'Sederhana Elektronik', 'UPS 1 KVA', 'Terminal 1 Bandara Juanda'),
(119, 'ALAT119', 'Display Cuaca', 'Sederhana Elektronik', 'Power Timer', 'Terminal 1 Bandara Juanda'),
(120, 'ALAT120', 'Display Cuaca', 'Sederhana Elektronik', 'Komputer PC', 'Terminal 2 Bandara Juanda'),
(121, 'ALAT121', 'Display Cuaca', 'Sederhana Elektronik', 'Monitor', 'Terminal 2 Bandara Juanda'),
(122, 'ALAT122', 'Display Cuaca', 'Sederhana Elektronik', 'Kamera CCTV', 'Terminal 2 Bandara Juanda'),
(123, 'ALAT123', 'Display Cuaca', 'Sederhana Elektronik', 'Modem ADSL dan GSM', 'Terminal 2 Bandara Juanda'),
(124, 'ALAT124', 'Display Cuaca', 'Sederhana Elektronik', 'UPS 1 KVA', 'Terminal 2 Bandara Juanda'),
(125, 'ALAT125', 'Display Cuaca', 'Sederhana Elektronik', 'Power Timer', 'Terminal 2 Bandara Juanda'),
(126, 'ALAT126', 'Display Cuaca', 'Sederhana Elektronik', 'Komputer PC', 'Terminal Bus Purabaya'),
(127, 'ALAT127', 'Display Cuaca', 'Sederhana Elektronik', 'Monitor', 'Terminal Bus Purabaya'),
(128, 'ALAT128', 'Display Cuaca', 'Sederhana Elektronik', 'Kamera CCTV', 'Terminal Bus Purabaya'),
(129, 'ALAT129', 'Display Cuaca', 'Sederhana Elektronik', 'Modem ADSL dan GSM', 'Terminal Bus Purabaya'),
(130, 'ALAT130', 'Display Cuaca', 'Sederhana Elektronik', 'UPS 1 KVA', 'Terminal Bus Purabaya'),
(131, 'ALAT131', 'Display Cuaca', 'Sederhana Elektronik', 'Power Timer', 'Terminal Bus Purabaya'),
(132, 'ALAT132', 'Aero Visual Weather', 'Teknologi Canggih/Modern', 'Server Aero Weather', 'Ruang Forecaster'),
(133, 'ALAT133', 'Aero Visual Weather', 'Teknologi Canggih/Modern', 'Server Visual Weather', 'Ruang Forecaster'),
(134, 'ALAT134', 'Aero Visual Weather', 'Teknologi Canggih/Modern', 'Backup Server Aero Weather', 'Ruang Forecaster'),
(135, 'ALAT135', 'Aero Visual Weather', 'Teknologi Canggih/Modern', 'Backup Server Visual Weather', 'Ruang Forecaster'),
(136, 'ALAT136', 'Jarkom', 'Sederhana Elektronik', 'Router Utama', 'Server'),
(137, 'ALAT137', 'Jarkom', 'Sederhana Elektronik', 'Router Pusjarkom', 'Server'),
(138, 'ALAT138', 'Jarkom', 'Sederhana Elektronik', 'Switch HUB', 'Server'),
(139, 'ALAT139', 'Jarkom', 'Sederhana Elektronik', 'Antena Kantor - Obs', 'Server'),
(140, 'ALAT140', 'Jarkom', 'Sederhana Elektronik', 'Antena Kantor - Fct', 'Server'),
(141, 'ALAT141', 'Jarkom', 'Sederhana Elektronik', 'Router', 'Gedung Observasi'),
(142, 'ALAT142', 'Jarkom', 'Sederhana Elektronik', 'Switch hub WAN', 'Gedung Observasi'),
(143, 'ALAT143', 'Jarkom', 'Sederhana Elektronik', 'Switch hub LAN', 'Gedung Observasi'),
(144, 'ALAT144', 'Jarkom', 'Sederhana Elektronik', 'Antena Obs -Kantor', 'Gedung Observasi'),
(145, 'ALAT145', 'Jarkom', 'Sederhana Elektronik', 'Router', 'Forecaster'),
(146, 'ALAT146', 'Jarkom', 'Sederhana Elektronik', 'Switch Hub WAN', 'Forecaster'),
(147, 'ALAT147', 'Jarkom', 'Sederhana Elektronik', 'Switch Hub LAN', 'Forecaster'),
(148, 'ALAT148', 'Jarkom', 'Sederhana Elektronik', 'Antena Fct - Kantor', 'Forecaster');

-- --------------------------------------------------------

--
-- Table structure for table `alat_kondisi`
--

CREATE TABLE `alat_kondisi` (
  `id` int(11) NOT NULL,
  `kode` varchar(7) NOT NULL,
  `tgl` date NOT NULL,
  `kondisi` varchar(15) NOT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_kondisi`
--

INSERT INTO `alat_kondisi` (`id`, `kode`, `tgl`, `kondisi`, `ket`) VALUES
(1, 'ALAT1', '2021-04-01', 'Baik', NULL),
(2, 'ALAT2', '2021-04-01', 'Baik', NULL),
(3, 'ALAT3', '2021-04-01', 'Baik', NULL),
(4, 'ALAT4', '2021-04-01', 'Baik', NULL),
(5, 'ALAT5', '2021-04-01', 'Baik', NULL),
(6, 'ALAT6', '2021-04-01', 'Baik', NULL),
(7, 'ALAT7', '2021-04-01', 'Baik', NULL),
(8, 'ALAT8', '2021-04-01', 'Baik', NULL),
(9, 'ALAT9', '2021-04-01', 'Baik', NULL),
(10, 'ALAT10', '2021-04-01', 'Baik', NULL),
(11, 'ALAT11', '2021-04-01', 'Baik', NULL),
(12, 'ALAT12', '2021-04-01', 'Baik', NULL),
(13, 'ALAT13', '2021-04-01', 'Baik', NULL),
(14, 'ALAT14', '2021-04-01', 'Baik', NULL),
(15, 'ALAT15', '2021-04-01', 'Baik', NULL),
(16, 'ALAT16', '2021-04-01', 'Baik', NULL),
(17, 'ALAT17', '2021-04-01', 'Baik', NULL),
(18, 'ALAT18', '2021-04-01', 'Baik', NULL),
(19, 'ALAT19', '2021-04-01', 'Baik', NULL),
(20, 'ALAT20', '2021-04-01', 'Baik', NULL),
(21, 'ALAT21', '2021-04-01', 'Baik', NULL),
(22, 'ALAT22', '2021-04-01', 'Baik', NULL),
(23, 'ALAT23', '2021-04-01', 'Baik', NULL),
(24, 'ALAT24', '2021-04-01', 'Baik', NULL),
(25, 'ALAT25', '2021-04-01', 'Baik', NULL),
(26, 'ALAT26', '2021-04-01', 'Baik', NULL),
(27, 'ALAT27', '2021-04-01', 'Baik', NULL),
(28, 'ALAT28', '2021-04-01', 'Baik', NULL),
(29, 'ALAT29', '2021-04-01', 'Baik', NULL),
(30, 'ALAT30', '2021-04-01', 'Baik', NULL),
(31, 'ALAT31', '2021-04-01', 'Baik', NULL),
(32, 'ALAT32', '2021-04-01', 'Baik', NULL),
(33, 'ALAT33', '2021-04-01', 'Baik', NULL),
(34, 'ALAT34', '2021-04-01', 'Baik', NULL),
(35, 'ALAT35', '2021-04-01', 'Baik', NULL),
(36, 'ALAT36', '2021-04-01', 'Baik', NULL),
(37, 'ALAT37', '2021-04-01', 'Baik', NULL),
(38, 'ALAT38', '2021-04-01', 'Baik', NULL),
(39, 'ALAT39', '2021-04-01', 'Baik', NULL),
(40, 'ALAT40', '2021-04-01', 'Baik', NULL),
(41, 'ALAT41', '2021-04-01', 'Baik', NULL),
(42, 'ALAT42', '2021-04-01', 'Baik', NULL),
(43, 'ALAT43', '2021-04-01', 'Baik', NULL),
(44, 'ALAT44', '2021-04-01', 'Baik', NULL),
(45, 'ALAT45', '2021-04-01', 'Baik', NULL),
(46, 'ALAT46', '2021-04-01', 'Baik', NULL),
(47, 'ALAT47', '2021-04-01', 'Baik', NULL),
(48, 'ALAT48', '2021-04-01', 'Baik', NULL),
(49, 'ALAT49', '2021-04-01', 'Baik', NULL),
(50, 'ALAT50', '2021-04-01', 'Baik', NULL),
(51, 'ALAT51', '2021-04-01', 'Baik', NULL),
(52, 'ALAT52', '2021-04-01', 'Baik', NULL),
(53, 'ALAT53', '2021-04-01', 'Baik', 'Terpasang'),
(54, 'ALAT54', '2021-04-01', 'Baik', 'Terpasang'),
(55, 'ALAT55', '2021-04-01', 'Baik', 'Terpasang'),
(56, 'ALAT56', '2021-04-01', 'Baik', 'Terpasang'),
(57, 'ALAT57', '2021-04-01', 'Baik', 'Back-up'),
(58, 'ALAT58', '2021-04-01', 'Baik', 'Back-up'),
(59, 'ALAT59', '2021-04-01', 'Baik', 'Back-up'),
(60, 'ALAT60', '2021-04-01', 'Baik', 'Back-up'),
(61, 'ALAT61', '2021-04-01', 'Baik', 'Back-up'),
(62, 'ALAT62', '2021-04-01', 'Baik', NULL),
(63, 'ALAT63', '2021-04-01', 'Baik', NULL),
(64, 'ALAT64', '2021-04-01', 'Baik', NULL),
(65, 'ALAT65', '2021-04-01', 'Baik', NULL),
(66, 'ALAT66', '2021-04-01', 'Baik', NULL),
(67, 'ALAT67', '2021-04-01', 'Baik', NULL),
(68, 'ALAT68', '2021-04-01', 'Baik', NULL),
(69, 'ALAT69', '2021-04-01', 'Baik', NULL),
(70, 'ALAT70', '2021-04-01', 'Baik', NULL),
(71, 'ALAT71', '2021-04-01', 'Baik', NULL),
(72, 'ALAT72', '2021-04-01', 'Baik', NULL),
(73, 'ALAT73', '2021-04-01', 'Baik', NULL),
(74, 'ALAT74', '2021-04-01', 'Baik', NULL),
(75, 'ALAT75', '2021-04-01', 'Baik', NULL),
(76, 'ALAT76', '2021-04-01', 'Baik', NULL),
(77, 'ALAT77', '2021-04-01', 'Baik', NULL),
(78, 'ALAT78', '2021-04-01', 'Baik', NULL),
(79, 'ALAT79', '2021-04-01', 'Baik', NULL),
(80, 'ALAT80', '2021-04-01', 'Baik', NULL),
(81, 'ALAT81', '2021-04-01', 'Baik', NULL),
(82, 'ALAT82', '2021-04-01', 'Baik', NULL),
(83, 'ALAT83', '2021-04-01', 'Baik', NULL),
(84, 'ALAT84', '2021-04-01', 'Baik', NULL),
(85, 'ALAT85', '2021-04-01', 'Baik', NULL),
(86, 'ALAT86', '2021-04-01', 'Baik', NULL),
(87, 'ALAT87', '2021-04-01', 'Baik', NULL),
(88, 'ALAT88', '2021-04-01', 'Baik', NULL),
(89, 'ALAT89', '2021-04-01', 'Baik', NULL),
(90, 'ALAT90', '2021-04-01', 'Baik', NULL),
(91, 'ALAT91', '2021-04-01', 'Baik', NULL),
(92, 'ALAT92', '2021-04-01', 'Baik', NULL),
(93, 'ALAT93', '2021-04-01', 'Baik', NULL),
(94, 'ALAT94', '2021-04-01', 'Baik', NULL),
(95, 'ALAT95', '2021-04-01', 'Baik', NULL),
(96, 'ALAT96', '2021-04-01', 'Baik', NULL),
(97, 'ALAT97', '2021-04-01', 'Baik', NULL),
(98, 'ALAT98', '2021-04-01', 'Baik', NULL),
(99, 'ALAT99', '2021-04-01', 'Baik', NULL),
(100, 'ALAT100', '2021-04-01', 'Baik', NULL),
(101, 'ALAT101', '2021-04-01', 'Baik', NULL),
(102, 'ALAT102', '2021-04-01', 'Baik', NULL),
(103, 'ALAT103', '2021-04-01', 'Baik', NULL),
(104, 'ALAT104', '2021-04-01', 'Baik', NULL),
(105, 'ALAT105', '2021-04-01', 'Baik', NULL),
(106, 'ALAT106', '2021-04-01', 'Baik', NULL),
(107, 'ALAT107', '2021-04-01', 'Baik', NULL),
(108, 'ALAT108', '2021-04-01', 'Baik', NULL),
(109, 'ALAT109', '2021-04-01', 'Baik', NULL),
(110, 'ALAT110', '2021-04-01', 'Baik', NULL),
(111, 'ALAT111', '2021-04-01', 'Baik', NULL),
(112, 'ALAT112', '2021-04-01', 'Baik', NULL),
(113, 'ALAT113', '2021-04-01', 'Baik', NULL),
(114, 'ALAT114', '2021-04-01', 'Baik', NULL),
(115, 'ALAT115', '2021-04-01', 'Baik', NULL),
(116, 'ALAT116', '2021-04-01', 'Baik', NULL),
(117, 'ALAT117', '2021-04-01', 'Baik', NULL),
(118, 'ALAT118', '2021-04-01', 'Baik', NULL),
(119, 'ALAT119', '2021-04-01', 'Baik', NULL),
(120, 'ALAT120', '2021-04-01', 'Baik', NULL),
(121, 'ALAT121', '2021-04-01', 'Baik', NULL),
(122, 'ALAT122', '2021-04-01', 'Baik', NULL),
(123, 'ALAT123', '2021-04-01', 'Baik', NULL),
(124, 'ALAT124', '2021-04-01', 'Baik', NULL),
(125, 'ALAT125', '2021-04-01', 'Baik', NULL),
(126, 'ALAT126', '2021-04-01', 'Baik', NULL),
(127, 'ALAT127', '2021-04-01', 'Baik', NULL),
(128, 'ALAT128', '2021-04-01', 'Baik', NULL),
(129, 'ALAT129', '2021-04-01', 'Baik', NULL),
(130, 'ALAT130', '2021-04-01', 'Baik', NULL),
(131, 'ALAT131', '2021-04-01', 'Baik', NULL),
(132, 'ALAT132', '2021-04-01', 'Baik', NULL),
(133, 'ALAT133', '2021-04-01', 'Baik', NULL),
(134, 'ALAT134', '2021-04-01', 'Baik', NULL),
(135, 'ALAT135', '2021-04-01', 'Baik', NULL),
(136, 'ALAT136', '2021-04-01', 'Baik', NULL),
(137, 'ALAT137', '2021-04-01', 'Baik', NULL),
(138, 'ALAT138', '2021-04-01', 'Baik', NULL),
(139, 'ALAT139', '2021-04-01', 'Baik', NULL),
(140, 'ALAT140', '2021-04-01', 'Baik', NULL),
(141, 'ALAT141', '2021-04-01', 'Baik', NULL),
(142, 'ALAT142', '2021-04-01', 'Baik', NULL),
(143, 'ALAT143', '2021-04-01', 'Baik', NULL),
(144, 'ALAT144', '2021-04-01', 'Baik', NULL),
(145, 'ALAT145', '2021-04-01', 'Baik', NULL),
(146, 'ALAT146', '2021-04-01', 'Baik', NULL),
(147, 'ALAT147', '2021-04-01', 'Baik', NULL),
(148, 'ALAT148', '2021-04-01', 'Baik', NULL),
(166, 'ALAT102', '2021-04-02', 'Baik', ''),
(167, 'ALAT103', '2021-04-02', 'Baik', ''),
(168, 'ALAT104', '2021-04-02', 'Baik', ''),
(169, 'ALAT105', '2021-04-02', 'Baik', ''),
(170, 'ALAT106', '2021-04-02', 'Baik', ''),
(171, 'ALAT100', '2021-04-02', 'Baik', ''),
(172, 'ALAT101', '2021-04-02', 'RUSAK BERAT', 'Kondisi OFF'),
(173, 'ALAT90', '2021-04-02', 'Baik', ''),
(174, 'ALAT91', '2021-04-02', 'Baik', ''),
(175, 'ALAT92', '2021-04-02', 'Baik', ''),
(176, 'ALAT93', '2021-04-02', 'Baik', ''),
(177, 'ALAT94', '2021-04-02', 'Baik', ''),
(178, 'ALAT95', '2021-04-02', 'Baik', ''),
(179, 'ALAT96', '2021-04-02', 'Baik', ''),
(180, 'ALAT97', '2021-04-02', 'Baik', ''),
(181, 'ALAT98', '2021-04-02', 'Baik', ''),
(182, 'ALAT99', '2021-04-02', 'Baik', '');

-- --------------------------------------------------------

--
-- Table structure for table `alat_mtn`
--

CREATE TABLE `alat_mtn` (
  `id` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `tek` varchar(150) NOT NULL,
  `lok` varchar(150) NOT NULL,
  `cat` varchar(200) NOT NULL,
  `kel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_mtn`
--

INSERT INTO `alat_mtn` (`id`, `tgl`, `tek`, `lok`, `cat`, `kel`) VALUES
(16, '2021-04-02', ' Rizzal,,,,', 'Gedung Observasi', '-', 'LLWAS');

-- --------------------------------------------------------

--
-- Table structure for table `alat_repair`
--

CREATE TABLE `alat_repair` (
  `id` int(11) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `tgl_rusak` date NOT NULL,
  `tgl_repair` date DEFAULT NULL,
  `tek` varchar(150) NOT NULL,
  `lapor` varchar(20) NOT NULL,
  `kel` varchar(10) NOT NULL,
  `awal` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `akhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_repair`
--

INSERT INTO `alat_repair` (`id`, `kode`, `tgl_rusak`, `tgl_repair`, `tek`, `lapor`, `kel`, `awal`, `tindakan`, `akhir`) VALUES
(11, '', '2021-03-22', NULL, ' Rizzal,,,,', '', 'AWS', '', '', ''),
(12, '', '2021-03-22', NULL, ' Deni,Bangkit,,,', '', 'SYNOP', '', '', ''),
(13, '', '2021-03-24', NULL, ' Anwar,Rizzal,,,', '', 'AWS', '', '', ''),
(14, '', '2021-03-23', NULL, ' Rizzal,Anwar,Rokhyadin,,', '', 'AWOS', '', '', ''),
(15, '', '2021-03-04', '2021-03-06', ' ANWAR,,,,', '', 'AWS', 'as', 'as', 'as'),
(16, '', '2021-03-04', '2021-03-06', ' ANWAR,,,,', '', 'AWS', 'as', 'as', 'as'),
(17, '', '2021-03-10', '2021-03-15', ' Rizzal,,,,', '', 'SYNOP', 'qwerty', 'qwerty', 'qwerty'),
(18, '', '2021-03-04', '2021-03-17', ' Mira,,,,', 'RENDI I', 'SYNOP', '', '', ''),
(19, '', '2021-03-30', '2021-03-30', ' Rizzal,,,,', 'RENDI I', 'SYNOP', '', '', ''),
(20, '', '2021-03-30', '2021-03-30', ' Rizzal,,,,', 'RENDI I', 'SYNOP', '', '', ''),
(21, 'ALAT53', '2021-03-30', '2021-03-30', ' Mira,,,,', 'RENDI I', 'SYNOP', 'tes', 'ok', 'tes'),
(22, 'ALAT33', '2021-03-01', '2021-03-27', ' Rizzal,,,,', 'HASAN A.', 'AWOS', 'tes bos\r\n', '-tes\r\n-cek\r\n-repair', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `alat_riwayat`
--

CREATE TABLE `alat_riwayat` (
  `id` int(11) NOT NULL,
  `kode` varchar(7) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `tipe` varchar(30) DEFAULT NULL,
  `sn` varchar(14) DEFAULT NULL,
  `tgl_beli` int(11) DEFAULT NULL,
  `tgl_install` varchar(30) DEFAULT NULL,
  `tgl_kal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_riwayat`
--

INSERT INTO `alat_riwayat` (`id`, `kode`, `merek`, `tipe`, `sn`, `tgl_beli`, `tgl_install`, `tgl_kal`) VALUES
(1, 'ALAT1', 'VAISALA', 'HMP155', 'M1110149', 2017, NULL, '2021-03-13'),
(2, 'ALAT2', 'VAISALA', 'PTB330', 'L2450061', 2016, NULL, '2021-03-13'),
(3, 'ALAT3', 'VAISALA', 'WMT703', 'L2150423', 2019, NULL, '2021-03-13'),
(4, 'ALAT4', 'VAISALA', 'RG13N2NN', 'L2520163', 2016, NULL, '2021-03-13'),
(5, 'ALAT5', 'VAISALA', 'QMS101', '140050', 2016, NULL, '2021-03-13'),
(6, 'ALAT6', 'THIES CLIMA', '2.1235.01.010', '-', 2016, NULL, '2021-03-13'),
(7, 'ALAT7', 'THIES', '6.1423.10.073', '7150130', 2016, NULL, '2021-03-13'),
(8, 'ALAT8', 'VAISALA', 'WMS302', NULL, 2019, NULL, '2021-03-13'),
(9, 'ALAT9', 'VAISALA', 'QML201C', '-', 2019, NULL, '2021-03-13'),
(10, 'ALAT10', 'GH SOLAR', 'GH100P-18', NULL, 2016, NULL, NULL),
(11, 'ALAT11', 'PHOCOS', NULL, NULL, 2016, NULL, NULL),
(12, 'ALAT12', 'UL RANGE', '12V-26AH', NULL, 2019, NULL, NULL),
(13, 'ALAT13', 'SOUER', '12V-10A', NULL, 2016, NULL, NULL),
(14, 'ALAT14', 'DELL', 'PowerEdge T- 40', '14FSGP2', 2020, NULL, NULL),
(15, 'ALAT15', 'ASUS', 'VX238', NULL, 2016, NULL, NULL),
(16, 'ALAT16', 'ASUS', 'VIVOBOOK', NULL, 2018, NULL, NULL),
(17, 'ALAT17', 'ASUS', NULL, NULL, 2018, NULL, NULL),
(18, 'ALAT18', 'PCDUINO', NULL, NULL, 2016, NULL, NULL),
(19, 'ALAT19', 'SAMSUNG', NULL, NULL, 2016, NULL, NULL),
(20, 'ALAT20', 'APC', 'SMART-UPS 3000XL', '-', 2016, NULL, NULL),
(21, 'ALAT21', 'COASTAL ENV.', 'ZENO 6800', '1096', 2018, NULL, NULL),
(22, 'ALAT22', 'GILL INSTRUMENTS', 'WO-65', '1826001', 2018, NULL, '2020-11-15'),
(23, 'ALAT23', 'ROTRONIC', 'HYGROCLIP2', '20261107', 2020, NULL, '2020-11-15'),
(24, 'ALAT24', 'VAISALA', 'PTB330', 'P2610316', 2018, NULL, '2020-11-15'),
(25, 'ALAT25', 'CAMPBELL SCIENTIFIC', 'CS135', 'E1150', 2018, NULL, '2020-11-15'),
(26, 'ALAT26', 'BIRAL', 'VPF-730', 'M11514-01', 2018, NULL, '2020-11-15'),
(27, 'ALAT27', 'UBIQUITI', 'POWERBEAM 5AC GEN 2', '-', 2020, NULL, NULL),
(28, 'ALAT28', 'COASTAL ENV.', 'ZENO 6800', '1095', 2018, NULL, NULL),
(29, 'ALAT29', 'GILL INSTRUMENTS', 'WO-65', '1826006', 2018, NULL, '2020-11-15'),
(30, 'ALAT30', 'ROTRONIC', 'HYGROCLIP2', '20261018', 2018, NULL, '2020-11-15'),
(31, 'ALAT31', 'VAISALA', 'PTB330', 'P2610314', 2018, NULL, '2020-11-15'),
(32, 'ALAT32', 'CAMPBELL SCIENTIFIC', 'CS135', 'E1155', 2018, NULL, '2020-11-15'),
(33, 'ALAT33', 'BIRAL', 'VPF-710', 'M11512-01', 2018, NULL, '2020-11-15'),
(34, 'ALAT34', 'UBIQUITI', 'POWERBEAM 5AC GEN 2', '-', 2020, NULL, NULL),
(35, 'ALAT35', 'COASTAL ENV.', 'ZENO 6800', '1097', 2018, NULL, NULL),
(36, 'ALAT36', 'GILL INSTRUMENTS', 'WO-65', '1826009', 2018, NULL, '2020-11-15'),
(37, 'ALAT37', 'ROTRONIC', 'HYGROCLIP2', '204345501', 2020, NULL, '2020-11-15'),
(38, 'ALAT38', 'CISCO', 'CATALYST', '192.168.1.111', 2018, NULL, '2020-11-15'),
(39, 'ALAT39', 'TEXAS ELEC.', 'TR-522-M-01', '76110-518', 2018, NULL, '2020-11-15'),
(40, 'ALAT40', 'KIPP&ZONEN', 'CMP11', '185125', 2018, NULL, '2020-11-15'),
(41, 'ALAT41', 'COASTAL ENV.', '1220-153-161', '151', 2018, NULL, '2020-11-15'),
(42, 'ALAT42', 'FLUIDMESH', 'VOLO', '1200231503', 2018, NULL, NULL),
(43, 'ALAT43', 'DELL', 'POWEREDGE R230', NULL, 2018, NULL, NULL),
(44, 'ALAT44', 'DELL', 'POWEREDGE R230', NULL, 2018, NULL, NULL),
(45, 'ALAT45', 'HP', 'SLIMLINE PC 270', NULL, 2020, NULL, NULL),
(46, 'ALAT46', 'HP', 'SLIMLINE PC 270', NULL, 2020, NULL, NULL),
(47, 'ALAT47', 'HP', 'SLIMLINE PC 270', NULL, 2020, NULL, NULL),
(48, 'ALAT48', 'DELL', 'OPTIPLEX XE2', NULL, 2016, NULL, NULL),
(49, 'ALAT49', 'DELL', 'OPTIPLEX XE2', NULL, 2016, NULL, NULL),
(50, 'ALAT50', 'DELL', 'OPTIPLEX XE2', NULL, 2016, NULL, NULL),
(51, 'ALAT51', 'VAISALA', 'WIND30', '-', 2016, NULL, NULL),
(52, 'ALAT52', 'VAISALA', 'WIND30', '-', 2016, NULL, NULL),
(53, 'ALAT53', 'Thermo Schneider', NULL, '795345', 2012, NULL, '2021-03-13'),
(54, 'ALAT54', 'Thermo Schneider', NULL, '348011', 2014, NULL, '2021-03-13'),
(55, 'ALAT55', 'Thermo Schneider', NULL, '341506', 2014, NULL, '2021-03-13'),
(56, 'ALAT56', 'Thermo Schneider', NULL, '362610', 2014, NULL, '2021-03-13'),
(57, 'ALAT57', 'Thermo Schneider', NULL, '80806', 2011, NULL, '2021-03-13'),
(58, 'ALAT58', 'Thermo Schneider', NULL, '795385', 2011, NULL, '2021-03-13'),
(59, 'ALAT59', 'Thermo Schneider', NULL, '366909', 2009, NULL, '2021-03-13'),
(60, 'ALAT60', 'Thermo Schneider', NULL, '80906', 2011, NULL, '2021-03-13'),
(61, 'ALAT61', 'Thermo Schneider', NULL, '104813', 2013, NULL, '2021-03-13'),
(62, 'ALAT62', 'KETTERER', NULL, '903100', 2008, NULL, '2021-03-13'),
(63, 'ALAT63', 'Franz Ketterer', NULL, '9091232', 2011, NULL, '2021-03-13'),
(64, 'ALAT64', 'Lambercht', NULL, '350117', 1981, NULL, '2021-03-13'),
(65, 'ALAT65', '-', NULL, NULL, 2012, NULL, '2021-03-13'),
(66, 'ALAT66', '-', NULL, NULL, 2008, NULL, '2021-03-13'),
(67, 'ALAT67', 'DR. A. Muller', NULL, 'K 6711', 2014, NULL, '2021-03-13'),
(68, 'ALAT68', '-', NULL, NULL, 2014, NULL, '2021-03-13'),
(69, 'ALAT69', '-', NULL, NULL, 2020, NULL, '2021-03-13'),
(70, 'ALAT70', 'Breithaupt Kassel', NULL, '463930', 2008, NULL, '2021-03-13'),
(71, 'ALAT71', 'VAISALA', 'PTB330', 'L1410541', 2015, NULL, '2021-03-13'),
(72, 'ALAT72', 'Kipp & Zonen', NULL, '114060', 2012, NULL, NULL),
(73, 'ALAT73', 'RM YOUNG', 'MT.1695', NULL, 2020, NULL, '2021-03-13'),
(74, 'ALAT74', 'Tisch Env.', NULL, '3829', 2013, NULL, '2021-03-13'),
(75, 'ALAT75', 'Grasseby', NULL, '6043', 1994, NULL, '2021-03-13'),
(76, 'ALAT76', 'GEMATRONIK', NULL, NULL, 2006, NULL, NULL),
(77, 'ALAT77', 'GEMATRONIK', NULL, NULL, 2006, NULL, NULL),
(78, 'ALAT78', 'GEMATRONIK', NULL, NULL, 2011, NULL, NULL),
(79, 'ALAT79', 'GEMATRONIK', NULL, NULL, 2012, NULL, NULL),
(80, 'ALAT80', 'GEMATRONIK', NULL, NULL, 2006, NULL, NULL),
(81, 'ALAT81', 'GEMATRONIK', NULL, NULL, 2006, NULL, NULL),
(82, 'ALAT82', 'GEMATRONIK', NULL, NULL, 2006, NULL, NULL),
(83, 'ALAT83', 'GEMATRONIK', NULL, NULL, 2020, NULL, NULL),
(84, 'ALAT84', '-', NULL, NULL, 2021, NULL, NULL),
(85, 'ALAT85', 'APC', NULL, NULL, 2017, NULL, NULL),
(86, 'ALAT86', 'HARTECH', 'HT35Y', '158753', 2020, NULL, NULL),
(87, 'ALAT87', 'DELL', NULL, NULL, 2017, NULL, NULL),
(88, 'ALAT88', 'DELL', NULL, NULL, 2017, NULL, NULL),
(89, 'ALAT89', 'LENOVO', NULL, NULL, 2015, NULL, NULL),
(90, 'ALAT90', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(91, 'ALAT91', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(92, 'ALAT92', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(93, 'ALAT93', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(94, 'ALAT94', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(95, 'ALAT95', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(96, 'ALAT96', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(97, 'ALAT97', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(98, 'ALAT98', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(99, 'ALAT99', 'MICROSTEP', NULL, NULL, 2019, NULL, NULL),
(100, 'ALAT100', 'FUJITSU', NULL, NULL, 2019, NULL, NULL),
(101, 'ALAT101', 'FUJITSU', NULL, NULL, 2019, NULL, NULL),
(102, 'ALAT102', 'FUJITSU', 'ESPRIMO', NULL, 2019, NULL, NULL),
(103, 'ALAT103', 'FUJITSU', 'ESPRIMO', NULL, 2019, NULL, NULL),
(104, 'ALAT104', 'FUJITSU', 'ESPRIMO', NULL, 2019, NULL, NULL),
(105, 'ALAT105', 'FUJITSU', 'ESPRIMO', NULL, 2019, NULL, NULL),
(106, 'ALAT106', 'FUJITSU', 'ESPRIMO', NULL, 2019, NULL, NULL),
(107, 'ALAT107', 'BREITHAUPT KASSEL', '-', '463930', 2008, NULL, '2021-03-13'),
(108, 'ALAT108', 'MEISEI', 'RD-06G-001', '4891', 2010, NULL, NULL),
(109, 'ALAT109', 'SANAV', 'SA-200', '5371', 2014, NULL, NULL),
(110, 'ALAT110', 'MEISEI', 'RD-06G-005', '4911', 2010, NULL, NULL),
(111, 'ALAT111', 'MEISEI', '-', '537411', 2015, NULL, NULL),
(112, 'ALAT112', 'MEISEI', '-', '53762', 2015, NULL, NULL),
(113, 'ALAT113', 'DELL', 'INSPIRON 3847', NULL, 2015, NULL, NULL),
(114, 'ALAT114', 'LENOVO', '-', NULL, 2014, NULL, NULL),
(115, 'ALAT115', '-', '-', NULL, 2014, NULL, NULL),
(116, 'ALAT116', 'Yoose', '-', NULL, 2014, NULL, NULL),
(117, 'ALAT117', '-', '-', NULL, 2014, NULL, NULL),
(118, 'ALAT118', 'APC', '-', NULL, 2014, NULL, NULL),
(119, 'ALAT119', '-', '-', NULL, 2014, NULL, NULL),
(120, 'ALAT120', 'Intel', '-', NULL, 2018, NULL, NULL),
(121, 'ALAT121', '-', '-', NULL, 2015, NULL, NULL),
(122, 'ALAT122', 'Edimax', '-', NULL, 2015, NULL, NULL),
(123, 'ALAT123', '-', '-', NULL, 2015, NULL, NULL),
(124, 'ALAT124', 'APC', '-', NULL, 2015, NULL, NULL),
(125, 'ALAT125', '-', '-', NULL, 2015, NULL, NULL),
(126, 'ALAT126', 'HP', '-', NULL, 2018, NULL, NULL),
(127, 'ALAT127', '-', '-', NULL, 2018, NULL, NULL),
(128, 'ALAT128', 'Edimax', '-', NULL, 2018, NULL, NULL),
(129, 'ALAT129', '-', '-', NULL, 2018, NULL, NULL),
(130, 'ALAT130', 'APC', '-', NULL, 2018, NULL, NULL),
(131, 'ALAT131', 'Sonoff', '-', NULL, 2020, NULL, NULL),
(132, 'ALAT132', 'DELL', '-', NULL, 2018, NULL, NULL),
(133, 'ALAT133', 'DELL', '-', NULL, 2018, NULL, NULL),
(134, 'ALAT134', 'DELL', '-', NULL, 2016, NULL, NULL),
(135, 'ALAT135', 'DELL', '-', NULL, 2016, NULL, NULL),
(136, 'ALAT136', 'Mikrotik', 'RB1100AHx4 Dude Edition (arm)', NULL, 2015, NULL, NULL),
(137, 'ALAT137', 'Mikrotik', 'CCR1009-7G-1C-1S+', '914F0968DA9A', 2018, NULL, NULL),
(138, 'ALAT138', 'Mikrotik', 'CSS326-24G-2S+', '94580BF475F0', 2019, NULL, NULL),
(139, 'ALAT139', 'Ubiquiti', 'Lite Beam 5AC Gen2', '42832', 2018, NULL, NULL),
(140, 'ALAT140', 'Ubiquiti', 'Lite Beam 5AC Gen2', '42832', 2019, NULL, NULL),
(141, 'ALAT141', 'Mikrotik', 'RB1100AHx2 (powerpc)', '5.73E+11', 2018, NULL, NULL),
(142, 'ALAT142', 'HP', NULL, NULL, NULL, NULL, NULL),
(143, 'ALAT143', 'HP', NULL, NULL, NULL, NULL, NULL),
(144, 'ALAT144', 'Ubiquiti', 'Lite Beam 5AC Gen2', '42832', 2018, NULL, NULL),
(145, 'ALAT145', 'Mikrotik', 'RB1100AHx4', '91D70A88ADED', 2020, NULL, NULL),
(146, 'ALAT146', 'D link', NULL, NULL, NULL, NULL, NULL),
(147, 'ALAT147', 'D link', NULL, NULL, NULL, NULL, NULL),
(148, 'ALAT148', 'Ubiquiti', 'Lite Beam 5AC Gen2', '42832', 2019, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` varchar(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Sandika Galih', '123123456', 'sandika@gmail.com', 'Informatika', 'sandika.jpg'),
(2, 'John lenon', '123123457', 'john@gmail.com', 'Meteorologi', 'john.jpg'),
(3, 'Andi Arif', '123123458', 'andi@gmail.com', 'Klimatologi', 'andi.png'),
(13, 'dfs', 'alexander', 'discu.t2juanda@gmail.com', 'df', 'df'),
(14, 'dfs', 'Muhammad ', 'rizzal.fauzan@gmail.com', 'sdf', 'Logo-BMKG-new.png'),
(15, '123123', 'eka', 'semuaitu8@gmail.com', 'asd', '5ffa42da60e92.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$iGe7Uw8SKIX6L/ko1TddGeAPj7NpGY7whM8pbHd8SLqMYHGTQdxeG'),
(2, 'rizzal', '$2y$10$.1NeTEckL14zqScufLNXqeRbc1XsajXACZVkgWvguCzG4AQb40DQS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_kode`
--
ALTER TABLE `alat_kode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alat_kondisi`
--
ALTER TABLE `alat_kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alat_mtn`
--
ALTER TABLE `alat_mtn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alat_repair`
--
ALTER TABLE `alat_repair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alat_riwayat`
--
ALTER TABLE `alat_riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_kode`
--
ALTER TABLE `alat_kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `alat_kondisi`
--
ALTER TABLE `alat_kondisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `alat_mtn`
--
ALTER TABLE `alat_mtn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `alat_repair`
--
ALTER TABLE `alat_repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `alat_riwayat`
--
ALTER TABLE `alat_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
