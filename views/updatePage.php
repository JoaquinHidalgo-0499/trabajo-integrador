<?php
require_once '../controller/pageController.php';
$obj = new pageController();
$obj->update($_POST['id'], $_POST['title'], $_POST['content']);