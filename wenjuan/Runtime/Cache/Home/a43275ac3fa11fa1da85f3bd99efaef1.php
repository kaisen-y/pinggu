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
</head>
<body>

    <link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/login.css" />
<div class="box">
    <div class="login-box">
        <div class="login-title text-center">
            <h1><small> 评估系统注册</small></h1>
        </div>
        <div class="login-content " style="padding-bottom: 20px;">
            <div class="form">
                <form id="registerForm">
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input class="form-control"  name="member_name" placeholder="请输入用户名" type="text" maxlength="32">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                <input class="form-control" name="member_phone" placeholder="请输入手机号码" type="text" maxlength="11">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input class="form-control" name="email" placeholder="请输入邮箱地址" type="text" maxlength="50">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input class="form-control" name="password" placeholder="请输入密码" type="password" maxlength="50">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input class="form-control" name="password2" placeholder="请输入确认密码" type="password" maxlength="50">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions" >
                        <div class="col-xs-4 col-xs-offset-2 bmit">

                            <input id="btnRegister"  value=" 注 册 "class="btn btn-sm btn-info"style="padding: 10px 30px 30px;" type="button">
                        </div>
                        <div class="col-xs-4">
                                <a  href="login" class="btn btn-sm btn-primary"style="padding: 12px 20px;margin-top: 5px;"><span class="glyphicon glyphicon-circle-arrow-left"></span> 返回登录</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
//自动跳转
function callback(){
    location.href = '/user';
}
$('#btnRegister').click(function () {
    	
        var mobile = $('#registerForm input[name="member_phone"]').val();
        if (!bzUtil.isMobile(mobile)) {
            bzUtil.setTimeAlert('请输入正确的手机号码');
            return false;
        }
        $.ajax({
            url: '/user/register',
            data: $('#registerForm').serialize(),
            type: 'post',
            dataType: 'json',
            success: function (resp) {
                if (resp.status == 1) {
                    bzUtil.setTimeAlert('注册成功',callback);
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