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
            <a class="nav-link active" aria-current="page" href="/index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/articulos.php">Articulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/reservas.php">Reservas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contacto.php">Contacto</a>
          </li>
        </ul>
        <div class="d-lg-flex col-lg-4 justify-content-lg-end">
          <button type="button" id="botonusuario" data-ventana="ventanalogin" class="btn btn-warning me-lg-2">Iniciar Sesion</button>
          <button type="button" id="botonulogout" class="btn btn-warning me-lg-2 d-none">Cerrar Sesión</button>
        </div>
      </div>
    </div>
  </nav>

  <div class="portada container-fluid">
    <div class="ocupavid">
      <video autoplay muted loop src="/img/viddiv.mp4"></video>
    </div>


    <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"
          class=""></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"
          class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="container-fluid centrartitulos">
            <div class="row des-vis">
              <div class="col-12">

                <div>
                  <h4 class="text-center balnco fs-1">Tu Tienda Online</h4>
                </div>
                <h6 class="text-center balnco fs-4">Busca lo que necesitas</h6>
              </div>

            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <div class="container-fluid centrartitulos">
            <div class="row des-vis">
              <div class="col-12 des-est">

                <div class="des-est-h4">
                  <h4 class="text-center balnco fs-1">Tu Tienda Online</h4>
                </div>
                <h6 class="text-center balnco fs-4">Busca lo que necesitas</h6>
              </div>

            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <div class="container-fluid centrartitulos">
            <div class="row des-vis">
              <div class="col-12 des-est">

                <div class="des-est-h4">
                  <h4 class="text-center balnco fs-1">Tu Tienda Online</h4>
                </div>
                <h6 class="text-center balnco fs-4">Busca lo que necesitas</h6>
              </div>

            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>

    <div class="custom-shape-divider-bottom-1682073906">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path
          d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
          opacity=".25" class="shape-fill"></path>
        <path
          d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
          opacity=".5" class="shape-fill"></path>
        <path
          d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
          class="shape-fill"></path>
      </svg>
    </div>
  </div>

  <div class="container-fluid fondo-blanco pb-4">
    <dir class="row padin-row">
      <h2 class="col-12 text-center mt-5 pb-3">
        Articulos destacados
      </h2>
    </dir>
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center" id="articulos_destacados">

    </div>

  </div>

  <div class="container-fluid fondo-blanco pb-4">
    <dir class="row padin-row">
      <h2 class="col-12 text-center mt-4 pb-3">
        Articulos nuevos
      </h2>
    </dir>
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center" id="articulos_nuevos">

    </div>

  </div>

  <section class="container mt-5">
    <div class="row">
      <div class="col-4">
        <p class="formas">
          <img src="./img/modelo.png" alt="" class="formaimagen img-fluid">
        </p>
      </div>
      <div class="col-4">
        <div class="formas2">
          <div class="mascara"></div>
          <div class="imagen">
            <img src="./img/modelo.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="formas3">
          <div class="imagen-forma1">
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1800' fill='#808'>
              <path
                d='M1386.57 181.4c160.9 73.74 328.5 149.72 424.59 281.57 96.09 129.61 118.44 315.09 98.33 487.16-20.11 172.07-84.92 332.97-187.71 446.94-105.03 116.2-250.29 185.48-391.07 243.58-138.55 60.34-272.63 109.5-393.31 91.62-122.91-17.88-234.64-102.8-377.66-160.9-143.02-58.1-317.33-87.15-406.71-183.24-89.39-96.09-96.09-261.46 2.23-368.72 98.33-109.5 301.68-160.9 384.37-270.4 82.68-111.73 42.46-283.81 84.92-422.36C669.24 188.1 798.86 80.83 937.41 60.72c140.79-20.11 290.51 49.16 449.17 120.67Z'>
              </path>
            </svg>
          </div>
          <div class="imagen-forma2">
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 2000' fill='#808'>
              <path
                d='M1891 560c0-277-224-509-501-499-372 13-397 281-504 302s-215-179-511-75a459 459 0 0 0-222 218C10 809 262 886 259 992s-201 171-82 395c34 64 99 127 212 141 56 6 103 47 115 102a377 377 0 0 0 383 310c222 2 528-202 380-536-42-97 30-123 73-194s-11-120 128-156c233-61 423-246 423-494Z'>
              </path>
            </svg>
          </div>
          <div class="imagen-forma3">
            <img src="./img/modelo.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  

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

  <script src="/js/bootstrap.bundle.min.js""></script>
  <script type="module" src="./js/main.js"></script>
</body>

</html>