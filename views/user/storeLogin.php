<?php
require_once __DIR__ . '/../../controller/loginController.php';
$obj = new LoginController();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];

$error = "";
if (empty($username) || empty($email) || empty($password) || empty($passwordConfirm)) {
    $error .= "<li>Los campos son obligatorios</li>";

    header("Location:signUp.php?error=" . $error . "&&username=" . $username . "&&email=" . $email . "&&password=" . $password . "&&passwordConfirm=" . $passwordConfirm);
} else if ($username && $email && $password && $passwordConfirm) {
    if ($password == $passwordConfirm) {
        if ($obj->guardarUsuario($username, $password, $email) == false) {
            $error .= "<li>Ya se encuentra registrado el email </li>";
            header("Location:signUp.php?error=" . $error . "&&username=" . $username . "&&email=" . $email . "&&password=" . $password . "&&passwordConfirm=" . $passwordConfirm);
        } else {
            header("Location:login.php");
        }
    } else {
        $error = "<li>Los Contraseñas no coinciden!</li>";
        header("Location:signUp.php?error=" . $error . "&&username=" . $username . "&&email=" . $email . "&&password=" . $password . "&&passwordConfirm=" . $passwordConfirm);
    }
}
