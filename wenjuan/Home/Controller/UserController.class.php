<?php
/**
 * Created by ZendStudio.
 * User: Kaisen
 * Date: 2016/9/27
 * Time: 14:50
 */
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;


class UserController extends Controller {
    public function index(){
    	
    	echo C('LOGIN_PASSWORD_KEY');
//         $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		$this->display();
    }
    public function register(){
    	
    	$userModel = new UserModel();
    	if($userModel->isLogin()){
    		redirect('/');
    	}
		if(IS_GET){
    		$data['pageTitle'] = '注册';
    		$this->assign($data);
    		$this->display();
    	}
    	if(IS_POST){
    		$name = I('post.member_name');
    		$phone = I('post.member_phone');
    		$email = I('post.email');
    		$password = I('post.password');
    		$password2 = I('post.password2');
    		
    		$data = array(
    				'member_name'	=> $name,
    				'member_phone'	=> $phone,
    				'email'			=> $email,
    				'password'		=> $password,
    		);
    		$resp = $userModel->register($data);
    		
    		echo json_encode($resp);
    	}
    }
    
    public function login(){
    	$userModel = new UserModel();
    	if($userModel->isLogin()){
    		redirect('/');
    	}
    	if(IS_GET){
    		$data['pageTitle'] = '登录';
    		$this->assign($data);
    		$this->display();
    	}else{
    		$mobile = I('post.member_name');
    		$password = I('post.password');
    		$resp = $userModel->login($mobile, $password);
    		echo json_encode($resp);
    	}
    
    }
    
    public function logout(){
    	$userModel = new UserModel();
    	$userModel->logout();
    	header('Location:/user/login');
    }
}