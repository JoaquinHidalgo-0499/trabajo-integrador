<?php
require 'config.php';

class Database
{
    protected static $_instance;
    private $host;
    private $db;
    private $user;
    private $pass;
    public $conection;

    public static function getConexion()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct()
    {
        $this->host = constant('DB_HOST');
        $this->db = constant("DB");
        $this->user = constant("DB_USER");
        $this->pass = constant("DB_PASS");
        try {
            $this->conection = new PDO('mysql:host = ' . $this->host . ';dbname=' . $this->db, $this->user . $this->pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
