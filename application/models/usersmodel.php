<?php
class UsersModel extends Model{
	public function getAllUsers(){
		return $this->fetch('user',array('id'=>1));
	}
	public function addUser($username, $email, $password){
		$this->insert('user');

	}
	public function deleteUser($user_id){
		$this->delete('user',$user_id);
	}
}
