<?php
require_once __DIR__ . '/../config/app.php';
require_once 'templates/header.php';
require_once '../controller/pageController.php';
require_once '../controller/categorieController.php';

$obj = new pageController();
$rows = $obj->index();
$cat = new CategorieController();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-4 mt-4">
            <div class="d-grid gap-2">
                <button type="button" id="leerPage" class="btn btn-primary">Prueba</button>
            </div>
            <div id="datePage"></div>
            <div class="card p-1">

                <div class="card-body">
                    <img class=" card-img-top" src="https://media.istockphoto.com/id/694229902/es/foto/el-sol-brilla-vigas-en-bosque-de-pinos.jpg?s=2048x2048&w=is&k=20&c=dR4uohJgiLFLpvi6rSR2FBK9JdZJqC0MBPTVYxnD5hw=" style=" left:0; display: absolute;" />
                    <h4 class="card-title mt-1">Title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatibus, itaque iusto aut pariatur possimus, omnis tempore facilis minima, illum odio quisquam nulla! Doloremque fugit amet in mollitia recusandae tempore.</p>
                </div>
            </div>

        </div>
        <!-- tabla  -->
        <div class="col-8 mt-4">
            <div class="mb-3 ">
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
                            <th scope="col">categoria</th>
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
                                        <?php if (!empty($_SESSION['usuario'])) : ?>
                                            <div class="btn btn-small">
                                                <a href="editPage.php?id=<?= $row[0] ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> Editar

                                            </div>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $row['created_at']; ?></td>
                                    <td><?php $name=$cat->show($row['id_categorie']); echo $name[0]; ?></td>
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

    </div>

</div>

<?php require_once 'templates/footer.php'; ?>