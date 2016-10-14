<?php
return array(
	'LOAD_EXT_CONFIG' => 'route,app',
    'MULTI_MODULE'			=>  false,
    'DEFAULT_MODULE'		=> 'Home',
	//'配置项'=>'配置值'
	'DB_TYPE'  => 'mysql',
	'DB_USER'  => defined('SAE_MYSQL_USER')?SAE_MYSQL_USER:'root',
	'DB_PWD'   => defined('SAE_MYSQL_PASS')?SAE_MYSQL_PASS:'123456',
	'DB_HOST'  => defined('SAE_MYSQL_HOST_M')?SAE_MYSQL_HOST_M:'127.0.0.1',
	'DB_PORT'  => defined('SAE_MYSQL_PORT')?SAE_MYSQL_PORT:'3306',
	'DB_NAME'  => defined('SAE_MYSQL_DB')?SAE_MYSQL_DB:'yijiayi_pinggu',
	'DB_PREFIX' => 'pg_',
	'DB_CHARSET'=> 'utf8mb4',
	
	/*布局模板*/
	'LAYOUT_ON'=>true,//启用布局模板
	'LAYOUT_NAME'=>'Common/View/layout',

);