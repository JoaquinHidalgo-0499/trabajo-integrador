<?php
require_once __DIR__ . '/../config/app.php';

class CategorieModel
{
    private $db;

    public function __construct()
    {
        $conection = new DataBase();
        $this->db = $conection->conexion();
    }

    public function nuevaCategoria($name)
    {
        $stmt = $this->db->prepare("INSERT INTO `categories` VALUES ('" . $name . "');");
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function show($id){
        $stmt = $this->db->prepare("SELECT name FROM categories where id_categorie = :id");
        $stmt->bindParam(":id", $id);
        return ($stmt->execute()) ? $stmt->fetch() : false;
    }

    public function index()
    {
        $stmt = $this->db->prepare("SELECT * FROM categories");
        return ($stmt->execute()) ? $stmt->fetchAll() : false;
    }
    public function update($id, $name)
    {
        $stmt = $this->db->prepare("UPDATE categories SET name = :name WHERE id = :id");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":id", $id);

        return ($stmt->execute()) ? $id : false;
    }
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM categories where id = :id");
        $stmt->bindParam(":id", $id);
        return ($stmt->execute()) ? true : false;
    }
}
