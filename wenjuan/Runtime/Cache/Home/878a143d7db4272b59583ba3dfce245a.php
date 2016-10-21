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
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/common.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/msDialog.js"></script>
</head>
<body>
<header class="header row" style="background: #3498db;color: #fff;">
    <nav class="navbar navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header col-md-3">
            <div class="col-md-offset-2">
                <h2><a href="index" style="color: #fff;">评估系统</a></h2>
            </div>
        </div>

        <div class="header-right pull-right" style="padding: 10px 50px;">
            <h4 style="color: #333">
                欢迎,<?php echo ($member_name); ?><a href="/user/logout" style="color:#fff;">退出</a>
            </h4>
        </div>
    </nav>
</header>
<nav class="navbar-default navbar-side col-md-2" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <!--li>
                <a href="/questionnaire">我的评估项目</a>
            </li-->
            <li>
       			<a href="/questionnaire/care" >新增被评估者</a>
            </li>
            <li>
       			<a href="/questionnaire/mycare" >被评估者</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
<div>
    <div>
        <div class=".">
            <h3>基本信息</h3>
        </div>

        <fieldset class="row">
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">用户姓名：</label>
                <div class="col-md-8 col-xs-7">
                    <?php echo ($care["name"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label" >性别：</label>
                <div class="col-md-8 col-xs-7">
                    <?php echo ($care["sex"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">出生年月：</label>
                <div class="col-md-8 col-xs-7">
                    <?php echo ($care["brith"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">民族：</label>
                <div class="col-md-8 col-xs-7">
                    <?php echo ($care["nation"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">籍贯：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["origin"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">宗教信仰：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["religion"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">证件类型：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["credentials_type"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">证件号：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["credentials_no"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">社保卡号：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["ss_card"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">文化程度：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["education"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">婚姻状况：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["marriage"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">既往职业：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["careers"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">户籍所在地：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["registry_add"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">居住地址：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["address"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">住所附近医院：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["add_hospital"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label" style="padding-right: 0;">习惯就诊的医院：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["hospital"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">住宅电话：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["tellphone"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">移动电话：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["mobile"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12">
                <hr>
                <h4 class="text-center">残疾信息（残障人士评估专用）</h4>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">残疾人证号：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["disability_no"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">类别/等级：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["disability_type"]); ?>/<?php echo ($care["disability_level"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">致残时间：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["disability_time"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">致残原因：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["disability_cause"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12">
                <hr>
                <h4 class="text-center">紧急联系人信息</h4>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">姓名：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["jjlx_name"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">与被照护人关系：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["jjlx_guanxi"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">电话：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["jjlx_phone"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">E-Mail：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["jjlx_email"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">地址：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["jjlx_addr"]); ?>
                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5 control-label">备注：</label>
                <div class="col-md-8 col-xs-7"><?php echo ($care["jjlx_remark"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12">
                <hr>
                <h4 class="text-center">目前状况   </h4>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">经济来源：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($care["jingjilaiyuan"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">经济条件：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($care["jingjitiaojian"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">居住状况：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($care["juzhu"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">安养状态：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($care["anyang"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">住房性质：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($care["zhufang"]); ?>

                </div>
            </div>

            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">休闲娱乐：</label>
                <div class="col-md-10 col-xs-7">  <?php echo ($care["xiuxian"]); ?>

                </div>
            </div>

            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">文化需求：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($care["wenhuaxuqiu"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">特殊贡献：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($care["teshugongxian"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">备注：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($care["remark"]); ?>
                </div>
            </div>
        </fieldset>
    </div>
    <div>
        <div class=".">
            <h3>健康风险评估</h3>
        </div>
        <fieldset class="row">
            <div class="form-group col-md-12">
                <h4 class="text-center">健康信息</h4>
                <hr>
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <label class="col-md-4 col-xs-4 control-label" >身高：</label>
                <div class="col-md-5 col-xs-4" style="padding-right: 0"><?php echo ($jkpg["height"]); ?>
                </div>
                <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0">cm</label>
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <label class="col-md-4 col-xs-4 control-label" >体重：</label>
                <div class="col-md-5 col-xs-4" style="padding-right: 0"><?php echo ($jkpg["weight"]); ?>
                </div>
                <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0">kg</label>
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <label class="col-md-4 col-xs-4 control-label" >颈围：</label>
                <div class="col-md-5 col-xs-4" style="padding-right: 0"><?php echo ($jkpg["neck"]); ?>
                </div>
                <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0">cm</label>
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <label class="col-md-4 col-xs-4 control-label" >腰围：</label>
                <div class="col-md-5 col-xs-4" style="padding-right: 0"><?php echo ($jkpg["waist"]); ?>
                </div>
                <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0">cm</label>
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <label class="col-md-4 col-xs-4 control-label" >体温：</label>
                <div class="col-md-5 col-xs-4" style="padding-right: 0"><?php echo ($jkpg["temperature"]); ?>
                </div>
                <label class="col-md-1 col-xs-2 control-label" style="padding-left: 0">℃</label>
            </div>
            .
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5">脉搏：</label>
                <div class="col-md-8 col-xs-7" ><?php echo ($jkpg["maibo"]); ?>

                </div>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="col-md-4 col-xs-5">血糖：</label>
                <div class="col-md-8 col-xs-7" ><?php echo ($jkpg["xuetang"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">血压：</label>
                <div class="col-md-1"><?php echo ($jkpg["xueya"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">血脂：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($jkpg["xuezhi"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">吸烟情况：</label>
                <div class="col-md-10" style="display: inline">
                    <?php echo ($jkpg["xiyan"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <h4 class="text-center">营养状况</h4>
                <hr>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">饮食习惯：</label>
                <div class="col-md-10"><?php echo ($jkpg["yinshixiguan"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">早餐：</label>
                <div class="col-md-10"><?php echo ($jkpg["zaocan"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">午餐：</label>
                <div class="col-md-10"><?php echo ($jkpg["wucan"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">晚餐：</label>
                <div class="col-md-10"><?php echo ($jkpg["wancan"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">加餐：</label>
                <div class="col-md-10"><?php echo ($jkpg["jiacan"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">饮水：</label>
                <div class="col-md-10"><?php echo ($jkpg["yinshui"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">配餐需求：</label>
                <div class="col-md-10">
                    <?php if($jkpg["peican"] == 1 ): ?>是
                        <?php else: ?> 否<?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <h4 class="text-center">自我锻炼</h4>
                <hr>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">运动方式：</label>
                <div class="col-md-10"><?php echo ($jkpg["yudongfangshi"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label">运动频次：</label>
                <div class="col-md-5"><?php echo ($jkpg["yundongpinglv"]); ?>

                </div>

            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label" style="padding-right: 10px">运动后感觉：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($jkpg["yundonghou"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <h4 class="text-center">睡眠状况</h4>
                <hr>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label" style="padding-right: 10px">睡眠情况：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($jkpg["shuimianqingkuang"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label" style="padding-right: 10px">睡眠质量：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($jkpg["shuimianzhiliang"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <h4 class="text-center">疾病情况</h4>
                <hr>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label" style="padding-right: 10px">疾病状态：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($jkpg["jibing"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label" style="padding-right: 10px">目前症状 ：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($jkpg["muqian"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2s col-xs-5 control-label" style="padding-right: 10px">并发症：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($jkpg["bingfa"]); ?>

                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5  control-label" style="padding-right: 0px">疾病及症状描述：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($jkpg["miaoshu"]); ?>
                </div>
            </div>
            <div class="form-group col-md-12 col-xs-12">
                <label class="col-md-2 col-xs-5 control-label" style="padding-right: 10px">治疗情况：</label>
                <div class="col-md-10 col-xs-7"><?php echo ($jkpg["zhiliao"]); ?>

                </div>
            </div>
        </fieldset>
    </div>
    <div>
        <div class=".">
            <h3></h3>
        </div>
        <link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/jquery.jqChart.css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/jquery.jqRangeSlider.css" />
    	<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.jqChart.min.js" type="text/javascript"></script>
    	<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.jqRangeSlider.min.js" type="text/javascript"></script>
    	<!--[if IE]><script lang="javascript" type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/excanvas.js"></script><![endif]-->
        
        
            <script lang="javascript" type="text/javascript">  
		        $(document).ready(function () {
		            var background = {
		                type: 'linearGradient',  
		                x0: 0,
		                x1: 0, 
		                colorStops: [{ offset: 0, color: '#d2e6c9' }]  
		            };
		            $('#jqChart').jqChart({
		                title: { text: '雷达图' },  
		                border: { strokeStyle: '#6ba851' },  
		                background: background,  
		                axes: [
		                        {
		                            type: 'categoryAngle',  
		                            categories: [<?php if(is_array($radar_cat)): foreach($radar_cat as $key=>$nv): ?>'<?php echo ($nv); ?>',<?php endforeach; endif; ?>]  
		                        },
		                        {
		                            type: 'linearRadius',
		                            renderStyle: 'polygon',
		                            lineWidth: '5',
		                            minimum : 0,
		                            maximum : 100,
		                            interval : 20,
		                            majorTickMarks: { visible: true }  
		                        }
		                      ],  
		                series: [
		                            {
		                                title : '整体',  
		                                type: 'radarArea',  
		                                data: [<?php if(is_array($radar_val)): foreach($radar_val as $key=>$val): echo ($val); ?>,<?php endforeach; endif; ?>],  
		                                fillStyle: 'rgba(65,140,240,0.75)'  
		                            }
		                        ]
		            });
		        });  
		    </script>
                
                <div>
			        <div id="jqChart" style="width: 500px; height: 300px; margin-top: 24px;">
			        </div>
			    </div>
        
        <fieldset class="row" style="margin: 0 8%">
            <?php if(is_array($reslist)): foreach($reslist as $k=>$vo): ?><div class=".">
                    <h3><?php echo ($vo["wj_name"]); ?></h3>
                </div>
                <?php if(is_array($vo["pg_qa"])): foreach($vo["pg_qa"] as $key=>$vqa): if(!empty($vqa["question"])): ?><h4><strong>问题:<?php echo ($vqa["question"]); ?></strong></h4><?php endif; ?>
                    <?php if(!empty($vqa["answer"])): ?><div class="xuanxiang">
                        <h4 style="display: inline-block;float: left;">选项:</h4>
                        <div  style="display:  inline-block;margin: 8px 0px 0 20px;font-size: 16px;">
                            <?php if(is_array($vqa["answer"])): foreach($vqa["answer"] as $key=>$va): echo ($va); ?> <?php if(!empty($va)): ?><br><?php endif; endforeach; endif; ?>
                        </div>
                    </div><?php endif; ?>
                    <?php if(($vqa["defen"] > 0) OR ($vqa["defen"] == '0')): ?><h4>得分:<strong><?php echo ($vqa["defen"]); ?></strong></h4><?php endif; endforeach; endif; ?>
                <?php if(($vo["pg_sum"] > 0) OR ($vo["pg_sum"] == '0')): ?><div class=".">
                    <h4>总分:<strong><?php echo ($vo["pg_sum"]); ?></strong></h4>
                </div><?php endif; ?>
                <div class=".">
                    <h4>结论:<strong><?php echo ($vo["pg_result"]); ?></strong></h4>
                </div>
                <?php if(!empty($vo["remark"])): ?><div class=".">
                    <h4>备注:<strong><?php echo ($vo["remark"]); ?></strong></h4>
                </div><?php endif; endforeach; endif; ?>
            
        </fieldset>
    </div>
</div>
</div>

</body>
</html>