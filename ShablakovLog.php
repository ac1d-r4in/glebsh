<?php 
namespace Shablakov;

use core\LogInterface;
use core\LogAbstract;

class ShablakovLog extends LogAbstract implements LogInterface{
 protected static $i;
  protected $log = array();

  public static function write() {
	return ShablakovLog::Instance()->_write();
  }

  public static function log($str) {
    ShablakovLog::Instance()->log[] = $str;
  }

  public function _write() {
	echo implode("\n", ShablakovLog::Instance()->log);
  }

}

?>