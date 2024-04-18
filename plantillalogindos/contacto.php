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

<body>
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
            <a class="nav-link" href="/articulos.php">Articulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/reservas.php">Reservas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href=/contacto.php">Contacto</a>
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

  <div class="d-flex align-items-center container-fluid fondo-blanco tamano-vh justify-content-around">

    <div class="row mb-5">




      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-11 col-xxl-10">
            <h4 class="mb-3">Contactenos</h4>
            <form class="needs-validation" name="formulariocontacto" id="formulariocontacto" novalidate="">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="nombrecompleto" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombrecompleto" placeholder="Nombre" name="nombrecompleto"
                    value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="correof" class="form-label">Correo E.</label>
                  <input type="email" class="form-control" id="correof" placeholder="tuemail@ejemplo.com"
                    name="correof">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <div class="col-12">
                  <label for="asunto" class="form-label">Asunto</label>
                  <input type="text" class="form-control" id="asunto" placeholder="asunto" name="asunto" required="">
                  <div class="invalid-feedback">
                    Please enter your asunto.
                  </div>
                </div>

                <div class="col-12">
                  <label for="mansaje" class="form-label">Mensaje</label>
                  <textarea class="form-control" id="mansaje" name="mansaje" placeholder="Mansaje" rows="6"></textarea>
                </div>
                <hr class="my-4">

                <div class="form-check ms-3 mb-2">
                  <input type="checkbox" class="form-check-input" id="chequeo1" name="chequeo1">
                  <label class="form-check-label" for="chequeo1">Acepta la politica de privacidad y distribucion.</label>
                </div>

                <hr class="my-4">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar</button>
              </div>
            </form>


          </div>
        </div>

      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d465.68568169831116!2d-0.7080087953268666!3d38.26216501011477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1682491135166!5m2!1ses!2ses"
          width="100%" height="60%" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
    
      </div>



    </div>

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

    <script src="/js/bootstrap.bundle.min.js""></script>
    <script type="module" src="./js/contacto.js"></script>
</body>

</html>