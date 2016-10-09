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
	评估题目 : <input name="question" placeholder="评估题目" type="text" maxlength="50"><br>
	选项1 : <input name="answer[]" placeholder="选项可空" type="text" maxlength="255"><br>
	选项2 : <input name="answer[]" placeholder="选项可空" type="text" maxlength="255"><br>
	选项3 : <input name="answer[]" placeholder="选项可空" type="text" maxlength="255"><br>
	选项4 : <input name="answer[]" placeholder="选项可空" type="text" maxlength="255"><br>
	选项5 : <input name="answer[]" placeholder="选项可空" type="text" maxlength="255"><br>
	选项6 : <input name="answer[]" placeholder="选项可空" type="text" maxlength="255"><br>
	<input name="wj_id" value="<?php echo ($wj_id); ?>" type="hidden">
	<div class="bmit">
		<input  name="" type="button" id="btnRegister"  value=" 创 建 ">
	</div>
</form>
</div>
<script>
//自动跳转
function callback(){
    location.href = '/questionnaire/wenjuan/id/<?php echo ($wj_id); ?>';
}
$('#btnRegister').click(function () {
    	
        var question = $('#createForm input[name="question"]').val();
        if (!question) {
            bzUtil.setTimeAlert('请输入评估题目');
            return false;
        }
        $.ajax({
            url: '/questionnaire/addquestion',
            data: $('#createForm').serialize(),
            type: 'post',
            dataType: 'json',
            success: function (resp) {
                if (resp.status == 1) {
                    bzUtil.setTimeAlert('成功',callback);
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