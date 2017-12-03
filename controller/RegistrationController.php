<?php
include 'controller/Controller.php';

class RegistrationController extends Controller {
	private $model, $view;
	public function register($values, $isAfterSubmit, $session) {
		$this->model = $this->loadModel('RegistrationModel',$isAfterSubmit? $values : []);
		$user = $this->loadModel('UserModel', isset($session['username'])? $session : []);
		if($user->isLoggedIn($user->getUserName())) {
			$this->redirect('index.php');
		}
		$this->validate($isAfterSubmit);
		$this->view = $this->loadView('RegistrationView');	
		return $this->view->register($this->model, $isAfterSubmit);
	}
	public function validate($isAfterSubmit) {
		if($isAfterSubmit){
			$this->model->validate();
		}
	}
}