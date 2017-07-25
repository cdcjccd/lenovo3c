/*
Navicat MySQL Data Transfer

Source Server         : cd
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : lenovo3c

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-05-25 18:51:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for z_user
-- ----------------------------
DROP TABLE IF EXISTS `z_user`;
CREATE TABLE `z_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userAccount` varchar(255) DEFAULT NULL,
  `userAddress` varchar(255) DEFAULT NULL COMMENT '用户地址',
  `userArea` varchar(255) DEFAULT NULL COMMENT '地区',
  `userBirthday` varchar(255) DEFAULT NULL COMMENT '生日',
  `userCity` varchar(255) DEFAULT NULL COMMENT '城市',
  `userCountry` varchar(255) DEFAULT NULL COMMENT '国家',
  `userEmail` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `userFamilyNameCh` varchar(255) DEFAULT NULL,
  `userFamilyNameEn` varchar(255) DEFAULT NULL,
  `userIdcard` varchar(255) DEFAULT NULL COMMENT '身份证',
  `userMobile` varchar(255) DEFAULT NULL COMMENT '手机',
  `userNameCh` varchar(255) DEFAULT NULL,
  `userNameEn` varchar(255) DEFAULT NULL,
  `userPwd` varchar(255) DEFAULT NULL COMMENT '密码',
  `userSex` int(11) DEFAULT NULL COMMENT '性别',
  `userStatus` int(11) DEFAULT NULL COMMENT '状态',
  `userStreet` varchar(255) DEFAULT NULL COMMENT '街道',
  `userTelnum` varchar(255) DEFAULT NULL COMMENT '电话',
  `userZipcode` varchar(255) DEFAULT NULL COMMENT '邮编',
  `role_id` int(11) DEFAULT NULL COMMENT '角色ID',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `firstLogin首次登录时间` tinyint(1) DEFAULT NULL,
  `posId` bigint(20) NOT NULL COMMENT '销售id',
  `portrait_id` bigint(20) DEFAULT NULL COMMENT '肖像id',
  `reserve_phone` varchar(255) DEFAULT NULL COMMENT '备用电话',
  `user_idcard` varchar(20) DEFAULT NULL COMMENT '证件号',
  PRIMARY KEY (`id`),
  KEY `FK2EC1AD1FB493C53` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42878 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='终端用户表';
