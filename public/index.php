<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');

// 判断是否安装
if (!is_file(APP_PATH . 'admin/command/Install/install.lock'))
{
    header("location:./install.php");
    exit;
}

//获取URL访问的ROOT地址 网站的相对路径
//define('BASE_SITE_URL', 'http://'.$_SERVER['SERVER_NAME']);
define('BASE_SITE_URL', $_SERVER['SERVER_NAME']?"http://".$_SERVER['SERVER_NAME']:"http://".$_SERVER['HTTP_HOST']);


define("STATIC_SITE_ROOT", BASE_SITE_URL.'/static');
define("PLUGINS_SITE_ROOT", BASE_SITE_URL.'/static/plugins');
define("ADMIN_SITE_ROOT", BASE_SITE_URL.'/static/admin');
define("INDEX_SITE_ROOT", BASE_SITE_URL.'/static/index');


//后端控制器接口url
define("ADMINSITEURL", BASE_SITE_URL.'/Admin');
//图片路径
define("UPLOAD_URL", BASE_SITE_URL.'/static/upload');
//前端控制器接口url
define("INDEXSITEURL", BASE_SITE_URL.'/Index');

//编码
define('CHARSET','UTF-8');
define('MD5_KEY', 'a2382918dbb49c8643f19bc3ab90ecf9');

define('TIMESTAMP',time());
// 支持事先使用静态方法设置Request对象和Config对象
//define('DS', '/');


define('ALLOW_IMG_EXT','jpg,png,gif,bmp,jpeg');#上传图片后缀



// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
