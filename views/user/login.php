<?php require_once '../templates/header.php'; 
if (!empty($_SESSION['usuario'])) {
    header("Location:panel_control.php");
}
?>

<div class="container">
    <div class="col-4 p-4">
        <h2>Login</h2>
        <form action="verificarLogin.php" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Contraseña</label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarPassword('password','eyePassword')">
                        <i id="eyePassword" class="fa-solid fa-eye viewPassword"></i>
                    </button>
                </div>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <?php if (!empty($_GET['error'])) : ?>
                <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                    <?= !empty($_GET['error']) ? $_GET['error'] : ""; ?>
                </div>
            <?php endif; ?>
            <div class="d-grid gap-2">
                <button type="submit" name="btnIngresar" class="btn btn-primary">Inicio Sesion</button>
            </div>
        </form>
    </div>
    <div class="m-2 col-4">
        No esta registrado? <a href="signUp.php">Crear Cuenta</a>
    </div>
</div>
<?php require_once '../templates/footer.php'; ?>