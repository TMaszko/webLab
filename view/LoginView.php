<?php 
include 'view/View.php';
class LoginView extends View {
    public function login($model, $isAfterSubmit) {
        	$this->render('loginForm', $model);
    }
}