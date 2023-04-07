<?php
$url_base="http://localhost/mvc-agenda/"
?>
<!doctype html>
<html lang="es">

<head>
  <title>AGENDA</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
  <header>

    <!-- place navbar here -->
  </header>

  <nav class="navbar navbar-expand navbar-light"  style="background-color: #e3f2fd;">
      <ul class="nav navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">AGENDA <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/contactos/">Contacto</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/categorias/">Categoria</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/notas/">Notas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base;?>secciones/compañia/">Compañia</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/cerrar.php">Cerrar Seccion</a>
          </li>
          
      </ul>
  </nav>

  <main class="container">