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
    <link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/main.css" />
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/common.css" rel="stylesheet" />
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/datepicker.css" rel="stylesheet" />
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/basic.css" rel="stylesheet" />
<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.js"></script>
<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery-1.8.3.min.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.metisMenu.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/common.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/msDialog.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery-ui-datepicker.js"></script>
</head>
<body>

<div style="margin: -20px 0px;;font-family: Microsoft YaHei;">
    <header class="header row" style="background: #3498db;color: #fff;margin: 0">
        <nav class="navbar navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header col-md-3">
                <div class="col-md-offset-2">
                    <a class="navbar-brand" href="index.html">评估系统</a>
                </div>
            </div>
            <div class="header-right">
                <a href="/user" class="btn btn-primary" title=""><i class="glyphicon glyphicon-user"></i></a>
                <a href="/user/logout" class="btn btn-danger" title="Logout"><i class="glyphicon glyphicon-off"></i></a>
            </div>
        </nav>
    </header>
    <div class="progress" style="margin: 5% 20px">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1" style="padding: 0">

        <div class="">
            <div class="." style="margin-bottom: 15px;padding-left: 3%;">
                <h3>健康风险评估</h3>
            </div>
            <form class="Huiform form-horizontal" id="commentForm" action="" method="post"style="margin-left: 5%;">
                <fieldset class="row"style="margin: 0">
                    <div class="form-group col-md-12">
                        <h4 class="text-center">健康信息</h4>
                        <hr>
                    </div>
                    <input type='hidden' name="care_id" value="<?php echo ($care_id); ?>">
                    <div class="form-group col-md-4">
                        <label class="col-md-4 col-xs-3 control-label" style="padding: 0;padding-top: 7px;">身高：</label>
                        <div class="col-md-7 col-xs-7" style="padding-right: 0">
                            <input  type="text" class="form-control" name="height" data-rule-number="true" data-msg-required="请输入正确的身高" >
                        </div>
                        <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0;font-size: 20px; padding-top: 4px;">cm</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="col-md-4 col-xs-3 control-label" style="padding: 0;padding-top: 7px;">体重：</label>
                        <div class="col-md-7 col-xs-7" style="padding-right: 0">
                            <input  type="text" class="form-control" name="weight"data-rule-number="true" data-msg-required="请输入正确的体重"  >
                        </div>
                        <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0;font-size: 20px; padding-top: 4px;">kg</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="col-md-4 col-xs-3 control-label" style="padding: 0;padding-top: 7px;">颈围：</label>
                        <div class="col-md-7 col-xs-7" style="padding-right: 0">
                            <input name="neck" type="text" class="form-control" data-rule-number="true" data-msg-required="请输入正确的颈围" >
                        </div>
                        <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0;font-size: 20px; padding-top: 4px;">cm</label>
                    </div>

                    <div class="form-group col-md-4">
                        <label class="col-md-4 col-xs-3 control-label" style="padding: 0;padding-top: 7px;">腰围：</label>
                        <div class="col-md-7 col-xs-7" style="padding-right: 0">
                            <input name="waist" type="text" class="form-control" data-rule-number="true" data-msg-required="请输入正确的腰围" >
                        </div>
                        <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0;font-size: 20px; padding-top: 4px;">cm</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="col-md-4 col-xs-3 control-label" style="padding: 0;padding-top: 7px;">体温：</label>
                        <div class="col-md-7 col-xs-7" style="padding-right: 0">
                            <input name="temperature" type="text" class="form-control"data-rule-number="true" data-msg-required="请输入正确的体温" >
                        </div>
                        <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0;font-size: 20px; padding-top: 4px;">℃</label>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <div class="col-md-6" style="padding: 0;" >
                            <label class="col-md-4 col-xs-3 control-label">脉搏：</label>
                            <div class="col-md-4 col-xs-7" style="padding-right: 0">
                                <input name="maibo" type="text" class="form-control" >
                            </div>
                            <label class="col-md-3 col-xs-2 control-label" style="padding-left: 0">次/分</label>
                        </div>
                        <div class="radio col-md-2 col-xs-5">
                            <label>
                                <input type="radio" name="maibokl" id="maibo1" value="规律">
                                规律
                            </label>
                        </div>
                        <div class="radio col-md-2 col-xs-5">
                            <label>
                                <input type="radio" name="maibokl" id="maibo2" value="不规律">
                                不规律
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-6" style="padding: 0;">
                        <label class="col-md-3">血糖：</label>
                        <div class="col-md-8" >
                            <select class="form-control" name="xuetang">
                                <option value="空腹">空腹</option>
                                <option value="餐后">餐后</option>
                            </select>
                        随机描述<input type="text" name="xuetangdes" />
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">血压：</label>
                        <div class="radio col-md-1">
                            <label>
                                <input type="radio" name="xueya" id="xueya1" value="卧位">
                                卧位
                            </label>
                        </div>
                        <div class="radio col-md-1">
                            <label>
                                <input type="radio" name="xueya" id="xueya2" value="坐位">
                                坐位
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="col-md-4 control-label">左：</label>
                            <div class="col-md-7" >
                                <input  type="text" name="xueya_left_l" class="form-control col-md-5 col-xs-5" style="width: 40%">
                                <span class="col-md-1 col-xs-1" style="padding: 6px;font-size: 32px;">/</span>
                                <input  type="text" name="xueya_left_r" class="form-control col-md-5 col-xs-5" style="width: 40%">
                            </div>
                            <label class="col-md-1 col-xs-1 control-label" style="padding-left: 0"> mmHg</label>
                        </div>
                        <div class="col-md-4">
                            <label class="col-md-4 control-label">右：</label>
                            <div class="col-md-7" >
                                <input  type="text"  name="xueya_right_l" class="form-control col-md-5 col-xs-5" style="width: 40%">
                                <span class="col-md-1 col-xs-1" style="padding: 6px;font-size: 32px;">/</span>
                                <input  type="text"  name="xueya_right_r" class="form-control col-md-5 col-xs-5" style="width: 40%">
                            </div>
                            <label class="col-md-1 col-xs-1 control-label" style="padding-left: 0"> mmHg</label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">血脂：</label>
                        <div class="col-md-11">
                            <div class="col-md-6" style="margin-bottom: 10px">
                                <label class="col-md-3 control-label">胆固醇：</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="xuezhi_d" >
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 10px">
                                <label class="col-md-3 control-label">甘油三酯：</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="xuezhi_g" >
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 10px">
                                <label class="col-md-3 control-label">高密度脂蛋白：</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="xuezhi_gz" >
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 10px">
                                <label class="col-md-3 control-label">低密度脂蛋白：</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="xuezhi_dz" >
                                </div>
                            </div>
                            <label class="col-md-2 control-label text-left" for="year">报告日期：</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="xuezhi_date" id="year" name="sex" style="display: inline;width: 70%" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">吸烟情况：</label>
                        <div class="col-md-11" style="display: inline">
                            <div class="col-md-5">
                                <select class="form-control" name="xiyan">
                                    <option value="从不吸烟">从不吸烟</option>
                                    <option value="已戒烟">已戒烟</option>
                                    <option value="吸烟">吸烟</option>
                                </select>
                            </div>
                            <div class="col-md-5 col-xs-8" >
                                <input  type="text" name="xiyan_times" class="form-control" >
                            </div>
                            <label class="col-md-1 col-xs-4 control-label" style="padding-left: 0">支/天</label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4 class="text-center">营养状况</h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">饮食习惯：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="yinshixiguan[]" value="荤素均衡"> 荤素均衡
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshixiguan[]" value="荤食为主"> 荤食为主
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshixiguan[]" value="素食为主"> 素食为主
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshixiguan[]" value="嗜盐"> 嗜盐
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshixiguan[]" value="嗜油"> 嗜油
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshixiguan[]" value="嗜糖"> 嗜糖
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshixiguan[]" value="清真"> 清真
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshixiguan[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="yinshixiguan[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">早餐：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="zaocan[]" value="奶"> 奶
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zaocan[]" value="蛋"> 蛋
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zaocan[]" value="豆浆"> 豆浆
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zaocan[]" value="粥"> 粥
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zaocan[]" value="面食"> 面食
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zaocan[]" value="甜点"> 甜点
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zaocan[]" value="蔬菜"> 蔬菜
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zaocan[]" value="肉食"> 肉食
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zaocan[]" value="水果"> 水果
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox"  name="zaocan[]" value="果汁"> 果汁
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox"  name="zaocan[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;" name="zaocan[]"  value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">午餐：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="wucan[]" value="鱼"> 鱼
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wucan[]" value="肉"> 肉
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wucan[]" value="豆制品"> 豆制品
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wucan[]" value="蔬菜"> 蔬菜
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wucan[]" value="菌类"> 菌类
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wucan[]" value="米饭"> 米饭
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wucan[]" value="面食"> 面食
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wucan[]" value="粗粮"> 粗粮
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wucan[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="wucan[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">晚餐：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="wancan[]" value="鱼"> 鱼
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wancan[]" value="肉"> 肉
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wancan[]" value="豆制品"> 豆制品
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wancan[]" value="蔬菜"> 蔬菜
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wancan[]" value="菌类"> 菌类
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wancan[]" value="米饭"> 米饭
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wancan[]" value="面食"> 面食
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wancan[]" value="粗粮"> 粗粮
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wancan[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="wancan[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">加餐：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="jiacan[]" value="水果"> 水果
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jiacan[]" value="甜点"> 甜点
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jiacan[]" value="坚果"> 坚果
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jiacan[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="jiacan[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">饮水：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="yinshui[]" value="水"> 水
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshui[]" value="茶"> 茶
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshui[]" value="咖啡"> 咖啡
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yinshui[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;" name="yinshui[]"  value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">配餐需求：</label>
                        <div class="col-md-10">
                            <label>
                                <input type="radio" name='peican' value="1">是
                            </label>
                            <label>
                                <input type="radio" name='peican' value="0">否
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4 class="text-center">自我锻炼</h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">运动方式：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="yudongfangshi[]" value="散步"> 散步
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yudongfangshi[]" value="游泳"> 游泳
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yudongfangshi[]" value="社区活动场"> 社区活动场
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yudongfangshi[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="yudongfangshi[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label">运动频次：</label>
                        <div class="col-md-5">
                            <label class="col-md-3 col-xs-5 control-label">每周运动：</label>
                            <div class="col-md-4 col-xs-5" >
                                <input  type="text" name="zhoupl" class="form-control" >
                            </div>
                            <label class="col-md-3 col-xs-2 control-label" style="padding-left: 0">次</label>
                        </div>
                        <div class="col-md-5">
                            <label class="col-md-3 col-xs-5 control-label">每次：</label>
                            <div class="col-md-4 col-xs-5">
                                <input  type="text" name="timesmin" class="form-control" >
                            </div>
                            <label class="col-md-3 col-xs-2 control-label" style="padding-left: 0">分钟</label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label" style="padding-right: 10px">运动后感觉：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="yundonghou[]" value="神清气爽"> 神清气爽
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yundonghou[]" value="呼吸困难"> 呼吸困难
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yundonghou[]" value="心慌"> 心慌
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yundonghou[]" value="疼痛"> 疼痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yundonghou[]" value="运动次日身体酸痛"> 运动次日身体酸痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="yundonghou[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="yundonghou[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4 class="text-center">睡眠状况</h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label" style="padding-right: 10px">睡眠情况：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="shuimianqingkuang[]" value="良好"> 良好
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="shuimianqingkuang[]" value="迟睡"> 迟睡
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="shuimianqingkuang[]" value="早醒"> 早醒
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="shuimianqingkuang[]" value="多梦"> 多梦
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="shuimianqingkuang[]" value="经常失眠睡眠时间"> 经常失眠睡眠时间
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label" style="padding-right: 10px">睡眠质量：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
                                <input type="radio" name="shuimianzhiliang" value="好"> 好
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="shuimianzhiliang" value="不好"> 不好
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4 class="text-center">疾病情况</h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label" style="padding-right: 10px">疾病状态：</label>
                        <div class="col-md-11">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="jibing[]" value="无"> 无
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="高血压"> 高血压
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="糖尿病"> 糖尿病
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="冠心病"> 冠心病
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="肺气肿"> 肺气肿
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="肺心病"> 肺心病
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="脑中风"> 脑中风
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="忧郁症"> 忧郁症
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="肩周炎"> 肩周炎
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="颈椎病"> 颈椎病
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="肺炎"> 肺炎
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="白内障"> 白内障
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="青光眼"> 青光眼
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="肿瘤"> 肿瘤
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="失聪"> 失聪
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="痛风"> 痛风
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="肝胆疾病"> 肝胆疾病
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="肾脏疾病"> 肾脏疾病
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="心律失常"> 心律失常
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="老年痴呆症"> 老年痴呆症
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="肢体骨折"> 肢体骨折
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="骨质疏松"> 骨质疏松
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="视网膜血管性疾病"> 视网膜血管性疾病
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="糖尿病视网膜病变"> 糖尿病视网膜病变
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="类风湿性关节炎"> 类风湿性关节炎
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="慢性支气管炎"> 慢性支气管炎
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="老年心力衰竭"> 老年心力衰竭
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="帕金森氏症"> 帕金森氏症
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jibing[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="jibing[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label" style="padding-right: 10px">目前症状 ：</label>
                        <div class="col-md-11">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="muqian[]" value="无"> 无
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="气喘"> 气喘
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="气短"> 气短
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="呼吸困难"> 呼吸困难
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="胸闷"> 胸闷
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="胸痛"> 胸痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="下肢浮肿"> 下肢浮肿
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="背痛"> 背痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="胃痛"> 胃痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="腹痛"> 腹痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="反酸"> 反酸
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="腹泻"> 腹泻
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="便秘"> 便秘
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="口臭"> 口臭
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="尿失禁"> 尿失禁
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="排尿困难"> 排尿困难
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="尿痛"> 尿痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="尿急"> 尿急
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="项背痛"> 项背痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="腰痛"> 腰痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="肩痛"> 肩痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="膝关节痛"> 膝关节痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="膝关节痛肿"> 膝关节痛肿
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="手抖"> 手抖
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="乏力"> 乏力
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="食欲亢进"> 食欲亢进
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="精神萎靡"> 精神萎靡
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="头痛"> 头痛
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="头晕"> 头晕
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="耳鸣"> 耳鸣
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="腿软"> 腿软
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="视物不清"> 视物不清
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="听力减退"> 听力减退
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="muqian[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;" name="muqian[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label" style="padding-right: 10px">并发症：</label>
                        <div class="col-md-11">
                            <label class="checkbox-inline col-md-4">
                                <input type="checkbox" value=""> 压疮（部位:）
                                <input type="text" name="yachang" class="form-control" style="display: inline;width: 60%;"  value="">
                            </label>
                            <label class="checkbox-inline col-md-4">
                                <input type="checkbox" value=""> 肌肉萎缩（部位:）
                                <input type="text" class="form-control" name="jrweisuo" style="display: inline;width: 60%;"  value="">
                            </label>
                            <label class="checkbox-inline col-md-3">
                                <input type="checkbox" value=""> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-2 control-label" style="padding-right: 0px">疾病及症状描述：</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="miaoshu" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="padding: 0;">
                        <label class="col-md-1 control-label" style="padding-right: 10px">治疗情况：</label>
                        <div class="col-md-11">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="zhiliao[]" value="药物治疗"> 药物治疗：
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zhiliao[]" value="手术治疗"> 手术治疗：
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zhiliao[]" value="未治疗"> 未治疗：
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12" style="margin-top:20px;">
                        <div class=" text-left col-md-2 col-md-offset-3">
                            <button type="submit" class="btn btn-primary radius" style="width:70%"><i class="icon-ok"></i>提交</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/yanzheng.js" charset="gbk"></script>
<script type="text/javascript">
    $(function(){
        $("#year").datepicker({
            showOn: "button",
            buttonImage: "<?php echo C('RES_DOMAIN');?>/Public/images/calendar.gif",
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd'
        });
    });
    $.validator.setDefaults({
        submitHandler: function() {
            alert("提交事件!");
        }
    });

</script>

</body>
</html>