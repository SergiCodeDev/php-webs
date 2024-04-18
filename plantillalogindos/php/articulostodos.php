<?php
session_start();
include_once("config.php");
$basedatosconexion = new mysqli($servidorbd,$usuariobd,$contrabd,$basedatos);
if($basedatosconexion->connect_error) {
    $respuesta = "";
    echo json_encode($respuesta);
    exit;
}
$consulta = "SELECT * FROM articulos";
$resultado =$basedatosconexion->query($consulta);
if($resultado->num_rows>0) {
    $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);
} else {
    $respuesta= "";
}
$resultado->free_result();
$basedatosconexion->close();
echo json_encode($respuesta);
?>