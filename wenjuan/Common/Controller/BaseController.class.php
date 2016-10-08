<?php
namespace Common\Controller;

use Think\Controller;
use Home\Model\UserModel;

class BaseController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$userModel = new UserModel();
		if(!$userModel->isLogin()){
			redirect('/user/login');
		}
	}
}