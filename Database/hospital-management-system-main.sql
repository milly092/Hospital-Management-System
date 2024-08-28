-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 07:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital-management-system-main`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmentbook`
--

CREATE TABLE `appointmentbook` (
  `contact_us_id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `booking_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointmentbook`
--

INSERT INTO `appointmentbook` (`contact_us_id`, `name`, `phone`, `department`, `booking_date`) VALUES
(4, 'mily', '01822149214', 'Psychology', '2023-05-06'),
(6, 'ashraful', '12345678912', 'Urology', '2023-05-09'),
(8, 'labonno', '018222222222', 'Special Doctors', '2023-05-11'),
(10, 'mily', '1233445', 'Special Doctors', '2023-05-10'),
(11, 'mily', '01824567788', 'Special Doctors', '2023-05-12'),
(12, 'MILYYY', '0181234567', 'Urology', '2023-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_us_id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_us_id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'mily', 'mily@gmail.com', '01822149214', 'hello'),
(2, 'mily', 'mily@gmail.com', '01822149214', 'hi'),
(3, 'mily', 'ashraful@gmail.com', '123345678990', 'hi'),
(4, 'labonno', 'l@gmail.com', '122355667', 'hey'),
(5, 'a', 'a@gmail.com', '1234567654', 'hi'),
(6, 'M', 'M@GMAIL.COM', '1234545456', 'HI'),
(7, 'LANOMMO', 'bG@gmail.com', '51699', 'HI'),
(8, 'labonno', 'bcg@gmail.com', '12158', 'hi '),
(9, 'labonno', 'bpnna@gmail.com', '1585', 'hi'),
(10, 'labonn', 'abc@gmail.com', '2542', 'hi'),
(11, 'milhy', 'mily@gmail.com', '0182445677', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `his_accounts`
--

CREATE TABLE `his_accounts` (
  `acc_id` int(200) NOT NULL,
  `acc_name` varchar(200) DEFAULT NULL,
  `acc_desc` text DEFAULT NULL,
  `acc_type` varchar(200) DEFAULT NULL,
  `acc_number` varchar(200) DEFAULT NULL,
  `acc_amount` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `his_accounts`
--

INSERT INTO `his_accounts` (`acc_id`, `acc_name`, `acc_desc`, `acc_type`, `acc_number`, `acc_amount`) VALUES
(2, 'Equity Bank', '<p>Find <em>bank account</em> stock <em>images</em> in HD and millions of other royalty-free stock photos, illustrations and vectors in the Shutterstock collection. Thousands of new</p>', 'Receivable Account', '753680912', '12566'),
(5, 'tanha', '<p>okay</p>', 'Receivable Account', '615027394', '100'),
(6, 'ashraful', '<p>aassdfghjk</p>', 'Payable Account', '024736518', '100'),
(7, 'mmmmm', '<p>asdfg</p>', 'Receivable Account', '019364528', '4567'),
(8, 'tanha', '<p>ghjj</p>', 'Payable Account', '428307961', '23456'),
(9, 'lily', '<p>asdfg</p>', 'Receivable Account', '12344555', '223344'),
(10, 'niloy', '<p>asdf</p>', 'Receivable Account', '123456789', '3456'),
(11, 'niloy', '<p>asdfgh</p>', 'Payable Account', '1234567890', '200'),
(12, 'mm', '<p>asffghj</p>', 'Receivable Account', '234567', '5566'),
(13, 'mily', '<p>asdd</p>', 'Receivable Account', '1234567889', '2555');

-- --------------------------------------------------------

--
-- Table structure for table `his_admin`
--

CREATE TABLE `his_admin` (
  `ad_id` int(20) NOT NULL,
  `ad_fname` varchar(200) DEFAULT NULL,
  `ad_lname` varchar(200) DEFAULT NULL,
  `ad_email` varchar(200) DEFAULT NULL,
  `ad_pwd` varchar(200) DEFAULT NULL,
  `ad_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `his_admin`
--

INSERT INTO `his_admin` (`ad_id`, `ad_fname`, `ad_lname`, `ad_email`, `ad_pwd`, `ad_dpic`) VALUES
(1, 'System', 'Administrator', 'admin@mail.com', '4c7f5919e957f354d57243d37f223cf31e9e7181', 'doc-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `his_assets`
--

CREATE TABLE `his_assets` (
  `asst_id` int(20) NOT NULL,
  `asst_name` varchar(200) DEFAULT NULL,
  `asst_desc` longtext DEFAULT NULL,
  `asst_vendor` varchar(200) DEFAULT NULL,
  `asst_status` varchar(200) DEFAULT NULL,
  `asst_dept` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `his_docs`
--

CREATE TABLE `his_docs` (
  `doc_id` int(20) NOT NULL,
  `doc_fname` varchar(200) DEFAULT NULL,
  `doc_lname` varchar(200) DEFAULT NULL,
  `doc_email` varchar(200) DEFAULT NULL,
  `doc_pwd` varchar(200) DEFAULT NULL,
  `doc_dept` varchar(200) DEFAULT NULL,
  `doc_number` varchar(200) DEFAULT NULL,
  `doc_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `his_docs`
--

INSERT INTO `his_docs` (`doc_id`, `doc_fname`, `doc_lname`, `doc_email`, `doc_pwd`, `doc_dept`, `doc_number`, `doc_dpic`) VALUES
(5, 'arifa', 'mily', 'arifa@mail.com', 'dce0b27ba675df41e9cc07af80ec59c475810824', 'Pharmacy', 'BKTWQ', 'defaultimg.jpg'),
(6, 'md.mohsin', 'uddin', 'mmsu@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'Surgery | Theatre', 'YDS7L', 'mohsin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `his_equipments`
--

CREATE TABLE `his_equipments` (
  `eqp_id` int(20) NOT NULL,
  `eqp_code` varchar(200) DEFAULT NULL,
  `eqp_name` varchar(200) DEFAULT NULL,
  `eqp_vendor` varchar(200) DEFAULT NULL,
  `eqp_desc` longtext DEFAULT NULL,
  `eqp_dept` varchar(200) DEFAULT NULL,
  `eqp_status` varchar(200) DEFAULT NULL,
  `eqp_qty` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `his_equipments`
--

INSERT INTO `his_equipments` (`eqp_id`, `eqp_code`, `eqp_name`, `eqp_vendor`, `eqp_desc`, `eqp_dept`, `eqp_status`, `eqp_qty`) VALUES
(2, '178640239', 'TestTubes', 'labonno', '<p>Testtubes are used to perform lab tests--</p>', 'Laboratory', 'Functioning', '700000'),
(3, '052367981', 'Surgical Robot', 'tanha', '<p>Surgical Robots aid in surgey process.</p>', 'Surgical | Theatre', 'Functioning', '100');

-- --------------------------------------------------------

--
-- Table structure for table `his_patients`
--

CREATE TABLE `his_patients` (
  `pat_id` int(20) NOT NULL,
  `pat_fname` varchar(200) DEFAULT NULL,
  `pat_lname` varchar(200) DEFAULT NULL,
  `pat_dob` varchar(200) DEFAULT NULL,
  `pat_age` varchar(200) DEFAULT NULL,
  `pat_number` varchar(200) DEFAULT NULL,
  `pat_addr` varchar(200) DEFAULT NULL,
  `pat_phone` varchar(200) DEFAULT NULL,
  `pat_type` varchar(200) DEFAULT NULL,
  `pat_date_joined` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `pat_ailment` varchar(200) DEFAULT NULL,
  `pat_discharge_status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `his_patients`
--

INSERT INTO `his_patients` (`pat_id`, `pat_fname`, `pat_lname`, `pat_dob`, `pat_age`, `pat_number`, `pat_addr`, `pat_phone`, `pat_type`, `pat_date_joined`, `pat_ailment`, `pat_discharge_status`) VALUES
(10, 'nabiha', 'tanha', '10/11/2000', '22', '3Z14K', '9 Hill Haven Drive', '1478885458', 'InPatient', '2023-05-13 16:40:12.510251', 'Demo Test', ''),
(11, 'labonno', 'bonna', '20/10/2002', '21', 'KU8W4', '28 Holly Street', '1458889655', 'InPatient', '2023-05-06 18:44:06.710141', 'Test Test', 'Discharged'),
(12, 'ashraful', 'islam', '11/06/1994', '28', '4TLG0', '117 Bleecker Street', '7412569698', 'OutPatient', '2023-05-06 16:49:46.407031', 'Demo Test', NULL),
(13, 'arifa', 'mily', '22/09/2001', '22', 'VKTX0', 'paltan', '01234567892', 'InPatient', '2023-05-07 20:12:40.413132', 'sick', 'Discharged');

-- --------------------------------------------------------

--
-- Table structure for table `his_patient_transfers`
--

CREATE TABLE `his_patient_transfers` (
  `t_id` int(20) NOT NULL,
  `t_hospital` varchar(200) DEFAULT NULL,
  `t_date` varchar(200) DEFAULT NULL,
  `t_pat_name` varchar(200) DEFAULT NULL,
  `t_pat_number` varchar(200) DEFAULT NULL,
  `t_status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `his_patient_transfers`
--

INSERT INTO `his_patient_transfers` (`t_id`, `t_hospital`, `t_date`, `t_pat_name`, `t_pat_number`, `t_status`) VALUES
(1, 'Kenyatta National Hospital', '2020-01-11', 'Mart Developers', '9KXPM', 'Success'),
(2, 'kochu hospital', '2023-08-07', 'nabiha tanha', '3Z14K', 'Success'),
(3, 'apallo hospital', '2023-05-10', 'nabiha tanha', '3Z14K', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `his_pwdresets`
--

CREATE TABLE `his_pwdresets` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `his_vitals`
--

CREATE TABLE `his_vitals` (
  `vit_id` int(20) NOT NULL,
  `vit_number` varchar(200) DEFAULT NULL,
  `vit_pat_number` varchar(200) DEFAULT NULL,
  `vit_bodytemp` varchar(200) DEFAULT NULL,
  `vit_heartpulse` varchar(200) DEFAULT NULL,
  `vit_resprate` varchar(200) DEFAULT NULL,
  `vit_bloodpress` varchar(200) DEFAULT NULL,
  `vit_daterec` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `his_vitals`
--

INSERT INTO `his_vitals` (`vit_id`, `vit_number`, `vit_pat_number`, `vit_bodytemp`, `vit_heartpulse`, `vit_resprate`, `vit_bloodpress`, `vit_daterec`) VALUES
(3, '1KB9V', '3Z14K', '38', '77', '12', '90/60', '2022-10-18 17:10:16.904915'),
(4, 'ELYOM', 'BKTWQ', '38', '88', '12', '110/80', '2022-10-18 01:49:55.814783'),
(5, 'AL0J8', 'YDS7L', '36', '72', '15', '90/60', '2022-10-18 17:42:17.500662'),
(6, 'MS2OJ', '4TLG0', '37', '70', '15', '120/80', '2022-10-22 11:01:52.148658');

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `sno` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `description` text NOT NULL,
  `room` varchar(11) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`sno`, `name`, `age`, `description`, `room`, `tstamp`) VALUES
(4, '', 0, '', '', '2022-12-30 21:37:06'),
(5, 'mm', 23, 'vallagena', '101', '2022-12-30 22:36:43'),
(6, 'dfdf', 0, 'dfdf', 'dfdf', '2022-12-31 00:54:46'),
(7, 'dfdfdf', 0, 'dfdf', 'dfdef', '2022-12-31 01:02:15'),
(8, 'tanha', 10, 'khayna', '100', '2022-12-31 01:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `sno` int(11) NOT NULL,
  `medicine` varchar(11) NOT NULL,
  `diagnosis` text NOT NULL,
  `instructions` text NOT NULL,
  `doc_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`sno`, `medicine`, `diagnosis`, `instructions`, `doc_name`) VALUES
(6, '', '', '', ''),
(7, 'ff', 'ss', 'ee', 'tt'),
(8, 'aaaa', 'bbbb', 'cccc', 'mohsin'),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, 'sdd', 'dfdf', 'dfdf', 'dfdf'),
(62, 'sdd', 'dfdf', 'dfdf', 'dfdf'),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, '', '', '', ''),
(73, 'sdfdsf', 'dfdfd', 'dsfdf', 'Rhaa'),
(74, 'sdfdsf', 'dfdfd', 'dsfdf', 'Rhaa'),
(75, 'sdfdsf', 'dfdfd', 'dsfdf', 'Rhaa'),
(76, 'study', 'Biya pagol', 'no chating with bf', 'Nazia'),
(77, '', '', '', ''),
(78, 'rrr', 'rr', 'rrr', 'Saikat'),
(79, 'ttert', 'retreter', 'rtrt', 'drtet'),
(80, 'ttert', 'retreter', 'rtrt', 'drtet'),
(81, 'ttert', 'retreter', 'rtrt', 'drtet'),
(82, 'ttert', 'retreter', 'rtrt', 'drtet'),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', ''),
(86, '', '', '', ''),
(87, '', '', '', ''),
(88, '', '', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, '', '', '', ''),
(92, '', '', '', ''),
(93, '', '', '', ''),
(94, '', '', '', ''),
(95, 'wq', 'dsd', 'swwqdef', 'rahat'),
(96, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(97, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(98, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(99, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(100, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(101, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(102, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(103, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(104, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(105, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(106, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(107, 'wq', 'dsd', 'swwqdef', 'Nazia'),
(108, 'rtyt', 'sdryf', 'trhy', 'Nazia'),
(109, 'rtyt', 'sdryf', 'trhy', 'Nazia'),
(110, 'rtyt', 'sdryf', 'trhy', 'Nazia'),
(111, 'rtyt', 'sdryf', 'trhy', 'Nazia'),
(112, 'ssd', 'sds', 'aww', 'Nazia'),
(113, 'ssd', 'sds', 'aww', 'Nazia'),
(114, 'ssd', 'sds', 'aww', 'Nazia'),
(115, 'ssd', 'sds', 'aww', 'Nazia'),
(116, 'ssd', 'sds', 'aww', 'Nazia'),
(117, 'ssd', 'sds', 'aww', 'Nazia'),
(118, 'ssd', 'sds', 'aww', 'Nazia'),
(119, 'ssd', 'sds', 'aww', 'Nazia'),
(120, 'ssd', 'sds', 'aww', 'Nazia'),
(121, 'ssd', 'sds', 'aww', 'Nazia'),
(122, 'ssd', 'sds', 'aww', 'Nazia'),
(123, 'ssd', 'sds', 'aww', 'Nazia'),
(124, 'ssd', 'sds', 'aww', 'Nazia'),
(125, 'ssd', 'sds', 'aww', 'Nazia'),
(126, 'ssd', 'sds', 'aww', 'Nazia'),
(127, 'ssd', 'sds', 'aww', 'Nazia'),
(128, 'ssd', 'sds', 'aww', 'Nazia'),
(129, 'ssd', 'sds', 'aww', 'Nazia'),
(130, 'ssd', 'sds', 'aww', 'Nazia'),
(131, 'ssd', 'sds', 'aww', 'Nazia'),
(132, 'ssd', 'sds', 'aww', 'Nazia'),
(133, 'ssd', 'sds', 'aww', 'Nazia'),
(134, 'ssd', 'sds', 'aww', 'Nazia'),
(135, 'ssd', 'sds', 'aww', 'Nazia'),
(136, 'ssd', 'sds', 'aww', 'Nazia'),
(137, 'ssd', 'sds', 'aww', 'Nazia'),
(138, 'ssd', 'sds', 'aww', 'Nazia'),
(139, 'ssd', 'sds', 'aww', 'Nazia'),
(140, 'ssd', 'sds', 'aww', 'Nazia'),
(141, 'ssd', 'sds', 'aww', 'Nazia'),
(142, 'ssd', 'sds', 'aww', 'Nazia'),
(143, 'ssd', 'sds', 'aww', 'Nazia'),
(144, 'ssd', 'sds', 'aww', 'Nazia'),
(145, 'dadas', 'wew', 'sadsdf', 'rahat'),
(146, '', '', '', ''),
(147, '', 'dd', 'dsd', 'sdddsd'),
(148, 'napa', 'as', 'kochu', 'mily'),
(149, 'b', 'a', 'h', 'mily'),
(150, 'asdf', 'asd', 'asdf', 'mily'),
(151, 'as', 'dd', 'ddff', 'ee'),
(152, 'c', 'd', 'fg', 'f'),
(153, 's', 's', 's', 's'),
(154, 'sss', 'ddd', 'ddd', 'mm'),
(155, 'sss', 'ddd', 'ddd', 'mm'),
(156, '', '', '', ''),
(157, 'add', 'asdf', 'asdf', 'mily'),
(158, 'napa', 'test', 'take rest', 'mily');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(250) DEFAULT NULL,
  `usersEmail` varchar(250) DEFAULT NULL,
  `usersUid` varchar(250) DEFAULT NULL,
  `usersPwd` varchar(250) DEFAULT NULL,
  `role` int(11) DEFAULT 0,
  `adress` varchar(250) DEFAULT NULL,
  `about` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `profileName` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `role`, `adress`, `about`, `mobile`, `image`, `profileName`) VALUES
(1, 'tanha', 'tanha@gmail.com', 'tanha1', '$2y$10$fxGQDD7qXu20QGGSvEy6xurKCVlzsl7KcGDYOyhUFc3m626J49iv.', 0, NULL, NULL, NULL, NULL, NULL),
(2, 'arifa mily', 'arifa@gmail.com', 'arifa', '$2y$10$8MUZchoEAhLloyKkpkFdjOA1JYiXYIDDciNdiPe48mbELGaGUHbSS', 0, NULL, NULL, NULL, NULL, NULL),
(3, 'a', 'b@gmail.com', 'asdff', '$2y$10$CGHnsARl3GE2MkIeC9sZY.Fg/mZOPsvGWP4AQnb/ToXbf.mPsWUqK', 0, NULL, NULL, NULL, NULL, NULL),
(4, 'LABONNO', 'LABONNO@GMAIL.COM', 'LLLLL', '$2y$10$pj6SL95gy9od.fKyJ5365.bRbT1BzvrkBdfc2Vl1Essu7NtybAp6.', 0, NULL, NULL, NULL, NULL, NULL),
(5, 'aa', 'ad@gmail.com', 'asd', '$2y$10$k2CDDco5ytq2HxjR.VQE8e9Z7Q967hjaHaIbd33xs1OjuIDcEco7i', 0, NULL, NULL, NULL, NULL, NULL),
(6, 'mily', 'mily@gmail.com', 'milly', '$2y$10$nF64le1BrTh0CTlblycfWOsOCikyF6xJwYeVEv6.0MeM.hdnFqpI.', 0, NULL, NULL, NULL, NULL, NULL),
(7, 'MILYYY', 'MILYYY@GMAIL.COM', 'MILYYY', '$2y$10$59pEtXtbEL7F4lV61lefZegWTVLCurbXpQmxBqBA/YJDnX5xWGuvG', 0, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmentbook`
--
ALTER TABLE `appointmentbook`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `his_accounts`
--
ALTER TABLE `his_accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `his_admin`
--
ALTER TABLE `his_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `his_assets`
--
ALTER TABLE `his_assets`
  ADD PRIMARY KEY (`asst_id`);

--
-- Indexes for table `his_docs`
--
ALTER TABLE `his_docs`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `his_patients`
--
ALTER TABLE `his_patients`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `his_patient_transfers`
--
ALTER TABLE `his_patient_transfers`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `his_pwdresets`
--
ALTER TABLE `his_pwdresets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `his_vitals`
--
ALTER TABLE `his_vitals`
  ADD PRIMARY KEY (`vit_id`);

--
-- Indexes for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmentbook`
--
ALTER TABLE `appointmentbook`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `his_accounts`
--
ALTER TABLE `his_accounts`
  MODIFY `acc_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `his_admin`
--
ALTER TABLE `his_admin`
  MODIFY `ad_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `his_assets`
--
ALTER TABLE `his_assets`
  MODIFY `asst_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_docs`
--
ALTER TABLE `his_docs`
  MODIFY `doc_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `his_patients`
--
ALTER TABLE `his_patients`
  MODIFY `pat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `his_patient_transfers`
--
ALTER TABLE `his_patient_transfers`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `his_pwdresets`
--
ALTER TABLE `his_pwdresets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_vitals`
--
ALTER TABLE `his_vitals`
  MODIFY `vit_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patientinfo`
--
ALTER TABLE `patientinfo`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
