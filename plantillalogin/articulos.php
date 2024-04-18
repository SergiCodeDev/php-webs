<?php
session_start();
if (!isset($_SESSION["logueado"]) && $_SESSION["logueado"] != true){
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
            <a class="nav-link" href="#!">Reservas</a>
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
    <dir class="row padin-row">
    <div class="col-md-3 mt-5">
    <h2 class="text-center mt-5 ps-md-4">
        Todos los Articulos
      </h2>
      <div class="list-group ms-md-3 mt-4" id="categoriasArticulos">
  <a href="#!" class="list-group-item list-group-item-action active dfgasdfad" aria-current="true" id="todos">
    Todos los lugares para visitar
  </a>
  <a href="#!" class="list-group-item list-group-item-action" id="bosque">
    Bosque en la naturaleza
  </a>
  <a href="#!" class="list-group-item list-group-item-action" id="nieve">
    Pistas de nieve
  </a>
  <a href="#!" class="list-group-item list-group-item-action" id="rural">
    Casa rural acogedora
  </a>
  <a href="#!" class="list-group-item list-group-item-action" id="ciudad">
    Ciudad turistica con monumentos
  </a>
</div>
      </div>
      


      



      <div class="col-md-9 mt-5">
      <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center" id="lienzoArticulos">

        </div>
      </div>
    </dir>
  </div>


















   
  <div class="modal fade" id="ventanalogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header fondologin">
          <h1 class="modal-title fs-5 text-uppercase ms-2" id="exampleModalLabel">
            iniciar sesión
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-light-subtle d-flex justify-content-center">
          <form class="row g-3 needs-validation d-flex justify-content-center pb-4 pt-3" id="formularioacceso"
            novalidate>
            <div class="col-10">
              <label for="correo" class="form-label d-flex justify-content-center fw-semibold">Usuario</label>

              <input type="email" id="correo" name="correo" pattern=".+@" class="form-control centropch"
                placeholder="Correo Electronico" required />
            </div>

            <div class="col-10">
              <label for="contrasenya" class="form-label d-flex justify-content-center fw-semibold">Constraseña</label>
              <input type="password" class="form-control centropch" id="contrasenya" name="contrasenya"
                placeholder="••••••••••••" required />
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary">Aceptar</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <template id="tarjeta_articulo">
    <div class="col">
      <div class="card h-100">
        <img src="" class="card-img-top t-imagen-t" alt="img">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
  </template>
  <script src="/js/jquery-3.6.4.min.js""></script>
  <script src="/js/isotope.pkgd.min.js""></script>
  <script src="/js/bootstrap.bundle.min.js""></script>
  <script type="module" src="./js/articulos.js"></script>
  <script src="/js/scrscrip.js"></script>
</body>

</html>