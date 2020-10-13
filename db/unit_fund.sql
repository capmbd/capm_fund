-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 06:17 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unit_fund`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_area`
--

CREATE TABLE `agent_area` (
  `AGENT_AREA_ID` bigint(20) NOT NULL,
  `DISTRICT_ID` int(11) NOT NULL,
  `AGENT_AREA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AREA_CODE_ALPHA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AREA_CODE` int(11) NOT NULL,
  `AREA_CODE_NUM` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent_area`
--

INSERT INTO `agent_area` (`AGENT_AREA_ID`, `DISTRICT_ID`, `AGENT_AREA`, `AREA_CODE_ALPHA`, `AREA_CODE`, `AREA_CODE_NUM`, `created_at`, `updated_at`) VALUES
(1, 9, 'Borogola', 'BOR', 2, 2, '2019-07-23 11:08:19', '2020-01-26 14:55:28'),
(2, 60, 'Agrabad', 'AGR', 3, 3, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(3, 60, 'Anowara', 'ANO', 4, 4, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(4, 60, 'Asadgonj', 'ASA', 5, 5, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(5, 60, 'Bahaddarhat', 'BAH', 6, 6, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(6, 60, 'Chawkbazar', 'CHW', 7, 7, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(7, 60, 'Halishahar', 'HAL', 8, 8, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(8, 60, 'Hathazari', 'HAT', 9, 9, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(9, 60, 'Jubilee Road Branch', 'JRD', 10, 10, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(10, 60, 'Khatungonj', 'KHA', 11, 11, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(11, 60, 'Laldighi', 'LAL', 12, 12, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(12, 60, 'Mehdibag', 'MEH', 13, 13, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(13, 60, 'Nasirabad', 'NAS', 14, 14, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(14, 55, 'Kanderpar', 'KAN', 15, 15, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(15, 55, 'Monohorpur', 'MON', 16, 16, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(16, 61, 'Bazar Ghata', 'BGH', 17, 17, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(17, 61, 'Main Road', 'MRD', 18, 18, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(18, 60, 'GEC Mor', 'GEC', 19, 19, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(19, 38, 'Banani', 'BAN', 20, 20, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(20, 38, 'Baridhara', 'BAR', 21, 21, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(21, 38, 'Bashundhara', 'BAS', 22, 22, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(22, 38, 'Dhanmondi', 'DHA', 23, 23, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(23, 38, 'Dilkusha', 'DIL', 24, 24, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(24, 38, 'Rajuk', 'RAJ', 25, 25, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(25, 38, 'Sadharaf Bima Tower', 'SBT', 26, 26, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(26, 38, 'DSE', 'DSE', 27, 27, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(27, 38, 'Elephant Road', 'ELE', 28, 28, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(28, 38, 'Gulshan', 'GUL', 29, 29, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(29, 38, 'Gulshan Avenue', 'GAV', 30, 30, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(30, 38, 'Gulshan Avenue Branch', 'GAB', 31, 31, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(31, 38, 'Tejgaon', 'TEJ', 32, 32, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(32, 38, 'Mirpur', 'MIR', 33, 33, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(33, 38, 'Mohammadpur', 'MOH', 34, 34, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(34, 38, 'Motijheel', 'MOT', 35, 35, '2019-07-23 11:08:19', '2019-07-23 11:08:19'),
(35, 38, 'Nikunjo', 'NIK', 36, 36, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(36, 38, 'Bashundhara City', 'BCS', 37, 37, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(37, 38, 'Panthapath', 'PAN', 38, 38, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(38, 38, 'Ramna', 'RAM', 39, 39, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(39, 38, 'Savar', 'SAV', 40, 40, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(40, 38, 'Segun Bagicha', 'SEG', 41, 41, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(41, 38, 'Uttara', 'UTT', 42, 42, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(42, 57, 'Feni', 'FEN', 43, 43, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(43, 51, 'Hobigonj', 'HOB', 44, 44, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(44, 23, 'R N Road', 'RNR', 45, 45, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(45, 10, 'Joypurhat Sadar', 'JSA', 46, 46, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(46, 24, 'Khan e Sabur Road', 'KSR', 47, 47, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(47, 24, 'Sir Iqbal Road', 'SIR', 48, 48, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(48, 17, 'Thanapara', 'THA', 49, 49, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(49, 52, 'Saifur Rahman Road', 'SRR', 50, 50, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(50, 47, 'Ananda Mohan Avenue', 'AMA', 51, 51, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(51, 41, 'B. B. Road', 'BBR', 52, 52, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(52, 41, 'Tan Bazar', 'TAN', 53, 53, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(53, 58, 'Chowmuhani', 'CHW', 54, 54, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(54, 15, 'Pabna', 'PAB', 55, 55, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(55, 13, 'Ghoramara', 'GHO', 56, 56, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(56, 13, 'Shaheb Bazar', 'SHA', 57, 57, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(57, 5, 'Rangpur', 'RAN', 58, 58, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(58, 53, 'Chatak', 'CHA', 59, 59, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(59, 50, 'Bandar Bazar', 'BBZ', 60, 60, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(60, 50, 'Beanibazar', 'BEA', 61, 61, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(61, 50, 'Chouhatta', 'CHO', 62, 62, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(62, 50, 'Dargah Gate', 'DAR', 63, 63, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(63, 50, 'Fenchugonj', 'FEG', 64, 64, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(64, 50, 'Jail Road', 'JRD', 65, 65, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(65, 50, 'Zindabazar', 'ZIN', 66, 66, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(66, 44, 'Panchani Bazar', 'PBZ', 67, 67, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(67, 38, 'Eskaton', 'ESK', 1, 1, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(68, 38, 'Topkhana Road', 'TOP', 68, 68, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(69, 55, 'Murad Nagar', '3510', 69, 69, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(70, 1, 'Bir Uttam Shaheed Mahboob Cantonment Branch', 'DMC', 109, 109, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(71, 38, 'Merchant Banking Division', 'MBD', 172, 172, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(72, 60, 'BM Chittagong', 'CHB', 176, 176, '2019-07-23 11:08:20', '2019-07-23 11:08:20'),
(73, 60, 'BM Chowmuhuni ', 'CWB', 177, 177, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(74, 61, 'Coxs Bazar', 'LDP', 162, 162, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(75, 60, 'CEPZ', 'CPZ', 163, 163, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(76, 38, 'Principal', 'MOT', 164, 164, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(77, 38, 'Eunoos Center', 'ECB', 165, 165, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(78, 38, 'Islampur', 'IPB', 166, 166, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(79, 41, 'Narayangonj Branch', 'NRG', 167, 167, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(80, 60, 'Nasirabad Branch', 'NBB', 168, 168, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(81, 50, 'Sylhet Branch', 'SYB', 169, 169, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(82, 38, 'Mbank', 'MBD', 170, 170, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(83, 38, 'Uttara Branch', 'UBB', 171, 171, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(84, 38, 'Kawran Bazar, Dhaka Trade Center ', 'DTC', 179, 179, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(85, 38, 'Ananna Shopping Complex, DOHS Baridhara', 'ASC', 181, 181, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(86, 38, 'Motijheel Extension Branch', 'MEB', 183, 183, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(87, 19, 'Muradnagar ', 'MURADNAGAR', 70, 70, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(88, 38, 'Head Office', 'HOD', 71, 71, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(89, 38, 'Principal Branch', 'PRH', 72, 72, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(90, 38, 'Sena Kalyan Bhaban Branch', 'SKB', 73, 73, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(91, 25, 'fff', '00', 74, 74, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(92, 24, 'Mongla', 'MNB', 75, 75, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(93, 38, 'Joypara Branch', 'JPA', 76, 76, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(94, 39, 'Joydevpur', 'JDP', 77, 77, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(95, 9, 'Bogra Cantonment Branch', 'BCB', 79, 79, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(96, 42, 'Narsindi Branch ', 'NAR', 80, 80, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(97, 41, 'Narayangonj', 'NYG', 83, 83, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(98, 60, 'Chittagong Cantonment Branch', 'CTB', 84, 84, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(99, 60, 'Jubilee Road Branch', 'JRB', 86, 86, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(100, 5, 'Rangpur Cantonment Branch', 'RCB', 87, 87, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(101, 38, 'Keraniganj Branch', 'KRN', 89, 89, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(102, 23, 'Jessore Cantonment Branch', 'JCB', 90, 90, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(103, 24, 'Jahanabad Cantt Branch', 'JHN', 91, 91, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(104, 20, 'Jhinaidah', 'JND', 92, 92, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(105, 60, 'Dewan Bazar Branch', 'DBB', 94, 94, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(106, 38, 'Savar Cantonment Branch', 'SCB', 95, 95, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(107, 26, 'Munshiganj Branch', 'MUB', 96, 96, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(108, 60, 'Amirabad Lohagara Branch ', 'ALB', 97, 97, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(109, 54, 'Ashugonj Branch', 'ASH', 98, 98, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(110, 38, 'Dhamrai Branch', 'DHM', 100, 100, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(111, 24, 'Khulna Branch', 'KHU', 101, 101, '2019-07-23 11:08:21', '2019-07-23 11:08:21'),
(112, 40, 'Sreenagar Branch', 'SRE', 103, 103, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(113, 38, 'Kafrul Branch ', 'KAF', 104, 104, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(114, 44, 'Shaheed Salauddin Cantonment Branch', 'SSB', 105, 105, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(115, 39, 'Tongi Branch', 'TON', 106, 106, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(116, 58, 'Chowmohoni Branch', 'CHM', 107, 107, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(117, 60, 'Khatunganj Branch ', 'KHB', 110, 110, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(118, 38, 'Patuatuly Branch', 'PTY', 111, 111, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(119, 38, 'Prograti Sarani Branch', 'PSB', 112, 112, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(120, 38, 'Mohakhali Branch', 'MHK', 114, 114, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(121, 38, 'Dilkusha Corporate Branch ', 'DCB', 115, 115, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(122, 61, 'Coxs Bazar Branch', 'COX', 116, 116, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(123, 17, 'Kushtia', 'KST', 117, 117, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(124, 38, 'Ashulia Branch', 'ASU', 118, 118, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(125, 1, 'Auliapur Branch', 'AUL', 119, 119, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(126, 50, 'Golapganj Branch', 'GOL', 121, 121, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(127, 55, 'Comilla Branch', 'COM', 122, 122, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(128, 16, 'Khaja Yunnis Ali Medical College  Branch ', 'KYM', 123, 123, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(129, 55, 'Titas Branch', 'TIS', 124, 124, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(130, 62, 'Rangamati Branch', 'RAN', 125, 125, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(131, 60, 'CDA Avenue Branch', 'CDA', 126, 126, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(132, 13, 'Rajshahi Branch', 'RAJ', 127, 127, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(133, 35, 'Bhedarganj Branch', 'BHE', 128, 128, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(134, 60, 'Kadamtali', 'KDT', 129, 129, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(135, 50, 'Sylhet Corporate Branch', 'SYL', 130, 130, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(136, 29, 'Barisal Branch ', 'BAR', 131, 131, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(137, 39, 'Rajendrapur Cantonment Branch ', 'RJD', 132, 132, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(138, 5, 'Shatibari Branch', 'SHA', 133, 133, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(139, 38, 'Elephant Road Branch', 'ERB', 134, 134, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(140, 14, 'Dayarampur Branch', 'DRP', 135, 135, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(141, 8, 'Lalmonirhat Branch', 'LAL', 136, 136, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(142, 38, 'Khawja Garib Newaz Avenue Branch', 'KGN', 137, 137, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(143, 38, 'Matuail Branch', 'MTU', 138, 138, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(144, 38, 'Dholaikhal SME Center', 'DDH', 139, 139, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(145, 39, 'Mirerbazar SME Center', 'GZM', 140, 140, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(146, 38, 'Banani Branch', 'BAN', 141, 141, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(147, 38, 'Gopalgonj Branch', 'GOG', 142, 142, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(148, 48, 'Kishorgonj Branch', 'KIS', 143, 143, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(149, 36, 'Faridpur Branch', 'FRP', 144, 144, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(150, 5, 'Saidpur Branch', 'SDP', 145, 145, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(151, 42, 'Madabdhi SME Centre', 'NMS', 146, 146, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(152, 38, 'Millenium Corporate Branch ', 'MNC', 147, 147, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(153, 38, 'Uttara Corporate Branch ', 'UTC', 148, 148, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(154, 60, 'Hali Shahar Branch', 'HAL', 149, 149, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(155, 50, 'Beanibazar Branch ', 'BNB', 150, 150, '2019-07-23 11:08:22', '2019-07-23 11:08:22'),
(156, 52, 'Moulvibazar Branch', 'MLV', 151, 151, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(157, 25, 'Goalabazar Branch ', 'GOA', 152, 152, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(158, 38, 'Mirpur Branch', 'MIR', 153, 153, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(159, 60, 'Naval Base Branch ', 'NAV', 154, 154, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(160, 38, 'Kawran Bazar Branch ', 'KAW', 155, 155, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(161, 60, 'Agrabad Central Office', 'ACO', 156, 156, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(162, 38, 'Dhaka ', 'TPH', 157, 157, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(163, 38, 'Motijheel', 'PRN', 158, 158, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(164, 60, 'Asadgonj,CHT', 'ASJ', 159, 159, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(165, 60, 'A K Khan', 'ZHR', 160, 160, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(166, 60, 'GEC', 'GEC', 161, 161, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(167, 38, 'Bm Dhanmondi', 'DHB', 174, 174, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(168, 38, 'BM SylhetÂ¿Â¿Â¿Â¿Â¿Â¿Â¿Â¿', 'SYB', 175, 175, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(169, 38, 'Corporate Head Office, Motijheel ', 'CHO', 178, 178, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(170, 38, 'North Tower, Mymensing Road, Uttara', 'NTU', 180, 180, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(171, 50, 'Surma Commercial Centre, Sylhet', 'SCC', 182, 182, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(172, 64, 'Bandarban ', 'BBB', 78, 78, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(173, 63, 'Khagrachari Branch', 'KHR', 81, 81, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(174, 55, 'Comilla Cantonment Branch', 'CCB', 82, 82, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(175, 48, 'Bhairab Branch', 'BHB', 85, 85, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(176, 50, 'Shahjalal Uposhahor Branch', 'SUB', 88, 88, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(177, 47, 'Momenshahi Cantonment Branch', 'MCB', 93, 93, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(178, 50, 'Jalalabad Cantonment Branch', 'JLB', 99, 99, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(179, 60, 'Agrabad Branch', 'AGB', 102, 102, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(180, 38, 'Dhanmondi Branch', 'DHB', 108, 108, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(181, 38, 'Gulshan Corporate Branch', 'GCB', 113, 113, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(182, 38, 'Radisson Water Garden Hotel Branch', 'RWB', 120, 120, '2019-07-23 11:08:23', '2019-07-23 11:08:23'),
(183, 38, 'BM WW Tower', 'WWB', 173, 173, '2019-07-23 11:08:23', '2019-07-23 11:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_country`
--

CREATE TABLE `applicant_country` (
  `APPLICANT_COUNTRY_ID` bigint(20) NOT NULL,
  `APPLICANT_COUNTRY_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `APPLICANT_COUNTRY_CODE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_country`
--

INSERT INTO `applicant_country` (`APPLICANT_COUNTRY_ID`, `APPLICANT_COUNTRY_NAME`, `APPLICANT_COUNTRY_CODE`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', '00', '2019-07-25 09:38:35', '2020-01-26 16:18:15'),
(2, 'United States of America', '01', '2019-07-25 09:38:35', '2019-07-25 09:38:35'),
(3, 'United Kingdom', '02', '2019-07-25 09:38:35', '2019-07-25 09:38:35'),
(4, 'Philipines', '03', '2019-07-25 09:38:35', '2019-07-25 09:38:35'),
(5, 'The Netherlands', '04', '2019-07-25 09:38:35', '2019-07-25 09:38:35'),
(6, 'India', '05', '2019-07-25 09:38:35', '2019-07-25 09:38:35'),
(7, 'Saudi Arabia', '06', '2019-07-25 09:38:35', '2019-07-25 09:38:35'),
(8, 'Malaysia', '07', '2019-07-25 09:38:35', '2019-07-25 09:38:35'),
(9, 'United Arab Amirates', '08', '2019-07-25 09:38:35', '2019-07-25 09:38:35'),
(10, 'Pakistan', '09', '2019-07-25 09:38:35', '2019-07-25 09:38:35'),
(11, 'Srilanka', '10', '2019-07-25 09:38:35', '2019-07-25 09:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `asset_manager`
--

CREATE TABLE `asset_manager` (
  `MANAGER_ID` bigint(20) UNSIGNED NOT NULL,
  `MANAGER_COMPANY_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MANAGER_CONTACT_PERSON` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MANAGER_CONTACT_PERSON_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MANAGER_CONTACT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MANAGER_CONTACT_PHONE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MANAGER_CONTACT_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MANAGER_EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_manager`
--

INSERT INTO `asset_manager` (`MANAGER_ID`, `MANAGER_COMPANY_NAME`, `MANAGER_CONTACT_PERSON`, `MANAGER_CONTACT_PERSON_MOBILE`, `MANAGER_CONTACT_ADDRESS`, `MANAGER_CONTACT_PHONE`, `MANAGER_CONTACT_MOBILE`, `MANAGER_EMAIL`, `created_at`, `updated_at`) VALUES
(1, 'CAPM Company Limited', 'Mahmud Hussain,CFA', '01841228811', '20 Kemal Ataturk Avenue, Banani C/A, Dhaka 1213, Bangladesh', '+88-02-9856268-9', '01841228811', 'amcuf@capmbd.com', '2019-04-10 10:30:49', '2020-01-26 11:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `assign_salescenter`
--

CREATE TABLE `assign_salescenter` (
  `ASSIGN_ID` bigint(20) UNSIGNED NOT NULL,
  `SC_ID` int(11) NOT NULL,
  `FUND_ID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_salescenter`
--

INSERT INTO `assign_salescenter` (`ASSIGN_ID`, `SC_ID`, `FUND_ID`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-09-19 05:34:31', '2019-09-19 05:34:31'),
(2, 1, 2, '2019-09-30 05:44:05', '2019-09-30 05:44:05'),
(3, 1, 3, '2019-10-09 03:50:55', '2019-10-09 03:50:55'),
(4, 2, 4, '2019-10-09 07:45:10', '2019-10-09 07:45:10'),
(6, 2, 1, '2019-10-09 07:53:25', '2019-10-09 07:53:25'),
(7, 4, 5, '2019-10-16 11:47:06', '2019-10-16 11:47:06'),
(8, 1, 5, '2019-10-16 11:59:37', '2019-10-16 11:59:37'),
(9, 4, 1, '2019-10-16 11:59:42', '2019-10-16 11:59:42'),
(10, 5, 1, '2019-10-16 12:00:26', '2019-10-16 12:00:26'),
(11, 5, 5, '2019-10-16 12:06:36', '2019-10-16 12:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `auditor`
--

CREATE TABLE `auditor` (
  `AUDITOR_ID` bigint(20) UNSIGNED NOT NULL,
  `SPONSOR_ID` int(11) NOT NULL,
  `COMPANY_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACT_PERSON` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACT_PERSON_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACT_PHONE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACT_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auditor`
--

INSERT INTO `auditor` (`AUDITOR_ID`, `SPONSOR_ID`, `COMPANY_NAME`, `CONTACT_PERSON`, `CONTACT_PERSON_MOBILE`, `CONTACT_ADDRESS`, `CONTACT_PHONE`, `CONTACT_MOBILE`, `EMAIL`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hoda Vasi Chowdhury', 'AF Nesaruddin', 'N/A', 'Ispahani Building (3rd floor) 14-15 Motijheel Commercial Area, Dhaka-1000', '02-9551028', 'N/A', 'alam@hodavasi.com', '2019-04-10 10:32:17', '2020-01-26 12:27:49'),
(2, 4, 'Pinaki & Co.', 'YAZDAN YUSUF CHOWDHURY', '43512', 'House no.12, Road 54/A, Gulshan 2, Dhaka', '314', '134', 's@c.com', '2019-10-09 07:34:48', '2019-10-09 07:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `auth_per`
--

CREATE TABLE `auth_per` (
  `AUTH_PER_ID` bigint(20) NOT NULL,
  `INSTAPP_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTH_GENDER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTH_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTH_DESIG` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTH_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTH_NATIONAL_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTH_BIRTHDAY` date NOT NULL,
  `AUTH_MOBILE_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AUTH_SIGNATURE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AUTH_IMG_PATH` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth_per`
--

INSERT INTO `auth_per` (`AUTH_PER_ID`, `INSTAPP_ID`, `AUTH_GENDER`, `AUTH_NAME`, `AUTH_DESIG`, `AUTH_ADDRESS`, `AUTH_NATIONAL_ID`, `AUTH_BIRTHDAY`, `AUTH_MOBILE_NO`, `AUTH_SIGNATURE`, `AUTH_IMG_PATH`, `created_at`, `updated_at`) VALUES
(1, '200010000001', 'Mr.', 'SM Mahmud Hussain', 'Managing Director', 'N/A', 'N/A', '2019-07-30', '+8801927070707', '130601389.download.jpg', '127855731.download.jpg', '2019-07-30 09:21:30', '2019-10-02 06:15:39'),
(2, '200010000001', '', 'Major Khalil Bin Wahid (Retd)', 'Chairman', '', '', '0000-00-00', '+8801819221188', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(3, '200010000002', '', 'Quamrul Islam', 'Head of Treasury ', '', '', '0000-00-00', '9883701-10', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(4, '200010000002', '', 'Mohammed Nasir Uddin Choudhury ', 'Managing Director', '', '', '0000-00-00', '9883701-10', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(5, '200010000003', '', 'Shahud Ahmed ', 'Executive Vice President ', '', '', '0000-00-00', '+8801713090077', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(6, '200020000004', '', 'Adel Ahmed', 'Managing Director ', '', '', '0000-00-00', 'gjnhgjn', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(7, '200010000005', '', 'Kayes Khalil Khan', 'General Manager, Investments', '', '', '0000-00-00', '+8801749300855', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(8, '200010000005', '', 'Kazi Mashook-ul Haq', 'AVP, Financial Control ', '', '', '0000-00-00', '+8801713118360', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(9, '200010000006', '', 'Kayes Khalil Khan', 'General Manager, Investments', '', '', '0000-00-00', '+8801749300855', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(10, '200010000006', '', 'Kazi Mashook-ul Haq', 'AVP, Financial Control ', '', '', '0000-00-00', '+8801713118360', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(11, '200010000007', '', 'Kayes Khalil Khan', 'General Manager, Investments', '', '', '0000-00-00', '+8801749300855', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(12, '200010000007', '', 'Kazi Mashook-ul Haq', 'AVP, Financial Control ', '', '', '0000-00-00', '+8801713118360', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(13, '200010000008', '', 'Kayes Khalil Khan', 'General Manager, Investments', '', '', '0000-00-00', '+8801749300855', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(14, '200010000008', '', 'Kazi Mashook-ul Haq', 'AVP, Financial Control ', '', '', '0000-00-00', '+8801713118360', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(15, '200010000009', '', 'Kayes Khalil Khan', 'General Manager, Investments', '', '', '0000-00-00', '+8801749300855', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(16, '200010000009', '', 'Kazi Mashook-ul Haq', 'AVP, Financial Control ', '', '', '0000-00-00', '+8801713118360', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(17, '200010000010', '', 'Kayes Khalil Khan', 'General Manager, Investments', '', '', '0000-00-00', '+8801749300855', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(18, '200010000010', '', 'Kazi Mashook-ul Haq', 'AVP, Financial Control ', '', '', '0000-00-00', '+8801713118360', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(19, '200010000011', '', 'SM Mahmud Hussain', 'CEO  Director', '', '', '0000-00-00', '+8801927070707', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(20, '200010000011', '', 'Chandan Wasif', 'Senior Manager', '', '', '0000-00-00', '+8801847054725', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(21, '200010000012', '', 'Arifur Rahman', 'Director', '', '', '0000-00-00', '+8801819215912', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(22, '200010000013', '', 'M A Faisal Mahmud', 'Assistant Vice President', '', '', '0000-00-00', '01730713992', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(23, '200010000013', '', 'Simon Ibn Muzib', 'Senior Manager', '', '', '0000-00-00', '01755513025', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(24, '200010000014', '', 'M A Faisal Mahmud', 'Assistant Vice President', '', '', '0000-00-00', '01730713992', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(25, '200010000014', '', 'Simon Ibn Muzib', 'Senior Manager', '', '', '0000-00-00', '01755513025', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(26, '200010000015', '', 'Subash Chandra Pal', 'Proprietor ', '', '', '0000-00-00', '+8801680365201', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(27, '200010000016', 'Mr.', 'MD.FAYEKUZZAMAN', 'MANAGING DIRECTOR & CEO', 'HF Asset Management Limited, RABBEE HOUSE, 2nd Floor, B-2, Building-B,House: CEN (B)-11, Road: 99,Gulshan-2, Dhaka-1212', '2695044871250', '1953-10-01', '+8801711596705', NULL, NULL, '2019-07-30 09:21:30', '2020-10-01 11:52:08'),
(28, '200010000016', 'Mr.', 'MD. ALAUDDIN KHAN', 'CHIEF INVESTMENT OFFICER', 'HF Asset Management Limited, RABBEE HOUSE, 2nd Floor, B-2, Building-B,House: CEN (B)-11, Road: 99,Gulshan-2, Dhaka-1212', '6855531601', '1958-01-15', '01747903600', NULL, NULL, '2019-07-30 09:21:30', '2020-10-01 11:53:17'),
(29, '200010000017', '', 'Sankor Chandra Paul', 'AVP', '', '', '0000-00-00', '01701205005', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(30, '200010000017', '', 'Sonchoy Kumer Saha', 'FAVP', '', '', '0000-00-00', '01755615313', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(31, '200010000018', '', 'M A FAYSAL MAHMUD', 'SENIOR ASSISTANT VICE PRESIDENT', '', '', '0000-00-00', '1730713992', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(32, '200010000018', '', 'SIMON IBN MUZIB', 'FORST ASSISTANT VICE PRESIDENT', '', '', '0000-00-00', '1755513025', NULL, NULL, '2019-07-30 09:21:30', '2019-07-30 09:21:30'),
(33, '200010000019', 'Mr.', 'MD.FAYEKUZZAMAN', 'MANAGING DIRECTOR & CEO', 'HF Asset Management Limited, RABBEE HOUSE, 2nd Floor, B-2, Building-B,House: CEN (B)-11, Road: 99,Gulshan-2, Dhaka-1212', '2695044871250', '1953-10-01', '01711596705', NULL, NULL, '2020-09-30 18:43:33', '2020-10-01 11:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `BANK_ID` int(11) NOT NULL,
  `BANK_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`BANK_ID`, `BANK_NAME`, `created_at`, `updated_at`) VALUES
(1, 'D Bank', '2019-07-24 10:10:53', '2020-01-26 13:03:25'),
(2, 'Brac Bank', '2019-07-24 10:11:01', '2019-07-24 10:11:01'),
(3, 'Prime Bank', '2019-07-24 10:11:19', '2019-07-24 10:11:19'),
(4, 'State Bank', '2019-07-24 10:11:44', '2019-07-24 10:11:44'),
(5, 'Dutch Bangla Bank Limited', '2019-07-24 10:12:15', '2019-07-24 10:12:15'),
(6, 'BRAC Bank Limited', '2019-07-24 10:12:22', '2019-07-24 10:12:22'),
(7, 'Mutual Trust Bank Limited', '2019-07-24 10:12:31', '2019-07-24 10:12:31'),
(8, 'Islami Bank Bangladesh Limited', '2019-07-24 10:12:41', '2019-07-24 10:12:41'),
(9, 'Trust Bank Limited', '2019-07-24 10:12:53', '2019-07-24 10:12:53'),
(10, 'Hsbc', '2019-07-24 10:13:01', '2019-07-24 10:13:01'),
(11, 'State Bank of India', '2019-07-24 10:13:08', '2019-07-24 10:13:08'),
(12, 'Prime Bank Limited', '2019-07-24 10:13:22', '2019-07-24 10:13:22'),
(13, 'City Bank', '2019-07-24 10:13:28', '2019-07-24 10:13:28'),
(14, 'IFIC Bank', '2019-07-24 10:13:35', '2019-07-24 10:13:35'),
(15, 'Janata Bank', '2019-07-24 10:13:42', '2019-07-24 10:13:42'),
(16, 'IFIC Bank', '2019-07-24 10:13:47', '2019-07-24 10:13:47'),
(17, 'Union Bank Limited', '2019-07-24 10:13:56', '2019-07-24 10:13:56'),
(18, 'Exim Bank Ltd', '2019-10-09 07:24:37', '2019-10-09 07:24:37'),
(19, 'TRUST BANK LIMITED', '2019-10-13 09:40:28', '2019-10-13 09:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `BANK_ACCOUNT_ID` bigint(20) UNSIGNED NOT NULL,
  `BANK_ID` int(11) NOT NULL,
  `SPONSOR_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BRANCH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ACCOUNT_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROUTING_NO` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ACCOUNT_TYPE` int(11) NOT NULL COMMENT '1 - Current Account , 2 - Short Term Deposit , 3 - Savings Account, 4 - Escrow ',
  `BANK_AMOUNT` double(14,2) NOT NULL DEFAULT '0.00',
  `INTEREST_RATE` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`BANK_ACCOUNT_ID`, `BANK_ID`, `SPONSOR_ID`, `ACCOUNT_NAME`, `BRANCH`, `ACCOUNT_NO`, `ROUTING_NO`, `ACCOUNT_TYPE`, `BANK_AMOUNT`, `INTEREST_RATE`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 'CAPM Unit Fund  (Clients)', 'Banani', '00560320000051', '240260439', 2, 29502403.00, 4.00, '2019-10-03 10:59:02', '2020-10-07 06:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `broker`
--

CREATE TABLE `broker` (
  `BROKER_ID` bigint(20) UNSIGNED NOT NULL,
  `BROKER_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BROKER_CODE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BROKER_EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `broker`
--

INSERT INTO `broker` (`BROKER_ID`, `BROKER_NAME`, `BROKER_CODE`, `BROKER_EMAIL`, `created_at`, `updated_at`) VALUES
(1, 'City Brokerage', 'TB0001', 'mehedi3555@gmail.com', '2020-01-04 09:28:32', '2020-01-04 09:28:32'),
(2, 'Brok2', 'TB0002', 'mehedi3555@gmail.com', '2020-01-04 09:29:22', '2020-01-04 09:29:22'),
(3, 'Brok3', 'TB0003', 'mehedi3555@gmail.com', '2020-01-04 09:29:37', '2020-01-04 09:39:20'),
(4, 'BRAC EPL STOCK BROKERAGE', 'CF0011', 'saffat@capmbd.com', '2020-01-22 16:33:12', '2020-01-22 16:33:12'),
(5, 'Broker', 'BE-005', 'brok@gmail.com', '2020-01-25 15:03:42', '2020-01-25 15:03:42'),
(6, 'Broker1', 'TB0006', 'brok666@gmail.com', '2020-01-25 15:04:18', '2020-01-25 15:04:18'),
(7, 'Brac EPL', 'TB0004', 'brok666@gmail.com', '2020-01-25 15:04:43', '2020-01-25 15:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `buy_sell_commission`
--

CREATE TABLE `buy_sell_commission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FUND_ID` int(11) NOT NULL,
  `REGISTRATION_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BUY_SELL_USER_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TOTAL_AMOUNT` double(10,2) NOT NULL,
  `COMMISSION_AMOUNT` double(8,2) NOT NULL,
  `STATUS` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy_sell_commission`
--

INSERT INTO `buy_sell_commission` (`id`, `FUND_ID`, `REGISTRATION_NO`, `BUY_SELL_USER_ID`, `TOTAL_AMOUNT`, `COMMISSION_AMOUNT`, `STATUS`, `created_at`, `updated_at`) VALUES
(1, 1, '100010000001', '01BAN001', 10025.00, 15.04, 'A', '2019-09-25 10:53:03', NULL),
(2, 1, '100010000001', '01BAN001', 5525.00, 8.29, 'A', '2019-09-26 11:04:20', NULL),
(3, 1, '100010000004', '01BAN001', 10025.00, 15.04, 'A', '2019-09-26 11:34:33', NULL),
(4, 1, '100010000004', '01BAN001', 5525.00, 8.29, 'A', '2019-09-26 11:42:53', NULL),
(5, 1, '100010000022', '01BAN001', 11050.00, 16.57, 'A', '2019-09-28 10:02:42', NULL),
(6, 1, '100010000022', '01BAN001', 5525.00, 8.29, 'A', '2019-09-28 10:15:30', NULL),
(7, 1, '100010000022', '01BAN001', 2210.00, 3.31, 'A', '2019-09-29 03:50:02', NULL),
(8, 1, '100010000022', '01BAN001', 2210.00, 3.31, 'A', '2019-09-29 04:22:20', NULL),
(9, 1, '100010000022', '01BAN001', 55250.00, 82.88, 'A', '2019-09-29 04:32:34', NULL),
(10, 1, '100010000022', '01BAN001', 55250.00, 82.88, 'A', '2019-09-29 04:48:36', NULL),
(11, 1, '100010000022', '01BAN001', 55250.00, 82.88, 'A', '2019-09-29 04:53:29', NULL),
(12, 2, '100010000002', '01BAN001', 501250.00, 601.50, 'A', '2019-09-30 07:44:58', NULL),
(13, 1, '100010000002', '01BAN001', 48560.00, 72.84, 'A', '2019-09-30 07:45:03', NULL),
(14, 2, '200010000001', '01BAN001', 501250.00, 601.50, 'A', '2019-09-30 07:45:42', NULL),
(15, 1, '100010000002', '01BAN001', 47810.00, 71.72, 'A', '2019-09-30 09:37:49', NULL),
(16, 2, '100010000002', '01BAN001', 105500.00, 126.60, 'A', '2019-09-30 09:37:53', NULL),
(17, 2, '200010000001', '01BAN001', 211000.00, 253.20, 'A', '2019-09-30 09:37:57', NULL),
(18, 2, '100010000003', '01BAN001', 501250.00, 601.50, 'A', '2019-10-01 03:30:23', NULL),
(19, 2, '100010000003', '01BAN001', 211000.00, 253.20, 'A', '2019-10-01 03:34:44', NULL),
(20, 2, '100010000003', '100010000003', 501250.00, 601.50, 'A', '2019-10-01 04:46:42', NULL),
(21, 2, '100010000003', '100010000003', 105500.00, 126.60, 'A', '2019-10-01 05:16:22', NULL),
(22, 2, '100010000003', '01BAN001', 50125.00, 60.15, 'A', '2019-10-01 05:23:17', NULL),
(23, 2, '100010000003', '01BAN001', 527500.00, 633.00, 'A', '2019-10-01 05:24:57', NULL),
(24, 3, '100010000002', '01BAN001', 500600.00, 600.72, 'A', '2019-10-09 04:30:02', NULL),
(25, 3, '100010000002', '01BAN001', 392000.00, 470.40, 'A', '2019-10-09 04:42:36', NULL),
(26, 1, '100010000114', '01BAN001', 29136.00, 43.70, 'A', '2019-10-09 06:31:58', NULL),
(27, 1, '100010000114', '100010000114', 9562.00, 14.34, 'A', '2019-10-09 06:42:10', NULL),
(28, 4, '100010000002', '08JCB001', 1100.00, 0.11, 'A', '2019-10-09 08:07:59', NULL),
(29, 4, '100010000002', '08JCB001', 527.50, 0.05, 'A', '2019-10-09 08:16:33', NULL),
(30, 1, '100010000022', '100010000022', 10000.00, 15.00, 'A', '2019-10-15 04:51:58', NULL),
(31, 1, '100010000146', '01BAN001', 50000.00, 75.00, 'A', '2019-10-16 06:20:20', NULL),
(32, 1, '100010000113', '01BAN001', 10000.00, 15.00, 'A', '2019-10-16 06:30:11', NULL),
(33, 1, '100010000052', '01BAN001', 55000.00, 82.50, 'A', '2019-10-16 06:47:35', NULL),
(34, 1, '100010000146', '01BAN001', 1800.00, 2.70, 'A', '2019-10-16 06:48:42', NULL),
(35, 1, '100010000052', '01BAN001', 18000.00, 27.00, 'A', '2019-10-16 08:13:08', NULL),
(36, 1, '200010000022', '01BAN001', 27500000.00, 41250.00, 'A', '2019-10-16 09:06:51', NULL),
(37, 1, '200010000001', '01BAN001', 610845.00, 916.27, 'A', '2019-10-16 10:47:18', NULL),
(38, 5, '100010000052', '09DHA001', 100000.00, 10.00, 'A', '2019-10-16 12:20:05', NULL),
(39, 5, '100010000052', '100010000052', 40080.00, 4.01, 'A', '2019-10-16 12:34:50', NULL),
(40, 5, '100010000052', '100010000052', 500000.00, 50.00, 'A', '2019-10-17 11:36:03', NULL),
(41, 1, '100010000054', '01BAN001', 16741.80, 25.11, 'A', '2019-10-27 11:40:26', NULL),
(42, 1, '300010000061', '300010000061', 940.70, 1.41, 'A', '2019-11-07 08:53:37', NULL),
(43, 1, '100010000055', '100010000055', 940.70, 1.41, 'A', '2019-11-07 09:05:28', NULL),
(44, 1, '100010000086', '100010000086', 202250.50, 303.38, 'A', '2019-11-12 09:37:14', NULL),
(45, 1, '100010000014', '01BAN001', 99512.80, 149.27, 'A', '2019-11-20 11:30:45', NULL),
(46, 1, '100010000047', '01BAN001', 52292.80, 78.44, 'A', '2019-12-03 11:10:25', NULL),
(47, 1, '100010000014', '01BAN001', 99876.00, 149.81, 'A', '2019-12-10 08:37:02', NULL),
(48, 1, '100010000055', '100010000055', 951.20, 1.43, 'A', '2019-12-10 08:37:53', NULL),
(49, 1, '300010000061', '300010000061', 951.20, 1.43, 'A', '2019-12-10 08:38:43', NULL),
(50, 1, '100010000118', '100010000118', 9512.00, 14.27, 'A', '2019-12-10 08:43:22', NULL),
(51, 1, '100010000118', '100010000118', 9288.00, 13.93, 'A', '2019-12-30 17:13:32', NULL),
(52, 1, '100010000055', '100010000055', 943.60, 1.42, 'A', '2020-01-09 16:12:18', NULL),
(53, 1, '300010000061', '300010000061', 943.60, 1.42, 'A', '2020-01-09 16:14:16', NULL),
(54, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:31:39', NULL),
(55, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:32:11', NULL),
(56, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:33:14', NULL),
(57, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:34:33', NULL),
(58, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:37:00', NULL),
(59, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:37:19', NULL),
(60, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:40:39', NULL),
(61, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:40:53', NULL),
(62, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:41:00', NULL),
(63, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:43:05', NULL),
(64, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:43:59', NULL),
(65, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:44:03', NULL),
(66, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:44:52', NULL),
(67, 1, '100020000036', '01BAN001', 9092.00, 13.64, 'A', '2020-01-16 10:53:12', NULL),
(68, 1, '100010000118', '100010000118', 9153.00, 13.73, 'A', '2020-01-26 16:59:22', NULL),
(69, 1, '100010000055', '100010000055', 958.00, 1.44, 'A', '2020-02-11 11:00:39', NULL),
(70, 1, '300010000061', '300010000061', 958.00, 1.44, 'A', '2020-02-11 11:01:13', NULL),
(71, 1, '100010000118', '100010000118', 9570.00, 14.36, 'A', '2020-02-13 10:49:40', NULL),
(72, 1, '100010000118', '100010000118', 9695.00, 14.54, 'A', '2020-03-05 11:12:24', NULL),
(73, 1, '100010000055', '100010000055', 969.50, 1.45, 'A', '2020-03-05 11:16:33', NULL),
(74, 1, '300010000061', '300010000061', 969.50, 1.45, 'A', '2020-03-05 11:19:26', NULL),
(75, 1, '100010000109', '01BAN001', 193452.00, 290.18, 'A', '2020-03-23 07:44:04', NULL),
(76, 1, '100010000112', '01BAN001', 46060.00, 69.09, 'A', '2020-03-23 07:46:58', NULL),
(77, 1, '100010000116', '01BAN001', 46981.20, 70.47, 'A', '2020-03-23 07:53:44', NULL),
(78, 1, '100010000089', '01BAN001', 64484.00, 96.73, 'A', '2020-03-23 08:16:58', NULL),
(79, 1, '100010000003', '01BAN001', 364795.20, 547.19, 'A', '2020-05-11 07:17:04', NULL),
(80, 1, '100010000086', '01BAN001', 340844.00, 511.27, 'A', '2020-05-11 07:18:11', NULL),
(81, 1, '100010000111', '01BAN001', 153748.00, 230.62, 'A', '2020-05-11 11:39:46', NULL),
(82, 1, '100010000022', '01BAN001', 318348.80, 477.52, 'A', '2020-06-03 10:34:13', NULL),
(83, 1, '100010000107', '01BAN001', 361760.00, 542.64, 'A', '2020-06-03 10:35:38', NULL),
(84, 1, '100010000065', '01BAN001', 399199.50, 598.80, 'A', '2020-06-16 10:27:19', NULL),
(85, 1, '100010000044', '100010000044', 185020.00, 277.53, 'A', '2020-06-25 06:08:57', NULL),
(86, 1, '100010000106', '100010000106', 185020.00, 277.53, 'A', '2020-06-28 05:38:33', NULL),
(87, 1, '100010000076', '100010000076', 203522.00, 305.28, 'A', '2020-06-28 07:11:48', NULL),
(88, 1, '100010000097', '100010000097', 277530.00, 416.30, 'A', '2020-06-28 07:12:24', NULL),
(89, 1, '100010000022', '100010000022', 351538.00, 527.31, 'A', '2020-06-30 05:44:55', NULL),
(90, 1, '100010000020', '01BAN001', 5551.20, 8.33, 'A', '2020-06-30 05:45:29', NULL),
(91, 1, '100010000120', '100010000120', 111024.00, 166.54, 'A', '2020-06-30 05:47:27', NULL),
(92, 1, '100010000055', '100010000055', 1850.40, 2.78, 'A', '2020-06-30 05:49:34', NULL),
(93, 1, '300010000061', '300010000061', 925.20, 1.39, 'A', '2020-06-30 05:52:25', NULL),
(94, 1, '100010000020', '01BAN001', 925.20, 1.39, 'A', '2020-06-30 05:52:49', NULL),
(95, 1, '100010000106', '100010000106', 182580.00, 273.87, 'A', '2020-07-26 04:10:27', NULL),
(96, 1, '100010000022', '100010000022', 347662.00, 521.49, 'A', '2020-07-26 04:14:28', NULL),
(97, 1, '100010000055', '100010000055', 1869.00, 2.80, 'A', '2020-07-30 01:01:07', NULL),
(98, 1, '300010000061', '300010000061', 1869.00, 2.80, 'A', '2020-07-30 01:01:28', NULL),
(99, 1, '100010000118', '100010000118', 9345.00, 14.02, 'A', '2020-07-30 01:03:18', NULL),
(100, 1, '100010000115', '01BAN001', 3738.00, 5.61, 'A', '2020-08-06 06:44:48', NULL),
(101, 1, '100010000002', '01BAN001', 385720.00, 578.58, 'A', '2020-08-17 04:21:50', NULL),
(102, 1, '100010000055', '100010000055', 1996.60, 2.99, 'A', '2020-09-03 10:28:07', NULL),
(103, 1, '300010000061', '300010000061', 998.30, 1.50, 'A', '2020-09-03 10:29:18', NULL),
(104, 1, '100010000118', '100010000118', 4991.50, 7.49, 'A', '2020-09-03 10:29:50', NULL),
(105, 1, '100010000002', '01BAN001', 499150.00, 748.73, 'A', '2020-09-03 10:30:27', NULL),
(106, 1, '200010000011', '01BAN001', 1199956.60, 1799.93, 'A', '2020-09-03 10:31:24', NULL),
(107, 1, '100010000065', '01BAN001', 442177.50, 663.27, 'A', '2020-09-07 11:41:14', NULL),
(108, 1, '100010000055', '100010000055', 1036.50, 1.55, 'A', '2020-09-09 10:53:39', NULL),
(109, 1, '100010000121', '100010000121', 29949.00, 44.92, 'A', '2020-09-09 10:54:12', NULL),
(110, 1, '100010000121', '100010000121', 99830.00, 149.75, 'A', '2020-09-09 10:54:43', NULL),
(111, 1, '300010000061', '300010000061', 1036.50, 1.55, 'A', '2020-09-09 10:55:07', NULL),
(112, 1, '100010000112', '100010000112', 60117.00, 90.18, 'A', '2020-09-14 06:54:38', NULL),
(113, 1, '100010000089', '01BAN001', 64876.80, 97.32, 'A', '2020-09-23 10:37:47', NULL),
(114, 1, '100010000055', '100010000055', 2115.80, 3.17, 'A', '2020-09-23 10:38:41', NULL),
(115, 1, '300010000061', '300010000061', 2115.80, 3.17, 'A', '2020-09-23 10:39:49', NULL),
(116, 1, '100010000118', '100010000118', 5289.50, 7.93, 'A', '2020-09-23 10:40:30', NULL),
(117, 1, '100010000120', '100010000120', 125148.00, 187.72, 'A', '2020-09-23 10:51:56', NULL),
(118, 1, '100010000097', '100010000097', 567337.60, 851.01, 'A', '2020-09-27 11:21:50', NULL),
(119, 1, '100010000114', '100010000114', 187722.00, 281.58, 'A', '2020-09-27 11:22:39', NULL),
(120, 1, '100010000121', '100010000121', 199660.00, 299.49, 'A', '2020-09-29 15:10:02', NULL),
(121, 1, '200010000016', '01BAN001', 2666250.00, 3999.38, 'A', '2020-10-04 11:24:13', NULL),
(122, 1, '200010000019', '200010000019', 2666250.00, 3999.38, 'A', '2020-10-04 11:24:39', NULL),
(123, 1, '200020000004', '01BAN001', 5000638.80, 7500.96, 'A', '2020-10-07 06:09:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currency_type`
--

CREATE TABLE `currency_type` (
  `CURRENCY_TYPE_ID` bigint(20) NOT NULL,
  `COUNTRY_ID` int(11) NOT NULL,
  `CURRENCY_SYMBOL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CURRENCY` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SHORTFORM` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_type`
--

INSERT INTO `currency_type` (`CURRENCY_TYPE_ID`, `COUNTRY_ID`, `CURRENCY_SYMBOL`, `CURRENCY`, `SHORTFORM`) VALUES
(1, 9, 'Dh', 'Dirham', 'AED'),
(2, 10, 'Rs', 'Rupees', 'PKR'),
(3, 6, 'Rs', 'Rupies', 'INR'),
(4, 2, '$', 'US Dollar', 'USD'),
(5, 3, '€', 'Euro', 'EUR'),
(6, 1, 'Tk', 'Taka', 'BDT'),
(7, 7, 'Sd', 'Rial', 'SAR'),
(8, 8, 'RM', 'Ringgits', 'MYR'),
(9, 4, 'Php', 'Pesos', 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `custodian`
--

CREATE TABLE `custodian` (
  `CUSTODIAN_ID` bigint(20) UNSIGNED NOT NULL,
  `CUSTODIAN_COMPANY_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CUSTODIAN_CONTACT_PERSON` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CUST_CONTACT_PERSON_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CUSTODIAN_CONTACT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CUSTODIAN_CONTACT_PHONE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CUSTODIAN_CONTACT_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CUSTODIAN_EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custodian`
--

INSERT INTO `custodian` (`CUSTODIAN_ID`, `CUSTODIAN_COMPANY_NAME`, `CUSTODIAN_CONTACT_PERSON`, `CUST_CONTACT_PERSON_MOBILE`, `CUSTODIAN_CONTACT_ADDRESS`, `CUSTODIAN_CONTACT_PHONE`, `CUSTODIAN_CONTACT_MOBILE`, `CUSTODIAN_EMAIL`, `created_at`, `updated_at`) VALUES
(1, 'BRAC Bank Limited', 'Fahim Ishtiaque Hossain', '01713090190', 'Anik Tower', '9884292', '01713090190', 'mehedi@capmadvisorybd.com', '2019-04-10 10:32:55', '2020-01-26 12:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `custodianfee_rule`
--

CREATE TABLE `custodianfee_rule` (
  `CUSTODIANFEE_RULE_ID` bigint(20) UNSIGNED NOT NULL,
  `SPONSOR_ID` int(11) NOT NULL,
  `TRANSECTION_FEE` double(7,4) NOT NULL,
  `MAXLIMIT` double(7,4) NOT NULL,
  `ANNUALFEERATE` double(7,4) NOT NULL,
  `PAYMENT_TERM_FLAG` int(11) NOT NULL COMMENT '1 - Monthly , 2 - Quarterly , 3 - Half Yearly & 4 - Annualy',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custodianfee_rule`
--

INSERT INTO `custodianfee_rule` (`CUSTODIANFEE_RULE_ID`, `SPONSOR_ID`, `TRANSECTION_FEE`, `MAXLIMIT`, `ANNUALFEERATE`, `PAYMENT_TERM_FLAG`, `created_at`, `updated_at`) VALUES
(1, 1, 0.0500, 2.0000, 0.0700, 3, '2019-04-10 10:41:54', '2020-01-26 16:03:15'),
(2, 2, 0.0200, 3.0000, 0.0500, 1, '2019-05-07 05:28:45', '2019-05-07 05:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DISTRICT_ID` bigint(20) NOT NULL,
  `DISTRICT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `REMARKS` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DISTRICT_ID`, `DISTRICT`, `REMARKS`, `created_at`, `updated_at`) VALUES
(1, 'DINAJPUR', NULL, '2019-07-23 10:27:15', '2020-01-26 14:43:05'),
(2, 'THAKURGAON', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(3, 'PANCHAGAR', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(4, 'NILPHAMARI', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(5, 'RANGPUR', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(6, 'KURIGRAM', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(7, 'GAIBANDHA', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(8, 'LALMONIRHAT', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(9, 'BOGRA', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(10, 'JOYPURHAT', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(11, 'NAOGAON', NULL, '2019-07-23 10:27:15', '2019-07-23 10:27:15'),
(12, 'Nawabganj', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(13, 'RAJSHAHI', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(14, 'Natore', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(15, 'PABNA', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(16, 'SIRAJGONJ', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(17, 'KUSHTIA', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(18, 'MEHERPUR', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(19, 'Chuadanga', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(20, 'JHENAIDAH', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(21, 'MAGURA', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(22, 'NARAIL', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(23, 'Jessore', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(24, 'KHULNA', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(25, 'BAGERHAT', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(26, 'SHATKHIRA', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(27, 'BARGUNA', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(28, 'PATUAKHALI', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(29, 'BARISAL', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(30, 'JHALAKATI', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(31, 'BHOLA', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(32, 'PEROJPUR', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(33, 'GOPALGANJ', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(34, 'MADARIPUR', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(35, 'SHARIATPUR', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(36, 'FARIDPUR', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(37, 'RAJBARI', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(38, 'DHAKA', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(39, 'GAZIPUR', NULL, '2019-07-23 10:27:16', '2019-07-23 10:27:16'),
(40, 'MUNSHIGANJ', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(41, 'NARAYANGONJ', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(42, 'NARSHINDI', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(43, 'MANIKGONJ', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(44, 'TANGAIL', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(45, 'JAMALPUR', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(46, 'SHERPUR', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(47, 'MYMENSHING', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(48, 'KISHOREGANJ', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(49, 'NETROKONA', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(50, 'SYLHET', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(51, 'Hobigonj', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(52, 'MOULAVI', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(53, 'SUNAMGANJ', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(54, 'BRAHMANBARIA', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(55, 'Comilla', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(56, 'CHANDPUR', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(57, 'FENI', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(58, 'NOAKHALI', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(59, 'LAKSHIMIPUR', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(60, 'CHITTAGONG', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(61, 'Cox', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(62, 'RANGAMATI', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(63, 'KHAGRACHARI', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17'),
(64, 'Bandarban', NULL, '2019-07-23 10:27:17', '2019-07-23 10:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `dividend_calculation`
--

CREATE TABLE `dividend_calculation` (
  `DVC_ID` bigint(20) UNSIGNED NOT NULL,
  `FUND_ID` int(11) NOT NULL,
  `REGISTRATION_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INVESTOR_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INVESTOR_EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BANK_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AC_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AC_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROUTING` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BRANCH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HOLDING_UNIT` int(11) NOT NULL,
  `DIV_TYPE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FUND_VALUE` double(14,2) NOT NULL,
  `DIVIDEND_AMOUNT` double(14,2) NOT NULL,
  `NET_DIVIDEND` double(14,2) NOT NULL,
  `DED_INC_TAX` double(14,2) NOT NULL DEFAULT '0.00',
  `ENTI_CIP` int(11) NOT NULL DEFAULT '0',
  `PAY_FRACTIONAL` double(14,2) NOT NULL DEFAULT '0.00',
  `PERCENTAGE` double(14,2) NOT NULL DEFAULT '0.00',
  `POR_CAT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dividend_calculation`
--

INSERT INTO `dividend_calculation` (`DVC_ID`, `FUND_ID`, `REGISTRATION_NO`, `INVESTOR_NAME`, `INVESTOR_EMAIL`, `BANK_NAME`, `AC_NAME`, `AC_NO`, `ROUTING`, `BRANCH`, `HOLDING_UNIT`, `DIV_TYPE`, `FUND_VALUE`, `DIVIDEND_AMOUNT`, `NET_DIVIDEND`, `DED_INC_TAX`, `ENTI_CIP`, `PAY_FRACTIONAL`, `PERCENTAGE`, `POR_CAT`, `created_at`, `updated_at`) VALUES
(635, 1, '100010000001', 'NASIR UDDIN AHMED', 'titonasir2895@yahoo.com', 'TRUST BANK LIMITED', 'NASIR UDDIN AHMED', '7002-0311041908', '240275358', 'Principal, Dhaka Cantt.', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(636, 1, '100010000002', 'SM MAHMUD HUSSAIN', 'ceo@capmbd.com', 'TRUST BANK LIMITED', 'SM MAHMUD HUSSAIN', '00160316000012', '240261812', 'GULSHAN', 21370, 'CIP', 2137000.00, 320550.00, 320475.00, 75.00, 3460, 500.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(637, 1, '100010000003', 'MD BAZLUR RASHID', 'bazlur@capmbd.com', 'SOCIAL ISLAMIC BANK LIMITED', 'MD BAZLUR RASHID', '0271340005093', '195260434', 'BANANI', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(638, 1, '100010000004', 'SANJAY KUMAR DATTA', 'skdattabd@yahoo.com', 'BASIC BANK LTD.', 'SANJAY KUMAR DATTA', '0214-01-0010350', '055271789', 'MAIN', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(639, 1, '100010000005', 'Md. Shohel Molla', 'shohel20001@gmail.com', 'SOCIAL ISLAMIC BANK LIMITED', 'Md. Shohel Molla', '027-1340011922', '195260434', 'Banani', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(640, 1, '100010000006', 'Lutfunnesa', 'moutushi007@yahoo.com', 'The City Bank', 'Moutushi Afrin', '2101569774001', '225261729', 'gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(641, 1, '100010000007', 'Md. Nahidul Islam Prodhan', 'nahid250@gmail.com', 'Dutch Bangla Bank Limited', 'Md. Nahidul Islam Prodhan', '110.101.58069', '090261183', 'Dhanmondi', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(642, 1, '100010000009', 'Dr. Sheikh Forhad', 'drskforhad@gmail.com', 'Brac Bank Limited', 'Dr. Sheikh Forhad', '4301100493178001', '060671187', 'Narayanganj', 110, 'CIP', 11000.00, 1650.00, 1650.00, 0.00, 10, 725.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(643, 1, '100010000013', 'Khalil Bin Wahid', 'kbwahid@bol-online.com', 'Trust Bank', 'Khalil Bin Wahid', '7022-0212000029', '240262958', 'Millennium Corporate Branch', 330, 'CIP', 33000.00, 4950.00, 4950.00, 0.00, 50, 325.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(644, 1, '100010000014', 'Syed Golam Wadud', 'sgwadud@gmail.com', 'Trust Bank Limited', 'Syed Golam Wadud', '0002-0210041755', '240275358', 'Principal Branch', 6700, 'CIP', 670000.00, 100500.00, 100410.00, 90.00, 1080, 600.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(645, 1, '100010000015', 'A.K.M Yahea Chowdhury', 'emee_emrana@yahoo.com', 'AB Bank Limited', 'A.K.M Yahea Chowdhury', '4006-295647-300', '020263498', 'New Elephant Road', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(646, 1, '100010000016', 'Sufi Md. Zakaria', 'investor.unitfund@gmail.com', 'AB Bank Limited', 'Sufi Md. Zakaria', '4010-063066-300', '020275110', 'N.S Road', 1410, 'CIP', 141000.00, 21150.00, 21150.00, 0.00, 220, 800.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(647, 1, '100010000019', 'Md. Shahadur Zaman', 'share.shahed@gmail.com', 'Bank Asia Limited', 'Md. Shahadur Zaman', '04934007003', '070275207', 'Paltan Branch', 110, 'CIP', 11000.00, 1650.00, 1650.00, 0.00, 10, 725.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(648, 1, '100010000020', 'Gazi Afshana Banu', 'afshana.yousuf@gmail.com', 'Bank Asia', 'Gazi Afshana Banu', '00734012261', '070276130', 'Scotia', 70, 'Cash', 7000.00, 1050.00, 1050.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(649, 1, '100010000022', 'Chowdhury Suvasish Paul Bibak', 'rhcebibak@yahoo.com', 'Prime Bank', 'Chowdhury Suvasish Paul Bibak', '18821030010691', '170264121', 'Savar branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(650, 1, '100010000023', 'Sharif Anisur Rahman', 'sharifrahman2011@gmail.com', 'Prime Bank Limited', 'Sharif Anisur Rahman', '10477360022935', '170274245', 'Motijheel Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(651, 1, '100010000024', 'Major Sakir Ahmed (Retd)', 'sakir2936@yahoo.com', 'Trust Bank Limited', 'Major Sakir Ahmed (Retd)', '0040-0210001659', '240471549', 'Khulna Branch', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(652, 1, '100010000026', 'Muraheb Malik Chowdhury', 'muraheb@gmail.com', 'The City Bank', 'Muraheb Malik', '2101007149001', '225262531', 'Kawran Bazar', 30, 'Cash', 3000.00, 450.00, 450.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(653, 1, '100010000027', 'MD.ABDUL QUDDUS', 'abdul_quddus606@hotmail.com', 'DHAKA BANK LTD', 'MD.ABDUL QUDDUS', '153.200.1422', '85914032', 'UPOSHAHAR ,SYLHET', 390, 'CIP', 39000.00, 5850.00, 5850.00, 0.00, 60, 300.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(654, 1, '100010000028', 'Muhammad Alamgir', 'alamgir@bsgroupnet.com', 'Prime Bank Ltd.', 'Muhammad Alamgir', '13221070003447', '170260433', 'Banani', 5800, 'Cash', 580000.00, 87000.00, 77700.00, 9300.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(655, 1, '100010000029', 'Taslima Ferdous', 'drtaslima@squarehospital.com', 'Mutual Trust Bank Ltd.', 'Taslima Ferdous', '160310019399', '145260589', 'Bashundhara City', 5800, 'Cash', 580000.00, 87000.00, 77700.00, 9300.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(656, 1, '100010000032', 'Parvez Hassan', 'parvez@beximco.net', 'Trust Bank Limited', 'Parvez Hassan', '0002-0210013562', '240275358', 'Principal Br.', 100, 'Cash', 10000.00, 1500.00, 1500.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(657, 1, '100010000033', 'Md. Sahariar Khan', 'lincoln9mm@gmail.com', 'Standard chartered', 'Mohommed Sahariar Khan', '18-2504871-01', '215274247', 'MOTIJHEEL', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(658, 1, '100010000034', 'Shojib Ahmed', 'shojib.nag@gmail.com', 'Trust Bank Limited', 'Shojib Ahmed', '0016-0316001351', '240261812', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(659, 1, '100010000038', 'Md. Nafisur Rahman', 'nafisur99@yahoo.com', 'IFIC Bank Limited', 'Md. Nafisur Rahman', '1006453699035', '120261187', 'Dhanmondi', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(660, 1, '100010000039', 'Mohammed Nasir Uddin Chowdhury', 'nasir.afra@gmail.com', 'Standard Chartered', 'Mohammed Nasir Uddin Chowdhury', '01142045301', '215274247', 'MOTIJHEEL', 50, 'Cash', 5000.00, 750.00, 750.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(661, 1, '100010000040', 'Anthony D Costa', 'adcosta82@gmail.com', 'Trust Bank Limited', 'Anthony D Costa', '0017-0310004359', '240271936', 'Dilkusha Corp. Branch', 200, 'CIP', 20000.00, 3000.00, 3000.00, 0.00, 30, 225.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(662, 1, '100010000043', 'Tasnim Binte Aziz', 'uma_tasnim@yahoo.com', 'HSBC Bank Limited', 'Tasnim Binte Aziz', '003001526011', '115261721', 'Baridhara', 100, 'Cash', 10000.00, 1500.00, 1500.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(663, 1, '100010000044', 'S M Farhad', 'farhadsigs@yahoo.com', 'Trust Bank Ltd', 'Brig Gen S M Farhad (Retd) & Nurjahan Akther', '0002-0210420916', '240275358', 'Principal Br', 33000, 'Cash', 3300000.00, 495000.00, 424500.00, 70500.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(664, 1, '100010000045', 'Siraj Uddin Ahmed', 'ltc_sirajahmed2005@yahoo.com', 'Trust Bank Ltd.', 'LT COL SIRAJ UDDDIN AHMED (RETD), PSC, BIR', '0002 0318000774', '240275358', 'Dhaka Cantt', 3000, 'Cash', 300000.00, 45000.00, 42000.00, 3000.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(665, 1, '100010000046', 'Lt. Col. Syed Zakir Uddin Ahmed', 'zakirahmed13@yahoo.com', 'Trust Bank Limited', 'Lt. Col. Syed Zakir Uddin Ahmed', '00020210002216', '240275358', 'Principal', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(666, 1, '100010000047', 'Md Shameem Alam Bakhshi', 'bakhshi757@yahoo.com', 'Trust Bank Ltd.', 'Md Shameem Alam Bakhshi', '7002-0311040605', '240275358', 'Principal Br', 500, 'CIP', 50000.00, 7500.00, 7500.00, 0.00, 80, 100.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(667, 1, '100010000049', 'Chowdhury Sabbir Hasan', 'sabbir@capmbd.com', 'UCBL', 'Chowdhury Sabbir Hasan', '007212100030851', '245272327', 'Foreign Exchange Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(668, 1, '100010000051', 'Arifur Rahman', 'mrimmoy1@gmail.com', 'HSBC', 'Arifur Rahman', '001030600001', '115261121', 'DHAKA OFFICE(112)', 10000, 'Cash', 1000000.00, 150000.00, 131250.00, 18750.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(669, 1, '100010000052', 'Sumit Paul', 'sumitpaul131@gmail.com', 'Midland Bank Ltd', 'Sumit Paul', '0011-1040000897', '285261727', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(670, 1, '100010000054', 'Md. Anisur Rahman', 'anisrhmn.aurko@gmail.com', 'Brac Bank', 'Md. Anisur Rahman', '1507202513366001', '060260435', 'Banani', 10, 'Cash', 1000.00, 150.00, 150.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(671, 1, '100010000055', 'Md. Maruful Hoque Chowdhury', 'mhcmaruf@gmail.com', 'Standard Chartered Bank Limited', 'Md. Maruful Hoque Chowdhury', '181167883-01', '215261726', 'Gulshan', 1020, 'Cash', 102000.00, 15300.00, 15300.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(672, 1, '100010000056', 'Syed Fazlul Karim', 'fazlul_karim@yahoo.com', 'Dutch Bangla Bank Ltd.', 'Syed Fazlul Karim', '114.101.474', '090263194', 'Mohakhali', 10, 'CIP', 1000.00, 150.00, 150.00, 0.00, 0, 150.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(673, 1, '100010000057', 'Sabina Yesmin', 'shimu.mahmood@yahoo.com', 'Standard Chartered Bank', 'Sabina Yesmin', '18-1166111-01', '215261726', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(674, 1, '100010000058', 'MD KAHIR MAHMOOD', 'kahir2010@gmail.com', 'Standard Chartered Bank', 'MD KAHIR MAHMOOD', '18-1110805-01', '215261726', 'Gulshan', 500, 'Cash', 50000.00, 7500.00, 7500.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(675, 1, '100010000060', 'Md Sayeed-Bin-Islam', 'sayeedbinislam123@gmail.com', 'SBAC Bank Limited', 'MD. SAYEED-BIN-ISLAM', '0026121000068', '270260438', 'Banani Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(676, 1, '100010000062', 'MUSTAFIZUR RAHMAN', 'mustafiz0062@gmail.com', 'Jamuna Bank', 'Mustafizur Rahman', '030-0310022323', '130260431', 'Banani Branch', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(677, 1, '100010000063', 'MOHAMMAD KHALED HOSSAIN CHOUDHURY', 'khaled@cvcflbd.com', 'Bank Asia Limited', 'MOHAMMAD KHALED HOSSAIN CHOUDHURY', '00834011308', '070262928', 'Mcb Dilkusha Branch', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(678, 1, '100010000064', 'YAZDAN YUSUF CHOWDHURY', 'yazdan.chowdhury@gmail.com', 'Trust Bank Limited', 'YAZDAN YUSUF CHOWDHURY', '0016-0130000123', '240261812', 'Gulshan Corp.', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(679, 1, '100010000065', 'Muhammad Faruque Hussain', 'faruque2345@yahoo.com', 'Trust Bank Ltd', 'Muhammad Faruque Hussain', '02-0310236801', '240275358', 'Corporate Br, Dhaka Cantt.', 4350, 'Cash', 435000.00, 65250.00, 59212.50, 6037.50, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(680, 1, '100010000066', 'Md Hakimuzzaman', 'hzmn1971@gmail.com', 'Trust Bank Ltd', 'Md Hakimuzzaman', '0002-0210101207', '240275358', 'Principal', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(681, 1, '100010000067', 'Md. Akram Hossain Jubaraj', 'ahraj007@yahoo.com', 'SCB', 'Md. Akram Hossain Jubaraj', '18-1326747-01', '215261726', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(682, 1, '100010000069', 'Khandoker Anisur Rahman', 'anis4505@yahoo.com', 'Trust Bank Ltd', 'Khandoker Anisur Rahman', '0002-0210024069', '240275358', 'Principle Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(683, 1, '100010000070', 'FERDOUS HASAN SALIM', 'fhs4410@yahoo.com', 'TRUST BANK', 'FERDOUS HASAN SALIM', '0002-0210018174', '240264185', 'DHAKA CANTT', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(684, 1, '100010000071', 'Md. Yasin Chowdhury', 'yasin.chowdhury@berichbd.com', 'First Securities Islami Bank Limited', 'Md. Yasin Chowdhury', '0012200000064', '105153160', 'Halishahar, chittagong', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(685, 1, '100010000072', 'Mohammad Habibur Rahman', 'habibur.rahman@berichbd.com', 'Eastern Bank Limited', 'Mohammad Habibur Rahman', '201260034590', '95154961', 'Mehedibagh', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(686, 1, '100010000073', 'Mohammad Shafiul Islam', 'shafiul.islam@berichbd.com', 'Eastern Bank Limited', 'Mohammad Shafiul Islam', '0201260034954', '95154961', 'Mehedibagh', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(687, 1, '100010000074', 'Muhammad Zaberul Islam', 'zaberul.islam@berichbd.com', 'Eastern Bank Limited', 'Muhammad Zaberul Islam', '0201260034604', '95154961', 'Mehedibagh', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(688, 1, '100010000075', 'Abdullah Al Mamun', 'abdullah.mamun@berichbd.com', 'Dutch Bangla Bank Ltd.', 'Abdullah Al Mamun', '1291010002250', '90151480', 'CDA Avenue', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(689, 1, '100010000076', 'Rashed Ahmed', 'rashedtkz@gmail.com', 'Midland Bank', 'Rashed Ahmed', '0011-1010002414', '285261727', 'Gulshan', 5200, 'Cash', 520000.00, 78000.00, 70050.00, 7950.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(690, 1, '100010000077', 'ADNAN YUSUF CHOUDHURY', 'choudhuryadnanchest@gmail.com', 'Trust Bank', 'ADNAN YUSUF CHOUDHURY', '0016-0310024605', '240261812', 'Gulshan Corporate Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(691, 1, '100010000078', 'FUAD AHMED KHAN', 'fuadahmedamc@yahoo.com', 'TRUST BANK LIMITED', 'FUAD AHMED KHAN', '0074-0130000052', '240263199', 'MOHAKHALI', 10, 'Cash', 1000.00, 150.00, 150.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(692, 1, '100010000079', 'AHSAN MAHMOOD', 'amtrial@gmail.com', 'TRUST BANK LIMITED', 'AHSAN MAHMOOD', '0003-0310036651', '240276199', 'SKB', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(693, 1, '100010000080', 'MD. IFTAKHER HOSSAIN', 'ifti.tbl@gmail.com', 'TRUST BANK LIMITED', 'MD. IFTAKHER HOSSAIN', '0003-0210010724', '240276199', 'SKB', 50, 'Cash', 5000.00, 750.00, 750.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(694, 1, '100010000081', 'FARIDA AKTER', 'farida.akter.1963@gmail.com', 'TRUST BANK LIMITED', 'FARIDA AKTER', '0061-0210001837', '240261812', 'GULSHAN CORPORATE', 20, 'Cash', 2000.00, 300.00, 300.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(695, 1, '100010000082', 'Istiak Mahmud', 'istiak.mahmud@gmail.com', 'Standard Chartered', 'Istiak Mahmud', '18-1217073-01', '215261726', 'Gulshan Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(696, 1, '100010000083', 'MD.NIZAM UDDIN BHUIYAN', 'anik_bhuiyan@hotmail.com', 'Pubali Bnak Limited', 'MD.NIZAM UDDIN BHUIYAN', '3677101043891', '175263198', 'Mohakhali Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(697, 1, '100010000086', 'Angkan Biswas', 'angkan.ca@gmail.com', 'Trust Bank Limited', 'Angkan Biswas', '0016-0316003395', '240261812', 'Gulshan Corporate', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(698, 1, '100010000087', 'KAYES MAHMUD', 'kayes058@yahoo.com', 'UNION BANK LIMITED', 'KAYES MAHMUD', '291130000017', '265260430', 'BANANI', 1500, 'Cash', 150000.00, 22500.00, 22500.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(699, 1, '100010000088', 'MD. MEZBAHUR RAHMAN', 'masududdin02@gmail.com', 'STANDARD CHARTERED BANK', 'MD. MEZBAHUR RAHMAN', '18112045401', '215262538', 'KARWAN BAZAR', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(700, 1, '100010000089', 'FAHMIDA SULTANA SHOVA', 'fahamshova@gmail.com', 'TRUST BANK', 'FAHMIDA SULTANA SHOVA', '0056-0316006189', '240260439', 'Banani', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(701, 1, '100010000091', 'Maria Binte Muzib', 'maria.muzib@gmail.com', 'Standard Chartered Bank Limited', 'Maria Binte Muzib', '18122375601', '2152612726', 'Gulshan Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(702, 1, '100010000093', 'SHEIKH MAHMUDUL HASSAN', 'hassanhydrographer@yahoo.com', 'Trust Bank Limited', 'CDR SHEIKH MAHMUDUL HASSAN', '\"0018-0210003842\"', '240263799', 'Radission Water Garden Hotel', 1700, 'Cash', 170000.00, 25500.00, 25425.00, 75.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(703, 1, '100010000094', 'TANZINA ZEREN', 'tanzina.zerin@gmail.com', 'Trust Bank Limited', 'TANZINA ZEREN', '0056-0310004638', '240260439', 'Banani', 12500, 'CIP', 1250000.00, 187500.00, 187402.50, 97.50, 2020, 650.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(704, 1, '100010000095', 'Mohammad Golam Kibria', 'gkibria@link3.net', 'Standard Chartered', 'Mohammad Golam Kibria', '181324081-01', '215261726', 'Gulshan', 60, 'CIP', 6000.00, 900.00, 900.00, 0.00, 0, 900.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(705, 1, '100010000096', 'Md. Sarwar-E-Rahman', 'emon.sarwar88@gmail.com', 'City Bank Limited', 'Md. Sarwar-E-Rahman', '2101092092001', '225272321', 'Foreign Exchange', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(706, 1, '100010000097', 'Md. Mahbub Alam', 'mahbub.alam@rocketmail.com', 'Mutual Trust Bank Ltd.', 'MD. Mahbub Alam', '0020310118199', '145275358', 'Principal Branch', 5440, 'Cash', 544000.00, 81600.00, 75940.00, 5660.00, 0, 0.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(707, 1, '100010000098', 'Md. Habibur Rahman', 'sumonhr@gmail.com', 'SCB', 'MD Habibur Rahman', '18123744201', '215261726', 'Gulshan Avenue, Gulshan 1', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(708, 1, '100010000099', 'Md. Iftekhar-ul- Islam', 'iftekhar.ul.islam13@gmail.com', 'Dhaka Bank Limited', 'Md.Iftekhar-ul-Islam', '2072000045080', '085262539', 'KARWAN BAZAR', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(709, 1, '100010000100', 'AKM Ziaul Islam', 'akm.ziaul.islam@gmail.com', 'Dutch Bangla Bank Ltd.', 'AKM Ziaul Islam', '107-101-65304', '090262537', 'Karwan Bazar', 3500, 'CIP', 350000.00, 52500.00, 52395.00, 105.00, 560, 700.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(710, 1, '100010000101', 'MD SHAMSUL HAQUE', 'shamsbd2001@yahoo.com', 'TRUST BANK LIMITED', 'MD SHAMSUL HAQUE', '0002-0210016596', '240275358', 'PRINCIPAL BRANCH ', 11250, 'CIP', 1125000.00, 168750.00, 168690.00, 60.00, 1820, 400.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(711, 1, '100010000104', 'MOHAMMAD TAREKUL ISLAM', 'mtarek77@gmail.com', 'Standard Chartered Bank Bangladesh', 'MOHAMMAD TAREKUL ISLAM', '18132408001', '215261726', 'Gulshan', 1000, 'Cash', 100000.00, 15000.00, 15000.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(712, 1, '100010000105', 'Syeda Shamim Ara', 'syeda.shamim@tblbd.com', 'Trust Bank Ltd', 'Syeda Shamim Ara', '0002-0310077804', '240275358', 'Principal Brunch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(713, 1, '100010000106', 'MUHAMMAD SHAIFUL ISLAM', 'mshaiful.islam1@gmail.com', 'City Bank Ltd.', 'MUHAMMAD SHAIFUL ISLAM', '2182564875001', '225260438', 'BANANI BRANCH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(714, 1, '100010000107', 'Sukshana Sarkar', 'rhcebibak@yahoo.com', 'Estern Bank Ltd', 'SUKSHANA SARKER', '1701440184883', '95264093', 'Savar', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(715, 1, '100010000108', 'MD.MAHMUDUL HAQUE KHAN', 'mhaqkhan1967@gmail.com', 'TRUST BANK LIMITED', 'MAJOR MD MAHMUDUL HAQUE KHAN (RETD)', '0018-0318000025', '240263799', 'RWGH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(716, 1, '100010000109', 'Fatema Begum', 'bazlur@capmbd.com', 'krishi bank', 'Fatema Begum', '1101031019572', '035820734', 'RAJBARI', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(717, 1, '100010000110', 'Md. Abdul Momin Saffat', 'saffat@live.com', 'Mutual Trust Bank Ltd.', 'Md. Abdul Momin Saffat', '00070310055841', '145264693', 'Uttara', 850, 'Cash', 85000.00, 12750.00, 12750.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(718, 1, '100010000111', 'MD. NAZRUL ISLAM', 'nabilislambd2017@gmail.com', 'One Bank Ltd', 'MD. NAZRUL ISLAM', '0025095218018', '165261726', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(719, 1, '100010000112', 'MAHFUZA BEGUM', 'fuzibd@gmail.com', 'City Bank', 'Mahfuza Begum', '2222586010001', '225261174', 'Gulshan Women Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(720, 1, '100020000012', 'ASHUTOSH CHOWDHURY', 'ashu.chy@gmail.com', 'TRUST BANK LIMITED', 'ASHUTOSH CHOWDHURY', '0016-0316001664', '240261812', 'GULSHAN CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(721, 1, '100020000021', 'SHAHANARA BEGUM', 'ahmadsajid1989@yahoo.com', 'AL-ARAFAH ISLAMI BANK LIMITED', 'SHAHANARA BEGUM', '0151120363464', '015271390', 'MOTIJHEEL CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(722, 1, '100020000031', 'MOHAMMAD ARIFUL HOQUE MOLLIQ', 'arifmolliq@gmail.com', 'TRUST BANK LIMITED', 'MOHAMMAD ARIFUL HOQUE MOLLIQ', '0016-0316001548', '240261812', 'GULSHAN CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(723, 1, '100020000036', 'ADEL AHMED', 'adelbd65@yahoo.co.uk ', 'TRUST BANK LIMITED', 'ADEL AHMED', '0016-0316001315', '240261812', 'GULSHAN CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(724, 1, '100020000068', 'MUFAKHKHARUL ISLAM', 'mufakhkharul_islam@yahoo.com', 'TRUST BANK LTD.', 'MUFAKHKHARUL ISLAM', '0016-0316001735', '240261812', 'GULSHAN CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(725, 1, '100030000008', 'Debasish Das', 'ddasrana@gmail.com', 'Dutch Bangla Bank Limited', 'Debasish Das', '123.101.66091', '090330227', 'Board Bazar, Gazipur', 20, 'Cash', 2000.00, 300.00, 300.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(726, 1, '100030000011', 'Reaz Uddin Ahmed', 'reazuddinahmed41@gmail.com', 'Bangladesh Development Bank Ltd', 'REAZ UDDIN AHMED', '0650100003934', '47271571', 'Principal', 100, 'Cash', 10000.00, 1500.00, 1500.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(727, 1, '100030000035', 'MD. EHSANUL KABIR', 'nilakash@gmail.com', 'TRUST BANK LTD', 'MD. EHSANUL KABIR', '0002-0210000450', '240275358', 'PRINCIPAL BRANCH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(728, 1, '100030000041', 'Wasef Nowsher', 'wasef.nowsher@gmail.com', 'Trust Bank Limited', 'Wasef Nowsher', '0016-0310011066', '240261812', 'Gulshan Corporate Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(729, 1, '100030000042', 'Itteba Ahammad Khan', 'itteba06@gmail.com', 'Trust Bank Limited', 'Itteba Ahammad Khan', '0016-0210006350', '240261812', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(730, 1, '100030000050', 'MD. SHAHIDUL ISALM', 'shahid1186@yahoo.com', 'TRUST BANK LIMITED', 'MAJOR MD SHAHIDUL ISLAM', '0002-0210055508', '240275358', 'PRINCIPAL BRANCH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(731, 1, '100040000018', 'BANDHU PADO PAUL CHOWDHURY', 'bandhuhbj@yahoo.com', 'DUTCH BANGLA BANK LIMITED', 'BANDHU PADO PAUL CHOWDHURY', '1871010003223', '090360613', 'SYLHET', 20, 'Cash', 2000.00, 300.00, 300.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(732, 1, '100050000037', 'RAFIQ AHMED', 'rafiqmallick@gmail.com', 'BANK ASIA LIMITED', 'RAFIQ AHMED', '0000534016156', '070150135', 'AGRABAD', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(733, 1, '100070000017', 'MD ARIFUL ISLAM', 'ssl.arif.121@gmail.com    ', 'ONE BANk LIMITED', 'MD ARIFUL ISLAM', '0010024931005', '165275354', 'PRINCIPAL BRANCH', 50, 'Cash', 5000.00, 750.00, 750.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(734, 1, '100070000048', 'ABDUL AZIZ', 'abdulaziz0839@gmail.com', 'ONE BANK LIMITD', 'ABDUL AZIZ', '0015026641006', '165275354', 'PRINCIPAL BRANCH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(735, 1, '300010000061', 'MUKTA RAHMAN', 'mukta_jasmin@yahoo.com', 'Standard Chartered Bank Limited', 'MUKTA RAHMAN', '24-125157801', '215261726', 'Gulshan', 1120, 'Cash', 112000.00, 16800.00, 16800.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(736, 1, '300030000030', 'MAJOR TAPAN BIKASH CHAKMA (RETD)', 'chakma2235@yahoo.com', 'TRUST BANK LIMITED', 'MAJOR TAPAN BIKASH CHAKMA (RETD)', '0002-0310262425', '240275358', 'PRINCIPAL BRANCH', 50, 'CIP', 5000.00, 750.00, 750.00, 0.00, 0, 750.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(737, 1, '100010000113', 'TANIPA WADUD', 'tanipawadud@gmail.com', 'TRUST BANK', 'TANIPA WADUD', '0002-0310265548', '240275358', 'Principal Brunch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(738, 1, '100010000114', 'Nurjahan Akther', 'anurjahan76@yahoo.com', 'Trust Bank Ltd', 'Nurjahan Akther', '0041-0310029485', '240262387', 'Kafrul', 1800, 'Cash', 180000.00, 27000.00, 26700.00, 300.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(739, 1, '100010000115', 'Md. Jahidul Islam', 'Zahidul561@gmail.com', 'Trust Bank Limited', 'MD. JAHIDUL ISLAM', '0560316006205', '240260439', 'Banani', 90, 'CIP', 9000.00, 1350.00, 1350.00, 0.00, 10, 425.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(740, 1, '100010000116', 'MONJU ARA BEGUM', 'monjuarabegum001@gmail.com', 'Trust Bank Limited', 'MONJU ARA BEGUM', '0028-0310042298', '240262987', 'Mirpur-11', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(741, 1, '100010000117', 'Hassan Asheq Mahmood', 'hamahmood@outlook.com', 'Al-Arafah Islami Bank Ltd.', 'Hassan Asheq Mahmood', '741120017329', '015263137', 'Mirpur 10', 10, 'Cash', 1000.00, 150.00, 150.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(742, 1, '100010000118', 'S M FAJLUL BARI', 'smfbari@gmail.com', 'BANK ASIA LTD', 'S M FAJLUL BARI', '00734022460', '070276130', 'SCOTIA', 600, 'Cash', 60000.00, 9000.00, 9000.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(743, 1, '100010000120', 'MD. Murshed Alam', 'murshed.alam@team.com.bd', 'City Bank Ltd.', 'MD. MURSHED ALAM', '2182564284001', '225260438', 'Banani', 1200, 'Cash', 120000.00, 18000.00, 18000.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(744, 1, '200010000001', 'CAPM (Capital  Portfolio Management) Company Limited', 'ceo@capmbd.com', 'AB Bank Limited', 'CAPM (Capital  Portfolio Management) Company limited', '4004-774235-000', '20274245', 'Motijheel Corporate', 129500, 'Cash', 12950000.00, 1942500.00, 1554000.00, 388500.00, 0, 0.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(745, 1, '200010000002', 'Lankabangla Finance Limited', 'margub.ahmed@lankabangla.com', 'Dhaka  Bank Limited', 'Lankabangla Finance Limited', '2061500000097', '85260436', 'Banani', 20000, 'Cash', 2000000.00, 300000.00, 240000.00, 60000.00, 0, 0.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(746, 1, '200010000003', 'Trust Bank Limited', 'adcosta@trustbanklimited.com', 'Trust Bank Limited', 'The Trust Bank Ltd. Investment Account', '00220210015833', '240262958', 'Millennium Corporate Branch', 100000, 'Cash', 10000000.00, 1500000.00, 1200000.00, 300000.00, 0, 0.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(747, 1, '200010000005', 'DBH First Mutual Fund', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C DBH First Mutual Fund (Close End)', '01-1053487-08', '215261726', 'Gulshan', 78000, 'Cash', 7800000.00, 1170000.00, 1170000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(748, 1, '200010000006', 'AIBL 1st Islami Mutual Fund', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C AIBL 1st Islami Mutual Fund', '01-9778381-01', '215261726', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(749, 1, '200010000007', 'Green Delta Mutual Fund', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C Green Delta Mutual Fund', '01-9777962-01', '215274247', 'Motijheel', 97000, 'Cash', 9700000.00, 1455000.00, 1455000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(750, 1, '200010000008', 'LR Global Bangladesh Mutual Fund One', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C LR Global Bangladesh Mutual Fund One', '01-9778527-01', '215274247', 'Motijheel', 213500, 'Cash', 21350000.00, 3202500.00, 3202500.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(751, 1, '200010000009', 'MBL 1st Mutual Fund', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C MBL 1st Mutual Fund', '01-9779159-01', '215274247', 'Motijheel', 67000, 'Cash', 6700000.00, 1005000.00, 1005000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(752, 1, '200010000010', 'NCCBL Mutual Fund-1', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C NCCBL Mutual Fund-1', '01-1110537-01', '215261726', 'Gulshan', 72000, 'Cash', 7200000.00, 1080000.00, 1080000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(753, 1, '200010000011', 'CIPMS-Pool', 'ipms@capmbd.com', 'Trust Bank Ltd.', 'CAPM IPM (Clients)', '0016-0320000693', '240261812', 'Gulshan Corporate', 36390, 'CIP', 3639000.00, 545850.00, 545830.00, 20.00, 5900, 100.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(754, 1, '200010000012', 'M.M. Spinning Mills Ltd.', 'badarspinning@gmail.com', 'Dhaka Bank Limited', 'M.M. Spinning Mills Ltd.', '0231100000003201', '085671188', 'Narayanganj', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(755, 1, '200010000013', 'LankaBangla Asset Management Company Limited (Alternative Investment Fund Manager)', 'faisal@lankabangla.com', 'One Bank Limited', 'LankaBangla Asset Management Company Limited (Alternative Investment Fund Manager)', '0183000000657', '165260435', 'Banani', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(756, 1, '200010000014', 'LankaBangla Asset Management Company Limited', 'faisal@lankabangla.com', 'Dhaka Bank Limited', 'LankaBangla Asset Management Company Limited', '0206150000001590', '085260436', 'Banani', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(757, 1, '200010000015', 'M/S Raju Steel Enterprise ', 'sumitpaul131@gmail.com', 'Union Bank Ltd. ', 'M/S Raju Steel Enterprise ', '0291010001173', '265260430', 'Banani', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(758, 1, '200010000016', 'HFAML UNIT FUND', 'info@hfassetmanagement.com', 'IFIC BANK LTD', 'HFAML UNIT FUND', '0170145334041', '120260559', 'BASHUNDHARA', 52000, 'Cash', 5200000.00, 780000.00, 780000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(759, 1, '200010000017', 'UCB Capital Management Limted', 'Sankor.paul@ucb.com.bd', 'UCB', 'UCB Capital Management Limted', '0011301000001346', '245275353', 'Principal', 43400, 'Cash', 4340000.00, 651000.00, 520800.00, 130200.00, 0, 0.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(760, 1, '200010000018', 'LANKABANGLA 1ST BALANCED UNIT FUND', 'noor.alam@lankabangla.com', 'ONE BANK LIMITED', 'LANKABANGLA 1ST BALANCED UNIT FUND', '0183000000464', '165260435', 'BANANI', 56290, 'CIP', 5629000.00, 844350.00, 844350.00, 0.00, 9120, 750.00, 0.00, 'mf', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(761, 1, '200020000004', 'CAPM ADVISORY LIMITED', 'bashar@capmadvisorybd.com', 'TRUST BANK LIMITED', 'CAPM ADVISORY LIMITED (OPERATIONS)', '0016-0320000728', '240261812', 'GULSHAN CORPORATE BR.', 172010, 'Cash', 17201000.00, 2580150.00, 2064120.00, 516030.00, 0, 0.00, 20.00, 'inst', '2020-08-23 05:01:18', '2020-08-23 05:01:18'),
(762, 1, '100010000001', 'NASIR UDDIN AHMED', 'titonasir2895@yahoo.com', 'TRUST BANK LIMITED', 'NASIR UDDIN AHMED', '7002-0311041908', '240275358', 'Principal, Dhaka Cantt.', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(763, 1, '100010000002', 'SM MAHMUD HUSSAIN', 'ceo@capmbd.com', 'TRUST BANK LIMITED', 'SM MAHMUD HUSSAIN', '00160316000012', '240261812', 'GULSHAN', 21370, 'CIP', 2137000.00, 320550.00, 320475.00, 75.00, 3460, 500.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(764, 1, '100010000003', 'MD BAZLUR RASHID', 'bazlur@capmbd.com', 'SOCIAL ISLAMIC BANK LIMITED', 'MD BAZLUR RASHID', '0271340005093', '195260434', 'BANANI', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(765, 1, '100010000004', 'SANJAY KUMAR DATTA', 'skdattabd@yahoo.com', 'BASIC BANK LTD.', 'SANJAY KUMAR DATTA', '0214-01-0010350', '055271789', 'MAIN', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(766, 1, '100010000005', 'Md. Shohel Molla', 'shohel20001@gmail.com', 'SOCIAL ISLAMIC BANK LIMITED', 'Md. Shohel Molla', '027-1340011922', '195260434', 'Banani', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(767, 1, '100010000006', 'Lutfunnesa', 'moutushi007@yahoo.com', 'The City Bank', 'Moutushi Afrin', '2101569774001', '225261729', 'gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(768, 1, '100010000007', 'Md. Nahidul Islam Prodhan', 'nahid250@gmail.com', 'Dutch Bangla Bank Limited', 'Md. Nahidul Islam Prodhan', '110.101.58069', '090261183', 'Dhanmondi', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(769, 1, '100010000009', 'Dr. Sheikh Forhad', 'drskforhad@gmail.com', 'Brac Bank Limited', 'Dr. Sheikh Forhad', '4301100493178001', '060671187', 'Narayanganj', 110, 'CIP', 11000.00, 1650.00, 1650.00, 0.00, 10, 725.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(770, 1, '100010000013', 'Khalil Bin Wahid', 'kbwahid@bol-online.com', 'Trust Bank', 'Khalil Bin Wahid', '7022-0212000029', '240262958', 'Millennium Corporate Branch', 330, 'CIP', 33000.00, 4950.00, 4950.00, 0.00, 50, 325.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(771, 1, '100010000014', 'Syed Golam Wadud', 'sgwadud@gmail.com', 'Trust Bank Limited', 'Syed Golam Wadud', '0002-0210041755', '240275358', 'Principal Branch', 6700, 'CIP', 670000.00, 100500.00, 100410.00, 90.00, 1080, 600.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(772, 1, '100010000015', 'A.K.M Yahea Chowdhury', 'emee_emrana@yahoo.com', 'AB Bank Limited', 'A.K.M Yahea Chowdhury', '4006-295647-300', '020263498', 'New Elephant Road', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(773, 1, '100010000016', 'Sufi Md. Zakaria', 'investor.unitfund@gmail.com', 'AB Bank Limited', 'Sufi Md. Zakaria', '4010-063066-300', '020275110', 'N.S Road', 1410, 'CIP', 141000.00, 21150.00, 21150.00, 0.00, 220, 800.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(774, 1, '100010000019', 'Md. Shahadur Zaman', 'share.shahed@gmail.com', 'Bank Asia Limited', 'Md. Shahadur Zaman', '04934007003', '070275207', 'Paltan Branch', 110, 'CIP', 11000.00, 1650.00, 1650.00, 0.00, 10, 725.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(775, 1, '100010000020', 'Gazi Afshana Banu', 'afshana.yousuf@gmail.com', 'Bank Asia', 'Gazi Afshana Banu', '00734012261', '070276130', 'Scotia', 70, 'Cash', 7000.00, 1050.00, 1050.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(776, 1, '100010000022', 'Chowdhury Suvasish Paul Bibak', 'rhcebibak@yahoo.com', 'Prime Bank', 'Chowdhury Suvasish Paul Bibak', '18821030010691', '170264121', 'Savar branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(777, 1, '100010000023', 'Sharif Anisur Rahman', 'sharifrahman2011@gmail.com', 'Prime Bank Limited', 'Sharif Anisur Rahman', '10477360022935', '170274245', 'Motijheel Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(778, 1, '100010000024', 'Major Sakir Ahmed (Retd)', 'sakir2936@yahoo.com', 'Trust Bank Limited', 'Major Sakir Ahmed (Retd)', '0040-0210001659', '240471549', 'Khulna Branch', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(779, 1, '100010000026', 'Muraheb Malik Chowdhury', 'muraheb@gmail.com', 'The City Bank', 'Muraheb Malik', '2101007149001', '225262531', 'Kawran Bazar', 30, 'Cash', 3000.00, 450.00, 450.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(780, 1, '100010000027', 'MD.ABDUL QUDDUS', 'abdul_quddus606@hotmail.com', 'DHAKA BANK LTD', 'MD.ABDUL QUDDUS', '153.200.1422', '85914032', 'UPOSHAHAR ,SYLHET', 390, 'CIP', 39000.00, 5850.00, 5850.00, 0.00, 60, 300.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(781, 1, '100010000028', 'Muhammad Alamgir', 'alamgir@bsgroupnet.com', 'Prime Bank Ltd.', 'Muhammad Alamgir', '13221070003447', '170260433', 'Banani', 5800, 'Cash', 580000.00, 87000.00, 77700.00, 9300.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(782, 1, '100010000029', 'Taslima Ferdous', 'drtaslima@squarehospital.com', 'Mutual Trust Bank Ltd.', 'Taslima Ferdous', '160310019399', '145260589', 'Bashundhara City', 5800, 'Cash', 580000.00, 87000.00, 77700.00, 9300.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(783, 1, '100010000032', 'Parvez Hassan', 'parvez@beximco.net', 'Trust Bank Limited', 'Parvez Hassan', '0002-0210013562', '240275358', 'Principal Br.', 100, 'Cash', 10000.00, 1500.00, 1500.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(784, 1, '100010000033', 'Md. Sahariar Khan', 'lincoln9mm@gmail.com', 'Standard chartered', 'Mohommed Sahariar Khan', '18-2504871-01', '215274247', 'MOTIJHEEL', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(785, 1, '100010000034', 'Shojib Ahmed', 'shojib.nag@gmail.com', 'Trust Bank Limited', 'Shojib Ahmed', '0016-0316001351', '240261812', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(786, 1, '100010000038', 'Md. Nafisur Rahman', 'nafisur99@yahoo.com', 'IFIC Bank Limited', 'Md. Nafisur Rahman', '1006453699035', '120261187', 'Dhanmondi', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(787, 1, '100010000039', 'Mohammed Nasir Uddin Chowdhury', 'nasir.afra@gmail.com', 'Standard Chartered', 'Mohammed Nasir Uddin Chowdhury', '01142045301', '215274247', 'MOTIJHEEL', 50, 'Cash', 5000.00, 750.00, 750.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(788, 1, '100010000040', 'Anthony D Costa', 'adcosta82@gmail.com', 'Trust Bank Limited', 'Anthony D Costa', '0017-0310004359', '240271936', 'Dilkusha Corp. Branch', 200, 'CIP', 20000.00, 3000.00, 3000.00, 0.00, 30, 225.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(789, 1, '100010000043', 'Tasnim Binte Aziz', 'uma_tasnim@yahoo.com', 'HSBC Bank Limited', 'Tasnim Binte Aziz', '003001526011', '115261721', 'Baridhara', 100, 'Cash', 10000.00, 1500.00, 1500.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(790, 1, '100010000044', 'S M Farhad', 'farhadsigs@yahoo.com', 'Trust Bank Ltd', 'Brig Gen S M Farhad (Retd) & Nurjahan Akther', '0002-0210420916', '240275358', 'Principal Br', 33000, 'Cash', 3300000.00, 495000.00, 424500.00, 70500.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(791, 1, '100010000045', 'Siraj Uddin Ahmed', 'ltc_sirajahmed2005@yahoo.com', 'Trust Bank Ltd.', 'LT COL SIRAJ UDDDIN AHMED (RETD), PSC, BIR', '0002 0318000774', '240275358', 'Dhaka Cantt', 3000, 'Cash', 300000.00, 45000.00, 42000.00, 3000.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(792, 1, '100010000046', 'Lt. Col. Syed Zakir Uddin Ahmed', 'zakirahmed13@yahoo.com', 'Trust Bank Limited', 'Lt. Col. Syed Zakir Uddin Ahmed', '00020210002216', '240275358', 'Principal', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(793, 1, '100010000047', 'Md Shameem Alam Bakhshi', 'bakhshi757@yahoo.com', 'Trust Bank Ltd.', 'Md Shameem Alam Bakhshi', '7002-0311040605', '240275358', 'Principal Br', 500, 'CIP', 50000.00, 7500.00, 7500.00, 0.00, 80, 100.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(794, 1, '100010000049', 'Chowdhury Sabbir Hasan', 'sabbir@capmbd.com', 'UCBL', 'Chowdhury Sabbir Hasan', '007212100030851', '245272327', 'Foreign Exchange Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(795, 1, '100010000051', 'Arifur Rahman', 'mrimmoy1@gmail.com', 'HSBC', 'Arifur Rahman', '001030600001', '115261121', 'DHAKA OFFICE(112)', 10000, 'Cash', 1000000.00, 150000.00, 131250.00, 18750.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(796, 1, '100010000052', 'Sumit Paul', 'sumitpaul131@gmail.com', 'Midland Bank Ltd', 'Sumit Paul', '0011-1040000897', '285261727', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(797, 1, '100010000054', 'Md. Anisur Rahman', 'anisrhmn.aurko@gmail.com', 'Brac Bank', 'Md. Anisur Rahman', '1507202513366001', '060260435', 'Banani', 10, 'Cash', 1000.00, 150.00, 150.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(798, 1, '100010000055', 'Md. Maruful Hoque Chowdhury', 'mhcmaruf@gmail.com', 'Standard Chartered Bank Limited', 'Md. Maruful Hoque Chowdhury', '181167883-01', '215261726', 'Gulshan', 1020, 'Cash', 102000.00, 15300.00, 15300.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(799, 1, '100010000056', 'Syed Fazlul Karim', 'fazlul_karim@yahoo.com', 'Dutch Bangla Bank Ltd.', 'Syed Fazlul Karim', '114.101.474', '090263194', 'Mohakhali', 10, 'CIP', 1000.00, 150.00, 150.00, 0.00, 0, 150.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(800, 1, '100010000057', 'Sabina Yesmin', 'shimu.mahmood@yahoo.com', 'Standard Chartered Bank', 'Sabina Yesmin', '18-1166111-01', '215261726', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(801, 1, '100010000058', 'MD KAHIR MAHMOOD', 'kahir2010@gmail.com', 'Standard Chartered Bank', 'MD KAHIR MAHMOOD', '18-1110805-01', '215261726', 'Gulshan', 500, 'Cash', 50000.00, 7500.00, 7500.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(802, 1, '100010000060', 'Md Sayeed-Bin-Islam', 'sayeedbinislam123@gmail.com', 'SBAC Bank Limited', 'MD. SAYEED-BIN-ISLAM', '0026121000068', '270260438', 'Banani Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(803, 1, '100010000062', 'MUSTAFIZUR RAHMAN', 'mustafiz0062@gmail.com', 'Jamuna Bank', 'Mustafizur Rahman', '030-0310022323', '130260431', 'Banani Branch', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(804, 1, '100010000063', 'MOHAMMAD KHALED HOSSAIN CHOUDHURY', 'khaled@cvcflbd.com', 'Bank Asia Limited', 'MOHAMMAD KHALED HOSSAIN CHOUDHURY', '00834011308', '070262928', 'Mcb Dilkusha Branch', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(805, 1, '100010000064', 'YAZDAN YUSUF CHOWDHURY', 'yazdan.chowdhury@gmail.com', 'Trust Bank Limited', 'YAZDAN YUSUF CHOWDHURY', '0016-0130000123', '240261812', 'Gulshan Corp.', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(806, 1, '100010000065', 'Muhammad Faruque Hussain', 'faruque2345@yahoo.com', 'Trust Bank Ltd', 'Muhammad Faruque Hussain', '02-0310236801', '240275358', 'Corporate Br, Dhaka Cantt.', 4350, 'Cash', 435000.00, 65250.00, 59212.50, 6037.50, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(807, 1, '100010000066', 'Md Hakimuzzaman', 'hzmn1971@gmail.com', 'Trust Bank Ltd', 'Md Hakimuzzaman', '0002-0210101207', '240275358', 'Principal', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(808, 1, '100010000067', 'Md. Akram Hossain Jubaraj', 'ahraj007@yahoo.com', 'SCB', 'Md. Akram Hossain Jubaraj', '18-1326747-01', '215261726', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(809, 1, '100010000069', 'Khandoker Anisur Rahman', 'anis4505@yahoo.com', 'Trust Bank Ltd', 'Khandoker Anisur Rahman', '0002-0210024069', '240275358', 'Principle Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(810, 1, '100010000070', 'FERDOUS HASAN SALIM', 'fhs4410@yahoo.com', 'TRUST BANK', 'FERDOUS HASAN SALIM', '0002-0210018174', '240264185', 'DHAKA CANTT', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(811, 1, '100010000071', 'Md. Yasin Chowdhury', 'yasin.chowdhury@berichbd.com', 'First Securities Islami Bank Limited', 'Md. Yasin Chowdhury', '0012200000064', '105153160', 'Halishahar, chittagong', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(812, 1, '100010000072', 'Mohammad Habibur Rahman', 'habibur.rahman@berichbd.com', 'Eastern Bank Limited', 'Mohammad Habibur Rahman', '201260034590', '95154961', 'Mehedibagh', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(813, 1, '100010000073', 'Mohammad Shafiul Islam', 'shafiul.islam@berichbd.com', 'Eastern Bank Limited', 'Mohammad Shafiul Islam', '0201260034954', '95154961', 'Mehedibagh', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16');
INSERT INTO `dividend_calculation` (`DVC_ID`, `FUND_ID`, `REGISTRATION_NO`, `INVESTOR_NAME`, `INVESTOR_EMAIL`, `BANK_NAME`, `AC_NAME`, `AC_NO`, `ROUTING`, `BRANCH`, `HOLDING_UNIT`, `DIV_TYPE`, `FUND_VALUE`, `DIVIDEND_AMOUNT`, `NET_DIVIDEND`, `DED_INC_TAX`, `ENTI_CIP`, `PAY_FRACTIONAL`, `PERCENTAGE`, `POR_CAT`, `created_at`, `updated_at`) VALUES
(814, 1, '100010000074', 'Muhammad Zaberul Islam', 'zaberul.islam@berichbd.com', 'Eastern Bank Limited', 'Muhammad Zaberul Islam', '0201260034604', '95154961', 'Mehedibagh', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(815, 1, '100010000075', 'Abdullah Al Mamun', 'abdullah.mamun@berichbd.com', 'Dutch Bangla Bank Ltd.', 'Abdullah Al Mamun', '1291010002250', '90151480', 'CDA Avenue', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(816, 1, '100010000076', 'Rashed Ahmed', 'rashedtkz@gmail.com', 'Midland Bank', 'Rashed Ahmed', '0011-1010002414', '285261727', 'Gulshan', 5200, 'Cash', 520000.00, 78000.00, 70050.00, 7950.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(817, 1, '100010000077', 'ADNAN YUSUF CHOUDHURY', 'choudhuryadnanchest@gmail.com', 'Trust Bank', 'ADNAN YUSUF CHOUDHURY', '0016-0310024605', '240261812', 'Gulshan Corporate Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(818, 1, '100010000078', 'FUAD AHMED KHAN', 'fuadahmedamc@yahoo.com', 'TRUST BANK LIMITED', 'FUAD AHMED KHAN', '0074-0130000052', '240263199', 'MOHAKHALI', 10, 'Cash', 1000.00, 150.00, 150.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(819, 1, '100010000079', 'AHSAN MAHMOOD', 'amtrial@gmail.com', 'TRUST BANK LIMITED', 'AHSAN MAHMOOD', '0003-0310036651', '240276199', 'SKB', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(820, 1, '100010000080', 'MD. IFTAKHER HOSSAIN', 'ifti.tbl@gmail.com', 'TRUST BANK LIMITED', 'MD. IFTAKHER HOSSAIN', '0003-0210010724', '240276199', 'SKB', 50, 'Cash', 5000.00, 750.00, 750.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(821, 1, '100010000081', 'FARIDA AKTER', 'farida.akter.1963@gmail.com', 'TRUST BANK LIMITED', 'FARIDA AKTER', '0061-0210001837', '240261812', 'GULSHAN CORPORATE', 20, 'Cash', 2000.00, 300.00, 300.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(822, 1, '100010000082', 'Istiak Mahmud', 'istiak.mahmud@gmail.com', 'Standard Chartered', 'Istiak Mahmud', '18-1217073-01', '215261726', 'Gulshan Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(823, 1, '100010000083', 'MD.NIZAM UDDIN BHUIYAN', 'anik_bhuiyan@hotmail.com', 'Pubali Bnak Limited', 'MD.NIZAM UDDIN BHUIYAN', '3677101043891', '175263198', 'Mohakhali Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(824, 1, '100010000086', 'Angkan Biswas', 'angkan.ca@gmail.com', 'Trust Bank Limited', 'Angkan Biswas', '0016-0316003395', '240261812', 'Gulshan Corporate', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(825, 1, '100010000087', 'KAYES MAHMUD', 'kayes058@yahoo.com', 'UNION BANK LIMITED', 'KAYES MAHMUD', '291130000017', '265260430', 'BANANI', 1500, 'Cash', 150000.00, 22500.00, 22500.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(826, 1, '100010000088', 'MD. MEZBAHUR RAHMAN', 'masududdin02@gmail.com', 'STANDARD CHARTERED BANK', 'MD. MEZBAHUR RAHMAN', '18112045401', '215262538', 'KARWAN BAZAR', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(827, 1, '100010000089', 'FAHMIDA SULTANA SHOVA', 'fahamshova@gmail.com', 'TRUST BANK', 'FAHMIDA SULTANA SHOVA', '0056-0316006189', '240260439', 'Banani', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(828, 1, '100010000091', 'Maria Binte Muzib', 'maria.muzib@gmail.com', 'Standard Chartered Bank Limited', 'Maria Binte Muzib', '18122375601', '2152612726', 'Gulshan Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(829, 1, '100010000093', 'SHEIKH MAHMUDUL HASSAN', 'hassanhydrographer@yahoo.com', 'Trust Bank Limited', 'CDR SHEIKH MAHMUDUL HASSAN', '\"0018-0210003842\"', '240263799', 'Radission Water Garden Hotel', 1700, 'Cash', 170000.00, 25500.00, 25425.00, 75.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(830, 1, '100010000094', 'TANZINA ZEREN', 'tanzina.zerin@gmail.com', 'Trust Bank Limited', 'TANZINA ZEREN', '0056-0310004638', '240260439', 'Banani', 12500, 'CIP', 1250000.00, 187500.00, 187402.50, 97.50, 2020, 650.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(831, 1, '100010000095', 'Mohammad Golam Kibria', 'gkibria@link3.net', 'Standard Chartered', 'Mohammad Golam Kibria', '181324081-01', '215261726', 'Gulshan', 60, 'CIP', 6000.00, 900.00, 900.00, 0.00, 0, 900.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(832, 1, '100010000096', 'Md. Sarwar-E-Rahman', 'emon.sarwar88@gmail.com', 'City Bank Limited', 'Md. Sarwar-E-Rahman', '2101092092001', '225272321', 'Foreign Exchange', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(833, 1, '100010000097', 'Md. Mahbub Alam', 'mahbub.alam@rocketmail.com', 'Mutual Trust Bank Ltd.', 'MD. Mahbub Alam', '0020310118199', '145275358', 'Principal Branch', 5440, 'Cash', 544000.00, 81600.00, 75940.00, 5660.00, 0, 0.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(834, 1, '100010000098', 'Md. Habibur Rahman', 'sumonhr@gmail.com', 'SCB', 'MD Habibur Rahman', '18123744201', '215261726', 'Gulshan Avenue, Gulshan 1', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(835, 1, '100010000099', 'Md. Iftekhar-ul- Islam', 'iftekhar.ul.islam13@gmail.com', 'Dhaka Bank Limited', 'Md.Iftekhar-ul-Islam', '2072000045080', '085262539', 'KARWAN BAZAR', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(836, 1, '100010000100', 'AKM Ziaul Islam', 'akm.ziaul.islam@gmail.com', 'Dutch Bangla Bank Ltd.', 'AKM Ziaul Islam', '107-101-65304', '090262537', 'Karwan Bazar', 3500, 'CIP', 350000.00, 52500.00, 52395.00, 105.00, 560, 700.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(837, 1, '100010000101', 'MD SHAMSUL HAQUE', 'shamsbd2001@yahoo.com', 'TRUST BANK LIMITED', 'MD SHAMSUL HAQUE', '0002-0210016596', '240275358', 'PRINCIPAL BRANCH ', 11250, 'CIP', 1125000.00, 168750.00, 168690.00, 60.00, 1820, 400.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(838, 1, '100010000104', 'MOHAMMAD TAREKUL ISLAM', 'mtarek77@gmail.com', 'Standard Chartered Bank Bangladesh', 'MOHAMMAD TAREKUL ISLAM', '18132408001', '215261726', 'Gulshan', 1000, 'Cash', 100000.00, 15000.00, 15000.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(839, 1, '100010000105', 'Syeda Shamim Ara', 'syeda.shamim@tblbd.com', 'Trust Bank Ltd', 'Syeda Shamim Ara', '0002-0310077804', '240275358', 'Principal Brunch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(840, 1, '100010000106', 'MUHAMMAD SHAIFUL ISLAM', 'mshaiful.islam1@gmail.com', 'City Bank Ltd.', 'MUHAMMAD SHAIFUL ISLAM', '2182564875001', '225260438', 'BANANI BRANCH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(841, 1, '100010000107', 'Sukshana Sarkar', 'rhcebibak@yahoo.com', 'Estern Bank Ltd', 'SUKSHANA SARKER', '1701440184883', '95264093', 'Savar', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(842, 1, '100010000108', 'MD.MAHMUDUL HAQUE KHAN', 'mhaqkhan1967@gmail.com', 'TRUST BANK LIMITED', 'MAJOR MD MAHMUDUL HAQUE KHAN (RETD)', '0018-0318000025', '240263799', 'RWGH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(843, 1, '100010000109', 'Fatema Begum', 'bazlur@capmbd.com', 'krishi bank', 'Fatema Begum', '1101031019572', '035820734', 'RAJBARI', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(844, 1, '100010000110', 'Md. Abdul Momin Saffat', 'saffat@live.com', 'Mutual Trust Bank Ltd.', 'Md. Abdul Momin Saffat', '00070310055841', '145264693', 'Uttara', 850, 'Cash', 85000.00, 12750.00, 12750.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(845, 1, '100010000111', 'MD. NAZRUL ISLAM', 'nabilislambd2017@gmail.com', 'One Bank Ltd', 'MD. NAZRUL ISLAM', '0025095218018', '165261726', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(846, 1, '100010000112', 'MAHFUZA BEGUM', 'fuzibd@gmail.com', 'City Bank', 'Mahfuza Begum', '2222586010001', '225261174', 'Gulshan Women Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(847, 1, '100020000012', 'ASHUTOSH CHOWDHURY', 'ashu.chy@gmail.com', 'TRUST BANK LIMITED', 'ASHUTOSH CHOWDHURY', '0016-0316001664', '240261812', 'GULSHAN CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(848, 1, '100020000021', 'SHAHANARA BEGUM', 'ahmadsajid1989@yahoo.com', 'AL-ARAFAH ISLAMI BANK LIMITED', 'SHAHANARA BEGUM', '0151120363464', '015271390', 'MOTIJHEEL CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(849, 1, '100020000031', 'MOHAMMAD ARIFUL HOQUE MOLLIQ', 'arifmolliq@gmail.com', 'TRUST BANK LIMITED', 'MOHAMMAD ARIFUL HOQUE MOLLIQ', '0016-0316001548', '240261812', 'GULSHAN CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(850, 1, '100020000036', 'ADEL AHMED', 'adelbd65@yahoo.co.uk ', 'TRUST BANK LIMITED', 'ADEL AHMED', '0016-0316001315', '240261812', 'GULSHAN CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(851, 1, '100020000068', 'MUFAKHKHARUL ISLAM', 'mufakhkharul_islam@yahoo.com', 'TRUST BANK LTD.', 'MUFAKHKHARUL ISLAM', '0016-0316001735', '240261812', 'GULSHAN CORPORATE', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(852, 1, '100030000008', 'Debasish Das', 'ddasrana@gmail.com', 'Dutch Bangla Bank Limited', 'Debasish Das', '123.101.66091', '090330227', 'Board Bazar, Gazipur', 20, 'Cash', 2000.00, 300.00, 300.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(853, 1, '100030000011', 'Reaz Uddin Ahmed', 'reazuddinahmed41@gmail.com', 'Bangladesh Development Bank Ltd', 'REAZ UDDIN AHMED', '0650100003934', '47271571', 'Principal', 100, 'Cash', 10000.00, 1500.00, 1500.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(854, 1, '100030000035', 'MD. EHSANUL KABIR', 'nilakash@gmail.com', 'TRUST BANK LTD', 'MD. EHSANUL KABIR', '0002-0210000450', '240275358', 'PRINCIPAL BRANCH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(855, 1, '100030000041', 'Wasef Nowsher', 'wasef.nowsher@gmail.com', 'Trust Bank Limited', 'Wasef Nowsher', '0016-0310011066', '240261812', 'Gulshan Corporate Branch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(856, 1, '100030000042', 'Itteba Ahammad Khan', 'itteba06@gmail.com', 'Trust Bank Limited', 'Itteba Ahammad Khan', '0016-0210006350', '240261812', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(857, 1, '100030000050', 'MD. SHAHIDUL ISALM', 'shahid1186@yahoo.com', 'TRUST BANK LIMITED', 'MAJOR MD SHAHIDUL ISLAM', '0002-0210055508', '240275358', 'PRINCIPAL BRANCH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(858, 1, '100040000018', 'BANDHU PADO PAUL CHOWDHURY', 'bandhuhbj@yahoo.com', 'DUTCH BANGLA BANK LIMITED', 'BANDHU PADO PAUL CHOWDHURY', '1871010003223', '090360613', 'SYLHET', 20, 'Cash', 2000.00, 300.00, 300.00, 0.00, 0, 0.00, 10.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(859, 1, '100050000037', 'RAFIQ AHMED', 'rafiqmallick@gmail.com', 'BANK ASIA LIMITED', 'RAFIQ AHMED', '0000534016156', '070150135', 'AGRABAD', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(860, 1, '100070000017', 'MD ARIFUL ISLAM', 'ssl.arif.121@gmail.com    ', 'ONE BANk LIMITED', 'MD ARIFUL ISLAM', '0010024931005', '165275354', 'PRINCIPAL BRANCH', 50, 'Cash', 5000.00, 750.00, 750.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(861, 1, '100070000048', 'ABDUL AZIZ', 'abdulaziz0839@gmail.com', 'ONE BANK LIMITD', 'ABDUL AZIZ', '0015026641006', '165275354', 'PRINCIPAL BRANCH', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(862, 1, '300010000061', 'MUKTA RAHMAN', 'mukta_jasmin@yahoo.com', 'Standard Chartered Bank Limited', 'MUKTA RAHMAN', '24-125157801', '215261726', 'Gulshan', 1120, 'Cash', 112000.00, 16800.00, 16800.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(863, 1, '300030000030', 'MAJOR TAPAN BIKASH CHAKMA (RETD)', 'chakma2235@yahoo.com', 'TRUST BANK LIMITED', 'MAJOR TAPAN BIKASH CHAKMA (RETD)', '0002-0310262425', '240275358', 'PRINCIPAL BRANCH', 50, 'CIP', 5000.00, 750.00, 750.00, 0.00, 0, 750.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(864, 1, '100010000113', 'TANIPA WADUD', 'tanipawadud@gmail.com', 'TRUST BANK', 'TANIPA WADUD', '0002-0310265548', '240275358', 'Principal Brunch', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(865, 1, '100010000114', 'Nurjahan Akther', 'anurjahan76@yahoo.com', 'Trust Bank Ltd', 'Nurjahan Akther', '0041-0310029485', '240262387', 'Kafrul', 1800, 'Cash', 180000.00, 27000.00, 26700.00, 300.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(866, 1, '100010000115', 'Md. Jahidul Islam', 'Zahidul561@gmail.com', 'Trust Bank Limited', 'MD. JAHIDUL ISLAM', '0560316006205', '240260439', 'Banani', 90, 'CIP', 9000.00, 1350.00, 1350.00, 0.00, 10, 425.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(867, 1, '100010000116', 'MONJU ARA BEGUM', 'monjuarabegum001@gmail.com', 'Trust Bank Limited', 'MONJU ARA BEGUM', '0028-0310042298', '240262987', 'Mirpur-11', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(868, 1, '100010000117', 'Hassan Asheq Mahmood', 'hamahmood@outlook.com', 'Al-Arafah Islami Bank Ltd.', 'Hassan Asheq Mahmood', '741120017329', '015263137', 'Mirpur 10', 10, 'Cash', 1000.00, 150.00, 150.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(869, 1, '100010000118', 'S M FAJLUL BARI', 'smfbari@gmail.com', 'BANK ASIA LTD', 'S M FAJLUL BARI', '00734022460', '070276130', 'SCOTIA', 600, 'Cash', 60000.00, 9000.00, 9000.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(870, 1, '100010000120', 'MD. Murshed Alam', 'murshed.alam@team.com.bd', 'City Bank Ltd.', 'MD. MURSHED ALAM', '2182564284001', '225260438', 'Banani', 1200, 'Cash', 120000.00, 18000.00, 18000.00, 0.00, 0, 0.00, 15.00, 'ind', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(871, 1, '200010000001', 'CAPM (Capital  Portfolio Management) Company Limited', 'ceo@capmbd.com', 'AB Bank Limited', 'CAPM (Capital  Portfolio Management) Company limited', '4004-774235-000', '20274245', 'Motijheel Corporate', 129500, 'Cash', 12950000.00, 1942500.00, 1554000.00, 388500.00, 0, 0.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(872, 1, '200010000002', 'Lankabangla Finance Limited', 'margub.ahmed@lankabangla.com', 'Dhaka  Bank Limited', 'Lankabangla Finance Limited', '2061500000097', '85260436', 'Banani', 20000, 'Cash', 2000000.00, 300000.00, 240000.00, 60000.00, 0, 0.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(873, 1, '200010000003', 'Trust Bank Limited', 'adcosta@trustbanklimited.com', 'Trust Bank Limited', 'The Trust Bank Ltd. Investment Account', '00220210015833', '240262958', 'Millennium Corporate Branch', 100000, 'Cash', 10000000.00, 1500000.00, 1200000.00, 300000.00, 0, 0.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(874, 1, '200010000005', 'DBH First Mutual Fund', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C DBH First Mutual Fund (Close End)', '01-1053487-08', '215261726', 'Gulshan', 78000, 'Cash', 7800000.00, 1170000.00, 1170000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(875, 1, '200010000006', 'AIBL 1st Islami Mutual Fund', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C AIBL 1st Islami Mutual Fund', '01-9778381-01', '215261726', 'Gulshan', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(876, 1, '200010000007', 'Green Delta Mutual Fund', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C Green Delta Mutual Fund', '01-9777962-01', '215274247', 'Motijheel', 97000, 'Cash', 9700000.00, 1455000.00, 1455000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(877, 1, '200010000008', 'LR Global Bangladesh Mutual Fund One', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C LR Global Bangladesh Mutual Fund One', '01-9778527-01', '215274247', 'Motijheel', 213500, 'Cash', 21350000.00, 3202500.00, 3202500.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(878, 1, '200010000009', 'MBL 1st Mutual Fund', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C MBL 1st Mutual Fund', '01-9779159-01', '215274247', 'Motijheel', 67000, 'Cash', 6700000.00, 1005000.00, 1005000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(879, 1, '200010000010', 'NCCBL Mutual Fund-1', 'iirony@lrglobalbd.com', 'Standard Chartered Bank', 'LR Global AMC A/C NCCBL Mutual Fund-1', '01-1110537-01', '215261726', 'Gulshan', 72000, 'Cash', 7200000.00, 1080000.00, 1080000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(880, 1, '200010000011', 'CIPMS-Pool', 'ipms@capmbd.com', 'Trust Bank Ltd.', 'CAPM IPM (Clients)', '0016-0320000693', '240261812', 'Gulshan Corporate', 36390, 'CIP', 3639000.00, 545850.00, 545830.00, 20.00, 5900, 100.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(881, 1, '200010000012', 'M.M. Spinning Mills Ltd.', 'badarspinning@gmail.com', 'Dhaka Bank Limited', 'M.M. Spinning Mills Ltd.', '0231100000003201', '085671188', 'Narayanganj', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(882, 1, '200010000013', 'LankaBangla Asset Management Company Limited (Alternative Investment Fund Manager)', 'faisal@lankabangla.com', 'One Bank Limited', 'LankaBangla Asset Management Company Limited (Alternative Investment Fund Manager)', '0183000000657', '165260435', 'Banani', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(883, 1, '200010000014', 'LankaBangla Asset Management Company Limited', 'faisal@lankabangla.com', 'Dhaka Bank Limited', 'LankaBangla Asset Management Company Limited', '0206150000001590', '085260436', 'Banani', 0, 'Cash', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(884, 1, '200010000015', 'M/S Raju Steel Enterprise ', 'sumitpaul131@gmail.com', 'Union Bank Ltd. ', 'M/S Raju Steel Enterprise ', '0291010001173', '265260430', 'Banani', 0, 'CIP', 0.00, 0.00, 0.00, 0.00, 0, 0.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(885, 1, '200010000016', 'HFAML UNIT FUND', 'info@hfassetmanagement.com', 'IFIC BANK LTD', 'HFAML UNIT FUND', '0170145334041', '120260559', 'BASHUNDHARA', 52000, 'Cash', 5200000.00, 780000.00, 780000.00, 0.00, 0, 0.00, 0.00, 'mf', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(886, 1, '200010000017', 'UCB Capital Management Limted', 'Sankor.paul@ucb.com.bd', 'UCB', 'UCB Capital Management Limted', '0011301000001346', '245275353', 'Principal', 43400, 'Cash', 4340000.00, 651000.00, 520800.00, 130200.00, 0, 0.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(887, 1, '200010000018', 'LANKABANGLA 1ST BALANCED UNIT FUND', 'noor.alam@lankabangla.com', 'ONE BANK LIMITED', 'LANKABANGLA 1ST BALANCED UNIT FUND', '0183000000464', '165260435', 'BANANI', 56290, 'CIP', 5629000.00, 844350.00, 844350.00, 0.00, 9120, 750.00, 0.00, 'mf', '2020-08-24 07:16:16', '2020-08-24 07:16:16'),
(888, 1, '200020000004', 'CAPM ADVISORY LIMITED', 'bashar@capmadvisorybd.com', 'TRUST BANK LIMITED', 'CAPM ADVISORY LIMITED (OPERATIONS)', '0016-0320000728', '240261812', 'GULSHAN CORPORATE BR.', 172010, 'Cash', 17201000.00, 2580150.00, 2064120.00, 516030.00, 0, 0.00, 20.00, 'inst', '2020-08-24 07:16:16', '2020-08-24 07:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `dividend_setup`
--

CREATE TABLE `dividend_setup` (
  `DVS_ID` bigint(20) UNSIGNED NOT NULL,
  `FUND_ID` int(11) NOT NULL,
  `FACE_VALUE` double(14,2) NOT NULL,
  `DIVIDEND` double(14,2) NOT NULL,
  `INDV_ETIN_TAX` double(14,2) NOT NULL,
  `INDV_TAX` double(14,2) NOT NULL,
  `INST_INC_TAX` double(14,2) NOT NULL,
  `MF_INC_TAX` double(14,2) NOT NULL DEFAULT '0.00',
  `TAX_MARGIN` double(14,2) NOT NULL,
  `TC_DATE` date NOT NULL,
  `TCIP_DATE` date NOT NULL,
  `NET_PROFIT` double(14,2) NOT NULL,
  `EARNINGS_PER_UNIT` double(14,2) NOT NULL,
  `BUY_PRICE` double(14,2) NOT NULL,
  `APRV_DATE` date NOT NULL,
  `YED` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dividend_setup`
--

INSERT INTO `dividend_setup` (`DVS_ID`, `FUND_ID`, `FACE_VALUE`, `DIVIDEND`, `INDV_ETIN_TAX`, `INDV_TAX`, `INST_INC_TAX`, `MF_INC_TAX`, `TAX_MARGIN`, `TC_DATE`, `TCIP_DATE`, `NET_PROFIT`, `EARNINGS_PER_UNIT`, `BUY_PRICE`, `APRV_DATE`, `YED`, `created_at`, `updated_at`) VALUES
(5, 1, 10.00, 10.00, 10.00, 15.00, 20.00, 0.00, 50000.00, '2020-08-26', '2020-08-24', 100.00, 1.00, 11.00, '2020-08-24', '2020-07-31', '2020-08-24 07:11:18', '2020-08-24 07:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `id` bigint(20) NOT NULL,
  `REGISTRATION_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FUND_ID` int(11) NOT NULL,
  `BUY_PADDING_UNIT` int(11) NOT NULL DEFAULT '0',
  `TOTAL_UNITS` int(11) NOT NULL,
  `AVG_RATE` double(8,2) NOT NULL,
  `TOTAL_AMOUNT` double(10,2) NOT NULL,
  `SELL_PADDING_UNIT` int(11) NOT NULL DEFAULT '0',
  `BLOCK_UNITS` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`id`, `REGISTRATION_NO`, `FUND_ID`, `BUY_PADDING_UNIT`, `TOTAL_UNITS`, `AVG_RATE`, `TOTAL_AMOUNT`, `SELL_PADDING_UNIT`, `BLOCK_UNITS`, `created_at`, `updated_at`) VALUES
(1, '100010000001', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(2, '100010000002', 1, 0, 26370, 103.68, 2734020.80, 0, 0, '2020-08-26 11:47:06', '2020-09-03 10:30:27'),
(3, '100010000003', 1, 0, 0, 0.00, 85021.80, 0, 0, '2020-03-16 11:02:18', '2020-05-11 07:17:04'),
(4, '100010000004', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(5, '100010000005', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(6, '100010000006', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(7, '100010000007', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(8, '100010000009', 1, 0, 110, 100.29, 11032.70, 0, 0, NULL, NULL),
(9, '100010000013', 1, 0, 330, 101.64, 33542.50, 0, 0, NULL, NULL),
(10, '100010000014', 1, 0, 6700, 89.39, 598890.30, 0, 0, '2019-12-03 10:43:32', '2019-12-10 08:37:02'),
(11, '100010000015', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(12, '100010000016', 1, 0, 1410, 101.94, 143742.50, 0, 0, NULL, NULL),
(13, '100010000019', 1, 0, 110, 100.29, 11032.70, 0, 0, NULL, NULL),
(14, '100010000020', 1, 0, 70, 92.52, 6476.40, 0, 0, '2020-06-29 04:44:25', '2020-06-30 05:52:49'),
(15, '100010000022', 1, 0, 0, 0.00, 87986.20, 0, 0, '2020-10-04 08:23:25', '2020-10-04 09:48:02'),
(16, '100010000023', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(17, '100010000024', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(18, '100010000026', 1, 0, 30, 100.00, 3000.00, 0, 0, NULL, NULL),
(19, '100010000027', 1, 0, 390, 103.26, 40272.40, 0, 0, NULL, NULL),
(20, '100010000028', 1, 0, 5800, 100.52, 583022.00, 0, 0, NULL, NULL),
(21, '100010000029', 1, 0, 5800, 100.52, 583022.00, 0, 0, NULL, NULL),
(22, '100010000032', 1, 0, 100, 3000.00, 300000.00, 0, 0, NULL, NULL),
(23, '100010000033', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(24, '100010000034', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(25, '100010000038', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(26, '100010000039', 1, 0, 50, 100.00, 5000.00, 0, 0, NULL, NULL),
(27, '100010000040', 1, 0, 200, 100.40, 20081.00, 0, 0, NULL, NULL),
(28, '100010000043', 1, 0, 100, 100.00, 10000.00, 0, 0, NULL, NULL),
(29, '100010000044', 1, 0, 33000, 109.07, 3599438.65, 3000, 0, '2020-10-07 06:51:20', '2020-06-25 06:08:57'),
(30, '100010000045', 1, 0, 3000, 136.00, 408000.00, 0, 0, NULL, NULL),
(31, '100010000046', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(32, '100010000047', 1, 0, 500, 121.39, 60696.36, 0, 0, '2019-11-26 09:06:33', '2019-12-03 11:10:25'),
(33, '100010000049', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(34, '100010000051', 1, 0, 10000, 100.00, 1000000.00, 0, 0, NULL, NULL),
(35, '100010000052', 1, 0, 0, 0.00, 0.00, 0, 0, '2019-10-30 11:05:28', '2019-10-30 11:15:51'),
(36, '100010000054', 1, 0, 10, 3446.10, 34461.00, 0, 0, '2019-10-20 09:15:03', '2019-10-27 11:40:26'),
(37, '100010000055', 1, 10, 1070, 108.16, 115734.13, 0, 0, '2020-10-06 13:23:54', '2020-09-23 10:38:41'),
(38, '100010000056', 1, 0, 10, 101.50, 1015.00, 0, 0, NULL, NULL),
(39, '100010000057', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(40, '100010000058', 1, 0, 500, 101.40, 50700.00, 0, 0, NULL, NULL),
(41, '100010000060', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(42, '100010000062', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(43, '100010000063', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(44, '100010000064', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(45, '100010000065', 1, 0, 0, 0.00, -42978.00, 0, 0, '2020-08-31 10:28:52', '2020-09-07 11:41:14'),
(46, '100010000066', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(47, '100010000067', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(48, '100010000069', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(49, '100010000070', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(50, '100010000071', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(51, '100010000072', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(52, '100010000073', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(53, '100010000074', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(54, '100010000075', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(55, '100010000076', 1, 0, 5200, 105.28, 547472.00, 0, 0, '2020-09-29 16:28:26', '2020-10-04 09:51:11'),
(56, '100010000077', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(57, '100010000078', 1, 0, 10, 34395.00, 343950.00, 0, 0, NULL, NULL),
(58, '100010000079', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(59, '100010000080', 1, 0, 50, 104.80, 5240.00, 0, 0, NULL, NULL),
(60, '100010000081', 1, 0, 20, 104.80, 2096.00, 0, 0, NULL, NULL),
(61, '100010000082', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(62, '100010000083', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(63, '100010000086', 1, 0, 0, 0.00, 11648.00, 0, 0, '2020-03-18 10:08:37', '2020-05-11 07:18:11'),
(64, '100010000087', 1, 0, 1500, 112.87, 169307.39, 0, 0, '2020-06-28 01:00:28', '2020-06-28 04:46:56'),
(65, '100010000088', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(66, '100010000089', 1, 0, 620, 121.07, 75065.88, 0, 0, '2020-09-16 12:01:45', '2020-09-23 10:37:47'),
(67, '100010000091', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(68, '100010000093', 1, 0, 1700, 115.93, 197081.00, 0, 0, NULL, NULL),
(69, '100010000094', 1, 0, 12500, 115.90, 1448814.00, 0, 0, '2019-11-06 05:59:19', '2019-11-18 09:57:39'),
(70, '100010000095', 1, 0, 60, 116.62, 6997.20, 0, 0, NULL, NULL),
(71, '100010000096', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(72, '100010000097', 1, 0, 0, 0.00, -10061.60, 0, 0, '2020-09-20 10:40:08', '2020-09-27 11:21:50'),
(73, '100010000098', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(74, '100010000099', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(75, '100010000100', 1, 0, 3500, 111.13, 388980.00, 0, 0, NULL, NULL),
(76, '100010000101', 1, 0, 11250, 113.02, 1271487.50, 0, 0, NULL, NULL),
(77, '100010000104', 1, 0, 1000, 114.65, 114650.00, 0, 0, '2020-06-28 01:07:18', '2020-06-28 02:16:57'),
(78, '100010000105', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(79, '100010000106', 1, 0, 0, 0.00, 2440.00, 0, 0, '2020-07-13 07:16:49', '2020-07-26 04:10:27'),
(80, '100010000107', 1, 0, 0, 0.00, 101960.00, 0, 0, '2020-03-25 07:15:44', '2020-06-03 10:35:38'),
(81, '100010000108', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(82, '100010000109', 1, 0, 0, 0.00, 50001.00, 0, 0, '2020-03-16 11:07:02', '2020-03-23 07:44:04'),
(83, '100010000110', 1, 0, 850, 117.40, 99790.00, 0, 0, NULL, NULL),
(84, '100010000111', 1, 0, 0, 0.00, 45832.00, 0, 0, '2020-03-24 06:22:20', '2020-05-11 11:39:46'),
(85, '100010000112', 1, 0, 580, 111.95, 64932.00, 0, 0, '2020-09-09 12:02:31', '2020-09-14 06:54:38'),
(86, '100020000012', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(87, '100020000021', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(88, '100020000031', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(89, '100020000036', 1, 0, 0, 0.00, 908.00, 0, 0, '2020-01-14 17:16:47', '2020-01-16 10:53:13'),
(90, '100020000068', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(91, '100030000008', 1, 0, 20, 100.00, 2000.00, 0, 0, NULL, NULL),
(92, '100030000011', 1, 0, 100, 100.00, 10000.00, 0, 0, NULL, NULL),
(93, '100030000035', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(94, '100030000041', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(95, '100030000042', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(96, '100030000050', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(97, '100040000018', 1, 0, 20, 100.00, 2000.00, 0, 0, NULL, NULL),
(98, '100050000037', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(99, '100070000017', 1, 0, 50, 100.00, 5000.00, 0, 0, NULL, NULL),
(100, '100070000048', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(101, '200010000001', 1, 0, 129500, 101.96, 13203516.20, 0, 100000, NULL, '2020-10-05 07:48:16'),
(102, '200010000002', 1, 0, 20000, 1000.00, 20000000.00, 0, 0, NULL, NULL),
(103, '200010000003', 1, 0, 100000, 100.00, 10000000.00, 0, 0, NULL, NULL),
(104, '200010000005', 1, 0, 78000, 94.87, 7399860.00, 0, 0, '2019-10-15 18:00:00', '2019-10-15 18:00:00'),
(105, '200010000006', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(106, '200010000007', 1, 0, 97000, 94.87, 9202390.00, 0, 0, '2019-10-15 18:00:00', '2019-10-15 18:00:00'),
(107, '200010000008', 1, 0, 213500, 94.87, 20254745.00, 0, 0, '2019-10-15 18:00:00', '2019-10-15 18:00:00'),
(108, '200010000009', 1, 0, 67000, 94.87, 6356290.00, 0, 0, '2019-10-15 18:00:00', '2019-10-15 18:00:00'),
(109, '200010000010', 1, 0, 72000, 94.87, 6830640.00, 0, 0, '2019-10-15 18:00:00', '2019-10-15 18:00:00'),
(110, '200010000011', 1, 0, 48410, 101.54, 4915386.40, 0, 0, '2020-08-26 05:36:37', '2020-09-03 10:31:24'),
(111, '200010000012', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(112, '200010000013', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(113, '200010000014', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(114, '200010000015', 1, 0, 0, 0.00, 0.00, 0, 0, NULL, NULL),
(115, '200010000016', 1, 0, 77000, 112.39, 8654050.00, 0, 0, '2020-09-29 18:08:44', '2020-10-04 11:24:13'),
(116, '200010000017', 1, 0, 43400, 115.20, 4999680.00, 0, 0, NULL, NULL),
(117, '200010000018', 1, 0, 56290, 113.87, 6410068.30, 0, 0, NULL, NULL),
(118, '200020000004', 1, 0, 126500, 159.32, 20153497.60, 0, 0, '2020-10-04 09:23:35', '2020-10-07 06:09:19'),
(119, '300010000061', 1, 10, 1160, 109.56, 127094.82, 0, 0, '2020-10-06 13:24:56', '2020-09-23 10:39:49'),
(120, '300030000030', 1, 0, 50, 100.00, 5000.00, 0, 0, NULL, NULL),
(121, '100010000113', 5, 20, 0, 0.00, 0.00, 0, 0, '2019-10-17 11:58:55', NULL),
(122, '100010000114', 1, 0, 0, 0.00, -13248.00, 0, 0, '2020-09-22 04:58:20', '2020-09-27 11:22:39'),
(123, '100010000115', 1, 0, 90, 95.38, 8584.50, 0, 0, '2020-07-29 01:35:50', '2020-08-06 06:44:48'),
(124, '100010000116', 1, 0, 0, 0.00, 2453.10, 0, 0, '2020-03-18 08:07:30', '2020-03-23 07:53:44'),
(125, '100010000117', 1, 0, 10, 96.93, 969.30, 0, 0, NULL, NULL),
(126, '100010000118', 1, 0, 700, 95.49, 66844.00, 0, 0, '2020-09-22 11:26:23', '2020-09-23 10:40:30'),
(127, '102010000119', 1, 50030, 0, 0.00, 0.00, 0, 0, '2019-12-10 07:30:36', NULL),
(128, '119', 1, 10, 0, 0.00, 0.00, 0, 0, '2019-12-10 07:27:13', NULL),
(129, '100010000120', 1, 0, 0, 0.00, -14124.00, 0, 0, '2020-09-20 10:33:48', '2020-09-23 10:51:56'),
(130, '100010000121', 1, 0, 3300, 99.83, 329439.00, 0, 0, '2020-08-26 11:43:19', '2020-09-29 15:10:02'),
(131, '200010000019', 1, 0, 25000, 106.65, 2666250.00, 0, 0, '2020-09-29 18:53:14', '2020-10-04 11:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `inst_app`
--

CREATE TABLE `inst_app` (
  `INSTAPP_ID` bigint(20) NOT NULL,
  `TA_REG_NO` int(11) NOT NULL,
  `REGISTRATION_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INSTNAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INST_TYPE_FLAG` int(11) NOT NULL COMMENT '1 - Proprietorship , 2 - Partnership, 3 - Privet Ltd, 4 - Public Ltd, 5 - Other',
  `TRADE_LICENSE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TIN_NO` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BO_ID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `POST_CODE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TEL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FAX` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ACCOUNT_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ACCOUNT_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BANK_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROUTING_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BRANCH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inst',
  `DIVIDENT_OPT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CODE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inst_app`
--

INSERT INTO `inst_app` (`INSTAPP_ID`, `TA_REG_NO`, `REGISTRATION_NO`, `INSTNAME`, `INST_TYPE_FLAG`, `TRADE_LICENSE`, `ADDRESS`, `TIN_NO`, `BO_ID`, `POST_CODE`, `TEL`, `EMAIL`, `FAX`, `ACCOUNT_NAME`, `ACCOUNT_NO`, `BANK_NAME`, `ROUTING_NO`, `BRANCH`, `Type`, `DIVIDENT_OPT`, `PASSWORD`, `CODE`, `created_at`, `updated_at`) VALUES
(1, 1, '200010000001', 'CAPM (Capital  Portfolio Management) Company Limited', 3, 'C-89365/11', 'Safura Tower (5th Floor), 20 Kemal Ataturk Avenue, Dhaka-1213', '748161257551/Circle-54', 'N/A', 'N/A', '9856268', 'ceo@capmbd.com', '9820990', 'CAPM (Capital  Portfolio Management) Company limited', '4004-774235-000', 'AB Bank Limited', '20274245', 'Motijheel Corporate', 'inst', 'Cash', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2014-03-20 06:25:10', '2020-06-22 05:33:48'),
(2, 1, '200010000002', 'Lankabangla Finance Limited', 4, '0923826/C-31702 (823)/96', 'L-11, 20 kemal Ataturk  Avenue, Banani', '210-200-6736/LTU/2010-2011/326', 'N/A', '1213', '9883701-10', 'margub.ahmed@lankabangla.com', '8810998', 'Lankabangla Finance Limited', '2061500000097', 'Dhaka  Bank Limited', '85260436', 'Banani', 'inst', 'Cash', '46fde4e60019dc56bc6337843753d6f5', NULL, '2014-03-19 19:35:23', '2020-06-22 06:12:40'),
(3, 1, '200010000003', 'Trust Bank Limited', 4, 'C-37960(2260)/99', 'Peoples Insurance Bhaban (17th Floor), 36 Dilkusha C/A, Dhaka', '175-200-9870/LTU', 'N/A', '1000', '9570261-63', 'adcosta@trustbanklimited.com', '9551714', 'The Trust Bank Ltd. Investment Account', '00220210015833', 'Trust Bank Limited', '240262958', 'Millennium Corporate Branch', 'inst', 'Cash', '075f99426efad573f0b6d5215119daf2', NULL, '2014-03-19 20:54:48', '2020-06-22 06:13:29'),
(4, 1, '200020000004', 'CAPM ADVISORY LIMITED', 3, '0941909', 'TOWER HAMLET, (9TH FLOOR), 16 KEMAL ATATURK AVENUE, BANANI, DHAKA-1213, BANGLADESH', '811130174851', 'N/A', '1213', '9822391-2', 'bashar@capmadvisorybd.com', '9822393', 'CAPM ADVISORY LIMITED (OPERATIONS)', '0016-0320000728', 'TRUST BANK LIMITED', '240261812', 'GULSHAN CORPORATE BR.', 'inst', 'Cash', '57f6299d40c38f098a3aac84c9feb4aa', NULL, '2014-04-26 22:25:31', '2020-06-22 06:32:33'),
(5, 1, '200010000005', 'DBH First Mutual Fund', 4, 'SEC/Mutual Fund/2009/17', 'Concord I-K Tower, (4th Floor), Plot#2, Block# CEN(A), Gulshan North Avenue, Gulshan-2', 'N/A', 'N/A', '1212', '88 02 8818406-8', 'iirony@lrglobalbd.com', '88 02 9895689', 'LR Global AMC A/C DBH First Mutual Fund (Close End)', '01-1053487-08', 'Standard Chartered Bank', '215261726', 'Gulshan', 'mf', 'Cash', '2c99db4d5f987e3046bd6e9f191fc56f', NULL, '2014-04-27 22:06:15', '2020-06-22 06:36:17'),
(6, 1, '200010000006', 'AIBL 1st Islami Mutual Fund', 4, 'SEC/Mutual Fund/2010/21', 'Concord I-K Tower, (4th Floor), Plot#2, Block# CEN(A), Gulshan North Avenue, Gulshan-2', 'N/A', 'N/A', '1212', '88 02 8818406-8', 'iirony@lrglobalbd.com', '88 02 9895689', 'LR Global AMC A/C AIBL 1st Islami Mutual Fund', '01-9778381-01', 'Standard Chartered Bank', '215261726', 'Gulshan', 'mf', 'Cash', '2c99db4d5f987e3046bd6e9f191fc56f', NULL, '2014-04-27 22:08:58', '2020-06-22 06:49:46'),
(7, 1, '200010000007', 'Green Delta Mutual Fund', 4, 'SEC/Mutual Fund/2010/20', 'Concord I-K Tower, (4th Floor), Plot#2, Block# CEN(A), Gulshan North Avenue, Gulshan-2', 'N/A', 'N/A', '1212', '88 02 8818406-8', 'iirony@lrglobalbd.com', '88 02 9895689', 'LR Global AMC A/C Green Delta Mutual Fund', '01-9777962-01', 'Standard Chartered Bank', '215274247', 'Motijheel', 'mf', 'Cash', '2c99db4d5f987e3046bd6e9f191fc56f', NULL, '2014-04-27 22:10:49', '2020-06-22 06:51:43'),
(8, 1, '200010000008', 'LR Global Bangladesh Mutual Fund One', 4, 'SEC/Mutual Fund/2010/23', 'Concord I-K Tower, (4th Floor), Plot#2, Block# CEN(A), Gulshan North Avenue, Gulshan-2.', 'N/A', 'N/A', '1212', '88 02 8818406-8', 'iirony@lrglobalbd.com', '88 02 9895689', 'LR Global AMC A/C LR Global Bangladesh Mutual Fund One', '01-9778527-01', 'Standard Chartered Bank', '215274247', 'Motijheel', 'mf', 'Cash', '2c99db4d5f987e3046bd6e9f191fc56f', NULL, '2014-04-27 22:14:20', '2020-06-22 06:54:34'),
(9, 1, '200010000009', 'MBL 1st Mutual Fund', 4, 'SEC/Mutual Fund/2010/26', 'Concord I-K Tower, (4th Floor), Plot#2, Block# CEN(A), Gulshan North Avenue, Gulshan-2.', 'N/A', 'N/A', '1212', '88 02 8818406-8', 'iirony@lrglobalbd.com', '88 02 9895689', 'LR Global AMC A/C MBL 1st Mutual Fund', '01-9779159-01', 'Standard Chartered Bank', '215274247', 'Motijheel', 'mf', 'Cash', '2c99db4d5f987e3046bd6e9f191fc56f', NULL, '2014-04-27 22:17:17', '2020-06-22 06:56:08'),
(10, 1, '200010000010', 'NCCBL Mutual Fund-1', 4, 'SEC/Mutual Fund/2010/32', 'Concord I-K Tower, (4th Floor), Plot#2, Block# CEN(A), Gulshan North Avenue, Gulshan-2.', 'N/A', 'N/A', '1212', '88 02 8818406-8', 'iirony@lrglobalbd.com', '88 02 9895689', 'LR Global AMC A/C NCCBL Mutual Fund-1', '01-1110537-01', 'Standard Chartered Bank', '215261726', 'Gulshan', 'mf', 'Cash', '2c99db4d5f987e3046bd6e9f191fc56f', NULL, '2014-04-27 22:21:25', '2020-06-22 06:56:53'),
(11, 1, '200010000011', 'CIPMS-Pool', 3, 'N/A', 'Rupsha Tower(Flat-A2), Plot-07, Road-17, Banani C/A, Dhaka-1213', 'N/A', 'N/A', '1213', '88029820683', 'ipms@capmbd.com', '88029820990', 'CAPM IPM (Clients)', '0016-0320000693', 'Trust Bank Ltd.', '240261812', 'Gulshan Corporate', 'inst', 'CIP', '382b0f5185773fa0f67a8ed8056c7759', NULL, '2014-05-13 21:59:59', '2020-06-22 06:58:28'),
(12, 1, '200010000012', 'M.M. Spinning Mills Ltd.', 3, '01-01054', 'House#14, Road#03, Sector#06, Uttara, Dhaka-1230', 'N/A', NULL, '', '8921473', 'badarspinning@gmail.com', '88028922277', 'M.M. Spinning Mills Ltd.', '0231100000003201', 'Dhaka Bank Limited', '085671188', 'Narayanganj', 'inst', 'Cash', 'cb4906b7863436b5c7897811c8c27701', NULL, '2014-05-13 22:13:53', '2014-05-13 22:13:53'),
(13, 1, '200010000013', 'LankaBangla Asset Management Company Limited (Alternative Investment Fund Manager)', 3, 'AIFM-06/2016', 'Praasad Trade Centre (4th Floor), 6 Kemal Ataturk Avenue, Banani, Dhaka-1213', '774790208393', NULL, '', '+88 02 9820219-21', 'faisal@lankabangla.com', '+88 02 9822159', 'LankaBangla Asset Management Company Limited (Alternative Investment Fund Manager)', '0183000000657', 'One Bank Limited', '165260435', 'Banani', 'inst', 'Cash', '3182b90b54b27da4c94167b3f796e0b7', NULL, '2017-11-06 22:44:11', '2017-11-06 22:44:11'),
(14, 1, '200010000014', 'LankaBangla Asset Management Company Limited', 3, 'C-67738(289)/07', 'Praasad Trade Centre (4th Floor), 6 Kemal Ataturk Avenue, Banani, Dhaka-1213', '774790208393', NULL, '', '+88 02 9820219-21', 'faisal@lankabangla.com', '+88 02 9822159', 'LankaBangla Asset Management Company Limited', '0206150000001590', 'Dhaka Bank Limited', '085260436', 'Banani', 'inst', 'Cash', '96cd6d83400e837e4ff6dca1f1ec05af', NULL, '2017-11-06 22:54:45', '2017-11-06 22:54:45'),
(15, 1, '200010000015', 'M/S Raju Steel Enterprise ', 1, '0511677', '31/B-1 (3rd Floor), Swamibagh, Dhaka-1100', '896476953513', NULL, '', '01680365201', 'sumitpaul131@gmail.com', 'N/A', 'M/S Raju Steel Enterprise ', '0291010001173', 'Union Bank Ltd. ', '265260430', 'Banani', 'inst', 'CIP', '361e34f5dea3baf25a3521a1df1e0976', NULL, '2017-11-07 21:48:50', '2017-11-07 21:48:50'),
(16, 1, '200010000016', 'HFAML UNIT FUND', 3, 'BSEC/ MUTUAL FUND /2017/83', '138/1 Tejgaon Indusrial Area,Dhaka-1208', 'N/A', NULL, '', '028878009', 'info@hfassetmanagement.com', 'N/A', 'HFAML UNIT FUND', '0170145334041', 'IFIC BANK LTD', '120260559', 'BASHUNDHARA', 'mf', 'Cash', 'b49ac5fa2978a6707770d4f2543394f3', NULL, '2018-03-20 04:43:53', '2018-03-20 04:43:53'),
(17, 1, '200010000017', 'UCB Capital Management Limted', 4, 'C-69039', '6 Dilkusha , Motijheel C/A', '462538748435', NULL, '', '9558448', 'Sankor.paul@ucb.com.bd', '47119220', 'UCB Capital Management Limted', '0011301000001346', 'UCB', '245275353', 'Principal', 'inst', 'Cash', 'b1192f608855ef24ddb5402c6eb356ed', NULL, '2018-04-17 06:13:48', '2018-04-17 06:13:48'),
(18, 1, '200010000018', 'LANKABANGLA 1ST BALANCED UNIT FUND', 3, 'BSEC/MUTUAL FUND/2016/59', 'PRAASAD TRADE CENTRE(4TH FLOOR),6 KEMAL ATAURK AVENUE, BANANI C/A, DHAKA1213', '565656', 'N/A', '1213', '029820219-21', 'noor.alam@lankabangla.com', '029822159', 'LANKABANGLA 1ST BALANCED UNIT FUND', '0183000000464', 'ONE BANK LIMITED', '165260435', 'BANANI', 'mf', 'CIP', '9f2586ea8eac6a9fa1fb62118f0a8da3', NULL, '2019-04-07 21:23:23', '2020-06-24 04:15:46'),
(19, 1, '200010000019', 'HFAML ACME EMPLOYEES\' UNIT FUND', 5, 'BSEC/MUTUALFUND/2018/92', 'HF Asset Management Limited, RABBEE HOUSE, 2nd Floor, B-2, Building-B,House: CEN (B)-11, Road: 99,Gulshan-2, Dhaka-1212', 'N/A', 'N/A', '1212', '02-58815567', 'hf.acmeuf@hfassetmanagement.com', 'N/A', 'HFAML ACME EMPLOYEES\' UNIT FUND', '0170225788041', 'IFIC Bank Limited', '120260559', 'Bashundhara Branch', 'inst', 'Cash', 'be559ececa32c68efd42ca77b9f85c3b', NULL, '2020-09-30 18:43:33', '2020-09-30 18:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `investment_type`
--

CREATE TABLE `investment_type` (
  `INVESTMENT_TYPE_ID` bigint(20) UNSIGNED NOT NULL,
  `INVESTMENT_TYPE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment_type`
--

INSERT INTO `investment_type` (`INVESTMENT_TYPE_ID`, `INVESTMENT_TYPE`, `created_at`, `updated_at`) VALUES
(1, 'FDR', '2019-04-10 10:47:50', '2020-01-26 16:33:39'),
(2, 'Bonds', '2019-04-10 10:47:54', '2019-04-10 10:47:54'),
(3, 'Equity Stocks', '2019-04-10 10:48:13', '2019-04-10 10:48:13'),
(4, 'Placement', '2019-04-10 10:48:18', '2019-04-10 10:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `investment_type_setup`
--

CREATE TABLE `investment_type_setup` (
  `INVESTMENT_TYPE_SETUP_ID` bigint(20) UNSIGNED NOT NULL,
  `PRO_REG_ID` int(11) NOT NULL,
  `INVESTMENT_TYPE_ID` int(11) NOT NULL,
  `MAXLIMIT` double(7,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment_type_setup`
--

INSERT INTO `investment_type_setup` (`INVESTMENT_TYPE_SETUP_ID`, `PRO_REG_ID`, `INVESTMENT_TYPE_ID`, `MAXLIMIT`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 20.0000, '2019-04-17 08:13:10', '2020-01-27 10:59:00'),
(2, 1, 2, 20.0000, '2019-04-17 08:13:17', '2019-04-17 08:14:47'),
(3, 2, 1, 22.0000, '2019-04-17 08:13:25', '2019-04-17 08:13:25'),
(4, 3, 1, 23.0000, '2019-04-17 08:13:35', '2019-04-17 08:13:35'),
(5, 4, 1, 25.0000, '2019-04-17 09:43:36', '2019-04-17 09:43:36'),
(6, 3, 3, 30.0000, '2019-04-17 09:43:55', '2019-04-17 09:43:55'),
(7, 5, 1, 25.0000, '2019-10-16 11:39:37', '2019-10-16 11:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `investor_type`
--

CREATE TABLE `investor_type` (
  `INVESTOR_TYPE_ID` bigint(20) UNSIGNED NOT NULL,
  `INVESTOR_TYPE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FLAG` int(11) NOT NULL COMMENT '1 - indv & 2 - inst',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investor_type`
--

INSERT INTO `investor_type` (`INVESTOR_TYPE_ID`, `INVESTOR_TYPE`, `FLAG`, `created_at`, `updated_at`) VALUES
(1, 'General', 1, '2019-04-10 10:40:24', '2020-01-26 15:16:46'),
(2, 'Sponsor', 2, '2019-04-10 10:40:29', '2019-04-10 10:40:29'),
(3, 'Private Placement', 1, '2019-04-10 10:40:34', '2019-04-10 10:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `joint_applicant`
--

CREATE TABLE `joint_applicant` (
  `JOINT_APPLICANT_ID` bigint(20) NOT NULL,
  `REGISTRATION_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_FATHER_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_MOTHER_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_PRESENT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_PERMANENT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_NATIONAL_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_BIRTHDAY` date NOT NULL,
  `JOINT_TELEPHONE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_NATIONALITY` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_OCCUPATION` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JOINT_IMAGE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JOINT_APP_SIGN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JOINT_NID_IMG` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joint_applicant`
--

INSERT INTO `joint_applicant` (`JOINT_APPLICANT_ID`, `REGISTRATION_NO`, `JOINT_NAME`, `JOINT_FATHER_NAME`, `JOINT_MOTHER_NAME`, `JOINT_PRESENT_ADDRESS`, `JOINT_PERMANENT_ADDRESS`, `JOINT_NATIONAL_ID`, `JOINT_BIRTHDAY`, `JOINT_TELEPHONE`, `JOINT_NATIONALITY`, `JOINT_OCCUPATION`, `JOINT_IMAGE`, `JOINT_APP_SIGN`, `JOINT_NID_IMG`, `created_at`, `updated_at`) VALUES
(1, '300030000030', 'Jolma Khisa', 'Late Dr Bhaga Data Khisa', 'Sabita Khisa', 'HOUSE#29/B4, ROAD#04, DHAKA CANTONMENT RESIDENTIAL AREA', 'HOUSE#29/B4, ROAD#04, DHAKA CANTONMENT RESIDENTIAL AREA', '8428708150282', '1961-02-12', '01752951226', 'Bangladeshi', 'HOUSE WIFE', NULL, NULL, NULL, '2019-07-29 10:11:41', '2019-07-29 10:13:32'),
(2, '300010000061', 'Md. Maruful Hoque Chowdhury', 'Md. Masrul Hoque Chowdhury', 'Nurjahan Hoque Chowdhury', 'flat-5/B,House#03,Road-01,Sector-11,Uttara,Dhaka', 'flat-5/B,House#03,Road-01,Sector-11,Uttara,Dhaka', '1593525382872', '1986-06-14', '01716782126', 'Bangladeshi', 'Service', NULL, NULL, NULL, '2019-07-29 10:11:41', '2019-07-29 10:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `managementfee_rule`
--

CREATE TABLE `managementfee_rule` (
  `MANAGEMENTFEE_RULE_ID` bigint(20) UNSIGNED NOT NULL,
  `SPONSOR_ID` int(11) NOT NULL,
  `MAXLIMIT` double(7,4) NOT NULL,
  `PAYMENT_TERM_FLAG` int(11) NOT NULL COMMENT '1 - Monthly , 2 - Quarterly , 3 - Half Yearly & 4 - Annualy',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managementfee_rule`
--

INSERT INTO `managementfee_rule` (`MANAGEMENTFEE_RULE_ID`, `SPONSOR_ID`, `MAXLIMIT`, `PAYMENT_TERM_FLAG`, `created_at`, `updated_at`) VALUES
(1, 1, 0.0025, 2, '2019-04-10 10:41:20', '2020-01-26 15:25:24'),
(2, 2, 0.0050, 3, '2019-05-07 04:54:38', '2019-05-07 05:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_28_032420_create_portfoliotype_table', 1),
(4, '2019_04_01_161011_create_spon_table', 1),
(5, '2019_04_02_104708_create_asset_manager_table', 1),
(6, '2019_04_02_122750_create_trustee_table', 1),
(7, '2019_04_03_100137_create_auditor_table', 1),
(8, '2019_04_03_155116_create_custodian_table', 1),
(9, '2019_04_03_171333_create_bank_table', 1),
(11, '2019_04_04_142124_create_district_account_table', 1),
(12, '2019_04_04_155014_create_agent_area_table', 1),
(13, '2019_04_04_172733_create_invt_table', 1),
(14, '2019_04_06_112538_create_mfr_table', 1),
(15, '2019_04_06_125952_create_custfr_table', 1),
(16, '2019_04_06_142304_create_trf_table', 1),
(17, '2019_04_06_150613_create_aplctry_table', 1),
(18, '2019_04_06_155003_create_crncy_table', 1),
(19, '2019_04_08_104224_create_investment_type_table', 1),
(23, '2019_04_10_122213_create_inv_typ_stup_table', 3),
(46, '2019_05_21_125243_create_prnc_apl_table', 15),
(47, '2019_05_21_125425_create_nominee_table', 16),
(48, '2019_05_21_125507_create_joint_apl_table', 17),
(49, '2019_06_27_123157_create_inst_app_table', 18),
(51, '2019_06_27_162403_create_auth_per_table', 19),
(61, '2019_09_18_153618_create_as_price_rate_table', 26),
(62, '2019_04_09_111403_create_port_reg_table', 27),
(64, '2019_05_05_122436_create_sa_table', 28),
(65, '2019_05_08_121008_create_sc_table', 29),
(66, '2019_09_17_100414_create_as_sc_table', 30),
(70, '2019_09_22_144022_create_funds_table', 33),
(75, '2019_09_16_124655_create_unit_purchase_table', 34),
(76, '2019_09_16_125346_create_unit_sell_table', 35),
(77, '2019_09_25_154006_create_buy_sell_commission_table', 36),
(79, '2019_04_04_103133_create_bank_account_table', 37),
(82, '2014_10_12_000000_create_users_table', 38),
(83, '2019_05_02_111959_create_permission_tables', 39);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 5),
(2, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 5),
(2, 'App\\User', 7),
(2, 'App\\User', 8),
(3, 'App\\User', 3),
(3, 'App\\User', 8),
(4, 'App\\User', 1),
(4, 'App\\User', 4),
(4, 'App\\User', 5),
(4, 'App\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `nominee_info`
--

CREATE TABLE `nominee_info` (
  `NOMINEE_INFO_ID` bigint(20) NOT NULL,
  `REGISTRATION_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_FATHER_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_MOTHER_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RELATION_APPLICANT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_PRESENT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_PERMANENT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_NATIONAL_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_BIRTHDAY` date NOT NULL,
  `NOM_TELEPHONE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_COUNTRY` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_OCCUPATION` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_IMAGE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOM_APP_SIGN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOM_NID_IMG` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nominee_info`
--

INSERT INTO `nominee_info` (`NOMINEE_INFO_ID`, `REGISTRATION_NO`, `NOM_NAME`, `NOM_FATHER_NAME`, `NOM_MOTHER_NAME`, `RELATION_APPLICANT`, `NOM_PRESENT_ADDRESS`, `NOM_PERMANENT_ADDRESS`, `NOM_NATIONAL_ID`, `NOM_BIRTHDAY`, `NOM_TELEPHONE`, `NOM_COUNTRY`, `NOM_OCCUPATION`, `NOM_IMAGE`, `NOM_APP_SIGN`, `NOM_NID_IMG`, `created_at`, `updated_at`) VALUES
(1, '100010000087', 'SABINA YASMIN', 'KAYES MAHMUD', 'MST SHAHIDA BEGUM', 'SPOUSE', '6/37, ROAD-2 SHEKHERTECK , MOHAMMADPUR DHAKA', '6/37, ROAD-2 SHEKHERTECK , MOHAMMADPUR DHAKA', '8714371218133', '1983-10-20', '+8801911041347', '00', 'HOUSEWIFE', NULL, NULL, NULL, '2019-07-28 10:22:12', '2020-06-28 08:49:15'),
(2, '100010000094', 'Chandan Wasif', 'Subal Chandra Saha', 'Sunita Rani Saha', 'Spouse', 'Level-6, 301/A Free School Street, Kathal Bagan Dhal', 'Level-6, 301/A Free School Street, Kathal Bagan Dhal', '2691651427715', '1987-02-05', '1976171914', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:12', '2020-06-29 06:25:50'),
(3, '100010000095', 'Gul Nahar', 'Mohammad Golam Kibria', 'Monowara Begum', 'Wife', 'House no: 02, Road no: 09, Block: B, Section: 13, P.O.: Kafrul, Mirpur', 'House no: 02, Road no: 09, Block: B, Section: 13, P.O.: Kafrul, Mirpur', '4605429879', '1981-12-20', '1711614308', '00', 'Housewife', NULL, NULL, NULL, '2019-07-28 10:22:12', '2020-06-29 06:25:18'),
(4, '100010000096', 'Md. Arsad Hossain', 'Md. Laiju Mia', 'Rokeya Begum', 'Uncle', '56/1 Nasir Uddin Sardar Lane, Sutrapur, Dhaka- 1100', '56/1 Nasir Uddin Sardar Lane, Sutrapur, Dhaka- 1100', '6419013245', '1970-12-12', '+8801912974307', '0', 'Business', NULL, NULL, NULL, '2019-07-28 10:22:12', '2020-06-29 06:30:54'),
(5, '100010000097', 'Tahamina Begum Ruma', 'Md. Mahbub Alam', 'Monwara Begum', 'Wife', 'House 10, Kathalbagan, Dhanmondi', 'House 10, Kathalbagan, Dhanmondi', '2691650142133', '1977-04-25', '01715577577', '00', 'House Wife', NULL, NULL, NULL, '2019-07-28 10:22:12', '2020-06-22 03:32:28'),
(6, '100010000098', 'Boishakhi Shahin Pushpo', 'Md. Habibur Rahman', 'Jahanara Khatun', 'Wife', 'Marico Bangladesh Ltd. The Glass House, Plot-02, Block: SE(B)', 'Marico Bangladesh Ltd. The Glass House, Plot-02, Block: SE(B)', '19932695411000471', '1993-10-04', '1711541785', '00', 'House Wife', NULL, NULL, NULL, '2019-07-28 10:22:12', '2020-06-22 03:45:27'),
(7, '100010000100', 'Mehreen Islam', 'AKM Ziaul Islam', 'Momena Rashid', 'Daughter', '31-32 Shoarighat Road, 1st Floor North', '31-32 Shoarighat Road, 1st Floor North', 'BM0600186', '2007-07-12', '02-57310793', '00', 'Student', NULL, NULL, NULL, '2019-07-28 10:22:12', '2019-07-28 10:22:12'),
(8, '100010000104', 'MST. RAHIMA BEGUM', 'ROKON UDDIN', 'GOLAPCHAN', 'Mother', '36/B Jhigatola, Tannery Block, Dhaka-1209', '36/B Jhigatola, Tannery Block, Dhaka-1209', '2845455423', '1957-04-05', '01819878824/9676834', '00', 'Housewife', NULL, NULL, NULL, '2019-07-28 10:22:12', '2019-07-28 10:22:12'),
(9, '100010000109', 'Md. Bazlur Rashid(Munna)', 'MD BAZLUR RASHID', 'Mst. Momtaz Begum', 'Son', 'VILL:KAZKANDA,P.O: RAJBARI, DIST: RAJBARI', 'VILL:KAZKANDA,P.O: RAJBARI, DIST: RAJBARI', '8227605116259', '1962-11-25', '01722121760', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:12', '2019-07-28 10:22:12'),
(10, '100010000003', 'MD ELEYEAS UR RASHID (RATUL)', 'MD BAZLUR RASHID', 'MRS FATHEMA RASHID', 'SON', 'VILL:KAZKANDA,P.O: RAJBARI, DIST: RAJBARI', 'VILL:KAZKANDA,P.O: RAJBARI, DIST: RAJBARI', '19928227605000073', '1992-10-28', '01722121760', '00', 'Student', NULL, NULL, NULL, '2019-07-28 10:22:12', '2020-06-24 10:03:15'),
(11, '100010000004', 'JABA DATTA', 'SANJAY KUMAR DATTA', 'SHIBANI RANI DATTA', 'SPOUSE', 'FLAT#I-10, BAILY RITZ,1 NEW BAILY ROAD,RAMNA,DHAKA-1217', 'FLAT#I-10, BAILY RITZ,1 NEW BAILY ROAD,RAMNA,DHAKA-1217', '19812696536931331', '1981-01-02', '01819243162', '00', 'Service', NULL, NULL, '100010000004nom_nid.jpg', '2019-07-28 10:22:12', '2020-06-24 10:06:38'),
(12, '100010000005', 'Mrs. Bonna', 'Md. Shohel Molla', 'Safali Begum', 'Spouse', 'Vill: Datapur, Post:Chiter Bazar, Upozilla: Boalmari, District: Faridpur', 'Vill: Datapur, Post:Chiter Bazar, Upozilla: Boalmari, District: Faridpur', '2911830375221', '1988-01-30', '01736857234', '00', 'House Wife', NULL, NULL, '100010000005nom_nid.jpg', '2019-07-28 10:22:12', '2020-06-24 10:08:54'),
(13, '100010000006', 'Moutushi Afrin', 'Late Gazi Afzal Hossain', 'Lutfunnesa', 'Daughter', 'House No.57, Road No.06, Mohammadi Housing Society, Mohammadpur.', 'House No.57, Road No.06, Mohammadi Housing Society, Mohammadpur.', 'N/A', '1991-11-25', '01677038865', '00', 'Service', NULL, NULL, '100010000006nom_nid.JPG', '2019-07-28 10:22:12', '2020-06-24 10:12:10'),
(14, '100010000007', 'Roksana Chowdhuri Nupur', 'Md. Nahidul Islam Prodhan', 'Nasrin Chowdhuri', 'Spouse', 'Vill: Matiarpara, PO:Kaliganj, PS:Debiganj, District: Panchagarh', 'Vill: Matiarpara, PO:Kaliganj, PS:Debiganj, District: Panchagarh', '19937323606000054', '1993-12-10', '01717138354', '00', 'Student', NULL, NULL, NULL, '2019-07-28 10:22:12', '2020-06-24 10:15:37'),
(15, '100030000008', 'Mousumi Das Gupta', 'Debasish Das', 'Rina Das Gupta', 'wife', 'House-29,Road-12, Sector-13, Uttara, Dhaka-1230', 'House-29,Road-12, Sector-13, Uttara, Dhaka-1230', '2691650134101', '1981-08-28', '01534799537', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:12', '2019-07-28 10:22:12'),
(16, '100010000001', 'NOWSHER NISAAT', 'NASIR UDDIN AHMED', 'LATE SORAIYA BEGOM', 'SPOUSE', 'SHAPLA HOUSE,161/3 BAGANBARI (NORTH VASHANTEK) DHAKA CANTT, DHAKA-1206, BANGLADESH', 'SHAPLA HOUSE,161/3 BAGANBARI (NORTH VASHANTEK) DHAKA CANTT, DHAKA-1206, BANGLADESH', '19692693015007189', '1969-01-06', '01711-908420', '00', 'House Wife', '738068267.download.jpg', '349635772.download.jpg', '100010000001nom_nid.jpg', '2019-07-28 10:22:12', '2020-07-23 06:35:36'),
(17, '100010000002', 'AMBAREEN CHOWDHURY', 'SM MAHMUD HUSSAIN', 'LUTFUN SHAMS', 'SPOUSE', 'ROAD-3,HOUSE-21,FLAT-5/A,BANANI (DOHS), DHAKA', 'ROAD-3,HOUSE-21,FLAT-5/A,BANANI (DOHS), DHAKA', '2650898637609', '1972-10-28', '01727070707', '00', 'HOUSE-WIFE', NULL, NULL, '100010000002nom_nid.jpg', '2019-07-28 10:22:12', '2020-06-24 09:56:04'),
(18, '100010000009', 'Fatima Khanam', 'Sheikh Motiur Raman', 'Firoza Begum', 'Mother', '95, College Road, Narayanganj-1400', '95, College Road, Narayanganj-1400', '6725804351485', '1953-02-22', '01979482481', '00', 'House wife', NULL, NULL, '100010000009nom_nid.jpg', '2019-07-28 10:22:12', '2020-06-24 10:29:47'),
(19, '100020000010', 'SABIKUNNAHER CHAITI', 'SYED WAJEDUL KARIM', 'SHEREEN AKTHER', 'HUSBAND', 'CHA-189,3RD FLOOR, MOHAKHALI, WIRELESSGATE, DHAKA', 'CHA-189,3RD FLOOR, MOHAKHALI, WIRELESSGATE, DHAKA', '19932692620000539', '1993-04-15', '01944124966', '00', 'HOUSE WIFE', NULL, NULL, NULL, '2019-07-28 10:22:12', '2019-07-28 10:22:12'),
(20, '100030000011', 'Shamsun Nahar', 'Reaz Uddin Ahmed', 'Hasina Bagum', 'Wife', '41,Chamelibagh ( Shantinagar) Green PeacApt. Tower-1,Flat-B/13, Dhaka', '41,Chamelibagh ( Shantinagar) Green PeacApt. Tower-1,Flat-B/13, Dhaka', '6725806398167', '1974-02-27', '01713047483', '00', 'Housewife', NULL, NULL, NULL, '2019-07-28 10:22:12', '2019-10-27 03:38:47'),
(21, '100020000012', 'JOYSRE DAS', 'ASHUTOSH CHOWDHURY', 'ALO DAS', 'HUSBAND', 'HOUSE- 18, ROAD- 03, BLOCK- E, BANASREE, RAMPURA', 'HOUSE- 18, ROAD- 03, BLOCK- E, BANASREE, RAMPURA', '1594121349190', '1987-10-28', '01742721028', '00', 'HOUSE WIFE', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(22, '100010000013', 'Suhani Choudhury', 'Khalil Bin Wahid', 'Late Ruhela Khanom Chowdhury', 'Spouse', 'House-27(1A),Road-11,Block-F,Banani,Dhaka-1213', 'House-27(1A),Road-11,Block-F,Banani,Dhaka-1213', '2692619582474', '1973-04-18', '01819221188', '00', 'Teacher', NULL, NULL, '100010000013nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-24 10:40:13'),
(23, '100010000014', 'Tanipa Wadud', 'Syed Golam Wadud', 'Shahida Begum', 'Spouse', '797 Ibrahimpur,Dhaka Cantt.,Kafrul, Dhaka', '797 Ibrahimpur,Dhaka Cantt.,Kafrul, Dhaka', '2693016119687', '1960-04-22', '01711565788', '00', 'House-Wife', NULL, NULL, '100010000014nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-24 10:42:25'),
(24, '100010000015', 'Tania Akhter', 'Late Tahsin Uddin Ahmed', 'Mst. Amina Begum', 'Spouse', '71/2, Circuit House Road, Kakrail, Dhaka-1000', '71/2, Circuit House Road, Kakrail, Dhaka-1000', '2695434704432', '1967-01-01', '01713039435', '00', 'House-Wife', NULL, NULL, '100010000015nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-24 11:40:15'),
(25, '100010000016', 'Syeda Roushan Tasnim', 'Sufi Md. Zakaria', 'Nasima Khatoon', 'Spouse', '83,Malitola Road,1st Floor,Dhaka,1100', '83,Malitola Road,1st Floor,Dhaka,1100', '2694071187465', '1957-07-10', '95-62521', '00', 'House-Wife', NULL, NULL, '100010000016nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-24 11:44:36'),
(26, '100070000017', 'NAHIDA SULTANA', 'MD ARIFUL ISLAM', 'AYESHA BEGUM', 'WIFE', 'J.C ROAD, DHANBANDI, SIRAJGONJ-6700', 'J.C ROAD, DHANBANDI, SIRAJGONJ-6700', '2695047018381', '1984-04-01', '01717305266', '00', 'SERVICE', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(27, '100040000018', 'GOURI PAUL CHOWDHURY', 'KANAKENDU PAUL CHOWDHURY', 'AROTI BHATACHIRJO', 'MOTHER', 'MADHABI BHABAN, NAYABER PUKUR PAR, HABIGONJ', 'MADHABI BHABAN, NAYABER PUKUR PAR, HABIGONJ', '3624404244296', '1964-01-01', '01740965333', '00', 'HOUSE WIFE', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-22 03:37:40'),
(28, '100010000019', 'Mst. Sabina Begum', 'Md. ABUL Bashar', 'Hasina Begum', 'Sister', 'Vill: Malora(Shah Aulia Bari),PO:Meher-3620, PS:Shahrasti, District:Chandpur', 'Vill: Malora(Shah Aulia Bari),PO:Meher-3620, PS:Shahrasti, District:Chandpur', '1319582752719', '1983-01-01', '01772844795', '00', 'House -Wife', NULL, NULL, '100010000019nom_nid.jpg', '2019-07-28 10:22:13', '2020-08-10 01:13:18'),
(29, '100010000020', 'Moutushi Afrin', 'Late Gazi Afzal Hossain', 'Lutfunnesa', 'Sister', 'House No.57, Road No.06, Mohammadi Housing Society, Mohammadpur.', 'House No.57, Road No.06, Mohammadi Housing Society, Mohammadpur.', 'N/A', '1991-11-25', '01677038865', '00', 'Service', NULL, NULL, '100010000020nom_nid.JPG', '2019-07-28 10:22:13', '2020-06-24 11:52:51'),
(30, '100020000021', 'SAMIA RUPONTI', 'A T M RASHIDUZZAMAN', 'SHAHANARA BEGUM', 'DAUGHTER', 'FLAT # 1511, BLOCK # B, MOTALIB PLAZA, 8 PARIBAG, DHAKA', 'FLAT # 1511, BLOCK # B, MOTALIB PLAZA, 8 PARIBAG, DHAKA', '', '1993-10-05', '01552342952', '00', 'STUDENT', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(31, '100010000022', 'Sukshana Sarker', 'Chowdhury Suvasish Paul Bibak', 'Putul Sarker', 'Spouse', 'Tangail Homio Hall,Cerimic Road,Vagulpur, Savar, Dhaka', 'Tangail Homio Hall,Cerimic Road,Vagulpur, Savar, Dhaka', '5624603112973', '1981-06-26', '01818400499', '00', 'House-Wife', NULL, NULL, '100010000022nom_nid.JPG', '2019-07-28 10:22:13', '2020-06-24 11:56:35'),
(32, '100010000023', 'Mrs. Hasina Akther', 'Sharif Anisur Rahman', 'Late Mrs. Ashguri Begum', 'Spouse', 'Flat#405(3rd Floor), House#10, Road#08, Gulshan-01, Dhaka-1212', 'Flat#405(3rd Floor), House#10, Road#08, Gulshan-01, Dhaka-1212', '2692619559729', '1957-06-06', '01199844519', '00', 'sharifrahman2011@gmail.com', NULL, NULL, '100010000023nom_nid.JPG', '2019-07-28 10:22:13', '2020-06-24 12:02:21'),
(33, '100010000024', 'Dr. Suhana Nazmin', 'Major Sakir Ahmed (Retd)', 'Begum Sharifa Akhter', 'Spouse', '\"Baitur Ruhm\", 33/3, Mujgunni Uttar Para, Khulna', '\"Baitur Ruhm\", 33/3, Mujgunni Uttar Para, Khulna', '4756998751196', '1976-01-01', '01553218541', '00', 'BCS Officer (Health)', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-24 12:06:17'),
(34, '100010000033', 'Mrs. Sirajum Munira Sahariar', 'Md. Sahariar Khan', 'Mamtaj Begum', 'Spouse', 'House No. 376/1,Gulbagh, P.O. Shantinagar-1217,Motijheel,Dhaka', 'House No. 376/1,Gulbagh, P.O. Shantinagar-1217,Motijheel,Dhaka', 'N/A', '1982-02-13', '01610002969', '00', 'House-Wife', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-24 12:32:18'),
(35, '100010000034', 'Hannan Molla', 'Malak Molla', 'Shearon Nesa', 'Father', 'Vill:Solna, Thana+Post:Boalmari ,District:Faridpur', 'Vill:Solna, Thana+Post:Boalmari ,District:Faridpur', '2921807285251', '1960-09-13', '01732-322806', '00', 'Business', NULL, NULL, '100010000034nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-24 12:34:00'),
(36, '100030000035', 'SOHELI SULTANA LABONI', 'MD. EHSANUL KABIR', 'MST. SUFIA BEGUM', 'SPOUSE', '78/F, HASNA HENA, OFFRS QUATER, PANTHOPARA, JESSORE CANTONMENT', '78/F, HASNA HENA, OFFRS QUATER, PANTHOPARA, JESSORE CANTONMENT', '2650898950928', '1981-02-01', '01769555599', '00', 'SERVICE', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(37, '100020000036', 'FATEMA AHMED', 'ADEL AHMED', 'ROWSHAN ARA KHAN', 'WIFE', 'HOUSE - 87, ROAD - 6 B, OLD DOHS, DHAKA CANTONMENT, DHAKA', 'HOUSE - 87, ROAD - 6 B, OLD DOHS, DHAKA CANTONMENT, DHAKA', '19762650898000040', '1976-03-27', '01730017585', '00', 'HOUSE WIFE', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(38, '100050000037', 'NAZMA NIGER', 'RAFIQ AHMED', 'HOSNE NOOR BEGUM', 'WIFE', 'HOUSE#11(2ND FLOOR),ROAD#02,BLOCK-A,HALISHAHAR HOUSING ESTATE,CHITTAGONG.', 'HOUSE#11(2ND FLOOR),ROAD#02,BLOCK-A,HALISHAHAR HOUSING ESTATE,CHITTAGONG.', '1595511695025', '1981-01-15', '01912513818', '00', 'TEACHING', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(39, '100030000041', 'Asma Siddika', 'Wasef Nowsher', 'Haresha Begum', 'Wife', 'DO', 'DO', '2650898235841', '1986-12-03', '01755534682', '00', 'House Wife', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(40, '100030000042', 'Maksuda Khanam', 'Late Mohammad Anisur Rahman khan', 'Morium Begum', 'Mother', 'DO', 'DO', '2693622291110', '1954-05-26', '01712148877', '00', 'House Wife', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(41, '100010000043', 'Sheikh Nasirul Islam Sagor', 'Sheikh Nurul Islam', 'Mrs. Mita Islam', 'Spouse', '6/4 Salimullah Road,(Ground Floor), Mohammadpur,Dhaka', '6/4 Salimullah Road,(Ground Floor), Mohammadpur,Dhaka', '4711271825207', '1983-08-02', '01717034441', '00', 'Service', NULL, NULL, '100010000043nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-25 09:37:00'),
(42, '100010000044', 'Nurjahan Akhter', 'S M Farhad', 'Sufia Khatoon', 'Husband', 'Flat # A4, H No# 25, Rd No# 16, Sec No# 3, Uttara', 'Flat # A4, H No# 25, Rd No# 16, Sec No# 3, Uttara', '19762695044898640', '1976-10-01', '01713367892', '00', 'House Wife', NULL, NULL, '100010000044nom_nid.JPG', '2019-07-28 10:22:13', '2020-06-25 09:40:38'),
(43, '100010000045', 'Sittul Muna', 'Siraj Uddin Ahmed', 'Helene Rahman', 'Husband', 'Muslim Girls High School, Mymansingh', 'Muslim Girls High School, Mymansingh', 'N/A', '1968-01-01', '01712768168', '00', 'N/A', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-25 11:27:00'),
(44, '100010000046', 'Syed Zharif Uddin Ahmed', 'Lt. Col. Syed Zakir Uddin Ahmed', 'Jahanara Begum', 'SON', 'House#27, Road#11, Block# F, Banani,Dhaka', 'House#27, Road#11, Block# F, Banani,Dhaka', 'N/A', '1994-02-12', '01711824935', '00', 'Student', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-25 09:49:40'),
(45, '100010000025', 'Laila Nur Akter', 'Late Foyez Ahmed Sikdar', 'Ayesha Siddique', 'Spouse', 'Flat A-1, Sky View Tower, 19 Naya Paltan, Dhaka', 'Flat A-1, Sky View Tower, 19 Naya Paltan, Dhaka', '19772696536091196', '1977-01-01', '01926688770', '00', 'House-Wife', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-24 12:15:11'),
(46, '100010000028', 'Taslima Ferdous', 'Muhammad Alamgir', 'Anowara Begum', 'Husband', 'Flat#B4, House#07, Road#04, DOHS Banani,', 'Flat#B4, House#07, Road#04, DOHS Banani,', '2650898249900', '1967-12-21', '1715343330', '00', 'Doctor', NULL, NULL, '100010000028nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-24 12:25:11'),
(47, '100010000029', 'Muhammad Alamgir', 'Dr. Abdus Sobhan', 'Mrs. Rahima Akhter', 'Wife', 'Flat#B4, House#07, Road#04, DOHS Banani,', 'Flat#B4, House#07, Road#04, DOHS Banani,', '2650898233238', '1960-12-31', '1713040878', '00', 'Business', NULL, NULL, '100010000029nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-24 12:26:46'),
(48, '300030000030', 'PADMASREE CHAKMA', 'MAJOR TAPAN BIKASH CHAKMA (RETD)', 'JOLMA KHISA', 'DAUGHTER', 'HOUSE#29/B4, ROAD#04, DHAKA CANTONMENT RESIDENTIAL AREA', 'HOUSE#29/B4, ROAD#04, DHAKA CANTONMENT RESIDENTIAL AREA', '19962650898048310', '1996-09-04', '8715714', '00', 'STUDENT', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-09-29 04:18:45'),
(49, '100020000031', 'DILRUBA AKHTER', 'MOHAMMAD ARIFUL HOQUE MOLLIQ', 'SHAMSUN NAHAR', 'WIFE', 'HOUSE-11/C, ROAD-01, PC CULTURE HOUSING SOCIETY,MOHAMMADPUR,DHAKA-1207,', 'HOUSE-11/C, ROAD-01, PC CULTURE HOUSING SOCIETY,MOHAMMADPUR,DHAKA-1207,', '', '1978-01-20', '01730358001', '00', 'HOUSE WIFE', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(50, '100010000054', 'Shahida Afroze', 'Md. Anisur Rahman', 'Mrs. Delara Haque', 'Wife', 'House-1168 (1st Floor), Block-B, West Chowdhury para, P.O. Khilgaon', 'House-1168 (1st Floor), Block-B, West Chowdhury para, P.O. Khilgaon', '2693623607655', '1971-09-01', '029341888', '00', 'House Wife', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-28 07:37:26'),
(51, '100010000026', 'N/A', 'N/A', 'N/A', 'N/A', 'Level-13, 8 Panthopoth, Dhaka', 'Level-13, 8 Panthopoth, Dhaka', 'N/A', '1984-12-15', '01731147431', '00', 'N/A', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-24 12:20:42'),
(52, '100010000027', 'NOSHIN TARANNUM', 'MD.ABDUL QUDDUS', 'AKLIMA KHATUN', 'DAUGHTER', 'HOUSE#59,ROAD#2,BLOCK#E,SHAHJALAL UPASHAHAR', 'HOUSE#59,ROAD#2,BLOCK#E,SHAHJALAL UPASHAHAR', 'BA  0214382', '1997-12-27', '0821-721345', '00', 'STUDENT', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-24 12:23:08'),
(53, '100010000032', 'Mashroor Hassan', 'Parvez Hasan', 'Fedousi Akhter', 'SON', 'APT- 5A, House -504, Rd-09, Baridhara DOHS Dhaka Cantonment', 'APT- 5A, House -504, Rd-09, Baridhara DOHS Dhaka Cantonment', 'N/A', '1993-02-15', '8611891', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-24 12:30:00'),
(54, '100010000038', 'Mrs. Wahida Nafis', 'Md. Nafisur Rahman', 'Mrs. Laila Rahman', 'Spouse', 'House No.180, Rd No. 2, New D.O.H.S, Mohakhali, Dhaka', 'House No.180, Rd No. 2, New D.O.H.S, Mohakhali, Dhaka', '2650898509694', '1974-07-20', '01711-526036', '00', 'Teaching', NULL, NULL, '100010000038nom_nid.JPG', '2019-07-28 10:22:13', '2020-06-25 08:58:34'),
(55, '100010000039', 'Nahid Akter', 'Mohammed Nasir Uddin Chowdhury', 'Syeda Momtaz Begum', 'Spouse', 'Flat#11A, Shanta Digonto,33A Paribagh ,Dhaka', 'Flat#11A, Shanta Digonto,33A Paribagh ,Dhaka', '2696536328639', '1975-01-01', '01755528121', '00', 'House-Wife', NULL, NULL, '100010000039nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-25 09:18:10'),
(56, '100010000040', 'Marry Linda Gomes Master', 'Anthony D Costa', 'Mildred Gomes Master', 'Spouse', 'Camellia Apptt. No.# C-1,67,Tejkuni Para, Tejgaon Dhaka-1215', 'Camellia Apptt. No.# C-1,67,Tejkuni Para, Tejgaon Dhaka-1215', '2699039522315', '1970-02-23', '01713031996', '00', 'Teacher', NULL, NULL, '100010000040nom_nid.JPG', '2019-07-28 10:22:13', '2020-06-25 09:33:27'),
(57, '100070000048', 'ABDUL LATIF BAPARI', 'BILLAT ALI BEPARI', 'LATE SONA BANU', 'FATHER', 'TRIMONI TEKPARA, NONDIPARA, DHAKA-1203', 'TRIMONI TEKPARA, NONDIPARA, DHAKA-1203', '2696830910451', '1960-01-01', '01726970807', '00', 'SERVICE', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(58, '100010000049', 'Mahmuda Mahbub Mou', 'Shah Mahbubur Rahman', 'Zahida Begum', 'Sister', 'C-13/8, Taltola Govt. Colony, Agargaon, Dhaka.', 'C-13/8, Taltola Govt. Colony, Agargaon, Dhaka.', '2695041732584', '1980-01-18', '01791613663', '00', 'House-Wife', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-02-11 10:18:13'),
(59, '100030000050', 'LUBNA YESMIN', 'MD. SHAHIDUL ISALM', 'ROZI RAHMAN', 'WIFE', 'HOUSE#36/B, ROAD NO#02, BLOCK#D, BASHANDHURA  RA, DHAKA-1229', 'HOUSE#36/B, ROAD NO#02, BLOCK#D, BASHANDHURA  RA, DHAKA-1229', '6155298367024', '1979-06-01', '01730313233', '00', 'HOUSEWIFE', NULL, NULL, NULL, '2019-07-28 10:22:13', '2019-07-28 10:22:13'),
(60, '100010000051', 'Ishrat Jahan', 'Arifur Rahman', 'Forida Mohshin', 'Spouse', 'House no-69, Road no-19, Sector-11, Uttara', 'House no-69, Road no-19, Sector-11, Uttara', '2619551197554', '1973-12-18', '+8801819215912', '00', 'House -Wife', NULL, NULL, '100010000051nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-28 07:32:07'),
(61, '100010000047', 'Zeba Sultana', 'Md Shameem Alam Bakhshi', 'Rowshan Fatema', 'Wife', '7/B Al-Hera Tower, Ka-86/1/A Kuratoli, P O-Khilkhet-1229, Dhaka', '7/B Al-Hera Tower, Ka-86/1/A Kuratoli, P O-Khilkhet-1229, Dhaka', 'N/A', '1970-12-22', '01712-222436', '00', 'House wife', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-02-11 10:17:23'),
(62, '100010000052', 'Shipra Paul', 'Subash Paul', 'Jutsna Paul', 'Mother', '31/B-1,Swamibagh (3rd Floor),Dhaka', '31/B-1,Swamibagh (3rd Floor),Dhaka', '2698876301222', '1962-09-15', '01911593774', '00', 'House-Wife', NULL, NULL, '100010000052nom_nid.jpg', '2019-07-28 10:22:13', '2020-06-28 07:34:03'),
(63, '100010000053', 'Mina Roy', 'Late Saroj Kumer Guha Roy', 'Late Roy', 'Mother', 'House#34/6,5th Floor ,Road#03,Shaymoli, Dhaka', 'House#34/6,5th Floor ,Road#03,Shaymoli, Dhaka', 'N/A', '1951-01-17', '01717-413245', '00', 'House-Wife', NULL, NULL, NULL, '2019-07-28 10:22:13', '2020-06-28 07:35:15'),
(64, '100010000055', 'sasdf', 'hntfgjg', 'dhtj', 'brother', 'ghththy', 'ghththy', '5636536', '1942-06-02', '2343546', '00', 'wfeg', NULL, NULL, '100010000055nom_nid.jpg', '2019-07-28 10:22:14', '2020-06-28 07:38:59'),
(65, '100010000056', 'Mousumi Hoque Mitu', 'Md. Mofazzel Hoque Sarder', 'Sufia Begum', 'wife', 'Flat#D5, House#03, Road#10, Dhanmondi, Dhaka-1205', 'Flat#D5, House#03, Road#10, Dhanmondi, Dhaka-1205', '2691649108141', '1982-11-06', '01911310208', '00', 'Engineer', NULL, NULL, '100010000056nom_nid.jpg', '2019-07-28 10:22:14', '2020-06-28 07:41:17'),
(66, '100010000057', 'Md. Kahir Mahmood', 'Late M.A Khalique', 'Begum Kamrun Nahar', 'Husband', 'Apt-103,2/6 Shahjahan Road Mohammadpur', 'Apt-103,2/6 Shahjahan Road Mohammadpur', '2695042642693', '1963-08-09', '01726685550', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 07:43:54'),
(67, '300010000061', 'Md. Maruful Hoque Chowdhury', 'Md. Masrul Hoque Chowdhury', 'Nurjahan Hoque Chowdhury', 'Husband', 'flat-5/B,House#03,Road-01,Sector-11,Uttara,Dhaka', 'flat-5/B,House#03,Road-01,Sector-11,Uttara,Dhaka', '1593525382872', '1986-06-14', '01716782126', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:14', '2019-07-29 10:13:08'),
(68, '100010000062', 'TAHSEEN NABI', 'MUSTAFIZUR RAHMAN', 'ATIA MAHBUB', 'Wife', 'Add Park, Home#38, Flat#5B, Road# 13/A, Dhanmondi, Dhaka', 'Add Park, Home#38, Flat#5B, Road# 13/A, Dhanmondi, Dhaka', '2696653268679', '1970-02-18', '01713007995', '00', 'House-wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 07:57:18'),
(69, '100010000063', 'Mst Monjura Yesmin', 'MOHAMMAD KHALED HOSSAIN CHOUDHURY', 'Mrs Kohinur Rahman', 'Spouse', 'Do', 'Do', '2726401103171', '1980-12-20', '01819506905', '00', 'House-Wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 07:59:11'),
(70, '100010000064', 'Shafia Chowdhury', 'M. Eusuf Chowdhury', 'Late Rafia Chowdhury', 'Mother', 'Do', 'Do', '2692619464807', '1954-10-15', '01713012520', '00', 'House-wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:01:35'),
(71, '100010000065', 'Laila Jesmin Khan', 'Muhammad Faruque Hussain', 'Late Noor Jahan Begum', 'Wife', 'House # 45, Rd # 11, Sector #10, Uttara Model Town', 'House # 45, Rd # 11, Sector #10, Uttara Model Town', '2650898485494', '1964-02-01', '1914217319', '00', 'House-wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:03:00'),
(72, '100010000066', 'MG Shamsun Nahar', 'Md Hakimuzzaman', 'Hamida Begum', 'spouse', '319 South Goran', '319 South Goran', '`2693625851522', '1978-02-02', 'N/A', '00', 'housewife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:04:59'),
(73, '100010000067', 'Md. Akkas Ali', 'Late Shamsuddin Mollah', 'Late Amerunnesa', 'Father', 'C-34/3, Mojidpur, Savar, Dhaka', 'C-34/3, Mojidpur, Savar, Dhaka', '2627207586353', '1950-04-18', '0000000', '00', 'Retired', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:07:23'),
(74, '100020000068', 'SHAMIMA JASMEEN', 'MUFAKHKHARUL ISLAM', 'ROWSHAN ARA BEGUM', 'SPOUSE', 'HOUSE # 107, ROAD # 7, MOHAMMADIA HOUSING LTD. ANINDYA ABASHIK AREA,MOHAMMADPUR', 'HOUSE # 107, ROAD # 7, MOHAMMADIA HOUSING LTD. ANINDYA ABASHIK AREA,MOHAMMADPUR', '2691651196731', '1964-12-13', '9125175', '00', 'HOUSE WIFE', NULL, NULL, NULL, '2019-07-28 10:22:14', '2019-07-28 10:22:14'),
(75, '100010000069', 'Syeda Farhana Hossain', 'Khandoker Anisur Rahman', 'Syeda Sharmin Hossain (Late)', 'Spouse', 'NDC, Mirpur Cant, Mirpur 12', 'NDC, Mirpur Cant, Mirpur 12', '2694813114986', '1979-04-18', '1711162459', '00', 'House-wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:09:33'),
(76, '100010000070', 'MEHNUZ TABASSUM', 'FERDOUS HASAN SALIM', 'AMINUL HAQ BHUIYAN', 'SPOUSE', 'APT 7C, 29/1 PURANA PALTAN, DHAKA', 'APT 7C, 29/1 PURANA PALTAN, DHAKA', '2650898264394', '1982-03-18', '01711384145', '00', 'HOUSE-WIFE', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:11:04'),
(77, '100010000071', 'Farjana Anwar Sumi', 'Md. Yasin Chowdhury', 'Jannatul Ferdous', 'Spouse', 'DO', 'DO', '19801594133000021', '1987-03-01', '01815885944', '00', 'House-Wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:13:39'),
(78, '100010000072', 'Umme Salma', 'Mohammad Habibur Rahman', 'Nasrin Akter', 'Wife', 'DO', 'DO', '1592827932889', '1985-01-18', '01730042512', '00', 'House-wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:16:42'),
(79, '100010000073', 'Khadija Begum Popy', 'Mohammad Shafiul Islam', 'Suraiya Begum', 'WIFE', 'DO', 'DO', '1594308933688', '1987-01-17', '01730339161', '00', 'House-wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-29 04:50:26'),
(80, '100010000074', 'Md. Zahedul Islam', 'Muhammad Abdus Salam', 'Sabila Begum', 'Sister', 'DO', 'DO', '546546356353453454', '1995-01-15', '01730339169', '00', 'Brother', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-29 04:51:03'),
(81, '100010000075', 'Tahmina Akter', 'Abdullah Al Mamun', 'Qumrun Nahar', 'WIFE', 'DO', 'DO', '1595707245552', '1986-01-19', '01730339174', '00', 'House-wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-29 04:51:48'),
(82, '100010000076', 'Jannatul Ferdous', 'Rashed Ahmed', 'Selina Begum', 'Spouse', 'ABC Heritage (4th floor),Team Ltd.3 Jashim Uddin Avenue,UttaraC/A,Dhaka', 'ABC Heritage (4th floor),Team Ltd.3 Jashim Uddin Avenue,UttaraC/A,Dhaka', '1593511697725', '1981-10-19', '01712350245', '00', 'House-Wife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:24:53'),
(83, '100010000058', 'Sabina Yesmin', 'MD KAHIR MAHMOOD', 'Nazma Rahman', 'Spouse', 'Shams tower apt-103, 2/6 Shahjahan Road, Mohammadpur, Dhaka-1207', 'Shams tower apt-103, 2/6 Shahjahan Road, Mohammadpur, Dhaka-1207', '2695042642692', '1984-07-10', '01720019165', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 07:45:21'),
(84, '100010000059', 'Urmila Majumder', 'Suvendu Saha', 'Manisha Majumder', 'Husband', 'Flat#8A-B, Plot#75, North Road, Dhanmondi, Dhaka', 'Flat#8A-B, Plot#75, North Road, Dhanmondi, Dhaka', '1594116382689', '1985-08-01', '1722195786', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 07:49:24'),
(85, '100010000060', 'Nahid', 'hygj', 'hgjmgc', 'hj', 'rttfgj', 'rttfgj', '19822617635375802', '1956-01-17', 'rghtrfgcjuh', '00', 'service', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 07:53:27'),
(86, '100010000077', 'SAMIN TAYYEB', 'ADNAN YUSUF CHOUDHURY', 'SYED ROKEYA TAYYEB', 'Wife', 'Flat -A/5,Road:12,Block-H,House-38,Banani.', 'Flat -A/5,Road:12,Block-H,House-38,Banani.', '6445337535', '1968-10-16', '8801711234383', '00', 'Home Maker', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:26:29'),
(87, '100010000078', 'NAHRIN NUSRAT', 'FUAD AHMED KHAN', 'MOHSEN ARA BEGUM', 'SPOUSE', 'TRUST BANK LIMITED, BANANI BRANCH, DELTA DALIA COMPLEX (1ST FLOOR) 36, KEMAL ATATURK AVENUE', 'TRUST BANK LIMITED, BANANI BRANCH, DELTA DALIA COMPLEX (1ST FLOOR) 36, KEMAL ATATURK AVENUE', '2693623433365', '1980-02-05', '01726227872', '00', 'HOUSEWIFE', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:28:02'),
(88, '100010000079', 'MD.MD. ABDUL MAZID', 'LATE ASIMUDDIN AHMED', 'LATE HAYATUNNNESSA', 'FATHER', '9/10 SALIMULLAH ROAD FLAT #301, MOHAMMADPUR,DHAKA', '9/10 SALIMULLAH ROAD FLAT #301, MOHAMMADPUR,DHAKA', '4193212620', '1940-05-29', '+8801841091491', '00', 'NONE', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:30:53'),
(89, '100010000080', 'MRS. LAILA YEASMIN', 'MD. IFTAKHER HOSSAIN', 'MRS. ABEDA BEGUM', 'SPOUSE', '1383/8/D, NOTUNBAG, TALTOLA, KHILGAON, DHAKA-1219', '1383/8/D, NOTUNBAG, TALTOLA, KHILGAON, DHAKA-1219', '3923603120076', '1982-12-14', '01718103593', '00', 'HOUSEWIFE', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:33:00'),
(90, '100010000081', 'SHARIQA HABIB', 'M. HABIB ULLAH', 'FARIDA AKTER', 'DAUGHTER', 'HOUSE# 251, ROAD #121, GULSHAN-1, DHAKA-1212', 'HOUSE# 251, ROAD #121, GULSHAN-1, DHAKA-1212', '1991865481911090', '1991-03-11', '+8801819223835', '00', 'STUDENT', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:35:47'),
(91, '100010000082', 'Sadia Afrin Limon', 'Istiak Mahmud', 'Tahmina Akter', 'Husband', 'Flat # B-2, House # 27, Road # 13, Sector # 6, Uttara', 'Flat # B-2, House # 27, Road # 13, Sector # 6, Uttara', '19906125210000019', '1990-12-15', '01737052220', '00', 'Homemaker', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:38:50'),
(92, '100010000083', 'MD.MISBAH UDDIN BHUIYAN', 'Late Hazi Abdul Hakim Bhuiyan', 'Moomochand Bhuiyan', 'Father', '87 B.C.C road,Wari Dhaka', '87 B.C.C road,Wari Dhaka', '3610267566341', '1954-11-30', '1711263351', '00', 'Businessman', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:40:24'),
(93, '100010000084', 'Md.Shamsur Rahman', 'Late Anowar Ali Mia', 'Late Ambia Khatun', 'Father', '2,Gawair (Old-93),Gawair,Ward No-3 ,Ashkona,Dakshinkhan,Dhaka', '2,Gawair (Old-93),Gawair,Ward No-3 ,Ashkona,Dakshinkhan,Dhaka', '2611038767846', '1948-01-01', '01716418728', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:43:19'),
(94, '100010000085', 'Raqien Karim', 'Md. Rafiul Karim', 'Zisan Karim', 'Father', 'House No. 18, UN Road , Baridhara, Gulshan 1212', 'House No. 18, UN Road , Baridhara, Gulshan 1212', '19872692618000000', '1987-09-24', '1713030191', '00', 'Business', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:45:21'),
(95, '100010000086', 'Sanchita Biswas', 'Subash Chandara Biswas', 'Shova Biswas', 'Sister', 'Janani Mansion (3rd Floor), Kajla, Rajshahi.', 'Janani Mansion (3rd Floor), Kajla, Rajshahi.', '8194028198670', '1976-08-17', '017-17143942', '00', 'Service Holder', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:47:40'),
(96, '100010000088', 'MD. MASUD UDDIN', 'MD.MUSLEH UDDIN', 'AZIZA UDDIN', 'Brother', 'UNICAP SECURITIES LTD, RICHMOND CONCORD  TOWER (6TH FLOOR), 68 GULSHAN AVENUE, GULSHAN 1, DHAKA', 'UNICAP SECURITIES LTD, RICHMOND CONCORD  TOWER (6TH FLOOR), 68 GULSHAN AVENUE, GULSHAN 1, DHAKA', '2692620517866', '1985-08-29', '+8801755694005', '00', 'service', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-28 08:51:26'),
(97, '100010000089', 'Saddam Hossain', 'Abdul Motaleb', 'Sufia Begum', 'spouse', 'MOHAMMADPUR', 'MOHAMMADPUR', '19913014181000100', '1991-01-01', '01674508977', '00', 'service', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-29 06:02:51'),
(99, '100010000091', 'Mehedi Malek Sajib', 'Golam Mohiuddin Latu', 'Yasmeen Mohiuddin', 'Spouse', 'House-43, Road-1, Block-I,Banani', 'House-43, Road-1, Block-I,Banani', '7528705131494', '1980-01-29', '01977995577', '00', 'Service Holder', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-29 06:05:34'),
(101, '100010000093', 'FARJANA KHAN', 'SHEIKH MAHMUDUL HASSAN', 'LUTFA KHAN', 'Wife', 'House: D 16, Bldg: Polash, Naval Headquarters  Area, Banani', 'House: D 16, Bldg: Polash, Naval Headquarters  Area, Banani', '\"1592039144849\"', '1971-03-12', '\"+8801730027322\"', '00', 'Housewife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2020-06-29 06:08:07'),
(102, '100010000099', 'Tasmia Khan', 'Md. Iftekhar-ul- Islam', ' Shamima Khan', 'wife', '153, distilary Road, gandaria,Dhaka-1204', '153, distilary Road, gandaria,Dhaka-1204', '9572733021', '1987-09-05', '+8801675314928', '00', 'Housewife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2019-07-28 10:22:14'),
(103, '100010000101', 'ROSELINE TALUKDER', 'MD SHAMSUL HAQUE', 'MRS. SURAIYA TALUKDER', 'SPOUSE', 'HOUSE-50, ROAD-01, SECTOR-09,UTTARA DHAKA-1230', 'HOUSE-50, ROAD-01, SECTOR-09,UTTARA DHAKA-1230', '19662699501912338', '1966-11-22', '+8801817049600', '00', 'HOUSEWIFE', NULL, NULL, NULL, '2019-07-28 10:22:14', '2019-07-28 10:22:14'),
(104, '100010000102', 'Md. Bazlur Rashid (Munna)', 'Md. Mazed Miah', 'Most.Momotaj Begum', 'Colleague', 'Sec No-12,Block No-Dha, House No-119/120,(Pallabi), Mirpur-12, Dhaka-1216.', 'Sec No-12,Block No-Dha, House No-119/120,(Pallabi), Mirpur-12, Dhaka-1216.', '8227605116259', '1962-11-25', '01865-072840', '00', 'Private Service', NULL, NULL, NULL, '2019-07-28 10:22:14', '2019-12-11 03:44:36'),
(105, '100010000103', 'jamal ahmed ', 'sumon ahmed ', 'prova rashid', 'father', '67/h uttara dhaka ', '67/h uttara dhaka ', '768900000543', '1960-08-12', '7654890', '00', 'retired ', NULL, NULL, NULL, '2019-07-28 10:22:14', '2019-07-28 10:22:14'),
(106, '100010000105', 'Momtaz Begum', 'Late Syed owsher Ali', 'ate Jahanara Begum', 'Mother', 'F 15414,west Rampura, Wabda Road, Dhaka', 'F 15414,west Rampura, Wabda Road, Dhaka', '7783010148', '1956-03-10', '01717315981', '00', 'Housewife', NULL, NULL, NULL, '2019-07-28 10:22:14', '2019-07-28 10:22:14'),
(107, '100010000106', 'SYEDA JANNATUL FERDOUS', 'SYED ABUL KASHEM', 'JHORNA CHOWDHORY', 'SPOUSE', 'House-968, Road- College Road, HARUYA EAST, KISHORGONG-2300', 'House-968, Road- College Road, HARUYA EAST, KISHORGONG-2300', '4824905322396', '1989-12-21', '01716516026', '00', 'house wife', '100010000106nom.jpg', '100010000106nom_sign.jpg', '100010000106nom_nid.jpg', '2019-07-28 10:22:15', '2020-07-12 04:58:05'),
(108, '100010000107', 'Chowdhury Shuvasis Paul Bibak', 'jithandra paul Chowdhury', 'Purabi paul Chowdhury', 'Spouse', 'H-131, Ceramic Road South Dariapur, Savar', 'H-131, Ceramic Road South Dariapur, Savar', '1939541932', '1980-01-06', '1818400499', '00', 'Service', NULL, NULL, NULL, '2019-07-28 10:22:15', '2019-07-28 10:22:15'),
(109, '100010000108', 'SHEHELI HUQ MUNMUN', 'MD. MAHMUDUL HAQUE KHAN', 'BEGUM MUMTAJ HUQ', 'Spouse', 'Road:11 House:798 Flat: A-3, Mirpur DOHS, Mirpur Dhaka-1216', 'Road:11 House:798 Flat: A-3, Mirpur DOHS, Mirpur Dhaka-1216', '4183932047', '1973-12-18', '01715006297', '00', 'Home Maker', NULL, NULL, NULL, '2019-07-28 10:22:15', '2019-07-28 10:22:15'),
(110, '100010000110', 'Masum Mohiuddin Murad', 'Mohiuddin Ahmed', 'Shahida Mohiuddin', 'Friend', 'House#114, Road#09, Bloc-C, Niketan, Gulshan', 'House#114, Road#09, Bloc-C, Niketan, Gulshan', '9117437096', '1983-12-12', '01972227222', '00', 'Business', NULL, NULL, NULL, '2019-07-28 10:22:15', '2019-07-28 10:22:15'),
(111, '100010000111', 'MORSHEDA ISLAM', 'MD. NAZRUL ISLAM', 'MORIUM BEGUM', 'Spouse', 'KA/59/A KUSHUM VILLA, ZOASHARA, BADDA, DHAKA', 'KA/59/A KUSHUM VILLA, ZOASHARA, BADDA, DHAKA', '2692618506937', '1985-01-01', '01718274808', '00', 'Housewife', NULL, NULL, NULL, '2019-07-28 10:22:15', '2020-04-20 05:41:12'),
(112, '100010000112', 'Monju Ara Begum', 'Late Atiq Ullah Miah', 'Syeda Arfannesa', 'Mother', 'Road no.- 09, House no.-11, Pallabi, Mirpur 11.5, Dhaka-1216', 'Road no.- 09, House no.-11, Pallabi, Mirpur 11.5, Dhaka-1216', '6442068687', '1968-02-01', '1743745442', '00', 'Housewife', NULL, NULL, NULL, '2019-07-28 10:22:15', '2020-06-22 03:45:59'),
(114, '100010000113', 'MAJOR SYED GOLAM WADUD(RETD)', 'SAYED GOLAM MUSTAFA', 'RASHIDA MUSTAFA', 'Brother', 'HOUSE NO. 15/C, FLAT-5A ROAD NO.2, DHAKA CANTONMENT', 'Dhaka', '4153388816', '1964-12-01', '01711565788', '00', 'BUSINESS', NULL, NULL, NULL, '2019-09-23 05:31:26', '2020-07-06 02:27:37'),
(151, '100010000114', 'S M Farhad', 'Shah Md Zahid Hossain', 'Shahjadi Begum', 'Husband', 'House-541, Road-6, Mirpur DOHS', 'House-541, Road-6, Mirpur DOHS', '911 030 1018', '1964-03-07', '1713367891', '00', 'Private Service', NULL, NULL, NULL, '2019-10-18 16:29:57', '2020-09-23 11:22:10'),
(152, '100010000115', 'Shantona Begum', 'Jahidul Islam', 'Rabeya Begum', 'Wife', 'Village-Dadpur,PO-Chitarbazar, Upozila-Boalmari, Faridpur.', 'Village-Dadpur,PO-Chitarbazar, Upozila-Boalmari, Faridpur.', '2911875239145', '1988-03-21', '01865072854', '00', 'Housewife', NULL, NULL, NULL, '2019-10-18 16:39:04', '2019-11-05 06:10:51'),
(153, '100010000116', 'MAHFUZA BEGUM', 'LATE ATIK ULLAH MIAH', 'MONJU ARA BEGUM', 'Daughter', 'Road no.- 09, House no.-11', 'Road no.- 09, House no.-11', '7322543062', '1992-04-04', '01838004929', '00', 'Private Service', NULL, NULL, NULL, '2019-10-18 16:41:40', '2019-11-05 06:42:14'),
(154, '100010000117', 'Sumaiya Yesmine', 'Hassan Asheq Mahmood', 'Sahera Begum', 'Wife', '20/31 (8th Fllor) , Block B, Babar Road, Mohammadpur, Dhaka', '20/31 (8th Fllor) , Block B, Babar Road, Mohammadpur, Dhaka', '3285455386', '1990-01-20', '01717936369', '00', 'House Wife', '100010000117nom.png', '100010000117nom_sign.png', '100010000117nom_nid.png', '2019-10-18 16:43:51', '2020-02-09 13:01:30'),
(155, '100010000118', 'Roksana Beguum', 'S M FAJLUL BARI', 'Begum Rokeya Alam', 'SPOUSE', '18/6, Casa Rosita (A3), Sobhanbag, Tollabag', '18/6, Casa Rosita (A3), Sobhanbag, Tollabag', '2695051193745', '1979-01-01', '01725938153', '00', 'Service', '100010000118nom.png', '100010000118nom_sign.png', '100010000118nom_nid.jpg', '2019-12-04 09:01:18', '2020-02-09 12:36:28'),
(156, '100010000119', 'SHIRIN AKTER', 'AL AMIN AHMED', 'AYESHA BEGUM', 'SPOUSE', 'MAMUDPUR, KUTUBPUR, FATULLAH, NARAYANGANJ', 'MAMUDPUR, KUTUBPUR, FATULLAH, NARAYANGANJ', '19836715879292800', '1983-02-04', '01722575282', '00', 'HOUSEWIFE', '100010000119nom.png', '100010000119nom_sign.png', '100010000119nom_nid.jpg', '2019-12-30 13:12:16', '2020-02-09 12:20:29'),
(157, '100010000120', 'Rebeka Yeasmin', 'Mir Shirazul Haque', 'Amena Khatun', 'Spouse', '5/2 East Bashabo, East bashabo, Sobujbag, Dhaka', 'Bangladesh', '8218199969', '0000-00-00', '01830290066', '00', 'Housewife', '100010000120nom.JPG', '100010000120nom_sign.png', '100010000120nom_nid.png', '2020-06-28 06:10:05', '2020-08-13 04:31:38'),
(158, '100010000121', 'ANUSREE SAHA', 'ANIL SAHA', 'PAPU SAHA', 'SPOUSE', 'Holding: C/60/61, NOBIN CHANDRA GOSHAMI ROAD, RIVER VIEW HOUSING, FORIDABAD, SHAMPUR, DHAKA', 'Bangladesh', '19931927208000021', '1993-05-25', '01755518860', '00', 'HOUSEWIFE', NULL, NULL, NULL, '2020-08-26 06:07:03', '2020-09-23 07:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Employee Roles Setup', 'web', '2019-10-07 04:47:43', '2019-10-07 04:47:43'),
(2, 'Send to Manager for Approval', 'web', '2019-10-07 05:00:41', '2019-10-07 05:00:41'),
(3, 'Final Approve and Disapprove', 'web', '2019-10-07 05:01:43', '2019-10-07 05:01:43'),
(4, 'Receipt and Payment', 'web', '2019-10-07 05:04:46', '2019-10-07 05:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_registration`
--

CREATE TABLE `portfolio_registration` (
  `PRO_REG_ID` bigint(20) UNSIGNED NOT NULL,
  `SPONSOR_ID` int(11) NOT NULL,
  `PORTFOLIO_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PORTFOLIO_TYPE_ID` int(11) NOT NULL,
  `SYMBOL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FACEVALUE` int(11) NOT NULL,
  `ASSET_MANAGER_ID` int(11) NOT NULL,
  `CUSTODIAN_ID` int(11) NOT NULL,
  `TRUSTEE_ID` int(11) NOT NULL,
  `LOT_SIZ_INDI` int(11) NOT NULL,
  `LOT_SIZ_INST` int(11) NOT NULL,
  `INI_FUND_SIZ` bigint(20) NOT NULL,
  `APPL_START_DATE` date NOT NULL,
  `APPL_END_DATE` date NOT NULL,
  `GEN_INV_LKIN_DAY` int(11) NOT NULL,
  `SPN_INV_LKIN_DAY` int(11) NOT NULL,
  `FUND_START_DATE` date NOT NULL,
  `FUND_CLOSE_DATE` date DEFAULT NULL,
  `INDV_SUBS` int(11) NOT NULL,
  `INST_SUBS` int(11) NOT NULL,
  `COMMISSION` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_registration`
--

INSERT INTO `portfolio_registration` (`PRO_REG_ID`, `SPONSOR_ID`, `PORTFOLIO_NAME`, `PORTFOLIO_TYPE_ID`, `SYMBOL`, `FACEVALUE`, `ASSET_MANAGER_ID`, `CUSTODIAN_ID`, `TRUSTEE_ID`, `LOT_SIZ_INDI`, `LOT_SIZ_INST`, `INI_FUND_SIZ`, `APPL_START_DATE`, `APPL_END_DATE`, `GEN_INV_LKIN_DAY`, `SPN_INV_LKIN_DAY`, `FUND_START_DATE`, `FUND_CLOSE_DATE`, `INDV_SUBS`, `INST_SUBS`, `COMMISSION`, `created_at`, `updated_at`) VALUES
(1, 1, 'CAPM Unit Fund', 1, 'CAPMUF', 100, 1, 1, 1, 10, 10, 100000000, '2014-03-19', '2014-05-03', 0, 0, '2014-04-16', NULL, 10, 10, 0.15, '2019-09-19 05:06:32', '2020-01-27 11:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_type`
--

CREATE TABLE `portfolio_type` (
  `PORTFOLIO_TYPE_ID` int(11) NOT NULL,
  `PORTFOLIO_TYPE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OPEN_CLOSE_FLAG` int(11) NOT NULL COMMENT '1 - open & 0 - close',
  `INCOMEREST_FLAG` int(11) NOT NULL COMMENT '1 - interest, 2 - dividend & 0 - none ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_type`
--

INSERT INTO `portfolio_type` (`PORTFOLIO_TYPE_ID`, `PORTFOLIO_TYPE`, `OPEN_CLOSE_FLAG`, `INCOMEREST_FLAG`, `created_at`, `updated_at`) VALUES
(1, 'Conventional', 1, 0, '2019-07-24 06:26:00', '2020-01-26 11:15:25'),
(2, 'Islamic', 1, 1, '2019-10-09 07:16:24', '2020-01-26 11:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `price_rate`
--

CREATE TABLE `price_rate` (
  `PRICE_RATE_ID` bigint(20) UNSIGNED NOT NULL,
  `PRO_REG_ID` int(11) NOT NULL,
  `BUY_RATE` double(8,2) NOT NULL,
  `SELL_RATE` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_rate`
--

INSERT INTO `price_rate` (`PRICE_RATE_ID`, `PRO_REG_ID`, `BUY_RATE`, `SELL_RATE`, `created_at`, `updated_at`) VALUES
(1, 1, 111.38, 109.88, '2019-09-18 18:00:00', '2020-10-01 11:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `principal_applicant`
--

CREATE TABLE `principal_applicant` (
  `PRINCIPAL_APPLICANT_ID` bigint(20) NOT NULL,
  `REGISTRATION_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TA_REG_NO` int(11) NOT NULL,
  `GENDER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FATHER_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MOTHER_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRESENT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PERMANENT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NATIONAL_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CITY` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DISTRICT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `COUNTRY` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `TELEPHONE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NATIONALITY` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BOID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `POST_CODE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OCCUPATION` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ETIN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ACCOUNT_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ACCOUNT_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BANK_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ROUTING_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BRANCH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ind',
  `DIVIDENT_OPT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IMAGE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `APP_SIGN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NID_IMG` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PASSWORD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CODE` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `principal_applicant`
--

INSERT INTO `principal_applicant` (`PRINCIPAL_APPLICANT_ID`, `REGISTRATION_NO`, `TA_REG_NO`, `GENDER`, `NAME`, `FATHER_NAME`, `MOTHER_NAME`, `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`, `NATIONAL_ID`, `CITY`, `DISTRICT`, `COUNTRY`, `BIRTHDAY`, `TELEPHONE`, `EMAIL`, `NATIONALITY`, `BOID`, `POST_CODE`, `OCCUPATION`, `ETIN`, `ACCOUNT_NAME`, `ACCOUNT_NO`, `BANK_NAME`, `ROUTING_NO`, `BRANCH`, `Type`, `DIVIDENT_OPT`, `IMAGE`, `APP_SIGN`, `NID_IMG`, `PASSWORD`, `CODE`, `created_at`, `updated_at`) VALUES
(1, '100010000001', 1, 'Mr.', 'NASIR UDDIN AHMED', 'LATE ROFIQ ULLAH', 'HOSNE ARA BEGOM', 'SHAPLA HOUSE,161/3 BAGANBARI (NORTH VASHANTEK) DHAKA CANTT, DHAKA-1206, BANGLADESH', 'SHAPLA HOUSE,161/3 BAGANBARI (NORTH VASHANTEK) DHAKA CANTT, DHAKA-1206, BANGLADESH', '19652693015000028', 'Dhaka', 'Dhaka', '00', '1965-01-08', '+8801711908420', 'titonasir2895@yahoo.com', 'Bangladesh', NULL, 'N/A', 'service', NULL, 'NASIR UDDIN AHMED', '7002-0311041908', 'TRUST BANK LIMITED', '240275358', 'Principal, Dhaka Cantt.', 'ind', 'Cash', '986012774.download.jpg', '100010000001user_sign.jpg', '100010000001user_nid.jpg', '9f95fbd4dfa475f656b7f1171439a98d', NULL, '2014-03-19 04:56:46', '2020-07-23 06:35:36'),
(2, '100010000002', 1, 'Mr.', 'SM MAHMUD HUSSAIN', 'SM MOSHARRAF HOSSAIN', 'RIZIA BEGUM', 'ROAD-3,HOUSE-21,FLAT-5/A,BANANI (DOHS), DHAKA', 'ROAD-3,HOUSE-21,FLAT-5/A,BANANI (DOHS), DHAKA', '2692619637582', 'Dhaka', 'Dhaka', '00', '1963-06-24', '+8801927070707', 'ceo@capmbd.com', 'Bangladesh', NULL, 'N/A', 'BUSINESS', NULL, 'SM MAHMUD HUSSAIN', '00160316000012', 'TRUST BANK LIMITED', '240261812', 'GULSHAN', 'ind', 'CIP', '100010000002user_photo.jpg', '100010000002user_sign.jpg', '100010000002user_nid.jpg', 'ebd75a1d63a4bc79948a56fb2c8ff023', NULL, '2014-03-19 06:36:30', '2020-06-24 09:56:04'),
(3, '100010000003', 1, 'Mr.', 'MD BAZLUR RASHID', 'LATE MD MAZED MIA', 'MRS MOMOTAZ BEGUM', 'VILL:KAZKANDA,P.O: RAJBARI, DIST: RAJBARI', 'VILL:KAZKANDA,P.O: RAJBARI, DIST: RAJBARI', '8227605116259', 'RAJBARI', 'RAJBARI', '00', '1962-11-25', '+8801722121760', 'bazlur@capmbd.com', 'Bangladesh', NULL, 'N/A', 'Service', NULL, 'MD BAZLUR RASHID', '0271340005093', 'SOCIAL ISLAMIC BANK LIMITED', '195260434', 'BANANI', 'ind', 'CIP', NULL, '100010000003user_sign.jpg', '100010000003user_nid.jpg', '19e4285ecf0fb96fbc5cfcdecf2d7475', NULL, '2014-03-18 19:20:10', '2020-06-24 10:03:15'),
(4, '100010000004', 1, 'Mr.', 'SANJAY KUMAR DATTA', 'SONTOSH KUMAR DATTA', 'LIPIKA DATTA', 'FLAT#I-10, BAILY RITZ,1 NEW BAILY ROAD,RAMNA,DHAKA-1217', 'FLAT#I-10, BAILY RITZ,1 NEW BAILY ROAD,RAMNA,DHAKA-1217', '19732696536931330', 'Dhaka', 'Dhaka', '00', '1973-11-28', '+8801819243162', 'skdattabd@yahoo.com', 'Bangladesh', NULL, 'N/A', 'Service', NULL, 'SANJAY KUMAR DATTA', '0214-01-0010350', 'BASIC BANK LTD.', '055271789', 'MAIN', 'ind', 'CIP', NULL, '100010000004user_sign.jpg', '100010000004user_nid.jpg', '89cbf33127beba105b093f4c1f5be2e0', NULL, '2014-03-18 20:01:33', '2020-06-24 10:06:38'),
(5, '100010000005', 1, 'Mr.', 'Md. Shohel Molla', 'Md. Humayun Molla', 'Begum', 'Vill: Datapur, Post:Chiter Bazar, Upozilla: Boalmari, District: Faridpur', 'Vill: Datapur, Post:Chiter Bazar, Upozilla: Boalmari, District: Faridpur', '2691649460808', 'Faridpur', 'Faridpur', '00', '1988-01-06', '+8801736857234', 'shohel20001@gmail.com', 'Bangladesh', NULL, 'N/A', 'Service', NULL, 'Md. Shohel Molla', '027-1340011922', 'SOCIAL ISLAMIC BANK LIMITED', '195260434', 'Banani', 'ind', 'Cash', NULL, '100010000005user_sign.jpg', '100010000005user_nid.jpg', '0d31423cc7d1f427d99c30a6d4d9acbd', NULL, '2014-03-23 05:35:54', '2020-06-24 10:08:54'),
(6, '100010000006', 1, 'Mrs.', 'Lutfunnesa', 'Late Yousuf Ali Bishwas', 'Late Anwara Khatun', 'House No.57, Road No.06, Mohammadi Housing Society, Mohammadpur.', 'House No.57, Road No.06, Mohammadi Housing Society, Mohammadpur.', '4798517236613', 'Dhaka', 'Dhaka', '00', '1954-12-25', '+8801677038865', 'moutushi007@yahoo.com', 'Bangladesh', NULL, '1207', 'Retd. School Teacher', NULL, 'Moutushi Afrin', '2101569774001', 'The City Bank', '225261729', 'gulshan', 'ind', 'Cash', NULL, '100010000006user_sign.jpg', '100010000006user_nid.jpg', '02aa503c3f1cd9076413f37c398c8dfe', NULL, '2014-03-23 06:25:00', '2020-06-24 10:12:10'),
(7, '100010000007', 1, 'Mr.', 'Md. Nahidul Islam Prodhan', 'Md. Azijul Alam Prodhan', 'Mrs. Nasrin Aktar', 'Asstt. Protocol Officer,Room#309, Administrative Building, IUT, Board Bazar. Gazipur', 'Asstt. Protocol Officer,Room#309, Administrative Building, IUT, Board Bazar. Gazipur', '7713428553264', 'Gazipur', 'Gazipur', '00', '1983-01-02', '+8801717138354', 'nahid250@gmail.com', 'Bangladesh', NULL, '1704', 'Service', NULL, 'Md. Nahidul Islam Prodhan', '110.101.58069', 'Dutch Bangla Bank Limited', '090261183', 'Dhanmondi', 'ind', 'CIP', NULL, '100010000007user_sign.jpg', '100010000007user_nid.jpg', '08871eb969594464be24bd1e31d7d015', NULL, '2014-03-22 19:11:37', '2020-06-24 10:15:37'),
(8, '100010000009', 1, 'Mr.', 'Dr. Sheikh Forhad', 'Sheikh Motiur Raman', 'Fatima Khanam', '95, College Road, Narayanganj-1400', '95, College Road, Narayanganj-1400', '6725804351482', 'Narayanganj', 'Narayanganj', '00', '1978-11-15', '+8801979482481', 'drskforhad@gmail.com', 'Bangladesh', NULL, '1400', 'Physician', NULL, 'Dr. Sheikh Forhad', '4301100493178001', 'Brac Bank Limited', '060671187', 'Narayanganj', 'ind', 'CIP', NULL, '100010000009user_sign.jpg', '100010000009user_nid.jpg', '1f7b52c7ed68b1cb4384606a2afe289e', NULL, '2014-03-24 04:35:24', '2020-06-24 10:29:47'),
(9, '100010000013', 1, 'Mr.', 'Khalil Bin Wahid', 'Md. Abdul Wahid', 'Late Mst. Ayesha Akter', 'House-27(1A),Road-11,Block-F,Banani,Dhaka-1213', 'House-27(1A),Road-11,Block-F,Banani,Dhaka-1213', '2692619582475', 'Dhaka', 'Dhaka', '00', '1965-01-20', '+8801819221188', 'kbwahid@bol-online.com', 'Bangladesh', NULL, '1213', 'Business', NULL, 'Khalil Bin Wahid', '7022-0212000029', 'Trust Bank', '240262958', 'Millennium Corporate Branch', 'ind', 'CIP', NULL, '100010000013user_sign.jpg', '100010000013user_nid.jpg', '5b5419306bc908eafbf5d0458bcf1c5c', NULL, '2014-03-31 05:39:58', '2020-06-24 10:40:13'),
(10, '100010000014', 1, 'Mr.', 'Syed Golam Wadud', 'Syed Golam Mustafa', 'Rashida Mustafa', '797 Ibrahimpur,Dhaka Cantt.,Kafrul, Dhaka', '797 Ibrahimpur,Dhaka Cantt.,Kafrul, Dhaka', '2693016119755', 'Dhaka', 'Dhaka', '00', '1964-12-01', '+8801711565788', 'sgwadud@gmail.com', 'Bangladesh', NULL, 'N/A', 'Business', NULL, 'Syed Golam Wadud', '0002-0210041755', 'Trust Bank Limited', '240275358', 'Principal Branch', 'ind', 'CIP', NULL, '100010000014user_sign.jpg', '100010000014user_nid.jpg', '10062b77ea1507f3fb6960d6e75ebf7d', NULL, '2014-03-31 06:10:08', '2020-06-24 10:42:25'),
(11, '100010000015', 1, 'Mr.', 'A.K.M Yahea Chowdhury', 'Late Alhaj Azharul Hoq Chowdhury', 'Late Rowshan Ara Chowdhury', '71/2,Circuit House, Circuit House Road, Kakrail, Dhaka-1000', '71/2,Circuit House, Circuit House Road, Kakrail, Dhaka-1000', '2695434704433', 'Dhaka', 'Dhaka', '00', '1955-01-01', '+8801713039435', 'emee_emrana@yahoo.com', 'Bangladesh', NULL, '1000', 'Govt. Service', NULL, 'A.K.M Yahea Chowdhury', '4006-295647-300', 'AB Bank Limited', '020263498', 'New Elephant Road', 'ind', 'Cash', NULL, '100010000015user_sign.jpg', '100010000015user_nid.jpg', 'd0a9af573dc42d6691e5d5ddbc726690', NULL, '2014-04-13 03:58:27', '2020-06-24 11:40:15'),
(12, '100010000016', 1, 'Mr.', 'Sufi Md. Zakaria', 'Late Sufi Shamsul Huda', 'Zakara Khatoon', '83,Malitola Road,1st Floor,Dhaka,1100', '83,Malitola Road,1st Floor,Dhaka,1100', '2694071187466', 'Dhaka', 'Dhaka', '00', '1945-01-04', '95-62521', 'investor.unitfund@gmail.com', 'Bangladesh', NULL, '1100', 'Service', NULL, 'Sufi Md. Zakaria', '4010-063066-300', 'AB Bank Limited', '020275110', 'N.S Road', 'ind', 'CIP', NULL, '100010000016user_sign.jpg', '100010000016user_nid.jpg', '25f8000128a0a3dca1dc5aa45506a47b', NULL, '2014-04-16 04:45:00', '2020-06-24 11:44:36'),
(13, '100010000019', 1, 'Mr.', 'Md. Shahadur Zaman', 'Md. ABUL Bashar', 'Hasina Begum', 'Daleshawari Limited 20,Babupura(Katabon Dhal),Nilkhet,Dhaka', 'Daleshawari Limited 20,Babupura(Katabon Dhal),Nilkhet,Dhaka', '2692986570419', 'Dhaka', 'Dhaka', '00', '1980-03-04', '+8801772844795', 'share.shahed@gmail.com', 'Bangladesh', NULL, '1205', 'Service', NULL, 'Md. Shahadur Zaman', '04934007003', 'Bank Asia Limited', '070275207', 'Paltan Branch', 'ind', 'CIP', NULL, '100010000019user_sign.jpg', '100010000019user_nid.jpg', '7deab61ef014e8a1b3949466a7c83064', NULL, '2014-04-22 06:11:39', '2020-08-10 01:13:18'),
(14, '100010000020', 1, 'Mrs.', 'Gazi Afshana Banu', 'Yousuf Solaiman Rassel', 'Lutfunnesa', 'House No.57, Road No.06, Mohammadi Housing Society, Mohammadpur.', 'House No.57, Road No.06, Mohammadi Housing Society, Mohammadpur.', '2690246962239', 'Dhaka', 'Dhaka', '00', '1976-12-25', '01713329377/04470000505', 'afshana.yousuf@gmail.com', 'Bangladesh', NULL, '1207', 'Service', NULL, 'Gazi Afshana Banu', '00734012261', 'Bank Asia', '070276130', 'Scotia', 'ind', 'Cash', NULL, '100010000020user_sign.jpg', '100010000020user_nid.PNG', 'd2db3c1f93658d57773c70f07034f4b8', '1392020', '2014-04-23 04:20:26', '2020-06-24 11:52:51'),
(15, '100010000022', 1, 'Mr.', 'Chowdhury Suvasish Paul Bibak', 'Jithandra Paul Chowdhury', 'Purabi Paul Chowdhury', 'Tangail Homio Hall,Cerimic Road,Vagulpur, Savar, Dhaka', 'Tangail Homio Hall,Cerimic Road,Vagulpur, Savar, Dhaka', '2627206570432', 'Dhaka', 'Dhaka', '00', '1980-06-01', '+8801818400499', 'rhcebibak@yahoo.com', 'Bangladesh', NULL, '1340', 'Service', NULL, 'Chowdhury Suvasish Paul Bibak', '18821030010691', 'Prime Bank', '170264121', 'Savar branch', 'ind', 'Cash', '100010000022user_photo.jpg', '100010000022user_sign.jpg', '100010000022user_nid.jpg', '98eaed26f92734cf87243645e50f6470', NULL, '2014-04-23 23:07:17', '2020-06-24 11:56:35'),
(16, '100010000023', 1, 'Mr.', 'Sharif Anisur Rahman', 'Late Al-Haj Abdul Jabbar', 'Late Mrs. Afia Akther Khatoon', 'Flat#405(3rd Floor), House#10, Road#08, Gulshan-01, Dhaka-1212', 'Flat#405(3rd Floor), House#10, Road#08, Gulshan-01, Dhaka-1212', '2692619559731', 'Dhaka', 'Dhaka', '00', '1949-06-13', '+8801199844519', 'sharifrahman2011@gmail.com', 'Bangladesh', NULL, '1212', 'Service', NULL, 'Sharif Anisur Rahman', '10477360022935', 'Prime Bank Limited', '170274245', 'Motijheel Branch', 'ind', 'Cash', NULL, '100010000023user_sign.JPG', '100010000023user_nid.JPG', 'fcea920f7412b5da7be0cf42b8c93759', NULL, '2014-04-27 04:24:44', '2020-06-24 12:02:21'),
(17, '100010000024', 1, 'Mr.', 'Major Sakir Ahmed (Retd)', 'Late Ahmed Ali Munshi', 'Late Begum Samsunnahar', '\"Baitur Ruhm\", 33/3, Mujgunni Uttar Para, Khulna.', '\"Baitur Ruhm\", 33/3, Mujgunni Uttar Para, Khulna.', '1965 475 699 875 1195', 'Khulna', 'Khulna', '00', '1965-10-05', '+8801715295140', 'sakir2936@yahoo.com', 'Bangladesh', NULL, '9000', 'Corporate Service', NULL, 'Major Sakir Ahmed (Retd)', '0040-0210001659', 'Trust Bank Limited', '240471549', 'Khulna Branch', 'ind', 'CIP', NULL, NULL, NULL, 'c3aabd5e59e943841873cca0cbd6d918', NULL, '2014-04-27 04:48:43', '2020-06-24 12:06:17'),
(18, '100010000025', 1, 'Mr.', 'Major Md. Sabir Ahmed (Retd.)', 'Late Md. Insan Ahmed', 'Late Rezia Ahmed', 'Flat A-1, Sky View Tower, 19 Naya Paltan, Dhaka', 'Flat A-1, Sky View Tower, 19 Naya Paltan, Dhaka', '6155298435608', 'Dhaka', 'Dhaka', '00', '1965-01-04', '+8801926688770', 'sabir8592@yahoo.com', 'Bangladesh', NULL, 'N/A', 'Service', NULL, 'Major Md. Sabir Ahmed (Retd.)', '0028-0210005375', 'Trust Bank Limited', '240262987', 'Mirpur', 'ind', 'Cash', NULL, NULL, NULL, 'b017fe605b3d346ef528626b850fd69c', NULL, '2014-04-26 19:52:02', '2020-06-24 12:15:11'),
(19, '100010000026', 1, 'Mr.', 'Muraheb Malik Chowdhury', 'Masih Malik Chowdhury', 'Zeenatul Ferdous', 'Level-13, 8 Panthopoth, Dhaka', 'Level-13, 8 Panthopoth, Dhaka', 'AA2653990', 'Dhaka', 'Dhaka', '00', '1984-12-15', '+8801731147431', 'muraheb@gmail.com', 'Bangladesh', NULL, '1215', 'Chartered Accountant', NULL, 'Muraheb Malik', '2101007149001', 'The City Bank', '225262531', 'Kawran Bazar', 'ind', 'Cash', NULL, NULL, NULL, '18437daeb93faecff8133a2ca5ffeb64', NULL, '2014-04-26 21:22:44', '2020-06-24 12:20:42'),
(20, '100010000027', 1, 'Mr.', 'MD.ABDUL QUDDUS', 'LATE MD.HABIB ALI', 'NEWARUN NESSA', 'HOUSE#59,ROAD#2,BLOCK#E,SHAHJALAL UPASHAHAR', 'HOUSE#59,ROAD#2,BLOCK#E,SHAHJALAL UPASHAHAR', '9196222353682-', 'SYLHET', 'SYLHET', '00', '1960-06-30', '+8801743624536', 'abdul_quddus606@hotmail.com', 'Bangladesh', NULL, '3100', 'SERVICE', NULL, 'MD.ABDUL QUDDUS', '153.200.1422', 'DHAKA BANK LTD', '85914032', 'UPOSHAHAR ,SYLHET', 'ind', 'CIP', NULL, '100010000027user_sign.jpg', '100010000027user_nid.JPG', 'c47daa0f0fac60d5fde66368154038c1', NULL, '2014-04-26 21:45:38', '2020-06-24 12:23:08'),
(21, '100010000028', 1, 'Mr.', 'Muhammad Alamgir', 'Dr. Abdus Sobhan', 'Mrs. Rahima Akhter', 'Flat#B4, House#07, Road#04, DOHS Banani,', 'Flat#B4, House#07, Road#04, DOHS Banani,', '2650898233238', 'Dhaka', 'Dhaka', '00', '1960-12-31', '+8801713040878', 'alamgir@bsgroupnet.com', 'Bangladesh', NULL, '1206', 'Business', NULL, 'Muhammad Alamgir', '13221070003447', 'Prime Bank Ltd.', '170260433', 'Banani', 'ind', 'Cash', NULL, '100010000028user_sign.jpg', '100010000028user_nid.jpg', 'c542956825ffa07e35ba12ef0e135e22', NULL, '2014-04-26 22:12:15', '2020-06-24 12:25:11'),
(22, '100010000029', 1, 'Mrs.', 'Taslima Ferdous', 'Muhammad Alamgir', 'Anowara Begum', 'Flat#B4, House#07, Road#04, DOHS Banani,', 'Flat#B4, House#07, Road#04, DOHS Banani,', '2650898249900', 'Dhaka', 'Dhaka', '00', '1967-12-21', '+8801715343330', 'drtaslima@squarehospital.com', 'Bangladesh', NULL, '1206', 'Doctor', NULL, 'Taslima Ferdous', '160310019399', 'Mutual Trust Bank Ltd.', '145260589', 'Bashundhara City', 'ind', 'Cash', NULL, '100010000029user_sign.jpg', '100010000029user_nid.jpg', '10ed4922fa4594da19fee149d653e657', NULL, '2014-04-26 22:16:24', '2020-06-24 12:26:46'),
(23, '100010000032', 1, 'Mr.', 'Parvez Hassan', 'Md. Abdul Bari', 'Nurunnahar', 'BEL Tower level 8, 19 Dhanmondi R/A, Road -01, Dhaka', 'BEL Tower level 8, 19 Dhanmondi R/A, Road -01, Dhaka', '2650898484571', 'Dhaka', 'Dhaka', '00', '1963-02-15', '8611891', 'parvez@beximco.net', 'Bangladesh', NULL, '1205', 'Service', NULL, 'Parvez Hassan', '0002-0210013562', 'Trust Bank Limited', '240275358', 'Principal Br.', 'ind', 'Cash', NULL, '100010000032user_sign.jpg', '100010000032user_nid.jpg', 'e80367cdad850848990ef7b60b327ae4', NULL, '2014-04-27 00:14:57', '2020-06-24 12:30:00'),
(24, '100010000033', 1, 'Mr.', 'Md. Sahariar Khan', 'Abdul Alim Khan', 'Mrs. Asia Alim', 'House No. 376/1,Gulbagh, P.O. Shantinagar-1217,Motijheel,Dhaka', 'House No. 376/1,Gulbagh, P.O. Shantinagar-1217,Motijheel,Dhaka', '2695435977658', 'Dhaka', 'Dhaka', '00', '1982-02-13', '+8801610002969', 'lincoln9mm@gmail.com', 'Bangladesh', NULL, '1217', 'Service', NULL, 'Mohommed Sahariar Khan', '18-2504871-01', 'Standard chartered', '215274247', 'MOTIJHEEL', 'ind', 'Cash', NULL, '100010000033user_sign.jpg', '100010000033user_nid.jpg', '316dce8a34cbd3c0aa251f3a87f7be3c', NULL, '2014-04-28 04:33:56', '2020-06-24 12:32:18'),
(25, '100010000034', 1, 'Mr.', 'Shojib Ahmed', 'Hannan Molla', 'Sufina Begum', 'Rupsha Tower(Flat:A-2)17 Kemal Ataturk Avenue, Banani-C/A,Dhaka', 'Rupsha Tower(Flat:A-2)17 Kemal Ataturk Avenue, Banani-C/A,Dhaka', '261258740379', 'Dhaka', 'Dhaka', '00', '1988-04-03', '+8801732322806', 'shojib.nag@gmail.com', 'Bangladesh', NULL, '1213', 'Service', NULL, 'Shojib Ahmed', '0016-0316001351', 'Trust Bank Limited', '240261812', 'Gulshan', 'ind', 'Cash', NULL, '100010000034user_sign.jpg', '100010000034user_nid.jpg', '5e1e90caaafef642c20909b2f1d103a3', NULL, '2014-04-28 05:16:14', '2020-06-24 12:34:00'),
(26, '100010000038', 1, 'Mr.', 'Md. Nafisur Rahman', 'Gp. Capt Md. Atiquer Rahman', 'Mrs. Amena Atique', 'House No.180, Rd No. 2, New D.O.H.S, Mohakhali, Dhaka', 'House No.180, Rd No. 2, New D.O.H.S, Mohakhali, Dhaka', '2650898509698', 'Dhaka', 'Dhaka', '00', '1965-06-29', '+8801711526036', 'nafisur99@yahoo.com', 'Bangladesh', NULL, '1206', 'Business', NULL, 'Md. Nafisur Rahman', '1006453699035', 'IFIC Bank Limited', '120261187', 'Dhanmondi', 'ind', 'Cash', NULL, '100010000038user_sign.jpg', '100010000038user_nid.JPG', '50e1e8d0f4b809bfaa0268736b017e98', NULL, '2014-04-27 21:03:44', '2020-06-25 08:58:34'),
(27, '100010000039', 1, 'Mr.', 'Mohammed Nasir Uddin Chowdhury', 'Mohammed Nur Nabi Chowdhury', 'Shamsur Nahar Begum', 'Flat#11A, Shanta Digonto,33A Paribagh ,Dhaka', 'Flat#11A, Shanta Digonto,33A Paribagh ,Dhaka', '2696536328638', 'Dhaka', 'Dhaka', '00', '1971-10-15', '+8801755528121', 'nasir.afra@gmail.com', 'Bangladesh', NULL, '1000', 'Service', NULL, 'Mohammed Nasir Uddin Chowdhury', '01142045301', 'Standard Chartered', '215274247', 'MOTIJHEEL', 'ind', 'Cash', NULL, '100010000039user_sign.jpg', '100010000039user_nid.jpg', 'b6dd0991f02f33f88e14126f1ac641e4', NULL, '2014-04-27 21:45:58', '2020-06-25 09:18:10'),
(28, '100010000040', 1, 'Mr.', 'Anthony D Costa', 'Late Andrew D Costa', 'Mrs. Elizabeth D Costa', 'Camellia Apptt. No.# C-1,67,Tejkuni Para, Tejgaon Dhaka-1215', 'Camellia Apptt. No.# C-1,67,Tejkuni Para, Tejgaon Dhaka-1215', '2699039522318', 'Dhaka', 'Dhaka', '00', '1966-04-17', '+8801713031996', 'adcosta82@gmail.com', 'Bangladesh', NULL, '1215', 'Banker', NULL, 'Anthony D Costa', '0017-0310004359', 'Trust Bank Limited', '240271936', 'Dilkusha Corp. Branch', 'ind', 'CIP', NULL, '100010000040user_sign.jpg', '100010000040user_nid.JPG', '8586466008fa8235333b5de0374c36d9', NULL, '2014-04-27 23:09:46', '2020-06-25 09:33:27'),
(29, '100010000043', 1, 'Mrs.', 'Tasnim Binte Aziz', 'Azizur Rahman', 'Rezina Rahman', '6/4 Salimullah Road,(Ground Floor), Mohammadpur,Dhaka', '6/4 Salimullah Road,(Ground Floor), Mohammadpur,Dhaka', '19842726405000004', 'Dhaka', 'Dhaka', '00', '1984-10-20', '+8801717034441', 'uma_tasnim@yahoo.com', 'Bangladesh', NULL, '1207', 'Service', NULL, 'Tasnim Binte Aziz', '003001526011', 'HSBC Bank Limited', '115261721', 'Baridhara', 'ind', 'Cash', NULL, '100010000043user_sign.JPG', '100010000043user_nid.jpg', 'cacc1c238c02e975da60a596c64cd19e', NULL, '2014-04-29 04:09:10', '2020-06-25 09:37:00'),
(30, '100010000044', 1, 'Mr.', 'S M Farhad', 'Late Shah Md Zahid Hossain', 'Mst Shahjadi Begum', 'Flat # A4, H No# 25, Rd No# 16, Sec No# 3, Uttara', 'Flat # A4, H No# 25, Rd No# 16, Sec No# 3, Uttara', '2650898498676', 'Dhaka', 'Dhaka', '00', '1964-03-07', '+8801713367891', 'farhadsigs@yahoo.com', 'Bangladesh', NULL, '1230', 'Govt Svc', NULL, 'Brig Gen S M Farhad (Retd) & Nurjahan Akther', '0002-0210420916', 'Trust Bank Ltd', '240275358', 'Principal Br', 'ind', 'Cash', NULL, '100010000044user_sign.JPG', '100010000044user_nid.JPG', 'a710701dca2b75c08618bd6c315a5ff5', NULL, '2014-04-29 05:05:31', '2020-06-25 09:40:38'),
(31, '100010000045', 1, 'Mr.', 'Siraj Uddin Ahmed', 'Late Ismail Hossain', 'Halema Begum', 'Deputy Registrar(Proc), Bangladesh University of Professinals(BUP), Mirpur Cantonment', 'Deputy Registrar(Proc), Bangladesh University of Professinals(BUP), Mirpur Cantonment', 'OA1004498', 'Dhaka', 'Dhaka', '00', '1965-07-31', '+8801712065442', 'ltc_sirajahmed2005@yahoo.com', 'Bangladesh', NULL, 'N/A', 'Militery Service', NULL, 'LT COL SIRAJ UDDDIN AHMED (RETD), PSC, BIR', '0002 0318000774', 'Trust Bank Ltd.', '240275358', 'Dhaka Cantt', 'ind', 'Cash', NULL, '100010000045user_sign.jpg', '100010000045user_nid.jpg', '322a59feb0795dcc53a626b9758d175a', NULL, '2014-04-29 05:33:03', '2020-06-25 11:27:00'),
(32, '100010000046', 1, 'Mr.', 'Lt. Col. Syed Zakir Uddin Ahmed', 'Late Dr. Syed Zakir Uddin Ahmed', 'Late Hafija Akter', 'House#27, Road#11, Block# F, Banani, Dhaka', 'House#27, Road#11, Block# F, Banani, Dhaka', 'N/A', 'Dhaka', 'Dhaka', '00', '1962-12-10', '+8801711824935', 'zakirahmed13@yahoo.com', 'Bangladesh', NULL, '1213', 'Business', NULL, 'Lt. Col. Syed Zakir Uddin Ahmed', '00020210002216', 'Trust Bank Limited', '240275358', 'Principal', 'ind', 'Cash', NULL, '100010000046user_sign.JPG', '100010000046user_nid.jpg', 'e8a6856199ef8d23a406ad39dcfa09ca', NULL, '2014-04-29 06:03:11', '2020-06-25 09:49:40'),
(33, '100010000047', 1, 'Mr.', 'Md Shameem Alam Bakhshi', 'Shamsuddin Bakhshi', 'Nurjahan Begum', '7/B Al-Hera Tower, Ka-86/1/A Kuratoli, P O-Khilkhet-1229, Dhaka', '7/B Al-Hera Tower, Ka-86/1/A Kuratoli, P O-Khilkhet-1229, Dhaka', '2693717164379', 'Dhaka', 'Dhaka', '00', '1964-09-03', '+8801745798025', 'bakhshi757@yahoo.com', 'Bangladesh', NULL, '1229', 'Service', NULL, 'Md Shameem Alam Bakhshi', '7002-0311040605', 'Trust Bank Ltd.', '240275358', 'Principal Br', 'ind', 'CIP', NULL, '100010000047user_sign.JPG', '100010000047user_nid.jpg', 'dbc7eb7e9456cd089e980c080aeb43fa', NULL, '2014-04-28 21:11:29', '2020-02-11 10:17:23'),
(34, '100010000049', 1, 'Mrs.', 'Chowdhury Sabbir Hasan', 'Md. Wahiduzzaman Chowdhury', 'Begum Mamtazzaman Chowdhury', '191, Tetultala, Kamlapur, Faridpur', '191, Tetultala, Kamlapur, Faridpur', '2693717164379', 'Dhaka', 'Dhaka', '00', '1976-12-01', '+8801791613663', 'sabbir@capmbd.com', 'Bangladesh', NULL, '7800', 'Service', NULL, 'Chowdhury Sabbir Hasan', '007212100030851', 'UCBL', '245272327', 'Foreign Exchange Branch', 'ind', 'Cash', NULL, '100010000049user_sign.JPG', '100010000049user_nid.JPG', '970ec4b1a5b24902686f9cf72cb8c8db', NULL, '2014-04-28 23:06:09', '2020-02-11 10:18:13'),
(35, '100010000051', 1, 'Mr.', 'Arifur Rahman', 'Afzalur Rahman', 'Pyeara Begum', 'House no-69, Road no-19, Sector-11, Uttara.', 'House no-69, Road no-19, Sector-11, Uttara.', '2619551197552', 'Dhaka', 'Dhaka', '00', '1970-10-27', '+8801819215912', 'mrimmoy1@gmail.com', 'Bangladesh', NULL, '1230', 'Business', NULL, 'Arifur Rahman', '001030600001', 'HSBC', '115261121', 'DHAKA OFFICE(112)', 'ind', 'Cash', NULL, '100010000051user_sign.jpg', '100010000051user_nid.jpg', 'f8d0965e5f6da024c98b21e8c119b7f3', NULL, '2014-04-29 20:30:46', '2020-06-28 07:32:07'),
(36, '100010000052', 1, 'Mr.', 'Sumit Paul', 'Subash Paul', 'Shipra Paul', '31/B-1,Swamibagh (3rd Floor),Dhaka', '31/B-1,Swamibagh (3rd Floor),Dhaka', '2698876301223', 'Dhaka', 'Dhaka', '00', '1988-09-14', '+8801911593774', 'sumitpaul131@gmail.com', 'Bangladesh', NULL, '1100', 'Service', '618527844863', 'Sumit Paul', '0011-1040000897', 'Midland Bank Ltd', '285261727', 'Gulshan', 'ind', 'Cash', NULL, '100010000052user_sign.JPG', '100010000052user_nid.jpg', '0d0589cd78709802a64a9a4580ae6789', '1426025', '2014-04-29 22:43:40', '2020-06-28 07:34:03'),
(37, '100010000053', 1, 'Mr.', 'Showgandev Kumer Guha Roy', 'Late Saroj Kumer Guha Roy', 'Mina Roy', 'House#34/6,5th Floor ,Road#03,Shaymoli, Dhaka', 'House#34/6,5th Floor ,Road#03,Shaymoli, Dhaka', 'N/A', 'Dhaka', 'Dhaka', '00', '1981-01-01', '+8801717413245', 'kumerguha@yahoo.com', 'Bangladesh', NULL, 'N/A', 'service holder', NULL, 'Showgandev Kumer Guha Roy', '12200082625', 'Premier Bank Limited', 'N/A', 'Banani Branch', 'ind', 'Cash', NULL, NULL, NULL, 'fa33ab998750389624466dd272cbecaf', NULL, '2014-06-16 06:44:32', '2020-06-28 07:35:15'),
(38, '100010000054', 1, 'Mr.', 'Md. Anisur Rahman', 'Late Md. Zahir uddin', 'Late Mosammat Khodeza Khatun', 'House-1168 (1st Floor), Block-B, West Chowdhury para, P.O. Khilgaon', 'House-1168 (1st Floor), Block-B, West Chowdhury para, P.O. Khilgaon', '2693623796044', 'Dhaka', 'Dhaka', '00', '1963-04-10', '+8801819214625', 'anisrhmn.aurko@gmail.com', 'Bangladesh', NULL, '1219', 'service holder', NULL, 'Md. Anisur Rahman', '1507202513366001', 'Brac Bank', '060260435', 'Banani', 'ind', 'Cash', NULL, '100010000054user_sign.jpg', '100010000054user_nid.JPG', '5794a9598fe6496ecdbdf26c2c693cc4', NULL, '2014-06-30 06:18:51', '2020-06-28 07:37:26'),
(39, '100010000055', 1, 'Mr.', 'Md. Maruful Hoque Chowdhury', 'Md. Masrul Hoque Chowdhury', 'Nurjahan Hoque Chowdhury', 'flat-5/B,House#03,Road-01,Sector-11,Uttara,Dhaka', 'flat-5/B,House#03,Road-01,Sector-11,Uttara,Dhaka', '1593525382872', 'Dhaka', 'Dhaka', '00', '1986-06-14', '+8801716782126', 'mhcmaruf@gmail.com', 'Bangladesh', NULL, '1230', 'Service', NULL, 'Md. Maruful Hoque Chowdhury', '181167883-01', 'Standard Chartered Bank Limited', '215261726', 'Gulshan', 'ind', 'Cash', NULL, '100010000055user_sign.jpg', '100010000055user_nid.jpg', '1a6f9dd4bc0447e85a22f7e50dc48fd9', NULL, '2014-08-30 23:15:22', '2020-06-28 07:38:59'),
(40, '100010000056', 1, 'Mr.', 'Syed Fazlul Karim', 'Syed Sekander Ali', 'Mahabuba Begum', 'Flat#D5, House#03, Road#10, Dhanmondi, Dhaka-1205', 'Flat#D5, House#03, Road#10, Dhanmondi, Dhaka-1205', '2691649108143', 'dhaka', 'dhaka', '00', '1976-08-13', '+8801911310208', 'fazlul_karim@yahoo.com', 'Bangladesh', NULL, '1205', 'Service', NULL, 'Syed Fazlul Karim', '114.101.474', 'Dutch Bangla Bank Ltd.', '090263194', 'Mohakhali', 'ind', 'CIP', NULL, '100010000056user_sign.JPG', '100010000056user_nid.JPG', 'a0b056342a9fe29267e6658d03b9491c', NULL, '2015-04-26 19:38:38', '2020-06-28 07:41:17'),
(41, '100010000057', 1, 'Mrs.', 'Sabina Yesmin', 'Md. Kahir Mahmood', 'Nazma Rahman', 'Apt-103,2/6 Shahjahan Road Mohammadpur', 'Apt-103,2/6 Shahjahan Road Mohammadpur', '2695042642692', 'dhaka', 'dhaka', '00', '1984-07-10', '+8801726685550', 'shimu.mahmood@yahoo.com', 'Bangladesh', NULL, '1207', 'Service', NULL, 'Sabina Yesmin', '18-1166111-01', 'Standard Chartered Bank', '215261726', 'Gulshan', 'ind', 'Cash', NULL, NULL, NULL, 'dd953f12f568c9728027e2db8dfaa6fd', NULL, '2015-08-16 20:28:09', '2020-06-28 07:43:54'),
(42, '100010000058', 1, 'Mr.', 'MD KAHIR MAHMOOD', 'Late M.A. kHALIQUE', 'BEGUM KAMRUN NAHAR', 'Shams tower apt-103, 2/6 Shahjahan Road, Mohammadpur, Dhaka-1207', 'Shams tower apt-103, 2/6 Shahjahan Road, Mohammadpur, Dhaka-1207', '2695042642963', 'Dhaka', 'Dhaka', '00', '1963-08-09', '+8801720019165', 'kahir2010@gmail.com', 'Bangladeshi', NULL, '1207', 'FCA', NULL, 'MD KAHIR MAHMOOD', '18-1110805-01', 'Standard Chartered Bank', '215261726', 'Gulshan', 'ind', 'Cash', NULL, NULL, NULL, 'ba420e8cad9892f2881bbeb2b9c15d22', NULL, '2015-08-29 20:06:29', '2020-06-28 07:45:21'),
(43, '100010000059', 1, 'Mr.', 'Suvendu Saha', 'Subhash Chandra Saha', 'Rita Rani Saha', 'Flat#8A-B, Plot#75, North Road, Dhanmondi, Dhaka', 'Flat#8A-B, Plot#75, North Road, Dhanmondi, Dhaka', '19832691650138000', 'Dhaka', 'Dhaka', '00', '1983-12-26', '1712210012', 'suvendu.saha.bd@gmail.com', 'Bangladesh', NULL, '1205', 'Service', NULL, 'Suvendu Saha', '11321030023372', 'Prime Bank Limited', '235262534', 'Kawranbazar Branch', 'ind', 'Cash', NULL, NULL, NULL, '75e78cdff9f925973d67fd9ee8dd6efa', NULL, '2015-12-26 19:14:56', '2020-06-28 07:49:24'),
(44, '100010000060', 1, 'Mr.', 'Md Sayeed-Bin-Islam', 'Md. Shahikul Islam', 'Monsura Begum', 'House#1604, Village- Tista gas road, Post- Donia,1236, Kodomtoli, Dhaka', 'House#1604, Village- Tista gas road, Post- Donia,1236, Kodomtoli, Dhaka', '19822617635375801', 'Dhaka', 'Dhaka', '00', '1982-11-01', '+8801787693728', 'sayeedbinislam123@gmail.com', 'Bangladesh', NULL, '1236', 'Service', NULL, 'MD. SAYEED-BIN-ISLAM', '0026121000068', 'SBAC Bank Limited', '270260438', 'Banani Branch', 'ind', 'Cash', NULL, NULL, NULL, 'e97eea1a63e86d4d43a0275f912efc1f', NULL, '2016-01-16 21:50:58', '2020-06-28 07:53:27'),
(45, '100010000062', 1, 'Mr.', 'MUSTAFIZUR RAHMAN', 'MUJIBUR RAHMAN', 'NOOR JAHAN BEGUM', 'Add Park, Home#38, Flat#5B, Road# 13/A, Dhanmondi, Dhaka', 'Add Park, Home#38, Flat#5B, Road# 13/A, Dhanmondi, Dhaka', '2696653268680', 'Dhaka', 'Dhaka', '00', '1963-02-23', '+8801713007995', 'mustafiz0062@gmail.com', 'Bangladesh', NULL, '1209', 'Service', NULL, 'Mustafizur Rahman', '030-0310022323', 'Jamuna Bank', '130260431', 'Banani Branch', 'ind', 'CIP', NULL, NULL, NULL, 'f9932d247d2198fc1a0f4b3adccc8695', NULL, '2016-02-01 19:23:44', '2020-06-28 07:57:18'),
(46, '100010000063', 1, 'Mr.', 'MOHAMMAD KHALED HOSSAIN CHOUDHURY', 'MOHAMMAD MOFAZZAL HOSSAIN CHOUDHURY', 'KHALEDA BEGUM', 'House #17/2, Moddho Bashabo, Shobujbag, Dhaka city Corporation', 'House #17/2, Moddho Bashabo, Shobujbag, Dhaka city Corporation', '2696827874307', 'Dhaka', 'Dhaka', '00', '1973-12-19', '+8801819506905', 'khaled@cvcflbd.com', 'Bangladesh', NULL, '1214', 'Service', NULL, 'MOHAMMAD KHALED HOSSAIN CHOUDHURY', '00834011308', 'Bank Asia Limited', '070262928', 'Mcb Dilkusha Branch', 'ind', 'CIP', NULL, NULL, NULL, 'ab14b40f447a76448ca6e95530d1c748', NULL, '2016-05-29 06:10:09', '2020-06-28 07:59:11'),
(47, '100010000064', 1, 'Mr.', 'YAZDAN YUSUF CHOWDHURY', 'M. Eusuf Chowdhury', 'Shafia Chowdhury', 'House no.12, Road 54/A, Gulshan 2, Dhaka', 'House no.12, Road 54/A, Gulshan 2, Dhaka', '2692619464874', 'Dhaka', 'Dhaka', '00', '1975-10-20', '+8801713012520', 'yazdan.chowdhury@gmail.com', 'Bangladesh', NULL, '1212', 'Banker', NULL, 'YAZDAN YUSUF CHOWDHURY', '0016-0130000123', 'Trust Bank Limited', '240261812', 'Gulshan Corp.', 'ind', 'Cash', NULL, NULL, NULL, '7efce1955669fbf10e90aefd8155001a', NULL, '2016-05-28 23:16:51', '2020-06-28 08:01:35'),
(48, '100010000065', 1, 'Mr.', 'Muhammad Faruque Hussain', 'Late Helal Uddin Ahamad', 'Late Rahima Khatun', 'House # 45, Rd # 11, Sector #10, Uttara Model Town', 'House # 45, Rd # 11, Sector #10, Uttara Model Town', '2650898485495', 'Dhaka', 'Dhaka', '00', '1961-02-15', '01914001579, 01914217319', 'faruque2345@yahoo.com', 'Bangladesh', NULL, '1230', 'Retd Army Officer', NULL, 'Muhammad Faruque Hussain', '02-0310236801', 'Trust Bank Ltd', '240275358', 'Corporate Br, Dhaka Cantt.', 'ind', 'Cash', NULL, NULL, NULL, 'ab0bdf1917655c7c6d5d4606419089ea', NULL, '2016-05-29 22:13:22', '2020-06-28 08:03:00'),
(49, '100010000066', 1, 'Mr.', 'Md Hakimuzzaman', 'Md Karimuzzaman', 'Kohinoor Begum', 'CWGC, C/O ARTDOC', 'CWGC, C/O ARTDOC', '`2693625851523', 'Dhaka', 'Dhaka', '00', '1972-12-01', '`8801769244442', 'hzmn1971@gmail.com', 'Bangladesh', NULL, 'Dhaka 1219', 'Service', NULL, 'Md Hakimuzzaman', '0002-0210101207', 'Trust Bank Ltd', '240275358', 'Principal', 'ind', 'Cash', NULL, NULL, NULL, '549246b8852c9ed8b6af3400707c21cf', NULL, '2016-06-06 19:59:58', '2020-06-28 08:04:59'),
(50, '100010000067', 1, 'Mr.', 'Md. Akram Hossain Jubaraj', 'Md. Akkas Ali', 'Majeda Begum', 'C-34/3, Mojidpur, Savar, Dhaka', 'C-34/3, Mojidpur, Savar, Dhaka', '2627207586360', 'Dhaka', 'Dhaka', '00', '1977-07-07', '+8801787667160', 'ahraj007@yahoo.com', 'Bangladesh', NULL, '1348', 'Service', NULL, 'Md. Akram Hossain Jubaraj', '18-1326747-01', 'SCB', '215261726', 'Gulshan', 'ind', 'Cash', NULL, NULL, NULL, '2d4fe9a9a97d6e1f2cdf218df88a3d6c', NULL, '2016-06-19 20:33:49', '2020-06-28 08:07:23'),
(51, '100010000069', 1, 'Mr.', 'Khandoker Anisur Rahman', 'Khandoker Mohammad Mokhlasur Rahman', 'Farhad  Begum Siddika', 'NDC, Mirpur Cant, Mirpur-12', 'NDC, Mirpur Cant, Mirpur-12', '2694813114986', 'Dhaka', 'Dhaka', '00', '1970-12-30', '1711162459', 'anis4505@yahoo.com', 'Bangladesh', NULL, '1216', 'Govt Svc', NULL, 'Khandoker Anisur Rahman', '0002-0210024069', 'Trust Bank Ltd', '240275358', 'Principle Branch', 'ind', 'Cash', NULL, NULL, NULL, '21cdbbed935f184eb594249754ece284', NULL, '2016-06-26 04:18:50', '2020-06-28 08:09:33'),
(52, '100010000070', 1, 'Mr.', 'FERDOUS HASAN SALIM', 'MD ABDUS SALIM', 'NADIRA AKHTER CHOWDHURY', 'COL STAFF, 9 INF DIV', 'COL STAFF, 9 INF DIV', '2650898264393', 'Dhaka', 'Dhaka', '00', '1972-12-01', '01711384145', 'fhs4410@yahoo.com', 'Bangladesh', NULL, '1348', 'GOVT SERVICE', NULL, 'FERDOUS HASAN SALIM', '0002-0210018174', 'TRUST BANK', '240264185', 'DHAKA CANTT', 'ind', 'Cash', NULL, NULL, NULL, '549246b8852c9ed8b6af3400707c21cf', NULL, '2016-06-25 20:08:00', '2020-06-28 08:11:04'),
(53, '100010000071', 1, 'Mr.', 'Md. Yasin Chowdhury', 'A.T.M mOHSIN Chowdhury', 'Mrs. Jahanara Begum', 'C  Tower,1222 Sk Mujib Road, Agabad', 'C  Tower,1222 Sk Mujib Road, Agabad', '1594133607999', 'Chittagong', 'Chittagong', '00', '1971-03-22', '+8801815885944', 'yasin.chowdhury@berichbd.com', 'Bangladesh', NULL, '4100', 'Service', NULL, 'Md. Yasin Chowdhury', '0012200000064', 'First Securities Islami Bank Limited', '105153160', 'Halishahar, chittagong', 'ind', 'Cash', NULL, NULL, NULL, '09452450fc17a901bbd22c92ded40e50', NULL, '2016-06-25 21:50:57', '2020-06-28 08:13:39'),
(54, '100010000072', 1, 'Mr.', 'Mohammad Habibur Rahman', 'Mohammad Luthfur Rahman', 'Parven Akter', 'House# 30/32,Lane #05,Road#01,Block# I,Halishahar,ctg.', 'House# 30/32,Lane #05,Road#01,Block# I,Halishahar,ctg.', '1593511697728', 'Chittagong.', 'Chittagong.', '00', '1980-06-01', '01730042512', 'habibur.rahman@berichbd.com', 'Bangladesh', NULL, '4216', 'Service', NULL, 'Mohammad Habibur Rahman', '201260034590', 'Eastern Bank Limited', '95154961', 'Mehedibagh', 'ind', 'Cash', NULL, NULL, NULL, '4873bc79ea943356d4400a16c349c9b3', NULL, '2016-06-27 05:12:36', '2020-06-28 08:16:42'),
(55, '100010000073', 1, 'Mr.', 'Mohammad Shafiul Islam', 'Mohammad Nurul Islam', 'Saleha Begum', 'Sufic ,Plot: 4, Block :K, PC Road,Halishahar,chittagong', 'Sufic ,Plot: 4, Block :K, PC Road,Halishahar,chittagong', '1594308933685', 'Chittagong.', 'Chittagong.', '00', '1976-09-17', '+8801730339161', 'shafiul.islam@berichbd.com', 'Bangladesh', NULL, '4216', 'Service', NULL, 'Mohammad Shafiul Islam', '0201260034954', 'Eastern Bank Limited', '95154961', 'Mehedibagh', 'ind', 'Cash', NULL, NULL, NULL, '1360f18e6e21854521d67b4ba6627116', NULL, '2016-06-27 05:30:56', '2020-06-29 04:50:26'),
(56, '100010000074', 1, 'Mr.', 'Muhammad Zaberul Islam', 'Muhammad Abdus Salam', 'Sabila Begum', 'Azam Bldg,House#31 (4th flr),Road#04,Green Valley Housing Society,', 'Azam Bldg,House#31 (4th flr),Road#04,Green Valley Housing Society,', '1595707045841', 'Chittagong.', 'Chittagong.', '00', '1980-06-25', '+8801730339169', 'zaberul.islam@berichbd.com', 'Bangladesh', NULL, '4216', 'Service', NULL, 'Muhammad Zaberul Islam', '0201260034604', 'Eastern Bank Limited', '95154961', 'Mehedibagh', 'ind', 'Cash', NULL, NULL, NULL, '13918e79c19fd7415ee10621b0c0a0f1', NULL, '2016-06-27 06:13:04', '2020-06-29 04:51:03'),
(57, '100010000075', 1, 'Mr.', 'Abdullah Al Mamun', 'Forhad uddin Ahmed', 'Sayeda Faizun Nahar', 'Be Rich Ltd,1222 Sk.Mujib Road,Agrabad,ctg.', 'Be Rich Ltd,1222 Sk.Mujib Road,Agrabad,ctg.', '1595707929175', 'Chittagong.', 'Chittagong.', '00', '1983-02-05', '+8801730339174', 'abdullah.mamun@berichbd.com', 'Bangladesh', NULL, '4216', 'Service', NULL, 'Abdullah Al Mamun', '1291010002250', 'Dutch Bangla Bank Ltd.', '90151480', 'CDA Avenue', 'ind', 'Cash', NULL, NULL, NULL, 'b023cf413b9bb1ec10062ac92ad4a183', NULL, '2016-06-27 06:27:35', '2020-06-29 04:51:48'),
(58, '100010000076', 1, 'Mr.', 'Rashed Ahmed', 'Md. Hasan Uddin', 'Nasibatun Nesa', 'ABC Heritage (4th floor),Team Ltd.3 Jashim Uddin Avenue,UttaraC/A,Dhaka', 'ABC Heritage (4th floor),Team Ltd.3 Jashim Uddin Avenue,UttaraC/A,Dhaka', '1593511697725', 'Dhaka', 'Dhaka', '00', '1979-12-03', '+8801712350245', 'rashedtkz@gmail.com', 'Bangladesh', NULL, '1230', 'Service', NULL, 'Rashed Ahmed', '0011-1010002414', 'Midland Bank', '285261727', 'Gulshan', 'ind', 'Cash', NULL, NULL, NULL, '8f1a1a8101e115c0e5e85fd10e21a1c1', '5578670', '2016-06-28 04:09:31', '2020-06-28 08:24:53'),
(59, '100010000077', 1, 'Mr.', 'ADNAN YUSUF CHOUDHURY', 'M. Eusuf Choudhury', 'Shafia Choudhury', 'Flat -A/5,Road:12,Block-H,House-38,Banani.', 'Flat -A/5,Road:12,Block-H,House-38,Banani.', '2692619470762', 'Dhaka', 'Dhaka', '00', '1968-01-13', '+8801711234383', 'choudhuryadnanchest@gmail.com', 'Bangladesh', NULL, '1213', 'Doctor', NULL, 'ADNAN YUSUF CHOUDHURY', '0016-0310024605', 'Trust Bank', '240261812', 'Gulshan Corporate Branch', 'ind', 'Cash', NULL, NULL, NULL, 'bc151984d9471934f2c690de2e90e3aa', NULL, '2017-05-22 05:49:48', '2020-06-28 08:26:29'),
(60, '100010000078', 1, 'Mr.', 'FUAD AHMED KHAN', 'A.S.M ABDUL BAKI KHAN', 'FARIDA KHANAM', 'TRUST BANK LIMITED, BANANI BRANCH, DELTA DACIA COMPLEX (1ST FLOOR) 36, KEMAL ATATURK AVENUE', 'TRUST BANK LIMITED, BANANI BRANCH, DELTA DACIA COMPLEX (1ST FLOOR) 36, KEMAL ATATURK AVENUE', '2693623433364', 'DHAKA', 'DHAKA', '00', '1978-11-01', '01726227872', 'fuadahmedamc@yahoo.com', 'Bangladesh', NULL, '1213', 'SERVICE', NULL, 'FUAD AHMED KHAN', '0074-0130000052', 'TRUST BANK LIMITED', '240263199', 'MOHAKHALI', 'ind', 'Cash', NULL, NULL, NULL, 'dab27f2c88905984cfbbc8185584abc0', NULL, '2017-10-04 05:21:08', '2020-06-28 08:28:02'),
(61, '100010000079', 1, 'Mr.', 'AHSAN MAHMOOD', 'MD. ABDUL MAZID', 'MRS.ALTAFUNNESSA', '9/10 SALIMULLAH ROAD FLAT #301, MOHAMMADPUR,DHAKA', '9/10 SALIMULLAH ROAD FLAT #301, MOHAMMADPUR,DHAKA', '1022012234531', 'DHAKA', 'DHAKA', '00', '1985-06-20', '+8801841091491', 'amtrial@gmail.com', 'Bangladesh', NULL, '1207', 'SERVICE', NULL, 'AHSAN MAHMOOD', '0003-0310036651', 'TRUST BANK LIMITED', '240276199', 'SKB', 'ind', 'Cash', NULL, NULL, NULL, '5e5ab66c20e40291222e2e9f32daa205', NULL, '2017-10-04 05:56:55', '2020-06-28 08:30:53'),
(62, '100010000080', 1, 'Mr.', 'MD. IFTAKHER HOSSAIN', 'MD. IDRIS HOSSAIN', 'MRS. NURUNNAHER', '1383/8/D, NOTUNBAG, TALTOLA, KHILGAON, DHAKA-1219', '1383/8/D, NOTUNBAG, TALTOLA, KHILGAON, DHAKA-1219', '26968286744587', 'DHAKA', 'DHAKA', '00', '1982-12-14', '01718103593', 'ifti.tbl@gmail.com', 'Bangladesh', NULL, '1219', 'SERVICE', NULL, 'MD. IFTAKHER HOSSAIN', '0003-0210010724', 'TRUST BANK LIMITED', '240276199', 'SKB', 'ind', 'Cash', NULL, NULL, NULL, 'd19180359cb60c19cb8873654bdab468', NULL, '2017-10-04 06:14:19', '2020-06-28 08:33:00'),
(63, '100010000081', 1, 'Mr.', 'FARIDA AKTER', 'M. HABIB ULLAH', 'SAMSUN NAHAR', 'HOUSE# 251, ROAD #121, GULSHAN-1, DHAKA-1212', 'HOUSE# 251, ROAD #121, GULSHAN-1, DHAKA-1212', '2692619557686', 'DHAKA', 'DHAKA', '00', '1973-04-21', '+8801819223835', 'farida.akter.1963@gmail.com', 'Bangladesh', NULL, '1212', 'SERVICE', NULL, 'FARIDA AKTER', '0061-0210001837', 'TRUST BANK LIMITED', '240261812', 'GULSHAN CORPORATE', 'ind', 'Cash', NULL, NULL, NULL, '2ebf8d6ac92d4bc0f8a663f36ab2b762', NULL, '2017-10-04 06:51:33', '2020-06-28 08:35:47'),
(64, '100010000082', 1, 'Mr.', 'Istiak Mahmud', 'MD. Abdush Shahid', 'Anufa Khatun', 'Flat # B-2, House # 27, Road # 13, Sector # 6, Uttara', 'Flat # B-2, House # 27, Road # 13, Sector # 6, Uttara', '2611038847339', 'Uttara', 'Uttara', '00', '1983-10-10', '+8801712641730', 'istiak.mahmud@gmail.com', 'Bangladesh', NULL, '1230', 'Private Service', '111861394668', 'Istiak Mahmud', '18-1217073-01', 'Standard Chartered', '215261726', 'Gulshan Branch', 'ind', 'Cash', NULL, NULL, NULL, '739c2eabdb674ff65725a00a8e3c9c0d', NULL, '2017-10-28 21:05:30', '2020-06-28 08:38:50'),
(65, '100010000083', 1, 'Mr.', 'MD.NIZAM UDDIN BHUIYAN', 'MD.MISBAH UDDIN BHUIYAN', 'PIARA BEGUM', '87 B.C.C road,Wari Dhaka', '87 B.C.C road,Wari Dhaka', '19923610267000221', 'Wari', 'Wari', '00', '1992-02-05', '01671695706', 'anik_bhuiyan@hotmail.com', 'Bangladesh', NULL, '1203', 'Student', NULL, 'MD.NIZAM UDDIN BHUIYAN', '3677101043891', 'Pubali Bnak Limited', '175263198', 'Mohakhali Branch', 'ind', 'Cash', NULL, NULL, NULL, 'bd0a961e6160d16384f19b08cef0cc54', NULL, '2017-11-06 20:39:40', '2020-06-28 08:40:24'),
(66, '100010000084', 1, 'Mr.', 'MD. Efadur Rahman', 'Md.Shamsur Rahman', 'Farida Begum', '2,Gawair (Old-93),Gawair,Ward No-3 ,Ashkona,Dakshinkhan,Dhaka', '2,Gawair (Old-93),Gawair,Ward No-3 ,Ashkona,Dakshinkhan,Dhaka', '1993-261103-8000-400', 'Dhaka', 'Dhaka', '00', '1993-08-03', '01671858730', 'efad1996@gmail.com', 'Bangladesh', NULL, '1230', 'Freelancer', NULL, 'Md.Efadur Rahman', '117.101.215797', 'Dutch-Bangla Bank Limited', '90264630', 'Uttara Branch', 'ind', 'Cash', NULL, NULL, NULL, 'aa2b589f4b9b6e87584d98268d21fac5', NULL, '2017-11-06 23:15:03', '2020-06-28 08:43:19'),
(67, '100010000085', 1, 'Mr.', 'Md. Rafiul Karim', 'K. S. A. Karim', 'Begum A. Karim', 'House No. 18, UN Road , Baridhara, Gulshan 1212', 'House No. 18, UN Road , Baridhara, Gulshan 1212', '19422692618000001', 'Dhaka', 'Dhaka', '00', '1942-04-09', '1713030191', 'monir09.arkay@gmail.com', 'Bangladesh', NULL, '1212', 'Business', NULL, 'Md. Rafiul Karim', '2182000018253', 'Dhaka Bank Ltd', '85260528', 'Baridhara', 'ind', 'Cash', NULL, NULL, NULL, '8a9fdaf34d0186a9f0a18af8148d2c91', NULL, '2017-11-21 19:09:32', '2020-06-28 08:45:21'),
(68, '100010000086', 1, 'Mr.', 'Angkan Biswas', 'Subash Chandara Biswas', 'Shova Biswas', 'Janani Mansion (3rd Floor), Kajla, Rajshahi.', 'Janani Mansion (3rd Floor), Kajla, Rajshahi.', '8194028194676', 'Rajshahi', 'Rajshahi', '00', '1986-12-15', '017-17143948', 'angkan.ca@gmail.com', 'Bangladesh', NULL, '6204', 'Service Holder', NULL, 'Angkan Biswas', '0016-0316003395', 'Trust Bank Limited', '240261812', 'Gulshan Corporate', 'ind', 'Cash', NULL, NULL, NULL, '5af50905c21b75f1e18a92bfe99a5af9', NULL, '2017-11-26 06:47:03', '2020-06-28 08:47:40'),
(69, '100010000087', 1, 'Mr.', 'KAYES MAHMUD', 'MD ABDUL HAKIM', 'MST ZAYEDA KHATUN', 'House # 36/37, Road # 2, Shekheretek, Mohammadpur, Dhaka-1207', 'House # 36/37, Road # 2, Shekheretek, Mohammadpur, Dhaka-1207', '2691648463143', 'DHAKA', 'DHAKA', '00', '1977-02-14', '+8801911041347', 'kayes058@yahoo.com', 'Bangladesh', NULL, '1207', 'Sevice', '250719179759', 'KAYES MAHMUD', '291130000017', 'UNION BANK LIMITED', '265260430', 'BANANI', 'ind', 'Cash', NULL, NULL, NULL, 'bb2ef6c41bf6cf19c8e9ef04b5c48519', NULL, '2017-11-28 22:57:52', '2020-06-28 08:49:15'),
(70, '100010000088', 1, 'Mr.', 'MD. MEZBAHUR RAHMAN', 'MD. MIZANUR RAHMAN', 'MST. KEYA RAHMAN', 'UNICAP SECURITIES LTD, RICHMOND CONCORD  TOWER (6TH FLOOR), 68 GULSHAN AVENUE, GULSHAN 1, DHAKA.', 'UNICAP SECURITIES LTD, RICHMOND CONCORD  TOWER (6TH FLOOR), 68 GULSHAN AVENUE, GULSHAN 1, DHAKA.', '2699238612023', 'DHAKA', 'DHAKA', '00', '1983-01-01', '+8801755694005', 'masududdin02@gmail.com', 'Bangladesh', NULL, '1212', 'BUSINESS', NULL, 'MD. MEZBAHUR RAHMAN', '18112045401', 'STANDARD CHARTERED BANK', '215262538', 'KARWAN BAZAR', 'ind', 'CIP', NULL, NULL, NULL, '3621eb15e846d1ee725c0e4003f4a88c', NULL, '2017-12-20 05:29:08', '2020-06-28 08:51:26'),
(71, '100010000089', 1, 'Mr.', 'FAHMIDA SULTANA SHOVA', 'Saddam Hossain', 'SYEDA HASNA HENA', 'CAPM COMPANY LIMITED. SAFURA TOWER(5TH Floor),20kemal Ataturk Avenue, Banani C/A, dhaka-1213', 'CAPM COMPANY LIMITED. SAFURA TOWER(5TH Floor),20kemal Ataturk Avenue, Banani C/A, dhaka-1213', '19912696805000100', 'DHAKA', 'DHAKA', '00', '1991-10-19', '+881674895116', 'fahamshova@gmail.com', 'Bangladesh', NULL, '1213', 'SERVICE', '193872620856', 'FAHMIDA SULTANA SHOVA', '0056-0316006189', 'TRUST BANK', '240260439', 'Banani', 'ind', 'Cash', NULL, NULL, NULL, '91b9429c61bb99d1bc39236fa1d409e7', '9567809', '2017-12-19 20:38:12', '2020-06-29 06:02:51'),
(72, '100010000091', 1, 'Mrs.', 'Maria Binte Muzib', 'Md. Mazibur Rahman', 'Delwara Begum', 'House-43, Road-1, Block-I,Banani', 'House-43, Road-1, Block-I,Banani', '19887528705131509', 'Dhaka', 'Dhaka', '00', '1988-04-19', '01819210951', 'maria.muzib@gmail.com', 'Bangladesh', NULL, '1213', 'Service Holder', '377754714000', 'Maria Binte Muzib', '18122375601', 'Standard Chartered Bank Limited', '2152612726', 'Gulshan Branch', 'ind', 'Cash', NULL, NULL, NULL, '4d85df9a9180373c2bcf9b13c2fdbd98', NULL, '2018-04-02 04:51:16', '2020-06-29 06:05:34'),
(73, '100010000093', 1, 'Mr.', 'SHEIKH MAHMUDUL HASSAN', 'S M ZAKARIA', 'BEGUM ASBIRA', 'House: D 16, Bldg: Polash, Naval Headquarters  Area, Banani', 'House: D 16, Bldg: Polash, Naval Headquarters  Area, Banani', '\"1592039144744\"', 'Dhaka', 'Dhaka', '00', '1965-01-01', '\"+8801730027320\"', 'hassanhydrographer@yahoo.com', 'Bangladesh', NULL, '1213', 'Defence Service', NULL, 'CDR SHEIKH MAHMUDUL HASSAN', '\"0018-0210003842\"', 'Trust Bank Limited', '240263799', 'Radission Water Garden Hotel', 'ind', 'Cash', NULL, NULL, NULL, 'fa883f3f4f98a19f50b08f9a2839cbcb', NULL, '2018-06-19 19:37:14', '2020-06-29 06:08:07'),
(74, '100010000094', 1, 'Ms.', 'TANZINA ZEREN', 'Ershad Uddin Bhuiyan', 'Sharifa Khanam', 'Level-6, 301/A Free School Street, Kathal Bagan Dhal', 'Level-6, 301/A Free School Street, Kathal Bagan Dhal', '2691650145690', 'Dhaka', 'Dhaka', '00', '1986-06-02', '1937626612', 'tanzina.zerin@gmail.com', 'Bangladesh', NULL, '1205', 'Business', NULL, 'TANZINA ZEREN', '0056-0310004638', 'Trust Bank Limited', '240260439', 'Banani', 'ind', 'CIP', NULL, NULL, NULL, 'f99f5464232b4bdb00d096696c68e104', NULL, '2018-06-24 21:22:10', '2020-06-29 06:25:50'),
(75, '100010000095', 1, 'Mr.', 'Mohammad Golam Kibria', 'Mohammad Ashkar Ali Bepary', 'Amena Khatun', 'Link3 Technologies Limited. 33, SMC Tower (5th Floor), Banani C/A, Dhaka- 1213', 'Link3 Technologies Limited. 33, SMC Tower (5th Floor), Banani C/A, Dhaka- 1213', '1923601848955', 'Dhaka', 'Dhaka', '00', '1976-02-02', '1711614308', 'gkibria@link3.net', 'Bangladesh', NULL, '1213', 'Private Job', '443964612886', 'Mohammad Golam Kibria', '181324081-01', 'Standard Chartered', '215261726', 'Gulshan', 'ind', 'CIP', NULL, NULL, NULL, 'eb4d8814b8319a8c92061272b9476484', NULL, '2018-06-24 21:36:21', '2020-06-29 06:25:18'),
(76, '100010000096', 1, 'Mr.', 'Md. Sarwar-E-Rahman', 'Md. Saidur Rahman', 'Mst. Rawshan Ara', 'House no- 81, Road- Sarat Gupta Road, P.O.- Dhaka, Sadar, Gandaria', 'House no- 81, Road- Sarat Gupta Road, P.O.- Dhaka, Sadar, Gandaria', '9118622373', 'Gandaria', 'Gandaria', '00', '1989-02-13', '+8801912974307', 'emon.sarwar88@gmail.com', 'Bangladesh', NULL, '1100', 'Service', NULL, 'Md. Sarwar-E-Rahman', '2101092092001', 'City Bank Limited', '225272321', 'Foreign Exchange', 'ind', 'Cash', NULL, NULL, NULL, 'ffdd1ff1b25496cffa34590f887e5109', NULL, '2018-06-26 05:37:28', '2020-06-29 06:30:54'),
(77, '100010000097', 1, 'Mr.', 'Md. Mahbub Alam', 'Md. Fazlul Karim', 'Motifa Khatun', 'House- 10, Kathalbahan, Dhanmondi', 'House- 10, Kathalbahan, Dhanmondi', '4622681825', 'Dhaka', 'Dhaka', '00', '1975-06-26', '+8801715577577', 'mahbub.alam@rocketmail.com', 'Bangladesh', NULL, '1205', 'Service', '20310118199', 'MD. Mahbub Alam', '0020310118199', 'Mutual Trust Bank Ltd.', '145275358', 'Principal Branch', 'ind', 'Cash', NULL, NULL, NULL, '7892f0a7c5273c17ff46b50e7792c7b3', '3432709', '2018-06-26 06:19:26', '2020-06-22 03:32:28'),
(78, '100010000098', 1, 'Mr.', 'Md. Habibur Rahman', 'MD Rafiqul Islam', 'Salma Begum', 'Marico Bangladesh Ltd. The Glass House, Plot-02, Block: SE(B)', 'Marico Bangladesh Ltd. The Glass House, Plot-02, Block: SE(B)', '1591904904464', 'Dhaka', 'Dhaka', '00', '1980-01-04', '1711541785', 'sumonhr@gmail.com', 'Bangladesh', NULL, '1212', 'Service', '467260976072', 'MD Habibur Rahman', '18123744201', 'SCB', '215261726', 'Gulshan Avenue, Gulshan 1', 'ind', 'Cash', NULL, NULL, NULL, '8b0c10bc219ea25532349617908cf0d0', NULL, '2018-06-25 23:19:51', '2020-06-22 03:45:27'),
(79, '100010000099', 1, 'Mr.', 'Md. Iftekhar-ul- Islam', 'Md.Nazmul Islam Mollah', 'Zulekha Begum', '153, distilary Road, gandaria,Dhaka-1204', '153, distilary Road, gandaria,Dhaka-1204', '5970840590', 'Gandaria', 'Gandaria', '00', '1986-12-20', '+8801675314928', 'iftekhar.ul.islam13@gmail.com', 'Bangladesh', NULL, '1100', 'Service Holder ', NULL, 'Md.Iftekhar-ul-Islam', '2072000045080', 'Dhaka Bank Limited', '085262539', 'KARWAN BAZAR', 'ind', 'CIP', NULL, NULL, NULL, 'd5f70fa2a43b21d8504e4389af221429', NULL, '2018-06-27 05:22:16', '2018-06-27 05:22:16'),
(80, '100010000100', 1, 'Mr.', 'AKM Ziaul Islam', 'Late AKM Nurul Islam', 'Zebun Nessa Islam', '31-32 Shoarighat Road, 1st Floor North', '31-32 Shoarighat Road, 1st Floor North', '9110009025', 'Dhaka', 'Dhaka', '00', '1972-04-24', '01755526222', 'akm.ziaul.islam@gmail.com', 'Bangladesh', NULL, '1211', 'Private Service', NULL, 'AKM Ziaul Islam', '107-101-65304', 'Dutch Bangla Bank Ltd.', '090262537', 'Karwan Bazar', 'ind', 'CIP', NULL, NULL, NULL, 'f055b5f8dbdf887b577aa98eeacd3fcd', NULL, '2018-11-14 04:49:20', '2018-11-14 04:49:20'),
(81, '100010000101', 1, 'Mr.', 'MD SHAMSUL HAQUE', 'LATE HAZI MAHMUZZAMAN MIAH ', 'MRS RABEYA KHATUN ', 'HOUSE-50, ROAD-01, SECTOR-09,UTTARA DHAKA-1230', 'HOUSE-50, ROAD-01, SECTOR-09,UTTARA DHAKA-1230', '2699501912337', 'DHAKA', 'DHAKA', '00', '1962-12-10', '+8801817049600', 'shamsbd2001@yahoo.com', 'Bangladesh', NULL, '1230', 'GOVT. SERVICE', NULL, 'MD SHAMSUL HAQUE', '0002-0210016596', 'TRUST BANK LIMITED', '240275358', 'PRINCIPAL BRANCH ', 'ind', 'CIP', NULL, NULL, NULL, 'e8a6856199ef8d23a406ad39dcfa09ca', NULL, '2019-01-01 23:10:23', '2019-01-01 23:10:23'),
(82, '100010000102', 1, 'Mr.', 'Test Capm Fund', 'Test', 'Test', 'Sec No-12,Block No-C, Road No-10,House No-01,(Pallabi), Mirpur-12, Dhaka-1216.', 'Sec No-12,Block No-C, Road No-10,House No-01,(Pallabi), Mirpur-12, Dhaka-1216.', '2696402507768', 'dhaka', 'dhaka', '00', '1983-08-01', '+8801789-16032', 'mehedi3555@gmail.com', 'Bangladesh', NULL, '1216', 'Private Service', NULL, 'A.A. Wahiduzzaman', '029-114-0000727', 'Union bank Limited', '265260430', 'Banani Branch', 'ind', 'Cash', NULL, NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', '9077210', '2019-01-08 21:50:02', '2019-12-11 03:44:36'),
(83, '100010000103', 1, 'Mr.', 'kamal ahmed', 'jamal ahmed ', 'rina khan', '67/h uttara dhaka ', '67/h uttara dhaka ', '765439043298', 'dhaka', 'dhaka', '00', '1984-10-10', '+8876890435', 'fahamshova@gmail.com', 'Bangladesh', NULL, '1230', 'Private Service', NULL, 'kamal ahmed', '678954320', 'pubali bank', '', 'banani', 'ind', 'Cash', NULL, NULL, NULL, 'f7e2190c68f06ccab34c43f45c2d59c4', NULL, '2019-01-12 21:06:44', '2019-01-12 21:06:44'),
(84, '100010000104', 1, 'Mr.', 'MOHAMMAD TAREKUL ISLAM', 'MD. SHIRAJUL ISLAM', 'MST. RAHIMA BEGUM', '36/B Jhigatola, Tannery Block, Dhaka-1209', '36/B Jhigatola, Tannery Block, Dhaka-1209', '1495456772', 'Dhaka', 'Dhaka', '00', '1977-01-05', '01819878824/9676834', 'mtarek77@gmail.com', 'Bangladesh', NULL, '1209', 'Service', NULL, 'MOHAMMAD TAREKUL ISLAM', '18132408001', 'Standard Chartered Bank Bangladesh', '215261726', 'Gulshan', 'ind', 'Cash', NULL, NULL, NULL, 'c72c6068a79ace726418cc119694edf8', NULL, '2019-06-11 22:52:05', '2019-06-11 22:52:05');
INSERT INTO `principal_applicant` (`PRINCIPAL_APPLICANT_ID`, `REGISTRATION_NO`, `TA_REG_NO`, `GENDER`, `NAME`, `FATHER_NAME`, `MOTHER_NAME`, `PRESENT_ADDRESS`, `PERMANENT_ADDRESS`, `NATIONAL_ID`, `CITY`, `DISTRICT`, `COUNTRY`, `BIRTHDAY`, `TELEPHONE`, `EMAIL`, `NATIONALITY`, `BOID`, `POST_CODE`, `OCCUPATION`, `ETIN`, `ACCOUNT_NAME`, `ACCOUNT_NO`, `BANK_NAME`, `ROUTING_NO`, `BRANCH`, `Type`, `DIVIDENT_OPT`, `IMAGE`, `APP_SIGN`, `NID_IMG`, `PASSWORD`, `CODE`, `created_at`, `updated_at`) VALUES
(85, '100010000105', 1, 'Mrs.', 'Syeda Shamim Ara', 'Khandoker Lokman Hakim', 'Momtaz Begum', 'F 15414,west Rampura, Wabda Road, Dhaka', 'F 15414,west Rampura, Wabda Road, Dhaka', '8683040771', 'Dhaka', 'Dhaka', '00', '1975-02-02', '01717315981', 'syeda.shamim@tblbd.com', 'Bangladesh', NULL, '1219', 'service', NULL, 'Syeda Shamim Ara', '0002-0310077804', 'Trust Bank Ltd', '240275358', 'Principal Brunch', 'ind', 'Cash', NULL, NULL, NULL, '181fd099ea59e59b8685ad7792efde73', NULL, '2019-06-11 23:31:01', '2019-06-11 23:31:01'),
(86, '100010000106', 1, 'Mr.', 'MUHAMMAD SHAIFUL ISLAM', 'Md. RAFIQUL ISLAM', 'KHADIJA AKTER', 'ASHINOL, BAGMARA, BAJITPUR, KISHORGONG', 'ASHINOL, BAGMARA, BAJITPUR, KISHORGONG', '4810651326493', 'KISHORGONG', 'KISHORGONG', '00', '1982-05-25', '+8801716516026', 'mshaiful.islam1@gmail.com', 'Bangladesh', NULL, '2337', 'SERVICE', NULL, 'MUHAMMAD SHAIFUL ISLAM', '2182564875001', 'City Bank Ltd.', '225260438', 'BANANI BRANCH', 'ind', 'Cash', '100010000106user_photo.jpg', '100010000106user_sign.jpg', '100010000106user_nid.jpg', '106d6ea8c30d3bd9f49587638c438c64', '1514016', '2019-06-12 00:22:00', '2020-07-12 04:58:05'),
(87, '100010000107', 1, 'Mrs.', 'Sukshana Sarkar', 'Chowdhury shuvasis paul bibak', 'Putul Sarker', 'H-131, Ceramic Road South Dariapur, Savar', 'H-131, Ceramic Road South Dariapur, Savar', '5624603112973', 'Manikgong', 'Manikgong', '00', '1981-06-26', '01732785658', 'rhcebibak@yahoo.com', 'Bangladesh', NULL, '1800', 'Housewife', NULL, 'SUKSHANA SARKER', '1701440184883', 'Estern Bank Ltd', '95264093', 'Savar', 'ind', 'Cash', NULL, NULL, NULL, 'b8314462dc76f41f607fd5214ee916b3', NULL, '2019-06-18 20:36:22', '2019-06-18 20:36:22'),
(88, '100010000108', 1, 'Mr.', 'MD.MAHMUDUL HAQUE KHAN', 'MD. MOJAMMEL HAQUE KHAN', 'SAFIA KHATUN', 'Road:11 House:798 Flat: A-3, Mirpur DOHS, Mirpur Dhaka-1216', 'Road:11 House:798 Flat: A-3, Mirpur DOHS, Mirpur Dhaka-1216', '5983964247', 'Dhaka', 'Dhaka', '00', '1967-06-08', '01715006297', 'mhaqkhan1967@gmail.com', 'Bangladesh', NULL, '1216', 'Business', NULL, 'MAJOR MD MAHMUDUL HAQUE KHAN (RETD)', '0018-0318000025', 'TRUST BANK LIMITED', '240263799', 'RWGH', 'ind', 'Cash', NULL, NULL, NULL, '8c277124befd5f55b0f1e265874a50a1', NULL, '2019-06-24 21:14:45', '2019-06-24 21:14:45'),
(89, '100010000109', 1, 'Mrs.', 'Fatema Begum', 'MD BAZLUR RASHID', 'Rahima Begum', 'VILL:KAZKANDA,P.O: RAJBARI, DIST: RAJBARI', 'VILL:KAZKANDA,P.O: RAJBARI, DIST: RAJBARI', '8227605115928', 'RAJBARI', 'RAJBARI', '00', '1971-01-01', '+8801722121760', 'bazlur@capmbd.com', 'Bangladesh', NULL, '7700', 'Housewife', NULL, 'Fatema Begum', '1101031019572', 'krishi bank', '035820734', 'RAJBARI', 'ind', 'Cash', NULL, NULL, NULL, '94177eeaea7c56eb61f7ecbff12b4d7f', NULL, '2019-06-25 19:28:00', '2019-06-25 19:28:00'),
(90, '100010000110', 1, 'Mr.', 'Md. Abdul Momin Saffat', 'Late Md. Abdul Awal', 'Late Rowsonara Begum', 'House#14, road#06, Sector#05, Uttara', 'House#14, road#06, Sector#05, Uttara', '2806715161', 'Uttara, Dhaka', 'Uttara, Dhaka', '00', '1993-10-10', '01671157595', 'saffat@live.com', 'Bangladesh', NULL, '1230', 'Service holder', NULL, 'Md. Abdul Momin Saffat', '00070310055841', 'Mutual Trust Bank Ltd.', '145264693', 'Uttara', 'ind', 'Cash', NULL, NULL, NULL, 'e78afa3ce0621247675eaa0ce890820d', NULL, '2019-06-30 04:17:29', '2019-06-30 04:17:29'),
(91, '100010000111', 1, 'Mr.', 'MD. NAZRUL ISLAM', 'MD. ISMILE HOSSAIN', 'MST. NURJAHAN', 'House-7, Road- 17, Rupsha Tower, Banani, Dhaka', 'House-7, Road- 17, Rupsha Tower, Banani, Dhaka', '2692618566487', 'Dhaka', 'Dhaka', '00', '1972-01-01', '01718274808', 'nabilislambd2017@gmail.com', 'Bangladesh', NULL, '1213', 'Service', NULL, 'MD. NAZRUL ISLAM', '0025095218018', 'One Bank Ltd', '165261726', 'Gulshan', 'ind', 'Cash', NULL, NULL, NULL, '84882c0986aa7daaef41fedbd2e3700e', NULL, '2019-06-29 20:06:59', '2020-04-20 05:41:12'),
(92, '100010000112', 1, 'Ms.', 'MAHFUZA BEGUM', 'Late Atiq Ullah Miah', 'Monju Ara Begum', 'Road no.- 09, House no.-11, Pallabi, Mirpur 11.5, Dhaka-1216', 'Road no.- 09, House no.-11, Pallabi, Mirpur 11.5, Dhaka-1216', '7322543062', 'Pallabi, Mirpur 11.5', 'Pallabi, Mirpur 11.5', '00', '1992-04-04', '1838004929', 'fuzibd@gmail.com', 'Bangladesh', NULL, '1216', 'Private Service', '654096281652', 'Mahfuza Begum', '2222586010001', 'City Bank', '225261174', 'Gulshan Women Branch', 'ind', 'Cash', NULL, NULL, NULL, '25f9e794323b453885f5181f1b624d0b', '3984211', '2019-07-07 19:05:56', '2020-06-22 03:45:59'),
(93, '100020000010', 1, 'Mr.', 'SYED WAJEDUL KARIM', 'SYED FAZLUL KARIM', 'WAJEDA BEDGUM', 'CHA-189, 3RD FLOOR, MOHAKHALI, WORELESSGATE, DHAKA-1212', 'CHA-189, 3RD FLOOR, MOHAKHALI, WORELESSGATE, DHAKA-1212', '2692620526254', 'DHAKA', 'DHAKA', '00', '1984-01-07', '+8801711978116', 'shaikat_write@hotmail.com', 'Bangladesh', NULL, '1212', 'SERVICE', NULL, 'MR. SYED WAJEDUL KARIM', '0016-0316001191', 'TRUST BANK LTD.', '240261812', 'GULSHAN CORPORATE', 'ind', 'Cash', NULL, NULL, NULL, '48383ab15031481835fefdc17c5552dd', NULL, '2014-03-25 06:07:42', '2014-03-25 06:07:42'),
(94, '100020000012', 1, 'Mr.', 'ASHUTOSH CHOWDHURY', 'LATE BIMALANGSHU CHOWDHURY', 'DIPALY CHOWDHURY', 'HOUSE- 18, ROAD- 03, BLOCK- E, BANASREE, RAMPURA', 'HOUSE- 18, ROAD- 03, BLOCK- E, BANASREE, RAMPURA', '2694069111969', 'DHAKA', 'DHAKA', '00', '1977-11-20', '+8801970357989', 'ashu.chy@gmail.com', 'Bangladesh', NULL, '1219', 'SERVICE', NULL, 'ASHUTOSH CHOWDHURY', '0016-0316001664', 'TRUST BANK LIMITED', '240261812', 'GULSHAN CORPORATE', 'ind', 'Cash', NULL, NULL, NULL, 'cbfd81a557b06877333b0574f27fcf97', NULL, '2014-03-27 00:03:08', '2014-03-27 00:03:08'),
(95, '100020000021', 1, 'Mrs.', 'SHAHANARA BEGUM', 'A . T. M. RASHIDUZZAMAN', 'HALIMA BEGUM', 'FLAT # 1511, BLOCK # B, MOTALIB PLAZA, 8 PARIBAG, DHAKA', 'FLAT # 1511, BLOCK # B, MOTALIB PLAZA, 8 PARIBAG, DHAKA', '2696352220558', 'DHAKA', 'DHAKA', '00', '1956-10-20', '+8801552342952', 'ahmadsajid1989@yahoo.com', 'Bangladesh', NULL, '1000', 'HOUSE WIFE', NULL, 'SHAHANARA BEGUM', '0151120363464', 'AL-ARAFAH ISLAMI BANK LIMITED', '015271390', 'MOTIJHEEL CORPORATE', 'ind', 'Cash', NULL, NULL, NULL, 'fae620f16ca90561364388bb1b26d2d9', NULL, '2014-04-23 20:46:30', '2014-04-23 20:46:30'),
(96, '100020000031', 1, 'Mr.', 'MOHAMMAD ARIFUL HOQUE MOLLIQ', 'AFZALUL HOQUE MOLLIQ', 'MRS. JAHANARA BEGUM', 'HOUSE-11/C, ROAD-01, PC CULTURE HOUSING SOCIETY,MOHAMMADPUR,DHAKA-1207,', 'HOUSE-11/C, ROAD-01, PC CULTURE HOUSING SOCIETY,MOHAMMADPUR,DHAKA-1207,', '2690246962785', 'BANGLADESH', 'BANGLADESH', '00', '1978-01-20', '+8801730358001', 'arifmolliq@gmail.com', 'Bangladesh', NULL, '1207', 'SERVICE', NULL, 'MOHAMMAD ARIFUL HOQUE MOLLIQ', '0016-0316001548', 'TRUST BANK LIMITED', '240261812', 'GULSHAN CORPORATE', 'ind', 'Cash', NULL, NULL, NULL, '896348aad411941a5308b6916395ace0', NULL, '2014-04-26 23:07:04', '2014-04-26 23:07:04'),
(97, '100020000036', 1, 'Mr.', 'ADEL AHMED', 'SHAMSUDDIN AHMED', 'NAJMA AHMED', 'HOUSE - 87, ROAD - 6 B, OLD DOHS, DHAKA CANTONMENT, DHAKA', 'HOUSE - 87, ROAD - 6 B, OLD DOHS, DHAKA CANTONMENT, DHAKA', '19652650898000017', 'BANGLADESH', 'BANGLADESH', '00', '1965-01-12', '+8801730017585', 'adelbd65@yahoo.co.uk ', 'Bangladesh', NULL, '.', 'SERVICE', NULL, 'ADEL AHMED', '0016-0316001315', 'TRUST BANK LIMITED', '240261812', 'GULSHAN CORPORATE', 'ind', 'Cash', NULL, NULL, NULL, '6f88a135f1c8329f0007a0b58eaf88a2', NULL, '2014-04-28 06:47:30', '2014-04-28 06:47:30'),
(98, '100020000068', 1, 'Mr.', 'MUFAKHKHARUL ISLAM', 'LATE ALHAJJ MD. YAKUB', 'LATE MOSAMMAT SAKINA AKHTER', 'HOUSE # 107, ROAD # 7, MOHAMMADIA HOUSING LTD. ANINDYA ABASHIK AREA,MOHAMMADPUR', 'HOUSE # 107, ROAD # 7, MOHAMMADIA HOUSING LTD. ANINDYA ABASHIK AREA,MOHAMMADPUR', '2691651196732', 'DHAKA', 'DHAKA', '00', '1954-03-01', '+8801731545665', 'mufakhkharul_islam@yahoo.com', 'Bangladesh', NULL, '1207', 'SERVICE', NULL, 'MUFAKHKHARUL ISLAM', '0016-0316001735', 'TRUST BANK LTD.', '240261812', 'GULSHAN CORPORATE', 'ind', 'Cash', NULL, NULL, NULL, '6a1d3da99b371d4bf3bb5789c147201e', NULL, '2016-06-22 05:21:56', '2016-06-22 05:21:56'),
(99, '100030000008', 1, 'Mr.', 'Debasish Das', 'Anutosh Das', 'Priti Das', 'House-29,Road-12, Sector-13, Uttara, Dhaka-1230', 'House-29,Road-12, Sector-13, Uttara, Dhaka-1230', '2691650134108', 'Dhaka', 'Dhaka', '00', '1976-01-05', '+8801534799537', 'ddasrana@gmail.com', 'Bangladesh', NULL, '1230', 'Service', NULL, 'Debasish Das', '123.101.66091', 'Dutch Bangla Bank Limited', '090330227', 'Board Bazar, Gazipur', 'ind', 'Cash', NULL, NULL, NULL, '25114a46835aeb6adbb8f1946b195d2b', NULL, '2014-03-22 20:40:06', '2014-03-22 20:40:06'),
(100, '100030000011', 1, 'Mr.', 'Reaz Uddin Ahmed', 'Late Farid Uddin Ahmed', 'Late Akimun Nessa', '41,Chamelibagh ( Shantinagar) Green PeacApt. Tower-1,Flat-B/13, Dhaka', '41,Chamelibagh ( Shantinagar) Green PeacApt. Tower-1,Flat-B/13, Dhaka', '6725806398170', 'Dhaka', 'Dhaka', '00', '1957-08-28', '+8801713047483', 'reazuddinahmed41@gmail.com', 'Bangladesh', NULL, '1217', 'Service', NULL, 'REAZ UDDIN AHMED', '0650100003934', 'Bangladesh Development Bank Ltd', '47271571', 'Principal', 'ind', 'Cash', NULL, NULL, NULL, 'cd812e74a32b55c52202d1132096ba17', NULL, '2014-03-26 22:28:57', '2019-10-27 03:38:47'),
(101, '100030000035', 1, 'Mr.', 'MD. EHSANUL KABIR', 'MD. ABDUL QUADER', 'MRS. HASINA BEGUM', '78/F, HASNA HENA, OFFRS QUATER, PANTHOPARA, JESSORE CANTONMENT', '78/F, HASNA HENA, OFFRS QUATER, PANTHOPARA, JESSORE CANTONMENT', '2650898950926', 'JESSORE', 'JESSORE', '00', '1972-01-03', '+8801730313203', 'nilakash@gmail.com', 'Bangladesh', NULL, '7400', 'SERVICE', NULL, 'MD. EHSANUL KABIR', '0002-0210000450', 'TRUST BANK LTD', '240275358', 'PRINCIPAL BRANCH', 'ind', 'Cash', NULL, NULL, NULL, 'f144ed4412c85fe471c65c7cd8e8d01e', NULL, '2014-04-28 05:48:19', '2014-04-28 05:48:19'),
(102, '100030000041', 1, 'Mr.', 'Wasef Nowsher', 'Late Nowsher Ali', 'Late Neelufar Yasmin', 'House- 371, Road- 28, New D.O.H.S, Mohakhali, Dhaka', 'House- 371, Road- 28, New D.O.H.S, Mohakhali, Dhaka', '2650898235841', 'Dhaka', 'Dhaka', '00', '1976-02-18', '+8801755534682', 'wasef.nowsher@gmail.com', 'Bangladesh', NULL, '1206', 'Service', NULL, 'Wasef Nowsher', '0016-0310011066', 'Trust Bank Limited', '240261812', 'Gulshan Corporate Branch', 'ind', 'Cash', NULL, NULL, NULL, '08f001e409d92702e76235cd78a99562', NULL, '2014-04-28 00:11:33', '2014-04-28 00:11:33'),
(103, '100030000042', 1, 'Mr.', 'Itteba Ahammad Khan', 'Late Mohammad Anisur Rahman khan ', 'Maksuda Khanam', 'Block B, Road -1, House 10, Bnasree , Rampura', 'Block B, Road -1, House 10, Bnasree , Rampura', '2693622291113', 'Dhaka', 'Dhaka', '00', '1980-08-19', '+8801712148877', 'itteba06@gmail.com', 'Bangladesh', NULL, '1219', 'Service ', NULL, 'Itteba Ahammad Khan', '0016-0210006350', 'Trust Bank Limited', '240261812', 'Gulshan', 'ind', 'Cash', NULL, NULL, NULL, '344b1ac18e5fe638778a4d6dbb8053b9', NULL, '2014-04-28 00:52:42', '2014-04-28 00:52:42'),
(104, '100030000050', 1, 'Mr.', 'MD. SHAHIDUL ISALM', 'MD. EMDADUR RAHMAN', 'MST. JOSHNA RAHMAN', 'HOUSE#36/B, ROAD NO#02, BLOCK#D, BASHANDHURA  RA, DHAKA-1229', 'HOUSE#36/B, ROAD NO#02, BLOCK#D, BASHANDHURA  RA, DHAKA-1229', '6155298367023', 'DHAKA', 'DHAKA', '00', '1971-12-10', '+8801730313233', 'shahid1186@yahoo.com', 'Bangladesh', NULL, '1229', 'DEFFENCE  SERVICE', NULL, 'MAJOR MD SHAHIDUL ISLAM', '0002-0210055508', 'TRUST BANK LIMITED', '240275358', 'PRINCIPAL BRANCH', 'ind', 'Cash', NULL, NULL, NULL, '050d9ec1f65f3f64317befaf9adc6d0c', NULL, '2014-04-29 20:25:38', '2014-04-29 20:25:38'),
(105, '100040000018', 1, 'Mr.', 'BANDHU PADO PAUL CHOWDHURY', 'KANAKENDU PAUL CHOWDHURY', 'GOURI PAUL CHOWDHURY', 'MADHABI PHARMECY, POST OFFICE ROAD, HABIGONJ', 'MADHABI PHARMECY, POST OFFICE ROAD, HABIGONJ', '1990362440400033', 'HABIGONJ', 'HABIGONJ', '00', '1990-01-06', '+8801737950446', 'bandhuhbj@yahoo.com', 'Bangladesh', NULL, '3300', 'STUDENT', '792796572407', 'BANDHU PADO PAUL CHOWDHURY', '1871010003223', 'DUTCH BANGLA BANK LIMITED', '090360613', 'SYLHET', 'ind', 'Cash', NULL, NULL, NULL, '974c14762366e0f3fa89f1912ed9fb2b', NULL, '2014-04-21 05:30:48', '2020-06-22 03:37:40'),
(106, '100050000037', 1, 'Mr.', 'RAFIQ AHMED', 'MOHAMMAD ABDUR RASHID MALLICK', 'HAYATUN NESA', 'HOUSE#11(2ND FLOOR),ROAD#02,BLOCK-A,HALISHAHAR HOUSING ESTATE,CHITTAGONG.', 'HOUSE#11(2ND FLOOR),ROAD#02,BLOCK-A,HALISHAHAR HOUSING ESTATE,CHITTAGONG.', '1595511159626', 'CHITTAGONG', 'CHITTAGONG', '00', '1978-12-19', '+8801912513818', 'rafiqmallick@gmail.com', 'Bangladesh', NULL, '4216', 'SERVICE', NULL, 'RAFIQ AHMED', '0000534016156', 'BANK ASIA LIMITED', '070150135', 'AGRABAD', 'ind', 'Cash', NULL, NULL, NULL, '8622c5924375ebdead313e227f49ccf7', NULL, '2014-04-27 19:08:13', '2014-04-27 19:08:13'),
(107, '100070000017', 1, 'Mr.', 'MD ARIFUL ISLAM', 'MD SHAHOR ALI MANDOL', 'MRS. SHEFALI BEGUM', 'J.C ROAD, DHANBANDI, SIRAJGONJ-6700', 'J.C ROAD, DHANBANDI, SIRAJGONJ-6700', '2691651170196', 'SIRAJGONJ', 'SIRAJGONJ', '00', '1984-08-06', '+8801711578067', 'ssl.arif.121@gmail.com    ', 'Bangladesh', NULL, '6700', 'SERVICE', NULL, 'MD ARIFUL ISLAM', '0010024931005', 'ONE BANk LIMITED', '165275354', 'PRINCIPAL BRANCH', 'ind', 'Cash', NULL, NULL, NULL, '82764fdd295da2e15160098e874563f7', NULL, '2014-04-16 23:07:23', '2014-04-16 23:07:23'),
(108, '100070000048', 1, 'Mr.', 'ABDUL AZIZ', 'ABDUL LATIF BAPARI', 'MILON TARA', 'TRIMONI TEKPARA, NONDIPARA, DHAKA-1203', 'TRIMONI TEKPARA, NONDIPARA, DHAKA-1203', '2696830910450', 'DHAKA', 'DHAKA', '00', '1988-01-01', '+8801678038348', 'abdulaziz0839@gmail.com', 'Bangladesh', NULL, '1203', 'SERVICE', NULL, 'ABDUL AZIZ', '0015026641006', 'ONE BANK LIMITD', '165275354', 'PRINCIPAL BRANCH', 'ind', 'Cash', NULL, NULL, NULL, '69a80057cd922b741c132d9ffd8b5582', NULL, '2014-04-28 22:05:05', '2014-04-28 22:05:05'),
(109, '300010000061', 1, 'Mrs.', 'MUKTA RAHMAN', 'Md. Maruful Hoque Chowdhury', 'Dipika Rahman', 'flat-5/B,House#03,Road-01,Sector-11,Uttara,Dhaka', 'flat-5/B,House#03,Road-01,Sector-11,Uttara,Dhaka', '19922694813000465', 'Dhaka', 'Dhaka', '00', '1992-03-10', '+8801686303738', 'mukta_jasmin@yahoo.com', 'Bangladesh', NULL, '1230', 'Service', NULL, 'MUKTA RAHMAN', '24-125157801', 'Standard Chartered Bank Limited', '215261726', 'Gulshan', 'ind', 'Cash', NULL, NULL, NULL, '1a6f9dd4bc0447e85a22f7e50dc48fd9', NULL, '2016-01-17 21:35:19', '2019-07-29 10:13:08'),
(110, '300030000030', 1, 'Mr.', 'MAJOR TAPAN BIKASH CHAKMA (RETD)', 'LATE MOHENDRA LAL CHAKMA', 'LATE JHUMKA LATA CHAKMA', 'HOUSE#29/B4, ROAD#04, DHAKA CANTONMENT RESIDENTIAL AREA,', 'HOUSE#29/B4, ROAD#04, DHAKA CANTONMENT RESIDENTIAL AREA,', '8428708150281', 'DHAKA', 'DHAKA', '00', '1960-11-07', '+8801819424022', 'tbchakma1960@gmail.com', 'Bangladesh', 'N/A', '1206', 'SERVICE', NULL, 'MAJOR TAPAN BIKASH CHAKMA (RETD)', '0002-0310262425', 'TRUST BANK LIMITED', '240275358', 'PRINCIPAL BRANCH', 'ind', 'CIP', NULL, NULL, NULL, '92e085f19ba93551457ecaae170f47d6', NULL, '2014-04-26 22:46:24', '2020-09-29 04:18:45'),
(148, '100010000113', 1, 'Ms.', 'TANIPA WADUD', 'MAJOR SYED GOLAM WADUD(RETD)', 'SHAHIDA BEGUM', 'HOUSE NO. 15/C, FLAT-5A ROAD NO.2, DHAKA CANTONMENT', 'HOUSE NO. 15/C, FLAT-5A ROAD NO.2, DHAKA CANTONMENT', 'BK0978516', 'DHAKA', 'DHAKA', '00', '1969-09-04', '01715023322', 'tanipawadud@gmail.com', 'Bangladeshi', NULL, '1207', 'HOUSE WIFE', NULL, 'TANIPA WADUD', '0002-0310265548', 'TRUST BANK', '240275358', 'Principal Brunch', 'ind', 'Cash', NULL, NULL, NULL, '775aa5e21327ff0daebd23dafeaae011', NULL, '2019-10-18 16:10:38', '2020-07-06 02:27:37'),
(149, '100010000114', 1, 'Ms.', 'Nurjahan Akther', 'S M Farhad', 'Sufia Khatoon', 'K/36, Kazi Nazrul Islam Road, Mohammadpur', 'K/36, Kazi Nazrul Islam Road, Mohammadpur', '238 400 1471', 'Dhaka', 'Dhaka', '00', '1976-10-01', '01713367892', 'anurjahan76@yahoo.com', 'Bangladeshi', NULL, '1207', 'Home Maker', NULL, 'Nurjahan Akther', '0041-0310029485', 'Trust Bank Ltd', '240262387', 'Kafrul', 'ind', 'Cash', NULL, NULL, NULL, '283dfc8d1bf370d948b125a58a977004', '1850141', '2019-10-18 16:29:57', '2020-09-23 11:22:10'),
(150, '100010000115', 1, 'Mr.', 'Md. Jahidul Islam', 'Jakir Mollah', 'Mst. Jahanara Begum', 'Village-Dadpur,PO-Chitarbazar, Upozila-Boalmari, Faridpur.', 'Village-Dadpur,PO-Chitarbazar, Upozila-Boalmari, Faridpur.', '1988291183000020', 'Boalmari', 'Faridpur', '00', '1988-12-16', '01732864852', 'Zahidul561@gmail.com', 'Bangladeshi', NULL, '7860', 'Service', NULL, 'MD. JAHIDUL ISLAM', '0560316006205', 'Trust Bank Limited', '240260439', 'Banani', 'ind', 'CIP', NULL, NULL, NULL, '933c9a68b0c26f7739ad5fcc2ce2ccdc', NULL, '2019-10-18 16:39:04', '2019-11-05 06:10:51'),
(151, '100010000116', 1, 'Ms.', 'MONJU ARA BEGUM', 'LATE ATIK ULLAH MIAH', 'LATE SYEDA ARFANNESA', 'Road no.- 09, House no.-11', 'Road no.- 09, House no.-11', '6442068687', 'Dhaka', 'Dhaka', '00', '1968-02-01', '01743745442', 'monjuarabegum001@gmail.com', 'Bangladeshi', NULL, '1216', 'House Wife', NULL, 'MONJU ARA BEGUM', '0028-0310042298', 'Trust Bank Limited', '240262987', 'Mirpur-11', 'ind', 'Cash', NULL, NULL, NULL, '6b4d4aca7efb4da6e19045ac9f458010', NULL, '2019-10-18 16:41:40', '2019-11-05 06:42:14'),
(152, '100010000117', 1, 'Mr.', 'Hassan Asheq Mahmood', 'Md. Sadiq Hassan', 'Rehana Hassan', '20/31 (8th Fllor) , Block B, Babar Road, Mohammadpur, Dhaka', '20/31 (8th Fllor) , Block B, Babar Road, Mohammadpur, Dhaka', '2833500206', 'Dhaka', 'Dhaka', '00', '1988-12-13', '01717437200', 'hamahmood@outlook.com', 'Bangladeshi', NULL, '1207', 'Private Service', NULL, 'Hassan Asheq Mahmood', '741120017329', 'Al-Arafah Islami Bank Ltd.', '015263137', 'Mirpur 10', 'ind', 'Cash', '100010000117user_photo.png', '100010000117user_sign.png', '100010000117user_nid.png', '9190ce31df9e5d15d5c087fa15732d5c', NULL, '2019-10-18 16:43:51', '2020-02-09 13:01:30'),
(153, '100010000118', 1, 'Mr.', 'S M FAJLUL BARI', 'M A Bari', 'Momtaz Begum', '18/6, Casa Rosita (A3), Sobhanbag, Tollabag', '18/6, Casa Rosita (A3), Sobhanbag, Tollabag', '1595512754320', 'Dhaka', 'Dhaka', '00', '1973-01-26', '01819359893', 'smfbari@gmail.com', 'BANGLADESHI', 'N/A', '1207', 'Service', NULL, 'S M FAJLUL BARI', '00734022460', 'BANK ASIA LTD', '070276130', 'SCOTIA', 'ind', 'Cash', '100010000118user_photo.png', '100010000118user_sign.png', '100010000118user_nid.jpg', 'deb54ffb41e085fd7f69a75b6359c989', '1909118', '2019-12-04 09:01:18', '2020-02-09 12:36:28'),
(154, '100010000119', 1, 'Mr.', 'AL AMIN AHMED', 'NUR MOHAMMAD', 'ASIA KHATUN', 'MAMUDPUR, KUTUBPUR, FATULLAH, NARAYANGANJ', 'MAMUDPUR, KUTUBPUR, FATULLAH, NARAYANGANJ', '6715879292737', 'NARAYANGANJ', 'NARAYANGANJ', '00', '1979-02-18', '01705798179', 'alamindip.1979@gmail.com', 'Bangladesh', NULL, '1421', 'SERVICE', NULL, 'AL AMIN AHMED', '1.1011211917574E+14', 'MERCANTILE BANK LIMITED', '140275353', 'MAIN BRANCH, DHAKA', 'ind', 'Cash', '100010000119user_photo.png', '100010000119user_sign.png', '100010000119user_nid.jpg', '67aa32a1a83b0ac24b4a944f48c6af77', NULL, '2019-12-30 13:12:16', '2020-02-09 12:20:29'),
(155, '100010000120', 1, 'Mr.', 'MD. Murshed Alam', 'Azizul Haque Mia', 'Shamshunnahar', '5/2 East Bashabo, East bashabo, Sobujbag, Dhaka', '5/2 East Bashabo, East bashabo, Sobujbag, Dhaka', '4168205856', 'East bashabo, sobujbag, Dhaka', 'Dhaka', '00', '1973-12-31', '01611863585', 'murshed.alam@team.com.bd', 'Bangladesh', NULL, '1214', 'Service', NULL, 'MD. MURSHED ALAM', '2182564284001', 'City Bank Ltd.', '225260438', 'Banani', 'ind', 'Cash', '100010000120user_photo.jpg', '100010000120user_sign.png', '100010000120user_nid.png', 'ee82b11edbd4f34a1081986fb2ecf895', NULL, '2020-06-28 06:10:05', '2020-08-13 04:31:38'),
(156, '100010000121', 1, 'Mr.', 'SUDIP SAHA', 'SHAPON CHANDRA SAHA', 'DIPA SAHA', 'Holding: C/60/61, NOBIN CHANDRA GOSHAMI ROAD, RIVER VIEW HOUSING, FORIDABAD, SHAMPUR, DHAKA', 'Holding: C/60/61, NOBIN CHANDRA GOSHAMI ROAD, RIVER VIEW HOUSING, FORIDABAD, SHAMPUR, DHAKA', '2697683276813', 'FORIDABAD', 'DHAKA', '00', '1988-10-28', '01755518860', 'sudip.shuvo@gmail.com', 'Bangladesh', NULL, '1204', 'SERVICE', NULL, 'SUDIP SAHA', '1141010077614', 'DUTCHBANGLA BANK LIMITED', '090263194', 'MOHAKHALI BRANCH', 'ind', 'CIP', NULL, NULL, NULL, 'a6e03a7f2112f7ead452884d179db185', NULL, '2020-08-26 06:07:03', '2020-09-23 07:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2019-10-07 04:48:01', '2019-10-07 04:48:01'),
(2, 'Executive', 'web', '2019-10-07 05:06:18', '2019-10-07 05:06:18'),
(3, 'Manager', 'web', '2019-10-07 05:13:13', '2019-10-07 05:13:13'),
(4, 'Accounts', 'web', '2019-10-07 05:13:51', '2019-10-07 05:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `salesagent`
--

CREATE TABLE `salesagent` (
  `SALESAGENT_ID` bigint(20) UNSIGNED NOT NULL,
  `SALESAGENT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SA_TYPE` int(11) NOT NULL COMMENT '1 - Individual , 2 - Corporate',
  `SALESAGENT_CODE` int(11) NOT NULL,
  `ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACT_PERSON` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CP_DESIG` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TEL` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FAX` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salesagent`
--

INSERT INTO `salesagent` (`SALESAGENT_ID`, `SALESAGENT`, `SA_TYPE`, `SALESAGENT_CODE`, `ADDRESS`, `CONTACT_PERSON`, `CP_DESIG`, `TEL`, `MOBILE`, `FAX`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Capm Company Limited', 1, 1, 'Safura Tower (5th Floor) 20 Kemal Ataturk Avenue Banani CA Dhaka-1213', 'Rumpa', 'Trainee Officer', 'N/A', 'N/A', 'N/A', 'rumpa@capmbd.com', '2019-09-19 05:21:47', '2019-09-19 05:21:47'),
(2, 'Capm Advisory Limited', 2, 2, 'Tower Hamlet (9th Floor) 16, Kemal Ataturk Avenue Banani CA, Dhaka-1213.', 'Syed Wajedul Karim', 'Sr. Associate', '+8802 9822391-2', '+88-01847 054 714', '+88-02-9822393', 'wajed@capmadvisorybd.com', '2019-09-19 05:23:15', '2019-09-19 05:23:15'),
(3, 'Trust Bank Limited', 1, 3, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2019-09-19 05:24:26', '2019-09-19 05:24:26'),
(4, 'LankaBagla Securites Limited', 1, 4, 'A.A. Bhaban (Level 5), 23 Motijheel, CA Dhaka-1000', 'Mr. Wali Ul Islam', 'CEO', 'N/A', 'N/A', 'N/A', 'N/A', '2019-09-19 05:25:33', '2019-09-19 05:25:33'),
(5, 'Be Rich Limited', 1, 5, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2019-09-19 05:26:44', '2019-09-19 05:26:44'),
(6, 'BRAC EPL Stock Brokerage Limited', 1, 6, 'WW Tower (Level 8) 68 Motijheel CA, Dhaka-1000', 'Md. Masud Hossain', 'Head of Brokerage Services', '+ (880)-2-9514721-30', '01730701733', '(880)-2-9553306-7', 'masud.hossain@bracepl.com', '2019-09-19 05:28:22', '2019-09-19 05:28:22'),
(7, 'Sharp Securities Ltd.', 1, 7, 'Samabaya Sadan (5th Floor), 9D Motijheel CA, Dhaka-1000', 'Shaem Mahmud Khan', 'Asst. Manager (In charge -CDBL)', '9513651-4, Ext-123', '01678038332', 'N/A', 'ssl.shaem.111@gmail.com', '2019-09-19 05:30:23', '2019-09-19 05:30:23'),
(8, 'Mehedi Hassan', 1, 8, 'Dhaka', 's', 'Manager', '54', '455', '54564', 'sumir@Paul131', '2019-10-09 07:41:21', '2019-10-09 07:41:21'),
(9, 'Sumit', 1, 9, 's', 's', 's', 's', 's', 's', 'sumit@capmbd.com', '2019-10-16 11:42:14', '2019-10-16 11:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `salescenter`
--

CREATE TABLE `salescenter` (
  `SALESCENTER_ID` bigint(20) UNSIGNED NOT NULL,
  `APPLICANT_COUNTRY_ID` int(11) NOT NULL,
  `CURRENCY_TYPE_ID` int(11) NOT NULL,
  `SALESAGENT_ID` int(11) NOT NULL,
  `DISTRICT_ID` int(11) NOT NULL,
  `AGENT_AREA_ID` int(11) NOT NULL,
  `SCID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SC_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SC_PHONE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SC_EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salescenter`
--

INSERT INTO `salescenter` (`SALESCENTER_ID`, `APPLICANT_COUNTRY_ID`, `CURRENCY_TYPE_ID`, `SALESAGENT_ID`, `DISTRICT_ID`, `AGENT_AREA_ID`, `SCID`, `SC_NAME`, `SC_PHONE`, `SC_EMAIL`, `Image`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 1, 38, 19, '01BAN001', 'Fahamida Sultana Shova', '01847054877', 'tauf@capmbd.com', NULL, '8503fc73b4f188cd9289f41c88d2dc5f', '2020-03-01 05:15:33', '2020-03-01 05:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `SECTOR_ID` bigint(20) UNSIGNED NOT NULL,
  `SECTOR_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`SECTOR_ID`, `SECTOR_NAME`, `created_at`, `updated_at`) VALUES
(1, 'Bank', '2019-12-28 07:23:45', '2019-12-28 09:11:19'),
(2, 'Textile', '2019-12-28 07:29:13', '2019-12-28 07:29:13'),
(3, 'Engineering', '2019-12-28 07:29:30', '2019-12-28 09:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `spon`
--

CREATE TABLE `spon` (
  `SPON_ID` bigint(20) UNSIGNED NOT NULL,
  `COMPANY_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SPON_CONTACT_PERSON` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SPON_CONTACT_PERSON_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SPON_CONTACT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SPON_CONTACT_PHONE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SPON_CONTACT_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SPON_EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spon`
--

INSERT INTO `spon` (`SPON_ID`, `COMPANY_NAME`, `SPON_CONTACT_PERSON`, `SPON_CONTACT_PERSON_MOBILE`, `SPON_CONTACT_ADDRESS`, `SPON_CONTACT_PHONE`, `SPON_CONTACT_MOBILE`, `SPON_EMAIL`, `created_at`, `updated_at`) VALUES
(1, 'CAPM Company Limited', 'Mahmud Hussain, CFA', '01841228811', '20, Kemal Ataturk Avenue, Banani C/A, Dhaka 1213, Bangladesh', '9856268-9', '01841228811', 'ceo@capmbd.com', '2019-04-10 10:29:14', '2020-01-26 11:34:46'),
(2, 'Trust Bank Ltd.', 'Mr. X', '0179554', 'Dhaka', 'NA', '01587', 'sumit@capmbd.com', '2019-10-09 07:19:02', '2019-10-09 07:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `STOCK_ID` bigint(20) UNSIGNED NOT NULL,
  `STOCK_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SECTOR_ID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`STOCK_ID`, `STOCK_NAME`, `SECTOR_ID`, `created_at`, `updated_at`) VALUES
(1, 'Union', 1, '2019-12-29 05:09:58', '2019-12-29 07:25:43'),
(2, 'One', 1, '2019-12-29 05:10:08', '2019-12-29 05:10:08'),
(3, 'AJI', 2, '2019-12-29 05:10:22', '2019-12-29 08:30:52'),
(4, 'IBBL', 1, '2020-01-01 07:27:17', '2020-01-01 07:27:17'),
(5, 'Odesa', 2, '2020-01-01 07:27:53', '2020-01-01 07:27:53'),
(6, 'AK TEX', 2, '2020-01-01 07:28:50', '2020-01-01 07:28:50'),
(7, 'AB BANK', 1, '2020-01-22 16:36:01', '2020-01-22 16:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `to_pdf`
--

CREATE TABLE `to_pdf` (
  `TO_PDF_ID` bigint(20) UNSIGNED NOT NULL,
  `TO_URL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HEADING` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `to_pdf`
--

INSERT INTO `to_pdf` (`TO_PDF_ID`, `TO_URL`, `HEADING`, `created_at`, `updated_at`) VALUES
(4, 'investment/tradeorder/TO_City Brokerage_12_Jan_2020_15_03_55_PM.pdf', '12-Jan-2020 City Brokerage', '2020-01-12 09:03:55', '2020-01-12 09:03:55'),
(5, 'investment/tradeorder/TO_Brok2_12_Jan_2020_15_04_22_PM.pdf', '12-Jan-2020 Brok2', '2020-01-12 09:04:22', '2020-01-12 09:04:22'),
(6, 'investment/tradeorder/TO_Brok3_12_Jan_2020_15_04_31_PM.pdf', '12-Jan-2020 Brok3', '2020-01-12 09:04:31', '2020-01-12 09:04:31'),
(10, 'investment/tradeorder/TO_City Brokerage_22_Jan_2020_18_42_12_PM.pdf', '22-Jan-2020 City Brokerage', '2020-01-22 12:42:12', '2020-01-22 12:42:12'),
(11, 'investment/tradeorder/TO_BRAC EPL STOCK BROKERAGE_22_Jan_2020_22_39_27_PM.pdf', '22-Jan-2020 BRAC EPL STOCK BROKERAGE', '2020-01-22 16:39:27', '2020-01-22 16:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `to_per`
--

CREATE TABLE `to_per` (
  `per_id` bigint(20) UNSIGNED NOT NULL,
  `SECTOR_PER` double(8,2) NOT NULL,
  `STOCK_PER` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `to_per`
--

INSERT INTO `to_per` (`per_id`, `SECTOR_PER`, `STOCK_PER`, `created_at`, `updated_at`) VALUES
(1, 30.00, 10.00, '2020-01-14 09:52:30', '2020-01-22 05:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `trade_order`
--

CREATE TABLE `trade_order` (
  `TO_ID` bigint(20) UNSIGNED NOT NULL,
  `PRO_REG_ID` int(11) NOT NULL,
  `TRADE_DATE` date NOT NULL,
  `BROKER_ID` int(11) NOT NULL,
  `STOCK_ID` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `PRICE` double(8,2) NOT NULL,
  `STATUS` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trade_order`
--

INSERT INTO `trade_order` (`TO_ID`, `PRO_REG_ID`, `TRADE_DATE`, `BROKER_ID`, `STOCK_ID`, `QUANTITY`, `PRICE`, `STATUS`, `created_at`, `updated_at`) VALUES
(11, 1, '2020-01-12', 1, 1, 500, 120.75, 'S', '2020-01-12 08:51:13', '2020-01-12 08:52:54'),
(12, 1, '2020-01-12', 1, 4, 350, 100.50, 'S', '2020-01-12 08:52:04', '2020-01-12 08:53:00'),
(13, 1, '2020-01-12', 2, 3, 100, 100.50, 'S', '2020-01-12 08:52:23', '2020-01-12 08:53:05'),
(14, 1, '2020-01-12', 3, 5, 600, 120.75, 'S', '2020-01-12 08:52:47', '2020-01-12 08:53:10'),
(15, 1, '2020-01-22', 1, 2, 5000, 120.00, 'S', '2020-01-22 12:28:31', '2020-01-22 12:30:36'),
(16, 1, '2020-01-22', 4, 7, 5000, 7.00, 'S', '2020-01-22 16:38:14', '2020-01-28 13:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `trustee`
--

CREATE TABLE `trustee` (
  `TRUSTEE_ID` bigint(20) UNSIGNED NOT NULL,
  `TRUSTEE_COMPANY_NAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TRUSTEE_CONTACT_PERSON` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TRUSTEE_CONTACT_PERSON_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TRUSTEE_CONTACT_ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TRUSTEE_CONTACT_PHONE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TRUSTEE_CONTACT_MOBILE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TRUSTEE_EMAIL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trustee`
--

INSERT INTO `trustee` (`TRUSTEE_ID`, `TRUSTEE_COMPANY_NAME`, `TRUSTEE_CONTACT_PERSON`, `TRUSTEE_CONTACT_PERSON_MOBILE`, `TRUSTEE_CONTACT_ADDRESS`, `TRUSTEE_CONTACT_PHONE`, `TRUSTEE_CONTACT_MOBILE`, `TRUSTEE_EMAIL`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh General Insurance Company Limited', 'Adnan Alam', '018199215349', '42 Dilkusha C/A, Motijheel, Dhaka-1000', '9555073', '018199215349', 'adnan.bgic@yahoo.com', '2019-04-10 10:31:30', '2019-07-24 09:07:27'),
(2, 'ICB', 'N/A', '766778', 'Motijheel', '987', '9087', 'sumit@cahobd.com', '2019-10-09 07:22:20', '2020-01-26 12:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `trusteefee_rule`
--

CREATE TABLE `trusteefee_rule` (
  `TRUSTEEFEE_RULE_ID` bigint(20) UNSIGNED NOT NULL,
  `SPONSOR_ID` int(11) NOT NULL,
  `MAXLIMIT` double(7,4) NOT NULL,
  `PAYMENT_TERM_FLAG` int(11) NOT NULL COMMENT '1 - Monthly , 2 - Quarterly , 3 - Half Yearly & 4 - Annualy',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trusteefee_rule`
--

INSERT INTO `trusteefee_rule` (`TRUSTEEFEE_RULE_ID`, `SPONSOR_ID`, `MAXLIMIT`, `PAYMENT_TERM_FLAG`, `created_at`, `updated_at`) VALUES
(1, 1, 0.0020, 3, '2019-04-10 10:42:29', '2020-01-26 16:06:56'),
(2, 2, 0.0020, 3, '2019-05-07 05:45:19', '2019-05-07 05:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `unit_purchase`
--

CREATE TABLE `unit_purchase` (
  `UNIT_PURCHASE_ID` bigint(20) NOT NULL,
  `SPONSOR_ID` int(11) NOT NULL,
  `UNIT` int(11) NOT NULL,
  `RATE` double(8,2) NOT NULL,
  `TOTAL_AMOUNT` double(10,2) NOT NULL,
  `PURCHASE_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ALLOT_REF_NO` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HOUSE_CNF_REC_FLAG` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `HOUSE_CNF_REC_DATE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SC_CNF_FLAG` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `SC_CNF_DATE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PURCHASE_PERSON_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `REGISTRATION_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `REMAINING_UNITS` int(11) NOT NULL,
  `SALESCENTER_ID` int(11) NOT NULL,
  `MODE_PAY` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BCPODDTC_NO` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BCPODDTC_DATE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BANK` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INVESTOR_TYPE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OPS_ID` int(11) DEFAULT NULL,
  `ACC_ID` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_purchase`
--

INSERT INTO `unit_purchase` (`UNIT_PURCHASE_ID`, `SPONSOR_ID`, `UNIT`, `RATE`, `TOTAL_AMOUNT`, `PURCHASE_NO`, `ALLOT_REF_NO`, `HOUSE_CNF_REC_FLAG`, `HOUSE_CNF_REC_DATE`, `SC_CNF_FLAG`, `SC_CNF_DATE`, `PURCHASE_PERSON_ID`, `REGISTRATION_NO`, `REMAINING_UNITS`, `SALESCENTER_ID`, `MODE_PAY`, `BCPODDTC_NO`, `BCPODDTC_DATE`, `BANK`, `INVESTOR_TYPE`, `OPS_ID`, `ACC_ID`, `created_at`, `updated_at`) VALUES
(1, 1, 1000, 100.00, 100000.00, '1', '48', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000044', 0, 1, 'chq', '0205896', '2013-11-28', 'TRUST BANK LIMITED', 'indv', NULL, NULL, '2014-04-28 18:00:00', NULL),
(2, 1, 10, 103.00, 1030.00, '2', '147', 'A', '2016-01-27', 'A', '1970-01-01', '01BAN001', '300010000061', 0, 1, 'po', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-01-17 18:00:00', NULL),
(3, 1, 2000, 100.00, 200000.00, '3', '45', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000045', 1000, 1, 'chq', '6661366', '2014-04-27', 'Prime Bank Limited', 'indv', NULL, NULL, '2014-04-28 18:00:00', NULL),
(4, 1, 500, 104.20, 52100.00, '4', '174', 'A', '2016-05-30', 'A', '2016-05-30', '01BAN001', '100010000063', 0, 1, 'chq', '', '2017-10-30', 'SCB', 'indv', NULL, NULL, '2016-05-28 18:00:00', NULL),
(5, 1, 6000, 104.20, 625200.00, '5', '176', 'A', '2016-05-30', 'A', '2016-05-30', '01BAN001', '100010000064', 0, 1, 'chq', '4357683', '2017-11-08', 'DHAKA BANK LTD', 'indv', NULL, NULL, '2016-05-28 18:00:00', NULL),
(6, 1, 2000, 104.50, 209000.00, '6', '1', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000066', 2000, 1, 'chq', '', '2017-11-08', 'SCB', 'indv', NULL, NULL, '2016-06-07 18:00:00', NULL),
(7, 1, 2000, 104.50, 209000.00, '7', '178', 'A', '2016-06-12', 'A', '2016-06-12', '01BAN001', '100010000065', 0, 1, 'chq', 'CADB3888742', '2017-11-08', 'Trust Bank Limited ', 'indv', NULL, NULL, '2016-06-07 18:00:00', NULL),
(8, 1, 6700, 104.60, 700820.00, '8', '179', 'A', '2016-06-23', 'A', '2016-06-23', '01BAN001', '100020000068', 0, 1, 'chq', '', '2017-11-27', 'SCB', 'indv', NULL, NULL, '2016-06-21 18:00:00', NULL),
(9, 1, 380, 104.40, 39672.00, '9', '182', 'A', '2016-06-29', 'A', '2016-06-30', '01BAN001', '100010000071', 0, 1, 'chq', '0535942', '2018-01-08', 'Trust Bank', 'indv', NULL, NULL, '2016-06-25 18:00:00', NULL),
(10, 1, 380, 104.40, 39672.00, '10', '187', 'A', '2016-06-29', 'A', '2016-06-30', '01BAN001', '100010000075', 0, 1, 'chq', '', '2018-04-01', 'SCB', 'indv', NULL, NULL, '2016-06-26 18:00:00', NULL),
(11, 1, 3000, 104.40, 313200.00, '11', '188', 'A', '2016-06-29', 'A', '2016-06-30', '01BAN001', '100010000073', 0, 1, 'chq', '0000392', '2018-05-09', 'IFIC Bank Limited', 'indv', NULL, NULL, '2016-06-26 18:00:00', NULL),
(12, 1, 1300, 104.40, 135720.00, '12', '189', 'A', '2016-06-28', 'A', '2016-06-28', '01BAN001', '100010000069', 0, 1, 'chq', '', '2018-05-13', 'SCB', 'indv', NULL, NULL, '2016-06-26 18:00:00', NULL),
(13, 1, 200, 100.00, 20000.00, '13', '3', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000002', 200, 1, 'chq', '6868597', '2014-04-17', 'Export Import Bank Limited', 'indv', NULL, NULL, '2014-03-19 18:00:00', NULL),
(14, 1, 250, 100.00, 25000.00, '14', '14', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000013', 250, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2014-03-30 18:00:00', NULL),
(15, 1, 250, 100.00, 25000.00, '15', '15', 'A', '2014-04-01', 'A', '2014-05-26', '01BAN001', '100010000014', 250, 1, 'chq', '4714774', '2014-04-30', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-03-30 18:00:00', NULL),
(16, 1, 5000, 100.00, 500000.00, '16', '46', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000028', 5000, 1, 'chq', '7194044', '2014-03-19', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-04-28 18:00:00', NULL),
(17, 1, 750, 100.00, 75000.00, '17', '57', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000047', 0, 1, 'chq', '', '2014-03-23', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(18, 1, 200, 103.00, 20600.00, '18', '103', 'A', '2015-04-29', 'A', '1970-01-01', '01BAN001', '100010000056', 0, 1, 'chq', '', '1970-01-01', 'Standard Chartered Bank', 'indv', NULL, NULL, '2015-04-26 18:00:00', NULL),
(19, 1, 100000, 100.00, 10000000.00, '19', '6', 'A', '2014-04-01', 'A', '2014-04-02', '01BAN001', '200010000001', 100000, 1, 'chq', 'A2368394', '2014-04-29', 'Trust Bank Limited', 'inst', NULL, NULL, '2014-03-19 18:00:00', NULL),
(20, 1, 200000, 100.00, 20000000.00, '20', '51', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200020000004', 78630, 1, 'chq', '9534475', '2014-03-23', 'Dutch Bangla Bank Limited', 'inst', NULL, NULL, '2014-04-28 18:00:00', NULL),
(21, 1, 24980, 100.00, 2498000.00, '21', '73', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000011', 24980, 1, 'chq', 'STB3624830', '2014-04-29', 'BRAC Bank', 'inst', NULL, NULL, '2014-04-29 18:00:00', NULL),
(22, 1, 230, 104.70, 24081.00, '22', '77', 'A', '2014-07-24', 'A', '2014-07-24', '01BAN001', '100010000047', 0, 1, 'chq', '0897468', '2016-06-22', 'HSBC', 'indv', NULL, NULL, '2014-07-22 18:00:00', NULL),
(23, 1, 10, 103.00, 1030.00, '23', '148', 'A', '2016-01-27', 'A', '1970-01-01', '01BAN001', '300010000061', 0, 1, 'po', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-01-17 18:00:00', NULL),
(24, 1, 10, 103.00, 1030.00, '24', '80', 'A', '2014-09-03', 'A', '2014-09-03', '01BAN001', '100010000055', 0, 1, 'chq', '', '2015-04-28', 'Standard Chartered Bank Ltd', 'indv', NULL, NULL, '2014-09-02 18:00:00', NULL),
(25, 1, 10, 103.00, 1030.00, '25', '149', 'A', '2016-01-28', 'A', '1970-01-01', '01BAN001', '300010000061', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2016-01-24 18:00:00', NULL),
(26, 1, 20, 104.70, 2094.00, '26', '78', 'A', '2014-07-24', 'A', '2014-07-24', '01BAN001', '100010000047', 0, 1, 'chq', '3083972', '2016-06-26', 'First Securities Islami Bank Limited', 'indv', NULL, NULL, '2014-07-22 18:00:00', NULL),
(27, 1, 20, 104.50, 2090.00, '27', '89', 'A', '2014-10-14', 'A', '2014-10-15', '01BAN001', '100010000055', 0, 1, 'card', '', '2015-07-21', 'Standard Chartered Bank Limited', 'indv', NULL, NULL, '2014-10-11 18:00:00', NULL),
(28, 1, 10, 103.90, 1039.00, '28', '154', 'A', '2016-03-02', 'A', '2016-03-02', '01BAN001', '300010000061', 0, 1, 'chq', '100010000047', '2015-06-22', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2016-02-28 18:00:00', NULL),
(29, 1, 10, 102.00, 1020.00, '29', '156', 'A', '2016-03-22', 'A', '2016-03-22', '01BAN001', '300010000061', 0, 1, 'po', '100010000047', '2015-07-13', 'Trust Bank', 'indv', NULL, NULL, '2016-03-19 18:00:00', NULL),
(30, 1, 10, 105.00, 1050.00, '30', '90', 'A', '2014-10-28', 'A', '2014-10-28', '01BAN001', '100010000055', 0, 1, 'card', '100010000075', '2016-06-27', 'Dutch Bangla Bank Ltd.', 'indv', NULL, NULL, '2014-10-26 18:00:00', NULL),
(31, 1, 50, 100.00, 5000.00, '31', '1', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000001', 0, 1, 'chq', '5104881', '2014-04-21', 'DUTCH BANGLA BANK LIMITED', 'indv', NULL, NULL, '2014-03-19 18:00:00', NULL),
(32, 1, 10, 104.80, 1048.00, '32', '92', 'A', '2014-11-26', 'A', '2014-11-27', '01BAN001', '100010000055', 0, 1, 'card', '2885104', '2014-08-20', 'Dhaka Bank Limited', 'indv', NULL, NULL, '2014-11-24 18:00:00', NULL),
(33, 1, 10, 101.50, 1015.00, '33', '161', 'A', '2016-04-03', 'A', '2016-04-03', '01BAN001', '300010000061', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-03-26 18:00:00', NULL),
(34, 1, 10, 103.00, 1030.00, '34', '82', 'A', '2014-09-10', 'A', '2014-10-13', '01BAN001', '100010000047', 0, 1, 'card', 'CSL345699', '2014-06-30', 'BRAC Bank Limited', 'indv', NULL, NULL, '2014-09-09 18:00:00', NULL),
(35, 1, 20, 103.30, 2066.00, '35', '100', 'A', '2015-02-05', 'A', '2015-02-07', '01BAN001', '100010000047', 0, 1, 'po', '2344555', '2014-11-26', 'NBL', 'indv', NULL, NULL, '2015-01-31 18:00:00', NULL),
(36, 1, 330, 104.50, 34485.00, '36', '106', 'A', '2015-06-09', 'A', '2015-06-11', '01BAN001', '100010000047', 0, 1, 'chq', '200010000011', '2015-09-08', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2015-06-08 18:00:00', NULL),
(37, 1, 10, 105.00, 1050.00, '37', '108', 'A', '2015-06-22', 'A', '2015-06-23', '01BAN001', '100010000047', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-06-21 18:00:00', NULL),
(38, 1, 10, 104.80, 1048.00, '38', '91', 'DA', '1970-01-01', 'N', '2014-11-27', '01BAN001', '100010000055', 10, 1, 'dd', '100010000001', '2015-09-08', 'Trust Bank Limited', '', NULL, NULL, '2014-11-24 18:00:00', NULL),
(39, 1, 10, 102.50, 1025.00, '39', '167', 'A', '2016-04-21', 'A', '2016-04-21', '01BAN001', '300010000061', 0, 1, 'po', '', '2017-01-24', 'SCB', 'indv', NULL, NULL, '2016-04-19 18:00:00', NULL),
(40, 1, 40, 102.50, 4100.00, '40', '110', 'A', '2015-07-22', 'A', '2015-07-23', '01BAN001', '100010000047', 0, 1, 'chq', '070262928', '2016-05-29', 'Bank Asia Limited', 'indv', NULL, NULL, '2015-07-12 18:00:00', NULL),
(41, 1, 10, 104.40, 1044.00, '41', '98', 'A', '2014-12-31', 'A', '2015-01-27', '01BAN001', '100010000055', 0, 1, 'po', '100010000028', '2015-09-08', 'Prime Bank Ltd.', 'indv', NULL, NULL, '2014-12-27 18:00:00', NULL),
(42, 1, 10, 104.00, 1040.00, '42', '170', 'A', '2016-05-02', 'A', '2016-05-02', '01BAN001', '300010000061', 0, 1, 'po', '100010000055', '2016-01-13', 'Standard Chartered Bank Limited', 'indv', NULL, NULL, '2016-04-26 18:00:00', NULL),
(43, 1, 10, 103.90, 1039.00, '43', '99', 'A', '2015-01-28', 'A', '2015-01-29', '01BAN001', '100010000055', 0, 1, 'card', '100010000029', '2015-09-08', 'Mutual Trust Bank Ltd.', 'indv', NULL, NULL, '2015-01-24 18:00:00', NULL),
(44, 1, 10, 104.40, 1044.00, '44', '190', 'A', '2016-06-29', 'A', '2016-06-30', '01BAN001', '300010000061', 0, 1, 'po', '', '2016-09-24', 'SCB', 'indv', NULL, NULL, '2016-06-26 18:00:00', NULL),
(45, 1, 3860, 103.80, 400668.00, '45', '240', 'A', '2017-05-18', 'A', '2017-05-18', '01BAN001', '100010000065', 0, 1, 'chq', '', '2019-08-04', 'SCB', 'indv', NULL, NULL, '2017-05-02 18:00:00', NULL),
(46, 1, 5000, 103.20, 516000.00, '46', '241', 'A', '2017-05-24', 'A', '2017-05-24', '01BAN001', '100010000064', 0, 1, 'chq', 'A4525861', '2019-08-07', 'TRUST BANK', 'indv', NULL, NULL, '2017-05-21 18:00:00', NULL),
(47, 1, 2000, 103.20, 206400.00, '47', '242', 'A', '2017-05-24', 'A', '2017-05-24', '01BAN001', '100010000077', 0, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd', 'indv', NULL, NULL, '2017-05-21 18:00:00', NULL),
(48, 1, 4000, 100.00, 400000.00, '48', '69', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000044', 0, 1, 'chq', '0235460', '2014-03-27', 'Bangladesh Development Bank Ltd', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(49, 1, 100, 100.00, 10000.00, '49', '12', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000009', 100, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2014-03-23 18:00:00', NULL),
(50, 1, 100, 100.00, 10000.00, '50', '13', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100030000011', 100, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2014-03-26 18:00:00', NULL),
(51, 1, 10, 105.50, 1055.00, '51', '118', 'A', '2015-09-09', 'A', '1970-01-01', '01BAN001', '100010000013', 10, 1, 'chq', '100030000035', '2015-09-08', 'TRUST BANK LTD', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(52, 1, 1000, 100.00, 100000.00, '52', '17', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000016', 1000, 1, 'po', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2014-04-15 18:00:00', NULL),
(53, 1, 100, 100.00, 10000.00, '53', '20', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000019', 100, 1, 'chq', '', '2019-09-01', 'SCB', 'indv', NULL, NULL, '2014-04-21 18:00:00', NULL),
(54, 1, 250, 100.00, 25000.00, '54', '21', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000020', 0, 1, 'chq', '7533768', '2014-03-19', 'SOCIAL ISLAMIC BANK LIMITED', 'indv', NULL, NULL, '2014-04-22 18:00:00', NULL),
(55, 1, 300, 100.00, 30000.00, '55', '22', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100020000021', 0, 1, 'chq', '0363878', '2013-10-01', 'BASIC BANK LTD.', 'indv', NULL, NULL, '2014-04-23 18:00:00', NULL),
(56, 1, 1000, 100.00, 100000.00, '56', '32', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100030000035', 0, 1, 'chq', '7714155', '2014-03-23', 'SOCIAL ISLAMIC BANK LIMITED', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(57, 1, 500, 100.00, 50000.00, '57', '34', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100050000037', 0, 1, 'chq', '', '1970-01-01', 'Dutch Bangla Bank Limited', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(58, 1, 100, 100.00, 10000.00, '58', '37', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100020000036', 0, 1, 'po', '7533770', '2014-03-31', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(59, 1, 500, 100.00, 50000.00, '59', '38', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100020000012', 0, 1, 'chq', '0207415', '2014-04-13', 'AB Bank Limited', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(60, 1, 50, 100.00, 5000.00, '60', '39', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000033', 0, 1, 'chq', '0000076', '2014-04-23', 'Bank Asia Limited', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(61, 1, 3000, 100.00, 300000.00, '61', '40', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000040', 0, 1, 'chq', '8228759', '2014-04-24', 'Al-ARAFAH ISLAMI BANK LTD.', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(62, 1, 100, 100.00, 10000.00, '62', '41', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100030000041', 0, 1, 'chq', '7533772', '2014-04-24', 'SOCIAL ISLAMIC BANK LIMITED', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(63, 1, 150, 100.00, 15000.00, '63', '43', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000027', 150, 1, 'chq', '0205900', '2014-04-27', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-04-28 18:00:00', NULL),
(64, 1, 2000, 100.00, 200000.00, '64', '44', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000046', 0, 1, 'chq', '0075371', '2014-04-27', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-04-28 18:00:00', NULL),
(65, 1, 2000, 104.00, 208000.00, '65', '169', 'A', '2016-04-26', 'A', '2016-04-26', '01BAN001', '100010000045', 2000, 1, 'chq', '', '2017-09-25', 'SCB', 'indv', NULL, NULL, '2016-04-25 18:00:00', NULL),
(66, 1, 280, 105.50, 29540.00, '66', '122', 'A', '2015-09-09', 'A', '2015-09-19', '01BAN001', '100010000028', 280, 1, 'chq', '200010000001', '2015-09-08', 'AB Bank Limited', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(67, 1, 5000, 100.00, 500000.00, '67', '47', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000029', 5000, 1, 'chq', '7312863', '2014-04-27', 'TRUST BANK', 'indv', NULL, NULL, '2014-04-28 18:00:00', NULL),
(68, 1, 100, 100.00, 10000.00, '68', '27', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000002', 100, 1, 'chq', '7075161', '2014-04-30', 'Al-Arafah Islami Bank Limited', 'indv', NULL, NULL, '2014-04-26 18:00:00', NULL),
(69, 1, 100, 100.00, 10000.00, '69', '53', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000043', 100, 1, 'chq', '0000008', '2014-04-28', 'BANK ASIA', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(70, 1, 100, 100.00, 10000.00, '70', '54', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000034', 0, 1, 'chq', '6175551', '2014-04-28', 'IFIC Bank Limited', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(71, 1, 10, 100.00, 1000.00, '71', '55', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000034', 0, 1, 'chq', '5223583', '2014-04-28', 'Standard Chartered', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(72, 1, 70, 105.50, 7385.00, '72', '126', 'A', '2015-09-09', 'A', '2015-09-19', '01BAN001', '100010000047', 0, 1, 'chq', '', '2016-01-25', 'SCB', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(73, 1, 5000, 100.00, 500000.00, '73', '59', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000025', 5000, 1, 'chq', '3790905', '2014-04-28', 'FIRST SECURITY ISLAMI BANK LTD.', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(74, 1, 1000, 100.00, 100000.00, '74', '60', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100030000050', 0, 1, 'chq', '1329645', '2014-04-28', 'Standard Chartered', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(75, 1, 30000, 100.00, 3000000.00, '75', '61', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000006', 0, 1, 'chq', 'A3788259', '2014-04-27', 'Trust Bank Limited', 'inst', NULL, NULL, '2014-04-29 18:00:00', NULL),
(76, 1, 30000, 100.00, 3000000.00, '76', '64', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000005', 0, 1, 'chq', '6026654', '2014-04-28', 'Trust Bank Limited', 'inst', NULL, NULL, '2014-04-29 18:00:00', NULL),
(77, 1, 30000, 100.00, 3000000.00, '77', '66', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000010', 0, 1, 'chq', '6872094', '2014-04-28', 'Trust Bank Limited', 'inst', NULL, NULL, '2014-04-29 18:00:00', NULL),
(78, 1, 10000, 100.00, 1000000.00, '78', '67', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000051', 10000, 1, 'chq', '2885102', '2014-04-28', 'Dhaka Bank Limited', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(79, 1, 1840, 103.00, 189520.00, '79', '87', 'A', '2014-09-10', 'A', '2014-10-13', '01BAN001', '200010000001', 1840, 1, 'card', '0530457', '2013-07-31', 'Trust Bank Limited', 'inst', NULL, NULL, '2014-09-09 18:00:00', NULL),
(80, 1, 200000, 100.00, 20000000.00, '80', '7', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000002', 20000, 1, 'chq', '6941043', '2014-04-29', 'Trust Bank', 'inst', NULL, NULL, '2014-03-19 18:00:00', NULL),
(81, 1, 100000, 100.00, 10000000.00, '81', '8', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000003', 100000, 1, 'chq', 'A2915713', '2014-04-29', 'Pubali Bank', 'inst', NULL, NULL, '2014-03-19 18:00:00', NULL),
(82, 1, 4500, 100.00, 450000.00, '82', '50', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000049', 0, 1, 'chq', '7194044', '2014-03-19', 'TRUST BANK LIMITED', 'indv', NULL, NULL, '2014-04-28 18:00:00', NULL),
(83, 1, 460, 103.00, 47380.00, '83', '88', 'A', '2014-09-10', 'A', '2014-10-13', '01BAN001', '200010000011', 460, 1, 'card', '100010000074', '2016-06-27', 'Eastern Bank Limited', 'inst', NULL, NULL, '2014-09-09 18:00:00', NULL),
(84, 1, 20, 104.20, 2084.00, '84', '75', 'A', '2014-06-11', 'A', '2014-06-11', '01BAN001', '100010000027', 20, 1, 'chq', '2976498', '2014-04-29', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2014-06-08 18:00:00', NULL),
(85, 1, 100, 100.00, 10000.00, '85', '4', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000003', 0, 1, 'chq', '1473374', '2014-04-30', 'Sonali Bank Limited', 'indv', NULL, NULL, '2014-03-19 18:00:00', NULL),
(86, 1, 1000, 100.00, 100000.00, '86', '5', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000004', 0, 1, 'chq', '0310626', '2014-04-30', 'HSBC Bank Limited', 'indv', NULL, NULL, '2014-03-19 18:00:00', NULL),
(87, 1, 50, 100.00, 5000.00, '87', '9', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000005', 0, 1, 'chq', '6196241', '2014-04-30', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-03-22 18:00:00', NULL),
(88, 1, 100, 100.00, 10000.00, '88', '10', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000006', 0, 1, 'chq', '6196242', '2014-04-30', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-03-22 18:00:00', NULL),
(89, 1, 20, 100.00, 2000.00, '89', '11', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100030000008', 20, 1, 'po', '6992007', '2014-04-29', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2014-03-22 18:00:00', NULL),
(90, 1, 10, 105.50, 1055.00, '90', '119', 'A', '2015-09-09', 'A', '2015-09-19', '01BAN001', '100010000014', 10, 1, 'chq', '100010000040', '2015-09-08', 'Trust Bank Limited', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(91, 1, 500, 100.00, 50000.00, '91', '16', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000015', 0, 1, 'chq', '5174952', '2014-04-30', 'Sonali Bank Limited', 'indv', NULL, NULL, '2014-04-12 18:00:00', NULL),
(92, 1, 10, 100.00, 1000.00, '92', '23', 'A', '2014-05-22', 'A', '2014-05-25', '01BAN001', '100010000022', 0, 1, 'chq', 'CAD8011217', '2014-04-30', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-04-23 18:00:00', NULL),
(93, 1, 500, 100.00, 50000.00, '93', '2', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000001', 0, 1, 'chq', '6384999', '2014-04-21', 'ONE BANK LIMITED', 'indv', NULL, NULL, '2014-03-19 18:00:00', NULL),
(94, 1, 180, 100.00, 18000.00, '94', '25', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000007', 0, 1, 'chq', '7075425', '2014-04-30', 'Al-Arafah Islami Bank Limited', 'indv', NULL, NULL, '2014-04-26 18:00:00', NULL),
(95, 1, 2000, 100.00, 200000.00, '95', '26', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000023', 0, 1, 'chq', '7075273', '2014-04-30', 'Al-Arafah Islami Bank Limited', 'indv', NULL, NULL, '2014-04-26 18:00:00', NULL),
(96, 1, 100, 100.00, 10000.00, '96', '28', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000002', 100, 1, 'chq', '7003328', '2014-04-30', 'Al-Arafah Islami Bank Limited', 'indv', NULL, NULL, '2014-04-26 18:00:00', NULL),
(97, 1, 3700, 100.00, 370000.00, '97', '52', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000002', 3700, 1, 'chq', '8320692', '2014-04-28', 'TRUST BANK LTD', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(98, 1, 30, 100.00, 3000.00, '98', '29', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000026', 30, 1, 'chq', '2510873', '2014-04-30', 'Al-Arafah Islami Bank Limited', 'indv', NULL, NULL, '2014-04-26 18:00:00', NULL),
(99, 1, 50, 100.00, 5000.00, '99', '30', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '300030000030', 50, 1, 'chq', '2801313', '2014-04-30', 'Dhaka Bank Limited', 'indv', NULL, NULL, '2014-04-26 18:00:00', NULL),
(100, 1, 3000, 100.00, 300000.00, '100', '31', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000032', 100, 1, 'chq', '5800422', '2014-05-06', 'Trust Bank Ltd', 'indv', NULL, NULL, '2014-04-26 18:00:00', NULL),
(101, 1, 10000, 100.00, 1000000.00, '101', '35', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000038', 0, 1, 'chq', 'A3772949', '2014-05-12', 'Trust Bank Ltd', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(102, 1, 50, 100.00, 5000.00, '102', '36', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000039', 50, 1, 'chq', '0707036', '2014-05-12', 'Standard Chartered Bank', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(103, 1, 100, 100.00, 10000.00, '103', '42', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100030000042', 0, 1, 'chq', '0205887', '2013-09-12', 'TRUST BANK LIMITED', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(104, 1, 2000, 102.00, 204000.00, '104', '163', 'A', '2016-04-12', 'A', '2016-04-12', '01BAN001', '100010000044', 0, 1, 'chq', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-04-11 18:00:00', NULL),
(105, 1, 500, 100.00, 50000.00, '105', '72', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000049', 0, 1, 'chq', '4222794', '2014-04-29', 'ONE BANK LTD', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(106, 1, 3680, 103.00, 379040.00, '106', '86', 'A', '2014-09-10', 'A', '2014-10-13', '01BAN001', '200020000004', 3680, 1, 'card', 'A7763148', '2016-06-27', 'TRUST BANK', 'inst', NULL, NULL, '2014-09-09 18:00:00', NULL),
(107, 1, 500, 100.00, 50000.00, '107', '68', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100020000012', 0, 1, 'chq', '6643576', '2014-02-23', 'Brac Bank Limited', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(108, 1, 1000, 102.50, 102500.00, '108', '164', 'A', '2016-04-19', 'A', '2016-04-19', '01BAN001', '100010000044', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-04-18 18:00:00', NULL),
(109, 1, 100, 100.00, 10000.00, '109', '70', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000052', 0, 1, 'chq', '7533769', '2014-03-31', 'Trust Bank', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(110, 1, 4000, 100.00, 400000.00, '110', '71', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000002', 4000, 1, 'chq', '', '1970-01-01', 'AB Bank Limited', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(111, 1, 2500, 100.00, 250000.00, '111', '24', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000001', 0, 1, 'chq', '6650319', '2014-04-30', 'Al-Arafah Islami Bank Limited', 'indv', NULL, NULL, '2014-04-26 18:00:00', NULL),
(112, 1, 50, 103.00, 5150.00, '112', '84', 'A', '2014-09-10', 'A', '2014-10-13', '01BAN001', '100010000001', 0, 1, 'card', '0071041', '2013-03-24', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-09-09 18:00:00', NULL),
(113, 1, 450, 105.50, 47475.00, '113', '117', 'A', '2015-09-09', 'A', '1970-01-01', '01BAN001', '100010000002', 450, 1, 'chq', '100010000027', '2015-09-08', 'DHAKA BANK LTD', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(114, 1, 50, 100.00, 5000.00, '114', '49', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100070000048', 0, 1, 'chq', '7194044', '2014-03-19', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-04-28 18:00:00', NULL),
(115, 1, 100, 100.00, 10000.00, '115', '56', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100020000031', 0, 1, 'chq', '1533785', '2014-04-27', 'City Bank', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(116, 1, 250, 100.00, 25000.00, '116', '58', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000022', 0, 1, 'chq', '6162251', '2014-04-27', 'IFIC Bank', 'indv', NULL, NULL, '2014-04-29 18:00:00', NULL),
(117, 1, 30000, 100.00, 3000000.00, '117', '62', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000009', 0, 1, 'chq', '', '2014-04-28', 'Trust Bank Limited', 'inst', NULL, NULL, '2014-04-29 18:00:00', NULL),
(118, 1, 30000, 100.00, 3000000.00, '118', '63', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000007', 0, 1, 'chq', '4059144', '2014-04-29', 'Mutual Trust Bank Ltd.', 'inst', NULL, NULL, '2014-04-29 18:00:00', NULL),
(119, 1, 50000, 100.00, 5000000.00, '119', '65', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000008', 0, 1, 'chq', '4059144', '2014-04-29', 'Mutual Trust Bank Ltd.', 'inst', NULL, NULL, '2014-04-29 18:00:00', NULL),
(120, 1, 100000, 100.00, 10000000.00, '120', '74', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '200010000012', 0, 1, 'chq', '01745798025', '2014-04-30', 'Trust Bank Limited', 'inst', NULL, NULL, '2014-04-29 18:00:00', NULL),
(121, 1, 1000, 104.20, 104200.00, '121', '76', 'A', '2014-07-03', 'A', '1970-01-01', '01BAN001', '100010000054', 0, 1, 'chq', '7288344', '2014-04-30', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2014-06-29 18:00:00', NULL),
(122, 1, 20, 100.00, 2000.00, '122', '18', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100040000018', 20, 1, 'chq', 'A2915714', '2014-04-30', 'Pubali Bank Limited ', 'indv', NULL, NULL, '2014-04-20 18:00:00', NULL),
(123, 1, 50, 100.00, 5000.00, '123', '19', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100070000017', 50, 1, 'chq', '5800421', '2014-04-30', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-04-20 18:00:00', NULL),
(124, 1, 2000, 100.00, 200000.00, '124', '33', 'A', '2014-05-22', 'A', '2014-05-26', '01BAN001', '100010000024', 0, 1, 'card', '7194056', '2014-05-11', 'Trust Bank Ltd', 'indv', NULL, NULL, '2014-04-27 18:00:00', NULL),
(125, 1, 30, 103.00, 3090.00, '125', '79', 'A', '2014-08-24', 'A', '2014-08-24', '01BAN001', '100010000027', 30, 1, 'chq', '2885103', '2014-06-08', 'Dhaka Bank', 'indv', NULL, NULL, '2014-08-19 18:00:00', NULL),
(126, 1, 50, 106.50, 5325.00, '126', '133', 'A', '2015-09-22', 'A', '2015-09-30', '01BAN001', '100010000047', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-09-20 18:00:00', NULL),
(127, 1, 170, 105.50, 17935.00, '127', '116', 'A', '2015-09-09', 'A', '2015-09-17', '01BAN001', '100010000001', 0, 1, 'chq', '100010000002', '2015-09-08', 'Trust Bank Limited', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(128, 1, 10, 103.00, 1030.00, '128', '85', 'A', '2014-09-10', 'A', '2014-10-13', '01BAN001', '100010000004', 0, 1, 'card', '0343155', '2013-09-12', 'Dhaka  Bank Limited', 'indv', NULL, NULL, '2014-09-09 18:00:00', NULL),
(129, 1, 5790, 105.50, 610845.00, '129', '129', 'A', '2015-09-09', 'A', '1970-01-01', '01BAN001', '200010000001', 5790, 1, 'chq', '', '2016-03-27', 'SCB', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(130, 1, 20, 104.00, 2080.00, '130', '101', 'A', '2015-03-03', 'A', '2015-03-03', '01BAN001', '100010000055', 0, 1, 'po', '2344555', '2014-11-26', 'NBL', 'indv', NULL, NULL, '2015-02-28 18:00:00', NULL),
(131, 1, 10, 104.80, 1048.00, '131', '93', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000052', 10, 1, 'chq', '123456', '2014-11-25', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-11-24 18:00:00', NULL),
(132, 1, 20, 104.80, 2096.00, '132', '94', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000052', 20, 1, 'chq', '2344555', '2014-11-26', 'NBL', 'indv', NULL, NULL, '2014-11-25 18:00:00', NULL),
(133, 1, 40, 106.00, 4240.00, '133', '136', 'A', '2015-10-17', 'A', '2015-10-17', '01BAN001', '100010000047', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-10-11 18:00:00', NULL),
(134, 1, 10, 104.00, 1040.00, '134', '102', 'A', '2015-04-02', 'A', '2015-04-02', '01BAN001', '100010000055', 0, 1, 'po', '100010000054', '2015-09-08', 'Brac Bank', 'indv', NULL, NULL, '2015-03-28 18:00:00', NULL),
(135, 1, 10, 105.50, 1055.00, '135', '128', 'A', '2015-09-09', 'A', '1970-01-01', '01BAN001', '100010000056', 0, 1, 'chq', '', '2016-03-20', 'SCB', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(136, 1, 10, 103.00, 1030.00, '136', '104', 'A', '2015-04-29', 'A', '2015-05-06', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2015-04-27 18:00:00', NULL),
(137, 1, 10, 104.00, 1040.00, '137', '105', 'A', '2015-05-26', 'A', '2015-05-27', '01BAN001', '100010000055', 0, 1, 'po', '200020000004', '2015-09-08', 'TRUST BANK LIMITED', 'indv', NULL, NULL, '2015-05-25 18:00:00', NULL),
(138, 1, 10, 105.00, 1050.00, '138', '109', 'A', '2015-06-29', 'A', '2015-07-01', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-06-23 18:00:00', NULL),
(139, 1, 160, 101.50, 16240.00, '139', '201', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000001', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(140, 1, 410, 101.50, 41615.00, '140', '202', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000002', 410, 1, 'chq', '', '2018-05-13', 'SCB', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(141, 1, 10, 101.50, 1015.00, '141', '203', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000013', 10, 1, 'chq', '0535947-29,0', '2018-05-22', 'Trust Bank', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(142, 1, 10, 101.50, 1015.00, '142', '204', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000014', 10, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(143, 1, 10, 103.00, 1030.00, '143', '83', 'A', '2014-09-10', 'A', '2014-10-13', '01BAN001', '100010000016', 10, 1, 'card', '2192129', '2016-06-27', 'Eastern Bank Limited', 'indv', NULL, NULL, '2014-09-09 18:00:00', NULL),
(144, 1, 10, 105.50, 1055.00, '144', '121', 'A', '2015-09-09', 'A', '2015-09-19', '01BAN001', '100010000027', 10, 1, 'chq', '100010000056', '2015-09-08', 'Dutch Bangla Bank Ltd.', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(145, 1, 260, 101.50, 26390.00, '145', '207', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000028', 260, 1, 'chq', '', '2018-06-04', 'TRUST BANK LTD', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(146, 1, 280, 105.50, 29540.00, '146', '123', 'A', '2015-09-09', 'A', '2015-09-19', '01BAN001', '100010000029', 280, 1, 'chq', '7126701', '2015-09-09', 'DHAKA BANK LTD', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(147, 1, 1000, 105.00, 105000.00, '147', '107', 'A', '2015-06-15', 'A', '2015-06-16', '01BAN001', '100030000035', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-06-13 18:00:00', NULL),
(148, 1, 50, 103.00, 5150.00, '148', '81', 'A', '2014-09-10', 'A', '2014-10-13', '01BAN001', '100010000040', 0, 1, 'card', '100010000072', '2016-06-27', 'Eastern Bank Limited', 'indv', NULL, NULL, '2014-09-09 18:00:00', NULL),
(149, 1, 100, 104.20, 10420.00, '149', '175', 'A', '2016-05-30', 'A', '2016-05-30', '01BAN001', '100010000047', 0, 1, 'chq', '0381918', '2016-02-22', 'HSBC', 'indv', NULL, NULL, '2016-05-28 18:00:00', NULL),
(150, 1, 50, 105.50, 5275.00, '150', '127', 'A', '2015-09-09', 'A', '1970-01-01', '01BAN001', '100010000054', 0, 1, 'chq', '', '2016-02-28', 'SCB', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(151, 1, 10, 101.50, 1015.00, '151', '211', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000056', 10, 1, 'chq', '8633528', '2018-06-20', 'SCB', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(152, 1, 5300, 101.50, 537950.00, '152', '213', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '200010000001', 5300, 1, 'chq', '8975151', '2018-06-24', 'SCB', 'inst', NULL, NULL, '2016-09-04 18:00:00', NULL),
(153, 1, 11580, 105.50, 1221690.00, '153', '130', 'A', '2015-09-09', 'A', '2015-09-19', '01BAN001', '200020000004', 11580, 1, 'chq', '100030000035', '2016-04-19', 'Trust Bank Limited', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(154, 1, 1440, 105.50, 151920.00, '154', '131', 'A', '2015-09-09', 'A', '1970-01-01', '01BAN001', '200010000011', 1440, 1, 'chq', '', '1970-01-01', 'SCB', 'inst', NULL, NULL, '2015-09-07 18:00:00', NULL),
(155, 1, 30, 105.50, 3165.00, '155', '132', 'A', '2015-09-19', 'A', '2015-09-20', '01BAN001', '100010000027', 30, 1, 'chq', '100010000047', '2016-05-29', 'Trust Bank Limited', 'indv', NULL, NULL, '2015-09-08 18:00:00', NULL),
(156, 1, 20, 102.50, 2050.00, '156', '111', 'A', '2015-07-22', 'A', '2015-07-26', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-07-20 18:00:00', NULL),
(157, 1, 330, 101.50, 33495.00, '157', '195', 'A', '2016-07-21', 'A', '2016-07-21', '01BAN001', '100010000047', 0, 1, 'chq', '100010000045', '2016-04-26', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2016-07-16 18:00:00', NULL),
(158, 1, 10, 105.50, 1055.00, '158', '113', 'A', '2015-09-01', 'A', '2015-09-02', '01BAN001', '100010000055', 0, 1, 'po', '100010000069', '2016-06-27', 'Trust Bank Ltd', 'indv', NULL, NULL, '2015-08-25 18:00:00', NULL),
(159, 1, 10, 105.50, 1055.00, '159', '114', 'A', '2015-09-14', 'A', '2015-09-14', '01BAN001', '100010000055', 0, 1, 'po', '100010000076', '2016-06-28', 'Jamuna Bank Ltd.', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(160, 1, 50, 105.50, 5275.00, '160', '124', 'A', '2015-09-09', 'A', '2015-09-19', '01BAN001', '100030000035', 0, 1, 'chq', '', '2015-09-22', 'SCB', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(161, 1, 10, 105.50, 1055.00, '161', '112', 'A', '2015-08-25', 'A', '2015-08-26', '01BAN001', '100010000057', 0, 1, 'po', '100010000073', '2016-06-27', 'Eastern Bank Limited', 'indv', NULL, NULL, '2015-08-18 18:00:00', NULL),
(162, 1, 10, 106.50, 1065.00, '162', '134', 'A', '2015-09-29', 'A', '2015-09-30', '01BAN001', '100010000055', 0, 1, 'po', '0603677', '2016-06-26', 'HSBC', 'indv', NULL, NULL, '2015-09-21 18:00:00', NULL),
(163, 1, 100, 103.00, 10300.00, '163', '151', 'A', '2016-02-04', 'A', '2016-02-04', '01BAN001', '100010000062', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-02-01 18:00:00', NULL),
(164, 1, 10, 101.50, 1015.00, '164', '194', 'A', '2016-07-21', 'A', '2016-07-21', '01BAN001', '300010000061', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-07-11 18:00:00', NULL),
(165, 1, 10, 101.50, 1015.00, '165', '197', 'A', '2016-07-28', 'A', '2016-07-28', '01BAN001', '300010000061', 0, 1, 'po', '', '1970-01-01', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-07-23 18:00:00', NULL),
(166, 1, 20, 105.50, 2110.00, '166', '115', 'A', '2015-09-14', 'A', '2015-09-14', '01BAN001', '100010000057', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(167, 1, 10, 105.00, 1050.00, '167', '137', 'A', '2015-10-26', 'A', '2015-10-28', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-10-24 18:00:00', NULL),
(168, 1, 10, 103.20, 1032.00, '168', '140', 'A', '2015-11-30', 'A', '2015-11-30', '01BAN001', '100010000055', 0, 1, 'po', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2015-11-22 18:00:00', NULL),
(169, 1, 10, 103.20, 1032.00, '169', '142', 'A', '2015-12-29', 'A', '2015-12-29', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-12-26 18:00:00', NULL),
(170, 1, 10, 103.20, 1032.00, '170', '143', 'DA', '1970-01-01', 'N', '2014-11-27', '01BAN001', '100010000055', 10, 1, 'po', '0195812', '2016-07-17', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2016-01-09 18:00:00', NULL),
(171, 1, 10, 103.00, 1030.00, '171', '144', 'A', '2016-01-13', 'A', '2016-01-18', '01BAN001', '100010000055', 0, 1, 'chq', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-01-12 18:00:00', NULL),
(172, 1, 300, 104.80, 31440.00, '172', '95', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000052', 300, 1, 'chq', '100010000013', '2015-09-08', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-11-25 18:00:00', NULL),
(173, 1, 40, 104.80, 4192.00, '173', '96', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000052', 40, 1, 'chq', '100010000014', '2015-09-08', 'Trust Bank Limited', 'indv', NULL, NULL, '2014-11-25 18:00:00', NULL),
(174, 1, 50, 104.80, 5240.00, '174', '97', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000052', 50, 1, 'chq', '100010000016', '2015-09-08', 'AB Bank Limited', 'indv', NULL, NULL, '2014-11-25 18:00:00', NULL),
(175, 1, 10, 103.00, 1030.00, '175', '150', 'A', '2016-01-28', 'A', '2016-01-31', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'standard chartered bank', 'indv', NULL, NULL, '2016-01-24 18:00:00', NULL),
(176, 1, 10, 103.90, 1039.00, '176', '153', 'A', '2016-03-02', 'A', '2016-03-02', '01BAN001', '100010000055', 0, 1, 'po', '100010000047', '2015-06-09', 'Trust Bank Limited', 'indv', NULL, NULL, '2016-02-27 18:00:00', NULL),
(177, 1, 10, 102.00, 1020.00, '177', '157', 'A', '2016-03-22', 'A', '2016-03-22', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'standard chartered ', 'indv', NULL, NULL, '2016-03-19 18:00:00', NULL),
(178, 1, 10, 101.50, 1015.00, '178', '160', 'A', '2016-04-03', 'A', '2016-04-03', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Standard Chartered BD', 'indv', NULL, NULL, '2016-03-26 18:00:00', NULL),
(179, 1, 80, 101.50, 8120.00, '179', '209', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000047', 0, 1, 'chq', '', '1970-01-01', 'TRUST BANK LTD', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(180, 1, 3000, 102.50, 307500.00, '180', '165', 'A', '2016-04-19', 'A', '2016-04-19', '01BAN001', '100030000035', 0, 1, 'chq', '', '2016-07-24', 'SCB', 'indv', NULL, NULL, '2016-04-18 18:00:00', NULL),
(181, 1, 120, 101.50, 12180.00, '181', '216', 'A', '2016-09-07', 'A', '1970-01-01', '01BAN001', '100010000047', 0, 1, 'chq', '3301194', '2018-06-26', 'City Bank Limited', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(182, 1, 250, 101.80, 25450.00, '182', '221', 'A', '2016-11-21', 'A', '2016-11-21', '01BAN001', '100010000047', 0, 1, 'chq', '1254836484', '2018-07-23', 'Prime BAnk', 'indv', NULL, NULL, '2016-11-14 18:00:00', NULL),
(183, 1, 1000, 105.00, 105000.00, '183', '229', 'A', '2017-02-19', 'A', '2017-02-19', '01BAN001', '100010000047', 0, 1, 'card', 'TBL/SBO No A 357', '2019-05-14', 'Trust Bank Ltd', 'indv', NULL, NULL, '2017-02-14 18:00:00', NULL),
(184, 1, 10, 106.50, 1065.00, '184', '135', 'A', '2015-09-29', 'A', '2015-09-30', '01BAN001', '100010000057', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2015-09-21 18:00:00', NULL),
(185, 1, 10, 101.00, 1010.00, '185', '199', 'A', '2016-09-06', 'A', '2016-09-06', '01BAN001', '300010000061', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-08-27 18:00:00', NULL),
(186, 1, 10, 102.50, 1025.00, '186', '168', 'A', '2016-04-21', 'A', '2016-04-21', '01BAN001', '100010000055', 0, 1, 'po', '', '2016-08-28', 'SCB', 'indv', NULL, NULL, '2016-04-19 18:00:00', NULL),
(187, 1, 100, 104.00, 10400.00, '187', '152', 'A', '2016-02-25', 'A', '2016-02-25', '01BAN001', '100010000062', 0, 1, 'chq', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-02-21 18:00:00', NULL),
(188, 1, 10, 104.00, 1040.00, '188', '171', 'A', '2016-05-02', 'A', '2016-05-02', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB BD', 'indv', NULL, NULL, '2016-04-26 18:00:00', NULL),
(189, 1, 10, 101.50, 1015.00, '189', '217', 'A', '2016-09-28', 'A', '1970-01-01', '01BAN001', '300010000061', 0, 1, 'po', '', '2018-06-27', 'SCB', 'indv', NULL, NULL, '2016-09-23 18:00:00', NULL),
(190, 1, 10, 101.80, 1018.00, '190', '220', 'A', '2016-10-27', 'A', '2016-10-27', '01BAN001', '300010000061', 0, 1, 'card', '5255656', '2018-07-15', 'Prime Bank', 'indv', NULL, NULL, '2016-10-25 18:00:00', NULL),
(191, 1, 10, 104.40, 1044.00, '191', '191', 'A', '2016-06-29', 'A', '2016-06-30', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-06-26 18:00:00', NULL),
(192, 1, 10, 101.50, 1015.00, '192', '193', 'A', '2016-07-21', 'A', '2016-07-21', '01BAN001', '100010000055', 0, 1, 'po', 'A2915745', '2016-04-19', 'Trust Bank Ltd', 'indv', NULL, NULL, '2016-07-11 18:00:00', NULL),
(193, 1, 10, 101.70, 1017.00, '193', '223', 'A', '2016-12-05', 'A', '2016-12-05', '01BAN001', '300010000061', 0, 1, 'card', '5768425899', '2018-09-30', 'prime bank', 'indv', NULL, NULL, '2016-11-29 18:00:00', NULL),
(194, 1, 10, 105.00, 1050.00, '194', '138', 'A', '2015-11-07', 'A', '2015-11-07', '01BAN001', '100010000057', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Limited ', 'indv', NULL, NULL, '2015-10-25 18:00:00', NULL),
(195, 1, 10, 102.40, 1024.00, '195', '224', 'A', '2016-12-27', 'A', '2016-12-27', '01BAN001', '300010000061', 0, 1, 'po', '', '2018-11-04', 'SCB', 'indv', NULL, NULL, '2016-12-20 18:00:00', NULL),
(196, 1, 10, 101.50, 1015.00, '196', '196', 'A', '2016-07-28', 'A', '2016-07-28', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB ', 'indv', NULL, NULL, '2016-07-23 18:00:00', NULL),
(197, 1, 10, 103.00, 1030.00, '197', '139', 'A', '2015-11-22', 'A', '2015-11-25', '01BAN001', '100010000057', 0, 1, 'po', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2015-11-17 18:00:00', NULL),
(198, 1, 20, 103.90, 2078.00, '198', '155', 'A', '2016-03-02', 'A', '2016-03-02', '01BAN001', '100010000057', 0, 1, 'po', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-02-28 18:00:00', NULL),
(199, 1, 1000, 105.00, 105000.00, '199', '230', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000047', 1000, 1, 'card', '', '2019-06-09', 'SCB', 'indv', NULL, NULL, '2017-02-14 18:00:00', NULL),
(200, 1, 2000, 104.50, 209000.00, '200', '177', 'A', '2016-06-12', 'A', '2016-06-12', '01BAN001', '100010000066', 0, 1, 'chq', 'BEFTN', '2016-02-29', 'SCB BD', 'indv', NULL, NULL, '2016-06-07 18:00:00', NULL),
(201, 1, 960, 104.60, 100416.00, '201', '180', 'A', '2016-06-26', 'A', '2016-06-26', '01BAN001', '100010000067', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-06-21 18:00:00', NULL),
(202, 1, 380, 104.40, 39672.00, '202', '183', 'A', '2016-06-29', 'A', '2016-06-30', '01BAN001', '100010000072', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-06-26 18:00:00', NULL),
(203, 1, 300, 104.40, 31320.00, '203', '184', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000073', 300, 1, 'chq', '9855384', '2016-03-23', 'Trust Bank Limited', 'indv', NULL, NULL, '2016-06-26 18:00:00', NULL),
(204, 1, 1000, 104.40, 104400.00, '204', '185', 'A', '2016-06-28', 'A', '2016-06-28', '01BAN001', '100010000070', 0, 1, 'chq', '100010000022', '2016-03-23', 'Trust Bank Limited', 'indv', NULL, NULL, '2016-06-26 18:00:00', NULL),
(205, 1, 380, 104.40, 39672.00, '205', '186', 'A', '2016-06-29', 'A', '2016-06-30', '01BAN001', '100010000074', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2016-06-26 18:00:00', NULL),
(206, 1, 10, 101.00, 1010.00, '206', '200', 'A', '2016-09-06', 'A', '2016-09-06', '01BAN001', '100010000055', 0, 1, 'po', '', '2015-03-01', 'Standard Chartered Bangladesh', 'indv', NULL, NULL, '2016-08-27 18:00:00', NULL),
(207, 1, 2000, 104.40, 208800.00, '207', '192', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000076', 2000, 1, 'chq', 'A2915744', '2016-04-12', 'Trust Bank Ltd', 'indv', NULL, NULL, '2016-06-27 18:00:00', NULL),
(208, 1, 10, 101.50, 1015.00, '208', '218', 'A', '2016-09-28', 'A', '2016-09-28', '01BAN001', '100010000055', 0, 1, 'po', '0311578', '2015-04-27', 'Standard Chartered Bank Ltd', 'indv', NULL, NULL, '2016-09-23 18:00:00', NULL),
(209, 1, 10, 105.50, 1055.00, '209', '228', 'A', '2017-01-31', 'A', '2017-01-31', '01BAN001', '300010000061', 0, 1, 'po', '1349025', '2019-05-07', 'SOCIAL ISLAMIC BANK LIMITED', 'indv', NULL, NULL, '2017-01-23 18:00:00', NULL),
(210, 1, 1000, 105.00, 105000.00, '210', '231', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000047', 1000, 1, 'card', '', '2019-06-09', 'SCB', 'indv', NULL, NULL, '2017-02-14 18:00:00', NULL),
(211, 1, 10, 101.80, 1018.00, '211', '219', 'A', '2016-10-27', 'A', '2016-10-27', '01BAN001', '100010000055', 0, 1, 'card', '5552183', '2018-06-27', 'The City Bank Ltd', 'indv', NULL, NULL, '2016-10-25 18:00:00', NULL),
(212, 1, 10, 106.00, 1060.00, '212', '234', 'A', '2017-03-04', 'A', '2017-03-07', '01BAN001', '300010000061', 0, 1, 'po', 'CADB5469378', '2019-06-12', 'Trust Bank Limited ', 'indv', NULL, NULL, '2017-02-26 18:00:00', NULL),
(213, 1, 40, 104.00, 4160.00, '213', '226', 'A', '2017-01-17', 'A', '2017-01-18', '01BAN001', '100010000001', 0, 1, 'chq', '', '2018-12-04', 'SCB', 'indv', NULL, NULL, '2017-01-14 18:00:00', NULL),
(214, 1, 50, 105.50, 5275.00, '214', '120', 'A', '2015-09-09', 'A', '2015-09-19', '01BAN001', '100010000016', 50, 1, 'chq', '100010000047', '2015-09-08', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(215, 1, 60, 103.20, 6192.00, '215', '141', 'A', '2015-11-28', 'A', '2015-11-29', '01BAN001', '100010000027', 60, 1, 'chq', 'A5503415', '2016-09-05', 'TRUST BANK', 'indv', NULL, NULL, '2015-11-22 18:00:00', NULL),
(216, 1, 260, 101.50, 26390.00, '216', '208', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000029', 260, 1, 'chq', 'A 3814437', '2016-06-08', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(217, 1, 50, 101.50, 5075.00, '217', '210', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000054', 0, 1, 'chq', '9492452', '2016-06-08', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(218, 1, 330, 101.50, 33495.00, '218', '212', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100020000068', 0, 1, 'chq', '9117117', '2016-06-22', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(219, 1, 1000, 105.00, 105000.00, '219', '232', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000047', 1000, 1, 'card', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2017-02-14 18:00:00', NULL),
(220, 1, 1000, 105.50, 105500.00, '220', '235', 'A', '2017-03-12', 'A', '2017-03-12', '01BAN001', '100010000047', 0, 1, 'card', '1066322', '2019-06-12', 'Mutual Trust Bank ', 'indv', NULL, NULL, '2017-03-06 18:00:00', NULL),
(221, 1, 170, 105.50, 17935.00, '221', '125', 'A', '2015-09-09', 'A', '2015-09-19', '01BAN001', '100010000040', 170, 1, 'chq', '', '2015-09-22', 'SCB', 'indv', NULL, NULL, '2015-09-07 18:00:00', NULL),
(222, 1, 50, 101.50, 5075.00, '222', '205', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000016', 50, 1, 'chq', '100010000064', '2016-05-29', 'Trust Bank Limited', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(223, 1, 10600, 101.50, 1075900.00, '223', '214', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '200020000004', 10600, 1, 'chq', '8606077', '2018-06-25', 'SCB', 'inst', NULL, NULL, '2016-09-04 18:00:00', NULL),
(224, 1, 1320, 101.50, 133980.00, '224', '215', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '200010000011', 1320, 1, 'chq', '', '2018-06-26', 'SCB', 'inst', NULL, NULL, '2016-09-04 18:00:00', NULL),
(225, 1, 10, 101.70, 1017.00, '225', '222', 'A', '2016-12-05', 'A', '2016-12-05', '01BAN001', '100010000055', 0, 1, 'card', '22222', '2018-07-23', 'AB bank', 'indv', NULL, NULL, '2016-11-29 18:00:00', NULL),
(226, 1, 10, 101.50, 1015.00, '226', '162', 'A', '2016-04-03', 'A', '2016-04-03', '01BAN001', '100010000057', 0, 1, 'po', '', '1970-01-01', 'SCB ', 'indv', NULL, NULL, '2016-03-26 18:00:00', NULL),
(227, 1, 10, 102.40, 1024.00, '227', '225', 'A', '2016-12-27', 'A', '2016-12-27', '01BAN001', '100010000055', 0, 1, 'po', '', '2018-11-04', 'SCB', 'indv', NULL, NULL, '2016-12-20 18:00:00', NULL),
(228, 1, 10, 105.50, 1055.00, '228', '227', 'A', '2017-01-31', 'A', '2017-01-31', '01BAN001', '100010000055', 0, 1, 'po', 'B5340631', '2018-12-26', 'Trust Bank Ltd', 'indv', NULL, NULL, '2017-01-23 18:00:00', NULL),
(229, 1, 20, 102.50, 2050.00, '229', '166', 'A', '2016-04-21', 'A', '2016-04-21', '01BAN001', '100010000057', 0, 1, 'po', '', '2016-07-24', 'SCB', 'indv', NULL, NULL, '2016-04-19 18:00:00', NULL),
(230, 1, 20, 104.00, 2080.00, '230', '172', 'A', '2016-05-15', 'A', '2016-05-15', '01BAN001', '100010000057', 0, 1, 'po', '', '1970-01-01', 'SCB BD', 'indv', NULL, NULL, '2016-05-09 18:00:00', NULL),
(231, 1, 10, 106.00, 1060.00, '231', '233', 'A', '2017-03-04', 'A', '1970-01-01', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2017-02-26 18:00:00', NULL),
(232, 1, 10, 104.20, 1042.00, '232', '173', 'A', '2016-05-30', 'A', '2016-05-30', '01BAN001', '100010000057', 0, 1, 'po', '1086473', '2016-02-02', 'Eastern Bank Limited', 'indv', NULL, NULL, '2016-05-28 18:00:00', NULL);
INSERT INTO `unit_purchase` (`UNIT_PURCHASE_ID`, `SPONSOR_ID`, `UNIT`, `RATE`, `TOTAL_AMOUNT`, `PURCHASE_NO`, `ALLOT_REF_NO`, `HOUSE_CNF_REC_FLAG`, `HOUSE_CNF_REC_DATE`, `SC_CNF_FLAG`, `SC_CNF_DATE`, `PURCHASE_PERSON_ID`, `REGISTRATION_NO`, `REMAINING_UNITS`, `SALESCENTER_ID`, `MODE_PAY`, `BCPODDTC_NO`, `BCPODDTC_DATE`, `BANK`, `INVESTOR_TYPE`, `OPS_ID`, `ACC_ID`, `created_at`, `updated_at`) VALUES
(233, 1, 10, 105.00, 1050.00, '233', '236', 'A', '2017-03-29', 'A', '2017-04-02', '01BAN001', '100010000055', 0, 1, 'po', '', '2019-08-04', 'Standard Chartered Bank', 'indv', NULL, NULL, '2017-03-26 18:00:00', NULL),
(234, 1, 10, 101.50, 1015.00, '234', '206', 'A', '2016-09-07', 'A', '2016-09-07', '01BAN001', '100010000027', 10, 1, 'chq', 'A 3814437', '2016-06-08', 'TBL, Principal Br', 'indv', NULL, NULL, '2016-09-04 18:00:00', NULL),
(235, 1, 10, 104.50, 1045.00, '235', '238', 'A', '2017-04-30', 'A', '2017-04-30', '01BAN001', '100010000055', 0, 1, 'po', 'b7169164', '2019-06-25', 'TRUST BANK LIMITED', 'indv', NULL, NULL, '2017-04-23 18:00:00', NULL),
(236, 1, 50, 103.00, 5150.00, '236', '145', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000040', 50, 1, 'chq', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-01-12 18:00:00', NULL),
(237, 1, 100, 103.00, 10300.00, '237', '146', 'A', '2016-01-20', 'A', '2016-01-20', '01BAN001', '100010000060', 0, 1, 'chq', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-01-16 18:00:00', NULL),
(238, 1, 10, 105.00, 1050.00, '238', '237', 'A', '2017-03-29', 'A', '2017-04-02', '01BAN001', '300010000061', 0, 1, 'po', '0268946', '2019-06-25', 'Estern Bank Ltd', 'indv', NULL, NULL, '2017-03-26 18:00:00', NULL),
(239, 1, 10, 104.50, 1045.00, '239', '239', 'A', '2017-04-30', 'A', '2017-04-30', '01BAN001', '300010000061', 0, 1, 'po', '1349029', '2019-06-26', 'SIBL', 'indv', NULL, NULL, '2017-04-23 18:00:00', NULL),
(240, 1, 6000, 104.40, 626400.00, '240', '181', 'A', '2016-06-28', 'A', '2016-06-28', '01BAN001', '100010000062', 0, 1, 'chq', '', '2016-09-24', 'SCB', 'indv', NULL, NULL, '2016-06-25 18:00:00', NULL),
(241, 1, 20, 101.50, 2030.00, '241', '198', 'A', '2016-07-28', 'A', '2016-07-28', '01BAN001', '100010000057', 0, 1, 'po', '2344555', '2014-11-26', 'NBL', 'indv', NULL, NULL, '2016-07-23 18:00:00', NULL),
(242, 1, 10, 102.00, 1020.00, '242', '158', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-03-22 18:00:00', NULL),
(243, 1, 10, 102.00, 1020.00, '243', '159', 'A', '2016-03-23', 'A', '2016-03-23', '01BAN001', '100010000022', 0, 1, 'chq', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2016-03-22 18:00:00', NULL),
(244, 1, 3000, 103.20, 309600.00, '244', '243', 'A', '2017-05-24', 'A', '2017-05-24', '01BAN001', '100010000044', 0, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2017-05-22 18:00:00', NULL),
(245, 1, 10, 103.20, 1032.00, '245', '244', 'A', '2017-05-28', 'A', '2017-05-28', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2017-05-23 18:00:00', NULL),
(246, 1, 10, 103.20, 1032.00, '246', '245', 'A', '2017-05-28', 'A', '2017-05-28', '01BAN001', '300010000061', 0, 1, 'po', '5165616', '2019-03-03', 'Prime Bank', 'indv', NULL, NULL, '2017-05-23 18:00:00', NULL),
(247, 1, 10, 104.20, 1042.00, '247', '259', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '100010000014', 10, 1, 'card', '5646546', '2019-03-03', 'Prime Bank', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(248, 1, 10, 116.62, 1166.20, '248', '368', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000040', 10, 1, 'card', '100010000047', '2014-07-23', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(249, 1, 4000, 104.80, 419200.00, '249', '273', 'A', '2017-10-09', 'A', '2017-10-09', '01BAN001', '100010000052', 0, 1, 'chq', '7414150', '2017-12-20', 'STANDARD CHARTERED BANK', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(250, 1, 30, 104.20, 3126.00, '250', '265', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '100010000062', 0, 1, 'card', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(251, 1, 670, 116.37, 77967.90, '251', '340', 'A', '2018-06-27', 'A', '2018-06-27', '01BAN001', '100010000095', 0, 1, 'chq', '0577141', '2016-01-17', 'SBAC Bank Limited', 'indv', NULL, NULL, '2018-06-24 18:00:00', NULL),
(252, 1, 5410, 104.20, 563722.00, '252', '267', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '200010000001', 5410, 1, 'card', '', '1970-01-01', 'Trust Bank', 'inst', NULL, NULL, '2017-08-22 18:00:00', NULL),
(253, 1, 20, 100.50, 2010.00, '253', '248', 'A', '2017-07-13', 'A', '2017-07-15', '01BAN001', '100010000055', 0, 1, 'po', 'A4957365', '2019-06-12', 'Trust Bank Ltd', 'indv', NULL, NULL, '2017-07-08 18:00:00', NULL),
(254, 1, 20, 101.20, 2024.00, '254', '251', 'A', '2017-07-27', 'A', '2017-07-27', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2017-07-23 18:00:00', NULL),
(255, 1, 2760, 108.50, 299460.00, '255', '284', 'A', '2017-11-02', 'A', '2017-11-04', '01BAN001', '100010000082', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2017-10-29 18:00:00', NULL),
(256, 1, 60000, 109.50, 6570000.00, '256', '288', 'A', '2017-11-09', 'A', '2017-11-12', '01BAN001', '200010000014', 0, 1, 'chq', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2017-11-07 18:00:00', NULL),
(257, 1, 310, 101.40, 31434.00, '257', '252', 'A', '2017-08-03', 'A', '1970-01-01', '01BAN001', '100010000055', 0, 1, 'po', '5664654', '2019-03-03', 'Prime Bank', 'indv', NULL, NULL, '2017-07-31 18:00:00', NULL),
(258, 1, 1000, 104.80, 104800.00, '258', '279', 'A', '2017-10-10', 'A', '2017-10-10', '01BAN001', '100010000078', 0, 1, 'chq', '1349024', '2019-04-09', 'SIBL', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(259, 1, 200, 101.40, 20280.00, '259', '255', 'A', '2017-08-03', 'A', '2017-08-08', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2017-08-01 18:00:00', NULL),
(260, 1, 250, 104.00, 26000.00, '260', '246', 'A', '2017-06-19', 'A', '2017-06-19', '01BAN001', '100010000047', 0, 1, 'chq', '', '1970-01-01', 'Dutch Bangla Bank Ltd.', 'indv', NULL, NULL, '2017-06-17 18:00:00', NULL),
(261, 1, 20, 100.50, 2010.00, '261', '249', 'A', '2017-07-13', 'A', '2017-07-15', '01BAN001', '300010000061', 0, 1, 'po', '7502834', '2019-06-12', 'MUTUAL TRUST BANK LTD.', 'indv', NULL, NULL, '2017-07-08 18:00:00', NULL),
(262, 1, 26000, 115.10, 2992600.00, '262', '312', 'A', '2018-03-22', 'A', '2018-03-27', '01BAN001', '200010000016', 26000, 1, 'chq', '', '2017-10-04', 'SCB', 'inst', NULL, NULL, '2018-03-19 18:00:00', NULL),
(263, 1, 10, 105.20, 1052.00, '263', '270', 'A', '2017-10-04', 'A', '2017-10-04', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2017-09-24 18:00:00', NULL),
(264, 1, 20, 101.20, 2024.00, '264', '250', 'A', '2017-07-27', 'A', '2017-07-27', '01BAN001', '300010000061', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2017-07-23 18:00:00', NULL),
(265, 1, 150, 104.20, 15630.00, '265', '264', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '100010000047', 0, 1, 'card', '', '2019-03-10', 'SCB', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(266, 1, 10, 104.20, 1042.00, '266', '256', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '300010000061', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2017-08-21 18:00:00', NULL),
(267, 1, 2000, 115.63, 231260.00, '267', '327', 'A', '2018-06-11', 'A', '2018-06-12', '01BAN001', '100010000077', 0, 1, 'card', '7126708', '2015-11-23', 'Dhaka Bank Ltd', 'indv', NULL, NULL, '2018-06-10 18:00:00', NULL),
(268, 1, 5000, 109.50, 547500.00, '268', '285', 'A', '2017-11-09', 'A', '2017-11-12', '01BAN001', '100010000064', 0, 1, 'chq', '1349028', '2019-06-25', 'SOCIAL ISLAMIC BANK LIMITED', 'indv', NULL, NULL, '2017-11-06 18:00:00', NULL),
(269, 1, 1750, 115.68, 202440.00, '269', '333', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000067', 1750, 1, 'chq', '', '1970-01-01', 'SCB BD', 'indv', NULL, NULL, '2018-06-19 18:00:00', NULL),
(270, 1, 8000, 114.00, 912000.00, '270', '317', 'A', '2018-04-04', 'A', '2018-04-05', '01BAN001', '100010000091', 0, 1, 'po', 'A7965092', '2017-10-04', 'TRUST BANK', 'indv', NULL, NULL, '2018-04-03 18:00:00', NULL),
(271, 1, 670, 116.37, 77967.90, '271', '341', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000095', 670, 1, 'chq', '', '2018-03-04', 'SCB', 'indv', NULL, NULL, '2018-06-24 18:00:00', NULL),
(272, 1, 10, 105.20, 1052.00, '272', '271', 'A', '2017-10-04', 'A', '2017-10-04', '01BAN001', '300010000061', 0, 1, 'po', 'A2509572', '2017-12-20', 'Trust Bank Limited', 'indv', NULL, NULL, '2017-09-24 18:00:00', NULL),
(273, 1, 2000, 116.37, 232740.00, '273', '344', 'A', '2018-06-27', 'A', '2018-06-27', '01BAN001', '100010000096', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-06-25 18:00:00', NULL),
(274, 1, 4570, 109.50, 500415.00, '274', '286', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000082', 4570, 1, 'po', 'A4385124', '2019-06-30', 'TRUST BANK LIMITED', 'indv', NULL, NULL, '2017-11-07 18:00:00', NULL),
(275, 1, 10320, 116.37, 1200938.40, '275', '349', 'A', '2018-07-11', 'A', '2018-07-11', '01BAN001', '100010000098', 0, 1, 'chq', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2018-06-26 18:00:00', NULL),
(276, 1, 10, 118.77, 1187.70, '276', '354', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'Gulshan', 'indv', NULL, NULL, '2018-07-14 18:00:00', NULL),
(277, 1, 10, 118.77, 1187.70, '277', '355', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-07-22 18:00:00', NULL),
(278, 1, 10, 118.77, 1187.70, '278', '358', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '0261245', '2017-01-15', 'Trust Bank', 'indv', NULL, NULL, '2018-07-22 18:00:00', NULL),
(279, 1, 500, 104.80, 52400.00, '279', '272', 'A', '2017-10-09', 'A', '2017-10-09', '01BAN001', '100010000055', 0, 1, 'po', '', '2019-03-10', 'SCB', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(280, 1, 120, 104.80, 12576.00, '280', '274', 'A', '2017-10-09', 'A', '2017-10-09', '01BAN001', '300010000061', 0, 1, 'po', '3715', '2017-12-20', 'TRUSTBANK', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(281, 1, 10, 108.50, 1085.00, '281', '282', 'A', '2017-11-02', 'A', '2017-11-04', '01BAN001', '100010000055', 0, 1, 'po', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2017-10-28 18:00:00', NULL),
(282, 1, 5000, 116.37, 581850.00, '282', '338', 'A', '2018-06-25', 'A', '2018-06-27', '01BAN001', '100010000044', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-06-23 18:00:00', NULL),
(283, 1, 1800, 115.21, 207378.00, '283', '424', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000003', 1800, 1, 'chq', '', '2019-09-01', 'SCB', 'indv', NULL, NULL, '2019-04-08 18:00:00', NULL),
(284, 1, 4290, 116.75, 500857.50, '284', '323', 'A', '2018-05-31', 'A', '2018-05-31', '01BAN001', '100010000065', 0, 1, 'chq', '', '2018-01-28', 'SCB', 'indv', NULL, NULL, '2018-05-29 18:00:00', NULL),
(285, 1, 1100, 109.50, 120450.00, '285', '290', 'A', '2017-11-12', 'A', '2017-11-12', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2017-11-07 18:00:00', NULL),
(286, 1, 10, 108.50, 1085.00, '286', '283', 'A', '2017-11-02', 'A', '2017-11-04', '01BAN001', '300010000061', 0, 1, 'po', 'A5503415', '2016-09-05', 'TRUST BANK LTD.', 'indv', NULL, NULL, '2017-10-28 18:00:00', NULL),
(287, 1, 5000, 115.63, 578150.00, '287', '328', 'A', '2018-06-11', 'A', '2018-06-12', '01BAN001', '100010000064', 0, 1, 'card', '', '1970-01-01', 'SCB Online', 'indv', NULL, NULL, '2018-06-10 18:00:00', NULL),
(288, 1, 5000, 114.65, 573250.00, '288', '438', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000064', 5000, 1, 'bftn', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(289, 1, 1000, 104.80, 104800.00, '289', '280', 'A', '2017-10-10', 'A', '2017-10-10', '01BAN001', '100010000078', 0, 1, 'chq', 'B7964322', '2019-04-17', 'Trust Bank', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(290, 1, 2000, 109.50, 219000.00, '290', '292', 'A', '2017-11-09', 'A', '2017-11-12', '01BAN001', '100010000078', 0, 1, 'chq', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2017-11-07 18:00:00', NULL),
(291, 1, 1000, 114.65, 114650.00, '291', '447', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000104', 1000, 1, 'bftn', '0224681', '2017-05-22', 'Trust Bank', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(292, 1, 4000, 115.93, 463720.00, '292', '454', 'A', '2019-06-29', 'A', '2019-06-30', '01BAN001', '100010000107', 0, 1, 'chq', 'A9031672', '2017-05-23', 'Trust Bank', 'indv', NULL, NULL, '2019-06-24 18:00:00', NULL),
(293, 1, 4500, 115.93, 521685.00, '293', '456', 'A', '2019-06-29', 'A', '2019-06-30', '01BAN001', '100010000108', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-06-24 18:00:00', NULL),
(294, 1, 2100, 115.93, 243453.00, '294', '457', 'A', '2019-07-03', 'A', '2019-07-03', '01BAN001', '100010000109', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-06-25 18:00:00', NULL),
(295, 1, 300, 109.50, 32850.00, '295', '291', 'A', '2017-11-12', 'A', '2017-11-12', '01BAN001', '300010000061', 40, 1, 'po', '1349030', '2019-06-30', 'SIBL', 'indv', NULL, NULL, '2017-11-07 18:00:00', NULL),
(296, 1, 500, 115.50, 57750.00, '296', '299', 'A', '2017-12-26', 'A', '2017-12-26', '01BAN001', '100010000089', 0, 1, 'chq', '0087186', '2019-08-07', 'City Bank', 'indv', NULL, NULL, '2017-12-19 18:00:00', NULL),
(297, 1, 1820, 113.90, 207298.00, '297', '430', 'A', '2019-05-15', 'A', '2019-05-15', '01BAN001', '100010000003', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-05-06 18:00:00', NULL),
(298, 1, 20, 116.62, 2332.40, '298', '365', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000014', 20, 1, 'card', '0195813', '2016-09-05', 'Trust Bank LTD.', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(299, 1, 10, 103.27, 1032.70, '299', '475', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000019', 10, 1, 'bftn', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(300, 1, 20, 103.27, 2065.40, '300', '477', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000040', 20, 1, 'bftn', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(301, 1, 8000, 116.37, 930960.00, '301', '346', 'A', '2018-07-11', 'A', '2018-07-11', '01BAN001', '100010000094', 0, 1, 'chq', '789458687', '2018-03-04', 'Prime Bank', 'indv', NULL, NULL, '2018-06-26 18:00:00', NULL),
(302, 1, 10, 115.60, 1156.00, '302', '295', 'A', '2017-11-28', 'A', '2017-12-09', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2017-11-26 18:00:00', NULL),
(303, 1, 10, 115.60, 1156.00, '303', '296', 'A', '2017-11-28', 'A', '2017-12-09', '01BAN001', '300010000061', 10, 1, 'po', '', '2019-08-04', 'SCB', 'indv', NULL, NULL, '2017-11-26 18:00:00', NULL),
(304, 1, 10, 115.00, 1150.00, '304', '300', 'A', '2017-12-28', 'A', '2017-12-28', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Ltd', 'indv', NULL, NULL, '2017-12-26 18:00:00', NULL),
(305, 1, 30, 101.40, 3042.00, '305', '253', 'A', '2017-08-03', 'A', '2017-08-05', '01BAN001', '100010000057', 0, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2017-08-01 18:00:00', NULL),
(306, 1, 500, 101.40, 50700.00, '306', '254', 'A', '2017-08-03', 'A', '2017-08-05', '01BAN001', '100010000058', 500, 1, 'po', '', '1970-01-01', 'TRUST BANK LIMITED', 'indv', NULL, NULL, '2017-08-01 18:00:00', NULL),
(307, 1, 10, 117.50, 1175.00, '307', '304', 'A', '2018-01-29', 'A', '2018-01-30', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'TRUST BANK', 'indv', NULL, NULL, '2018-01-27 18:00:00', NULL),
(308, 1, 10, 115.00, 1150.00, '308', '301', 'A', '2017-12-28', 'A', '2017-12-28', '01BAN001', '300010000061', 10, 1, 'po', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2017-12-26 18:00:00', NULL),
(309, 1, 420, 104.20, 43764.00, '309', '257', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '100010000002', 420, 1, 'card', '', '1970-01-01', 'AB Bank Limited', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(310, 1, 50, 104.20, 5210.00, '310', '260', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '100010000016', 50, 1, 'card', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(311, 1, 60, 116.62, 6997.20, '311', '372', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000062', 0, 1, 'card', '100010000055', '2014-09-03', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(312, 1, 260, 104.20, 27092.00, '312', '266', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '100010000029', 260, 1, 'card', '', '1970-01-01', 'TRUST BANK', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(313, 1, 11160, 116.62, 1301479.20, '313', '375', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '200010000001', 11160, 1, 'card', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(314, 1, 7190, 104.20, 749198.00, '314', '268', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '200020000004', 7190, 1, 'card', '', '1970-01-01', 'TRUST BANK', 'inst', NULL, NULL, '2017-08-22 18:00:00', NULL),
(315, 1, 1350, 104.20, 140670.00, '315', '269', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '200010000011', 1350, 1, 'card', '', '1970-01-01', 'TRUST BANK', 'inst', NULL, NULL, '2017-08-22 18:00:00', NULL),
(316, 1, 15000, 109.50, 1642500.00, '316', '289', 'A', '2017-11-09', 'A', '2017-11-12', '01BAN001', '200010000013', 0, 1, 'chq', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2017-11-07 18:00:00', NULL),
(317, 1, 20, 116.10, 2322.00, '317', '306', 'A', '2018-02-27', 'A', '2018-02-27', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2018-02-13 18:00:00', NULL),
(318, 1, 10, 117.50, 1175.00, '318', '305', 'A', '2018-01-29', 'A', '2018-01-30', '01BAN001', '300010000061', 10, 1, 'po', '', '1970-01-01', 'TRUST BANK', 'indv', NULL, NULL, '2018-01-27 18:00:00', NULL),
(319, 1, 20, 116.10, 2322.00, '319', '307', 'A', '2018-02-27', 'A', '2018-02-27', '01BAN001', '300010000061', 20, 1, 'po', '', '2017-09-25', 'SCB', 'indv', NULL, NULL, '2018-02-13 18:00:00', NULL),
(320, 1, 26000, 115.20, 2995200.00, '320', '319', 'A', '2018-05-14', 'A', '2018-05-14', '01BAN001', '200010000016', 26000, 1, 'chq', '', '1970-01-01', 'Standard Chartered Bank', 'indv', NULL, NULL, '2018-05-08 18:00:00', NULL),
(321, 1, 9000, 116.37, 1047330.00, '321', '335', 'A', '2018-06-24', 'A', '2018-06-27', '01BAN001', '100010000091', 0, 1, 'chq', '100010000040', '2016-01-13', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-06-23 18:00:00', NULL),
(322, 1, 2600, 115.68, 300768.00, '322', '332', 'A', '2018-06-21', 'A', '2018-06-21', '01BAN001', '100010000076', 0, 1, 'chq', '8713414', '2017-10-04', 'TRUST BANK', 'indv', NULL, NULL, '2018-06-19 18:00:00', NULL),
(323, 1, 5000, 116.37, 581850.00, '323', '339', 'A', '2018-06-25', 'A', '2018-06-27', '01BAN001', '100010000044', 0, 1, 'chq', '', '2018-02-14', 'SCB', 'indv', NULL, NULL, '2018-06-24 18:00:00', NULL),
(324, 1, 10000, 114.24, 1142400.00, '324', '397', 'A', '2019-01-03', 'A', '2019-01-03', '01BAN001', '100010000101', 10000, 1, 'chq', '0469594', '2017-10-04', 'TRUST BANK', 'indv', NULL, NULL, '2019-01-01 18:00:00', NULL),
(325, 1, 1000, 117.39, 117390.00, '325', '392', 'A', '2018-11-20', 'A', '2018-11-20', '01BAN001', '100010000100', 1000, 1, 'chq', '9874400', '2018-06-28', 'Trust Bank', 'indv', NULL, NULL, '2018-11-18 18:00:00', NULL),
(326, 1, 50, 116.50, 5825.00, '326', '303', 'A', '2018-01-24', 'A', '2018-01-24', '01BAN001', '100010000087', 0, 1, 'chq', '', '1970-01-01', 'AB Bank Limited', 'indv', NULL, NULL, '2018-01-20 18:00:00', NULL),
(327, 1, 10, 118.82, 1188.20, '327', '415', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '6952342', '2017-10-04', 'TRUST BANK', 'indv', NULL, NULL, '2019-03-02 18:00:00', NULL),
(328, 1, 10, 118.82, 1188.20, '328', '416', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', 'B3153354', '2017-11-07', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2019-03-03 18:00:00', NULL),
(329, 1, 250, 118.20, 29550.00, '329', '302', 'A', '2018-01-09', 'A', '2018-01-10', '01BAN001', '100010000047', 0, 1, 'chq', '', '1970-01-01', 'TBBL, Kushtia Br, Kushtia', 'indv', NULL, NULL, '2018-01-07 18:00:00', NULL),
(330, 1, 10, 114.50, 1145.00, '330', '308', 'A', '2018-03-06', 'A', '2018-03-11', '01BAN001', '100010000055', 0, 1, 'po', '', '2017-12-27', 'SCB', 'indv', NULL, NULL, '2018-03-03 18:00:00', NULL),
(331, 1, 3000, 115.68, 347040.00, '331', '329', 'A', '2018-06-21', 'A', '2018-06-21', '01BAN001', '100010000002', 3000, 1, 'chq', '', '2018-02-14', 'SCB', 'indv', NULL, NULL, '2018-06-18 18:00:00', NULL),
(332, 1, 10, 115.10, 1151.00, '332', '313', 'A', '2018-03-27', 'A', '2018-03-27', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2018-03-20 18:00:00', NULL),
(333, 1, 10, 114.00, 1140.00, '333', '315', 'A', '2018-04-04', 'A', '2018-04-05', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'DHAKA BANK LTD', 'indv', NULL, NULL, '2018-03-31 18:00:00', NULL),
(334, 1, 50000, 115.21, 5760500.00, '334', '423', 'A', '2019-04-09', 'A', '2019-04-09', '01BAN001', '200010000018', 50000, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd.', 'inst', NULL, NULL, '2019-04-07 18:00:00', NULL),
(335, 1, 10, 115.00, 1150.00, '335', '320', 'A', '2018-05-14', 'A', '2018-05-21', '01BAN001', '100010000055', 0, 1, 'po', '100010000047', '2015-09-21', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2018-05-12 18:00:00', NULL),
(336, 1, 10, 114.50, 1145.00, '336', '309', 'A', '2018-03-06', 'A', '2018-03-11', '01BAN001', '300010000061', 10, 1, 'po', '', '2017-12-27', 'SCB', 'indv', NULL, NULL, '2018-03-03 18:00:00', NULL),
(337, 1, 6000, 116.37, 698220.00, '337', '350', 'A', '2018-07-04', 'A', '2018-07-04', '01BAN001', '100010000052', 0, 1, 'chq', '0000367', '2018-03-20', 'IFIC Bank Limited', 'indv', NULL, NULL, '2018-06-26 18:00:00', NULL),
(338, 1, 10, 115.10, 1151.00, '338', '314', 'A', '2018-03-27', 'A', '2018-03-27', '01BAN001', '300010000061', 10, 1, 'po', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2018-03-20 18:00:00', NULL),
(339, 1, 10, 115.94, 1159.40, '339', '324', 'A', '2018-06-05', 'A', '2018-06-07', '01BAN001', '100010000055', 0, 1, 'po', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2018-06-03 18:00:00', NULL),
(340, 1, 10, 114.00, 1140.00, '340', '316', 'A', '2018-04-04', 'A', '2018-04-05', '01BAN001', '300010000061', 10, 1, 'po', '100030000035', '2015-06-14', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-03-31 18:00:00', NULL),
(341, 1, 100, 114.50, 11450.00, '341', '310', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 100, 1, 'chq', '0521130000171', '2018-01-21', 'Union Bank, AtiBazar Branch', 'indv', NULL, NULL, '2018-03-05 18:00:00', NULL),
(342, 1, 860, 115.10, 98986.00, '342', '311', 'A', '2018-03-21', 'A', '2018-03-21', '01BAN001', '100010000069', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-03-17 18:00:00', NULL),
(343, 1, 2600, 115.44, 300144.00, '343', '432', 'A', '2019-05-14', 'A', '2019-05-14', '01BAN001', '100010000065', 0, 1, 'chq', '', '1970-01-01', 'Trust bank', 'indv', NULL, NULL, '2019-05-13 18:00:00', NULL),
(344, 1, 250, 116.07, 29017.50, '344', '322', 'A', '2018-05-28', 'A', '2018-05-28', '01BAN001', '100010000047', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-05-21 18:00:00', NULL),
(345, 1, 100, 118.77, 11877.00, '345', '359', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000002', 100, 1, 'chq', 'TBL A1142520', '2018-05-30', 'TRUST BANK', 'indv', NULL, NULL, '2018-07-23 18:00:00', NULL),
(346, 1, 10000, 115.77, 1157700.00, '346', '389', 'A', '2018-11-06', 'A', '2018-11-07', '01BAN001', '100010000044', 0, 1, 'chq', 'SBA 1498522', '2018-06-26', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-10-29 18:00:00', NULL),
(347, 1, 60, 116.62, 6997.20, '347', '373', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000095', 60, 1, 'card', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(348, 1, 25000, 116.37, 2909250.00, '348', '347', 'A', '2018-12-11', 'A', '2018-12-12', '01BAN001', '100010000094', 8000, 1, 'chq', '240275558', '2018-03-18', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2018-06-26 18:00:00', NULL),
(349, 1, 3110, 116.62, 362688.20, '349', '378', 'A', '2018-12-13', 'A', '2018-12-13', '01BAN001', '100010000094', 3110, 1, 'card', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-08-28 18:00:00', NULL),
(350, 1, 4300, 116.37, 500391.00, '350', '351', 'A', '2018-07-04', 'A', '2018-07-04', '01BAN001', '100010000052', 0, 1, 'chq', '', '2018-03-21', 'SCB', 'indv', NULL, NULL, '2018-06-26 18:00:00', NULL),
(351, 1, 370, 116.37, 43056.90, '351', '352', 'A', '2018-07-04', 'A', '2018-07-04', '01BAN001', '100010000052', 0, 1, 'chq', '', '2018-03-21', 'SCB', 'indv', NULL, NULL, '2018-06-26 18:00:00', NULL),
(352, 1, 1000, 116.62, 116620.00, '352', '371', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000052', 0, 1, 'card', '100010000047', '2014-07-23', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(353, 1, 2570, 116.37, 299070.90, '353', '353', 'A', '2018-06-27', 'A', '2018-06-27', '01BAN001', '100010000099', 0, 1, 'chq', '', '2018-04-01', 'SCB', 'indv', NULL, NULL, '2018-06-26 18:00:00', NULL),
(354, 1, 10, 118.77, 1187.70, '354', '356', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '2018-04-03', 'Standard Chartered Bank', 'indv', NULL, NULL, '2018-07-22 18:00:00', NULL),
(355, 1, 10, 118.77, 1187.70, '355', '357', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '0013130000001346', '2018-05-06', 'UCB', 'indv', NULL, NULL, '2018-07-22 18:00:00', NULL),
(356, 1, 1150, 116.62, 134113.00, '356', '363', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000002', 1150, 1, 'card', '8633528', '2018-06-20', 'SCB', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(357, 1, 650, 116.37, 75640.50, '357', '342', 'A', '2018-06-27', 'A', '2018-06-27', '01BAN001', '100010000055', 0, 1, 'po', '', '2017-10-04', 'SCB', 'indv', NULL, NULL, '2018-06-25 18:00:00', NULL),
(358, 1, 4560, 109.50, 499320.00, '358', '287', 'A', '2017-11-09', 'A', '2017-11-12', '01BAN001', '100010000082', 0, 1, 'po', 'A4527326', '2019-06-30', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2017-11-07 18:00:00', NULL),
(359, 1, 6300, 113.80, 716940.00, '359', '362', 'A', '2018-08-14', 'A', '2018-08-14', '01BAN001', '100010000096', 0, 1, 'chq', 'A3252723', '2018-06-18', 'TRUST BANK', 'indv', NULL, NULL, '2018-08-07 18:00:00', NULL),
(360, 1, 2000, 117.40, 234800.00, '360', '458', 'A', '2019-07-03', 'A', '2019-07-03', '01BAN001', '100010000002', 2000, 1, 'chq', '3020706', '2017-11-08', 'ONE BANK LTD', 'indv', NULL, NULL, '2019-06-29 18:00:00', NULL),
(361, 1, 10, 104.20, 1042.00, '361', '258', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '100010000013', 10, 1, 'card', '56464', '2019-03-04', 'Prime Bank', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(362, 1, 100, 116.62, 11662.00, '362', '366', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000016', 100, 1, 'card', '0194901', '2018-06-20', 'Eastern Bank Ltd', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(363, 1, 10, 104.20, 1042.00, '363', '261', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '100010000027', 10, 1, 'card', '56895632', '2019-03-04', 'Prime Bank', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(364, 1, 250, 115.94, 28985.00, '364', '326', 'A', '2018-06-05', 'A', '2018-06-07', '01BAN001', '100010000047', 0, 1, 'chq', '', '2018-01-28', 'SCB', 'indv', NULL, NULL, '2018-06-04 18:00:00', NULL),
(365, 1, 230, 116.62, 26822.60, '365', '369', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000047', 0, 1, 'card', 'B4297905', '2018-06-24', 'Brac Bank', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(366, 1, 240, 116.62, 27988.80, '366', '374', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000099', 0, 1, 'card', 'A9031699', '2018-06-25', 'Trust Bank ', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(367, 1, 14820, 116.62, 1728308.40, '367', '376', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '200020000004', 14820, 1, 'card', 'B6033474', '2018-06-25', 'Trust Bank Limited ', 'inst', NULL, NULL, '2018-08-27 18:00:00', NULL),
(368, 1, 2780, 116.62, 324203.60, '368', '377', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '200010000011', 2780, 1, 'card', '8606077', '2018-06-25', 'SCB', 'inst', NULL, NULL, '2018-08-27 18:00:00', NULL),
(369, 1, 1390, 103.27, 143545.30, '369', '479', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000094', 1390, 1, 'bftn', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(370, 1, 10000, 115.06, 1150600.00, '370', '395', 'A', '2019-01-02', 'A', '2019-01-02', '01BAN001', '100010000044', 5000, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-12-25 18:00:00', NULL),
(371, 1, 500, 114.24, 57120.00, '371', '398', 'A', '2019-01-07', 'A', '2019-01-07', '01BAN001', '100010000100', 500, 1, 'chq', '1066321', '2017-10-04', 'MUTUAL TRUST BANK ', 'indv', NULL, NULL, '2019-01-01 18:00:00', NULL),
(372, 1, 10, 115.00, 1150.00, '372', '321', 'A', '2018-05-14', 'A', '2018-05-21', '01BAN001', '300010000061', 10, 1, 'po', '100010000047', '2015-10-12', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2018-05-12 18:00:00', NULL),
(373, 1, 1330, 113.80, 151354.00, '373', '360', 'A', '2018-08-14', 'A', '2018-08-14', '01BAN001', '100010000055', 680, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-08-07 18:00:00', NULL),
(374, 1, 10, 120.10, 1201.00, '374', '405', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '0837472', '2018-06-27', 'Midland Bank Ltd. ', 'indv', NULL, NULL, '2019-01-28 18:00:00', NULL),
(375, 1, 20, 120.04, 2400.80, '375', '409', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 20, 1, 'chq', '0837474', '2018-06-27', 'Midland Bank Ltd.', 'indv', NULL, NULL, '2019-02-16 18:00:00', NULL),
(376, 1, 20, 118.70, 2374.00, '376', '379', 'A', '2018-09-17', 'A', '2018-09-19', '01BAN001', '100010000055', 20, 1, 'po', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-09-08 18:00:00', NULL),
(377, 1, 230, 116.62, 26822.60, '377', '370', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000047', 230, 1, 'card', '', '1970-01-01', 'UNION BANK LIMITED', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(378, 1, 10000, 114.24, 1142400.00, '378', '396', 'A', '2019-01-02', 'A', '2019-01-02', '01BAN001', '100010000044', 10000, 1, 'chq', '0469594', '2017-10-04', 'TRUST BANK', 'indv', NULL, NULL, '2019-01-01 18:00:00', NULL),
(379, 1, 1310, 113.90, 149209.00, '379', '431', 'A', '2019-05-14', 'A', '2019-05-14', '01BAN001', '100010000022', 0, 1, 'chq', '22222', '2018-07-24', 'AB Bank', 'indv', NULL, NULL, '2019-05-06 18:00:00', NULL),
(380, 1, 860, 116.37, 100078.20, '380', '337', 'A', '2018-06-25', 'A', '2018-06-27', '01BAN001', '100010000087', 0, 1, 'card', '5800430', '2017-10-04', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-06-23 18:00:00', NULL),
(381, 1, 1750, 115.68, 202440.00, '381', '330', 'A', '2018-06-21', 'A', '2018-06-21', '01BAN001', '100010000067', 0, 1, 'chq', '', '1970-01-01', 'Al-Arafa-Islami Bank', 'indv', NULL, NULL, '2018-06-19 18:00:00', NULL),
(382, 1, 2200, 114.65, 252230.00, '382', '437', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000022', 0, 1, 'chq', '1481253', '2018-08-08', 'Union Bank Ltd.', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(383, 1, 1000, 112.62, 112620.00, '383', '425', 'A', '2019-04-18', 'A', '2019-04-18', '01BAN001', '100010000044', 1000, 1, 'chq', '1254836484', '2018-07-23', 'Prime Bank', 'indv', NULL, NULL, '2019-04-16 18:00:00', NULL),
(384, 1, 10, 115.94, 1159.40, '384', '325', 'A', '2018-06-05', 'A', '2018-06-07', '01BAN001', '300010000061', 10, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-06-03 18:00:00', NULL),
(385, 1, 290, 120.10, 34829.00, '385', '401', 'A', '2019-01-29', 'A', '2019-01-29', '01BAN001', '100010000087', 0, 1, 'chq', '1066381', '2017-10-04', 'MUTUAL TRUST BANK', 'indv', NULL, NULL, '2019-01-27 18:00:00', NULL),
(386, 1, 10, 116.28, 1162.80, '386', '387', 'A', '2018-10-07', 'A', '2018-10-16', '01BAN001', '100010000055', 10, 1, 'po', '', '2019-06-25', 'SCB', 'indv', NULL, NULL, '2018-10-01 18:00:00', NULL),
(387, 1, 43400, 115.20, 4999680.00, '387', '318', 'A', '2018-05-14', 'A', '2018-05-14', '01BAN001', '200010000017', 43400, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2018-05-05 18:00:00', NULL),
(388, 1, 10, 115.84, 1158.40, '388', '390', 'A', '2018-11-07', 'A', '2018-11-07', '01BAN001', '100010000055', 10, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-11-03 18:00:00', NULL),
(389, 1, 1320, 114.65, 151338.00, '389', '436', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000067', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(390, 1, 1730, 115.68, 200126.40, '390', '331', 'A', '2018-06-21', 'A', '2018-06-21', '01BAN001', '100010000093', 0, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-06-19 18:00:00', NULL),
(391, 1, 9000, 116.37, 1047330.00, '391', '334', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000091', 9000, 1, 'chq', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2018-06-23 18:00:00', NULL),
(392, 1, 440, 116.37, 51202.80, '392', '336', 'A', '2018-06-27', 'A', '2018-06-27', '01BAN001', '100010000054', 10, 1, 'chq', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2018-06-23 18:00:00', NULL),
(393, 1, 830, 120.04, 99633.20, '393', '410', 'A', '2019-02-19', 'A', '2019-02-19', '01BAN001', '100010000087', 0, 1, 'chq', '8633529', '2019-06-12', 'SCB', 'indv', NULL, NULL, '2019-02-18 18:00:00', NULL),
(394, 1, 4000, 116.88, 467520.00, '394', '450', 'A', '2019-06-23', 'A', '2019-06-25', '01BAN001', '100010000044', 4000, 1, 'chq', '', '1970-01-01', 'TRUST BANK LIMITED', 'indv', NULL, NULL, '2019-06-18 18:00:00', NULL),
(395, 1, 10, 119.63, 1196.30, '395', '393', 'A', '2018-12-05', 'A', '2018-12-06', '01BAN001', '100010000055', 10, 1, 'po', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2018-12-03 18:00:00', NULL),
(396, 1, 1000, 116.37, 116370.00, '396', '345', 'A', '2018-06-27', 'A', '2018-06-27', '01BAN001', '100010000097', 0, 1, 'chq', '', '2017-10-29', 'SCB', 'indv', NULL, NULL, '2018-06-25 18:00:00', NULL),
(397, 1, 640, 116.37, 74476.80, '397', '343', 'A', '2018-06-27', 'A', '2018-06-27', '01BAN001', '300010000061', 640, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2018-06-25 18:00:00', NULL),
(398, 1, 10, 116.28, 1162.80, '398', '384', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-09-29 18:00:00', NULL),
(399, 1, 10, 120.10, 1201.00, '399', '402', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'Midland Bank Ltd', 'indv', NULL, NULL, '2019-01-27 18:00:00', NULL),
(400, 1, 10, 120.10, 1201.00, '400', '403', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'Jamuna Bank', 'indv', NULL, NULL, '2019-01-27 18:00:00', NULL),
(401, 1, 10, 120.10, 1201.00, '401', '404', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'Standard Chartered', 'indv', NULL, NULL, '2019-01-28 18:00:00', NULL),
(402, 1, 10, 117.72, 1177.20, '402', '399', 'A', '2019-01-08', 'A', '2019-01-09', '01BAN001', '100010000055', 10, 1, 'po', '0837472', '2018-06-27', 'Midland Bank Ltd.', 'indv', NULL, NULL, '2019-01-05 18:00:00', NULL),
(403, 1, 20, 118.70, 2374.00, '403', '380', 'A', '2018-09-17', 'A', '2018-09-19', '01BAN001', '300010000061', 20, 1, 'po', '', '2017-10-29', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-09-08 18:00:00', NULL),
(404, 1, 10, 118.82, 1188.20, '404', '412', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2019-03-02 18:00:00', NULL),
(405, 1, 10, 118.82, 1188.20, '405', '413', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'Trust Bank Limited', 'indv', NULL, NULL, '2019-03-02 18:00:00', NULL),
(406, 1, 10, 116.28, 1162.80, '406', '388', 'A', '2018-10-07', 'A', '2018-10-16', '01BAN001', '300010000061', 10, 1, 'po', '', '2019-06-25', 'SCB', 'indv', NULL, NULL, '2018-10-01 18:00:00', NULL),
(407, 1, 10, 118.78, 1187.80, '407', '406', 'A', '2019-02-05', 'A', '2019-02-05', '01BAN001', '100010000055', 10, 1, 'po', '', '1970-01-01', 'AB Bank Limited', 'indv', NULL, NULL, '2019-02-02 18:00:00', NULL),
(408, 1, 10, 115.84, 1158.40, '408', '391', 'A', '2018-11-07', 'A', '2018-11-07', '01BAN001', '300010000061', 10, 1, 'po', '', '1970-01-01', 'Trust Bank', 'indv', NULL, NULL, '2018-11-03 18:00:00', NULL),
(409, 1, 3000, 114.65, 343950.00, '409', '441', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000076', 3000, 1, 'chq', '589745621', '2018-09-26', 'Prime bank', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(410, 1, 2440, 114.65, 279746.00, '410', '442', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000097', 0, 1, 'chq', '12421060016397', '2018-09-18', 'Prime Bank', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(411, 1, 1440, 104.00, 149760.00, '411', '247', 'A', '2017-06-19', 'A', '2017-06-19', '01BAN001', '100030000041', 0, 1, 'chq', '1066382', '2019-06-12', 'Mutual Trust Bank Ltd ', 'indv', NULL, NULL, '2017-06-17 18:00:00', NULL),
(412, 1, 1000, 114.65, 114650.00, '412', '444', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000100', 1000, 1, 'bftn', '12345', '2018-09-30', 'test', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(413, 1, 3000, 114.65, 343950.00, '413', '440', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000078', 0, 1, 'chq', '114270', '2017-05-02', 'Trust Bank ', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(414, 1, 3000, 114.65, 343950.00, '414', '448', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000105', 0, 1, 'chq', '', '2018-10-02', 'SCB', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(415, 1, 2600, 114.65, 298090.00, '415', '449', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000106', 0, 1, 'chq', 'B5340626', '2018-10-31', 'Trust Bank Ltd', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(416, 1, 1700, 115.93, 197081.00, '416', '451', 'A', '2019-06-25', 'A', '2019-06-25', '01BAN001', '100010000093', 1700, 1, 'chq', '3424812', '2018-11-19', 'DBBL', 'indv', NULL, NULL, '2019-06-23 18:00:00', NULL),
(417, 1, 10, 118.47, 1184.70, '417', '418', 'A', '2019-03-14', 'A', '2019-03-14', '01BAN001', '100010000055', 10, 1, 'po', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2019-03-09 18:00:00', NULL),
(418, 1, 10, 119.63, 1196.30, '418', '394', 'A', '2018-12-05', 'A', '2018-12-06', '01BAN001', '300010000061', 10, 1, 'po', '9874401', '2018-06-28', 'Trust Bank', 'indv', NULL, NULL, '2018-12-03 18:00:00', NULL),
(419, 1, 1700, 115.93, 197081.00, '419', '455', 'A', '2019-06-29', 'A', '2019-06-30', '01BAN001', '100010000003', 0, 1, 'chq', 'B6772473', '2019-01-02', 'TRUST BANK LIMITED ', 'indv', NULL, NULL, '2019-06-24 18:00:00', NULL),
(420, 1, 850, 117.40, 99790.00, '420', '459', 'A', '2019-07-01', 'A', '2019-07-01', '01BAN001', '100010000110', 850, 1, 'chq', '107-101-65304', '2019-01-02', 'Dutch Bangla Bank Ltd.', 'indv', NULL, NULL, '2019-06-29 18:00:00', NULL),
(421, 1, 1700, 117.40, 199580.00, '421', '460', 'A', '2019-07-03', 'A', '2019-07-03', '01BAN001', '100010000111', 0, 1, 'chq', '', '2019-01-06', 'SCB', 'indv', NULL, NULL, '2019-06-29 18:00:00', NULL),
(422, 1, 10, 117.72, 1177.20, '422', '400', 'A', '2019-01-08', 'A', '2019-01-09', '01BAN001', '300010000061', 10, 1, 'po', '1234', '2019-05-07', 'Prime Bank', 'indv', NULL, NULL, '2019-01-05 18:00:00', NULL),
(423, 1, 10, 118.78, 1187.80, '423', '407', 'A', '2019-02-05', 'A', '2019-02-05', '01BAN001', '300010000061', 10, 1, 'po', '', '1970-01-01', 'TRUST BANK LIMITED', 'indv', NULL, NULL, '2019-02-02 18:00:00', NULL),
(424, 1, 10, 117.07, 1170.70, '424', '420', 'A', '2019-04-04', 'A', '2019-04-04', '01BAN001', '100010000055', 10, 1, 'po', '4598782', '2018-06-27', 'Trust Bank', 'indv', NULL, NULL, '2019-03-31 18:00:00', NULL),
(425, 1, 500, 101.75, 50875.00, '425', '468', 'A', '2019-08-08', 'A', '2019-08-08', '01BAN001', '100010000112', 0, 1, 'chq', '18821030010691', '2019-01-28', 'Prime Bank', 'indv', NULL, NULL, '2019-08-06 18:00:00', NULL),
(426, 1, 1940, 103.27, 200343.80, '426', '470', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000002', 1940, 1, 'bftn', '45789584', '2019-01-29', 'Prime Bank', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(427, 1, 10, 103.27, 1032.70, '427', '471', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000009', 10, 1, 'bftn', '45789584', '2019-01-29', 'Prime Bank', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(428, 1, 20, 116.62, 2332.40, '428', '364', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000013', 20, 1, 'card', '9819493', '2018-06-20', 'trust Bank ltd', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(429, 1, 150, 103.27, 15490.50, '429', '474', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000016', 150, 1, 'bftn', '', '2019-02-03', 'SCB', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(430, 1, 30, 116.62, 3498.60, '430', '367', 'A', '2018-08-28', 'A', '2018-09-03', '01BAN001', '100010000027', 30, 1, 'card', '8975151', '2018-06-24', 'SCB', 'indv', NULL, NULL, '2018-08-27 18:00:00', NULL),
(431, 1, 250, 118.82, 29705.00, '431', '417', 'A', '2019-03-04', 'A', '2019-03-04', '01BAN001', '100010000047', 190, 1, 'chq', '', '2017-11-08', 'SCB', 'indv', NULL, NULL, '2019-03-03 18:00:00', NULL),
(432, 1, 310, 103.27, 32013.70, '432', '480', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000100', 310, 1, 'bftn', '123', '2019-02-19', 'UNION BANK LIMITED', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(433, 1, 10, 118.47, 1184.70, '433', '419', 'A', '2019-03-14', 'A', '2019-03-14', '01BAN001', '300010000061', 10, 1, 'po', '', '2018-09-09', 'SCB', 'indv', NULL, NULL, '2019-03-09 18:00:00', NULL),
(434, 1, 10, 112.60, 1126.00, '434', '426', 'A', '2019-04-24', 'A', '2019-04-24', '01BAN001', '100010000055', 10, 1, 'po', '', '2018-09-09', 'SCB', 'indv', NULL, NULL, '2019-04-20 18:00:00', NULL),
(435, 1, 30, 103.27, 3098.10, '435', '472', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000013', 30, 1, 'bftn', '', '2019-02-03', 'SCB', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(436, 1, 30, 103.27, 3098.10, '436', '473', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000014', 30, 1, 'bftn', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(437, 1, 40, 103.27, 4130.80, '437', '476', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000027', 40, 1, 'bftn', '12458', '2019-02-17', 'Prime Bank', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(438, 1, 260, 104.20, 27092.00, '438', '262', 'A', '2017-09-10', 'A', '2017-09-10', '01BAN001', '100010000028', 260, 1, 'card', '984894', '2019-03-04', 'Prime Bank', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(439, 1, 260, 104.20, 27092.00, '439', '263', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000029', 260, 1, 'card', '455222', '2019-03-04', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2017-08-22 18:00:00', NULL),
(440, 1, 200, 115.21, 23042.00, '440', '422', 'A', '2019-04-09', 'A', '2019-04-09', '01BAN001', '100010000047', 200, 1, 'chq', '1254836484', '2018-07-23', 'Prime Bank', 'indv', NULL, NULL, '2019-04-07 18:00:00', NULL),
(441, 1, 10, 113.90, 1139.00, '441', '428', 'A', '2019-05-08', 'A', '2019-05-08', '01BAN001', '100010000055', 10, 1, 'po', '', '2017-11-08', 'SCB', 'indv', NULL, NULL, '2019-05-05 18:00:00', NULL),
(442, 1, 20, 104.80, 2096.00, '442', '275', 'A', '2017-10-10', 'A', '2017-10-10', '01BAN001', '100010000081', 20, 1, 'chq', '', '2019-04-01', 'SCB', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(443, 1, 30, 104.80, 3144.00, '443', '276', 'A', '2017-10-10', 'A', '2017-10-10', '01BAN001', '100010000079', 0, 1, 'chq', '', '2019-04-01', 'SCB', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(444, 1, 500, 104.80, 52400.00, '444', '277', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000079', 500, 1, 'chq', 'MSA 0536129', '2019-04-08', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(445, 1, 500, 104.80, 52400.00, '445', '278', 'A', '2017-10-10', 'A', '2017-10-23', '01BAN001', '100010000079', 0, 1, 'chq', '2928717', '2019-04-07', 'One Bank Limited', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(446, 1, 1000, 114.65, 114650.00, '446', '445', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000078', 0, 1, 'chq', '240261812', '2017-05-22', 'Trust Bank', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(447, 1, 1000, 114.65, 114650.00, '447', '446', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000078', 10, 1, 'chq', '', '2018-10-02', 'SCB', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(448, 1, 50, 104.80, 5240.00, '448', '281', 'A', '2017-10-10', 'A', '2017-10-10', '01BAN001', '100010000080', 50, 1, 'chq', '', '2019-04-21', 'SCB', 'indv', NULL, NULL, '2017-10-03 18:00:00', NULL),
(449, 1, 10, 118.48, 1184.80, '449', '381', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '2019-04-21', 'SCB', 'indv', NULL, NULL, '2018-09-25 18:00:00', NULL),
(450, 1, 10, 118.48, 1184.80, '450', '382', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '2019-05-06', 'SCB', 'indv', NULL, NULL, '2018-09-25 18:00:00', NULL),
(451, 1, 10, 116.28, 1162.80, '451', '385', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '2019-05-06', 'SCB', 'indv', NULL, NULL, '2018-09-29 18:00:00', NULL),
(452, 1, 10, 117.07, 1170.70, '452', '421', 'A', '2019-04-04', 'A', '2019-04-04', '01BAN001', '300010000061', 10, 1, 'po', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2019-03-31 18:00:00', NULL),
(453, 1, 10, 120.04, 1200.40, '453', '408', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '123', '2019-05-22', 'UNION BANK LIMITED', 'indv', NULL, NULL, '2019-02-16 18:00:00', NULL),
(454, 1, 7040, 113.54, 799321.60, '454', '433', 'A', '2019-05-23', 'A', '2019-05-23', '01BAN001', '100010000087', 500, 1, 'chq', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-05-21 18:00:00', NULL),
(455, 1, 10, 112.60, 1126.00, '455', '427', 'A', '2019-04-24', 'A', '2019-04-24', '01BAN001', '300010000061', 10, 1, 'po', '5768425897', '2018-09-26', 'Prime Bank', 'indv', NULL, NULL, '2019-04-20 18:00:00', NULL),
(456, 1, 1250, 103.27, 129087.50, '456', '481', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000101', 1250, 1, 'bftn', '0388388', '2019-06-12', 'Midland Bank', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(457, 1, 4060, 103.27, 419276.20, '457', '483', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '200010000011', 4060, 1, 'bftn', '7493835', '2019-06-12', 'Mutual Trust Bank Ltd.', 'inst', NULL, NULL, '2019-08-20 18:00:00', NULL),
(458, 1, 10, 113.90, 1139.00, '458', '429', 'A', '2019-05-08', 'A', '2019-05-08', '01BAN001', '300010000061', 10, 1, 'po', 'A4526243', '2019-06-12', 'Trust Bank', 'indv', NULL, NULL, '2019-05-05 18:00:00', NULL),
(459, 1, 110, 103.27, 11359.70, '459', '478', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000047', 110, 1, 'bftn', '65464', '2019-02-17', 'Prime Bank', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(460, 1, 500, 114.65, 57325.00, '460', '443', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100030000041', 0, 1, 'chq', '12345', '2018-09-30', 'test', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL),
(461, 1, 10, 114.65, 1146.50, '461', '434', 'A', '2019-06-11', 'A', '2019-06-11', '01BAN001', '100010000055', 10, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-06-08 18:00:00', NULL),
(462, 1, 10, 114.65, 1146.50, '462', '435', 'A', '2019-06-11', 'A', '2019-06-11', '01BAN001', '300010000061', 10, 1, 'po', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-06-08 18:00:00', NULL),
(463, 1, 10, 118.48, 1184.80, '463', '383', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', 'B7964327', '2019-06-19', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-09-26 18:00:00', NULL),
(464, 1, 10, 116.28, 1162.80, '464', '386', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', 'TBL9819497', '2019-06-24', 'Trust Bank Limited', 'indv', NULL, NULL, '2018-09-29 18:00:00', NULL),
(465, 1, 10, 115.93, 1159.30, '465', '452', 'A', '2019-06-29', 'A', '2019-06-30', '01BAN001', '100010000055', 10, 1, 'po', '', '2018-12-04', 'SCB', 'indv', NULL, NULL, '2019-06-24 18:00:00', NULL),
(466, 1, 10, 115.93, 1159.30, '466', '453', 'A', '2019-06-29', 'A', '2019-06-30', '01BAN001', '300010000061', 10, 1, 'po', 'B5340632', '2019-01-02', 'Trust Bank Ltd', 'indv', NULL, NULL, '2019-06-24 18:00:00', NULL),
(467, 1, 5000, 114.65, 573250.00, '467', '439', 'A', '2019-06-17', 'A', '2019-06-17', '01BAN001', '100010000064', 0, 1, 'bftn', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-06-11 18:00:00', NULL);
INSERT INTO `unit_purchase` (`UNIT_PURCHASE_ID`, `SPONSOR_ID`, `UNIT`, `RATE`, `TOTAL_AMOUNT`, `PURCHASE_NO`, `ALLOT_REF_NO`, `HOUSE_CNF_REC_FLAG`, `HOUSE_CNF_REC_DATE`, `SC_CNF_FLAG`, `SC_CNF_DATE`, `PURCHASE_PERSON_ID`, `REGISTRATION_NO`, `REMAINING_UNITS`, `SALESCENTER_ID`, `MODE_PAY`, `BCPODDTC_NO`, `BCPODDTC_DATE`, `BANK`, `INVESTOR_TYPE`, `OPS_ID`, `ACC_ID`, `created_at`, `updated_at`) VALUES
(468, 1, 4770, 116.37, 555084.90, '468', '348', 'A', '2018-07-03', 'A', '2018-07-04', '01BAN001', '100010000082', 0, 1, 'po', '0195814', '2016-11-15', 'Trust Bank', 'indv', NULL, NULL, '2018-06-26 18:00:00', NULL),
(469, 1, 7470, 113.80, 850086.00, '469', '361', 'A', '2018-08-14', 'A', '2018-08-14', '01BAN001', '100010000082', 0, 1, 'po', '0535949', '2018-06-05', 'Trust Bank', 'indv', NULL, NULL, '2018-08-07 18:00:00', NULL),
(470, 1, 20, 103.54, 2070.80, '470', '462', 'A', '2019-07-09', 'A', '2019-07-10', '01BAN001', '300010000061', 20, 1, 'po', '', '2019-01-06', 'SCB', 'indv', NULL, NULL, '2019-07-07 18:00:00', NULL),
(471, 1, 2200, 109.50, 240900.00, '471', '293', 'A', '2017-11-09', 'A', '2017-11-12', '01BAN001', '200010000015', 0, 1, 'chq', '', '2019-07-08', 'SCB', 'indv', NULL, NULL, '2017-11-07 18:00:00', NULL),
(472, 1, 6400, 109.50, 700800.00, '472', '294', 'A', '2017-11-09', 'A', '2017-11-12', '01BAN001', '100010000083', 0, 1, 'po', '', '2019-07-08', 'SCB', 'indv', NULL, NULL, '2017-11-07 18:00:00', NULL),
(473, 1, 10, 100.90, 1009.00, '473', '464', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '300010000061', 10, 1, 'po', '0291130000017', '2019-01-28', 'UNION BANK LIMITED', 'indv', NULL, NULL, '2019-08-03 18:00:00', NULL),
(474, 1, 500, 115.50, 57750.00, '474', '297', 'A', '2017-12-21', 'A', '2017-12-24', '01BAN001', '100010000086', 0, 1, 'chq', '', '2019-08-04', 'SCB', 'indv', NULL, NULL, '2017-12-19 18:00:00', NULL),
(475, 1, 22000, 115.50, 2541000.00, '475', '298', 'A', '2017-12-26', 'A', '2017-12-26', '01BAN001', '100010000088', 0, 1, 'chq', '', '2019-08-04', 'SCB', 'indv', NULL, NULL, '2017-12-19 18:00:00', NULL),
(476, 1, 500, 101.75, 50875.00, '476', '467', 'A', '2019-08-08', 'A', '2019-08-08', '01BAN001', '100010000089', 0, 1, 'chq', 'A1382085', '2017-06-18', 'Trust Bank', 'indv', NULL, NULL, '2019-08-06 18:00:00', NULL),
(477, 1, 20, 103.54, 2070.80, '477', '461', 'A', '2019-07-09', 'A', '2019-07-10', '01BAN001', '100010000055', 20, 1, 'po', '', '2017-11-08', 'SCB', 'indv', NULL, NULL, '2019-07-07 18:00:00', NULL),
(478, 1, 10, 100.90, 1009.00, '478', '463', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000055', 10, 1, 'po', '0480254', '2017-11-08', 'Union Bank Limited', 'indv', NULL, NULL, '2019-08-03 18:00:00', NULL),
(479, 1, 10, 101.75, 1017.50, '479', '465', 'A', '2019-08-08', 'A', '2019-08-08', '01BAN001', '100010000055', 10, 1, 'po', '45789584', '2019-01-28', 'Prime Bank', 'indv', NULL, NULL, '2019-08-04 18:00:00', NULL),
(480, 1, 10, 101.75, 1017.50, '480', '466', 'A', '2019-08-08', 'A', '2019-08-08', '01BAN001', '300010000061', 10, 1, 'po', '0195820', '2017-06-18', 'Trust Bank', 'indv', NULL, NULL, '2019-08-04 18:00:00', NULL),
(481, 1, 10, 118.82, 1188.20, '481', '411', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2019-03-02 18:00:00', NULL),
(482, 1, 10, 118.82, 1188.20, '482', '414', 'DA', '1970-01-01', 'N', '1970-01-01', '01BAN001', '100010000022', 10, 1, 'chq', '', '1970-01-01', 'Trust Bank Ltd.', 'indv', NULL, NULL, '2019-03-02 18:00:00', NULL),
(483, 1, 60, 101.80, 6108.00, '483', '484', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000055', 60, 1, 'po', '', '2017-11-27', 'SCB', 'indv', NULL, NULL, '2019-08-31 18:00:00', NULL),
(484, 1, 70, 101.80, 7126.00, '484', '485', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '300010000061', 70, 1, 'po', 'SBDA4538704', '2019-06-12', 'Trust Bank Ltd', 'indv', NULL, NULL, '2019-08-31 18:00:00', NULL),
(485, 1, 6290, 103.27, 649568.30, '485', '482', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '200010000018', 6290, 1, 'bftn', '', '2017-11-08', 'PUBALI BANK LTD', 'inst', NULL, NULL, '2019-08-20 18:00:00', NULL),
(486, 1, 440, 103.27, 45438.80, '486', '469', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000003', 0, 1, 'bftn', '', '1970-01-01', 'SCB', 'indv', NULL, NULL, '2019-08-20 18:00:00', NULL),
(487, 1, 500, 100.67, 50335.00, '487', '425', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000014', 500, 1, 'chq', '', '2019-09-09', 'SCB', 'indv', NULL, NULL, '2019-09-08 18:00:00', NULL),
(488, 1, 2000, 98.27, 196540.00, '488', '426', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000044', 2000, 1, 'chq', '', '2019-09-18', 'SCB', 'indv', NULL, NULL, '2019-09-17 18:00:00', NULL),
(489, 1, 690, 98.27, 67806.30, '489', '427', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000100', 690, 1, 'BEFTN', '', '2019-09-18', 'SCB', 'indv', NULL, NULL, '2019-09-17 18:00:00', NULL),
(490, 1, 10, 98.27, 982.70, '490', '428', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000055', 10, 1, 'BEFTN', '', '2019-09-18', 'SCB', 'indv', NULL, NULL, '2019-09-17 18:00:00', NULL),
(491, 1, 10, 98.27, 982.70, '491', '429', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '300010000061', 10, 1, 'BEFTN', '', '2019-09-18', 'SCB', 'indv', NULL, NULL, '2019-09-17 18:00:00', NULL),
(492, 1, 2610, 96.93, 252987.30, '492', '430', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000014', 2610, 1, 'BEFTN', '', '2019-09-23', 'SCB', 'indv', NULL, NULL, '2019-09-22 18:00:00', NULL),
(493, 1, 10, 96.93, 969.30, '493', '431', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000055', 10, 1, 'BEFTN', '', '2019-09-23', 'SCB', 'indv', NULL, NULL, '2019-09-22 18:00:00', NULL),
(494, 1, 10, 96.93, 969.30, '494', '431', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '300010000061', 10, 1, 'BEFTN', '', '2019-09-23', 'SCB', 'indv', NULL, NULL, '2019-09-22 18:00:00', NULL),
(495, 1, 50, 96.93, 4846.50, '495', '432', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000115', 50, 1, 'BEFTN', '', '2019-09-25', 'SCB', 'indv', NULL, NULL, '2019-09-24 18:00:00', NULL),
(496, 1, 1800, 96.93, 174474.00, '496', '433', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000114', 0, 1, 'BEFTN', '', '2019-09-25', 'SCB', 'indv', NULL, NULL, '2019-09-24 18:00:00', NULL),
(497, 1, 1550, 96.93, 150241.50, '496', '434', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000086', 0, 1, 'BEFTN', '', '2019-09-25', 'SCB', 'indv', NULL, NULL, '2019-09-24 18:00:00', NULL),
(498, 1, 6000, 96.93, 581580.00, '498', '435', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000044', 6000, 1, 'BEFTN', '', '2019-09-25', 'SCB', 'indv', NULL, NULL, '2019-09-24 18:00:00', NULL),
(499, 1, 3000, 96.93, 290790.00, '499', '436', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000044', 3000, 1, 'BEFTN', '', '2019-09-25', 'SCB', 'indv', NULL, NULL, '2019-09-24 18:00:00', NULL),
(500, 1, 1000, 96.93, 96930.00, '500', '437', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000087', 1000, 1, 'BEFTN', '', '2019-09-25', 'SCB', 'indv', NULL, NULL, '2019-09-24 18:00:00', NULL),
(501, 1, 510, 96.93, 49434.30, '501', '438', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000116', 0, 1, 'BEFTN', '', '2019-09-25', 'SCB', 'indv', NULL, NULL, '2019-09-24 18:00:00', NULL),
(502, 1, 10, 96.93, 969.30, '502', '439', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000117', 10, 1, 'BEFTN', '', '2019-09-25', 'SCB', 'indv', NULL, NULL, '2019-09-24 18:00:00', NULL),
(503, 1, 200, 96.93, 19386.00, '503', '440', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000089', 0, 1, 'BEFTN', '', '2019-09-25', 'SCB', 'indv', NULL, NULL, '2019-09-24 18:00:00', NULL),
(504, 1, 10, 97.12, 971.20, '504', '441', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000055', 10, 1, 'BEFTN', '', '2019-10-01', 'SCB', 'indv', NULL, NULL, '2019-09-30 18:00:00', NULL),
(505, 1, 10, 97.12, 971.20, '505', '442', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '300010000061', 10, 1, 'BEFTN', '', '2019-10-01', 'SCB', 'indv', NULL, NULL, '2019-09-30 18:00:00', NULL),
(506, 1, 500, 96.42, 971.20, '506', '443', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '100010000014', 500, 1, 'BEFTN', '', '2019-10-09', 'SCB', 'indv', NULL, NULL, '2019-10-08 18:00:00', NULL),
(507, 1, 78000, 94.87, 7399860.00, '507', '444', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '200010000005', 78000, 1, 'BEFTN', '', '2019-10-16', 'SCB', 'inst', NULL, NULL, '2019-10-15 18:00:00', NULL),
(508, 1, 97000, 94.87, 9202390.00, '508', '445', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '200010000007', 97000, 1, 'BEFTN', '', '2019-10-16', 'SCB', 'inst', NULL, NULL, '2019-10-15 18:00:00', NULL),
(509, 1, 213500, 94.87, 20254745.00, '509', '446', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '200010000008', 213500, 1, 'BEFTN', '', '2019-10-16', 'SCB', 'inst', NULL, NULL, '2019-10-15 18:00:00', NULL),
(510, 1, 67000, 94.87, 6356290.00, '510', '447', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '200010000009', 67000, 1, 'BEFTN', '', '2019-10-16', 'SCB', 'inst', NULL, NULL, '2019-10-15 18:00:00', NULL),
(511, 1, 72000, 94.87, 6830640.00, '511', '448', 'A', '1970-01-01', 'A', '1970-01-01', '01BAN001', '200010000010', 72000, 1, 'BEFTN', '', '2019-10-16', 'SCB', 'inst', NULL, NULL, '2019-10-15 18:00:00', NULL),
(512, 0, 0, 0.00, 0.00, '', '', '', '1970-01-01', 'A', '1970-01-01', '', '', 0, 0, '', '', '1970-01-01', '', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(513, 0, 0, 0.00, 0.00, '', '', '', '1970-01-01', 'A', '1970-01-01', '', '', 0, 0, '', '', '1970-01-01', '', '', NULL, NULL, '0000-00-00 00:00:00', NULL),
(514, 5, 20, 1000.00, 20000.00, '514', NULL, 'N', NULL, 'A', NULL, '01BAN001', '100010000113', 20, 1, 'chq', '256362', '2019-07-17', 'Trust Bank', 'indv', NULL, NULL, '2019-10-17 11:58:55', '2019-10-17 11:58:55'),
(515, 1, 10, 94.58, 945.80, '515', NULL, 'DA', '2019-10-30 17:15:51', 'N', NULL, '01BAN001', '100010000052', 10, 1, 'chq', '123456', '2019-10-30', 'Midland Bank Ltd', 'indv', 3, NULL, '2019-10-30 11:05:28', '2019-10-30 11:15:51'),
(516, 1, 650, 94.87, 61665.50, '516', NULL, 'A', NULL, 'A', NULL, '01BAN001', '100010000014', 650, 1, 'BEFTN', NULL, NULL, NULL, 'indv', NULL, NULL, '2019-10-13 18:00:00', NULL),
(517, 1, 10, 94.07, 940.70, '517', NULL, 'A', '2019-11-07 13:28:07', 'A', '2019-11-07 14:53:37', '300010000061', '300010000061', 10, 1, 'pay', 'BEFTN', '2019-11-04', 'SCB', 'indv', 3, 6, '2019-11-04 11:02:39', '2019-11-07 08:53:37'),
(518, 1, 10, 94.07, 940.70, '518', NULL, 'A', '2019-11-07 13:28:11', 'A', '2019-11-07 15:05:28', '100010000055', '100010000055', 10, 1, 'pay', 'BEFTN', '2019-11-04', 'SCB', 'indv', 3, 6, '2019-11-04 10:56:31', '2019-11-07 09:05:28'),
(519, 1, 15000, 94.07, 1411050.00, '519', NULL, 'DA', '2019-11-18 15:57:39', 'N', NULL, '01BAN001', '100010000094', 15000, 1, 'chq', '1203000', '2019-09-06', 'Trust Bank Limited', 'indv', 3, NULL, '2019-11-06 05:59:19', '2019-11-18 09:57:39'),
(520, 1, 2150, 94.07, 202250.50, '520', NULL, 'A', '2019-11-12 15:34:50', 'A', '2019-11-12 15:37:14', '100010000086', '100010000086', 0, 1, 'chq', 'A4526024', '2019-04-11', 'Trust Bank Ltd.', 'indv', 3, 6, '2019-11-06 07:06:01', '2019-11-12 09:37:14'),
(521, 1, 1060, 93.88, 99512.80, '521', NULL, 'A', '2019-11-20 15:41:31', 'A', '2019-11-20 17:30:45', '01BAN001', '100010000014', 1060, 1, 'chq', 'A5546025', '2019-11-19', 'Trust Bank Limited', 'indv', 3, 6, '2019-11-19 10:05:40', '2019-11-20 11:30:45'),
(522, 1, 1050, 95.12, 99876.00, '522', NULL, 'A', '2019-12-10 14:10:53', 'A', '2019-12-10 14:37:02', '01BAN001', '100010000014', 1050, 1, 'chq', 'A5546029', '2019-12-03', 'Trust Bank Limited', 'indv', 3, 6, '2019-12-03 10:43:32', '2019-12-10 08:37:02'),
(523, 1, 10, 95.12, 951.20, '523', NULL, 'A', '2019-12-10 14:10:42', 'A', '2019-12-10 14:37:53', '100010000055', '100010000055', 10, 1, 'pay', 'BEFTN', '2019-12-04', 'SCB', 'indv', 3, 6, '2019-12-04 06:41:41', '2019-12-10 08:37:53'),
(524, 1, 10, 95.12, 951.20, '524', NULL, 'A', '2019-12-10 14:10:46', 'A', '2019-12-10 14:38:43', '300010000061', '300010000061', 10, 1, 'pay', 'BEFTN', '2019-12-04', 'SCB', 'indv', 3, 6, '2019-12-04 06:43:41', '2019-12-10 08:38:43'),
(525, 1, 100, 95.12, 9512.00, '525', NULL, 'A', '2019-12-10 14:09:44', 'A', '2019-12-10 14:43:22', '100010000118', '100010000118', 100, 1, 'pay', 'BEFTN', '2019-12-04', 'Bank Asia ltd', 'indv', 3, 6, '2019-12-04 09:06:13', '2019-12-10 08:43:22'),
(526, 1, 20, 95.12, 1902.40, '526', NULL, 'DA', '2019-12-10 14:11:01', 'N', NULL, '100010000022', '100010000022', 20, 1, 'chq', '674328', '2019-12-05', 'prime bank', 'indv', 3, NULL, '2019-12-04 14:42:52', '2019-12-10 08:11:01'),
(527, 1, 10, 95.12, 951.20, '527', NULL, 'DA', '2019-12-10 14:11:08', 'N', NULL, '01BAN001', '100010000089', 10, 1, 'chq', 'A122332', '2019-12-05', 'TRUST BANK', 'indv', 3, NULL, '2019-12-05 05:39:19', '2019-12-10 08:11:08'),
(528, 1, 50000, 95.16, 4758000.00, '528', NULL, 'N', NULL, 'N', NULL, '01BAN001', '102010000119', 50000, 1, 'chq', '645986', '2019-12-10', 'lunlkj', 'indv', NULL, NULL, '2019-12-10 07:09:43', '2019-12-10 07:09:43'),
(529, 1, 10, 95.16, 951.60, '529', NULL, 'N', NULL, 'N', NULL, '01BAN001', '102010000119', 10, 1, 'chq', '63132210', '2019-12-10', 'lunlkj', 'indv', NULL, NULL, '2019-12-10 07:28:44', '2019-12-10 07:28:44'),
(530, 1, 20, 95.16, 1903.20, '530', NULL, 'N', NULL, 'N', NULL, '01BAN001', '102010000119', 20, 1, 'chq', '6351035102', '2019-12-10', 'lunlkj', 'indv', NULL, NULL, '2019-12-10 07:30:36', '2019-12-10 07:30:36'),
(531, 1, 100, 92.88, 9288.00, '531', NULL, 'A', '2019-12-30 23:11:37', 'A', '2019-12-30 23:13:32', '100010000118', '100010000118', 100, 1, 'pay', 'BEFTN', '2019-12-29', 'Bank Asia ltd', 'indv', 3, 6, '2019-12-29 15:59:01', '2019-12-30 17:13:32'),
(532, 1, 10, 94.36, 943.60, '532', NULL, 'A', '2020-01-09 21:45:13', 'A', '2020-01-09 22:12:18', '100010000055', '100010000055', 10, 1, 'pay', 'BEFTN', '2020-01-06', 'SCB', 'indv', 3, 6, '2020-01-06 15:57:18', '2020-01-09 16:12:18'),
(533, 1, 10, 94.36, 943.60, '533', NULL, 'A', '2020-01-09 21:45:17', 'A', '2020-01-09 22:14:16', '300010000061', '300010000061', 10, 1, 'pay', 'BEFTN', '2020-01-06', 'SCB', 'indv', 3, 6, '2020-01-06 15:58:58', '2020-01-09 16:14:16'),
(534, 1, 100, 91.53, 9153.00, '534', NULL, 'A', '2020-01-25 18:21:41', 'A', '2020-01-26 22:59:22', '100010000118', '100010000118', 100, 1, 'pay', 'BEFTN', '2020-01-22', 'Bank Asia ltd', 'indv', 3, 6, '2020-01-22 13:45:05', '2020-01-26 16:59:22'),
(535, 1, 10, 95.80, 958.00, '535', NULL, 'A', '2020-02-11 16:42:23', 'A', '2020-02-11 17:00:39', '100010000055', '100010000055', 10, 1, 'pay', 'BEFTN', '2020-02-04', 'SCB', 'indv', 3, 6, '2020-02-04 14:16:22', '2020-02-11 11:00:39'),
(536, 1, 10, 95.80, 958.00, '536', NULL, 'A', '2020-02-11 16:42:26', 'A', '2020-02-11 17:01:13', '300010000061', '300010000061', 10, 1, 'pay', 'BEFTN', '2020-02-04', 'SCB', 'indv', 3, 6, '2020-02-04 14:17:49', '2020-02-11 11:01:13'),
(537, 1, 100, 95.70, 9570.00, '537', NULL, 'A', '2020-02-12 14:06:39', 'A', '2020-02-13 16:49:40', '100010000118', '100010000118', 100, 1, 'pay', 'BEFTN', '2020-02-11', 'Bank Asia ltd', 'indv', 3, 6, '2020-02-11 13:02:27', '2020-02-13 10:49:40'),
(538, 1, 100, 96.95, 9695.00, '538', NULL, 'A', '2020-03-05 17:11:04', 'A', '2020-03-05 17:12:24', '100010000118', '100010000118', 100, 1, 'bftn', 'BEFTN', '2020-03-03', 'BANK ASIA LTD', 'indv', 3, 1, '2020-03-03 09:55:07', '2020-03-05 11:12:24'),
(539, 1, 10, 96.95, 969.50, '539', NULL, 'A', '2020-03-05 17:11:07', 'A', '2020-03-05 17:16:33', '100010000055', '100010000055', 10, 1, 'pay', 'BEFTN', '2020-03-03', 'SCB', 'indv', 3, 1, '2020-03-03 10:11:07', '2020-03-05 11:16:33'),
(540, 1, 10, 96.95, 969.50, '540', NULL, 'A', '2020-03-05 17:11:10', 'A', '2020-03-05 17:19:26', '300010000061', '300010000061', 10, 1, 'pay', 'BEFTN', '2020-03-03', 'SCB', 'indv', 3, 1, '2020-03-03 10:15:51', '2020-03-05 11:19:26'),
(541, 1, 4350, 91.77, 399199.50, '541', NULL, 'A', '2020-06-16 15:00:48', 'A', '2020-06-16 16:27:19', '01BAN001', '100010000065', 0, 1, 'chq', '12345', '2020-06-11', 'Trust Bank Ltd', 'indv', 3, 6, '2020-06-10 07:28:53', '2020-06-16 10:27:19'),
(542, 1, 2000, 92.51, 185020.00, '542', NULL, 'A', '2020-06-25 11:57:26', 'A', '2020-06-25 12:08:57', '100010000044', '100010000044', 2000, 1, 'chq', 'B7964365', '2020-06-22', 'Trust Bank Ltd', 'indv', 3, 6, '2020-06-22 04:35:30', '2020-06-25 06:08:57'),
(543, 1, 3800, 92.51, 351538.00, '543', NULL, 'A', '2020-06-30 11:02:04', 'A', '2020-06-30 11:44:55', '100010000022', '100010000022', 0, 1, 'chq', '4246435', '2020-06-25', 'Prime Bank', 'indv', 3, 6, '2020-06-23 06:30:48', '2020-06-30 05:44:55'),
(544, 1, 3800, 92.51, 351538.00, '544', NULL, 'DA', '2020-06-30 11:07:14', 'N', NULL, '100010000022', '100010000022', 3800, 1, 'chq', '4246435', '2020-06-24', 'Prime Bank', 'indv', 3, NULL, '2020-06-23 13:25:15', '2020-06-30 05:07:14'),
(545, 1, 500, 92.51, 46255.00, '545', NULL, 'DA', '2020-06-28 08:11:27', 'N', NULL, '01BAN001', '100010000089', 500, 1, 'chq', 'RRR999', '2020-06-24', 'TRUST BANK', 'indv', 3, NULL, '2020-06-24 10:26:20', '2020-06-28 02:11:27'),
(546, 1, 200, 92.51, 18502.00, '546', NULL, 'DA', '2020-06-28 08:12:11', 'N', NULL, '100010000089', '100010000089', 200, 1, 'chq', 'yyy44444', '2020-06-24', 'TRUST BANK', 'indv', 3, NULL, '2020-06-24 10:27:34', '2020-06-28 02:12:11'),
(547, 1, 2000, 92.51, 185020.00, '547', NULL, 'A', '2020-06-28 10:43:52', 'A', '2020-06-28 11:38:33', '100010000106', '100010000106', 0, 1, 'chq', '2386007', '2020-06-24', 'The City Bank Limited', 'indv', 3, 6, '2020-06-24 10:35:51', '2020-06-28 05:38:33'),
(548, 1, 2200, 92.51, 203522.00, '548', NULL, 'A', '2020-06-28 10:46:07', 'A', '2020-06-28 13:11:48', '100010000076', '100010000076', 2200, 1, 'chq', '1343671', '2020-06-24', 'Midland Bank Ltd.', 'indv', 3, 6, '2020-06-24 10:39:03', '2020-06-28 07:11:48'),
(549, 1, 3000, 92.51, 277530.00, '549', NULL, 'A', '2020-06-28 10:46:25', 'A', '2020-06-28 13:12:24', '100010000097', '100010000097', 0, 1, 'chq', '1160301', '2020-06-24', 'Mutual Trust bank Ltd.', 'indv', 3, 6, '2020-06-24 10:53:35', '2020-06-28 07:12:24'),
(550, 1, 490, 92.52, 45334.80, '550', NULL, 'DA', '2020-06-28 10:46:56', 'N', NULL, '01BAN001', '100010000087', 490, 1, 'bftn', '1234', '2020-06-28', 'UNION BANK LIMITED', 'indv', 3, NULL, '2020-06-28 01:00:28', '2020-06-28 04:46:56'),
(551, 1, 60, 92.52, 5551.20, '551', NULL, 'A', '2020-06-30 11:01:37', 'A', '2020-06-30 11:45:29', '01BAN001', '100010000020', 60, 1, 'bftn', '1234', '2020-06-28', 'Bank Asia', 'indv', 3, 6, '2020-06-28 05:33:05', '2020-06-30 05:45:29'),
(552, 1, 1200, 92.52, 111024.00, '552', NULL, 'A', '2020-06-30 11:05:31', 'A', '2020-06-30 11:47:27', '100010000120', '100010000120', 0, 1, 'chq', '2355812', '2020-06-28', 'City Bank', 'indv', 3, 6, '2020-06-28 06:15:59', '2020-06-30 05:47:27'),
(553, 1, 20, 92.52, 1850.40, '553', NULL, 'A', '2020-06-30 11:09:03', 'A', '2020-06-30 11:49:34', '100010000055', '100010000055', 20, 1, 'pay', 'BEFTN', '2020-06-28', 'SCB', 'indv', 3, 6, '2020-06-28 07:04:27', '2020-06-30 05:49:34'),
(554, 1, 10, 92.52, 925.20, '554', NULL, 'A', '2020-06-30 11:10:34', 'A', '2020-06-30 11:52:25', '300010000061', '300010000061', 10, 1, 'pay', 'BEFTN', '2020-06-28', 'SCB', 'indv', 3, 6, '2020-06-28 07:05:53', '2020-06-30 05:52:25'),
(555, 1, 10, 92.52, 925.20, '555', NULL, 'A', '2020-06-30 11:26:43', 'A', '2020-06-30 11:52:49', '01BAN001', '100010000020', 10, 1, 'bftn', 'AB1234', '2020-06-29', 'Bank Asia', 'indv', 3, 6, '2020-06-29 04:44:25', '2020-06-30 05:52:49'),
(556, 1, 10, 92.99, 929.90, '556', NULL, 'DA', '2020-07-29 07:26:45', 'N', NULL, '100010000089', '100010000089', 10, 1, 'chq', 'A9995', '2020-07-20', 'Trust Bank', 'indv', 3, NULL, '2020-07-20 04:07:00', '2020-07-29 01:26:45'),
(557, 1, 20, 93.45, 1869.00, '557', NULL, 'A', '2020-07-29 07:29:07', 'A', '2020-07-30 07:01:07', '100010000055', '100010000055', 20, 1, 'pay', 'BEFTN', '2020-07-27', 'SCB', 'indv', 3, 6, '2020-07-27 06:27:54', '2020-07-30 01:01:07'),
(558, 1, 20, 93.45, 1869.00, '558', NULL, 'A', '2020-07-29 07:29:10', 'A', '2020-07-30 07:01:28', '300010000061', '300010000061', 20, 1, 'pay', 'BEFTN', '2020-07-27', 'SCB', 'indv', 3, 6, '2020-07-27 06:31:08', '2020-07-30 01:01:28'),
(559, 1, 100, 93.45, 9345.00, '559', NULL, 'A', '2020-07-29 07:29:03', 'A', '2020-07-30 07:03:18', '100010000118', '100010000118', 100, 1, 'pay', 'BEFTN', '2020-07-27', 'Bank Asia ltd', 'indv', 3, 6, '2020-07-27 07:10:27', '2020-07-30 01:03:18'),
(560, 1, 40, 93.45, 3738.00, '560', NULL, 'A', '2020-08-05 12:07:15', 'A', '2020-08-06 12:44:48', '01BAN001', '100010000115', 40, 1, 'chq', 'A5820581', '2020-07-30', 'Trust Bank Limited', 'indv', 3, 6, '2020-07-29 01:35:50', '2020-08-06 06:44:48'),
(561, 1, 400000, 96.43, 38572000.00, '561', NULL, 'DA', '2020-08-13 07:50:18', 'N', NULL, '01BAN001', '100010000002', 400000, 1, 'chq', 'a5666011', '2020-08-13', 'Trust Bank Ltd.', 'indv', 3, NULL, '2020-08-12 08:59:32', '2020-08-13 01:50:18'),
(562, 1, 4000, 96.43, 385720.00, '562', NULL, 'A', '2020-08-17 10:20:08', 'A', '2020-08-17 10:21:50', '01BAN001', '100010000002', 4000, 1, 'chq', 'A5666011', '2020-08-13', 'Trust Bank Ltd.', 'indv', 3, 6, '2020-08-12 09:23:37', '2020-08-17 04:21:50'),
(563, 1, 20, 99.83, 1996.60, '563', NULL, 'A', '2020-09-03 11:36:02', 'A', '2020-09-03 16:28:07', '100010000055', '100010000055', 20, 1, 'pay', 'BEFTN', '2020-08-26', 'SCB', 'indv', 3, 6, '2020-08-26 00:33:40', '2020-09-03 10:28:07'),
(564, 1, 10, 99.83, 998.30, '564', NULL, 'A', '2020-09-03 11:36:16', 'A', '2020-09-03 16:29:18', '300010000061', '300010000061', 10, 1, 'pay', 'BEFTN', '2020-08-26', 'SCB', 'indv', 3, 6, '2020-08-26 00:35:04', '2020-09-03 10:29:18'),
(565, 1, 12020, 99.83, 1199956.60, '565', NULL, 'A', '2020-09-03 11:34:50', 'A', '2020-09-03 16:31:24', '01BAN001', '200010000011', 12020, 1, 'chq', 'B8345582', '2020-08-26', 'Trust Bank limited', 'inst', 3, 6, '2020-08-26 05:36:37', '2020-09-03 10:31:24'),
(566, 1, 50, 99.83, 4991.50, '566', NULL, 'A', '2020-09-03 11:35:30', 'A', '2020-09-03 16:29:50', '100010000118', '100010000118', 50, 1, 'pay', 'BEFTN', '2020-08-26', 'Bank Asia ltd', 'indv', 3, 6, '2020-08-26 06:16:36', '2020-09-03 10:29:50'),
(567, 1, 300, 99.83, 29949.00, '567', NULL, 'A', '2020-09-09 16:51:25', 'A', '2020-09-09 16:54:12', '100010000121', '100010000121', 300, 1, 'chq', '535621', '2020-08-26', 'DUTCHBANGLA BANK LIMITED', 'indv', 3, 6, '2020-08-26 10:47:13', '2020-09-09 10:54:12'),
(568, 1, 1000, 99.83, 99830.00, '568', NULL, 'A', '2020-09-09 16:51:31', 'A', '2020-09-09 16:54:43', '100010000121', '100010000121', 1000, 1, 'chq', '535622', '2020-08-26', 'DUTCHBANGLA BANK LIMITED', 'indv', 3, 6, '2020-08-26 11:42:00', '2020-09-09 10:54:43'),
(569, 1, 2000, 99.83, 199660.00, '569', NULL, 'A', '2020-09-29 21:08:19', 'A', '2020-09-29 21:10:02', '100010000121', '100010000121', 2000, 1, 'chq', '535623', '2020-08-26', 'DUTCHBANGLA BANK LIMITED', 'indv', 3, 6, '2020-08-26 11:43:19', '2020-09-29 15:10:02'),
(570, 1, 5000, 99.83, 499150.00, '570', NULL, 'A', '2020-09-03 11:35:07', 'A', '2020-09-03 16:30:27', '01BAN001', '100010000002', 5000, 1, 'chq', 'A5666012', '2020-08-26', 'Trust Bank Ltd.', 'indv', 3, 6, '2020-08-26 11:47:06', '2020-09-03 10:30:27'),
(571, 1, 10, 103.65, 1036.50, '571', NULL, 'A', '2020-09-09 16:50:30', 'A', '2020-09-09 16:53:39', '100010000055', '100010000055', 10, 1, 'pay', 'BEFTN', '2020-09-08', 'SCB', 'indv', 3, 6, '2020-09-08 06:10:50', '2020-09-09 10:53:39'),
(572, 1, 10, 103.65, 1036.50, '572', NULL, 'A', '2020-09-09 16:50:42', 'A', '2020-09-09 16:55:07', '300010000061', '300010000061', 10, 1, 'pay', 'BEFTN', '2020-09-08', 'SCB', 'indv', 3, 6, '2020-09-08 06:12:01', '2020-09-09 10:55:07'),
(573, 1, 580, 103.65, 60117.00, '573', NULL, 'A', '2020-09-13 16:25:35', 'A', '2020-09-14 12:54:38', '100010000112', '100010000112', 580, 1, 'chq', '123456789', '2020-09-09', 'City Bank Ltd.', 'indv', 3, 6, '2020-09-09 12:02:31', '2020-09-14 06:54:38'),
(574, 1, 620, 104.64, 64876.80, '574', NULL, 'A', '2020-09-21 15:20:36', 'A', '2020-09-23 16:37:47', '01BAN001', '100010000089', 620, 1, 'chq', 'A4525865', '2020-09-16', 'trust bank', 'indv', 3, 6, '2020-09-16 12:01:45', '2020-09-23 10:37:47'),
(575, 1, 20, 105.79, 2115.80, '575', NULL, 'A', '2020-09-23 16:34:39', 'A', '2020-09-23 16:38:41', '100010000055', '100010000055', 20, 1, 'pay', 'BEFTN', '2020-09-22', 'SCB', 'indv', 3, 6, '2020-09-22 11:23:26', '2020-09-23 10:38:41'),
(576, 1, 20, 105.79, 2115.80, '576', NULL, 'A', '2020-09-23 16:34:45', 'A', '2020-09-23 16:39:49', '300010000061', '300010000061', 20, 1, 'pay', 'BEFTN', '2020-09-22', 'SCB', 'indv', 3, 6, '2020-09-22 11:25:02', '2020-09-23 10:39:49'),
(577, 1, 50, 105.79, 5289.50, '577', NULL, 'A', '2020-09-23 16:34:50', 'A', '2020-09-23 16:40:30', '100010000118', '100010000118', 50, 1, 'pay', 'BEFTN', '2020-09-22', 'Bank Asia ltd', 'indv', 3, 6, '2020-09-22 11:26:23', '2020-09-23 10:40:30'),
(578, 1, 10, 106.65, 1066.50, '578', NULL, 'DA', '2020-10-04 15:47:55', 'N', NULL, '100010000022', '100010000022', 10, 1, 'chq', '2355812', '2020-09-30', 'Prime Bank', 'indv', 3, NULL, '2020-09-30 17:59:46', '2020-10-04 09:47:55'),
(579, 1, 25000, 106.65, 2666250.00, '579', NULL, 'A', '2020-10-04 15:48:10', 'A', '2020-10-04 17:24:13', '01BAN001', '200010000016', 25000, 1, 'chq', '2139098', '2020-09-30', 'IFIC Bank Ltd', 'inst', 3, 6, '2020-09-29 18:08:44', '2020-10-04 11:24:13'),
(580, 1, 25000, 106.65, 2666250.00, '580', NULL, 'A', '2020-10-04 15:48:13', 'A', '2020-10-04 17:24:39', '200010000019', '200010000019', 25000, 1, 'chq', '2713653', '2020-09-30', 'IFIC Bank Ltd', 'inst', 3, 6, '2020-09-29 18:53:14', '2020-10-04 11:24:39'),
(581, 1, 10, 111.38, 1113.80, '581', NULL, 'DA', '2020-10-04 15:48:02', 'N', NULL, '100010000022', '100010000022', 10, 1, 'chq', '2355812', '2020-10-04', 'Prime Bank', 'indv', 3, NULL, '2020-10-04 08:23:25', '2020-10-04 09:48:02'),
(582, 1, 10, 111.38, 1113.80, '582', NULL, 'N', NULL, 'N', NULL, '100010000055', '100010000055', 10, 1, 'pay', 'BEFTN', '2020-10-06', 'SCB', 'indv', NULL, NULL, '2020-10-06 13:23:54', '2020-10-06 13:23:54'),
(583, 1, 10, 111.38, 1113.80, '583', NULL, 'N', NULL, 'N', NULL, '300010000061', '300010000061', 10, 1, 'pay', 'BEFTN', '2020-10-06', 'SCB', 'indv', NULL, NULL, '2020-10-06 13:24:56', '2020-10-06 13:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `unit_sell`
--

CREATE TABLE `unit_sell` (
  `UNIT_SELL_ID` bigint(20) NOT NULL,
  `SPONSOR_ID` int(11) NOT NULL,
  `REGISTRATION_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UNIT` int(11) NOT NULL,
  `RATE` double(8,2) NOT NULL,
  `TOTAL_AMOUNT` double(10,2) NOT NULL,
  `SALE_NO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DP_INST_FLAG` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `DP_TRAN_CONF_FLAG` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `PAY_CLR_FLAG` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `DP_INST_DATE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DP_TRAN_CONF_DATE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAY_CLR_DATE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SALES_PERSON_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SALESCENTER_ID` int(11) NOT NULL,
  `MODE_PAY` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MB_NO` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MB_DATE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BANK` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OPS_ID` int(11) DEFAULT NULL,
  `ACC_ID` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_sell`
--

INSERT INTO `unit_sell` (`UNIT_SELL_ID`, `SPONSOR_ID`, `REGISTRATION_NO`, `UNIT`, `RATE`, `TOTAL_AMOUNT`, `SALE_NO`, `DP_INST_FLAG`, `DP_TRAN_CONF_FLAG`, `PAY_CLR_FLAG`, `DP_INST_DATE`, `DP_TRAN_CONF_DATE`, `PAY_CLR_DATE`, `SALES_PERSON_ID`, `SALESCENTER_ID`, `MODE_PAY`, `MB_NO`, `MB_DATE`, `BANK`, `OPS_ID`, `ACC_ID`, `created_at`, `updated_at`) VALUES
(1, 1, '100010000063', 500, 103.50, 51750.00, '1', 'EA', 'A', 'A', '2017-02-09', '2017-02-09', '2017-02-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-02-04 18:00:00', NULL),
(2, 1, '300010000061', 30, 114.50, 3435.00, '2', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-11-12 18:00:00', NULL),
(3, 1, '300010000061', 30, 114.50, 3435.00, '3', 'EA', 'A', 'A', '2017-11-21', '2017-11-21', '2017-12-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-11-12 18:00:00', NULL),
(4, 1, '200010000013', 15000, 116.30, 1744500.00, '4', 'EA', 'A', 'A', '2018-01-10', '2018-01-10', '2018-01-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-12-31 18:00:00', NULL),
(5, 1, '100010000079', 530, 116.30, 61639.00, '5', 'EA', 'A', 'A', '2018-01-03', '2018-01-03', '2018-01-08', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-12-31 18:00:00', NULL),
(6, 1, '100010000088', 8000, 116.30, 930400.00, '6', 'EA', 'A', 'A', '2018-01-10', '2018-01-10', '2018-01-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-12-31 18:00:00', NULL),
(7, 1, '100010000088', 6000, 116.70, 700200.00, '7', 'EA', 'A', 'A', '2018-01-15', '2018-01-15', '2018-01-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-01-07 18:00:00', NULL),
(8, 1, '100010000064', 5000, 115.50, 577500.00, '8', 'EA', 'A', 'A', '2018-02-11', '2018-02-11', '2018-02-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-02-03 18:00:00', NULL),
(9, 1, '100010000044', 3000, 115.25, 345750.00, '9', 'EA', 'A', 'A', '2018-06-11', '2018-06-11', '2018-06-12', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-05-27 18:00:00', NULL),
(10, 1, '300010000061', 630, 120.27, 75770.10, '10', 'EA', 'A', 'A', '2018-07-11', '2018-07-11', '2018-07-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-07 18:00:00', NULL),
(11, 1, '100010000082', 4770, 120.27, 573687.90, '11', 'EA', 'A', 'A', '2018-07-18', '2018-07-18', '2018-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-07 18:00:00', NULL),
(12, 1, '100010000087', 590, 120.27, 70959.30, '12', 'EA', 'A', 'A', '2018-07-18', '2018-07-18', '2018-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-07 18:00:00', NULL),
(13, 1, '100010000067', 1750, 120.27, 210472.50, '13', 'EA', 'A', 'A', '2018-07-18', '2018-07-18', '2018-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-07 18:00:00', NULL),
(14, 1, '100010000052', 4600, 120.27, 553242.00, '14', 'EA', 'A', 'A', '2018-07-15', '2018-07-15', '2018-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-08 18:00:00', NULL),
(15, 1, '100010000097', 1000, 120.27, 120270.00, '15', 'EA', 'A', 'A', '2018-07-24', '2018-07-24', '2018-08-12', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-10 18:00:00', NULL),
(16, 1, '100010000052', 6070, 120.27, 730038.90, '16', 'EA', 'A', 'A', '2018-07-24', '2018-07-24', '2018-08-12', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-10 18:00:00', NULL),
(17, 1, '100010000060', 100, 112.30, 11230.00, '17', 'EA', 'A', 'A', '2018-08-09', '2018-08-09', '2018-08-12', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-08-05 18:00:00', NULL),
(18, 1, '100010000055', 1330, 116.01, 154293.30, '18', 'EA', 'A', 'A', '2018-08-28', '2018-08-28', '2018-09-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-08-13 18:00:00', NULL),
(19, 1, '100010000096', 6300, 116.01, 730863.00, '19', 'EA', 'A', 'A', '2018-08-28', '2018-08-28', '2018-09-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-08-13 18:00:00', NULL),
(20, 1, '100010000044', 5000, 118.00, 590000.00, '20', 'EA', 'A', 'A', '2018-10-31', '2018-10-31', '2018-11-07', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-10-15 18:00:00', NULL),
(21, 1, '100010000062', 790, 115.22, 91023.80, '21', 'EA', 'A', 'A', '2018-11-18', '2018-11-18', '2018-11-20', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-11-13 18:00:00', NULL),
(22, 1, '100010000098', 500, 118.13, 59065.00, '22', 'EA', 'A', 'A', '2018-12-06', '2018-12-06', '2018-12-06', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-12-03 18:00:00', NULL),
(23, 1, '100010000044', 5000, 116.61, 583050.00, '23', 'EA', 'A', 'A', '2019-01-22', '2019-01-22', '2019-01-22', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-01-15 18:00:00', NULL),
(24, 1, '100010000044', 5000, 116.61, 583050.00, '24', 'EA', 'A', 'A', '2019-01-22', '2019-01-22', '2019-01-22', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-01-15 18:00:00', NULL),
(25, 1, '100010000078', 2500, 101.04, 252600.00, '25', 'EA', 'A', 'A', '2019-07-17', '2019-07-17', '2019-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-14 18:00:00', NULL),
(26, 1, '100010000105', 1000, 101.04, 101040.00, '26', 'EA', 'A', 'A', '2019-07-18', '2019-07-18', '2019-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-14 18:00:00', NULL),
(27, 1, '100010000064', 5000, 100.47, 502350.00, '27', 'EA', 'A', 'A', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-23 18:00:00', NULL),
(28, 1, '100010000106', 2600, 101.71, 264446.00, '28', 'EA', 'A', 'A', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-08-27 18:00:00', NULL),
(29, 1, '100010000022', 10, 101.50, 1015.00, '29', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-07 18:00:00', NULL),
(30, 1, '100010000022', 250, 101.50, 25375.00, '30', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-07 18:00:00', NULL),
(31, 1, '100010000038', 10000, 101.50, 1015000.00, '31', 'EA', 'A', 'A', '2014-07-09', '2014-07-09', '2014-07-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-07 18:00:00', NULL),
(32, 1, '100010000049', 5000, 101.50, 507500.00, '32', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-07 18:00:00', NULL),
(33, 1, '100010000022', 260, 101.70, 26442.00, '33', 'EA', 'A', 'A', '2014-07-14', '2014-07-14', '2014-07-16', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-12 18:00:00', NULL),
(34, 1, '100030000041', 100, 101.70, 10170.00, '34', 'EA', 'A', 'A', '2014-07-14', '2014-07-14', '2014-07-16', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-12 18:00:00', NULL),
(35, 1, '100020000012', 1000, 101.70, 101700.00, '35', 'EA', 'A', 'A', '2014-07-22', '2014-07-22', '2014-07-22', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-15 18:00:00', NULL),
(36, 1, '100030000050', 1000, 101.70, 101700.00, '36', 'EA', 'A', 'A', '2014-07-23', '2014-07-23', '2014-07-23', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-19 18:00:00', NULL),
(37, 1, '100010000044', 4000, 101.20, 404800.00, '37', 'EA', 'A', 'A', '2014-06-04', '2014-06-04', '2014-06-04', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-06-02 18:00:00', NULL),
(38, 1, '200010000012', 100000, 101.20, 10120000.00, '38', 'EA', 'A', 'A', '2014-06-03', '2014-06-03', '2014-06-04', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-06-01 18:00:00', NULL),
(39, 1, '100010000049', 5000, 101.50, 507500.00, '39', 'EA', 'A', 'A', '2014-07-09', '2014-07-09', '2014-07-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-08 18:00:00', NULL),
(40, 1, '100010000022', 260, 101.50, 26390.00, '40', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-08 18:00:00', NULL),
(41, 1, '100030000042', 100, 101.70, 10170.00, '41', 'EA', 'A', 'A', '2014-07-14', '2014-07-14', '2014-07-16', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-07-12 18:00:00', NULL),
(42, 1, '200010000012', 100000, 101.20, 10120000.00, '42', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-06-01 18:00:00', NULL),
(43, 1, '100010000034', 110, 101.90, 11209.00, '43', 'EA', 'A', 'A', '2014-08-07', '2014-08-07', '2014-08-10', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-08-04 18:00:00', NULL),
(44, 1, '100030000035', 1000, 102.00, 102000.00, '44', 'EA', 'A', 'A', '2014-08-13', '2014-08-13', '2014-08-14', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-08-09 18:00:00', NULL),
(45, 1, '100020000031', 100, 102.00, 10200.00, '45', 'EA', 'A', 'A', '2014-08-11', '2014-08-11', '2014-08-12', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-08-09 18:00:00', NULL),
(46, 1, '100010000032', 1000, 100.00, 100000.00, '46', 'EA', 'A', 'A', '2014-08-25', '2014-08-25', '2014-08-26', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-08-24 18:00:00', NULL),
(47, 1, '100020000021', 300, 100.00, 30000.00, '47', 'EA', 'A', 'A', '2014-09-22', '2014-09-22', '2014-09-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-09-13 18:00:00', NULL),
(48, 1, '100010000052', 100, 102.00, 10200.00, '48', 'EA', 'A', 'A', '2014-11-13', '2014-11-13', '2014-11-19', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-12 18:00:00', NULL),
(49, 1, '200010000002', 80000, 101.00, 8080000.00, '49', 'EA', 'A', 'A', '2015-03-10', '2015-03-10', '2015-03-23', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-02-28 18:00:00', NULL),
(50, 1, '100010000040', 3050, 103.50, 315675.00, '50', 'EA', 'A', 'A', '2015-08-13', '2015-08-13', '2015-08-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-08-11 18:00:00', NULL),
(51, 1, '100010000071', 380, 100.00, 38000.00, '51', 'EA', 'A', 'A', '2016-07-28', '2016-07-28', '2016-07-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-07-23 18:00:00', NULL),
(52, 1, '100010000075', 380, 100.00, 38000.00, '52', 'EA', 'A', 'A', '2016-07-28', '2016-07-28', '2016-07-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-07-23 18:00:00', NULL),
(53, 1, '100010000072', 380, 100.00, 38000.00, '53', 'EA', 'A', 'A', '2016-08-10', '2016-08-10', '2016-08-16', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-07-30 18:00:00', NULL),
(54, 1, '100010000056', 210, 100.00, 21000.00, '54', 'EA', 'A', 'A', '2016-08-27', '2016-08-27', '2016-08-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-08-20 18:00:00', NULL),
(55, 1, '100010000069', 1000, 99.50, 99500.00, '55', 'EA', 'A', 'A', '2016-09-07', '2016-09-07', '2016-09-07', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-08-27 18:00:00', NULL),
(56, 1, '100010000052', 10, 102.00, 1020.00, '56', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-10 18:00:00', NULL),
(57, 1, '100010000052', 10, 102.00, 1020.00, '57', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-10 18:00:00', NULL),
(58, 1, '100010000052', 10, 102.00, 1020.00, '58', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-10 18:00:00', NULL),
(59, 1, '100010000052', 10, 102.00, 1020.00, '59', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-10 18:00:00', NULL),
(60, 1, '100010000052', 10, 102.00, 1020.00, '60', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-10 18:00:00', NULL),
(61, 1, '100030000035', 950, 99.50, 94525.00, '61', 'EA', 'A', 'A', '2015-07-22', '2015-07-22', '2015-07-26', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-07-20 18:00:00', NULL),
(62, 1, '100010000074', 380, 100.00, 38000.00, '62', 'EA', 'A', 'A', '2016-08-10', '2016-08-10', '2016-08-16', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-07-30 18:00:00', NULL),
(63, 1, '100010000065', 1800, 100.00, 180000.00, '63', 'EA', 'A', 'A', '2016-08-16', '2016-08-16', '2016-08-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-08-13 18:00:00', NULL),
(64, 1, '100010000064', 6000, 100.00, 600000.00, '64', 'EA', 'A', 'A', '2016-08-27', '2016-08-27', '2016-08-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-08-20 18:00:00', NULL),
(65, 1, '100010000003', 100, 100.00, 10000.00, '65', 'EA', 'A', 'A', '2014-09-03', '2014-09-03', '2014-09-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-09-02 18:00:00', NULL),
(66, 1, '100010000005', 50, 100.00, 5000.00, '66', 'EA', 'A', 'A', '2014-09-09', '2014-09-09', '2014-09-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-09-07 18:00:00', NULL),
(67, 1, '100010000032', 1900, 100.00, 190000.00, '67', 'EA', 'A', 'A', '2014-09-09', '2014-09-09', '2014-09-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-09-07 18:00:00', NULL),
(68, 1, '100010000052', 100, 102.00, 10200.00, '68', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-11 18:00:00', NULL),
(69, 1, '100010000020', 250, 102.00, 25500.00, '69', 'EA', 'A', 'A', '2014-12-08', '2014-12-08', '2014-12-10', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-12-06 18:00:00', NULL),
(70, 1, '100010000024', 2000, 102.00, 204000.00, '70', 'EA', 'A', 'A', '2014-12-09', '2014-12-09', '2014-12-10', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-12-07 18:00:00', NULL),
(71, 1, '100070000048', 50, 101.00, 5050.00, '71', 'EA', 'A', 'A', '2015-02-28', '2015-02-28', '2015-03-02', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-02-16 18:00:00', NULL),
(72, 1, '200010000002', 100000, 101.00, 10100000.00, '72', 'EA', 'A', 'A', '2015-03-03', '2015-03-03', '2015-03-12', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-02-23 18:00:00', NULL),
(73, 1, '100010000007', 10, 101.00, 1010.00, '73', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-03-07 18:00:00', NULL),
(74, 1, '100010000007', 180, 101.00, 18180.00, '74', 'EA', 'A', 'A', '2015-03-10', '2015-03-10', '2015-03-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-03-07 18:00:00', NULL),
(75, 1, '100010000023', 2000, 99.50, 199000.00, '75', 'EA', 'A', 'A', '2015-07-08', '2015-07-08', '2015-07-14', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-07-07 18:00:00', NULL),
(76, 1, '100010000015', 500, 99.50, 49750.00, '76', 'EA', 'A', 'A', '2015-07-08', '2015-07-08', '2015-07-14', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-07-07 18:00:00', NULL),
(77, 1, '100010000006', 100, 100.50, 10050.00, '77', 'EA', 'A', 'A', '2016-03-23', '2016-03-23', '2016-03-23', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-03-19 18:00:00', NULL),
(78, 1, '100010000044', 1000, 101.00, 101000.00, '78', 'EA', 'A', 'A', '2016-04-21', '2016-04-21', '2016-04-21', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-04-18 18:00:00', NULL),
(79, 1, '100010000066', 2000, 100.00, 200000.00, '79', 'EA', 'A', 'A', '2016-07-14', '2016-07-14', '2016-07-21', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-07-12 18:00:00', NULL),
(80, 1, '100010000001', 3270, 100.00, 327000.00, '80', 'EA', 'A', 'A', '2016-07-14', '2016-07-14', '2016-07-21', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-07-12 18:00:00', NULL),
(81, 1, '100010000073', 3000, 100.00, 300000.00, '81', 'EA', 'A', 'A', '2016-07-28', '2016-07-28', '2016-07-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-07-23 18:00:00', NULL),
(82, 1, '100010000065', 200, 100.00, 20000.00, '82', 'EA', 'A', 'A', '2016-08-10', '2016-08-10', '2016-08-16', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-08-01 18:00:00', NULL),
(83, 1, '100030000035', 3100, 100.00, 310000.00, '83', 'EA', 'A', 'A', '2016-08-10', '2016-08-10', '2016-08-16', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-08-08 18:00:00', NULL),
(84, 1, '100010000067', 960, 100.00, 96000.00, '84', 'EA', 'A', 'A', '2016-08-21', '2016-08-21', '2016-08-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-08-15 18:00:00', NULL),
(85, 1, '100050000037', 500, 100.00, 50000.00, '85', 'EA', 'A', 'A', '2014-09-09', '2014-09-09', '2014-09-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-09-07 18:00:00', NULL),
(86, 1, '100010000033', 50, 100.00, 5000.00, '86', 'EA', 'A', 'A', '2014-09-09', '2014-09-09', '2014-09-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-09-07 18:00:00', NULL),
(87, 1, '100010000052', 10, 102.00, 1020.00, '87', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-10 18:00:00', NULL),
(88, 1, '100010000052', 10, 102.00, 1020.00, '88', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-10 18:00:00', NULL),
(89, 1, '100010000052', 10, 102.00, 1020.00, '89', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2014-11-10 18:00:00', NULL),
(90, 1, '100010000004', 1010, 100.30, 101303.00, '90', 'EA', 'A', 'A', '2015-02-17', '2015-02-17', '2015-02-19', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-02-11 18:00:00', NULL),
(91, 1, '100010000007', 180, 101.00, 18180.00, '91', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-03-04 18:00:00', NULL),
(92, 1, '100010000007', 180, 101.00, 18180.00, '92', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-03-04 18:00:00', NULL),
(93, 1, '100010000045', 1000, 103.00, 103000.00, '93', 'EA', 'A', 'A', '2015-07-27', '2015-07-27', '2015-07-29', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-07-25 18:00:00', NULL),
(94, 1, '100010000046', 2000, 102.50, 205000.00, '94', 'EA', 'A', 'A', '2015-09-01', '2015-09-01', '2015-09-20', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2015-08-29 18:00:00', NULL),
(95, 1, '100010000070', 1000, 100.30, 100300.00, '95', 'EA', 'A', 'A', '2016-11-21', '2016-11-21', '2016-11-21', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-11-15 18:00:00', NULL),
(96, 1, '200020000004', 50000, 101.00, 5050000.00, '96', 'EA', 'A', 'A', '2017-01-07', '2017-01-07', '2017-01-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-01-03 18:00:00', NULL),
(97, 1, '100010000044', 3000, 103.50, 310500.00, '97', 'EA', 'A', 'A', '2017-04-05', '2017-04-05', '2017-04-05', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-03-27 18:00:00', NULL),
(98, 1, '100010000047', 400, 102.90, 41160.00, '98', 'EA', 'A', 'A', '2017-08-10', '2017-08-10', '2017-08-10', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-08-06 18:00:00', NULL),
(99, 1, '100010000001', 200, 102.90, 20580.00, '99', 'EA', 'A', 'A', '2017-08-10', '2017-08-10', '2017-08-10', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-08-06 18:00:00', NULL),
(100, 1, '100010000077', 2000, 102.70, 205400.00, '100', 'EA', 'A', 'A', '2017-09-10', '2017-09-10', '2017-09-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-08-20 18:00:00', NULL),
(101, 1, '100010000064', 5000, 102.70, 513500.00, '101', 'EA', 'A', 'A', '2017-09-10', '2017-09-10', '2017-09-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-08-20 18:00:00', NULL),
(102, 1, '100010000065', 3860, 102.70, 396422.00, '102', 'EA', 'A', 'A', '2017-09-10', '2017-09-10', '2017-09-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-08-20 18:00:00', NULL),
(103, 1, '100010000044', 3000, 103.30, 309900.00, '103', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-10-03 18:00:00', NULL),
(104, 1, '100010000052', 4000, 109.00, 436000.00, '104', 'EA', 'A', 'A', '2017-10-23', '2017-10-23', '2017-10-23', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-10-10 18:00:00', NULL),
(105, 1, '100010000086', 500, 114.00, 57000.00, '105', 'EA', 'A', 'A', '2018-04-09', '2018-04-09', '2018-04-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-04-07 18:00:00', NULL),
(106, 1, '100010000082', 870, 115.40, 100398.00, '106', 'EA', 'A', 'A', '2018-04-18', '2018-04-18', '2018-05-14', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-04-14 18:00:00', NULL),
(107, 1, '100010000095', 670, 120.27, 80580.90, '107', 'EA', 'A', 'A', '2018-07-18', '2018-07-18', '2018-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-08 18:00:00', NULL),
(108, 1, '100010000047', 1500, 120.27, 180405.00, '108', 'EA', 'A', 'A', '2018-07-18', '2018-07-18', '2018-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-08 18:00:00', NULL),
(109, 1, '100010000082', 3830, 120.27, 460634.10, '109', 'EA', 'A', 'A', '2018-07-18', '2018-07-18', '2018-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-09 18:00:00', NULL),
(110, 1, '', 0, 0.00, 0.00, '110', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, '', NULL, NULL, NULL, NULL, NULL, '2018-07-10 18:00:00', NULL),
(111, 1, '100010000096', 2000, 120.27, 240540.00, '111', 'EA', 'A', 'A', '2018-07-18', '2018-07-18', '2018-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-10 18:00:00', NULL),
(112, 1, '', 0, 0.00, 0.00, '112', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, '', NULL, NULL, NULL, NULL, NULL, '2018-07-10 18:00:00', NULL),
(113, 1, '100010000091', 17000, 120.27, 2044590.00, '113', 'EA', 'A', 'A', '2018-07-24', '2018-07-24', '2018-08-12', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-10 18:00:00', NULL),
(114, 1, '100010000076', 2600, 120.27, 312702.00, '114', 'EA', 'A', 'A', '2018-07-24', '2018-07-24', '2018-08-12', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-10 18:00:00', NULL),
(115, 1, '100010000022', 10, 117.27, 1172.70, '115', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-23 18:00:00', NULL),
(116, 1, '100010000082', 7470, 116.01, 866594.70, '116', 'EA', 'A', 'A', '2018-08-28', '2018-08-28', '2018-09-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-08-13 18:00:00', NULL),
(117, 1, '100010000065', 4290, 115.12, 493864.80, '117', 'EA', 'A', 'A', '2018-09-03', '2018-09-03', '2018-09-03', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-08-27 18:00:00', NULL),
(118, 1, '100010000052', 840, 118.14, 99237.60, '118', 'EA', 'A', 'A', '2018-09-19', '2018-09-19', '2018-09-19', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-17 18:00:00', NULL),
(119, 1, '100010000077', 2000, 116.98, 233960.00, '119', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-24 18:00:00', NULL),
(120, 1, '100010000077', 2000, 116.98, 233960.00, '120', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-24 18:00:00', NULL),
(121, 1, '100010000099', 310, 116.98, 36263.80, '121', 'EA', 'A', 'A', '2018-10-01', '2018-10-01', '2018-10-03', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-25 18:00:00', NULL),
(122, 1, '100010000052', 160, 116.98, 18716.80, '122', 'EA', 'A', 'A', '2018-10-01', '2018-10-01', '2018-10-03', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-25 18:00:00', NULL),
(123, 1, '', 0, 0.00, 0.00, '123', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, '', NULL, NULL, NULL, NULL, NULL, '2018-09-26 18:00:00', NULL),
(124, 1, '100010000078', 2990, 118.00, 352820.00, '124', 'EA', 'A', 'A', '2018-10-31', '2018-10-31', '2018-11-07', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-10-16 18:00:00', NULL),
(125, 1, '100010000057', 190, 114.27, 21711.30, '125', 'EA', 'A', 'A', '2018-11-06', '2018-11-06', '2018-11-07', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-10-27 18:00:00', NULL),
(126, 1, '100010000044', 10000, 118.44, 1184400.00, '126', 'EA', 'A', 'A', '2018-12-17', '2018-12-17', '2018-12-17', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-11-27 18:00:00', NULL),
(127, 1, '100010000047', 230, 117.24, 26965.20, '127', 'EA', 'A', 'A', '2018-12-17', '2018-12-17', '2018-12-17', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-12-09 18:00:00', NULL),
(128, 1, '100010000093', 1730, 118.60, 205178.00, '128', 'EA', 'A', 'A', '2019-01-31', '2019-01-31', '2019-01-31', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-01-27 18:00:00', NULL),
(129, 1, '200010000005', 30000, 117.32, 3519600.00, '129', 'EA', 'A', 'A', '2019-04-02', '2019-04-02', '2019-04-02', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-03-03 18:00:00', NULL),
(130, 1, '200010000007', 30000, 117.32, 3519600.00, '130', 'EA', 'A', 'A', '2019-04-02', '2019-04-02', '2019-04-02', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-03-03 18:00:00', NULL),
(131, 1, '200010000006', 30000, 117.32, 3519600.00, '131', 'EA', 'A', 'A', '2019-04-02', '2019-04-02', '2019-04-02', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-03-03 18:00:00', NULL),
(132, 1, '200020000004', 25860, 100.20, 2591172.00, '132', 'EA', 'A', 'A', '2016-10-27', '2016-10-27', '2016-10-27', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2016-10-18 18:00:00', NULL),
(133, 1, '100010000047', 500, 102.30, 51150.00, '133', 'EA', 'A', 'A', '2017-05-06', '2017-05-06', '2017-05-06', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-04-29 18:00:00', NULL),
(134, 1, '100030000041', 1440, 100.00, 144000.00, '134', 'EA', 'A', 'A', '2017-07-18', '2017-07-18', '2017-07-19', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-07-15 18:00:00', NULL),
(135, 1, '100010000079', 500, 107.40, 53700.00, '135', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-10-22 18:00:00', NULL),
(136, 1, '100010000083', 880, 114.50, 100760.00, '136', 'EA', 'A', 'A', '2017-11-14', '2017-11-14', '2017-12-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-11-12 18:00:00', NULL),
(137, 1, '100010000082', 2620, 114.50, 299990.00, '137', 'EA', 'A', 'A', '2017-11-14', '2017-11-14', '2017-12-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-11-12 18:00:00', NULL),
(138, 1, '100010000055', 1510, 114.50, 172895.00, '138', 'EA', 'A', 'A', '2017-11-14', '2017-11-14', '2017-12-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-11-12 18:00:00', NULL),
(139, 1, '200010000015', 2200, 114.50, 251900.00, '139', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-11-14 18:00:00', NULL),
(140, 1, '100010000083', 5520, 116.30, 641976.00, '140', 'EA', 'A', 'A', '2018-01-10', '2018-01-10', '2018-01-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-12-31 18:00:00', NULL),
(141, 1, '200010000014', 60000, 116.30, 6978000.00, '141', 'EA', 'A', 'A', '2018-01-10', '2018-01-10', '2018-01-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-12-31 18:00:00', NULL),
(142, 1, '100010000089', 500, 116.30, 58150.00, '142', 'EA', 'A', 'A', '2018-01-03', '2018-01-03', '2018-01-08', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-12-31 18:00:00', NULL),
(143, 1, '200010000015', 2200, 116.30, 255860.00, '143', 'EA', 'A', 'A', '2018-01-04', '2018-01-04', '2018-01-08', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-12-31 18:00:00', NULL),
(144, 1, '100010000088', 8000, 116.30, 930400.00, '144', 'EA', 'A', 'A', '2018-01-10', '2018-01-10', '2018-01-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-01-01 18:00:00', NULL),
(145, 1, '100010000078', 1000, 115.00, 115000.00, '145', 'EA', 'A', 'A', '2018-02-27', '2018-02-27', '2018-02-28', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-02-19 18:00:00', NULL),
(146, 1, '100010000047', 1250, 113.70, 142125.00, '146', 'EA', 'A', 'A', '2018-05-14', '2018-05-14', '2018-05-14', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-05-05 18:00:00', NULL),
(147, 1, '100010000055', 640, 120.27, 76972.80, '147', 'EA', 'A', 'A', '2018-07-11', '2018-07-11', '2018-07-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-07 18:00:00', NULL),
(148, 1, '100010000022', 10, 117.27, 1172.70, '148', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-14 18:00:00', NULL),
(149, 1, '100010000099', 310, 116.98, 36263.80, '149', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-24 18:00:00', NULL),
(150, 1, '100010000099', 310, 116.98, 36263.80, '150', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-24 18:00:00', NULL),
(151, 1, '100010000077', 2000, 116.98, 233960.00, '151', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-24 18:00:00', NULL),
(152, 1, '100010000052', 160, 116.98, 18716.80, '152', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-24 18:00:00', NULL),
(153, 1, '100010000022', 10, 116.98, 1169.80, '153', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-24 18:00:00', NULL),
(154, 1, '100010000022', 10, 116.98, 1169.80, '154', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-25 18:00:00', NULL),
(155, 1, '100010000052', 160, 116.98, 18716.80, '155', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-25 18:00:00', NULL),
(156, 1, '100010000047', 500, 118.44, 59220.00, '156', 'EA', 'A', 'A', '2018-11-29', '2018-11-29', '2018-12-06', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-11-24 18:00:00', NULL),
(157, 1, '100010000094', 25000, 117.24, 2931000.00, '157', 'EA', 'A', 'A', '2018-12-17', '2018-12-17', '2018-12-17', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-12-11 18:00:00', NULL),
(158, 1, '200010000009', 30000, 117.32, 3519600.00, '158', 'EA', 'A', 'A', '2019-04-02', '2019-04-02', '2019-04-02', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-03-03 18:00:00', NULL),
(159, 1, '200010000008', 50000, 117.32, 5866000.00, '159', 'EA', 'A', 'A', '2019-04-02', '2019-04-02', '2019-04-02', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-03-03 18:00:00', NULL),
(160, 1, '200010000010', 30000, 117.32, 3519600.00, '160', 'EA', 'A', 'A', '2019-04-02', '2019-04-02', '2019-04-02', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-03-03 18:00:00', NULL),
(161, 1, '100010000054', 500, 117.32, 58660.00, '161', 'EA', 'A', 'A', '2019-03-07', '2019-03-07', '2019-03-10', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-03-04 18:00:00', NULL),
(162, 1, '100010000098', 1100, 113.71, 125081.00, '162', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-04-07 18:00:00', NULL),
(163, 1, '100010000098', 1100, 113.71, 125081.00, '163', 'EA', 'A', 'A', '2019-04-11', '2019-04-11', '2019-04-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-04-07 18:00:00', NULL),
(164, 1, '100010000069', 1160, 110.55, 128238.00, '164', 'EA', 'A', 'A', '2019-05-02', '2019-05-02', '2019-05-02', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-04-27 18:00:00', NULL),
(165, 1, '100010000065', 2600, 112.16, 291616.00, '165', 'EA', 'A', 'A', '2019-07-01', '2019-07-01', '2019-07-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-05-26 18:00:00', NULL),
(166, 1, '100010000078', 2500, 102.04, 255100.00, '166', 'EA', 'A', 'A', '2019-07-08', '2019-07-08', '2019-07-10', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-07 18:00:00', NULL),
(167, 1, '100010000087', 7977, 102.04, 813973.08, '167', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-07 18:00:00', NULL),
(168, 1, '100010000087', 7980, 102.04, 814279.20, '168', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-07 18:00:00', NULL),
(169, 1, '100030000041', 500, 102.04, 51020.00, '169', 'EA', 'A', 'A', '2019-07-08', '2019-07-08', '2019-07-10', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-07 18:00:00', NULL),
(170, 1, '100010000105', 2000, 102.04, 204080.00, '170', 'EA', 'A', 'A', '2019-07-08', '2019-07-08', '2019-07-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-07 18:00:00', NULL),
(171, 1, '100010000087', 7980, 102.04, 814279.20, '171', 'EA', 'A', 'A', '2019-07-15', '2019-07-15', '2019-07-15', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-09 18:00:00', NULL),
(172, 1, '100010000108', 4500, 101.04, 454680.00, '172', 'EA', 'A', 'A', '2019-07-18', '2019-07-18', '2019-07-18', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-13 18:00:00', NULL),
(173, 1, '100010000105', 1000, 101.04, 101040.00, '173', 'EA', 'DA', 'N', '1970-01-01', '1970-01-01', '1970-01-01', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-14 18:00:00', NULL),
(174, 1, '100010000067', 1320, 100.47, 132620.40, '174', 'EA', 'A', 'A', '2019-07-31', '2019-07-31', '2019-07-31', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-07-23 18:00:00', NULL),
(175, 1, '100010000047', 950, 101.00, 95950.00, '175', 'EA', 'A', 'A', '2017-01-07', '2017-01-07', '2017-01-07', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-01-02 18:00:00', NULL),
(176, 1, '100010000062', 5500, 104.00, 572000.00, '176', 'EA', 'A', 'A', '2017-01-31', '2017-01-31', '2017-01-31', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-01-22 18:00:00', NULL),
(177, 1, '100010000055', 500, 102.90, 51450.00, '177', 'EA', 'A', 'A', '2017-08-08', '2017-08-08', '2017-08-09', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-08-05 18:00:00', NULL),
(178, 1, '100020000068', 7030, 102.90, 723387.00, '178', 'EA', 'A', 'A', '2017-09-10', '2017-09-10', '2017-09-11', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2017-08-12 18:00:00', NULL),
(179, 1, '100010000099', 2500, 120.27, 300675.00, '179', 'EA', 'A', 'A', '2018-07-24', '2018-07-24', '2018-08-12', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-07-10 18:00:00', NULL),
(180, 1, '100010000054', 850, 118.14, 100419.00, '180', 'EA', 'A', 'A', '2018-09-20', '2018-09-20', '2018-09-26', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-16 18:00:00', NULL),
(181, 1, '100010000077', 2000, 116.98, 233960.00, '181', 'EA', 'A', 'A', '2018-10-01', '2018-10-01', '2018-10-03', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-25 18:00:00', NULL),
(182, 1, '100010000064', 5000, 116.98, 584900.00, '182', 'EA', 'A', 'A', '2018-10-01', '2018-10-01', '2018-10-03', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2018-09-25 18:00:00', NULL),
(183, 1, '100010000098', 500, 118.54, 59270.00, '183', 'EA', 'A', 'A', '2019-02-19', '2019-02-19', '2019-02-19', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-02-16 18:00:00', NULL),
(184, 0, '', 0, 0.00, 0.00, '', 'EA', '', '', '1970-01-01', '1970-01-01', '1970-01-01', '', 0, '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', NULL),
(185, 1, '100010000098', 8220, 96.77, 795449.00, '100', 'EA', 'A', 'A', '2019-09-23', '2019-09-23', '2019-09-23', '01BAN001', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2019-09-22 18:00:00', NULL),
(186, 1, '100010000054', 180, 93.01, 16741.80, '186', 'EA', 'A', 'A', '2019-10-20 16:40:16', '2019-10-27 16:56:19', '2019-10-27 17:40:26', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 4, '2019-10-20 09:15:03', '2019-10-27 11:40:26'),
(187, 1, '100010000047', 560, 93.38, 52292.80, '187', 'EA', 'A', 'A', '2019-11-30 10:49:44', '2019-12-03 16:49:47', '2019-12-03 17:10:25', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2019-11-26 09:06:33', '2019-12-03 11:10:25'),
(188, 1, '100020000036', 100, 90.92, 9092.00, '188', 'EA', 'A', 'A', '2020-01-15 23:21:15', '2020-01-16 16:09:54', '2020-01-16 16:53:12', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-01-14 17:16:47', '2020-01-16 10:53:12'),
(189, 1, '100010000003', 3960, 92.12, 364795.20, '189', 'EA', 'A', 'A', '2020-03-19 09:53:14', '2020-05-04 11:44:15', '2020-05-11 13:17:04', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-03-16 11:02:18', '2020-05-11 07:17:04'),
(190, 1, '100010000109', 2100, 92.12, 193452.00, '190', 'EA', 'A', 'A', '2020-03-19 09:53:17', '2020-03-23 13:36:35', '2020-03-23 13:44:04', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-03-16 11:07:02', '2020-03-23 07:44:04'),
(191, 1, '100010000112', 500, 92.12, 46060.00, '191', 'EA', 'A', 'A', '2020-03-19 09:53:20', '2020-03-23 13:35:49', '2020-03-23 13:46:58', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-03-18 08:04:14', '2020-03-23 07:46:58'),
(192, 1, '100010000116', 510, 92.12, 46981.20, '192', 'EA', 'A', 'A', '2020-03-19 09:53:23', '2020-03-23 13:36:02', '2020-03-23 13:53:44', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-03-18 08:07:30', '2020-03-23 07:53:44'),
(193, 1, '100010000089', 700, 92.12, 64484.00, '193', 'EA', 'A', 'A', '2020-03-19 09:53:26', '2020-03-23 13:36:17', '2020-03-23 14:16:58', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-03-18 08:11:28', '2020-03-23 08:16:58'),
(194, 1, '100010000086', 3700, 92.12, 340844.00, '194', 'EA', 'A', 'A', '2020-03-19 09:53:29', '2020-03-24 16:41:21', '2020-05-11 13:18:11', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-03-18 10:08:37', '2020-05-11 07:18:11'),
(195, 1, '100010000111', 1700, 90.44, 153748.00, '195', 'EA', 'A', 'A', '2020-03-25 14:47:43', '2020-05-11 13:58:37', '2020-05-11 17:39:46', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-03-24 06:22:20', '2020-05-11 11:39:46'),
(196, 1, '100010000022', 3520, 90.44, 318348.80, '196', 'EA', 'A', 'A', '2020-03-25 14:47:46', '2020-06-03 16:27:36', '2020-06-03 16:34:13', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-03-25 07:08:01', '2020-06-03 10:34:13'),
(197, 1, '100010000107', 4000, 90.44, 361760.00, '197', 'EA', 'A', 'A', '2020-03-25 14:47:49', '2020-06-03 16:27:40', '2020-06-03 16:35:38', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-03-25 07:15:44', '2020-06-03 10:35:38'),
(198, 1, '100010000087', 500, 91.02, 45510.00, '198', 'EA', 'DA', 'N', '2020-06-28 07:11:37', '2020-06-28 08:16:50', NULL, '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, NULL, '2020-06-28 00:53:49', '2020-06-28 02:16:50'),
(199, 1, '100010000104', 1000, 91.02, 91020.00, '199', 'EA', 'DA', 'N', '2020-06-28 07:11:40', '2020-06-28 08:16:57', NULL, '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, NULL, '2020-06-28 01:07:18', '2020-06-28 02:16:57'),
(200, 1, '100010000106', 2000, 91.29, 182580.00, '200', 'EA', 'A', 'A', '2020-07-19 10:34:20', '2020-07-26 06:51:35', '2020-07-26 10:10:27', '100010000106', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-07-13 07:16:49', '2020-07-26 04:10:27'),
(201, 1, '100010000022', 3800, 91.49, 347662.00, '201', 'EA', 'A', 'A', '2020-07-19 10:03:33', '2020-07-26 06:51:52', '2020-07-26 10:14:28', '100010000022', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-07-19 01:54:14', '2020-07-26 04:14:28'),
(202, 1, '100010000065', 4350, 101.65, 442177.50, '202', 'EA', 'A', 'A', '2020-09-06 11:49:16', '2020-09-06 14:45:08', '2020-09-07 17:41:14', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-08-31 10:28:52', '2020-09-07 11:41:14'),
(203, 1, '100010000120', 1200, 104.29, 125148.00, '203', 'EA', 'A', 'A', '2020-09-23 16:28:41', '2020-09-23 16:35:28', '2020-09-23 16:51:56', '100010000120', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-09-20 10:33:48', '2020-09-23 10:51:56'),
(204, 1, '100010000097', 5440, 104.29, 567337.60, '204', 'EA', 'A', 'A', '2020-09-27 15:57:51', '2020-09-27 15:59:31', '2020-09-27 17:21:50', '100010000097', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-09-20 10:40:08', '2020-09-27 11:21:50'),
(205, 1, '100010000114', 1800, 104.29, 187722.00, '205', 'EA', 'A', 'A', '2020-09-27 15:57:54', '2020-09-27 15:59:34', '2020-09-27 17:22:39', '100010000114', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-09-22 04:58:20', '2020-09-27 11:22:39'),
(206, 1, '100010000076', 5200, 105.15, 546780.00, '206', 'EA', 'DA', 'N', '2020-10-01 15:56:17', '2020-10-04 15:51:11', NULL, '100010000076', 1, 'eft', NULL, NULL, NULL, 3, NULL, '2020-09-29 16:28:26', '2020-10-04 09:51:11'),
(207, 1, '200020000004', 45510, 109.88, 5000638.80, '207', 'EA', 'A', 'A', '2020-10-06 16:54:46', '2020-10-07 12:03:52', '2020-10-07 12:09:19', '01BAN001', 1, 'eft', NULL, NULL, NULL, 3, 6, '2020-10-04 09:23:35', '2020-10-07 06:09:19'),
(208, 1, '100010000044', 3000, 109.88, 329640.00, '208', 'N', 'N', 'N', NULL, NULL, NULL, '100010000044', 1, 'eft', NULL, NULL, NULL, NULL, NULL, '2020-10-07 06:51:20', '2020-10-07 06:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi Hasan', 'mehedi3555@gmail.com', '1_user_photo.jpg', '$2y$10$G5JVBHWomvyiGblJi6crLujLYMN/bjhG0Q9eXjgbXA2SzxqvZSoZO', NULL, '2019-10-07 03:49:31', '2020-10-04 06:08:35'),
(2, 'Fahamida Sultana Shova', 'fahamida@capmbd.com', 'fahamida.jpg', '$2y$10$5XbftWQeY7vVW3MUxe85M.wIKmVVGZyeitnl69.oshkYFjB.NV0Jm', NULL, '2019-10-07 03:51:03', '2019-10-07 05:14:51'),
(3, 'Sumit Paul', 'sumit@capmbd.com', 'sumit.jpg', '$2y$10$ujW5OZ/ZnJWf0ffrpXSQ/.d5XM6LlKbKznotLfZ2xZaFS1Fk7HqZ2', NULL, '2019-10-07 03:52:52', '2020-06-16 08:48:14'),
(4, 'Angkan Biswas', 'angkan@capmbd.com', 'angkan.jpg', '$2y$10$qrk9xiLHVUqvQxzrjWU2CulkwrgTOlOtSIMZZVnfIz1zHnVIO5Nwu', NULL, '2019-10-07 03:53:53', '2020-03-08 06:02:34'),
(5, 'Motiur Rahman', 'motiur@capmbd.com', 'angkan.jpg', '$2y$10$kN4DIPXcGo4/S3.JNRgKMOxZICiPTGyp82FKHyjZsvV.YaLt5xtYG', NULL, '2019-10-13 05:40:40', '2020-05-18 07:05:34'),
(6, 'Probir Kumar Das', 'probir@capmbd.com', 'probir.jpg', '$2y$10$J073bIe4HTit2T6TC.mSRu9HfoMV.9NFIO6lPBlvpQomiLruudpnm', NULL, '2019-11-05 10:23:38', '2019-11-05 10:23:38'),
(7, 'Shahriar Kabir', 'shahriar@capmbd.com', 'shahriar.jpg', '$2y$10$mHWNLSHvyiYhyMCaHQGmpe6UgEuBQMFCU6Lg4UkRBfiwjRBcZlLrW', NULL, '2019-11-07 09:04:40', '2020-06-15 03:24:43'),
(8, 'Mehedi Hasan', 'mehedi@capmadvisorybd.com', '8_user_photo.jpg', '$2y$10$e6THWWUeN4oNaGxl5Z4VV.4s23xormHGoSFpSpRMSMqSmJb4DxkDW', NULL, '2020-09-22 06:31:54', '2020-09-22 06:34:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_area`
--
ALTER TABLE `agent_area`
  ADD PRIMARY KEY (`AGENT_AREA_ID`);

--
-- Indexes for table `applicant_country`
--
ALTER TABLE `applicant_country`
  ADD PRIMARY KEY (`APPLICANT_COUNTRY_ID`);

--
-- Indexes for table `asset_manager`
--
ALTER TABLE `asset_manager`
  ADD PRIMARY KEY (`MANAGER_ID`);

--
-- Indexes for table `assign_salescenter`
--
ALTER TABLE `assign_salescenter`
  ADD PRIMARY KEY (`ASSIGN_ID`);

--
-- Indexes for table `auditor`
--
ALTER TABLE `auditor`
  ADD PRIMARY KEY (`AUDITOR_ID`);

--
-- Indexes for table `auth_per`
--
ALTER TABLE `auth_per`
  ADD PRIMARY KEY (`AUTH_PER_ID`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`BANK_ID`);

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`BANK_ACCOUNT_ID`);

--
-- Indexes for table `broker`
--
ALTER TABLE `broker`
  ADD PRIMARY KEY (`BROKER_ID`);

--
-- Indexes for table `buy_sell_commission`
--
ALTER TABLE `buy_sell_commission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_type`
--
ALTER TABLE `currency_type`
  ADD PRIMARY KEY (`CURRENCY_TYPE_ID`);

--
-- Indexes for table `custodian`
--
ALTER TABLE `custodian`
  ADD PRIMARY KEY (`CUSTODIAN_ID`);

--
-- Indexes for table `custodianfee_rule`
--
ALTER TABLE `custodianfee_rule`
  ADD PRIMARY KEY (`CUSTODIANFEE_RULE_ID`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DISTRICT_ID`);

--
-- Indexes for table `dividend_calculation`
--
ALTER TABLE `dividend_calculation`
  ADD PRIMARY KEY (`DVC_ID`);

--
-- Indexes for table `dividend_setup`
--
ALTER TABLE `dividend_setup`
  ADD PRIMARY KEY (`DVS_ID`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inst_app`
--
ALTER TABLE `inst_app`
  ADD PRIMARY KEY (`INSTAPP_ID`);

--
-- Indexes for table `investment_type`
--
ALTER TABLE `investment_type`
  ADD PRIMARY KEY (`INVESTMENT_TYPE_ID`);

--
-- Indexes for table `investment_type_setup`
--
ALTER TABLE `investment_type_setup`
  ADD PRIMARY KEY (`INVESTMENT_TYPE_SETUP_ID`);

--
-- Indexes for table `investor_type`
--
ALTER TABLE `investor_type`
  ADD PRIMARY KEY (`INVESTOR_TYPE_ID`);

--
-- Indexes for table `joint_applicant`
--
ALTER TABLE `joint_applicant`
  ADD PRIMARY KEY (`JOINT_APPLICANT_ID`);

--
-- Indexes for table `managementfee_rule`
--
ALTER TABLE `managementfee_rule`
  ADD PRIMARY KEY (`MANAGEMENTFEE_RULE_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `nominee_info`
--
ALTER TABLE `nominee_info`
  ADD PRIMARY KEY (`NOMINEE_INFO_ID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_registration`
--
ALTER TABLE `portfolio_registration`
  ADD PRIMARY KEY (`PRO_REG_ID`);

--
-- Indexes for table `portfolio_type`
--
ALTER TABLE `portfolio_type`
  ADD PRIMARY KEY (`PORTFOLIO_TYPE_ID`);

--
-- Indexes for table `price_rate`
--
ALTER TABLE `price_rate`
  ADD PRIMARY KEY (`PRICE_RATE_ID`);

--
-- Indexes for table `principal_applicant`
--
ALTER TABLE `principal_applicant`
  ADD PRIMARY KEY (`PRINCIPAL_APPLICANT_ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `salesagent`
--
ALTER TABLE `salesagent`
  ADD PRIMARY KEY (`SALESAGENT_ID`);

--
-- Indexes for table `salescenter`
--
ALTER TABLE `salescenter`
  ADD PRIMARY KEY (`SALESCENTER_ID`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`SECTOR_ID`);

--
-- Indexes for table `spon`
--
ALTER TABLE `spon`
  ADD PRIMARY KEY (`SPON_ID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`STOCK_ID`);

--
-- Indexes for table `to_pdf`
--
ALTER TABLE `to_pdf`
  ADD PRIMARY KEY (`TO_PDF_ID`);

--
-- Indexes for table `to_per`
--
ALTER TABLE `to_per`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `trade_order`
--
ALTER TABLE `trade_order`
  ADD PRIMARY KEY (`TO_ID`);

--
-- Indexes for table `trustee`
--
ALTER TABLE `trustee`
  ADD PRIMARY KEY (`TRUSTEE_ID`);

--
-- Indexes for table `trusteefee_rule`
--
ALTER TABLE `trusteefee_rule`
  ADD PRIMARY KEY (`TRUSTEEFEE_RULE_ID`);

--
-- Indexes for table `unit_purchase`
--
ALTER TABLE `unit_purchase`
  ADD PRIMARY KEY (`UNIT_PURCHASE_ID`);

--
-- Indexes for table `unit_sell`
--
ALTER TABLE `unit_sell`
  ADD PRIMARY KEY (`UNIT_SELL_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_area`
--
ALTER TABLE `agent_area`
  MODIFY `AGENT_AREA_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `applicant_country`
--
ALTER TABLE `applicant_country`
  MODIFY `APPLICANT_COUNTRY_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `asset_manager`
--
ALTER TABLE `asset_manager`
  MODIFY `MANAGER_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_salescenter`
--
ALTER TABLE `assign_salescenter`
  MODIFY `ASSIGN_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `auditor`
--
ALTER TABLE `auditor`
  MODIFY `AUDITOR_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_per`
--
ALTER TABLE `auth_per`
  MODIFY `AUTH_PER_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `BANK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `BANK_ACCOUNT_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `broker`
--
ALTER TABLE `broker`
  MODIFY `BROKER_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `buy_sell_commission`
--
ALTER TABLE `buy_sell_commission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `currency_type`
--
ALTER TABLE `currency_type`
  MODIFY `CURRENCY_TYPE_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `custodian`
--
ALTER TABLE `custodian`
  MODIFY `CUSTODIAN_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custodianfee_rule`
--
ALTER TABLE `custodianfee_rule`
  MODIFY `CUSTODIANFEE_RULE_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `DISTRICT_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `dividend_calculation`
--
ALTER TABLE `dividend_calculation`
  MODIFY `DVC_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=889;

--
-- AUTO_INCREMENT for table `dividend_setup`
--
ALTER TABLE `dividend_setup`
  MODIFY `DVS_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `inst_app`
--
ALTER TABLE `inst_app`
  MODIFY `INSTAPP_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `investment_type`
--
ALTER TABLE `investment_type`
  MODIFY `INVESTMENT_TYPE_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `investment_type_setup`
--
ALTER TABLE `investment_type_setup`
  MODIFY `INVESTMENT_TYPE_SETUP_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `investor_type`
--
ALTER TABLE `investor_type`
  MODIFY `INVESTOR_TYPE_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `joint_applicant`
--
ALTER TABLE `joint_applicant`
  MODIFY `JOINT_APPLICANT_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managementfee_rule`
--
ALTER TABLE `managementfee_rule`
  MODIFY `MANAGEMENTFEE_RULE_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `nominee_info`
--
ALTER TABLE `nominee_info`
  MODIFY `NOMINEE_INFO_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio_registration`
--
ALTER TABLE `portfolio_registration`
  MODIFY `PRO_REG_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_type`
--
ALTER TABLE `portfolio_type`
  MODIFY `PORTFOLIO_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `price_rate`
--
ALTER TABLE `price_rate`
  MODIFY `PRICE_RATE_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `principal_applicant`
--
ALTER TABLE `principal_applicant`
  MODIFY `PRINCIPAL_APPLICANT_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salesagent`
--
ALTER TABLE `salesagent`
  MODIFY `SALESAGENT_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `salescenter`
--
ALTER TABLE `salescenter`
  MODIFY `SALESCENTER_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `SECTOR_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spon`
--
ALTER TABLE `spon`
  MODIFY `SPON_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `STOCK_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `to_pdf`
--
ALTER TABLE `to_pdf`
  MODIFY `TO_PDF_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `to_per`
--
ALTER TABLE `to_per`
  MODIFY `per_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trade_order`
--
ALTER TABLE `trade_order`
  MODIFY `TO_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trustee`
--
ALTER TABLE `trustee`
  MODIFY `TRUSTEE_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trusteefee_rule`
--
ALTER TABLE `trusteefee_rule`
  MODIFY `TRUSTEEFEE_RULE_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unit_purchase`
--
ALTER TABLE `unit_purchase`
  MODIFY `UNIT_PURCHASE_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=584;

--
-- AUTO_INCREMENT for table `unit_sell`
--
ALTER TABLE `unit_sell`
  MODIFY `UNIT_SELL_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
