
-- --------------------------------------------------------

--
-- Table structure for table `toddler`
--

CREATE TABLE `toddler` (
  `t_id` int(30) NOT NULL,
  `t_age` varchar(30) DEFAULT NULL,
  `t_height_in` varchar(30) DEFAULT NULL,
  `t_weight_lb` varchar(30) DEFAULT NULL,
  `t_height_cm` varchar(30) DEFAULT NULL,
  `t_weight_kg` varchar(30) DEFAULT NULL,
  `t_us` varchar(30) DEFAULT NULL,
  `t_uk` varchar(30) DEFAULT NULL,
  `t_eur` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toddler`
--

INSERT INTO `toddler` (`t_id`, `t_age`, `t_height_in`, `t_weight_lb`, `t_height_cm`, `t_weight_kg`, `t_us`, `t_uk`, `t_eur`) VALUES
(1, '3 سنوات', '35-38', '30-34', '89-96.5', '13.5-15.5', '3T', '12', '98'),
(2, '4 سنوات', '38-41', '34-38', '96.5-104', '115.5-17', '4T', '14', '104'),
(3, '5 سنوات', '41-45', '38-42', '104-114', '17-19', '5T', '16', '110'),
(4, '6-7 سنوات', '45-50', '42-49', '114-127', '19-22', '6x(بنات-S)/7(أولاد-M)', '18', '116-122');
