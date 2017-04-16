/*
Navicat MySQL Data Transfer

Source Server         : forum
Source Server Version : 50540
Source Host           : www.cloudconfs.com:3306
Source Database       : forum

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-04-16 23:07:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adn_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `adn_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `adn_account` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `adn_password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `adn_phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `adn_date` date DEFAULT NULL,
  `adn_state` tinyint(4) DEFAULT '1',
  `adn_address` text CHARACTER SET utf8,
  PRIMARY KEY (`adn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', '123', 'admin', '1234567', '123123', '2017-04-06', '1', '123123');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cty_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cty_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cty_date` date DEFAULT NULL,
  `cty_state` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`cty_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '2312312', '2017-04-10', '0');
INSERT INTO `category` VALUES ('2', 'l', '2017-04-10', '0');
INSERT INTO `category` VALUES ('3', 'ttt', '2017-04-11', '0');
INSERT INTO `category` VALUES ('4', 'tttt', '2017-04-15', '1');
INSERT INTO `category` VALUES ('5', '33', '2017-04-15', '0');

-- ----------------------------
-- Table structure for logo
-- ----------------------------
DROP TABLE IF EXISTS `logo`;
CREATE TABLE `logo` (
  `logo_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `logo_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `logo_img` text CHARACTER SET utf8,
  `logo_state` tinyint(4) DEFAULT '1',
  `logo_date` date DEFAULT NULL,
  `logo_content` text CHARACTER SET utf8,
  PRIMARY KEY (`logo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of logo
-- ----------------------------
INSERT INTO `logo` VALUES ('1', 'XX论坛1', 'http://localhost/forum/upload/logo-17785.jpg', '1', '2017-04-15', 'sdasdsa');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `news_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `news_content` text CHARACTER SET utf8,
  `news_address` text CHARACTER SET utf8,
  `news_img` text CHARACTER SET utf8,
  `news_date` date DEFAULT NULL,
  `news_state` tinyint(4) DEFAULT '1' COMMENT '新闻表',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for note
-- ----------------------------
DROP TABLE IF EXISTS `note`;
CREATE TABLE `note` (
  `note_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `note_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `note_content` text CHARACTER SET utf8,
  `note_user` bigint(20) DEFAULT NULL,
  `note_date` datetime DEFAULT NULL,
  `note_state` tinyint(4) DEFAULT '1' COMMENT '帖子',
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of note
-- ----------------------------

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `type_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type_date` date DEFAULT NULL,
  `type_state` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', null, '2017-04-11', '0');
INSERT INTO `type` VALUES ('2', '322221111', '2017-04-11', '1');
INSERT INTO `type` VALUES ('3', '222', '2017-04-11', '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_age` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_sex` tinyint(4) DEFAULT NULL,
  `user_date` date DEFAULT NULL,
  `user_state` tinyint(4) DEFAULT '1' COMMENT '用户表',
  `user_phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_nickname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
