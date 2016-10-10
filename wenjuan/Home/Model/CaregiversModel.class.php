<?php
namespace Home\Model;


use Think\Model;

class CaregiversModel extends Model {
	protected $tableName = 'caregivers';
	
	public function create($data){
		$resp = array('status'=>FAIL,'message'=>'出错了...');
		try {
			$this->startTrans();
			$data['addtime'] = time();
			$id = $this->add($data);
			
			$this->commit(); // 事务提交
			
			$resp = array('status'=>$id?SUCCESS:FAIL,'data'=>$id);
		} catch (\Exception $e) {
			$resp = array('status'=>FAIL,'message'=>'系统忙[REG_DB_002]');
		}
		return $resp;
	}
}

?>