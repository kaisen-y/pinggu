<?php
namespace Home\Model;


use Think\Model;

class WenjuanModel extends Model {
	protected $tableName = 'wenjuan';
	
	public function create($data){
		$resp = array('status'=>FAIL,'message'=>'出错了...');
		try {
			$this->startTrans();
			$arr = array(
					'wj_name'		=> $data['name'],
					'wj_desc'		=> $data['wj_desc'],
					'wj_remark'		=> $data['remark'],
					'uid'			=> $data['uid'],
					'addtime'		=>time()
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
		return $this->find($id);
	}
	
	public function getlist($uid, $where=array(), $start=0, $length=10){
		if (empty($where)){
			$where['uid'] = $uid;
		}
		$list = $this->where($where)->limit($start,$length)->order('wj_id DESC')->select();
		return $list;
	}
	
	public function update($id,$data){
		$ret = $this->where('wj_id='.$id)->save($data);
		return array('status'=>$ret?SUCCESS:FAIL);
	}
	
	public function del($id){
		return $this->delete($id);
	}
}