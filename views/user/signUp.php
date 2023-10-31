<?php
require_once '../templates/header.php';
if (!empty($_SESSION['usuario'])) {
    header("Location:panel_control.php");
}
?>

<div class="container">
    <div class="col-4 p-4">
        <h2>Crear Cuenta</h2>
        <form action="storeLogin.php" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="username" id="user" value="<?= (!empty($_GET["username"])) ? $_GET["username"] : ""; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input type="email" class="form-control" name="email" id="email" value="
                <?= (!empty($_GET["email"])) ? $_GET["email"] : ""; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Contraseña</label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarPassword('password','eyePassword')">
                        <i id="eyePassword" class="fa-solid fa-eye viewPassword"></i>
                    </button>
                </div>
                <input type="password" class="form-control" name="password" id="password" value="<?= (!empty($_GET["password"])) ? $_GET["password"] : ""; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Repetir contraseña</label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarPassword('password2','eyePassword2')">
                        <i id="eyePassword2" class="fa-solid fa-eye viewPassword"></i>
                    </button>
                </div>
                <input type="password" class="form-control" name="passwordConfirm" id="password2" value="<?= (!empty($_GET["passwordConfirm"])) ? $_GET["passwordConfirm"] : ""; ?>">
            </div>
            <?php if (!empty($_GET['error'])) : ?>
                <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                    <?= !empty($_GET['error']) ? $_GET['error'] : ""; ?>
                </div>
            <?php endif; ?>
            <div class="d-grid gap-2">
                <button type="submit" name="btnIngresar" class="btn btn-primary">Crear cuenta</button>
            </div>
        </form>

    </div>
    <div class="m-2 col-4">
        Ya estas registrado? <a href="login.php">Iniciar Sesion</a>
    </div>
</div>
<?php require_once '../templates/footer.php'; ?>