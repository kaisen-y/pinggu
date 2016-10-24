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
        <form class="Huiform form-horizontal" id="commentForm" action="/questionnaire/jieguo" method="post">
            <input type="hidden" name="wj_name" value="疾病/治疗/康复需求评估"/>
            <input type="hidden" name="care_id" value="<?php echo ($care_id); ?>" />
            <input type="hidden" name="goto" value="/questionnaire/qita/care_id/<?php echo ($care_id); ?>/oname/jzaqpg" />
                <fieldset class="row" style="margin: 0">
                    <div class="form-group col-md-12">
                        <h3>疾病/治疗/康复需求评估</h3>
                    </div>
                    <h4>病情观察及健康评估</h4>
                    <div class="form-group col-md-12">
                        <label class="col-md-4" style="margin-bottom: 15px">
                            <span class="text-left">生命体征的动态监测(10分)</span>
                        	<input type="hidden" name="pg_qa[0][question]" value="生命体征的动态监测(最高分:10分）">
                            <input type="number" class="form-control" style="display: inline;width: 30%;margin:0 5px" name="pg_qa[0][defen]" value="" required>分
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[0][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 " style="margin-bottom: 15px">营养状况评估(10分）
                        	<input type="hidden" name="pg_qa[1][question]" value="营养状况评估(最高分:10分）">
                            <input type="number" class="form-control" style="display: inline;width: 30%;margin:0 15px" name="pg_qa[1][defen]" value="" required>分
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[1][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 " style="margin-bottom: 15px">中风复发风险评估(5分）
                        	<input type="hidden" name="pg_qa[2][question]" value="中风复发风险评估(最高分:5分）">
                            <input type="number" class="form-control" style="display: inline;width: 30%;margin:0 15px" name="pg_qa[2][defen]" value="" required>分
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[2][answer]" value="">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-4 " style="margin-bottom: 15px">基于药物使用需检测生命体征<br>或其它监测指标(10分）
                        	<input type="hidden" name="pg_qa[3][question]" value="基于药物使用需检测生命体征  或其它监测指标(最高分:10分）">
                            <input type="number" class="form-control" style="display: inline;width: 30%;margin:0 15px" name="pg_qa[3][defen]" value="" required>分
                        </label>
                        <label class="col-md-6 control-label">备注
                            <input type="text" class="form-control" style="display: inline;width: 55%;margin:0 15px" name="pg_qa[3][answer]" value="">
                        </label>
                    </div><input type="hidden" value="35" name="pgcount">
                    <div class="form-group col-md-12">
                        <h4>治疗需要</h4>
                    </div>
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
                    
                    <div class="form-group col-md-12" style="margin-top:20px;">
                        <div class=" text-left col-md-2 col-md-offset-3">
                            <button type="submit" class="btn btn-primary radius" style="width:70%"><i class="icon-ok"></i>提交</button>
                        </div>
                    </div>
                </fieldset>
            </form>
    </div>
</div>

</body>
</html>