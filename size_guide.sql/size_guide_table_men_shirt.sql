
-- --------------------------------------------------------

--
-- Table structure for table `men_shirt`
--

CREATE TABLE `men_shirt` (
  `mshr_id` int(11) NOT NULL,
  `mshr_type` varchar(15) DEFAULT NULL,
  `mshr_int` varchar(15) DEFAULT NULL,
  `mshr_chest_cm` varchar(15) DEFAULT NULL,
  `mshr_waist_cm` varchar(15) DEFAULT NULL,
  `mshr_neckLine_cm` varchar(15) DEFAULT NULL,
  `mshr_armLength_cm` varchar(15) DEFAULT NULL,
  `mshr_height_cm` varchar(15) DEFAULT NULL,
  `mshr_chest_in` varchar(15) DEFAULT NULL,
  `mshr_waist_in` varchar(15) DEFAULT NULL,
  `mshr_neckLine_in` varchar(15) DEFAULT NULL,
  `mshr_armLength_in` varchar(15) DEFAULT NULL,
  `mshr_height_in` varchar(15) DEFAULT NULL,
  `mshr_uk` varchar(15) DEFAULT NULL,
  `mshr_eur` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_shirt`
--

INSERT INTO `men_shirt` (`mshr_id`, `mshr_type`, `mshr_int`, `mshr_chest_cm`, `mshr_waist_cm`, `mshr_neckLine_cm`, `mshr_armLength_cm`, `mshr_height_cm`, `mshr_chest_in`, `mshr_waist_in`, `mshr_neckLine_in`, `mshr_armLength_in`, `mshr_height_in`, `mshr_uk`, `mshr_eur`) VALUES
(1, 'S', 'XS', '84', '72', '35', '59', '169', '33', '28.25', '13.75', '23', '66.5', '13.5-14 S', '36 S'),
(2, 'S', 'S', '88-92', '76-80', '36-37', '59.5-60', '170-171', '34.5-36.25', '30-31.5', '14-14.5', '23.25-23.5', '67-67.25', '14.5-15 S', '37-38 S'),
(3, 'S', 'M', '96-100', '84-88', '38-39', '60.5-61', '172-173', '37.75-39.5', '33-34.5', '15-15.25', '23.75-24', '67.75-68', '15.25-15.75 S', '39-40 S'),
(4, 'S', 'L', '104-108', '92-96', '40-41', '61.5-62', '174-175', '41-42.5', '36.25-37.75', '15.75-16', '24-24.25', '68.5-68.75', '16-16.5 S', '41-42 S'),
(5, 'L', 'M', '96-100', '84-88', '38-39', '66.5-67', '188-189', '37.75-39.5', '33-34.5', '15-15.25', '26-26.25', '74-74.4', '15.25-15.75 L', '39-40 L'),
(6, 'L', 'L', '104-108', '92-96', '40-41', '67.5-68', '190-191', '41-42.5', '36.25-37.75', '15.75-16', '26.5-26.75', '74.8-75.1', '16-16.5 L', '41-42 L'),
(7, 'R', 'XS', '80-84', '68-72', NULL, NULL, NULL, '31.5-33', '26.75-28.25', NULL, NULL, NULL, '13.5-14 R', '35 -36 R'),
(8, 'R', 'S', '88-92', '76-80', NULL, NULL, NULL, '34.5-36.25', '30-31.5', NULL, NULL, NULL, '14.5-15 R', '37-38 R'),
(9, 'R', 'M', '96-100', '84-88', NULL, NULL, NULL, '37.75-39.5', '33-34.5', NULL, NULL, NULL, '15.25-15.75 R', '39-40 R'),
(10, 'R', 'L', '104-108', '92-96', NULL, NULL, NULL, '41-42.5', '36.25-37.75', NULL, NULL, NULL, '16-16.5 R', '41-42 R'),
(11, 'R', 'XL', '112-116', '100-104', NULL, NULL, NULL, '44-45.5', '39.5-41', NULL, NULL, NULL, '17-17.25 R', '43-44 R'),
(12, 'R', 'XXL', '120-124', '108-112', NULL, NULL, NULL, '47.25-48.75', '42.5-44', NULL, NULL, NULL, '17.75-18 R', '45-46 R');
