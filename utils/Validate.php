<?php
class Validate {
	private static $_validationArr = [
		'password' => ['required' => true, 'regex' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d$#_]{8,}$/'],
		'username' => ['required' => true],
		'email' => ['required' => true, 'regex' => '/^\S+@\S+\.\S+$/']
	];
	private static $_messages = [
		'password' => ['Must be a minimum of 8 characters',
						'Must contain at least 1 number',
						'Must contain at least one uppercase character',
						'Must contain at least one lowercase character',
					],
		'email' => ['Must be a valid email address']
	];
	public static function registerForm($values) {
		$errors = [];
		foreach(self::$_validationArr as $field => $rules) {
			foreach($rules as $rule => $ruleValue) {
				$message = self::validateField($values[$field], $field, $rule, $ruleValue);
				if($message) {
					$errors[$field][] = $message;
				}
			} 
		}
		return $errors;
	}
	public static function validateField( $value, $fieldName, $rule, $ruleValue) {
		switch($rule) {
			case 'required':
				return self::isEmpty($value)? 'This field is required' : false;
			case 'min_length':
				return self::minLength($value, $ruleValue)? false : 'This field must have more than '.$ruleValue.' chars';
			case 'regex':
				return self::testAgainstRegex($value, $ruleValue)? false : implode('<br/>',self::$_messages[$fieldName]);
			default:
				return '';
		}
	}
	public static function isEmpty($value) {
		return strlen($value) == 0;
	}
	public static function minLength($value, $minLength) {
		return strlen($value) >= $minLength;
	} 
	public static function testAgainstRegex($value, $regex) {
		return preg_match($regex, $value);
	} 
}
