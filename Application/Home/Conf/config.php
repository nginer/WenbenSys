<?php
return array(
    //'配置项'=>'配置值'

    'TMPL_PARSE_STRING'  =>array(
        '__PUBLIC__'     => __ROOT__."/Public",
        '__IMAGES__'     => __ROOT__.'/Public/images',
        '__CSS__'        => __ROOT__.'/Public/css',
        '__JS__'         => __ROOT__.'/Public/js',
        '__URL__'        =>__ROOT__.'/index.php',
        '__HOME__'       =>__ROOT__.'/index.php/Home'
    ),
    'SESSION_AUTO_START' => true, //是否开启session
    'URL_ROUTER_ON'      => true, //开启路由
    'VAR_URL_PARAMS'     => '__URL__', // PATHINFO URL参数变量
    'URL_MODEL'          =>   1,

    // 添加数据库配置信恿
    'DB_TYPE'            => 'mongo', // 数据库类垿
    'DB_HOST'            => '127.0.0.1', // 服务器地址
    'DB_NAME'            => 'jingjixueren', // 数据库名
    'DB_USER'            => '', // 用户名
    'DB_PWD'             => '', // 密码
    'DB_PORT'            => 27017, // 端口
//    'DB_PREFIX'          => 'jjpt_', // 数据库表前缀
);