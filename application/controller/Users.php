<?php
class Users extends Controller{
	public function index(){
		echo 'index().';
		$users_model = $this->loadModel('UsersModel');
		$users = $users_model->getAllUsers();
		$jaba['a'] = 'asdfd';
		$this->loadView('_templates/header');
		$this->loadView('users/index',$jaba);
		$this->loadView('_templates/footer');
	}
}
