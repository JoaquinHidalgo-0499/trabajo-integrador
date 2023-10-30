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
    public function show($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM pages where id = :id limit 1");
        $stmt->bindParam(":id", $id);
        return ($stmt->execute()) ? $stmt->fetch() : false;
    }
    public function index()
    {
        $stmt = $this->db->prepare("SELECT * FROM pages");
        return ($stmt->execute()) ? $stmt->fetchAll() : false;
    }
    public function update($id, $title, $content)
    {
        $stmt = $this->db->prepare("UPDATE pages SET title = :title WHERE id = :id");
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":id", $id);

        return ($stmt->execute()) ? $id : false;
    }
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM pages where id = :id");
        $stmt->bindParam(":id", $id);
        return ($stmt->execute()) ? true : false;
    }
}
