-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2019 at 12:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `finance_asset`
--

CREATE TABLE `finance_asset` (
  `id_asset` int(4) NOT NULL,
  `description` varchar(25) COLLATE utf8_bin NOT NULL,
  `value` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `finance_asset`
--

INSERT INTO `finance_asset` (`id_asset`, `description`, `value`) VALUES
(1, 'Cash', 19543292),
(2, 'Bank Deposit', 11199817),
(3, 'Derivative', 9308454),
(4, 'KURSI', 8812386),
(5, 'meja', 5000),
(6, 'taplak', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `finance_cashflow`
--

CREATE TABLE `finance_cashflow` (
  `id_cashflow` int(11) NOT NULL,
  `month` varchar(15) DEFAULT NULL,
  `income` int(11) DEFAULT NULL,
  `outcome` int(11) DEFAULT NULL,
  `input_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_cashflow`
--

INSERT INTO `finance_cashflow` (`id_cashflow`, `month`, `income`, `outcome`, `input_date`) VALUES
(1, 'January', 5000, 3000, '2019-01-31'),
(2, 'February', 4500, 3500, '2019-02-28'),
(3, 'March', 6000, 4200, '2019-03-28'),
(4, 'April', 5000, 4500, '2019-04-30'),
(5, 'May', 4500, 2000, '2019-05-30'),
(6, 'June', 30000, 15000, '2019-06-28'),
(7, 'July', 4000, 3900, '2019-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `finance_revenue`
--

CREATE TABLE `finance_revenue` (
  `id_revenue` int(4) NOT NULL,
  `description` varchar(25) COLLATE utf8_bin NOT NULL,
  `value` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `finance_revenue`
--

INSERT INTO `finance_revenue` (`id_revenue`, `description`, `value`) VALUES
(1, 'Stock', 124193904),
(2, 'Investor', 48563413),
(3, 'Donation', 172018507),
(4, 'Income', 210918029);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `full_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `privelage` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `full_name`, `privelage`) VALUES
('admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'admin', 1),
('user1', '*34D3B87A652E7F0D1D371C3DBF28E291705468C4', 'user1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `record_graduate`
--

CREATE TABLE `record_graduate` (
  `id_graduate` int(4) NOT NULL,
  `status` varchar(20) COLLATE utf8_bin NOT NULL,
  `occupation` varchar(20) COLLATE utf8_bin NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `record_graduate`
--

INSERT INTO `record_graduate` (`id_graduate`, `status`, `occupation`, `id_student`) VALUES
(2, 'Graduated', 'Work', 2),
(3, 'Graduated', 'Work', 3),
(4, 'Graduated', 'Work', 4),
(5, 'Dropout', 'Work', 5),
(6, 'Graduated', 'College', 6),
(7, 'Graduated', 'Work', 7),
(8, 'Dropout', 'Work', 8),
(9, 'Dropout', 'Work', 9),
(11, 'Graduated', 'College', 11),
(15, 'Graduated', 'College', 15),
(18, 'Dropout', 'College', 18),
(19, 'Dropout', 'Work', 19),
(20, 'Graduated', 'Work', 20),
(21, 'Graduated', 'Work', 21),
(22, 'Graduated', 'College', 22),
(24, 'Graduated', 'Work', 24),
(25, 'Dropout', 'Work', 25),
(26, 'Graduated', 'College', 26),
(27, 'Dropout', 'College', 27),
(28, 'Graduated', 'College', 28),
(29, 'Graduated', 'Work', 29),
(30, 'Graduated', 'Work', 30),
(31, 'Graduated', 'College', 31),
(32, 'Dropout', 'Work', 32),
(34, 'Graduated', 'College', 34),
(37, 'Graduated', 'Work', 37),
(38, 'Graduated', 'College', 38),
(39, 'Graduated', 'College', 39),
(40, 'Graduated', 'College', 40),
(44, 'Graduated', 'College', 44),
(46, 'Graduated', 'College', 46),
(47, 'Dropout', 'Work', 47),
(48, 'Dropout', 'Work', 48),
(49, 'Graduated', 'College', 49),
(50, 'Dropout', 'Work', 50),
(52, 'Graduated', 'Work', 52),
(55, 'Dropout', 'College', 55),
(56, 'Graduated', 'Work', 56),
(57, 'Graduated', 'College', 57),
(60, 'Dropout', 'College', 60),
(61, 'Dropout', 'College', 61),
(62, 'Graduated', 'College', 62),
(64, 'Graduated', 'Work', 64),
(65, 'Dropout', 'Work', 65),
(66, 'Graduated', 'Work', 66),
(67, 'Dropout', 'College', 67),
(68, 'Graduated', 'Work', 68),
(69, 'Dropout', 'Work', 69),
(71, 'Dropout', 'College', 71),
(73, 'Dropout', 'Work', 73),
(75, 'Dropout', 'Work', 75),
(76, 'Graduated', 'College', 76),
(77, 'Dropout', 'Work', 77),
(78, 'Graduated', 'College', 78),
(79, 'Dropout', 'Work', 79),
(80, 'Graduated', 'College', 80),
(81, 'Graduated', 'College', 81),
(82, 'Dropout', 'College', 82),
(83, 'Dropout', 'College', 83),
(84, 'Graduated', 'College', 84),
(87, 'Dropout', 'Work', 87),
(88, 'Graduated', 'College', 88),
(89, 'Dropout', 'Work', 89),
(90, 'Dropout', 'Work', 90),
(94, 'Dropout', 'Work', 94),
(95, 'Graduated', 'Work', 95),
(96, 'Dropout', 'College', 96),
(97, 'Graduated', 'Work', 97),
(99, 'Dropout', 'Work', 99),
(100, 'Graduated', 'College', 100),
(105, 'Graduated', 'Work', 105),
(106, 'Graduated', 'Work', 106),
(107, 'Graduated', 'College', 107),
(109, 'Graduated', 'College', 109),
(110, 'Dropout', 'Work', 110),
(111, 'Graduated', 'Work', 111),
(113, 'Graduated', 'Work', 113),
(114, 'Graduated', 'College', 114),
(115, 'Dropout', 'College', 115),
(121, 'Dropout', 'College', 121),
(126, 'Dropout', 'Work', 126),
(127, 'Dropout', 'College', 127),
(128, 'Graduated', 'Work', 128),
(130, 'Dropout', 'Work', 130),
(131, 'Graduated', 'College', 131),
(132, 'Graduated', 'Work', 132),
(133, 'Dropout', 'College', 133),
(134, 'Dropout', 'Work', 134),
(135, 'Graduated', 'Work', 135),
(136, 'Dropout', 'College', 136),
(137, 'Dropout', 'Work', 137),
(140, 'Dropout', 'Work', 140),
(144, 'Graduated', 'Work', 144),
(145, 'Graduated', 'Work', 145),
(146, 'Graduated', 'College', 146),
(149, 'Graduated', 'Work', 149),
(157, 'Dropout', 'Work', 157),
(158, 'Graduated', 'Work', 158),
(160, 'Graduated', 'Work', 160),
(164, 'Graduated', 'Work', 164),
(165, 'Graduated', 'College', 165),
(167, 'Graduated', 'Work', 167),
(168, 'Graduated', 'College', 168),
(169, 'Dropout', 'Work', 169),
(170, 'Dropout', 'College', 170),
(173, 'Graduated', 'Work', 173),
(174, 'Dropout', 'College', 174),
(177, 'Dropout', 'Work', 177),
(179, 'Dropout', 'Work', 179),
(186, 'Dropout', 'College', 186),
(187, 'Dropout', 'College', 187),
(188, 'Graduated', 'Work', 188),
(190, 'Graduated', 'Work', 190),
(201, 'Dropout', 'Work', 201),
(203, 'Dropout', 'Work', 203),
(204, 'Graduated', 'Work', 204),
(205, 'Graduated', 'Work', 205),
(207, 'Dropout', 'Work', 207),
(210, 'Dropout', 'Work', 210),
(211, 'Graduated', 'Work', 211),
(212, 'Dropout', 'Work', 212),
(219, 'Dropout', 'Work', 219),
(221, 'Graduated', 'College', 221),
(222, 'Dropout', 'Work', 222),
(224, 'Dropout', 'College', 224),
(236, 'Graduated', 'College', 236),
(237, 'Dropout', 'College', 237),
(238, 'Graduated', 'College', 238),
(240, 'Dropout', 'College', 240),
(242, 'Dropout', 'College', 242),
(245, 'Graduated', 'Work', 245),
(246, 'Graduated', 'Work', 246),
(248, 'Graduated', 'College', 248),
(249, 'Dropout', 'College', 249),
(250, 'Dropout', 'Work', 250),
(253, 'Graduated', 'Work', 253),
(259, 'Dropout', 'College', 259),
(260, 'Dropout', 'College', 260),
(261, 'Graduated', 'College', 261),
(262, 'Graduated', 'College', 262),
(264, 'Dropout', 'Work', 264),
(265, 'Dropout', 'College', 265),
(270, 'Graduated', 'Work', 270),
(271, 'Graduated', 'Work', 271),
(272, 'Graduated', 'Work', 272),
(275, 'Graduated', 'Work', 275),
(278, 'Dropout', 'Work', 278),
(282, 'Dropout', 'Work', 282),
(283, 'Graduated', 'Work', 283),
(284, 'Dropout', 'Work', 284),
(291, 'Dropout', 'College', 291),
(293, 'Graduated', 'Work', 293),
(295, 'Dropout', 'College', 295),
(296, 'Dropout', 'College', 296),
(300, 'Graduated', 'College', 300),
(302, 'Dropout', 'College', 302),
(307, 'Dropout', 'Work', 307),
(308, 'Graduated', 'College', 308),
(311, 'Dropout', 'College', 311),
(313, 'Graduated', 'Work', 313),
(317, 'Graduated', 'Work', 317),
(319, 'Dropout', 'College', 319),
(322, 'Dropout', 'Work', 322),
(323, 'Dropout', 'Work', 323),
(326, 'Graduated', 'College', 326),
(328, 'Dropout', 'Work', 328),
(336, 'Graduated', 'College', 336),
(337, 'Graduated', 'College', 337),
(340, 'Graduated', 'College', 340),
(344, 'Dropout', 'College', 344),
(346, 'Dropout', 'Work', 346),
(353, 'Dropout', 'College', 353),
(354, 'Dropout', 'Work', 354),
(374, 'Graduated', 'College', 374),
(383, 'Graduated', 'College', 383),
(390, 'Dropout', 'Work', 390),
(394, 'Dropout', 'College', 394),
(395, 'Dropout', 'College', 395),
(399, 'Dropout', 'Work', 399),
(404, 'Dropout', 'College', 404),
(414, 'Dropout', 'Work', 414),
(431, 'Dropout', 'Work', 431),
(438, 'Graduated', 'College', 438),
(444, 'Graduated', 'College', 444),
(449, 'Dropout', 'College', 449),
(455, 'Graduated', 'College', 455),
(456, 'Graduated', 'Work', 456),
(460, 'Dropout', 'College', 460),
(466, 'Dropout', 'Work', 466),
(472, 'Graduated', 'Work', 472),
(475, 'Dropout', 'Work', 475),
(487, 'Dropout', 'Work', 487),
(491, 'Graduated', 'Work', 491),
(494, 'Dropout', 'College', 494),
(883, 'Dropout', 'College', 883),
(885, 'Graduated', 'Work', 885),
(892, 'Dropout', 'Work', 892),
(894, 'Dropout', 'College', 894),
(895, 'Dropout', 'Work', 895),
(903, 'Graduated', 'Work', 903),
(916, 'Graduated', 'College', 916),
(920, 'Graduated', 'Work', 920),
(922, 'Dropout', 'Work', 922),
(929, 'Graduated', 'College', 929),
(932, 'Graduated', 'Work', 932),
(937, 'Graduated', 'Work', 937),
(943, 'Graduated', 'College', 943),
(956, 'Graduated', 'College', 956),
(964, 'Dropout', 'Work', 964),
(966, 'Dropout', 'College', 966),
(988, 'Dropout', 'College', 988),
(992, 'Graduated', 'Work', 992),
(995, 'Dropout', 'College', 995),
(999, 'Graduated', 'College', 999);

-- --------------------------------------------------------

--
-- Table structure for table `record_payment`
--

CREATE TABLE `record_payment` (
  `id_payment` int(4) NOT NULL,
  `payment` varchar(10) COLLATE utf8_bin NOT NULL,
  `year` varchar(4) COLLATE utf8_bin NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `record_payment`
--

INSERT INTO `record_payment` (`id_payment`, `payment`, `year`, `id_student`) VALUES
(2, 'Paid', '2017', 2),
(3, 'Paid', '2017', 3),
(4, 'Paid', '2017', 4),
(5, 'Paid', '2017', 5),
(6, 'Paid', '2017', 6),
(7, 'Paid', '2017', 7),
(8, 'Paid', '2017', 8),
(9, 'Paid', '2017', 9),
(11, 'Paid', '2017', 11),
(15, 'Paid', '2017', 15),
(18, 'Paid', '2017', 18),
(19, 'Paid', '2017', 19),
(20, 'Paid', '2017', 20),
(21, 'Paid', '2017', 21),
(22, 'Paid', '2017', 22),
(24, 'Paid', '2017', 24),
(25, 'Paid', '2017', 25),
(26, 'Paid', '2017', 26),
(27, 'Paid', '2017', 27),
(28, 'Paid', '2017', 28),
(29, 'Paid', '2017', 29),
(30, 'Paid', '2017', 30),
(31, 'Paid', '2017', 31),
(32, 'Paid', '2017', 32),
(34, 'Paid', '2017', 34),
(37, 'Paid', '2017', 37),
(38, 'Paid', '2017', 38),
(39, 'Paid', '2017', 39),
(40, 'Paid', '2017', 40),
(44, 'Paid', '2017', 44),
(46, 'Paid', '2017', 46),
(47, 'Paid', '2017', 47),
(48, 'Paid', '2017', 48),
(49, 'Paid', '2017', 49),
(50, 'Paid', '2017', 50),
(52, 'Paid', '2017', 52),
(55, 'Paid', '2017', 55),
(56, 'Paid', '2017', 56),
(57, 'Paid', '2017', 57),
(60, 'Paid', '2017', 60),
(61, 'Paid', '2017', 61),
(62, 'Paid', '2017', 62),
(64, 'Paid', '2017', 64),
(65, 'Paid', '2017', 65),
(66, 'Paid', '2017', 66),
(67, 'Paid', '2017', 67),
(68, 'Paid', '2017', 68),
(69, 'Paid', '2017', 69),
(71, 'Paid', '2017', 71),
(73, 'Paid', '2017', 73),
(75, 'Paid', '2017', 75),
(76, 'Paid', '2017', 76),
(77, 'Paid', '2017', 77),
(78, 'Paid', '2017', 78),
(79, 'Paid', '2017', 79),
(80, 'Paid', '2017', 80),
(81, 'Paid', '2017', 81),
(82, 'Paid', '2017', 82),
(83, 'Paid', '2017', 83),
(84, 'Paid', '2017', 84),
(87, 'Paid', '2017', 87),
(88, 'Paid', '2017', 88),
(89, 'Paid', '2017', 89),
(90, 'Paid', '2017', 90),
(94, 'Paid', '2017', 94),
(95, 'Paid', '2017', 95),
(96, 'Paid', '2017', 96),
(97, 'Paid', '2017', 97),
(99, 'Paid', '2017', 99),
(100, 'Paid', '2017', 100),
(105, 'Paid', '2017', 105),
(106, 'Paid', '2017', 106),
(107, 'Paid', '2017', 107),
(109, 'Paid', '2017', 109),
(110, 'Paid', '2017', 110),
(111, 'Paid', '2017', 111),
(113, 'Paid', '2017', 113),
(114, 'Paid', '2017', 114),
(115, 'Paid', '2017', 115),
(121, 'Paid', '2017', 121),
(126, 'Paid', '2017', 126),
(127, 'Paid', '2017', 127),
(128, 'Paid', '2017', 128),
(130, 'Paid', '2017', 130),
(131, 'Paid', '2017', 131),
(132, 'Paid', '2017', 132),
(133, 'Paid', '2017', 133),
(134, 'Paid', '2017', 134),
(135, 'Paid', '2017', 135),
(136, 'Paid', '2017', 136),
(137, 'Paid', '2017', 137),
(140, 'Paid', '2017', 140),
(144, 'Paid', '2017', 144),
(145, 'Paid', '2017', 145),
(146, 'Paid', '2017', 146),
(149, 'Paid', '2017', 149),
(157, 'Paid', '2017', 157),
(158, 'Paid', '2017', 158),
(160, 'Paid', '2017', 160),
(164, 'Paid', '2017', 164),
(165, 'Paid', '2017', 165),
(167, 'Paid', '2017', 167),
(168, 'Paid', '2017', 168),
(169, 'Paid', '2017', 169),
(170, 'Paid', '2017', 170),
(173, 'Paid', '2017', 173),
(174, 'Paid', '2017', 174),
(177, 'Paid', '2017', 177),
(179, 'Paid', '2017', 179),
(186, 'Paid', '2017', 186),
(187, 'Paid', '2017', 187),
(188, 'Paid', '2017', 188),
(190, 'Paid', '2017', 190),
(201, 'Paid', '2017', 201),
(203, 'Paid', '2017', 203),
(204, 'Paid', '2017', 204),
(205, 'Paid', '2017', 205),
(207, 'Paid', '2017', 207),
(210, 'Paid', '2017', 210),
(211, 'Paid', '2017', 211),
(212, 'Paid', '2017', 212),
(219, 'Paid', '2017', 219),
(221, 'Paid', '2017', 221),
(222, 'Paid', '2017', 222),
(224, 'Paid', '2017', 224),
(236, 'Paid', '2017', 236),
(237, 'Paid', '2017', 237),
(238, 'Paid', '2017', 238),
(240, 'Paid', '2017', 240),
(242, 'Paid', '2017', 242),
(245, 'Paid', '2017', 245),
(246, 'Paid', '2017', 246),
(248, 'Paid', '2017', 248),
(249, 'Paid', '2017', 249),
(250, 'Paid', '2017', 250),
(253, 'Paid', '2017', 253),
(259, 'Paid', '2017', 259),
(260, 'Paid', '2017', 260),
(261, 'Paid', '2017', 261),
(262, 'Paid', '2017', 262),
(264, 'Paid', '2017', 264),
(265, 'Paid', '2017', 265),
(270, 'Paid', '2017', 270),
(271, 'Paid', '2017', 271),
(272, 'Paid', '2017', 272),
(275, 'Paid', '2017', 275),
(278, 'Paid', '2017', 278),
(282, 'Paid', '2017', 282),
(283, 'Paid', '2017', 283),
(284, 'Paid', '2017', 284),
(291, 'Paid', '2017', 291),
(293, 'Paid', '2017', 293),
(295, 'Paid', '2017', 295),
(296, 'Paid', '2017', 296),
(300, 'Paid', '2017', 300),
(302, 'Paid', '2017', 302),
(307, 'Paid', '2017', 307),
(308, 'Paid', '2017', 308),
(311, 'Paid', '2017', 311),
(313, 'Paid', '2017', 313),
(317, 'Paid', '2017', 317),
(319, 'Paid', '2017', 319),
(322, 'Paid', '2017', 322),
(323, 'Paid', '2017', 323),
(326, 'Paid', '2017', 326),
(328, 'Paid', '2017', 328),
(336, 'Paid', '2017', 336),
(337, 'Paid', '2017', 337),
(340, 'Paid', '2017', 340),
(344, 'Paid', '2017', 344),
(346, 'Paid', '2017', 346),
(353, 'Paid', '2017', 353),
(354, 'Paid', '2017', 354),
(374, 'Paid', '2017', 374),
(383, 'Paid', '2017', 383),
(390, 'Paid', '2017', 390),
(394, 'Paid', '2017', 394),
(395, 'Paid', '2017', 395),
(399, 'Paid', '2017', 399),
(404, 'Paid', '2017', 404),
(414, 'Paid', '2017', 414),
(431, 'Paid', '2017', 431),
(438, 'Paid', '2017', 438),
(444, 'Paid', '2017', 444),
(449, 'Paid', '2017', 449),
(455, 'Paid', '2017', 455),
(456, 'Paid', '2017', 456),
(460, 'Paid', '2017', 460),
(466, 'Paid', '2017', 466),
(472, 'Paid', '2017', 472),
(475, 'Paid', '2017', 475),
(487, 'Paid', '2017', 487),
(491, 'Paid', '2017', 491),
(494, 'Paid', '2017', 494),
(883, 'Paid', '2017', 883),
(885, 'Paid', '2017', 885),
(892, 'Paid', '2017', 892),
(894, 'Paid', '2017', 894),
(895, 'Paid', '2017', 895),
(903, 'Paid', '2017', 903),
(916, 'Paid', '2017', 916),
(920, 'Paid', '2017', 920),
(922, 'Paid', '2017', 922),
(929, 'Paid', '2017', 929),
(932, 'Paid', '2017', 932),
(937, 'Paid', '2017', 937),
(943, 'Paid', '2017', 943),
(956, 'Paid', '2017', 956),
(964, 'Paid', '2017', 964),
(966, 'Paid', '2017', 966),
(988, 'Paid', '2017', 988),
(992, 'Paid', '2017', 992),
(995, 'Paid', '2017', 995),
(999, 'Paid', '2017', 999),
(1002, 'Paid', '2018', 2),
(1003, 'Paid', '2018', 3),
(1004, 'Paid', '2018', 4),
(1005, 'Paid', '2018', 5),
(1006, 'Paid', '2018', 6),
(1007, 'Paid', '2018', 7),
(1008, 'Paid', '2018', 8),
(1009, 'Paid', '2018', 9),
(1011, 'Paid', '2018', 11),
(1015, 'Paid', '2018', 15),
(1018, 'Paid', '2018', 18),
(1019, 'Paid', '2018', 19),
(1020, 'Paid', '2018', 20),
(1021, 'Paid', '2018', 21),
(1022, 'Paid', '2018', 22),
(1024, 'Paid', '2018', 24),
(1025, 'Paid', '2018', 25),
(1026, 'Paid', '2018', 26),
(1027, 'Paid', '2018', 27),
(1028, 'Paid', '2018', 28),
(1029, 'Paid', '2018', 29),
(1030, 'Paid', '2018', 30),
(1031, 'Paid', '2018', 31),
(1032, 'Paid', '2018', 32),
(1034, 'Paid', '2018', 34),
(1037, 'Paid', '2018', 37),
(1038, 'Paid', '2018', 38),
(1039, 'Paid', '2018', 39),
(1040, 'Paid', '2018', 40),
(1044, 'Paid', '2018', 44),
(1046, 'Paid', '2018', 46),
(1047, 'Paid', '2018', 47),
(1048, 'Paid', '2018', 48),
(1049, 'Paid', '2018', 49),
(1050, 'Paid', '2018', 50),
(1052, 'Paid', '2018', 52),
(1055, 'Paid', '2018', 55),
(1056, 'Paid', '2018', 56),
(1057, 'Paid', '2018', 57),
(1060, 'Paid', '2018', 60),
(1061, 'Paid', '2018', 61),
(1062, 'Paid', '2018', 62),
(1064, 'Paid', '2018', 64),
(1065, 'Paid', '2018', 65),
(1066, 'Paid', '2018', 66),
(1067, 'Paid', '2018', 67),
(1068, 'Paid', '2018', 68),
(1069, 'Paid', '2018', 69),
(1071, 'Paid', '2018', 71),
(1073, 'Paid', '2018', 73),
(1075, 'Paid', '2018', 75),
(1076, 'Paid', '2018', 76),
(1077, 'Paid', '2018', 77),
(1078, 'Paid', '2018', 78),
(1079, 'Paid', '2018', 79),
(1080, 'Paid', '2018', 80),
(1081, 'Paid', '2018', 81),
(1082, 'Paid', '2018', 82),
(1083, 'Paid', '2018', 83),
(1084, 'Paid', '2018', 84),
(1087, 'Paid', '2018', 87),
(1088, 'Paid', '2018', 88),
(1089, 'Paid', '2018', 89),
(1090, 'Paid', '2018', 90),
(1094, 'Paid', '2018', 94),
(1095, 'Paid', '2018', 95),
(1096, 'Paid', '2018', 96),
(1097, 'Paid', '2018', 97),
(1099, 'Paid', '2018', 99),
(1100, 'Paid', '2018', 100),
(1105, 'Paid', '2018', 105),
(1106, 'Paid', '2018', 106),
(1107, 'Paid', '2018', 107),
(1109, 'Paid', '2018', 109),
(1110, 'Paid', '2018', 110),
(1111, 'Paid', '2018', 111),
(1113, 'Paid', '2018', 113),
(1114, 'Paid', '2018', 114),
(1115, 'Paid', '2018', 115),
(1121, 'Paid', '2018', 121),
(1126, 'Paid', '2018', 126),
(1127, 'Paid', '2018', 127),
(1128, 'Paid', '2018', 128),
(1130, 'Paid', '2018', 130),
(1131, 'Paid', '2018', 131),
(1132, 'Paid', '2018', 132),
(1133, 'Paid', '2018', 133),
(1134, 'Paid', '2018', 134),
(1135, 'Paid', '2018', 135),
(1136, 'Paid', '2018', 136),
(1137, 'Paid', '2018', 137),
(1140, 'Paid', '2018', 140),
(1144, 'Paid', '2018', 144),
(1145, 'Paid', '2018', 145),
(1146, 'Paid', '2018', 146),
(1149, 'Paid', '2018', 149),
(1157, 'Paid', '2018', 157),
(1158, 'Paid', '2018', 158),
(1160, 'Paid', '2018', 160),
(1164, 'Paid', '2018', 164),
(1165, 'Paid', '2018', 165),
(1167, 'Paid', '2018', 167),
(1168, 'Paid', '2018', 168),
(1169, 'Paid', '2018', 169),
(1170, 'Paid', '2018', 170),
(1173, 'Paid', '2018', 173),
(1174, 'Paid', '2018', 174),
(1177, 'Paid', '2018', 177),
(1179, 'Paid', '2018', 179),
(1186, 'Paid', '2018', 186),
(1187, 'Paid', '2018', 187),
(1188, 'Paid', '2018', 188),
(1190, 'Paid', '2018', 190),
(1201, 'Paid', '2018', 201),
(1203, 'Paid', '2018', 203),
(1204, 'Paid', '2018', 204),
(1205, 'Paid', '2018', 205),
(1207, 'Paid', '2018', 207),
(1210, 'Paid', '2018', 210),
(1211, 'Paid', '2018', 211),
(1212, 'Paid', '2018', 212),
(1219, 'Paid', '2018', 219),
(1221, 'Paid', '2018', 221),
(1222, 'Paid', '2018', 222),
(1224, 'Paid', '2018', 224),
(1236, 'Paid', '2018', 236),
(1237, 'Paid', '2018', 237),
(1238, 'Paid', '2018', 238),
(1240, 'Paid', '2018', 240),
(1242, 'Paid', '2018', 242),
(1245, 'Paid', '2018', 245),
(1246, 'Paid', '2018', 246),
(1248, 'Paid', '2018', 248),
(1249, 'Paid', '2018', 249),
(1250, 'Paid', '2018', 250),
(1253, 'Paid', '2018', 253),
(1259, 'Paid', '2018', 259),
(1260, 'Paid', '2018', 260),
(1261, 'Paid', '2018', 261),
(1262, 'Paid', '2018', 262),
(1264, 'Paid', '2018', 264),
(1265, 'Paid', '2018', 265),
(1270, 'Paid', '2018', 270),
(1271, 'Paid', '2018', 271),
(1272, 'Paid', '2018', 272),
(1275, 'Paid', '2018', 275),
(1278, 'Paid', '2018', 278),
(1282, 'Paid', '2018', 282),
(1283, 'Paid', '2018', 283),
(1284, 'Paid', '2018', 284),
(1291, 'Paid', '2018', 291),
(1293, 'Paid', '2018', 293),
(1295, 'Paid', '2018', 295),
(1296, 'Paid', '2018', 296),
(1300, 'Paid', '2018', 300),
(1302, 'Paid', '2018', 302),
(1307, 'Paid', '2018', 307),
(1308, 'Paid', '2018', 308),
(1311, 'Paid', '2018', 311),
(1313, 'Paid', '2018', 313),
(1317, 'Paid', '2018', 317),
(1319, 'Paid', '2018', 319),
(1322, 'Paid', '2018', 322),
(1323, 'Paid', '2018', 323),
(1326, 'Paid', '2018', 326),
(1328, 'Paid', '2018', 328),
(1336, 'Paid', '2018', 336),
(1337, 'Paid', '2018', 337),
(1340, 'Paid', '2018', 340),
(1344, 'Paid', '2018', 344),
(1346, 'Paid', '2018', 346),
(1353, 'Paid', '2018', 353),
(1354, 'Paid', '2018', 354),
(1374, 'Paid', '2018', 374),
(1383, 'Paid', '2018', 383),
(1390, 'Paid', '2018', 390),
(1394, 'Paid', '2018', 394),
(1395, 'Paid', '2018', 395),
(1399, 'Paid', '2018', 399),
(1404, 'Paid', '2018', 404),
(1414, 'Paid', '2018', 414),
(1431, 'Paid', '2018', 431),
(1438, 'Paid', '2018', 438),
(1444, 'Paid', '2018', 444),
(1449, 'Paid', '2018', 449),
(1455, 'Paid', '2018', 455),
(1456, 'Paid', '2018', 456),
(1460, 'Paid', '2018', 460),
(1466, 'Paid', '2018', 466),
(1472, 'Paid', '2018', 472),
(1475, 'Paid', '2018', 475),
(1487, 'Paid', '2018', 487),
(1491, 'Paid', '2018', 491),
(1494, 'Paid', '2018', 494),
(1883, 'Paid', '2018', 883),
(1885, 'Paid', '2018', 885),
(1892, 'Paid', '2018', 892),
(1894, 'Paid', '2018', 894),
(1895, 'Paid', '2018', 895),
(1903, 'Paid', '2018', 903),
(1916, 'Paid', '2018', 916),
(1920, 'Paid', '2018', 920),
(1922, 'Paid', '2018', 922),
(1929, 'Paid', '2018', 929),
(1932, 'Paid', '2018', 932),
(1937, 'Paid', '2018', 937),
(1943, 'Paid', '2018', 943),
(1956, 'Paid', '2018', 956),
(1964, 'Paid', '2018', 964),
(1966, 'Paid', '2018', 966),
(1988, 'Paid', '2018', 988),
(1992, 'Paid', '2018', 992),
(1995, 'Paid', '2018', 995),
(1999, 'Paid', '2018', 999),
(2002, 'Paid', '2019', 2),
(2003, 'Unpaid', '2019', 3),
(2004, 'Paid', '2019', 4),
(2005, 'Unpaid', '2019', 5),
(2006, 'Paid', '2019', 6),
(2007, 'Paid', '2019', 7),
(2008, 'Paid', '2019', 8),
(2009, 'Paid', '2019', 9),
(2011, 'Paid', '2019', 11),
(2015, 'Paid', '2019', 15),
(2018, 'Paid', '2019', 18),
(2019, 'Unpaid', '2019', 19),
(2020, 'Unpaid', '2019', 20),
(2021, 'Paid', '2019', 21),
(2022, 'Unpaid', '2019', 22),
(2024, 'Paid', '2019', 24),
(2025, 'Unpaid', '2019', 25),
(2026, 'Unpaid', '2019', 26),
(2027, 'Unpaid', '2019', 27),
(2028, 'Paid', '2019', 28),
(2029, 'Unpaid', '2019', 29),
(2030, 'Paid', '2019', 30),
(2031, 'Paid', '2019', 31),
(2032, 'Unpaid', '2019', 32),
(2034, 'Unpaid', '2019', 34),
(2037, 'Paid', '2019', 37),
(2038, 'Unpaid', '2019', 38),
(2039, 'Paid', '2019', 39),
(2040, 'Unpaid', '2019', 40),
(2044, 'Unpaid', '2019', 44),
(2046, 'Unpaid', '2019', 46),
(2047, 'Paid', '2019', 47),
(2048, 'Paid', '2019', 48),
(2049, 'Unpaid', '2019', 49),
(2050, 'Unpaid', '2019', 50),
(2052, 'Paid', '2019', 52),
(2055, 'Unpaid', '2019', 55),
(2056, 'Paid', '2019', 56),
(2057, 'Unpaid', '2019', 57),
(2060, 'Unpaid', '2019', 60),
(2061, 'Unpaid', '2019', 61),
(2062, 'Paid', '2019', 62),
(2064, 'Paid', '2019', 64),
(2065, 'Paid', '2019', 65),
(2066, 'Paid', '2019', 66),
(2067, 'Unpaid', '2019', 67),
(2068, 'Paid', '2019', 68),
(2069, 'Unpaid', '2019', 69),
(2071, 'Unpaid', '2019', 71),
(2073, 'Paid', '2019', 73),
(2075, 'Paid', '2019', 75),
(2076, 'Unpaid', '2019', 76),
(2077, 'Unpaid', '2019', 77),
(2078, 'Paid', '2019', 78),
(2079, 'Unpaid', '2019', 79),
(2080, 'Paid', '2019', 80),
(2081, 'Unpaid', '2019', 81),
(2082, 'Paid', '2019', 82),
(2083, 'Paid', '2019', 83),
(2084, 'Unpaid', '2019', 84),
(2087, 'Paid', '2019', 87),
(2088, 'Unpaid', '2019', 88),
(2089, 'Paid', '2019', 89),
(2090, 'Unpaid', '2019', 90),
(2094, 'Paid', '2019', 94),
(2095, 'Paid', '2019', 95),
(2096, 'Unpaid', '2019', 96),
(2097, 'Paid', '2019', 97),
(2099, 'Paid', '2019', 99),
(2100, 'Unpaid', '2019', 100),
(2105, 'Unpaid', '2019', 105),
(2106, 'Paid', '2019', 106),
(2107, 'Unpaid', '2019', 107),
(2109, 'Unpaid', '2019', 109),
(2110, 'Unpaid', '2019', 110),
(2111, 'Paid', '2019', 111),
(2113, 'Paid', '2019', 113),
(2114, 'Unpaid', '2019', 114),
(2115, 'Paid', '2019', 115),
(2121, 'Unpaid', '2019', 121),
(2126, 'Paid', '2019', 126),
(2127, 'Unpaid', '2019', 127),
(2128, 'Unpaid', '2019', 128),
(2130, 'Unpaid', '2019', 130),
(2131, 'Paid', '2019', 131),
(2132, 'Unpaid', '2019', 132),
(2133, 'Paid', '2019', 133),
(2134, 'Paid', '2019', 134),
(2135, 'Paid', '2019', 135),
(2136, 'Paid', '2019', 136),
(2137, 'Unpaid', '2019', 137),
(2140, 'Paid', '2019', 140),
(2144, 'Paid', '2019', 144),
(2145, 'Paid', '2019', 145),
(2146, 'Paid', '2019', 146),
(2149, 'Paid', '2019', 149),
(2157, 'Paid', '2019', 157),
(2158, 'Unpaid', '2019', 158),
(2160, 'Paid', '2019', 160),
(2164, 'Paid', '2019', 164),
(2165, 'Paid', '2019', 165),
(2167, 'Unpaid', '2019', 167),
(2168, 'Paid', '2019', 168),
(2169, 'Unpaid', '2019', 169),
(2170, 'Paid', '2019', 170),
(2173, 'Unpaid', '2019', 173),
(2174, 'Unpaid', '2019', 174),
(2177, 'Paid', '2019', 177),
(2179, 'Unpaid', '2019', 179),
(2186, 'Paid', '2019', 186),
(2187, 'Unpaid', '2019', 187),
(2188, 'Paid', '2019', 188),
(2190, 'Paid', '2019', 190),
(2201, 'Paid', '2019', 201),
(2203, 'Unpaid', '2019', 203),
(2204, 'Paid', '2019', 204),
(2205, 'Paid', '2019', 205),
(2207, 'Unpaid', '2019', 207),
(2210, 'Paid', '2019', 210),
(2211, 'Unpaid', '2019', 211),
(2212, 'Paid', '2019', 212),
(2219, 'Paid', '2019', 219),
(2221, 'Unpaid', '2019', 221),
(2222, 'Unpaid', '2019', 222),
(2224, 'Paid', '2019', 224),
(2236, 'Unpaid', '2019', 236),
(2237, 'Unpaid', '2019', 237),
(2238, 'Unpaid', '2019', 238),
(2240, 'Unpaid', '2019', 240),
(2242, 'Paid', '2019', 242),
(2245, 'Unpaid', '2019', 245),
(2246, 'Paid', '2019', 246),
(2248, 'Paid', '2019', 248),
(2249, 'Unpaid', '2019', 249),
(2250, 'Unpaid', '2019', 250),
(2253, 'Paid', '2019', 253),
(2259, 'Paid', '2019', 259),
(2260, 'Paid', '2019', 260),
(2261, 'Paid', '2019', 261),
(2262, 'Unpaid', '2019', 262),
(2264, 'Paid', '2019', 264),
(2265, 'Unpaid', '2019', 265),
(2270, 'Paid', '2019', 270),
(2271, 'Unpaid', '2019', 271),
(2272, 'Unpaid', '2019', 272),
(2275, 'Unpaid', '2019', 275),
(2278, 'Paid', '2019', 278),
(2282, 'Unpaid', '2019', 282),
(2283, 'Paid', '2019', 283),
(2284, 'Unpaid', '2019', 284),
(2291, 'Paid', '2019', 291),
(2293, 'Paid', '2019', 293),
(2295, 'Paid', '2019', 295),
(2296, 'Paid', '2019', 296),
(2300, 'Unpaid', '2019', 300),
(2302, 'Unpaid', '2019', 302),
(2307, 'Unpaid', '2019', 307),
(2308, 'Unpaid', '2019', 308),
(2311, 'Paid', '2019', 311),
(2313, 'Paid', '2019', 313),
(2317, 'Paid', '2019', 317),
(2319, 'Unpaid', '2019', 319),
(2322, 'Unpaid', '2019', 322),
(2323, 'Unpaid', '2019', 323),
(2326, 'Unpaid', '2019', 326),
(2328, 'Paid', '2019', 328),
(2336, 'Unpaid', '2019', 336),
(2337, 'Paid', '2019', 337),
(2340, 'Paid', '2019', 340),
(2344, 'Unpaid', '2019', 344),
(2346, 'Unpaid', '2019', 346),
(2353, 'Unpaid', '2019', 353),
(2354, 'Paid', '2019', 354),
(2374, 'Paid', '2019', 374),
(2383, 'Paid', '2019', 383),
(2390, 'Unpaid', '2019', 390),
(2394, 'Unpaid', '2019', 394),
(2395, 'Unpaid', '2019', 395),
(2399, 'Unpaid', '2019', 399),
(2404, 'Unpaid', '2019', 404),
(2414, 'Paid', '2019', 414),
(2431, 'Unpaid', '2019', 431),
(2438, 'Unpaid', '2019', 438),
(2444, 'Unpaid', '2019', 444),
(2449, 'Paid', '2019', 449),
(2455, 'Unpaid', '2019', 455),
(2456, 'Paid', '2019', 456),
(2460, 'Paid', '2019', 460),
(2466, 'Unpaid', '2019', 466),
(2472, 'Unpaid', '2019', 472),
(2475, 'Paid', '2019', 475),
(2487, 'Unpaid', '2019', 487),
(2491, 'Paid', '2019', 491),
(2494, 'Paid', '2019', 494),
(2883, 'Paid', '2019', 883),
(2885, 'Unpaid', '2019', 885),
(2892, 'Unpaid', '2019', 892),
(2894, 'Unpaid', '2019', 894),
(2895, 'Paid', '2019', 895),
(2903, 'Paid', '2019', 903),
(2916, 'Paid', '2019', 916),
(2920, 'Paid', '2019', 920),
(2922, 'Unpaid', '2019', 922),
(2929, 'Paid', '2019', 929),
(2932, 'Paid', '2019', 932),
(2937, 'Paid', '2019', 937),
(2943, 'Paid', '2019', 943),
(2956, 'Unpaid', '2019', 956),
(2964, 'Unpaid', '2019', 964),
(2966, 'Unpaid', '2019', 966),
(2988, 'Unpaid', '2019', 988),
(2992, 'Unpaid', '2019', 992),
(2995, 'Unpaid', '2019', 995),
(2999, 'Unpaid', '2019', 999);

-- --------------------------------------------------------

--
-- Table structure for table `record_score`
--

CREATE TABLE `record_score` (
  `id_score` int(4) NOT NULL,
  `score` int(3) NOT NULL,
  `year` varchar(4) COLLATE utf8_bin NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `record_score`
--

INSERT INTO `record_score` (`id_score`, `score`, `year`, `id_student`, `id_subject`) VALUES
(9002, 70, '2017', 19, 13),
(9014, 50, '2017', 19, 11),
(9016, 60, '2017', 157, 11),
(9019, 60, '2017', 19, 9),
(9022, 89, '2019', 99, 9),
(9040, 70, '2017', 69, 9),
(9042, 89, '2018', 346, 13),
(9043, 90, '2019', 455, 20),
(9044, 45, '2019', 455, 18),
(9047, 78, '2017', 99, 11),
(9055, 78, '2019', 204, 11),
(9057, 56, '2019', 282, 13),
(9058, 77, '2018', 4, 9),
(9063, 89, '2017', 494, 16),
(9065, 90, '2019', 88, 13),
(9068, 86, '2018', 259, 11),
(9078, 90, '2017', 121, 11),
(9095, 65, '2017', 455, 20),
(9096, 57, '2018', 455, 20),
(9132, 98, '2018', 19, 9),
(9133, 89, '2019', 4, 9),
(9136, 90, '2018', 121, 11),
(9137, 93, '2019', 121, 11),
(9138, 89, '2017', 121, 13),
(9139, 95, '2018', 121, 13),
(9140, 91, '2019', 121, 13),
(9141, 53, '2018', 19, 13),
(9166, 67, '2018', 317, 16),
(9167, 89, '2019', 144, 16),
(9168, 45, '2017', 203, 8),
(9169, 90, '2019', 317, 8),
(9170, 56, '2017', 169, 6),
(9171, 90, '2018', 261, 6),
(9172, 59, '2019', 203, 6),
(9173, 90, '2017', 328, 4),
(9174, 78, '2018', 328, 4),
(9175, 79, '2018', 317, 4),
(9176, 65, '2017', 238, 18),
(9177, 67, '2018', 238, 18),
(9178, 90, '2017', 302, 18),
(9180, 90, '2017', 167, 2),
(9181, 89, '2018', 167, 2),
(9182, 80, '2019', 167, 2),
(9183, 67, '2018', 203, 8),
(9184, 57, '2019', 475, 8),
(9185, 57, '2019', 131, 4),
(9186, 70, '2017', 201, 4),
(9187, 89, '2017', 38, 1),
(9188, 83, '2017', 157, 1),
(9189, 47, '2017', 903, 1),
(9190, 25, '2018', 157, 1),
(9191, 57, '2018', 903, 1),
(9192, 79, '2018', 383, 1),
(9193, 67, '2019', 383, 1),
(9194, 79, '2019', 157, 1),
(9195, 79, '2019', 449, 1),
(9196, 78, '2017', 157, 7),
(9197, 56, '2017', 903, 7),
(9198, 90, '2017', 383, 7),
(9199, 77, '2017', 90, 7),
(9200, 79, '2017', 38, 7),
(9201, 90, '2018', 157, 7),
(9202, 93, '2019', 38, 7),
(9203, 90, '2017', 1000, 5),
(9204, 67, '2017', 121, 5),
(9205, 54, '2017', 89, 5),
(9206, 90, '2017', 15, 5),
(9207, 98, '2017', 283, 5),
(9208, 77, '2017', 883, 5),
(9209, 97, '2018', 1000, 5),
(9210, 45, '2018', 121, 5),
(9211, 67, '2018', 89, 5),
(9212, 90, '2018', 15, 5),
(9213, 57, '2018', 283, 5),
(9214, 88, '2018', 883, 5),
(9215, 69, '2018', 916, 5),
(9216, 77, '2019', 1000, 5),
(9217, 73, '2019', 121, 5),
(9218, 53, '2019', 89, 5),
(9219, 47, '2019', 15, 5),
(9220, 49, '2019', 283, 5),
(9221, 43, '2019', 883, 5),
(9222, 56, '2017', 99, 3),
(9223, 57, '2017', 69, 3),
(9224, 49, '2017', 115, 3),
(9225, 79, '2018', 99, 3),
(9226, 77, '2018', 69, 3),
(9227, 57, '2018', 115, 3),
(9228, 77, '2019', 99, 3),
(9229, 66, '2019', 69, 3),
(9230, 79, '2019', 115, 3),
(9231, 89, '2019', 929, 3),
(9232, 78, '2017', 929, 3),
(9233, 77, '2017', 992, 3);

-- --------------------------------------------------------

--
-- Table structure for table `record_suspension`
--

CREATE TABLE `record_suspension` (
  `id_suspension` int(4) NOT NULL,
  `offense` varchar(25) COLLATE utf8_bin NOT NULL,
  `suspension` int(2) NOT NULL,
  `year` varchar(4) COLLATE utf8_bin NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `record_suspension`
--

INSERT INTO `record_suspension` (`id_suspension`, `offense`, `suspension`, `year`, `id_student`) VALUES
(9, 'Harrasment', 11, '2018', 136),
(13, 'Possession', 6, '2019', 21),
(30, 'Harrasment', 12, '2017', 999),
(40, 'Vandalism', 10, '2018', 883),
(41, 'Fight', 3, '2019', 249),
(52, 'Possession', 10, '2017', 158),
(63, 'Fight', 12, '2017', 431),
(67, 'Fight', 11, '2018', 164),
(68, 'Fight', 11, '2017', 248),
(69, 'Fight', 11, '2018', 177),
(74, 'Fight', 8, '2019', 110),
(75, 'Fight', 0, '2018', 134),
(77, 'Harrasment', 13, '2019', 246),
(79, 'Fight', 6, '2019', 916),
(90, 'Harrasment', 5, '2017', 109),
(95, 'Possession', 1, '2018', 943),
(96, 'Vandalism', 10, '2019', 943),
(97, 'Fight', 3, '2017', 245),
(111, 'Possession', 6, '2018', 27),
(117, 'Possession', 5, '2017', 168),
(118, 'Vandalism', 12, '2018', 246),
(124, 'Vandalism', 14, '2017', 219),
(131, 'Harrasment', 12, '2018', 317),
(134, 'Vandalism', 3, '2017', 313),
(155, 'Fight', 13, '2018', 4),
(158, 'Vandalism', 9, '2017', 121),
(170, 'Vandalism', 7, '2019', 106),
(174, 'Possession', 8, '2018', 50),
(180, 'Harrasment', 13, '2017', 131),
(181, 'Harrasment', 12, '2017', 204),
(182, 'Possession', 2, '2019', 259),
(184, 'Harrasment', 4, '2019', 282),
(191, 'Vandalism', 5, '2018', 999),
(192, 'Fight', 14, '2018', 920),
(195, 'Possession', 10, '2018', 487),
(197, 'Vandalism', 14, '2017', 282),
(206, 'Fight', 6, '2019', 127),
(212, 'Harrasment', 10, '2018', 188),
(226, 'Fight', 5, '2018', 77),
(236, 'Vandalism', 3, '2017', 100),
(248, 'Harrasment', 12, '2018', 892),
(250, 'Fight', 9, '2019', 65);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(4) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `gender` varchar(10) COLLATE utf8_bin NOT NULL,
  `religion` varchar(50) COLLATE utf8_bin NOT NULL,
  `race` varchar(20) COLLATE utf8_bin NOT NULL,
  `status` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `name`, `gender`, `religion`, `race`, `status`) VALUES
(2, 'Kendell Brawn', 'Male', 'Islam', 'Foreigner', 'Part-Time'),
(3, 'Jo-ann Lionel', 'Female', 'Christian Protestan', 'Indonesian', 'Part-Time'),
(4, 'Raoul Martyns', 'Male', 'Islam', 'Indonesian', 'Part-Time'),
(5, 'Darci Mathias', 'Female', 'Chatolic', 'Indonesian', 'Part-Time'),
(6, 'Dory Aspray', 'Female', 'Hindu', 'Indonesian', 'Part-Time'),
(7, 'Sonny Gorch', 'Male', 'Chatolic', 'Indonesian', 'Full-Time'),
(8, 'Ruggiero Grolmann', 'Male', 'Buddha', 'Indonesian', 'Full-Time'),
(9, 'Kacy McLeary', 'Female', 'Buddha', 'Foreigner', 'Part-Time'),
(10, 'Pieter Poller', 'Male', 'Islam', 'Indonesian', 'Part-Time'),
(11, 'Alfie Riediger', 'Male', 'Hindu', 'Indonesian', 'Full-Time'),
(12, 'Cobby Atkyns', 'Male', 'Kong Hu Cu', 'Indonesian', 'Full-Time'),
(13, 'Enos Robbe', 'Male', 'Hindu', 'Indonesian', 'Full-Time'),
(14, 'Jolene Hardson', 'Female', 'Kong Hu Cu', 'Indonesian', 'Full-Time'),
(15, 'Gill Mostyn', 'Male', 'Buddha', 'Indonesian', 'Full-Time'),
(16, 'Binky Clemmensen', 'Male', 'Kong Hu Cu', 'Foreigner', 'Full-Time'),
(17, 'Simon Severns', 'Male', 'Chatolic', 'Indonesian', 'Part-Time'),
(18, 'Buckie Brogioni', 'Male', 'Hindu', 'Indonesian', 'Part-Time'),
(19, 'Sidoney Loomes', 'Female', 'Kong Hu Cu', 'Foreigner', 'Full-Time'),
(20, 'Rikki Soldan', 'Female', 'Christian Protestan', 'Indonesian', 'Full-Time'),
(21, 'Gilburt Jahncke', 'Male', 'Islam', 'Foreigner', 'Part-Time'),
(22, 'Mariejeanne Trapp', 'Female', 'Buddha', 'Indonesian', 'Part-Time'),
(23, 'Chrisy Dunniom', 'Male', 'Christian Protestan', 'Indonesian', 'Part-Time'),
(24, 'Cecilla Zarfat', 'Female', 'Chatolic', 'Indonesian', 'Part-Time'),
(25, 'Nerta McAllan', 'Female', 'Buddha', 'Foreigner', 'Part-Time'),
(26, 'Jeffie Crosen', 'Male', 'Islam', 'Indonesian', 'Part-Time'),
(27, 'Frank Ackers', 'Male', 'Hindu', 'Indonesian', 'Part-Time'),
(28, 'Joseito Stuer', 'Male', 'Chatolic', 'Foreigner', 'Full-Time'),
(29, 'Raviv Mathers', 'Male', 'Christian Protestan', 'Foreigner', 'Part-Time'),
(30, 'Wain Silversmidt', 'Male', 'Islam', 'Foreigner', 'Part-Time'),
(31, 'John Steckings', 'Male', 'Christian Protestan', 'Indonesian', 'Part-Time'),
(32, 'Vita Garnett', 'Female', 'Islam', 'Foreigner', 'Full-Time'),
(33, 'Gerek Nijs', 'Male', 'Islam', 'Foreigner', 'Full-Time'),
(34, 'Zilvia Hincks', 'Female', 'Hindu', 'Foreigner', 'Full-Time'),
(35, 'Theda Marzellano', 'Female', 'Hindu', 'Foreigner', 'Full-Time'),
(36, 'Barron Garvagh', 'Male', 'Chatolic', 'Indonesian', 'Full-Time'),
(37, 'Carolyne Baudin', 'Female', 'Christian Protestan', 'Foreigner', 'Part-Time'),
(38, 'Amerigo Molnar', 'Male', 'Hindu', 'Foreigner', 'Part-Time'),
(39, 'Maryrose Ghirardi', 'Female', 'Islam', 'Foreigner', 'Part-Time'),
(40, 'Audra Alliban', 'Female', 'Islam', 'Indonesian', 'Full-Time'),
(41, 'Christye Tunmore', 'Female', 'Kong Hu Cu', 'Indonesian', 'Full-Time'),
(42, 'Nichols Bister', 'Male', 'Buddha', 'Indonesian', 'Part-Time'),
(43, 'Alverta Logesdale', 'Female', 'Islam', 'Indonesian', 'Part-Time'),
(44, 'Alicea Van Der Vlies', 'Female', 'Buddha', 'Indonesian', 'Part-Time'),
(45, 'Launce Vedyasov', 'Male', 'Islam', 'Foreigner', 'Part-Time'),
(46, 'Allen Stiling', 'Male', 'Islam', 'Indonesian', 'Part-Time'),
(47, 'Truda Scawton', 'Female', 'Chatolic', 'Indonesian', 'Part-Time'),
(48, 'Jelene Scammonden', 'Female', 'Buddha', 'Indonesian', 'Full-Time'),
(49, 'Kingston Bridgeman', 'Male', 'Kong Hu Cu', 'Foreigner', 'Part-Time'),
(50, 'Falkner Garbutt', 'Male', 'Christian Protestan', 'Indonesian', 'Full-Time'),
(51, 'Tracy Slinger', 'Male', 'Islam', 'Indonesian', 'Part-Time'),
(52, 'Gussi O\'Roan', 'Female', 'Kong Hu Cu', 'Foreigner', 'Full-Time'),
(53, 'John Caught', 'Male', 'Chatolic', 'Foreigner', 'Full-Time'),
(54, 'Marsiella Auchinleck', 'Female', 'Christian Protestan', 'Foreigner', 'Part-Time'),
(55, 'Pia Paradis', 'Female', 'Hindu', 'Indonesian', 'Part-Time'),
(56, 'Marigold Beldam', 'Female', 'Hindu', 'Indonesian', 'Full-Time'),
(57, 'Bart Heaney`', 'Male', 'Chatolic', 'Foreigner', 'Part-Time'),
(58, 'Morry Abrahmer', 'Male', 'Islam', 'Foreigner', 'Part-Time'),
(59, 'Samaria Benneyworth', 'Female', 'Islam', 'Indonesian', 'Full-Time'),
(60, 'Helene Irvin', 'Female', 'Hindu', 'Indonesian', 'Part-Time'),
(61, 'Vania Malshinger', 'Female', 'Islam', 'Foreigner', 'Part-Time'),
(62, 'Yul Verner', 'Male', 'Islam', 'Indonesian', 'Full-Time'),
(63, 'Henryetta Challender', 'Female', 'Kong Hu Cu', 'Foreigner', 'Part-Time'),
(64, 'Mavra Kuhlmey', 'Female', 'Christian Protestan', 'Indonesian', 'Part-Time'),
(65, 'Gunar Gothrup', 'Male', 'Christian Protestan', 'Indonesian', 'Part-Time'),
(66, 'Duke Echlin', 'Male', 'Christian Protestan', 'Foreigner', 'Part-Time'),
(67, 'Stern Levy', 'Male', 'Kong Hu Cu', 'Indonesian', 'Full-Time'),
(68, 'Modestia Warby', 'Female', 'Christian Protestan', 'Indonesian', 'Full-Time'),
(69, 'Humbert Leadbeater', 'Male', 'Hindu', 'Foreigner', 'Full-Time'),
(70, 'Joseito Mulrenan', 'Male', 'Buddha', 'Foreigner', 'Full-Time'),
(71, 'Cal Mongain', 'Male', 'Kong Hu Cu', 'Foreigner', 'Full-Time'),
(72, 'Gustie Pybus', 'Male', 'Islam', 'Indonesian', 'Full-Time'),
(73, 'Pavel McBrady', 'Male', 'Buddha', 'Foreigner', 'Part-Time'),
(74, 'Elisa Fillimore', 'Female', 'Islam', 'Indonesian', 'Part-Time'),
(75, 'Jud Foystone', 'Male', 'Hindu', 'Foreigner', 'Part-Time'),
(76, 'Seana Glossup', 'Female', 'Hindu', 'Indonesian', 'Part-Time'),
(77, 'Almeta Tirone', 'Female', 'Chatolic', 'Foreigner', 'Full-Time'),
(78, 'Paul Moyle', 'Male', 'Buddha', 'Indonesian', 'Full-Time'),
(79, 'Tawnya Puckring', 'Female', 'Buddha', 'Foreigner', 'Part-Time'),
(80, 'Hollis Tarling', 'Male', 'Buddha', 'Foreigner', 'Part-Time'),
(81, 'Domini Gillott', 'Female', 'Chatolic', 'Foreigner', 'Full-Time'),
(82, 'Beltran Grummitt', 'Male', 'Buddha', 'Foreigner', 'Full-Time'),
(83, 'Collin Sundin', 'Male', 'Hindu', 'Indonesian', 'Part-Time'),
(84, 'Grove Blewmen', 'Male', 'Kong Hu Cu', 'Foreigner', 'Full-Time'),
(85, 'Karel Dyett', 'Female', 'Islam', 'Foreigner', 'Full-Time'),
(86, 'Horten Anselmi', 'Male', 'Chatolic', 'Indonesian', 'Part-Time'),
(87, 'Arlette Titta', 'Female', 'Christian Protestan', 'Foreigner', 'Full-Time'),
(88, 'Fonzie Pottle', 'Male', 'Hindu', 'Indonesian', 'Full-Time'),
(89, 'Orville Aleixo', 'Male', 'Chatolic', 'Foreigner', 'Full-Time'),
(90, 'Roz Kettow', 'Female', 'Islam', 'Foreigner', 'Part-Time'),
(91, 'Kira Riddle', 'Female', 'Hindu', 'Indonesian', 'Part-Time'),
(92, 'Natalina Tithacott', 'Female', 'Chatolic', 'Foreigner', 'Full-Time'),
(93, 'Carey Bracher', 'Female', 'Chatolic', 'Foreigner', 'Full-Time'),
(94, 'Emalia Verner', 'Female', 'Islam', 'Foreigner', 'Full-Time'),
(95, 'Burke Carbin', 'Male', 'Christian Protestan', 'Indonesian', 'Part-Time'),
(96, 'Kare Starking', 'Female', 'Islam', 'Indonesian', 'Part-Time'),
(97, 'Almeta Keitley', 'Female', 'Buddha', 'Indonesian', 'Part-Time'),
(98, 'Grantley McGifford', 'Male', 'Chatolic', 'Indonesian', 'Full-Time'),
(99, 'Alta Pattison', 'Female', 'Christian Protestan', 'Indonesian', 'Part-Time'),
(100, 'Carrie MacCroary', 'Female', 'Chatolic', 'Foreigner', 'Part-Time'),
(101, 'Itch Newbery', 'Male', 'Islam', 'Foreigner', 'Full-Time'),
(102, 'Geneva Weathers', 'Female', 'Buddha', 'Indonesian', 'Full-Time'),
(103, 'Theobald Mcall', 'Male', 'Chatolic', 'Indonesian', 'Part-Time'),
(104, 'Cristobal Moreinu', 'Male', 'Islam', 'Indonesian', 'Part-Time'),
(105, 'Anastassia Parkeson', 'Female', 'Islam', 'Foreigner', 'Full-Time'),
(106, 'Minni Dibnah', 'Female', 'Islam', 'Foreigner', 'Part-Time'),
(107, 'Birgitta Sherman', 'Female', 'Kong Hu Cu', 'Foreigner', 'Full-Time'),
(109, 'Koral Jeacop', 'Female', 'Kong Hu Cu', 'Foreigner', 'Full-Time'),
(113, 'Lauralee Wordley', 'Female', 'Christian Protestan', 'Foreigner', 'Full-Time'),
(115, 'Hali Mapplebeck', 'Female', 'Kong Hu Cu', 'Indonesian', 'Full-Time'),
(117, 'Crin Digger', 'Female', 'Islam', 'Foreigner', 'Full-Time'),
(118, 'Legra Tubbs', 'Female', 'Hindu', 'Indonesian', 'Full-Time'),
(120, 'Emmalynn Blenkinsopp', 'Female', 'Christian Protestan', 'Indonesian', 'Full-Time'),
(121, 'Bel Ault', 'Female', 'Chatolic', 'Foreigner', 'Part-Time'),
(124, 'Devonne Sandham', 'Female', 'Chatolic', 'Foreigner', 'Part-Time'),
(125, 'Sybil Jolley', 'Female', 'Christian Protestan', 'Indonesian', 'Part-Time'),
(126, 'Tiffy MacKay', 'Female', 'Chatolic', 'Indonesian', 'Full-Time'),
(127, 'Lolita Wartnaby', 'Female', 'Hindu', 'Foreigner', 'Full-Time'),
(130, 'Vally Stear', 'Female', 'Chatolic', 'Indonesian', 'Part-Time'),
(132, 'Sandi Boate', 'Female', 'Kong Hu Cu', 'Foreigner', 'Full-Time'),
(133, 'Hermione Gentsch', 'Female', 'Chatolic', 'Indonesian', 'Full-Time'),
(134, 'Pamelina Treagus', 'Female', 'Chatolic', 'Indonesian', 'Part-Time'),
(135, 'Kendra Burchfield', 'Female', 'Buddha', 'Indonesian', 'Part-Time'),
(136, 'Marlane Heisler', 'Female', 'Islam', 'Foreigner', 'Full-Time'),
(137, 'Roxie Blackboro', 'Female', 'Christian Protestan', 'Foreigner', 'Full-Time'),
(138, 'Callie Sowersby', 'Female', 'Islam', 'Foreigner', 'Part-Time'),
(139, 'Fredi Usborn', 'Female', 'Islam', 'Indonesian', 'Part-Time'),
(140, 'Felita Thurlborn', 'Female', 'Kong Hu Cu', 'Foreigner', 'Full-Time'),
(142, 'Rania Dakers', 'Female', 'Islam', 'Indonesian', 'Part-Time'),
(143, 'Latashia Maylour', 'Female', 'Hindu', 'Foreigner', 'Part-Time'),
(144, 'Adelheid Atteridge', 'Female', 'Kong Hu Cu', 'Indonesian', 'Full-Time'),
(145, 'Arlana Bescoby', 'Female', 'Buddha', 'Indonesian', 'Part-Time'),
(146, 'Shirlene Kilian', 'Female', 'Buddha', 'Foreigner', 'Full-Time'),
(148, 'Hally Shoesmith', 'Female', 'Chatolic', 'Indonesian', 'Full-Time');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `generation` int(3) DEFAULT NULL,
  `major` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `class` int(2) NOT NULL,
  `gender` varchar(10) COLLATE utf8_bin NOT NULL,
  `religion` varchar(20) COLLATE utf8_bin NOT NULL,
  `Race` varchar(10) COLLATE utf8_bin NOT NULL,
  `status` varchar(128) COLLATE utf8_bin NOT NULL DEFAULT 'Active',
  `occupation` varchar(128) COLLATE utf8_bin DEFAULT 'Unemployed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `name`, `generation`, `major`, `class`, `gender`, `religion`, `Race`, `status`, `occupation`) VALUES
(2, 'Conrade Chinnery', 12, 'Science', 2, 'Male', 'Buddha', 'Foreigner', 'Active', NULL),
(3, 'Kaye Presland', 12, 'Science', 5, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(4, 'Charmane Brosh', 12, 'Science', 2, 'Female', 'Buddha', 'Indonesian', 'Active', NULL),
(5, 'Marven McCrann', 12, 'Science', 9, 'Male', 'Hindu', 'Foreigner', 'Active', NULL),
(6, 'George Reily', 12, 'Science', 10, 'Male', 'Christian Protestan', 'Foreigner', 'Active', NULL),
(7, 'Garrik Hardwidge', 12, 'Science', 7, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(8, 'Colene Eidler', 12, 'Science', 9, 'Female', 'Hindu', 'Foreigner', 'Active', NULL),
(9, 'Ruben O\' Scallan', 12, 'Science', 5, 'Female', 'Christian Protestan', 'Foreigner', 'Active', NULL),
(11, 'Christiano Bartocci', 12, 'Science', 9, 'Male', 'Buddha', 'Indonesian', 'Active', NULL),
(15, 'Beniamino Cowburn', 12, 'Science', 9, 'Male', 'Islam', 'Foreigner', 'Active', NULL),
(18, 'Roby Letham', 12, 'Science', 8, 'Female', 'Buddha', 'Foreigner', 'Active', NULL),
(19, 'Atlante Charity', 12, 'Science', 3, 'Female', 'Kong Hu Cu', 'Indonesian', 'Active', NULL),
(20, 'Tybie Ingilson', 12, 'Science', 7, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(21, 'Devland Boarder', 12, 'Science', 2, 'Female', 'Buddha', 'Indonesian', 'Active', NULL),
(22, 'Bertine Verring', 12, 'Science', 10, 'Female', 'Kong Hu Cu', 'Foreigner', 'Active', NULL),
(24, 'Leone Habbon', 12, 'Science', 2, 'Male', 'Christian Protestan', 'Foreigner', 'Active', NULL),
(25, 'Mehetabel Standingfo', 12, 'Science', 5, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(26, 'Edna Shallow', 11, 'Science', 9, 'Female', 'Buddha', 'Indonesian', 'Active', NULL),
(27, 'Nikaniki Basketfield', 12, 'Science', 4, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(28, 'Haleigh Theuss', 12, 'Science', 3, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(29, 'Reid Stennine', 12, 'Science', 10, 'Male', 'Hindu', 'Indonesian', 'Active', NULL),
(30, 'Jehu Simmgen', 11, 'Science', 9, 'Male', 'Christian Protestan', 'Foreigner', 'Active', NULL),
(31, 'Aviva Roycraft', 12, 'Science', 7, 'Female', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(32, 'Janice Slopier', 12, 'Science', 3, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(34, 'Candida Pahler', 12, 'Science', 8, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(37, 'Ed Jaggar', 12, 'Science', 4, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(38, 'Angelle Epdell', 11, 'Science', 2, 'Female', 'Christian Protestan', 'Foreigner', 'Active', NULL),
(39, 'Hedvige Winny', 12, 'Science', 7, 'Male', 'Kong Hu Cu', 'Indonesian', 'Active', NULL),
(40, 'Gardiner Jerram', 12, 'Science', 4, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(44, 'Ase Nuccii', 11, 'Science', 7, 'Male', 'Christian Protestan', 'Foreigner', 'Active', NULL),
(46, 'Dottie Kernar', 12, 'Science', 4, 'Female', 'Hindu', 'Indonesian', 'Active', NULL),
(47, 'Flossie McMoyer', 11, 'Science', 9, 'Female', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(48, 'Rancell Brellin', 12, 'Science', 5, 'Male', 'Hindu', 'Indonesian', 'Active', NULL),
(49, 'Stillmann Headon', 11, 'Science', 5, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(50, 'Holmes Martini', 11, 'Science', 7, 'Male', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(52, 'Terri-jo Drohane', 12, 'Science', 8, 'Female', 'Hindu', 'Indonesian', 'Active', NULL),
(55, 'Miof mela Josephson', 11, 'Science', 5, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(56, 'Mariellen Coleiro', 11, 'Science', 5, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(57, 'Brenden Santacrole', 11, 'Science', 2, 'Male', 'Islam', 'Foreigner', 'Active', NULL),
(60, 'Aurthur Marskell', 11, 'Science', 2, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(61, 'Jamison Dewar', 11, 'Science', 5, 'Female', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(62, 'Inness Galiero', 12, 'Science', 10, 'Female', 'Hindu', 'Foreigner', 'Active', NULL),
(64, 'Alfonso Firsby', 11, 'Science', 9, 'Female', 'Hindu', 'Foreigner', 'Active', NULL),
(65, 'Winne Murr', 11, 'Science', 10, 'Female', 'Buddha', 'Indonesian', 'Active', NULL),
(66, 'Fields Abbe', 11, 'Science', 2, 'Male', 'Islam', 'Foreigner', 'Active', NULL),
(67, 'Mathew McNee', 11, 'Science', 4, 'Male', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(68, 'Madella Longfield', 12, 'Science', 3, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(69, 'Sammy Withinshaw', 10, 'Science', 9, 'Male', 'Buddha', 'Foreigner', 'Active', NULL),
(71, 'Terrie Siely', 10, 'Science', 5, 'Female', 'Buddha', 'Foreigner', 'Active', NULL),
(73, 'Preston Caldayrou', 11, 'Science', 3, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(75, 'Nick Clemow', 11, 'Science', 7, 'Male', 'Islam', 'Foreigner', 'Active', NULL),
(76, 'Costa Edmenson', 11, 'Science', 4, 'Male', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(77, 'Emmalee Casterton', 10, 'Science', 9, 'Male', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(78, 'Petr Bowshire', 11, 'Science', 3, 'Male', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(79, 'Vite Cline', 11, 'Science', 7, 'Female', 'Chatolic', 'Foreigner', 'Active', NULL),
(80, 'Rhoda Fley', 11, 'Science', 4, 'Female', 'Hindu', 'Indonesian', 'Active', NULL),
(81, 'Mindy Tomadoni', 12, 'Science', 8, 'Female', 'Hindu', 'Foreigner', 'Active', NULL),
(82, 'Ruben Feveryear', 11, 'Science', 10, 'Male', 'Kong Hu Cu', 'Foreigner', 'Active', NULL),
(83, 'Stu Bene', 11, 'Science', 10, 'Male', 'Chatolic', 'Foreigner', 'Active', NULL),
(84, 'Rakel Pennacci', 11, 'Science', 4, 'Female', 'Buddha', 'Foreigner', 'Active', NULL),
(87, 'Kevyn Sully', 10, 'Science', 4, 'Male', 'Chatolic', 'Foreigner', 'Active', NULL),
(88, 'Findlay Ditzel', 11, 'Science', 8, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(89, 'Bekki Mandifield', 11, 'Science', 10, 'Female', 'Buddha', 'Foreigner', 'Active', NULL),
(90, 'Alexis Danilovic', 11, 'Science', 3, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(94, 'Harri Newiss', 11, 'Science', 3, 'Male', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(95, 'Kelwin Balling', 10, 'Science', 4, 'Male', 'Kong Hu Cu', 'Indonesian', 'Active', NULL),
(96, 'Gordie Pettitt', 11, 'Science', 8, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(97, 'Herbie Quantrill', 11, 'Science', 8, 'Female', 'Chatolic', 'Indonesian', 'Active', NULL),
(99, 'Salim Souttar', 10, 'Science', 5, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(100, 'Archaimbaud Cranksha', 10, 'Science', 4, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(105, 'Vikki Cowsby', 10, 'Science', 4, 'Female', 'Christian Protestan', 'Indonesian', 'Active', NULL),
(106, 'Colan Sarl', 10, 'Science', 9, 'Female', 'Chatolic', 'Indonesian', 'Active', NULL),
(107, 'Dolf Luciano', 10, 'Science', 4, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(109, 'Joyan Gannon', 11, 'Science', 10, 'Male', 'Buddha', 'Foreigner', 'Active', NULL),
(110, 'Aliza Giannini', 11, 'Science', 8, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(111, 'Florence Vasechkin', 10, 'Science', 10, 'Female', 'Hindu', 'Indonesian', 'Active', NULL),
(113, 'Carlen Seifenmacher', 10, 'Science', 7, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(114, 'Monah Hellings', 10, 'Science', 3, 'Female', 'Chatolic', 'Foreigner', 'Active', NULL),
(115, 'Saul Newvill', 10, 'Science', 9, 'Female', 'Buddha', 'Indonesian', 'Active', NULL),
(121, 'Barry McFetrich', 10, 'Science', 3, 'Male', 'Chatolic', 'Foreigner', 'Active', NULL),
(126, 'Allina Hendrik', 10, 'Science', 9, 'Female', 'Kong Hu Cu', 'Indonesian', 'Active', NULL),
(127, 'Horatio Altree', 12, 'Social', 4, 'Male', 'Buddha', 'Indonesian', 'Active', NULL),
(128, 'Jenni Mallebone', 10, 'Science', 8, 'Female', 'Hindu', 'Indonesian', 'Active', NULL),
(130, 'Eldin Dalman', 10, 'Science', 10, 'Male', 'Chatolic', 'Foreigner', 'Active', NULL),
(131, 'Tisha Stitwell', 12, 'Social', 4, 'Male', 'Islam', 'Foreigner', 'Active', NULL),
(132, 'Luciana Askem', 10, 'Science', 7, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(133, 'Lisette Irving', 10, 'Science', 10, 'Female', 'Hindu', 'Indonesian', 'Active', NULL),
(134, 'Jolie Dayton', 10, 'Science', 5, 'Male', 'Chatolic', 'Foreigner', 'Active', NULL),
(135, 'Kit Keford', 10, 'Science', 5, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(136, 'Lira Elis', 12, 'Social', 4, 'Female', 'Chatolic', 'Indonesian', 'Active', NULL),
(137, 'Mercy Godwyn', 10, 'Science', 10, 'Female', 'Buddha', 'Indonesian', 'Active', NULL),
(140, 'Cecilius Simione', 10, 'Science', 8, 'Female', 'Hindu', 'Foreigner', 'Active', NULL),
(144, 'Aimee Howden', 10, 'Social', 5, 'Male', 'Kong Hu Cu', 'Indonesian', 'Active', NULL),
(145, 'Nerta Jantot', 10, 'Science', 8, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(146, 'Patton Sinderson', 12, 'Social', 5, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(149, 'Ainslee Falck', 12, 'Social', 4, 'Female', 'Chatolic', 'Foreigner', 'Active', NULL),
(157, 'Afton Angliss', 10, 'Science', 3, 'Male', 'Chatolic', 'Indonesian', 'Active', NULL),
(158, 'Rad Saville', 10, 'Science', 8, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(160, 'Marcela Di Matteo', 10, 'Science', 2, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(164, 'Kliment Lamberts', 10, 'Science', 3, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(165, 'Maryjane Elsegood', 10, 'Science', 8, 'Male', 'Chatolic', 'Foreigner', 'Active', NULL),
(167, 'Aluino Woolpert', 11, 'Social', 4, 'Female', 'Buddha', 'Indonesian', 'Active', NULL),
(168, 'Marcelo Toulch', 10, 'Science', 3, 'Male', 'Buddha', 'Indonesian', 'Active', NULL),
(169, 'Bernete Machon', 12, 'Social', 5, 'Male', 'Kong Hu Cu', 'Foreigner', 'Active', NULL),
(170, 'Tynan Marusic', 12, 'Social', 5, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(173, 'Janelle Randalson', 10, 'Science', 7, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(174, 'Efrem O\'Coskerry', 10, 'Science', 7, 'Male', 'Buddha', 'Indonesian', 'Active', NULL),
(177, 'Paloma Dominichelli', 10, 'Science', 7, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(179, 'Si Brahams', 12, 'Social', 3, 'Male', 'Hindu', 'Indonesian', 'Active', NULL),
(186, 'Edmon Ausiello', 10, 'Science', 2, 'Male', 'Chatolic', 'Foreigner', 'Active', NULL),
(187, 'Devi Raggett', 12, 'Social', 5, 'Male', 'Buddha', 'Indonesian', 'Active', NULL),
(188, 'Ruthann Shawdforth', 12, 'Social', 3, 'Male', 'Hindu', 'Indonesian', 'Active', NULL),
(190, 'Reid Sprake', 11, 'Social', 4, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(201, 'Antonius Wycliff', 12, 'Social', 3, 'Male', 'Islam', 'Foreigner', 'Active', NULL),
(203, 'Ede Vanyashkin', 11, 'Social', 4, 'Male', 'Buddha', 'Indonesian', 'Active', NULL),
(204, 'Carson Ascroft', 12, 'Social', 3, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(205, 'Jason Dudman', 11, 'Social', 3, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(207, 'Uriel Dunn', 10, 'Science', 2, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(210, 'Fancie De Maria', 12, 'Science', 1, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(211, 'Bevina Gear', 11, 'Social', 3, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(212, 'Solly Faulkener', 11, 'Social', 4, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(219, 'Davide Scanlan', 10, 'Science', 2, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(221, 'Genvieve Martinho', 10, 'Science', 2, 'Female', 'Kong Hu Cu', 'Foreigner', 'Active', NULL),
(222, 'Reiko Risson', 11, 'Social', 5, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(224, 'Umberto Awcoate', 11, 'Social', 3, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(236, 'Gardiner Cottey', 12, 'Science', 1, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(237, 'Ellary Gaitung', 12, 'Science', 1, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(238, 'Udell Ausello', 10, 'Social', 4, 'Male', 'Hindu', 'Indonesian', 'Active', NULL),
(240, 'Harland Mabley', 10, 'Social', 4, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(242, 'Dorothee Thurlborn', 12, 'Science', 6, 'Male', 'Hindu', 'Foreigner', 'Active', NULL),
(245, 'Richie Taplin', 11, 'Social', 3, 'Male', 'Hindu', 'Indonesian', 'Active', NULL),
(246, 'Nonah O\'Finan', 12, 'Science', 6, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(248, 'Dulcy Linthead', 11, 'Social', 5, 'Male', 'Islam', 'Foreigner', 'Active', NULL),
(249, 'Blayne Salvage', 12, 'Science', 1, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(250, 'Brok Stonelake', 10, 'Social', 4, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(253, 'Kelley Shepard', 10, 'Social', 3, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(259, 'Floyd Troyes', 12, 'Social', 2, 'Male', 'Hindu', 'Indonesian', 'Active', NULL),
(260, 'Kareem Cripin', 10, 'Social', 4, 'Female', 'Christian Protestan', 'Foreigner', 'Active', NULL),
(261, 'Caro Moff', 12, 'Social', 2, 'Male', 'Hindu', 'Indonesian', 'Active', NULL),
(262, 'Eustacia Prier', 11, 'Social', 5, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(264, 'Randy Juszkiewicz', 10, 'Social', 3, 'Male', 'Hindu', 'Foreigner', 'Active', NULL),
(265, 'Germaine Yoxall', 10, 'Social', 4, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(270, 'Von Fulloway', 11, 'Science', 1, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(271, 'Leonora Rishman', 12, 'Social', 2, 'Male', 'Kong Hu Cu', 'Indonesian', 'Active', NULL),
(272, 'Everett Alenichev', 11, 'Science', 1, 'Male', 'Islam', 'Foreigner', 'Active', NULL),
(275, 'Niel Cholmondeley', 11, 'Social', 5, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(278, 'Doralia Hayman', 11, 'Science', 1, 'Female', 'Islam', 'Foreigner', 'Active', NULL),
(282, 'Chad Gentric', 10, 'Social', 3, 'Male', 'Buddha', 'Indonesian', 'Active', NULL),
(283, 'Benoit Leyninye', 12, 'Science', 6, 'Female', 'Islam', 'Indonesian', 'Active', NULL),
(284, 'Livy Stummeyer', 12, 'Science', 6, 'Female', 'Buddha', 'Indonesian', 'Active', NULL),
(291, 'Bogart Knewstubb', 10, 'Social', 5, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(293, 'Neddie Tuck', 10, 'Social', 3, 'Female', 'Hindu', 'Foreigner', 'Active', NULL),
(295, 'Verney Esselin', 10, 'Social', 5, 'Male', 'Islam', 'Indonesian', 'Active', NULL),
(296, 'Guenna Redgrove', 12, 'Social', 2, 'Female', 'Hindu', 'Foreigner', 'Active', NULL),
(300, 'Franklyn MacLeod', 11, 'Science', 1, 'Male', 'Chatolic', 'Indonesian', 'Active', NULL),
(302, 'Deeyn Hardington', 10, 'Social', 3, 'Female', 'Christian Protestan', 'Foreigner', 'Graduate', 'Work'),
(307, 'Dominick Hugk', 11, 'Social', 2, 'Male', 'Hindu', 'Foreigner', 'Graduate', 'Work'),
(308, 'Danielle Howles', 11, 'Science', 6, 'Male', 'Islam', 'Indonesian', 'Graduate', 'Work'),
(311, 'Koralle Adney', 10, 'Social', 5, 'Male', 'Christian Protestan', 'Foreigner', 'Graduate', 'Work'),
(313, 'Ardella Symes', 11, 'Social', 2, 'Female', 'Buddha', 'Foreigner', 'Graduate', 'Work'),
(317, 'Raleigh Eggar', 11, 'Social', 2, 'Male', 'Kong Hu Cu', 'Indonesian', 'Active', 'Work'),
(319, 'Berny Parratt', 11, 'Social', 2, 'Male', 'Chatolic', 'Indonesian', 'Graduate', 'Unemployed'),
(322, 'Lynsey Mardell', 10, 'Science', 1, 'Female', 'Chatolic', 'Indonesian', 'Graduate', 'College'),
(323, 'Grethel Simioni', 11, 'Science', 6, 'Female', 'Chatolic', 'Foreigner', 'Graduate', 'College'),
(326, 'Madalena Coom', 10, 'Science', 1, 'Female', 'Christian Protestan', 'Foreigner', 'Graduate', 'Work'),
(328, 'Teddie Pentony', 10, 'Social', 5, 'Male', 'Islam', 'Foreigner', 'Graduate', 'Work'),
(336, 'Mickey Toomer', 11, 'Science', 6, 'Female', 'Islam', 'Indonesian', 'Graduate', 'College'),
(337, 'Maurise McIndoe', 10, 'Science', 1, 'Male', 'Christian Protestan', 'Foreigner', 'Graduate', 'Work'),
(340, 'Fredelia Jaggar', 11, 'Science', 6, 'Female', 'Buddha', 'Indonesian', 'Graduate', 'College'),
(344, 'Lindsay Shoorbrooke', 10, 'Science', 1, 'Female', 'Christian Protestan', 'Indonesian', 'Graduate', 'Work'),
(346, 'Jacquie Astupenas', 11, 'Science', 6, 'Male', 'Buddha', 'Foreigner', 'Graduate', 'Work'),
(353, 'Bevvy Scatcher', 10, 'Science', 1, 'Male', 'Islam', 'Indonesian', 'Graduate', 'Work'),
(354, 'Dilan Brumham', 10, 'Social', 2, 'Female', 'Islam', 'Indonesian', 'Graduate', 'Work'),
(374, 'Astrix Seares', 12, 'Social', 1, 'Male', 'Christian Protestan', 'Indonesian', 'Graduate', 'College'),
(383, 'Albina Romain', 10, 'Science', 6, 'Male', 'Islam', 'Indonesian', 'Graduate', 'College'),
(390, 'Rennie Yanne', 12, 'Social', 1, 'Female', 'Islam', 'Foreigner', 'Graduate', 'College'),
(394, 'Scotti Klass', 10, 'Social', 2, 'Male', 'Islam', 'Foreigner', 'Graduate', 'College'),
(395, 'Janella Colliard', 10, 'Science', 6, 'Male', 'Islam', 'Indonesian', 'Graduate', 'College'),
(399, 'Selig Saipy', 12, 'Social', 1, 'Male', 'Hindu', 'Foreigner', 'Graduate', 'College'),
(404, 'Rodina Daintree', 10, 'Social', 2, 'Female', 'Chatolic', 'Indonesian', 'Graduate', 'College'),
(414, 'Horton Duly', 10, 'Social', 2, 'Female', 'Christian Protestan', 'Indonesian', 'Graduate', 'College'),
(431, 'Teodora Scamadin', 10, 'Social', 2, 'Female', 'Christian Protestan', 'Indonesian', 'Graduate', 'College'),
(438, 'Julita Spurriar', 12, 'Social', 1, 'Female', 'Buddha', 'Foreigner', 'Graduate', 'College'),
(444, 'Raphaela Leidl', 10, 'Science', 6, 'Male', 'Islam', 'Indonesian', 'Graduate', 'College'),
(449, 'Ambur Riba', 10, 'Science', 6, 'Male', 'Chatolic', 'Indonesian', 'Graduate', 'College'),
(455, 'Nananne Jorczyk', 11, 'Social', 1, 'Female', 'Christian Protestan', 'Foreigner', 'Graduate', 'College'),
(456, 'Natty Ralling', 11, 'Social', 1, 'Female', 'Buddha', 'Foreigner', 'Graduate', 'College'),
(460, 'Emmet Monkeman', 11, 'Social', 1, 'Male', 'Chatolic', 'Foreigner', 'Graduate', 'College'),
(466, 'Quinlan Swindley', 11, 'Social', 1, 'Male', 'Hindu', 'Foreigner', 'Graduate', 'College'),
(472, 'Stanly Hayhurst', 10, 'Social', 1, 'Male', 'Chatolic', 'Foreigner', 'Graduate', 'College'),
(475, 'Theodore Whitehouse', 10, 'Social', 1, 'Male', 'Islam', 'Indonesian', 'Graduate', 'College'),
(487, 'Ezmeralda Treamayne', 10, 'Social', 1, 'Female', 'Kong Hu Cu', 'Foreigner', 'Graduate', 'College'),
(491, 'Siobhan Tallyn', 10, 'Social', 1, 'Male', 'Hindu', 'Foreigner', 'Graduate', 'College'),
(494, 'Fay Dinesen', 10, 'Social', 1, 'Male', 'Islam', 'Indonesian', 'Graduate', 'College'),
(883, 'Berthe Farden', 12, 'Science', 12, 'Male', 'Buddha', 'Foreigner', 'Graduate', 'College'),
(885, 'Derry McLewd', 12, 'Science', 12, 'Male', 'Kong Hu Cu', 'Foreigner', 'Graduate', 'College'),
(892, 'Dena Eva', 12, 'Science', 12, 'Female', 'Buddha', 'Indonesian', 'Graduate', 'College'),
(894, 'Vinny Agott', 12, 'Science', 12, 'Male', 'Kong Hu Cu', 'Foreigner', 'Graduate', 'College'),
(895, 'Ibbie Merck', 11, 'Science', 12, 'Male', 'Hindu', 'Foreigner', 'Graduate', 'College'),
(903, 'Ailey Dolley', 11, 'Science', 12, 'Female', 'Islam', 'Indonesian', 'Dropout', 'Unemployed'),
(916, 'Bertina Wookey', 11, 'Science', 12, 'Female', 'Buddha', 'Foreigner', 'Dropout', 'Work'),
(920, 'Petronia England', 12, 'Science', 11, 'Female', 'Hindu', 'Indonesian', 'Dropout', 'Unemployed'),
(922, 'Kingsly Girodias', 11, 'Science', 12, 'Male', 'Hindu', 'Foreigner', 'Dropout', 'Work'),
(929, 'Seth Harwin', 10, 'Science', 12, 'Male', 'Kong Hu Cu', 'Indonesian', 'Dropout', 'Work'),
(932, 'Prudi Carriage', 12, 'Science', 11, 'Male', 'Hindu', 'Foreigner', 'Dropout', 'Unemployed'),
(937, 'Maggie Skinley', 10, 'Science', 12, 'Female', 'Hindu', 'Foreigner', 'Dropout', 'Unemployed'),
(943, 'Pepita Vasyunichev', 11, 'Science', 11, 'Female', 'Chatolic', 'Foreigner', 'Dropout', 'College'),
(956, 'Alvan Inderwick', 10, 'Science', 12, 'Male', 'Kong Hu Cu', 'Foreigner', 'Dropout', 'Unemployed'),
(964, 'Aloysius Basindale', 10, 'Science', 12, 'Male', 'Islam', 'Indonesian', 'Dropout', 'College'),
(966, 'Jedidiah Currum', 11, 'Science', 11, 'Female', 'Kong Hu Cu', 'Foreigner', 'Dropout', 'Unemployed'),
(988, 'Viviene O\'Sesnane', 10, 'Science', 11, 'Male', 'Hindu', 'Indonesian', 'Dropout', 'College'),
(992, 'Shem McRobbie', 10, 'Science', 11, 'Male', 'Kong Hu Cu', 'Foreigner', 'Dropout', 'College'),
(995, 'Inness Adamczyk', 10, 'Science', 11, 'Male', 'Islam', 'Indonesian', 'Dropout', 'Unemployed'),
(999, 'Estelle Vinnick', 10, 'Science', 12, 'Female', 'Hindu', 'Indonesian', 'Dropout', 'Unemployed'),
(1000, 'Bambang', 10, 'Science', 6, 'Male', 'Islam', 'Indonesian', 'Dropout', 'Unemployed'),
(1003, 'Biggu Dicku', 69, NULL, 0, 'Male', 'Kong Hu Cu', 'Foreigner', 'Graduate', 'Work');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id_subject` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `major` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id_subject`, `name`, `major`) VALUES
(1, 'Arts', 'Science'),
(2, 'Arts', 'Social'),
(3, 'Math', 'Science'),
(4, 'Math', 'Social'),
(5, 'Indonesian Language', 'Science'),
(6, 'Indonesian Language', 'Social'),
(7, 'English', 'Science'),
(8, 'English', 'Social'),
(9, 'Physics', 'Science'),
(11, 'Chemistry', 'Science'),
(13, 'Biology', 'Science'),
(16, 'Economics', 'Social'),
(18, 'Sociology', 'Social'),
(20, 'Geography', 'Social');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finance_asset`
--
ALTER TABLE `finance_asset`
  ADD PRIMARY KEY (`id_asset`);

--
-- Indexes for table `finance_cashflow`
--
ALTER TABLE `finance_cashflow`
  ADD PRIMARY KEY (`id_cashflow`);

--
-- Indexes for table `finance_revenue`
--
ALTER TABLE `finance_revenue`
  ADD PRIMARY KEY (`id_revenue`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `record_graduate`
--
ALTER TABLE `record_graduate`
  ADD PRIMARY KEY (`id_graduate`),
  ADD KEY `id` (`id_student`);

--
-- Indexes for table `record_payment`
--
ALTER TABLE `record_payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD UNIQUE KEY `year` (`year`,`id_student`),
  ADD KEY `id` (`id_student`);

--
-- Indexes for table `record_score`
--
ALTER TABLE `record_score`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `id` (`id_student`),
  ADD KEY `record_score_ibfk_2` (`id_subject`);

--
-- Indexes for table `record_suspension`
--
ALTER TABLE `record_suspension`
  ADD PRIMARY KEY (`id_suspension`),
  ADD KEY `id` (`id_student`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_subject`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finance_asset`
--
ALTER TABLE `finance_asset`
  MODIFY `id_asset` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `finance_cashflow`
--
ALTER TABLE `finance_cashflow`
  MODIFY `id_cashflow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `finance_revenue`
--
ALTER TABLE `finance_revenue`
  MODIFY `id_revenue` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `record_payment`
--
ALTER TABLE `record_payment`
  MODIFY `id_payment` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3000;

--
-- AUTO_INCREMENT for table `record_score`
--
ALTER TABLE `record_score`
  MODIFY `id_score` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9234;

--
-- AUTO_INCREMENT for table `record_suspension`
--
ALTER TABLE `record_suspension`
  MODIFY `id_suspension` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `record_graduate`
--
ALTER TABLE `record_graduate`
  ADD CONSTRAINT `record_graduate_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`) ON DELETE CASCADE;

--
-- Constraints for table `record_payment`
--
ALTER TABLE `record_payment`
  ADD CONSTRAINT `record_payment_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`) ON DELETE CASCADE;

--
-- Constraints for table `record_score`
--
ALTER TABLE `record_score`
  ADD CONSTRAINT `record_score_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`) ON DELETE CASCADE,
  ADD CONSTRAINT `record_score_ibfk_2` FOREIGN KEY (`id_subject`) REFERENCES `subject` (`id_subject`) ON DELETE CASCADE;

--
-- Constraints for table `record_suspension`
--
ALTER TABLE `record_suspension`
  ADD CONSTRAINT `record_suspension_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
