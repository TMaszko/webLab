<?php 
include 'view/View.php';
class UserView extends View {
    public function login($model) {
        	$this->render('loggedUser', $model);
    }
}