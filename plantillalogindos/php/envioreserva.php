<?php
define("RECAPTCHA_V3_SECRET_KEY", 'tu-clave-privada-de-recapcha');

if (isset($_POST['emailreserva']) && $_POST['emailreserva']) {
    $email = filter_var($_POST['emailreserva'], FILTER_SANITIZE_EMAIL);
} else {
    header('location: ../reservas.php');
    exit;
}
$token = $_POST['token'];
$action = $_POST['action'];
//llamar api rcapchat google
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
if ($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
    include_once ("./config.php");
    $conexion = new mysqli($servidorbd,$usuariobd,$contrabd,$basedatos);
    if ($conexion->connect_error) {
        echo json_encode("E0");
        exit;
    } else {
        $nombre = $_POST['nombrereserva'];
        $telefono = $_POST['telefonoreserva'];
        $fecha = $_POST['fechareserva'];
        $email = $_POST['emailreserva'];
        $adultos = $_POST['adultos'];
        $ninos = $_POST['ninos'];
        $menu = $_POST['menu'];
        $consulta = "INSERT INTO reservas (`nombre`, `telefono`, `fecha`, `email`, `adultos`, `ninos`, `menu`, `chequeado`,`confirmar`) 
        VALUES ('$nombre','$telefono','$fecha','$email', $adultos ,$ninos , $menu, 0,0)";
        $resultado = $conexion->query($consulta);
        if ($resultado) {
            $mensaje = "Nueva Reserva";
            $parae = "tuemail@bot.com";
            $asuntoe = "Cliente";
            $cabecera = "<strong>Nombre: <strong>" . $nombre . "<br>";
            $cabecera .= "<strong>Email: <strong>" . $email . "<br>";
            $cabecera .= "<strong>Reserva: <strong>" . $fecha . "<br>";
            $cabecera .= "<strong>Adultos: <strong>" . $adultos . "<br>";
            $cabecera .= "<strong>Niños: <strong>" . $ninos . "<br>";
            $cabecera .= "<strong>Menu: <strong>" . $menu . "<br>";
            $cabecera .= "From:web@bot.es\r\n";
            $retorno = mail($parae, $asuntoe, $mensaje, $cabecera);
            echo json_encode("OK");
            exit;
        } else {
            echo json_encode("E1");
            exit;
        }
    }
} else {
    echo json_encode("Error SPAM");
    exit;
}
?>