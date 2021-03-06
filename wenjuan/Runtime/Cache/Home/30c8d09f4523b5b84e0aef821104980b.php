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
    <header class="header row" style="background: #3498db;color: #fff;">
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
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 64%">
        </div>
    </div>
    <div class="col-md-10" style="padding: 0">
        <div class="">
            <form class="Huiform form-horizontal" id="" action="/questionnaire/jieguo" method="post">
            <input type="hidden" name="wj_name" value="情绪行为/肢体康复评估"/>
            <input type="hidden" name="care_id" value="<?php echo ($care_id); ?>" />
            <input type="hidden" name="goto" value="/questionnaire/qita/care_id/<?php echo ($care_id); ?>/oname/kfxqpg" />
                <fieldset class="row" style="margin: 0 15px">
                    <div class="form-group col-md-12">
                        <h3>情绪行为评估</h3>
                    </div>
                    <div class="form-group col-md-12">
                        <h4><strong>情绪</strong></h4>
                        <div class="col-md-12 ">对客观事物的主观态度体验是否与实际相符，能否被常人理解。
                            <input type="hidden" name="pg_qa[0][question]" value="情绪: 对客观事物的主观态度体验是否与实际相符，能否被常人理解。">
                            <select class="form-control num" name="pg_qa[0][defen]"style="display: inline;width: 40%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="4">6</option>
                                <option value="10">10</option>
                            </select>分
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question1">
                                查看答案内容
                            </button>
                            <div class="modal fade" id="question1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <ul style="list-style: none;">
                                                <li>A、情绪稳定；<strong>(正常&nbsp;0分)</strong></li>
                                                <li>B、情绪欠稳定，但尚能被人理解；<strong>(轻度异常&nbsp;2分)</strong></li>
                                                <li>C、无诱因，情绪变化较大；<strong>(中度异常&nbsp;6分)</strong></li>
                                                <li>D、喜怒无常或毫无反应；<strong>(重度异常&nbsp;10分)</strong></li>
                                                <input name="pg_qa[0][answer][]" value="A、情绪稳定；(正常&nbsp;0分)" type="hidden" />
                                                <input name="pg_qa[0][answer][]" value="B、情绪欠稳定，但尚能被人理解；(轻度异常&nbsp;2分)" type="hidden" />
                                                <input name="pg_qa[0][answer][]" value="C、无诱因，情绪变化较大；(中度异常&nbsp;6分)" type="hidden" />
                                                <input name="pg_qa[0][answer][]" value="D、喜怒无常或毫无反应；(重度异常&nbsp;10分)" type="hidden" />
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4><strong>行为</strong></h4>
                        <div class="col-md-12 ">动作行为表现有否异常。
                        <input type="hidden" name="pg_qa[1][question]" value="行为: 动作行为表现有否异常。">
                            <select class="form-control num" name="pg_qa[1][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="4">6</option>
                                <option value="10">10</option>
                            </select>分
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question2">
                                查看答案内容
                            </button>
                            <div class="modal fade" id="question2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <ul style="list-style: none;">
                                                <li>A、行为正常；<strong>(正常&nbsp;0分)</strong></li>
                                                <li>B、偶尔有异常行为，但不影响正常生活，不需要协助调适或监护；<strong>(轻度异常&nbsp;2分)</strong></li>
                                                <li>C、经常有异常行为，影响正常生活，需要一定监护；<strong>(中度异常&nbsp;6分)</strong></li>
                                                <li>D、经常有异常行为，严重影响正常生活，完全需要监护；<strong>(重度异常&nbsp;10分)</strong></li>
                                                <input name="pg_qa[1][answer][]" value="A、行为正常；(正常&nbsp;0分)" type="hidden" />
                                                <input name="pg_qa[1][answer][]" value="B、偶尔有异常行为，但不影响正常生活，不需要协助调适或监护；(轻度异常&nbsp;2分)" type="hidden" />
                                                <input name="pg_qa[1][answer][]" value="C、经常有异常行为，影响正常生活，需要一定监护；(中度异常&nbsp;6分)" type="hidden" />
                                                <input name="pg_qa[1][answer][]" value="D、经常有异常行为，严重影响正常生活，完全需要监护；(重度异常&nbsp;10分)" type="hidden" />
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <h4><strong>沟通能力</strong></h4>
                        <div class="col-md-12">在交流中能否互相理解。
                        <input type="hidden" name="pg_qa[2][question]" value="沟通能力: 在交流中能否互相理解。">
                        <select class="form-control num" name="pg_qa[2][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>分
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question3">
                                查看答案内容
                            </button>
                            <div class="modal fade" id="question3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <ul style="list-style: none;">
                                                <li>A、理解准确，表达清晰；<strong>(正常&nbsp;0分)</strong></li>
                                                <li>B、需提示才能听懂、简单表达；<strong>(中度异常&nbsp;1分)</strong></li>
                                                <li>C、交流困难，不能表达和理解；<strong>(重度异常&nbsp;2分)</strong></li>
                                                <input name="pg_qa[2][answer][]" value="A、理解准确，表达清晰；(正常&nbsp;0分)" type="hidden" />
                                                <input name="pg_qa[2][answer][]" value="B、需提示才能听懂、简单表达；(中度异常&nbsp;1分)" type="hidden" />
                                                <input name="pg_qa[2][answer][]" value="C、交流困难，不能表达和理解；(重度异常&nbsp;2分)" type="hidden" />
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <p class="duoxuan">评分标准：0 - 1分情绪行为正常&nbsp;&nbsp;<br>2 - 5分情绪行为轻度异常&nbsp;&nbsp;<br> 6 - 14分情绪行为中度异常&nbsp;&nbsp;<br>15分或以上情绪行为重度异常
                        </p>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 col-xs-4 control-label" style="padding-right: 5px">情绪 ：</label>
                        <div class="col-md-11 col-xs-8">
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[0][val][]" value="情绪 ：正常"> 正常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[0][val][]" value="情绪 ：轻度异常"> 轻度异常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[0][val][]" value="情绪 ：中度异常"> 中度异常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[0][val][]" value="情绪 ：重度异常"> 重度异常
                            </label>
                        </div>
                        <label class="col-md-1 col-xs-4 control-label" style="padding-right: 5px">行为 ：</label>
                        <div class="col-md-11 col-xs-8">
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[1][val][]" value="行为 ：正常"> 正常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[1][val][]" value="行为 ：轻度异常"> 轻度异常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[1][val][]" value="行为 ：中度异常"> 中度异常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[1][val][]" value="行为 ：重度异常"> 重度异常
                            </label>
                        </div>
                        <label class="col-md-1 col-xs-4 control-label" style="padding-right: 5px">沟通能力 ：</label>
                        <div class="col-md-11 col-xs-8">
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[2][val][]" value="沟通能力 ：正常"> 正常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[2][val][]" value="沟通能力 ：轻度异常"> 轻度异常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[2][val][]" value="沟通能力 ：中度异常"> 中度异常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark[2][val][]" value="沟通能力 ：重度异常"> 重度异常
                            </label>
                        </div>
                    </div>
				<div class="form-group col-md-12">
                    <h3>肢体康复评估</h3>
                </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-12 ">
                            <h4>坐位平衡：</h4>
                            <h4><strong>被测者取端坐位。双足接地。双手置于腿上。腰背自然伸直，双眼平视前方。</strong></h4>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pg_qa[3][question]"  value="坐位平衡：被测者取端坐位。双足接地。双手置于腿上。腰背自然伸直，双眼平视前方。 静态平衡。被测者能够在无外乱或躯干动作状态下保持端坐位；(1级平衡)">
                                静态平衡。被测者能够在无外乱或躯干动作状态下保持端坐位；<strong>(1级平衡)</strong>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pg_qa[3][question]"  value="坐位平衡：被测者取端坐位。双足接地。双手置于腿上。腰背自然伸直，双眼平视前方。自动动态平衡。被测者能够在无外乱状态下使重心向各方向超过基底面，并能保持平衡；(2级平衡)">
                                自动动态平衡。被测者能够在无外乱状态下使重心向各方向超过基底面，并能保持平衡；<strong>(2级平衡)</strong>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pg_qa[3][question]"  value="坐位平衡：被测者取端坐位。双足接地。双手置于腿上。腰背自然伸直，双眼平视前方。他动动态平衡。被测者能够在各方向外乱干扰下保持平衡；(3级平衡)">
                                他动动态平衡。被测者能够在各方向外乱干扰下保持平衡；<strong>(3级平衡)</strong>
                            </label>
                        </div>
                        <div class="radio">
                            <label class="qsxw">
                                <input type="radio" name="pg_qa[3][question]"  value="坐位平衡：被测者取端坐位。双足接地。双手置于腿上。腰背自然伸直，双眼平视前方。不适用的原因；">
                                不适用的原因；<input type="text" class="form-control" style="display: inline;width: 70%;margin:0 15px" name="pg_qa[3][answer]" value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-12">
                            <h4>立位平衡：</h4>
                            <h4><strong>被测者取直立位。双足与肩同宽。双手自然下垂。腰背自然伸直，双眼平视前方。</strong></h4>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pg_qa[4][question]"  value="立位平衡：被测者取直立位。双足与肩同宽。双手自然下垂。腰背自然伸直，双眼平视前方。静态平衡。被测者能够在无外乱或躯体动作状态下保持直立位；<strong>(1级平衡)</strong>">
                                静态平衡。被测者能够在无外乱或躯体动作状态下保持直立位；<strong>(1级平衡)</strong>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pg_qa[4][question]"  value="立位平衡：被测者取直立位。双足与肩同宽。双手自然下垂。腰背自然伸直，双眼平视前方。自动动态平衡。被测者能够在无外乱状态下使重心向各方向超过基底面，并能保持平衡；<strong>(2级平衡)</strong>">
                                自动动态平衡。被测者能够在无外乱状态下使重心向各方向超过基底面，并能保持平衡；<strong>(2级平衡)</strong>
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pg_qa[4][question]"  value="立位平衡：被测者取直立位。双足与肩同宽。双手自然下垂。腰背自然伸直，双眼平视前方。 他动动态平衡。被测者能够在各方向外乱干扰下保持平衡；<strong>(3级平衡)</strong>">
                                他动动态平衡。被测者能够在各方向外乱干扰下保持平衡；<strong>(3级平衡)</strong>
                            </label>
                        </div>
                        <div class="radio">
                            <label class="qsxw">
                                <input type="radio" name="pg_qa[4][question]"  value="立位平衡：被测者取直立位。双足与肩同宽。双手自然下垂。腰背自然伸直，双眼平视前方。不适用的原因；">
                                不适用的原因；<input type="text" class="form-control" style="display: inline;width: 70%;margin:0 15px" name='pg_qa[4][answer]' value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="col-md-12">
                            <h4><strong>Holden步行能力评定：</strong></h4>
                        </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pg_qa[5][question]"  value="Holden步行能力评定：不能步行或需2人以上的协助；(0级)">
                                    不能步行或需2人以上的协助；<strong>(0级)</strong>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pg_qa[5][question]"  value="Holden步行能力评定：需要1人连续不断地帮助才能行走；(1级平衡)">
                                    需要1人连续不断地帮助才能行走；<strong>(1级平衡)</strong>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pg_qa[5][question]"  value="Holden步行能力评定： 需1人在旁以间断的接触身体的帮助行走，步行不安全；(2级平衡)">
                                    需1人在旁以间断的接触身体的帮助行走，步行不安全；<strong>(2级平衡)</strong>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pg_qa[5][question]"  value="Holden步行能力评定：需1人在旁监护或用言语指导，但不接触身体；(3级平衡)">
                                    需1人在旁监护或用言语指导，但不接触身体；<strong>(3级平衡)</strong>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pg_qa[5][question]"  value="Holden步行能力评定：在平地上独立步行，在楼梯或斜坡上行走需帮助；(4级)">
                                    在平地上独立步行，在楼梯或斜坡上行走需帮助；<strong>(4级)</strong>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pg_qa[5][question]"  value="Holden步行能力评定： 任何地方都能独立步行；(5级平衡)">
                                    任何地方都能独立步行；<strong>(5级平衡)</strong>
                                </label>
                            </div>
                        <div class="radio">
                            <label class="qsxw">
                                <input type="radio" name="pg_qa[5][question]"  value="Holden步行能力评定：不适用的原因；">
                                不适用的原因；<input type="text" class="form-control" style="display: inline;width: 70%;margin:0 15px" name='pg_qa[5][answer]' value="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 5px">肌力 ：</label>
                        <div class="col-md-11">
                            <label class="checkbox-inline">
                                <input type="radio"  name="pg_qa[6][question]" value="肌力 ：正常"> 正常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="pg_qa[6][question]" value="肌力 ：减低"> 减低
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 5px">肌张力 ：</label>
                        <div class="col-md-11">
                            <label class="checkbox-inline">
                                <input type="radio" name="pg_qa[7][question]" value="肌张力 ：正常"> 正常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="pg_qa[7][question]" value="肌张力 ：增高"> 增高
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="pg_qa[7][question]" value="肌张力 ：挛缩"> 挛缩
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="pg_qa[7][question]" value="肌张力 ：减低"> 减低
                            </label>
                        </div>
                    </div>

                        <div class=".">
                            <h3>视觉能力评估</h3>
                        </div>
                                <div class="form-group col-md-12">
                                    <h4><strong>视力</strong></h4>
                                    <div class="col-md-12" style="margin-bottom:10px; ">
                                        <h4><strong>有否视力障碍，能否安全照顾自己；</strong></h4>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio"  name="pg_qa[8][question]"  value="有否视力障碍，能否安全照顾自己:在正常环境下能安全照顾自己；(正常)">
                                            在正常环境下能安全照顾自己；<strong>(正常)</strong>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio"  name="pg_qa[8][question]"  value="有否视力障碍，能否安全照顾自己:低视力（矫正后），生活需要照顾；(中度异常)">
                                            低视力（矫正后），生活需要照顾；<strong>(中度异常)</strong>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio"  name="pg_qa[8][question]"  value="有否视力障碍，能否安全照顾自己:由于视力障碍，功能完全丧失，无法适应生活环境而安全照顾自己；(重度异常)">
                                            由于视力障碍，功能完全丧失，无法适应生活环境而安全照顾自己；<strong>(重度异常)</strong>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-1 control-label" style="padding-right: 5px">评估结论 ：</label>
                                    <div class="col-md-11">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="jielun" value="正常"> 正常
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="jielun" value="听力下降"> 听力下降
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="jielun" value="丧失听力"> 丧失听力
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="jielun" value="助听器"> 助听器
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
<script type="text/javascript">
$('.num').change(function(){
	var sum = 0;
	$('.num').each(function(){
		if(parseFloat(this.value)){
			sum += parseFloat(this.value);
		}
	});
	$('#sum').val(sum);
});
</script>

</body>
</html>