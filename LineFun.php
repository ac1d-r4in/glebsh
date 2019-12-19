<?php namespace Shablakov;
use core;
class LineFun{
	function __construct($result=0){
		$this->result=$result;
	}
	protected $result;
	public function getResult(){
	 
		return $this->result;
	}
	public function setResult($n1){
		$this->result=$n1;
	}
	public function line($a, $b){
		if($a == 0) {
			throw new ShablakovException("Error: the equation hasn't any solution \n");
		}
		$this->result=array((-1*$b)/$a);
		return $this->result;
	}
}

?>