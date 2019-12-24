<?php

define("BASEURI", __DIR__);
date_default_timezone_set("Europe/Moscow");

ini_set("display_errors", 1);
error_reporting (-1); 

use Shablakov\ShablakovException;
use Shablakov\MyLog;
use Shablakov\Linear;
use Shablakov\Square;


include BASEURI . '/core/EquationInterface.php';
include BASEURI . '/core/LogInterface.php';
include BASEURI . '/core/LogAbstract.php';
include BASEURI . '/Shablakov/ShablakovException.php';
include BASEURI . '/Shablakov/MyLog.php';
include BASEURI . '/Shablakov/Linear.php';
include BASEURI . '/Shablakov/Square.php';



	try{
		echo 'Enter a, b, c' . "\n";
		$num = [];
		for($i = 0; $i < 3; $i++){
			$num[$i] = readline("Value = ");	
		}
		MyLog::log("The equation typed: " . $num[0] . "x^2 + " . $num[1] . "x + " . $num[2] . " = 0");
		$square = new Square();
		$roots = $square->solve($num[0], $num[1], $num[2]);
		MyLog::log("Roots: " . implode(",", $roots) . "\n");
	} catch(ShablakovException $e) {
		MyLog::log($e->getMessage());
	}

MyLog::write();