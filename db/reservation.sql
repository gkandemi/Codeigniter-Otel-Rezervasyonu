/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : 127.0.0.1:3306
Source Database       : reservation

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-09-04 23:57:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `address` text COLLATE utf8_turkish_ci,
  `phone` varchar(17) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(17) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mission` longtext COLLATE utf8_turkish_ci,
  `vision` longtext COLLATE utf8_turkish_ci,
  `about_us` longtext COLLATE utf8_turkish_ci,
  `logo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bank_account` text COLLATE utf8_turkish_ci,
  `tax_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mersis_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `google_analytics` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `map_att` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `map_lat` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `meta_keyword` varchar(160) COLLATE utf8_turkish_ci DEFAULT NULL,
  `meta_description` varchar(260) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'KablosuzKedi', 'Kadikoy', '05077158109', '#', 'admin@kablosuzkedi.com', 'www.kablosuzkedi.com', '/kablosukedi', '/kablosukedi', '/kablosukedi', '/kablosukedi', '/kablosukedi', '/kablosukedi', 'miston', 'visyon', 'egitim oteli', null, null, null, null, null, null, null, null, null, '1');

-- ----------------------------
-- Table structure for room
-- ----------------------------
DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `detail` text COLLATE utf8_turkish_ci,
  `size` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `room_code` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `default_price` float(10,2) DEFAULT NULL,
  `room_type_id` int(11) DEFAULT NULL,
  `bed_type` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bed_count` int(11) DEFAULT NULL,
  `room_capacity` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `room_properties` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `room_extra_services` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room
-- ----------------------------
INSERT INTO `room` VALUES ('1', 'İlk oda', '<p>aşlsdaşdkaslşdkdlşdskdlşklş adaksdşlaskldş</p>\r\n', '5m2', '101', '19.00', '2', null, null, '3', '1', '1', '1;4', '1');
INSERT INTO `room` VALUES ('2', '123123', '<p>123123133</p>\r\n', '1212', '121', '1212.00', '3', null, null, '7', '1', '0', '3;5', '1;2');

-- ----------------------------
-- Table structure for room_availability
-- ----------------------------
DROP TABLE IF EXISTS `room_availability`;
CREATE TABLE `room_availability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `daily_date` date DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room_availability
-- ----------------------------
INSERT INTO `room_availability` VALUES ('65', '2016-08-01', '2', '1');
INSERT INTO `room_availability` VALUES ('66', '2016-08-02', '2', '1');
INSERT INTO `room_availability` VALUES ('67', '2016-08-03', '2', '1');
INSERT INTO `room_availability` VALUES ('68', '2016-08-04', '2', '1');
INSERT INTO `room_availability` VALUES ('69', '2016-08-05', '2', '1');
INSERT INTO `room_availability` VALUES ('70', '2016-08-06', '2', '1');
INSERT INTO `room_availability` VALUES ('71', '2016-08-07', '2', '1');
INSERT INTO `room_availability` VALUES ('72', '2016-08-08', '2', '1');
INSERT INTO `room_availability` VALUES ('73', '2016-08-09', '2', '1');
INSERT INTO `room_availability` VALUES ('74', '2016-08-10', '2', '1');
INSERT INTO `room_availability` VALUES ('75', '2016-08-11', '2', '1');
INSERT INTO `room_availability` VALUES ('76', '2016-08-12', '2', '1');
INSERT INTO `room_availability` VALUES ('77', '2016-08-13', '2', '1');
INSERT INTO `room_availability` VALUES ('78', '2016-09-04', '1', '1');
INSERT INTO `room_availability` VALUES ('79', '2016-09-05', '1', '1');
INSERT INTO `room_availability` VALUES ('80', '2016-09-06', '1', '1');
INSERT INTO `room_availability` VALUES ('81', '2016-09-07', '1', '0');
INSERT INTO `room_availability` VALUES ('82', '2016-09-08', '1', '0');
INSERT INTO `room_availability` VALUES ('83', '2016-09-01', '2', '1');
INSERT INTO `room_availability` VALUES ('84', '2016-09-02', '2', '1');
INSERT INTO `room_availability` VALUES ('85', '2016-09-04', '2', '1');
INSERT INTO `room_availability` VALUES ('86', '2016-09-01', '1', '1');
INSERT INTO `room_availability` VALUES ('87', '2016-09-02', '1', '1');
INSERT INTO `room_availability` VALUES ('88', '2016-09-03', '1', '1');
INSERT INTO `room_availability` VALUES ('89', '2016-09-09', '1', '1');
INSERT INTO `room_availability` VALUES ('90', '2016-09-10', '1', '1');
INSERT INTO `room_availability` VALUES ('91', '2016-09-11', '1', '1');
INSERT INTO `room_availability` VALUES ('92', '2016-09-12', '1', '1');
INSERT INTO `room_availability` VALUES ('93', '2016-09-13', '1', '1');
INSERT INTO `room_availability` VALUES ('94', '2016-09-14', '1', '1');
INSERT INTO `room_availability` VALUES ('95', '2016-09-15', '1', '1');
INSERT INTO `room_availability` VALUES ('96', '2016-09-16', '1', '1');
INSERT INTO `room_availability` VALUES ('97', '2016-09-17', '1', '1');
INSERT INTO `room_availability` VALUES ('98', '2016-09-18', '1', '1');
INSERT INTO `room_availability` VALUES ('99', '2016-09-19', '1', '1');
INSERT INTO `room_availability` VALUES ('100', '2016-09-20', '1', '1');
INSERT INTO `room_availability` VALUES ('101', '2016-09-21', '1', '1');
INSERT INTO `room_availability` VALUES ('102', '2016-09-22', '1', '1');
INSERT INTO `room_availability` VALUES ('103', '2016-09-23', '1', '1');
INSERT INTO `room_availability` VALUES ('104', '2016-09-24', '1', '1');
INSERT INTO `room_availability` VALUES ('105', '2016-09-25', '1', '1');
INSERT INTO `room_availability` VALUES ('106', '2016-09-26', '1', '1');
INSERT INTO `room_availability` VALUES ('107', '2016-09-27', '1', '1');
INSERT INTO `room_availability` VALUES ('108', '2016-09-28', '1', '1');
INSERT INTO `room_availability` VALUES ('109', '2016-09-29', '1', '1');
INSERT INTO `room_availability` VALUES ('110', '2016-09-30', '1', '1');
INSERT INTO `room_availability` VALUES ('111', '2016-12-01', '1', '1');
INSERT INTO `room_availability` VALUES ('112', '2016-12-02', '1', '1');
INSERT INTO `room_availability` VALUES ('113', '2016-12-03', '1', '1');
INSERT INTO `room_availability` VALUES ('114', '2016-12-04', '1', '1');
INSERT INTO `room_availability` VALUES ('115', '2016-12-05', '1', '1');
INSERT INTO `room_availability` VALUES ('116', '2016-12-06', '1', '1');
INSERT INTO `room_availability` VALUES ('117', '2016-12-07', '1', '1');
INSERT INTO `room_availability` VALUES ('118', '2016-12-08', '1', '1');
INSERT INTO `room_availability` VALUES ('119', '2016-12-09', '1', '1');
INSERT INTO `room_availability` VALUES ('120', '2016-12-10', '1', '1');
INSERT INTO `room_availability` VALUES ('121', '2016-12-11', '1', '1');
INSERT INTO `room_availability` VALUES ('122', '2016-12-12', '1', '1');
INSERT INTO `room_availability` VALUES ('123', '2016-12-13', '1', '1');
INSERT INTO `room_availability` VALUES ('124', '2016-12-14', '1', '1');
INSERT INTO `room_availability` VALUES ('125', '2016-12-15', '1', '1');
INSERT INTO `room_availability` VALUES ('126', '2016-11-14', '1', '1');
INSERT INTO `room_availability` VALUES ('127', '2016-11-15', '1', '1');
INSERT INTO `room_availability` VALUES ('128', '2016-11-16', '1', '1');
INSERT INTO `room_availability` VALUES ('129', '2016-11-17', '1', '1');

