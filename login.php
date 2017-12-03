<?php
include 'controller/LoginController.php';
$controller = new LoginController();
$isAfterSubmit = $_SERVER['REQUEST_METHOD'] == 'POST';
$controller->login($_POST, $isAfterSubmit);

