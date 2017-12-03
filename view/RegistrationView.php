<?php 
include 'view/View.php';
class RegistrationView extends View {
    public function register($model, $isAfterSubmit) {
    	if(!$isAfterSubmit || count($model->getErrors())) {
        	$this->render('registrationForm', $model);
        } else {
        	$this->render('successfulRegister',$model);
        }
    }
}