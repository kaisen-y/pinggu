<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($pageTitle); ?></title>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/common.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/msDialog.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo C('RES_DOMAIN');?>/Public/css/common.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo C('RES_DOMAIN');?>/Public/css/main.css" type="text/css"/>
</head>
<body>

<div class="col-md-8 col-md-offset-2">
    <form class="form-horizontal" id="editForm">
        <div class="form-group">
            <label class="col-sm-2 control-label">评估题目</label>
            <div class="col-sm-10">
                <input class="form-control" name="question" value="<?php echo ($wjq_question); ?>" placeholder="评估题目" type="text" maxlength="50">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">选项1</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" value="<?php echo ($wjq_answer["0"]); ?>" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">选项2</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" value="<?php echo ($wjq_answer["1"]); ?>" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">选项3</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" value="<?php echo ($wjq_answer["2"]); ?>" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">选项4</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" value="<?php echo ($wjq_answer["3"]); ?>" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">选项5</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" value="<?php echo ($wjq_answer["4"]); ?>" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">选项6</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" value="<?php echo ($wjq_answer["5"]); ?>" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-3 col-md-offset-4">
                <button class="btn btn-info btn-block" name="" mdtype="button" id="btnRegister" value=" 确定 ">确 定</button>
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