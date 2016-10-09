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
<form id="editForm">
	评估题目 : <input name="question" value="<?php echo ($wjq_question); ?>" placeholder="评估题目" type="text" maxlength="50"><br>
	选项1 : <input name="answer[]" value="<?php echo ($wjq_answer["0"]); ?>" placeholder="选项可空" type="text" maxlength="255"><br>
	选项2 : <input name="answer[]" value="<?php echo ($wjq_answer["1"]); ?>" placeholder="选项可空" type="text" maxlength="255"><br>
	选项3 : <input name="answer[]" value="<?php echo ($wjq_answer["2"]); ?>" placeholder="选项可空" type="text" maxlength="255"><br>
	选项4 : <input name="answer[]" value="<?php echo ($wjq_answer["3"]); ?>" placeholder="选项可空" type="text" maxlength="255"><br>
	选项5 : <input name="answer[]" value="<?php echo ($wjq_answer["4"]); ?>" placeholder="选项可空" type="text" maxlength="255"><br>
	选项6 : <input name="answer[]" value="<?php echo ($wjq_answer["5"]); ?>" placeholder="选项可空" type="text" maxlength="255"><br>
	<input name="id" value="<?php echo ($wjq_id); ?>" type="hidden">
	<div class="bmit">
		<input  name="" type="button" id="btnRegister"  value=" 确定 ">
	</div>
</form>
</div>
<script>
//自动跳转
function callback(){
    location.href = '/questionnaire';
}
$('#btnRegister').click(function () {
    	
        var question = $('#editForm input[name="question"]').val();
        if (!question) {
            bzUtil.setTimeAlert('请输入评估题目');
            return false;
        }
        $.ajax({
            url: '/questionnaire/editquestion',
            data: $('#editForm').serialize(),
            type: 'post',
            dataType: 'json',
            success: function (resp) {
                if (resp) {
                	location.href='/questionnaire/wenjuan/id/<?php echo ($wj_id); ?>';
                }
            }
        });

    });
</script>
</body>
</html>