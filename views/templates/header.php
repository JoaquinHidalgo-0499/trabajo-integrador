<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <title>
    <?php
    echo (empty($_GET['id']))
      ? (
        (strpos($_SERVER['REQUEST_URI'], 'create')) ? "Agregando pagina" : "Index"
      )
      : (
        (strpos($_SERVER['REQUEST_URI'], 'show')) ? "Detalle pagina" : "Actualizar pagina"
      );

    ?>
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="/Integrador_php/asset/css/styles.css">
  <script src="/Integrador_php/asset/js/main.js"></script>
  <script src="/Integrador_php/asset/js/jquery.js"></script>
  <script src="https://kit.fontawesome.com/a83ea22b72.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/Integrador_php/index.php" class="nav-link px-2 text-white">Inicio</a></li>
          <li><a href="/Integrador_php/views/index.php" class="nav-link px-2 text-white">Paginas</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <?php if (empty($_SESSION['usuario'])) : ?>
          <div class="text-end">
            <a href="/Integrador_php/views/user/login.php" class="btn btn-outline-light me-2">Ingresar</a>
            <a href="/Integrador_php/views/user/signUp.php" class="btn btn-warning">Crear Usuario</a>
          </div>
        <?php else : ?>
          <div class="text-end">
            <a href="/Integrador_php/views/user/logOut.php" class="btn btn-danger">Cerrar Sesion</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </header>