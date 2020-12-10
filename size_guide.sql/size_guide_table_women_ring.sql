
-- --------------------------------------------------------

--
-- Table structure for table `women_ring`
--

CREATE TABLE `women_ring` (
  `wr_id` int(11) NOT NULL,
  `wr_int` varchar(30) DEFAULT NULL,
  `wr_cir_mm` int(11) DEFAULT NULL,
  `wr_cir_inch` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_ring`
--

INSERT INTO `women_ring` (`wr_id`, `wr_int`, `wr_cir_mm`, `wr_cir_inch`) VALUES
(1, '4', 48, 1.84),
(2, '4.5', 49, 1.89),
(3, '5', 51, 1.94),
(4, '5.5', 52, 1.99),
(5, '6', 53, 2.04),
(6, '6.5', 55, 2.09),
(7, '7', 56, 2.19),
(8, '7.5', 57, 2.24),
(9, '8', 58, 2.29),
(10, '8.5', 59, 2.29),
(11, '9', 61, 2.34),
(12, '9.5', 61, 2.39),
(13, '10', 62, 2.44),
(14, '10.5', 63, 2.49),
(15, '11', 65, 2.54),
(16, '11.5', 66, 2.59),
(17, '12', 68, 2.65);
