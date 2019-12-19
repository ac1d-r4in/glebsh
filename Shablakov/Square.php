<?php
namespace Shablakov;

use core\EquationInterface;
use Shablakov\Linear;

// Решение квадратного уравнения ax^2 + bx + c = 0
class Square extends Linear implements EquationInterface {

  public function __construct() {
  }

  protected function findDiscriminant($a, $b, $c) {
	   return pow($b, 2) - 4 * $a * $c;
  }

  public function solve($a, $b, $c) {
  	if($a == 0) {
     
     $this->x = array($this->linearSolve($b, $c));
     return $this->x[0];
    }

  	
  	$disc = $this->findDiscriminant($a, $b, $c);
    Log::log("D = " . $disc);

	try {
		if($disc < 0) {
		  
		}
	} catch(MyException $ex) {
		Log::log($ex->getMessage());
	}

  	if($disc > 0) {
  	  array_push($this->x, (-1 * $b + sqrt($disc))/(2 * $a), (-1 * $b - sqrt($disc))/(2 * $a));
      Log::log("This equation has 2 roots: " . $this->x[0] . ", " . $this->x[1] . "\n");
  	}

  	if($disc == 0) {
  	  $this->x = (-1 * $b)/(2 * $a);
      Log::log("This equation has 1 root: " . $this->x[0] . "\n");
  	}

  	return $this->x;
  }

}

?>
