<?php
require_once __DIR__ . '/../config/app.php';
require '../views/templates/header.php';
require '../controller/categorieController.php';
$obj = new CategorieController();
$rows = $obj->index();
?>
<div class="container-sm">
    <form class="p-4" action="store.php" method="POST">
        <h3>Crear Pagina</h3>
        <div class="mb-3">
            <label class="form-label">Titulo Pagina</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Contenido</label>
            <textarea class="form-control" rows="3" name="content"></textarea>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="id_categorie">
                <option selected>Seleccina Categoria</option>
                <?php foreach ($rows as $row) : ?>
                    <option value=<?= $row['id_categorie']; ?>><?= $row['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>
    </form>

</div>