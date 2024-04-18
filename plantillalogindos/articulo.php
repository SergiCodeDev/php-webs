<?php
session_start();
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] != true) {
    header("Location: index.php");
}
if( !isset($_GET['codigoarticulo']) || empty($_GET['codigoarticulo'])) {
    // header("Location: ./articulos.php");
    $bandera = "No";
} else {
    $bandera = "Si";
    $codigoarticulo = $_GET['codigoarticulo'];
    include_once("./php/config.php");
    $conexion = new mysqli($servidorbd,$usuariobd,$contrabd,$basedatos);
    if ( $conexion->connect_error) {
        $bandera = "No";
    } else {
        $consulta = "SELECT * FROM articulos WHERE id=$codigoarticulo";
        $resultado = $conexion->query($consulta);
        if($resultado) {
            if ($resultado->num_rows == 0) {
                $bandera = "No";
            } else {
                $datosarticulo = $resultado->fetch_assoc();
            }
        } else {
            $bandera = "No";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
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

  <?php if($bandera == "No") { ?>
    <section class="container mt-4">
        <div class="row">
            <div class="col">
                <h2>Articulo No Encontrado</h2>
                <p>Por favor pulsa el botón para volver a la lista de articulos</p>
                <p><a href="./articulos.php" class="btn btn-warning">Articulos</a></p>
            </div>
        </div>
    </section>
    <?php } else { ?>
        <section class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2><?php echo $datosarticulo['articulo']; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./img/<?php echo $datosarticulo['imagen'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-8">
                    <h3><?php echo $datosarticulo['articulo']; ?></h3>
                    <div class="row">
                        <div class="col-8">
                            <p><?php echo $datosarticulo['descripcion'] ?></p>
                        </div>
                        <div class="col-4">
                            <p class="class">
                                <?php
                                $pre = number_format($datosarticulo['precio'],2, ',', '.')." €";
                                list($entera, $decimal) = explode(',', $pre);
                                echo $entera.",<small class='mark'>".$decimal."</small> €";
                                ?>
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="col">
                    <a href="./articulos.php" class="btn btn-warning">Volver...</a>
                </div>
            </div>
        </section>
        
        <?php 
        // consultar base de datos
        $consulta = "SELECT * FROM articulos WHERE categorias='" . $datosarticulo['categorias'] . "' AND id!=" . $datosarticulo['id'];
        $resultado = $conexion->query($consulta);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                $datosrelacionados = $resultado->fetch_all(MYSQLI_ASSOC);
            } else {
                $datosrelacionados = [];
            }
        }
        ?>
        <section class="container">
            <div class="row mt-5">
                <div class="col">
                    <h3>
                        <?php
                        if ($resultado->num_rows > 0) {
                            echo $datosarticulo['categorias'];
                        }
                        ?>
                    </h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-4">
                <?php 
                foreach ($datosrelacionados as $arti) { 
                ?>
                <div class="col">
                    <div class="card">
                        <img src="./img/<?php echo $arti['imagen']; ?>" alt="<?php echo $arti['imagen']; ?>" class="card-img-top">
                        <div class="card-body" data-categoria="<?php echo $arti['categorias']; ?>">
                        <h5 class="card-title">
                            <?php echo $arti['articulo']; ?>
                        </h5>
                        <a href="./articulo.php?codigoarticulo=<?php echo $arti['id']; ?>" class="btn btn-warning">Ver producto...</a>
                    </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <?php } ?>
    <script src=" /js/bootstrap.bundle.min.js""></script>
    <script type="module" src="./js/articulo.js"></script>
</body>
<?php 
$conexion->close();
?>
</html>