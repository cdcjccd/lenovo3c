<?php
namespace Admin\Model;
use Think\Model;
class RegisterModel extends Model {
       //代客激活规则
       protected $_validate = array(  

       				array('verify','require','验证码必须！'), //默认情况下用正则进行验证     
       				array('audit_tong','require','通路不能为空','0'), // 在新增的时候验证name字段是否唯一     
       				array('act_good','require','填写商家名称','0'), // 当值不为空的时候判断是否在一个范围内     
       				array('province','require','填写省份','0'),
       				array('city','require','填写市区','0'), // 验证确认密码是否和密码一致     
       				array('act_address','require','填写详细地址','0'),
       				array('act_channel','require','填写渠道','0'),
       				array('act_brand','require','填写品牌','0'),
       				array('act_model','require','填写型号','0'),
       				array('act_limit','require','填写延保年限','0'),
       				array('act_file','require','填写购买发票','0'),
       				array('act_poll','','注册码已存在!','0','unique',1),
                              array('username', '', '用户名是唯一的！','0', 'unique',1),
       				array('act_danhao','require','填写服务单号','0'),
                              array('act_danhao','','服务单号已存在!','0','unique',1),
       				array('act_price','require','填写发票价格','0'),
                              array('act_timee','require','填写发票日期','0'),
                              array('act_salespersonnumber','11','销售员电话号码长度不对','2','length',self::MODEL_INSERT),
                              array('act_customernumber','11','购物电话号码长度不对！', self::EXISTS_VALIDATE, 'length', self::MODEL_INSERT),
                              array('act_lipei','require','填写理赔金额','0'),
                              array('act_yanbao','require','填写延保价格！', '0'),

                             );

         }
