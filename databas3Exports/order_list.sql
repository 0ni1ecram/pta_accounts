-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2023 at 02:38 PM
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
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(255) NOT NULL,
  `order_ref` text NOT NULL,
  `qty` int(10) NOT NULL,
  `unit` tinytext NOT NULL,
  `product` text NOT NULL,
  `description` text NOT NULL,
  `unit_price` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `order_ref`, `qty`, `unit`, `product`, `description`, `unit_price`, `amount`, `date_added`) VALUES
(1, '14245', 20, 'pcs', 'Welding Torch', 'Oxygen', 100000, 2000000, '2023-06-12'),
(2, '1103', 14, 'Mtr', 'Hose Pipe', 'Sand Blast 1-1/2\"', 20000, 280000, '2023-06-12'),
(3, '1883', 29, 'Pcs', 'Angle Grinder', 'Dongcheng 4.5\"', 112000, 0, '2023-06-13'),
(4, '1242', 183, 'Mtrs', 'Hose Pipe', 'Sand Blast 3\"', 12000, 2196000, '2023-06-13'),
(5, '1242', 108, 'Pcs', 'Die', 'HSS 14\"', 1293, 139644, '2023-06-14'),
(6, '24562', 31, 'kgs', 'Gas Cylinder', '2 liters', 43000, 1333000, '2023-06-21'),
(7, '', 30, 'kgs', 'Bolts n Nuts', '14x60', 7500, 225000, '2023-06-21'),
(8, '', 30, 'kgs', 'Bolts n Nuts', '14x60', 7500, 225000, '2023-06-21'),
(9, '', 30, 'kgs', 'Bolts n Nuts', '14x60', 7500, 225000, '2023-06-21'),
(10, '', 30, 'kgs', 'Bolts n Nuts', '14x60', 7500, 225000, '2023-06-21'),
(11, '', 30, 'kgs', 'Bolts n Nuts', '14x60', 7500, 225000, '2023-06-21'),
(12, '11342', 20, 'pcs', 'Gas Lighter', 'Metallic', 3400, 68000, '2023-06-22'),
(13, '11342', 20, 'pcs', 'Gas Lighter', 'Metallic', 3400, 68000, '2023-06-22'),
(14, '11342', 20, 'pcs', 'Gas Lighter', 'Metallic', 3400, 68000, '2023-06-22'),
(15, '1223', 60, 'Kgs', 'Bolts n Nuts', '16x60 4.8 BLK', 7500, 450000, '2023-06-22'),
(16, '11342', 13, 'kg', 'Bolt n Nut', '12x40 4.8 zp', 7200, 93600, '2023-06-22'),
(17, '11342', 13, 'kg', 'Bolt n Nut', '12x40 4.8 zp', 7200, 93600, '2023-06-22'),
(18, '11342', 20, 'kg', 'W/Eletrode', 'Superon', 12000, 240000, '2023-06-22'),
(19, '11342', 12, 'pcs', 'Threaded Bar', '16x1000 ASTM', 88900, 1066800, '2023-06-22'),
(20, '11342', 18, 'pcs', 'Ring Spanner', 'Size 18mm', 10000, 180000, '2023-06-22'),
(21, '6420', 235, 'pcs', 'Plastic Material', '30\"', 35000, 8225000, '2023-06-23'),
(22, '6420', 256, 'kgs', 'Electrode', '4mm', 3000, 768000, '2023-06-23'),
(23, 'YAPI', 12, 'kg', 'Bolt n Nut', '16x30 8.8', 7800, 93600, '2023-06-26'),
(24, '', 13, 'Pcs', 'Rocket', 'Propulsion Jet', 122100, 1587300, '2023-06-26'),
(25, '134', 234, 'Mtrs', 'Hose Pipe', 'Sand Blast 4\"', 11230, 2627820, '2023-06-26'),
(26, '134', 12, 'Pcs', 'Flat Washer', '12mm', 102, 1224, '2023-06-26'),
(27, '134', 12, 'pcs', 'Hose Pipe', 'Fuel 1/2\"', 10340, 124080, '2023-06-26'),
(28, '4563', 10, 'pcs', 'Garmin', 'GPS 73 HAND HELD NAVIGATOR', 204600, 2046000, '2023-06-27'),
(29, '4563', 2, 'pcs', 'SILVA', 'Mini Compass', 64000, 128000, '2023-06-27'),
(30, '4563', 5, 'pcs', 'Hookaroon', 'Council \"Red Head\"', 100245, 501225, '2023-06-27'),
(31, '4563', 5, 'pcs', 'Hookaroon', 'Council \"Red Head\"', 100245, 501225, '2023-06-27'),
(32, '4563', 5, 'pcs', 'Hookaroon', 'Council \"Red Head\"', 100245, 501225, '2023-06-27'),
(33, '1345', 34, 'pcs', 'Drill Hammer', 'Dongcheng', 240000, 8160000, '2023-06-27'),
(34, '1345', 22, 'kg', 'Bolts n Nuts', '16x70 4.8 zp', 7800, 171600, '2023-06-27'),
(35, '4024', 24, 'mtrs', 'Hose Pipe', 'Sand Blast 4\" NCR', 36200, 868800, '2023-06-27'),
(36, '4024', 10, 'kg', 'Bolts n Nuts', 'DIN931 22x130 4.8 zp', 7800, 78000, '2023-06-27'),
(37, '2452', 30, 'kg', 'Bolt n Nuts', 'DIN933 16x30 ZP', 8200, 246000, '2023-06-29'),
(38, '2452', 12, 'pc', 'Angle Grinder', '4\"', 120000, 1440000, '2023-06-29'),
(39, '2344', 10, 'kg', 'Bolts&Nuts', '16x70 BLK 4.8', 7800, 78000, '2023-07-08'),
(40, '2344', 3, 'pcs', 'Angle Grinder', 'Dongcheng DSM-100', 141000, 423000, '2023-07-08'),
(41, '', 12, 'kg', 'Bolt n Nuts', '16x80 4.8 BLK', 8200, 98400, '2023-07-13'),
(42, '234231', 34, 'pcs', 'Bolts n Nuts', 'M40x60', 4221, 143514, '2023-08-03'),
(43, '4252', 13, 'pcs', 'Spanner', 'COMB 24x27 Venus', 38000, 494000, '2023-08-10'),
(44, '4204', 34, 'set', 'Kit', 'Repair Screw Kit', 89000, 3026000, '2023-08-11'),
(45, '2453', 23, 'pc', 'Bolt n Nuts', '931-8.8-20x150', 5200, 119600, '2023-08-13'),
(46, '2453', 2, 'pcs', 'Power Tool', 'Dongcheng Cordless Drill', 230000, 460000, '2023-08-13'),
(47, '34563', 32, 'pcs', 'Bolt n Nuts', '931-12.9-27x120', 12900, 412800, '2023-08-15'),
(48, '34563', 2, 'kg', 'Bolts n Nuts', '933-4.8-BLK-12x80', 8200, 16400, '2023-08-15'),
(49, '34563', 12, 'kg', 'Nuts', 'M12-ZP', 11800, 141600, '2023-08-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
