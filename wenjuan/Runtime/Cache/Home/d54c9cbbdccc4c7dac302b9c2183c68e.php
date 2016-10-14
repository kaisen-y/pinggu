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
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/yanzheng.js" charset="gbk"></script>
</head>
<body>

<div class="col-md-8 col-md-offset-2">
    <h2><?php echo ($wj_name); ?></h2>
    <a href="/questionnaire/addquestion/wj_id/<?php echo ($wj_id); ?>"> 新增问题 </a><br>
    <br>
    <form class="form-horizontal" id="pgForm">
        <?php if(is_array($qlist)): foreach($qlist as $key=>$vo): ?><div id="qa<?php echo ($vo["wjq_id"]); ?>">
                <h2 style="display: inline;"><?php echo ($vo["wjq_question"]); ?></h2>
                <?php if(!empty($care_id)): ?><input name="pingfen[<?php echo ($vo["wjq_id"]); ?>]" placeholder="评估打分" type="text" maxlength="50"><?php endif; ?>
                <a href="/questionnaire/editquestion/id/<?php echo ($vo["wjq_id"]); ?>">修改问题</a>
                <button class="btn btn-primary" onclick="delQuestion(<?php echo ($vo["wjq_id"]); ?>)">删除</button><br>
                <?php if(is_array($vo["wjq_answer"])): foreach($vo["wjq_answer"] as $key=>$va): echo ($va); ?> <?php if(!empty($va)): ?><br><?php endif; endforeach; endif; ?>
            </div>
            <br><?php endforeach; endif; ?>
        <?php if(!empty($care_id)): ?><input type="text" name="jielun" placeholder="结论" >
            <input type="text" name="remark" placeholder="备注" />
            <input type="hidden" name="wj_id" value="<?php echo ($wj_id); ?>" />
            <input type="hidden" name="care_id" value="<?php echo ($care_id); ?>" />

            <div class="bmit">
                <input  name="" type="button" id="btnSubmit"  value=" 提 交  ">
            </div><?php endif; ?>

    </form>
</div>
<script>
//自动跳转
function callback(){
    location.href = '/questionnaire?care_id=<?php echo ($care_id); ?>';
}
$('#btnSubmit').click(function () {
	
    $.ajax({
        url: '/questionnaire/jieguo',
        data: $('#pgForm').serialize(),
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
function delQuestion(id){
	if(confirm("确认删除?")){
        $.ajax({
            url:'/questionnaire/delquestion',
            type:'post',
            data:'wjq_id='+id,
            dataType:'json',
            success:function(resp){
                if(resp){
                    $("#qa"+id).remove();
                }
            }
        });
    }
}
</script>

</body>
</html>