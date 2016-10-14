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
</head>
<body>

    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" id="createForm">
            <div class="form-group">
                <label class="col-sm-2 control-label">新建评估项目名称</label>
                <div class="col-sm-10">
                    <input class="form-control"  name="name" placeholder="评估项目名称" type="text" maxlength="50">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">新建评估项目描述</label>
                <div class="col-sm-10">
                    <input class="form-control" name="desc" placeholder="评估项目描述" type="text" maxlength="255">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">备注</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="remark" placeholder="备注" type="text" maxlength="255"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 bmit">
                    <button class="btn btn-info" name="" type="button" id="btnRegister" value=" 创建 ">创 建</button>
                </div>
            </div>
        </form>
    </div>
<script>
//自动跳转
function callback(){
    location.href = '/questionnaire';
}
$('#btnRegister').click(function () {
    	
        var name = $('#createForm input[name="name"]').val();
        if (!name) {
            bzUtil.setTimeAlert('请输入评估项目名称');
            return false;
        }
        $.ajax({
            url: '/questionnaire/create',
            data: $('#createForm').serialize(),
            type: 'post',
            dataType: 'json',
            success: function (resp) {
                if (resp.status == 1) {
                    bzUtil.setTimeAlert('创建成功',callback);
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