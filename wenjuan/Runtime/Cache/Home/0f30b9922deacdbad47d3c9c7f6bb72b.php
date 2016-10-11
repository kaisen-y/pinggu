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
<a href="/questionnaire/create">新增评估项目</a>
<br />
<br />
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><a href="/questionnaire/wenjuan/id/<?php echo ($vo["wj_id"]); ?>/care_id/<?php echo ($care_id); ?>"><?php echo ($vo["wj_name"]); ?></a> &nbsp; &nbsp; <a href="/questionnaire/edit/id/<?php echo ($vo["wj_id"]); ?>">修改</a> &nbsp; &nbsp; <button onclick="delWj(<?php echo ($vo["wj_id"]); ?>)"> 删 除 </button><br/><?php endforeach; endif; ?>

<script>
    function delWj(id) {
        if(confirm("确认删除?")){
            $.ajax({
                url:'/questionnaire/delete',
                type:'post',
                data:'wj_id='+id,
                dataType:'json',
                success:function(resp){
                    if(resp){
                        location.href='/questionnaire';
                    }
                }
            });
        }
        
    }
</script>
</body>
</html>