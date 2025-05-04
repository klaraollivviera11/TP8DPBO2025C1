/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_university

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2025-05-01 10:00:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `university`
-- ----------------------------
DROP TABLE IF EXISTS `university`;
CREATE TABLE `university` (
  `id_university` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100),
  `website` varchar(100),
  `jenis` varchar(50) NOT NULL, 
  PRIMARY KEY (`id_university`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of university
-- ----------------------------
INSERT INTO `university` VALUES (1, 'Universitas Indonesia', 'Depok, Jawa Barat', 'info@ui.ac.id', 'https://www.ui.ac.id', 'Negeri');
INSERT INTO `university` VALUES (2, 'Institut Teknologi Bandung', 'Bandung, Jawa Barat', 'info@itb.ac.id', 'https://www.itb.ac.id', 'Negeri');

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id_student` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `phone` varchar(20),
  `join_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_university` int(11) NOT NULL,
  PRIMARY KEY (`id_student`),
  KEY `fk_university` (`id_university`),
  CONSTRAINT `fk_university` FOREIGN KEY (`id_university`) REFERENCES `university` (`id_university`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (1, 'Andi Pratama', '2001234567', '081234567890', '2023-08-15', 'Aktif', 1);
INSERT INTO `student` VALUES (2, 'Siti Aminah', '2109876543', '081298765432', '2022-09-01', 'Tidak Aktif', 2);
INSERT INTO `student` VALUES (3, 'Budi Santoso', '1901122334', '081312341234', '2021-07-10', 'Aktif', 1);

SET FOREIGN_KEY_CHECKS=1;
