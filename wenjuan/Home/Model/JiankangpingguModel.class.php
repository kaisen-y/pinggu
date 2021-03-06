<?php
namespace Home\Model;


use Think\Model;

class JiankangpingguModel extends Model {
	protected $tableName = 'jiankangpinggu';
	
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
	public function getOne($care_id){
		if ($care_id <1){
			return false;
		}
		return $this->where('care_id='.$care_id)->order('id desc')->find();
	}
}

?>