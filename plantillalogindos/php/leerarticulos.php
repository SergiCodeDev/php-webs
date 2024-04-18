<?php 
session_start();
if(!isset($_POST["tipo"])) {
    $tipo = 1;
}
$tipo = $_POST["tipo"];
include_once ("./config.php");
$basedatosconexion = new mysqli($servidorbd,$usuariobd,$contrabd,$basedatos);
if ($basedatosconexion ->connect_error) {
    $respuesta = "";
    exit;
}
$tipo = htmlspecialchars($tipo);
$consulta = "SELECT * FROM articulos WHERE destacado=$tipo";
$resultado = $basedatosconexion->query($consulta);
if($resultado->num_rows>0) {
    $respuesta = $resultado -> fetch_all(MYSQLI_ASSOC);
} else {
    $respuesta = "";
}
$resultado->free_result();
$basedatosconexion -> close();
echo json_encode($respuesta);
?>