<?php
include "Node.php";

class Tree{
	public function __construct(){
		$node = new Node();
		$node->add(1, 0);
		$id = 1;
		$parentId = 1;
		
		for($i=0;$i<=50;$i++){
			++$id;
			$children = $node->countChildren($parentId);
			
			if($children==2){
				++$parentId;
			}
			$node->add($id, $parentId);
			
		}
		$this->printRoot($node->getAll());
		echo $this->printTree($node->getAll(),1);
	}
	public function printTree($node, $pid){
		$html = '';
		foreach ($node as $item){
				if($item['parentId'] == $pid){
					$html .= '<li>' . "\n";
					$html .= '<a href="#">ID: '.$item['id']. " Parent id: ".$item['parentId']."</a> \n";
					$html .= ' ' . $this->printTree($node, $item['id']);
					$html .= '</li>' . "\n";
				}
		}
	 
		return $html ? '<ul>' . $html . '</ul>' . "\n" : '';
	}
	
	public function printRoot($node){
		foreach ($node as $item){
			if($item['id']==1){
				echo '<a href="#">ID: '.$item['id']. "Parent id: ".$item['parentId']."</a> \n";
			}
		}
	}
	
}