-- ----------------------------
-- Table structure for room_category
-- ----------------------------
DROP TABLE IF EXISTS `room_category`;
CREATE TABLE `room_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `isActive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room_category
-- ----------------------------
INSERT INTO `room_category` VALUES ('1', 'Shared Room', '5', '1');
INSERT INTO `room_category` VALUES ('2', 'Double Room', '3', '0');
INSERT INTO `room_category` VALUES ('3', 'Suit room', '4', '0');
INSERT INTO `room_category` VALUES ('6', 'Kamill', '6', '1');
INSERT INTO `room_category` VALUES ('7', 'Poğaça Bey', '2', '1');
INSERT INTO `room_category` VALUES ('8', 'tfjghjfgjhf', '1', null);

-- ----------------------------
-- Table structure for room_extra_services
-- ----------------------------
DROP TABLE IF EXISTS `room_extra_services`;
CREATE TABLE `room_extra_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room_extra_services
-- ----------------------------
INSERT INTO `room_extra_services` VALUES ('1', 'deneme', null, null, '1');
INSERT INTO `room_extra_services` VALUES ('2', 'dghfhhh', null, null, '1');

-- ----------------------------
-- Table structure for room_image
-- ----------------------------
DROP TABLE IF EXISTS `room_image`;
CREATE TABLE `room_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isCover` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room_image
-- ----------------------------
INSERT INTO `room_image` VALUES ('21', 'f9738bfe3cf98e87e5c1773e370693a7.JPG', '1', '1', '1', '1');
INSERT INTO `room_image` VALUES ('22', '4604e5d23a69dd4c82885d156936255b.JPG', '2', '1', '0', '1');

-- ----------------------------
-- Table structure for room_pricing
-- ----------------------------
DROP TABLE IF EXISTS `room_pricing`;
CREATE TABLE `room_pricing` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `price` double(10,2) DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of room_pricing
-- ----------------------------
INSERT INTO `room_pricing` VALUES ('36', '2016-09-04', '2', '20.00');
INSERT INTO `room_pricing` VALUES ('37', '2016-09-05', '2', '45.00');
INSERT INTO `room_pricing` VALUES ('38', '2016-09-04', '1', '60.00');
INSERT INTO `room_pricing` VALUES ('39', '2016-09-06', '1', '34.00');

-- ----------------------------
-- Table structure for room_properties
-- ----------------------------
DROP TABLE IF EXISTS `room_properties`;
CREATE TABLE `room_properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT '0',
  `isActive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room_properties
-- ----------------------------
INSERT INTO `room_properties` VALUES ('1', 'deneme12', null, '2', '1');
INSERT INTO `room_properties` VALUES ('3', 'xcvxcv', null, '0', '1');
INSERT INTO `room_properties` VALUES ('4', 'vbnvbnvn', null, '3', '1');
INSERT INTO `room_properties` VALUES ('5', 'bnmbnmb', null, '1', '1');
