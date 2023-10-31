<?php
require_once 'templates/header.php';
require_once __DIR__ . '/../config/app.php';
require_once '../controller/pageController.php';
require '../controller/categorieController.php';
$obj = new pageController();
$page = $obj->show($_GET['id']);
$cat= new CategorieController();
$rows = $cat->index();
?>

<div class="container-sm">
    <form class="p-4" action="updatePage.php" method="POST">
        <h3>Modificar Pagina</h3>
        <div class="mb-3">
            <label class="form-label">id</label>
            <input type="text" readonly class="form-control" name="id" value="<?= $page[0] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nuevo Titulo</label>
            <input type="text" class="form-control" name="title" value="<?= $page[1] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Contenido</label>
            <textarea class="form-control" rows="3" name="content" value="<?= $page[2] ?>"></textarea>
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="id_categorie">
                <option selected>Seleccina Categoria</option>
                <?php foreach ($rows as $row) : ?>
                    <option value=<?= $row['id_categorie']; ?>><?= $row['name']; ?></option>
                <?php endforeach; ?>
            </select>

        </div>
        <input type="submit" class="btn btn-primary" value="Actualizar">
        <a href="index.php" class="btn btn-danger">Cancelar</a>
    </form>

</div>





<?php require_once 'templates/footer.php'; ?>