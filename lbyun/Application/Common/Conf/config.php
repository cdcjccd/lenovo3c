<?php
return array(
    //'配置�?=>'配置�?
    //url模式设置
    //'URL_MODEL' =>  0,
    'URL_MODEL'             =>  1,  
    
//    让页面显示追踪日志信�?
        'SHOW_PAGE_TRACE'   => true,
    
    //url地址大小写不敏感设置
    'URL_CASE_INSENSITIVE'  =>  false,

    // I函数默认使用转换函数
    'DEFAULT_FILTER'        =>  'strip_tags,stripslashes,htmlspecialchars',

    // 默认设定
    'DEFAULT_MODULE'        => 'Admin',    // 默认模块名称
    'DEFAULT_ACTION'        => 'main',    // 默认操作名称
    'DEFAULT_CHARSET'       => 'utf-8',    // 默认输出编码
    'DEFAULT_TIMEZONE'      => 'PRC',      // 默认时区
    'DEFAULT_LANG'          => 'zh-cn',    // 默认语言

    //数据库连接配�?
        'DB_TYPE'   => 'mysql',
    // 数据库类�?
     'DB_HOST'   => '127.0.0.1',             // 服务器地址
    'DB_NAME'   => 'Lenovo3c',                      // 数据库名
    'DB_USER'   => 'root',                  // 用户�?
    'DB_PWD'    => 'root',                  // 密码
    'DB_PORT'   => 3306,                    // 端口
    'DB_PREFIX' => '',                      // 数据库表前缀
    'DB_CHARSET'=> 'utf8',                  // 字符�?
    'DB_FIELDS_CACHE'       => false,        // 启用字段缓存
    'DB_SQL_BUILD_CACHE'    => false,       // 数据库查询的SQL创建缓存
    //以下字段缓存没有其作�?    //�?如果是调试模式就不起作用
    //�?false  也是不起作用
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

         'MODULE_ALLOW_LIST'    =>    array('Home','Admin')/*允许访问的模块列�?*/
);