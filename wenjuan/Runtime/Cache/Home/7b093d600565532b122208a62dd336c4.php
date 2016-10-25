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
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1" style="padding: 0">
    <div class="">
        <form class="Huiform form-horizontal" id="commentForm" action="/questionnaire/jieguo" method="post">
            <input type="hidden" name="wj_name" value="自理能力评估"/>
            <input type="hidden" name="care_id" value="<?php echo ($care_id); ?>" />
            <input type="hidden" name="goto" value="/questionnaire/qita/care_id/<?php echo ($care_id); ?>/oname/rznlpg" />
            <fieldset class="row" style="margin: 0 15px">
                <div style="margin: 20px 0;">
                    <h4><strong>对以下行为进行评估</strong></h4>
                </div>

                <div class="form-group col-md-12">
                    <h3>自理能力评估</h3>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12 ">进食：
                        <input name="pg_qa[1][question]" value="进食" type="hidden" />
                        <select class="form-control num" name="pg_qa[1][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                        </select>分
                        <!--<input type="number" class="form-control num" style="display: inline;width: 60%;margin:0 15px 20px" name="pg_qa[1][defen]" value="" required>分-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question1">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、自己在合理的时间內（约10秒钟吃一口）可用筷子取食眼前的食物。若需辅具时，应会自行穿脱；<strong>(10分)</strong></li>
                                            <li>B、需部分帮助（切面包、抹黄油、夹菜、盛饭等）；<strong>(5分)</strong></li>
                                            <li>C、完全依赖他人；<strong>(0分)</strong></li>
                                            <input name="pg_qa[1][answer][]" value="A、自己在合理的时间內（约10秒钟吃一口）可用筷子取食眼前的食物。若需辅具时，应会自行穿脱；(10分)" type="hidden" />
                                            <input name="pg_qa[1][answer][]" value="B、需部分帮助（切面包、抹黄油、夹菜、盛饭等）；(5分)" type="hidden" />
                                            <input name="pg_qa[1][answer][]" value="C、完全依赖他人；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12 ">转移：
                    <input name="pg_qa[2][question]" value="转移" type="hidden" />
                        <select class="form-control num" name="pg_qa[2][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>分
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question2">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、自理；<strong>(15分)</strong></li>
                                            <li>B、需要少量帮助(1人)或语言指导；<strong>(10分)</strong></li>
                                            <li>C、需两人或1个强壮、动作娴熟的人帮助；<strong>(5分)</strong></li>
                                            <li>D、完全依赖别人；<strong>(0分)</strong></li>
                                            <input name="pg_qa[2][answer][]" value="A、自理；(15分)" type="hidden" />
                                            <input name="pg_qa[2][answer][]" value="B、需要少量帮助(1人)或语言指导；(10分)" type="hidden" />
                                            <input name="pg_qa[2][answer][]" value="C、需两人或1个强壮、动作娴熟的人帮助；(5分)" type="hidden" />
                                            <input name="pg_qa[2][answer][]" value="D、完全依赖别人；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12">修饰：
                    <input name="pg_qa[3][question]" value="修饰" type="hidden" />
                        <select class="form-control num" name="pg_qa[3][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>分
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question3">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、可独立完成洗脸、洗手、刷牙及梳头；<strong>(5分)</strong></li>
                                            <li>B、需要別人帮忙；<strong>(0分)</strong></li>
                                            <input name="pg_qa[3][answer][]" value="A、可独立完成洗脸、洗手、刷牙及梳头；(5分)" type="hidden" />
                                            <input name="pg_qa[3][answer][]" value="B、需要別人帮忙；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12">上厕所：
                    <input name="pg_qa[4][question]" value="上厕所" type="hidden" />
                        <select class="form-control num" name="pg_qa[4][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                        </select>分
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question4">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、可自行进出厕所，不会弄脏衣物，并能穿好衣服。使用便盆者，可自行清理便盆；<strong>(10分)</strong></li>
                                            <li>B、需帮忙保持姿勢的平衡，整理衣物或使用卫生紙。使用便盆者，可自行取放便盆，但须仰赖他人清理；<strong>(5分)</strong></li>
                                            <li>C、需他人帮忙；<strong>(0分)</strong></li>
                                            <input name="pg_qa[4][answer][]" value="A、可自行进出厕所，不会弄脏衣物，并能穿好衣服。使用便盆者，可自行清理便盆；(10分)" type="hidden" />
                                            <input name="pg_qa[4][answer][]" value="B、需帮忙保持姿勢的平衡，整理衣物或使用卫生紙。使用便盆者，可自行取放便盆，但须仰赖他人清理；(5分)" type="hidden" />
                                            <input name="pg_qa[4][answer][]" value="C、需他人帮忙；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12 ">洗澡：
                    <input name="pg_qa[5][question]" value="洗澡" type="hidden" />
                        <select class="form-control num" name="pg_qa[5][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>分
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question5">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、可独立完成（不论是盆浴或淋浴）；<strong>(5分)</strong></li>
                                            <li>B、需別人帮忙；<strong>(0分)</strong></li>
                                            <input name="pg_qa[5][answer][]" value="A、可独立完成（不论是盆浴或淋浴）；(5分)" type="hidden" />
                                            <input name="pg_qa[5][answer][]" value="B、需別人帮忙；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12">行走（平地45m）：
                    <input name="pg_qa[6][question]" value="行走（平地45m）" type="hidden" />
                        <select class="form-control num" name="pg_qa[6][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>分
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question6">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、使用或不使用辅具皆可独立行走50公尺以上；<strong>(15分)</strong></li>
                                            <li>B、需要稍微的扶持或口头指导方可行走50公尺以上；<strong>(10分)</strong></li>
                                            <li>C、虽无法行走，但可独立操纵轮椅（包括转弯、进门、及接近桌子、床沿）并可推行轮椅50公尺以上；<strong>(5分)</strong></li>
                                            <li>D、需別人帮忙；<strong>(0分)</strong></li>
                                            <input name="pg_qa[6][answer][]" value="A、使用或不使用辅具皆可独立行走50公尺以上；(15分)" type="hidden" />
                                            <input name="pg_qa[6][answer][]" value="B、需要稍微的扶持或口头指导方可行走50公尺以上；(10分)" type="hidden" />
                                            <input name="pg_qa[6][answer][]" value="C、虽无法行走，但可独立操纵轮椅（包括转弯、进门、及接近桌子、床沿）并可推行轮椅50公尺以上；(5分)" type="hidden" />
                                            <input name="pg_qa[6][answer][]" value="D、需別人帮忙；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12 ">上下楼梯：
                    <input name="pg_qa[7][question]" value="上下楼梯" type="hidden" />
                        <select class="form-control num" name="pg_qa[7][defen]"style="display: inline;width: 60%;margin:0 0px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                        </select>分
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question7">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、可自行上下楼梯（允许抓扶手、用拐杖）；<strong>(10分)</strong></li>
                                            <li>B、需要稍微帮忙或口头指导；<strong>(5分)</strong></li>
                                            <li>C、无法上下楼梯；<strong>(0分)</strong></li>
                                            <input name="pg_qa[7][answer][]" value="A、可自行上下楼梯（允许抓扶手、用拐杖）；(10分)" type="hidden" />
                                            <input name="pg_qa[7][answer][]" value="B、需要稍微帮忙或口头指导；(5分)" type="hidden" />
                                            <input name="pg_qa[7][answer][]" value="C、无法上下楼梯；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12 ">穿脫衣服：
                    <input name="pg_qa[8][question]" value="穿脫衣服" type="hidden" />
                        <select class="form-control num" name="pg_qa[8][defen]"style="display: inline;width: 60%;margin:0 0px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                        </select>分
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question8">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、可自行穿脫衣服、鞋子及辅具；<strong>(10分)</strong></li>
                                            <li>B、在別人帮忙下、可自行完成一半以上的动作；<strong>(5分)</strong></li>
                                            <li>C、需別人帮忙；<strong>(0分)</strong></li>
                                            <input name="pg_qa[8][answer][]" value="A、可自行穿脫衣服、鞋子及辅具；(10分)" type="hidden" />
                                            <input name="pg_qa[8][answer][]" value="B、在別人帮忙下、可自行完成一半以上的动作；(5分)" type="hidden" />
                                            <input name="pg_qa[8][answer][]" value="C、需別人帮忙；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12 ">大便控制：
                    <input name="pg_qa[9][question]" value="大便控制" type="hidden" />
                        <select class="form-control num" name="pg_qa[9][defen]"style="display: inline;width: 60%;margin:0 0px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                        </select>分
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question9">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、能控制；<strong>(10分)</strong></li>
                                            <li>B、偶尔失禁（每周＜1次）；<strong>(5分)</strong></li>
                                            <li>C、失禁或昏迷；<strong>(0分)</strong></li>
                                            <input name="pg_qa[9][answer][]" value="A、能控制；(10分)" type="hidden" />
                                            <input name="pg_qa[9][answer][]" value="B、偶尔失禁（每周＜1次）；(5分)" type="hidden" />
                                            <input name="pg_qa[9][answer][]" value="C、失禁或昏迷；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12 ">小便控制：
                    <input name="pg_qa[10][question]" value="小便控制" type="hidden" />
                        <select class="form-control num" name="pg_qa[10][defen]"style="display: inline;width: 60%;margin:0 0px 20px">
                            <option value="0">0</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                        </select>分
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#question10">
                            查看答案内容
                        </button>
                        <div class="modal fade" id="question10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ul style="list-style: none;">
                                            <li>A、能控制；<strong>(10分)</strong></li>
                                            <li>B、偶尔失禁（每周＜1次）或尿急（无法等待便盆或无法即时赶到厕所）或需別人帮忙处理；<strong>(5分)</strong></li>
                                            <li>C、失禁、昏迷或需要他人导尿；<strong>(0分)</strong></li>
                                            <input name="pg_qa[10][answer][]" value="A、能控制；(10分)" type="hidden" />
                                            <input name="pg_qa[10][answer][]" value="B、偶尔失禁（每周＜1次）或尿急（无法等待便盆或无法即时赶到厕所）或需別人帮忙处理；(5分)" type="hidden" />
                                            <input name="pg_qa[10][answer][]" value="C、失禁、昏迷或需要他人导尿；(0分)" type="hidden" />
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </label>

                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12 ">总得分：<input type="number" id="sum" class="form-control" style="display: inline;width: 60%;margin:0 15px 20px"  value="" required>分
                    </label>
                    <h5>评分标准：最高分100分。<br>
                        <p style="margin-left: 35px;margin-top:10px">
                            ≥60分：良，生活基本自理；<br>
                            41~59分：日常生活需要他人帮助；<br>
                            21~40分：日常生活明显依赖他人；<br>
                            ≤20分：日常生活完全依赖他人。
                        </p>
                    </h5>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-1 " style="padding-right: 0px;padding-left: 1px;padding-top: 13px;">评估结论 ：</label>
                    <div class="col-md-11">
                        <label class="checkbox-inline zhili" style="margin-left: 10px;">
                            <input type="radio" name="jielun" value="生活基本自理" /> 生活基本自理
                        </label>
                        <label class="checkbox-inline buzhili">
                            <input type="radio" name="jielun" value="日常生活需要他人帮助"> 日常生活需要他人帮助
                        </label>
                        <label class="checkbox-inline buzhili">
                            <input type="radio" name="jielun" value="日常生活明显依赖他人"> 日常生活明显依赖他人
                        </label>
                        <label class="checkbox-inline buzhili">
                            <input type="radio" name="jielun" value="日常生活完全依赖他人"> 日常生活完全依赖他人
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-12 other" >
                    <label class="col-md-1 " style="padding-right: 0px;padding-left: 1px;padding-top: 13px;">不自理原因 ：</label>
                    <div class="col-md-11 userid"><input type="hidden" name="remark[1][rename]" value="不自理原因">
                        <label class="checkbox-inline" style="margin-left: 10px;">
                            <input type="checkbox" name="remark[1][val][]" value="先天残疾"> 先天残疾
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="因伤致残"> 因伤致残
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="偏瘫"> 偏瘫
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="截瘫"> 截瘫
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="肿瘤"> 肿瘤
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="阿尔兹海默"> 阿尔兹海默
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="帕金森"> 帕金森
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="类风湿"> 类风湿
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="先天残疾"> 先天残疾
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="因伤致残"> 因伤致残
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="股骨头坏死"> 股骨头坏死
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="退行性骨关节病"> 退行性骨关节病
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="糖尿病病发症"> 糖尿病病发症
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[1][val][]" value="其他"> 其他
                            <input type="text" class="form-control" style="display: inline;width: 70%;"  name="remark[1][val][]" value="">
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-12 other">
                    <label class="col-md-1 " style="padding-right: 0px;padding-left: 1px;padding-top: 13px;">肢体残疾部位 ：</label>
                    <div class="col-md-11"><input type="hidden" name="remark[2][rename]" value="肢体残疾部位">
                        <label class="checkbox-inline" style="margin-left: 10px;">
                            <input type="checkbox" name="remark[2][val][]" value="左上肢"> 左上肢
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[2][val][]" value="左下肢"> 左下肢
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[2][val][]" value="右上肢"> 右上肢
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[2][val][]" value="右下肢"> 右下肢
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[2][val][]" value="躯干"> 躯干
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="remark[2][val][]" value="其他"> 其他
                            <input type="text" class="form-control" style="display: inline;width: 70%;"  name="remark[2][val][]" value="">
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
    $(".zhili").click(function(){
        $("input[type='checkbox']").each(function(){
            this.checked=false;
        });
        $(".other").hide();
    });
    $(".buzhili").click(function(){
        $(".other").show();
    });

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