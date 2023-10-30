<?php
require_once 'templates/header.php';
require_once __DIR__ . '/../config/app.php';
require_once '../controller/pageController.php';
$obj = new pageController();
$date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="container-sm">
    <div class="pb-3">
        <a href="index.php" class="btn btn-primary">Regresar</a>
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
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">titulo</th>
                    <th scope="col">contenido</th>
                    <th scope="col">fecha_creacion</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td><?php echo $date['id']; ?></td>
                    <td><?php echo $date['title']; ?></td>
                    <td>
                        <div class="btn btn-small">
                            <a href="" class="btn btn-small btn-info"><i class="fa-solid fa-eye"></i></a>
                            <span>Ver contenido</span>
                        </div>
                    </td>
                    <td><?php echo $date['created_at']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>


<?php require_once 'templates/footer.php'; ?>