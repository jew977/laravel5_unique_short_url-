/*
Navicat MySQL Data Transfer

Source Server         : localhsot
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-08-18 17:10:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2015_08_08_061810_create_reviews_table', '1');
INSERT INTO `migrations` VALUES ('2015_08_17_062201_create_urls_table', '2');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `reviews`
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `review_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review_content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of reviews
-- ----------------------------
INSERT INTO `reviews` VALUES ('3', 'hello keti', '说的是sajfkbxmncxvcxczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('4', 'hello hhhsss', '说的是sajfkbxcvxxcvmnczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('5', 'hello sdadxzc', '说的是sajfkfsdfvoes', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('6', 'hello kdfsfseti', '说的是sajfkxccxvbxmnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('7', 'hello kgfgdeti', '说的是sajfkbxmvcxvcnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('8', 'hello keti', '说的是sajfkbxmncxvcxczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('9', 'hello hhhsss', '说的是sajfkbxcvxxcvmnczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('10', 'hello sdadxzc', '说的是sajfkfsdfvoes', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('11', 'hello kdfsfseti', '说的是sajfkxccxvbxmnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('12', 'hello kgfgdeti', '说的是sajfkbxmvcxvcnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('13', 'hello keti', '说的是sajfkbxmncxvcxczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('14', 'hello hhhsss', '说的是sajfkbxcvxxcvmnczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('15', 'hello sdadxzc', '说的是sajfkfsdfvoes', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('16', 'hello kdfsfseti', '说的是sajfkxccxvbxmnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('17', 'hello kgfgdeti', '说的是sajfkbxmvcxvcnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('18', 'hello keti', '说的是sajfkbxmncxvcxczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('19', 'hello hhhsss', '说的是sajfkbxcvxxcvmnczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('20', 'hello sdadxzc', '说的是sajfkfsdfvoes', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('21', 'hello kdfsfseti', '说的是sajfkxccxvbxmnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('22', 'hello kgfgdeti', '说的是sajfkbxmvcxvcnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('23', 'hello keti', '说的是sajfkbxmncxvcxczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('24', 'hello hhhsss', '说的是sajfkbxcvxxcvmnczvoes', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('25', 'hello sdadxzc', '说的是sajfkfsdfvoes', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('26', 'hello kdfsfseti', '说的是sajfkxccxvbxmnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `reviews` VALUES ('27', 'hello kgfgdeti', '说的是sajfkbxmvcxvcnczvoes', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `urls`
-- ----------------------------
DROP TABLE IF EXISTS `urls`;
CREATE TABLE `urls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of urls
-- ----------------------------
INSERT INTO `urls` VALUES ('6', 'http://www.baidu.com', '1pdy', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `urls` VALUES ('7', 'http://www.hzgtyy.com/', '1suw', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `urls` VALUES ('8', 'http://www.ifeng.com', 'cc1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `urls` VALUES ('9', 'http://www.ekan001.com/', 'th4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `urls` VALUES ('10', 'https://github.com', '1bz8', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('11', 'ssss', 'sssss@163.com', '$2y$10$D2cTrB6FQrQJiX9iiqhKWeRlKE.2ysXf/Q8fPl3Hm0bxIL7i0kP6a', null, '2015-08-18 08:38:11', '2015-08-18 08:38:11');
