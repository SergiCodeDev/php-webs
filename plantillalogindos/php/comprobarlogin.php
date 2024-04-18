<?php
session_start();

$datos = "";

if (!isset($_POST['correo']) || empty($_POST['correo']) || filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL) != true) {
    $datos = "Error 1";
} if (!isset($_POST['contrasenya']) || empty($_POST['contrasenya'])) {
    $datos = "Error 2";
}
include_once('config.php');
$basedatosconexion = new mysqli($servidorbd, $usuariobd, $contrabd, $basedatos);
if($basedatosconexion -> connect_error) {
    $datos = "Error 3";
} else {
    $correousuario = htmlspecialchars(trim($_POST['correo']));
    $contrausuario = htmlspecialchars(trim(md5($_POST['contrasenya'])));
    $consulta = "SELECT correo FROM usuarios WHERE correo = '$correousuario' AND contra = '$contrausuario' LIMIT 1";
    $resultado = $basedatosconexion -> query($consulta);
    if ($resultado) {
        if ($resultado->num_rows == 0) {
            $datos = "Error 4";
        } else {
            $datos = $resultado->fetch_assoc();
            $datos['error'] = false;
            $_SESSION['autenticado'] = true;
            $_SESSION['logueado'] = true;
            $_SESSION['correo'] = $correousuario;
            $_SESSION['error'] = false;
        }
        $resultado->free_result();
    } else {
        $datos = "Error 5";
    }
    $basedatosconexion->close();
}
echo json_encode($datos);
?>