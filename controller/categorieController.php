<?php
require_once '../config/app.php';
require '../model/categorieModel.php';

class CategorieController 
{
    private $model;

    public function __construct()
    {
        $this->model = new CategorieModel();
    }
    public function guardar($name)
    {
        $id = $this->model->nuevaCategoria($name);
        return ($id != false) ? header("Location:show.php?id=" . $id) : header("Location:createCategorie.php");
    }
    public function show($id)
    {
        return ($this->model->show($id) != false) ? $this->model->show($id)  : header("Location:index.php");
    }
    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id, $title, $content)
    {
        return ($this->model->update($id, $title, $content) != false) ? header("Location:show.php?id=" . $id) : header("Location:index.php");
    }
    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=" . $id);
    }
}