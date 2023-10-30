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
  <script src="https://kit.fontawesome.com/a83ea22b72.js" crossorigin="anonymous"></script>
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

        <div class="text-end">
          <a href="/Integrador_php/views/user/login.php" class="btn btn-outline-light me-2">Login</a>
          <a href="/Integrador_php/views/user/logout.php" class="btn btn-warning">Sign-up</a>
        </div>
      </div>
    </div>
  </header>