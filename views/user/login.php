<?php require_once '../templates/header.php'; ?>
<div class="container-sm">
    <h2>Login</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="user" id="user">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="button" class="btn btn-primary">Login</button>
    </form>
    <div class="m-2 col-4">
        No esta registrado? <a href="signup.php">Crear Cuenta</a>
    </div>
</div>
<?php require_once '../templates/footer.php'; ?>