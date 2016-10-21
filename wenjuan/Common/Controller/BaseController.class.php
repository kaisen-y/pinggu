<?php
namespace Common\Controller;

use Think\Controller;
use Home\Model\UserModel;

class BaseController extends Controller
{
	protected  $userSession;//当前用户
	
	public function __construct()
	{
		parent::__construct();
		$userModel = new UserModel();
		if(!$userModel->isLogin()){
			redirect('/user/login');
		}else{
			$this->userSession = $userModel->getUserSession();
			$this->assign('member_name',$this->userSession['member_name']);
		}
	}
}