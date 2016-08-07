/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : 127.0.0.1:3306
Source Database       : reservation

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-07-25 00:23:50
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of contact
-- ----------------------------

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
  `rank` int(11) DEFAULT NULL,
  `room_properties` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `room_extra_services` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room
-- ----------------------------

-- ----------------------------
-- Table structure for room_category
-- ----------------------------
DROP TABLE IF EXISTS `room_category`;
CREATE TABLE `room_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room_category
-- ----------------------------
INSERT INTO `room_category` VALUES ('1', 'Shared Room', null, '1');
INSERT INTO `room_category` VALUES ('2', 'Double Room', null, '0');
INSERT INTO `room_category` VALUES ('3', 'Suit room', null, '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room_extra_services
-- ----------------------------

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room_image
-- ----------------------------

-- ----------------------------
-- Table structure for room_properties
-- ----------------------------
DROP TABLE IF EXISTS `room_properties`;
CREATE TABLE `room_properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of room_properties
-- ----------------------------
