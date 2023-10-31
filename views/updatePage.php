<?php
require_once '../controller/pageController.php';
$obj = new pageController();
// debuguear($_POST);
$obj->update($_POST['id'], $_POST['title'], $_POST['content'], $_POST['id_categorie']);