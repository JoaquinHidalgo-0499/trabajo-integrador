<?php
require_once __DIR__ . '/../../controller/loginController.php';
session_start();
$obj = new LoginController();
$email = $obj->limpiarCorreo($_POST['email']);
$password = $obj->limpiarCadena($_POST['password']);

$bool = $obj->verificarUsuario($email, $password);
if ($bool) {
    $_SESSION['usuario'] = $email;
    header("Location:panel_control.php");
}else{
    $error = "<li>Usuario o Contraseña incorrecta</li>";
    header("Location:login.php?error=".$error);
}
