<?php
require_once 'model/Model.php';
class UserModel extends Model {
	private $values, $errors, $tempValues;
	public function __construct($values,$tempValues = []) {
		$this->values = isset($values['username']) ? $values : ['username' => '', 'password' =>''];
        $this->tempValues = $tempValues;
    }
    public function isLoggedIn($userName) {
        return $userName == 'admin';
    }
    public function getUserName() {
        return $this->values['username'];
    }
    public function getPassword() {
        return $this->values['password'];
    }
    public function getColor() {
        return $this->tempValues['color'];
    }
}