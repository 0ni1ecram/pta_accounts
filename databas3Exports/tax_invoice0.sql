-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2023 at 02:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_acc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tax_invoice0`
--

CREATE TABLE `tax_invoice0` (
  `ref_no` int(100) NOT NULL,
  `cname` text NOT NULL,
  `pcode` text NOT NULL,
  `region` text NOT NULL,
  `country` text NOT NULL,
  `vrn` varchar(50) NOT NULL,
  `tin` int(100) NOT NULL,
  `date` text NOT NULL,
  `sub_total` int(100) DEFAULT NULL,
  `vat` int(50) DEFAULT NULL,
  `g_amount` int(100) DEFAULT NULL,
  `status` tinytext NOT NULL,
  `lpo_ref` int(50) DEFAULT NULL,
  `dnote_ref` int(50) DEFAULT NULL,
  `date_recorded` date NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_invoice0`
--

INSERT INTO `tax_invoice0` (`ref_no`, `cname`, `pcode`, `region`, `country`, `vrn`, `tin`, `date`, `sub_total`, `vat`, `g_amount`, `status`, `lpo_ref`, `dnote_ref`, `date_recorded`, `id`) VALUES
(1223, 'Robo Inc.', '234', 'Dar es salaam', 'Tanzania', '204024r', 221453663, '2023-01-12', NULL, NULL, NULL, 'Pending', 2452, 6432, '2023-06-22', 15),
(11342, 'Figutsu Co.', '4245', 'Songea', 'Tanzania', '24525p', 224552522, '2023-03-10', NULL, NULL, NULL, 'Paid', 24525, 2563, '2023-06-22', 16),
(6420, 'Forec Co.', '204', 'Mwanza', 'Tanzania', '232424Q', 123421133, '2022-11-18', NULL, NULL, NULL, 'Paid', 1445, 24231, '2023-06-23', 17),
(4921, 'BlockWell Inc.', '234', 'Tonea', 'Viena', '21431T', 123111312, '2022-08-26', NULL, NULL, NULL, 'Due', 4123, 4134, '2023-06-26', 19),
(49322, 'BlockWell Inc.', '234', 'Tonea', 'Viena', '21431T', 123111312, '2022-08-26', NULL, NULL, NULL, 'Due', 4123, 4134, '2023-06-26', 20),
(49322, 'BlockWell Inc.', '234', 'Tonea', 'Viena', '21431T', 123111312, '2022-08-26', NULL, NULL, NULL, 'Due', 4123, 4134, '2023-06-26', 21),
(132, 'XD', '1341', 'FA', 'UAE', '341P', 2342131, '2023-06-01', NULL, NULL, NULL, 'Paid', 131, 341, '2023-06-26', 26),
(1123, 'Zorec', '24', 'Fol', 'Folics', '2424d', 42455, '', NULL, NULL, NULL, '---Status---', 24, 45, '2023-06-26', 27),
(134, 'R.F.Q Investments', '413', 'Eriv', 'Elva', '421245Q', 4213424, '2023-06-01', NULL, NULL, NULL, 'Due', 134134, 1412, '2023-06-26', 28),
(4201, 'Forestry Supplier', '8397', 'Jackson MS', 'America', '39248R', 800543420, '2023-03-03', NULL, NULL, NULL, 'Due', 31001, 3424, '2023-06-27', 29),
(4563, 'GorTrading', '40263', 'Rukwa', 'Tanzania', '24563T', 342141341, '2023-02-03', NULL, NULL, NULL, 'Paid', 426, 456, '2023-06-27', 30),
(1345, 'MARESK', '5869', 'Simuyu', 'Tanzania', '32435D', 13426634, '2023-02-10', NULL, NULL, NULL, 'Due', 4563, 1221, '2023-06-27', 31),
(5245, 'TaROID', '8683', 'Rukwa', 'Tanzania', '4245524R', 100342042, '2023-03-02', NULL, NULL, NULL, 'Paid', 4241, 1313, '2023-06-27', 32),
(1345, 'FlickStart', '3242', 'Dodoma', 'Tanzania', '214P', 141341475, '2022-10-07', NULL, NULL, NULL, 'Paid', 2453, 4245, '2023-06-27', 33),
(4024, 'Gogo Tank', '2995', 'Mara', 'Tanzania', '24240G', 242192592, '2022-06-30', NULL, NULL, NULL, 'Due', 2495, 6943, '2023-06-27', 34),
(2452, 'GGM', '3024', 'Dar es salaam', 'Tanzania', '29524Q', 134532524, '2023-03-16', NULL, NULL, NULL, 'Due', 4536, 52647, '2023-06-29', 35),
(2344, 'Hozea Interprises', '30498', '', 'Tanzania', '49245S', 100567883, '2023-07-01', NULL, NULL, NULL, 'Due', 4899, 4522, '2023-07-08', 36),
(134, 'GGM', '4295', '', 'TANZANIA', '29442Q', 119396225, '2023-03-02', NULL, NULL, NULL, 'Due', 9593, 5935, '2023-07-13', 37),
(1235, 'Fukushima', '492', 'Tokyo', 'Japan', '45663O', 5693539, '2023-06-30', NULL, NULL, NULL, 'Due', 4545, 47854, '2023-07-13', 38),
(234231, 'TYROM', '4524', 'Cansas', 'United States', '314213', 13413134, '2023-08-24', NULL, NULL, NULL, 'Paid', 4213, 413, '2023-08-03', 39),
(4252, 'TonTyu', '42042', 'Iringa', 'Tanzania', '24424', 52452453, '2023-08-26', NULL, NULL, NULL, 'Due', 5534, 6455336, '2023-08-10', 40),
(28829, 'YutANG Steel', '4204', 'Wuhan', 'China', '24524', 24910030, '2023-08-23', NULL, NULL, NULL, 'Due', 9421, 5924, '2023-08-11', 41),
(4204, 'Hwwlett Packard', '2445', 'Geneva', 'Switzerland', '49204', 42423249, '2023-05-12', NULL, NULL, NULL, 'Paid', 2452, 2524, '2023-08-11', 42),
(2453, 'Forencic City', '4425', 'Mwanza', 'Tanzania', '9340G', 177374737, '2023-08-17', NULL, NULL, NULL, '---Status---', 4562, 5647, '2023-08-13', 43),
(34563, 'Robotics Co.', '3547', 'Mtwara', 'Tanzania', '4243P', 345342252, '2023-06-09', NULL, NULL, NULL, 'Due', 3353, 4463, '2023-08-15', 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tax_invoice0`
--
ALTER TABLE `tax_invoice0`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tax_invoice0`
--
ALTER TABLE `tax_invoice0`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
