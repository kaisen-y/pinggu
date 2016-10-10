<?php
return array(
	//'配置项'=>'配置值'
	/* 主题设置 */
	'DEFAULT_THEME' =>  'default',  // 默认模板主题名称
	/* 模板相关配置 */
	'TMPL_PARSE_STRING' => array(
		'__STATIC__' 	=> __ROOT__ . '/Public/static',
		'__IMG__'    	=> __ROOT__ . '/Public/images',
		'__CSS__'    	=> __ROOT__ . '/Public/css',
		'__JS__'     	=> __ROOT__ . '/Public/js',
		'__UPLOAD__'    => __ROOT__ . '/Public/upload',
		'__HOME__'		=> __ROOT__ . '/index.php/home/'
	)
);