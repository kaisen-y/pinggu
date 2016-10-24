<?php
/**
 * 评估项目
 * Created by ZendStudio.
 * User: Kaisen
 * Date: 2016/9/27
 * Time: 14:50
 */
namespace Home\Controller;

use Common\Controller\BaseController;
use Think\Controller;
use Home\Model\WenjuanModel;
use Home\Model\UserModel;
use Home\Model\QuestionModel;
use Home\Model\ResultModel;
use Home\Model\CaregiversModel;
use Home\Model\JiankangpingguModel;


class QuestionnaireController extends BaseController {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index(){
		redirect('/user');//暂停自定评估项目

		$wenjuanModel = new WenjuanModel();
		
		$list = $wenjuanModel->getlist($this->userSession['member_id']);
		$data['care_id'] = I('get.care_id');
		$data['list'] = $list;
		$data['pageTitle'] = '我创建的评估项目';
		$this->assign($data);
		
		$this->display();
	}
	
	public function create(){
		if(IS_GET){
			$data['pageTitle'] = '创建评估项目';
			$this->assign($data);
			$this->display();
		}else{
			$name = I('post.name');
			$wj_desc = I('post.desc');
			$remark = I('post.remark');
			$data = array(
				'name'		=> $name,
				'wj_desc'	=> $wj_desc,
				'remark'	=> $remark,
				'uid'		=> $this->userSession['member_id']
			);
			$wenjuanModel = new WenjuanModel();
			$resp = $wenjuanModel->create($data);

			echo json_encode($resp);
		}
	}
	
	public function edit(){
		$wjModel = new WenjuanModel();
		if(IS_GET){
			$id = I('get.id');
			if(!$id || intval($id)<1){
				redirect('/questionnaire');
			}
			$wenjuan = $wjModel->getOne($id);
			if(!$wenjuan || $wenjuan['uid'] != $this->userSession['member_id'] ){
				redirect('/questionnaire');
			}else{
				$data = $wenjuan;
			}
			$data['pageTitle'] = '修改评估项目';
			$this->assign($data);
			$this->display();
		}else{
			$name = I('post.name');
			$wj_desc = I('post.desc');
			$remark = I('post.remark');
			$data = array(
					'wj_name'		=> $name,
					'wj_desc'	=> $wj_desc,
					'wj_remark'	=> $remark
			);
			$resp = $wjModel->update(I('post.id'), $data);
			echo json_encode($resp);
		}
	}
	
	public function delete(){
		$id = I('post.wj_id');
		if(empty($id)) {
			exit;
		}
		else{
			$wjModel = new WenjuanModel();
			$resp = $wjModel->del($id);
			$questionModel = new QuestionModel();
			$questionModel->delBywjid($id);
			echo json_encode($resp);
		}
	}
	
	public function addquestion(){
		if(IS_GET){
			$wjModel = new WenjuanModel();
			$wj_id = I('get.wj_id');
			$wenjuan = $wjModel->getOne($wj_id);
			if(!$wenjuan || $wenjuan['uid'] != $this->userSession['member_id'] ){
				redirect('/questionnaire');
			}
			$data['wj_id'] = $wenjuan['wj_id'];
			$data['pageTitle'] = '新增评估问题';
			$this->assign($data);
			$this->display();
		}else{
			$question = I('post.question');
			$wj_id = I('post.wj_id');
			$answer = I('post.answer');
			$data = array(
					'question'		=> $question,
					'wj_id'			=> $wj_id,
					'answer'		=> $answer,
			);
			$questionModel = new QuestionModel();
			$resp = $questionModel->create($data);
			
			echo json_encode($resp);
		}
	}
	
	public function editquestion(){
		$questionModel = new QuestionModel();
		
		if(IS_GET){
			$id = I('get.id');
			$question = $questionModel->getOne($id);
			$question['pageTitle'] = '修改问题';
			$this->assign($question);
			$this->display();
		}else{
			$question = I('post.question');
			$answer = I('post.answer');
			$data = array(
					'question'		=> $question,
					'answer'		=> $answer,
			);
			$resp = $questionModel->update(I('post.id'), $data);
			echo json_encode($resp);
		}
	}
	
	public function delquestion(){
		$id = I('post.wjq_id');
		if(empty($id)) {
			exit;
		}
		else{
			$questionModel = new QuestionModel();
			$resp = $questionModel->del($id);
			echo json_encode($resp);
		}
	}
	
	public function wenjuan(){
		$data = array();
		$id = I('get.id');
		if(intval($id) < 1) {
			redirect('/questionnaire');
		}
		$wjModel = new WenjuanModel();
		$wenjuan = $wjModel->getOne($id);
		if(!$wenjuan || $wenjuan['uid'] != $this->userSession['member_id'] ){
			redirect('/questionnaire');
		}else{
			$data = $wenjuan;
		}
		$data['pageTitle'] = $wenjuan['wj_name'];
		$questionModel = new QuestionModel();
		$data['qlist'] = $questionModel->getAllQuestion($id);
		$data['care_id'] = I('get.care_id');
		$this->assign($data);
		$this->display();
		
	}
	
