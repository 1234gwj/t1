/*
Navicat MySQL Data Transfer

Source Server         : photo
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : ewm

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-10-25 20:51:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for login_rg
-- ----------------------------
DROP TABLE IF EXISTS `login_rg`;
CREATE TABLE `login_rg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
