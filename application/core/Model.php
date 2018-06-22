<?php

class Model extends Application{
	function __construct($db){
		try {
			$this->db = $db;
		}catch (PDOException $e) {
			exit('Database connection could not be established.');
		}
	}
	public function fetchAll($table='', $where = array()){
		if(!empty($table)){
			$sql = "SELECT * FROM $table";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}
		return false;
	}
	public function fetch($table='',$fields=array()){
		if(!empty($table)){
			if (!empty($fields)) {
				if (is_array($fields)) {
					$fields = implode (", ", $fields);
				}
			}else{
				$fields = '*';
			}
			$sql = "SELECT $fields FROM $table";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}
		return false;
	}

	public function insert($table='',$data=array(),$condition=array()){
		$username = 'a';
		$email = 'b';
		$password = 'c';
		$sql = "INSERT INTO user (username, email, password) VALUES (:username, :email, :password)";
		$query = $this->db->prepare($sql);
		$query->execute(array(':username' => $username, ':email' => $email, ':password' => $password));
	}
	public function delete($table='',$_id=''){
		if (!empty($table) && !empty($_id)) {
			$sql = "DELETE FROM $table WHERE id = :_id";
			$query = $this->db->prepare($sql);
			$query->execute(array(':_id' => $_id));
		}
	}

}
