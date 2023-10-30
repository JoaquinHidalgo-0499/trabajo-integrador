<?php
require_once 'config.php';

class DataBase
{
    private $host;
    private $db;
    private $user;
    private $pass;
    public function conexion()
    {
        $this->host = constant('DB_HOST');
        $this->db = constant("DB");
        $this->user = constant("DB_USER");
        $this->pass = constant("DB_PASS");
        try {
            $conection = new PDO('mysql:host = ' . $this->host . ';dbname=' . $this->db, $this->user . $this->pass);
            return $conection;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
