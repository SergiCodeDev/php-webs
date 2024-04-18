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
  <script src="https://www.google.com/recaptcha/api.js?render=tu-clave-publica-recaptcha"></script>
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
            <a class="nav-link" href="#">Reservas</a>
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



  <div class="container-fluid d-flex justify-content-center align-items-center alturamin">
  <div class="col col-md-8 col-lg-6 col-xxl-5 mb-5 pb-5">
        <h4 class="mb-3">Reservar una mesa</h4>
        <form class="formularioreservas" novalidate="" id="formularioreservas">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="Nombre Reserva" value="" required="" name="nombrereserva">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="telefonoreserva" class="form-label">Teléfono Reserva</label>
              <input type="text" class="form-control" id="telefonoreserva" placeholder="" value="" required="" name="telefonoreserva">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="fechareserva" class="form-label">Fecha reserva</label>
              <input type="date" class="form-control" id="fechareserva" placeholder="" value="" required="" name="fechareserva">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-8">
              <label for="email" class="form-label">Email de la reserva</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="emailreserva">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="adultos" class="form-label">Adultos (18+)</label>
              <select class="form-select" id="adultos" required="" name="adultos">
                <option value="0" hidden selected>Elije...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="ninos" class="form-label">Niños</label>
              <select class="form-select" id="ninos" required="" name="ninos">
                <option value="0" hidden selected>Elije...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="menu" class="form-label">Ménu preferido</label>
              <select class="form-select" id="menu" required="" name="menu">
                <option value="0" hidden selected>Normal</option>
                <option value="1">Degustación</option>
                <option value="2">Especial</option>
                <option value="3">Negocios</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
          </div>


          <button class="w-100 btn btn-warning btn-lg mt-5" type="submit">Realizar reserva</button>
        </form>
      </div>
  </div>

  <script src=" /js/bootstrap.bundle.min.js""></script>
  <script type="module" src="./js/reservas.js"></script>
</body>

</html>