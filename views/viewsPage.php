<?php
require '../includes/app.php';
use Classes\Page;

$p = new Page();
echo var_dump($p->selectPage());