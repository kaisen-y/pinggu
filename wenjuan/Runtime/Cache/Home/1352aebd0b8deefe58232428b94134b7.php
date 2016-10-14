<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($pageTitle); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/basic.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/main.css" />
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/common.css" rel="stylesheet" />
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/datepicker.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.js"></script>
<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery-1.8.3.min.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.metisMenu.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery-ui-datepicker.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/common.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/msDialog.js"></script>
</head>
<body>

<nav class="navbar-default navbar-side col-md-2" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <!--li>
                <a href="/questionnaire">我的评估项目</a>
            </li-->
            <li>
       			<a href="/questionnaire/care" >新增被评估者</a>
            </li>
            <li>
       			<a href="/questionnaire/mycare" >被评估者</a>
            </li>
        </ul>
    </div>
</nav>

</body>
</html>