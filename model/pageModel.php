<?php
require_once '../config/app.php';

class PageModel
{
    private $db;

    public function __construct()
    {
        $conection = new DataBase();
        $this->db = $conection->conexion();
    }

    public function insertarPagina($title, $content)
    {
        $stmt = $this->db->prepare("INSERT INTO `pages` ( `title`, `content`, `created_at`) 
        VALUES ('" . $title . "', '" . $content . "', current_timestamp());");
        return ($stmt->execute()) ? $this->db->lastInsertID() : false;
    }
}
