
-- --------------------------------------------------------

--
-- Table structure for table `women_shoes`
--

CREATE TABLE `women_shoes` (
  `wsh_id` int(11) NOT NULL,
  `wsh_eur` float DEFAULT NULL,
  `wsh_uk` float DEFAULT NULL,
  `wsh_us` float DEFAULT NULL,
  `wsh_feet_in` float DEFAULT NULL,
  `wsh_feet_cm` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_shoes`
--

INSERT INTO `women_shoes` (`wsh_id`, `wsh_eur`, `wsh_uk`, `wsh_us`, `wsh_feet_in`, `wsh_feet_cm`) VALUES
(1, 36, 3.5, 5.5, 8.75, 22.2),
(2, 36.5, 4, 6, 8.87, 22.5),
(3, 37, 4.5, 6.5, 9, 23),
(4, 37.5, 5, 7, 9.25, 23.5),
(5, 38, 5.5, 7.5, 9.37, 23.8),
(6, 38.5, 6, 8, 9.5, 24.1),
(7, 39, 6.5, 8.5, 9.68, 24.6),
(8, 39.5, 7, 9, 9.87, 25.1),
(9, 40, 7.5, 9.5, 10, 25.4),
(10, 40.5, 8, 10, 10.1, 25.9),
(11, 41, 8.5, 10.5, 10.3, 26.2),
(12, 41.5, 9, 11, 10.5, 26.7),
(13, 42, 9.5, 11.5, 10.6, 27.1),
(14, 42.5, 10, 12, 10.8, 27.6),
(15, 43, 10.5, 12.5, 11, 28),
(16, 43.5, 11, 13, 11.2, 28.4);
