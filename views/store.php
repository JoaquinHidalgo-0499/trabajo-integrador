<?php
require __DIR__ . '/../controller/pageController.php';
$obj = new pageController();
$obj->guardar($_POST['title'], $_POST['content'], $_POST['id_categorie']);