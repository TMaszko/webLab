<?php 
include 'view/View.php';
class LoginView extends View {
    public function login($model) {
            $this->render('loginForm', $model);
    }
}