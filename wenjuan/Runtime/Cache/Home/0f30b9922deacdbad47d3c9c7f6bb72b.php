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
</head>
<body>

<div class="col-md-12" >
    <span class="col-md-2 col-md-offset-1">
        <a class="btn btn-primary btn-radius" href="/questionnaire/create">
            <i class="glyphicon glyphicon-plus"></i>新增评估项目
        </a>
    </span>
</div>
<div class="col-md-10 col-md-offset-1" style="margin-top: 15px">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>评估项目</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                <td><a href="/questionnaire/wenjuan/id/<?php echo ($vo["wj_id"]); ?>/care_id/<?php echo ($care_id); ?>" style="text-decoration:none"><?php echo ($vo["wj_name"]); ?></td>
                <td>
                    <a href="/questionnaire/edit/id/<?php echo ($vo["wj_id"]); ?>" class="btn btn-primary radius" style="text-decoration:none">修改</a> &nbsp;&nbsp;
                    <a  class="btn btn-default " onclick="delWj(<?php echo ($vo["wj_id"]); ?>)">删 除</a>
                </td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>


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