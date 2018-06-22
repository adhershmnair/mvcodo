<?php

class Controller extends Application{
	public $db = null;
	function __construct(){
		$this->connection();
	}
	public function loadModel($model_name,$data=array()){
		if (is_array($data)) {
			extract($data);
		}else{
			exit('Please Send An Array');
		}
		require MODEL_PATH.strtolower($model_name) . '.php';
		return new $model_name($this->db);
	}
	public function loadView($view_name,$data=array()){
		if (is_array($data)) {
			extract($data);
		}else{
			exit('Please Send An Array');
		}
		require VIEW_PATH.strtolower($view_name) . '.php';
	}	
	private function connection(){
		$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
		$this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);
	}

}
