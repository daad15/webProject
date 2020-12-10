
-- --------------------------------------------------------

--
-- Table structure for table `men_shemagh`
--

CREATE TABLE `men_shemagh` (
  `mshm_id` int(11) NOT NULL,
  `mshm_size` int(11) DEFAULT NULL,
  `mshm_height_cm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_shemagh`
--

INSERT INTO `men_shemagh` (`mshm_id`, `mshm_size`, `mshm_height_cm`) VALUES
(1, 40, '105-110'),
(2, 42, '115-120'),
(3, 44, '120-125'),
(4, 46, '125-130'),
(5, 48, '130-135'),
(6, 50, '135-140'),
(7, 52, '140-150'),
(8, 54, '150-160'),
(9, 58, '160-170'),
(10, 60, '170-180'),
(11, 62, '>180');
