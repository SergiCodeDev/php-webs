<?php
session_start();
include_once("config.php");
if(!isset($_POST["email"]) || !isset($_POST["contra"])){
    echo json_encode("Error1");
    exit;
}
if(empty($_POST["email"]) ||  empty($_POST["contra"])){
    echo json_encode("Error2");
    exit;
}
if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)===FALSE){
    echo json_encode("Error3");
    exit;
}
$email = htmlspecialchars(trim($_POST["email"]));
$contra = md5(htmlspecialchars(trim($_POST["contra"])));

$basedatos = new mysqli($servidorbd,$usuariodb,$contradb,$basedatos);
if($basedatos->connect_error) {
    echo json_encode("Error4");
    exit;
}
$basedatos->set_charset("utf8");
$resultado = null;
//SELECT correo,contra FROM eliminamos contra no saldria en el crome 
if($consulta = $basedatos->prepare("SELECT correo,contra FROM usuarios WHERE correo=? AND contra=?")) {
$consulta->bind_param("ss" , $email,$contra);
$consulta->execute();
$consulta->store_result();
$resultado[0] = null;
$resultado[1] = null;
$consulta->bind_result($resultado[0],$resultado[1]);
if($consulta->num_rows===0) {
    $resultado = "Error5";
} else {
    session_regenerate_id();
    $_SESSION["Correcto"] = true;
    $_SESSION["email_usuario"] = $resultado[0];
    $_SESSION["fecha"] = date("d/m/Y");
}
$consulta->fetch();
$consulta->free_result();
$consulta->close();

}
echo json_encode($resultado);
$basedatos->close();
?>