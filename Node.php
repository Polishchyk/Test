<?php

class Node{
	private $_list = array();
	public $id;
	public $parentId;
	
	public  function add($id = 0, $parentId = 0) {
		$this->id = $id;
		$this->parentId = $parentId;
		$this->_list[] = [
			'id' => $this->id,
			'parentId' => $this->parentId
		];
	}
	
	public function getAll() {
		return $this->_list;
	}
	
	public function countChildren($id){
		$num = 0;
		foreach ($this->_list as $list) {
			if ($list['parentId'] == $id) {
				$num++;
			}
		}
		return $num;
	}
}