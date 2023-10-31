<?php
require_once __DIR__ . '/../config/app.php';
require __DIR__ . '/../model/loginModel.php';

class LoginController
{
    private $model;

    public function __construct()
    {
        $this->model = new loginModel();
    }
    public function guardarUsuario($username, $password, $email)
    {
        $value = $this->model->agregarNuevoUsuario(
            $this->limpiarCadena($username),
            $this->encriptarPassword($this->limpiarCadena($password)),
            $this->limpiarCorreo($email)
        );
        return $value;
    }
    public function limpiarCadena($var)
    {
        $var = strip_tags($var);
        $var = filter_var($var, FILTER_UNSAFE_RAW);
        $var = htmlspecialchars($var);
        return $var;
    }
    public function limpiarCorreo($var)
    {
        $var = strip_tags($var);
        $var = filter_var($var, FILTER_SANITIZE_EMAIL);
        $var = htmlspecialchars($var);
        return $var;
    }
    public function encriptarPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    public function verificarUsuario($email, $password)
    {
        $keydb = $this->model->obtenerClave($email);
        return (password_verify($password, $keydb)) ? true : false;
    }
}
