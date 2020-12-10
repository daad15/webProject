
-- --------------------------------------------------------

--
-- Table structure for table `men_belt`
--

CREATE TABLE `men_belt` (
  `mb_id` int(11) NOT NULL,
  `mb_int` varchar(4) DEFAULT NULL,
  `mb_waist_cm` varchar(10) DEFAULT NULL,
  `mb_waist_in` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_belt`
--

INSERT INTO `men_belt` (`mb_id`, `mb_int`, `mb_waist_cm`, `mb_waist_in`) VALUES
(1, 'XS', '71-76', '28-30'),
(2, 'S', '76-81', '30-32'),
(3, 'M', '81-86', '32-34'),
(4, 'L', '86-91', '34-36'),
(5, 'XL', '91-96', '36-38');
