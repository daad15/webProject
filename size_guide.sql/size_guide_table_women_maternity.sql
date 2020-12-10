
-- --------------------------------------------------------

--
-- Table structure for table `women_maternity`
--

CREATE TABLE `women_maternity` (
  `wm_id` int(11) NOT NULL,
  `wm_int` varchar(30) DEFAULT NULL,
  `wm_bust_in` varchar(30) DEFAULT NULL,
  `wm_under_bust_in` varchar(30) DEFAULT NULL,
  `wm_hips_in` varchar(30) DEFAULT NULL,
  `wm_leg_in` varchar(30) DEFAULT NULL,
  `wm_bust_cm` varchar(30) DEFAULT NULL,
  `wm_under_bust_cm` varchar(30) DEFAULT NULL,
  `wm_hips_cm` varchar(30) DEFAULT NULL,
  `wm_leg_cm` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women_maternity`
--

INSERT INTO `women_maternity` (`wm_id`, `wm_int`, `wm_bust_in`, `wm_under_bust_in`, `wm_hips_in`, `wm_leg_in`, `wm_bust_cm`, `wm_under_bust_cm`, `wm_hips_cm`, `wm_leg_cm`) VALUES
(1, 'S', '36', '27-29', '38', '21-22', '91', '70-75', '96', '54-57'),
(2, 'M', '38', '29-31', '40', '22-24', '96', '76-81', '101', '58-61'),
(3, 'L', '40', '32-34', '41', '24-25', '101', '82-87', '106', '62-65'),
(4, 'XL', '42', '34-36', '43', '25-27', '108', '88-93', '111', '66-69'),
(5, '2XL', '45', '37-38', '46', '27-28', '114', '94-99', '117', '70-73'),
(6, '3XL', '47', '39-41', '48', '29-30', '120', '100-105', '122', '74-77');
