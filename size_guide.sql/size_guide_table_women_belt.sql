
-- --------------------------------------------------------

--
-- Table structure for table `women_belt`
--

CREATE TABLE `women_belt` (
  `wb_id` int(11) NOT NULL,
  `wb_int` varchar(30) DEFAULT NULL,
  `wb_waist_in` varchar(30) DEFAULT NULL,
  `wb_waist_cm` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_belt`
--

INSERT INTO `women_belt` (`wb_id`, `wb_int`, `wb_waist_in`, `wb_waist_cm`) VALUES
(1, 'XS', '72', '28.25'),
(2, 'S', '80', '31.5'),
(3, 'M', '88', '34.5'),
(4, 'L', '96', '37.75'),
(5, 'XL', '104', '41');
