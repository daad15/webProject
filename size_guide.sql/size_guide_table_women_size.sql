
-- --------------------------------------------------------

--
-- Table structure for table `women_size`
--

CREATE TABLE `women_size` (
  `w_id` int(11) NOT NULL,
  `w_int` varchar(30) DEFAULT NULL,
  `w_eur` int(11) DEFAULT NULL,
  `w_uk` int(11) DEFAULT NULL,
  `w_us` varchar(30) DEFAULT NULL,
  `w_bust_in` float DEFAULT NULL,
  `w_waist_in` float DEFAULT NULL,
  `w_hips_in` float DEFAULT NULL,
  `w_leg_in` float DEFAULT NULL,
  `w_bust_cm` float DEFAULT NULL,
  `w_waist_cm` float DEFAULT NULL,
  `w_hips_cm` float DEFAULT NULL,
  `w_leg_cm` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_size`
--

INSERT INTO `women_size` (`w_id`, `w_int`, `w_eur`, `w_uk`, `w_us`, `w_bust_in`, `w_waist_in`, `w_hips_in`, `w_leg_in`, `w_bust_cm`, `w_waist_cm`, `w_hips_cm`, `w_leg_cm`) VALUES
(1, '3XS', 28, 2, '0', 30, 24, 33, 30, 76, 60, 84, 76.6),
(2, '2XS', 30, 4, '0', 31.5, 25, 34.5, 30, 80, 64, 88, 76.8),
(3, 'XS', 32, 6, '2', 33, 27, 36.25, 30.25, 84, 68, 92, 77),
(4, 'S', 34, 8, '4-6', 34.5, 28, 37.75, 30.25, 88, 72, 96, 77.2),
(5, 'M', 36, 10, '8-10', 36.25, 29, 39, 30.5, 92, 76, 99, 77.4),
(6, 'L', 38, 12, '12-14', 37.75, 31, 40.25, 30.5, 96, 80, 102, 77.6),
(7, 'XL', 40, 14, '16-18', 39.5, 33, 41.25, 30.5, 100, 85, 105, 77.8),
(8, '2XL', 42, 16, '20-22', 41, 35, 43.5, 30.75, 104, 90, 108, 78),
(9, '3XL', 44, 18, '22-24', 43.5, 38, 45.5, 30.75, 110, 96, 113, 78.2),
(10, '4XL', 46, 20, '26-28', 45.5, 40, 47.5, 30.75, 116, 102, 118, 78.4),
(11, '5XL', 48, 22, '30-32', 48, 42, 49.5, 31, 122, 108, 123, 78.6),
(12, '6XL', 50, 24, '34-36', 40.5, 44, 50.5, 31, 128, 114, 128, 78.8),
(13, '7XL', 52, 26, '38-40', 52, 47, 52.75, 31, 134, 121, 134, 79),
(14, '8XL', 54, 28, '42-44', 55, 50, 55.5, 31, 140, 128, 140, 79.2);
