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
    <link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/login.css" />
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
</head>
<body>
<header class="header row" style="background: #3498db;color: #fff;">
    <nav class="navbar navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header col-md-3">
            <div class="col-md-offset-2">
                <h2><a href="index" style="color: #fff;">评估系统</a></h2>
            </div>
        </div>

        <div class="header-right pull-right" style="padding: 10px 50px;">
            <h4 style="color: #333">
                欢迎,<?php echo ($member_name); ?><a href="/user/logout" style="color:#fff;">退出</a>
            </h4>
        </div>
    </nav>
</header>
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
<div class="col-md-10" style="padding: 0">
<div class="container">
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="bs-example container">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>姓名</th>
				<th>查看详情</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td><?php echo ($vo["name"]); ?></td>
				<td><a href="/questionnaire/careinfo/care_id/<?php echo ($vo["id"]); ?>">查看详情</a></td>
			</tr>
			</tbody>
		</table>
	</div><?php endforeach; endif; ?>
</div></div>
</body>
</html>