<?php
session_start();
if(!isset($_SESSION["Correcto"]) || $_SESSION["Correcto"] != true){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="/css/bootstrap.css" />
  <link rel="stylesheet" href="/css/index.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PAGINA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/index.html">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Información</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="button" id="botonLP" class="btn btn-dark me-md-1">
            Iniciar Sesión
          </button>
        </div>
      </div>
    </div>
  </nav>

  <div class="modal fade modal-dialog modal-dialog-centered" id="loginP" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header fondologin">
          <h1 class="modal-title fs-5 text-uppercase ms-2" id="exampleModalLabel">
            iniciar sesión
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-light-subtle d-flex justify-content-center">
          <form class="row g-3 needs-validation d-flex justify-content-center pb-4 pt-3" id="formlogin" novalidate>
            <div class="col-10">
              <label for="email" class="form-label d-flex justify-content-center fw-semibold">Usuario</label>

              <input type="email" id="email" name="email" pattern=".+@" class="form-control centropch"
                placeholder="Correo Electronico" required />
            </div>

            <div class="col-10">
              <label for="password"
                class="form-label d-flex justify-content-center fw-semibold">Constraseña</label>
              <input type="password" class="form-control centropch" id="contra" name="contra" placeholder="••••••••••••"
                required />
            </div>
          </form>
        </div>
        <div class="modal-footer fondologin">
          <button class="btn btn-secondary" id="btenvnamcon">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="/js/bootstrap.js"></script>
  <script src="/js/index.js"></script>
</body>

</html>