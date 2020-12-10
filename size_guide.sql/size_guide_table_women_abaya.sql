
-- --------------------------------------------------------

--
-- Table structure for table `women_abaya`
--

CREATE TABLE `women_abaya` (
  `wa_id` int(11) NOT NULL,
  `wa_size` int(11) DEFAULT NULL,
  `wa_length_in` int(11) DEFAULT NULL,
  `wa_width_in` int(11) DEFAULT NULL,
  `wa_sleeve_in` varchar(30) DEFAULT NULL,
  `wa_length_cm` int(11) DEFAULT NULL,
  `wa_width_cm` int(11) DEFAULT NULL,
  `wa_sleeve_cm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_abaya`
--

INSERT INTO `women_abaya` (`wa_id`, `wa_size`, `wa_length_in`, `wa_width_in`, `wa_sleeve_in`, `wa_length_cm`, `wa_width_cm`, `wa_sleeve_cm`) VALUES
(1, 52, 52, 23, '27', 132, 58, 68),
(2, 54, 54, 24, '27', 137, 60, 68),
(3, 56, 56, 25, '27.5', 142, 63, 69),
(4, 58, 58, 26, '28', 147, 66, 70),
(5, 60, 60, 17, '28', 152, 70, 70);
