<?php
include 'controller/Controller.php';

class IndexController extends Controller {
	private $model, $view;
	public function login($values, $tempValues) {
		$this->model = $this->loadModel('UserModel', isset($values['username'])? $values: [], 
			isset($tempValues['color']) ? $tempValues: ['color' => '#000000']);
		if($this->isLoggedIn($this->model->getUserName())) {
			$this->view = $this->loadView('UserView');
			$this->view->login($this->model);	
		} else {
			$this->redirect('login.php');
		}
	}
	public function isLoggedIn($userName) {
			return $userName ? $this->model->isLoggedIn($userName) : false;
	}
}