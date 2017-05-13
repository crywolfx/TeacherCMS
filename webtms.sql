/*
Navicat MySQL Data Transfer

Source Server         : zjing_db
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : webtms

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2017-05-12 16:58:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_admin`
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_workid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`t_id`,`t_workid`),
  KEY `tms_admin` (`t_workid`),
  CONSTRAINT `tms_admin` FOREIGN KEY (`t_workid`) REFERENCES `t_teacher` (`t_workid`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_admin
-- ----------------------------
INSERT INTO `t_admin` VALUES ('1', '20170001');

-- ----------------------------
-- Table structure for `t_message`
-- ----------------------------
DROP TABLE IF EXISTS `t_message`;
CREATE TABLE `t_message` (
  `t_workid` int(10) NOT NULL,
  `t_message` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`t_workid`),
  CONSTRAINT `tms_message` FOREIGN KEY (`t_workid`) REFERENCES `t_teacher` (`t_workid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_message
-- ----------------------------

-- ----------------------------
-- Table structure for `t_pwd`
-- ----------------------------
DROP TABLE IF EXISTS `t_pwd`;
CREATE TABLE `t_pwd` (
  `t_workid` int(10) NOT NULL DEFAULT '0',
  `t_pass` varchar(20) DEFAULT '123456',
  PRIMARY KEY (`t_workid`),
  CONSTRAINT `tms_psw` FOREIGN KEY (`t_workid`) REFERENCES `t_teacher` (`t_workid`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_pwd
-- ----------------------------
INSERT INTO `t_pwd` VALUES ('20170001', '123456');
INSERT INTO `t_pwd` VALUES ('20170002', '123456');

-- ----------------------------
-- Table structure for `t_teacher`
-- ----------------------------
DROP TABLE IF EXISTS `t_teacher`;
CREATE TABLE `t_teacher` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_workid` int(10) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_sex` varchar(4) NOT NULL,
  `t_both` date NOT NULL,
  `t_nationality` varchar(4) NOT NULL,
  `t_idcard` decimal(30,0) NOT NULL,
  `t_calladderss` varchar(20) NOT NULL,
  `t_height` int(10) DEFAULT NULL,
  `t_weight` float(10,0) DEFAULT NULL,
  `t_native` varchar(10) DEFAULT NULL,
  `t_health` varchar(10) DEFAULT NULL,
  `t_call` int(10) DEFAULT NULL,
  `t_email` varchar(20) DEFAULT NULL,
  `t_inworkyear` date DEFAULT NULL,
  `t_qualification` varchar(10) DEFAULT NULL,
  `t_school` varchar(10) DEFAULT NULL,
  `t_department` varchar(10) DEFAULT NULL,
  `t_title` varchar(10) DEFAULT NULL,
  `t_ politics` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`t_id`,`t_workid`),
  KEY `t_id` (`t_id`),
  KEY `t_workid` (`t_workid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_teacher
-- ----------------------------
INSERT INTO `t_teacher` VALUES ('1', '20170001', '张三', '男', '1970-01-01', '汉族', '220220197001012222', '黑龙江大学家属区1号公寓', '175', '60', '黑龙江哈尔滨', '良好', '10086', 'zhangsan@163.com', '1990-01-01', '博士', '黑龙江大学', '中俄学院', '教授', '中共党员');
INSERT INTO `t_teacher` VALUES ('2', '20170002', '李四', '女', '1970-01-02', '汉族', '220220197001022222', '黑龙江大学家属区2号公寓', '176', '61', '黑龙江哈尔滨', '良好', '10087', 'lisi@163.com', '1990-01-01', '硕士', '黑龙江大学', '历史学院', '讲师', '群众');
