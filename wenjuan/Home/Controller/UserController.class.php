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
    	
//     	echo C('LOGIN_PASSWORD_KEY');

    	$userModel = new UserModel();
    	if(!$userModel->isLogin()){
    		redirect('/user/login');
    	}
    	$user = $userModel->getUserSession();
    	
    	$data['member_name'] = $user['member_name'];
    	$data['pageTitle'] = '用户中心';
    	$this->assign($data);
    	
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