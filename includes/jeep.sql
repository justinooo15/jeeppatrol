/*
Navicat MariaDB Data Transfer

Source Server         : localhost
Source Server Version : 100125
Source Host           : localhost:3306
Source Database       : jeep

Target Server Type    : MariaDB
Target Server Version : 100125
File Encoding         : 65001

Date: 2017-11-06 17:47:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_drivers
-- ----------------------------
DROP TABLE IF EXISTS `tbl_drivers`;
CREATE TABLE `tbl_drivers` (
  `driver_id` int(10) NOT NULL AUTO_INCREMENT,
  `operator_id` int(10) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `license` varchar(255) NOT NULL,
  `jeepney_no` varchar(10) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_drivers
-- ----------------------------
INSERT INTO `tbl_drivers` VALUES ('6', '17', 'Benedict', 'Dimaala', '1289', 'bc124009', 'J01-045', null, null);
INSERT INTO `tbl_drivers` VALUES ('7', '17', 'Jose Carlos', 'Un', '1708502033', '-', 'J01-100', null, null);
INSERT INTO `tbl_drivers` VALUES ('8', '17', 'Derick', 'Grade', '123456789', '-', 'J01-060', null, null);
INSERT INTO `tbl_drivers` VALUES ('12', '17', 'Isaiah', 'Symoens', '2147483647', 'L02-10-003332', null, null, null);
INSERT INTO `tbl_drivers` VALUES ('13', '28', 'Mark Noriel', 'Mendoza', '2147483647', 'D01-12-123456', null, null, null);

-- ----------------------------
-- Table structure for tbl_driver_schedules
-- ----------------------------
DROP TABLE IF EXISTS `tbl_driver_schedules`;
CREATE TABLE `tbl_driver_schedules` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `monday` tinyint(1) DEFAULT NULL,
  `tuesday` tinyint(1) DEFAULT NULL,
  `wednesday` tinyint(1) DEFAULT NULL,
  `thursday` tinyint(1) DEFAULT NULL,
  `friday` tinyint(1) DEFAULT NULL,
  `saturday` tinyint(1) DEFAULT NULL,
  `sunday` tinyint(1) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_driver_schedules
-- ----------------------------
INSERT INTO `tbl_driver_schedules` VALUES ('6', '1', null, '1', null, '1', null, null, null, null);
INSERT INTO `tbl_driver_schedules` VALUES ('7', null, null, null, null, null, null, null, null, null);
INSERT INTO `tbl_driver_schedules` VALUES ('8', null, null, null, null, null, null, null, null, null);
INSERT INTO `tbl_driver_schedules` VALUES ('12', null, null, null, null, null, null, null, null, null);
INSERT INTO `tbl_driver_schedules` VALUES ('13', '1', null, '1', '1', '1', null, null, '13:00', '22:00');

-- ----------------------------
-- Table structure for tbl_jeepbyoperator
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jeepbyoperator`;
CREATE TABLE `tbl_jeepbyoperator` (
  `jeepney_no` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`jeepney_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_jeepbyoperator
-- ----------------------------
INSERT INTO `tbl_jeepbyoperator` VALUES ('J01-045', '17', null);
INSERT INTO `tbl_jeepbyoperator` VALUES ('J01-046', '28', '13');
INSERT INTO `tbl_jeepbyoperator` VALUES ('J01-060', '17', null);
INSERT INTO `tbl_jeepbyoperator` VALUES ('J01-100', '17', null);
INSERT INTO `tbl_jeepbyoperator` VALUES ('test', '29', null);

-- ----------------------------
-- Table structure for tbl_posts
-- ----------------------------
DROP TABLE IF EXISTS `tbl_posts`;
CREATE TABLE `tbl_posts` (
  `post_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `driver_id` int(10) DEFAULT NULL,
  `driver_name` varchar(255) DEFAULT NULL,
  `violation` varchar(255) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `post_status` varchar(255) DEFAULT NULL,
  `date_time` varchar(255) DEFAULT NULL,
  `photo` longblob,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_posts
-- ----------------------------
INSERT INTO `tbl_posts` VALUES ('86', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', null, 'Hindi sumusunod sa traffic lights', 'pending', '2017-10-05 01:05:39', null);
INSERT INTO `tbl_posts` VALUES ('87', '2', 'Justine Jared Perez', '8', 'Derick Grade', 'No uniform', null, 'pending', '2017-10-05 10:30:35', null);
INSERT INTO `tbl_posts` VALUES ('88', '2', 'Justine Jared Perez', '8', 'Derick Grade', 'No uniform', null, 'pending', '2017-10-05 10:30:49', null);
INSERT INTO `tbl_posts` VALUES ('89', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'Smoking', null, 'pending', '2017-10-05 15:00:16', null);
INSERT INTO `tbl_posts` VALUES ('90', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'Smoking', null, 'pending', '2017-10-05 15:08:23', null);
INSERT INTO `tbl_posts` VALUES ('91', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'driving under the influence of liquor.  , Non wearing of proper current identification card. , No uniform', null, 'pending', '2017-10-05 16:22:32', null);
INSERT INTO `tbl_posts` VALUES ('92', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'No uniform', null, 'pending', '2017-10-05 16:24:32', null);
INSERT INTO `tbl_posts` VALUES ('93', '2', 'Justine Jared Perez', '8', 'Derick Grade', 'Disregarding traffic sign or signal. , Loading and unloading at the street corner. , Non wearing of proper current identification card. , Non posting of current passenger fare , No uniform , Trip cutting', null, 'pending', '2017-10-05 16:27:35', null);
INSERT INTO `tbl_posts` VALUES ('95', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Loading and unloading at the middle of the street. , Loading and unloading at the street corner. , Refusal of convey passenger. , Non wearing of proper current identification card. , Non posting of current passenger fare , No uniform , Obstruction to traf', null, 'pending', '2017-10-05 16:28:05', null);
INSERT INTO `tbl_posts` VALUES ('96', '2', 'Justine Jared Perez', '8', 'Derick Grade', 'Discourteous disrespectful conduct to passenger. , Disobedience to the traffic officer. , Disregarding traffic sign or signal. , driving under the influence of liquor.  , Loading and unloading at the middle of the street. , Loading and unloading at the st', null, 'pending', '2017-10-05 16:28:22', null);
INSERT INTO `tbl_posts` VALUES ('97', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Disregarding traffic sign or signal. , Loading and unloading at the street corner. , Refusal of convey passenger. , No uniform , Obstruction to traffic', null, 'pending', '2017-10-05 16:28:31', null);
INSERT INTO `tbl_posts` VALUES ('98', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'Disobedience to the traffic officer. , driving under the influence of liquor.  , Loading and unloading at the middle of the street. , Loading and unloading at the street corner. , Non posting of current passenger fare , Over charging of fare , Illegal U T', null, 'pending', '2017-10-05 16:28:40', null);
INSERT INTO `tbl_posts` VALUES ('101', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'Disobedience to the traffic officer. , Loading and unloading at the middle of the street. , Loading and unloading at the street corner. , Refusal of convey passenger. , Non posting of current passenger fare , Over charging of fare , Trip cutting , Use cel', null, 'pending', '2017-10-05 16:29:23', null);
INSERT INTO `tbl_posts` VALUES ('103', '2', 'Justine Jared Perez', '8', 'Derick Grade', 'Over loading', null, 'pending', '2017-10-19 03:04:36', null);
INSERT INTO `tbl_posts` VALUES ('104', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Over loading', null, 'pending', '2017-10-19 03:07:26', null);
INSERT INTO `tbl_posts` VALUES ('107', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'No uniform , Over loading', null, 'pending', '2017-10-19 03:14:44', null);
INSERT INTO `tbl_posts` VALUES ('109', '2', 'Justine Jared Perez', '8', 'Derick Grade', 'Non wearing of proper current identification card. , Over loading', null, 'pending', '2017-10-19 03:15:47', null);
INSERT INTO `tbl_posts` VALUES ('110', '2', 'Justine Jared Perez', '8', 'Derick Grade', 'Loading and unloading at the street corner. , Over loading', null, 'pending', '2017-10-19 03:24:32', null);
INSERT INTO `tbl_posts` VALUES ('112', '19', 'kent salazar', '7', 'Jose Carlos Un', 'Discourteous disrespectful conduct to passenger. , Disobedience to the traffic officer.', null, 'resolved', '2017-10-19 15:40:41', null);
INSERT INTO `tbl_posts` VALUES ('113', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'Discourteous disrespectful conduct to passenger. , Disobedience to the traffic officer.', null, 'resolved', '2017-10-30 17:59:13', null);
INSERT INTO `tbl_posts` VALUES ('114', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Use cellphone while driving', null, 'pending', '2017-11-06 03:16:59', null);
INSERT INTO `tbl_posts` VALUES ('115', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Use cellphone while driving', null, 'pending', '2017-11-06 03:25:51', null);
INSERT INTO `tbl_posts` VALUES ('116', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Over charging of fare , Over loading , Trip cutting', null, 'pending', '2017-11-06 03:39:45', null);
INSERT INTO `tbl_posts` VALUES ('117', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'No uniform', null, 'pending', '2017-11-06 03:42:26', null);
INSERT INTO `tbl_posts` VALUES ('118', '2', 'Justine Jared Perez', '8', 'Derick Grade', 'Discourteous disrespectful conduct to passenger.', null, 'pending', '2017-11-06 03:45:52', null);
INSERT INTO `tbl_posts` VALUES ('119', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'No uniform', null, 'pending', '2017-11-06 11:40:11', null);
INSERT INTO `tbl_posts` VALUES ('120', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'No uniform , Obstruction to traffic', null, 'pending', '2017-11-06 11:56:31', null);
INSERT INTO `tbl_posts` VALUES ('121', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Trip cutting', null, 'pending', '2017-11-06 11:59:39', null);
INSERT INTO `tbl_posts` VALUES ('122', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'Smoking', null, 'pending', '2017-11-06 12:04:02', null);
INSERT INTO `tbl_posts` VALUES ('123', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Smoking', null, 'pending', '2017-11-06 12:06:47', null);
INSERT INTO `tbl_posts` VALUES ('124', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Smoking', null, 'pending', '2017-11-06 12:07:32', null);
INSERT INTO `tbl_posts` VALUES ('125', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'No uniform', null, 'pending', '2017-11-06 12:09:15', null);
INSERT INTO `tbl_posts` VALUES ('126', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Smoking', null, 'pending', '2017-11-06 12:15:30', null);
INSERT INTO `tbl_posts` VALUES ('127', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'No uniform', null, 'pending', '2017-11-06 12:23:01', null);
INSERT INTO `tbl_posts` VALUES ('128', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'Over loading', null, 'pending', '2017-11-06 12:25:50', null);
INSERT INTO `tbl_posts` VALUES ('129', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'Use cellphone while driving', null, 'pending', '2017-11-06 12:32:32', null);
INSERT INTO `tbl_posts` VALUES ('130', '2', 'Justine Jared Perez', '7', 'Jose Carlos Un', 'Smoking', null, 'pending', '2017-11-06 12:35:28', null);
INSERT INTO `tbl_posts` VALUES ('131', '2', 'Justine Jared Perez', '6', 'Benedict Dimaala', 'Use cellphone while driving', null, 'pending', '2017-11-06 12:36:01', null);

-- ----------------------------
-- Table structure for tbl_schedule_records
-- ----------------------------
DROP TABLE IF EXISTS `tbl_schedule_records`;
CREATE TABLE `tbl_schedule_records` (
  `driver_id` int(11) DEFAULT NULL,
  `day_of_work` varchar(255) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_schedule_records
-- ----------------------------
INSERT INTO `tbl_schedule_records` VALUES ('6', null, null);
INSERT INTO `tbl_schedule_records` VALUES ('7', null, null);
INSERT INTO `tbl_schedule_records` VALUES ('8', null, null);
INSERT INTO `tbl_schedule_records` VALUES ('12', null, null);
INSERT INTO `tbl_schedule_records` VALUES ('13', null, null);

-- ----------------------------
-- Table structure for tbl_uploaded_images
-- ----------------------------
DROP TABLE IF EXISTS `tbl_uploaded_images`;
CREATE TABLE `tbl_uploaded_images` (
  `post_id` int(11) NOT NULL,
  `uploaded_image` varchar(255) DEFAULT NULL,
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_uploaded_images
-- ----------------------------
INSERT INTO `tbl_uploaded_images` VALUES ('0', null, '0');
INSERT INTO `tbl_uploaded_images` VALUES ('1', '22192.jpg', '1');
INSERT INTO `tbl_uploaded_images` VALUES ('2', '14633.jpg', '2');
INSERT INTO `tbl_uploaded_images` VALUES ('3', '25065.jpg', '3');
INSERT INTO `tbl_uploaded_images` VALUES ('4', '24174.jpg', '4');
INSERT INTO `tbl_uploaded_images` VALUES ('5', '26895.jpg', '5');
INSERT INTO `tbl_uploaded_images` VALUES ('6', '32156.JPG', '6');
INSERT INTO `tbl_uploaded_images` VALUES ('7', '16643.mp4', '7');
INSERT INTO `tbl_uploaded_images` VALUES ('115', '2458.jpeg', '9');
INSERT INTO `tbl_uploaded_images` VALUES ('8', '9610.jpg', '10');
INSERT INTO `tbl_uploaded_images` VALUES ('127', '14757.jpg', '11');
INSERT INTO `tbl_uploaded_images` VALUES ('128', '14331.jpg', '12');
INSERT INTO `tbl_uploaded_images` VALUES ('129', '24.gif', '13');
INSERT INTO `tbl_uploaded_images` VALUES ('130', '2673.jpeg', '14');

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `pword` varchar(255) DEFAULT NULL,
  `user_level` varchar(10) DEFAULT NULL,
  `account_verify` tinyint(1) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('1', 'Benedict', 'Dimaala', '1234567890', 'ben@yahoo.com', 'benben', '$2y$10$0fHilGKN2PDb0FwJOxnt5./1Mt71FyFqHnm1/sjWEkMEJTf6B4JVG', 'user', '0', null);
INSERT INTO `tbl_users` VALUES ('2', 'Justine Jared', 'Perez', '09277170087', 'jj.perez.zas@gmail.com', 'tino', '$2y$10$j.Flm1gzVC7dGEq/xmCtIuSmn0nMyL3qEkgNpz1KbCVj7Sk1nBJKO', 'user', '1', null);
INSERT INTO `tbl_users` VALUES ('5', 'Admin', 'OTMPS', '1234567890', 'adminotmps@gmail.com', 'just', '$2y$10$h12KYJ7iYWotq2Dy46Br8.4yvJfUx75.EaBOU9DyiBCJrb.Tf0Yka', 'admin', '0', null);
INSERT INTO `tbl_users` VALUES ('10', 'fet', 'fet', 'fet', 'a@a', 'fet', '$2y$10$Fx4BbFfEjTWNN9R71/Io2efxXSBW8haOQDpemK2RcwXVJVEr38pry', 'user', '0', null);
INSERT INTO `tbl_users` VALUES ('13', 'jose', 'un', '09077624991', 'a@a', 'jcun3', '$2y$10$wDpedopYWfZO0BgzgT.Bo.nO9Kj80AefBgeNzT8SoOize1jNdMwLe', 'user', '0', null);
INSERT INTO `tbl_users` VALUES ('14', 'Derick', 'Grade', '09840619', 'a@a', 'derick', '$2y$10$QEyXGpGYHpFH177oY9n3a.N/1jaUdHdApNmjIJg1deNB6nffbXp2m', 'user', '1', null);
INSERT INTO `tbl_users` VALUES ('17', 'Lawrencebrot', 'Lendez', '09215546789', 'rence@gmail.com', 'brot', 'brot', 'operator', '0', null);
INSERT INTO `tbl_users` VALUES ('18', 'Marjie', 'Marmito', '09994223652', 'marj.marmito@gmail.com', 'marjie', '$2y$10$u.VuFB47tNopeX7aUUZ4j.CH0yy0cTD9xnu2dBIEMchBVlMlo7C6y', 'user', '1', null);
INSERT INTO `tbl_users` VALUES ('19', 'kent', 'salazar', '09077624991', 'kent@gmail.com', 'kent1', '$2y$10$KkSja5kVuCwuQ9/xa/nZ7e1JJNKTbjTLzOgzaxlX/2c9wi/OvTEFO', 'user', '0', null);
INSERT INTO `tbl_users` VALUES ('28', 'Isiah', 'Symoens', '09495780178', 'sai@gmail.com', 'sai', '$2y$10$mnD4HmB9v1AFcVb628Oh6.QnKWNpzf5HBSnpEFIr1QgrKFZXatWvy', 'operator', '0', null);
INSERT INTO `tbl_users` VALUES ('29', 'maricar', 'Leong', '09482471492', 'heartdelacruz0916@gmail.com', 'maricar', '$2y$10$SN79Win9vm77UPVGUfSwtOUrZ1IGCBIOsSVz0hAbAN874CnNLJjfG', 'user', '1', null);
