<?php
namespace Home\Model;


use Think\Model;

class UserModel extends Model {

	protected $tableName = 'member';
	protected $sessionKey = 'yijiayiUser';
	
	/**
	 * 
	 * @param array $arr
	 */
	public function register($arr){
		if($this->isMemberName($arr['member_name'])){
			$resp = array('status' => 201, 'message' => '用户名已注册，请登录');
		}else{
			try {
				$this->startTrans();
				$data = array(
						'member_name'	=> $arr['member_name'],
						'member_phone'	=> $arr['member_phone'],
						'email'			=> $arr['email'],
						'password'		=> $this->createLoginPassword($arr['password']),
						'updatetime'	=>time(),
						'addtime'		=>time()
				);
				$id = $this->add($data);
				
				
				$this->commit(); // 事务提交
		
				if($id){$this->setUserSession($data);}
				$resp = array('status'=>$id?SUCCESS:FAIL,'data'=>$id);
			} catch (\Exception $e) {
				$resp = array('status'=>FAIL,'message'=>'系统忙[REG_DB_002]');
			}
		}
		return $resp;
	}

	/**
	 * 检查用户名
	 */
	public function isMemberName($member_name){
		$count = $this->where('member_name = "'.$member_name.'"')->count();
		return $count?true:false;
	}
	
	public function login($member_name,$password){
		$user = $this->where(array('member_name'=>$member_name,'password'=>$this->createLoginPassword($password)))->find();
		if($user && !empty($user['member_name'])){
			$this->setUserSession($user);
			return array('status'=>SUCCESS);
		}
		return array('status'=>FAIL,'message'=>'用户不存在或者密码不正确');
	}
	
	/**
	 * @param $password
	 */
	public function createLoginPassword($password){
		return md5(md5($password.C('LOGIN_PASSWORD_KEY')));
	}
	
	public function setUserSession($user)
	{
		if (is_array($user)) {
			session($this->sessionKey, $user);
			$expire = 3600 * 24 *30; // 设置30天过期时间
			session(array('name'=>$this->sessionKey,'expire'=>$expire));
			setcookie('PHPSESSID', session_id(), time() + $expire * 12,"/");
		}
	}
	
	public function logout()
	{
		session($this->sessionKey, null);
	}
	public function isLogin()
	{
		return $this->getUserSession() != null;
	}
	
	public function getUserSession()
	{
		return session($this->sessionKey);
	}
	
}