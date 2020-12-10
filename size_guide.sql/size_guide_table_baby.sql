
-- --------------------------------------------------------

--
-- Table structure for table `baby`
--

CREATE TABLE `baby` (
  `b_id` int(30) NOT NULL,
  `b_age` varchar(30) DEFAULT NULL,
  `b_height_in` varchar(30) DEFAULT NULL,
  `b_weight_lb` varchar(30) DEFAULT NULL,
  `b_height_cm` varchar(30) DEFAULT NULL,
  `b_weight_kg` varchar(30) DEFAULT NULL,
  `b_us` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baby`
--

INSERT INTO `baby` (`b_id`, `b_age`, `b_height_in`, `b_weight_lb`, `b_height_cm`, `b_weight_kg`, `b_us`) VALUES
(1, 'خديج', '~ 17', '~ 5', '~ 43', '~ 2', 'premature'),
(2, 'حديث الولادة', ' 17-18', '5-6', '43-46', ' 2-2.5', 'Tiny baby'),
(3, 'حديث الولادة', '18-20', '6-7', '46-51', '2.5-3', 'NB'),
(4, '0-3 أشهر', ' 20-24 ', '7-12 ', ' 51-61 ', '3-5.5', '0-3 M'),
(5, '3-6 أشهر', '24-27', '12-16', '61-69', '5.5-7', '3-6 M'),
(6, '6-9 أشهر', '27-29', '16-19', '69-74', '7-8.5', '6-9 M'),
(7, '9-12 أشهر', '29-31', '19-22', '74-79', '8.5-10', '12 M'),
(8, '12-18 شهر', '31-33', '22-26', '79-84', '10-11.5', '18 M'),
(9, '18-24 شهر', '33-35', '26-30', '84-89', '11.5-13.5', '24 M');