	public function care(){
		if(IS_GET){
			$this->display();
		}else{

			$arr = array(
				'uid'				=> $this->userSession['member_id'],
				'name'				=> I('post.name'),
				'sex'				=> I('post.sex'),
				'brith'				=> I('post.brith'),
				'nation'			=> I('post.nation'),
				'origin'			=> I('post.origin'),
				'religion'			=> I('post.religion'),
				'credentials_type'	=> I('post.credentials_type'),
				'credentials_no'	=> I('post.credentials_no'),
				'ss_card'			=> I('post.ss_card'),
				'education'			=> I('post.education'),
				'marriage'			=> I('post.marriage'),
				'careers'			=> I('post.careers'),
				'registry_add'		=> I('post.registry_add'),
				'address'			=> I('post.address'),
				'add_hospital'		=> I('post.add_hospital'),
				'hospital'			=> I('post.hospital'),
				'tellphone'			=> I('post.tellphone'),
				'mobile'			=> I('post.mobile'),
				'disability_no'		=> I('post.disability_no'),
				'disability_type'	=> I('post.disability_type'),
				'disability_level'	=> I('post.disability_level'),
				'disability_time'	=> I('post.disability_time'),
				'disability_cause'	=> I('post.disability_cause'),
				'jjlx_name'			=> I('post.jjlx_name'),
				'jjlx_guanxi'		=> I('post.jjlx_guanxi'),
				'jjlx_phone'		=> I('post.jjlx_phone'),
				'jjlx_email'		=> I('post.jjlx_email'),
				'jjlx_addr'			=> I('post.jjlx_addr'),
				'jjlx_remark'		=> I('post.jjlx_remark'),
				'jingjilaiyuan'		=> join(',', I('post.jingjilaiyuan')),
				'jingjitiaojian'	=> join(',', I('post.jingjitiaojian')),
				'juzhu'				=> join(',', I('post.juzhu')),
				'anyang'			=> join(',', I('post.anyang')),
				'zhufang'			=> join(',', I("post.zhufang")),
				'xiuxian'			=> join(',', I('post.xiuxian')),
				'wenhuaxuqiu'		=> join(',', I('post.wenhuaxuqiu')),
				'teshugongxian'		=> join(',', I('post.teshugongxian')),
				'remark'			=> I('post.remark')
			);
			$caregivers = new CaregiversModel();
			$resp = $caregivers->create($arr);
			if($resp['data']){
				redirect('/questionnaire/jkpg/care_id/'.$resp['data']);
			}
		}
	}
	
	public function jkpg(){
		if(IS_GET){
			if(intval(I('get.care_id')) < 1){
				redirect('/questionnaire/care');
			}
			$data['care_id'] = I('care_id');
			$this->assign($data);
			$this->display();
		}else{
			if(intval(I('post.care_id')) < 1){
				redirect('/questionnaire/care');
			}
			$arr = array(
					'care_id'			=> I('post.care_id'),
					'height'			=> I("post.height"),
					'weight'			=> I('post.weight'),
					'neck'				=> I('post.neck'),
					'waist'				=> I('post.waist'),
					'temperature'		=> I("post.temperature"),
					'maibo'				=> I('post.maibo').'次/分    '.I('post.maibokl'),
					'xuetang'			=> I('post.xuetang').' '.I('post.xuetangdes'),
					'xueya'				=> I('post.xueya').' 左:'.I('post.xueya_left_l').'/'.I('post.xueya_left_r').'mmHg 右:'.I('post.xueya_right_l').'/'.I('post.xueya_right_r').'mmHg',
					'xuezhi'			=> '胆固醇：'.I('post.xuezhi_d').',甘油三酯：'.I('post.xuezhi_g').',高密度脂蛋白：'.I('post.xuezhi_gz').',低密度脂蛋白：'.I('post.xuezhi_dz').',报告日期：'.I('post.xuezhi_date'),
					'xiyan'				=> I('post.xiyan').' '.I("post.xiyan_times")."支/天",
					'yinshixiguan'		=> join(',', I('post.yinshixiguan')),
					'zaocan'			=> join(',', I('post.zaocan')),
					'wucan'				=> join(',', I('post.wucan')),
					'wancan'			=> join(',', I('post.wancan')),
					'jiacan'			=> join(',', I('post.jiacan')),
					'yinshui'			=> join(',', I('post.yinshui')),
					'peican'			=> I('post.peican'),
					'yudongfangshi'		=> join(',', I('post.yudongfangshi')),
					'yundongpinglv'		=> '每周运动：'.I('post.zhoupl').'次,每次：'.I('post.timesmin').'分钟',
					'yundonghou'		=> join(',', I('post.yundonghou')),
					'shuimianqingkuang' => join(',', I("post.shuimianqingkuang")),
					'shuimianzhiliang'	=> I('post.shuimianzhiliang'),
					'jibing'			=> join(',', I('post.jibing')),
					'muqian'			=> join(',', I('post.muqian')),
					'miaoshu'			=> I("post.miaoshu"),
					'zhiliao'			=> join(',', i('post.zhiliao'))
			);
			$yachang = I("post.yachang")?'压疮（部位:）'.I('post.yachang'):"";
			$jrweisuo = I('post.jrweisuo')?"肌肉萎缩（部位:）".I('post.jrweisuo'):"";
			$qita = I('post.qita')?'其他:'.I('post.qita'):'';
			$arr['bingfa'] = $yachang.' '.$jrweisuo.' '.$qita;
			$jkpg = new JiankangpingguModel();
			$resp = $jkpg->create($arr);
			if($resp['data']){
				redirect('/questionnaire/qita/care_id/'.$arr['care_id'].'/oname/zlnlpg');
			}
		}
	}
	
