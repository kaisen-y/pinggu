<?php
namespace Home\Model;


use Think\Model;

class ResultModel extends Model {
	protected $tableName = 'pingguresult';
	
	public function create($data){
		$resp = array('status'=>FAIL,'message'=>'出错了...');
		try {
			$this->startTrans();
			$arr = array(
					'care_id'			=> $data['care_id'],
					'wj_id'				=> $data['wj_id'],
					'wj_name'			=> $data['wj_name'],
					'pg_qa'				=> json_encode($data['pg_qa']),
					'pg_sum'			=> $data['pg_sum'],
					'pg_percentage'		=> $data['pg_percentage'],
					'pg_result'			=> $data['pg_result'],
					'remark'			=> $data['remark'],
					'uid'				=> $data['uid'],
					'addtime'			=> time()
			);
			$id = $this->add($arr);
			
			$this->commit(); // 事务提交
			
			$resp = array('status'=>$id?SUCCESS:FAIL,'data'=>$id);
		} catch (\Exception $e) {
			$resp = array('status'=>FAIL,'message'=>'系统忙[REG_DB_002]');
		}
		return $resp;
	}
	
	public function getOne($id){
		$ret = $this->find($id);
		if($ret && $ret['pg_qa']){
			$ret['pg_qa'] = json_decode($ret['pg_qa']);
			return $ret;
		}else{
			return false;
		}
	}
	
	public function update($id,$data){
		$data['pg_qa'] = json_encode($data['pg_qa']);
		$ret = $this->where('id='.$id)->save($data);
		return array('status'=>$ret?SUCCESS:FAIL);
	}
	
	public function del($id){
		return $this->delete($id);
	}
	
	
	/**
	 * 
	 * @param int $care_id		//ID
	 */
	public function getByCare_id($care_id){
		$list = $this->where('care_id='.$care_id)->select();
		if(is_array($list)){
			foreach ($list as $k=>$v){
				$list[$k]['pg_qa'] = json_decode($v['pg_qa'],true);
			}
		}
		return $list;
	}
}