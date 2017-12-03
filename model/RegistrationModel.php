<?php

include 'model/Model.php';
include 'utils/Validate.php';
class RegistrationModel extends Model {
	private $values, $errors;

	public function __construct($values) {
		$this->values =count($values) == 0? [
			'username' => '',
			'name' => '',
			'password' => '',
			'email' => ''
		] : $values;
	}
    public function getErrors() {
        return $this->errors;
    }
    public function getError($field) {
       return isset($this->errors[$field]) && count($this->errors[$field]) ? $this->errors[$field] : [];
    }
    public function getUserName() {
    	return $this->values['username'];
    }
    public function getName() {
    	return $this->values['name'];
    }
    public function getPassword() {
    	return $this->values['password'];
    }
    public function getEmail() {
    	return $this->values['email'];
    }
    public function validate() {
        $this->errors = Validate::registerForm($this->values);
    }
}