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


class QuestionnaireController extends BaseController {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index(){
		
		$userModel = new UserModel();
		$user = $userModel->getUserSession();

		$wenjuanModel = new WenjuanModel();
		
		$list = $wenjuanModel->getlist($user['member_id']);
		
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
			$userModel = new UserModel();
			$user = $userModel->getUserSession();
			$data = array(
				'name'		=> $name,
				'wj_desc'	=> $wj_desc,
				'remark'	=> $remark,
				'uid'		=> $user['member_id']
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
			$userModel = new UserModel();
			$user = $userModel->getUserSession();
			if(!$wenjuan || $wenjuan['uid'] != $user['member_id'] ){
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
			$userModel = new UserModel();
			$user = $userModel->getUserSession();
			if(!$wenjuan || $wenjuan['uid'] != $user['member_id'] ){
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
		$userModel = new UserModel();
		$user = $userModel->getUserSession();
		if(!$wenjuan || $wenjuan['uid'] != $user['member_id'] ){
			redirect('/questionnaire');
		}else{
			$data = $wenjuan;
		}
		$data['pageTitle'] = $wenjuan['wj_name'];
		$questionModel = new QuestionModel();
		$data['qlist'] = $questionModel->getAllQuestion($id);
		
		$this->assign($data);
		$this->display();
		
	}
	
	public function jieguo(){
		if(IS_POST){
			$result = M('pingguresult');
			$data = array(
				
			);
		}else{
			redirect('/questionnaire');
		}
	}
	
}