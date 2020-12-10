
-- --------------------------------------------------------

--
-- Table structure for table `women_tight`
--

CREATE TABLE `women_tight` (
  `wt_id` int(11) NOT NULL,
  `wt_int` varchar(30) DEFAULT NULL,
  `wt_hips_in` varchar(30) DEFAULT NULL,
  `wt_hips_cm` varchar(30) DEFAULT NULL,
  `wt_hight_in` varchar(30) DEFAULT NULL,
  `wt_hight_cm` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_tight`
--

INSERT INTO `women_tight` (`wt_id`, `wt_int`, `wt_hips_in`, `wt_hips_cm`, `wt_hight_in`, `wt_hight_cm`) VALUES
(1, 'XS', '34', '85-90', '5\'0\"-5\'4\"', '152-162'),
(2, 'S', '36', '90-95', '5\'0\"-5\'4\"', '152-162'),
(3, 'M', '38', '95-100', '5\'4\"-5\'7\"', '162-170'),
(4, 'L', '40', '100-105', '5\'7\"-5\'10\"', '170-178'),
(5, 'XL', '42', '105-110', '5\'7\"-5\'10\"', '170-178');
