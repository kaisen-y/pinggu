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
<h2><?php echo ($wj_name); ?></h2>
<a href="/questionnaire/addquestion/wj_id/<?php echo ($wj_id); ?>"> 新增问题 </a><br>
<br>
<form id="pgForm">
<?php if(is_array($qlist)): foreach($qlist as $key=>$vo): ?><div id="qa<?php echo ($vo["wjq_id"]); ?>">
	<h2><?php echo ($vo["wjq_question"]); ?></h2> 
	<?php if(!empty($care_id)): ?><input name="pingfen[<?php echo ($vo["wjq_id"]); ?>]" placeholder="评估打分" type="text" maxlength="50"><?php endif; ?>
	<a href="/questionnaire/editquestion/id/<?php echo ($vo["wjq_id"]); ?>">修改问题</a>
	<button onclick="delQuestion(<?php echo ($vo["wjq_id"]); ?>)">删除</button><br>
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
<script>
//自动跳转
function callback(){
    location.href = '/questionnaire';
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