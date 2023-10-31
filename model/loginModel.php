<?php
require_once __DIR__ . '/../config/app.php';

class loginModel
{
    private $db;
    public function __construct()
    {
        $db = new DataBase();
        $this->db = $db->conexion();
    }
    public function agregarNuevoUsuario($username, $password, $email)
    {
        $stmt = $this->db->prepare("INSERT INTO users
        VALUES (null, '" . $username . "', '" . $password . "', '" . $email . "')");
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function  obtenerClave($email)
    {
        $stmt = $this->db->prepare("SELECT password from users where email = :email");
        $stmt->bindParam(":email", $email);
        return ($stmt->execute()) ? $stmt->fetch()['password'] : false;
    }
}
