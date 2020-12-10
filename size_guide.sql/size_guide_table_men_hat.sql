
-- --------------------------------------------------------

--
-- Table structure for table `men_hat`
--

CREATE TABLE `men_hat` (
  `mh_id` int(11) NOT NULL,
  `mh_int` varchar(4) DEFAULT NULL,
  `mh_head_cm` int(11) DEFAULT NULL,
  `mh_head_in` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_hat`
--

INSERT INTO `men_hat` (`mh_id`, `mh_int`, `mh_head_cm`, `mh_head_in`) VALUES
(1, 'S', 56, 22),
(2, 'M', 58, 22.8),
(3, 'L', 60, 23.6),
(4, 'XL', 62, 24.4);
