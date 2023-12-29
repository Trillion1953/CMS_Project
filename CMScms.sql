-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2023 at 10:38 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `feature_master`
--

CREATE TABLE IF NOT EXISTS `feature_master` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `feature_NAME` varchar(256) NOT NULL,
  `feature_STATUS` varchar(128) NOT NULL,
  `CREATED_MODIFIED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feature_master`
--

INSERT INTO `feature_master` (`ID`, `feature_NAME`, `feature_STATUS`, `CREATED_MODIFIED_DATE`) VALUES
(1, 'Outer Color', 'Enable', '2023-12-06 18:21:10'),
(2, 'Pop', 'Enable', '2023-12-06 18:21:15'),
(3, 'Steel', 'Enable', '2023-12-06 18:21:20'),
(4, 'MS Grill', 'Enable', '2023-12-06 18:21:26'),
(5, 'Putti', 'Enable', '2023-12-06 18:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `material_master`
--

CREATE TABLE IF NOT EXISTS `material_master` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `material_NAME` varchar(256) NOT NULL,
  `material_STATUS` varchar(128) NOT NULL,
  `CREATED_MODIFIED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `material_master`
--

INSERT INTO `material_master` (`ID`, `material_NAME`, `material_STATUS`, `CREATED_MODIFIED_DATE`) VALUES
(1, 'ACC cements ', 'Enable', '2023-11-11 23:19:14'),
(2, 'Polycab', 'Enable ', '2023-11-11 23:19:14'),
(3, 'Rajuri Steel', 'Enable', '2023-11-12 20:14:28'),
(4, 'Altrateck cement', 'Enable', '2023-11-14 22:33:35'),
(5, 'Royal colour', 'Enable', '2023-11-14 22:34:07'),
(6, 'Apex colour', 'Enable', '2023-11-14 22:34:36'),
(7, 'havles wire', 'Enable', '2023-11-14 22:35:26'),
(8, 'phinolex pipes', 'Enable', '2023-11-14 22:35:53'),
(9, 'Gravity mixer and shower', 'Choose...', '2023-11-14 22:36:48'),
(10, 'jagwar mixer and shower', 'Enable', '2023-11-14 22:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `payment_master`
--

CREATE TABLE IF NOT EXISTS `payment_master` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `client_ID` int(11) NOT NULL,
  `site_ID` int(128) NOT NULL,
  `RUPEES` int(11) NOT NULL,
  `CREATED_MODIFIED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pay_MODE` varchar(128) NOT NULL,
  `REMARK` varchar(128) NOT NULL,
  `CREATED_DATE_TIME` varchar(128) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `payment_master`
--

INSERT INTO `payment_master` (`ID`, `client_ID`, `site_ID`, `RUPEES`, `CREATED_MODIFIED_DATE`, `pay_MODE`, `REMARK`, `CREATED_DATE_TIME`) VALUES
(4, 5, 1, 1000000, '2023-12-06 16:42:21', 'Received', '1st installment ', '03 December 2023'),
(5, 2, 1, 50000, '2023-12-06 16:47:04', 'Payed', 'crush payment by cash', '04 December 2023'),
(6, 4, 1, 100000, '2023-12-06 17:00:46', 'Payed', 'tile payement', '05 December 2023'),
(7, 8, 1, 20000, '2023-12-06 17:31:26', 'Payed', 'payment of paint labour', '05 December 2023'),
(8, 6, 2, 2000000, '2023-12-06 17:39:30', 'Received', '1st installment ', '01 December 2023'),
(9, 8, 2, 50000, '2023-12-06 17:40:14', 'Payed', 'payment of paint labour', '02 December 2023');

-- --------------------------------------------------------

--
-- Table structure for table `role_master`
--

CREATE TABLE IF NOT EXISTS `role_master` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `role_NAME` varchar(256) NOT NULL,
  `role_STATUS` varchar(128) NOT NULL,
  `CREATED_MODIFIED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `role_master`
--

INSERT INTO `role_master` (`ID`, `role_NAME`, `role_STATUS`, `CREATED_MODIFIED_DATE`) VALUES
(1, 'Engineer', 'Enable', '2023-12-06 14:44:21'),
(2, 'Client ', 'Enable', '2023-11-14 00:03:15'),
(3, 'Crush distributor', 'Enable ', '2023-11-14 19:53:38'),
(4, 'Tile supplier', 'Enable', '2023-11-11 23:35:30'),
(6, 'Mahesh', 'Enable', '2023-12-09 21:03:41'),
(5, 'Painter', 'Enable', '2023-12-06 14:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `site_feature_mapping`
--

CREATE TABLE IF NOT EXISTS `site_feature_mapping` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `site_ID` int(11) NOT NULL,
  `feat_ID` int(11) NOT NULL,
  `CREATED_MODIFIED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `site_feature_mapping`
--

INSERT INTO `site_feature_mapping` (`ID`, `site_ID`, `feat_ID`, `CREATED_MODIFIED_DATE`) VALUES
(1, 1, 0, '2023-12-06 18:48:59'),
(2, 1, 0, '2023-12-06 18:49:19'),
(3, 1, 0, '2023-12-07 13:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `site_master`
--

CREATE TABLE IF NOT EXISTS `site_master` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `site_USERID` int(128) NOT NULL,
  `site_NAME` varchar(128) NOT NULL,
  `site_DESC` varchar(256) NOT NULL,
  `STATUS` varchar(128) NOT NULL,
  `CREATED_MODIFIED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_ID` int(128) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `site_master`
--

INSERT INTO `site_master` (`ID`, `site_USERID`, `site_NAME`, `site_DESC`, `STATUS`, `CREATED_MODIFIED_DATE`, `status_ID`) VALUES
(1, 5, 'Site_Jhon_stref', 'Residential building', 'Enable', '2023-12-06 13:57:40', 1),
(2, 6, 'Site_Mandar_Yevale', 'Apartments', 'Enable', '2023-12-07 14:07:38', 2);

-- --------------------------------------------------------

--
-- Table structure for table `status_master`
--

CREATE TABLE IF NOT EXISTS `status_master` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `status_NAME` varchar(256) NOT NULL,
  `status_STATUS` varchar(128) NOT NULL,
  `CREATED_MODIFIED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `status_master`
--

INSERT INTO `status_master` (`ID`, `status_NAME`, `status_STATUS`, `CREATED_MODIFIED_DATE`) VALUES
(1, 'Planning', 'Enable ', '2023-11-11 23:45:58'),
(2, 'Foundation', 'Enable ', '2023-11-11 23:45:58'),
(3, 'Bed Concrete ', 'Enable ', '2023-11-11 23:46:42'),
(4, 'slab', 'Enable ', '2023-11-11 23:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ROLE_ID` int(128) NOT NULL,
  `CATE_TYPE` varchar(128) NOT NULL,
  `USER_NAME` varchar(256) NOT NULL,
  `USER_STATUS` varchar(128) NOT NULL,
  `CREATED_MODIFIED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `USER_PSW` varchar(128) NOT NULL,
  `ADDRESS` varchar(128) NOT NULL,
  `MOBILE_NO1` varchar(256) NOT NULL,
  `MOBILE_NO2` varchar(256) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`ID`, `ROLE_ID`, `CATE_TYPE`, `USER_NAME`, `USER_STATUS`, `CREATED_MODIFIED_DATE`, `USER_PSW`, `ADDRESS`, `MOBILE_NO1`, `MOBILE_NO2`) VALUES
(1, 1, 'SUPPLIER', 'Ayevale', 'Enable', '2023-12-06 14:32:19', 'Kmart123', 'Sangliwadi', '9855011210', '9766672330'),
(2, 3, 'SUPPLIER', 'R.M. Shah', 'Enable', '2023-12-06 14:31:02', '', 'Miraj', '', ''),
(3, 3, 'SUPPLIER', 'J.S. Pawar', 'Enable', '2023-12-06 14:30:51', '', 'Sangli', '', ''),
(4, 4, 'SUPPLIER', 'R.K.Patil', 'Enable', '2023-12-06 14:30:30', '', 'Palus', '', ''),
(5, 2, '', 'Jhon stref', 'Enable', '2023-12-06 14:30:18', '', '1900 Hassel Rd, Ilionois', '', ''),
(6, 2, '', 'Mandar Yevale ', 'Enable', '2023-12-06 14:30:09', '', 'kasabe Digraj', '', ''),
(7, 2, '', 'Amol Patil', 'Enable', '2023-12-06 14:28:51', '', 'Erndoli', '8530928690', '7775018566'),
(8, 5, 'LABOUR', 'Sagar kamble', 'Enable', '2023-12-06 17:29:35', '', 'Palus', '9855011210', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_feature_master`
--
CREATE TABLE IF NOT EXISTS `view_feature_master` (
`ID` int(11)
,`NAME` varchar(256)
,`STATUS` varchar(128)
,`CREATED_MODIFIED_DATE` timestamp
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_material_master`
--
CREATE TABLE IF NOT EXISTS `view_material_master` (
`ID` int(11)
,`material_NAME` varchar(256)
,`material_STATUS` varchar(128)
,`CREATED_MODIFIED_DATE` timestamp
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_payment_master`
--
CREATE TABLE IF NOT EXISTS `view_payment_master` (
`ID` int(11)
,`site_ID` int(128)
,`CREATED_DATE_TIME` varchar(128)
,`REMARK` varchar(128)
,`pay_MODE` varchar(128)
,`RUPEES` int(11)
,`CREATED_MODIFIED_DATE` timestamp
,`site_NAME` varchar(128)
,`USER_NAME` varchar(256)
,`CATE_TYPE` varchar(128)
,`role_NAME` varchar(256)
,`client_id` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_role_master`
--
CREATE TABLE IF NOT EXISTS `view_role_master` (
`ID` int(11)
,`role_NAME` varchar(256)
,`role_STATUS` varchar(128)
,`CREATED_MODIFIED_DATE` timestamp
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_site_feature_mapping`
--
CREATE TABLE IF NOT EXISTS `view_site_feature_mapping` (
`ID` int(11)
,`site_ID` int(11)
,`feat_ID` int(11)
,`NAME` varchar(256)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_site_master`
--
CREATE TABLE IF NOT EXISTS `view_site_master` (
`ID` int(11)
,`site_NAME` varchar(128)
,`STATUS` varchar(128)
,`CREATED_MODIFIED_DATE` timestamp
,`status_NAME` varchar(256)
,`USER_NAME` varchar(256)
,`ADDRESS` varchar(128)
,`MOBILE_NO1` varchar(256)
,`MOBILE_NO2` varchar(256)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_status_master`
--
CREATE TABLE IF NOT EXISTS `view_status_master` (
`ID` int(11)
,`NAME` varchar(256)
,`STATUS` varchar(128)
,`CREATED_MODIFIED_DATE` timestamp
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_user_master`
--
CREATE TABLE IF NOT EXISTS `view_user_master` (
`ID` int(11)
,`ROLE_ID` int(128)
,`CATE_TYPE` varchar(128)
,`USER_STATUS` varchar(128)
,`USER_NAME` varchar(256)
,`MOBILE_NO1` varchar(256)
,`MOBILE_NO2` varchar(256)
,`ADDRESS` varchar(128)
,`USER_PSW` varchar(128)
,`CREATED_MODIFIED_DATE` timestamp
,`R_ID` int(11)
,`role_NAME` varchar(256)
);
-- --------------------------------------------------------

--
-- Structure for view `view_feature_master`
--
DROP TABLE IF EXISTS `view_feature_master`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_feature_master` AS select `feature_master`.`ID` AS `ID`,`feature_master`.`feature_NAME` AS `NAME`,`feature_master`.`feature_STATUS` AS `STATUS`,`feature_master`.`CREATED_MODIFIED_DATE` AS `CREATED_MODIFIED_DATE` from `feature_master`;

-- --------------------------------------------------------

--
-- Structure for view `view_material_master`
--
DROP TABLE IF EXISTS `view_material_master`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_material_master` AS select `material_master`.`ID` AS `ID`,`material_master`.`material_NAME` AS `material_NAME`,`material_master`.`material_STATUS` AS `material_STATUS`,`material_master`.`CREATED_MODIFIED_DATE` AS `CREATED_MODIFIED_DATE` from `material_master`;

-- --------------------------------------------------------

--
-- Structure for view `view_payment_master`
--
DROP TABLE IF EXISTS `view_payment_master`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_payment_master` AS select `payment_master`.`ID` AS `ID`,`payment_master`.`site_ID` AS `site_ID`,`payment_master`.`CREATED_DATE_TIME` AS `CREATED_DATE_TIME`,`payment_master`.`REMARK` AS `REMARK`,`payment_master`.`pay_MODE` AS `pay_MODE`,`payment_master`.`RUPEES` AS `RUPEES`,`payment_master`.`CREATED_MODIFIED_DATE` AS `CREATED_MODIFIED_DATE`,`view_site_master`.`site_NAME` AS `site_NAME`,`view_user_master`.`USER_NAME` AS `USER_NAME`,`view_user_master`.`CATE_TYPE` AS `CATE_TYPE`,`view_user_master`.`role_NAME` AS `role_NAME`,`view_user_master`.`ID` AS `client_id` from ((`payment_master` left join `view_site_master` on((`payment_master`.`site_ID` = `view_site_master`.`ID`))) left join `view_user_master` on((`payment_master`.`client_ID` = `view_user_master`.`ID`)));

-- --------------------------------------------------------

--
-- Structure for view `view_role_master`
--
DROP TABLE IF EXISTS `view_role_master`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_role_master` AS select `role_master`.`ID` AS `ID`,`role_master`.`role_NAME` AS `role_NAME`,`role_master`.`role_STATUS` AS `role_STATUS`,`role_master`.`CREATED_MODIFIED_DATE` AS `CREATED_MODIFIED_DATE` from `role_master`;

-- --------------------------------------------------------

--
-- Structure for view `view_site_feature_mapping`
--
DROP TABLE IF EXISTS `view_site_feature_mapping`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_site_feature_mapping` AS select `site_feature_mapping`.`ID` AS `ID`,`site_feature_mapping`.`site_ID` AS `site_ID`,`site_feature_mapping`.`feat_ID` AS `feat_ID`,`view_feature_master`.`NAME` AS `NAME` from (`site_feature_mapping` left join `view_feature_master` on((`site_feature_mapping`.`feat_ID` = `view_feature_master`.`ID`)));

-- --------------------------------------------------------

--
-- Structure for view `view_site_master`
--
DROP TABLE IF EXISTS `view_site_master`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_site_master` AS select `site_master`.`ID` AS `ID`,`site_master`.`site_NAME` AS `site_NAME`,`site_master`.`STATUS` AS `STATUS`,`site_master`.`CREATED_MODIFIED_DATE` AS `CREATED_MODIFIED_DATE`,`view_status_master`.`NAME` AS `status_NAME`,`view_user_master`.`USER_NAME` AS `USER_NAME`,`view_user_master`.`ADDRESS` AS `ADDRESS`,`view_user_master`.`MOBILE_NO1` AS `MOBILE_NO1`,`view_user_master`.`MOBILE_NO2` AS `MOBILE_NO2` from ((`site_master` left join `view_status_master` on((`site_master`.`status_ID` = `view_status_master`.`ID`))) left join `view_user_master` on((`site_master`.`site_USERID` = `view_user_master`.`ID`)));

-- --------------------------------------------------------

--
-- Structure for view `view_status_master`
--
DROP TABLE IF EXISTS `view_status_master`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_status_master` AS select `status_master`.`ID` AS `ID`,`status_master`.`status_NAME` AS `NAME`,`status_master`.`status_STATUS` AS `STATUS`,`status_master`.`CREATED_MODIFIED_DATE` AS `CREATED_MODIFIED_DATE` from `status_master`;

-- --------------------------------------------------------

--
-- Structure for view `view_user_master`
--
DROP TABLE IF EXISTS `view_user_master`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user_master` AS select `user_master`.`ID` AS `ID`,`user_master`.`ROLE_ID` AS `ROLE_ID`,`user_master`.`CATE_TYPE` AS `CATE_TYPE`,`user_master`.`USER_STATUS` AS `USER_STATUS`,`user_master`.`USER_NAME` AS `USER_NAME`,`user_master`.`MOBILE_NO1` AS `MOBILE_NO1`,`user_master`.`MOBILE_NO2` AS `MOBILE_NO2`,`user_master`.`ADDRESS` AS `ADDRESS`,`user_master`.`USER_PSW` AS `USER_PSW`,`user_master`.`CREATED_MODIFIED_DATE` AS `CREATED_MODIFIED_DATE`,`view_role_master`.`ID` AS `R_ID`,`view_role_master`.`role_NAME` AS `role_NAME` from (`user_master` left join `view_role_master` on((`user_master`.`ROLE_ID` = `view_role_master`.`ID`)));
