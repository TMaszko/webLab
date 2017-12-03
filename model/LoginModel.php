<?php
include 'model/Model.php';
include 'utils/Validate.php';
class LoginModel extends Model {
	private $values, $errors;
	public function __construct($values) {
		$this->values =count($values) == 0? [
			'username' => '',
			'password' => '',
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
    public function getPassword() {
    	return $this->values['password'];
    }
    public function setValue($name,$value) {
        $this->values[$name] = $value;
    }
    public function validate() {
        $this->errors = Validate::loginForm($this->values);
        if(!count($this->errors)) {
            if($this->values['username'] != $this->getUsers()[0][0] 
            || $this->values['password'] != $this->getUsers()[0][1]) {
                $this->errors['login'] = ['Invalid username or password'];
            }
        }
    }
    public function getUsers() {
        return [ 0 => ['admin','admin']];
    }
}