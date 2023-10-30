<?php
require_once __DIR__ . '/../config/app.php';
require_once 'templates/header.php';
require_once '../controller/pageController.php';

$obj = new pageController();
$rows = $obj->delete($_GET['id']);
