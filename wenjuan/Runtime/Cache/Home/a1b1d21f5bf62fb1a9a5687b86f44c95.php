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
<div style="margin: -20px 0px;;font-family: Microsoft YaHei;">
    <header class="header row" style="background: #3498db;color: #fff;">
        <nav class="navbar navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header col-md-3">
                <div class="col-md-offset-2">
                    <a class="navbar-brand" href="index.html">评估系统</a>
                </div>
            </div>

            <div class="header-right">
                <a href="#" class="btn btn-primary" title=""><i class="glyphicon glyphicon-user"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="glyphicon glyphicon-off"></i></a>

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

        <div class="">
            <div class=".">
                <h3>疾病/治疗/康复需求评估</h3>
            </div>
            <form class="Huiform form-horizontal" id="commentForm" action="/questionnaire/jieguo" method="post">
            <input type="hidden" name="wj_name" value="疾病/治疗/康复需求评估"/>
            <input type="hidden" name="care_id" value="<?php echo ($care_id); ?>" />
            <input type="hidden" name="goto" value="/questionnaire/careinfo/care_id/<?php echo ($care_id); ?>" />
                <fieldset class="row">
                    <h4>病情观察及健康评估</h4>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">生命体征的动态监测(最高分:10分）
                        	<input type="hidden" name="pg_qa[0][question]" value="生命体征的动态监测(最高分:10分）">
                            <input type="text" class="form-control" style="display: inline;width: 30%;margin:0 15px" name="pg_qa[0][defen]" value="" required>分
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[0][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">营养状况评估(最高分:10分）
                        	<input type="hidden" name="pg_qa[1][question]" value="营养状况评估(最高分:10分）">
                            <input type="text" class="form-control" style="display: inline;width: 30%;margin:0 15px" name="pg_qa[1][defen]" value="" required>分
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[1][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">中风复发风险评估(最高分:5分）
                        	<input type="hidden" name="pg_qa[2][question]" value="中风复发风险评估(最高分:5分）">
                            <input type="text" class="form-control" style="display: inline;width: 30%;margin:0 15px" name="pg_qa[2][defen]" value="" required>分
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[2][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">基于药物使用需检测生命体征<br>或其它监测指标(最高分:10分）
                        	<input type="hidden" name="pg_qa[3][question]" value="基于药物使用需检测生命体征  或其它监测指标(最高分:10分）">
                            <input type="text" class="form-control" style="display: inline;width: 30%;margin:0 15px" name="pg_qa[3][defen]" value="" required>分
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[3][answer]" value="">
                        </label>
                    </div>
                    <h4>治疗需要</h4>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">雾化吸入治疗和/或叩背排痰
                            <label>
                                <input type="radio" name="pg_qa[4][question]"  value="雾化吸入治疗和/或叩背排痰:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[4][question]"  value="雾化吸入治疗和/或叩背排痰:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[4][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">需胰岛素注射
                            <label>
                                <input type="radio" name="pg_qa[5][question]"  value="需胰岛素注射:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[5][question]"  value="需胰岛素注射:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[5][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">进行指尖采血测试
                            <label>
                                <input type="radio" name="pg_qa[6][question]"  value="进行指尖采血测试:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[6][question]"  value="进行指尖采血测试:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[6][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">压疮护理
                            <label>
                                <input type="radio" name="pg_qa[7][question]"  value="压疮护理:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[7][question]"  value="压疮护理:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[7][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">导管喂饲
                            <label>
                                <input type="radio" name="pg_qa[8][question]"  value="导管喂饲:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[8][question]"  value="导管喂饲:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[8][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">造瘘护理
                            <label>
                                <input type="radio" name="pg_qa[9][question]"  value="造瘘护理:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[9][question]"  value="造瘘护理:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[9][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">吸痰护理
                            <label>
                                <input type="radio" name="pg_qa[10][question]"  value="吸痰护理:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[10][question]"  value="吸痰护理:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[10][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">吸氧护理
                            <label>
                                <input type="radio" name="pg_qa[11][question]"  value="吸氧护理:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[11][question]"  value="吸氧护理:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[11][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">尿管护理
                            <label>
                                <input type="radio" name="pg_qa[12][question]"  value="尿管护理:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[12][question]"  value="尿管护理:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[12][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">气管插管护理
                            <label>
                                <input type="radio" name="pg_qa[13][question]"  value="气管插管护理:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[13][question]"  value="气管插管护理:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[13][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">服药管理
                            <label>
                                <input type="radio" name="pg_qa[14][question]"  value="服药管理:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[14][question]"  value="服药管理:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[14][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">伤口换药
                            <label>
                                <input type="radio" name="pg_qa[15][question]"  value="伤口换药:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[15][question]"  value="伤口换药:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[15][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">肢体按摩
                            <label>
                                <input type="radio" name="pg_qa[16][question]"  value="肢体按摩:需要">
                                需要
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[16][question]"  value="肢体按摩:不需要">
                                不需要
                            </label>
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[16][answer]" value="">
                        </label>
                    </div>
                    
                    
                    
           <div class=".">
                <h3>居室环境安全评估</h3>
            </div>
           <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">是否无障碍坡道
                            <label>
                                <input type="radio" name="pg_qa[17][question]"  value="居室环境安全评估: 是否无障碍坡道:是">
                                是
                            </label>
                            <label>
                                <input type="radio"name="pg_qa[17][question]" value="是否无障碍坡道:否">
                                否
                            </label>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">是否电梯
                            <label>
                                <input type="radio" name="pg_qa[18][question]" value="是否电梯:是">
                                是
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[18][question]"  value="是否电梯:否">
                                否
                            </label>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">室内是否有门坎
                            <label>
                                <input type="radio" name="pg_qa[19][question]"   value="室内是否有门坎:是">
                                是
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[19][question]"   value="室内是否有门坎:否">
                                否
                            </label>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">室内有物品羁绊
                            <label>
                                <input type="radio" name="pg_qa[20][question]"   value="室内有物品羁绊:是">
                                是
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[20][question]"   value="室内有物品羁绊:否">
                                否
                            </label>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">地面是否反光
                            <label>
                                <input type="radio" name="pg_qa[21][question]"   value="地面是否反光:是">
                                是
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[21][question]"   value="地面是否反光:否">
                                否
                            </label>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">地面是否防滑
                            <label>
                                <input type="radio" name="pg_qa[22][question]"   value="地面是否防滑:是">
                                是
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[22][question]"   value="地面是否防滑:否">
                                否
                            </label>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label">浴缸、淋浴房旁有扶手
                            <label>
                                <input type="radio" name="pg_qa[23][question]"   value="浴缸、淋浴房旁有扶手:是">
                                是
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[23][question]"   value="浴缸、淋浴房旁有扶手:否">
                                否
                            </label>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label radio">是否有浴椅
                            <label>
                                <input type="radio" name="pg_qa[24][question]"   value="是否有浴椅:是">
                                是
                            </label>
                            <label>
                                <input type="radio" name="pg_qa[24][question]"   value="是否有浴椅:否">
                                否
                            </label>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 control-label radio">马桶旁有扶手
                            <label>
                                <input type="radio" name="pg_qa[25][question]"   value="马桶旁有扶手:是">
                                是
                            </label>
                            <label>
                                <input type="radio"  name="pg_qa[25][question]"  value="马桶旁有扶手:否">
                                否
                            </label>
                        </label>
                    </div>
            <div class=".">
                <h3>服务建议</h3>
            </div>
                   <div class="form-group col-md-12">
                        <div class="col-md-11"><input type="hidden" name="pg_qa[26][question]" value="服务建议">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="健康管理"> 健康管理
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="健康咨询"> 健康咨询
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="健康讲座"> 健康讲座
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="慢病维护"> 慢病维护
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="陪同就医"> 陪同就医
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="营养膳食"> 营养膳食
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="送餐服务"> 送餐服务
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="健康指导"> 健康指导
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="康复指导"> 康复指导
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="家属培训"> 家属培训
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="个人卫生"> 个人卫生
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="行动协助"> 行动协助
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="生活自理能力训练"> 生活自理能力训练
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="认知功能训练"> 认知功能训练
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="功能训练"> 功能训练
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="保健按摩"> 保健按摩
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="心理慰藉"> 心理慰藉
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="陪伴"> 陪伴
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="生命体征测量"> 生命体征测量
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="家庭深度清洁"> 家庭深度清洁
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="居室安全改造"> 居室安全改造
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="辅具适配"> 辅具适配
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="pg_qa[26][answer][]" value="其他"> 其他
                                <input type="text" class="form-control" style="display: inline;width: 70%;"  name="pg_qa[26][answer][]" value="">
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
</body>
</html>