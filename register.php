<?php
session_start();
include 'controller/RegistrationController.php';
$controller = new RegistrationController();
$isAfterSubmit = $_SERVER['REQUEST_METHOD'] == 'POST';
$controller->register($_POST, $isAfterSubmit,$_SESSION);
