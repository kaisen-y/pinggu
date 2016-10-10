<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>​易简医</title>​
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/basic.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/jquery-ui.css" />
</head>
<body style="margin: -20px 0px;;font-family: Microsoft YaHei;">
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
                <li>
                    <a class="active-menu" href="#"><i class="fa fa-desktop "></i>A区<span class="fa arrow"></span></a>
                    <ul class="nav">
                        <li>
                            <a href="#"><i class="fa fa-toggle-on"></i>A院	</a>
                            <ul class="nav nav-second-level nav-third">
                                <li>
                                    <a href="#"><i class="fa fa-toggle-on"></i>A病人	</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-bell "></i>B病人</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o "></i>C病人</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bell "></i>B院</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o "></i>C院</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-dashboard "></i>其它</a>
                </li>
            </ul>

        </div>

    </nav>
    <div class="col-md-10" style="padding: 0">
        <nav class="breadcrumb">
            <i class="iconfont"></i>A区
            <span class="c-gray en">&gt;</span>A院
            <a class="radius pull-right" style="padding-right: 25px" href="#" title="刷新">
                <img src="<?php echo C('RES_DOMAIN');?>/Public/images/shuaxin2.png" style="width: 30px">
            </a>
        </nav>
        <div class="">
            <div class=".">
                <h3>基本信息</h3>
            </div>
            <form class="Huiform form-horizontal" id="commentForm" action="" method="post">
                <fieldset class="row">
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="cname">用户姓名：</label>
                        <div class="col-md-8">
                            <input  type="text" class="form-control" id="cname" name="name" minlength="" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="csex">性别：</label>
                        <div class="col-md-8">
                            <div class="col-md-8">
                            <select class="form-control" name="sex">
                                <option value="1">男</option>
                                <option value="2">女</option>
                                <option value="3">其他</option>
                            </select>
                        	</div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="date_1">出生年月：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control"  id="date_1" name="brith" style="display: inline;width: 80%" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">民族：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nation" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">籍贯：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="origin" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">宗教信仰：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="religion" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">证件类型：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="credentials_type" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">证件号：</label>
                        <div class="col-md-8">
                            <input type="text" name="credentials_no" class="form-control" id="sfz" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">社保卡号：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="ss_card"  value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">文化程度：</label>
                        <div class="col-md-8">
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
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">婚姻状况：</label>
                        <div class="col-md-8">
                            <select class="form-control" name="marriage">
                                <option value="1">未婚</option>
                                <option value="2">已婚</option>
                                <option value="3">丧偶</option>
                                <option value="4">离婚</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">既往职业：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="careers" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">户籍所在地：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="registry_add" value="" nullmsg="" datatype="s" required>
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
                            <input type="text" class="form-control" name="add_hospital" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">习惯就诊的医院：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="hospital" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">住宅电话：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="tellphone" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">移动电话：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="mobile" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr>
                        <h4 class="text-center">残疾信息（残障人士评估专用）</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">残疾人证号：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="disability_no" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">类别/等级：</label>
                        <div class="col-md-8">
                            <select class="form-control col-md-6" name="disability_type" style="width: 45%;margin-right: 5%" required>
                                <option value="视力">视力</option>
                                <option value="听力">听力</option>
                                <option value="言语">言语</option>
                                <option value="肢体">肢体</option>
                                <option value="智力">智力</option>
                                <option value="精神">精神</option>
                                <option value="多重">多重</option>
                            </select>
                            <input type="text" class="form-control col-md-6" name="disability_level" style="width: 45%;" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">致残时间：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="disability_time" id="date_2" style="display: inline;width: 80%"  required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">致残原因：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="disability_cause" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr>
                        <h4 class="text-center">紧急联系人信息</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">姓名：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="jjlx_name" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">与被照护人关系：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="jjlx_guanxi" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">电话：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="jjlx_phone" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">E-Mail：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="jjlx_email" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">地址：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="jjlx_addr" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">备注：</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="jjlx_remark" value="" nullmsg="" datatype="s" required>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr>
                        <h4 class="text-center">目前状况   </h4>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">经济来源：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
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
                        <label class="col-md-1 control-label">经济条件：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
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
                        <label class="col-md-1 control-label">居住状况：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
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
                        <label class="col-md-1 control-label">安养状态：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
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
                        <label class="col-md-1 control-label">住房性质：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
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
                        <label class="col-md-1 control-label">休闲娱乐：</label>
                        <div class="col-md-10">  
                            <label class="checkbox-inline">
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
                        <label class="col-md-1 control-label">文化需求：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
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
                        <label class="col-md-1 control-label">特殊贡献：</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
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
                        <label class="col-md-1 control-label">备注：</label>
                        <div class="col-md-10">
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



</body>
<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery-1.8.3.min.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery.metisMenu.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo C('RES_DOMAIN');?>/Public/js/jquery-ui-datepicker.js"></script>
<script type="text/javascript">
    $(function(){
        $("#date_1").datepicker({
            showOn: "button",
            buttonImage: "<?php echo C('RES_DOMAIN');?>/Public/images/calendar.gif",
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd',
            yearRange: '1930:2000'
        });
        $("#date_2").datepicker({
            showOn: "button",
            buttonImage: "<?php echo C('RES_DOMAIN');?>/Public/images/calendar.gif",
            buttonImageOnly: true,
            dateFormat: 'yy-mm-dd',
            yearRange: '1930:2000'
        });
    });
</script>
<script>
    $.validator.setDefaults({
        submitHandler: function() {
            alert("提交事件!");
        }
    });
    $().ready(function() {
        $("#commentForm").validate({
            rules: {
                sfz: {
                required: true,
                minlength:18,
                }
            },
            messages: {
                sfz: "请输入身份号",
            }
        });
    });
</script>
</html>