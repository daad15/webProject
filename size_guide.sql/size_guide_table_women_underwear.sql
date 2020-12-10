
-- --------------------------------------------------------

--
-- Table structure for table `women_underwear`
--

CREATE TABLE `women_underwear` (
  `wun_id` int(11) NOT NULL,
  `wun_uk` varchar(20) DEFAULT NULL,
  `wun_int` varchar(5) DEFAULT NULL,
  `wun_waist_in` varchar(20) DEFAULT NULL,
  `wun_waist_cm` varchar(20) DEFAULT NULL,
  `wun_hips_in` varchar(20) DEFAULT NULL,
  `wun_hips_cm` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_underwear`
--

INSERT INTO `women_underwear` (`wun_id`, `wun_uk`, `wun_int`, `wun_waist_in`, `wun_waist_cm`, `wun_hips_in`, `wun_hips_cm`) VALUES
(1, '4', 'XS', '24-25.5', '60-64', '34-35.5', '34-90'),
(2, '5', 'S', '26-27.5', '66-68', '36-37.5', '91-95'),
(3, '6', 'M', '28-29.5', '71-73', '38-39.5', '96-100'),
(4, '7', 'L', '30-31.5', '76-80', '40-41.5', '101-105'),
(5, '8', 'XL', '32-33.5', '81-83', '42-43.5', '106-110'),
(6, '9', '2XL', '34-35.5', '86-88', '44-45.5', '111-115'),
(7, '10', '3XL', '36-37.5', '91-93', '46-47.5', '116-120'),
(8, '11', '4XL', '38-39.5', '96-100', '48-49.5', '121-125');
