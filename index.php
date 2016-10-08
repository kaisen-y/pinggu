<?php 
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./wenjuan/');

define('LOG_PATH','d:/log');
define('SUCCESS',1);
define('FAIL',0);

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
?>