	public function qita(){
		if(IS_GET){
			if(intval(I('get.care_id')) < 1){
				redirect('/questionnaire/care');
			}
			$data['care_id'] = I('care_id');
			$this->assign($data);
			$template = I('get.oname') ? I('get.oname') : 'zlnlpg';
			$this->display($template);
		}else{
			redirect('/questionnaire/care');
		}
	}
	
	public function jieguo(){
		if(IS_POST){
			$result = new ResultModel();
			$wj_id  = I('post.wj_id');
			$pg_qa  = I('post.pg_qa');
			$pingfen = I('post.pingfen');
			$pg_sum = array_sum($pingfen);
			if(intval($wj_id) > 0){//收集评估题目
				$wj_ids = array_keys(I('post.pingfen'));
				$questionModel = new QuestionModel();
				$qlist = $questionModel->getAllQuestion($wj_id);
				if(is_array($qlist)){
					foreach ($qlist as $k=>$v){
						if($pingfen[$v['wjq_id']]){
							$pg_qa[] = array(
								'question' 	=> $v['wjq_question'],
								'answer'	=> $v['wjq_answer'],
								'defen'		=> $pingfen[$v['wjq_id']]
							);
						}
					}
				}
			}else{
				$pg_sum = 0;
				if(is_array($pg_qa)){
					foreach ($pg_qa as $v){
						if($v['defen']){
							$pg_sum = $pg_sum+$v['defen'];
						}
					}
				}
			}
			$remark = I("post.remark");
			if(is_array($remark)){
				$str = '';
				foreach ($remark as $val){
					$str .= $val['rename'].' : '.join(',', $val['val']).'   ';
				}
				$remark = $str;
			}

			$data = array(
					'uid'				=> $this->userSession['member_id'],
					'care_id'			=> I('post.care_id'),
					'wj_name'			=> I('post.wj_name'),
					'wj_id'				=> $wj_id,
					'pg_qa'				=> $pg_qa,
					'pg_sum'			=> $pg_sum,
					'pg_result'			=> I('post.jielun'),
					'remark'			=> $remark,
			);
			
			$resp = $result->create($data);
			if(I("post.goto")){
				redirect(I('post.goto'));
			}
			echo json_encode($resp);
		}else{
			redirect('/questionnaire');
		}
	}
	

	public function mycare(){
		if($this->userSession['member_id']<1){
			redirect('/user/login');
		}
		
		$crvs = new CaregiversModel();
		$list = $crvs->getlist($this->userSession['member_id']);
		$data['list'] = $list;
		$data['pageTitle'] = '被评估者列表';
		$this->assign($data);
		$this->display();
	}
	
	public function careinfo(){
		$care_id = intval(I('get.care_id'));
		if($care_id > 0){
			$crvs = new CaregiversModel();
			$care = $crvs->getOne($care_id);
			$sex = array(1=>'男',2=>'女',3=>'其他');
			$marr= array(1=>'未婚',2=>'已婚',3=>'丧偶',4=>'离婚');
			$edu = array(0=>'无',1=>'小学',2=>'初中',3=>'高中',4=>'大专',5=>'本科或以上');
			$care['sex'] = $sex[$care['sex']];
			$care['marriage'] = $marr[$care['marriage']];
			$care['education'] = $edu[$care['education']];
			
			$jkpgModel = new JiankangpingguModel();
			$jkpg = $jkpgModel->getOne($care_id);
			$resultModel = new ResultModel();
			$reslist = $resultModel->getByCare_id($care_id);
			$data['pageTitle'] = '评估总结';
			$data['care'] = $care;
			$data['jkpg'] = $jkpg;
			$data['reslist'] = $reslist;
			foreach ($reslist as $v){
				$data['radar_cat'][] = str_replace('评估', '', $v['wj_name']);
				$data['radar_val'][] = $v['pg_sum'];
			}
			$this->assign($data);
			$this->display();
		}else{
			redirect('/questionnaire/mycare');
		}
	}
	
	public function export(){
		
		$list = array(array('name'=>'xxx1','order_id'=>'xxx11'),array('name'=>'xxx2','order_id'=>'xxx22'));
		$field = array('name'=>'名称','order_id'=>'订单号');
		$fieldTab = array('order_id');
		export_csv($list,$field,'care_info');
	}
	
}