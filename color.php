<?php
session_start();
include 'controller/ColorController.php';
$controller = new ColorController();
$controller->changeColor(urldecode($_GET['color']),$_SESSION);