<?php
require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

$db = Database::getConexion();

use Classes\Page;

Page::setDB($db); // pasar la BD a la clase para su uso
