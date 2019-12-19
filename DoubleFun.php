<?php 
namespace Shablakov;
use core\EquationInterface;
class DoubleFun extends LineFun implements EquationInterface{
	protected $result = array();
	protected function dis($a, $b, $c)
	{
		return ($b*$b)-4*$a*$c;
	}
	public function solve($a, $b, $c)
	{
		if ($a==0){
			return $this->line($b, $c);
		}
		//ShablakovLog::log("The following equation: ".$a . "x^2 + " .$b . "x + " . $c . " = 0");
		
		$d=$this->dis($a, $b, $c);
		
		if($d < 0) {
			throw new ShablakovException("An equation does not exist. \n");
		}
		if($d==0){
			$this->result[]=-$b/(2*$a);
		}elseif($d>0){
			$this->result=array((-$b+sqrt($d))/(2*$a), (-$b-sqrt($d))/(2*$a));
		}
		return $this->result;
	}
}

?>