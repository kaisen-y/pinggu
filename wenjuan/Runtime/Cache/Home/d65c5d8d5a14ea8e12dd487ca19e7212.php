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
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 52%">
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1" style="padding: 0">

        <div class="">
            <form class="Huiform form-horizontal" id="commentForm" action="/questionnaire/jieguo" method="post">
            <input type="hidden" name="wj_name" value="认知能力评估"/>
            <input type="hidden" name="care_id" value="<?php echo ($care_id); ?>" />
            <input type="hidden" name="goto" value="/questionnaire/qita/care_id/<?php echo ($care_id); ?>/oname/qsxwnl" />
                <fieldset class="row" style="margin:0 15px">
                    <div style="margin: 20px 0;">
                        <h4><strong>对以下行为进行评估</strong></h4>
                    </div>
                    <div class="form-group col-md-12">
                        <h3>认知能力评估</h3>
                    </div>
                    <div class="form-group col-md-12">
                        <h4><strong>定向力</strong></h4>
                        <input type="hidden" name="pg_qa[0][question]" value="定向力: 现在是星期几？几号？几月？什么季节？哪一年？(最高分:5分）" />
                        <input type="hidden" name="pg_qa[1][question]" value="定向力 : 我们现在在哪里：省？市？医院？科室？第几层楼？(最高分:5分）" />
                        <label class="col-md-12 ">现在是星期几？几号？几月？什么季节？哪一年？(最高分:5分）
                            <select class="form-control num" name="pg_qa[0][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>分
                        </label>
                        <label class="col-md-12">我们现在在哪里：省？市？医院？科室？第几层楼？(最高分:5分）
                            <select class="form-control num" name="pg_qa[1][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>分
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <h4><strong>记忆力</strong></h4>
                        <label class="col-md-9 ">现在我要说三样东西的名称，在我讲完后，请您重复一遍。请您记住这三样东西，因为几分钟后要再问您的。（请仔细说清楚，每一样东西一秒钟）。
                            “皮球”、“国旗”、“树木”。请您把三样东西说一遍（以第一次答案记分）(最高分:3分）
                            <input type="hidden" name="pg_qa[2][question]" value="现在我要说三样东西的名称，在我讲完后，请您重复一遍。请您记住这三样东西，因为几分钟后要再问您的。（请仔细说清楚，每一样东西一秒钟）。
                            “皮球”、“国旗”、“树木”。请您把三样东西说一遍（以第一次答案记分）(最高分:3分）" />
                            <select class="form-control num" name="pg_qa[2][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>分
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <h4><strong>注意力和计算力</strong></h4>
                        <label class="col-md-9 ">请您算一算100减去7，然后从所得数目再减去7，如此一直计算下去，请您将每减一个7后答案告诉我，直到我说“停止”为止。（若错了，但下一个答案是对的，那么只记一次错误）。 (最高分:5分）<br>
                            例：  93      86      79     72      65
                            <input type="hidden" name="pg_qa[3][question]" value="注意力和计算力: 请您算一算100减去7，然后从所得数目再减去7，如此一直计算下去，请您将每减一个7后答案告诉我，直到我说“停止”为止。（若错了，但下一个答案是对的，那么只记一次错误）。 (最高分:5分）
                            例：  93      86      79     72      65"/>
                            <select class="form-control num" name="pg_qa[3][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>分
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <h4><strong>回忆能力</strong></h4>
                        <label class="col-md-9 ">现在请您说出刚才我让您记住的那三样东西？(最高分:3分）<br>
                            “皮球”“国旗”“树木”
                            <input type="hidden" name="pg_qa[4][question]" value='回忆能力: 现在请您说出刚才我让您记住的那三样东西？(最高分:3分）
                            “皮球”“国旗”“树木”'/>
                            <select class="form-control num" name="pg_qa[4][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>分
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <h4><strong>语言能力</strong></h4>
                        <input type="hidden" name="pg_qa[5][question]" value="语言能力:（出示手表）这个东西叫什么？(最高分:1分）">
                        <label class="col-md-9 ">（出示手表）这个东西叫什么？(最高分:1分）
                            <select class="form-control num" name="pg_qa[5][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>分
                        </label>
                        <input type="hidden" name="pg_qa[6][question]" value="（出示钢笔）这个东西叫什么？(最高分:1分）">
                        <label class="col-md-9 ">（出示钢笔）这个东西叫什么？(最高分:1分）
                            <select class="form-control num" name="pg_qa[6][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>分
                        </label>
                        <input type="hidden" name="pg_qa[7][question]" value="现在我要说一句话，请您跟着我清楚的重复一遍。“四十四只石狮子”(最高分:1分）">
                        <label class="col-md-9 ">现在我要说一句话，请您跟着我清楚的重复一遍。“四十四只石狮子”(最高分:1分）
                            <select class="form-control num" name="pg_qa[7][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>分
                        </label>
                        <input type="hidden" name="pg_qa[8][question]" value="我给您一张纸请您按我说的去做，现在开始：“用右手拿着这张纸，用两只手将它对折起来，放在您的大腿上”。（不要重复说明，也不要示范）(最高分:1分）">
                        <label class="col-md-9 ">我给您一张纸请您按我说的去做，现在开始：“用右手拿着这张纸，用两只手将它对折起来，放在您的大腿上”。（不要重复说明，也不要示范）(最高分:1分）<br>
                            <select class="form-control num" name="pg_qa[8][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>分
                        </label>
                        <input type="hidden" name="pg_qa[9][question]" value="您给我写一句完整的句子。（句子必须有主语、谓语、宾语）记下所叙述句子的全文。（最高分:1分）">
                        <label class="col-md-9 ">您给我写一句完整的句子。（句子必须有主语、谓语、宾语）记下所叙述句子的全文。（最高分:1分）<br>
                            <select class="form-control num" name="pg_qa[9][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>分
                        </label>
                        <input type="hidden" name="pg_qa[10][question]" value="这是一张图，请您在同一张纸上照样画出来
                            （对：两个五边形的图案，交叉处有一个四边形）（最高分:1分）">
                        <label class="col-md-9 ">请您在同一张纸上照样画出来（最高分:1分）<button type="button" class="btn btn-primary" id="showimg">点击显示图片</button><br>
                            <select class="form-control num" name="pg_qa[10][defen]"style="display: inline;width: 60%;margin:0 15px 20px">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>分
                            <img src="<?php echo C('RES_DOMAIN');?>/Public/images/rznlpg.png" alt="" style="display:none; width:100%;" id="img">
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-12 ">总得分：<input type="number" id="sum" class="form-control" style="display: inline;width: 20%;margin:0 15px"  value="" required>分
                        </label>
                        <h5>评分标准：
                            <p style="margin-left: 35px;margin-top:10px ">分数在27-30分：正常<br>
                                分数<27分：认知功能障碍<br>
                                分数<17分：认知功能重度障碍。
                            </p>
                        </h5>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 5px">评估结论 ：</label>
                        <div class="col-md-11">
                            <label class="checkbox-inline">
                                <input type="radio" name="jielun" value="正常"> 正常
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="jielun" value="认知功能障碍"> 认知功能障碍
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="jielun" value="认知功能重度障碍"> 认知功能重度障碍
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 0px">不适用原因 ：</label>
                        <div class="col-md-11">
                            <label class="checkbox-inline">
                                <input type="radio" name="remark" value="不适用原因 ：言语功能障碍"> 言语功能障碍
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="remark" value="不适用原因 ：文化水平低">文化水平低
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
<script>
$('#showimg').click(function(){
	$("#img").fadeIn("slow",function(){
		setTimeout("hideimg()", 10000 );
	});
});
function hideimg(){
	$("#img").fadeOut("slow");
}
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