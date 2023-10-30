<?php
require_once __DIR__ . '/../config/app.php';
require '../views/templates/header.php';
?>

<div class="container-sm">
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
                <?php
                $sql = $db->query("select * from pages");
                while ($row = $sql->fetch_assoc()) {
                ?>
                    <tr class="">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td>
                            <div class="btn btn-small">
                                <a href="" class="btn btn-small btn-info"><i class="fa-solid fa-eye"></i></a>
                                <span>Ver contenido</span>
                            </div>
                        </td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td>
                            <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</div>