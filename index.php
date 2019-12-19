<?php 

include 'core\LogAbstract.php';
include 'core\LogInterface.php';
include 'Shablakov\ShablakovLog.php';
include 'core\EquationInterface.php';
include 'Shablakov\LineFun.php';
include 'Shablakov\DoubleFun.php';
include 'Shablakov\ShablakovException.php';

use Shablakov\ShablakovLog;
use Shablakov\LineFun;
use Shablakov\DoubleFun;
use Shablakov\ShablakovException;

ini_set("display_errors", 1); 
error_reporting (-1); 

echo "Enter 3 parameters, each on a new string \n";


try {
	for($i = 0; $i < 3; $i++) {
	fscanf(STDIN, "%d\n", $number);
	$kfArray[] =  $number;
}
	ShablakovLog::log("The following equation: ".$kfArray[0] . "x^2 + " .$kfArray[1] . "x + " . $kfArray[2] . " = 0\n");
	$obj= new DoubleFun();
	$abj=$obj->solve($kfArray[0], $kfArray[1], $kfArray[2]);
	ShablakovLog::log("Roots: " . implode(" , ", $abj)."\n");
} catch(ShablakovException $ex) {
	ShablakovLog::log($ex->getMessage());
} 
ShablakovLog::write();

?>