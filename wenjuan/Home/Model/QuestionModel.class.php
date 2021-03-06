<?php
namespace Home\Model;


use Think\Model;

class QuestionModel extends Model {
	protected $tableName = 'wjquestion';
	
	public function create($data){
		$resp = array('status'=>FAIL,'message'=>'出错了...');
		try {
			$this->startTrans();
			$arr = array(
					'wjq_question'		=> $data['question'],
					'wj_id'				=> $data['wj_id'],
					'wjq_answer'		=> json_encode($data['answer']),
					'addtime'			=>time()
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
		if($ret && $ret['wjq_question']){
			$ret['wjq_answer'] = json_decode($ret['wjq_answer']);
			return $ret;
		}else{
			return false;
		}
	}
	
	public function update($id,$data){
		$data['wjq_answer'] = json_encode($data['answer']);
		unset($data['answer']);
		$ret = $this->where('wjq_id='.$id)->save($data);
		return array('status'=>$ret?SUCCESS:FAIL);
	}
	
	public function del($id){
		return $this->delete($id);
	}
	/**
	 * 
	 * @param int $wjid
	 * @return boolean
	 */
	public function delBywjid($wjid){
		return $this->where('wj_id='.$wjid)->delete();
	}
	
	/**
	 * 
	 * @param int $wjid		//问卷ID
	 */
	public function getAllQuestion($wjid){
		$list = $this->where('wj_id='.$wjid)->select();
		if(is_array($list)){
			foreach ($list as $k=>$v){
				$list[$k]['wjq_answer'] = json_decode($v['wjq_answer']);
			}
		}
		return $list;
	}
}