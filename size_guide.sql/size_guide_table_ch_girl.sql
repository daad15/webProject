
-- --------------------------------------------------------

--
-- Table structure for table `ch_girl`
--

CREATE TABLE `ch_girl` (
  `g_id` int(30) NOT NULL,
  `g_height_in` varchar(30) DEFAULT NULL,
  `g_chest_in` double DEFAULT NULL,
  `g_waist_in` double DEFAULT NULL,
  `g_hips_in` double DEFAULT NULL,
  `g_height_cm` varchar(30) DEFAULT NULL,
  `g_chest_cm` double DEFAULT NULL,
  `g_waist_cm` double DEFAULT NULL,
  `g_hips_cm` double DEFAULT NULL,
  `g_us` varchar(30) DEFAULT NULL,
  `g_uk` varchar(30) DEFAULT NULL,
  `g_eur` varchar(30) DEFAULT NULL,
  `g_int` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ch_girl`
--

INSERT INTO `ch_girl` (`g_id`, `g_height_in`, `g_chest_in`, `g_waist_in`, `g_hips_in`, `g_height_cm`, `g_chest_cm`, `g_waist_cm`, `g_hips_cm`, `g_us`, `g_uk`, `g_eur`, `g_int`) VALUES
(1, '51-53', 28, 25, 29.5, '129.5-134.5', 71, 63.5, 75, '8', '7-8', '128', 'M'),
(2, '53-55', 29, 26, 30.5, '134.5-140', 73.5, 66, 77.5, '10', '9-10', '140', 'L'),
(3, '55-58', 30.5, 27, 32, '140-147', 77.5, 68.5, 81, '12', '11-12', '152', 'L'),
(4, '58-60', 31.5, 28, 33, '147-152.5', 80, 71, 84, '14', '13-14', '164', 'XL'),
(5, '60-62', 33, 29, 34.5, '152.5-157.5', 84, 73.5, 87.5, '16', '15-16', '-', 'XL'),
(6, '60-62', 34, 30, 35.5, '152.5-157.5', 86, 76, 90, '18', '17-18', '-', 'XXL'),
(7, '60-62', 35.5, 31, 37, '152.5-157.5', 90, 79, 94, '20', '19-20', '-', 'XXL');
