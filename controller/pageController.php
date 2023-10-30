<?php
require '../config/app.php';
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
        return($id!=false) ? header("Location:show.php?id=".$id) : header("Location:createPage.php") ;
    }
}
