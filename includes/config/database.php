<?php
require 'config.php';

$host = constant('DB_HOST');
$db = constant("DB");
$user = constant("DB_USER");
$pass = constant("DB_PASS");
try {
    $db= new mysqli($host, $user, $pass, $db);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}