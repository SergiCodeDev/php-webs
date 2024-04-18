<?php
session_start();
if(!isset($_POST["nombrecompleto"]) || empty($_POST["nombrecompleto"])) {
    exit;
}
if(!isset($_POST["correof"]) || empty($_POST["correof"])) {
    exit;
}
if(!isset($_POST["asunto"]) || empty($_POST["asunto"])) {
    exit;
}
if(!isset($_POST["mansaje"]) || empty($_POST["mansaje"])) {
    exit;
}
if(!isset($_POST["chequeo1"]) || empty($_POST["chequeo1"])) {
    exit;
}

$nombrecompleto = htmlspecialchars(trim($_POST["nombrecompleto"]));
$correof = htmlspecialchars(trim($_POST["correof"]));
$asunto = htmlspecialchars(trim($_POST["asunto"]));
$mansaje = htmlspecialchars(trim($_POST["mansaje"]));
$chequeo = htmlspecialchars(trim($_POST["chequeo1"]));

$parae = "info@bootuno.test";
$asuntoe = $asunto;
$cabecera = "<strong>Nombre: </strong>".$nombrecompleto."<br>";
$cabecera .= "<strong>Email: </strong>".$correof."<br>";
$cabecera .= "<strong>Asunto: </strong>".$asuntoe."<br>";
$cabecera .= $mansaje;
$cabecera .= "From: web@bootuno.es\r\n";


$retorno = mail($parae,$asuntoe,$mansaje,$cabecera);
if($retorno==true) {
    echo json_encode("Mensaje Enviado");
} else {
    echo json_encode("Error en el envio");
}
?>