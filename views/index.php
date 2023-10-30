<?php
require_once __DIR__ . '/../config/app.php';
require_once 'templates/header.php';
require_once '../controller/pageController.php';

$obj = new pageController();
$rows = $obj->index();
?>
<div class="container-sm">
    <div class="mb-3">
        <a href="createPage.php" class="btn btn-primary">Agregar Pagina</a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">titulo</th>
                    <th scope="col">contenido</th>
                    <th scope="col">fecha_creacion</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rows) : ?>
                    <?php foreach ($rows as $row) : ?>
                        <tr class="">
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['title']; ?></td>
                            <td>
                                <div class="btn btn-small">
                                    <a href="show.php?id=<?= $row[0] ?>" class="btn btn-small btn-info"><i class="fa-solid fa-eye"></i></a>
                                    <span>Ver contenido</span>
                                </div>
                            </td>
                            <td><?= $row['created_at']; ?></td>
                            <td>
                                <a href="editPage.php?id=<?= $row[0] ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-small btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash-can"></i></a>
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
                                                <a href="deletePage.php?id=<?= $row[0] ?>" class="btn btn-danger">Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="3" class="text-center">No hay Paginas</td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>

</div>

<?php require_once 'templates/footer.php'; ?>