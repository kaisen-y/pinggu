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

    <div class="col-md-10" style="padding: 0">
        <div class="progress" style="margin: 35px 20px">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 14%">
            </div>
        </div>
        <div class="">
            <div class="." style="border-bottom: solid 1px #ccc;margin-bottom: 15px;padding-left: 3%;">
                <h3>基本信息</h3>
            </div>
            <form class="Huiform form-horizontal" id="commentForm" action="" method="post">
                <fieldset class="row" style="margin: 0">
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">用户姓名：</label>
                            <div class="col-md-8 col-xs-7">
                                <input  type="text" class="form-control"  name="name" required data-rule-chinese="true" data-msg-required="名字格式出错" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">性别：</label>
                            <div class="col-md-8 col-xs-7">
                                   <select class="form-control" name="sex">
                                       <option value="1">男</option>
                                       <option value="2">女</option>
                                       <option value="3">其他</option>
                                   </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label" for="date_1">出生年月：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control"  id="date_1" name="brith" style="display: inline;width: 70%" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">民族：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="nation" value="" nullmsg="" datatype="s" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">籍贯：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="origin" value="" nullmsg="" datatype="s" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">宗教信仰：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="religion" value="" nullmsg="" datatype="s" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">证件类型：</label>
                            <div class="col-md-8 col-xs-7">
                                <select class="form-control" name="credentials_type">
                                    <option value="军人证">军人证</option>
                                    <option value="残疾人证">残疾人证</option>
                                    <option value="老人证">老人证</option>
                                    <option value="其他">其他</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">证件号：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" name="credentials_no" class="form-control" required data-rule-idCard="true" data-msg-required="身份证格式出错">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">社保卡号：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="ss_card"  value="" nullmsg="" datatype="s" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">文化程度：</label>
                            <div class="col-md-8 col-xs-7">
                                <select class="form-control" name="education">
                                    <option value="0">无</option>
                                    <option value="1">小学</option>
                                    <option value="2">初中</option>
                                    <option value="3">高中</option>
                                    <option value="4">大专</option>
                                    <option value="5">本科或以上</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">婚姻状况：</label>
                            <div class="col-md-8 col-xs-7">
                                <select class="form-control" name="marriage">
                                    <option value="1">未婚</option>
                                    <option value="2">已婚</option>
                                    <option value="3">丧偶</option>
                                    <option value="4">离婚</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">既往职业：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="careers" value="" nullmsg="" datatype="s" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">户籍所在地：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="registry_add" value="" nullmsg="" datatype="s" >
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">居住地址：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="address" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">住所附近医院：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="add_hospital" value="" nullmsg="" datatype="s" >
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">习惯就诊的医院：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="hospital" value="" nullmsg="" datatype="s" >
                        </div>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">住宅电话：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="tellphone" required data-rule-noactel="true" data-msg-required="请输入正确的电话号码">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">移动电话：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="mobile" required data-rule-mobile="true" data-msg-required="请输入手机的电话号码">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-xs-3 control-label">是否是残疾人：</label>
                        <div class="radio col-xs-4">
                            <label class="yes">
                                <input type="radio" name="canjiren">
                                是
                            </label>
                        </div>
                        <div class="radio  col-xs-4">
                            <label class="no">
                                <input type="radio" name="canjiren">
                                否
                            </label>
                        </div>
                    </div>
                    <div class="canjiren">
                        <div class="form-group col-md-12">
                            <h4 class="text-center">残疾信息（残障人士评估专用）</h4>
                            <hr>
                        </div>
                        <div class="col-md-12" style="padding: 0">
                            <div class="form-group col-md-6">
                                <label class="col-md-3 col-xs-5 control-label">残疾人证号：</label>
                                <div class="col-md-8 col-xs-7">
                                    <input type="text" class="form-control" name="disability_no" value="" nullmsg="" datatype="s" >
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col-md-3 col-xs-5 control-label">类别/等级：</label>
                                <div class="col-md-8 col-xs-7">
                                    <select class="form-control col-md-6 col-xs-6" name="disability_type" style="width: 45%;margin-right: 5%" >
                                        <option value="视力">视力</option>
                                        <option value="听力">听力</option>
                                        <option value="言语">言语</option>
                                        <option value="肢体">肢体</option>
                                        <option value="智力">智力</option>
                                        <option value="精神">精神</option>
                                        <option value="多重">多重</option>
                                    </select>
                                    <input type="text" class="form-control col-md-6 col-xs-6" name="disability_level" style="width: 45%;" value="" nullmsg="" datatype="s" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="padding: 0">
                            <div class="form-group col-md-6">
                                <label class="col-md-3 col-xs-5 control-label">致残时间：</label>
                                <div class="col-md-8 col-xs-7">
                                    <input type="text" class="form-control" name="disability_time" id="date_2" style="display: inline;width: 70%"  >
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col-md-3 control-label">致残原因：</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="disability_cause" value="" nullmsg="" datatype="s" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4 class="text-center">紧急联系人信息</h4>
                        <hr>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">姓名：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="jjlx_name" required data-rule-chinese="true" data-msg-required="名字格式出错">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">与被照护人关系：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="jjlx_guanxi" value="" required data-rule-chinese="true" data-msg-required="请输入中文">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">电话：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="jjlx_phone"required data-rule-noactel="true" data-msg-required="请输入正确的电话号码">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 col-xs-5 control-label">E-Mail：</label>
                            <div class="col-md-8 col-xs-7">
                                <input type="text" class="form-control" name="jjlx_email" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding: 0">
                        <div class="form-group col-md-6">
                            <label class="col-md-3 control-label">地址：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="jjlx_addr" value="" nullmsg="" datatype="s" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-3 control-label">备注：</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="jjlx_remark" value="" nullmsg="" datatype="s" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <h4 class="text-center">目前状况   </h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">经济来源：</label>
                        <div class="col-md-10 duoxuan">
                            <label class="checkbox-inline" style="margin-left: 10px;">
                                <input type="checkbox" name="jingjilaiyuan[]" value="退休金"> 退休金
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjilaiyuan[]" value="老伴供养"> 老伴供养
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjilaiyuan[]" value="子女补贴"> 子女补贴
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjilaiyuan[]" value="房屋租金"> 房屋租金
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjilaiyuan[]" value="政府福利补助（如低保、老年券）"> 政府福利补助（如低保、老年券）
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjilaiyuan[]" value="其它收入（如退休返聘费、做生意所得）"> 其它收入（如退休返聘费、做生意所得）
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjilaiyuan[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;" name="jingjilaiyuan[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">经济条件：</label>
                        <div class="col-md-10 duoxuan">
                            <label class="checkbox-inline"style="margin-left: 10px;">
                                <input type="checkbox" name="jingjitiaojian[]" value="低收入（低保、残保、区级困难家庭）"> 低收入（低保、残保、区级困难家庭）
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjitiaojian[]" value="无社保（非低保、低收入）"> 无社保（非低保、低收入）
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjitiaojian[]" value="退休工资2000-3000元（夫妻双方平均）"> 退休工资2000-3000元（夫妻双方平均）
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjitiaojian[]" value="退休工资3000元以上（夫妻双方平均）"> 退休工资3000元以上（夫妻双方平均）
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="jingjitiaojian[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;" name="jingjitiaojian[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">居住状况：</label>
                        <div class="col-md-10 duoxuan">
                            <label class="checkbox-inline"style="margin-left: 10px;">
                                <input type="checkbox" name="juzhu[]" value="与子女或亲戚朋友同住"> 与子女或亲戚朋友同住
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="juzhu[]" value="与配偶同住"> 与配偶同住
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="juzhu[]" value="独居"> 独居
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="juzhu[]" value="空巢"> 空巢
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="juzhu[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="juzhu[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">安养状态：</label>
                        <div class="col-md-10 duoxuan">
                            <label class="checkbox-inline"style="margin-left: 10px;">
                                <input type="checkbox" name="anyang[]" value=""> 保姆照料
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="anyang[]" value="子女赡养"> 子女赡养
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="anyang[]" value="自我照料"> 自我照料
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="anyang[]" value="配偶"> 配偶
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="anyang[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;" name="anyang[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">住房性质：</label>
                        <div class="col-md-10 duoxuan">
                            <label class="checkbox-inline"style="margin-left: 10px;">
                                <input type="checkbox" name="zhufang[]" value="产权房"> 产权房
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zhufang[]" value="租赁房"> 租赁房
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zhufang[]" value="廉租房"> 廉租房
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="zhufang[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;" name="zhufang[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">休闲娱乐：</label>
                        <div class="col-md-10 duoxuan">  
                            <label class="checkbox-inline"style="margin-left: 10px;">
                                <input type="checkbox" name="xiuxian[]" value="欣赏艺术"> 欣赏艺术
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="按摩"> 按摩
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="下棋"> 下棋
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="旅游"> 旅游
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="美容"> 美容
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="参加聚会"> 参加聚会
                            </label>
                            
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="艺术创造"> 艺术创造
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="摄影"> 摄影
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="读书"> 读书
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="书法"> 书法
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="绘画"> 绘画
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="散步"> 散步
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="xiuxian[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="xiuxian[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">文化需求：</label>
                        <div class="col-md-10 duoxuan">
                            <label class="checkbox-inline"style="margin-left: 10px;">
                                <input type="checkbox" name="wenhuaxuqiu[]" value="老年大学"> 老年大学
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wenhuaxuqiu[]" value="文化讲座"> 文化讲座
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wenhuaxuqiu[]" value="各位知识培训班"> 各位知识培训班
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wenhuaxuqiu[]" value="旅游"> 旅游
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wenhuaxuqiu[]" value="理财咨询"> 理财咨询
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wenhuaxuqiu[]" value="法律咨询和帮扶"> 法律咨询和帮扶
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="wenhuaxuqiu[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="wenhuaxuqiu[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">特殊贡献：</label>
                        <div class="col-md-10 duoxuan">
                            <label class="checkbox-inline"style="margin-left: 10px;">
                                <input type="checkbox" name="teshugongxian[]" value="市级以上劳模"> 市级以上劳模
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="teshugongxian[]" value="重点优抚对象"> 重点优抚对象
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="teshugongxian[]" value="离休干部"> 离休干部
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="teshugongxian[]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;" name="teshugongxian[]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">备注：</label>
                        <div class="col-md-10 duoxuan">
                            <textarea class="form-control" name="remark" rows="3"></textarea>
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
<!-- METISMENU SCRIPTS -->
<script type="text/javascript">
    $(".yes").click(function(){
        $(".canjiren").show();
    });
    $(".no").click(function(){
        $(".canjiren").hide();
    });
    $(function(){
        $("#date_1").datepicker({
            showOn: "button",
            buttonImage: "<?php echo C('RES_DOMAIN');?>/Public/images/calendar.gif",
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd',
            yearRange: '1930:2000',
            defaultDate:'1930-01-01'
        });
        $("#date_2").datepicker({
            showOn: "button",
            buttonImage: "<?php echo C('RES_DOMAIN');?>/Public/images/calendar.gif",
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd',
            yearRange: '1930:2000',
            defaultDate:'1930-01-01'
        });
    });
</script>

</body>
</html>