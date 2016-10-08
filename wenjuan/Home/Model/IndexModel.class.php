<?php
namespace Home\Model;


use Think\Model;

class IndexModel extends Model {

	protected $tableName = 'member';
	
	public function testdb(){
		return $this->find();
	}
}