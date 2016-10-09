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
<div>
<form id="createForm">
	<input name="name" placeholder="评估项目名称" type="text" maxlength="50">
	<input name="desc" placeholder="评估项目描述" type="text" maxlength="255">
	<input name="remark" placeholder="备注" type="text" maxlength="255">
	<div class="bmit">
		<input  name="" type="button" id="btnRegister"  value=" 创 建 ">
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