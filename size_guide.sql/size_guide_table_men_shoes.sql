
-- --------------------------------------------------------

--
-- Table structure for table `men_shoes`
--

CREATE TABLE `men_shoes` (
  `msh_id` int(11) NOT NULL,
  `msh_eur` varchar(10) DEFAULT NULL,
  `msh_uk` float DEFAULT NULL,
  `msh_us` float DEFAULT NULL,
  `msh_feet_in` float DEFAULT NULL,
  `msh_feet_cm` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_shoes`
--

INSERT INTO `men_shoes` (`msh_id`, `msh_eur`, `msh_uk`, `msh_us`, `msh_feet_in`, `msh_feet_cm`) VALUES
(1, '39', 5.5, 6, 9.3, 23.5),
(2, '39', 6, 6.5, 9.5, 24.1),
(3, '40', 6.5, 7, 9.6, 24.4),
(4, '40-41', 7, 7.5, 9.8, 24.8),
(5, '41', 7.5, 8, 9.9, 25.4),
(6, '41-42', 8, 8.5, 10.1, 25.7),
(7, '42', 8.5, 9, 10.3, 26),
(8, '42-43', 9, 9.5, 10.4, 26.7),
(9, '43', 9.5, 10, 10.6, 27),
(10, '43-44', 10, 10.5, 10.8, 27.3),
(11, '44', 10.5, 11, 10.9, 27.9),
(12, '44-45', 11, 11.5, 11.1, 28.3),
(13, '45', 11.5, 12, 11.3, 28.6),
(14, '46', 12.5, 13, 11.6, 29.4),
(15, '47', 13.5, 14, 11.9, 30.2),
(16, '48', 14.5, 15, 12.2, 31),
(17, '49', 15.5, 16, 12.5, 31.8);
