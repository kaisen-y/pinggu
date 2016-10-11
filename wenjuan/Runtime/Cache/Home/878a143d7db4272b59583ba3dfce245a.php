<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo ($pageTitle); ?></title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo C('RES_DOMAIN');?>/Public/css/basic.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo C('RES_DOMAIN');?>/Public/css/jquery-ui.css" />
</head>
<body>
<div>
                <fieldset class="row">
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="cname">用户姓名：</label>
                        <div class="col-md-8">
                            <?php echo ($care["name"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="csex">性别：</label>
                        <div class="col-md-8">
                            <div class="col-md-8">
                            <?php echo ($care["sex"]); ?>
                        	</div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="date_1">出生年月：</label>
                        <div class="col-md-8">
                        <?php echo ($care["brith"]); ?>
						</div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">民族：</label>
                        <div class="col-md-8">
                        <?php echo ($care["nation"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">籍贯：</label>
                        <div class="col-md-8"><?php echo ($care["origin"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">宗教信仰：</label>
                        <div class="col-md-8"><?php echo ($care["religion"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">证件类型：</label>
                        <div class="col-md-8"><?php echo ($care["credentials_type"]); ?>
                         </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">证件号：</label>
                        <div class="col-md-8"><?php echo ($care["credentials_no"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">社保卡号：</label>
                        <div class="col-md-8"><?php echo ($care["ss_card"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">文化程度：</label>
                        <div class="col-md-8"><?php echo ($care["education"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">婚姻状况：</label>
                        <div class="col-md-8"><?php echo ($care["marriage"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">既往职业：</label>
                        <div class="col-md-8"><?php echo ($care["careers"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">户籍所在地：</label>
                        <div class="col-md-8"><?php echo ($care["registry_add"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">居住地址：</label>
                        <div class="col-md-8"><?php echo ($care["address"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">住所附近医院：</label>
                        <div class="col-md-8"><?php echo ($care["add_hospital"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3 control-label">习惯就诊的医院：</label>
                        <div class="col-md-8"><?php echo ($care["hospital"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">住宅电话：</label>
                        <div class="col-md-8"><?php echo ($care["tellphone"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">移动电话：</label>
                        <div class="col-md-8"><?php echo ($care["mobile"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr>
                        <h4 class="text-center">残疾信息（残障人士评估专用）</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">残疾人证号：</label>
                        <div class="col-md-8"><?php echo ($care["disability_no"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">类别/等级：</label>
                        <div class="col-md-8"><?php echo ($care["disability_type"]); ?>/<?php echo ($care["disability_level"]); ?>
                           </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">致残时间：</label>
                        <div class="col-md-8"><?php echo ($care["disability_time"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">致残原因：</label>
                        <div class="col-md-8"><?php echo ($care["disability_cause"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr>
                        <h4 class="text-center">紧急联系人信息</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">姓名：</label>
                        <div class="col-md-8"><?php echo ($care["jjlx_name"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">与被照护人关系：</label>
                        <div class="col-md-8"><?php echo ($care["jjlx_guanxi"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">电话：</label>
                        <div class="col-md-8"><?php echo ($care["jjlx_phone"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">E-Mail：</label>
                        <div class="col-md-8"><?php echo ($care["jjlx_email"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">地址：</label>
                        <div class="col-md-8"><?php echo ($care["jjlx_addr"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label">备注：</label>
                        <div class="col-md-8"><?php echo ($care["jjlx_remark"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr>
                        <h4 class="text-center">目前状况   </h4>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">经济来源：</label>
                        <div class="col-md-10"><?php echo ($care["jingjilaiyuan"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">经济条件：</label>
                        <div class="col-md-10"><?php echo ($care["jingjitiaojian"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">居住状况：</label>
                        <div class="col-md-10"><?php echo ($care["juzhu"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">安养状态：</label>
                        <div class="col-md-10"><?php echo ($care["anyang"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">住房性质：</label>
                        <div class="col-md-10"><?php echo ($care["zhufang"]); ?>
                           
                        </div>
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">休闲娱乐：</label>
                        <div class="col-md-10">  <?php echo ($care["xiuxian"]); ?>
                           
                        </div>
                    </div>
                    
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">文化需求：</label>
                        <div class="col-md-10"><?php echo ($care["wenhuaxuqiu"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">特殊贡献：</label>
                        <div class="col-md-10"><?php echo ($care["teshugongxian"]); ?>
                           
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">备注：</label>
                        <div class="col-md-10"><?php echo ($care["remark"]); ?>
                        </div>
                    </div>
                </fieldset>
</div>

			<div class=".">
                <h3>健康风险评估</h3>
            </div>
                <fieldset class="row">
                    <div class="form-group col-md-12">
                        <h4 class="text-center">健康信息</h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="col-md-4 control-label" style="padding: 0;padding-top: 7px;">身高：</label>
                        <div class="col-md-7" style="padding-right: 0"><?php echo ($jkpg["height"]); ?>
                        </div>
                        <label class="col-md-1 control-label" style="padding-left: 0">cm</label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="col-md-4 control-label" style="padding: 0;padding-top: 7px;">体重：</label>
                        <div class="col-md-7" style="padding-right: 0"><?php echo ($jkpg["weight"]); ?>
                        </div>
                        <label class="col-md-1 control-label" style="padding-left: 0">kg</label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="col-md-4 control-label" style="padding: 0;padding-top: 7px;">颈围：</label>
                        <div class="col-md-7" style="padding-right: 0"><?php echo ($jkpg["neck"]); ?>
                        </div>
                        <label class="col-md-1 control-label" style="padding-left: 0">cm</label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="col-md-4 control-label" style="padding: 0;padding-top: 7px;">腰围：</label>
                        <div class="col-md-7" style="padding-right: 0"><?php echo ($jkpg["waist"]); ?>
                        </div>
                        <label class="col-md-1 control-label" style="padding-left: 0">cm</label>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="col-md-4 control-label" style="padding: 0;padding-top: 7px;">体温：</label>
                        <div class="col-md-7" style="padding-right: 0"><?php echo ($jkpg["temperature"]); ?>
                        </div>
                        <label class="col-md-1 control-label" style="padding-left: 0">℃</label>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="col-md-6">
                            <label class="col-md-4 control-label">脉搏：</label><?php echo ($jkpg["maibo"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3">血糖：</label>
                        <div class="col-md-8" ><?php echo ($jkpg["xuetang"]); ?>
                           
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">血压：</label>
                        <div class="radio col-md-1"><?php echo ($jkpg["xueya"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">血脂：</label>
                        <div class="col-md-11"><?php echo ($jkpg["xuezhi"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">吸烟情况：</label>
                        <div class="col-md-11" style="display: inline">
                            <?php echo ($jkpg["xiyan"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4 class="text-center">营养状况</h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">饮食习惯：</label>
                        <div class="col-md-10"><?php echo ($jkpg["yinshixiguan"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">早餐：</label>
                        <div class="col-md-10"><?php echo ($jkpg["zaocan"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">午餐：</label>
                        <div class="col-md-10"><?php echo ($jkpg["wucan"]); ?>
                           
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">晚餐：</label>
                        <div class="col-md-10"><?php echo ($jkpg["wancan"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">加餐：</label>
                        <div class="col-md-10"><?php echo ($jkpg["jiacan"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">饮水：</label>
                        <div class="col-md-10"><?php echo ($jkpg["yinshui"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">配餐需求：</label>
                        <div class="col-md-10">
                            <?php if($jkpg["peican"] == 1 ): ?>是
        					<?php else: ?> 否<?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4 class="text-center">自我锻炼</h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">运动方式：</label>
                        <div class="col-md-10"><?php echo ($jkpg["yudongfangshi"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label">运动频次：</label>
                        <div class="col-md-5"><?php echo ($jkpg["yundongpinglv"]); ?>
                           
                        </div>
                       
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 10px">运动后感觉：</label>
                        <div class="col-md-10"><?php echo ($jkpg["yundonghou"]); ?>
                           
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4 class="text-center">睡眠状况</h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 10px">睡眠情况：</label>
                        <div class="col-md-10"><?php echo ($jkpg["shuimianqingkuang"]); ?>
                           
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 10px">睡眠质量：</label>
                        <div class="col-md-10"><?php echo ($jkpg["shuimianzhiliang"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h4 class="text-center">疾病情况</h4>
                        <hr>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 10px">疾病状态：</label>
                        <div class="col-md-11"><?php echo ($jkpg["jibing"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 10px">目前症状 ：</label>
                        <div class="col-md-11"><?php echo ($jkpg["muqian"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 10px">并发症：</label>
                        <div class="col-md-11"><?php echo ($jkpg["bingfa"]); ?>
                            
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label" style="padding-right: 0px">疾病及症状描述：</label>
                        <div class="col-md-10"><?php echo ($jkpg["miaoshu"]); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-1 control-label" style="padding-right: 10px">治疗情况：</label>
                        <div class="col-md-11"><?php echo ($jkpg["zhiliao"]); ?>
                            
                        </div>
                    </div>
                </fieldset>
<fieldset class="row">
<?php if(is_array($reslist)): foreach($reslist as $key=>$vo): ?><div class=".">
         <h3><?php echo ($vo["wj_name"]); ?></h3>
    </div>
    <div class=".">
         <h3><?php echo ($vo["pg_sum"]); ?></h3>
    </div>
    <?php if(is_array($vo["pg_qa"])): foreach($vo["pg_qa"] as $key=>$vqa): ?>问题:<?php echo ($vqa["question"]); ?><br>
    	选项:
    	<?php if(is_array($vqa["answer"])): foreach($vqa["answer"] as $key=>$va): echo ($va); ?> <?php if(!empty($va)): ?><br><?php endif; endforeach; endif; ?>
    	<br>得分:<?php echo ($vqa["defen"]); endforeach; endif; ?>
    <div class=".">
         <h3>总分</h3><?php echo ($vo["pg_sum"]); ?>
    </div>
    <div class=".">
         <h3>总结</h3><?php echo ($vo["pg_result"]); ?>
    </div>
    <div class=".">
         <h3>备注</h3><?php echo ($vo["remark"]); ?>
    </div><?php endforeach; endif; ?>
</fieldset>
</body>
</html>