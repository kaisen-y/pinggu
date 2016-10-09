<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($pageTitle); ?></title>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/common.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/msDialog.js"></script>
<link rel="stylesheet" href="<?php echo C('RES_DOMAIN');?>/Public/css/common.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo C('RES_DOMAIN');?>/Public/css/main.css" type="text/css"/>
</head>
<body>
<form id="loginForm">
	<input name="member_name" placeholder="请输入用户名" type="text" maxlength="32">
	<input name="password" placeholder="请输入密码" type="password" maxlength="50">
	<div class="bmit">
		<input  name="" type="button" id="btnLogin"  value=" 登 录 ">
	</div>
</form>
<script>
//自动跳转
function callback(){
    location.href = '/';
}
$('#btnLogin').click(function () {
        $.ajax({
            url: '/user/login',
            data: $('#loginForm').serialize(),
            type: 'post',
            dataType: 'json',
            success: function (resp) {
                if (resp.status == 1) {
                    bzUtil.setTimeAlert('登录成功',callback);
                }
                if (resp.message) {
                    bzUtil.setTimeAlert(resp.message);
                }
            }
        });

    });
</script>
</body>
</html>