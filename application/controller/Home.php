<?php
class Home extends Controller{
	public function index(){
		echo 'index()';
		$this->loadView('_templates/header');
		$this->loadView('home/index');
		$this->loadView('_templates/footer');
	}
	public function exampleOne(){
		echo 'exampleOne()';
		$this->loadView('_templates/header');
		$this->loadView('home/example_one');
		$this->loadView('_templates/footer');
	}
	public function exampleTwo(){
		echo 'exampleTwo()';
		$this->loadView('_templates/header');
		$this->loadView('home/example_two');
		$this->loadView('_templates/footer');
	}
}
