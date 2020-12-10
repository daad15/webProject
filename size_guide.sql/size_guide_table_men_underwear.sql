
-- --------------------------------------------------------

--
-- Table structure for table `men_underwear`
--

CREATE TABLE `men_underwear` (
  `mun_id` int(11) NOT NULL,
  `mun_int` varchar(4) DEFAULT NULL,
  `mun_waist_cm` varchar(10) DEFAULT NULL,
  `mun_waist_in` varchar(10) DEFAULT NULL,
  `mun_uk` varchar(10) DEFAULT NULL,
  `mun_eur` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_underwear`
--

INSERT INTO `men_underwear` (`mun_id`, `mun_int`, `mun_waist_cm`, `mun_waist_in`, `mun_uk`, `mun_eur`) VALUES
(1, 'XS', '70-73', '27.5-28.7', '8-10', '36'),
(2, 'S', '74-77', '29-33.3', '12', '38'),
(3, 'M', '78-85', '30.7-33.5', '14', '40-42'),
(4, 'L', '86-95', '33.8-37.5', '16', '44-46'),
(5, 'XL', '96-100', '37.7-39.3', '20-22', '48-50'),
(6, 'XXL', '101-105', '39.7-41.3', '26', '101-111');
