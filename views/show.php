<?php
require_once 'templates/header.php';
require_once __DIR__ . '/../config/app.php';
require_once '../controller/pageController.php';
require_once '../controller/categorieController.php';
$obj = new pageController();
$date = $obj->show($_GET['id']);
$cat = new CategorieController;
?>

<h2 class="text-center">Detalles del registro</h2>
<div class="container-sm">
    <div class="pb-3">
        <a href="index.php" class="btn btn-primary">Regresar</a>
        <?php if (!empty($_SESSION['usuario'])) : ?>
            <a href="editPage.php?id=<?= $date[0] ?>" class="btn btn-success">Actualizar</a>
            <!-- Button trigger modal -->
            <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Eliminar el registro?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Se eliminara de forma permanente.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                            <a href="deletePage.php?id=<?= $date[0] ?>" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="card">
        <h5 class="card-header"> <?php $name=$cat->show($date['id_categorie']); echo $name[0]; ?>     / <?= $date['created_at']?></h5>
        <div class="card-body p-4">
            <h5 class="card-title"><?= $date['title'] ?></h5>
            <p class="card-text"><?= $date['content'] ?></p>
        </div>
    </div>
</div>


<?php require_once 'templates/footer.php'; ?>