-- DROP TABLE IF EXISTS `s_order_new`;
-- CREATE TABLE `s_order_new` (
--   `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '自动生成',
--   `order_no` varchar(255) DEFAULT NULL COMMENT '订单编号',
--   `order_num` int(11) DEFAULT NULL COMMENT '订单数量',
--   `create_time` datetime DEFAULT NULL COMMENT '创建时间',
--   `effective_time` datetime DEFAULT NULL COMMENT '生效时间',
--   `end_time` datetime DEFAULT NULL COMMENT '截止时间',
--   `route_id` bigint(20) DEFAULT NULL COMMENT '通路ID',
--   `area_id` bigint(20) DEFAULT NULL COMMENT '区域ID',
--   `product_id` bigint(20) DEFAULT NULL COMMENT '产品ID',
--   `office_id` bigint(20) DEFAULT NULL COMMENT '服务商ID',
--   `xl` int(11) DEFAULT NULL COMMENT '销量',
--   `zc` int(11) DEFAULT NULL COMMENT '注册',
--   `cx` int(11) DEFAULT NULL COMMENT '出险',
--   `buy_name` varchar(255) DEFAULT NULL COMMENT '购买人',
--   `buy_phone` varchar(255) DEFAULT NULL COMMENT '购买人手机号',
--   `brand_id` bigint(20) DEFAULT NULL COMMENT '品牌ID',
--   `model_id` bigint(20) DEFAULT NULL COMMENT '型号ID',
--   `active_user_id` bigint(20) DEFAULT NULL COMMENT '激活人',
--   `type` bigint(20) DEFAULT NULL COMMENT '设备类型',
--   `accident_time` datetime DEFAULT NULL COMMENT '出险时间',
--   PRIMARY KEY (`id`),
--   KEY `FK5B857DAD2DED71A` (`id`) USING BTREE,
--   KEY `FK5B867DAD2DED71A` (`route_id`) USING BTREE,
--   KEY `area_id` (`area_id`) USING BTREE,
--   KEY `office_id` (`office_id`) USING BTREE,
--   KEY `product_id` (`product_id`) USING BTREE,
--   KEY `brand_id` (`brand_id`) USING BTREE
-- ) ENGINE=InnoDB AUTO_INCREMENT=2334953799 DEFAULT CHARSET=utf8 COMMENT='单个订单统计表';


DROP TABLE IF EXISTS `z_user`; 
CREATE TABLE `le_user` (                                                /*!*/                     
  `id` int(11) NOT NULL AUTO_INCREMENT,                                 /*!*/         
  `userAccount` varchar(255) DEFAULT NULL,                              /*!用户账户*/
  `userAddress` varchar(255) DEFAULT NULL,                               /*!用户地址*/
  `userArea` varchar(255) DEFAULT NULL,                                  /*!用户地区*/
  `userBirthday` varchar(255) DEFAULT NULL,                              /*!用户生日*/
  `userCity` varchar(255) DEFAULT NULL,                                  /*!用户城市*/
  `userCountry` varchar(255) DEFAULT NULL,                               /*!用户国家*/
  `userEmail` varchar(255) DEFAULT NULL,                                 /*!用户email*/
  `userFamilyNameCh` varchar(255) DEFAULT NULL,                           /*!*/
  `userFamilyNameEn` varchar(255) DEFAULT NULL,                            /*!*/
  `userIdcard` varchar(255) DEFAULT NULL,                               /*!身份证*/
  `userMobile` varchar(255) DEFAULT NULL,                               /*!手机*/
  `userNameCh` varchar(255) DEFAULT NULL,                                /*!*/
  `userNameEn` varchar(255) DEFAULT NULL,                               /*!*/
  `userPwd` varchar(255) DEFAULT NULL,                                  /*!密码*/
  `userSex` int(11) DEFAULT NULL,                                       /*!性别*/
  `userStatus` int(11) DEFAULT NULL,                                    /*!状态*/
  `userStreet` varchar(255) DEFAULT NULL,                               /*!街道*/
  `userTelnum` varchar(255) DEFAULT NULL,                               /*!电话*/
  `userZipcode` varchar(255) DEFAULT NULL,                               /*!邮编*/
  `role_id` int(11) DEFAULT NULL,                                       /*!角色ID*/
  `create_time` datetime DEFAULT NULL,                                   /*!创建时间*/
  `firstLogin` tinyint(1) DEFAULT NULL,                                 /*!首次登陆*/
  `posId` bigint(20) NOT NULL,                                          /*!销售ID*/
  `portrait_id` bigint(20) DEFAULT NULL,                                /*!肖像ID*/
  `reserve_phone` varchar(255) DEFAULT NULL,                            /*!备用电话*/
  `user_idcard` varchar(20) DEFAULT NULL,                               /*!用户证件号*/
  PRIMARY KEY (`id`),
  KEY `FK2EC1AD1FB493C53` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42878 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='终端用户表';



-- DROP TABLE IF EXISTS `z_user`; 
-- CREATE TABLE `z_user` (                                                /*!*/                     
--   `id` int(11) NOT NULL AUTO_INCREMENT,                                 /*!*/         
--   `userAddress` varchar(255) DEFAULT NULL COMMENT '用户地址',                               /*!用户地址*/
--   `userArea` varchar(255) DEFAULT NULL COMMENT '用户地区',                                  /*!用户地区*/
--   `userBirthday` varchar(255) DEFAULT NULL COMMENT '用户生日',                              /*!用户生日*/
--   `userCity` varchar(255) DEFAULT NULL COMMENT '用户城市',                                  /*!用户城市*/
--   `userCountry` varchar(255) DEFAULT NULL COMMENT '用户国籍',                               /*!用户国家*/
--   `userEmail` varchar(255) DEFAULT NULL COMMENT '邮箱',                                 /*!用户email*/
--   `userIdcard` varchar(255) DEFAULT NULL COMMENT '身份证',                               /*!身份证*/
--   `userMobile` varchar(255) DEFAULT NULL COMMENT '手机',                               /*!手机*/
--   `userPwd` varchar(255) DEFAULT NULL COMMENT '密码',                                  /*!密码*/
--   `userSex` int(11) DEFAULT NULL COMMENT '性别',                                       /*!性别*/
--   `userStatus` int(11) DEFAULT NULL COMMENT '状态',                                    /*!状态*/
--   `userStreet` varchar(255) DEFAULT NULL COMMENT '街道',                               /*!街道*/
--   `userTelnum` varchar(255) DEFAULT NULL COMMENT '电话',                               /*!电话*/
--   `userZipcode` varchar(255) DEFAULT NULL COMMENT '邮编',                               /*!邮编*/
--   `role_id` int(11) DEFAULT NULL COMMENT '角色ID',                                       /*!角色ID*/
--   `create_time` datetime DEFAULT NULL COMMENT '创建时间',                                   /*!创建时间*/
--   `firstLogin` tinyint(1) DEFAULT NULL COMMENT '首次登陆',                                 /*!首次登陆*/
--   `posId` bigint(20) NOT NULL COMMENT '销售ID',                                          /*!销售ID*/
--   `portrait_id` bigint(20) DEFAULT NULL COMMENT '肖像ID',                                /*!肖像ID*/
--   `reserve_phone` varchar(255) DEFAULT NULL COMMENT '备用电话',                            /*!备用电话*/
--   `user_idcard` varchar(20) DEFAULT NULL COMMENT '用户证件号',                               /*!用户证件号*/
--   PRIMARY KEY (`id`),
--   KEY `FK2EC1AD1FB493C53` (`role_id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='终端用户表';


