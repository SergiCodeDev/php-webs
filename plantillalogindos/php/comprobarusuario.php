<?php
session_start();
if(!isset($_POST["correo"]) || !isset($_POST["contrasenya"])) {
    echo json_encode("Error");
    exit;
}
if(empty($_POST["correo"]) || empty($_POST["contrasenya"])) {
    echo json_encode("Error");
    exit;
}
if(filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)!=true) {
    echo json_encode("Error");
    exit;
}
include_once("config.php");
$basedatos = new mysqli($servidordb,$usuariodb,$contradb,$basedatos);
if($basedatos->connect_error) {
    echo json_encode("Error");
    exit;
}
$correousuario = htmlspecialchars(trim($_POST["correo"]));
$contrausuario = htmlspecialchars(trim(md5($_POST["contrasenya"])));
$consulta = "SELECT * FROM usuarios WHERE correo = '$correousuario' AND contra = '$contrausuario' LIMIT 1";
$resultado = $basedatos->query($consulta);
if($resultado->num_rows==0) {
    $devolucion[0]["Error"] = true;
} else {
    $devolucion = $resultado->fetch_all(MYSQLI_ASSOC);
    $_SESSION["logueado"] = true;
    $_SESSION["correo"] = $correousuario;
    $devolucion[0]["Error"] = false;
}
$resultado->free_result();
$basedatos->close();
echo json_encode ($devolucion);
?>