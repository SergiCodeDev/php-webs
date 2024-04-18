<?php
session_start();
include_once("config.php");
$conexion = new mysqli($servidorbd,$usuariobd,$contrabd,$basedatos);

if( $conexion->connect_error ) {
    $datos = "Error";
} else {
    $consulta = "SELECT DISTINCT categorias FROM articulos";
    $resultado = $conexion->query($consulta);
    if( $resultado ) {
        if ( $resultado->num_rows == 0 ) {
            $datos = "";
        } else {
            $datos = $resultado->fetch_all(MYSQLI_ASSOC);
            $resultado->free_result();
        }
    } else {
        $datos = "";
    }
    $conexion->close();
    echo json_encode($datos);
}
?>