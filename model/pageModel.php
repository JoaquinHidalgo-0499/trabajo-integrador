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

    public function insertarPagina($title, $content, $id_categorie)
    {
        $stmt = $this->db->prepare("INSERT INTO `pages` ( `title`, `content`, `created_at`, `id_categorie`) 
        VALUES ('" . $title . "', '" . $content . "', current_timestamp(), '" . $id_categorie . "');");
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
    public function update($id, $title, $content, $id_categorie)
    {
        $stmt = $this->db->prepare("UPDATE pages SET 
        title = :title ,
        content = :content ,
        id_categorie = :id_categorie
        WHERE id = :id");
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":id_categorie", $id_categorie);
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
