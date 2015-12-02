<?php

// the singleton to get the connection to the mysql

class conf {

	protected static $ins = null;
	protected $data = array();

	final protected function __construct(){
		
		include(ROOT . 'include/config.inc.php');
		$this -> data = $_CFG;
	}

	final protected function __clone(){

	}

	public static function getIns() {
		if (self :: $ins instanceof self) {
			return self::$ins;
		}else{
			self::$ins = new self();
			return self::$ins;
		}
	}

	// use Magic Methods to read the information inside the data 
	public function __get($key){
		if(array_key_exists($key,$this->data)){
			return $this -> data[$key];
		}else{
			return null;
		}
		
	}

	// With a magic method, at runtime, dynamically increase or change the configuration options
	public function __set($key, $value) {
		$this -> data[$key] = $value;
	}
}

// Read profile information
$conf = conf::getIns();

/*
echo $conf->host;


//动态追加选项
*/
?>