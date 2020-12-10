
-- --------------------------------------------------------

--
-- Table structure for table `youth_thoub`
--

CREATE TABLE `youth_thoub` (
  `mth_id` int(30) NOT NULL,
  `mth_size` varchar(30) DEFAULT NULL,
  `mth_length` varchar(30) DEFAULT NULL,
  `mth_chest` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youth_thoub`
--

INSERT INTO `youth_thoub` (`mth_id`, `mth_size`, `mth_length`, `mth_chest`) VALUES
(1, '34 S', '86.5', '35'),
(2, '34 M', '86.5', '37'),
(3, '34 L', '86.5', '41'),
(4, '35 S', '89', '36'),
(5, '35 M', '89', '38'),
(6, '35 L', '89', '42'),
(7, '36 S', '91.5', '37'),
(8, '36 M', '91.5', '39'),
(9, '36 L', '91.5', '43'),
(10, '37 S', '94', '37'),
(11, '37 M', '94', '39'),
(12, '37 L', '94', '43'),
(13, '38 S', '96.5', '38'),
(14, '38 M', '96.5', '40'),
(15, '38 L', '96.5', '44'),
(16, '39 S', '99', '38'),
(17, '39 M', '99', '40'),
(18, '39 L', '99', '44'),
(19, '40 S', '101.5', '39'),
(20, '40 M', '101.5', '41'),
(21, '40 L', '101.5', '45'),
(22, '41 S', '104.5', '40.5'),
(23, '41 M', '104.5', '42.5'),
(24, '41 L', '104.5', '46.5'),
(25, '42 S', '107', '41'),
(26, '42 M', '107', '43'),
(27, '42 L', '107', '47'),
(28, '43 S', '109.5', '42'),
(29, '43 M', '109.5', '44'),
(30, '43 L', '109.5', '48'),
(31, '44 S', '112', '42'),
(32, '44 M', '112', '44'),
(33, '44 L', '112', '48'),
(34, '45 S', '114.5', '43'),
(35, '45 M', '114.5', '45'),
(36, '45 L', '114.5', '49'),
(37, '46 S', '117', '43'),
(38, '46 M', '117', '45'),
(39, '46 L', '117', '49'),
(40, '47 S', '119.6', '44'),
(41, '47 M', '119.6', '46'),
(42, '47 L', '119.6', '50'),
(43, '48 S', '122', '45'),
(44, '48 M', '122', '47'),
(45, '48 L', '122', '51'),
(46, '49 S', '124.5', '46'),
(47, '49 M', '124.5', '48'),
(48, '49 L', '124.5', '52'),
(49, '50 S', '127.5', '46'),
(50, '50 M', '127.5', '48'),
(51, '50 L', '127.5', '52'),
(52, '51 S', '130', '47'),
(53, '51 M', '130', '49'),
(54, '51 L', '130', '53'),
(55, '51 XL', '130', '57'),
(56, '52 S', '132.5', '48'),
(57, '52 M', '132.5', '50'),
(58, '52 L', '132.5', '54'),
(59, '52 XL', '132.5', '58');