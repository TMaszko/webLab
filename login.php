<?php
include 'controller/LoginController.php';
session_start();
$controller = new LoginController();
$isAfterSubmit = $_SERVER['REQUEST_METHOD'] == 'POST';
$controller->login($_POST, $isAfterSubmit,$_SESSION);

