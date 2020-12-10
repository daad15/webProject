
-- --------------------------------------------------------

--
-- Table structure for table `men_pants`
--

CREATE TABLE `men_pants` (
  `mp_id` int(11) NOT NULL,
  `mp_type` varchar(15) DEFAULT NULL,
  `mp_int` varchar(15) DEFAULT NULL,
  `mp_waist_cm` varchar(15) DEFAULT NULL,
  `mp_hips_cm` varchar(15) DEFAULT NULL,
  `mp_leg_cm` varchar(15) DEFAULT NULL,
  `mp_height_cm` varchar(15) DEFAULT NULL,
  `mp_waist_in` varchar(15) DEFAULT NULL,
  `mp_hips_in` varchar(15) DEFAULT NULL,
  `mp_leg_in` varchar(15) DEFAULT NULL,
  `mp_height_in` varchar(15) DEFAULT NULL,
  `mp_uk` varchar(15) DEFAULT NULL,
  `mp_eur` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men_pants`
--

INSERT INTO `men_pants` (`mp_id`, `mp_type`, `mp_int`, `mp_waist_cm`, `mp_hips_cm`, `mp_leg_cm`, `mp_height_cm`, `mp_waist_in`, `mp_hips_in`, `mp_leg_in`, `mp_height_in`, `mp_uk`, `mp_eur`) VALUES
(1, 'S', 'XS', '68-72', '87-90', '76-76.6', '168-169', '26.75-28.25', '34-35.25', '76-76.6', '66-66.5', '28 S', '42 S'),
(2, 'S', 'S', '76-80', '93-96', '77.2-77.8', '170-171', '30-31.5', '36.5-37.75', '77.2-77.8', '67-67.25', '30 -32 S', '44-46 S'),
(3, 'S', 'M', '84-88', '99-102', '78.4-79', '172-173', '33-34.5', '39-40', '78.4-79', '67.75-68', '33-34 S', '48-50 S'),
(4, 'S', 'L', '92-96', '105-108', '79.6-80.2', '174-175', '36.25-37.57', '41.25-42.5', '79.6-80.2', '68.5-68.75', '36-38 S', '52-54 S'),
(5, 'L', 'M', '84-88', '99-102', '86.4-87', '188-189', '33-34.5', '39-40', '86.4-87', '74-74.4', '33-34 L', '48-50 L'),
(6, 'L', 'L', '92-96', '105-108', '87.6-88.2', '190-191', '36.25-37.75', '41.25-42.5', '87.6-88.2', '74.8-75.1', '36-38 L', '52-54 L'),
(7, 'R', 'XS', '72', '90', '81', NULL, '28.25', '35.5', '31.75', NULL, '28 R', '42 R'),
(8, 'R', 'S', '76-80', '93-96', '81-82', NULL, '30-31.5', '36.5-37.5', '32', NULL, '30-32 R', '44-46 R'),
(9, 'R', 'M', '84-88', '99-102', '82-83', NULL, '33-34.5', '39-40', '32.5', NULL, '33-34 R', '48-50 R'),
(10, 'R', 'L', '92-96', '105-108', '83-84', NULL, '36.25-37.75', '41.25-42.5', '33', NULL, '36-38 R', '52-54 R'),
(11, 'R', 'XL', '100-104', '111-114', '85', NULL, '39.5-41', '43.75-44.75', '33.25-33.5', NULL, '40-42 R', '56-58 R'),
(12, 'R', 'XXL', '108-112', '117-120', '86', NULL, '42.5-44', '46-47.25', '34', NULL, '44-46 R', '60-62 R');
