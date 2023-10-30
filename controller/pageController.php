<?php
require_once '../config/app.php';
require '../model/pageModel.php';

class pageController
{
    private $model;

    public function __construct()
    {
        $this->model = new PageModel();
    }
    public function guardar($title, $content)
    {
        $id = $this->model->insertarPagina($title, $content);
        return ($id != false) ? header("Location:show.php?id=" . $id) : header("Location:createPage.php");
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
