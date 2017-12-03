<?php
include 'controller/Controller.php';

class LoginController extends Controller {
	private $model, $view;
	public function login($values, $isAfterSubmit) {
		$this->model = $this->loadModel('LoginModel',$isAfterSubmit? $values : []);
		$this->validate($isAfterSubmit);
		$this->view = $this->loadView('LoginView');	
		if($isAfterSubmit && count($this->model->getErrors()) == 0) {
			session_start();
			$_SESSION['username'] = $this->model->getUserName();
			$_SESSION['password'] = $this->model->getPassword();
			$this->redirect('index.php');
		}
		return $this->view->login($this->model, $isAfterSubmit);
	}
	public function validate($isAfterSubmit) {
		if($isAfterSubmit){
			$this->model->validate();
		}
	}
}