
-- --------------------------------------------------------

--
-- Table structure for table `baby_beany`
--

CREATE TABLE `baby_beany` (
  `bb_id` int(10) NOT NULL,
  `bb_age` varchar(30) DEFAULT NULL,
  `bb_head_in` int(30) DEFAULT NULL,
  `bb_head_cm` int(30) DEFAULT NULL,
  `bb_int` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baby_beany`
--

INSERT INTO `baby_beany` (`bb_id`, `bb_age`, `bb_head_in`, `bb_head_cm`, `bb_int`) VALUES
(1, '0-6 أشهر', 16, 40, 'XXS'),
(2, '6-12 شهر', 18, 45, 'XS'),
(3, '12-24 شهر', 20, 50, 'S');
