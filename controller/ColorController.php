<?php
include 'controller/Controller.php';

class ColorController extends Controller {
	private $model, $view;
	public function changeColor($value,$session) {
		$this->model = $this->loadModel('UserModel', isset($session['username'])? $session: []);
		if($this->isLoggedIn($this->model->getUserName())) {
			if(!isset($_COOKIE['color'])) {
				setcookie('color', $value, time() + 60);
			}
			$this->redirect('index.php');
		} else {
			$this->redirect('login.php');
		}
	}
	public function isLoggedIn($userName) {
			return $userName ? $this->model->isLoggedIn($userName) : false;
	}
}