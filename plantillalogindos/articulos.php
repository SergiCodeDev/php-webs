<?php
session_start();
if (!isset($_SESSION["logueado"]) || $_SESSION["logueado"] != true){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/bootstrap.css" />
  <link rel="stylesheet" href="/css/index.css" />
  <link rel="stylesheet" href="/iconos/css/fontawesome.css" />
  <link rel="stylesheet" href="/iconos/css/solid.css" />
  <link rel="stylesheet" href="/iconos/css/brands.css" />
  <link rel="stylesheet" href="/iconos/css/regular.css" />
</head>

<body class="fondologin">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand col-lg-3 ms-2 ms-lg-5" href="/index.php">Tienda Online</a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse d-lg-flex collapse justify-content-lg-around" id="navbarsExample11">
        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/articulos.php">Articulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/reservas.php">Reservas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contacto.php">Contacto</a>
          </li>
        </ul>
        <div class="d-lg-flex col-lg-4 justify-content-lg-end">
          <button type="button" id="botonusuario" data-ventana="ventanalogin"
            class="btn btn-warning me-lg-2">Login</button>
          <button type="button" id="iconoalmacenamiento" class="btn btn-warning me-lg-2 d-none">\(^-^)/</button>
          <button type="button" id="botonlogout" class="btn btn-warning me-lg-2 d-none">Desloguear</button>
        </div>
      </div>
    </div>
  </nav>



  <div class="container-fluid">
    <div class="row padin-row">
      <div class="col-md-3 mt-5" id="menuCategorias">
        <h2 class="text-center mt-5 ps-md-4">
          Todos los Articulos
        </h2>
      </div>


      <div class="col-md-9 mt-5">
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center lienzoArticulos" id="lienzoArticulos">

        </div>
      </div>
    </div>
  </div>

  <script src="/js/isotope.pkgd.min.js""></script>
  <script src=" /js/bootstrap.bundle.min.js""></script>
  <script type="module" src="./js/articulos.js"></script>
</body>

</html>