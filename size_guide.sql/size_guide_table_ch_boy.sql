
-- --------------------------------------------------------

--
-- Table structure for table `ch_boy`
--

CREATE TABLE `ch_boy` (
  `b_id` int(30) NOT NULL,
  `b_height_in` varchar(30) DEFAULT NULL,
  `b_chest_in` double DEFAULT NULL,
  `b_waist_in` double DEFAULT NULL,
  `b_hips_in` double DEFAULT NULL,
  `b_height_cm` varchar(30) DEFAULT NULL,
  `b_chest_cm` double DEFAULT NULL,
  `b_waist_cm` double DEFAULT NULL,
  `b_hips_cm` double DEFAULT NULL,
  `b_us` varchar(30) DEFAULT NULL,
  `b_eur` varchar(10) DEFAULT NULL,
  `b_uk` varchar(30) DEFAULT NULL,
  `b_int` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ch_boy`
--

INSERT INTO `ch_boy` (`b_id`, `b_height_in`, `b_chest_in`, `b_waist_in`, `b_hips_in`, `b_height_cm`, `b_chest_cm`, `b_waist_cm`, `b_hips_cm`, `b_us`, `b_eur`, `b_uk`, `b_int`) VALUES
(1, '50-52', 26.5, 24.5, 27.5, '127-132', 67, 62, 70, '8', '128', '7-8', 'M'),
(2, '52-55', 27, 25.5, 28.5, '132-140', 68.5, 64.5, 72, '10', '140', '9-10', 'L'),
(3, '55-58', 28, 26.5, 30, '140-147', 71, 67, 76, '12', '152', '11-12', 'L'),
(4, '58-60', 29.5, 27.5, 31.5, '147-152.5', 75, 70, 80, '14', '164', '13-14', 'XL'),
(5, '60-64', 33, 29, 34.5, '152.5-157.5', 84, 73.5, 87.5, '16', '-', '15-16', 'XL'),
(6, '60-64', 34, 30, 35.5, '152.5-157.5', 86, 76, 90, '18', '-', '17-18', 'XXL'),
(7, '60-64', 35.5, 31, 37, '152.5-157.5', 90, 79, 94, '20', '-', '19-20', 'XXL');
