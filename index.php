<?php 
	include 'controller/IndexController.php';
	session_start();
	$controller = new IndexController();
	$controller->login($_SESSION, $_COOKIE);