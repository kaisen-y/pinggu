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
    <form class="form-horizontal" id="createForm">
    <div class="form-group">
        <label class="col-sm-2 control-label">评估题目</label>
        <div class="col-sm-10">
            <input class="form-control" name="question" placeholder="评估题目" type="text" maxlength="50">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">选项1</label>
        <div class="col-sm-10">
            <input class="form-control" name="answer[]" placeholder="选项可空" type="text" maxlength="255">
        </div>
    </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">选项2</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">选项3</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">选项4</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">选项5</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">选项6</label>
            <div class="col-sm-10">
                <input class="form-control" name="answer[]" placeholder="选项可空" type="text" maxlength="255">
            </div>
        </div>

    <div class="form-group">
        <div class="col-md-3 col-md-offset-4">
            <button class="btn btn-info btn-block" name="" mdtype="button" id="btnRegister" value=" 创 建 ">创 建</button>
        </div>
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