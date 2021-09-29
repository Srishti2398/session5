<?php

class dbconnector {
				
	private static $obj;
				
	private final function __construct() {
		echo __CLASS__ . " initializes only once ";
	}
	
	public static function getConnect() {
		if (!isset(self::$obj)) {
			self::$obj = new dbconnector();
		}
		
		return self::$obj;
	}
}

$obj1 = dbconnector::getConnect();
$obj2 = dbconnector::getConnect();

var_dump($obj1 == $obj2);
?>

